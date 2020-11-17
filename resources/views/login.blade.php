<!DOCTYPE html>
<html>
 <head>
  <title>Login</title>
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <style>
      body {
       background: -webkit-linear-gradient(bottom,    #F0FFFF, #000000);
       background-repeat: no-repeat;
}
#card {
        background: #fbfbfb;
        border-radius: 8px;
        box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
        height: 410px;
        margin: 6rem auto 8.1rem auto;
        width: 329px;
}
#card-content {
      padding: 12px 44px;
}
#card-title {
      font-family: "Raleway Thin", sans-serif;
      letter-spacing: 4px;
      padding-bottom: 23px;
      padding-top: 13px;
      text-align: center;
}
.underline-title {
      background: -webkit-linear-gradient(right, #FFFAF0, #FFA500);
      height: 2px;
      margin: -1.1rem auto 0 auto;
      width: 89px;
}
a {
    text-decoration: none;
}
label {
    font-family: "Raleway", sans-serif;
    font-size: 11pt;
}
#forgot-pass {
    color: #FFA500;
    font-family: "Raleway", sans-serif;
    font-size: 10pt;
    margin-top: 2px;
    text-align: left;
}
.form {
    align-items: center;
    display: flex;
    flex-direction: column;
}
.form-border {
    background: -webkit-linear-gradient(right, #FFFAF0, #FFA500);
    height: 1px;
    width: 90%;
}
.form-content {
    background: #fbfbfb;
    border: none;
    outline: none;
    padding-top: 14px;
}
#signup {
    color: #2dbd6e;
    font-family: "Raleway", sans-serif;
    font-size: 10pt;
    margin-top: 16px;
    text-align: center;
}
#submit-btn {
    background: -webkit-linear-gradient(right, #F0FFFF, #000000);
    border: none;
    border-radius: 31px;
    box-shadow: 0px 1px 8px #24c64f;
    cursor: pointer;
    color: white;
    font-family: "Raleway SemiBold", sans-serif;
    height: 42.3px;
    text-align: center;
    margin: 0 auto;
    margin-top: 50px;
    transition: 0.25s;
    width: 153px;
}
#submit-btn:hover {
    box-shadow: 0px 1px 18px #24c64f;
}
  </style>
 </head>
 <body>

     <div id="card"> 
        <div id="card-content">
            <div id="card-title">
    <a href="{{url('admin')}}"><h2>LOGIN</h2></a>
    <div class="underline-title"></div>
         </div>
            </div>
    @include('layouts.utils.notif')
    <form action="{{url('login')}}" method="post" class="form">
    @csrf 
       <div class="form-group">
         <input class="form-control-lg" id="email" type="text" placeholder="email" name="email">
       </div>
       <div class="form-group">
         <input class="form-control-lg" id="password" type="password" placeholder="Password" name="password">
       </div>
    <a href="#"><legend id="forgot-pass">Forgot password?</legend></a>
    <a href="{{url('admin')}}" id="submit-btn" type="submit" name="submit"> Login </a>
        </form>
    </div>

 </body>
</html>