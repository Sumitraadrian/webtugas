<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Ganti alamat email tujuan di bawah ini
    $to = "sumitraadrian@gmail.com";
    $subject = "Feedback from $name";
    $headers = "From: $email";
    
    mail($to, $subject, $message, $headers);
    
    // Redirect kembali ke halaman sebelumnya atau halaman sukses
    header("Location: feedback_success.html");
} else {
    // Handle kesalahan jika pengiriman data tidak benar
    echo "Something went wrong!";
}
?>
