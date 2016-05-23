 <link href="assets/css/style.css" rel="stylesheet">
    <link href="../../metro/css/metro.css" rel="stylesheet">
    <link href="../../metro/css/metro-icons.css" rel="stylesheet">
    <link href="../../metro/css/metro-responsive.css" rel="stylesheet">
    <link href="../../metro/css/css.css" rel="stylesheet">

    <script src="../../metro/js/jquery-2.1.3.min.js"></script>
    <script src="../../metro/js/jquery.dataTables.min.js"></script>

    <script src="../../metro/js/metro.js"></script>

<body onLoad="window.print()" class="bg-steel">
        
        <div class="example">
            <div class="panel">
    <div class="heading" style="background-color:#eceaea; margin:auto; box-shadow:0 5px 10px grey; height:70px; width:57%;">
        <font color="black">
        <center>
        <img src="../../metro/images/report.png" alt="Service Cake">
        </center>
    </div>
    <br>
    <div class="content">
        <center><img src="/material/images/{{ $pesan['img'] }}" class="gambar"></center>
            <center>
                    <table class="batas">
                    <tr>
                        <th>Nama Pemesan</th>
                        
                        <td><?php echo $pesan['pmsn'];?></td>
                        <input type="hidden" name="id" value="<?php echo $pesan['id'];?>">
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        
                        <td><?php echo $pesan['alamat'];?></td>
                    </tr>
                    <tr>
                        <th>No Telepon</th>
                        
                        <td><?php echo $pesan['no_tlp'];?></td>
                    </tr>
                    <tr>
                        <th>Jenis Kue</th>

                        <td><?php echo $pesan['ciri_kue'];?></td>
                    <tr>
                        <th>Jumlah Pesanan</th>
                        
                        <td><?php echo $pesan['jmlh'];?> pcs</td>
                    </tr>
                    <tr>
                        <th>Keterangan</th>
                        
                        <td><?php echo $pesan['ket'];?> </td>
                    </tr>
                    
                     <br>
                    </table>
            </center>
            <br>
    </div>
</div>
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
