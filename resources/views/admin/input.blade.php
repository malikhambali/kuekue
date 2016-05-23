<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Metro, a sleek, intuitive, and powerful framework for faster and easier web development for Windows Metro Style.">
    <meta name="keywords" content="HTML, CSS, JS, JavaScript, framework, metro, front-end, frontend, web development">
    <meta name="author" content="Sergey Pimenov and Metro UI CSS contributors">

    <link rel='shortcut icon' type='image/x-icon' href='../favicon.ico' />

    <title>Admin - Service Cake</title>

    <link href="assets/css/style.css" rel="stylesheet">
    <link href="../metro/css/metro.css" rel="stylesheet">
    <link href="../metro/css/metro-icons.css" rel="stylesheet">
    <link href="../metro/css/metro-responsive.css" rel="stylesheet">
    <link href="../swal/sweetalert.css" type="text/css" rel="stylesheet" media="screen,projection">


    <script src="../metro/js/jquery-2.1.3.min.js"></script>
    <script src="https://raw.githubusercontent.com/igorescobar/jQuery-Mask-Plugin/master/src/jquery.mask.js"></script>
    <script src="../metro/js/jquery.dataTables.min.js"></script>

    <script src="../metro/js/metro.js"></script>
        <script type="text/javascript" src="../swal/sweetalert.min.js"></script>

    <style>
        html, body {
            height: 100%;
        }
        body {
        }
        .page-content {
            padding-top: 3.125rem;
            min-height: 100%;
            height: 100%;
        }
        .table .input-control.checkbox {
            line-height: 1;
            min-height: 0;
            height: auto;
        }

        @media screen and (max-width: 800px){
            #cell-sidebar {
                flex-basis: 52px;
            }
            #cell-content {
                flex-basis: calc(100% - 52px);
            }
        }
    </style>

    <script>
        function pushMessage(t){
            var mes = 'Info|Implement independently';
            $.Notify({
                caption: mes.split("|")[0],
                content: mes.split("|")[1],
                type: t
            });
        }

        $(function(){
            $('#telepon').mask('9999999999999');
            $('.sidebar').on('click', 'li', function(){
                if (!$(this).hasClass('active')) {
                    $('.sidebar li').removeClass('active');
                    $(this).addClass('active');
                }
            })
        })
    </script>
</head>
<body class="bg-steel">
    <div class="app-bar fixed-top darcula" data-role="appbar" style="background-color:#03A9F4;">
        <a class="app-bar-element branding"><img src="../metro/images/bj.png" alt="Service Cake"></a>
        <span class="app-bar-divider"></span>
    </div>

    <div class="page-content">
        <div class="flex-grid no-responsive-future" style="height: 100%;">
            <div class="row" style="height: 100%">
                
                <div class="cell auto-size padding20 bg-white" id="cell-content">
                    <h1 class="text-light"><a href="{{ ('mulai') }}" class="nav-button transform"><span></span></a> TAMBAH DATA ADMIN</h1>
                    <hr class="thin bg-grayLighter">
                    <br><br>
        <div class="example">
            <br/>
                    <form method="POST" action="{{ ('input') }}" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="cell">
                        <label>Nama Lengkap</label>
                        <div class="input-control text success full-size">
                            <input type="text" name="nama_lengkap" required>
                        </div>
                    </div>
                    <br>
                    <div class="cell">
                        <label>No Telepon</label>
                        <div class="input-control text success full-size">
                            <input type="text" id="telepon" name="no_telepon" maxlength="13" required>
                        </div>
                    </div>
                    <br>
                    <div class="cell">
                        <label>Username</label>
                        <div class="input-control text success full-size">
                            <input type="text" name="username" required>
                        </div>
                    </div>
                    <br>
                    <div class="cell">
                        <label>Password</label>
                        <div class="input-control password success full-size" data-role="input">
                           <input type="password" name="password" required>
                           <button class="button helper-button reveal"><span class="mif-looks"></span></button>
                        </div>
                    </div>
                   
                    <br>
                    <button type="submit" class="button primary"><span class="mif-plus"></span> Simpan</button>
                    </form>
                    </br>
                    </br>
                    </br>
            <br/>
            <br/>
        </div>


    <!--materialize js-->    <!--prism-->
    <!--scrollbar-->
    <!-- chartist -->
    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->


                </div>
            </div>
        </div>
    </div>
</body>

      @if(null !== session('message'))
  <script type="text/javascript">
    swal("Anda Berhasil Menambah Admin", "", "success")
  </script>
  @endif  

</html>