<?php
$pageTitle = "Sri Lanka Tour Packages | Green Ceylon Travels";
$pageDesc = "Browse our hand-picked tour packages in Sri Lanka. Custom itinerary planning including cultural, hill country, beach, and wildlife adventure holidays.";
include 'includes/header.php';

$tours = include 'data/tours.php';
?>

<!-- Page Header -->
<div class="relative pt-32 pb-20 bg-brand-navy bg-cover bg-center text-center text-white tours-header-bg">
    <div class="max-w-4xl mx-auto px-4 animate-fade-in">
        <span class="text-brand-gold font-script text-3xl mb-2 block">
            Explore the Wonder of Asia
        </span>
        <h1 class="text-4xl md:text-5xl font-heading font-black">
            Our Tour Packages
        </h1>
        <p class="mt-4 text-white/80 text-sm md:text-base max-w-xl mx-auto">
            Choose from our pre-planned, fully customizable tour packages or tell us your dream destinations to build a bespoke journey.
        </p>
    </div>
</div>

<main class="bg-brand-cream py-16 flex-grow">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center mb-12">
            <h2 class="text-3xl sm:text-4xl font-heading font-black text-brand-navy mt-2">Choose Your Experience</h2>
            <p class="mt-4 text-brand-navy/70 text-sm md:text-base max-w-2xl mx-auto">All tour packages include premium air-conditioned transport, comfortable accommodation, guided tours, and are fully flexible.</p>
        </div>

        <!-- Filter Bar -->
        <div class="flex flex-wrap justify-center gap-2 mb-10">
            <button class="filter-btn active px-4 py-2 text-xs font-bold uppercase tracking-wider rounded-full border-2 transition-all cursor-pointer" data-filter="all">
                All
            </button>
            <button class="filter-btn px-4 py-2 text-xs font-bold uppercase tracking-wider rounded-full border-2 transition-all cursor-pointer" data-filter="cultural">
                Cultural
            </button>
            <button class="filter-btn px-4 py-2 text-xs font-bold uppercase tracking-wider rounded-full border-2 transition-all cursor-pointer" data-filter="beach-wildlife">
                Beach &amp; Wildlife
            </button>
            <button class="filter-btn px-4 py-2 text-xs font-bold uppercase tracking-wider rounded-full border-2 transition-all cursor-pointer" data-filter="honeymoon">
                Honeymoon
            </button>
            <button class="filter-btn px-4 py-2 text-xs font-bold uppercase tracking-wider rounded-full border-2 transition-all cursor-pointer" data-filter="grand-tour">
                Grand Tours (10+ days)
            </button>
            <button class="filter-btn px-4 py-2 text-xs font-bold uppercase tracking-wider rounded-full border-2 transition-all cursor-pointer" data-filter="customized">
                Customized
            </button>
        </div>

        <div id="tourGrid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($tours as $tour): ?>
                <?php include 'partials/tour-card.php'; ?>
            <?php endforeach; ?>
        </div>

        <!-- CTA Section -->
        <section class="relative overflow-hidden rounded-3xl bg-gradient-to-r from-brand-green-deep to-brand-green py-12 md:py-16 px-8 md:px-16 shadow-xl border border-brand-green-light/20 my-16 max-w-7xl mx-auto">
            <div class="absolute inset-0 opacity-10 pointer-events-none">
                <svg class="absolute -top-10 -right-10 w-96 h-96 text-white" fill="currentColor" viewBox="0 0 100 100">
                    <circle cx="50" cy="50" r="40" />
                </svg>
                <svg class="absolute -bottom-10 -left-10 w-72 h-72 text-white" fill="currentColor" viewBox="0 0 100 100">
                    <circle cx="50" cy="50" r="40" />
                </svg>
            </div>
            <div class="relative z-10 flex flex-col lg:flex-row items-center justify-between gap-8 text-center lg:text-left">
                <div class="max-w-2xl">
                    <h2 class="text-3xl md:text-4xl font-heading font-black text-white leading-tight">
                        Looking for a Tailor-Made Tour?
                    </h2>
                    <p class="mt-4 text-white/90 text-sm md:text-base font-light leading-relaxed">
                        Let our local destination planners design a custom Sri Lanka trip based on your preferences, duration, and budget.
                    </p>
                </div>
                <div class="shrink-0 w-full lg:w-auto">
                    <a href="contact.php">
                        <button class="w-full lg:w-auto bg-brand-gold hover:bg-brand-gold/90 text-brand-navy shadow-lg px-10 py-4 font-bold text-base rounded-xl cursor-pointer hover:scale-105 transition-transform">
                            Get a Free Quote
                        </button>
                    </a>
                </div>
            </div>
        </section>
    </div>
