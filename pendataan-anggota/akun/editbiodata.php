<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Hair salon templates for mens hair cut service provider.">
    <meta name="keywords" content="hair salon website templates free download, html5 template, free responsive website templates, website layout,html5 website templates, template for website design, beauty HTML5 templates, cosmetics website templates free download">
    <title>Biodata</title>
    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i%7cMontserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <!-- Style -->
    <link href="../css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="../js/jquery-1.10.2.min.js"></script>
</head>
<body>
    <?php
        error_reporting(0);
        include "check.php";
        $a=$_SESSION['user'];
        include "limited.php";
        include "config.php";
        $link=mysqli_connect($host,$user,$password,$database);
        $query="SELECT * FROM peserta_pendaftar WHERE id_keanggotaan='$_POST[id_keanggotaan]'";
        $qwe=mysqli_query($link,$query);
        $dataq=mysqli_fetch_row($qwe);
    ?>
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <a href="#"><img src="../images/apjii.png" alt=""></a>
                </div>
                <div class="col-lg-8 col-md-4 col-sm-12 col-xs-12">
                      <div class="navigation">
                        <div id="navigation">
                            <ul>
                                <li class="active"><a href="#" title=""><?= $dataq[1]; ?></a>
                                        <li><a style="color: blue;" href="logout.php" title="Logout" onclick="return confirm('Apakah anda yakin ingin keluar ?')"> Logout</a></li>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-header" style="height: 50px; background-image: url(../images/cool-background.jpg);" >
    <br>
    <br>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                        <?php
                            include "../config.php";
                            $link=mysqli_connect($host,$user,$password,$database);
                            $perintah="SELECT * FROM peserta_pendaftar, user
                            WHERE peserta_pendaftar.id_keanggotaan=user.username";
                            $hasil=mysqli_query($link,$perintah);
                            $data=mysqli_fetch_row($hasil);
                            if (! @$_POST['singlebutton']) 
                                @$_POST['singlebutton']='';
                        ?>
                    <h1>Data Anggota</h1>
                    <p>Silahkan mengubah data pada form dibawah ini</p>
                    <form method='post' action=''>
                            <div class='row'>
                                <div class='col-md-6'>
                                    <label class='control-label'>No.Keanggotaan*</label>
                                    <h3><?php echo "$data[0]"; ?></h3>
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>Nama Perusahaan*</label>
                                    <input type='text' name='nama_perusahaan' placeholder='' class='form-control' <?php echo "value=$data[1]"; ?>>
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>Brand Name*</label>
                                    <input type='text' name='brand_name' placeholder='' class='form-control' <?php echo "value=$data[2]";?> >
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>Apakah kantor anda berpusat di Bali/Nusra?*</label>
                                    <select class='form-control' name='status_cabang' >
                                        <option value='Iya' <?php if($data[3]=='Iya'){echo 'selected'; }?> >Iya</option>
                                        <option value='Tidak'<?php if($data[3]=='Perempuan'){echo 'selected'; }?> >Tidak</option>
                                    </select>
                                </div>

                                        
    <div class='row'>
      <div class='col-md-12'>
      <hr>
      <center>
      <h5>Alamat Perusahaan</h5>
      <hr>
      </center>
      </div>
    </div>

    <div class='row'>
      <div class='col-md-6'>
        <label class='control-label'>Provinsi</label>
        <select class="form-control" id="id_provinsi" name="provinsi">
          <option value='Bali' <?php if($data[4]=='Bali'){echo 'selected'; }?> >Bali</option>
          <option value='Nusa Tenggara Barat' <?php if($data[4]=='Nusa Tenggara Barat'){echo 'selected'; }?> >Nusa Tenggara Barat</option>
          <option value='Nusa Tenggara Timur' <?php if($data[4]=='Nusa Tenggara Timur'){echo 'selected'; }?> >Nusa Tenggara Timur</option>
          </select>
      </div>
      <div class='col-md-6'>
        <label class='control-label'>Kabupaten</label>
          <select class="form-control" id="id_kabupaten" name="kabupaten">
          <option value='Alor' <?php if($data[5]=='Alor'){echo 'selected'; }?> > Alor</option>
          <option value='Badung' <?php if($data[5]=='Badung'){echo 'selected'; }?> > Badung</option>
          <option value='Bangli' <?php if($data[5]=='Bangli'){echo 'selected'; }?> > Bangli</option>
          <option value='Belu' <?php if($data[5]=='Belu'){echo 'selected'; }?> > Belu</option>
          <option value='Bima' <?php if($data[5]=='Bima'){echo 'selected'; }?> > Bima</option>
          <option value='Buleleng' <?php if($data[5]=='Buleleng'){echo 'selected'; }?> > Buleleng</option>
          <option value='Denpasar' <?php if($data[5]=='Denpasar'){echo 'selected'; }?> > Denpasar</option>
          <option value='Dompu' <?php if($data[5]=='Dompu'){echo 'selected'; }?> > Dompu</option>
          <option value='Ende' <?php if($data[5]=='Ende'){echo 'selected'; }?> > Ende</option>
          <option value='Flores Timur' <?php if($data[5]=='Flores Timur'){echo 'selected'; }?> > Flores Timur</option>
          <option value='Gianyar' <?php if($data[5]=='Gianyar'){echo 'selected'; }?> > Gianyar</option>
          <option value='Jembrana' <?php if($data[5]=='Jembrana'){echo 'selected'; }?> > Jembrana</option>
          <option value='Karang Asem' <?php if($data[5]=='Karang Asem'){echo 'selected'; }?> > Karang Asem</option>
          <option value='Klungkung' <?php if($data[5]=='Klungkung'){echo 'selected'; }?> > Klungkung</option>
          <option value='Kupang' <?php if($data[5]=='Kupang'){echo 'selected'; }?> > Kupang</option>
          <option value='Lembata' <?php if($data[5]=='Lembata'){echo 'selected'; }?> > Lembata</option>
          <option value='Lombok Barat' <?php if($data[5]=='Lombok Barat'){echo 'selected'; }?> > Lombok Barat</option>
          <option value='Lombok Tengah' <?php if($data[5]=='Lombok Tengah'){echo 'selected'; }?> > Lombok Tengah</option>
          <option value='Lombok Timur' <?php if($data[5]=='Lombok Timur'){echo 'selected'; }?> > Lombok Timur</option>
          <option value='Lombok Utara' <?php if($data[5]=='Lombok Utara'){echo 'selected'; }?> > Lombok Utara</option>
          <option value='Malaka' <?php if($data[5]=='Malaka'){echo 'selected'; }?> > Malaka</option>
          <option value='Manggarai' <?php if($data[5]=='Manggarai'){echo 'selected'; }?> > Manggarai</option>
          <option value='Manggarai Barat' <?php if($data[5]=='Manggarai Barat'){echo 'selected'; }?> > Manggarai Barat</option>
          <option value='Manggarai Timur' <?php if($data[5]=='Manggarai Timur'){echo 'selected'; }?> > Manggarai Timur</option>
          <option value='Mataram' <?php if($data[5]=='Mataram'){echo 'selected'; }?> > Mataram</option>
          <option value='Nagekeo' <?php if($data[5]=='Nagekeo'){echo 'selected'; }?> > Nagekeo</option>
          <option value='Ngada' <?php if($data[5]=='Ngada'){echo 'selected'; }?> > Ngada</option>
          <option value='Rote Ndao' <?php if($data[5]=='Rote Ndao'){echo 'selected'; }?> > Rote Ndao</option>
          <option value='Sabu Raijua' <?php if($data[5]=='Sabu Raijua'){echo 'selected'; }?> > Sabu Raijua</option>
          <option value='Sikka' <?php if($data[5]=='Sikka'){echo 'selected'; }?>> Sikka</option>
          <option value='Sumba Barat' <?php if($data[5]=='Sumba Barat'){echo 'selected'; }?>> Sumba Barat</option>
          <option value='Sumba Barat Daya' <?php if($data[5]=='Sumba Barat Daya'){echo 'selected'; }?>> Sumba Barat Daya</option>
          <option value='Sumba Tengah' <?php if($data[5]=='Sumba Tengah'){echo 'selected'; }?>> Sumba Tengah</option>
          <option value='Sumba Timur' <?php if($data[5]=='Sumba Timur'){echo 'selected'; }?>> Sumba Timur</option>
          <option value='Sumbawa' <?php if($data[5]=='Sumbawa'){echo 'selected'; }?>> Sumbawa</option>
          <option value='Sumbawa Barat' <?php if($data[5]=='Sumbawa Barat'){echo 'selected'; }?>> Sumbawa Barat</option>
          <option value='Tabanan' <?php if($data[5]=='Tabanan'){echo 'selected'; }?>> Tabanan</option>
          <option value='Timor Tengah Selatan' <?php if($data[5]=='Timor Tengah Selatan'){echo 'selected'; }?>> Timor Tengah Selatan</option>
          <option value='Timor Tengah Utara' <?php if($data[5]=='Timor Tengah Utara'){echo 'selected'; }?>> Timor Tengah Utara</option>
          </select>
      </div>
    </div>
    <div class='row'>
        <div class='col-md-6'>
            <label class='control-label'>Kecamatan</label>
            <input type='text' name='kecamatan' placeholder='' class='form-control' <?php echo "value=$data[6]"; ?>>
        </div>
        <div class='col-md-6'>
            <label class='control-label'>Kelurahan*</label>
            <input type='text' name='kelurahan' placeholder='' class='form-control' <?php echo "value=$data[7]"; ?>>
        </div>
    </div>
    <div class='row'>
        <div class='col-md-12'>
            <label class='control-label'>Alamat*</label>
            <input type='text' name='alamat' placeholder='' class='form-control' <?php echo "value=$data[8]"; ?>>
        </div>
    </div>
                                        
    <div class='row'>
      <div class='col-md-12'>
      <hr>
      <center>
      <h5>Perwakilan Perusahaan</h5>
      <hr>
      </center>
      </div>
    </div>
    <div class='row'>
      <div class='col-md-4'>
          <label class='control-label'>Nama Perwakilan 1</label>
          <input type='text' name='nama_1' placeholder='' class='form-control' <?php echo "value=$data[9]"; ?>>
      </div>
      <div class='col-md-4'>
          <label class='control-label'>Telepon</label>
          <input type='text' name='tlp_1' placeholder='' class='form-control' <?php echo "value=$data[10]"; ?>>
      </div>
      <div class='col-md-4'>
          <label class='control-label'>Email</label>
          <input type='text' name='email_1' placeholder='' class='form-control' <?php echo "value=$data[11]"; ?>>
      </div>              ​
    </div>

    <div class='row'>
       <div class='col-md-4'>
         ​<label class='control-label'>Nama Perwakilan 2</label>
         ​<input type='text' name='nama_2' placeholder='' class='form-control' <?php echo "value=$data[12]"; ?>>
       ​</div>
       ​<div class='col-md-4'>
         ​<label class='control-label'>Telepon</label>
         ​<input type='text' name='tlp_2' placeholder='' class='form-control' <?php echo "value=$data[13]"; ?>>
       ​</div>
       ​<div class='col-md-4'>
         ​<label class='control-label'>Email</label>
         ​<input type='text' name='email_2' placeholder='' class='form-control' <?php echo "value=$data[14]"; ?>>
       </div>
    </div>

    <div class='row'>
     ​<div class='col-md-12'>
     ​<hr>
     <center>
     <h5>Dokumen Pendataan Anggota</h5>
     <hr>
     </center>
     </div>
    </div>

    <div class='row'> 
    <div class='col-md-12'>
       ​<label class='control-label'>Dokumen Perwakilan 1</label>
       <li type="file" name="dok_1"  id="inputGroupFile01" ><a href="<?php echo "value=$data[15]"; ?>">Lihat Dokumen 1</a></li>
    ​</div>
    </div>

    <div class='row'>
    <div class='col-md-12'>
       ​<label class='control-label'>Dokumen Perwakilan 2</label>
       ​<li type="file" name="dok_1"  id="inputGroupFile01" ><a href="<?php echo "value=$data[16]"; ?>">Lihat Dokumen 2</a></li>
    ​</div> 
    </div>

    <div class="row">
     <div class='col-md-12'>
       ​<label class='control-label'>Sertifikat Keanggotaan</label>
       ​<li type="file" name="dok_1"  id="inputGroupFile01" ><a href="<?php echo "value=$data[17]"; ?>">Lihat Sertifikat</a></li>
    ​</div> 
    </div>

    <div class="row">
      <div class='col-md-12'>
        <div class='form-group'>
         ​<input name='singlebutton' class='btn btn-default' type='submit' value='Simpan'<?php echo "value=$data[18]"; ?>>  
     ​   </div>
    ​</div>
    </div>
                                                                         ​                                                                 
        </form>
    </div>
  </div>

                    <?php
                        include "../config.php";
                        $link=mysqli_connect($host,$user,$password,$database);
                        if($_POST['singlebutton']=="Simpan"){
                            $sql="UPDATE peserta_pendaftar SET id_keanggotaan '$_POST[id_keanggotaan]' , nama_perusahaan = '$_POST[nama_perusahaan]', brand_name = '$_POST[brand_name]', status_cabang = '$_POST[status_cabang]', provinsi = '$_POST[provinsi]', kabupaten = '$_POST[kabupaten]', kecamatan = '$_POST[kecamatan]', kelurahan = '$_POST[kelurahan]', alamat= '$_POST[alamat]', nama_1 = '$_POST[nama_1]', tlp_1 = '$_POST[tlp_1]', email_1 = '$_POST[email_1]', nama_2 = '$_POST[nama_2]', tlp_2 = '$_POST[tlp_2]', email_2 = '$_POST[email_2]', dok_1 = '$_POST[dok_1]', dok_2 = '$_POST[dok_2]', sertifikat = '$_POST[sertifikat]' , singlebutton = '$_POST[singlebutton]' WHERE peserta_pendatar.id_keanggotaan = user.username";
                            mysqli_query($link,$sql);
                            ?>
                                <script type="text/javascript" language="JavaScript">
                                    alert('Anda Berhasil Memperbarui Data');
                                </script>
                            <?php
                                echo "<meta http-equiv='refresh' content='0'>";
                        }
                    ?>       
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="sidenav">
                        <ul class="listnone">
                            <li> <a href='editbiodata.php' class="active">Ubah Data</a></li>
                            <li> <a href='input_nilai_rapor.php'>Lihat Status Keanggotaan</a></li>
                            <li> <a href='ubahpassword.php'>Ubah Password</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
     
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/menumaker.js"></script>
    <script src="../js/jquery.sticky.js"></script>
    <script src="../js/sticky-header.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap-datepicker.js"></script>
    <script>
        $(".input-group.date").datepicker({autoclose: true, todayHighlight: true});
    </script>
</body>

</html>
