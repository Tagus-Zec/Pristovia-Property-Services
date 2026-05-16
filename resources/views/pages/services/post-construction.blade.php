@extends('layouts.app')

@section('title', 'Post-Construction Cleaning Services GTA | Pristovia')
@section('description', 'Expert post-construction cleaning for new developments and renovations in Toronto, Mississauga, and Vaughan. Ready-for-occupancy results.')

@section('content')
<section class="relative py-40 bg-navy text-white overflow-hidden">
    <div class="absolute inset-0 opacity-20">
        <img src="{{ asset('assets/img/img1.jpg') }}" alt="Post Construction" class="w-full h-full object-cover scale-110 animate-pulse-slow">
        <div class="absolute inset-0 bg-gradient-to-b from-navy/50 to-navy"></div>
    </div>
    <div class="max-w-7xl mx-auto px-6 lg:px-10 relative z-10 text-center">
        <div class="inline-block bg-primary/20 backdrop-blur-md px-6 py-2 rounded-full mb-8 border border-primary/30">
            <span class="text-primary text-xs font-black uppercase tracking-[0.3em]">Institutional Grade</span>
        </div>
        <h1 class="text-5xl md:text-8xl font-montserrat font-black mb-8 uppercase tracking-tighter leading-[0.9]">Post-Construction <br><span class="text-primary">Cleaning</span></h1>
        <p class="text-xl md:text-2xl text-gray-300 max-w-4xl mx-auto mb-12 font-medium">
            The final touch for high-scale development projects in the GTA. Engineered for the precision and reliability required by general contractors and facility managers.
        </p>
        <div class="flex flex-col sm:flex-row justify-center gap-6">
            <a href="#quote" class="btn btn-primary !px-16">Request Site Visit</a>
            <a href="tel:+14376611132" class="btn btn-outline !border-white !text-white !px-16 hover:!bg-white hover:!text-navy" style="border: white 2px solod;">Immediate Dispatch</a>
        </div>
    </div>
</section>

<section class="py-24 bg-white dark:bg-navy-dark">
    <div class="max-w-7xl mx-auto px-6 lg:px-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-24 items-center">
            <div class="space-y-10">
                <div class="space-y-4">
                    <h2 class="text-primary font-bold uppercase tracking-widest text-xs">Mission-Critical Maintenance</h2>
                    <h3 class="text-4xl font-montserrat font-black text-navy dark:text-white uppercase tracking-tight">Built for Scale <br>& Operational Precision</h3>
                </div>
                <p class="text-lg text-gray-500 dark:text-gray-400 leading-relaxed font-medium">
                    {{ __('messages.long_post_con') }}
                </p>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                    <div class="space-y-4">
                        <div class="w-10 h-10 rounded-xl bg-primary/10 flex items-center justify-center text-primary"><i class="fas fa-microscope"></i></div>
                        <h4 class="font-bold text-navy dark:text-white uppercase text-xs tracking-widest">Detail Oriented</h4>
                        <p class="text-sm text-gray-500">HEPA filtered dust removal from every hidden crevice, vent, and fixture.</p>
                    </div>
                    <div class="space-y-4">
                        <div class="w-10 h-10 rounded-xl bg-primary/10 flex items-center justify-center text-primary"><i class="fas fa-user-check"></i></div>
                        <h4 class="font-bold text-navy dark:text-white uppercase text-xs tracking-widest">WSIB Compliant</h4>
                        <p class="text-sm text-gray-500">Fully insured and safety-trained crew for high-risk construction environments.</p>
                    </div>
                </div>

                <div class="pt-6">
                    <ul class="space-y-4">
                        <li class="flex items-center gap-4 text-navy dark:text-white font-bold uppercase text-[10px] tracking-widest">
                            <i class="fas fa-check-circle text-primary text-lg"></i> Rough, Final & Powder Cleaning Phases
                        </li>
                        <li class="flex items-center gap-4 text-navy dark:text-white font-bold uppercase text-[10px] tracking-widest">
                            <i class="fas fa-check-circle text-primary text-lg"></i> High-Level Window & Facade Detailing
                        </li>
                        <li class="flex items-center gap-4 text-navy dark:text-white font-bold uppercase text-[10px] tracking-widest">
                            <i class="fas fa-check-circle text-primary text-lg"></i> Debris Removal & Waste Logistics
                        </li>
                    </ul>
                </div>
            </div>
            <div class="relative">
                <div class="rounded-[50px] overflow-hidden shadow-3xl border-8 border-navy-light/5">
                    <img src="{{ asset('assets/img/img1.jpg') }}" alt="Post Con Detail" class="w-full h-auto">
                </div>
                <div class="absolute -bottom-10 -left-10 glass-card p-10 rounded-[32px] hidden lg:block border-primary/20 shadow-2xl max-w-xs">
                    <div class="text-primary font-black text-5xl mb-2">100%</div>
                    <div class="text-xs font-black text-navy dark:text-white uppercase tracking-widest">Occupancy Ready Rate</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-24 bg-neutral-light dark:bg-navy relative overflow-hidden">
    <div class="max-w-4xl mx-auto px-6">
        <h2 class="text-center text-3xl md:text-4xl font-montserrat font-black text-navy dark:text-white uppercase mb-16">Service <span class="text-primary">FAQ</span></h2>
        <div class="space-y-4" x-data="{ activeFaq: 0 }">
            <div class="glass-card rounded-2xl overflow-hidden border-primary/5">
                <button @click="activeFaq = 0" class="w-full p-8 text-left flex justify-between items-center group">
                    <span class="font-bold text-navy dark:text-white uppercase text-xs tracking-widest group-hover:text-primary transition-colors">How soon can you start?</span>
                    <i class="fas fa-chevron-down text-primary transition-transform" :class="activeFaq === 0 ? 'rotate-180' : ''"></i>
                </button>
                <div x-show="activeFaq === 0" class="p-8 pt-0 text-gray-500 text-sm leading-relaxed" x-collapse>
                    We specialize in tight deadlines. In most GTA regions, we can deploy a rough cleaning crew within 24-48 hours and a final detailing team for occupancy within 12 hours of request.
                </div>
            </div>
            <div class="glass-card rounded-2xl overflow-hidden border-primary/5">
                <button @click="activeFaq = 1" class="w-full p-8 text-left flex justify-between items-center group">
                    <span class="font-bold text-navy dark:text-white uppercase text-xs tracking-widest group-hover:text-primary transition-colors">Do you provide your own equipment?</span>
                    <i class="fas fa-chevron-down text-primary transition-transform" :class="activeFaq === 1 ? 'rotate-180' : ''"></i>
                </button>
                <div x-show="activeFaq === 1" class="p-8 pt-0 text-gray-500 text-sm leading-relaxed" x-collapse>
                    Yes, we arrive fully equipped with HEPA filtration industrial vacuums, floor scrubbers, and specialized solutions for paint/grout removal.
                </div>
            </div>
        </div>
    </div>
</section>

@include('partials.sections.quote-form')

<!-- Mobile Sticky CTA 
<div class="fixed bottom-0 left-0 right-0 p-4 bg-white/80 dark:bg-navy/80 backdrop-blur-md border-t border-primary/20 z-[800] md:hidden">
    <a href="#quote" class="btn btn-primary w-full !rounded-full">Get Immediate Quote</a>
</div>-->
@endsection

@push('head')
<style>
@keyframes pulse-slow {
    0%, 100% { transform: scale(1.1); }
    50% { transform: scale(1.15); }
}
.animate-pulse-slow {
    animation: pulse-slow 10s ease-in-out infinite;
}
</style>
@endpush
