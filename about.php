<?php 
	require_once "./admin/lib/init.php" ;


	$sql="select * from link where udit=1";
	$comms=mGetAll($sql);


	if (!empty($_GET)){
		$link_name=$_GET['link_name'];
		$link_add=$_GET['link_add'];
		$link_tel=$_GET['link_tel'];
		$link_des=$_GET['link_des'];
	
		if($link_name==""){
			echo "<script>alert('姓名不能为空！');window.location.href='about.php'</script>";
			exit;
		}
		$sql="insert into link (link_name,link_add,link_tel,link_des) values ('$link_name','$link_add','$link_tel','$link_des')";
		$res=mQuery($sql);
		
		if($res){
		
			$ref=$_SERVER['HTTP_REFERER'];
			echo "<script>alert('救助信息提交成功，等待管理员审核！');window.location.href='about.php'</script>";
		}
	}

?>
<!doctype html>
<html>

	<head>
		<meta charset="utf-8">
		<title>发布救助_城市应急救援物资平台</title>
		<?php require_once "./public/head.php"; ?>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="css/base.css" rel="stylesheet">
		<link href="css/index.css" rel="stylesheet">
		<link href="css/m.css" rel="stylesheet">
		<script>
			window.onload = function() {
				var oH2 = document.getElementsByTagName("h2")[0];
				var oUl = document.getElementsByTagName("ul")[0];
				oH2.onclick = function() {
					var style = oUl.style;
					style.display = style.display == "block" ? "none" : "block";
					oH2.className = style.display == "block" ? "open" : ""
				}
			}
		</script>
	</head>

	<body>
		<?php require_once "./public/nav.php"; ?>
		<article>
			<h1 class="t_nav"><span>一方有难  八方支援</span><a href="index.php" class="n1">系统首页</a><a href="about.php" class="n2">发布救助</a></h1>
		  <div class="ab_box">
				<p>&nbsp;</p>
				<p>&nbsp;</p>
				<div class="leftbox">
					<div class="newsview">
						<div class="news_infos">
							<h1 align="center" style="font-size: 36px; margin-bottom: 20px;">发布求救&捐助物资</h1>
							<style type="text/css">
											/*messages*/
											.messages{padding:30px 110px; margin-top: 30px;box-shadow: 1px 1px 5px #756c6c;}
											.messages input,.messages select,.messages textarea{margin:0;padding:0; background:none; border:0; font-family:"Microsoft Yahei";}
											.messlist {height:30px;margin-bottom:20px;}
											.messlist label{float:left;width:100px; height:40px; font-size:10px; line-height:40px; text-align:right;padding-right:10px;}
											.messlist input{float:left;width:300px;height:38px;padding-left:5px;border:#ccc 1px solid;}
											.messlist.textareas{ height:auto;}
											.messlist.yzms input{width:100px;}
											.messlist.yzms .yzmimg{ float:left;margin-left:10px;}
											.messsub{padding:0px 0 0 110px;}
											.messsub input{width:100px; height:35px; background:#ddd; font-size:14px; font-weight:bold; cursor:pointer;margin-right:5px}
											.messsub input:hover{ background:#f60;color:#fff;}
							
										</style>
										<p style="font-size: 24px; text-align:center; ">救助申请提交<span style="font-size: 16px; color: red;">(*管理员审核后方可展示)</span></p>
										<form action="" method="get" class="messages">
											
											<div class="messlist">
											<label>姓名</label>
											<input type="text" placeholder="请输入您的姓名" name="link_name"/>
											<div class="clears"></div>
											</div>
											<div class="messlist">
											<label>地址</label>
											<input type="text" placeholder="请输入您的您的地址" name="link_tel" />
											<div class="clears"></div>
											</div>
											<div class="messlist">
											<label>电话</label>
											<input type="text" placeholder="请输入您的电话" name="link_add" />
											<div class="clears"></div>
											</div>
											<div class="messlist">
											<label>求救&捐助信息</label>
											<input type="text" placeholder="请输入您的求助信息" name="link_des">
											<div class="clears"></div>
											</div>
											
											<div class="messsub">
											<input type="submit" value="提交" style="background:#00a3eb;color:#fff;" />
									
											</div>
										
										</form>    
					  </div>
										
									 
									</ul>
				  </div>
			</div>
				<p>&nbsp;</p>
		    <p>   　　　　
			</p>
		    <p>&nbsp;</p>
		    <p>&nbsp;</p>
		    <p>&nbsp;</p>
				<p><img src="3336.png" width="310" height="328" align="right"></p>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
			<p>&nbsp;</p>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
			<p>&nbsp;</p>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
		  </div>
					</div>
				
				</div>
			
		</article>
		<?php require_once "./public/footer.php"; ?>
		<?php require_once "./public/scrollTop.php"; ?>
		<script src="js/nav.js"></script>
	</body>

</html>