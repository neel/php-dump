<html>
	<head>
		<style>
			table{
				border: 1px solid #88BEC2;
			}
			tr{
				border: none;
			}
			td,th{
				border-left: 1px dashed #5050B4;
				border-right: none;
				border-top: none;
				border-bottom: none;
			}
			td:hover,th:hover{
				background-color: navy;
				color: white;
			}
		</style>
	</head>
<body>
<table border=1 >
<?php for($i=0;$i<=5;$i++): ?>
<tr><td><?php echo $i ?></td><td><?php echo ($i*2) ?></td></tr>
<?php endfor; ?>
</table>
</body>
</html>
