
<style>
    html {
    scroll-behavior: smooth;
}
    @keyframes fadeInSoft {
    0% {
        opacity: 0;
        transform: scale(0.98) translateY(12px);
        filter: blur(6px);
    }
    100% {
        opacity: 1;
        transform: scale(1) translateY(0);
        filter: blur(0);
    }
}

.animate-fadeIn {
    animation: fadeInSoft 0.4s cubic-bezier(0.16, 1, 0.3, 1);
}

@keyframes marquee {
    0% {
        transform: translateX(0);
    }
    100% {
        transform: translateX(-50%);
    }
}

</style>

<section class="py-24 bg-neutral-light dark:bg-navy relative overflow-hidden">
    <!-- Decorative quote mark -->
    <div class="absolute -top-10 -left-10 text-[300px] text-primary/5 font-serif select-none">&ldquo;</div>

    <div class="max-w-7xl mx-auto px-6 lg:px-10">
        <div class="text-center mb-16">
            <h2 class="text-primary font-bold uppercase tracking-widest text-sm mb-4"><?php echo e(__('messages.testimonials_title')); ?></h2>
            <h3 class="text-4xl md:text-5xl font-montserrat font-extrabold text-navy dark:text-white uppercase">Client Success Stories</h3>
        </div>

        <div class="flex gap-6 overflow-x-auto scroll-smooth snap-x snap-mandatory px-4 md:px-0 pb-12 scrollbar-hide">
            <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="glass-card p-8 rounded-[32px] border-primary/10 flex flex-col w-full sm:w-full md:w-[45%] lg:w-[30%] flex-shrink-0 snap-center">
                    <div class="flex text-primary mb-6 gap-1">
                        <?php for($i = 0; $i < 5; $i++): ?>
                            <i class="fas fa-star text-xs"></i>
                        <?php endfor; ?>
                    </div>

                    <p class="text-gray-600 dark:text-gray-300 italic mb-8 flex-grow leading-relaxed">
                        &ldquo;<?php echo e($review->text); ?>&rdquo;
                    </p>

                    <div class="flex items-center gap-4 border-t border-navy/5 dark:border-white/5 pt-6">
                        <div class="w-12 h-12 bg-primary/20 rounded-full flex items-center justify-center text-primary font-bold">
                            <?php echo e(substr($review->name, 0, 1)); ?>

                        </div>

                        <div>
                            <h4 class="font-bold text-navy dark:text-white text-sm uppercase tracking-wider">
                                <?php echo e($review->name); ?>

                            </h4>
                            <p class="text-[10px] text-primary font-bold uppercase tracking-tighter">
                                <?php echo e($review->role); ?>

                            </p>
                        </div>
                    </div>
                </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>

        <!-- Review Form Button -->
        <div class="mt-12 text-center">
    <button 
    onclick="showCustomPopup()"
    class="btn btn-outline border-2 border-primary text-primary hover:bg-primary hover:text-white transition-all duration-300 rounded-2xl px-8 py-4 shadow-lg hover:shadow-primary/30" style="border: goldenrod 2px solid;">
    Submit Your Feedback 
    </button>

            <!-- Custom Popup -->
            <div 
                id="custom-popup"
                class="fixed inset-0 bg-black/60 backdrop-blur-sm hidden items-center justify-center z-[9999] p-6">

                <div class="relative bg-white dark:bg-navy rounded-[32px] p-10 shadow-2xl border border-primary/20 overflow-hidden animate-fadeIn">

                    <!-- Glow -->
                    <div class="absolute -top-10 -right-10 w-40 h-40 bg-primary/20 rounded-full blur-3xl"></div>

                    <!-- Icon -->
                    <div class="relative z-10 flex justify-center mb-6">
                        <div class="w-20 h-20 rounded-full bg-primary/10 flex items-center justify-center text-primary text-4xl shadow-lg">
                            <i class="fas fa-info-circle"></i>
                        </div>
                    </div>

                    <!-- Title -->
                    <div class="relative z-10 text-center mb-4">
                        <h3 class="text-3xl font-black text-navy dark:text-white uppercase">
                            Notice
                        </h3>
                    </div>

                    <!-- Message -->
                    <div class="relative z-10 text-center mb-8">
                        <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                            Review submissions are temporarily suspended.<br>
                            Please try again later.
                        </p>
                    </div>

                    <!-- Button -->
                    <div class="relative z-10 text-center">
                        <button
                            onclick="closeCustomPopup()"
                            class="btn btn-primary px-8 py-3 rounded-2xl">
                            Close
                        </button>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>

<script>

function showCustomPopup() {

    const popup = document.getElementById('custom-popup');

    popup.classList.remove('hidden');
    popup.classList.add('flex');

    document.body.style.overflow = 'hidden';
}

function closeCustomPopup() {

    const popup = document.getElementById('custom-popup');

    popup.classList.remove('flex');
    popup.classList.add('hidden');

    document.body.style.overflow = 'auto';
}

// Close outside click
document.getElementById('custom-popup').addEventListener('click', function(e) {

    if (e.target === this) {
        closeCustomPopup();
    }

});

</script><?php /**PATH C:\xampp\htdocs\pristovia_property\resources\views/partials/sections/testimonials.blade.php ENDPATH**/ ?>