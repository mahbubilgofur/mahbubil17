<h1>PERCABANGAN MENGGUNAKAN PHP</h1>
<form action="" method="post">
	<input type="text" name="nilai">
	<input type="submit" name="kirim">
	
</form>

<?php

if(isset($_POST['kirim'])){
    $nilai=$_POST['nilai'];

if ($nilai<=30) {
	echo "Sangat kurang";
}
elseif ($nilai<=59) {
	echo "kurang";
}
elseif ($nilai<=79) {
	echo "Baik";
}
elseif ($nilai<=100) {
	echo "Sangat Baik";
}
else{
	echo "Ngapain Dek";
}}