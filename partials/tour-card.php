<div class="bg-white rounded-3xl overflow-hidden border border-brand-navy/5 shadow-md hover:shadow-lg transition-shadow duration-300 flex flex-col h-full" data-category="<?php echo $tour['category']; ?>">
    <div class="relative h-64 w-full">
        <img src="<?php echo $tour['image']; ?>" alt="<?php echo $tour['title']; ?>" class="object-cover w-full h-full">
        <?php
        $badgeClass = 'bg-brand-pink';
        if ($tour['category'] === 'honeymoon') {
            $badgeClass = 'bg-[#D6006D]';
        } elseif ($tour['category'] === 'customized') {
            $badgeClass = 'bg-[#F5A623]';
        } elseif ($tour['category'] === 'grand-tour') {
            $badgeClass = 'bg-brand-blue';
        } elseif ($tour['category'] === 'beach-wildlife') {
            $badgeClass = 'bg-brand-green-deep';
        } elseif ($tour['category'] === 'cultural') {
            $badgeClass = 'bg-brand-pink';
        }
        ?>
        <?php if (isset($tour['tag'])): ?>
            <span class="absolute top-4 left-4 <?php echo $badgeClass; ?> text-white text-xxs font-bold uppercase tracking-widest px-3 py-1.5 rounded-full shadow-sm">
                <?php echo $tour['tag']; ?>
            </span>
        <?php endif; ?>
    </div>

    <div class="p-6 flex flex-col justify-between flex-grow">
        <div>
            <div class="flex justify-between items-center text-xs font-bold uppercase tracking-wider text-brand-navy/60 mb-2">
                <span class="flex items-center gap-1">
                    <i data-lucide="clock" class="w-3.5 h-3.5 text-brand-green"></i>
                    <?php echo $tour['duration']; ?>
                </span>
                <span class="flex items-center gap-0.5">
                    <i data-lucide="star" class="w-3.5 h-3.5 fill-brand-gold text-brand-gold"></i>
                    <span class="text-brand-navy"><?php echo $tour['rating']; ?></span>
                </span>
            </div>
            <h3 class="font-heading font-black text-xl text-brand-navy mb-3 line-clamp-1">
                <?php echo $tour['title']; ?>
            </h3>
            <p class="text-brand-navy/70 text-xs leading-relaxed line-clamp-2 mb-6">
                <?php echo $tour['description']; ?>
            </p>
        </div>

        <div class="flex justify-between items-center pt-4 border-t border-brand-navy/5">
            <div>
                <span class="text-xxs text-brand-navy/55 font-bold uppercase block">Starting from</span>
                <?php if (isset($tour['type']) && $tour['type'] === 'customized'): ?>
                    <span class="text-xl font-heading font-extrabold text-brand-green-deep">$<?php echo $tour['price_from']; ?>/day</span>
                <?php else: ?>
                    <span class="text-xl font-heading font-extrabold text-brand-green-deep">$<?php echo $tour['price']; ?></span>
                <?php endif; ?>
            </div>
            <?php if (isset($tour['type']) && $tour['type'] === 'customized'): ?>
                <button onclick="openInquiryForm()" class="bg-brand-gold hover:bg-brand-gold/90 text-brand-navy font-bold px-4 py-2.5 text-xs rounded-xl transition cursor-pointer">
                    Start Planning
                </button>
            <?php else: ?>
                <a href="tour-details.php?slug=<?php echo $tour['slug']; ?>">
                    <button class="bg-brand-navy hover:bg-brand-navy/90 text-white font-bold px-4 py-2.5 text-xs rounded-xl transition cursor-pointer">
                        View Details
                    </button>
                </a>
            <?php endif; ?>
        </div>
    </div>
</div>