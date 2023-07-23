<?php
// Define an associative array for the navigation links
$nav = [
    "Site Plan" => "../views/site_plan.php",
    "Contact" => "../views/contact.php",
    "Legal Notice" => "../views/legal_notice.php"
];
?>
<head>
    <meta charset="UTF-8">
    <title>StudentNews</title>
    <link rel="stylesheet" href="../../css/reset.css">
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <div class="wrapper">
        <header class="left--word">
            <h1 class="left__title">Students News</h1>
            <div class="left--word__paragraph">
                <h2 class="left__subtitle"><strong class="left__subtitle-strong">Say a word</strong> contact us</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque scelerisque suscipit nibh quis porttitor. Integer iaculis mi urna, a pulvinar quam adipiscing ut. Vivamus vel vestibulum mauris.
                </p>
            </div>
            <nav>
                <ul class="left__nav">
                    <!-- Loop through the $nav array to generate navigation links -->
                    <?php foreach($nav as $key => $val) { ?>
                    <li class="left__nav-item"><a href="<?= $val ?>" class="left__nav-link"><?= $key ?></a></li>
                    <?php } ?>
                </ul>
            </nav>
      </header>
    </div>
</body>