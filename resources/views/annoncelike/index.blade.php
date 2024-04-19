
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        .icon{
        width: 25px;
        height: 25px;
        margin-right: 10px;
      }
      
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }
        /* .create{
            margin: 0px;
            display: flex;
            justify-content: flex-start;
            padding: 400px;

        } */
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
        p img.icon{
        width: 35px;
        height: 35px;
        /* margin-right: 10px; */
      }
      button img.love{
            /* position: absolute; */
            width: 35px;
            height: 35px;
            /* bottom: 30px; */
            /* right: 50px; */

        }
        button .blove{
            width: 100px;
            height: 100px;
            background-color: none;
            border: none;


        }
       
        .card{
            max-width: 60em;
            flex-direction: row;
            margin:  5px auto;
        
       }
       .card img{
            max-width: 30%;
            height: 200px;
            margin: auto;
            padding: 0.5em;
            border-radius: 1em;

        
       }
       .card-body{

            display: flex;
            justify-content: space-between


       }
       .text-section{
            max-width: 60%;
       }
       .cta-section{
        display: flex;

        max-width: 50%;
        flex-direction: column;
        align-items: flex-end;
        justify-content: space-between;

       }
       .cta-section .btn{
            padding: 0.3em 0.5em; 
       }
    </style>
</head>
<body>
 

    @include('partials.nav')

    <div class="fluide bg-light p-4">
        
        <div class="row justify-content-center ">
            <h1 class="mb-3 display-6 px-5">Mes favouris</h1>

{{-- <div class="m3"> --}}
    <div class="row ">

    @if ($annoncesAimees)
        @foreach ($annoncesAimees as $AnnonceLike)


             <x-annonce-card :annonce="$AnnonceLike" />
        
        @endforeach
        
        {{$annoncesAimees->links()}}
    @else
        <p>{{"vide"}} </p>

    @endif
</div>

</div>
    </div>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>



