<?php
//fungsi check.php ini adalah untuk mengecek data user yang ada dalam database agar bisa login ke halaman website.
	session_start();
	require_once "../config.php";
	if(ISSET($_POST['user']) && ISSET($_POST['password']))
  	{
      	$link=mysqli_connect($host,$user,$password,$database);
      	$user=$_POST['user'];
      	$password=$_POST['password'];
      	$perintah="SELECT * FROM user WHERE username='$user' AND password='$password'";
     	$hasil=mysqli_query($link,$perintah);
      	$jml_data=mysqli_num_rows($hasil);
	  	if ($jml_data>0)
	  	{

	    	$_SESSION['user']=$user;
	    	function sesi($user){
	    		$usr=$user;
	    		
	    	}
	    	
			
			$akun=mysqli_fetch_row($hasil);
			switch ($akun[3]) {
				case 'admin':
						?>
			  			<script type='text/javascript' language='JavaScript'>
							alert('Anda Berhasil Masuk');
							window.location.href="menu_admin.php";
						</script>
						<?php
					break;
				
				default:
						?>
			  			<script type='text/javascript' language='JavaScript'>
							alert('Anda Berhasil Masuk');
							window.location.href="editbiodata.php";
						</script>
						<?php
					//header('location: editbiodata.php');
					break;
			}
			
		 	//include "akun_login.php";		 
		 	
	  	}else{
	    ?>
			<script type="text/javascript" language="JavaScript">
				alert('Username atau Password yang Anda Masukkan Salah');
				document.location='akun.php';
			</script>
		<?php
		}
	}
?>