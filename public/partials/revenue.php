<!-- public/partials/revenue.php -->
<section class="section revenue" id="pricing">
    <div class="container text-center">
        <div class="section-label">Business Model</div>
        <h2>Clear, Scalable Monetization</h2>
        <p style="margin: 0 auto; margin-bottom: 4rem;">Host your games, offline small meetups in the community, tournaments, coaches, and e‑commerce. Platform takes a cut from everything except admin‑hosted tournaments, which retain 100% revenue.</p>

        <div class="revenue-table-wrapper">
            <table class="revenue-table">
                <thead>
                    <tr>
                        <th>Revenue Stream</th>
                        <th>Transaction Type</th>
                        <th>Platform Cut</th>
                        <th>Your Takeaway</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="stream-name"><i class="ph ph-calendar-check"></i> Games / Meetups</td>
                    <td>Per Participant Slot</td>
                    <td>Platform Cut</td>
                    <td>Host Earnings - Cut</td>
                    </tr>
                    <tr>
                        <td class="stream-name"><i class="ph ph-users-three"></i> Coaches & Workshops</td>
                    <td>Monthly / Weekly Batch</td>
                    <td>Platform Cut</td>
                    <td>Host Earnings - Cut</td>
                    </tr>
                    <tr>
                        <td class="stream-name"><i class="ph ph-ticket"></i> Tournaments (Admin Hosted)</td>
                    <td>Group / Individual Registration</td>
                    <td>0% (Admin Hosted)</td>
                    <td>100% Admin Revenue</td>
                    </tr>
                    <tr>
                        <td class="stream-name"><i class="ph ph-t-shirt"></i> Merchandise & Materials</td>
                        <td>Direct eCommerce Purchase</td>
                        <td>Platform Cut</td>
                        <td>Seller Earnings - Cut</td>
                    </tr>
                </tbody>
            </table>
        </div>
        
    </div>
</section>

<style>
.revenue {
    background: radial-gradient(circle at center, rgba(79, 70, 229, 0.1) 0%, var(--bg-color) 60%);
    position: relative;
}

.revenue-table-wrapper {
    background: rgba(18, 18, 18, 0.4);
    border: 1px solid rgba(255,255,255,0.05);
    border-radius: 24px;
    padding: 1rem;
    overflow-x: auto; /* for mobile */
    backdrop-filter: blur(10px);
}

.revenue-table {
    width: 100%;
    border-collapse: collapse;
    text-align: left;
}

.revenue-table th {
    padding: 1.5rem;
    font-family: var(--font-display);
    font-size: 0.875rem;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    color: var(--text-secondary);
    border-bottom: 1px solid rgba(255,255,255,0.05);
}

.revenue-table td {
    padding: 1.5rem;
    border-bottom: 1px solid rgba(255,255,255,0.02);
    font-weight: 500;
    color: var(--text-primary);
}

.revenue-table tr:last-child td {
    border-bottom: none;
}

.revenue-table tr:hover td {
    background: rgba(255,255,255,0.02);
}

.stream-name {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    font-family: var(--font-display);
    font-size: 1.125rem;
}

.stream-name i {
    color: var(--accent-primary);
    font-size: 1.5rem;
}

@media (max-width: 768px) {
    .revenue-table th, .revenue-table td {
        padding: 1rem;
        font-size: 0.875rem;
    }
    .stream-name { font-size: 1rem; flex-direction: column; align-items: flex-start; gap: 0.25rem; }
}
</style>
