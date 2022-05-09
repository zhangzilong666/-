<?php
	require_once "./admin/lib/init.php";
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
<!--<script src="js/modernizr.js"></script>-->

<script>
window.onload = function ()
{
	var oH2 = document.getElementsByTagName("h2")[0];
	var oUl = document.getElementsByTagName("ul")[0];
	oH2.onclick = function ()
	{
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
  <h1 class="t_nav"><span>一方有难  八方支援  万众一心  众志成城  </span><a href="index.php" class="n1">系统首页</a><a href="#" class="n2">图文专区</a></h1>
  <div class="picbox">
    <ul>
      <li><a href="/"><i><img src="images/010.png"></i>
        <div class="picinfo">
          <h3>遇到突发洪水灾害时，应该如何做？</h3>
          <span>1.迅速寻找3层以上建筑物，到达高处。2.减少走动，洪水颜色较深，容易掉进打开的井盖以及漏电的变电器。3.拨打求救电话 </span> </div>
        </a></li>
      <li><a href="/"><i><img src="images/331.jpg"></i>
        <div class="picinfo">
          <h3>一方有难  八方支援  河南加油！</h3>
          <span>目前已有七省驰援河南：河北389人驰援、山西262人驰援、江苏489人驰援、安徽300余人驰援、江西392人驰援、山东274人驰援、湖北365人驰援。加油郑州、加油河南！</span> </div>
        </a></li>
      <li><a href="/"><i><img src="images/338.jpg"></i>
        <div class="picinfo">
          <h3>全国疫情最新数据</h3>
          <span>该数据为31个省（自治区、直辖市）本土新增病例，不包含港澳台新增与各地区境外输入病例</span> </div>
        </a></li>
      <li><a href="/"><i><img src="images/332.jpg"></i>
        <div class="picinfo">
          <h3>7.20河南特大自然灾难纪实</h3>
          <span>谁也没有想到，一场雨竟然会下淹了郑州；

谁也没有想到，这场雨来势如此猛烈，河南西北部的几个城市全部沦陷在汪洋之中。

720河南特大自然灾害的突然来袭，让我感受到了，灾难原来离我如此之近。</span> </div>
        </a></li>
      <li><a href="/"><i><img src="images/332.jpg"></i>
        <div class="picinfo">
          <h3>郑州挺住！河南加油！</h3>
          <span>郑州加油！</span> </div>
        </a></li>
    </ul>
    <ul>
      <li><a href="/"><i><img src="images/342.jpg"></i>
        <div class="picinfo">
          <h3>入郑政策有变！郑州发布紧急提醒！</h3>
          <span>郑州市新冠肺炎疫情防控指挥部办公室



就外地来（返）郑人员发出提醒</span> </div>
      </a></li>
      <li><a href="/"><i><img src="images/345.jpg"></i>
        <div class="picinfo">
          <h3>河南省地质灾害防治协会成立</h3>
          <span>12月23日，河南省地质灾害防治协会召开成立大会暨第一届会员代表大会，选举产生了第一届理事会，审议通过了协会章程、会员管理办法等。该协会的成立，对河南省提升地质灾害防治的能力和水平具有重要意义。 据了解，协会由河南省煤田地质局、郑...</span> </div>
        </a></li>
      <li><a href="/"><i><img src="images/340.jpg"></i>
        <div class="picinfo">
          <h3>河南省天气预报</h3>
          <span>本数据由河南省气象局提供...</span> </div>
        </a></li>
      <li><a href="/"><i><img src="images/341.jpg"></i>
        <div class="picinfo">
          <h3>河南省天气预报</h3>
          <span>本数据由河南省气象局提供...</span> </div>
        </a></li>
      <li><a href="/"><i><img src="images/336.jpg"></i>
        <div class="picinfo">
          <h3>永远跟党走，坚决打赢抗疫攻坚战！</h3>
          <span>永远跟党走，坚决打赢抗疫攻坚战！永远跟党走，坚决打赢抗疫攻坚战！</span> </div>
        </a></li>
      <li><a href="/"><i><img src="images/346.jpg"></i>
        <div class="picinfo">
          <h3>全国疫情形势总体平稳</h3>
          <span>国家卫健委疾控局副局长吴良有表示，目前全国疫情形势总体平稳，近期局部地区发生由境外输入引起的本土小范围疫情。</span> </div>
        </a></li>
    </ul>
    <ul>
      <li><a href="/"><i><img src="images/001.png"></i>
        <div class="picinfo">
          <h3>城市应急救援物资平台的设计与实现</h3>
          <span>万众一心  众志成城</span> </div>
        </a></li>
      <li><a href="/"><i><img src="images/005.png"></i>
        <div class="picinfo">
          <h3>河南省行政地图</h3>
          <span>省行政图</span> </div>
        </a></li>
      <li><a href="/"><i><img src="images/v1.jpg"></i>
        <div class="picinfo">
          <h3>坚持梦想  未来可期</h3>
          <span>加油！为生活努力的人！</span> </div>
        </a></li>
      <li><a href="/"><i><img src="images/349.jpg"></i>
        <div class="picinfo">
          <h3>各地密集倡议在外人员就地过年，媒体：要避免上升为刚性要求</h3>
          <span>年关渐近，各地一系列关于“倡导就地过年”、“春节期间非必要不返乡”的公告引发多方关注。</span> </div>
        </a></li>
      <li><a href="/"><i><img src="images/350.jpg"></i>
        <div class="picinfo">
          <h3>河南历史上出现过哪些自然灾害？</h3>
          <span>河南历史上出现过哪些自然灾害？作为一名河南人要了解的知识...</span> </div>
        </a></li>
      
    </ul>
    <div class="blank"></div>
    <div class="pagelist"><a title="Total record">&nbsp;<b>首页</b> </a>&nbsp;&nbsp<a href="/download/index_2.php">上一页</a>&nbsp;<b>1</b>&nbsp;<a href="/download/index_2.php">2</a>&nbsp;<a href="/download/index_2.php">下一页</a>&nbsp;<a href="/download/index_2.php">尾页</a></div>
  </div>
 	<?php require_once "./public/sidebar.php" ?>
</article>
<?php require_once "./public/footer.php"; ?>
<?php require_once "./public/scrollTop.php"; ?>
<script src="js/nav.js"></script>
</body>
</html>
