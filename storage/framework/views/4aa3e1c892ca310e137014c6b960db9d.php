<section id="services" class="py-24 bg-neutral-light dark:bg-navy relative">
    <div class="max-w-7xl mx-auto px-6 lg:px-10">
        <div class="text-center max-w-3xl mx-auto mb-20">
            <h2 class="text-primary font-bold uppercase tracking-widest text-xs mb-4">Core Competencies</h2>
            <h3 class="text-4xl md:text-6xl font-montserrat font-black text-navy dark:text-white mb-6 uppercase tracking-tight">OPERATIONAL <span class="text-primary">DIVISIONS</span></h3>
            <div class="w-20 h-1.5 bg-primary mx-auto rounded-full"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-8">

            <!-- Commercial -->
            <a href="<?php echo e(route('service.commercial')); ?>" class="service-card group">
                <div class="relative h-64 -mx-10 -mt-10 mb-8 overflow-hidden">
                    <img src="<?php echo e(asset('assets/img/im6.jpg')); ?>" alt="Commercial Cleaning" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-navy/40 group-hover:bg-navy/20"></div>
                </div>
                <h4 class="text-2xl font-black text-navy dark:text-white mb-4 uppercase tracking-tight"><?php echo e(__('messages.service_commercial')); ?></h4>
                <p class="text-gray-500 text-sm leading-relaxed mb-8 flex-grow">Institutional maintenance protocols for offices, retail hubs, and corporate complexes.</p>
                <div class="flex items-center text-primary font-black uppercase text-[10px] tracking-widest">
                    Operational Details <i class="fas fa-arrow-right ml-2 group-hover:translate-x-2 transition-transform"></i>
                </div>
            </a>

            <!-- Post-Construction -->
            <a href="<?php echo e(route('service.post-construction')); ?>" class="service-card group">
                <div class="relative h-64 -mx-10 -mt-10 mb-8 overflow-hidden">
                    <img src="<?php echo e(asset('assets/img/img1.jpg')); ?>" alt="Post-Construction" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-navy/40 group-hover:bg-navy/20"></div>
                    <div class="absolute bottom-6 left-10"><span class="bg-primary text-white text-[9px] font-black px-4 py-1.5 rounded-full uppercase tracking-widest">Division Leader</span></div>
                </div>
                <h4 class="text-2xl font-black text-navy dark:text-white mb-4 uppercase tracking-tight"><?php echo e(__('messages.service_post_con')); ?></h4>
                <p class="text-gray-500 text-sm leading-relaxed mb-8 flex-grow">High-scale debris removal and dust mitigation for GTA's largest development sites.</p>
                <div class="flex items-center text-primary font-black uppercase text-[10px] tracking-widest">
                    Operational Details <i class="fas fa-arrow-right ml-2 group-hover:translate-x-2 transition-transform"></i>
                </div>
            </a>

            <!-- Property Maintenance -->
            <a href="<?php echo e(route('service.property-maintenance')); ?>" class="service-card group">
                <div class="relative h-64 -mx-10 -mt-10 mb-8 overflow-hidden">
                    <img src="<?php echo e(asset('assets/img/img10 (44).jpg')); ?>" alt="Asset Maintenance" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-navy/40 group-hover:bg-navy/20"></div>
                </div>
                <h4 class="text-2xl font-black text-navy dark:text-white mb-4 uppercase tracking-tight"><?php echo e(__('messages.service_hardscape')); ?></h4>
                <p class="text-gray-500 text-sm leading-relaxed mb-8 flex-grow">Comprehensive exterior asset management, hardscape restoration, and seasonal care.</p>
                <div class="flex items-center text-primary font-black uppercase text-[10px] tracking-widest">
                    Operational Details <i class="fas fa-arrow-right ml-2 group-hover:translate-x-2 transition-transform"></i>
                </div>
            </a>
            <!-- pressure-washing -->
            <a href="<?php echo e(route('service.pressure-washing')); ?>" class="service-card group">
                <div class="relative h-64 -mx-10 -mt-10 mb-8 overflow-hidden">
                    <img src="<?php echo e(asset('assets/img/im3.jpg')); ?>" alt="Commercial Cleaning" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-navy/40 group-hover:bg-navy/20"></div>
                </div>
                <h4 class="text-2xl font-black text-navy dark:text-white mb-4 uppercase tracking-tight">Exterior Pressure washing</h4>
                <p class="text-gray-500 text-sm leading-relaxed mb-8 flex-grow">High-powered exterior cleaning solutions designed to eliminate grime, mold, and tough stains from all outdoor surfaces.</p>
                <div class="flex items-center text-primary font-black uppercase text-[10px] tracking-widest">
                    Operational Details <i class="fas fa-arrow-right ml-2 group-hover:translate-x-2 transition-transform"></i>
                </div>
            </a>

            <!-- window-cleaning -->
            <a href="<?php echo e(route('service.window-cleaning')); ?>" class="service-card group">
                <div class="relative h-64 -mx-10 -mt-10 mb-8 overflow-hidden">
                    <img src="<?php echo e(asset('assets/img/img40.png')); ?>" alt="Post-Construction" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-navy/40 group-hover:bg-navy/20"></div>
                </div>
                <h4 class="text-2xl font-black text-navy dark:text-white mb-4 uppercase tracking-tight">Window cleaning</h4>
                <p class="text-gray-500 text-sm leading-relaxed mb-8 flex-grow">Professional window cleaning that leaves your glass spotless, clear, and streak-free, improving both visibility and the overall look of your property.</p>
                <div class="flex items-center text-primary font-black uppercase text-[10px] tracking-widest">
                    Operational Details <i class="fas fa-arrow-right ml-2 group-hover:translate-x-2 transition-transform"></i>
                </div>
            </a>

            <!-- residential cleaning -->
            <a href="<?php echo e(route('service.residential')); ?>" class="service-card group">
                <div class="relative h-64 -mx-10 -mt-10 mb-8 overflow-hidden">
                    <img src="<?php echo e(asset('assets/img/img3.jpg')); ?>" alt="Asset Maintenance" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-navy/40 group-hover:bg-navy/20"></div>
                </div>
                <h4 class="text-2xl font-black text-navy dark:text-white mb-4 uppercase tracking-tight">Residential Cleaning</h4>
                <p class="text-gray-500 text-sm leading-relaxed mb-8 flex-grow">Complete home care solutions designed to keep your residential spaces clean, protected, and consistently well-maintained</p>
                <div class="flex items-center text-primary font-black uppercase text-[10px] tracking-widest">
                    Operational Details <i class="fas fa-arrow-right ml-2 group-hover:translate-x-2 transition-transform"></i>
                </div>
            </a>
        </div>
    </div>
</section>
<?php /**PATH C:\xampp\htdocs\pristovia_property\resources\views/partials/sections/services.blade.php ENDPATH**/ ?>