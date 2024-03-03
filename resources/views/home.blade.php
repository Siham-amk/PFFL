<x-masterAcceuil
>
    
<div class="container mt-5">
    <div class="row justify-content-start">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body text-start">
                    <!-- Petite image de profil -->
                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/182.webp" alt="Profile Picture" class="rounded-circle" style="width: 50px; height: 50px; margin-right: 10px;">
                    <!-- Titre de la section -->
                    <h5 class="card-title d-inline me-5">Ajouter une annonce</h5>
                    <!-- Bouton pour créer une annonce -->
                    <button type="button" class="btn btn-primary btn-sm ms-5 ">Créer une annonce</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row m-5">
    <h1>Annonces</h1>
    @foreach ($Annonces as $annonce)

   
    <x-annonce-card :annonce="$annonce"/>

    @endforeach

    {{$Annonces->links()}}
</div>
</x-masterAcceuil
>
