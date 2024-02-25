<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }
        .h-custom {
            height: calc(100% - 90px);
        }
        .btn{
            background-color:#1a7492 ;
            color: white;
        }
        .btn:hover {
            background-color: #083b4c;
            color: white;

        }
        a{
            color: red;
            font-weight: bold;

        }
        @media (max-width: 450px) {
        .h-custom {
            height: 100%;
        }
        
        }
    </style>
</head>
<body>

    <section class="vh-100 ">
       

        <div class="container-fluid h-custom">
           
           
           
            
          <div class="row d-flex justify-content-center align-items-center h-100 ">
            @include('partials.nav')

            
            <div class="row my-2">
                @include('partials.flashbag')

            </div>
            @if ($errors->any())
                <x-alert type="danger">
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                        
                    @endforeach

                </x-alert>
    
            @endif

            <div class="col-md-9 col-lg-6 col-xl-5 ">
               
    
            
              <img src="https://cdni.iconscout.com/illustration/premium/thumb/house-warming-8298685-6597433.png"
                class="img-fluid mt-5 " alt=" image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1 mt-5 mx-5">


            {{$slot}}

        
            </div>
         </div>
         </div>
        </div>
    </section>

    
    
</body>
</html>