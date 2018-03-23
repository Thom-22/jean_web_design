<article class="miniature col-4">

    <a href="photo1.php?id=<?php echo $photos["id"] ?>" title="<?php echo $photos["titre"] ?>">
        <img src="images/<?php echo $photos["image"]; ?>" alt="<?php echo $photos["titre"] ?>" title="<?php echo $photos["titre"] ?>">
        <p class="likes"><?php echo $photos["nb_likes"]; ?>likes</p>
    </a>

    <div class="infos">
        <h3><?php echo $photos["titre"] ?> #<?php echo $photos["categorie"] ?></h3>
        <p>
            <?php foreach ($photos["tags"] as $tag) : ?>
                #<?php echo $tag; ?>
            <?php endforeach; ?>
        </p>
        <p><?php echo $photos["date_creation_format"]; ?></p>
    </div>

</article>
