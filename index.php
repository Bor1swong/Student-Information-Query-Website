<?php 
include('connect.php');
$uid=$_SESSION['uid'];
$sql ="SELECT * FROM  user where id ='$uid'";  	
$result = $mysqli->query($sql);

if($result->num_rows > 0){
$row = $result->fetch_assoc();
}		
?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <?php include('head.php');?>
  </head>
  <body>
    <div class="container">
		<div class="row">
			<div class="col-md-12">
			<?php include('nav.php');?>
			</div>
			<div class="col-md-3">
				<?php include('left.php')?>
			</div>	
			<div class="col-md-9">
				<div class="row">
				<h3>管理者</h3>
				<?php
					$sql="select * from user where status ='1'";
					$result = $mysqli->query($sql);
					
					if($result->num_rows > 0){
						while($row = $result->fetch_assoc()){
				?>
				
				<div class="col-md-3">
					<div class="thumbnail">
					  <img src="uploads/<?php echo $row['image'];?>" alt="">
					  <div class="caption">
						<h4><?php echo $row['name'];?></h4>
						<p>介绍:<?php echo $row['content'];?></p>
					  </div>
					</div>
				</div>
				<?php 	
						}
					}
				?>
				</div>
				<div class="row">
				<h3>普通用户</h3>
				<?php
					$sql="select * from user where status ='0'";
					$result = $mysqli->query($sql);
					
					if($result->num_rows > 0){
						while($row = $result->fetch_assoc()){
				?>
				
				<div class="col-md-3">
					<div class="thumbnail">
					  <img src="uploads/<?php echo $row['image'];?>" alt="">
					  <div class="caption">
						<h4><?php echo $row['name'];?></h4>
					  </div>
					</div>
				</div>
				<?php 	
						}
					}
				?>
				</div>
			</div>
			<div class="col-md-12">
				<?php include('footer.php');?>
			</div>
		</div>
	</div>

    
  </body>
</html>