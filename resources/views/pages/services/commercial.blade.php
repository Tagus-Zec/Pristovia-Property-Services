@extends('layouts.app')

@section('title', 'Commercial Cleaning Services Toronto & GTA | Pristovia')
@section('description', 'Premium commercial janitorial services for offices, retail spaces, and corporate facilities across the Greater Toronto Area.')

@section('content')
<section class="relative py-40 bg-navy text-white overflow-hidden">
    <div class="absolute inset-0 opacity-20">
        <img src="{{ asset('assets/img/img10 (28).jpg') }}" alt="Commercial Cleaning" class="w-full h-full object-cover scale-110">
        <div class="absolute inset-0 bg-gradient-to-b from-navy/50 to-navy"></div>
    </div>
    <div class="max-w-7xl mx-auto px-6 lg:px-10 relative z-10 text-center">
        <div class="inline-block bg-primary/20 backdrop-blur-md px-6 py-2 rounded-full mb-8 border border-primary/30">
            <span class="text-primary text-xs font-black uppercase tracking-[0.3em]">Corporate Maintenance</span>
        </div>
        <h1 class="text-5xl md:text-8xl font-montserrat font-black mb-8 uppercase tracking-tighter leading-[0.9]">Commercial <br><span class="text-primary">Cleaning</span></h1>
        <p class="text-xl md:text-2xl text-gray-300 max-w-4xl mx-auto mb-12 font-medium">
            Institutional-grade maintenance for the businesses that drive the GTA. Reliable, discreet, and uncompromisingly detailed janitorial solutions.
        </p>
        <div class="flex flex-col sm:flex-row justify-center gap-6">
            <a href="#quote" class="btn btn-primary !px-16">Get a Quote</a>
            <a href="tel:+14376611132" class="btn btn-outline !border-white !text-white !px-16 hover:!bg-white hover:!text-navy" style="border: white 2px solid;">Call Support</a>
        </div>
    </div>
</section>

<section class="py-24 bg-white dark:bg-navy-dark">
    <div class="max-w-7xl mx-auto px-6 lg:px-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-24 items-center">
            <div class="rounded-[50px] overflow-hidden shadow-3xl order-2 lg:order-1 border-8 border-navy-light/5">
                <img src="{{ asset('assets/img/im4.jpg') }}" alt="Office Cleaning" class="w-full h-auto">
            </div>
            <div class="space-y-10 order-1 lg:order-2">
                <div class="space-y-4">
                    <h2 class="text-primary font-bold uppercase tracking-widest text-xs">Standardized Excellence</h2>
                    <h3 class="text-4xl font-montserrat font-black text-navy dark:text-white uppercase tracking-tight">Corporate Standards <br>& Local Integrity</h3>
                </div>
                <p class="text-lg text-gray-500 dark:text-gray-400 leading-relaxed font-medium">
                    {{ __('messages.long_commercial') }}
                </p>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="p-8 glass-card rounded-[32px] border-primary/10">
                        <i class="fas fa-clock text-primary text-3xl mb-4"></i>
                        <h4 class="font-bold text-navy dark:text-white mb-2 uppercase text-[10px] tracking-widest">After-Hours Protocol</h4>
                        <p class="text-xs text-gray-500">Scheduled to minimize business disruption and secure facility access.</p>
                    </div>
                    <div class="p-8 glass-card rounded-[32px] border-primary/10">
                        <i class="fas fa-check-double text-primary text-3xl mb-4"></i>
                        <h4 class="font-bold text-navy dark:text-white mb-2 uppercase text-[10px] tracking-widest">Quality Assurance</h4>
                        <p class="text-xs text-gray-500">Regular multi-point supervisor audits for total accountability.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Industries Section -->
<section class="py-24 bg-neutral-light dark:bg-navy relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 lg:px-10">
        <h2 class="text-center text-3xl font-montserrat font-black text-navy dark:text-white uppercase mb-16">Industries We <span class="text-primary">Service</span></h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <div class="text-center space-y-4">
                <div class="w-20 h-20 bg-white dark:bg-navy-light rounded-full mx-auto flex items-center justify-center text-2xl text-primary shadow-xl"><i class="fas fa-landmark"></i></div>
                <div class="font-bold text-navy dark:text-white uppercase text-[10px] tracking-[0.2em]">Government</div>
            </div>
            <div class="text-center space-y-4">
                <div class="w-20 h-20 bg-white dark:bg-navy-light rounded-full mx-auto flex items-center justify-center text-2xl text-primary shadow-xl"><i class="fas fa-shop"></i></div>
                <div class="font-bold text-navy dark:text-white uppercase text-[10px] tracking-[0.2em]">Retail Plazas</div>
            </div>
            <div class="text-center space-y-4">
                <div class="w-20 h-20 bg-white dark:bg-navy-light rounded-full mx-auto flex items-center justify-center text-2xl text-primary shadow-xl"><i class="fas fa-user-tie"></i></div>
                <div class="font-bold text-navy dark:text-white uppercase text-[10px] tracking-[0.2em]">Executive Offices</div>
            </div>
            <div class="text-center space-y-4">
                <div class="w-20 h-20 bg-white dark:bg-navy-light rounded-full mx-auto flex items-center justify-center text-2xl text-primary shadow-xl"><i class="fas fa-boxes-stacked"></i></div>
                <div class="font-bold text-navy dark:text-white uppercase text-[10px] tracking-[0.2em]">Logistics</div>
            </div>
        </div>
    </div>
</section>

@include('partials.sections.quote-form')

<!-- Mobile Sticky CTA
<div class="fixed bottom-0 left-0 right-0 p-4 bg-white/80 dark:bg-navy/80 backdrop-blur-md border-t border-primary/20 z-[800] md:hidden">
    <a href="#quote" class="btn btn-primary w-full !rounded-full">Request Corporate Plan</a>
</div> -->
@endsection
