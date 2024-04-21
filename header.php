


<?php
// $title="";

$d_none = "";

if($title == "Covid Information"){
  $d_none = "d-none";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="plugins/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
   <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 bg-primary rad-d h-25">
           <div class="row">
            <div class="col-md-4">
              <h4 class="<?=  $d_none ?>"><a class="text-white" href="index.php"><form  class="mt-2" method="POST"><button class="btn btn-danger text-white" name="home"><a class="text-white" href="index.php">Home</a></button></form></a></h4>
            </div>
            <div class="col-md-6">
              <h1 class="text-white">
                <?php echo $title  ?><br>
              </h1>
            </div>
           </div>
                </div>
                <div class="col-md-4">
                  <a class="navbar-brand " href="javascript:void(0)">        <div class="card shadow boder">
               
                    <div class="card-body">
                       
                    
                       <img src="asset/images/logo-white.png" height="40" class="card-img-top bg-warning w-100 " alt="">
                     
    
         
                    </div>
                 </div></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                </div>
              </nav>
        </div>
    </div>
   </div>