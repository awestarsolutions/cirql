<!-- public/partials/problem.php -->
<section class="section problem" id="problem">
    <div class="container">
        <div class="section-header text-center">
            <div class="section-label">The Status Quo is Broken</div>
            <h2>Stop Running Your Business on WhatsApp</h2>
            <p style="margin: 0 auto">Fragmented groups, messy payments, and zero visibility are stunting your community's growth and bleeding revenue.</p>
        </div>

        <div class="grid-4 problem-grid">
            
            <div class="card problem-card">
                <div class="icon-wrap">
                    <i class="ph ph-chats-teardrop"></i>
                </div>
                <h3>Group Chaos</h3>
                <p>Hundreds of messages to fill a single gathering. Constant drop-outs, messy RSVPs, and no single source of truth.</p>
            </div>

            <div class="card problem-card">
                <div class="icon-wrap warning">
                    <i class="ph ph-wallet"></i>
                </div>
                <h3>Payment Hassles</h3>
                <p>Chasing members for money, managing spreadsheets, and losing track of who paid for what activity.</p>
            </div>

            <div class="card problem-card">
                <div class="icon-wrap">
                    <i class="ph ph-eye-slash"></i>
                </div>
                <h3>No Visibility</h3>
                <p>People outside your immediate network don't know you exist. No cross-category event discovery.</p>
            </div>

            <div class="card problem-card">
                <div class="icon-wrap danger">
                    <i class="ph ph-trend-down"></i>
                </div>
                <h3>Zero Growth Data</h3>
                <p>No analytics on fill rates, most active hours, or revenue drop-offs to optimize your business.</p>
            </div>

        </div>
    </div>
</section>

<style>
.problem {
    background-color: var(--surface-color);
    border-top: 1px solid rgba(255, 255, 255, 0.02);
    border-bottom: 1px solid rgba(255, 255, 255, 0.02);
}

.problem-card {
    background: var(--bg-color);
    border: 1px solid rgba(255,255,255,0.03);
    padding: 2rem;
}

.problem-card h3 {
    font-size: 1.25rem;
    margin-bottom: 0.75rem;
}

.problem-card p {
    font-size: 0.95rem;
    color: var(--text-secondary);
}

.icon-wrap {
    width: 48px;
    height: 48px;
    border-radius: 12px;
    background: rgba(255, 255, 255, 0.05);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    color: var(--text-primary);
    margin-bottom: 1.5rem;
}

.icon-wrap.warning {
    color: #FBBF24;
    background: rgba(251, 191, 36, 0.1);
}

.icon-wrap.danger {
    color: #F87171;
    background: rgba(248, 113, 113, 0.1);
}
</style>
