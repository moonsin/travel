<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	    <link rel="stylesheet" href="../Public/css/package/package.css" media="all" type="text/css">
	    <link rel="stylesheet" href="../Public/css/css.css" media="all">
	    <script src="http://libs.baidu.com/jquery/1.8.3/jquery.min.js"></script>
	<title>优惠套餐</title>
	<script>
jQuery(document).ready(function($) {
	$('.theme-login').click(function(){
		$('.theme-popover-mask').fadeIn(100);
		$('.theme-popover').slideDown(200);
	})
	$('.theme-poptit .close').click(function(){
		$('.theme-popover-mask').fadeOut(100);
		$('.theme-popover').slideUp(200);
	})

})
</script>
<link href="../Public/css/calendar.css" rel="stylesheet" type="text/css" />

<script src="../Public/js/Calendar.js"></script>
<script src="../Public/js/jquery.js"></script>
<script src="../Public/js/fun.js"></script>

 <!-- bjqs.css contains the *essential* css needed for the slider to work -->
    <link rel="stylesheet" href="../Public/css/package/bjqs.css">


    <!-- demo.css contains additional styles used to set up this demo page - not required for the slider --> 
    <link rel="stylesheet" href="../Public/css/package/demo.css">
    <script src="../Public/js/package/bjqs-1.3.min.js"></script>



</head>

<body >
		  <STYLE TYPE="text/css">

<!--

BODY {background-image: URL(../Public/images/package/background.png);

background-position:center top;

background-repeat: no-repeat;

}

-->1
</STYLE> 
<div class="quanbu">
	
	<img src="../Public/images/travelsm.png" class="travelsm">
   <img src="../Public/images/personal.png"class="personal">
   <img src="../Public/images/travel.png" class="travel" >
   <img src="../Public/images/makeplan.png" class="makeplan">
   <img src="../Public/images/index.png"class="index">
   <img src="../Public/images/yuan.png"class="yuan">
   <img src="../Public/images/travelbook.png"class="travelbook">
<img src="../Public/images/xuanchuan.png"class="xuanchuan">

<a href="javascript:;"class=" btn-large theme-login" style=""><img src="../Public/images/login.png"   class="login"></a>
<img src="../Public/images/register.png"class="register">



<div class="zhongyang">
<div class="content">
	
<div id="taocanbiaoti" class="taocanbiaoti">
   <?php echo ($scency[0]["name"]); ?>
</div>
<div class="yulantu">
   <div id="banner-fade">

        <!-- start Basic Jquery Slider -->
        <ul class="bjqs">
          <li><img src="img/banner01.jpg" ></li>
          <li><img src="img/banner02.jpg" ></li>
          <li><img src="img/banner03.jpg" title="Automatically generated caption"></li>

        </ul>
        <!-- end Basic jQuery Slider -->

      </div>


</div>
<div class="jiagerili" >
	<div class="calendar">
   <div class="outer clearfix" id="calendarcontainer"> </div></div> 
</div>
<img src="../Public/images/package/youhuijiakuang.png" class="youhuijiakuang">
<div class="youhuijiazi">优惠价: ￥<div class="youhuijia" id="youhuijia"><?php echo ($scency[0]["price"]); ?></div><div class="youhuijiazi2">起</div></div>
<div class="feiyongshuoming" id="feiyongshuoming">
    <?php echo ($scency[0]["descriptionPrice"]); ?>
</div>

<div class="yudinglan">

<form action="" name="taocanyuding" method="post" >
  <div class="taocanyudingziti">出游日期:</div><input name="chufashijianshuru" id="chufashijianshuru" type="text" value="" style="position:absolute;width:195px;left:80px;top:8px;border-radius:4px;"/> <div class="taocanyudingziti">出发城市:</div><input name="chufachengshishuru" id="chufachengshishuru" type="text" value="" style="position:absolute;width:195px;left:80px;top:42px;border-radius:4px;"/><div class="taocanyudingziti">出游人数:</div> <input name="chufarenshuchengren" id="chufarenshuchengren" type="text" value=""style="position:absolute;width:35px;left:80px;top:76px;border-radius:4px;"><div style="position:absolute;left:120px;top:76px;font-family: serif;font-size: 14px;">成人</div><input name="chufarenshuertong" id="chufarenshuertong" type="text" value=""style="position:absolute;width:35px;left:180px;top:76px;border-radius:4px;"><div style="position:absolute;left:220px;top:76px;font-family: serif;font-size: 14px;">儿童</div>


  <div style="position:absolute;left:100px;top:120px;"><input type="image" src="../Public/images/package/yuding.png" style="border:0;" ></div>
 </form>

