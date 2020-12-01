<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<title>Document</title>

<body>


	<?php include('connect.php'); include('master.php');?>

	<?php
	$id=$_GET['id'];//lấy id truyền vào
	$row_sql="SELECT * FROM thuctapsinh WHERE id='$id' ";
	$row_thucthi=mysqli_query($conn,$row_sql);
	$row_dulieu=mysqli_fetch_array($row_thucthi); //hiển thị dl cần sửa ra form

	$err='';
	if(isset($_POST["btnsua"])) {
		$ten=$_POST['ten'];
		$ngaysinh=$_POST['ngaysinh'];
		$gioitinh = $_POST["gioitinh"];
		$email=$_POST['email'];		
		$diachi=$_POST['diachi'];
		$ngayvao=$_POST['ngayvao'];
		$thoigiancomat=$_POST['thoigiancomat'];
		$camket=$_POST['camket'];
		$cmnn=$_POST['cmnn'];
		$phuongtien=$_POST['phuongtien'];
		$bienso=$_POST['bienso'];
		$reviewlan1=$_POST['reviewlan1'];
		$reviewlan2=$_POST['reviewlan2'];
		$danhgia=$_POST['danhgia'];
		$target_dir = "uploads/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

		if(empty($_POST['ten'])||empty($_POST['ngaysinh'])||empty($_POST['email'])||empty($_POST['diachi'])||empty($_POST['ngayvao'])||empty($_POST['cmnn'])||empty($_POST['thoigiancomat'])||empty($_POST['phuongtien'])||empty($_POST['bienso'])||empty($_POST['reviewlan1'])||empty($_POST['reviewlan2'])||empty($_POST['danhgia'])){
			$err= "<p style='color:red;'>bạn cần nhập đầy đủ thông tin!</p>";
		}else{
			if(empty($_FILES['fileToUpload']['name'])){
				$anhcu= $row_dulieu['avatar'];
				$sql="SELECT * FROM thuctapsinh WHERE ten='$ten' AND email='$email' ";
				$thucthi=mysqli_query($conn,$sql);

				if(mysqli_num_rows($thucthi)>0){
					echo "<p style='color:red;text-align: center;'>đã tồn tại trong CSDL!</p>";
				}else{
					$sql_update="UPDATE thuctapsinh SET avatar='$anhcu', ten='$ten',ngaysinh='$ngaysinh',gioitinh='$gioitinh',email='$email',diachi='$diachi',ngayvao='$ngayvao',thoigiancomat='$thoigiancomat',camket='$camket',cmnn='$cmnn',phuongtien='$phuongtien',bienso='$bienso',reviewlan1='$reviewlan1',reviewlan2='$reviewlan2',danhgia='$danhgia' WHERE id='$id' ";

					mysqli_query($conn,$sql_update);
					echo "<p style='color:green;text-align: center;'>đã sửa thành công!</p>";	
					header('location:index.php');
				}				

			}else if(!empty($_FILES['fileToUpload']['name'])){
				$uploadOk = 1;
				$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Kiểm tra xem tập tin hình ảnh là hình ảnh thật hay hình ảnh giả
				$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
				if($check !== false) {
					echo "File is an image - " . $check["mime"] . ".";
					$uploadOk = 1;
				} else {
					echo "Tệp không phải là hình ảnh.";
					$uploadOk = 0;
				}
// Kiểm tra xem tập tin đã tồn tại chưa
				if (file_exists($target_file)) {
					echo "Xin lỗi, tập tin đã tồn tại.";
					$uploadOk = 0;
				}
// Kiểm tra kích thước tập tin
				if ($_FILES["fileToUpload"]["size"] > 900000) {
					echo "Xin lỗi, tập tin của bạn quá lớn.";
					$uploadOk = 0;
				}
// Cho phép các định dạng tệp nhất định
				if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
					&& $imageFileType != "gif" ) {
					echo "Xin lỗi, chỉ cho phép các tệp JPG, JPEG, PNG & GIF.";
				$uploadOk = 0;
			}
//Kiểm tra xem $ uploadOk có bị lỗi thành 0 không
			if ($uploadOk == 0) {
				echo "Xin lỗi, tập tin của bạn không được tải lên.";
// Nếu mọi thứ đều ổn, hãy thử tải lên tập tin
			} else {				
				if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file)) {
					echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " Đã được tải lên.";
				} else {
					echo "Xin lỗi, đã xảy ra lỗi khi tải lên tệp của bạn.";
				}
			}

			$sql="SELECT * FROM thuctapsinh WHERE ten='$ten' AND email='$email' ";
			$thucthi=mysqli_query($conn,$sql);

//kiểm tra xemc có bản ghi nào trùng trong csdl không
			if(mysqli_num_rows($thucthi)>0){
				echo "<p style='color:red;text-align: center;'>đã tồn tại trong CSDL!</p>";
			}else{
				$sql_update="UPDATE thuctapsinh SET avatar='$target_file', ten='$ten',ngaysinh='$ngaysinh',gioitinh='$gioitinh',email='$email',diachi='$diachi',ngayvao='$ngayvao',thoigiancomat='$thoigiancomat',camket='$camket',cmnn='$cmnn',phuongtien='$phuongtien',bienso='$bienso',reviewlan1='$reviewlan1',reviewlan2='$reviewlan2',danhgia='$danhgia' WHERE id='$id' ";

				mysqli_query($conn,$sql_update);				
				echo "<p style='color:green;text-align: center;'>đã sửa thành công!</p>";	
				header('location:index.php');
			}
		}

	}

}
?>

