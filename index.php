<?php
/*
Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende prodotti per animali.
I prodotti sono categorizzati, le categorie sono Cani o Gatti.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti,
 come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando 
 (prodotto, cibo, gioco, cuccia).
*/
require __DIR__ . '/Models/db.php';
require __DIR__ . '/Models/Membership.php';


?>
<!doctype html>
<html lang="en">

<head>
    <title>Oop-2</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body class="bg-secondary">
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <div class="container d-flex">
            <div class="row">
                <?php foreach ($db as $product) : ?>
                    <div class="card mx-3 my-3" style="width: 18rem;">

                        <img class="card-img-top" src="<?= $product->image ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?= $product->name ?></h5>
                            <p class="card-text"><?= $product->type->name ?></p>
                            <p class="card-text"><?= $product->type->type_food ?></p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><?= $product->categories->name ?></li>
                            <li class="list-group-item"><?= $product->price ?>€</li>
                            <?php foreach ($users as $user) : ?>
                                <li class="list-group-item"><strong><?= $user->get_fullname() ?></strong> Hai diritto al <?= $user->discount ?> di sconto</li>
                                </li>
                            <?php endforeach; ?>
                        </ul>


                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>