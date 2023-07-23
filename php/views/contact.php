<?php
// Include the header template for the contact page.
include("../templates/contact_header.tpl.php");
?>

<!-- Main content of the contact page. Displays the contact form and a link to go back to the homepage.-->
<main class="right">
    <h2 class="right__title">Contact us</h2>
    <div class="posts">
        <div class="post post--solo form-container">
            <form action="" method="get">
                <!-- Form fields -->
                <div>
                    <label for="lastname">Lastname:</label>
                    <input type="text" id="lastname" name="lastname" placeholder="Your lastname ..." required>
                </div>
                <div>
                    <label for="firstname">Firstname :</label>
                    <input type="text" id="firstname" name="firstname" placeholder="Your firstname..." required>
                </div>
                <div>
                    <label for="question">How did you discover us?</label>
                    <!-- Dropdown for discovering source -->
                    <select name="question" id="question">
                        <option value="">Chose</option>
                        <option value="facebook">Facebook</option>
                        <option value="instagram">Instagram</option>
                        <option value="twitter">Twitter</option>
                    </select>
                </div>
                <div>
                    <label for="msg">Message :</label>
                    <textarea id="msg" name="user_message" placeholder="Your message ..." minlength="4" maxlength="2000" required></textarea>
                </div>
                <button>Submit</button>
            </form>
            <a href="./index.php" class="post__link__contact">back to home</a>
        </div>
    </div>
</main>