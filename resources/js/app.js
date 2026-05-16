import Alpine from 'alpinejs';
import collapse from '@alpinejs/collapse';
import quoteWizard from './modules/wizard';
import galleryModule, { initComparisonSlider } from './modules/gallery';
import { initModals } from './modules/modal';
import reviewsModule from './modules/comments';

// Core Configuration
Alpine.plugin(collapse);
window.Alpine = Alpine;

// Module Initialization
document.addEventListener('alpine:init', () => {
    Alpine.data('quoteWizard', quoteWizard);
    Alpine.data('galleryModule', galleryModule);
    Alpine.data('reviewsModule', reviewsModule);
    
    // Bubble system (Institutional background effect)
    Alpine.data('bubbleSystem', () => ({
        bubbles: [],
        maxBubbles: window.innerWidth > 768 ? 5 : 0,
        init() {
            if (this.maxBubbles > 0) {
                setInterval(() => this.createBubble(), 8000);
            }
        },
        createBubble() {
            if (this.bubbles.length >= this.maxBubbles) return;
            const id = Date.now();
            this.bubbles.push({
                id,
                style: `width: 30px; height: 30px; left: ${Math.random() * 100}vw; animation: float 20s linear infinite`
            });
            setTimeout(() => { this.bubbles = this.bubbles.filter(b => b.id !== id); }, 20000);
        }
    }));
});

// DOM Ready Hooks
document.addEventListener('DOMContentLoaded', () => {
    initModals();
    initComparisonSlider();
    
    // Reveal Observer
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) entry.target.classList.add('active');
        });
    }, { threshold: 0.1 });
    document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
});

Alpine.start();
