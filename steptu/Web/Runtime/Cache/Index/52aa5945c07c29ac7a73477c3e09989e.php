<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<meta charset="utf-8">
	<title>旅游超市</title>
		<link rel="stylesheet" href="../Public/css/travelstore/travelstore.css" media="all" type="text/css">
        	<link rel="stylesheet" href="../Public/css/css.css" media="all">
	     <script src="http://libs.baidu.com/jquery/1.8.3/jquery.min.js"></script>
	     	<script type="text/javascript" src="../Public/js/jquery-easyui-1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="../Public/js/jquery-easyui-1.4.2/jquery.easyui.min.js"></script>
<link rel="stylesheet" type="text/css" href="../Public/js/jquery-easyui-1.4.2/themes/default/easyui.css">
  <link rel="stylesheet" type="text/css" href="../Public/js/jquery-easyui-1.4.2/themes/icon.css">
  <link rel="stylesheet" type="text/css" href="../Public/js/jquery-easyui-1.4.2/demo/demo.css">
<style type="text/css">
    #allmap {width: 100%;height: 100%;overflow: hidden;margin:0;font-family:"微软雅黑";}
  </style>
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


 <!-- bjqs.css contains the *essential* css needed for the slider to work -->
    <link rel="stylesheet" href="../Public/css/package/bjqs.css">


    <!-- demo.css contains additional styles used to set up this demo page - not required for the slider -->
    <link rel="stylesheet" href="../Public/css/package/demo.css">
    <script src="../Public/js/package/bjqs-1.3.min.js"></script>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=GW5oM4QR33hjrzFicL1iNtq3"></script>
	</head>
	<body>
<STYLE TYPE="text/css">

<!--

BODY {background-image: URL(../Public/images/travelstore/background.png);

background-position:center top;

background-repeat: no-repeat;
background-color: #d2dffe;

}

-->1
</STYLE>
<div class="quanbu">
<div class="xuanfukuang">
  <div style="width:211px;height:35px;background-color:#058ff1;"><span style="font-size:16px;color:white;position:relative;top:8px;left:3px;">我浏览过的酒店</span></div>
 <!--  以下是一层的样式 -->
<div class="xiaochuangceng">
<div style="position:relative;top:5px;left:2px;font-size:16px;color:#1983d9;float:left;" id="xiaochuangjiudian">成都<?php echo ($hotel["hotelName"]); ?>酒店</div>
<div style="position:absolute;top:5px;left:150px;font-size:13px;color:#FF6306;">￥300起</div>
  <div style="position:relative;top:10px;left:2px;font-size:13px;float:left;">酒店地址：<span id="xiaochuangjiudiandizhi">成都市成华区一环路东一段</span></div>
  <img src="../Public/images/travelstore/xiaochuangfenge.png" style="position:absolute;top:90%;left:2px;float:left;" >
</div>
<!--  以下是一层的样式 -->
<div class="xiaochuangceng">
<div style="position:relative;top:5px;left:2px;font-size:16px;color:#1983d9;float:left;" id="xiaochuangjiudian">成都XXX酒店</div>
<div style="position:absolute;top:5px;left:150px;font-size:13px;color:#FF6306;">￥300起</div>
  <div style="position:relative;top:10px;left:2px;font-size:13px;float:left;">酒店地址：<span id="xiaochuangjiudiandizhi">成都市成华区一环路东一段</span></div>
  <img src="../Public/images/travelstore/xiaochuangfenge.png" style="position:absolute;top:90%;left:2px;float:left;" >
</div>
<!--  以下是一层的样式 -->
<div class="xiaochuangceng">
<div style="position:relative;top:5px;left:2px;font-size:16px;color:#1983d9;float:left;" id="xiaochuangjiudian">成都XXX酒店</div>
<div style="position:absolute;top:5px;left:150px;font-size:13px;color:#FF6306;">￥300起</div>
  <div style="position:relative;top:10px;left:2px;font-size:13px;float:left;">酒店地址：<span id="xiaochuangjiudiandizhi">成都市成华区一环路东一段</span></div>
  <img src="../Public/images/travelstore/xiaochuangfenge.png" style="position:absolute;top:90%;left:2px;float:left;" >
