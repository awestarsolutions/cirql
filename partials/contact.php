<!-- public/partials/contact.php -->
<section class="section contact" id="demo">
    <div class="container">
        
        <div class="cta-banner text-center">
            <h2 class="cta-title">Ready to Digitize and Monetize Your Community?</h2>
            <p style="margin: 0 auto 3rem auto; font-size: 1.25rem;">Transform your WhatsApp groups into a highly scalable business in under 5 weeks.</p>
        </div>

        <div class="contact-card">
            <div class="contact-info">
                <h3>Schedule a Consultation</h3>
                <p>Tell us about your organization's needs, and our team will prepare a custom platform overview designed for your specific community.</p>
                <div class="info-group">
                    <i class="ph ph-envelope-simple"></i>
                    <span>ashish@awestar.solutions</span>
                </div>
                <div class="info-group">
                    <i class="ph ph-phone"></i>
                    <span>8910223899</span>
                </div>
                <div class="info-group">
                    <i class="ph ph-map-pin"></i>
                    <span>Noida, Kolkata</span>
                </div>
            </div>
            
            <div class="contact-form-wrap">
                <?php if (isset($formStatus) && $formStatus === 'success'): ?>
                    <div class="alert alert-success">
                        <i class="ph-fill ph-check-circle"></i>
                        Thank you for your interest! We'll be in touch shortly.
                    </div>
                <?php else: ?>
                    <?php if (isset($formStatus) && $formStatus === 'error'): ?>
                        <div class="alert alert-error">
                            Please provide a valid name and email address.
                        </div>
                    <?php endif; ?>
                    
                    <form action="index.php#demo" method="POST" class="form">
                        <input type="hidden" name="action" value="contact">
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Full Name</label>
                                <input type="text" id="name" name="name" required placeholder="John Doe">
                            </div>
                            <div class="form-group">
                                <label for="organization">Organization / Club</label>
                                <input type="text" id="organization" name="organization" placeholder="e.g. Dubai Board Games Club">
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="email">Work Email</label>
                                <input type="email" id="email" name="email" required placeholder="john@example.com">
                            </div>
                            <div class="form-group">
                                <label for="city">City</label>
                                <input type="text" id="city" name="city" placeholder="e.g. Dubai">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="message">How can we help?</label>
                            <textarea id="message" name="message" rows="4" placeholder="Tell us about your current community setup..."></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary w-full" style="width: 100%">Request Demo</button>
                    </form>
                <?php endif; ?>
            </div>
        </div>

    </div>
</section>

<style>
.contact {
    background-color: var(--bg-color);
    padding-bottom: 120px;
}

.cta-banner {
    margin-bottom: 4rem;
}

.cta-title {
    font-size: clamp(2.5rem, 4vw, 3.5rem);
    background: linear-gradient(135deg, #FFF 0%, rgba(255,255,255,0.7) 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.contact-card {
    background: var(--surface-color);
    border: 1px solid rgba(255,255,255,0.05);
    border-radius: var(--border-radius-lg);
    display: flex;
    overflow: hidden;
    max-width: 1000px;
    margin: 0 auto;
}

.contact-info {
    flex: 1;
    background: rgba(255,255,255,0.02);
    padding: 4rem 3rem;
    border-right: 1px solid rgba(255,255,255,0.05);
}

.contact-info h3 {
    font-size: 1.75rem;
    margin-bottom: 1.5rem;
}

.contact-info p {
    font-size: 1rem;
    color: var(--text-secondary);
    margin-bottom: 2.5rem;
}

.info-group {
    display: flex;
    align-items: center;
    gap: 1rem;
    margin-bottom: 1rem;
    color: var(--text-primary);
}

.info-group i {
    color: var(--accent-primary);
    font-size: 1.25rem;
}

.contact-form-wrap {
    flex: 1.5;
    padding: 4rem 3rem;
    background: var(--bg-color);
}

.form-row {
    display: flex;
    gap: 1.5rem;
    margin-bottom: 1.5rem;
}

.form-group {
    flex: 1;
    display: flex;
    flex-direction: column;
    margin-bottom: 1.5rem;
}

.form-row .form-group {
    margin-bottom: 0;
}

.form-group label {
    font-family: var(--font-display);
    font-weight: 500;
    font-size: 0.875rem;
    margin-bottom: 0.5rem;
    color: var(--text-primary);
}

.form-group input,
.form-group textarea {
    background: rgba(255,255,255,0.03);
    border: 1px solid rgba(255,255,255,0.1);
    border-radius: 8px;
    padding: 14px 16px;
    color: var(--text-primary);
    font-family: var(--font-body);
    font-size: 1rem;
    transition: border-color var(--transition-fast);
}

.form-group input:focus,
.form-group textarea:focus {
    outline: none;
    border-color: var(--accent-primary);
    background: rgba(255,255,255,0.05);
}

.form-group input::placeholder,
.form-group textarea::placeholder {
    color: #666;
}

.alert {
    padding: 1rem 1.5rem;
    border-radius: 8px;
    font-size: 0.95rem;
    display: flex;
    align-items: center;
    gap: 0.75rem;
}

.alert-success {
    background: rgba(0, 255, 148, 0.1);
    color: var(--accent-primary);
    border: 1px solid rgba(0, 255, 148, 0.2);
}

.alert-error {
    background: rgba(248, 113, 113, 0.1);
    color: #F87171;
    border: 1px solid rgba(248, 113, 113, 0.2);
    margin-bottom: 2rem;
}

@media (max-width: 768px) {
    .contact-card { flex-direction: column; }
    .contact-info, .contact-form-wrap { padding: 2rem; border-right: none; }
    .form-row { flex-direction: column; gap: 1.5rem; margin-bottom: 0; }
    .form-row .form-group { margin-bottom: 1.5rem; }
}
</style>
