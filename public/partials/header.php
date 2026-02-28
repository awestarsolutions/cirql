<!-- public/partials/header.php -->
<header class="header">
    <div class="container header-container">
        <a href="/" class="logo">
            <img src="assets/images/cirql_header_white.png" alt="Cirql Logo" class="header-logo-img">
        </a>
        
        <nav class="nav-links">
            <a href="#problem">Problem</a>
            <a href="#features">Features</a>
            <a href="#modules">Modules</a>
            <a href="#pricing">Pricing</a>
            <a href="#admin">Admin</a>
            <a href="#why-us">Why Us</a>
            <a href="#onboarding">Timeline</a>
        </nav>
        
        <div class="header-cta">
            <a href="#demo" class="btn btn-primary btn-sm">Request Demo</a>
        </div>
    </div>
</header>
<style>
.header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 1000;
    background: rgba(5, 5, 5, 0.85);
    backdrop-filter: blur(12px);
    border-bottom: 1px solid rgba(255, 255, 255, 0.05);
    padding: 1rem 0;
}

.header-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-family: var(--font-display);
    font-weight: 800;
    font-size: 1.5rem;
    color: var(--text-primary);
}

.header-logo-img {
    height: 32px;
    width: auto;
}

.nav-links {
    display: none;
}

@media (min-width: 768px) {
    .nav-links {
        display: flex;
        gap: 1.5rem;
    }
    .nav-links a {
        font-weight: 500;
        font-size: 0.9rem;
        color: var(--text-secondary);
    }
    .nav-links a:hover {
        color: var(--text-primary);
    }
}

.btn-sm {
    padding: 10px 20px;
    font-size: 0.875rem;
}
</style>
