<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <script src="js\materialize.js"></script>
    <script src="js\materialize.min.js"></script>
    <script src="js\init.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <title>AccomoMe - Login </title>
  </head>
  <body>
    <! Top - nav-bar>
    <nav class="light-blue lighten-1" role="navigation">
      <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">AccomoMe</a>
        <ul class="right hide-on-med-and-down">
          <li><a href=".\login.php">Login</a></li>
          <li><a href=".\register.php">Register</a></li>
        </ul>
      </div>
    </nav>
    <div class="section no-pad-bot" id="index-banner">
      <div class="container">
        <br><br>
        <!h1 class="header center white-text"Login</h1>
        <div class= "center" style="background-color: rgba(54, 54, 54, 0.5); height: 400px;
     background-opacity: 0.5;">
      <div>
        <br>
          <h3 class="header center white-text">Login</h3>
          <div class="input-field" style = "display:inline-block;">
            <label for="email"> Email</label>
            <br>
            <input id="email" type="email" class="validate">
          </div>
          <br>

          <div class="input-field" style = "display:inline-block;">
            <label for="password">Password</label>
            <br>
            <input id="password" type="password" class="validate">
          </div>
          </div>
          <div class="row center">
            <! buraya login için php kısmı gelecek, ama OLMUYOR OLMUYOR.>
            <a href=".\user.php?someUid=$something" id="download-button" class="btn-large waves-effect waves-light blue">Login</a>
          </div>
        </div>
        <div class = "parallax">
          <img src = "http://a.theinspiration.com/wp-content/uploads/Z-1.jpg"
          alt = "Unsplashed background img 1" style="display: block; transform: translate3d(-50%, 210px, 0px); ">
        </div>

        </div>
      </div>
  </body>
</html>
