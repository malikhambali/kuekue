<!DOCTYPE html>
<html lang="en">

<!--================================================================================
  Item Name: Materialize - Material Design Admin Template
  Version: 2.3
  Author: GeeksLabs
  Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
  <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
  <title>Service - Cake</title>

  <!-- Favicons-->
  <link rel="icon" href="../../material/images/favicon/favicon-32x32.png" sizes="32x32">
  <link href="../../material/css/gambar.css" rel="stylesheet">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="../../material/images/favicon/apple-touch-icon-152x152.png">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="../../material/images/favicon/mstile-144x144.png">
  <!-- For Windows Phone -->


  <!-- CORE CSS-->
  
  <link href="../../material/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="../../material/css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->    
    <link href="../../material/css/custom-style.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- CSS style Horizontal Nav (Layout 03)-->    
    <link href="../../material/css/style-horizontal.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="http://cdn.datatables.net/1.10.6/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  


  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="../../material/css/css.css" type="text/css" rel="stylesheet">
  <link href="../../material/css/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="../../material/js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="../../material/js/plugins/data-tables/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="../../material/js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">
</head>

<body>
  <!-- Start Page Loading -->
  <!-- <div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
   --><!-- End Page Loading -->

  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START HEADER -->
  <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
           <nav class="cyan">
                <div class="nav-wrapper" style="background-color:#03A9F4;">                    
                    
                    <ul class="left">                      
                      <li><h1 class="logo-wrapper"><a class="brand-logo darken-1"><img src="../../material/images/" alt="Service Cake"></a> <span class="logo-text"></span></h1></li>
                    </ul>
                    <ul class="right hide-on-med-and-down">                        
                        <li><a href="/masuk" class="waves-effect waves-block waves-light"><i class="mdi-action-perm-identity"></i>
                        </li>                        
                    </ul>
                </div>
            </nav>
            <!-- HORIZONTL NAV START-->
            <nav id="horizontal-nav" class="white hide-on-med-and-down">
                <div class="nav-wrapper">                  
                  <ul id="nav-mobile" class="left hide-on-med-and-down">
                    <li>
                        <a href="<?php echo url("/");?>" class="cyan-text">
                            <i class="mdi-action-dashboard"></i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo url("data");?>" class="cyan-text">
                            <i class="mdi-communication-email"></i>
                            <span>Data Pemesanan</span>
                        </a>
                    </li>                    
                    <li>
                        <a href="<?php echo url("pesan");?>" class="cyan-text">
                            <i class="mdi-action-shopping-cart"></i>
                            <span>Pesan Kue</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="<?php echo url("daftarkue");?>" class="cyan-text">
                            <i class="mdi-action-book"></i>
                            <span>Daftar Kue</span>
                        </a>
                    </li>
              
                </div>
              </nav>
                <!-- CSSdropdown -->
                

                <!-- UIElementsdropdown-->
                

                <!-- Tablesdropdown -->
                

                <!-- Formsdropdown -->
               

                <!-- Pagesdropdown -->
               

                <!-- eCommers -->
                

                <!-- Mediasdropdown -->
               

                <!-- Usersdropdown -->
                

                <!-- Chartsdropdown -->
               
            <!-- HORIZONTL NAV END-->
        </div>
        <!-- end header nav-->
  </header>
  <!-- END HEADER -->

  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START MAIN -->
  <div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">

      <!-- START LEFT SIDEBAR NAV-->
      
      <!-- END LEFT SIDEBAR NAV-->

      <!-- //////////////////////////////////////////////////////////////////////////// -->

      <!-- START CONTENT -->
      <section id="content">
        
        <!--breadcrumbs start-->
        <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title">Daftar Kue</h5>
                <ol class="breadcrumb">
                  <li><font color="#1a85bc">Service Cake</font>
                  </li>
                  <li class="active">Berikut Penjelasan</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->
        

        <!--start container-->
        <div class="container">
          <div class="section">

            
            
                   
            <!--DataTables example-->
              <div class="divider"></div>
             <div class="card-panel">
            <div id="card-reveal" class="section">
            <div class="row">
              <div class="col s12 m4 l3">
                <p><font color="white"></font></p>
              </div>
              <div class="col s12 m8 l9">
                <div class="row">
                  <div class="col s12 m8 l9">
                    <div class="card">
                      <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator gambar" src="/metro/images/{{ $data->img }}" alt="Gambar tidak tersedia" height>
                      </div>
                      <div class="card-content" style="background-color:#0288D1;">
                        <span class="card-title activator grey-text text-darken-4"><font color="white">Kue - <?php echo $data['nama_kue'];?></font><i class="mdi-navigation-more-vert right"></i></span>
                        
                      </div>
                      <div class="card-reveal" style="background-color:#0288D1;">
                        <span class="card-title grey-text text-darken-4"><font color="white"><?php echo $data['nama_kue'];?></font>
                        <i class="mdi-navigation-close right"></i>
                        </span>
                       </table>
                       <br>
                        <table class="padding">
                        <tr>
                          <th>Harga</th>
                          <td><?php echo $data['harga'];?></td>
                        </tr>
                        <tr>
                          <th>Keterangan</th>
                          <td><?php echo $data['ket'];?></td>
                        </tr>
                    
                       </table>
                       </br> 
              
             
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


               
              </div>
            </div> 
            </div>
            <br>
            <!--DataTables example Row grouping-->
           

           
          </div>
          <!-- Floating Action Button -->
            <!-- Floating Action Button -->
        </div>
        <!--end container-->

      </section>
      <!-- END CONTENT -->

      <!-- //////////////////////////////////////////////////////////////////////////// -->
      <!-- START RIGHT SIDEBAR NAV-->
      <!-- LEFT RIGHT SIDEBAR NAV-->

    </div>
    <!-- END WRAPPER -->

  </div>
  <!-- END MAIN -->



  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START FOOTER -->
  <footer class="page-footer">
    <div class="footer-copyright" style="background-color:#03A9F4;">
      <div class="container">
        <span>CopyRight © 2016 Project</span>
        <span class="right"></span>
        </div>
    </div>
  </footer>
    <!-- END FOOTER -->



    <!-- ================================================
    Scripts
    ================================================ -->
    
    <!-- jQuery Library -->
    <script type="text/javascript" src="../../material/js/jquery-1.11.2.min.js"></script>    
    <!--materialize js-->
    <script type="text/javascript" src="../../material/js/materialize.js"></script>
    <!--prism-->
    <script type="text/javascript" src="../../material/js/prism.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="../../material/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!-- data-tables -->
    <script type="text/javascript" src="../../material/js/plugins/data-tables/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../../material/js/plugins/data-tables/data-tables-script.js"></script>
    <!-- chartist -->
    <script type="text/javascript" src="../../material/js/plugins/chartist-js/chartist.min.js"></script>   
    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="../../material/js/plugins.js"></script>    

</html>