<?php require 'inc/head.php'; ?>
<?php require 'inc/foot.php'; ?>
<?php require 'inc/data/products.php'; ?>
<?php session_start() ?>

<section class="cookies container-fluid">
    <div class="row">
        <?php
        if (!empty($_SESSION['cart'])) :
            foreach ($catalog as $id => $cookie) :
                if (in_array($id, $_SESSION['cart'])) : ?>
                    <li><?= $cookie['name']; ?></li>
                <?php endif; ?>
            <?php endforeach ?>
        <?php endif ?>
    </div>
</section>