<?php 
	require_once "./admin/lib/init.php" ;

	//查询所有的友链
	$sql="select * from link where udit=1";
	$comms=mGetAll($sql);

	

	//友链提交
	if (!empty($_GET)){
		$link_name=$_GET['link_name'];
		$link_add=$_GET['link_add'];
		$link_tel=$_GET['link_tel'];
		$link_des=$_GET['link_des'];
		//判断名称不能为空
		if($link_name==""){
			echo "<script>alert('姓名不能为空！');window.location.href='link.php'</script>";
			exit;
		}
		$sql="insert into link (link_name,link_add,link_tel,link_des) values ('$link_name','$link_add','$link_tel','$link_des')";
		$res=mQuery($sql);
		//判断友链是否提交成功
		if($res){
			//跳转到上个页面
			$ref=$_SERVER['HTTP_REFERER'];
			echo "<script>alert('救助信息提交成功，等待管理员审核！');window.location.href='link.php'</script>";
		}
	}

?>
<!doctype html>
<html>

	<head>
		<meta charset="utf-8">
		<title>城市应急救援物资平台</title>
		<?php require_once "./public/head.php"; ?>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="css/base.css" rel="stylesheet">
		<link href="css/index.css" rel="stylesheet">
		<link href="css/m.css" rel="stylesheet">
		<link href="css/link.css" rel="stylesheet">
		<style type="text/css">
		body,td,th {
	color: #FFF;
}
        </style>
		<script src="js/jquery-2.1.1.min.js"></script>

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

	<body text="#FF0033">
		<?php require_once "./public/nav.php"; ?>
		<article>
			<h1 class="t_nav"><span>您现在的位置是：首页 > 救助及捐赠信息 </span><a href="index.php" class="n1">系统首页</a><a href="#" class="n2">救助捐赠中心</a></h1>
			<div class="infos">
				
				<div class="news_pl">
		
					<ul>
					  <h3 align="left" class="litle">城市应急救援物资平台    救助及捐赠信息</h3>
                      <p align="left"><span class="autor">紧急应急中心相关说明：<br>
请用户根据实际情况依法进行发布提交救助信息,否则将承担相应的法律责任！</span>                      </p>
                      <h4>&nbsp;</h4>
					  <h4 class="n2">救助信息发布</h4>
					  <div class="links-box container-fluid"><div class="row">

					  <?php foreach($comms as $c) { ?>
					  <div class="col-lg-2 col-6 col-md-3 links-container" title="<?php echo $c['link_des'] ?>">
								  <a href="<?php echo $c['link_add'] ?>" target="_blank" class="links-link" rel="nofollow">
								  <div class="links-item">
								    <div class="links-title">
									  <h3><?php echo $c['link_name'] ?></h3>
									  <h5><?php echo $c['link_add'] ?></h5>
									  <h4><?php echo $c['link_des'] ?></h4>
								      </div>
							      </div>
								  </a>
							    </div>
					  <?php } ?>
					  <br>
					  <h3>&nbsp;</h3></div>   
						
					  </div>
					</ul>
				</div>
			</div>
			<?php require_once "./public/sidebar.php" ?>
		</article>
		<?php require_once "./public/footer.php"; ?>
		<?php require_once "./public/scrollTop.php"; ?>
		<script src="js/nav.js"></script>
	</body>

</html>