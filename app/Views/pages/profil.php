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
            <a class="waves-effect waves-light btn-small light-blue darken-3 " href="pdf/CV2.pdf" download><i
                    class="material-icons left">download</i>Télécharger le CV </a>
            <a class="waves-effect waves-light btn-small light-blue darken-3 " href="pdf/CV2.pdf" target="_blank"><i
                    class="material-icons left">visibility</i>Voir
                le CV </a>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m6 l6">
            <h2>Compétences</h2>
            <hr>
            <div class="row" style="margin-top: 30px;">
                <div class="card col s12 m6 l3 card-effect" style="margin-right: 15px">
                    <div class="card-image" style="padding: 20px">
                        <img src="img/html.png">
                    </div>
                </div>
                <div class="card col s12 m6 l3" style="margin-right: 15px">
                    <div class="card-image" style="padding: 20px">
                        <img src=" img/css.png">
                    </div>
                </div>
                <div class="card col s12 m6 l3" style="margin-right: 15px">
                    <div class="card-image" style="padding: 20px">
                        <img src=" img/js.png">
                    </div>
                </div>
                <div class="card col s12 m6 l3" style="margin-right: 15px">
                    <div class="card-image
                        " style="padding: 20px">
                        <img src=" img/java.png">
                    </div>
                </div>
                <div class="card col s12 m6 l3" style="margin-right: 15px">
                    <div class="card-image
                        " style="padding: 20px">
                        <img src=" img/csharp.png">
                    </div>
                </div>
                <div class="card col s12 m6 l3" style="margin-right: 15px">
                    <div class="card-image
                        " style="padding: 20px">
                        <img src=" img/php.png">
                    </div>
                </div>
                <div class="card col s12 m6 l3" style="margin-right: 15px">
                    <div class="card-image
                        " style="padding: 20px">
                        <img src=" img/python.png">
                    </div>
                </div>
                <div class="card col s12 m6 l3" style="margin-right: 15px">
                    <div class="card-image
                        " style="padding: 20px">
                        <img src=" img/sql-server.png">
                    </div>
                </div>
                <div class="card col s12 m6 l3" style="margin-right: 15px">
                    <div class="card-image
                        " style="padding: 20px">
                        <img src=" img/codeigniter.png">
                    </div>
                </div>
            </div>
            <!-- <h5>Développement :</h5>
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
                 </div> -->
        </div>
        <div class="col s12 m6 l6">
            <h2>Expériences</h2>
            <hr>
            <h5>Stage : ( BTS SIO )</h5>
            <p>Stage de 1ère année et 2ème année de BTS SIO effectué dans l'association Le pont des savoirs à
                Montauban. J'ai travaillé sur le développement d'une application web de gestion des offres et des
                demandes des adhérents en PHP
                (Code Igniter 3) et MySQL.</p>
            <h5>Stage : ( Bac pro )</h5>
            <ul>
                <li>Stage et job d'été effectué dans l'entreprise Expert Cablage Et Réseaux. J'ai travaillé dans
                    l'installation et la mise en service de réseaux informatique en courant fort et faible.</li>
                <br>
                <li>J'ai également fais un stage en Erasmus au Portugal à Almada dans l'entreprise Javali. J'ai appris à
                    utiliser Drupal qui est un CMS.</li>
            </ul>
        </div>
    </div>
</div>
<section>
    <div class="container center">
        <h3 class="center-align">Logiciels</h3>
        <hr>
        <div class="row" style="padding-top: 30px; padding-bottom: 30px;">
            <div class="col s12 m6 l3 ">
                <div class="card-image
                        " style="padding: 20px">
                    <img src=" img/intellij.jpg">
                </div>
            </div>
            <div class="col s12 m6 l3">
                <div class="card-image
                        " style="padding: 20px">
                    <img src=" img/phpstorm.png">
                </div>
            </div>
            <div class="col s12 m6 l3">
                <div class="card-image
                        " style="padding: 20px">
                    <img src=" img/webstorm.png">
                </div>
            </div>
            <div class="col s12 m6 l3">
                <div class="card-image
                        " style="padding: 20px">
                    <img src=" img/vscode.jpg">
                </div>
            </div>
            <div class="col s12 m6 l3" style="padding-top: 20px">
                <div class="card-image
                        " style="padding: 20px">
                    <img src=" img/netbeans.png">
                </div>
            </div>
            <div class="col s12 m6 l3" style="padding-top: 20px">
                <div class="card-image
                        " style="padding: 20px">
                    <img src=" img/vscodecsharp.jpg">
                </div>
            </div>
            <div class="col s12 m6 l3" style="padding-top: 20px">
                <div class="card-image
                        " style="padding: 20px">
                    <img src=" img/windesign.png">
                </div>
            </div>
            <div class="col s12 m6 l3" style="padding-top: 20px">
                <div class="card-image
                        " style="padding: 20px">
                    <img src=" img/github.png">
                </div>
            </div>
        </div>
</section>
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