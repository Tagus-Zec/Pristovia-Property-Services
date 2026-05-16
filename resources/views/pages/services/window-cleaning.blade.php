@extends('layouts.app')

@section('title', 'Professional Window Cleaning GTA | Pristovia')
@section('description', 'Crystal clear window cleaning for commercial and residential properties in Toronto, Mississauga, and Vaughan. Interior and exterior detailing.')

@section('content')
<section class="relative py-40 bg-navy text-white overflow-hidden">
    <div class="absolute inset-0 opacity-20">
        <img src="{{ asset('assets/img/img20.jpg') }}" alt="Window Cleaning" class="w-full h-full object-cover scale-110">
        <div class="absolute inset-0 bg-gradient-to-b from-navy/50 to-navy"></div>
    </div>
    <div class="max-w-7xl mx-auto px-6 lg:px-10 relative z-10 text-center">
        <div class="inline-block bg-primary/20 backdrop-blur-md px-6 py-2 rounded-full mb-8 border border-primary/30">
            <span class="text-primary text-xs font-black uppercase tracking-[0.3em]">Precision Clarity</span>
        </div>
        <h1 class="text-5xl md:text-8xl font-montserrat font-black mb-8 uppercase tracking-tighter leading-[0.9]">Window <br><span class="text-primary">Cleaning</span></h1>
        <p class="text-xl md:text-2xl text-gray-300 max-w-4xl mx-auto mb-12 font-medium">
            Professional streak-free window cleaning for GTA corporate facilities and luxury properties. Utilizing Pure Water technology for uncompromising brilliance.
        </p>
        <div class="flex flex-col sm:flex-row justify-center gap-6">
            <a href="#quote" class="btn btn-primary !px-16">Request a Quote</a>
            <a href="tel:+14376611132" class="btn btn-outline !border-white !text-white !px-16 hover:!bg-white hover:!text-navy" style="border: white 2px solid;">Speak to Support</a>
        </div>
    </div>
</section>

<section class="pt-24 bg-white dark:bg-navy-dark">
    <div class="max-w-7xl mx-auto px-6 lg:px-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-24 items-center">
            <div class="rounded-[50px] overflow-hidden shadow-2xl order-1 lg:order-1 border-8 border-navy-light/5">
                <img src="{{ asset('assets/img/img10 (9).jpg') }}" alt="Office Cleaning" class="w-full h-auto">
            </div>
            <div class="text-center max-w-4xl mx-auto mb-24">
            <h2 class="text-primary font-bold uppercase tracking-widest text-xs mb-6">Structural Brilliance</h2>
            <h3 class="text-4xl md:text-5xl font-montserrat font-black text-navy dark:text-white uppercase tracking-tight mb-8">Clarity & Uncompromising <br>Brilliance</h3>
            <p class="text-lg text-gray-500 dark:text-gray-400 leading-relaxed font-medium">
                {{ __('messages.long_window') }}
            </p>
        </div>
     </div>
</section>

        <section class="py-24 bg-white dark:bg-navy-dark">
    <div class="max-w-7xl mx-auto px-6 lg:px-10">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            <div class="p-12 glass-card rounded-[40px] border-primary/10 text-center group transition-all">
                <div class="w-20 h-20 bg-primary/10 text-primary rounded-3xl flex items-center justify-center mx-auto mb-8 text-3xl group-hover:scale-110 transition-transform"><i class="fas fa-droplet"></i></div>
                <h4 class="font-bold text-navy dark:text-white uppercase text-xs tracking-[0.2em] mb-4">Pure Water Tech</h4>
                <p class="text-sm text-gray-500">Deionized water systems ensuring a streak-free dry without chemical residue.</p>
            </div>
            <div class="p-12 glass-card rounded-[40px] border-primary/10 text-center group transition-all">
                <div class="w-20 h-20 bg-primary/10 text-primary rounded-3xl flex items-center justify-center mx-auto mb-8 text-3xl group-hover:scale-110 transition-transform"><i class="fas fa-layer-group"></i></div>
                <h4 class="font-bold text-navy dark:text-white uppercase text-xs tracking-[0.2em] mb-4">Total Detailing</h4>
                <p class="text-sm text-gray-500">Comprehensive cleaning of frames, sills, and tracks included as standard.</p>
            </div>
            <div class="p-12 glass-card rounded-[40px] border-primary/10 text-center group transition-all">
                <div class="w-20 h-20 bg-primary/10 text-primary rounded-3xl flex items-center justify-center mx-auto mb-8 text-3xl group-hover:scale-110 transition-transform"><i class="fas fa-shield-alt"></i></div>
                <h4 class="font-bold text-navy dark:text-white uppercase text-xs tracking-[0.2em] mb-4">High-Rise Safety</h4>
                <p class="text-sm text-gray-500">WSIB compliant ladder and lift operations for complex commercial facades.</p>
            </div>
        </div>
    </div>
</section>

@include('partials.sections.quote-form')

<!-- Mobile Sticky CTA 
<div class="fixed bottom-0 left-0 right-0 p-4 bg-white/80 dark:bg-navy/80 backdrop-blur-md border-t border-primary/20 z-[800] md:hidden">
    <a href="#quote" class="btn btn-primary w-full !rounded-full">Book Window Service</a>
</div>-->
@endsection
