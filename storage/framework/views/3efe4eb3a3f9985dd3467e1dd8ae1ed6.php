<section id="locations" class="py-24 bg-gray-50 dark:bg-navy-light transition-colors">
    <div class="max-w-[1200px] mx-auto px-5">
        <div class="text-center mb-16 reveal">
            <h2 class="text-4xl font-bold relative pb-4 after:content-[''] after:absolute after:bottom-0 after:left-1/2 after:-translate-x-1/2 after:w-20 after:h-1 after:bg-primary after:rounded-full font-montserrat uppercase tracking-widest">
                <?php echo e(__('messages.locations_title')); ?>

            </h2>
            <p class="mt-6 text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
                <?php echo e(__('messages.locations_subtitle')); ?>

            </p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 reveal">
            <?php
                $cities = ['Toronto', 'Mississauga', 'Brampton', 'Vaughan', 'Markham', 'Oakville', 'Richmond Hill', 'Burlington', 'Milton', 'Oshawa', 'Whitby', 'Ajax', 'Pickering', 'Newmarket', 'Aurora', 'Caledon'];
            ?>
            <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="flex items-center gap-3 p-4 glass-card rounded-xl hover:border-gold transition-all group">
                    <i class="fas fa-location-dot text-primary group-hover:scale-125 transition-transform"></i>
                    <span class="font-semibold text-sm"><?php echo e($city); ?></span>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <div class="mt-16 p-8 glass-card rounded-3xl border-l-8 border-gold reveal">
            <div class="flex flex-col md:flex-row items-center gap-8">
                <div class="flex-1">
                    <h3 class="text-2xl font-bold mb-4 font-montserrat"><?php echo e(__('messages.coverage_area_title')); ?></h3>
                    <p class="text-gray-600 dark:text-gray-300 leading-relaxed mb-6">
                        <?php echo e(__('messages.coverage_area_text')); ?>

                    </p>
                    <div class="flex flex-wrap gap-4">
                        <div class="flex items-center gap-2">
                            <i class="fas fa-check-circle text-primary"></i>
                            <span class="text-sm font-bold uppercase tracking-tighter">Fast Response</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="fas fa-check-circle text-primary"></i>
                            <span class="text-sm font-bold uppercase tracking-tighter">Local Experts</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="fas fa-check-circle text-primary"></i>
                            <span class="text-sm font-bold uppercase tracking-tighter">Fully Insured</span>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/3">
                    <a href="#quote" class="btn btn-primary w-full"><?php echo e(__('messages.cta_quote')); ?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH C:\xampp\htdocs\pristovia_property\resources\views/partials/sections/locations.blade.php ENDPATH**/ ?>