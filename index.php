<?php 
if(isset($_POST["vehicle"])) {
  echo "yeah its a car";
  exit();
}
$newadd = "new car";
$popular = "popular";
$tabcontent = '<ul class="nav nav-tabs nav-justified">
<li><a href="#newadd" data-toggle="tab">New Additions</a></li>
<li><a href="#popular" data-toggle="tab">Most Popular</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="newadd">'.$newadd.'</div>
<div class="tab-pane" id="popular">'.$popular.'</div>
</div>';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Rent-N-Drive!</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap -->
  <link href="css/bootstrap-red.min.css" rel="stylesheet" media="screen">
  <link href="css/style.css" rel="stylesheet" media="screen">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
      <![endif]-->
    </head>

    <body>
      <div id="header">
        <div id="header-carousel" class="carousel slide">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#header-carousel" data-slide-to="1"></li>
            <li data-target="#header-carousel" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="img/bluecar.jpg" alt="...">
              <div class="carousel-caption"></div>
            </div>
            <div class="item">
              <img src="img/redcar.jpg" alt="...">
              <div class="carousel-caption"></div>
            </div>
            <div class="item">
              <img src="img/greencar.jpg" alt="...">
              <div class="carousel-caption"></div>
            </div>
          </div>
        </div>

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Rent-N-Drive!</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">About Us</a></li>
              <li><a href="#">FAQ</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Vehicles<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Cars</a></li>
                  <li><a href="#">Minibus</a></li>
                  <li><a href="#">Motorcyles</a></li>
                  <li><a href="#">Bus</a></li>
                  <!-- <li><a href="#">One more separated link</a></li> -->
                </ul>
              </li>
            </ul>
            <form class="navbar-form navbar-left" role="search">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
              <!-- <li><a href="#">Link</a></li> -->
              <!-- Button trigger modal -->
              <button class="btn btn-default navbar-btn" data-toggle="modal" data-target="#myModal">Signup | Login</button>
            </ul>
          </div><!-- /.navbar-collapse -->
        </nav>
      </div>

      <div id="leftsidebar">
        <div class="tabbable">
          <ul class="nav nav-pills nav-stacked span2">
            <li class="active vehicle"><a href="#car" data-toggle="tab">Car</a></li>
            <li class="vehicle"><a href="#motorcycles" data-toggle="tab">Motorcycles</a></li>
            <li class="vehicle"><a href="#bus" data-toggle="tab">Bus</a></li>
            <li class="vehicle"><a href="#minibus" data-toggle="tab">Minibus</a></li>
          </ul>
          <div class="tab-content">
            <div id="car" class="tab-pane active">
<!--       <?php echo $tabcontent ?>
-->      </div>
<div id="motorcycles" class="tab-pane">
  <h4>Pane 2 Content</h4>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse euismod congue bibendum. Aliquam erat volutpat. Phasellus eget justo lacus. Vivamus pharetra ullamcorper massa, nec ultricies metus gravida egestas.</p>
</div>
<div id="bus" class="tab-pane">
  <h4>Pane 3 Content</h4>
  <p>Ut porta rhoncus ligula, sed fringilla felis feugiat eget. In non purus quis elit iaculis tincidunt. Donec at ultrices est.</p>
</div>
<div id="minibus" class="tab-pane">
  <h4>Pane 4 Content</h4>
  <p>Donec semper vestibulum dapibus. Integer et sollicitudin metus. Vivamus at nisi turpis. Phasellus vel tellus id felis cursus hendrerit. Suspendisse et arcu felis, ac gravida turpis. Suspendisse potenti.</p>
</div>
</div><!-- /.tab-content -->
</div>
</div>


<div id="rightcontent">
  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel">Login or Join Us Now!</h4>
        </div>
        <div class="modal-body">
          <div class="panel panel-default">
            <div class="panel-body">
              Already a member? <a href="#" class="active" id="login">Log in now!</a>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-sm-12 well well-sm">
                <legend><a href="http://www.jquery2dotnet.com"><i class="glyphicon glyphicon-globe"></i></a> Sign up!</legend>
                <form action="#" method="post" class="form" role="form">
                  <div class="row">
                    <div class="col-xs-6 col-md-6">
                      <input class="form-control" name="firstname" placeholder="First Name" type="text"
                      required autofocus />
                    </div>
                    <div class="col-xs-6 col-md-6">
                      <input class="form-control" name="lastname" placeholder="Last Name" type="text" required />
                    </div>
                  </div>
                  <input class="form-control" name="youremail" placeholder="Your Email" type="email" />
                  <input class="form-control" name="reenteremail" placeholder="Re-enter Email" type="email" />
                  <input class="form-control" name="password" placeholder="New Password" type="password" />
                  <label for="">Birth Date</label>
                  <div class="row">
                    <div class="col-xs-4 col-md-4">
                      <select class="form-control">
                        <option value="Month">Month</option>
                      </select>
                    </div>
                    <div class="col-xs-4 col-md-4">
                      <select class="form-control">
                        <option value="Day">Day</option>
                      </select>
                    </div>
                    <div class="col-xs-4 col-md-4">
                      <select class="form-control">
                        <option value="Year">Year</option>
                      </select>
                    </div>
                  </div>
                  <label class="radio-inline">
                    <input type="radio" name="sex" id="inlineCheckbox1" value="male" />Male</label>
                    <label class="radio-inline">
                      <input type="radio" name="sex" id="inlineCheckbox2" value="female" />Female</label>
                      <br />
                      <br />
                      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
<!--         <button type="button" class="btn btn-primary">Save changes</button>
-->      </div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="//code.jquery.com/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script> <script>
$('.carousel').carousel({  
      interval: 3000 // in milliseconds  
    });
$('#leftsidebar a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
});
$(document).ready(function() {
  var divClone = '';
  $(".vehicle").click(function(event) {
    alert(event.target.href);
    var content = $.post( "index.php", { vehicle: "Car"})
    .done(function( data ) {
      alert( "Data Loaded: " + data );
    });
  });

  $("#login").click(function(event) {
    console.log("login clicked");
    var html = '<div class="container">';
    html += '<div class="row">';
    html += '<div class="col-sm-12">';
    html += '<h1 class="text-center login-title">Sign in to continue to Rent-N-Drive</h1>';
    html += '<div class="account-wall">';
    html += '<img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120" alt="">';
    html += '<form class="form-signin">';
    html += '<input type="text" class="form-control" placeholder="Email" required autofocus>';
    html += '<input type="password" class="form-control" placeholder="Password" required>';
    html += '<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>';
    html += '<label class="checkbox pull-left">';
    html += '<input type="checkbox" value="remember-me">Remember me</label>';
    html += '<a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span>';
    html += '</form>';
    html += '</div>';
    html += '<a href="#" class="text-center new-account">Create an account</a>';
    html += '</div>';
    html += '</div>';
    html += '</div>';
    divClone = $(".container").clone();
    $(".container").html(html);
    $(".panel-body").html('Not a member? <a href="#" class="active" id="signup">Sign up now!</a>');
  });

$("#signup").click(function(event) {
  console.log("signup clicked");
  $(".container").html(divClone);
  $(".panel-body").html('Already a member? <a href="#" class="active" id="login">Log in now!</a>');
});
});
</script>

</body>
</html>