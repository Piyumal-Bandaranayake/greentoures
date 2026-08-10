<?php
$tours = include 'data/tours.php';

$slug = isset($_GET['slug']) ? $_GET['slug'] : '';
$tour = null;

foreach ($tours as $t) {
    if ($t['slug'] === $slug) {
        $tour = $t;
        break;
    }
}

if (!$tour) {
    // If not found, redirect to tours.php or show a simple error
    $pageTitle = "Tour Not Found - Green Ceylon";
    include 'includes/header.php';
    echo '<main class="flex-grow flex flex-col items-center justify-center py-20 bg-brand-cream text-center px-4">
            <h1 class="text-4xl font-heading font-black text-brand-navy mb-4">Tour Package Not Found</h1>
            <p class="text-brand-navy/70 mb-8 max-w-md">We couldn\'t find the tour package you were looking for. Please browse our available tours.</p>
            <a href="tours.php"><button class="bg-brand-green-deep hover:bg-brand-green text-white font-bold px-6 py-3 rounded-xl cursor-pointer">View All Tours</button></a>
          </main>';
    include 'includes/footer.php';
    exit;
}

$pageTitle = $tour['title'] . " | Green Ceylon Travels";
$pageDesc = $tour['description'];
include 'includes/header.php';
?>
<link rel="stylesheet" href="assets/css/itinerary.css">


<!-- Tour Banner -->
<div class="relative pt-40 pb-24 bg-brand-navy bg-cover bg-center text-white"
     style="background-image: linear-gradient(rgba(11, 37, 69, 0.6), rgba(11, 37, 69, 0.85)), url('<?php echo $tour['image']; ?>');">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl">
            <?php if (isset($tour['tag'])): ?>
                <span class="bg-brand-pink text-white text-xxs font-bold uppercase tracking-widest px-3 py-1.5 rounded-full shadow-sm mb-4 inline-block">
                    <?php echo $tour['tag']; ?>
                </span>
            <?php endif; ?>
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-heading font-black leading-tight">
                <?php echo $tour['title']; ?>
            </h1>
            
            <div class="flex flex-wrap items-center gap-6 mt-6 text-sm text-white/90">
                <span class="flex items-center gap-2">
                    <i data-lucide="clock" class="w-4 h-4 text-brand-gold"></i>
                    <?php echo $tour['duration']; ?>
                </span>
                <span class="flex items-center gap-2">
                    <i data-lucide="star" class="w-4 h-4 fill-brand-gold text-brand-gold"></i>
                    <span class="font-bold"><?php echo $tour['rating']; ?></span> (<?php echo $tour['reviewsCount']; ?> Reviews)
                </span>
            </div>
        </div>
    </div>
</div>

