<?php $__env->startSection('title', 'Residential Cleaning Services GTA | Pristovia'); ?>
<?php $__env->startSection('description', 'Premium residential cleaning services in Toronto, Mississauga, Vaughan and GTA. Reliable, detailed and trusted home cleaning solutions.'); ?>

<?php $__env->startSection('content'); ?>

<!-- HERO -->
<section class="relative py-40 bg-navy text-white overflow-hidden">
    <div class="absolute inset-0 opacity-20">
        <img 
            src="<?php echo e(asset('assets/img/img10 (14).jpg')); ?>" class="w-full h-full object-cover scale-110 animate-pulse-slow" 
            alt="Residential Cleaning"
            class="w-full h-full object-cover scale-110 animate-pulse-slow"
        >
        <div class="absolute inset-0 bg-gradient-to-b from-navy/40 to-navy"></div>
    </div>

    <div class="max-w-7xl mx-auto px-6 lg:px-10 relative z-10 text-center">

        <div class="inline-block bg-primary/20 backdrop-blur-md px-6 py-2 rounded-full mb-8 border border-primary/30">
            <span class="text-primary text-xs font-black uppercase tracking-[0.3em]">
                Home Care Specialists
            </span>
        </div>

        <h1 class="text-5xl md:text-8xl font-montserrat font-black mb-8 uppercase tracking-tighter leading-[0.9]">
            Residential <br>
            <span class="text-primary">Cleaning</span>
        </h1>

        <p class="text-xl md:text-2xl text-gray-300 max-w-4xl mx-auto mb-12 font-medium">
            Premium home cleaning services designed for comfort, hygiene, and peace of mind across Toronto & the Greater Toronto Area.
        </p>

        <div class="flex flex-col sm:flex-row justify-center gap-6">
            <a href="#quote" class="btn btn-primary !px-16">
                Book Home Cleaning
            </a>

            <a href="tel:+14376611132"
               class="btn btn-outline !border-white !text-white !px-16 hover:!bg-white hover:!text-navy" style="border: white 2px solid;">
                Call Now
            </a>
        </div>

    </div>
</section>

<!-- CONTENT -->
<section class="py-24 bg-white dark:bg-navy-dark">

    <div class="max-w-7xl mx-auto px-6 lg:px-10">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-24 items-center">

            <!-- LEFT -->
            <div class="space-y-10">

                <div class="space-y-4">
                    <h2 class="text-primary font-bold uppercase tracking-widest text-xs">
                        Everyday Excellence
                    </h2>

                    <h3 class="text-4xl font-montserrat font-black text-navy dark:text-white uppercase tracking-tight">
                        A Cleaner Home<br>& Healthier Living
                    </h3>
                </div>

                <p class="text-lg text-gray-500 dark:text-gray-400 leading-relaxed font-medium">
                    We provide detailed residential cleaning tailored for apartments, condos, and houses. Our goal is to maintain a spotless, healthy, and welcoming living environment for you and your family.
                </p>

                <!-- FEATURES -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-10">

                    <div class="space-y-4">
                        <div class="w-10 h-10 rounded-xl bg-primary/10 flex items-center justify-center text-primary">
                            <i class="fas fa-home"></i>
                        </div>
                        <h4 class="font-bold text-navy dark:text-white uppercase text-xs tracking-widest">
                            Deep Home Care
                        </h4>
                        <p class="text-sm text-gray-500">
                            Kitchens, bathrooms, bedrooms and living areas cleaned with precision.
                        </p>
                    </div>

                    <div class="space-y-4">
                        <div class="w-10 h-10 rounded-xl bg-primary/10 flex items-center justify-center text-primary">
                            <i class="fas fa-leaf"></i>
                        </div>
                        <h4 class="font-bold text-navy dark:text-white uppercase text-xs tracking-widest">
                            Eco-Friendly Products
                        </h4>
                        <p class="text-sm text-gray-500">
                            Safe cleaning solutions for families, pets and sensitive environments.
                        </p>
                    </div>

                </div>

                <!-- BULLETS -->
                <ul class="space-y-4 pt-6">

                    <li class="flex items-center gap-4 text-navy dark:text-white font-bold uppercase text-[10px] tracking-widest">
                        <i class="fas fa-check-circle text-primary text-lg"></i>
                        Regular & Deep Cleaning Services
                    </li>

                    <li class="flex items-center gap-4 text-navy dark:text-white font-bold uppercase text-[10px] tracking-widest">
                        <i class="fas fa-check-circle text-primary text-lg"></i>
                        Move-In / Move-Out Cleaning
                    </li>

                    <li class="flex items-center gap-4 text-navy dark:text-white font-bold uppercase text-[10px] tracking-widest">
                        <i class="fas fa-check-circle text-primary text-lg"></i>
                        Weekly & Monthly Maintenance Plans
                    </li>

                </ul>

            </div>

            <!-- RIGHT IMAGE -->
            <div class="relative">

                <div class="rounded-[50px] overflow-hidden shadow-3xl border-8 border-navy-light/5">
                    <img 
                        src="<?php echo e(asset('assets/img/img10 (13).jpg')); ?>" 
                        alt="Residential Cleaning Detail"
                        class="w-full h-auto"
                    >
                </div>

                <div class="absolute -bottom-10 -left-10 glass-card p-10 rounded-[32px] hidden lg:block border-primary/20 shadow-2xl max-w-xs">

                    <div class="text-primary font-black text-5xl mb-2">
                        100%
                    </div>

                    <div class="text-xs font-black text-navy dark:text-white uppercase tracking-widest">
                        Satisfaction Focused
                    </div>

                </div>

            </div>

        </div>
    </div>
</section>

<?php echo $__env->make('partials.sections.quote-form', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('head'); ?>
<style>
@keyframes pulse-slow {
    0%, 100% { transform: scale(1.1); }
    50% { transform: scale(1.15); }
}

.animate-pulse-slow {
    animation: pulse-slow 10s ease-in-out infinite;
}
</style>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\pristovia_property\resources\views/pages/services/residential.blade.php ENDPATH**/ ?>