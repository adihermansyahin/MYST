<!DOCTYPE html>
<html>
<head>
	<title> Validasi Form </title>

	<link href="https://fonts.googleapis.com/css?family=Major+Mono+Display" rel="stylesheet">
</head>
<body>
	
	<style type ='text/css'>
	*{
		font-family: Roboto;
		font-size: 11pt;
		outline: none;
	}
	table{
		width: 350px;
		border-collapse: collapse;
		position: relative;
		top: 130px;
		border: none;
		box-shadow: 1px 1px 1px #666;
	}
	table span{
		padding: 30px;
		display: block;
		letter-spacing: 10pt;
		font-size: 20pt;
		font-family: Major Mono Display;
		font-weight: normal;
		color: #70ADFF;
	}
	table td{
		padding: 10px;
	}
	table input{
		width: 100%;
		height: 30px;
		padding: 5px;
		box-sizing: border-box;
	}
	table input::placeholder{
		font-size:10pt;
	}
	table input[type=submit]{
		width: 100px;
		height: 40px;
		float: right;
		background: #70ADFF;
		border-top-left-radius: 15px;
		border-top-right-radius: 15px;
		padding: 10px 20px;
		color: #fff;
		text-decoration: none;
		border: none;
	}
	</style>

<center>
	<form method ='POST' action ='nomor_2_proses.php'>
	<table border =''>
	<tr>
		<td> <span>vAliDAsi</span> </td>
	</tr>
	<tr>
		<td> Username </td>
	</tr>
	<tr>
		<td> <input type ='text' name ='username' placeholder="Ex: bigboss_" required oninvalid="this.setCustomValidity('Username harus terdiri dari huruf kecil dan underscore. Dengan panjang 8 karakter')" oninput="setCustomValidity('')"> </td>
	</tr> 
	<tr>
		<td> Password </td>
	</tr>
	<tr>
		<td> <input type ='password' name ='password' placeholder="Ex: qazW_123" required oninvalid="this.setCustomValidity('Password harus terdiri dari huruf kecil, huruf besar, angka dan karakter spesial. Dengan panjang 8 karakter.')" oninput="setCustomValidity('')"> </td>
	</tr>
	<tr>
		<td> <input type ='submit' value ='OK' name ='ok-proses'> </td>
	</tr>
	</table>	
	</form>
</center>

</body>
</html>