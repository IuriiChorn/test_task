<!DOCTYPE HTML>
<HEAD>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
	<script src="js/global.js" type="text/javascript"></script>
	<script src="js/jquery.dataTables.js" type="text/javascript"></script>
	<meta charset="UTF-8">
	<title>Test service.</title>
</HEAD>
<HTML>
	<BODY>
		
		<div class="col-md-8">
			
			<h2>Test task</h2>
				<!-- <form action="check.php"  method="post">
				<input type="text" class="form-group" name="name">
				<input type="text" class="form-group" name="pass">
				<input type="submit" class="btn btn-default form-group" value="Check">
				</form> -->

			<!-- -- FORM ------------------------------------------------------------ FORM -- -->
			<form action="check.php" class="form-horizontal" role="form" method="post">

			  <div class="form-group">
			    <label for="inputText3" class="col-sm-2 control-label">User name</label>
			    <div class="col-sm-4">
			      <input type="text" class="form-control" id="inputEmail3" placeholder="User name" name="name">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
			    <div class="col-sm-4">
			      <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="pass">
			    </div>
			  </div>

			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" class="btn btn-default">Get data</button>
			    </div>
			  </div>
			</form>
			<!-- -- FORM ------------------------------------------------------------ FORM -- -->
		</div>
	</BODY>
</HTML>