<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Operator Bitwise</title>
</head>

<body>
	<h2>Operator Bitwise</h2>
	<?php $a = 20;
	$b = 7; ?>
	<p><?= 'Nilai a = ' . $a; ?></p>
	<p><?= 'Nilai b = ' . $b; ?></p>

	<table border="1" cellpadding="10px" cellspacing="0px">
		<thead style="background-color: salmon;color:white;">
			<th>Operator</th>
			<th>Contoh</th>
			<th>Hasil</th>
		</thead>
		<tbody style="font-weight: bold;">
			<tr>
				<td>AND</td>
				<td>a & b </td>
				<td> <?= $a & $b; ?></td>
			</tr>
			<tr>
				<td>OR</td>
				<td>a | b </td>
				<td><?= $a | $b; ?></td>
			</tr>
			<tr>
				<td>OR</td>
				<td>a ^ b </td>
				<td><?= $a ^ $b; ?></td>
			</tr>
			<tr>
				<td>NOT</td>
				<td>~a </td>
				<td><?= ~$a; ?></td>
			</tr>
			<tr>
				<td>SHIFT LEFT</td>
				<td>a << 1</td> <td><?= $a << 1; ?></td>
			</tr>
			<tr>
				<td>SHIFT RIGHT</td>
				<td>a >> 1 </td>
				<td><?= $a  >> 1; ?></td>
			</tr>
		</tbody>
	</table>
</body>

</html>