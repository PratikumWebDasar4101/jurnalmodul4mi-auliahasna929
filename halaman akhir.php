<?php
$hobi = $_POST['hobi'];
echo "Hobi yang disukai anda :";
foreach ($hobi as $key => $value) {
	
}
{
	print_r($_POST['hobi']);
}

$file = $_FILES['dokumen'];
$nama_file = $file['name'];
$nama_tmp = $file['tmp_name'];
$upload_dir ="upload/";
move_uploaded_file($nama_tmp,$upload_dir.$nama_file);
echo "file berhasil diupload. <br>"
?>
<img src="upload/<?php echo $nama_file; ?>" width="100px">
<a href="index.html"> Halaman pertama </a>
