<html>
	<head>
		<title>CSV Consolidation Tool</title>
		<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
		<script src="../bootstrap/js/bootstrap.min.js"></script>
		<script src="../bootstrap/js/bootstrap.js"></script>
		<script src="../bootstrap/js/bootstrap.bundle.js"></script>
		<script src="../jquery/jquery.min.js"></script>
		<script type="text/javascript">
		$(window).on('load', function() {
			$("#myModal").modal({backdrop: false});
			$('#myModal').modal('show');
		});
		</script>
	</head>
	<body>
		<div class="modal fade" id="myModal" role="dialog">
			<div class="modal-dialog">
                <div class="modal-content">
					<div class="modal-header bg-primary text-white" style="padding:10px 20px;">
						<h4><b>Message</b></h4>           
					</div>
					<div class="modal-body" style="padding:40px 50px;">
                    	<center><h5>Compiling of csv files already done.</h5>
                    		<button onclick = "window.location.href='main.php';" class='btn btn-primary' id='save' name="save">Ok</button>
						</center>                
                  </div>
                </div>
			</div>
		</div>
	</body>
</html>