<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="../resources/Bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <style type="text/css">
            body {
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #eee;
}

.form-signin {
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}
.form-signin .form-signin-heading,
.form-signin .checkbox {
  margin-bottom: 10px;
}
.form-signin .checkbox {
  font-weight: normal;
}
.form-signin .form-control {
  position: relative;
  height: auto;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}        
</style>
        <script type="text/javascript" src="../resources/JQuery/jquery.min.js"></script>
        <script type="text/javascript" src="../resources/Bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>
      <div class="container">
      <form class="form-signin" role="form" method="post" action="checklogin.php">
        <h2 class="form-signin-heading">Log in op CMS</h2>
        <input type="email" class="form-control" placeholder="Email adres" required="" autofocus="" name="email">
        <input type="password" class="form-control" placeholder="Wachtwoord" required="" name="password">
        <button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button>
      </form>
    </div>

    </body>
</html>