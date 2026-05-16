<style>
.apple-dot {
    animation: pulseSoft 2.5s infinite ease-in-out;
}

@keyframes pulseSoft {
    0%, 100% {
        transform: translate(-50%, -50%) scale(1);
        box-shadow: 0 0 0 rgba(255,255,255,0.0);
    }
    50% {
        transform: translate(-50%, -50%) scale(1.08);
        box-shadow: 0 0 30px rgba(255,255,255,0.15);
    }
}

.apple-before {
    will-change: clip-path;
}

.apple-handle {
    will-change: left;
}
</style>

<section id="work" class="py-24 bg-white dark:bg-navy-dark overflow-hidden" x-data="{ activeCategory: 'all' }">
    <div class="max-w-7xl mx-auto px-6 lg:px-10">
        <div class="flex flex-col lg:flex-row justify-between items-end mb-16 gap-8 reveal active">
            <div class="max-w-2xl">
                <h2 class="text-primary font-bold uppercase tracking-widest text-xs mb-4">Evidence of Excellence</h2>
                <h3 class="text-4xl md:text-5xl font-montserrat font-extrabold text-navy dark:text-white uppercase tracking-tight">Project <span class="text-primary">Portfolio</span></h3>
            </div>
            <!-- Filters -->
            <div class="flex flex-wrap gap-2 md:gap-4">
                <button @click="activeCategory = 'all'" :class="activeCategory === 'all' ? 'bg-primary text-white shadow-glow' : 'bg-navy-light/5 dark:bg-white/5 text-navy dark:text-white'" class="px-8 py-3 rounded-full text-[10px] font-black uppercase tracking-widest transition-all">All Operations</button>
                <button @click="activeCategory = 'commercial'" :class="activeCategory === 'commercial' ? 'bg-primary text-white shadow-glow' : 'bg-navy-light/5 dark:bg-white/5 text-navy dark:text-white'" class="px-8 py-3 rounded-full text-[10px] font-black uppercase tracking-widest transition-all">Commercial</button>
                <button @click="activeCategory = 'post-con'" :class="activeCategory === 'post-con' ? 'bg-primary text-white shadow-glow' : 'bg-navy-light/5 dark:bg-white/5 text-navy dark:text-white'" class="px-8 py-3 rounded-full text-[10px] font-black uppercase tracking-widest transition-all">Post-Con</button>
                <button @click="activeCategory = 'exterior'" :class="activeCategory === 'exterior' ? 'bg-primary text-white shadow-glow' : 'bg-navy-light/5 dark:bg-white/5 text-navy dark:text-white'" class="px-8 py-3 rounded-full text-[10px] font-black uppercase tracking-widest transition-all">Exterior</button>
            </div>
        </div>

        <div class="mb-12 relative w-full aspect-[21/9] rounded-[40px] overflow-hidden border-8 border-navy-light/5 group select-none">

    <!-- Main Slider Container -->
<div 
    class="mb-12 relative w-full aspect-[21/9] rounded-[40px] overflow-hidden border-8 border-navy-light/5 group select-none cursor-ew-resize"
    x-data="{ 
        percent: 50, 
        isDragging: false,
        hint: true,
        move(e) {
            const rect = $el.getBoundingClientRect();
            const clientX = e.touches ? e.touches[0].clientX : e.clientX;
            let pos = ((clientX - rect.left) / rect.width) * 100;
            this.percent = Math.max(0, Math.min(100, pos));
            this.hint = false;
        }
    }"
    @mousedown="isDragging = true; hint = false"
    @mouseup="isDragging = false"
    @mouseleave="isDragging = false"
    @mousemove="isDragging && move($event)"
    @touchstart="isDragging = true; hint = false"
    @touchmove="move($event)"
    @touchend="isDragging = false"
>

    <!-- AFTER IMAGE -->
    <img src="{{ asset('assets/img/img10 (6).jpg') }}"
         class="absolute inset-0 w-full h-full object-cover z-0">

    <!-- BEFORE IMAGE -->
    <img src="{{ asset('assets/img/img10 (5).jpg') }}"
         class="absolute inset-0 w-full h-full object-cover z-10"
         :style="`clip-path: inset(0 ${100 - percent}% 0 0); transition: ${isDragging ? 'none' : 'clip-path 0.4s cubic-bezier(0.16, 1, 0.3, 1)'}`">

    <!-- SOFT OVERLAY -->
    <div class="absolute inset-0 bg-gradient-to-r from-black/20 via-transparent to-black/20 z-20 pointer-events-none"></div>

    <!-- 👉 HINT (INDICATOR) -->
    <div 
        x-show="hint"
        x-transition
        class="absolute top-6 left-1/2 -translate-x-1/2 z-40 glass-card px-5 py-2 rounded-full text-[9px] font-bold uppercase tracking-widest text-white/80 border border-white/20 backdrop-blur-md animate-pulse"
    >
        Drag to compare
    </div>

    <!-- HANDLE -->
    <div class="absolute top-0 h-full w-[2px] bg-white/80 z-30 transform -translate-x-1/2"
         :style="`left: ${percent}%; transition: ${isDragging ? 'none' : 'left 0.4s cubic-bezier(0.16, 1, 0.3, 1)'}`">

        <!-- HANDLE DOT -->
        <div class="absolute top-1/2 left-1/2 w-12 h-12 -translate-x-1/2 -translate-y-1/2 rounded-full bg-white/10 backdrop-blur-xl border border-white/40 flex items-center justify-center shadow-2xl">

            <div class="flex gap-1">
                <div class="w-0.5 h-4 bg-white/80 rounded-full"></div>
                <div class="w-0.5 h-4 bg-white/80 rounded-full"></div>
            </div>

        </div>

    </div>

