<?php $__env->startSection('title', __('messages.meta_title')); ?>
<?php $__env->startSection('description', __('messages.meta_desc')); ?>

<?php $__env->startSection('content'); ?>
    <script>
        window.serviceData = {
            'post_con': {
                'img': '<?php echo e(asset('assets/img/img1.jpg')); ?>',
                'title_key': 'service_post_con',
                'desc_key': 'long_post_con'
            },
            'commercial': {
                'img': '<?php echo e(asset('assets/img/img2.jpg')); ?>',
                'title_key': 'service_commercial',
                'desc_key': 'long_commercial'
            },
            'pressure_washing': {
                'img': '<?php echo e(asset('assets/img/im (1).jpg')); ?>',
                'title_key': 'service_pressure_washing',
                'desc_key': 'long_pressure_washing'
            },
            'hardscape': {
                'img': '<?php echo e(asset('assets/img/img3.jpg')); ?>',
                'title_key': 'service_hardscape',
                'desc_key': 'long_hardscape'
            },
            'window': {
                'img': '<?php echo e(asset('assets/img/img6.jpg')); ?>',
                'title_key': 'service_window',
                'desc_key': 'long_window'
            },
            'deep': {
                'img': '<?php echo e(asset('assets/img/img5.jpg')); ?>',
                'title_key': 'service_deep',
                'desc_key': 'long_deep'
            }
        };
    </script>

    <div x-data="bubbleSystem()" id="bubble-container" class="fixed inset-0 pointer-events-none z-1 overflow-hidden">
        <template x-for="bubble in bubbles" :key="bubble.id">
            <div 
                class="bubble" 
                :class="{ 'popping': bubble.popping }"
                :style="bubble.style"
                @click="pop(bubble.id)"
            ></div>
        </template>
    </div>

    <?php echo $__env->make('partials.sections.hero', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('partials.sections.stats', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('partials.sections.trust', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('partials.sections.services', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('partials.sections.industries', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('partials.sections.locations', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('partials.sections.about', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('partials.sections.how-it-works', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('partials.sections.faq', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('partials.sections.work', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('partials.sections.testimonials', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('partials.sections.partners', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('partials.sections.quote-form', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\pristovia_property\resources\views/pages/home.blade.php ENDPATH**/ ?>