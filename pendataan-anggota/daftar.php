<?php 
$title = "Pendaftaran";

include 'header.php'; 
?>
<?php
if (! @$_GET['menu']) 
    @$_GET['menu']='daftar';
if (! @$_POST['singlebutton']) 
    @$_POST['singlebutton']='';
?>

<?php include 'navbar.php'; ?>

<ol class="breadcrumb" style="background-color: fff">
    <li><a style="margin-left: 40px;" href="https://bali.apjii.or.id">Kembali ke Website Utama</a></li>
    <li class="active">Pendaftaran</li>
</ol>

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="widget widget-contact">
                    <!-- widget search -->
                    <h3 class="widget-title">Info Support</h3>
                    <address>
                        <strong>Sekretariat APJII Bali</strong>
                        <br> Jl.Gatot Subroto Barat
                        <br> Padang Sambiankaja , Br.Pagutan
                        <br> Denpasar Barat - Bali
                        <br>
                        <abbr title="Phone">P:</abbr> (+62) 877-7792-2295
                    </address>
                    <address>
                        <strong>Email</strong>
                        <br>
                        <a href="mailto:#">sekretariat@bali.apjii.or.id</a>
                    </address>
                </div>
                <!-- /.widget search -->
                <div class="widget widget-social">
                    <div class="social-circle">
                        <a href="#" class="#"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="#"><i class="fa fa-instagram"></i></a>
                        <a href="#" class="#"><i class="fa fa-youtube-play"></i></a>
                    </div>
                </div>
            </div>

            <?php
            include "config.php";
            $link=mysqli_connect($host,$user,$password,$database);
            if($_GET['menu']=='daftar'){
                $sql="SELECT * FROM pendaftaran WHERE menu='daftar'";
                $content=mysqli_query($link,$sql);
                $data=mysqli_fetch_row($content);

                echo "$data[1]";
                if($_POST['singlebutton']=="Daftar"){ 
                    $query="SELECT * FROM peserta_pendaftar WHERE id_keanggotaan='$_POST[id_keanggotaan]'";
                    $content1=mysqli_query($link,$query);
                    $cek_nisn = mysqli_num_rows($content1);
                    if($cek_nisn>0){
                        echo"
                        <script type='text/javascript' language='javascript'>
                        alert('No.Keanggotaan sudah terdaftar. Mohon hubungi Sekretariat Jika ingin melakukan perubahan');
                        window.location.href='daftar.php?menu=daftar';
                        </script>";

                    }

                    else{
                        $sql="INSERT INTO peserta_pendaftar (id_keanggotaan, nama_perusahaan, brand_name, status_cabang, provinsi, kabupaten, kecamatan, kelurahan, alamat, nama_1, tlp_1, email_1, nama_2, tlp_2, email_2, dok_1, dok_2, sertifikat, singlebutton) VALUES ('$_POST[id_keanggotaan]', '$_POST[nama_perusahaan]', '$_POST[brand_name]', '$_POST[status_cabang]', '$_POST[provinsi]', '$_POST[kabupaten]', '$_POST[kecamatan]', '$_POST[kelurahan]', '$_POST[alamat]', '$_POST[nama_1]', '$_POST[tlp_1]', '$_POST[email_1]', '$_POST[nama_2]', '$_POST[tlp_2]', '$_POST[email_2]', '$_POST[dok_1]', '$_POST[dok_2]', '$_POST[sertifikat]', '$_POST[singlebutton]')";
                        mysqli_query($link,$sql);
                        $sql1="INSERT INTO user (adm_id, username, password, type) VALUES (NULL, '$_POST[id_keanggotaan]', '$_POST[id_keanggotaan]', 'Anggota')";
                        mysqli_query($link,$sql1);
                        $sql2="INSERT INTO nilai_ijazah (id_ijazah, nisn, nilai_ujian_bindo, nilai_ujian_bing, nilai_ujian_ipa, nilai_ujian_ips, nilai_ujian_mmtk, nilai_hasil_akhir, keterangan) VALUES (NULL, '$_POST[id_keanggotaan]', '', '', '', '', '', '', '');";
                        mysqli_query($link,$sql2);
                        ?>
                        <script type='text/javascript' language='JavaScript'>
                            alert('Anda Berhasil Daftar');
                        </script>
                        <?php
                        echo "<meta http-equiv='refresh' content='0'>";    
                    }
                }
            }else if($_GET['menu']=='lht_pndftr'){
                $sql1="SELECT * FROM pendaftaran WHERE menu='lht_pndftr'";
                $content1=mysqli_query($link,$sql1);
                $data1=mysqli_fetch_row($content1);
                echo "$data1[1]";
                $sql="SELECT * FROM peserta_pendaftar";
                $content=mysqli_query($link,$sql);
                $i=1;
                while ($data=mysqli_fetch_row($content)) {
                    echo "<tr>";
                    echo "<td>$i</td>";
                    echo "<td>$data[1]</td>";
                    echo "<td>$data[2]</td>";
                    echo "<td>$data[4]</td>";
                    echo "</tr>";
                    $i++;
                }
                echo "</tbody>";
                echo "</table>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }else{
                if (! @$_POST['singlebutton']) 
                    @$_POST['singlebutton']='';
                $sql="SELECT * FROM pendaftaran WHERE menu='krm_pesan'";
                $content=mysqli_query($link,$sql);
                $data=mysqli_fetch_row($content);
                echo "$data[1]";
                if($_POST['singlebutton']=="Kirim"){
                    $sql="INSERT INTO pesan_peserta (id_pesan, email, subject, pesan) VALUES (NULL,'$_POST[email]','$_POST[Subject]','$_POST[textarea]')";
                    mysqli_query($link,$sql);
                    echo "<meta http-equiv='refresh' content='0'>";
                }
            }   
            ?>
        </div>
    </div>
</div>
<!-- footer-->
<?php include 'footer.php'; ?>