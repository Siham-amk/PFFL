
<x-master >

  <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1 mx-5">

              <form action={{route('login.login')}} method="POST"class="my-4 py-2" >
                @csrf
                <div class="d-flex flex-row  justify-content-lg-start">
        
                </div>
      
                <div class="divider d-flex align-items-center my-4">
                  <h1>Se connecter</h1>
                </div>
      
          
                <div class="form-outline mb-2">
                  {{-- <label class="form-label" for="form3Example3">Email address</label> --}}
                    @error('email')
                    <div class=" text-danger">{{$message}}</div>
                    @enderror
                  <input type="email" id="form3Example3" name="email" class="form-control form-control-lg"
                    placeholder="Enter email address" />
                </div>
      
                <!-- Password input -->
                <div class="form-outline mb-3">
                  {{-- <label class="form-label" for="form3Example4">Password</label> --}}

                  <input type="password" id="form3Example4" class="form-control form-control-lg"
                    placeholder="Enter password" name="password"/>
                </div>
      
                <div class="d-flex justify-content-between align-items-center">
                  <!-- Checkbox -->
                  <div class="form-check mb-0">
                   
                  </div>
                  <a href="#!" class="text-body">Forgot password?</a>
                </div>
      
                <div class="text-center text-lg-start mt-4 pt-2 d-grid">
                  <button type="submit" class=" d-grid btn btn-lg"
                    >Login</button>
                </div>

                <div class="text-center text-lg-start pt-2">

                  <p class="small fw-bold pt-1 mb-0">Don't have an account? <a href={{route('create')}}
                      class="link-danger">Register</a></p>
                </div>
      
              </form>
           
      
</div>
          
       
</x-master>