</div>
<!--  以下是一层的样式 -->
<div class="xiaochuangceng">
<div style="position:relative;top:5px;left:2px;font-size:16px;color:#1983d9;float:left;" id="xiaochuangjiudian">成都XXX酒店</div>
<div style="position:absolute;top:5px;left:150px;font-size:13px;color:#FF6306;">￥300起</div>
  <div style="position:relative;top:10px;left:2px;font-size:13px;float:left;">酒店地址：<span id="xiaochuangjiudiandizhi">成都市成华区一环路东一段</span></div>
  <img src="../Public/images/travelstore/xiaochuangfenge.png" style="position:absolute;top:90%;left:2px;float:left;" >
</div>

</div>
	<a href="<?php echo U('Index/travelStore/travelStore');?>"><img src="__IMG__/travelsm.png" class="travelsm"></a>
        <a href="<?php echo U('Index/vipCenter/myInformation');?>"><img src="__IMG__/personal.png" class="personal"></a>
        <a href="<?php echo U('Index/travelTheme/travelTheme');?>"> <img src="__IMG__/travel.png" class="travel" ></a>
        <a href="<?php echo U('Index/makePlan/makePlan');?>"> <img src="__IMG__/makeplan.png" class="makeplan"></a>
        <a href="<?php echo U('Index/index/index');?>"><img src="__IMG__/index.png" class="index"></a>
        <a href="<?php echo U('Index/travelBook/travelBook');?>"><img src="__IMG__/travelbook.png" class="travelbook"></a>
<img src="../Public/images/xuanchuan.png"class="xuanchuan">

<a href="javascript:;"class=" btn-large theme-login" style=""><img src="../Public/images/login.png"   class="login"></a>
<img src="../Public/images/register.png"class="register">
<div class="zhongyang">
	<img src="../Public/images/travelstore/smtiao.png" style="">

<div class="content22">
    <div class="jiudianxiangxi">

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

    <div style="position:absolute;top:55px;left:485px;font-size:19px;color:#1983d9;">成都<?php echo ($hotel["hotelName"]); ?>酒店</div>
    <div style="position:absolute;top:120px;left:495px;font-size:13px;">每间每晚:<span style="color:#FF6306;font-size:19px;">￥<?php echo ($hotel["price"]); ?></span>&nbsp起</div>
        <div style="position:absolute;top:150px;left:495px;font-size:13px;">酒店地址：<span id="jdjiudiandizhi"><?php echo ($hotel["area"]); ?></span></div>


    </div>
    <div class="fangxingyuding"><img src="../Public/images/travelstore/fangxingyuding.png" style="margin:0 0 0 5px;"><br><?php echo ($hotel["hotelBrand"]); ?></div>
    <div class="fangxingyudinganniu">
      <form action="" name="smzhusousuo" method="post">
      <div style="margin:0 0 0 20px;float:left;font-size:13px;">入住</div>
        <div style="margin:-3px 0 0 10px;float:left"><input id="jiudianyudingruzhuriqi" type="text" style="width:120px;" class="easyui-datebox" data-options="formatter:myformatter,parser:myparser"></div>
      <div style="margin:0 0 0 20px;float:left;font-size:13px">离店</div>
        <div style="margin:-3px 0 0 10px;float:left"><input id="jiudianyudinglidianriqi" type="text" style="width:120px;" class="easyui-datebox" data-options="formatter:myformatter,parser:myparser"></div>
        <div style="margin:0 0 0 20px;float:left;font-size:13px">房型</div>
    <select name="fangxing" id="fangxing" style="margin:-3px 0 0 10px;float:left">
       <option value="volvo">Volvo</option>
       <option value="saab">Saab</option>
       <option value="fiat" selected="selected">Fiat</option>
       <option value="audi">Audi</option>
       </select>

         <div style="margin:-6px 0 0 60px;float:left;font-size:13px; cursor: pointer;"><input type="image" src="../Public/images/travelstore/yuding.png" style="border:0;" ></div>



    </form></div>
    <div class="jiudianjieshao"><img src="../Public/images/travelstore/jiudianjieshao.png" style="margin:0 0 0 5px;"><br><?php echo ($hotel["comment"]); ?></div>
    <div class="zhukedianping"><img src="../Public/images/travelstore/zhukedianping.png" style="margin:0 0 0 5px;"><br>5435345234</div>
    <div class="jiaotongditu"><img src="../Public/images/travelstore/jiaotongditu.png" style="margin:0 0 0 5px;">
    	<div class="jiudianbaiduditu">
    		  <div id="allmap"></div>
    	</div>
    </div>
