<html>
  <head>
    <title>Form Login Application Ebook</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/template/login_style.css'); ?>">
  </head>
<body id="LoginForm">
    <div class="container">
        <h1 class="form-heading text-center text-uppercase">Login</h1>
        <div class="login-form">
            <div class="main-div">
                <div class="panel">
                    <h2>Application Ebook</h2>
                    <p>Please enter your username and password</p>
                </div>
                <form id="Login" action="<?php echo base_url('home'); ?>" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" id="inputEmail" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                    </div>
                    <div class="forgot">
                        <a href="reset.html">Forgot password?</a>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
