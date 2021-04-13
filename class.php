<?php 
include('connect.php');

$sql ="SELECT * FROM  user where id ='1'";  	
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
				<?php
						if (!session_id()) session_start();
						if(isset($_SESSION["status"]) && $_SESSION["status"]==1)
						{
					?>
				<div class="row">
				<form class="form-horizontal" action="class_edit_do.php" method="post" enctype="multipart/form-data">
					
				  <div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">上传课表</label>
					<div class="col-sm-10">
					
					<input type="file" name="pic[]" value="">
					</div>
					
				  </div>
				 
				  
					
				  
				  <div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label"></label>
				  <div class="col-sm-10">
				  <button  type="submit" class="btn btn-default">确定</button>
				  </div>
				  </div>
				</form>
				</div>
				<?php
						}
				?>
				<div class="row">
				<?php
					$sql="select * from class where id ='1'";
					$result = $mysqli->query($sql);
					
					if($result->num_rows > 0){
						while($row = $result->fetch_assoc()){
				?>
				
				<div class="col-md-12">
					
					  <img src="uploads/<?php echo $row['image'];?>" alt="" width="100%">
					 
					</div>
				</div>
				<?php 	
						}
					}
				?>
				</div>
				
			</div>
			<div class="col-md-12">
				
			</div>
			<div class="col-md-12">
				<?php include('footer.php');?>
			</div>
		</div>
	</div>

    
  </body>
</html>