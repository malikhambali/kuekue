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
  <title>Service Cake</title>

  <!-- Favicons-->
  <link rel="icon" href="../material/images/favicon/" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="../material/images/favicon/apple-touch-icon-152x152.png">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="material/images/favicon/mstile-144x144.png">
  <!-- For Windows Phone -->


  <!-- CORE CSS-->
  
  <link href="../material/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="../material/css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->    
    <link href="../material/css/custom-style.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- CSS style Horizontal Nav (Layout 03)-->    
    <link href="../material/css/style-horizontal.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="../http://cdn.datatables.net/1.10.6/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  


  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="../material/css/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="../material/js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="../material/js/plugins/data-tables/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="../material/js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">
 <script>
  $(document).ready(function() {
    $('select').material_select();
  });
  </script>

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
                      <li><h1 class="logo-wrapper"><a class="brand-logo darken-1"><img src="../material/images/bk.png" alt="Service Cake"></a> <span class="logo-text">Materialize</span></h1></li>
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
                        <a href="{{ ('/') }}" class="cyan-text">
                            <i class="mdi-action-dashboard"></i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="{{ ('data') }}" class="cyan-text">
                            <i class="mdi-communication-email"></i>
                            <span>Data Pemesanan</span>
                        </a>
                    </li>                    
                    <li>
                        <a href="{{ ( 'pesan' ) }}" class="cyan-text">
                            <i class="mdi-action-shopping-cart"></i>
                            <span>Pesan Kue</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ ( 'daftarkue' ) }}" class="cyan-text">
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
                <h5 class="breadcrumbs-title">DATA PESANAN</h5>
                <ol class="breadcrumb">
                  <li><font color="#1a85bc">Service Cake</font>
                  </li>
                  <li class="active">Data Pesanan</li>
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
            <div id="table-datatables">
              <div class="row">

                <div class="col s12">
                  <table id="data-table-simple" class="centered display" cellspacing="0">
                    <thead style="background-color:#0288D1; color:white;">
                        <tr>
                    <th>No</th>
                    <th>Nama Pemesan</th>
                    <th>No Telp</th>
                    <th>Kue</th>
                    <th>jumlah</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                    <?php 
      $i=1;
      foreach($pesan as $key){
      ?>
                        <tr>
                  <td><?php echo $i;?></td>
                  <td><?php echo $key['pmsn'];?></td>
                  <td><?php echo $key['no_tlp'];?></td>
                  <td><?php echo $key['ciri_kue'];?></td>
                  <td><?php echo $key['jmlh'];?></td>
                  <td><?php echo strtoupper($key['status']);?></td>
                  <td><a href="{{ ('data/detail/'.$key['id']) }}">
                  <img src="material/images/edit.png"> <font color="#1abc9c">Detail</font></a></td>
                        </tr>
                        <?php
                $i++;
                 }
        ?>
                    </tbody>
              
                   </table>
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
        <span>CopyRight © 2016 Projetct</span>
        <span class="right"></span>
        </div>
    </div>
  </footer>
    <!-- END FOOTER -->



    <!-- ================================================
    Scripts
    ================================================ -->
    
    <!-- jQuery Library -->
    <script type="text/javascript" src="../material/js/jquery-1.11.2.min.js"></script>    
    <!--materialize js-->
    <script type="text/javascript" src="../material/js/materialize.js"></script>
    <!--prism-->
    <script type="text/javascript" src="../material/js/prism.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="../material/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!-- data-tables -->
    <script type="text/javascript" src="../material/js/plugins/data-tables/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../material/js/plugins/data-tables/data-tables-script.js"></script>
    <!-- chartist -->
    <script type="text/javascript" src="../material/js/plugins/chartist-js/chartist.min.js"></script>   
    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="../material/js/plugins.js"></script>    

</html>