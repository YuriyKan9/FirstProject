<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixels</title>
    <script src="{{asset('js/image.js')}}"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    
</head>
<body >

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

  <header >
    <a href="/" class="logo" style="display:flex;background-color:rgb(80,80,80)">
    
    <img  style="width:2.5rem;height:2.5rem;margin-top:0.3rem"src="images/dodgerblue.png" alt="">
    <h1 class="hhh" style="color:white;background:rgb(80,80,80);margin-top:0.3rem">Pixels</h1>
  
</a>

    <nav style="background:rgb(80,80,80);display:flex;">
      @auth
      <p style="display:inline;font-size:30px;background:rgb(80,80,80);margin-right:2rem;margin-top:1rem;">Welcome, {{auth()->user()->first_name}}!</p>
      <a style="margin-top:1.8rem;"href="upload-image" class="upload">Upload New Image</a>
      <a style="margin-top:1.8rem;" href="viewimg" class="image">View Images</a>
      <form method="POST" action="/logout" style="background:rgb(80,80,80);margin-top:1.1rem">
        @csrf
        <button class="logout" type="submit"  >
          Log Out
        </button>
      </form>
      @else
      
        
        <div class="dropdown">
          <button class="dropbtn">Registration</button>
          <div class="dropdown-content">
            <a href="login">Log In</a>
            <a href="signup">Sign Up</a>
            
          </div>
        </div>
       @endauth
      
    </nav>
    <a href="about-me"><button class="contact">Contact</button></a>
  </header>
  <section>
   <div style="width:40vw;position:relative;margin:0 auto;top:35vh;">
    <img  class="doggy" style="position:relative;margin-left:38%;width:10vw;"src="images/doggy.png"  id='pablo' alt="" onclick="pablo()">
    <div class="click" style="text-align:center;margin:0 auto;color:white;width:40vw;" id='clickme'><p onclick="pablo()">Click Here!</p></div>
   
   

    </div>
  </section>
   

    
</body>
</html>