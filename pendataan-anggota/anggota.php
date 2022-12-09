<?php 

$title = 'Anggota';

include 'header.php';

include 'navbar.php';

?>


<ol class="breadcrumb" style="background-color: fff">
    <li><a style="margin-left: 40px;" href="https://bali.apjii.or.id">Kembali ke Website Utama</a></li>
    <li class="active">Anggota</li>
</ol>
<link rel="stylesheet" type="text/css" href="css1/style1.css">
<link rel="stylesheet" type="text/css" href="css1/font-awesome.css">
<div class="content" >
    <div class="container" style="height: auto;">

        <h1>List Anggota Wilayah APJII Bali</h1>
        <br>
        <hr>
        <table class='table table-striped' style="border-radius: 0; width: 1800px;">                 
            <thead>                     
                <tr>                         
                    <td style="width: 40px;">No.</td>
                    <td>Nama Perusahaan</td>    
                    <td>Brand Name</td>    
                    <td>Provinsi</td>   
                    <td>Kabupaten</td>
                    <td>Status</td>    
                </tr>                                   
            </thead>         
            <tbody>
                <?php
                include "config.php";
                $link=mysqli_connect($host,$user,$password,$database);
                $sql="SELECT * FROM peserta_pendaftar";
                $content=mysqli_query($link,$sql);
                $i=1;
                while ($data=mysqli_fetch_row($content)) {
                    echo "<tr>";
                    echo "<td>$i</td>";
                    echo "<td>$data[1]</td>";
                    echo "<td>$data[2]</td>";
                    echo "<td>$data[4]</td>";
                    echo "<td>$data[5]</td>";
                    echo "<td>$data[18]</td>";
                    echo "</tr>";
                    $i++;
                }?>
            </tbody>
        </table>
    </div> 
</div>

<br>
<br>
<br>

<?php include 'footer.php'; ?>
