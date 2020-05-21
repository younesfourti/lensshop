<!DOCTYPE html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../public\assets\css\bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../public\assets\css\styleBout.css">

    <title>Boutique</title>
</head>

<body>

    <header class="monheader">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">LensShop</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Accueil</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Boutique
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" tabindex="-1"> Connexion</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </header>
    <!-- ------------------------------debut page boutique----------------------------- -->
    <div class="boutiquePage">

        <!-- LA BANNIERE-->
        <section class="boutiqueBaniere">

            <div class="position-relative overflow-hidden p-1 p-md-1 m-md-1 text-center">
                <div class="col-md-5 p-lg-5 mx-auto my-5">
                    <h1 class="display-2"> <span>Photographier c’est une attitude</span> </h1>
                    <p class="lead font-weight-normal">LA PHOTOGRAPHIE EST VOTRE PASSION.</p>

                </div>
                <div class="product-device shadow-sm d-none d-md-block"></div>
                <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
            </div>

        </section>

        <!-- DEUXIEME BARRE DE NAVIGATION -->

        <nav class="nav d-flex justify-content-around navbarperso">
            <a class="p-2 text-muted" href="#">APPAREILS PHOTO</a>
            <a class="p-2 text-muted" href="#">OBJECTIFS</a>
            <a class="p-2 text-muted" href="#">CAMESCOPS</a>
            <a class="p-2 text-muted" href="#">ACCESSOIRES</a>
            <a class="p-2 text-muted" href="#">OFFRES</a>

        </nav>

        <!-- moiiiii -->
        <div class="tableau">
            <button type="button" class="btn btn-outline-secondary ">TRIER PAR : </button>
            <fieldset>

                <legend>Gamme de prix</legend>
                <p>
                    <input type="radio" name="color" id="red" value="#F00">
                    <label for="red">100€ - 250€</label>
                </p>
                <p>
                    <input type="radio" name="color" id="green" value="#0F0">
                    <label for="green">250€ - 500€</label>
                </p>
                <p>
                    <input type="radio" name="color" id="blue" value="#00F">
                    <label for="blue">500€ - 1 000€</label>
                </p>
            </fieldset>

            <fieldset>
                <legend>Meilleur pour</legend>
                <p>
                    <input type="radio" name="color" id="red" value="#F00">
                    <label for="red">Paysage</label>
                </p>
                <p>
                    <input type="radio" name="color" id="green" value="#0F0">
                    <label for="green">Intérieur</label>
                </p>
                <p>
                    <input type="radio" name="color" id="blue" value="#00F">
                    <label for="blue">Rue</label>
                </p>
                <p>
                    <input type="radio" name="color" id="blue" value="#00F">
                    <label for="blue">Utilisation quotidienne</label>
                </p>
                <p>
                    <input type="radio" name="color" id="blue" value="#00F">
                    <label for="blue">Voyage</label>
                </p>
            </fieldset>

            <fieldset>
                <legend>Fonctionnalités</legend>
                <p>
                    <input type="radio" name="color" id="red" value="#F00">
                    <label for="red">Grande ouverture</label>
                </p>
                <p>
                    <input type="radio" name="color" id="green" value="#0F0">
                    <label for="green">Stabilisateur d'image</label>
                </p>
                <p>
                    <input type="radio" name="color" id="blue" value="#00F">
                    <label for="blue">STM</label>
                </p>
                <p>
                    <input type="radio" name="color" id="blue" value="#00F">
                    <label for="blue">Amateurs</label>
                </p>
                <p>
                    <input type="radio" name="color" id="blue" value="#00F">
                    <label for="blue">Débutants</label>
                </p>
            </fieldset>
        </div>
        <!-- change -->

        <!-- CATEGORIE APPAREIL -->
        <div class="emplacementappareilphoto">

        
            <section class="container-fluid">
                <h1 class="TitreSection">RECHERCHER PAR TYPE D'APPAREIL PHOTO</h1>
                <article class="container sliderarticle row">
                     <?php  foreach($article as $article): ?>
                                <a href="http://localhost/E-commerce/boutique/lire/<?= $article['idarticle']?>" class="divproduit">
                                    <img class="imgproduit" src="<?=$article['photo']?>">
                                    <h2 class="titreproduit"> <?= $article['titre'] ?></h2>
                                    <p class="stockBoutique">En stock</p>
                                    <p class="description"><?= $article['descri'] ?></p>
                                    <p class="prixBoutique"><?= $article['prix'] ?></p>
                                </a>
                    <?php endforeach ?>

                </article>
            </section>
        </div>

       

        <div class="newletter container-fluid">

            <div class="row d-flex justify-content-center divnews align-items-center">

                <p class="col-3 ">
                    INSCRIVEZ-VOUS POUR RECEVOIR LES NOUVELLES ET UNE REMISE DE 15 %
                </p>
                <div class="col-2">
                    <a href="">S'INSCIRE A LA NEW LETTER</a>
                </div>

            </div>

        </div>


        <aside class="assidefinal">
            <div class="  container">
                <div class="row ">

                    <div class="col">
                        <h6> Adipisicing : elit. Ipsa vol sectetur adipisicing elit. Ipsa vol</h6>
                        <p>
                            Lorem ipsum dolor sisectetur adipisicing elit. Ipsa voltetur adipisicing elit. Ipsa
                            voluptatum commodi ea eum itaque nesciunt sunt quasi architecto quidem, hic fugit pariatur
                            alias error minus deleniti dolorem nemo, maxime dolor. Lorem ipsum dolor sit
                            amet consectetur, adipisicing elit. At maiores explicabo quibusdam, reiciendis minus harum
                            similique itaque molestiae voluptatem doloremque sequi accusamus voluptatibus quia nam et,
                            quas non earum. Similique? Lorem ipsum dolor
                            sit amet consectetur adipisicing elit. Magnam praesentium dignissimos, aperiam eos hic atque
                            est aliquam obcaecati? Aperiam facere ex alias debitis voluptates officiis delectus nesciunt
                            praesentium, nihil quaerat.
                        </p>
                    </div>

                    <div class="col">
                        <h6> Adipisicing : elit. Ipsa vol sectetur adipisicing elit. Ipsa vol</h6>
                        <p>
                            Lorem ipsum dolor sisectetur adipisicing elit. Ipsa voltetur adipisicing elit. Ipsa
                            voluptatum commodi ea eum itaque nesciunt sunt quasi architecto quidem, hic fugit pariatur
                            alias error minus deleniti dolorem nemo, maxime dolor. Lorem ipsum dolor sit
                            amet consectetur, adipisicing elit. At maiores explicabo quibusdam, reiciendis minus harum
                            similique itaque molestiae voluptatem doloremque sequi accusamus voluptatibus quia nam et,
                            quas non earum. Similique? Lorem ipsum dolor
                            sit amet consectetur adipisicing elit. Magnam praesentium dignissimos, aperiam eos hic atque
                            est aliquam obcaecati? Aperiam facere ex alias debitis voluptates officiis delectus nesciunt
                            praesentium, nihil quaerat.
                        </p>
                    </div>

                </div>
            </div>
        </aside>

    </div>
</body>

</html>