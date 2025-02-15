<!DOCTYPE html>
<html lang="fr-FR">
<head>
   <!-- Meta -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Shared Links -->
    <meta property="og:title" content="Travaux de peinture" />
    <meta property="og:description" content="Découvrez sur cette page les prestations proposées par l'entreprise RG Art en Couleurs. Votre entreprise se déplace sur l'île de france." />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="./img/logo/logo-cir.jpg" />

    <!-- SEO -->
    <title>Home</title>
    <meta name="description" content="Découvrez sur cette page les prestations proposées par l'entreprise RG Art en Couleurs. Votre entreprise se déplace sur l'île de france." />
    <meta name="keywords" content="Peinture, Rénovation, Entreprise peinture">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Deryk Alves da Silva Leardi Batista" />

    <link rel="icon" type="image/x-icon" href="./img/favicon.ico">
    <link rel="stylesheet" href="./css/default.css">
    <!--	Google Fonts	-->
    <link rel="stylesheet" type="text/css" href="./css/google-fonts.css">

    <!--	Bootstrap	-->
    <link rel="stylesheet" type="text/css" href="./css/bootstrap/bootstrap.min.css">

    <!--  JQuery
		<script src="./js/jquery/jquery-3.7.1.min.js"></script>
		-->

    <style type="text/css">
        .nav-item {
            font-size: 15px;
            text-align: center;
        }
        
        #devisContact {
            border-radius: 5px;
            border: solid 5px #003c30;
        }
        
        #devisContact:hover {
            border: solid 5px #F7a156;
        }
        
        .fundo {
            position: absolute;
            background-repeat: no-repeat;
            background-position: top;
            background-size: 80vw 100vh;
        }
        
        .header-link {
            font-size: 15px;
            text-decoration: none;
            color: black;
        }
        
        .header-icon {
            width: 24px;
            height: 24px;
        }
        
        #homeEntree {
            background-image: url('./img/building/home/living-room.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            padding: 15% 0 15%;
        }
    </style>
</head>
<body>
    <header class="w-100 d-lg-none">
        <nav class="w-100" id="nav-base">
            <div class="navbar navbar-expand-lg fixed-top sticky-top bg-white">
                <div class="container-fluid" id="nav-container">
                    <!-- Logo -->
                    <a class="navbar-brand ms-5" href="index.html">
                        <h1 class="h1">RG Peintures</h1>
                    </a>

                    <button class="navbar-toggler p-3 navbar-expand-lg" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Navigation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <h2>Imagens</h2>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-auto">
                                <a href="http://">Gerenciar Imagens</a>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-12">
                                <h2>Erros</h2>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-auto"><a href="http://">Gerenciar Erros</a></div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <h2>Usuarios</h2>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-auto"><a href="http://">Gerenciar Usuarios</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div class="w-100 d-flex">
        <nav class="w-25 d-none d-lg-flex flex-column flex-shrink-0 p-3 stick-top" style="max-width: 280px;">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-decoration-none">
                <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
            <span class="fs-4 text-black">RG Peintures</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="#home" class="nav-link active" aria-current="page" id="home-dashboard">
                        <img src="/v/img/icons/icons8-enterprise-50.png" alt="Home Icon" width="24" height="24"  class="bi pe-none">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#image" class="nav-link text-black" id="img-adm">
                        <img src="/v/img/icons/icons8-image-24.png" alt="Image Icon" width="24" height="24" class="bi pe-none">
                        Gerenciar Imagens
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#users" class="nav-link text-black" id="users-adm">
                        <img src="/v/img/icons/icons8-user-24.png" alt="User Icon" width="24" height="24" class="bi pe-none">
                        Gerenciar Usuarios
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#errors
                    +" class="nav-link text-black" id="errors-adm">
                        <img src="/v/img/icons/icons8-error-24.png" alt="Error Icon" width="24" height="24" class="bi pe-none">
                        Gerenciar Erros
                    </a>
                </li>
            </ul>
            <hr>
            <div class="dropdown">
                <a href="#" class="nav-link d-flex align-items-center text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="/v/img/icons/icons8-user-rounded-48.png" alt="" width="32" height="32" class="rounded-circle me-2">
                    <strong>${'User Name'}</strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
            </div>
        </nav>
        <main class="d-flex flex-column pt-3" style="min-height: 100vh;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">test</div>
                </div>
                <div class="row">
                    <div class="col-12">test</div>
                </div>
            </div>
        </main>
        <aside class="w-25 h-100 d-none d-lg-flex flex-column flex-shrink-0 p-3">
        <div class="container-fluid">
                <div class="row">
                    <div class="col-12">test</div>
                </div>
                <div class="row">
                    <div class="col-12">test</div>
                </div>
            </div>
        </aside>
    </div>

    <footer class="w-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="text-center text-muted">© 2005 RG Peintures – <a href="/v/mentions-legales.html" class="text-muted">Mentions légales</a></p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <h3>Credits</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p><a target="_blank" href="https://icons8.com/icon/11228/organization">Enterprise</a> icon by <a target="_blank" href="https://icons8.com">Icons8</a></p>
                    <p><a target="_blank" href="https://icons8.com/icon/112935/image">Image</a> icon by <a target="_blank" href="https://icons8.com">Icons8</a></p>
                    <p><a target="_blank" href="https://icons8.com/icon/83190/user">User</a> icon by <a target="_blank" href="https://icons8.com">Icons8</a></p>
                    <p><a target="_blank" href="https://icons8.com/icon/83164/error">Error</a> icon by <a target="_blank" href="https://icons8.com">Icons8</a></p>
                    <p><a target="_blank" href="https://icons8.com/icon/84898/male-user">User</a> icon by <a target="_blank" href="https://icons8.com">Icons8</a></p>
                </div>
            </div>
        </div>
    </footer>
    <script src="./js/bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>