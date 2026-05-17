<?php

require_once __DIR__ . '/config.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../reservation.php');
    exit;
}

// Sanitize inputs
function clean($value) {
    return htmlspecialchars(strip_tags(trim($value)));
}

$first_name = clean($_POST['first_name'] ?? '');
$last_name  = clean($_POST['last_name']  ?? '');
$email      = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
$phone      = clean($_POST['phone']  ?? '');
$date       = clean($_POST['date']   ?? '');
$time       = clean($_POST['time']   ?? '');
$guests     = clean($_POST['guests'] ?? '');
$notes      = clean($_POST['notes']  ?? '');

// Validation
$errors = [];
if (empty($first_name)) $errors[] = 'First name is required.';
if (empty($last_name))  $errors[] = 'Last name is required.';
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Invalid email address.';
if (empty($phone))  $errors[] = 'Phone number is required.';
if (empty($date))   $errors[] = 'Date is required.';
if (empty($time))   $errors[] = 'Time is required.';
if (empty($guests)) $errors[] = 'Number of guests is required.';

// Date must not be in the past
if (!empty($date) && strtotime($date) < strtotime(date('Y-m-d'))) {
    $errors[] = 'Please choose a future date.';
}

if (!empty($errors)) {
    // Redirect back with error
    header('Location: ../reservation.php?error=1');
    exit;
}

// Get user ID if logged in
$user_id = isset($_SESSION['user_id']) ? (int)$_SESSION['user_id'] : null;

// Insert into DB
$db   = getDB();
$stmt = $db->prepare(
    "INSERT INTO reservations (user_id, first_name, last_name, email, phone, date, time, guests, notes)
     VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)"
);
$stmt->bind_param(
    'issssssss',
    $user_id, $first_name, $last_name, $email, $phone, $date, $time, $guests, $notes
);

if ($stmt->execute()) {
    $stmt->close();
    $db->close();
    header('Location: ../reservation.php?success=1');
} else {
    $stmt->close();
    $db->close();
    header('Location: ../reservation.php?error=1');
}
exit;
?>
