<footer class="bg-navy text-white pt-24 pb-12 relative overflow-hidden">
    <div class="absolute inset-0 opacity-5 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')]"></div>
    
    <div class="max-w-7xl mx-auto px-6 lg:px-10 relative z-10">
        <!-- Main Footer Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-16 mb-24">
            <!-- Brand Column -->
            <div class="space-y-8">
                <a href="<?php echo e(request()->routeIs('home') ? '#home' : route('home').'#home'); ?>">
                    <img src="<?php echo e(asset('assets/img/logofoot.png')); ?>" alt="Pristovia Services Inc." class="h-16 w-auto ">
                </a>
                <p class="text-gray-400 text-sm leading-relaxed max-w-xs font-medium">
                    <?php echo e(__('messages.footer_about')); ?>

                </p>
                <div class="flex gap-4">
                    <a href="https://wa.me/14376611132" class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center hover:bg-primary hover:text-white transition-all text-gray-400 border border-white/10"><i class="fab fa-whatsapp"></i></a>
                    <a href="https://web.facebook.com/profile.php?id=61577546173702" class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center hover:bg-primary hover:text-white transition-all text-gray-400 border border-white/10"><i class="fab fa-instagram"></i></a>
                    <a href="https://web.facebook.com/profile.php?id=61577546173702" class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center hover:bg-primary hover:text-white transition-all text-gray-400 border border-white/10"><i class="fab fa-facebook-f"></i></a>
                </div>
            </div>

            <!-- Operations Column -->
            <div class="space-y-8">
                <h4 class="text-primary font-black uppercase tracking-[0.2em] text-[10px]"><?php echo e(__('messages.services_title')); ?></h4>
                <ul class="space-y-4 text-sm font-bold uppercase tracking-widest text-gray-500">
                    <li><a href="<?php echo e(route('service.post-construction')); ?>" class="hover:text-primary transition-colors">Post-Construction</a></li>
                    <li><a href="<?php echo e(route('service.commercial')); ?>" class="hover:text-primary transition-colors">Commercial Cleaning</a></li>
                    <li><a href="<?php echo e(route('service.pressure-washing')); ?>" class="hover:text-primary transition-colors">Pressure Washing & Exterior Restoration</a></li>
                    <li><a href="<?php echo e(route('service.property-maintenance')); ?>" class="hover:text-primary transition-colors">Property Maintenance</a></li>
                    <li><a href="<?php echo e(route('service.window-cleaning')); ?>" class="hover:text-primary transition-colors">Window Detailing</a></li>
                    <li><a href="<?php echo e(route('service.residential')); ?>" class="hover:text-primary transition-colors">Residential Cleaning</a></li>
                </ul>
            </div>

            <!-- Quiks links -->
            <div class="space-y-8">
                <h4 class="text-primary font-black uppercase tracking-[0.2em] text-[10px]"><?php echo e(__('messages.services_title')); ?></h4>
                <ul class="space-y-4 text-sm font-bold uppercase tracking-widest text-gray-500">
                    <li> <a href="<?php echo e(request()->routeIs('home') ? '#home' : route('home').'#home'); ?>" class="hover:text-primary transition-colors"><?php echo e(__('messages.nav_home')); ?></a></li>               
                    <li> <a href="<?php echo e(request()->routeIs('home') ? '#about' : route('home').'#about'); ?>" class="hover:text-primary transition-colors"><?php echo e(__('messages.nav_about')); ?></a></li>
                    <li> <a href="<?php echo e(request()->routeIs('home') ? '#services' : route('home').'#services'); ?>" class="hover:text-primary transition-colors"><?php echo e(__('messages.nav_services')); ?></a></li>
                    <li> <a href="<?php echo e(request()->routeIs('home') ? '#work' : route('home').'#work'); ?>" class="hover:text-primary transition-colors"><?php echo e(__('messages.nav_work')); ?></a></li>
                </ul>
                 <div class="pt-4 border-t border-white/5">
                    <span class="text-[9px] font-black uppercase tracking-widest opacity-40 grayscale"><?php echo e(__('messages.footer_response_active')); ?></span>
                </div>
            </div>

            <!-- Compliance & Contact -->
            <div class="space-y-8">
                <h4 class="text-primary font-black uppercase tracking-[0.2em] text-[10px]"><?php echo e(__('messages.footer_compliance_contact')); ?></h4>
                <div class="space-y-6">
                    <div class="flex items-center gap-4 group">
                        <div class="w-10 h-10 rounded-xl bg-primary/10 flex items-center justify-center text-primary group-hover:scale-110 transition-transform"><i class="fas fa-phone-alt"></i></div>
                        <a href="tel:+14376611132" class="text-lg font-montserrat font-black hover:text-primary transition-colors">+1 (437) 661-1132</a>
                        <!-- <a href="tel:+1416120388" class="text-lg font-montserrat font-black hover:text-primary transition-colors">+1 (416) 312-0388</a> -->
                    </div>
                    <div class="flex items-center gap-4 group">
                        <div class="w-10 h-10 rounded-xl bg-primary/10 flex items-center justify-center text-primary group-hover:scale-110 transition-transform"><i class="fas fa-envelope"></i></div>
                        <a href="mailto:info@pristoviaservices.com" class="text-xs font-bold uppercase tracking-widest hover:text-primary transition-colors">info@pristoviaservices.com</a>
                    </div>
                    <div class="flex items-center pt-4 border-t border-white/5 gap-4 pt-6 opacity-40 grayscale ">
                        <i class="fas fa-shield-halved text-2xl text-primary"></i>
                        <span class="text-[9px] font-black uppercase tracking-widest leading-none">WSIB Compliant<br>$2M Insured</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- GTA Coverage Column 
            <div class="space-y-8">
                <h4 class="text-primary font-black uppercase tracking-[0.2em] text-[10px]"><?php echo e(__('messages.footer_coverage')); ?></h4>
                <div class="grid grid-cols-2 gap-4 text-[10px] font-black uppercase tracking-widest text-gray-500">
                    <div class="flex">
                        <span class="block hover:text-white transition-colors cursor-default"><?php echo e(__('messages.city_toronto')); ?> </span>
                        <span class="block hover:text-white transition-colors cursor-default"><?php echo e(__('messages.city_mississauga')); ?> </span>
                        <span class="block hover:text-white transition-colors cursor-default"><?php echo e(__('messages.city_vaughan')); ?> </span>
                        <span class="block hover:text-white transition-colors cursor-default"><?php echo e(__('messages.city_markham')); ?></span>
                        <span class="block hover:text-white transition-colors cursor-default"><?php echo e(__('messages.city_brampton')); ?></span>
                        <span class="block hover:text-white transition-colors cursor-default"><?php echo e(__('messages.city_oakville')); ?></span>
                        <span class="block hover:text-white transition-colors cursor-default"><?php echo e(__('messages.city_richmond_hill')); ?></span>
                        <span class="block hover:text-white transition-colors cursor-default"><?php echo e(__('messages.city_oshawa')); ?></span>
                    </div>
                </div>-->

        <!-- Bottom Bar -->
        <div class="pt-12 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-8">
            <div class="text-[10px] font-bold text-gray-600 uppercase">
                © 2026 Pristovia Property Services. All Rights Reserved.
            </div>
            <div class="flex gap-8 text-[10px] font-bold text-gray-600 uppercase tracking-widest">
                <a href="#" class="hover:text-white transition-colors"><?php echo e(__('messages.footer_privacy')); ?></a>
                <a href="#" class="hover:text-white transition-colors"><?php echo e(__('messages.footer_terms')); ?></a>
                <a href="#" class="hover:text-white transition-colors"><?php echo e(__('messages.footer_accessibility')); ?></a>
            </div>
        </div>
    </div>
</footer>
<?php /**PATH C:\xampp\htdocs\pristovia_property\resources\views/partials/footer.blade.php ENDPATH**/ ?>