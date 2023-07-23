<?php
// Include the header template to maintain a consistent layout across pages
include("../templates/header.tpl.php");
// Include the data source for articles
include("../datas/articles.php");
?>

<main class="right">
    <h2 class="right__title">Latest News</h2>
    <div class="posts">
    <!--Loop through each article in the $articles array to get all the datas from every articles -->
    <?php foreach($articles as $key => $value) : ?>
    <!-- Start of a single article -->
    <article class="post">
        <a href="" class="post__category__index post__category--color-<?= $value["category"] ?>"><?= $value["category"] ?></a>
        
        <h3><?= $value["title"] ?></h3>
        <div class="post__meta">   
            <img class="post__author-icon__index" src="<?= $value["image"] ?>" alt="">
            <strong class="post__author"><?= $value["author"] ?></strong>         
        <time datetime="<?= $value["date"] ?>">on <?= date('F d Y', strtotime($value["date"])) ?></time>
    </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pacers, perferendis, saepe.</p>
        <a href="./article.php?number=<?= $key ?>" class="post__link__index">Continue reading</a>
    </article>
    <?php endforeach; ?>
  </div>
</main>