
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
        .btn:hover {
            background-color: #083b4c;
            color: white;

        }
        a{
            text-decoration: none;
            color: black;
        }
        
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom border-body p-3 ">
        <div class="container-fluid d-flex ">
            <div class="row">
            <div class="col mx-2">
                <a class="navbar navbar-brand" href="{{route('home')}}" style="color: white"> <-- </a>
                
            </div>
            
            </div> 
        </div>
    </nav>

    
    <!-- Profil -->
    <div class="container ">
        
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="container-fluid p-0">
                        <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/182.webp" class="profile-cover" alt="Profile Cover">
                        
                    </div>
                    <div class="card-body ">
                        <div class="row">
                            <div class="col">
                                <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/182.webp"  class="profile-picture " alt="Profile Picture">
                            </div>
                            <div class="col d-flex justify-content-end px-5">
                                <form action="" method="POST">
                                    @csrf
                                    @method('PUT')
                                <button class="btn btn-primary">Éditer le profil</button>
        
        
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
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body text-start">
                    <!-- Petite image de profil -->
                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/182.webp" alt="Profile Picture" class="rounded-circle" style="width: 50px; height: 50px; margin-right: 10px;">
                    <!-- Titre de la section -->
                    <h5 class="card-title d-inline me-5">Ajouter une annonce</h5>
                    <!-- Bouton pour créer une annonce -->
                    <button type="button" class="btn btn-primary btn-sm ms-5">Créer une annonce</button>
                </div>
            </div>
        </div>
    </div>
</div>

<hr>


</body>
</html>

