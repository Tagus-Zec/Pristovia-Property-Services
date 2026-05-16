/**
 * Enterprise Quote Wizard Module
 * Handles the 7-step inquiry process with validation and AJAX submission.
 */
export default function quoteWizard() {
    return {
        step: 1,
        loading: false,
        showSuccess: false,
        formData: {
            service_type: '',
            property_type: '',
            project_size: '',
            location: '',
            other_city: '',
            condition: '',
            preferred_date: '',
            full_name: '',
            email: '',
            phone: '',
            message: '',
            website_hp: ''
        },
        nextStep() {
            if (this.validateStep()) {
                this.step++;
                this.scrollToForm();
            }
        },
        prevStep() {
            if (this.step > 1) {
                this.step--;
                this.scrollToForm();
            }
        },
        validateStep() {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (this.step === 1 && (!this.formData.full_name || !this.formData.email || !emailRegex.test(this.formData.email) || !this.formData.phone)) {
                return this.error('Contact information is incomplete or invalid.');
            }
            if (this.step === 2 && !this.formData.property_type) return this.error('Asset classification required.');
            if (this.step === 3 && !this.formData.service_type) return this.error('Operational protocol required.');
            if (this.step === 4 && !this.formData.location) return this.error('GTA deployment location required.');
            if (this.step === 6 && !this.formData.preferred_date) return this.error('Scheduling window required.');
            return true;
        },
        error(msg) {
            alert(msg);
            return false;
        },
        scrollToForm() {
            const el = document.getElementById('quote');
            if (el) window.scrollTo({ top: el.offsetTop - 100, behavior: 'smooth' });
        },
        progressText() {
            const texts = [
                'Entity Information',
                'Asset Classification',
                'Operational Protocol',
                'Geographic Deployment',
                'Condition Assessment',
                'Phase Scheduling',
                'Technical Review'
            ];
            return texts[this.step - 1];
        },
        async submitForm() {
            if (!this.validateStep() || this.loading) return;
            this.loading = true;
            try {
                const response = await fetch('/api/quote', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify(this.formData)
                });
                const result = await response.json();
                if (result.success) {
                    this.showSuccess = true;
                } else {
                    alert(result.message || 'System error detected.');
                }
            } catch (e) {
                alert('Connection failure. Check network infrastructure.');
            } finally {
                this.loading = false;
            }
        },
        resetForm() {
            this.showSuccess = false;
            this.step = 1;
            this.formData = {
                service_type: '', property_type: '', project_size: '', location: '',
                other_city: '', condition: '', preferred_date: '',
                full_name: '', email: '', phone: '', message: '', website_hp: ''
            };
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }
    };
}
