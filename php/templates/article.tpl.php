<!-- Article Template: This template displays a single article with its 
title, category, author, publication date, content, and a link to go back to the homepage. -->
<main class="right">
    <article class="post--solo">
        <h2 class="right__title"><?= $article["title"] ?></h2>
        <a href="" class="post__category post__category--color-<?= $article["category"] ?>"><?= $article["category"] ?></a>
        <div class="post__meta">
            <img class="post__author-icon" src="<?= $article["image"] ?>" alt="">
            <strong class="post__author"><?= $article["author"] ?></strong>
            <time datetime="<?= $article["date"] ?>">on <?= date('F d Y', strtotime($article["date"])) ?></time>
        </div>
        <p class="right__para"><?= $article["text"] ?></p>
        <a href="./index.php" class="post__link">Back to home</a>
    </article>
</main>