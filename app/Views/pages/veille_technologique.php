<?=

$this->extend('layout');

$this->section('content');

?>

    <div class="container">
        <h3 class="center-align">Veille technologique</h3>
        <hr>
        <p>
            La veille technologique est un processus stratégique et organisé visant à collecter, surveiller et analyser
            de manière systématique les informations relatives aux avancées, aux tendances et aux innovations dans le
            domaine technologique. Son objectif principal est de permettre aux organisations, aux entreprises et aux
            professionnels de rester informés des évolutions pertinentes, de comprendre leur impact potentiel et de
            prendre des décisions éclairées pour rester compétitifs sur le marché.</p>
        <h4>Ma veille technologique :</h4>
    </div>

<?php foreach ($fluxrss as $flux) { ?>
    <br>
    <div class="container center">
        <table class="striped">
            <thead>
            <tr>
                <th class="center" style="">
                    <?= $flux['title'] ?>
                </th>
            </tr>
            </thead>
            <?php foreach ($flux['items'] as $item) { ?>
                <tbody>
                <tr>
                    <td>
                        <a href="<?= $item['link'] ?>" target="_blank">
                            <?= $item['title'] ?>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?= $item['description'] ?>
                    </td>
                </tr>
                </tbody>
            <?php } ?>
    </div>
    </table>
    <br>
    <hr style="border-top: 2px  solid black;" width="100%">
    <br>
<?php } ?>



<?= $this->endSection(); ?>