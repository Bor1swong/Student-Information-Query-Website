<?php 
include('connect.php');

		
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
						if(!isset($_SESSION["name"]))
						{
					?>
					
						<table class="table table-hover table-bordered">
						  <thead>
							<tr>
							  <th>姓名</th>
							  <th>课程</th>
							  
							</tr>
						  </thead>
						  <tbody>
							<?php
								$sql="select * from user";
								$result = $mysqli->query($sql);
								
								if($result->num_rows > 0){
									while($row = $result->fetch_assoc()){
							?>
							<tr>
							<td><?php echo $row['name'];?></td>
							<td><?php echo $row['class'];?></td>
							</tr>
							<?php 	
									}
								}
							?>
						  </tbody>
						</table>
					
					<?php
						}
						else
						{
						$uid = $_SESSION['uid'];
						$sql="select * from user where id = '$uid'";
							$result = $mysqli->query($sql);
							
							if($result->num_rows > 0){
								$row = $result->fetch_assoc();
					?>
					
						<ol class="breadcrumb">
						  <li class="breadcrumb-item"><a href="index.php">首页</a></li>
						  <li class="breadcrumb-item active">我的课程</li>
						</ol>
						<div class="panel panel-default">
							<div class="panel-body">
						<form class="form-horizontal"  action="class_edit.php" method="post">
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">我的课程</label>
							<div class="col-sm-10">
								<input type="text" name="class" class="form-control" id="inputEmail3" placeholder="" value="<?php echo $row['class']?>">
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
							  <button type="submit" name="Submit"  class="btn btn-primary">确定</button>
							  
							</div>
						</div>
						</form>
						</div>
					</div>
					</div>
					</div>
				
					<?php
								
							}
						}
					?>
					
			</div>
			<div class="col-md-12">
				<?php include('footer.php');?>
			</div>
		</div>
	</div>

    
  </body>
</html>