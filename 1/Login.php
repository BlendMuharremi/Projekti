<?php include("header.php"); ?>
<link rel="stylesheet" href="Loginstyle.css">


<?php
if(isset($_POST['login'])){
    //echo $_POST['email'];
    login($_POST['username'],$_POST['fjalekalimi']);
}

?>







<div class="container">
    <div class="cover">
      <div class="front">
        <img src="images/hamburger1.jpg" alt="">
        <div class="text">
          <span class="text-1">A genuine fine-dining <br> experience awaits</span>
          <span class="text-2">Come for a drink, stay for a meal.</span>
        </div>
      </div>
    </div>

<div class="hero">
    <div class="login">
      <form method="post" id="loginForm">
    <div class="login-form">
        <p>Login</p>
        <div class="login-all-item">
            <div class="login-item">
                <label>Username</label>
                <input type="text" name="username" id="username">
            </div>
            <div class="login-item">
                <label>Password</label>
               <input type="password" name="fjalekalimi" id="fjalekalimi">
            </div>
        </div>
        <div class="account"><p><span>Don't have an account? </span><a href="signup.php">Sign Up</a></p></div>
        <div class="btn-login">
            <input type="submit" name="login" value="Login">
        </div>
    </div>
    
    </form>
</div>
    
    </div>

  
</body>
</html> 



