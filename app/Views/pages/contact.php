<?= $this->extend('layout');

$this->section('content'); ?>

    <div class="container">
        <h4 class="center-align">Contact</h4>
        <hr>
        <div class="row">
            <div class="col s12 m6">
                <form method="post" action="<?= route_to('send.email') ?>">
                    <div class="mb-3">
                        <label for="nom" class="form-label">Nom :</label>
                        <input type="text" class="form-control" id="nom" placeholder="Entrez votre nom" name="name">
                        <span class="text-danger">
                                <?= (isset($validation) && $validation->hasError('name')) ? $validation->getError('name') : '' ?>
                            </span>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email :</label>
                        <input type="email" class="form-control" id="email" placeholder="Entrez votre email"
                               name="email">
                        <span class="text-danger">
                                <?= (isset($validation) && $validation->hasError('email')) ? $validation->getError('email') : '' ?>
                            </span>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message :</label>
                        <textarea class="form-control" id="message" rows="5" placeholder="Entrez votre message"
                                  style="max-height: 300px; height: 300px; margin-top: 15px;" name="message"></textarea>
                        <span class="text-danger">
                                <?= (isset($validation) && $validation->hasError('message')) ? $validation->getError('message') : '' ?>
                            </span>
                    </div>
                    <button type="submit" class="btn btn-primary light-blue darken-3">Envoyer</button>
                </form>
            </div>
            <div class="col s12 m6">
                <label for="map" class="form-label">Localisation :</label>
                <div class="mapouter" style="margin-top: 15px;">
                    <div class="gmap_canvas">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1431.1537611082035!2d1.5519834389424323!3d44.15952081699655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12ac422a1fd0015b%3A0x94d0993067638d11!2sLyc%C3%A9e%20Polyvalent%20Claude%20Nougaro!5e0!3m2!1sfr!2sfr!4v1708819405028!5m2!1sfr!2sfr"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>

<?= $this->endSection(); ?>