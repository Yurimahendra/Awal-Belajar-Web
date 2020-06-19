<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Operator Logika</title>
</head>

<body>
	<h2>Operator logika dalam bentuk tabel kebenaran</h2>
	<?php $a = 1;
	$b = 0; ?>
	<table border="1" cellspacing="0px" cellpadding="10px" style="text-align: center;">
		<thead style="background-color: salmon;color:white;">
			<th>A</th>
			<th>B</th>
			<th>AND</th>
			<th>OR</th>
			<th>XOR</th>
		</thead>
		<tbody style="font-weight: bold;">
			<tr>
				<td><?= $a ?></td>
				<td><?= $a ?></td>
				<td><?= ($a && $a) ? 1 : 0 ?></td>
				<td><?= ($a ||  $a) ? 1 : 0 ?></td>
				<td><?= ($a ^  $a) ? 1 : 0 ?></td>
			</tr>
			<tr>
				<td><?= $a ?></td>
				<td><?= $b ?></td>
				<td><?= ($a && $b) ? 1 : 0 ?></td>
				<td><?= ($a || $b) ? 1 : 0 ?></td>
				<td><?= ($a ^ $b) ? 1 : 0 ?></td>
			</tr>
			<tr>
				<td><?= $b ?></td>
				<td><?= $a ?></td>
				<td><?= ($b && $a) ? 1 : 0 ?></td>
				<td><?= ($b || $a) ? 1 : 0 ?></td>
				<td><?= ($b ^ $a) ? 1 : 0 ?></td>
			</tr>
			<tr>
				<td><?= $b ?></td>
				<td><?= $b ?></td>
				<td><?= ($b && $b) ? 1 : 0 ?></td>
				<td><?= ($b || $b) ? 1 : 0 ?></td>
				<td><?= ($b ^ $b) ? 1 : 0 ?></td>
			</tr>
		</tbody>
	</table>
</body>

</html>