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
			<h1 class="t_nav"><span>一方有难  八方支援  万众一心  众志成城  </span><a href="index.php" class="n1">系统首页</a><a href="gbook.php" class="n2">留言</a></h1>
			<div class="ab_box">
				<div class="leftbox">
					<div class="newsview">
						<div class="news_infos"> 暂无留言</div>
					</div>
				</div>
			<div class="rightbox">
				<div class="aboutme">
					<h2 align="center" class="hometitle"> 城市应急救援物资平台</h2>
					<div class="avatar"> <img src="images/005.png"> </div>
					<div class="ab_con">
						<p align="center">一方有难</p>
						<p align="center">八方支援</p>
						<p align="center">万众一心</p>
						<p align="center">众志成城</p>
					</div>
			  </div>
				<div class="weixin">
					<h2 class="hometitle"></h2>
					<ul><img src="images/navbg.png"></ul>
				</div>
			</div>
			</div>
		</article>
		<?php require_once "./public/footer.php"; ?>
		<?php require_once "./public/scrollTop.php"; ?>
		<script src="js/nav.js"></script>
	</body>

</html>