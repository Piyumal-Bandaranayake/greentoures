<?php
/**
 * Itinerary Pricing & Notes Partial
 * Variables:
 * - $itinerary: Array containing price_includes and price_excludes_note
 */
?>
<div class="pricing-section bg-brand-cream border-t border-brand-navy/10 py-16">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="pricing-notes-grid">
            <!-- Left Column: Price Includes -->
            <div class="bg-white p-8 rounded-2xl border border-brand-navy/5 shadow-xs">
                <h3 class="text-xl font-heading font-black text-brand-green-deep mb-6 flex items-center gap-2">
                    <i data-lucide="check-circle" class="w-6 h-6 text-brand-green-deep"></i>
                    Price Includes / 费用包含
                </h3>
                
                <?php if (!empty($itinerary['price_includes'])): ?>
                    <ul class="space-y-3.5">
                        <?php foreach ($itinerary['price_includes'] as $item): ?>
                            <li class="flex items-start text-sm text-brand-navy/80">
                                <i data-lucide="check" class="w-4 h-4 text-brand-green mr-2.5 shrink-0 mt-0.5"></i>
                                <span><?php echo htmlspecialchars($item); ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php else: ?>
                    <p class="text-sm text-brand-navy/55 italic">No details available.</p>
                <?php endif; ?>
            </div>

            <!-- Right Column: Price Excludes & Driver Tip Policy -->
            <div class="bg-white p-8 rounded-2xl border border-brand-navy/5 shadow-xs">
                <h3 class="text-xl font-heading font-black text-brand-pink mb-6 flex items-center gap-2">
                    <i data-lucide="x-circle" class="w-6 h-6 text-brand-pink"></i>
                    Price Excludes & Driver Tip / 费用不含及司机小费
                </h3>
                
                <?php if (!empty($itinerary['price_excludes_note'])): ?>
                    <div class="p-4 rounded-xl bg-brand-gold/10 border border-brand-gold/25 text-brand-navy text-sm leading-relaxed mb-4">
                        <strong class="text-brand-navy font-bold block mb-2">Driver Tip Guide / 司机小费指南:</strong>
                        <?php 
                        // Convert newlines to paragraphs/breaks or style directly
                        echo nl2br(htmlspecialchars($itinerary['price_excludes_note'])); 
                        ?>
                    </div>
                <?php else: ?>
                    <p class="text-sm text-brand-navy/55 italic">No details available.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
