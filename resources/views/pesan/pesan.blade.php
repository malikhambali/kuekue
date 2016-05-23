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
  <link rel="icon" href="../material/images/favicon/favicon-32x32.png" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="../material/images/favicon/apple-touch-icon-152x152.png">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="../material/images/favicon/mstile-144x144.png">
  <!-- For Windows Phone -->


  <!-- CORE CSS-->
  
  <link href="../material/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="../material/css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->    
    <link href="../material/css/custom-style.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- CSS style Horizontal Nav (Layout 03)-->    
    <link href="../material/css/style-horizontal.css" type="text/css" rel="stylesheet" media="screen,projection">


  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="../material/css/css.css" type="text/css" rel="stylesheet">
  <link href="../material/css/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="../material/js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="../material/js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="../swal/sweetalert.css" type="text/css" rel="stylesheet" media="screen,projection">

  <script src="https://raw.githubusercontent.com/igorescobar/jQuery-Mask-Plugin/master/src/jquery.mask.js"></script>   
    

  <script>
  $(document).ready(function() {
    $('select').material_select();
  });
  </script>

</head>

<body>
  <!-- Start Page Loading -->
  <!-- End Page Loading -->

  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START HEADER -->
  <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="cyan">
                <div class="nav-wrapper" style="background-color:#03A9F4;">                    
                    
                    <ul class="left">                      
                      <li><h1 class="logo-wrapper"><a class="brand-logo darken-1"><img src="../material/images/bk.png" alt="Service Cake"></a>
                       <span class="logo-text">Materialize</span></h1></li>
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
                        <a href="{{ url('/') }}" class="cyan-text">
                            <i class="mdi-action-dashboard"></i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('data') }}" class="cyan-text">
                            <i class="mdi-communication-email"></i>
                            <span>Data Pemesanan</span>
                        </a>
                    </li>                    
                    <li class="active">
                        <a href="{{ ('pesan') }}" class="cyan-text">
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
                

                <!-- Pagesdropdown -->
               

                <!-- eCommers -->
                

                <!-- Mediasdropdown -->
                

                <!-- Usersdropdown -->
               

                 
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
            <!-- Search for small screen -->
           
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title">PEMESANAN KUE</h5>
                <ol class="breadcrumb">
                  <li><font color="#1a85bc">Pesan Kue</font>
                  </li>
                  <li class="active">Pesan Disini</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->


        <!--start container-->
        <div class="container">
          <div class="section">

            <div class="divider"></div>
            <!--Basic Form-->
            <!--Basic Form-swal
sweetalert.csswith placeholder -->
                
            <!-- Form with icon prefixes -->
              <!-- Form with validation -->
          <!-- Inline Form -->
          <!-- Inline form with placeholder -->

          <!--Form Advance-->          
          <div class="row">
            <div class="col s12 m12 l12">
              <div class="card-panel">
                <h4 class="header2">Masukan Data Pemesanan</h4>
                <div class="row">
                  <form class="col s12" method="POST" action="{{ ('masukkan') }}" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                    <div class="row">
                      <div class="input-field col s12">
                        <input id="email5" type="text" name="pmsn" required>
                        <label for="email">Nama Pemesan</label>
                      </div>
                    </div>
                     <div class="row">
                      <div class="input-field col s12">
                        <textarea id="message5" class="materialize-textarea" name="alamat" required></textarea>
                        <label for="message">Alamat</label>
                      </div>
                      </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <input id="telepon" type="text" maxlength="13" name="no_tlp" required>
                        <label for="email">No Telepon</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <input id="email5" type="text" name="jmlh" required>
                        <label for="email">Jumlah Pesanan</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s6">
                        <select name="ciri_kue">
                            <?php 
                          foreach($kue as $key){
                          ?>
                          <option value="<?php echo $key['kue_nama'];?>"><?php echo $key['kue_nama'];?></option>
                          <?php
                          }
                          ?>  
                        </select>
                        <label>Kue</label>
                      </div>
                      <div class="file-field input-field col s6">
                        <input class="file-path validate" type="text" name="img" value="Desain Kue Anda" disabled="kue" required>
                        <div class="btn btn-menu biru">
                          <span>&nbsp;&nbsp; DESAIN &nbsp;&nbsp;</span>
                          <input type="file" name="img"/>
                        </div>
                      </div>
                      <label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                      &nbsp; &nbsp; &nbsp; &nbsp;
                      <font size="3">Hanya 1 gambar yang dapat di upload</font></label>
                    </div>
                       <div class="row">
                    <div class="input-field col s12">
                        <input id="email5" type="text" name="ket" required>
                        <label for="email">Keterangan</label>
                      </div>
                 
                      <div class="row">
                        <div class="input-field col s12">
                          <button class="btn cyan waves-effect waves-light right" name="pesan#" type="submit">Submit
                            <i class="mdi-content-send right"></i>
                          </button>
                        </div>
                      </div>
                  </form>
                    </div>
                  
                </div>
              </div>
            </div>
          </div>
      </div>
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
    <script type="text/javascript" src="../material/js/jquery-1.11.2.min.js"></script> 

    <!--materialize js-->
    <script type="text/javascript" src="../material/js/materialize.js"></script>
    <!--prism-->
    <script type="text/javascript" src="../material/js/prism.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="../material/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!-- chartist -->
    <script type="text/javascript" src="../material/js/plugins/chartist-js/chartist.min.js"></script>   
    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="../material/js/plugins.js"></script>
    <script type="text/javascript" src="../swal/sweetalert.min.js"></script>

      @if(null !== session('message'))
  <script type="text/javascript">
    swal("Terimakasih Sudah Memesan", "You clicked the button!", "success")
  </script>
  @endif  

</html>