</main>

<style>
.filter-btn {
    border-color: rgba(11, 37, 69, 0.15);
    color: rgba(11, 37, 69, 0.7);
    background: transparent;
}
.filter-btn:hover {
    border-color: #4CAF50;
    color: #1E7E34;
    background: rgba(76, 175, 80, 0.06);
}
.filter-btn.active {
    border-color: #1E7E34;
    background: #1E7E34;
    color: #fff;
}
.tour-card-hidden {
    display: none;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterBtns = document.querySelectorAll('.filter-btn');
    const tourCards = document.querySelectorAll('#tourGrid > div');

    filterBtns.forEach(function(btn) {
        btn.addEventListener('click', function() {
            filterBtns.forEach(function(b) { b.classList.remove('active'); });
            btn.classList.add('active');

            var filter = btn.getAttribute('data-filter');

            tourCards.forEach(function(card) {
                if (filter === 'all') {
                    card.classList.remove('tour-card-hidden');
                } else {
                    var cat = card.getAttribute('data-category');
                    if (cat === filter) {
                        card.classList.remove('tour-card-hidden');
                    } else {
                        card.classList.add('tour-card-hidden');
                    }
                }
            });
        });
    });
});
</script>

<!-- Inquiry Form Modal -->
<div id="inquiryFormModal" class="fixed inset-0 z-[200] hidden items-center justify-center bg-black/60 backdrop-blur-xs opacity-0 transition-opacity duration-300">
    <div class="bg-white rounded-3xl shadow-2xl max-w-2xl w-full mx-4 max-h-[90vh] overflow-y-auto transform scale-95 transition-transform duration-300">
        <div class="p-8">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-2xl font-heading font-black text-brand-navy">Start Planning Your Trip</h3>
                <button onclick="closeInquiryForm()" class="p-2 rounded-lg hover:bg-brand-navy/5 text-brand-navy/60 hover:text-brand-navy cursor-pointer">
                    <i data-lucide="x" class="w-6 h-6"></i>
                </button>
            </div>
            <p class="text-sm text-brand-navy/70 mb-6">Tell us about your dream Sri Lanka trip and we'll create a personalized itinerary and quote within 24 hours.</p>

            <form id="inquiryForm" class="space-y-5">
                <input type="hidden" name="service" value="customized-tour">

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-brand-navy/70 mb-2">Your Name *</label>
                        <input type="text" name="name" required class="w-full px-4 py-3 text-sm rounded-xl bg-brand-cream border border-brand-navy/10 focus:border-brand-green-deep outline-hidden transition">
                    </div>
                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-brand-navy/70 mb-2">Email Address *</label>
                        <input type="email" name="email" required class="w-full px-4 py-3 text-sm rounded-xl bg-brand-cream border border-brand-navy/10 focus:border-brand-green-deep outline-hidden transition">
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-brand-navy/70 mb-2">Phone Number *</label>
                        <input type="text" name="phone" required class="w-full px-4 py-3 text-sm rounded-xl bg-brand-cream border border-brand-navy/10 focus:border-brand-green-deep outline-hidden transition" placeholder="+94 77 123 4567">
                    </div>
                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-brand-navy/70 mb-2">Travel Dates</label>
                        <input type="text" name="dates" class="w-full px-4 py-3 text-sm rounded-xl bg-brand-cream border border-brand-navy/10 focus:border-brand-green-deep outline-hidden transition" placeholder="e.g. Jan 2027">
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-brand-navy/70 mb-2">Number of Days *</label>
                        <select name="duration" required class="w-full px-4 py-3 text-sm rounded-xl bg-brand-cream border border-brand-navy/10 focus:border-brand-green-deep outline-hidden transition">
                            <option value="">Select duration</option>
                            <option>3-5 days</option>
                            <option>6-8 days</option>
                            <option>9-11 days</option>
                            <option>12-14 days</option>
                            <option>15+ days</option>
                            <option>Not sure yet</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-brand-navy/70 mb-2">Group Size *</label>
                        <select name="group_size" required class="w-full px-4 py-3 text-sm rounded-xl bg-brand-cream border border-brand-navy/10 focus:border-brand-green-deep outline-hidden transition">
                            <option value="">Select group size</option>
                            <option>Solo traveler</option>
                            <option>Couple</option>
                            <option>Family (3-5)</option>
                            <option>Small group (6-10)</option>
                            <option>Large group (10+)</option>
                        </select>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-brand-navy/70 mb-2">Budget Range</label>
                        <select name="budget" class="w-full px-4 py-3 text-sm rounded-xl bg-brand-cream border border-brand-navy/10 focus:border-brand-green-deep outline-hidden transition">
                            <option value="">Select budget</option>
                            <option>Budget ($50-100/day)</option>
                            <option>Standard ($100-150/day)</option>
                            <option>Comfort ($150-200/day)</option>
                            <option>Luxury ($200+/day)</option>
                            <option>Not sure</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-brand-navy/70 mb-2">Accommodation Level</label>
                        <select name="accommodation" class="w-full px-4 py-3 text-sm rounded-xl bg-brand-cream border border-brand-navy/10 focus:border-brand-green-deep outline-hidden transition">
                            <option value="">Select level</option>
                            <option>Standard (3-star)</option>
                            <option>Comfort (3-4 star)</option>
                            <option>Luxury (4-5 star)</option>
                            <option>No preference</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold uppercase tracking-wider text-brand-navy/70 mb-2">Destinations & Interests</label>
                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
                        <label class="flex items-center gap-2 text-sm text-brand-navy/80 cursor-pointer">
                            <input type="checkbox" name="interests[]" value="cultural-triangle" class="rounded border-brand-navy/20 text-brand-green-deep focus:ring-brand-green-deep"> Cultural Triangle
                        </label>
                        <label class="flex items-center gap-2 text-sm text-brand-navy/80 cursor-pointer">
                            <input type="checkbox" name="interests[]" value="tea-country" class="rounded border-brand-navy/20 text-brand-green-deep focus:ring-brand-green-deep"> Tea Country
                        </label>
                        <label class="flex items-center gap-2 text-sm text-brand-navy/80 cursor-pointer">
                            <input type="checkbox" name="interests[]" value="beaches" class="rounded border-brand-navy/20 text-brand-green-deep focus:ring-brand-green-deep"> Beaches
                        </label>
                        <label class="flex items-center gap-2 text-sm text-brand-navy/80 cursor-pointer">
                            <input type="checkbox" name="interests[]" value="wildlife" class="rounded border-brand-navy/20 text-brand-green-deep focus:ring-brand-green-deep"> Wildlife Safaris
                        </label>
                        <label class="flex items-center gap-2 text-sm text-brand-navy/80 cursor-pointer">
                            <input type="checkbox" name="interests[]" value="hiking" class="rounded border-brand-navy/20 text-brand-green-deep focus:ring-brand-green-deep"> Hiking & Nature
                        </label>
                        <label class="flex items-center gap-2 text-sm text-brand-navy/80 cursor-pointer">
                            <input type="checkbox" name="interests[]" value="wellness" class="rounded border-brand-navy/20 text-brand-green-deep focus:ring-brand-green-deep"> Wellness & Spa
                        </label>
                        <label class="flex items-center gap-2 text-sm text-brand-navy/80 cursor-pointer">
                            <input type="checkbox" name="interests[]" value="food" class="rounded border-brand-navy/20 text-brand-green-deep focus:ring-brand-green-deep"> Food & Cooking
                        </label>
                        <label class="flex items-center gap-2 text-sm text-brand-navy/80 cursor-pointer">
                            <input type="checkbox" name="interests[]" value="adventure" class="rounded border-brand-navy/20 text-brand-green-deep focus:ring-brand-green-deep"> Adventure Sports
                        </label>
                        <label class="flex items-center gap-2 text-sm text-brand-navy/80 cursor-pointer">
                            <input type="checkbox" name="interests[]" value="heritage" class="rounded border-brand-navy/20 text-brand-green-deep focus:ring-brand-green-deep"> Heritage & History
                        </label>
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold uppercase tracking-wider text-brand-navy/70 mb-2">Special Requirements</label>
                    <textarea name="message" rows="3" class="w-full px-4 py-3 text-sm rounded-xl bg-brand-cream border border-brand-navy/10 focus:border-brand-green-deep outline-hidden transition resize-none" placeholder="Any specific requests, mobility concerns, or special occasions?"></textarea>
                </div>

                <button type="submit" class="w-full bg-brand-gold hover:bg-brand-gold/90 text-brand-navy font-bold px-6 py-4 rounded-xl cursor-pointer flex items-center justify-center gap-2 shadow-md transition-all active:scale-95 text-base">
                    <i data-lucide="send" class="w-5 h-5"></i>
                    Send Inquiry via WhatsApp
                </button>
            </form>
        </div>
    </div>
