<nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom border-body px-5 ">
    <div class="container-fluid d-flex ">
        <div class="row mx-5">
        <div class="col ">
            <a class="navbar navbar-brand " href="{{route('annonce.index')}}" style="color: white"data-bs-toggle="tooltip" title="Acceuil">
              <img src="/image/logommmmm.png" class="" alt="" style="width: 60px"></a>
        </div>
        
        <div class="col ">
            <a class="navbar navbar-brand pt-3" href="{{route('annoncelike.index')}}"style="color: white" data-bs-toggle="tooltip" title="les favouris">
              
               </a>
        </div>
        
           
            <div class="col ">
              <a class="navbar navbar-brand pt-3 display-6 " href="{{route('annonce.index')}}"style="color: white" data-bs-toggle="tooltip" title="Acceuil">
                
                 Acceuil</a>
          </div>
           <div class="col ">
            <a class="navbar navbar-brand pt-3 display-6 " href="{{route('annoncelike.index')}}"style="color: white" data-bs-toggle="tooltip" title="les favouris">
              
               Mes favouris</a>
        </div>
        <div class="col ">
          <a class="navbar navbar-brand pt-3 display-6 " href=""style="color: white" data-bs-toggle="tooltip" title="les favouris">
            
            Rechercher</a>
      </div>
      </div>
        
        
      
        
        
        
        <div class="collapse navbar-collapse m-2" id="navbarSupportedContent">
          
          <form class="d-flex ms-auto" role="search">
          
      
            @auth
            <div class="col ">
            <li class="nav-item dropdown btn me-5 my-1 " >
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">{{Auth()->user()->prenom}}</a>
              <ul class="dropdown-menu">
             
                {{-- <li class="dropdown-item"><a class="dropdown-item row" href="#">Link</a>
                  <a class="dropdown-item row" href="#">Link</a>
                </li> --}}
                <li><a class="dropdown-item" href={{route('profile.show',Auth()->user()->id)}}>Votre profile</a></li>
                {{-- <li><a class="dropdown-item" href="#">Modifier votre profile</a></li> --}}

                <li><a class="dropdown-item" type="submit" href={{route('login.logout')}}>Deconnexion</a></li>

                </ul>
            </li>
        </div> 

            @endauth
            @guest
            <a class="btn m-1" type="submit" href={{route('login')}}>connecter</a>
            @endguest


          </form>
        </div> 
        </div>
    </div>
</nav>