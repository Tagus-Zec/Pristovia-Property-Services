<div id="service-modal" class="fixed inset-0 bg-navy/90 z-[2000] hidden justify-center items-center p-5 backdrop-blur-md">
    <div class="glass-card w-full max-w-[900px] rounded-[30px] relative overflow-hidden flex flex-col md:flex-row shadow-2xl border-white/20">
        <span class="absolute top-4 right-5 text-3xl text-navy dark:text-white cursor-pointer z-[2001] hover:text-primary transition-colors" onclick="closeServiceModal()">&times;</span>
        <div class="md:w-5/12">
            <img id="modal-service-img" src="" alt="Service" class="w-full h-full object-cover min-h-[250px] md:min-h-[400px]">
        </div>
        <div class="md:w-7/12 p-8 md:p-12">
            <h2 id="modal-service-title" class="text-3xl font-bold text-navy dark:text-white mb-5 font-montserrat"></h2>
            <p id="modal-service-desc" class="text-gray-600 dark:text-gray-300 text-lg leading-relaxed mb-8"></p>
            <a href="#quote" class="btn btn-primary" onclick="closeServiceModal()"><?php echo e(__('messages.nav_quote')); ?></a>
        </div>
    </div>
</div>

<div id="lightbox" class="fixed inset-0 bg-navy/95 z-[2000] hidden justify-center items-center p-5 backdrop-blur-sm" onclick="closeLightbox()">
    <span class="absolute top-5 right-8 text-white text-5xl cursor-pointer hover:text-primary">&times;</span>
    <img id="lightbox-img" src="" alt="Enlarged" class="max-w-[90%] max-h-[90%] rounded-lg shadow-2xl">
</div>
<?php /**PATH C:\xampp\htdocs\pristovia_property\resources\views/partials/modals.blade.php ENDPATH**/ ?>