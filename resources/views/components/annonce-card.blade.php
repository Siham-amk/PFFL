@props(['annonce'])
{{-- <div class="col-sm-6 col-md-4 col-lg-3">
    <div class="card mb-1 shadow "  >
        
        @if (!empty($annonce->AnnonceImages))
           
            <img src="{{ URL('storage/'.$annonce->AnnonceImages->first()->image) }}" alt="Première image" class="card-img-top " style="height:200px">


        @endif
        
        <div class="card-body">
            <h4 class="card-title">{{$annonce->type}}</h4>
           
            

            <p  class="card-text"><img src="/image/location.png" alt=""class="icon">{{Str::limit($annonce->adresse,20)}}</p>
            <p class="card-title font-weight-bold d-flex justify-content-end"><strong>{{$annonce->prix}} dh </strong></p>

            
            <a href={{route('annonce.show',$annonce->id)}} class="stretched-link"></a>
           
        </div>
        



        
       <div class="card-foot border-top px-3 py-3 bg-light" style="z-index: 9"> 
            <hr>
           

        
         
           
@auth
@php
$annonceInstance = App\Models\Annonce::findOrFail($annonce->id);
$utilisateur = App\Models\Utilisateur::findOrFail(Auth()->user()->id);
$likesAnnonces = $utilisateur->likesAnnonces($annonceInstance);
@endphp

@if ($likesAnnonces)
        <form action="{{ route('annonce.dislike', $annonce->id) }}" method="POST">
            @csrf
            
            <button type="submit">dislike</button>{{'   '}}{{$annonce->likes()->count()}}
        </form>
    @else
        <form action="{{ route('annonce.like', $annonce->id) }}" method="POST">
            @csrf
            <button type="submit">like</button>{{'   '}}{{$annonce->likes()->count()}}
        </form>
    @endif
@endauth



         </div> 
    </div>
  
</div> --}}
<div class="card shadow" >
    @if (!empty($annonce->AnnonceImages))
           
    <img src="{{ URL('storage/'.$annonce->AnnonceImages->first()->image) }}" class="card-img-top" alt="...">
    @endif

    <div class="card-body">
        <div class="text-section">
            <h3 class="card-title pt-3">{{$annonce->type}}</h3>
            <p class="card-text m-0"><img src="/image/location.png" alt=""class="icon">{{Str::limit($annonce->adresse,20)}}</p>
            <p class=" m-0"><img src="/image/house.png" alt=""class="icon">{{$annonce->surface}} m2</p>
            
            <p class="text-secondary m-0 px-2">{{$annonce->created_at}}</p>
            <a href={{route('annonce.show',$annonce->id)}} class="stretched-link"></a>
        </div>
        <div class="cta-section " style="z-index: 9">
            <h4>2000dh</h4>
            @auth
@php
$annonceInstance = App\Models\Annonce::findOrFail($annonce->id);
$utilisateur = App\Models\Utilisateur::findOrFail(Auth()->user()->id);
$likesAnnonces = $utilisateur->likesAnnonces($annonceInstance);
@endphp

@if ($likesAnnonces)
        <form action="{{ route('annonce.dislike', $annonce->id) }}" method="POST">
            @csrf
            
            <button type="submit" class="text-end" style="background-color: white;
            border: none ; width:200px ; height:60px ; padding: 0px ; margin:0px;"><img src="/image/like.png" alt="" style=" width: 42px; height: 42px; padding:4px ;margin:8px;">{{'   '}}{{$annonce->likes()->count()}}</button>
        </form>
        
    @else
        <form action="{{ route('annonce.like', $annonce->id) }}" method="POST">
            @csrf
            <button type="submit" class="text-end" style="background-color: white;
            border: none ; width:200px ; height:60px ; padding: 0px ; margin:0px;"><img src="/image/unlike.png" alt=""  style=" width: 42px; height: 42px; padding:4px ;margin:8px;">{{'   '}}{{$annonce->likes()->count()}}</button>
        </form>
    @endif
@endauth



        </div>
    </div>
  </div>