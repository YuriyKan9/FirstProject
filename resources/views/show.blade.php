
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        Pixels
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }
    </style>
</head>

<body style="background-color:rgb(105,105,105)">
    
    <nav class="navbar navbar-expand-lg navbar-dark " style="background-color:rgb(105,105,105)">
        <div class="container-fluid">
          <a class="navbar-brand"  href="/">
            
            <img style="width:2.5rem;position:relative;margin:0"src="{{asset('images/undo.png')}}" alt="">
            
          </a>
          
          
        </div>
      </nav>
 
    
    <div style="display:grid;  grid-template-columns: 25vw 25vw 25vw 25vw;">
    @unless(count($photos)==0)
    @foreach($photos as $photo)
        @if($photo->user_id == auth()->user()->id)
        <img
        class="card-img-top"
        style="padding:3px; border-radius:1rem;"
            src="{{asset('storage/' . $photo->path)}}"
            alt=""
        />
        @endif
    
   
    @endforeach
    @else
       <p>No Images!</p>
    @endunless
    </div>



</body>
</html>