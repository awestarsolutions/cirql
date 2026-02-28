<!-- public/partials/timeline.php -->
<section class="section timeline" id="onboarding">
    <div class="container text-center">
        <div class="section-label">Onboarding Process</div>
        <h2 style="margin-bottom: 4rem;">From First Call to Live Platform</h2>
        
        <div class="timeline-wrapper">
            <div class="timeline-line"></div>
            
            <div class="timeline-step">
                <div class="step-dot"></div>
                <div class="step-time">Step 1</div>
                <h4>Schedule a Call</h4>
                <p>Book a consultation with our experts to explore Cirql's capabilities for your unique community.</p>
            </div>
            
            <div class="timeline-step">
                <div class="step-dot"></div>
                <div class="step-time">Step 2</div>
                <h4>Discuss Metrics</h4>
                <p>We analyze your active member count, revenue goals, and current operational bottlenecks.</p>
            </div>
            
            <div class="timeline-step">
                <div class="step-dot"></div>
                <div class="step-time">Step 3</div>
                <h4>Customization</h4>
                <p>Our team configures the platform features, localized payment gateways, and branding to fit your needs.</p>
            </div>
            
            <div class="timeline-step">
                <div class="step-dot highlight"></div>
                <div class="step-time highlight-text">Step 4</div>
                <h4>Launch</h4>
                <p>Go live with your new community OS, complete with dedicated admin training and rollout support.</p>
            </div>
            
        </div>
    </div>
</section>

<style>
.timeline {
    background-color: var(--surface-color);
}

.timeline-wrapper {
    display: flex;
    justify-content: space-between;
    position: relative;
    max-width: 1000px;
    margin: 0 auto;
    padding-top: 2rem;
}

.timeline-line {
    position: absolute;
    top: 2.75rem;
    left: 5%;
    right: 5%;
    height: 2px;
    background: rgba(255,255,255,0.1);
    z-index: 1;
}

.timeline-line::after {
    content: '';
    position: absolute;
    top: 0; left: 0;
    height: 100%;
    width: 100%; /* Represents current progress */
    background: linear-gradient(90deg, var(--accent-primary), transparent);
}

.timeline-step {
    flex: 1;
    position: relative;
    z-index: 2;
    padding: 0 1rem;
}

.step-dot {
    width: 24px;
    height: 24px;
    background: var(--surface-color);
    border: 4px solid #333;
    border-radius: 50%;
    margin: 0 auto 1.5rem auto;
    transition: border-color var(--transition-fast);
}

.step-dot.highlight {
    border-color: var(--accent-primary);
    box-shadow: 0 0 15px rgba(0, 255, 148, 0.4);
}

.step-time {
    font-family: var(--font-display);
    font-weight: 700;
    color: var(--text-secondary);
    font-size: 0.875rem;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    margin-bottom: 0.5rem;
}

.step-time.highlight-text {
    color: var(--accent-primary);
}

.timeline-step h4 {
    font-size: 1.125rem;
    margin-bottom: 0.5rem;
}

.timeline-step p {
    font-size: 0.875rem;
    color: var(--text-secondary);
    line-height: 1.4;
}

@media (max-width: 768px) {
    .timeline-wrapper {
        flex-direction: column;
        align-items: flex-start;
        padding-left: 2rem;
    }
    
    .timeline-line {
        top: 0; bottom: 0; left: 2.75rem;
        width: 2px; height: 100%; right: auto;
    }
    
    .timeline-line::after {
        background: linear-gradient(180deg, var(--accent-primary), transparent);
    }
    
    .timeline-step {
        text-align: left;
        margin-bottom: 2.5rem;
        padding-left: 3.5rem;
        width: 100%;
    }
    
    .step-dot {
        position: absolute;
        left: 0; top: 0;
        margin: 0;
    }
}
</style>