</div>
<div class="neironghengtiao">
<table bgcolor="#0384df" style="width: 750px;height: 40px;border:0px solid #FFFFFF;">
<td width="99px" align="center" class="neironghengtiaozi" style= "cursor:pointer; "><a href="#youhuihuodong">优惠活动</a></td>
<td width="99px" align="center" class="neironghengtiaozi" style= "cursor:pointer; "><a href="#chanpintese">产品特色</a></td>
<td width="99px" align="center" class="neironghengtiaozi" style= "cursor:pointer; "><a href="#xingchengjieshao">行程介绍</a></td>
<td width="99px" align="center" class="neironghengtiaozi" style= "cursor:pointer; "><a href="#yudingxuzhi">预订须知</a></td>
<td width="99px" align="center" class="neironghengtiaozi" style= "cursor:pointer; "><a href="#youkedianping">游客点评</a></td>
<td width="99px" align="center" class="neironghengtiaozi" style= "cursor:pointer; "><a href="#xiangguanchanpin">相关产品</a></td>
<td width="156px"></td>
</table>
</div>
<div class="neirongtiao" id="youhuihuodong"><img src="../Public/images/package/neirongtiao.png" style="float:left"><div style="position:relative;top:-25px;left:25px;font-size: 15px;color: white;font-family: inherit;">优惠活动</div></div>
<div class="youhuihuodongcontent" id="youhuihuodongcontent"><?php echo ($scency[0]["discountAction"]); ?></div>

<div class="neirongtiao" id="chanpintese"><img src="../Public/images/package/neirongtiao.png" style="float:left"><div style="position:relative;top:-25px;left:25px;font-size: 15px;color: white;font-family: inherit;">产品特色</div></div>
<div class="youhuihuodongcontent" id="chanpintesecontent"><?php echo ($scency[0]["characteristics"]); ?></div>

<div class="neirongtiao" id="xingchengjieshao"><img src="../Public/images/package/neirongtiao.png" style="float:left"><div style="position:relative;top:-25px;left:25px;font-size: 15px;color: white;font-family: inherit;">行程介绍</div></div>
<div class="youhuihuodongcontent" id="xingchengjieshaocontent"><?php echo ($scency[0]["routeDescription"]); ?></div>


<div class="neirongtiao" id="yudingxuzhi"><img src="../Public/images/package/neirongtiao.png" style="float:left"><div style="position:relative;top:-25px;left:25px;font-size: 15px;color: white;font-family: inherit;">预定须知</div></div>
<div class="youhuihuodongcontent" id="yudingxuzhicontent"><?php echo ($scency[0]["bookInformation"]); ?></div>

<div class="neirongtiao" id="youkedianping"><img src="../Public/images/package/neirongtiao.png" style="float:left"><div style="position:relative;top:-25px;left:25px;font-size: 15px;color: white;font-family: inherit;">游客点评</div></div>
<div class="youhuihuodongcontent" id="youkedianpingcontent">
<div class="pinglunfenlei">
<table style="width: 700px;height: 35px;border: 1px solid #b5b5b5;"></table>
</div>  



<div class="taocandianping">
  <form action="" name="taocandianping" method="post">


  </form>

</div>





</div>

