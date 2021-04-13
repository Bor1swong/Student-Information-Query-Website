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
					if(isset($_SESSION["status"]) && $_SESSION["status"]==1){
				?>
				<div class="row">
				<div class="panel panel-default">
				<div class="panel-body">
				<form class="form-horizontal" action="mark_add_do.php" method="post" enctype="multipart/form-data">
				  <div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">上传成绩</label>
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
					</div>
				</div>
				<?php }?>
				<div class="row">
				<form class="form-inline" role="form" action="" method="post">
				  <div class="form-group">
					<label class="sr-only" for="name">姓名</label>
					<input type="text" name="title" class="form-control" id="name" placeholder="姓名">
				  </div>
				  
				  
				  <button type="submit" class="btn btn-default">提交</button>
				</form>
				<table class="table table-hover table-bordered">
				  <thead>
					<tr>
					  <th>姓名</th>
					  <th>课程</th>
					  <th>成绩</th>
					</tr>
				  </thead>
				  <tbody>
					<?php
						if(isset($_POST["title"])){
							$title=$_POST['title'];
							$sql="select * from mark where name like '%$title%'";
							
						}else{
							
						$sql="select * from mark";
						}
						$result = $mysqli->query($sql);
						
						if($result->num_rows > 0){
							while($row = $result->fetch_assoc()){
					?>
					<tr>
					  <td><?php echo $row['name'];?></td>
					  <td><?php echo $row['title'];?></td>
					  <td><?php echo $row['mark'];?></td>
					</tr>
					<?php
							}
						}
					?>
				  </tbody>
				</table>
				</div>
				
			</div>
			
			<div class="col-md-12">
				<?php include('footer.php');?>
			</div>
		</div>
	</div>

    
  </body>
</html>