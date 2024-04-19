
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


    
    <!-- Profil -->
    <div class="fluide bg-light">
    <div class="container ">
        
        <div class="row justify-content-center ">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="container-fluid p-0">
                        <img src={{ URL('storage/'.$editprofile->cover) }} class="profile-cover" alt="Profile Cover">
                        
                    </div>
                    <div class="card-body  ">
                        <div class="row">
                            <div class="col">
                                <img src={{ URL('storage/'.$editprofile->image) }}  class="profile-picture shadow" alt="Profile Picture">
                            </div>
                            

                            <form action="{{route('profile.update',[$editprofile->id])}}" method="POST" enctype="multipart/form-data">
                                @method("PUT")
                            
                           
                                @csrf
                                {{-- <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                              
                                </div> --}}
                               
                            
                                <div class="divider d-flex align-items-center my-4">
                                  
                                  <h2>Editer profile</h2>
                                </div>
                            
                            
                                
                            
                                <div class="form-outline mb-2 d-flex">
                                    <div class="flex-row px-1 col-6 ">
                                        @error('nom')
                                        <div class=" text-danger">{{$message}}</div>
                                        @enderror
                                        <label for="nom" class="px-2 h6">Nom :</label>
                                        <input type="text" name="nom" class="form-control " placeholder="Votre nom" value="{{old('nom',$editprofile->nom)}}"/>
                                
                                    </div>
                                   
                                    <div class="flex-row px-1 col-6">
                                        @error('prenom')
                                        <div class=" text-danger">{{$message}}</div>
                                        @enderror
                                        <label class=" px-2 h6 " for="Prenom">Prenom :</label>

                                        <input type="text" name="prenom" class="form-control " placeholder="Votre prenom" value="{{old('prenom',$editprofile->prenom)}}"/>
                                    </div>
                                </div>
                                  
                                <div class="form-outline mb-2 px-1">
                                    @error('email')
                                    <div class=" text-danger">{{$message}}</div>
                                    @enderror
                                    <label class=" px-2 h6 " for="email">Email :</label>

                                    <input type="email" name="email" class="form-control " placeholder="Votre email" value="{{old('email',$editprofile->email)}}"/>
                                </div>
                            
                                  <div class="form-outline mb-2 px-1">
                                    @error('tele')
                                    <div class=" text-danger">{{$message}}</div>
                                    @enderror
                                    <label class=" px-2 h6 " for="tele">N° de téléphone :</label>

                                    <input type="text" name="tele" class="form-control " placeholder="Votre numero de telephone" value="{{old('tele',$editprofile->tele)}}"/>
                                  </div>
                            
                                  
                                  <div class="form-outline mb-2 px-1 ">
                                    @error('password')
                                  <div class=" text-danger">{{$message}}</div>
                                  @enderror
                                    <label class=" px-2 h6 " for="password">Mot de passe :</label>

                                    <input type="password" name="password" class="form-control " placeholder="Votre password" value=""/>
                            
                            
                                    
                                    </div>
                                    <div class="form-outline mb-2 px-1 ">
                                        
                                        <label class=" px-2 pt-2 h6" for="image">Modifier photo :</label>
    
                                        <input type="file" name="image" class="form-control"/>
                                      </div>
                                    </div>
                                  
                                    <div class="form-outline mb-2 px-1">
                                        <label class=" px-2 h6 " for="cover">Modifier la coverture :</label>
    
                                        <input type="file" name="cover" class="form-control"/>
                                      </div>
                                  
                            
                            
                                
                            
                                <div class="text-center text-lg-start mt-4 pt-2 px-1">
                                  <button type="submit" class="btn"
                                    style="padding-left: 2.5rem; padding-right: 2.5rem;">save</button>
                                  
                                </div>
                                
                            
                              </form> 
                        </div>

                        
                        
                        
                           
                        
                        
                        
                       
                    </div>
                </div>
            </div>
        </div>
    </div>

 


</body>
</html>

