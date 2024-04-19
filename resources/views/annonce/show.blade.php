<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        .icon {
            width: 20px;
            height: 20px;
            margin-right: 5px;
        }
        .btn{
            background-color:#1a7492 ;
            color: white;
        }
        .btn:hover {
            background-color: #083b4c;
            color: white;

        }

        .info h2 {
            margin-bottom: 10px;
        }

        .info p {
            margin-bottom: 5px;
        }

        .prix {
            margin-top: 10px;
        }

        .contacter button {
            margin-right: 5px;
        }

        /* Style pour l'image avec forme rectangulaire et bordure */
        .carousel-item img {
            border-radius: 10px; /* Coins arrondis */
            border: 2px solid #000; /* Bordure de 2px de couleur noire */
        }

        /* Style pour le texte */
        .bg-light h3, .bg-light p, .bg-light span {
            font-size: 1.2rem; /* Taille de police réduite */
            margin-bottom: 0.5rem; /* Marge inférieure réduite */
        }

        /* Style pour le prix en gras */
        .fw-bold {
            font-weight: bold;
        }

        p {
            font-weight: 5px; /* Vérifier la valeur, elle semble incorrecte */
        }

        /* Style pour augmenter la hauteur de la carte */
        .card {
            height: 500px; /* Exemple de hauteur augmentée */
        }
    </style>
</head>
<body>
    @include('partials.nav')

    <div class="body-container">
        <div class="row justify-content-center mt-5 mx-0">
        <div class="mx-5 px-5 pt-2 pb-0"><h3><img src="back.png" alt="">back</h3></div>

            <div class="col-md-8 m-1">
                <div class="card pt-2 pb-2 mb-5 shadow border-1 h-100"> <!-- Ajout de la classe h-100 pour la hauteur -->
                    <div class="row align-items-center bg-light h-100">
                        <div class="col-md-5 ">
                            <h3 class="text-center pb-2">{{$Annonce->type}}</h3>
                            <div id="demo" class="carousel slide h-100" data-bs-ride="carousel">
                                <!-- Indicators/dots -->
                                <div class="carousel-indicators">
                                    @foreach ($Annonce->AnnonceImages as $key => $AnnonceImage)
                                        <button type="button" data-bs-target="#demo" data-bs-slide-to="{{ $key }}" @if($key === 0) class="active" @endif></button>
                                    @endforeach
                                </div>
                                <!-- The slideshow/carousel -->
                                <div class="carousel-inner">
                                    @foreach ($Annonce->AnnonceImages as $key => $AnnonceImage)
                                        <div class="carousel-item @if($key === 0) active @endif">
                                            <img src="{{ URL('storage/'.$AnnonceImage->image) }}" alt="Image {{ $key + 1 }}" class="d-block w-100 border border-dark rounded-3" style="height: 200px;">
                                        </div>
                                    @endforeach
                                </div>
                                <!-- Left and right controls/icons -->
                                <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                                    <span class="carousel-control-next-icon"></span>
                                </button>
                            </div>
                            <div class="text-end">
                                <h3 class=" text-end pt-2">{{$Annonce->prix}} dh</h3>
                            {{-- <h3 class="text-center pb-2">{{$Annonce->type}}</h3> --}}

                            </div>
                        </div>
                        <div class="col-md-6 bg-light my-3 mx-1">
                            <div class="col">
                                <p><img src="/image/location.png" alt="" class="icon">{{$Annonce->nbchambre}} Chambres</p>
                                <p><img src="/image/location.png" alt="" class="icon">{{$Annonce->surface}} m2</p>
                                <p><img src="/image/location.png" alt="" class="icon">{{$Annonce->adresse}} - {{$Annonce->ville}}</p>
                                <p class=""><img src="/image/calendar.png" alt="" class="icon">Disponible à partir de 15/02/2024</p>
                            </div>
                            <div class="contacter d-flex justify-content-end mt-5 mb-0">
                                <button class="btn">Contacter</button>
                                <button class="btn">Appeler</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
