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

    <title>Admin - BookingKue</title>

    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../metro/css/style.css" rel="stylesheet">
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
        <a class="app-bar-element branding"><img src="../metro/images/bj.png" alt="Service Cake"></a>
        <span class="app-bar-divider"></span>
        

    </div>

    <div class="page-content">
        <div class="flex-grid no-responsive-future" style="height: 100%;">
            <div class="row" style="height: 100%">
                
                <div class="cell auto-size padding20 bg-white" id="cell-content">
                    <h1 class="text-light"><a href="{{ url('mulai') }}" class="nav-button transform"><span></span></a> DATA ADMIN</h1>
                    <hr class="thin bg-grayLighter">
                    <table class="dataTable border bordered" data-role="datatable" data-auto-width="false">
                        <thead>
                        <tr>
                            
                            <td class="sortable-column">ID</td>
                            <td class="sortable-column">Nama Lengkap</td>
                            <td class="sortable-column">No Telpon</td>
                            <td class="sortable-column">Username</td>
                            <td class="sortable-column">Aksi</td>
                        </tr>

                        </thead>
                        <tbody>
                        <?php
                        $i=1;
                        foreach($admin as $key){
                            ?>
                            <tr>
                        <td><?php echo $i;?></td>
                        <td><?php echo $key['nama_lengkap'];?></td>
                        <td><?php echo $key['no_telepon'];?></td>
                        <td><?php echo $key['username'];?></td>
                      <td><a href="{{ ('dataa/edit/'. $key['id']) }}" class="btn biru"><font color="white">Ubah</font></a>
                                <a href="{{ ('dataa/delete/'. $key['id']) }}" class="btn biru" 
                                onclick="javascript: return confirm('Apakah anda yakin akan menghapus ?')">
                                <font color="white">Hapus</font></a></td>
                        </tr>
                        </tr>
                        <?php
                        $i++;
                    }
                    ?>
                        </tbody>

                    </table>
                    <br><br><br><br>
                </div>
            </div>
        </div>
    </div>
</body>
</html>