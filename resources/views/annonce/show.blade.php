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

    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom border-body p-3 shadow">
        <div class="container-fluid d-flex ">
            <div class="row">
            <div class="col mx-2">
                <a class="navbar navbar-brand" href="{{route('annonce.index')}}" style="color: white"> acceuil </a>
                
            </div>
            
            </div> 
        </div>
    </nav> 
    <div class="body-container d-flex justify-content-center">

        {{-- {{$Annonce->id}} --}}
        <div class=" d-flex justify-content-center  mt-3">
            <div class="row d-flex  justify-content-center w-100">

            <div class="card w-100 pt-2 pb-2 mb-5 shadow">
                <div class="info row ">
                    
                    <div id="demo" class="carousel slide d-flex justify-content-center align-items-center " data-bs-ride="carousel">

                        <div id="demo" class="carousel slide" data-bs-ride="carousel">
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
                                    <img src="{{ URL('storage/'.$AnnonceImage->image) }}" alt="Image {{ $key + 1 }}" class="d-block" style="width:700px; height:400px">
                                </div>
                                @endforeach
                            </div>
                        </div>
                        
                       
                        
                        <!-- Left and right controls/icons -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                          <span class="carousel-control-next-icon"></span>
                        </button>
                      </div>
                      
                   
                    {{-- <img src="/image/location.png" alt="" id="love" class="icon"> --}}
                </div>
                <div>
                </div>
                <div class="container d-flex ">
                    <div class="col ">
                    <h2>{{$Annonce->type}}</h2>

            {{-- {{dd($Annonce->AnnonceImages)}} --}}


                        <p><img src="/image/location.png" alt="" class="icon">{{$Annonce->nbchambre}} Chambres</p>
                        <p><img src="/image/location.png" alt="" class="icon">{{$Annonce->surface}} m2</p>
                        <p><img src="/image/location.png" alt="" class="icon">{{$Annonce->adresse}} - {{$Annonce->ville}}</p>
                    </div>
                    <div class="col-4 d-flex flex-column justify-content-between mx-2">
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
    
   </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
