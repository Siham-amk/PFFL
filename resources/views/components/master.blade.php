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
        body{
            /* background-color: red; */
            background-image: url('/image/immob1.jpeg');
            background-size: cover;
        }
    </style>
</head>
<body>

    <section class="vh-100 ">
        @include('partials.nav')
       

        <div class="container-fluid h-custom">
           
           
           
            
          <div class="row d-flex justify-content-center align-items-center h-100 ">

            
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
               
    
            </div>


            {{$slot}}

        
            </div>
         </div>
         </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> 
    
</body>
</html>