<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booki</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img/Booki.png" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
</head>
<body>

    <header class="marge">
        <a hre="#">
            <img class="logo" src="img/Booki.png" alt="Logo Booki">
        </a>
        <nav>
            <ul>
                <li>
                    <a href="#product">Hébergements</a>
                </li>
                <li>
                    <a href="#activities">Activités</a>
                </li>
            </ul>
        </nav>
    </header>

    <main class="marge">

        <section class="hero">
            <h1>Trouvez votre Hébergement pour des vacancens de rêves</h1>
            <p>En plein centre ville ou en pleune nature</p>
            <form class="search">
                <label for="search">
                    <i class="fas fa-map-marker-alt"></i>
                </label>
                <input type="search" name="search" id="search" value="Marseille, France">
                <button>Rechercher</button>
            </form>
            <div class="filter">
                <p>Filtres</p>
                <ul>
                    <li>
                        <i class="fas fa-money-bill-wave"></i>
                        <span>Économique</span>
                    </li>
                    <li>
                        <i class="fas fa-male"></i>
                        <span>Familial</span>
                    </li>
                    <li>
                        <i class="fas fa-heart"></i>
                        <span>Romantique</span>
                    </li>
                    <li>
                        <i class="fas fa-dog"></i>
                        <span>Animaux autorisés</span>
                    </li>
                </ul>
            </div>
            <div class="info">
                Plus de 500 logements sont disponibles dans cette ville
            </div>
        </section>

        <section id="product">
            <article class="ctn-product">
                <h2>Hébergements à Marseille</h2>
                <div class="l-product">
                        
                    <?php require('controller/hosting.php');?>
                    
                </div>
                <p class="show_more">Afficher plus</p>
            </article>
            <aside class="ctn-product most_popular">
                <h2>Les plus populaires</h2>
                <div class="l-product">

                    <?php require('controller/most_popular.php');?>
                    
                </div>
            </aside>
        </section>

        <section id="activities">
            <h2>Activités à Marseille</h2>
            <article class="l-activities">

                <?php require('controller/activities.php');?>

            </article>
        </section>

    </main>

    <footer>
        <ul>
            <h4>A propos</h4>
            <a>Fonctionnement du site</a>
            <a>Conditions générales de vente</a>
            <a>Données et confidentialité</a>
        </ul>
        <ul>
            <h4>Nos hébergements</h4>
            <a>Charte qualité</a>
            <a>Soumettre votre hôtel</a>
        </ul>
        <ul>
            <h4>Nos hébergements</h4>
            <a>Centre d'aide</a>
            <a>Nous contacter</a>
        </ul>
    </footer>
    
</body>
</html>