<section id="about" class="py-24 bg-white dark:bg-navy-dark overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 lg:px-10">
        <div class="flex flex-col lg:flex-row items-center gap-16">
            <!-- Image Side -->
            <div class="lg:w-1/2 relative flex justify-center items-center">
                <div class="relative z-10 rounded-[40px] overflow-hidden shadow-2xl w-full">
                    <img src="<?php echo e(asset('assets/img/img4 (2).jpg')); ?>" alt="Pristovia Team" class="w-full h-auto object-cover">
                </div>
                <!-- Decorative Elements (safe layering) -->
                <div class="pointer-events-none absolute inset-0 overflow-hidden">
                    <div class="absolute -top-10 -left-10 w-40 h-40 bg-primary/20 rounded-full blur-3xl"></div>
                    <div class="absolute -bottom-10 -right-10 w-64 h-64 bg-primary/10 rounded-full blur-3xl"></div>
                </div>
                <!-- Badge -->
                <div class="absolute top-1/2 -left-8 transform -translate-y-1/2 glass-card p-6 rounded-2xl shadow-xl hidden md:block z-20">
                    <div class="text-primary font-bold text-4xl mb-1">10+</div>
                    <div class="text-xs font-bold text-navy dark:text-white uppercase tracking-tighter">
                        Years of Excellence
                    </div>
                </div>
            </div>

            <!-- Content Side -->
            <div class="lg:w-1/2 space-y-8">
                <div class="space-y-4">
                    <h2 class="text-primary font-bold uppercase tracking-widest text-sm"><?php echo e(__('messages.about_title')); ?></h2>
                    <h3 class="text-4xl md:text-5xl font-montserrat font-extrabold text-navy dark:text-white leading-tight">
                        <?php echo e(__('messages.about_intro_title')); ?>

                    </h3>
                </div>

                <p class="text-lg md:text-xl text-gray-600 dark:text-gray-300 leading-relaxed font-medium">
                    <?php echo e(__('messages.about_intro_text')); ?>

                </p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="space-y-3">
                        <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center text-primary text-xl">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h4 class="font-bold text-navy dark:text-white uppercase tracking-widest text-sm">Reliability</h4>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Consistent, high-standard results for every commercial asset.</p>
                    </div>
                    <div class="space-y-3">
                        <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center text-primary text-xl">
                            <i class="fas fa-certificate"></i>
                        </div>
                        <h4 class="font-bold text-navy dark:text-white uppercase tracking-widest text-sm">Compliance</h4>
                        <p class="text-sm text-gray-500 dark:text-gray-400">WSIB compliant and $2M liability insurance for peace of mind.</p>
                    </div>
                </div>

                <div class="pt-8">
                    <a href="#quote" class="btn btn-outline" style="border: #C5A022 2px solid;">Discover Our Story</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH C:\xampp\htdocs\pristovia_property\resources\views/partials/sections/about.blade.php ENDPATH**/ ?>