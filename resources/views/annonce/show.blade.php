<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .Iphotos {
            width: 700px;
            height: 300px;

            height: auto;
        }

        .icon {
            width: 25px;
            height: 25px;
            margin-right: 5px;
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
    </style>
</head>
<body>

    <x-masterAcceuil>
    <div class="body-container d-flex justify-content-center">

        {{-- {{$Annonce->id}} --}}
        <div class=" d-flex justify-content-center p-3 m-3 w-75">
            <div class="row d-flex  justify-content-center w-100">

            <div class="card w-100 p-2">
                <div class="text-center">
                    <img src='/image/APRTM1.jpeg' alt="Annonce Image" class="Iphotos mb-3" style="width: 800px ; height:250px">
                    {{-- <img src="/image/location.png" alt="" id="love" class="icon"> --}}
                </div>
                <div>
                </div>
                <div class="info row ">
                    <div class="col px-5">
                    <h2>{{$Annonce->type}}</h2>

                        <p><img src="/image/location.png" alt="" class="icon">{{$Annonce->nbchambre}} Chambres</p>
                        <p><img src="/image/location.png" alt="" class="icon">{{$Annonce->surface}} m2</p>
                        <p><img src="/image/location.png" alt="" class="icon">{{$Annonce->adresse}} - {{$Annonce->ville}}</p>
                    </div>
                    <div class="col-4 d-flex flex-column justify-content-between mx-5 px-3">
                        <div class="row">
                            <h2 class="d-flex justify-content-end">{{$Annonce->prix}} dh</h2>

                            <p class="d-flex justify-content-end"><img src="/image/calendar.png" alt="" class="icon">Disponible à partir de </p>
                            <p class="d-flex justify-content-end">15/02/2024</p>

                        </div>
                        <div class="contacter d-flex justify-content-end">
                            <button class="btn">Contacter</button>
                            <button class="btn">Appeler</button>
                        </div>
                    </div>
                </div>
            </div>
          </div>

        </div>
    </x-masterAcceuil>
   </div>
</body>
</html>
