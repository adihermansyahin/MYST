<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel ='stylesheet' type ='text/css' href ='bootstrap.min.css'>

</head>
<body>

<div class ='container' style ='width: 70%; margin-top: 40px;'>
	<table class ='table'> 
	<thead>
	<tr>
		<th> person_id </th>
		<th> name </th>
		<th> person_hobbies </th>
	</tr>
	</thead>
	<tbody>
	<?php
		include 'koneksi.php';
		$query = mysqli_query($koneksi,"SELECT tb_hobi.person_id, tb_kategori.name, GROUP_CONCAT(tb_hobi.nama) as nama_hobi FROM tb_hobi INNER JOIN tb_kategori ON tb_kategori.id=tb_hobi.person_id GROUP BY tb_hobi.person_id ORDER BY tb_kategori.id ASC");
		while($a = mysqli_fetch_array($query)){ ?>
		<tr>
			<td> <?php echo $a['person_id']; ?> </td>
			<td> <?php echo $a['name']; ?> </td>
			<td> <?php echo $a['nama_hobi']; ?></td>
		</tr>
	<?php } ?>
	</tbody>
	</table>
</div>

</body>
</html>