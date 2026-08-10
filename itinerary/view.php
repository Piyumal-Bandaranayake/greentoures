<?php
// Load data
$itineraries = require __DIR__ . '/data/itineraries.php';
$code = strtolower($_GET['code'] ?? '');
$itinerary = $itineraries[$code] ?? null;

if (!$itinerary) {
    http_response_code(404);
    $pageTitle = "Itinerary Not Found - Green Ceylon Travels";
    include __DIR__ . '/../includes/header.php';
    echo '<main class="flex-grow flex flex-col items-center justify-center py-20 bg-brand-cream text-center px-4">
            <h1 class="text-4xl font-heading font-black text-brand-navy mb-4">Itinerary Not Found</h1>
            <p class="text-brand-navy/70 mb-8 max-w-md">We couldn\'t find the requested trip itinerary. Please check the reference code and try again.</p>
          </main>';
    include __DIR__ . '/../includes/footer.php';
    exit;
}

// Set page meta details before header include
$pageTitle = htmlspecialchars($itinerary['title']) . " | Green Ceylon Travels";
$pageDesc = "Custom Sri Lanka itinerary reference " . htmlspecialchars($itinerary['code']) . ". Includes daily spots, accommodations, and pricing inclusions.";

// Include site-wide header
include __DIR__ . '/../includes/header.php';
?>

<!-- Inject new timeline stylesheet -->
<link rel="stylesheet" href="../assets/css/itinerary.css">

<main class="flex-grow bg-brand-cream">
    <!-- Header info bar -->
    <?php include __DIR__ . '/partials/itinerary-header.php'; ?>

    <!-- Timeline Daily details -->
    <section class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="itinerary-timeline">
            <?php 
            foreach ($itinerary['days'] as $day) {
                include __DIR__ . '/partials/itinerary-day-card.php';
            }
            ?>
        </div>
    </section>

    <!-- Pricing terms and exclusions -->
    <?php include __DIR__ . '/partials/itinerary-pricing-notes.php'; ?>
</main>

<?php 
// Include site-wide footer
include __DIR__ . '/../includes/footer.php'; 
?>