</div>

<script>
function openInquiryForm() {
    var modal = document.getElementById('inquiryFormModal');
    modal.classList.remove('hidden');
    modal.classList.add('flex');
    document.body.classList.add('overflow-hidden');
    setTimeout(function() {
        modal.classList.remove('opacity-0');
        modal.querySelector('div:first-child').classList.remove('scale-95');
    }, 10);
    lucide.createIcons();
}

function closeInquiryForm() {
    var modal = document.getElementById('inquiryFormModal');
    modal.classList.add('opacity-0');
    modal.querySelector('div:first-child').classList.add('scale-95');
    document.body.classList.remove('overflow-hidden');
    setTimeout(function() {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    }, 300);
}

document.getElementById('inquiryForm').addEventListener('submit', function(e) {
    e.preventDefault();
    var form = this;
    var name = form.querySelector('[name="name"]').value;
    var email = form.querySelector('[name="email"]').value;
    var phone = form.querySelector('[name="phone"]').value;
    var dates = form.querySelector('[name="dates"]').value;
    var duration = form.querySelector('[name="duration"]').value;
    var groupSize = form.querySelector('[name="group_size"]').value;
    var budget = form.querySelector('[name="budget"]').value || 'Not specified';
    var accommodation = form.querySelector('[name="accommodation"]').value || 'Not specified';
    var interests = [];
    form.querySelectorAll('[name="interests[]"]:checked').forEach(function(cb) {
        interests.push(cb.value);
    });
    var message = form.querySelector('[name="message"]').value;

    var text = "Hello Green Tours, I would like to plan a custom trip!\n\n" +
               "*Service:* Customized Tour\n" +
               "*Name:* " + name + "\n" +
               "*Email:* " + email + "\n" +
               "*Phone:* " + phone + "\n" +
               "*Travel Dates:* " + (dates || 'Not specified') + "\n" +
               "*Duration:* " + duration + "\n" +
               "*Group Size:* " + groupSize + "\n" +
               "*Budget:* " + budget + "\n" +
               "*Accommodation:* " + accommodation + "\n" +
               "*Interests:* " + (interests.length ? interests.join(', ') : 'Not specified') + "\n" +
               "*Special Requirements:* " + (message || 'None');

    var whatsappUrl = "https://wa.me/94719084259?text=" + encodeURIComponent(text);
    window.open(whatsappUrl, '_blank');
    closeInquiryForm();
});

document.getElementById('inquiryFormModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeInquiryForm();
    }
});
</script>

<?php include 'includes/footer.php'; ?>