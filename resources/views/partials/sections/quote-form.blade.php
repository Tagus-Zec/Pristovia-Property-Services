<section id="quote" class="py-24 bg-white dark:bg-navy-dark relative overflow-hidden" x-data="quoteWizard()">
    <!-- Background Decor -->
    <div class="absolute top-0 right-0 w-1/2 h-full bg-primary/5 -skew-x-12 translate-x-1/3 pointer-events-none"></div>

    <div class="max-w-4xl mx-auto px-6 relative z-10">
        <div class="text-center mb-16 reveal active">
            <h2 class="text-primary font-bold uppercase tracking-[0.3em] text-xs mb-4">Inquiry Portal</h2>
            <h3 class="text-4xl md:text-6xl font-montserrat font-black text-navy dark:text-white mb-6 uppercase tracking-tight">
                Enterprise <span class="text-primary">Quote</span> Wizard
            </h3>
        </div>

        <!-- Progress Indicator -->
        <div class="mb-16 reveal active">
            <div class="flex justify-between items-end mb-4">
                <div class="space-y-1">
                    <span class="text-[10px] font-black text-primary uppercase tracking-[0.2em]">Phase Status</span>
                    <h4 class="text-xl font-bold text-navy dark:text-white" x-text="progressText()"></h4>
                </div>
                <div class="text-right">
                    <span class="text-3xl font-black text-primary/20 dark:text-white/10" x-text="'0' + step"></span>
                    <span class="text-sm font-bold text-gray-400">/ 07</span>
                </div>
            </div>
            <div class="h-1.5 w-full bg-gray-100 dark:bg-white/5 rounded-full overflow-hidden flex gap-1 p-0.5">
                <template x-for="i in 7">
                    <div class="h-full rounded-full transition-all duration-700 flex-1" 
                         :class="step >= i ? 'bg-primary shadow-[0_0_10px_rgba(197,160,34,0.5)]' : 'bg-gray-200 dark:bg-white/10'"></div>
                </template>
            </div>
        </div>

        <!-- Wizard Logic Container -->
        <form @submit.prevent="submitForm" class="glass-card p-8 md:p-16 rounded-[40px] shadow-3xl relative border-primary/10 overflow-hidden">
            <!-- Loader -->
            <div x-show="loading" x-cloak class="absolute inset-0 bg-white/80 dark:bg-navy/80 backdrop-blur-md z-[50] flex flex-col items-center justify-center space-y-4">
                <div class="w-16 h-16 border-4 border-primary/20 border-t-primary rounded-full animate-spin"></div>
                <p class="text-primary font-bold uppercase tracking-widest text-[10px]">Syncing with Operations...</p>
            </div>

            <input type="hidden" x-model="formData.website_hp">

            <!-- Phase 1: Contact Info -->
            <div x-show="step === 1" x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 translate-x-12" x-transition:enter-end="opacity-100 translate-x-0" class="space-y-10">
                <h3 class="text-3xl font-black text-navy dark:text-white uppercase">Corporate Contact</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="space-y-3"><label class="text-[10px] font-black uppercase tracking-widest opacity-40">Full Name</label><input type="text" x-model="formData.full_name" class="form-input" placeholder="e.g. John Doe"></div>
                    <div class="space-y-3"><label class="text-[10px] font-black uppercase tracking-widest opacity-40">Business Email</label><input type="email" x-model="formData.email" class="form-input" placeholder="name@company.com"></div>
                    <div class="space-y-3 md:col-span-2"><label class="text-[10px] font-black uppercase tracking-widest opacity-40">Direct Phone</label><input type="tel" x-model="formData.phone" class="form-input" placeholder="+1 (___) ___ - ____"></div>
                </div>
            </div>

            <!-- Phase 2: Property Type -->
            <div x-show="step === 2" x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 translate-x-12" x-transition:enter-end="opacity-100 translate-x-0" class="space-y-10">
                <h3 class="text-3xl font-black text-navy dark:text-white uppercase">Asset Classification</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <template x-for="type in ['Office', 'Retail', 'Industrial', 'Medical', 'Construction', 'Other']">
                        <button type="button" @click="formData.property_type = type; nextStep()" :class="formData.property_type === type ? 'border-primary bg-primary/10' : 'border-navy/5 dark:border-white/5'" class="p-6 border-2 rounded-2xl text-left transition-all hover:border-primary/50">
                            <span class="font-black text-navy dark:text-white uppercase tracking-widest text-[10px]" x-text="type"></span>
                        </button>
                    </template>
                </div>
            </div>

            <!-- Phase 3: Service Type -->
            <div x-show="step === 3" x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 translate-x-12" x-transition:enter-end="opacity-100 translate-x-0" class="space-y-10">
                <h3 class="text-3xl font-black text-navy dark:text-white uppercase">Operational Protocol</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <template x-for="s in ['Commercial Janitorial', 'Post-Construction', 'Window Detailing', 'Pressure Restoration', 'Asset Maintenance']">
                        <button type="button" @click="formData.service_type = s; nextStep()" :class="formData.service_type === s ? 'border-primary bg-primary/10' : 'border-navy/5 dark:border-white/5'" class="p-6 border-2 rounded-2xl flex justify-between items-center transition-all hover:border-primary/50">
                            <span class="font-black text-navy dark:text-white uppercase tracking-widest text-[10px]" x-text="s"></span>
                            <i class="fas fa-check-circle text-primary" x-show="formData.service_type === s"></i>
                        </button>
                    </template>
                </div>
            </div>

            <!-- Phase 4: Location -->
            <div x-show="step === 4" x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 translate-x-12" x-transition:enter-end="opacity-100 translate-x-0" class="space-y-10">
                <h3 class="text-3xl font-black text-navy dark:text-white uppercase">GTA Deployment</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <select x-model="formData.location" class="form-input">
                        <option value="">Select Region</option>
                        <option value="Toronto">Toronto</option>
                        <option value="Mississauga">Mississauga</option>
                        <option value="Vaughan">Vaughan</option>
                        <option value="Other">Other</option>
                    </select>
                    <input type="text" x-show="formData.location === 'Other'" x-model="formData.other_city" class="form-input" placeholder="Specify Region">
                </div>
            </div>

            <!-- Phase 5: Condition -->
            <div x-show="step === 5" x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 translate-x-12" x-transition:enter-end="opacity-100 translate-x-0" class="space-y-10">
                <h3 class="text-3xl font-black text-navy dark:text-white uppercase">Condition Status</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <template x-for="c in ['New Build', 'Standard Wear', 'Heavy Traffic', 'Neglected']">
                        <button type="button" @click="formData.condition = c; nextStep()" :class="formData.condition === c ? 'border-primary bg-primary/10' : 'border-navy/5 dark:border-white/5'" class="p-6 border-2 rounded-2xl transition-all">
                            <span class="font-black text-navy dark:text-white uppercase tracking-widest text-[10px]" x-text="c"></span>
                        </button>
                    </template>
                </div>
            </div>

            <!-- Phase 6: Date -->
            <div x-show="step === 6" x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 translate-x-12" x-transition:enter-end="opacity-100 translate-x-0" class="space-y-10">
                <h3 class="text-3xl font-black text-navy dark:text-white uppercase">Deployment Schedule</h3>
                <div class="max-w-xs mx-auto">
                    <input type="date" x-model="formData.preferred_date" class="form-input text-center text-xl font-black">
                </div>
            </div>

            <!-- Phase 7: Notes -->
            <div x-show="step === 7" x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 translate-x-12" x-transition:enter-end="opacity-100 translate-x-0" class="space-y-10">
                <h3 class="text-3xl font-black text-navy dark:text-white uppercase">Technical Review</h3>
                <textarea x-model="formData.message" rows="4" class="form-input" placeholder="Access protocols, square footage, specific requirements..."></textarea>
            </div>

            <!-- Global Controls -->
            <div class="mt-16 flex flex-col md:flex-row gap-4">
                <button type="button" x-show="step > 1" @click="prevStep()" class="btn btn-outline flex-1">Back</button>
                <button type="button" x-show="step < 7" @click="nextStep()" class="btn btn-primary flex-[2]">Next Phase</button>
                <button type="submit" x-show="step === 7" class="btn btn-primary flex-[2]" :disabled="loading">Submit Proposal</button>
            </div>
        </form>
    </div>

    <!-- Modals (Success/Error) -->
    <div x-show="showSuccess" x-cloak class="fixed inset-0 z-[3000] flex items-center justify-center p-6 bg-navy/90 backdrop-blur-xl">
        <div class="glass-card p-12 md:p-20 rounded-[50px] max-w-2xl w-full text-center space-y-8 border-primary/30">
            <i class="fas fa-check-double text-5xl text-primary"></i>
            <h2 class="text-4xl font-black text-white uppercase tracking-tighter">Transmission <span class="text-primary">OK</span></h2>
            <p class="text-gray-400">Your proposal request has been logged. Our operations team will contact you within 60 minutes.</p>
            <button @click="resetForm()" class="btn btn-primary w-full">Return to Dashboard</button>
        </div>
    </div>
</section>
