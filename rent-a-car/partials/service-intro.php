<?php
// Service Intro Partial (Hero Banner and Description)
// Expected inputs:
// - $title: string
// - $subtitle: string
// - $introText: string
// - $bgImage: string (relative to root)
// - $accentColorClass: string (e.g., 'text-brand-gold', 'text-brand-pink', 'text-brand-blue')
// - $basePath: string (path prefix)

$prefix = isset($basePath) ? $basePath : './';
?>

<!-- Custom CSS for the specific page header -->
<style>
    .service-hero-bg {
        background-image: linear-gradient(rgba(11, 37, 69, 0.8), rgba(11, 37, 69, 0.95)), url('<?php echo $prefix . $bgImage; ?>');
    }
</style>

<div class="relative pt-32 pb-20 bg-brand-navy bg-cover bg-center text-center text-white service-hero-bg">
    <div class="max-w-4xl mx-auto px-4 animate-fade-in">
        <span class="<?php echo $accentColorClass; ?> font-script text-3xl mb-2 block">
            <?php echo htmlspecialchars($subtitle); ?>
        </span>
        <h1 class="text-4xl md:text-5xl font-heading font-black">
            <?php echo htmlspecialchars($title); ?>
        </h1>
        <p class="mt-4 text-white/80 text-sm md:text-base max-w-xl mx-auto">
            <?php echo htmlspecialchars($introText); ?>
        </p>
    </div>
</div>
