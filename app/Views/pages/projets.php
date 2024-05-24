<?= $this->extend('layout');

$this->section('content');
?>

<br>
<div class="center">
    <a class="waves-effect waves-light btn light-blue darken-3 " href="<?= route_to('fichier.e4') ?>" target="_blank"><i
            class="material-icons left">insert_drive_file</i>Voir
        la grille de compétence </a>
</div>
<br>
<hr style="border-top: 2px  solid black;" width="90%">
<br>
<div class="container center">
    <h3>Projets</h3>
    <div class="row" style="padding-top: 20px">
        <div class="col s3">
            <div class="card card-effect" style="margin-right: 15px">
                <div class="card-image" style="padding: 40px">
                    <img src="img/glpi.png">
                </div>
                <hr>
                <div class="card-content">
                    <a href="pdf/Mission - Gestion du parc informatique de l’entreprise SAMSIC avec GLPI Blee Leny.pdf"
                        class="black-text text-darken-2" target="_blank">GLPI</a>
                </div>
            </div>
        </div>
        <div class="col s3">
            <div class="card card-effect" style="margin-right: 15px">
                <div class="card-image" style="padding: 40px; height: auto;">
                    <img src="img/texeurop-300x241.jpg">
                </div>
                <hr>
                <div class="card-content">
                    <a href="pdf/Rapport AP1 Texeurop Blee Leny.docx.pdf" class="black-text text-darken-2" target="_blank">AP1 - Texeurop</a>
                </div>
            </div>
        </div>
        <div class="col s3">
            <div class="card card-effect" style="margin-right: 15px">
                <div class="card-image" style="padding: 30px">
                    <img src="img/publicom.png">
                </div>
                <hr>
                <div class="card-content">
                    <a href="pdf/AP3 - PROJET PUBLICOM.pdf" class="black-text text-darken-2" target="_blank">AP3 -
                        Publicom</a>
                </div>
            </div>
        </div>
        <div class="col s3">
            <div class="card card-effect" style="margin-right: 15px">
                <div class="card-image" style="padding: 30px">
                    <img src="img/publicom.png">
                </div>
                <hr>
                <div class="card-content">
                    <a href="pdf/AP4 - PROJET PUBLICOM_ADMIN.pdf" class="black-text text-darken-2" target="_blank">AP4 -
                        PublicomAdmin</a>
                </div>
            </div>
        </div>
        <div class="col s3">
            <div class="card card-effect" style="margin-right: 15px">
                <div class="card-image" style="padding: 40px; height: auto;">
                    <img src="img/pds.png">
                </div>
                <hr>
                <div class="card-content">
                    <a href="pdf/Stage Le pont des savoirs.pdf" class="black-text text-darken-2" target="_blank">Stage - Le
                        pont des Savoirs</a>
                </div>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>