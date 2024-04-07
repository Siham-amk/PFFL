<x-masterAcceuil  >

  <div class="fluide bg-light p-5">
        
    <div class="row justify-content-center ">
        <div class="col-md-8">
            <div class="card p-4 shadow">
                <form action="{{route('annonce.store')}}" method="POST" enctype="multipart/form-data">
                  @csrf



                  @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif


              
                  <div class="d-flex align-items-center my-4">
                    
                    <h1>Creer une annonce</h1>
                  </div>
                
                  <div class="form-outline mb-2 d-flex">
                      <div class="flex-row px-1 col-6 ">
                          @error('type')
                          <div class=" text-danger">{{$message}}</div>
                          @enderror
                          <label for="type" class="px-2 h6">type :</label>
                          <input type="text" name="type" class="form-control " placeholder="type" value="{{old('type')}}"/>
                  
                      </div>
                    
                     
                      <div class="flex-row px-1 col-6 ">
                        @error('prix')
                      <div class=" text-danger">{{$message}}</div>
                      @enderror
                        <label class=" px-2 h6 " for="prix">Prix :</label>
  
                        <input type="number" name="prix" class="form-control " placeholder="prix" value=""/>
  
  
                        
                        </div>
                  </div>
                  
                    
                  <div class="form-outline mb-2 px-1">
                      @error('ville')
                      <div class=" text-danger">{{$message}}</div>
                      @enderror
                      <label class=" px-2 h6 " for="ville">ville :</label>

                      <input type="text" name="ville" class="form-control " placeholder="ville" value="{{old('ville')}}"/>
                  </div>
                  <div class="form-outline mb-2 px-1">
                    @error('adresse')
                    <div class=" text-danger">{{$message}}</div>
                    @enderror
                    <label class=" px-2 h6 " for="adresse">adresse :</label>

                    <input type="text" name="adresse" class="form-control " placeholder=" adresse" value="{{old('adresse')}}"/>
                </div>

                <div class="form-outline mb-2 d-flex">
                  <div class="flex-row px-1 col-6">
                    @error('nbchambre')
                    <div class=" text-danger">{{$message}}</div>
                    @enderror
                    <label class=" px-2 h6 " for="nbchambre">Nombre de chambre :</label>

                    <input type="number" name="nbchambre" class="form-control " placeholder="Nombre de chambre" value="{{old('nbchambre')}}"/>
                </div>

                  
               
                    <div class="flex-row px-1 col-6">
                      @error('surface')
                    <div class=" text-danger">{{$message}}</div>
                    @enderror
                      <label class=" px-2 h6 " for="surface">surface :</label>

                      <input type="number" name="surface" class="form-control " placeholder="surface" value=""/>
                      
                      </div>


                </div>
                 
                     <div class="form-outline mb-2 px-1 ">
                          
                          <label class=" px-2 pt-2 h6" for="images">Ajouter des photos :</label>

                          <input type="file" name="images[]" multiple class="form-control" />
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
</x-masterAcceuil>