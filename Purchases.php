<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Bete's salagdos</title>
	<?php
	require 'header.php';
	require 'navigatorInternal.php';
	?>

	<style type="text/css">
		.container{
			margin-top: 150px;
		}
	</style>
</head>
<body>
	<ul class="collection">
		<li class="collection-item avatar">
			<div class="row">
				<div class="col s12 m12">
					<img src="Images/Produtos/bolinhaqueijocongelado.jpg" alt="" class="circle">
					<span class="title">Title</span>
				</div>
			</div>
			<div class="row">
				<div class="col s10 m10">
					<p>First Line <br>
						Second Line
					</p>
				</div>
				<div class="col s1 m1 center">
					<a href="#!"><i class="material-icons">visibility</i></a>
				</div>
				<div class="col s1 m1 center">
					<a href="#!"><i class="material-icons">delete</i></a>
				</div>
			</div>
		</li>
	</ul>
</body>
</html>