</div>
<div class="bottom">
<div class="bottomsm">
  <span class="bottombiao">旅游超市</span><div class="bottomxuanxiang"><a href="<?php echo U('Index/travelStore/smsousuojieguo');?>">住</a><br>
            <a href="<?php echo U('Index/travelStore/travelStore');?>">吃货</a></div>
</div>
<div class="bottomsm">
  <span class="bottombiao">会员中心</span><div class="bottomxuanxiang1"><a href="<?php echo U('Index/vipCenter/myOrders');?>"> 我的订单</a><br>
            <a href="<?php echo U('Index/vipCenter/myGrades');?>">我的积分</a> <br>
            <a href="<?php echo U('Index/vipCenter/myEvaluations');?>"> 我的评价</a><br>
            <a href="<?php echo U('Index/vipCenter/myInformation');?>">我的信息</a> <br>
            <a href="<?php echo U('Index/vipCenter/myMoneyPot');?>">我的储钱罐旅行计划</a><br></div>
</div>
<div class="bottomsm">
  <span class="bottombiao">旅游志</span><div class="bottomxuanxiang"> <a href="<?php echo U('Index/travelBook/travelBook');?>">旅游随感</a> <br>
            <a href="<?php echo U('Index/travelBook/letterList');?>"> 写给未来的信</a></div>
</div>
<div class="bottomsm">
  <span class="bottombiao">主题旅游</span><div class="bottomxuanxiang"> <a href="<?php echo U(Index/travelTheme/travelTheme,'class=学子游','');?>"> 学子游</a><br>
            <a href="<?php echo U(Index/travelTheme/travelTheme,'class=年休假','');?>">年休假</a><br>
            <a href="<?php echo U(Index/travelTheme/travelTheme,'class=美食街','');?>">美食游</a></div>
</div>

<div class="bottomsm">
  <span class="bottombiao">关于游记</span><div class="bottomxuanxiang"> <a href="<?php echo U('Index/index/aboutUs');?>">关于我们</a><br>
            <a href="<?php echo U('Index/index/aboutUs');?>">联系我们</a><br>
            <a href="<?php echo U('Index/index/aboutUs');?>">一起合作</a><br>
            <a href="<?php echo U('Index/index/aboutUs');?>">用户协议</a><br>
            <a href="<?php echo U('Index/index/aboutUs');?>">诚聘英才</a></div>
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
<div class="theme-popover-mask"></div>
<script class="secret-source">
        jQuery(document).ready(function($) {

          $('#banner-fade').bjqs({
            height      : 253,
            width       : 452,
            responsive  : true
          });

        });
      </script>

	</body>
	</html>
	<script type="text/javascript">
	  // 百度地图API功能

 zidingdizhi=$("#jdjiudiandizhi").html();
  var map = new BMap.Map("allmap");
  var point = new BMap.Point(116.331398,39.897445);
  map.centerAndZoom(point,12);
  // 创建地址解析器实例
  var myGeo = new BMap.Geocoder();
  // 将地址解析结果显示在地图上,并调整地图视野
  myGeo.getPoint(zidingdizhi, function(point){
    if (point) {
      map.centerAndZoom(point, 16);
      map.addOverlay(new BMap.Marker(point));
    }else{
      alert("您选择地址没有解析到结果!");
    }
  }, "北京市");

</script>
<script type="text/javascript">
function myformatter(date){
 var y = date.getFullYear();
var m = date.getMonth()+1;
var d = date.getDate();
return y+'-'+(m<10?('0'+m):m)+'-'+(d<10?('0'+d):d);
 }
 function myparser(s){
 if (!s) return new Date();
 var ss = (s.split('-'));
 var y = parseInt(ss[0],10);
 var m = parseInt(ss[1],10);
var d = parseInt(ss[2],10);
 if (!isNaN(y) && !isNaN(m) && !isNaN(d)){
return new Date(y,m-1,d);
 }else{
 return new Date();
 }
 }
 </script>