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

    <title>Admin - ServiceCake</title>

    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../../metro/css/metro.css" rel="stylesheet">
    <link href="../../metro/css/metro-icons.css" rel="stylesheet">
    <link href="../../metro/css/metro-responsive.css" rel="stylesheet">

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
<body class="bg-steel">
    <div class="app-bar fixed-top darcula" data-role="appbar" style="background-color:#5D4037;">
        <a class="app-bar-element branding"><img src="" alt="Service Cake"></a>
        <span class="app-bar-divider"></span>
    </div>


               
  <div class="page-content">
        <div class="flex-grid no-responsive-future" style="height: 100%;">
            <div class="row" style="height: 100%">
                
                <div class="cell auto-size padding20 bg-white" id="cell-content">
                    <h1 class="text-light"><a href="{{url('adminh')}}" class="nav-button transform"><span></span></a> EDIT DATA PEMESANAN</h1>
                    <hr class="thin bg-grayLighter">
                    <br><br>
        <div class="example">
            <br/>
       
                    
                    <form method="POST" action="{{ url('adminh/update/' .$pesan['id']) }}"> 
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                    <input type="hidden" name="id" value="{{ $pesan['id'] }}">
                    <div class="cell">
                        <label>Nama Pemesan</label>
                        <div class="input-control text success full-size">
                            <input type="text" name="pmsn" value="<?php echo $pesan['pmsn'];?>" required>
                            <input type="hidden" name="id" value="<?php echo $pesan['id'];?>" required>
                        </div>
                    </div>
                    <label>Alamat</label>
                    <div class="input-control textarea success full-size" data-role="input" data-text-auto-resize="true">
                    <textarea name="alamat" value="<?php echo $pesan['alamat'];?>" required><?php echo $pesan['alamat'];?></textarea>
                    </div>
                    <div class="cell">
                        <label>No Telepon</label>
                        <div class="input-control text success full-size">
                            <input type="text" name="no_tlp" maxlength="13" value="<?php echo $pesan['no_tlp'];?>" required>
                        </div>
                    </div>
                    <div class="cell">
                        <label>Jumlah Pesanan</label>
                        <div class="input-control text success full-size">
                            <input type="text" name="jmlh" maxlength="3" value="<?php echo $pesan['jmlh'];?>" required>
                        </div>
                    </div>    
                    </select>
                    </div>
                    <div class="cell">
                        <h5>Keterangan</h5>
                        <label class="input-control radio">
                            <input type="radio" name="status" @if($pesan->status=='disetujui')checked @endif value="disetujui">
                            <span class="check"></span>
                            <span class="caption">Disetujui</span>
                        </label>
                        <label class="input-control radio">
                            <input type="radio" name="status" @if($pesan->status=='tidak disetujui')checked @endif value="tidak disetujui">
                            <span class="check"></span>
                            <span class="caption">Tidak disetujui</span>
                        </label>
                        <label class="input-control radio">
                            <input type="radio" name="status" @if($pesan->status=='ditunda')checked @endif value="ditunda">
                            <span class="check"></span>
                            <span class="caption">Ditunda</span>
                        </label>
                    </div>
                    <div class="cell">
                        <div class="input-control">
                                <button type="submit" class="button primary"><span class="mif-loop2"></span> Simpan</button>
                        </div>
                    </div>              
                    <!-- Radio button -->
                    </form>
                                   
            
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

</html>