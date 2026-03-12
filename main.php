<html>
	<head>
		<title>CSV Consolidator Tool</title>
		<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
		<script src="../bootstrap/js/bootstrap.min.js"></script>
		<script src="../bootstrap/js/bootstrap.js"></script>
		<script src="../bootstrap/js/bootstrap.bundle.js"></script>
		<script src="../jquery/jquery.min.js"></script>
		<script>
			$(document).ready(function(){
				$("#myform").on("submit", function(){
				$("#pageloader").fadeIn();
				});//submit
				});//document ready
		</script>

		<style>
			#pageloader
			{
			background: rgba( 255, 255, 255, 0.8 );
			display: none;
			height: 100%;
			position: fixed;
			width: 100%;
			z-index: 9999;
			}

			#pageloader img
			{
				margin: auto;
			}
		</style>
	</head>
	<body>
		<br/><br/><br/>
		<center>
			<div class="card text-center col-md-4">
				<div class="card-header bg-primary text-white">
					<h3>CSV Consolidator Tool</h3>
				</div>
				<div class="card-body">
					<form id="myform" action="read.php" method="post" enctype="multipart/form-data">
						<div class="mb-3">
							<label for="formFileMultiple" class="form-label">Upload CSV Files</label>
							<input required class="form-control" type="file" id="uploadedfiles" name="uploadedfiles[]" multiple><br/>
							<label class="form-label">Output Name</label>
							<input required class="form-control" type="text" id="output_name" name="output_name">
						</div>
						<input type="submit" class="btn btn-primary text-white">
					</form>
				</div>
			</div>

			<div id="pageloader">
				<img src="images/loader-large.gif" alt="processing..." />
			</div>
		</center>
	</body>
</html>