<!-- Main Grid Content -->
<main class="bg-brand-cream py-16 flex-grow">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
            
            <!-- Left Content Area (Col Span 2) -->
            <div class="lg:col-span-2 space-y-12">
                <!-- Tour Description -->
                <div class="bg-white p-8 rounded-2xl border border-brand-navy/5 shadow-xs">
                    <h2 class="text-2xl font-heading font-bold text-brand-navy mb-4">Tour Overview</h2>
                    <p class="text-brand-navy/70 leading-relaxed text-base"><?php echo $tour['description']; ?></p>
                    
                    <h3 class="text-lg font-heading font-bold text-brand-navy mt-8 mb-4">Highlights</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                        <?php foreach ($tour['highlights'] as $highlight): ?>
                            <div class="flex items-start text-sm text-brand-navy/85">
                                <i data-lucide="landmark" class="w-4 h-4 text-brand-green-deep mr-2 shrink-0 mt-0.5"></i>
                                <span><?php echo $highlight; ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <?php if (isset($tour['type']) && $tour['type'] === 'customized'): ?>
                <div class="bg-white p-8 rounded-2xl border border-brand-navy/5 shadow-xs">
                    <h2 class="text-2xl font-heading font-bold text-brand-navy mb-6">How It Works</h2>
                    <div class="space-y-8">
                        <div class="flex gap-5">
                            <div class="w-12 h-12 rounded-full bg-brand-green-deep text-white flex items-center justify-center shrink-0 text-lg font-bold">1</div>
                            <div>
                                <h3 class="text-lg font-heading font-bold text-brand-navy mb-2">Tell Us Your Preferences</h3>
                                <p class="text-brand-navy/70 text-sm leading-relaxed">Share your travel dates, number of days, group size, and must-see destinations. Let us know what matters most to you.</p>
                            </div>
                        </div>
                        <div class="flex gap-5">
                            <div class="w-12 h-12 rounded-full bg-brand-green-deep text-white flex items-center justify-center shrink-0 text-lg font-bold">2</div>
                            <div>
                                <h3 class="text-lg font-heading font-bold text-brand-navy mb-2">Select Interests & Destinations</h3>
                                <p class="text-brand-navy/70 text-sm leading-relaxed">Choose from wildlife safaris, tea country treks, beach getaways, cultural sites, wellness retreats, and more. Mix and match to create your perfect journey.</p>
                            </div>
                        </div>
                        <div class="flex gap-5">
                            <div class="w-12 h-12 rounded-full bg-brand-green-deep text-white flex items-center justify-center shrink-0 text-lg font-bold">3</div>
                            <div>
                                <h3 class="text-lg font-heading font-bold text-brand-navy mb-2">Receive Your Custom Plan</h3>
                                <p class="text-brand-navy/70 text-sm leading-relaxed">Our expert team designs a personalized itinerary and provides a detailed quote within 24 hours. Refine until it's perfect.</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8 text-center">
                        <button onclick="openInquiryForm()" class="bg-brand-gold hover:bg-brand-gold/90 text-brand-navy font-bold px-8 py-4 rounded-xl cursor-pointer text-base shadow-md transition-all active:scale-95">
                            <i data-lucide="edit" class="w-5 h-5 inline mr-2"></i>
                            Start Planning Your Trip
                        </button>
                    </div>
                </div>
                <?php else: ?>
                <div class="bg-white p-8 rounded-2xl border border-brand-navy/5 shadow-xs">
                    <h2 class="text-2xl font-heading font-bold text-brand-navy mb-6">Sample Itinerary</h2>
                    <div class="itinerary-timeline">
                        <?php 
                        foreach ($tour['itinerary'] as $item) {
                            $day = [
                                'day' => $item['day'],
                                'title' => $item['title'],
                                'description' => $item['description'],
                                'date' => '',
                                'spots' => [],
                                'accommodation' => '',
                                'note' => null
                            ];
                            include 'itinerary/partials/itinerary-day-card.php';
                        }
                        ?>
                    </div>
                </div>
                <?php endif; ?>

                <!-- Inclusions & Exclusions -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                    <!-- Inclusions -->
                    <div class="bg-white p-8 rounded-2xl border border-brand-navy/5 shadow-xs">
                        <h3 class="text-lg font-heading font-bold text-brand-green-deep mb-4 flex items-center gap-2">
                            <i data-lucide="shield-check" class="w-5 h-5"></i> What's Included
                        </h3>
                        <ul class="space-y-3">
                            <?php foreach ($tour['inclusions'] as $inc): ?>
                                <li class="flex items-start text-sm text-brand-navy/75">
                                    <span class="text-brand-green mr-2 font-bold">•</span>
                                    <?php echo $inc; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <!-- Exclusions -->
                    <div class="bg-white p-8 rounded-2xl border border-brand-navy/5 shadow-xs">
                        <h3 class="text-lg font-heading font-bold text-brand-pink mb-4 flex items-center gap-2">
                            <i data-lucide="help-circle" class="w-5 h-5"></i> What's Excluded
                        </h3>
                        <ul class="space-y-3">
                            <?php foreach ($tour['exclusions'] as $exc): ?>
                                <li class="flex items-start text-sm text-brand-navy/75">
                                    <span class="text-brand-pink mr-2 font-bold">•</span>
                                    <?php echo $exc; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Right Sidebar Area (Col Span 1) -->
            <div class="space-y-8">
                <!-- Pricing Card -->
                <div class="bg-brand-navy text-white p-8 rounded-2xl shadow-lg border border-brand-green/10 text-center">
                    <span class="text-xs text-white/60 font-semibold uppercase tracking-wider block">Starting Rate</span>
                    <?php if (isset($tour['type']) && $tour['type'] === 'customized'): ?>
                        <span class="text-4xl font-heading font-black text-brand-gold mt-1 block">$<?php echo $tour['price_from']; ?>/day</span>
                        <span class="text-xs text-white/60 font-semibold block mt-1">per person (varies by group size &amp; tier)</span>
                    <?php else: ?>
                        <span class="text-4xl font-heading font-black text-brand-gold mt-1 block">$<?php echo $tour['price']; ?></span>
                        <span class="text-xs text-white/60 font-semibold block mt-1">per person (group discounts available)</span>
                    <?php endif; ?>
                    <div class="mt-6 pt-6 border-t border-white/10 text-xs text-white/70 space-y-2 text-left">
                        <p>✔ Private AC vehicle and driver-guide</p>
                        <p>✔ Hand-picked hotel accommodations</p>
                        <p>✔ Flexible cancellation & rescheduling</p>
                    </div>
                </div>

                <?php if (isset($tour['type']) && $tour['type'] === 'customized'): ?>
                <div class="sticky top-24">
                    <div class="bg-brand-gold/5 border border-brand-gold/20 p-8 rounded-2xl shadow-lg space-y-6">
                        <h3 class="text-2xl font-heading font-extrabold text-brand-navy mb-2">Let's Plan Your Dream Trip</h3>
                        <p class="text-sm text-brand-navy/60 mb-6">Tell us what you're looking for and we'll create a personalized itinerary within 24 hours.</p>
                        <button onclick="openInquiryForm()" class="w-full bg-brand-gold hover:bg-brand-gold/90 text-brand-navy font-bold px-6 py-4 rounded-xl cursor-pointer flex items-center justify-center gap-2 shadow-md transition-all active:scale-95">
                            <i data-lucide="edit" class="w-5 h-5"></i>
                            Start Planning Now
                        </button>
                    </div>
                </div>
                <?php else: ?>
                <!-- Booking Form Wrapper -->
                <div class="sticky top-24">
                    <div class="bg-white p-8 rounded-2xl border border-brand-navy/5 shadow-lg space-y-6">
                        <h3 class="text-2xl font-heading font-extrabold text-brand-navy mb-2">Book This Tour</h3>
                        <p class="text-sm text-brand-navy/60 mb-6">Fill in the form below and our tour agent will contact you shortly.</p>
                        
                        <form id="tourBookingForm" class="space-y-4">
                            <input type="hidden" id="tourTitle" value="<?php echo htmlspecialchars($tour['title']); ?>">
                            
                            <div>
                                <label for="name" class="block text-xs font-bold uppercase tracking-wider text-brand-navy/70 mb-2">Your Name *</label>
                                <input type="text" id="name" name="name" required class="w-full px-4 py-3 text-sm rounded-xl bg-brand-cream border border-brand-navy/10 focus:border-brand-green-deep outline-hidden transition">
                            </div>
                            
                            <div>
                                <label for="email" class="block text-xs font-bold uppercase tracking-wider text-brand-navy/70 mb-2">Email Address *</label>
                                <input type="email" id="email" name="email" required class="w-full px-4 py-3 text-sm rounded-xl bg-brand-cream border border-brand-navy/10 focus:border-brand-green-deep outline-hidden transition">
                            </div>
                            
                            <div>
                                <label for="phone" class="block text-xs font-bold uppercase tracking-wider text-brand-navy/70 mb-2">Phone Number *</label>
                                <input type="text" id="phone" name="phone" required class="w-full px-4 py-3 text-sm rounded-xl bg-brand-cream border border-brand-navy/10 focus:border-brand-green-deep outline-hidden transition" placeholder="+94 77 123 4567">
                            </div>
                            
                            <div>
                                <label for="message" class="block text-xs font-bold uppercase tracking-wider text-brand-navy/70 mb-2">Special Requirements</label>
                                <textarea id="message" name="message" rows="4" class="w-full px-4 py-3 text-sm rounded-xl bg-brand-cream border border-brand-navy/10 focus:border-brand-green-deep outline-hidden transition resize-none" placeholder="Let us know about passenger count, custom travel dates or hotel upgrades..."></textarea>
                            </div>
                            
                            <button type="submit" class="w-full bg-brand-green-deep hover:bg-brand-green text-white font-bold px-6 py-4 rounded-xl cursor-pointer flex items-center justify-center gap-2 shadow-md transition-all active:scale-95">
                                <i data-lucide="message-square" class="w-4 h-4"></i>
                                Send Request via WhatsApp
                            </button>
                        </form>

                        <script>
                        document.getElementById('tourBookingForm').addEventListener('submit', function(e) {
                            e.preventDefault();
                            var tourTitle = document.getElementById('tourTitle').value;
                            var name = document.getElementById('name').value;
                            var email = document.getElementById('email').value;
                            var phone = document.getElementById('phone').value;
                            var message = document.getElementById('message').value;

                            var text = "Hello Green Tours, I would like to book a tour.\n\n" +
                                       "*Tour:* " + tourTitle + "\n" +
                                       "*Name:* " + name + "\n" +
                                       "*Email:* " + email + "\n" +
                                       "*Phone:* " + phone + "\n" +
                                       "*Special Requirements:* " + (message ? message : "None");

                            var whatsappUrl = "https://wa.me/94719084259?text=" + encodeURIComponent(text);
                            window.open(whatsappUrl, '_blank');
                        });
                        </script>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</main>

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