</div>
    
    <!-- LABEL 
    <div class="absolute bottom-10 left-10 z-40 glass-card px-6 py-3 rounded-full text-[10px] font-black uppercase tracking-widest text-primary border border-primary/30 backdrop-blur-md">
        Enterprise Restoration
    </div>-->
</div>

        <!-- Masonry Grid -->
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-6" x-data="galleryModule()">
            @if(isset($gallery_images))
                @foreach($gallery_images as $index => $image)
                    @php
                        $cat = 'commercial';
                        if(strpos($image, 'img10 (16)') !== false || strpos($image, 'img10 (28)') !== false) $cat = 'post-con';
                        if(strpos($image, 'img10 (17)') !== false || strpos($image, 'img1') !== false) $cat = 'exterior';
                    @endphp
                    <div class="group relative aspect-[4/5] overflow-hidden rounded-[32px] cursor-pointer reveal active" 
                         x-show="(activeCategory === 'all' || activeCategory === '{{ $cat }}') && {{ $index }} < limit"
                         x-transition:enter="transition ease-out duration-500"
                         x-transition:enter-start="opacity-0 scale-90"
                         x-transition:enter-end="opacity-100 scale-100"
                         style="transition-delay: {{ ($index % 4) * 100 }}ms"
                         @click="openLightbox('{{ addslashes(asset($image)) }}')">
                        <img src="{{ asset($image) }}" alt="Pristovia Operation" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110" loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-navy via-navy/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex flex-col justify-end p-8">
                            <div class="w-10 h-10 rounded-xl bg-primary/20 backdrop-blur-md border border-primary/50 flex items-center justify-center text-primary text-lg mb-4">
                                <i class="fas fa-expand"></i>
                            </div>
                            <h5 class="text-white font-bold uppercase tracking-widest text-[9px] mb-1">GTA Division: {{ ucfirst($cat) }}</h5>
                            <p class="text-white/60 text-[8px] uppercase tracking-tighter">Verified Project Phase</p>
                        </div>
                    </div>
                @endforeach
            @endif

            <div class="col-span-2 md:col-span-3 lg:col-span-4 mt-16 text-center">
                 <button x-show="limit < {{ count($gallery_images ?? []) }}" @click="loadMore()" class="btn btn-outline" style="border: goldenrod 2px solid;">Load More Projects</button>
                 <button x-show="limit > 8" @click="showLess()" class="btn btn-outline ml-4">Show Less</button>
            </div>
        </div>
    </div>
</section>

<script>
let isDragging = false;

function moveAppleSlider(e) {

    const slider = e.currentTarget;

    const before = slider.querySelector('.apple-before');
    const handle = slider.querySelector('.apple-handle');

    if (!before || !handle) return;

    const rect = slider.getBoundingClientRect();

    const clientX = e.touches ? e.touches[0].clientX : e.clientX;

    let percent = ((clientX - rect.left) / rect.width) * 100;

    percent = Math.max(0, Math.min(100, percent));

    // Smooth easing (Apple-like feel)
    before.style.transition = "clip-path 0.15s cubic-bezier(0.25, 1, 0.5, 1)";
    handle.style.transition = "left 0.15s cubic-bezier(0.25, 1, 0.5, 1)";

    before.style.clipPath = `inset(0 ${100 - percent}% 0 0)`;
    handle.style.left = `${percent}%`;
}

// Enable drag state (optional but improves UX)
document.querySelectorAll('.mb-12.relative').forEach(slider => {

    slider.addEventListener('mousedown', () => isDragging = true);
    slider.addEventListener('mouseup', () => isDragging = false);
    slider.addEventListener('mouseleave', () => isDragging = false);

    slider.addEventListener('mousemove', (e) => {
        if (isDragging) moveAppleSlider(e);
    });

    slider.addEventListener('touchmove', moveAppleSlider, { passive: true });
});
</script>