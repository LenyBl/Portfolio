<?= $this->extend('layout');

$this->section('content'); ?>

<div class="container" style="border-radius: 5px; background-color: #0277bd; margin-top: 50px;">
    <div class="container white-text">
        <img src="img/photo_profil.jpg" alt="" style="border-radius: 50%;">
        <h1 class="center">Blee Leny</h1>
    </div>


</div>
<div class="container">
    <a class="waves-effect waves-light btn-small light-blue darken-3 " href="pdf/CV_Blee_Leny.pdf" download><i
            class="material-icons left">download</i>Télécharger le CV </a>
    <a class="waves-effect waves-light btn-small light-blue darken-3 " href="pdf/CV_Blee_Leny.pdf"><i class="material-icons left">visibility</i>Voir
        le CV </a>
</div>


<?= $this->endSection(); ?>