<!-- public/partials/why_choose_us.php -->
<section class="section why-us" id="why-us">
    <div class="container">
        <div class="grid-2 align-center">
            <div class="text-content">
                <div class="section-label">Built to Scale</div>
                <h2 style="margin-bottom: 2rem;">Why Transition to Cirql?</h2>
                <ul class="why-bullets">
                    <li>
                        <div class="icon-circle"><i class="ph ph-rocket-launch"></i></div>
                        <div>
                            <h4>Multi-City Ready</h4>
                            <p>Built from day one to support multiple areas, cities, and expansive franchisee networks.</p>
                        </div>
                    </li>
                    <li>
                        <div class="icon-circle"><i class="ph ph-shield-check"></i></div>
                        <div>
                            <h4>Secure Payments</h4>
                            <p>Automated payment processing ends the nightmare of chasing manual transfers and accounting errors.</p>
                        </div>
                    </li>
                    <li>
                        <div class="icon-circle"><i class="ph ph-chart-line-up"></i></div>
                        <div>
                            <h4>Commission Optimization</h4>
                            <p>A business model that aligns with your growth; when you scale event volume, your revenue scales instantly.</p>
                        </div>
                    </li>
                </ul>
            </div>
            
            <div class="visual-content">
                <div class="abstract-globe">
                    <!-- CSS simulated globe effect -->
                    <div class="globe-ring r1"></div>
                    <div class="globe-ring r2"></div>
                    <div class="globe-ring r3"></div>
                    <div class="globe-dot d1"></div>
                    <div class="globe-dot d2"></div>
                    <div class="globe-dot d3"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.why-us {
    background-color: var(--bg-color);
}

.align-center {
    align-items: center;
}

.why-bullets li {
    display: flex;
    gap: 1.5rem;
    margin-bottom: 2rem;
}

.icon-circle {
    width: 48px;
    height: 48px;
    flex-shrink: 0;
    border-radius: 50%;
    background: rgba(255,255,255,0.05);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    color: var(--accent-primary);
    border: 1px solid rgba(255,255,255,0.1);
}

.why-bullets h4 {
    font-family: var(--font-display);
    font-size: 1.125rem;
    margin-bottom: 0.5rem;
}

.why-bullets p {
    font-size: 0.95rem;
    color: var(--text-secondary);
}

.abstract-globe {
    width: 400px;
    height: 400px;
    margin: 0 auto;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
}

.globe-ring {
    position: absolute;
    border-radius: 50%;
    border: 1px solid rgba(0, 255, 148, 0.2);
}

.r1 { width: 100%; height: 100%; }
.r2 { width: 70%; height: 70%; border: 1px dashed rgba(255, 255, 255, 0.2); }
.r3 { width: 40%; height: 40%; border: 1px solid rgba(0, 255, 148, 0.4); }

.globe-dot {
    position: absolute;
    width: 12px;
    height: 12px;
    background: var(--accent-primary);
    border-radius: 50%;
    box-shadow: var(--glow-accent);
}

.d1 { top: 15%; left: 30%; }
.d2 { bottom: 25%; right: 20%; background: #FFF;}
.d3 { top: 45%; left: 60%; }

@media (max-width: 992px) {
    .why-us .grid-2 { flex-direction: column-reverse; gap: 4rem; }
    .abstract-globe { width: 300px; height: 300px; }
}
</style>
