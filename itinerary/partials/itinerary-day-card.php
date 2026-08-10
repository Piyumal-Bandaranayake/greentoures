<?php
/**
 * Itinerary Day Card Partial
 * Variables:
 * - $day: Array containing day details (day, date, city_route/title, spots, accommodation, hotel, note, description)
 */

$dayNumber = isset($day['day']) ? $day['day'] : 1;
$dateText = isset($day['date']) ? $day['date'] : '';
$cityRoute = isset($day['city_route']) ? $day['city_route'] : (isset($day['title']) ? $day['title'] : '');
$spots = isset($day['spots']) && is_array($day['spots']) ? $day['spots'] : [];
$description = isset($day['description']) ? $day['description'] : '';
$accommodation = isset($day['accommodation']) ? $day['accommodation'] : '';
$hotel = isset($day['hotel']) ? $day['hotel'] : '';
$note = isset($day['note']) ? $day['note'] : null;
?>

<div class="relative pl-12 pb-10 itinerary-card group">
    <!-- Vertical connector timeline circle -->
    <div class="timeline-circle">
        <?php echo htmlspecialchars($dayNumber); ?>
    </div>

    <!-- Main Card container -->
    <div class="bg-white p-6 rounded-2xl border border-brand-navy/5 shadow-xs transition-all hover:shadow-md">
        <!-- Card Header: Date & Route -->
        <div class="flex flex-wrap items-center justify-between gap-2 mb-4">
            <h3 class="text-lg font-heading font-black text-brand-navy">
                <?php if ($dateText): ?>
                    <span class="text-brand-green-deep mr-2"><?php echo htmlspecialchars($dateText); ?></span>
                <?php else: ?>
                    <span class="text-brand-green-deep mr-2">Day <?php echo htmlspecialchars($dayNumber); ?>:</span>
                <?php endif; ?>
                <?php echo htmlspecialchars($cityRoute); ?>
            </h3>
            
            <?php if ($accommodation || $hotel): ?>
                <div class="flex items-center gap-1.5 bg-brand-cream border border-brand-navy/5 px-3 py-1 rounded-full text-xs font-semibold text-brand-navy/80">
                    <i data-lucide="hotel" class="w-3.5 h-3.5 text-brand-gold"></i>
                    <span>
                        Overnight: 
                        <strong><?php echo htmlspecialchars($accommodation); ?></strong>
                        <?php if ($hotel): ?> - <span class="italic text-brand-navy/60"><?php echo htmlspecialchars($hotel); ?></span><?php endif; ?>
                    </span>
                </div>
            <?php endif; ?>
        </div>

        <!-- Description (if provided instead of bulleted spots) -->
        <?php if ($description): ?>
            <p class="text-sm text-brand-navy/70 leading-relaxed mb-4">
                <?php echo htmlspecialchars($description); ?>
            </p>
        <?php endif; ?>

        <!-- spots/activities bullet list -->
        <?php if (!empty($spots)): ?>
            <div class="space-y-2">
                <span class="text-xxs uppercase tracking-wider font-extrabold text-brand-navy/55 block">Key Spots & Activities</span>
                <ul class="grid grid-cols-1 sm:grid-cols-2 gap-2 text-sm text-brand-navy/85">
                    <?php foreach ($spots as $spot): ?>
                        <li class="flex items-start">
                            <i data-lucide="compass" class="w-4 h-4 text-brand-green-deep mr-2 mt-0.5 shrink-0"></i>
                            <span><?php echo htmlspecialchars($spot); ?></span>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <!-- Highlighted operationally critical note -->
        <?php if ($note): ?>
            <div class="note-callout">
                <div class="note-callout-title flex items-center gap-1">
                    <i data-lucide="alert-circle" class="w-3.5 h-3.5"></i>
                    <span>Important Note</span>
                </div>
                <div class="note-callout-text">
                    <?php echo htmlspecialchars($note); ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>
