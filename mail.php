<?php
// Minimal mail handler with redirects (success -> thankyou.php, errors -> contact.php?error=...)

error_reporting(0);
ini_set('display_errors', 0);

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  header('Location: contact.php?error=' . urlencode('Method not allowed.'));
  exit;
}

require __DIR__ . '/PHPMailer/Exception.php';
require __DIR__ . '/PHPMailer/PHPMailer.php';
require __DIR__ . '/PHPMailer/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Inputs (sanitised lightly)
$clean = fn($k, $f = FILTER_SANITIZE_SPECIAL_CHARS) => trim(filter_input(INPUT_POST, $k, $f) ?? '');
$name     = $clean('name');
$emailRaw = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$email    = filter_var($emailRaw, FILTER_VALIDATE_EMAIL) ? $emailRaw : '';
$phone    = preg_replace('/\D+/', '', $clean('contact')); // digits only
$company  = $clean('company');
$country  = $clean('country');
$subjectI = $clean('subject');
$message  = trim($_POST['message'] ?? '');

if ($name === '' || $email === '' || $phone === '' || $company === '' || $country === '' || $subjectI === '' || $message === '') {
  header('Location: contact.php?error=' . urlencode('Please fill all required fields.'));
  exit;
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  header('Location: contact.php?error=' . urlencode('Please enter a valid email address.'));
  exit;
}
if (strlen($phone) < 7) {
  header('Location: contact.php?error=' . urlencode('Please enter a valid phone number.'));
  exit;
}

// Build email body
$e = fn($s) => htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8');
$subject = $subjectI !== '' ? $subjectI : 'New Contact Form Submission';

$body = '
<!doctype html>
<html><head><meta charset="utf-8"></head>
<body style="margin:0;padding:0;background:#f7f7f7;font-family:Arial,Helvetica,sans-serif;">
  <div style="max-width:520px;margin:24px auto;background:#fff;border-top:4px solid #245ba8;padding:24px;color:#333;">
    <h2 style="margin:0 0 16px;color:#245ba8;">New Contact Form Submission</h2>
    <p><strong>Name:</strong> '.$e($name).'</p>
    <p><strong>Email:</strong> '.$e($email).'</p>
    <p><strong>Phone:</strong> '.$e($phone).'</p>
    <p><strong>Company:</strong> '.$e($company).'</p>
    <p><strong>Country:</strong> '.$e($country).'</p>
    <p><strong>Subject:</strong> '.$e($subjectI).'</p>
    <p><strong>Message:</strong><br>'.nl2br($e($message)).'</p>
  </div>
</body></html>';

$alt  = "New Contact Form Submission\n";
$alt .= "Name: $name\nEmail: $email\nPhone: $phone\nCompany: $company\nCountry: $country\nSubject: $subjectI\n\nMessage:\n$message\n";

// Send via PHPMailer (fill in your credentials)
$mail = new PHPMailer(true);
try {
  $mail->isSMTP();
  $mail->Host       = 'smtp.gmail.com';
  $mail->SMTPAuth   = true;
  $mail->Username   = 'jaymodihbsoftweb@gmail.com'; // <- your Gmail
  $mail->Password   = 'vusdsanpzgmztovr';            // <- your Gmail App Password
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // or ENCRYPTION_SMTPS with Port 465
  $mail->Port       = 587;

  $mail->setFrom('jaymodihbsoftweb@gmail.com', 'Website Contact'); // from address/name
  $mail->addAddress('jaymodihbsoftweb@gmail.com', 'LNK Asia');        // recipient
  if ($email) $mail->addReplyTo($email, ($name ?: 'Website User'));

  $mail->isHTML(true);
  $mail->Subject = $subject;
  $mail->Body    = $body;
  $mail->AltBody = $alt;

  $mail->send();

  // ✅ success -> thank-you page
  header('Location: thankyou.php');
  exit;

} catch (Exception $ex) {
  // ❌ failure -> back with toast error
  header('Location: contact.php?error=' . urlencode('We couldn’t send your message. Please try again.'));
  exit;
}
