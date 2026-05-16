/**
 * AJAX Review System Module
 */
export default function reviewsModule() {
    return {
        reviews: [],
        loading: false,
        formData: {
            name: '',
            role: '',
            rating: 5,
            text: ''
        },
        async submitReview() {
            if (!this.formData.name || !this.formData.text) {
                alert('Please provide your name and feedback.');
                return;
            }
            this.loading = true;
            try {
                const response = await fetch('/api/review', {
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
                    alert('Thank you for your feedback! It will be visible after review.');
                    this.formData = { name: '', role: '', rating: 5, text: '' };
                }
            } catch (e) {
                alert('Submission failed.');
            } finally {
                this.loading = false;
            }
        }
    };
}
