<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = isset($_POST['name']) ? strip_tags(trim($_POST['name'])) : '';
    $email = isset($_POST['email']) ? filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL) : '';
    $phone = isset($_POST['phone']) ? strip_tags(trim($_POST['phone'])) : '';
    $subject = isset($_POST['subject']) ? strip_tags(trim($_POST['subject'])) : 'New Website Inquiry';
    $message = isset($_POST['message']) ? htmlspecialchars(trim($_POST['message'])) : '';
    
    $service = isset($_POST['service']) ? strip_tags(trim($_POST['service'])) : '';
    $booking_date = isset($_POST['booking_date']) ? strip_tags(trim($_POST['booking_date'])) : '';
    $pickup_location = isset($_POST['pickup_location']) ? strip_tags(trim($_POST['pickup_location'])) : '';
    $hours_needed = isset($_POST['hours_needed']) ? strip_tags(trim($_POST['hours_needed'])) : '';

    // Validate inputs
    if (!empty($name) && !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($phone) && !empty($message)) {
        
        $to = "Info@gcttravels.com, ajith@gcttravels.com";
        $email_subject = "Green Ceylon Inquiry: " . $subject;
        
        $email_content = "Name: $name\n";
        $email_content .= "Email: $email\n";
        $email_content .= "Phone: $phone\n\n";
        
        if ($service === 'luxury-car') {
            $email_content .= "--- Luxury Car Service Details ---\n";
            $email_content .= "Service Type: Luxury Car Rental\n";
            $email_content .= "Booking Date: $booking_date\n";
            $email_content .= "Pickup Location: $pickup_location\n";
            $email_content .= "Hours Needed: $hours_needed hours\n\n";
        } elseif ($service === 'tourist-hire') {
            $email_content .= "Service Type: Tourist Hire (Self-Drive / Chauffeur)\n\n";
        }
        
        $email_content .= "Message:\n$message\n";
        
        $email_headers = "From: $name <$email>\r\n";
        $email_headers .= "Reply-To: $email\r\n";
        $email_headers .= "X-Mailer: PHP/" . phpversion();

        // Send email (cPanel shared hosting supports native mail() function)
        @mail($to, $email_subject, $email_content, $email_headers);
        $success = true;
    } else {
        $success = false;
        $error_message = "Please fill in all required fields with valid details.";
    }
} else {
    // If accessed directly, redirect to contact.php
    header("Location: contact.php");
    exit;
}

$pageTitle = "Message Status | Green Ceylon Travels";
include 'includes/header.php';
?>

<main class="flex-grow flex items-center justify-center py-24 bg-brand-cream px-4">
    <div class="max-w-md w-full bg-white p-8 rounded-3xl border border-brand-navy/5 shadow-xl text-center space-y-6 animate-fade-in">
        <?php if (isset($success) && $success): ?>
            <div class="w-16 h-16 rounded-full bg-brand-green/10 text-brand-green flex items-center justify-center mx-auto">
                <i data-lucide="check-circle" class="w-10 h-10 animate-bounce"></i>
            </div>
            <h1 class="text-3xl font-heading font-black text-brand-navy">Message Sent!</h1>
            <p class="text-brand-navy/70 text-sm leading-relaxed">
                Thank you for contacting Green Ceylon Travels. Our travel expert will respond to you within 24 hours.
            </p>
            <a href="index.php" class="block pt-4">
                <button class="w-full bg-brand-green-deep hover:bg-brand-green text-white font-bold px-6 py-4 rounded-xl shadow-md transition-all active:scale-95 cursor-pointer">
                    Return to Homepage
                </button>
            </a>
        <?php else: ?>
            <div class="w-16 h-16 rounded-full bg-brand-pink/10 text-brand-pink flex items-center justify-center mx-auto">
                <i data-lucide="alert-triangle" class="w-10 h-10"></i>
            </div>
            <h1 class="text-3xl font-heading font-black text-brand-navy">Submission Error</h1>
            <p class="text-brand-navy/70 text-sm leading-relaxed">
                <?php echo isset($error_message) ? $error_message : "Something went wrong while sending your message. Please try again."; ?>
            </p>
            <a href="javascript:history.back()" class="block pt-4">
                <button class="w-full bg-brand-navy hover:bg-brand-navy/90 text-white font-bold px-6 py-4 rounded-xl shadow-md transition-all active:scale-95 cursor-pointer">
                    Go Back & Fix
                </button>
            </a>
        <?php endif; ?>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
