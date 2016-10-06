
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.css">
	<script type="text/javascript" src="../../assets/js/jquery.js"></script>
	<script type="text/javascript" src="../../assets/js/bootstrap.js"></script>
	<script type="text/javascript">
		$(document).ready(function(e){
    		$(".img-check").click(function(){
				$(this).toggleClass("check");
			});
	});
	</script>
	<style type="text/css">
	.check{
    	opacity:0.5;
		color:#996;
	}
	</style>
</head>
<body>

<div class="container">
	<div class="row">
		<form method="get">
		<div class="form-group">	
		<div class="col-md-3"><label class="btn btn-primary"><img src="../../assets/img/icons/medico.jpg" alt="..." class="img-thumbnail img-check"><input type="checkbox" name="chk1" id="item4" value="val1" class="hidden" autocomplete="off"></label></div>
		<div class="col-md-3"><label class="btn btn-primary"><img src="http://content.nike.com/content/dam/one-nike/globalAssets/menu_header_images/OneNike_Global_Nav_Icons_Basketball.png" alt="..." class="img-thumbnail img-check"><input type="checkbox" name="chk2" id="item4" value="val2" class="hidden" autocomplete="off"></label></div>
		<div class="col-md-3"><label class="btn btn-primary"><img src="http://content.nike.com/content/dam/one-nike/globalAssets/menu_header_images/OneNike_Global_Nav_Icons_Football.png" alt="..." class="img-thumbnail img-check"><input type="checkbox" name="chk3" id="item4" value="val3" class="hidden" autocomplete="off"></label></div>
		<div class="col-md-3"><label class="btn btn-primary"><img src="http://content.nike.com/content/dam/one-nike/globalAssets/menu_header_images/OneNike_Global_Nav_Icons_Soccer.png" alt="..." class="img-thumbnail img-check"><input type="checkbox" name="chk4" id="item4" value="val4" class="hidden" autocomplete="off"></label></div>

		</div>
		<input type="submit" value="Check Item" class="btn btn-success">
		
		</form>
	</div>	
</div>

</body>
</html>