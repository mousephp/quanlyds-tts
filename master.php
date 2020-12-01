<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap.min.css">
	<script src="vendor/jquery.min.js"></script>
	<script src="vendor/bootstrap.min.js"></script>
</head>

<style type="text/css">
	ul li a{
		color: #9d9d9d;
	}
	ul li{
		list-style: none;
	}
</style>

<body>

	<?php 
	if(!isset($_GET['search'])){
		$search="";
	}else{
		$search=$_GET['search'];
	}		
	?>

	<nav class="navbar navbar-inverse " style="background: #3b6b04;">
		<div class="container-fluid navbar-fixed-top" style="background: #3b6b04;">
			<div class="navbar-header">
				<a class="navbar-brand mauchu" href="index.php">QUẢN LÝ THỰC TẬP SINH</a>
			</div>
			<ul class="nav navbar-nav">				
				<li><a href="index.php">Danh sách thực tập sinh</a></li>
				<li><a href="add.php">Thêm thực tập sinh</a></li>
				<form method="GET"  class="form-horizontal" style="display: inline-block;line-height: 50px;">			
					<ul>
						<li class="dropdown">
							<a class="dropdown-toggle mauchu" data-toggle="dropdown" href="#">Săp sếp thực tập sinh
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li><a href="sort.php?theoten" class="mauchu">theo tên</a></li>
								<li><a href="sort.php?theotuoi" class="mauchu">Theo tuổi</a></li>
								<li><a href="sort.php?ngayvao" class="mauchu">Theo ngày vào làm</a></li>
							</ul>
						</li>
					</ul>
				</form>
			</ul>

			<form class="navbar-form navbar-right" method="GET" action="search.php?search">
				<div class="input-group">
					<input type="text" class="form-control" value="<?php echo $search; ?>" placeholder="Search" name="search">
					<div class="input-group-btn">
						<button class="btn btn-default" type="submit">
							<i class="glyphicon glyphicon-search"></i>
						</button>
					</div>
				</div>
			</form>
		</div>
	</nav>



</body>
</html>
