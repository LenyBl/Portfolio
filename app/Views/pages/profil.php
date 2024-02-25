<?= $this->extend('layout');

$this->section('content'); ?>

    <div class="container">
        <h1 class="center-align">Profil</h1>
        <hr>
        <div class="row">
            <div class="col s12 m6 l6" style="display: flex; justify-content: center; align-items: center;">
                <img src="img/photo_profil.jpg" alt="Leny Blee" class="responsive-img"
                     style="border-radius: 50%; margin-top: 30px;">
            </div>
            <div class="col s12 m6 l6">
                <h2>Leny Blee</h2>
                <hr>
                <p>Je suis étudiant en BTS SIO (Services Informatiques aux Organisations) option SLAM (Solutions
                    Logicielles et Applications Métiers) au lycée Claude Nougaro à Monteils. Je suis passionné par
                    l'informatique et les nouvelles technologies. Je suis curieux et j'aime apprendre de nouvelles
                    choses. Je suis également sportif et j'aime le sport en général.</p>
                <a class="waves-effect waves-light btn-small light-blue darken-3 " href="pdf/CV_Blee_Leny.pdf"
                   download><i
                            class="material-icons left">download</i>Télécharger le CV </a>
                <a class="waves-effect waves-light btn-small light-blue darken-3 " href="pdf/CV_Blee_Leny.pdf"
                   target="_blank"><i class="material-icons left">visibility</i>Voir
                    le CV </a>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m6 l6">
                <h2>Compétences</h2>
                <hr>
                <h5>Développement :</h5>
                <label for="html">HTML / CSS</label>
                <div class="progress">
                    <div class="determinate light-blue darken-3" id="html" style="width: 80%"></div>
                </div>
                <label for="javascript">Javascript</label>
                <div class="progress">
                    <div class="determinate light-blue darken-3" id="javascript" style="width: 40%"></div>
                </div>
                <label for="php">PHP (Code Igniter 4)</label>
                <div class="progress">
                    <div class="determinate light-blue darken-3" id="php" style="width: 70%"></div>
                </div>
                <label for="java">Java</label>
                <div class="progress">
                    <div class="determinate light-blue darken-3" id="java" style="width: 60%"></div>
                </div>
                <label for="C#">C#</label>
                <div class="progress">
                    <div class="determinate light-blue darken-3" id="C#" style="width: 50%"></div>
                </div>
                <label for="windev">Windev</label>
                <div class="progress">
                    <div class="determinate light-blue darken-3" id="windev" style="width: 50%"></div>
                </div>
                <h5>Base de données :</h5>
                <label for="mysql">Mariadb / MySQL</label>
                <div class="progress">
                    <div class="determinate light-blue darken-3" id="mysql" style="width: 60%"></div>
                </div>
                <label for="postgresql">Postgresql</label>
                <div class="progress">
                    <div class="determinate light-blue darken-3" id="postgresql" style="width: 40%"></div>
                </div>
                <label for="merise">Merise</label>
                <div class="progress">
                    <div class="determinate light-blue darken-3" id="merise" style="width: 90%"></div>
                </div>
                <h5>Scripting :</h5>
                <label for="python">Python</label>
                <div class="progress">
                    <div class="determinate light-blue darken-3" id="python" style="width: 40%"></div>
                </div>
                <h5>Virtualisation :</h5>
                <label for="VirtualBox">VirtualBox</label>
                <div class="progress">
                    <div class="determinate light-blue darken-3" id="VirtualBox" style="width: 60%"></div>
                </div>
                <label for="proxmox">Proxmox</label>
                <div class="progress">
                    <div class="determinate light-blue darken-3" id="proxmox" style="width: 60%"></div>
                </div>
            </div>
            <div class="col s12 m6 l6">
                <h2>Expériences</h2>
                <hr>
                <h5>Stage de 1ère année :</h5>
                <p>Stage de 1ère année de BTS SIO effectué à la société <a href="https://www.occitech.fr/"
                                                                           target="_blank">Occitech</a> à
                    Montauban. J'ai travaillé sur le développement d'une application web de gestion de stock en PHP
                    (Code Igniter 4) et MySQL.</p>
                <h5>Stage de 2ème année :</h5>
                <p>Stage de 2ème année de BTS SIO effectué à la société <a href="https://www.occitech.fr/"
                                                                           target="_blank">Occitech</a> à
                    Montauban. J'ai travaillé sur le développement d'une application web de gestion de stock en PHP
                    (Code Igniter 4) et MySQL.</p>
                <h5>Projet personnel :</h5>
                <p>Création d'un site web personnel en PHP (Code Igniter 4) et MySQL.</p>
                <h5>Projet personnel :</h5>
                <p>Création d'un site web personnel en PHP (Code Igniter 4) et MySQL.</p>
            </div>
        </div>
    </div>
    <section class="grey lighten-2">
        <div class="container">
            <h3 class="center-align" style="padding-top: 20px;">Mes certifications</h3>
            <hr>
            <div class="container">
                <div class="row center-align" style="margin-top: 20px;">
                    <div class="col s12 m6">
                        <div class="card horizontal">
                            <div class="card-image">
                                <img src="img/Pix.png">
                            </div>
                            <div class="card-stacked">
                                <div class="card-content">
                                    <p>Certification Pix.</p>
                                </div>
                                <div class="card-action">
                                    <a href="pdf/attestation-pix.pdf" target="_blank">Voir la certification</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6">
                        <div class="card horizontal">
                            <div class="card-image">
                                <img src="img/cnil-logo.jpg">
                            </div>
                            <div class="card-stacked">
                                <div class="card-content">
                                    <p>Certification CNIL.</p>
                                </div>
                                <div class="card-action">
                                    <a href="pdf/cnil.pdf" target="_blank">Voir la certification</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </section>
    <div class="container">
        <h3 class="center-align">Mon Cursus</h3>
        <hr>
        <div class="container center-align">
            <h4 class="center-align">Diplômes</h4>
            <table class="striped">
                <thead>
                <tr>
                    <th>Année</th>
                    <th>Diplôme</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>2024</td>
                    <td>BTS SIO ( En cours de formation )</td>
                </tr>
                <tr>
                    <td>2022</td>
                    <td>Baccalauréat Professionnel SN option C ( Mention très bien )</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <br>
    <br>
<?= $this->endSection(); ?>