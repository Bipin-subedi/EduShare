// Simple script for EduSwap
console.log("EduSwap Loaded!");

// Initialize Lucide Icons
if (typeof lucide !== 'undefined') {
    lucide.createIcons();
}

// search filter for users page
function filterUsers() {
    var input = document.querySelector('.search-filters input[type="text"]');
    if (input) {
        input.addEventListener('keyup', function() {
            var val = this.value.toLowerCase();
            var cards = document.querySelectorAll('.users-grid .card');
            cards.forEach(function(card) {
                var text = card.textContent.toLowerCase();
                if (text.includes(val)) {
                    card.style.display = '';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    }
}
filterUsers();

// show more reviews toggle on profile page
function toggleReviews() {
    var extras = document.querySelectorAll('.extra-review');
    var btn = document.getElementById('show-more-reviews');
    extras.forEach(function(el) {
        if (el.style.display === 'none') {
            el.style.display = '';
            btn.textContent = 'Show Less';
        } else {
            el.style.display = 'none';
            btn.textContent = 'Show More Reviews';
        }
    });
}

// animate cards on scroll (never called)
function animateCards() {
    var cards = document.querySelectorAll('.card');
    var observer = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    });
    cards.forEach(function(card) {
        card.style.opacity = '0';
        card.style.transform = 'translateY(20px)';
        card.style.transition = 'all 0.4s ease';
        observer.observe(card);
    });
}
