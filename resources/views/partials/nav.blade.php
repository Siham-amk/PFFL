<nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom border-body px-5 ">
    <div class="container-fluid d-flex ">
        <div class="row mx-5">
        <div class="col ">
            <a class="navbar navbar-brand " href="{{route('annonce.index')}}" style="color: white"data-bs-toggle="tooltip" title="Acceuil">
              {{-- <img  src="/image/home (1).png" alt="" style="width: 30px"> --}}
              Acceuil</a>
        </div>
        {{-- <div class="col">
            <a class="navbar navbar-brand" href="#"style="color: white">Acceuil</a>
        </div>--}}
        <div class="col ">
            <a class="navbar navbar-brand" href="{{route('annoncelike.index')}}"style="color: white" data-bs-toggle="tooltip" title="les favouris"><img src="/image/heart (1).png" alt="" style="width: 30px"></a>
        </div>
        </div>
        
      
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        
        <div class="collapse navbar-collapse m-2" id="navbarSupportedContent">
          
          <form class="d-flex ms-auto" role="search">
            <input class="form-control me-2 m-1" type="search" placeholder="Search" aria-label="Search">
            <a class="btn m-1" type="submit"  >Search</a>
            @auth

            <li class="nav-item dropdown btn me-5 my-1" >
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
            @endauth
            @guest
            <a class="btn m-1" type="submit" href={{route('login')}}>connecter</a>
            @endguest


          </form>
          
        </div>
    </div>
</nav>