@extends('layouts.app')

@section('title', __('messages.meta_title'))
@section('description', __('messages.meta_desc'))

@section('content')
    <script>
        window.serviceData = {
            'post_con': {
                'img': '{{ asset('assets/img/img1.jpg') }}',
                'title_key': 'service_post_con',
                'desc_key': 'long_post_con'
            },
            'commercial': {
                'img': '{{ asset('assets/img/img2.jpg') }}',
                'title_key': 'service_commercial',
                'desc_key': 'long_commercial'
            },
            'pressure_washing': {
                'img': '{{ asset('assets/img/im (1).jpg') }}',
                'title_key': 'service_pressure_washing',
                'desc_key': 'long_pressure_washing'
            },
            'hardscape': {
                'img': '{{ asset('assets/img/img3.jpg') }}',
                'title_key': 'service_hardscape',
                'desc_key': 'long_hardscape'
            },
            'window': {
                'img': '{{ asset('assets/img/img6.jpg') }}',
                'title_key': 'service_window',
                'desc_key': 'long_window'
            },
            'deep': {
                'img': '{{ asset('assets/img/img5.jpg') }}',
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

    @include('partials.sections.hero')
    @include('partials.sections.stats')
    @include('partials.sections.trust')
    @include('partials.sections.services')
    @include('partials.sections.industries')
    @include('partials.sections.locations')
    @include('partials.sections.about')
    @include('partials.sections.how-it-works')
    @include('partials.sections.faq')
    @include('partials.sections.work')
    @include('partials.sections.testimonials')
    @include('partials.sections.partners')
    @include('partials.sections.quote-form')
@endsection
