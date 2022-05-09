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
			echo "<script>alert('捐赠信息提交成功，等待管理员审核！');window.location.href='about.php'</script>";
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
			<h1 class="t_nav"><span>一方有难  八方支援  万众一心  众志成城</span><a href="index.php" class="n1">系统首页</a><a href="about.php" class="n2">关于系统</a></h1>
			<div class="ab_box">
				<div class="leftbox">
					<div class="newsview">
						<div class="news_infos">
							<h1 align="center" style="font-size: 36px; margin-bottom: 20px;">城市应急救援物资平台</h1>
							<p>新中国成立以来，我国自然灾害救助工作取得了举世瞩目的成就。不仅切实保障了救济群众的基本生活，且随我国宏观经济政策和客观形势的进一步变化，不断进行改革，逐步开创了一条颇具中国特色的自然灾害救助道路。一是完善了灾害管理体制。我国实行各级党委和政府的统一领导，部门组织负责，灾害救助分级管理体制。2005 年1月，国务院决定将“中国国际减灾委员会”更名为“国家减灾委员会”，减灾救灾管理体制进一步健全。二是健全了救灾预案体系。2005 年国务院颁布了《国家自然灾害救助应急预案》，全国所有的省、市、自治区和大部分地市以及大部分县都建立了灾害应急预案体系，达到出现灾情都能够按照预案启动应急救灾机制，第一时间展开救助工作。三是建立了灾害预警体系。基本能够做到在最短的时间内尽可能最快捷地发布灾情信息，使人们能够避险逃生，使政府和社会能够掌握救灾工作的主动权。四是建立了救灾物资储备体系。中央和地方都建立了救灾物资储备库，要保证在灾情发生的24小时内紧急调运救灾物资，发放到受灾群众的手里。五是加强了减灾救灾知识的宣传教育。通过减灾救灾知识的宣传普及和教育，全民减灾意识和避灾自救能力得到明显提高。六是完善了相关法律法规，如1998年1月《中华人民共和国防洪法》、1998年 3 月《中华人民共和国防震减灾法》，针对灾害的应急管理都有具体的法规条文2006 年1月国务院颁布《国家自然灾害救助应急预案》、《国家地震应急预案》等相关法律法规，初步建立起了我国防灾救灾体系，标志着我国防灾救灾法律体系已经有了很大的发展。<br />
								<br /> 　　在各种灾难中，地震、飓风等自然灾害无疑是危害最大且最让人类无能为力的，每每都会严重损害国民经济，危害人民生命安全。突发性很强的自然灾害发生的地区，往往没有赈灾物资储备或储备的数量和种类有限。从我国应急物资供应方面所表现出的被动局面看，中国在应急机制的建立，应急物资保障，紧急状态法律法规的制定等方面存在诸多不足，为使突发性自然灾害造成的损失极小化，急需针对自然灾害的应急物流人流的规律、保障机制、实现途径等进行研究，进而建立一套适合我国国情的自然灾害应急救助系统。
								<br />	<img src="images/336.jpg" >
								<br /> 
								   　　城市应急救援物资平台是人们日常生活工作和政务平台不可缺少的一部城市应急救援物资平台适应当下人们灾后重建生活的要求，可对灾害事件进行回顾，帮助用户直观、清晰地了解灾害事件的发展历程，辅助用户回顾总结经验、调整策略、提高自然灾害应急响应与防范能力。预报预警工作提供了科学化、智能化的技术支持，使得防灾减灾有了充分的科学依据。自然灾害救助系统可以有效整合灾害监管相关部门现有数据资源，覆盖灾害管理各领域，凭借人机交互实现自然日常监测、灾害监测、灾害事件复现等多种功能，协助监管部门形成及时监测、信息共享、快速反应的工作机制，提高防灾减灾工作效能。
								<br />
								
						
						</div>
					</div>
				</div>
				<div class="rightbox">
					<div class="aboutme">
						<h2 class="hometitle">城市应急救援物资平台</h2>
						<div class="avatar"> <img src="images/999.png"> </div>
						<div class="ab_con">
							<p align="center">科学防控</p>
							<p align="center">精准支援</p>
							<p align="center">团结一致</p>
							<p align="center">众志成城</p>
						</div>
					</div>
					<div class="weixin">
						<h2 class="hometitle"></h2>
						<ul><img src="images/navbg.png"></ul>
					</div>
			</div>
		</article>
		<?php require_once "./public/footer.php"; ?>
		<?php require_once "./public/scrollTop.php"; ?>
		<script src="js/nav.js"></script>
	</body>

</html>