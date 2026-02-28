<!-- public/partials/admin.php -->
<section class="section admin" id="admin">
    <div class="container text-center">
        <div class="section-label">Command Center</div>
        <h2 style="margin-bottom: 3rem;">Total Control & Analytics</h2>
        <p style="margin: 0 auto; margin-bottom: 5rem;">Don't fly blind. Get city-level insights and user moderation tools to scale your platform effectively.</p>

        <div class="admin-dashboard-mock">
            <!-- Simulated Sidebar -->
            <div class="dash-sidebar">
                <div class="dash-item active"></div>
                <div class="dash-item"></div>
                <div class="dash-item"></div>
                <div class="dash-item"></div>
            </div>
            
            <!-- Simulated Main Content -->
            <div class="dash-main">
                <div class="dash-header">
                    <div class="dash-title-block"></div>
                </div>
                <div class="dash-metrics grid-3" style="gap: 1rem;">
                    <div class="dash-card">
                        <span class="lbl">GMV</span>
                        <div class="val">$12.4k</div>
                    </div>
                    <div class="dash-card">
                        <span class="lbl">Active Users</span>
                        <div class="val">1,402</div>
                    </div>
                    <div class="dash-card">
                        <span class="lbl">Event Fill Rate</span>
                        <div class="val">84%</div>
                    </div>
                </div>
                <div class="dash-chart"></div>
            </div>
        </div>
        
    </div>
</section>

<style>
.admin {
    background-color: var(--surface-color);
}

.admin-dashboard-mock {
    width: 100%;
    max-width: 1000px;
    margin: 0 auto;
    height: 500px;
    background: #000;
    border-radius: 16px;
    border: 1px solid rgba(255,255,255,0.1);
    box-shadow: 0 40px 80px rgba(0,0,0,0.8);
    display: flex;
    overflow: hidden;
    position: relative;
}

.admin-dashboard-mock::after {
    content: '';
    position: absolute;
    top: 0; right: 0; bottom: 0; left: 0;
    background: linear-gradient(135deg, rgba(255,255,255,0.03) 0%, transparent 50%);
    pointer-events: none;
}

.dash-sidebar {
    width: 80px;
    background: #0A0A0A;
    border-right: 1px solid rgba(255,255,255,0.05);
    padding: 2rem 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 1.5rem;
}

.dash-item {
    width: 32px;
    height: 32px;
    border-radius: 8px;
    background: rgba(255,255,255,0.1);
}
.dash-item.active {
    background: var(--accent-primary);
}

.dash-main {
    flex: 1;
    padding: 2rem;
    display: flex;
    flex-direction: column;
    gap: 1.5rem;
}

.dash-header {
    height: 40px;
    border-bottom: 1px solid rgba(255,255,255,0.05);
    padding-bottom: 1rem;
}

.dash-title-block {
    width: 150px;
    height: 20px;
    background: rgba(255,255,255,0.1);
    border-radius: 4px;
}

.dash-card {
    background: rgba(255,255,255,0.03);
    border: 1px solid rgba(255,255,255,0.05);
    border-radius: 12px;
    padding: 1.5rem;
    text-align: left;
}

.dash-card .lbl {
    font-size: 0.75rem;
    color: var(--text-secondary);
    text-transform: uppercase;
    letter-spacing: 0.05em;
    display: block;
    margin-bottom: 0.5rem;
}

.dash-card .val {
    font-family: var(--font-display);
    font-size: 2rem;
    color: var(--text-primary);
}

.dash-chart {
    flex: 1;
    background: rgba(255,255,255,0.02);
    border-radius: 12px;
    border: 1px solid rgba(255,255,255,0.05);
    position: relative;
    overflow: hidden;
}

.dash-chart::before {
    content: '';
    position: absolute;
    bottom: 0; left: 0; right: 0; height: 100px;
    background: linear-gradient(0deg, rgba(0, 255, 148, 0.2) 0%, transparent 100%);
}

@media (max-width: 768px) {
    .admin-dashboard-mock { height: auto; flex-direction: column; }
    .dash-sidebar { width: 100%; height: 60px; flex-direction: row; justify-content: center; padding: 0; align-items: center; border-right: none; border-bottom: 1px solid rgba(255,255,255,0.05); }
    .dash-chart { height: 200px; }
}
</style>
