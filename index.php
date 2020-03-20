<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml' lang='en' xml:lang='en' style='height:100%'>
<head>
	<title>APP</title>
	
	<meta http-equiv='content-type' content='text/html;charset=UTF-8'>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv='content-script-type' content='text/javascript'>
	
	<link type='image/x-icon' rel='icon' href='include/logo.ico'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/js/bootstrap.min.js"></script> 
	<link rel='stylesheet' href='style.css'>
	
</head>
<body>
<?php

	if(isset($_GET["menu"])==false) $_GET["menu"]="";
	if(isset($_GET["flag"])==false) $_GET["flag"]="";

	if($_GET["menu"]=="") {
		echo f_menu();
	} else {
		$flag=explode("@|@",$_GET["flag"]);
		$con=mysqli_connect("localhost","root","","app");
		$q=mysqli_query($con,"SELECT * FROM user WHERE user='$flag[0]' AND password='".md5($flag[1])."'");
		if(mysqli_num_rows($q)==1){
			while($h=mysqli_fetch_array($q)){
				echo "@@@Login Berhasil@@@";
			}
		}
	}

// echo f_menu();

function f_menu(){
	$menu=
		"<div class='container'>
			<div class='panel with-nav-tabs panel-success'>
				<div class='panel-heading'>
					<ul class='nav nav-tabs'>
						<li id='tab0' class='active'><a href='#menu0' data-toggle='tab'>Login (Menu 0)</a></li>
						<li id='tab1'><a href='#menu1' data-toggle='tab'>Menu 1</a></li>
						<li id='tab2' class='hide' ><a href='#menu2' data-toggle='tab'>Menu 2</a></li>
						<li id='tab3' class='hide' ><a href='#menu3' data-toggle='tab' >Menu 3</a></li>
						<li id='tab4' class='hide' ><a href='#menu4' data-toggle='tab' >Menu 4</a></li>
						<li id='tab5' class='hide' ><a href='#menu5' data-toggle='tab' >Menu 5</a></li>
						<li id='tab6' class='hide' ><a href='#menu6' data-toggle='tab' >Menu 6</a></li>
						<li id='tab7' class='hide' ><a href='#menu7' data-toggle='tab' >Menu 7</a></li>
						<li id='tab8' class='hide' ><a href='#menu8' data-toggle='tab' >Menu 8</a></li>
						<li id='tab9' class='hide' ><a href='#menu9' data-toggle='tab' >Menu 9</a></li>
					</ul>
				</div>
				<div class='panel-body' style='height:500px;overflow-y:scroll'>
					<div class='tab-content'>
						<div class='tab-pane fade in active' id='menu0'>

							<div class='col-md-6'>
								
								<form action=''>
									<div class='form-group'>
										<label for='username' class='text-info'>Username:</label><br>
										<input type='text' name='username' id='username' class='form-control'><br>
									</div>
									<div class='form-group'>
										<label for='password' class='text-info'>Password:</label><br>
										<input type='password' name='password' id='password' class='form-control'><br>
									</div>

									<button class='btn btn-success' onclick=f_login()>Login</button>
								</form>
							</div>

						</div>
						<div class='tab-pane fade' id='menu1'>-Menu 1-</div>
						<div class='tab-pane fade' id='menu2'>-Menu 2-</div>
						<div class='tab-pane fade' id='menu3'>-Menu 3-</div>
						<div class='tab-pane fade' id='menu4'>-Menu 4-</div>
						<div class='tab-pane fade' id='menu5'>-Menu 5-</div>
						<div class='tab-pane fade' id='menu6'>-Menu 6-</div>
						<div class='tab-pane fade' id='menu7'>-Menu 7-</div>
						<div class='tab-pane fade' id='menu8'>-Menu 8-</div>
						<div class='tab-pane fade' id='menu9'>-Menu 9-</div>
					</div>
				</div>
			</div>
		</div>";
		
	return $menu;
}
?>

<script>
	function f_login() {
		// alert("Selamat KAKA "+ $("#username").val()+ " mendapatakan kesempatan untuk berkarir di LP3I CILODONG ONLEN klik OK untuk lanjutkan")
		// alert("index.php?menu=login&flag="+$("#username").val()+"@|@"+$("#password").val())

		$.get("index.php?menu=login&flag="+$("#username").val()+"@|@"+$("#password").val(),
			function($data){
				$data = $data.split("@@@");
				alert($data[1])
			}
		);
	}
</script>

</body>
</html>