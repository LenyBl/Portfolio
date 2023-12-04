<?=

    $this->extend('layout');

$this->section('content');

?>



<?php foreach ($fluxrss as $flux): ?>

    <h2>
        <?= $flux['title'] ?>
    </h2>

    <?php foreach ($flux['items'] as $item): ?>

       <div class="article-item">
            <h3><?= $item['title'] ?></h3>
            <p><?= $item['description'] ?></p>
            <a href="<?= $item['link'] ?>" target="_blank">Lire la suite</a>
       </div>

    <?php endforeach ?>

<?php endforeach ?>



<?= $this->endSection(); ?>