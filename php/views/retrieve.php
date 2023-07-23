<?php
// Include the header template for the contact page.
include("../templates/contact_header.tpl.php");

// Check if any data was sent via GET request.
if (!isset($_GET)) {
    // If no data is received, display an error message in the right section of the page.
    echo '<main class="right">
    <h2 class="right__title">Error: No data sent!</h2>
    </main>';
    // Using 'return 0' as a way to mark the end of the file and prevent further execution.
    // This ensures that nothing else is displayed beyond this point.
    return 0;
}

// Validate the 'lastname' parameter from the GET data.
if (strlen($_GET["lastname"]) < 3 || strlen($_GET["lastname"]) > 160) {
    // If the 'lastname' parameter does not meet the length criteria, 
    // display an error message in the right section of the page.
    echo '<main class="right">
    <h2 class="right__title">Error: The lastname is either too short or too long!</h2>
    </main>';
    // Using 'return 0' as a way to mark the end of the file and prevent further execution.
    // This ensures that nothing else is displayed beyond this point.
    return 0;
}

// Store the GET data in the $datas variable for later use.
$datas = $_GET;

?>

<main class="right">
     <!-- Display a thank you message to the user based on the provided data -->
    <h2 class="right__title">Thank you for your feedback</h2>
    <div class="posts">
        <div class="post post--solo">
            <p>Bonjour <?= $datas["firstname"].' '.$datas["lastname"] ?>, you discovered us through <?= $datas["question"] ?>. 
            <br>We are delighted to receive your following message: <?= $datas["user_message"] ?>   
            <br>Your message will be processed soon.</p>
            <a href="./index.php" class="post__link__contact">back to home</a>
        </div>
    </div>
</main>