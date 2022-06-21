<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors" />
    <meta name="generator" content="Hugo 0.98.0" />
    <title>Carousel Template · Bootstrap v5.2</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/" />
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, 0.1);
            border: solid rgba(0, 0, 0, 0.15);
            border-width: 1px 0;
            box-shadow: inset 0 0.5em 1.5em rgba(0, 0, 0, 0.1),
                inset 0 0.125em 0.5em rgba(0, 0, 0, 0.15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -0.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .card-img-top {
            width: 100%;
            object-fit: cover;
            object-position: center;
            height: 200px;

        }

        .card-img {
            width: 100%;
            object-fit: cover;
            object-position: center;
            height: 400px;

        }

        .img {
            width: 100%;
        }

        .contenant {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .card {
            margin: 1rem !important;
        }

        .lien {
            display: flex;
            justify-content: space-around;

        }

        .lien a {
            font-size: small;
        }
    </style>
    <link href="./assets/css/carousel.css" rel="stylesheet" />
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Carousel</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <?php if (!isset($_SESSION['users']) && empty($_SESSION['users']) && $page != 'login') { ?>
                            <li class="nav-item">
                                <a href="./compte.php" class="nav-link">Connexion</a>
                            </li><?php } ?>
                        <?php if (isset($_SESSION['users']) && !empty($_SESSION['users'])) { ?>
                            <li class="nav-item">
                                <a href="./actions/deconnexion.php" class="nav-link">Déconnexion</a>
                            </li><?php } ?>
                        <li class="nav-item">
                            <a class="nav-link">Panier</a>
                        </li>
                        <li class="nav-item">
                            <a href="./products.php" class="nav-link">Produits</a>
                        </li>
                        <?php if (isset($_SESSION['users']) && !empty($_SESSION['users'])) { ?>
                            <li class="nav-item">
                                <a class="nav-link">Bonjour <?= $_SESSION['users']['name'] ?></a>
                            </li>
                            <?php if ($page != 'compte') { ?>
                                <li class="nav-item">
                                    <a href="./compte.php" class="nav-link"> - Accédez à votre compte</a>
                                </li>
                        <?php }
                        } ?>
                        <?php if (isset($_SESSION['users']) && !empty($_SESSION['users'])) {
                            if ($_SESSION['users']['type'] == 'admin') ?>
                            <li class="nav-item">
                                <button type="submit" class="btn btn-primary"> <a href="../ccarousel/admin" class="nav-link">Admin</a></button>
                            </li>
                        <?php } ?>
                    </ul>
                    <!-- <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form> -->
                </div>
            </div>
        </nav>
    </header>
    <main>