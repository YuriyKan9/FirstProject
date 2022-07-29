<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
    margin-top:8%;
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
</head>
<body style="background-color:rgb(180,180,180)">
    <header class="header1">
        <a href="/">
        <img style="width:2.5rem;height:2.5rem;margin:10px"src="images/undo.png" alt="">
    </a>
      </header>
    
      <section>
      <form method="POST" action="/store" >
        @csrf
            <div class="field">
                <label class="label"for="first_name" >First Name</label>
                <input class="noname" type="text" placeholder="Yuriy" value="{{old('first_name')}}" name="first_name">
            </div>
            <div class="field">
                <label for="second_name" >Second Name</label>
                <input class="noname" type="text" placeholder="Ivanov" value="{{old('second_name')}}" name="second_name">
            </div>
            <div class="field">
                <label for="email" >Email</label>
                <input class="noname" type="text" placeholder="helloworld@gmail.com" value="{{old('email')}}" name="email">
            </div>
            <div class="field">
                <label for="password" >Password</label>
                <input class="noname" type="password" placeholder="password" name="password" value="{{old('password')}}">
            </div>
            <div class="field">
                <label for="password" >Confirm password</label>
                <input class="noname" type="password" placeholder="confirm your password" name="password_confirmation" value="{{old('password_confirmation')}}">
            </div>
            <div class="field">
                <label for="city" >City</label>
                <input class="noname" type="text" placeholder="Moscow" name="city">
            </div>
            <button type="submit" style="text-align:center;padding:15px 30px;color:white;margin:25px auto ;width:25rem;background-color:dodgerblue;border-radius:5px;border:none">Submit</button>
      </form>
    </section>
</body>
</html>