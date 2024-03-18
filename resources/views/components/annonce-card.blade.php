@props(['annonce'])
<div class="col-sm-3 ">
    <div class="card mb-1"  >
        <img class="card-img-top" src="https://mdbcdn.b-cdn.net/img/new/standard/nature/182.webp" alt="Title" />
        <div class="card-body">
            <h4 class="card-title">{{Str::limit($annonce->type,8)}}</h4>
            <p class="card-text">{{$annonce->nbchambre}}</p>
            
            <a href={{route('annonce.show',$annonce->id)}} class="stretched-link"></a>
           
        </div>
        
        <div class="card-foot border-top px-3 py-3 bg-light" style="z-index: 9">
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

        </div>
    </div>
  
</div>
