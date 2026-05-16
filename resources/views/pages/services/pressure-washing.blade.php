@extends('layouts.app')

@section('title', 'Professional Pressure Washing GTA | Pristovia')
@section('description', 'High-performance exterior pressure washing for commercial and residential properties in Toronto. Restore your property\'s curb appeal.')

@section('content')
<section class="relative py-40 bg-navy text-white overflow-hidden">
    <div class="absolute inset-0 opacity-20">
        <img src="{{ asset('assets/img/img1.jpg') }}" alt="Pressure Washing" class="w-full h-full object-cover scale-110">
        <div class="absolute inset-0 bg-gradient-to-b from-navy/50 to-navy"></div>
    </div>
    <div class="max-w-7xl mx-auto px-6 lg:px-10 relative z-10 text-center">
        <div class="inline-block bg-primary/20 backdrop-blur-md px-6 py-2 rounded-full mb-8 border border-primary/30">
            <span class="text-primary text-xs font-black uppercase tracking-[0.3em]">Exterior Restoration</span>
        </div>
        <h1 class="text-5xl md:text-8xl font-montserrat font-black mb-8 uppercase tracking-tighter leading-[0.9]">Pressure <br><span class="text-primary">Washing</span></h1>
        <p class="text-xl md:text-2xl text-gray-300 max-w-4xl mx-auto mb-12 font-medium">
            Professional-grade exterior restoration for GTA commercial assets. We remove years of grime, mold, and industrial pollutants from every substrate.
        </p>
        <div class="flex flex-col sm:flex-row justify-center gap-6">
            <a href="#quote" class="btn btn-primary !px-16">Request a Quote</a>
            <a href="tel:+14376611132" class="btn btn-outline !border-white !text-white !px-16 hover:!bg-white hover:!text-navy" style="border: white 2px solid;">Emergency Service</a>
        </div>
    </div>
</section>

<section class="py-24 bg-white dark:bg-navy-dark">
    <div class="max-w-7xl mx-auto px-6 lg:px-10">

        <div class="text-center max-w-4xl mx-auto mb-24">
            <h2 class="text-primary font-bold uppercase tracking-widest text-xs mb-6">Controlled Precision</h2>
            <h3 class="text-4xl md:text-5xl font-montserrat font-black text-navy dark:text-white uppercase tracking-tight mb-8">Restore Your Asset's <br>Curb Appeal</h3>
            <p class="text-lg text-gray-500 dark:text-gray-400 leading-relaxed font-medium">
                {{ __('messages.long_pressure_washing') }}
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="p-12 glass-card rounded-[40px] border-primary/10 hover:border-primary transition-all text-center group">
                <div class="w-16 h-16 rounded-2xl bg-primary/10 text-primary flex items-center justify-center mx-auto mb-8 text-2xl group-hover:scale-110 transition-transform"><i class="fas fa-car-side"></i></div>
                <h4 class="font-bold text-navy dark:text-white uppercase text-xs tracking-[0.2em] mb-4">Driveways & Lots</h4>
                <p class="text-sm text-gray-500">Commercial parking logistics and driveway restoration.</p>
            </div>
            <div class="p-12 glass-card rounded-[40px] border-primary/10 hover:border-primary transition-all text-center group">
                <div class="w-16 h-16 rounded-2xl bg-primary/10 text-primary flex items-center justify-center mx-auto mb-8 text-2xl group-hover:scale-110 transition-transform"><i class="fas fa-building"></i></div>
                <h4 class="font-bold text-navy dark:text-white uppercase text-xs tracking-[0.2em] mb-4">Building Facades</h4>
                <p class="text-sm text-gray-500">Safe cleaning for brick, stone, and metal cladding.</p>
            </div>
            <div class="p-12 glass-card rounded-[40px] border-primary/10 hover:border-primary transition-all text-center group">
                <div class="w-16 h-16 rounded-2xl bg-primary/10 text-primary flex items-center justify-center mx-auto mb-8 text-2xl group-hover:scale-110 transition-transform"><i class="fas fa-droplet"></i></div>
                <h4 class="font-bold text-navy dark:text-white uppercase text-xs tracking-[0.2em] mb-4">Eco-Friendly</h4>
                <p class="text-sm text-gray-500">Biodegradable solutions that protect GTA greenery.</p>
            </div>
        </div>
    </div>
</section>

@include('partials.sections.quote-form')
<!-- Mobile Sticky CTA (Smart Scroll Hide/Show) 
<div 
    x-data="{
        lastScroll: 0,
        hideCTA: false
    }"
    @scroll.window="
        const current = window.pageYOffset;
        hideCTA = current > lastScroll && current > 120;
        lastScroll = current;
    "
    class="fixed bottom-0 left-0 right-0 p-4 bg-white/80 dark:bg-navy/80 backdrop-blur-md border-t border-primary/20 z-[800] md:hidden transition-transform duration-300"
    :class="hideCTA ? 'translate-y-full' : 'translate-y-0'"
>

    <a href="#quote"
       class="btn btn-primary w-full !rounded-full flex items-center justify-center gap-2">

        <i class="fas fa-pen-nib"></i>
        Book Exterior Service
    </a>

</div>-->
@endsection
