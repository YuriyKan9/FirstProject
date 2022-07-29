<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<style>
    .noname {
        background-color: rgb(160,160,160);
        box-shadow: 0 2px 3px rgba(255,255,255,0.7);
        border-radius: 4px;
        padding: 10px;
        color: white;
        border: 1px solid black;
      
        /* outline:none; */
    
    }
    form{
        margin-top:15%;
        display:flex;
        flex-direction:column;
    }
    .field{
        display:flex; 
        flex-direction:column;
        margin:10px auto;
        width:25rem;
    }
    input::placeholder{
        color:rgb(60,60,60);
       
    }
    </style>
<body style="background-color:rgb(180,180,180)">
    <header class="header1">
        <a href="/">
        <img style="width:2.5rem;height:2.5rem;margin:10px"src="images/undo.png" alt="">
    </a>
      </header>
    
      <section>
      <form method="POST" action="/authenticate">
        @csrf
           
            <div class="field">
                <label for="email" >Email</label>
                <input class="noname" type="text" placeholder="helloworld@gmail.com" name="email">
            </div>
            <div class="field">
                <label for="password" >Password</label>
                <input class="noname" type="password" placeholder="type your password" name="password" >
            </div>
            
            <button type="submit" style="text-align:center;padding:15px 30px;color:white;margin:25px auto ;width:25rem;background-color:dodgerblue;border-radius:5px;border:none">Submit</button>
      </form>
    </section>
</body>
</html>