<div class="container">
	<div class="row text-center">
		<div class="col-sm-11 col-sm-offset-1">
			<h3 style="text-align: center;color: green;">SỬA THỰC TẬP SINH</h3>
			<?php echo $err; ?>
			<form  class="form-horizontal" action="" method="post" enctype="multipart/form-data">

				<div class="form-group">
					<label class="control-label col-sm-3 ">Chọn file để upload:</label>
					<div class="col-sm-6 ">
						<input  class="form-control"   type="file" name="fileToUpload" id="fileToUpload" multiple="multiple" >
						<td><img src="<?php echo $row_dulieu['avatar']; ?>" style="width: 250px;height: 300px;object-fit: contain;"></td>			
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-sm-3 ">Họ và tên</label>
					<div class="col-sm-6 ">
						<input  type="text" class="form-control" placeholder="nhập họ và tên" name="ten" value="<?php echo $row_dulieu['ten']; ?>">
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-sm-3 ">Ngày sinh</label>
					<div class="col-sm-6 ">
						<input type="date" class="form-control" placeholder="nhập ngày sinh" name="ngaysinh" value="<?php echo $row_dulieu['ngaysinh']; ?>">
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-sm-3 ">giới tính</label>
					<div class="col-sm-6 ">
						<input type="radio"  name="gioitinh" value="nu" <?php if($row_dulieu['gioitinh']=='nu') echo 'checked';  ?>>Nữ
						<input type="radio" name="gioitinh" value="nam" <?php if($row_dulieu['gioitinh']=='nam') echo 'checked';  ?>>Nam
						<input type="radio" name="gioitinh" value="khac" <?php if($row_dulieu['gioitinh']=='khac') echo 'checked';  ?>>Khác  
						<br>						
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-sm-3 " for="email">Email:</label>
					<div class="col-sm-6 ">
						<input type="email" class="form-control" id="email" placeholder="email" name="email" value="<?php echo $row_dulieu['email']; ?>">
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-sm-3 ">địa chỉ</label>
					<div class="col-sm-6 ">
						<input type="text" class="form-control" placeholder="địa chỉ" name="diachi" value="<?php echo $row_dulieu['diachi']; ?>">
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-sm-3 ">Ngày vào thực tập</label>
					<div class="col-sm-6 ">
						<input type="date" class="form-control" placeholder="Ngày vào thực tập" name="ngayvao" value="<?php echo $row_dulieu['ngayvao']; ?>">
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-sm-3 ">Thời gian có mặt ở Công ty</label>
					<div class="col-sm-6 ">
						<textarea class="form-control" type="text" rows="5" name="thoigiancomat" value=""><?php echo $row_dulieu['thoigiancomat']; ?></textarea>
					</div>
				</div>

				<br>
				<div class="form-group">
					<label class="control-label col-sm-3 ">Ký cam kết học việc Và Cam kết Bảo mật thông tin</label>
					<div class="col-sm-6 ">
						<input type="radio" checked name="camket" value="dongy" <?php if($row_dulieu['camket']=='dongy') echo "checked"; ?> >Đồng ý
						<input type="radio" name="camket" value="khongdongy" <?php if($row_dulieu['camket']=='khongdongy') echo "checked"; ?> >Không đồng ý
						<br>						
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-sm-3 ">CMNN</label>
					<div class="col-sm-6 ">
						<input type="text" class="form-control" placeholder="CMNN" name="cmnn" value="<?php echo $row_dulieu['cmnn']; ?>">
					</div>
				</div>


				<div class="form-group">
					<label class="control-label col-sm-3 ">phương tiện di chuyển</label>
					<div class="col-sm-6 ">
						<input type="text" class="form-control" placeholder="phương tiện di chuyển" name="phuongtien" value="<?php echo $row_dulieu['phuongtien']; ?>">
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-sm-3 ">biển số xe</label>
					<div class="col-sm-6 ">
						<input type="text" class="form-control" placeholder="biển số xe" name="bienso" value="<?php echo $row_dulieu['bienso']; ?>">
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-sm-3 "><h3>hạn Reviews</h3></label>
					<br>
				</div>

				<div class="form-group">
					<label class="control-label col-sm-3 ">lần 1</label>
					<div class="col-sm-3 ">
						<input type="date" class="form-control" placeholder="lan1" name="reviewlan1" value="<?php echo $row_dulieu['reviewlan1']; ?>">
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-sm-3 ">lần 2</label>
					<div class="col-sm-3 ">
						<input type="date" class="form-control" placeholder="lan2" name="reviewlan2" value="<?php echo $row_dulieu['reviewlan2']; ?>">
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-sm-3 ">Đánh giá</label>
					<div class="col-sm-6 ">
						<textarea class="form-control" type="text" rows="5" name="danhgia" value=""><?php echo $row_dulieu['danhgia']; ?></textarea>
					</div>
				</div> 

				<input class="form-control btn-success" type="submit" name="btnsua" value="Sửa" ></input>
				<input class="form-control btn-danger" type="reset" name="btnreset" value="nhập lại"></input>
			</form>
		</div>
	</div>
</div>

</body>
</html>



