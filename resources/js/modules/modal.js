/**
 * Global Modal and Lightbox Module
 */
export function initModals() {
    window.openServiceModal = (serviceKey) => {
        const modal = document.getElementById('service-modal');
        if (!modal || !window.serviceData || !window.serviceData[serviceKey]) return;
        const data = window.serviceData[serviceKey];
        
        document.getElementById('modal-service-img').src = data.img;
        document.getElementById('modal-service-title').textContent = window.translations[data.title_key] || data.title_key;
        document.getElementById('modal-service-desc').textContent = window.translations[data.desc_key] || data.desc_key;
        
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        document.body.style.overflow = 'hidden';
    };

    window.closeServiceModal = () => {
        const modal = document.getElementById('service-modal');
        if (modal) {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
            document.body.style.overflow = '';
        }
    };

    window.openLightbox = (src) => {
        const lb = document.getElementById('lightbox');
        const img = document.getElementById('lightbox-img');
        if (lb && img) {
            img.src = src;
            lb.classList.remove('hidden');
            lb.classList.add('flex');
            document.body.style.overflow = 'hidden';
        }
    };

    window.closeLightbox = () => {
        const lb = document.getElementById('lightbox');
        if (lb) {
            lb.classList.add('hidden');
            lb.classList.remove('flex');
            document.body.style.overflow = '';
        }
    };
}
