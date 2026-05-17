<?php
require_once __DIR__ . '/config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../contact.php');
    exit;
}

function clean($value) {
    return htmlspecialchars(strip_tags(trim($value)));
}

$first_name = clean($_POST['first_name'] ?? '');
$last_name  = clean($_POST['last_name']  ?? '');
$email      = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
$subject    = clean($_POST['subject']  ?? '');
$message    = clean($_POST['message']  ?? '');

// Validation
if (
    empty($first_name) || empty($last_name) ||
    !filter_var($email, FILTER_VALIDATE_EMAIL) ||
    empty($subject) || empty($message)
) {
    header('Location: ../contact.php?error=1');
    exit;
}

$db   = getDB();
$stmt = $db->prepare(
    "INSERT INTO contact_messages (first_name, last_name, email, subject, message)
     VALUES (?, ?, ?, ?, ?)"
);
$stmt->bind_param('sssss', $first_name, $last_name, $email, $subject, $message);

if ($stmt->execute()) {
    $stmt->close();
    $db->close();
    header('Location: ../contact.php?success=1');
} else {
    $stmt->close();
    $db->close();
    header('Location: ../contact.php?error=1');
}
exit;
?>