<div class="neirongtiao" id="xiangguanchanpin"><img src="../Public/images/package/neirongtiao.png" style="float:left"><div style="position:relative;top:-25px;left:25px;font-size: 15px;color: white;font-family: inherit;">相关产品</div></div>
<div class="youhuihuodongcontent" id="xiangguanchanpincontent">
    

    <div style="position:relative;left:30px;top:-20px">
    <div class="rollBox">
     <div class="zuogun" onmousedown="ISL_GoUp()" onmouseup="ISL_StopUp1()" onmouseout="ISL_StopUp()" onmouseover="document.images['zuoguntu'].src='../Public/images/zuogun1.png'">
      <img id="zuoguntu" src="../Public/images/zuogun.png">
    </div>
     <div class="Cont" id="ISL_Cont">
      <div class="ScrCont">
       <div id="List1">
        <!-- 图片列表 begin -->
         <div class="pic">
          <a href="<#ZC_BLOG_HOST#>?cat=1" target="_blank"><img src="../Public/images/youhui1.jpg" width="145" height="145" alt="一号图片"  onload="return imgzoom(this,600);" onclick="javascript:window.open(this.src);" style="cursor:pointer;"/></a>
          <a href="<#ZC_BLOG_HOST#>?cat=1" target="_blank"><div style="font-size:15px;font-family: SimHei;color:#046bb3;">桂林</div><div style="font-size:15px;font-family: SimHei;color:#ff8004;">2300起</div></a>

         </div>
 <div class="pic">
          <a href="<#ZC_BLOG_HOST#>?cat=2" target="_blank"><img src="../Public/images/youhui2.jpg" width="145" height="145" alt="二号图片"  onload="return imgzoom(this,600);" onclick="javascript:window.open(this.src);" style="cursor:pointer;"/></a>
          <a href="<#ZC_BLOG_HOST#>?cat=2" target="_blank">二号图片</a>

         </div>
         <div class="pic">
          <a href="<#ZC_BLOG_HOST#>?cat=3" target="_blank"><img src="../Public/images/youhui3.jpg" width="145" height="145" alt="三号图片"  onload="return imgzoom(this,600);" onclick="javascript:window.open(this.src);" style="cursor:pointer;"/></a>
          <a href="<#ZC_BLOG_HOST#>?cat=3" target="_blank">三号图片</a>

         </div>
         <div class="pic">
          <a href="<#ZC_BLOG_HOST#>?cat=4" target="_blank"><img src="/image/4.jpg" width="145" height="145" alt="四号图片"  onload="return imgzoom(this,600);" onclick="javascript:window.open(this.src);" style="cursor:pointer;"/></a>
          <a href="<#ZC_BLOG_HOST#>?cat=4" target="_blank">四号图片</a>

         </div>
         <div class="pic">
          <a href="<#ZC_BLOG_HOST#>?cat=5" target="_blank"><img src="/image/5.jpg" width="145" height="145" alt="五号图片"  onload="return imgzoom(this,600);" onclick="javascript:window.open(this.src);" style="cursor:pointer;"/></a>
          <a href="<#ZC_BLOG_HOST#>?cat=5" target="_blank">五号图片</a>

         </div>
 <div class="pic">
          <a href="<#ZC_BLOG_HOST#>?cat=6" target="_blank"><img src="/image/1.jpg" width="145" height="145" alt="您自定义"  onload="return imgzoom(this,600);" onclick="javascript:window.open(this.src);" style="cursor:pointer;"/></a>
          <a href="<#ZC_BLOG_HOST#>?cat=6" target="_blank">您自定义</a>

         </div>
         <div class="pic">
          <a href="<#ZC_BLOG_HOST#>?cat=7" target="_blank"><img src="/image/1.jpg" width="145" height="145" alt="您自定义"  onload="return imgzoom(this,600);" onclick="javascript:window.open(this.src);" style="cursor:pointer;"/></a>
          <a href="<#ZC_BLOG_HOST#>?cat=7" target="_blank">您自定义</a>

         </div>
        <!-- 图片列表 end -->
       </div>
       <div id="List2"></div>
      </div>
     </div>
     <div class="yougun" onmousedown="ISL_GoDown()" onmouseup="ISL_StopDown1()" onmouseout="ISL_StopDown()" onmouseover="document.images['youguntu'].src='../Public/images/yougun1.png'" >
        <img id="youguntu" src="../Public/images/yougun.png"></div>
    </div></div></div>



</div>

<div class="bottom">
<div class="bottomsm">
	<span class="bottombiao">旅游超市</span><div class="bottomxuanxiang">住<br>吃货</div>
</div>
<div class="bottomsm">
	<span class="bottombiao">会员中心</span><div class="bottomxuanxiang1">我的订单<br>我的奖励<br>我的积分<br>我的评价<br>我的信息<br>我的储钱罐旅行计划</span><br>找朋友</div> 
</div>
<div class="bottomsm">
	<span class="bottombiao">旅游志</span><div class="bottomxuanxiang">旅游随感<br>写给未来的信</div>
</div>
<div class="bottomsm">
	<span class="bottombiao">主题旅游</span><div class="bottomxuanxiang">城市之间<br>学子游<br>年休假<br>美食游</div>
</div>

<div class="bottomsm">
	<span class="bottombiao">关于游记</span><div class="bottomxuanxiang">关于我们<br>联系我们<br>一起合作<br>用户协议<br>诚聘英才</div>
</div>

<img src="../Public/images/package/steptu.png" class="steptu">

<img src="../Public/images/renzhengwang.png" class="renzhengwang">
<img src="../Public/images/kexin.png" class="kexin">
<img src="../Public/images/chengxin.png" class="chengxin">

</div>



</div>


</div>


<div class="theme-popover">
     <div class="theme-poptit">
          <a href="javascript:;" title="关闭" class="close">×</a>
          <h3>旅行是一种生活</h3>
     </div>
     <div class="theme-popbod dform">
           <form class="theme-signin" name="loginform" action="" method="post">
                <ol>
                     <li><h4>请登录</h4></li>
                     <li><strong>用户名：</strong><input class="ipt" type="text" name="log" value="jq22" size="20" /></li>
                     <li><strong>密码：</strong><input class="ipt" type="password" name="pwd" value="***" size="20" /></li>
                     <li><input class="btn btn-primary" type="submit" name="submit" value=" 登 录 " /></li>
                </ol>
           </form>
     </div>
</div>
<div class="theme-popover-mask"></div>




<script src="../Public/js/package/package.js" type="text/javascript"></script>
<script class="secret-source">
        jQuery(document).ready(function($) {

          $('#banner-fade').bjqs({
            height      : 273,
            width       : 412,
            responsive  : true
          });

        });
      </script>




</body>
</html>