<?php $__env->startSection('title', 'Property Maintenance & Hardscape GTA | Pristovia'); ?>
<?php $__env->startSection('description', 'Comprehensive property maintenance and hardscape restoration in Toronto. We keep your commercial assets in peak condition.'); ?>

<?php $__env->startSection('content'); ?>
<section class="relative py-40 bg-navy text-white overflow-hidden">
    <div class="absolute inset-0 opacity-20">
        <img src="<?php echo e(asset('assets/img/img10 (17).jpg')); ?>" alt="Hardscape Maintenance" class="w-full h-full object-cover scale-110">
        <div class="absolute inset-0 bg-gradient-to-b from-navy/50 to-navy"></div>
    </div>
    <div class="max-w-7xl mx-auto px-6 lg:px-10 relative z-10 text-center">
        <div class="inline-block bg-primary/20 backdrop-blur-md px-6 py-2 rounded-full mb-8 border border-primary/30">
            <span class="text-primary text-xs font-black uppercase tracking-[0.3em]">Asset Longevity</span>
        </div>
        <h1 class="text-5xl md:text-8xl font-montserrat font-black mb-8 uppercase tracking-tighter leading-[0.9]">Property <br><span class="text-primary">Maintenance</span></h1>
        <p class="text-xl md:text-2xl text-gray-300 max-w-4xl mx-auto mb-12 font-medium">
            Strategic long-term care for GTA property investments. From hardscape restoration to seasonal facility maintenance.
        </p>
        <div class="flex flex-col sm:flex-row justify-center gap-6">
            <a href="#quote" class="btn btn-primary !px-16">Request a Maintenance Plan</a>
            <a href="tel:+14376611132" class="btn btn-outline !border-white !text-white !px-16 hover:!bg-white hover:!text-navy" style="border: white 2px solid;">Speak to an Expert</a>
        </div>
    </div>
</section>

<section class="py-24 bg-white dark:bg-navy-dark">
    <div class="max-w-7xl mx-auto px-6 lg:px-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-24 items-center">
            <div class="space-y-10">
                <div class="space-y-4">
                    <h2 class="text-primary font-bold uppercase tracking-widest text-xs">Protect & Preserve</h2>
                    <h3 class="text-4xl font-montserrat font-black text-navy dark:text-white uppercase tracking-tight">Preserve Your <br>Structural Integrity</h3>
                </div>
                <p class="text-lg text-gray-500 dark:text-gray-400 leading-relaxed font-medium">
                    <?php echo e(__('messages.long_hardscape')); ?>

                </p>
                <div class="bg-primary/5 p-10 rounded-[40px] border border-primary/20 relative overflow-hidden group">
                    <div class="absolute top-0 right-0 p-6 opacity-10 group-hover:rotate-12 transition-transform">
                        <i class="fas fa-screwdriver-wrench text-6xl text-primary"></i>
                    </div>
                    <h4 class="font-bold text-primary uppercase tracking-widest text-xs mb-6">Commercial Packages Include:</h4>
                    <ul class="grid grid-cols-1 md:grid-cols-2 gap-6 text-sm text-navy dark:text-white font-bold">
                        <li class="flex items-center gap-3"><i class="fas fa-check text-primary"></i> Polymeric Sanding</li>
                        <li class="flex items-center gap-3"><i class="fas fa-check text-primary"></i> Premium Sealing</li>
                        <li class="flex items-center gap-3"><i class="fas fa-check text-primary"></i> Debris Clearing</li>
                        <li class="flex items-center gap-3"><i class="fas fa-check text-primary"></i> Surface Leveling</li>
                    </ul>
                </div>
            </div>
            <div class="rounded-[50px] overflow-hidden shadow-3xl border-8 border-navy-light/5">
                <img src="<?php echo e(asset('assets/img/img10 (35).jpg')); ?>" alt="Hardscape Detail" class="w-full h-auto">
            </div>
        </div>
    </div>
</section>

<?php echo $__env->make('partials.sections.quote-form', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<!-- Mobile Sticky CTA
<div class="fixed bottom-0 left-0 right-0 p-4 bg-white/80 dark:bg-navy/80 backdrop-blur-md border-t border-primary/20 z-[800] md:hidden">
    <a href="#quote" class="btn btn-primary w-full !rounded-full">Get Maintenance Quote</a>
</div> -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\pristovia_property\resources\views/pages/services/property-maintenance.blade.php ENDPATH**/ ?>