<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Graduate&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Examen</title>
</head>

<body>

    <!--NavBarre-->
    <div class="sticky-top">
        <nav class="navbar navbar-dark bg-dark">
            <div class="container justify-content-between">
                <div class="d-none d-lg-block">
                    <a href="./index.php">
                        <img src="assets/img/2.png" alt="" width="90" height="90">
                    </a>
                </div>
                <div class="navbar navbar-expand-lg">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-content"
                        aria-controls="navbar-content" aria-expanded="false" aria-label="toggle-navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbar-content">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="./index.php">Accueil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Projets</a>
                            </li>
                            <div class="dropdown">
<a class="nav-link dropdown-toggle text-light" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Profil
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="#" target="_blank" rel="#">Connection</a></li>
            <li><a class="dropdown-item" href="#" target="_blank" rel="#">Inscription</a></li>
            <li><a class="dropdown-item" href="#" target="_blank" rel="#">Ajouter un projet</a></li>
          </ul>
</div> 
                        </ul>
                    </div>
                </div>
        </nav>
    </div>
    <!-- fin nav-->

    <!-- section 1-->

    <div class="entreprise">
        <div class="container-fluid">
            <div class="row justify-content-end">
                <div class="d-flex flex-wrap-reverse">
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <img src="assets/img/photo.png" class="img-fluid" alt="Responsive image">
                    </div>
                    <div class="col align-self-center">
                        <div class="mx-auto  w-75">

                            <p>
                                <h2 class="text-center"> Présentation </h2>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eos sunt tempore maxime
                                facilis voluptatem nihil harum porro, obcaecati quisquam rem voluptate doloribus
                                voluptas aliquam totam dolorum qui repellat et!
                                lore
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos ab cumque ipsam ad nam
                                corrupti debitis labore totam quisquam eos reprehenderit nulla cum non odit velit
                                voluptatibus, laudantium maxime quod?
                            </p>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button class="btn btn-primary" type="button">Télécharger CV</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  fin section 1-->

    <!--  section 2-->

    <h1 class="text-center">Projets.</h1>
    <div class="sect2">
        <div class="row">
            <div class="col">
                <div class="card border-info mb-3" style="max-width: 18rem;">
                    <div class="text-center">Projet 1</div>
                    <div class="card-body">
                        <h5 class="card-title">Maquettage</h5>
                        <img src="assets/img/cpt.png" class="card-img-top" alt="...">
                        <p class="card-text">Le maquettage est une méthode de conception d'interface qui nous
                            permet de
                            vous proposer des interfaces conformes à vos attentes et besoins. De s'assurer que
                            les
                            besoins du client sont adaptés ou non au projet.</p>
                        <a href="https://miro.com/app/board/uXjVOvcvPYI=/#tpicker-content"
                            class="btn btn-primary">Miro</a>
                        <a href="https://github.com/Ninaxtrem/control" class="btn btn-primary">GitHub</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-info mb-3" style="max-width: 18rem;">
                    <div class="text-center">Projet 2</div>
                    <div class="card-body">
                        <h5 class="card-title">Info card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the
                            bulk of
                            the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-info mb-3" style="max-width: 18rem;">
                    <div class="text-center">Projet 3</div>
                    <div class="card-body">
                        <h5 class="card-title">Info card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the
                            bulk of
                            the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-info mb-3" style="max-width: 18rem;">
                    <div class="text-center">Projet 4</div>
                    <div class="card-body">
                        <h5 class="card-title">Info card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the
                            bulk of
                            the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="sect2">
        <div class="row">
            <div class="col">
                <div class="card border-info mb-3" style="max-width: 18rem;">
                    <div class="text-center">Projet 5</div>
                    <div class="card-body">
                        <h5 class="card-title">Info card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-info mb-3" style="max-width: 18rem;">
                    <div class="text-center">Projet 6</div>
                    <div class="card-body">
                        <h5 class="card-title">Info card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-info mb-3" style="max-width: 18rem;">
                    <div class="text-center">Projet 7</div>
                    <div class="card-body">
                        <h5 class="card-title">Info card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-info mb-3" style="max-width: 18rem;">
                    <div class="text-center">Projet 8</div>
                    <div class="card-body">
                        <h5 class="card-title">Info card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  fin section 2-->

    <!--  foother -->
    <footer class="bg-dark text-center text-white">
        <h2 class="text-center"> Réseaux Sociaux</h2>
        <div class="container p-2">
            <section class="mb-4">

                <div class="d-flex justify-content-center">
                    <div class="d-flex flex-row bd-highlight mb-3">

                        <div class="p-2 bd-highlight"> <a href="https://www.github.com/" class="text-white">
                                <h2><i class="fa-brands fa-github"></i></h2>
                            </a></div>
                        <div class="p-2 bd-highlight"><a href="" class="text-white">
                                <h2><i class="fa-brands fa-facebook"></i></h2>
                            </a></div>
                        <div class="p-2 bd-highlight"><a href="" class="text-white">
                                <h2><i class="fa-brands fa-instagram"></i></h2>
                            </a></div>
                        <div class="p-2 bd-highlight"><a href="" class="text-white">
                                <h2><i class="fa-brands fa-linkedin"></i>
                                </h2>
                            </a></div>
                        <div class="p-2 bd-highlight"><a href="" class="text-white">
                                <h2><i class="fa-brands fa-twitter-square"></i></h2>
                            </a></div>
                    </div>
                </div>
        </div>

        <div class="text-center p-3">
            © 2022 Copyright:
            <a class="text-white">By Nina</a>
        </div>

    </footer>


    <!--  fin foother-->




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
</body>

</html>