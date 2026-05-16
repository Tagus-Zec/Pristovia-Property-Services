<section id="home" class="relative min-h-screen flex items-center pt-20 overflow-hidden">

    <!-- Background -->
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('assets/img/hero-bg.jpg') }}" class="w-full h-full object-cover" alt="corporate cleaning services toronto">
        <div class="absolute inset-0 bg-gradient-to-r from-navy via-navy/70 to-transparent"></div>
    </div>

    <div class="max-w-7xl mx-auto px-6 lg:px-10 relative z-10 w-full sm:text-center py-20 lg:py-40">

        <div class="max-w-3xl">

            <!-- Badge -->
            <div class="inline-flex items-center gap-2 bg-primary/20 backdrop-blur-md border border-primary/30 px-5 py-2.5 rounded-full mb-6">
                <span class="w-2 h-2 bg-primary rounded-full animate-pulse"></span>
                <span class="text-primary text-[9px] font-black uppercase tracking-[0.2em]">
                    Institutional Property Care Toronto & GTA
                </span>
            </div>

            <!-- Heading -->
           <h1 class="text-4xl md:text-6xl lg:text-8xl font-montserrat font-black text-white leading-[0.95] mb-6 tracking-tighter">
    <span class="premium-gradient-text">CLEANING SERVICES</span><br>
    IN TORONTO & GTA
</h1>

            <!-- Paragraph -->
            <p class="text-lg md:text-xl lg:text-2xl text-gray-300 mb-10 leading-relaxed max-w-2xl font-medium">
                Reliable, detailed, and results-driven cleaning for commercial, post-construction, and residential projects in Toronto and the GTA.
            </p>

            <!-- CTA -->
            <div class="flex flex-col sm:flex-row gap-4 mb-10">
                <a href="#quote" class="btn btn-primary !px-10 shadow-glow w-full sm:w-auto text-center">
                    {{ __('messages.cta_quote') }}
                </a>

                <a href="#services" style="border: white 2px solid;" class="btn btn-outline !border-white !text-white hover:!bg-white hover:!text-navy !px-10 w-full sm:w-auto text-center">
                    Operational Portfolio
                </a>
            </div>

            <!-- Compliance (improved hierarchy)
            <div class="flex flex-wrap gap-10 opacity-80">

                <div class="flex flex-col">
                    <div class="text-white text-xs md:text-sm font-black tracking-widest uppercase">
                        WSIB Compliant
                    </div>
                    <div class="text-primary text-[11px] md:text-xs font-medium tracking-wide mt-1">
                        Verified 2026
                    </div>
                </div>

                <div class="flex flex-col">
                    <div class="text-white text-xs md:text-sm font-black tracking-widest uppercase">
                        $2M Liability Coverage
                    </div>
                    <div class="text-primary text-[11px] md:text-xs font-medium tracking-wide mt-1">
                        Fully Insured
                    </div>
                </div>

                <div class="flex flex-col">
                    <div class="text-white text-xs md:text-sm font-black tracking-widest uppercase">
                        Bonded Operations
                    </div>
                    <div class="text-primary text-[11px] md:text-xs font-medium tracking-wide mt-1">
                        Enterprise Ready
                    </div>
                </div>

            </div> -->

    <!-- Stats (SAFE VERSION) -->
    <div class="hidden md:block absolute bottom-10 right-5 z-20">
        <div class="glass-card p-8 rounded-[30px] flex gap-10 border-primary/20">

            <div class="text-center">
                <div class="text-3xl font-black text-primary">500+</div>
                <div class="text-[9px] uppercase font-black tracking-widest text-gray-400">Contracts</div>
            </div>

            <div class="w-px h-10 bg-white/10 my-auto"></div>

            <div class="text-center">
                <div class="text-3xl font-black text-primary">100%</div>
                <div class="text-[9px] uppercase font-black tracking-widest text-gray-400">Retention</div>
            </div>

        </div>
    </div>

</section>