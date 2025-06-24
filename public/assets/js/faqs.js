document.addEventListener('DOMContentLoaded', function () {
    const faqTriggers = document.querySelectorAll('.faq-trigger');

    faqTriggers.forEach(trigger => {
        trigger.addEventListener('click', function () {
            const targetId = this.getAttribute('data-target');
            const targetContent = this.nextElementSibling;
            const targetIcon = this.querySelector('.faq-icon');

            // Close all other FAQ items
            faqTriggers.forEach(otherTrigger => {
                if (otherTrigger !== this) {
                    const otherContent = otherTrigger.nextElementSibling;
                    const otherIcon = otherTrigger.querySelector('.faq-icon');

                    otherContent.classList.add('hidden');
                    otherIcon.classList.remove('rotate-180');
                }
            });

            // Toggle current FAQ item
            if (targetContent.classList.contains('hidden')) {
                targetContent.classList.remove('hidden');
                targetIcon.classList.add('rotate-180');
            } else {
                targetContent.classList.add('hidden');
                targetIcon.classList.remove('rotate-180');
            }
        });
    });
});