<head>
  <script src="js\materialize.js"></script>
  <script src="js\materialize.min.js"></script>
  <script src="js\init.js"></script>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <title>AccomoMe</title>
</head>
<body>
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
      <h1 class="header center orange-text">Find Houses for your travels</h1>
      <div class="center" style="background-color: rgba(54, 54, 54, 0.5); height: 400px;
   background-opacity: 0.5;">
        <div  style = "display:inline-block;">

          <input placeholder="City" id="city_search" type="text" class="validate">          <br>
        </div>
        <div class = "select-wrapper">
        <div>
            <label >Starting date</label>
              <div  style="display: inline-block;">
                <select name =  "MonthStart" style="display: inline-block;">
                  <option value="" >Month</option>
                  <option value="1">January</option>
                  <option value="2">February</option>
                  <option value="3">March</option>
                  <option value="4">April</option>
                  <option value="5">May</option>
                  <option value="6">June</option>
                  <option value="7">July</option>
                  <option value="8">August</option>
                  <option value="9">September</option>
                  <option value="10">October</option>
                  <option value="11">November</option>
                  <option value="12">December</option>
                </select>
              </div>
              <div style="display: inline-block;">
                <select name =  "DayStart" style="display: inline-block;">
                  <option value="" >Day</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
                  <option value="18">18</option>
                  <option value="19">19</option>
                  <option value="20">20</option>
                  <option value="21">21</option>
                  <option value="22">22</option>
                  <option value="23">23</option>
                  <option value="24">24</option>
                  <option value="25">25</option>
                  <option value="26">26</option>
                  <option value="27">27</option>
                  <option value="28">28</option>
                  <option value="29">29</option>
                  <option value="30">30</option>
                  <option value="31">31</option>
                </select>
              </div>
              <div style="display: inline-block;">
                <select name="YearStart" style="display: inline-block;" >
                  <option value="2016">2016</option>
                  <option value="2017">2017</option>
                  <option value="2018">2018</option>
                  <option value="2019">2019</option>
                </select>
              </div>
            </div>
            <br>
            <div>
              <label >Ending date</label>
                <div style="display: inline-block;">
                  <select name = "MonthEnd" style="display: inline-block;">
                    <option value="" >Month</option>
                    <option value="1">January</option>
                    <option value="2">February</option>
                    <option value="3">March</option>
                    <option value="4">April</option>
                    <option value="5">May</option>
                    <option value="6">June</option>
                    <option value="7">July</option>
                    <option value="8">August</option>
                    <option value="9">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                  </select>
                </div>
                <div style="display: inline-block;">
                  <select name = "Day" style="display: inline-block;">
                    <option value="">Day</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                  </select>
                </div>
                <div style="display: inline-block;">
                  <select name="Year" style="display: inline-block;">
                    <option value="">Year</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                  </select>
                </div>
              </div>
              <br>
              <div>
                <div style="display: inline-block;">
                  <select name="Number of Guests" style="display: inline-block;">
                    <option value="">Number of Guests</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                  </select>
                </div>
              </div>
            </div>
            <div class = "parallax">
              <img src = "http://blog.airbnb.com/wp-content/uploads/2015/01/sundance2015_parkcity_derballa_23jan2015_00655.jpg?3c10be"
              alt = "Unsplashed background img 1" style="display: block; transform: translate3d(-50%, 210px, 0px); ">
            </div>
            <br>
          <div class="row center">
            <! buraya search için php kısmı gelecek, ama OLMUYOR OLMUYOR.>
            <a href=".\search.php" id="download-button" class="btn-large waves-effect waves-light orange">Search</a>
          </div>
          </div>

      </div>
    </div>
</body>
</html>
