<?php
require_once __DIR__ . '/config/config.php';

// Form Handling Logic (Simple)
$formStatus = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'contact') {
    // Very basic sanitization/validation
    $name = htmlspecialchars($_POST['name'] ?? '');
    $email = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
    $org = htmlspecialchars($_POST['organization'] ?? '');
    $message = htmlspecialchars($_POST['message'] ?? '');
    
    if (filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($name)) {
        // Implement mail logic
        $to = "ashishawasthiwork@gmail.com";
        $subject = "New Cirql Lead: $org";
        $headers = "From: no-reply@cirql.example.com\r\n";
        $headers .= "Reply-To: $email\r\n";
        $body = "Name: $name\nEmail: $email\nOrganization: $org\n\nMessage:\n$message";
        
        mail($to, $subject, $body, $headers);
        
        $formStatus = 'success';
    } else {
        $formStatus = 'error';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cirql | The Operating System for Real-World Communities</title>
    <meta name="description" content="Centralize local meetups, recurring sessions, structured events, and commerce into a single revenue-generating platform. Designed for community builders and organizers.">
    
    <!-- Open Graph Data -->
    <meta property="og:title" content="Cirql - Community Coordination Platform">
    <meta property="og:description" content="Turn your fragmented group chats into a scalable community business.">
    <meta property="og:type" content="website">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Outfit:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Phosphor Icons for crisp minimal icons -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    
    <!-- Styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <!-- Optional: Add a smooth scroll JS if needed, or rely on CSS -->
    <style> html { scroll-behavior: smooth; } </style>
</head>
<body>

    <?php include __DIR__ . '/partials/header.php'; ?>
    
    <main>
        <?php include __DIR__ . '/partials/hero.php'; ?>
        <?php include __DIR__ . '/partials/problem.php'; ?>
        <?php include __DIR__ . '/partials/solution.php'; ?>
        <?php include __DIR__ . '/partials/modules.php'; ?>
        <?php include __DIR__ . '/partials/revenue.php'; ?>
        <?php include __DIR__ . '/partials/admin.php'; ?>
        <?php include __DIR__ . '/partials/why_choose_us.php'; ?>
        <?php include __DIR__ . '/partials/timeline.php'; ?>
        <?php include __DIR__ . '/partials/contact.php'; ?>
    </main>

    <?php include __DIR__ . '/partials/footer.php'; ?>

</body>
</html>
