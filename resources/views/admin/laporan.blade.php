<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Metro, a sleek, intuitive, and powerful framework for faster and easier web development for Windows Metro Style.">
    <meta name="keywords" content="HTML, CSS, JS, JavaScript, framework, metro, front-end, frontend, web development">
    <meta name="author" content="Sergey Pimenov and Metro UI CSS contributors">

    <link rel='shortcut icon' type='image/x-icon' href='../../favicon.ico' />

    <title>Admin - ServiceCake</title>

    <link href="../../assets/css/style.css" rel="stylesheet">
    <link href="../../metro/css/style.css" rel="stylesheet">
    <link href="../../metro/css/metro.css" rel="stylesheet">
    <link href="../../metro/css/metro-icons.css" rel="stylesheet">
    <link href="../../metro/css/metro-responsive.css" rel="stylesheet">
<script>
  $(document).ready(function() {
    $('select').metro_select();
  });
  </script>

    <script src="../../metro/js/jquery-2.1.3.min.js"></script>
    <script src="../../metro/js/jquery.dataTables.min.js"></script>

    <script src="../../metro/js/metro.js"></script>

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
<body onLoad="window.print()" class="bg-steel">
    <div class="app-bar fixed-top darcula" data-role="appbar" style="background-color:#03A9F4; box-shadow:0 5px 10px grey; height:11%;">
        
        <br><center><img src="../../metro/images/report.png" alt="Service Cake"></center>
        <span class="app-bar-divider"></span>
        

        
    </div>

    <div class="page-content">
        <div class="flex-grid no-responsive-future" style="height: 100%;">
            <div class="row" style="height: 100%">
                
                <div class="cell auto-size padding20 bg-white" id="cell-content"><br><br><br><br>
                    <table class="dataTable border bordered">
                        <thead>
                        <tr>
                            <td class="sortable-column">ID</td>
                            <td class="sortable-column">Nama Pemesan</td>
                            <td class="sortable-column">No Telp</td>
                            <td class="sortable-column">Jenis Kue</td>
                            <td class="sortable-column">Jumlah</td>
                            <td class="sortable-column">Gambar</td>
                            <td class="sortable-column">Keterangan</td>
                        </tr>
                        </thead>
                        <tbody>
                        <?php 
            $i=1;
            foreach($pesan as $key){
            ?>
                        <tr>
                            
                            <td class="sortable-column"><?php echo $i;?></td>
                            <td class="sortable-column"><?php echo $key['pmsn'];?></td>
                            <td class="sortable-column"><?php echo $key['no_tlp'];?></td>
                            <td class="sortable-column"><?php echo $key['ciri_kue'];?></td>
                            <td class="sortable-column"><?php echo $key['jmlh'];?></td>
                            <td class="sortable-column"><?php echo $key['img'];?></td>
                            <td class="sortable-column"><?php echo $key['ket'];?></td>
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