<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	
	<?php include('connect.php'); include('master.php'); ?>
	<?php ?>


	<div class="">
		<h2 style="text-align: center;color: blue;">DANH SÁCH THỰC TẬP SINH</h2>
		<table class="table" style="width: 1800px;">
			<thead>
				<tr>
					<th>id</th>
					<th>Avatar</th>
					<th>Tên</th>
					<th>Ngày sinh</th>
					<th >giới tính</th>
					<th>Email</th>
					<th>địa chỉ</th>
					<th>Ngày vào thực tập</th>
					<th>t/g có mặt ở Công ty</th>
					<th>Cam kết</th>
					<th>CMNN</th>
					<th>PTDC</th>
					<th>biển số xe</th>
					<th>Review lần 1</th>
					<th>Review lần 1</th>
					<th>Đánh giá</th>
					<th>Sửa</th>
					<th>Xóa</th>
				</tr>
			</thead>
			<tbody>	
				<?php 
				$row_sql="SELECT * FROM thuctapsinh";
				$row_thuchien=mysqli_query($conn,$row_sql);
				while($dulieu =mysqli_fetch_array($row_thuchien)){
					?>			
					<tr class="">
						<td><?php echo $dulieu['id']; ?></td>
						<td ><img src="<?php echo $dulieu['avatar']; ?>" style="width: 200px;">  </td>
						<td><?php echo $dulieu['ten']; ?> </td>
						<td><?php echo $dulieu['ngaysinh']; ?></td>
						<td><?php echo $dulieu['gioitinh']; ?></td>
						<td><?php echo $dulieu['email']; ?></td>
						<td><?php echo $dulieu['diachi']; ?></td>
						<td><?php echo $dulieu['ngayvao']; ?></td>
						<td><?php echo $dulieu['thoigiancomat']; ?></td>
						<td><?php echo $dulieu['camket']; ?></td>
						<td><?php echo $dulieu['cmnn']; ?></td>
						<td><?php echo $dulieu['phuongtien']; ?></td>
						<td><?php echo $dulieu['bienso']; ?></td>
						<td><?php echo $dulieu['reviewlan1']; ?></td>
						<td><?php echo $dulieu['reviewlan2']; ?></td>
						<td><?php echo $dulieu['danhgia']; ?></td>						
						<td>
							<a href="edit.php?id=<?php echo $dulieu['id'] ?>" title="sửa"><img src="uploads/edit.png" width="25px">
							</a>
						</td>
						<td>
							<a onclick=" return confirm('bạn có chắc muốn xóa không') " href="delete.php?id=<?php echo $dulieu['id']; ?>" ><img src='uploads/delete.jpg' width='25px' >
							</a>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>

</body>
</html>