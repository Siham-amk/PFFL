<x-master  >


<form action={{route('store')}} method="POST">
    @csrf
    <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
  
    </div>

    <div class="divider d-flex align-items-center my-4">
      
      <h2>Créer un compte</h2>
    </div>


    @error('nom')
    <div class=" text-danger">{{$message}}</div>
    @enderror

    <div class="form-outline mb-2 d-flex">
        <div class="flex-row">
            <input type="text" name="nom" class="form-control form-control-lg" placeholder="Votre nom" value="{{old('nom')}}"/>
    
        </div>
        <div class="flex-row ms-2">
            <input type="text" name="prenom" class="form-control form-control-lg" placeholder="Votre prenom" value="{{old('prenom')}}"/>
        </div>
      </div>
      
    <div class="form-outline mb-2">
        @error('email')
        <div class=" text-danger">{{$message}}</div>
        @enderror
        <input type="email" name="email" class="form-control form-control-lg" placeholder="Votre email" value="{{old('email')}}"/>
      </div>

      <div class="form-outline mb-2">
        <input type="text" name="tele" class="form-control form-control-lg" placeholder="Votre numero de telephone" value="{{old('tele')}}"/>
      </div>

      @error('password')
      <div class=" text-danger">{{$message}}</div>
      @enderror
      <div class="form-outline mb-2 d-flex">
        
        
        <div class="flex-row ">
        <input type="password" name="password" class="form-control form-control-lg" placeholder="Votre password" value="{{old('password')}}"/>


        </div>
        <div class="flex-row ms-2">
            <input type="password" name="password_confirmation" class="form-control form-control-lg" placeholder="confirmer password" value="{{old('password_confirmation')}}"/>

        </div>

      </div>
      


    

    <div class="text-center text-lg-start mt-4 pt-2 d-grid">
      <button type="submit" class="btn btn-lg"
        style="padding-left: 2.5rem; padding-right: 2.5rem;">Ajouter</button>
      
    </div>

  </form> 
    
</x-master>