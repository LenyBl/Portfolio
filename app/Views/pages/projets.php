<?= $this->extend('layout');

$this->section('content');
?>

<br>
<div class="center">
    <iframe src="<?= route_to('fichier.e4') ?>" frameborder="0" width="1000" height="504"></iframe>
</div>

<br>
<hr style="border-top: 2px  solid black;" width="90%">
<br>
<div class="container center">
    <div class="card small">
        <div class="card-image">
            <img src="img/card.png">
            <span class="card-title">Le pont des savoirs</span>
        </div>
        <div class="card-content">
            <p>I am a very simple card. I am good at containing small bits of information.
                I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
            <a href="#">This is a link</a>
        </div>
    </div>
    <div class="card small">
        <div class="card-image">
            <img src="img/card.png">
            <span class="card-title">Publicom</span>
        </div>
        <div class="card-content">
            <p>I am a very simple card. I am good at containing small bits of information.
                I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
            <a href="#">This is a link</a>
        </div>
    </div>
    <div class="card small">
        <div class="card-image">
            <img src="img/card.png">
            <span class="card-title">GLPI</span>
        </div>
        <div class="card-content">
            <p>I am a very simple card. I am good at containing small bits of information.
                I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
            <a href="#">This is a link</a>
        </div>
    </div>

</div>



<?= $this->endSection(); ?>