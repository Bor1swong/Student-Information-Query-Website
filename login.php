<?php include('connect.php');?>
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
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-default login-box" >
			<div class="page-header">
			  
				
				<h1 class="text-center">登录</h1>
			</div>
				<div class="panel-body">
				<form class="form-horizontal" action="login_do.php" method="post">
				  <div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">用户名</label>
					<div class="col-sm-10">
					  <input type="text" name="username" class="form-control" id="inputEmail3" placeholder="username">
					</div>
				  </div>
				  <div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">密码</label>
						<div class="col-sm-10">
							<input type="password"  name="password" class="form-control" id="inputPassword3" placeholder="password">
						</div>
				  </div>
				  <div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">身份</label>
					<div class="col-sm-10">
						<label for="sel1">下拉菜单:</label>
						  <select name="status" class="form-control" id="sel1">
							<option value="1">管理者</option>
							<option value="0">普通用户</option>
							
						  </select>
						  
						
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
					  <button type="submit" class="btn btn-primary btn-lg">登录</button>
					  
					</div>
				  </div>
				</form>
						
					</div>
				</div>
			</div>	
			<div class="col-md-12">
				<?php include('footer.php');?>
			</div>
		</div>
	</div>

    
  </body>
</html>