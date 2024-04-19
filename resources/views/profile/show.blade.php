
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        
        .profile-cover {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px 10px 0 0;
        }
        .icon{
        width: 25px;
        height: 25px;
        margin-right: 10px;
      }
        .profile-picture {
            width: 170px;
            height: 170px;
            border-radius: 50%;
            border: 5px solid #fff; /* Ajouter une bordure blanche autour de l'image */
            margin-top: -105px; /* Déplacer l'image vers le haut pour la superposer à la photo de couverture */
        }
        .btn{
            background-color:#1a7492 ;
            color: white;
        }
        .btn:hover{
            background-color: #083b4c;
            color: white;
        }
        a{
            text-decoration: none;
            color: black; 
        }
        .btn a{
            color: #fff;
        }
        
    </style>
</head>
<body>
    @include('partials.nav')

    <div class="container-fluid bg-light ">
    <!-- Profil -->
    <div class="container ">
        
        <div class="row justify-content-center">
            <div class="col-md-8  ">
                <div class="card shadow">
                    <div class="container-fluid p-0">
                        <img src={{ URL('storage/'.$profile->cover) }} class="profile-cover" alt="Profile Cover">
                        
                    </div>
                    <div class="card-body ">
                        <div class="row">
                            <div class="col">
                                <img src={{ URL('storage/'.$profile->image) }}  class="profile-picture shadow " alt="Profile Picture">
                            </div>
                            <div class="col d-flex justify-content-end mx-2">
                               <form action="">
                                <button class="btn">
                                    <a href="{{route('profile.edit', $profile->id)}}">
                                        Éditer le profil
                                    </a>
                                </button>
        
        
                                </form>
                            </div>

                            <h1 class="mb-4 ">{{Auth()->user()->prenom}} {{Auth()->user()->nom}}</h1>
                            <p><img src="/image/mail.png" alt=""class="icon"> <a href="mailto:{{Auth()->user()->email}}">{{Auth()->user()->email}}</a></p>
                            <p><img src="/image/telephone-call.png" alt=""class="icon">{{Auth()->user()->tele}}</p>
                        </div>

                       
                    </div>
                </div>
            </div>
        </div>
    </div>

   <!-- Section de publication des annonces -->
<div class="container mt-2">

    <div class="row justify-content-center">
        <div class="col-md-8 ">


            <div class="card shadow">

                <div class="card-body text-start">
                    <!-- Petite image de profil -->
                    <img src={{ URL('storage/'.$profile->image) }} alt="Profile Picture" class="rounded-circle shadow" style="width: 50px; height: 50px; margin-right: 10px;">
                    <!-- Titre de la section -->
                    <h5 class="card-title d-inline me-5">Ajouter une annonce</h5>
                    <!-- Bouton pour créer une annonce -->
                    <button type="button" class="btn btn-sm ms-5"><a href="{{route('annonce.create')}}" style="color: white; text-decoration:none">Créer une annonce</a></button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-3">
    <div class="row justify-content-center">

        <div class="col-md-8 ">
{{-- <h3 class="pb-2 px-2 color-light">vos annonces</h3> --}}
<hr>

<h4 class="mb-3 display-6 px-5 text-secondary">vos annonces</h4>

<div class="row my-2">
    @include('partials.flashbag')

</div>

@if (!empty($profile->Annonces))
@foreach ($profile->Annonces as $annonce)

<div class="card shadow-lg">
    <div class="card-body text-start">
        
        <!-- Petite image de profil -->
        <div class="col d-flex pb-3">
            <div>
                <img src={{ URL('storage/'.$profile->image) }} alt="Profile Picture" class="rounded-circle border" style="width: 50px; height: 50px; margin-right: 10px;">

            </div>
            <div >
        <h6 class="pt-3">{{$profile->nom}} {{$profile->prenom}}</h6>

            </div>
            <div class=" col d-flex justify-content-end">
                <div class="dropdown ">
                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                      
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <li><a class="dropdown-item" href="{{route('annonce.edit', $annonce->id)}}">Éditer</a></li>
                      <li>
                        <form action="{{route('annonce.destroy', ['annonce' =>$annonce->id])}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger bg-danger">Supprimer</button>
                        </form></li>
                    </ul>
                  </div>
            </div>
           
        </div>
        
        <div class="card mb-1"  >
            <img class="card-img-top" src="{{ URL('storage/'.$annonce->AnnonceImages->first()->image) }}" alt="Première image"  style="height:360px">
            <div class="card-body">
                <h4 class="card-title">{{$annonce->type}}</h4>
    
                <p  class="card-text"><img src="/image/location.png" alt=""class="icon">{{Str::limit($annonce->adresse,20)}}</p>
                <p class="card-title font-weight-bold d-flex justify-content-end"><strong>{{$annonce->prix}} dh </strong></p>
    
                
                <a href={{route('annonce.show',$annonce->id)}} class="stretched-link"></a>
               
            </div>
        
        </div>

    </div>
</div>

@endforeach
@else
    
    vide
    
@endif

        </div>
    </div>
</div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

