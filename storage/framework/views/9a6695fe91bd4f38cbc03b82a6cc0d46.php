<section class="py-20 bg-white dark:bg-navy border-t border-gray-100 dark:border-white/5">
    <div class="max-w-[1200px] mx-auto px-5">
        <div class="text-center mb-16 reveal">
            <h2 class="text-3xl md:text-5xl font-bold mb-4 dark:text-white font-montserrat"><?php echo e(__('messages.why_contractors_title')); ?></h2>
            <p class="text-gray-500 dark:text-gray-400 max-w-[700px] mx-auto"><?php echo e(__('messages.why_contractors_subtitle')); ?></p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="reveal p-8 bg-gray-50 dark:bg-navy-light rounded-2xl border border-gray-100 dark:border-white/5 transition-all hover:shadow-xl group">
                <div class="w-16 h-16 bg-primary/10 rounded-xl flex items-center justify-center mb-6 group-hover:bg-primary transition-colors">
                    <i class="fas fa-cogs text-2xl text-primary group-hover:text-white"></i>
                </div>
                <h3 class="text-xl font-bold mb-4 dark:text-white"><?php echo e(__('messages.reason_1_t')); ?></h3>
                <p class="text-gray-500 dark:text-gray-400 leading-relaxed"><?php echo e(__('messages.reason_1_d')); ?></p>
            </div>

            <div class="reveal p-8 bg-gray-50 dark:bg-navy-light rounded-2xl border border-gray-100 dark:border-white/5 transition-all hover:shadow-xl group" style="transition-delay: 0.1s">
                <div class="w-16 h-16 bg-primary/10 rounded-xl flex items-center justify-center mb-6 group-hover:bg-primary transition-colors">
                    <i class="fas fa-chart-line text-2xl text-primary group-hover:text-white"></i>
                </div>
                <h3 class="text-xl font-bold mb-4 dark:text-white"><?php echo e(__('messages.reason_2_t')); ?></h3>
                <p class="text-gray-500 dark:text-gray-400 leading-relaxed"><?php echo e(__('messages.reason_2_d')); ?></p>
            </div>

            <div class="reveal p-8 bg-gray-50 dark:bg-navy-light rounded-2xl border border-gray-100 dark:border-white/5 transition-all hover:shadow-xl group" style="transition-delay: 0.2s">
                <div class="w-16 h-16 bg-primary/10 rounded-xl flex items-center justify-center mb-6 group-hover:bg-primary transition-colors">
                    <i class="fas fa-file-contract text-2xl text-primary group-hover:text-white"></i>
                </div>
                <h3 class="text-xl font-bold mb-4 dark:text-white"><?php echo e(__('messages.reason_3_t')); ?></h3>
                <p class="text-gray-500 dark:text-gray-400 leading-relaxed"><?php echo e(__('messages.reason_3_d')); ?></p>
            </div>
        </div>

        <div class="mt-16 flex flex-wrap justify-center items-center gap-8 md:gap-16 opacity-60 grayscale hover:grayscale-0 transition-all duration-500">
            <div class="flex flex-col items-center gap-2">
                <i class="fas fa-shield-alt fa-3x text-navy dark:text-white"></i>
                <span class="text-xs font-bold uppercase tracking-widest"><?php echo e(__('messages.stat_insurance_bonded')); ?></span>
            </div>
            <div class="flex flex-col items-center gap-2">
                <i class="fas fa-user-shield fa-3x text-navy dark:text-white"></i>
                <span class="text-xs font-bold uppercase tracking-widest"><?php echo e(__('messages.stat_wsib_compliant')); ?></span>
            </div>
            
        </div>
    </div>
</section>
<?php /**PATH C:\xampp\htdocs\pristovia_property\resources\views/partials/sections/trust.blade.php ENDPATH**/ ?>