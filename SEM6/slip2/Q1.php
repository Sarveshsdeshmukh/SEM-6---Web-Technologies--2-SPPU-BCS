<!DOCTYPE html>
<html>
<head>
	<title>Assign 1 | Set A | Q2a</title>
	<link rel="stylesheet" type="text/css" href="../../bootstrap.min.css" />
</head>
<body>
	<div class="container mt-5">
		<div class="row">
			<div class="col col-md col-sm col-md-12 col-sm-12 d-flex flex-row align-items-center justify-content-center">
				<form name="pref_form" action="#" class="w-100" method="POST">
					<input type="text" name="font_style" placeholder="Font Style" class="form-control mb-2" />
					<input type="number" name="font_size" placeholder="Font Size"class="form-control mb-2" />
					<input type="color" name="font_color" placeholder="Font Color" class="form-control mb-2" />
					<input type="color" name="bg_color" placeholder="Background Color" class="form-control mb-2" />
					<input type="submit" name="sub" class="btn btn-success btn-sm float-end" value="Submit" />
				</form>
			</div>
		</div>
	</div>
</body>
</html>

<?php
	$font_style = $_POST['font_style'];
	$font_size = $_POST['font_size'];
	$font_color = $_POST['font_color'];
	$bg_color = $_POST['bg_color'];

	if(isset($_POST['sub'])) {
		setcookie('font_style', $font_style, time()+3600);
		setcookie('font_size', $font_size, time()+3600);
		setcookie('font_color', $font_color, time()+3600);
		setcookie('bg_color', $bg_color, time()+3600);
		header("location: Q2.php");
	}
?>
