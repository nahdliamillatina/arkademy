<?php 
	require 'functions.php';
	$kandidat = tampil("SELECT * FROM candidates");
	if(isset($_POST['tambahData'])){
		if(tambah($_POST) > 0){
			echo "<script>document.location.href= 'earned_vote.php';</script>";
		}else{
			echo "gagal";
		}
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Earned Vote</title>
	<style type="text/css">
		form{
			padding-top: 20px;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<form action="" method="POST">
		<h3>Menambahkan Data Calon</h3>
		<label for="name">Name :</label>
		<input type="text" name="name" id="name"><br>
		<button type="submit" name="tambahData">Tambah</button>
		<table border="1" align="center" width="35%" height="50">
			<tr>
				<?php $i=1; ?>
				<?php foreach($kandidat as $data) : ?>
				<tr>
					<th><?= $data['name']; ?></th>
					<td rowspan="2" align="center">
						<a href="tambah.php?id=<?= $data['id']; ?> && earned_vote=<?= $data['earned_vote']; ?>">Tambah</a>
					</td>
				</tr>
				<tr>
					<td>Perolehan suara: <?php $angka = $data['earned_vote']; $angkaformat = number_format($angka); echo $angkaformat;?></td>
				</tr>
			<br></tr>
			
			<?php $i++; ?>
			<?php endforeach; ?>
		</table>
		<br>
	</form>
</body>
</html>