<?php 
	require_once "./admin/lib/init.php" ;

	

	//分页代码
	$sql="select count(*) from art";  //获取总的文章数
	$num=mGetOne($sql);  //总的文章数
	$curr=isset($_GET['page'])?$_GET['page']:1;  //当前页码数
	$cnt=8;  //每页显示条数
	$page=getPage($num,$curr,$cnt);

	//上一页，下一页
	$prepage=($curr<>1)?$curr-1:$curr;
	$nextpage=($curr<>ceil($num/$cnt))?$curr+1:$curr;

	//文章列表
	$sql = "select art_id,pic,title,des,tags,add_time,pv from art"." order by add_time desc LIMIT ".($curr-1)*$cnt.",".$cnt;

	$data=mGetAll($sql);
	

	//点击排行
	$sql="select art_id,title,pic,des from art order by pv desc LIMIT 3 ";
	$dian=mGetAll($sql);

	//最新发布
	$sql="select art_id,title,pic,des from art order by add_time desc LIMIT 3 ";
	$xin=mGetAll($sql);




?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>首页_城市应急救援物资平台</title>
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
		<img src="https://cdn.jsdelivr.net/gh/Zevs6/blogimg2/img/1572944814982571.jpg" style="display: none;">
		<?php require_once "./public/nav.php"; ?>
		<div class="picshow"> <img src="人们服务.jpeg" width="100%" height="403"> </div>
		<article>
			
			<?php require_once "./public/content.php" ?>
				<div class="pagelist">
					<?php if ($curr==1) {?>
					<a  href="javascript:" class="disabled" >&nbsp;<b>首页</b> </a>&nbsp;&nbsp;
					<a href="javascript:" class="disabled">上一页</a>&nbsp;
					<?php }else { ?>
					<a  href="?page=1" >&nbsp;<b>首页</b> </a>&nbsp;&nbsp;
					<a href="?page=<?php echo $prepage ?>">上一页</a>&nbsp;
					<?php } ?>
					<?php foreach($page as $k=>$v) { ?>
						<?php if ($k==$curr) {?>
							<a href="javascript:" class="active"><?php echo $k ?></a>&nbsp;
						<?php }else{?>
							<a href="index.php?<?php echo $v ?>" ><?php echo $k ?></a>&nbsp;
						<?php }?>
					<?php } ?>

					<?php if ($curr==ceil($num/$cnt)) {?>
						<a href="?page=<?php echo $nextpage ?>"  class="disabled">下一页</a>&nbsp;
						<a href="?page=<?php echo ceil($num/$cnt) ?>"  class="disabled"><b>末页</b></a>
					<?php }else { ?>
						<a href="?page=<?php echo $nextpage ?>">下一页</a>&nbsp;
						<a href="?page=<?php echo ceil($num/$cnt) ?>"><b>末页</b></a>
					<?php } ?>
					
				</div>
			</div>
			
			<div class="sidebar">
				<div class="about">
					<div class="avatar"> <img src="images/005.png" alt=""> </div>
					<p class="abname">城市应急救援物资平台</p>
					<p class="abposition">众志成城 万众一心</p>
					<div class="abtext"> 自然灾害救助工作遵循以人为本、政府主导、分级管理、社会互助、灾民自救的原则。 </div>
				</div>
				
				<div class="search">
					<form action="/e/search/index.php" method="post" name="searchform" id="searchform">
						<input name="keyboard" id="keyboard" class="input_text" value="请输入关键字" style="color: rgb(153, 153, 153);" onfocus="if(value=='请输入关键字'){this.style.color='#000';value=''}" onblur="if(value==''){this.style.color='#999';value='请输入关键字'}" type="text">
						<input name="show" value="title" type="hidden">
						<input name="tempid" value="1" type="hidden">
						<input name="tbname" value="news" type="hidden">
						<input name="Submit" class="input_submit" value="搜索" type="submit">
					</form>
				</div>
				<div class="paihang">
				  <h2 class="hometitle">点击排行</h2>
					<ul>
						<?php foreach($dian as $v) {  ?>
						<li><b><a href="article.php?art_id=<?php echo $v['art_id'] ?>" target="_blank"><?php echo $v['title'] ?></a></b>
							<p><i><img src="<?php echo $v['pic'] ?>"></i><?php echo $v['des'] ?></p>
						</li>
						<?php } ?>
					</ul>
				</div>
				
				
				
				
				
		
			</div>
		</article>
		<div class="blank"></div>
		
		<?php require_once "./public/footer.php"; ?>
		<?php require_once "./public/scrollTop.php"; ?>
		
		<script src="js/nav.js"></script>
	</body>
</html>


