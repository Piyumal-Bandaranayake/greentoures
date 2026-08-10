<?php
$pageTitle = "About Us | Green Ceylon Travels and Tours";
$pageDesc = "Learn more about Green Ceylon Travels and Tours. We are a registered Sri Lankan travel agency delivering memorable holiday tours, rent-a-car, and cab transfers.";
include 'includes/header.php';
?>

<!-- Page Header -->
<div class="relative pt-32 pb-20 bg-brand-navy bg-cover bg-center text-center text-white about-header-bg">
    <div class="max-w-4xl mx-auto px-4">
        <span class="text-brand-gold font-script text-3xl mb-2 block animate-fade-in">
            Our Story & Values
        </span>
        <h1 class="text-4xl md:text-5xl font-heading font-black">
            About Green Ceylon
        </h1>
        <p class="mt-4 text-white/80 text-sm md:text-base max-w-xl mx-auto">
            A registered Sri Lankan tour operator and travel partner dedicated to high-quality service and eco-friendly practices.
        </p>
    </div>
</div>

<main class="bg-brand-cream py-16 flex-grow">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-20">
        
        <!-- Mission and Vision Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="space-y-6 animate-fade-in">
                <span class="text-xs font-bold uppercase tracking-widest text-brand-pink">Our Foundations</span>
                <h2 class="text-3xl font-heading font-black text-brand-navy">
                    Crafting Authentic Journeys in Sri Lanka
                </h2>
                <p class="text-brand-navy/70 text-sm md:text-base leading-relaxed">
                    Green Ceylon Travels and Tours was established with a clear vision: to showcase the raw natural beauty, ancient historical heritage, and warm hospitality of Sri Lanka to travelers worldwide, while offering seamless, safe transport solutions.
                </p>
                <p class="text-brand-navy/70 text-sm md:text-base leading-relaxed">
                    Our founders possess decades of collective experience in destination planning and fleet logistics. Over the years, we have hosted thousands of international visitors, guiding them through tea estates, safaris, cave temples, and pristine coastal retreats.
                </p>
            </div>
            
            <div class="relative h-96 w-full rounded-3xl overflow-hidden shadow-lg">
                <img 
                    src="images/1.jpg"
                    alt="Green Ceylon Tour guide in Sigiriya"
                    class="object-cover w-full h-full"
                />
            </div>
        </div>

        <!-- Core Values Section -->
        <div>
            <div class="text-center mb-12">
                <h2 class="text-3xl sm:text-4xl font-heading font-black text-brand-navy mt-2">Our Core Principles</h2>
                <p class="mt-4 text-brand-navy/70 text-sm md:text-base max-w-2xl mx-auto">The pillars that define who we are and guide our interactions with travelers and local communities.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-2xl border border-brand-navy/5 shadow-xs flex flex-col items-center text-center">
                    <div class="w-12 h-12 rounded-full bg-brand-green/10 text-brand-green flex items-center justify-center mb-6">
                        <i data-lucide="heart" class="w-6 h-6"></i>
                    </div>
                    <h3 class="text-lg font-heading font-bold text-brand-navy mb-2">Sustainable & Eco-Conscious</h3>
                    <p class="text-brand-navy/60 text-sm leading-relaxed">
                        We believe in protecting the ecosystem. We support wildlife conservation projects and minimize single-use plastics on all our guided tours.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-2xl border border-brand-navy/5 shadow-xs flex flex-col items-center text-center">
                    <div class="w-12 h-12 rounded-full bg-brand-gold/10 text-brand-gold flex items-center justify-center mb-6">
                        <i data-lucide="shield-check" class="w-6 h-6"></i>
                    </div>
                    <h3 class="text-lg font-heading font-bold text-brand-navy mb-2">Safety & Quality First</h3>
                    <p class="text-brand-navy/60 text-sm leading-relaxed">
                        All tour vehicles are late-model, fully air-conditioned, and serviced to meet top international safety standards with comprehensive passenger insurance.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-2xl border border-brand-navy/5 shadow-xs flex flex-col items-center text-center">
                    <div class="w-12 h-12 rounded-full bg-brand-blue/10 text-brand-blue flex items-center justify-center mb-6">
                        <i data-lucide="award" class="w-6 h-6"></i>
                    </div>
                    <h3 class="text-lg font-heading font-bold text-brand-navy mb-2">Unparalleled Service</h3>
                    <p class="text-brand-navy/60 text-sm leading-relaxed">
                        From customized itineraries to round-the-clock roadside assistance, our dedicated team ensures your holiday is completely stress-free.
                    </p>
                </div>
            </div>
        </div>

    </div>
</main>

<?php include 'includes/footer.php'; ?>
