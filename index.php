<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" type="img/png" href="bankicon1.png">
  <title>$BANK PORTAL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
  
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
 
     <link rel="stylesheet" href="css/styles.css">
 
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  *{
      margin:0;
      padding0;
  }
  footer{
      background-color:dark;
  }
  .nav-item :hover{
      background-color: teal;
      color: white;
  }
  </style>
</head>
<body>



<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a href="#"><img  src="bankicon1.png" style="height:50px;width:50px;"></img></a>
 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item" style="color:white; text-align:center"  >
      <br>
        <a class="nav-link" href="index.php">HOME</a>
      </li>
      <li class="nav-item"style="color:white; text-align:center"><br>
        <a class="nav-link" href="costumer.php">CUSTUMER</a>
      </li>
      <li class="nav-item"style="color:white; text-align:center"><br>
        <a class="nav-link" href="contact.php">CONTACTS</a>
      </li>    
    </ul>
  </div>  
</nav>

<h1 style="text-align:center"><b> WELCOME TO $BANK <b></h1>



<br>
<br>


<div class="row row-content">
    <div class="col col-12 col-sm-6">
        <div class="cust">
            <button class="btn2 btn-warning btn-lg btn-block" type="button" data-toggle="collapse"
            ><a id="c" href="costumer.php" style="color: black; text-decoration:none"><b>Customers</b></a><span class="caret"></span>
            </button>
        </div>
    </div>
<br>
<br>
<br>

    <div class="col col-12 col-sm-6">
        <div class="trans">
            <button class="btn2 btn-warning btn-lg btn-block" type="button" data-toggle="collapse"
            ><a id="c" href="transaction.php" style="color: black; text-decoration:none"><b>Transactions<b></a><span class=" caret"></span>
            </button>
        </div>
    </div>
</div>
</div>

<div id="transModal" class="modal fade" role="dialog">
<div class="modal-dialog modal-lg" role="content">
    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Transactions </h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
            <form>
                <div class="form-row">
                    <div class="form-group col-sm-4">
                            <label class="sr-only" for="exampleInputEmail3">Email address</label>
                            <input type="email" class="form-control form-control-sm mr-1" id="exampleInputEmail3" placeholder="Enter email">
                    </div>
                    <div class="form-group col-sm-4">
                        <label class="sr-only" for="exampleInputPassword3">Password</label>
                        <input type="password" class="form-control form-control-sm mr-1" id="exampleInputPassword3" placeholder="Password">
                    </div>
                    <div class="col-sm-auto">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label"> Remember me
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <button type="button" class="btn btn-secondary btn-sm ml-auto" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary btn-sm ml-1">Sign in</button>        
                </div>
            </form>
        </div>
    </div>
</div>
</div>


<footer class="footer fixed-bottom " style="background-color: black;">

<div class="container">
    <div class="row-justify content-center">
        <div class="col-auto align-self-center">
            <div  class="text-center"> 
                <a class="btn btn-social-icon btn-envelope" href="mailto:prasadhulyal543210@gmail.com" style="color:blueviolet;"><i class="fa fa-envelope fa-lg"></i></a>
                <a  class="btn btn-social-icon btn-github"href="https://github.com/prasadhulyal" style="color:blueviolet;"><i class="fa fa-github"></i></a>
                <a class="btn btn-social-icon btn-phone "href="tel:+917338625546" style="color:blueviolet;"><i class="fa fa-phone"></i></a>
                <a class="btn btn-social-icon btn-linkedin" href="https://www.linkedin.com/in/sce17cs0056/" style="color:blueviolet;"><i class="fa fa-linkedin fa-lg"></i></a>

                <a  class="btn btn-social-icon btn-google"href="https://www.instagram.com/p_b_hulyal/" style="color:blueviolet;"><i class="fa fa-instagram fa-lg"></i></a>
                <a class="btn btn-social-icon btn-google" href="https://www.youtube.com/channel/UC4JlIOdo10_TKuRpVtVmgEQ?view_as=subscriber" style="color:blueviolet;"><i class="fa fa-youtube fa-lg"></i></a>      
                <p  style="color:white">(c)PRASAD HULYAL</p>
            </div>
        </div>
    </div>
</div>	

</footer>


</body>


<script>
$(document).ready(function () {
$('#transaction').click(function () {
$('#transModal').modal('show')
});
});
</script>

</html>
<?php


include 'connection.php';


?>

