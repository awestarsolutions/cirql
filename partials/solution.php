<!-- public/partials/solution.php -->
<section class="section solution" id="features">
    <div class="container text-center">
        <div class="section-label">The Cirql Solution</div>
        <h2 style="margin-bottom: 4rem;">One Unified Community Engine</h2>

        <div class="grid-3 feature-grid">
            
            <div class="feature-item animate-in">
                <div class="feature-icon"><i class="ph ph-calendar-plus"></i></div>
                <h3>Event Marketplace</h3>
                <p>Allow verified community members to host and join activities instantly with secure, automated capacity tracking.</p>
            </div>

            <div class="feature-item animate-in" style="animation-delay: 0.1s;">
                <div class="feature-icon"><i class="ph ph-chalkboard-teacher"></i></div>
                <h3>Host-led Sessions</h3>
                <p>Empower experts to manage profiles, organize recurring batches, and bulk-enroll participants seamlessly.</p>
            </div>

            <div class="feature-item animate-in" style="animation-delay: 0.2s;">
                <div class="feature-icon"><i class="ph ph-ticket"></i></div>
                <h3>Structured Events</h3>
                <p>Run full-scale festivals, competitions, or multi-day conventions with digital ticketing.</p>
            </div>

            <div class="feature-item animate-in" style="animation-delay: 0.3s;">
                <div class="feature-icon"><i class="ph ph-activity"></i></div>
                <h3>Activity Feed</h3>
                <p>System-generated updates keeping members engaged with trending meetups and full capacities.</p>
            </div>

            <div class="feature-item animate-in" style="animation-delay: 0.4s;">
                <div class="feature-icon"><i class="ph ph-storefront"></i></div>
                <h3>eCommerce Integration</h3>
                <p>Sell physical materials, tickets, or merchant gear directly to your captive audience.</p>
            </div>

            <div class="feature-item animate-in" style="animation-delay: 0.5s;">
                <div class="feature-icon"><i class="ph ph-chart-bar"></i></div>
                <h3>Admin Analytics</h3>
                <p>Track city-level growth, manage revenue streams, and moderate all platform activity.</p>
            </div>

        </div>
    </div>
</section>

<style>
.solution {
    background-color: var(--bg-color);
}

.feature-item {
    padding: 2.5rem;
    border-radius: var(--border-radius-lg);
    background: linear-gradient(180deg, rgba(255,255,255,0.03) 0%, rgba(255,255,255,0) 100%);
    border: 1px solid rgba(255,255,255,0.02);
    text-align: left;
    transition: transform var(--transition-normal);
}

.feature-item:hover {
    transform: translateY(-8px);
    background: linear-gradient(180deg, rgba(255,255,255,0.05) 0%, rgba(255,255,255,0) 100%);
    border-color: rgba(255,255,255,0.08);
}

.feature-icon {
    width: 56px;
    height: 56px;
    border-radius: 16px;
    background: var(--accent-primary);
    color: var(--bg-color);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.75rem;
    margin-bottom: 2rem;
    box-shadow: var(--glow-accent);
}

.feature-item h3 {
    margin-bottom: 1rem;
    font-size: 1.35rem;
}

.feature-item p {
    font-size: 0.95rem;
    color: var(--text-secondary);
}
</style>
