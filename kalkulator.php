<!DOCTYPE html>
<html>
<head>
	<title>kalkulator PHP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php 
	if(isset($_POST['hitung'])){
		$nilai1 = $_POST['input1'];
		$nilai2 = $_POST['input2'];
		$operasi = $_POST['operasi'];
		switch ($operasi) {
			case 'tambah':
				$hasil = $nilai1+$nilai2;
			break;
			case 'kurang':
				$hasil = $nilai1-$nilai2;
			break;
			case 'kali':
				$hasil = $nilai1*$nilai2;
			break;
			case 'bagi':
				$hasil = $nilai1/$nilai2;
			break;			
		}
	}
	?>
	<div class="container">
		<h2 class="judul">Hitung Sederhana</h2>
		<a class="brand" href="https://www.github.com/Deralvin">Github : Deralvin</a>
		<form method="post" action="kalkulator.php">			
			<input type="text" name="input1" class="input" autocomplete="off" placeholder="Masukan Nilai Pertama">
			<input type="text" name="input2" class="input" autocomplete="off" placeholder="Masukkan Nilai Kedua">
			<select class="opt" name="operasi">
				<option value="tambah">+</option>
				<option value="kurang">-</option>
				<option value="kali">x</option>
				<option value="bagi">/</option>
			</select>
			<input type="submit" name="hitung" value="Hitung" class="btn">											
		</form>
		<?php if(isset($_POST['hitung'])){ ?>
			<input type="text" value="<?= $hasil; ?>" class="input">
		<?php }else{ ?>
			<input type="text" value="0" class="input">
		<?php } ?>			
	</div>
</body>
</html>