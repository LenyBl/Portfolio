<?=

    $this->extend('layout');

$this->section('content');

?>




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