<?php

$recipientPhoneNumber = $_GET['num'];
$message = 'මෙම දැන්වීම BEST AD LK වෙබ් අඩවියෙන් ලබා ගතිමි
I got this ad from BEST AD LK website';

// URL encode the message
$encodedMessage = rawurlencode($message);

// Build the WhatsApp link
echo $whatsappLink = "https://wa.me/{$recipientPhoneNumber}?text={$encodedMessage}";

// Redirect the user to the WhatsApp link
// header("Location: $whatsappLink");
exit();
?>
