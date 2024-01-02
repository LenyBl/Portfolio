<?= $this->extend('layout');

$this->section('content'); ?>

<div class="container mt-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="shadow card-body">
                    <h5 class="card-title">Formulaire de Contact</h5>
                    <form method="post" action="<?= route_to('send.email') ?>">
                        <!-- Votre formulaire ici -->
                        <?php if (!empty(session()->getFlashdata('error'))): ?>
                            <div class="alert alert-danger">
                                <?= session()->getFlashdata('error'); ?>
                            </div>
                        <?php endif ?>

                        <?php if (!empty(session()->getFlashdata('success'))): ?>
                            <div class="alert alert-danger">
                                <?= session()->getFlashdata('success'); ?>
                            </div>
                        <?php endif ?>

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
                                style="max-height: 300px; height: 300px;" name="message"></textarea>
                            <span class="text-danger">
                                <?= (isset($validation) && $validation->hasError('message')) ? $validation->getError('message') : '' ?>
                            </span>
                        </div>
                        <button type="submit" class="btn btn-primary">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="shadow card-body">
                    <h5 class="card-title">Emplacement sur la Carte</h5>
                    <div id="map" style="height: 558px;">
                        <!-- Intégration de la carte Google Maps -->
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2862.307616616846!2d1.5506959762036812!3d44.159518871082575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12ac422a1fd0015b%3A0x94d0993067638d11!2sLyc%C3%A9e%20Polyvalent%20Claude%20Nougaro!5e0!3m2!1sfr!2sfr!4v1695929051305!5m2!1sfr!2sfr"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>