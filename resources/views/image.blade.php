<!DOCTYPE html>
<html>
<head>
  <title>Upload Image</title>
 
  <meta name="csrf-token" content="{{ csrf_token() }}">
 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
 {{-- <style>
  .custom-file-upload {
    border: 1px solid #ccc;
    border-radius: 8px;
    color:white;
    display: inline-block;
    padding: 6px 12px;
    cursor: pointer;
}
.custom-file-upload:hover{
  color:grey;
  border-color:grey;
}
.custom-file-upload:active{
  background:grey;
  animation-delay: 2s;
}
 </style> --}}
</head>
<body style="background:rgb(105,105,105)">
  
        
  {{-- <nav class="navbar navbar-expand-lg navbar-dark " style="background-color:rgb(80,80,80)">
    <div class="container-fluid">
      <a class="navbar-brand"  href="/">
        
        <img style="width:2.5rem;position:relative" src="images/undo.png" alt="">
        
      </a>
      
      
    </div>
  </nav>
   --}}
   <nav class="navbar navbar-expand-lg navbar-dark " style="background-color:rgb(105,105,105)">
    <div class="container-fluid">
      <a class="navbar-brand"  href="/" style="background:rgb(105,105,105)">
        
        <img style="width:2.5rem;position:relative;margin:0"src="{{asset('images/undo.png')}}" alt="">
        
      </a>
      
      
    </div>
  </nav>

 
<div class="container mt-5">
 
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
 
  <div class="card" style="background:rgb(105,105,105); border-color:white; width:30rem" >

    <div class="card-header " >
      <h2 style="color:rgb(211,211,211)">Upload Image</h2>
    </div>
 
    <div class="card-body" style="border-top:1px solid white">
        <form method="POST" enctype="multipart/form-data" id="main" action="{{ url('save') }}" >
            @csrf  
            <div class="row">
 
                <div class="col-md-12">
                    <div class="form-group">
                        {{-- <label for="image" class="custom-file-upload">
                          Choose Image
                        </label> --}}
                        <input  type="file" name="image" placeholder="Choose image" style="color:white"id="image">
                    @error('image')
                        <div style="background:#292b2c; color:red;border-color:red"class="alert alert-danger mt-1 mb-1" >{{ $message }}</div>
                    @enderror
                    </div>
                </div>
                   
                <div class="col-md-12">
                    <button style="margin-top:0.5rem;background-color:dodgerblue"type="submit" class="btn btn-primary" id="submit">Submit</button>
                </div>
            </div>     
        </form>
 
    </div>
 
  </div>
 
</div>  
</body>
</html>