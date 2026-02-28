<!-- public/partials/footer.php -->
<footer class="footer">
    <div class="container">
        <div class="footer-top">
            <div class="footer-brand">
                <a href="/" class="logo" style="margin-bottom: 1rem; display: inline-block;">
                    <img src="assets/images/cirql_square_white.png" alt="Cirql Logo Mark" style="height: 80px; width: auto; border-radius: 12px;">
                </a>
                <p>The unified operating system designed to turn fragmented real-world communities into profitable, scalable businesses.</p>
            </div>
            
            <div class="footer-links">
                <div class="link-col">
                    <h4>Platform</h4>
                    <a href="#modules">Marketplace</a>
                    <a href="#modules">Sessions</a>
                    <a href="#modules">Events</a>
                    <a href="#modules">Commerce</a>
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p><?php echo date('Y'); ?>. Cirql by <a href="https://awestar.solutions">Awestar.solutions</a></p>
            <div class="legal-links">
                <a href="/privacy.php">Privacy Policy</a>
                <a href="/terms.php">Terms of Service</a>
            </div>
        </div>
    </div>
</footer>

<style>
.footer {
    background: #000;
    padding: 80px 0 40px;
    border-top: 1px solid rgba(255,255,255,0.05);
}

.footer-top {
    display: flex;
    justify-content: space-between;
    gap: 4rem;
    margin-bottom: 4rem;
    flex-wrap: wrap;
}

.footer-brand {
    max-width: 400px;
}

.footer-brand p {
    margin-top: 1.5rem;
    font-size: 0.95rem;
}

.footer-links {
    display: flex;
    gap: 4rem;
}

.link-col h4 {
    color: #FFF;
    font-size: 1.125rem;
    margin-bottom: 1.5rem;
}

.link-col a {
    display: block;
    color: var(--text-secondary);
    margin-bottom: 0.75rem;
    font-size: 0.95rem;
}

.link-col a:hover {
    color: var(--accent-primary);
}

.footer-bottom {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-top: 2rem;
    border-top: 1px solid rgba(255,255,255,0.05);
    color: var(--text-secondary);
    font-size: 0.875rem;
}

.legal-links {
    display: flex;
    gap: 1.5rem;
}

@media (max-width: 768px) {
    .footer-top { flex-direction: column; gap: 3rem; }
    .footer-links { flex-direction: column; gap: 2rem; }
    .footer-bottom { flex-direction: column; text-align: center; gap: 1rem; }
}
</style>
