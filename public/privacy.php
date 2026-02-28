<?php require_once __DIR__ . '/../config/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy | Cirql</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Outfit:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Phosphor Icons -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    
    <!-- Styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <style>
        .legal-content {
            padding: 160px 0 80px 0;
            max-width: 800px;
            margin: 0 auto;
            color: var(--text-secondary);
        }
        .legal-content h1 {
            color: var(--text-primary);
            font-size: 3rem;
            margin-bottom: 2rem;
            text-align: center;
        }
        .legal-content h2 {
            color: var(--text-primary);
            font-size: 1.5rem;
            margin-top: 3rem;
            margin-bottom: 1rem;
        }
        .legal-content p {
            margin-bottom: 1.5rem;
            line-height: 1.7;
        }
        .legal-content ul {
            margin-bottom: 1.5rem;
            margin-left: 1.5rem;
            line-height: 1.7;
        }
    </style>
</head>
<body>

    <?php include __DIR__ . '/partials/header.php'; ?>
    
    <main class="legal-content container">
        <h1>Privacy Policy</h1>
        <p>Last updated: <?php echo date('F j, Y'); ?></p>
        
        <h2>1. Information We Collect</h2>
        <p>We collect information you provide directly to us, such as when you create or modify your account, interact with customer support, or register for an offline community event.</p>
        <ul>
            <li><strong>Account Information:</strong> Name, email address, phone number, and organization details.</li>
            <li><strong>Transaction Information:</strong> Details related to event bookings and eCommerce purchases.</li>
        </ul>
        
        <h2>2. How We Use Your Information</h2>
        <p>We use the information we collect to operate and improve the Cirql platform, process transactions, send updates about event capacity, and provide customer support.</p>
        
        <h2>3. Information Sharing</h2>
        <p>We share limited participant data (like names and avatars) with Community Organizers and Hosts so they can manage their events. We do not sell your personal data to third-party marketers.</p>
        
        <h2>4. Data Security</h2>
        <p>We implement reasonable security measures to protect your information from unauthorized access or disclosure.</p>
        
        <h2>5. Your Rights</h2>
        <p>You may update or delete your account information at any time. If you wish to completely remove your data from our systems, please contact us at <?= CONTACT_EMAIL ?>.</p>
        
    </main>

    <?php include __DIR__ . '/partials/footer.php'; ?>

</body>
</html>
