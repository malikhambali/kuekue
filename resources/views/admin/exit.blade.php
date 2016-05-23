<!doctype html> 
<html class="no-js"> 
<head> <meta charset="utf-8"> 
<title>Login - Admin</title> 
<meta name="description"> 
<meta name="viewport" content="width=device-width">  
<link rel="stylesheet" href="../Lgn/styles/vendor.css"> 
<link rel="stylesheet" href="../Lgn/styles/main.css"> 
<link rel="stylesheet" href="../Lgn/styles/css.css"> 
</head>  

<div class="login-page"> 
<div class="img-container"> 
<div class="text-center pull-right photo"> 
<img src="../Lgn/images/flat-avatar.png" class="user-avatar img-circle img-responsive"> 
<br>
 <div class="wrapper">
 <b>USERNAME ATAU PASSWORD SALAH</b>
 </div> 
 </div> </div> 
 <div class="form-content"> 
 <div class="pro-link"> 
 <a href="<?php echo base_url("pesanan");?>">BATAL LOGIN</a> 
 </div> 
 <form class="bottom-75" method="POST" action="<?php echo base_url("login/ceklogin");?>"> 
 <div class="table-form"> 
 <div class="form-groups"> 
 <div class="form-group"> 
 <input type="text" name="username" class="form-control input-lg" placeholder="USERNAME" required> 
 </div> 
 <div class="form-group"> 
 <input type="password" name="password" class="form-control input-lg" placeholder="PASSWORD" required> 
 </div> 
 </div> 
 <div class=button-container> 
 <button type="submit" class="btn btn-default login">
 <img src="../Lgn/images/arrow.png">
 </button> 
 </div> 
 </div>  
 <div class="remember"> 
 <label class="checkbox1" for="Option"> 
 <input id="Option" type="checkbox"> 
 <span></span> 
 </label> remember me 
 </div> 
 </form> </div> </div> 


<div> 
</div>  
<script> 
</script> 
<script src="../Lgn/scripts/vendor.js"></script> <script src="../Lgn/scripts/scripts.js"></script> 
</html> 