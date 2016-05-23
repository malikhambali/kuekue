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

    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../metro/css/metro.css" rel="stylesheet">
    <link href="../metro/css/metro-icons.css" rel="stylesheet">
    <link href="../metro/css/metro-responsive.css" rel="stylesheet">

    <script src="../metro/js/jquery-2.1.3.min.js"></script>
    <script src="../metro/js/jquery.dataTables.min.js"></script>

    <script src="../metro/js/metro.js"></script>

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
        <a class="app-bar-element branding"><img src="../metro/images/" alt="Service Cake"></a>
        <span class="app-bar-divider"></span>
        

       </div>

    <div class="page-content">
        <div class="flex-grid no-responsive-future" style="height: 100%;">
            <div class="row" style="height: 100%">
                
                <div class="cell auto-size padding20 bg-white" id="cell-content">
                    <h1 class="text-light"><a href="{{ ('mulai') }}" class="nav-button transform"><span></span></a> INPUT KUE</h1>
                    <hr class="thin bg-grayLighter">
                    <form method="POST" action="{{ ('ikue') }}" enctype=multipart/form-data>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}"
                      <div class="cell">
                        <label>Nama Kue</label>
                        <div class="input-control text success full-size">
                            <input type="text" name="nama_kue" maxlength="100" required>
                        </div>
                         <div style="margin-top:50px;"class="input-control text success full-size">    
                        <label>Harga Kue</label>                  
                            <input type="text" name="harga" maxlength="20" alt="Rp." required>
                        </div>
                        <div style="margin-top:50px;"class="input-control text success full-size">    
                        <label>Keterangan</label>                  
                            <input type="text" name="ket" maxlength="1000" required>
                        </div>
                    

                  
                    <div style="margin-top:50px;"class="input-control file success full-size" data-role="input">
                    <label>Gambar</label>
                    <input type="file" name="img">
                    <button class="button"><span class="mif-folder"></span></button>
                    </div>
                    <tr>
                    <button style="margin-top:50px;" type="submit" class="button primary"><span class="mif-plus"></span> Simpan</button>
                    </tr>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>