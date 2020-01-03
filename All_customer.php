<?php
session_start();
$servername = "localhost";
$server_user = "root";
$server_pass = "";
$dbname = "ftucafe";
$con = new mysqli($servername, $server_user, $server_pass, $dbname);
?>







<!doctype html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">  
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>All Customer</title>

  
    <link href="bootstrap3/css/bootstrap.css" rel="stylesheet" />
  <link href="assets/css/gsdk.css" rel="stylesheet" />  
    <link href="assets/css/demo.css" rel="stylesheet" /> 
    
    <!--     Font Awesome     -->
    <link href="bootstrap3/css/font-awesome.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>




  
   

</head>
<body>
<div id="navbar-full">
    <div class="container">
        <nav class="navbar navbar-ct-blue navbar-transparent navbar-fixed-top" role="navigation">
          
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                
                <a href="https://is.gd/nXt8pN">
                     <div class="logo-container">
                        <div class="logo">
                            <img src="assets/img/new_logo.jpg">
                        </div>
                        <div class="brand">
                            Fatoni Cafe'
                        </div>
                    </div>
                </a>
            </div>
        
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                    <li><a href="show_order.php">Show Order</a></li>
                    <li><a href="All_customer.php">All Customer</a></li>
                    <li><a href="editmenu.php">Edit Menu</a></li>
                    
                    
                    <li><a href="http://localhost/food/home.php" class="btn btn-round btn-default">Log out</a></li>
               </ul>
              
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
    </div><!--  end container-->
    
    <div class='blurred-container'>
        <div class="motto">
            <div>ALL CUSTOMER</div>
        </div>
        <div class="img-src" style="background-image: url('assets/img/cover.jpg')"></div>
    </div>
    
</div> 














<div class="main">
    <div class="container tim-container">
       <div class="space-100"></div>
       

       
          
     
            <div class="row">
              <div class="tim-title text-center">
                    
                </div>
              


                  <thead>
                      <tr>
                        <th><div class="col-md-2 col-sm-6" >
                    <h4>ID</h4>
                    
                </div></th>
                        <th><div class="col-md-2 col-sm-6" >
                    <h4>Userame</h4>
                    
                </div></th>
                        <th><div class="col-md-2 col-sm-6" >
                    <h4>Name</h4>
                    
                </div></th>
                <th><div class="col-md-3 col-sm-6" >
                    <h4>E-mail</h4>
                    
                </div></th>
                <th><div class="col-md-2 col-sm-6" >
                    <h4>Gender</h4>
                    
                </div></th>
                        
                      </tr>
                    </thead>


          </div>


                    
        <?php
        $result = mysqli_query($con, "SELECT * FROM customer");
        while($row = mysqli_fetch_array($result))
        {
          echo '<tr><th><div class="col-md-2 col-sm-6" >'.$row["ID_C"].'</div></th>';
          echo '<tr><th><div class="col-md-2 col-sm-6" >'.$row["username_c"].'</div></th>';
          echo '<tr><th><div class="col-md-2 col-sm-6" >'.$row["name_c"].'</div></th>';
          echo '<tr><th><div class="col-md-3 col-sm-6" >'.$row["email_c"].'</div></th>';   
          echo '<tr><th><div class="col-md-2 col-sm-6" >'.$row["gender_c"].'</div></th>';                
    
        }
        ?>
                    </tbody>

              </div>
        
        
            </div>
      </form>
      

            <div class="divider"></div>
            
          </div>
        </div>
        </div>
        <!--end container-->

      </section>
      <!-- END CONTENT -->


 <div class="space-100"></div>




 
         
    </div>
</div>
 


        


</html>