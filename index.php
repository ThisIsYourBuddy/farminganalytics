<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
       <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript">
        $(document).ready(function(){
          $("#singin").click(function(){
           var username = $("#email").val();
            var password = $("#password").val();
            //alert(password);
            if(username == "")
            {
               Materialize.toast('Username is empty!', 4000);
               return false;
            }
            if(password == "")
            {
               Materialize.toast('Password is empty!', 4000);
               return false;
            }
            if((username == "user") && (password == "password"))
            {
              localStorage.setItem("hidden", username);
              location.replace("dashboard.html");
            }

          });
        });
      </script>
    </head>

    <body>
<nav>
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo">Logo</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      
      
    </div>
  </nav>
<div class="row" style="position: relative;left: 0%;">
        <div class="col s12 m12 l12">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title" align="center">Login</span>
              <div class="row">
                <div class="input-field col s12">
                  <input id="email" type="text">
                  <label for="email">Email</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input id="password" type="password" class="validate">
                  <label for="password">Password</label>
                </div>
              </div>
              
            </div>
            <div class="card-action">
              <button class="waves-effect waves-light btn" id="singin">Sign in</button>
            </div>
          </div>
        </div>
      </div>

      <!--Import jQuery before materialize.js-->
     
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>
