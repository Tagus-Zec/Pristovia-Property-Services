<section id="faq" class="py-24 bg-white dark:bg-navy transition-colors duration-500">
    <div class="max-w-[1200px] mx-auto px-5">
        <div class="text-center mb-16 reveal">
            <h2 class="text-4xl font-bold font-montserrat relative pb-4 after:content-[''] after:absolute after:bottom-0 after:left-1/2 after:-translate-x-1/2 after:w-20 after:h-1 after:bg-primary after:rounded-full text-navy dark:text-white">{{ __('messages.faq_title') }}</h2>
        </div>
        <div class="max-w-[800px] mx-auto reveal" x-data="{ activeFaq: 1 }">
            <div class="border-b border-navy/10 dark:border-white/10">
                <button 
                    @click="activeFaq = activeFaq === 1 ? null : 1"
                    class="w-full py-6 flex justify-between items-center text-xl font-bold text-left font-montserrat text-navy dark:text-white hover:text-primary transition-colors"
                >
                    {{ __('messages.faq_1_q') }} 
                    <i class="fas transition-transform duration-300" :class="activeFaq === 1 ? 'fa-minus' : 'fa-plus'"></i>
                </button>
                <div 
                    x-show="activeFaq === 1" 
                    x-collapse
                >
                    <p class="pb-6 text-navy/60 dark:text-white/60">{{ __('messages.faq_1_a') }}</p>
                </div>
            </div>
            <div class="border-b border-navy/10 dark:border-white/10">
                <button 
                    @click="activeFaq = activeFaq === 2 ? null : 2"
                    class="w-full py-6 flex justify-between items-center text-xl font-bold text-left font-montserrat text-navy dark:text-white hover:text-primary transition-colors"
                >
                    {{ __('messages.faq_2_q') }} 
                    <i class="fas transition-transform duration-300" :class="activeFaq === 2 ? 'fa-minus' : 'fa-plus'"></i>
                </button>
                <div 
                    x-show="activeFaq === 2" 
                    x-collapse
                >
                    <p class="pb-6 text-navy/60 dark:text-white/60">{{ __('messages.faq_2_a') }}</p>
                </div>
            </div>
            <div class="border-b border-navy/10 dark:border-white/10">
                <button 
                    @click="activeFaq = activeFaq === 3 ? null : 3"
                    class="w-full py-6 flex justify-between items-center text-xl font-bold text-left font-montserrat text-navy dark:text-white hover:text-primary transition-colors"
                >
                    {{ __('messages.faq_3_q') }} 
                    <i class="fas transition-transform duration-300" :class="activeFaq === 3 ? 'fa-minus' : 'fa-plus'"></i>
                </button>
                <div 
                    x-show="activeFaq === 3" 
                    x-collapse
                >
                    <p class="pb-6 text-navy/60 dark:text-white/60">{{ __('messages.faq_3_a') }}</p>
                </div>
            </div>
            <div class="border-b border-navy/10 dark:border-white/10">
                <button 
                    @click="activeFaq = activeFaq === 4 ? null : 4"
                    class="w-full py-6 flex justify-between items-center text-xl font-bold text-left font-montserrat text-navy dark:text-white hover:text-primary transition-colors"
                >
                    {{ __('messages.faq_4_q') }} 
                    <i class="fas transition-transform duration-300" :class="activeFaq === 4 ? 'fa-minus' : 'fa-plus'"></i>
                </button>
                <div 
                    x-show="activeFaq === 4" 
                    x-collapse
                >
                    <p class="pb-6 text-navy/60 dark:text-white/60">{{ __('messages.faq_4_a') }}</p>
                </div>
            </div>
        </div>
    </div>
</section>