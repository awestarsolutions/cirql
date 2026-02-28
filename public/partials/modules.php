<!-- public/partials/modules.php -->
<section class="section modules" id="modules">
    <div class="container">
        <div class="section-header text-center animate-in">
            <span class="section-label">Platform Modules</span>
            <h2>Powerful Tools for Every Use Case</h2>
            <p style="margin: 0 auto;">Everything you need to orchestrate and scale your community events, big or small.</p>
        </div>

        <div class="grid-3">
            <!-- Module 1: Community Coordination -->
            <div class="card module-card animate-in" style="animation-delay: 0.1s;">
                <span class="module-number">01</span>
                <h3>Community Games</h3>
                <p>Centralize your city's sports activity. Let players easily organize and join local matches, boosting engagement and community liquidity while the platform securely handles all capacity and payments.</p>
                <ul class="module-bullets">
                    <li><i class="ph-fill ph-check-circle"></i> Frictionless game booking & payments</li>
                    <li><i class="ph-fill ph-check-circle"></i> Dynamic slot auto-locking mechanism</li>
                    <li><i class="ph-fill ph-check-circle"></i> Built-in waitlist & refund logic</li>
                    <li><i class="ph-fill ph-check-circle"></i> Area-level community filtering</li>
                </ul>
            </div>

            <!-- Module 2: Tournaments -->
            <div class="card module-card animate-in" style="animation-delay: 0.2s;">
                <span class="module-number">02</span>
                <h3>Tournaments & Leagues</h3>
                <p>Host large-scale city-wide sports tournaments without the administrative nightmare. Offer fully digital registration, structured bracket management, and automated progression pathways.</p>
                <ul class="module-bullets">
                    <li><i class="ph-fill ph-check-circle"></i> Digital group & solo registrations</li>
                    <li><i class="ph-fill ph-check-circle"></i> Automated bracket generation</li>
                    <li><i class="ph-fill ph-check-circle"></i> Real-time live scoring & stats</li>
                    <li><i class="ph-fill ph-check-circle"></i> Effortless entry fee collection</li>
                </ul>
            </div>
            
            <!-- Module 3: Offline Expert-Led Events -->
            <div class="card module-card animate-in" style="animation-delay: 0.3s;">
                <span class="module-number">03</span>
                <h3>Offline Expert-Led Events</h3>
                <p>Elevate local experts, academies, and coaches. Give studio heads, sports coaches, and specialized hosts the tools they need to recruit participants and manage recurring batches effectively.</p>
                <ul class="module-bullets">
                    <li><i class="ph-fill ph-check-circle"></i> Verified expert coaching profiles</li>
                    <li><i class="ph-fill ph-check-circle"></i> Recurring coaching batch scheduling</li>
                    <li><i class="ph-fill ph-check-circle"></i> Automated upfront enrollment payments</li>
                    <li><i class="ph-fill ph-check-circle"></i> Direct, transparent revenue sharing</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<style>
.modules {
    background-color: #0A0A0A; /* Slightly varied dark tone */
    padding: var(--section-padding) 0;
}

.module-card {
    display: flex;
    flex-direction: column;
    height: 100%;
}

.module-number {
    font-family: var(--font-display);
    font-size: 1.25rem;
    color: var(--accent-primary);
    font-weight: 700;
    margin-bottom: 1.5rem;
    background: rgba(0, 255, 148, 0.1);
    width: 48px;
    height: 48px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border-radius: 12px;
    border: 1px solid rgba(0, 255, 148, 0.2);
}

.module-card h3 {
    margin-bottom: 1rem;
    font-size: 1.5rem;
}

.module-card p {
    font-size: 1rem;
    margin-bottom: 2rem;
    flex-grow: 1; /* Pushes list to bottom if cards vary in height */
}

.module-bullets {
    margin-top: auto;
}

.module-bullets li {
    display: flex;
    align-items: flex-start;
    gap: 0.75rem;
    margin-bottom: 0.75rem;
    color: var(--text-primary);
    font-size: 0.95rem;
    line-height: 1.4;
    font-weight: 500;
}

.module-bullets li:last-child {
    margin-bottom: 0;
}

.module-bullets i {
    color: var(--accent-primary);
    font-size: 1.25rem;
    flex-shrink: 0;
    margin-top: 2px;
}
</style>
