<x-masterAcceuil
>
    
<div class="container">
    <div class="row justify-content-start">
        
        <div class="col-md-6 ">
            <div class=" mt-5">
                <div class=" text-start shadow create p-3">
                    <!-- Petite image de profil -->
                    <img src={{ URL('storage/'.Auth()->user()->image) }}  alt="Profile Picture" class="rounded-circle" style="width: 50px; height: 50px; margin-right: 10px;">
                    <!-- Titre de la section -->
                    <p class="card-title d-inline me-5">Ajouter une annonce</p>
                    <!-- Bouton pour créer une annonce -->
                   
                    <button type="submit" class="btn  btn-sm ms-5 "><a href="{{route('annonce.create')}}" style="color: white; text-decoration:none">Créer une annonce</a></button>
                </div>
            </div>
        </div>
        

    </div>
</div>

<div class="row m-5">
    <h1 class="mb-5">Annonces</h1>
    @foreach ($Annonces as $annonce)

    
    <x-annonce-card :annonce="$annonce" />


    @endforeach

    {{$Annonces->links()}}
</div>
</x-masterAcceuil
>
