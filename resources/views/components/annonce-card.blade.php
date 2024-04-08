@props(['annonce'])
<div class="col-sm-6 col-md-4 col-lg-3">
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
        
        {{-- <div class="card-foot border-top px-3 py-3 bg-light" style="z-index: 9"> --}}
            {{-- <hr> --}}
            {{-- <form action={{route('profil.destroy',$annonce->prix)}} method="POST" >
                @method('DELETE')
                @csrf
                <button class="btn btn-danger btn-sm float-end " >supprimer</button>
            </form>
            <form action={{route('edit',$annonce->id)}} method="get">
                {{-- @method('PUT') --}}
                {{-- @csrf
                <button class="btn btn-primary btn-sm float-end mx-2 " >update</button>
            </form> --}} 

        {{-- </div> --}}
    </div>
  
</div>
