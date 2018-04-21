<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title> Smart Electrical Device</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/now-ui-dashboard.css?v=1.0.1" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="orange">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
            <div class="logo">
           
                <a href="#" class="simple-text logo-normal">
                        Smart Electrical Device

                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="active">
                        <a href="../admin/Gclient.php">
                            <i class="now-ui-icons design_app"></i>
                            <p>Gerer Client</p>
                        </a>
                    </li>
                   
                     <li>
                        <a href="Gproduit.php">
                            <i class="now-ui-icons users_single-02"></i>
                            <p>Gerer Produit </p>
                        </a>
                    </li>
                    <li >
                        <a href="Gabonnement.html">
                            <i class="now-ui-icons design_bullet-list-67"></i>
                            <p>Gerer Abonnement</p>
                        </a>
                    </li>
                   
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute bg-primary fixed-top">
                <div class="container-fluid">
                    
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <form>
                            <div class="input-group no-border">
                                <input type="text" value="" class="form-control" placeholder="Search...">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                                </span>
                            </div>
                        </form>
                        <ul class="navbar-nav">
                            
                           
                            <li class="nav-item">
                               <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="now-ui-sicons users_single-02"></i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Account</span>
                                    </p>
                                </a>
                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Déconnexion</a>
                                    
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="panel-header panel-header-sm">
            </div>
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"> Liste des Clients</h4>
                                 <form action="Adduser.html">
                                    <div class="col-md-3">
                                            <div class="form-group">
                            <input type="submit" value="ajouter un nouveau Client" class="form-control" style="font-size:10pt;color:black; background-color:#204065; padding:3px">
                                        </div>
                                    </div>
                        </form>
                        <?php
$conn1 = mysqli_connect('localhost', 'root', '', 'iotproduct');
$requete1="SELECT * FROM client";
$resultat = mysqli_query($conn1,$requete1);
if($result1=false){
  echo "mechlabess";}

                        echo '   </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class=" text-primary">
                                            <th>
                                                ID
                                            </th>
                                            <th>
                                                Nom et prenom
                                            </th>
                                            <th>
                                                Adresse
                                            </th>
                                            <th>
                                                Salary
                                            </th>
                                        </thead>

                                        <tbody>';
                                        while (($row = mysqli_fetch_array($resultat, MYSQL_NUM))!=null)
{
  
echo" <tr>
                                                <td>
                                                    $row[0]
                                                </td>
                                                <td>
                                                    $row[1]
                                                </td>
                                                <td>
                                                   $row[5]
                                                </td>
                                                <td><a href='traitement_suppression1.php?id=".$row[0]."' style='  background-color:#E44616;
  -moz-border-radius:20px;
  -webkit-border-radius:20px;
  border-radius:20px;
  border:1px solid #E44616;
  display:inline-block;
  cursor:pointer;
  color:#ffffff;
  font-family:Arial;
  font-size:14px;
  padding:5px 20px;
  text-decoration:none;
  text-shadow:0px 1px 0px #2f6627;'> supprimer</a></td>
                                            </tr>";}
?>
                                            
                                               
                                           
                                        </tbody>
                                    </table>
                                </div>

                            </div>

                        </div>
                       
                    </div>
                    
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <ul>
                            
                            <li>
                                <a href="http://presentation.creative-tim.com">
                                    About Us
                                </a>
                            </li>
                           
                        </ul>
                    </nav>
                   
                </div>
            </footer>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.min.js"></script>
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/core/bootstrap.min.js"></script>
<script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chart JS -->
<script src="../assets/js/plugins/chartjs.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/now-ui-dashboard.js?v=1.0.1"></script>
<!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/demo/demo.js"></script>

</html>
