<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <link rel="stylesheet" href="inc/style.css">
        <link rel="icon" href="/img/portfolio.png">
    <title>Portfolio Blee Leny</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color : grey;">
        <div class="container-fluid" >
            <a class="navbar-brand" href="<?= base_url('/') ;?>">Blee Leny</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= base_url('/') ;?>">PROFIL</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">BTS SIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">VEILLE TECHNOLOGIQUE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">PROJETS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('contact'); ?>">CONTACT</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>