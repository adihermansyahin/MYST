<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<style type ='text/css'>
	*{
		box-sizing: border-box;
		padding: 10px;
	}
	table{
		width: 100%;
		border-collapse: collapse;
		border: none;
		font-family: Roboto;
		font-size: 11pt;
	}
	table tr:nth-child(1){
		background: #70ADFF;
		color: #fff;
		font-weight: bold;
		text-align: center;
	}
	table td:nth-child(1){ width: 10%; text-align: center; }
	table td:nth-child(2){ width: 20%; }
	table td:nth-child(3){ width: 70%; }
	table td{
		padding: 15px 10px;
	}
	</style>
	
	<?php
		
		include 'koneksi.php';
		$query = mysqli_query($koneksi,"SELECT tb_hobi.person_id, tb_kategori.name, GROUP_CONCAT(tb_hobi.nama) as nama_hobi FROM tb_hobi INNER JOIN tb_kategori ON tb_kategori.id=tb_hobi.person_id GROUP BY tb_hobi.person_id ORDER BY tb_kategori.id ASC");
	?>

	<table border =''>
	<tr>
		<td> person_id </td>
		<td> nama </td>
		<td> hobi </td>
	</tr>
	<?php while($a = mysqli_fetch_array($query)){ ?>
	<tr>
		<td> <?php echo $a['person_id']; ?> </td>
		<td> <?php echo $a['name']; ?> </td>
		<td><span style ="color: #666;"> <?php echo $a['nama_hobi']; ?></span></td>
	</tr>
	<?php } ?>
	</table>

</body>
</html>