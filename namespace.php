<?php
	include("ns.php");
	include("dump.lib.php");
?>
<html>
	<head>
		<title>Page Title Goes Here</title>
		<style>
			<?php Dump::css() ?>
		</style>
		<script type="text/javascript" src="jquery.js"></script>
		<script type="text/javascript">
			<?php Dump::js() ?>
		</script>
	</head>
	<body>
<?php
$sample= array(
'hello'=>"world",
'one'=>1,'two'=>2,
'three' => array(
					'four'=>4,
					'ram'=>'Hello World',
					'int'=>array('li'=>'long int',
								'si'=>'short int',
								'number'=>'89',
								'man' => array(
												'fm'=>'Female',
												'm'=>'Male',
												'fm'=>array(
															'sfm'=>'shortFemale'
													),
								'm'=>array(
										'tm'=>'tall Man'
									)
							)
					)
			)
);
$o = new stdClass();
$o->v = new stdClass();
$o->v->v = new stdClass();
print_r($o);
Dump::r($o);
?>
	</body>
</html>
