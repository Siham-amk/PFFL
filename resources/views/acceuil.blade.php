<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .titre h1{
            font-size: 4em;
        }
        .des p{
           font-size: 1.3em; 
           margin-left: -60px;
        }
        .bienvenue {
        font-size: 1.3em;
        color: #fff; /* Couleur du texte */
        /* font-weight: bold; Police en gras */
        text-align: center; /* Centrage du texte */
        margin-top: 20px; /* Marge en haut */
    }

    .bg-filter {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5); /* Fond sombre avec transparence */
        z-index: -1; /* Derrière le contenu principal */
    }
    </style>
</head>
<body>

    <x-master>
        <div class="bg-filter">
        <div class="container">
            <div class="row justify-content-center align-items-center vh-100">
                <div class="col-md-8 col-lg-6 col-xl-6 text-center">
                    <h1 class="text-light display-1">Loca-Maison</h1>
                    <p class="bienvenue">Bienvenue sur notre plateforme de location de maisons. Connectez-vous pour explorer nos offres.</p>
                </div>
            </div>
        </div>
    </div>
    </x-master>
    
</body>
</html>
