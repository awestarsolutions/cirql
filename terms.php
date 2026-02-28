<?php require_once __DIR__ . '/../config/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms of Service | Cirql</title>
    
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
        <h1>Terms of Service</h1>
        <p>Last updated: <?php echo date('F j, Y'); ?></p>
        
        <h2>1. Introduction</h2>
        <p>Welcome to Cirql. These Terms of Service govern your use of the Cirql platform, our website, and all related services provided by Cirql Inc.</p>
        
        <h2>2. Using the Platform</h2>
        <p>Cirql provides a generic offline community coordination engine. By using our platform to organize, host, or attend events, you agree to comply with all local laws and community guidelines. Hosts are solely responsible for the content and execution of their gatherings.</p>
        
        <h2>3. Payments and Commissions</h2>
        <p>Cirql acts as a payment facilitator for community events. We retain a percentage commission on paid transactions as outlined in our Business Model. Admin-hosted structured events may be exempt from standard platform fees subject to enterprise agreements.</p>
        
        <h2>4. User Accounts</h2>
        <p>You must provide accurate information when creating an account. You are responsible for safeguarding your password and for all activities that occur under your account.</p>
        
        <h2>5. Limitation of Liability</h2>
        <p>Cirql is not liable for any injuries, losses, or damages that occur during offline events organized through the platform. Attendees assume all risk associated with participation.</p>
        
        <h2>6. Changes to Terms</h2>
        <p>We may update these terms occasionally. Continued use of the platform after changes constitutes acceptance of the new terms.</p>
        
    </main>

    <?php include __DIR__ . '/partials/footer.php'; ?>

</body>
</html>
