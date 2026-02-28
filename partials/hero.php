<!-- public/partials/hero.php -->
<section class="section hero" id="home">
    <div class="container hero-container animate-in">
        <div class="hero-content text-center">
            <div class="section-label">The Future of Local Coordination</div>
            <h1 class="hero-title">
                Transform Your Community Into a <br/>
                <span class="text-gradient">Revenue-Generating Platform</span>
            </h1>
            <p class="hero-subtitle">
                Centralize offline events, expert-led workshops, large-scale gatherings, and commerce — all in one powerful, scalable ecosystem built for modern community organizers.
            </p>
            <div class="hero-actions">
                <a href="#demo" class="btn btn-primary">Schedule Consultation</a>
                <a href="#features" class="btn btn-secondary">Explore Platform <i class="ph ph-arrow-right"></i></a>
            </div>
            
            <div class="hero-social-proof">
                <div class="avatars">
                    <img src="assets/images/avatar1.png" alt="User Avatar">
                    <img src="assets/images/avatar2.png" alt="User Avatar">
                    <img src="assets/images/avatar3.png" alt="User Avatar">
                </div>
                <span>Trusted by over <b>500+</b> community builders</span>
            </div>
        </div>
        

    </div>
</section>
<style>
.hero {
    padding-top: 180px;
    min-height: 100vh;
    display: flex;
    align-items: center;
    background: radial-gradient(circle at top, rgba(0, 255, 148, 0.05) 0%, rgba(5, 5, 5, 0) 60%);
}

.hero-title {
    margin-bottom: 1.5rem;
}

.hero-subtitle {
    margin: 0 auto 3rem auto;
    font-size: 1.25rem;
    color: var(--text-secondary);
}

.hero-actions {
    display: flex;
    gap: 1rem;
    justify-content: center;
    margin-bottom: 4rem;
}

.hero-social-proof {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 1rem;
    font-size: 0.875rem;
    color: var(--text-secondary);
}

.avatars {
    display: flex;
}

.avatars img {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    border: 2px solid var(--bg-color);
    margin-left: -10px;
}
.avatars img:first-child { margin-left: 0; }

.hero-visual {
    margin-top: 5rem;
    position: relative;
    height: 400px;
    display: flex;
    justify-content: center;
}

.mockup-placeholder {
    width: 100%;
    max-width: 800px;
    height: 100%;
    position: relative;
}

.glass-orb {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 300px;
    height: 300px;
    background: var(--accent-primary);
    border-radius: 50%;
    filter: blur(100px);
    opacity: 0.2;
}

.glass-card {
    position: relative;
    z-index: 2;
    width: 100%;
    height: 100%;
    background: linear-gradient(180deg, rgba(255, 255, 255, 0.03) 0%, rgba(255, 255, 255, 0.01) 100%);
    backdrop-filter: blur(20px);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 24px 24px 0 0;
    box-shadow: 0 -20px 40px rgba(0,0,0,0.5);
}

.mock-header {
    height: 60px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.05);
}
.mock-body {
    padding: 2rem;
    display: flex;
    gap: 1rem;
}

@media (max-width: 768px) {
    .hero-actions { flex-direction: column; }
    .hero-visual { height: 250px; margin-top: 3rem; }
}
</style>
