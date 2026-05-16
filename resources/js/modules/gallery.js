/**
 * Portfolio and Comparison Slider Module
 */
export default function galleryModule() {
    return {
        limit: 8,
        activeCategory: 'all',
        openLightbox(src) {
            window.openLightbox(src);
        },
        loadMore() {
            this.limit += 8;
        },
        showLess() {
            this.limit = 8;
            const el = document.getElementById('work');
            if (el) window.scrollTo({ top: el.offsetTop - 100, behavior: 'smooth' });
        }
    };
}

export function initComparisonSlider() {
    const slider = document.getElementById('result-slider');
    if (slider) {
        const handle = slider.querySelector('.comparison-handle');
        const afterImg = slider.querySelector('.comparison-after');
        const move = (e) => {
            const rect = slider.getBoundingClientRect();
            let x = ((e.pageX ?? e.touches[0].pageX) - rect.left - window.scrollX) / rect.width * 100;
            x = Math.max(0, Math.min(100, x));
            handle.style.left = `${x}%`;
            afterImg.style.clipPath = `inset(0 0 0 ${x}%)`;
        };
        slider.addEventListener('mousemove', move);
        slider.addEventListener('touchmove', move, { passive: true });
    }
}
