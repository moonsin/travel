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
<script type="text/javascript">
function showchi(){
    chicontent.style.display="block";
    zhucontent.style.display="none";
}
function showzhu(){
   chicontent.style.display="none";
    zhucontent.style.display="block";
}
</script>
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
<img src="../Public/images/travelstore/zhu.png" class="zhu" onclick="showzhu()">
<img src="../Public/images/travelstore/chi.png" class="chi" onclick="showchi()">
<div class="zhongyang">
	<img src="../Public/images/travelstore/smtiao.png" style="">
	<div class="content1">
     <div class="sousuotiao">
     	<form action="<?php echo U('Index/travelStore/travelStore');?>" name="smhuodongsousuo" method="post">
     		<div style="position:absolute;top:9px;left:3px;font-size:12px; color:white;" > 始发地</div>
     		<input name="smshifadi" id="smshifadi" type="text" value="" style="position:absolute;top:7px;left:44px;width:70px;font-size:13px;border-radius:4px;"/>
     		<div style="position:absolute;top:9px;left:120px;font-size:12px; color:white;" > 目的地</div>
     		<input name="smmudidi" id="smmudidi" type="text" value="" style="position:absolute;top:7px;left:161px;width:70px;font-size:13px;border-radius:4px;"/>
     		<div style="position:absolute;top:9px;left:237px;font-size:12px; color:white;" > 起始日</div>
     		<div style="position:absolute;top:6px;left:278px;"><input name="smqishiri" id="smqishiri" type="text" style="width:100px;" class="easyui-datebox" data-options="formatter:myformatter,parser:myparser"></div>
     		<div style="position:absolute;top:9px;left:384px;font-size:12px; color:white;" > 截止日</div>
     		<div style="position:absolute;top:6px;left:425px;"><input name="smjiezhiri" id="smjiezhiri" type="text" style="width:100px;" class="easyui-datebox" data-options="formatter:myformatter,parser:myparser"></div>
     		<div style="position:absolute;left:530px;top:5px; cursor: pointer;"><input type="image" src="../Public/images/makeplan/sousuobiaozhi.png" style="border:0;" ></div>
     	</form>
     	</div>


      <!-- 以下是图片滚动 -->
     	<div class="tupiangundong">
        <div style="position:relative;left:10px;top:-5px;">
        <div class="rollBox">
     <div class="zuogun" onmousedown="ISL_GoUp()" onmouseup="ISL_StopUp()" onmouseout="ISL_StopUp()" >
      <img id="zuoguntu" src="../Public/images/travelstore/zuogun.png">
    </div>
     <div class="Cont" id="ISL_Cont">
      <div class="ScrCont">
       <div id="List1">
        <!-- 图片列表 begin -->
         <div class="pic">
          <a href="<#ZC_BLOG_HOST#>?cat=1" target="_blank"><img src="../Public/images/travelstore/youhui.png" width="157" height="95" alt="一号图片"  onload="return imgzoom(this,600);" onclick="javascript:window.open(this.src);" style="cursor:pointer;"/></a>
          <a href="<#ZC_BLOG_HOST#>?cat=1" target="_blank"><div style="font-size:15px;font-family: SimHei;color:#046bb3;"><?php echo ($store[0]["name"]); ?></div><div style="font-size:13px;font-family: SimHei;color:#ff8004;float:left;"><?php echo ($store[0]["description"]); ?></div><div style="font-size:18px;font-family: SimHei;color:red;float:left;">￥<?php echo ($store[0]["price"]); ?></div></a>

         </div>
 <div class="pic">
          <a href="<#ZC_BLOG_HOST#>?cat=1" target="_blank"><img src="../Public/images/travelstore/youhui.png" width="157" height="95" alt="一号图片"  onload="return imgzoom(this,600);" onclick="javascript:window.open(this.src);" style="cursor:pointer;"/></a>
          <a href="<#ZC_BLOG_HOST#>?cat=1" target="_blank"><div style="font-size:15px;font-family: SimHei;color:#046bb3;"><?php echo ($store[1]["name"]); ?></div><div style="font-size:13px;font-family: SimHei;color:#ff8004;float:left;"><?php echo ($store[1]["description"]); ?></div><div style="font-size:18px;font-family: SimHei;color:red;;float:left;">￥<?php echo ($store[1]["price"]); ?></div></a>

         </div>
         <div class="pic">
          <a href="<#ZC_BLOG_HOST#>?cat=1" target="_blank"><img src="../Public/images/travelstore/youhui.png" width="157" height="95" alt="一号图片"  onload="return imgzoom(this,600);" onclick="javascript:window.open(this.src);" style="cursor:pointer;"/></a>
          <a href="<#ZC_BLOG_HOST#>?cat=1" target="_blank"><div style="font-size:15px;font-family: SimHei;color:#046bb3;"><?php echo ($store[2]["name"]); ?></div><div style="font-size:13px;font-family: SimHei;color:#ff8004;float:left;"><?php echo ($store[2]["description"]); ?></div><div style="font-size:18px;font-family: SimHei;color:red;;float:left;">￥<?php echo ($store[2]["price"]); ?></div></a>

         </div>
         <div class="pic">
          <a href="<#ZC_BLOG_HOST#>?cat=1" target="_blank"><img src="../Public/images/travelstore/youhui.png" width="157" height="95" alt="一号图片"  onload="return imgzoom(this,600);" onclick="javascript:window.open(this.src);" style="cursor:pointer;"/></a>
          <a href="<#ZC_BLOG_HOST#>?cat=1" target="_blank"><div style="font-size:15px;font-family: SimHei;color:#046bb3;"><?php echo ($store[3]["name"]); ?></div><div style="font-size:13px;font-family: SimHei;color:#ff8004;float:left;"><?php echo ($store[3]["description"]); ?></div><div style="font-size:18px;font-family: SimHei;color:red;;float:left;">￥<?php echo ($store[3]["price"]); ?></div></a>

         </div>
         <div class="pic">
          <a href="<#ZC_BLOG_HOST#>?cat=1" target="_blank"><img src="../Public/images/travelstore/youhui.png" width="157" height="95" alt="一号图片"  onload="return imgzoom(this,600);" onclick="javascript:window.open(this.src);" style="cursor:pointer;"/></a>
          <a href="<#ZC_BLOG_HOST#>?cat=1" target="_blank"><div style="font-size:15px;font-family: SimHei;color:#046bb3;">桂林</div><div style="font-size:13px;font-family: SimHei;color:#ff8004;float:left;">海南南山+植物园+植物园+呀诺达五日舒适团队</div><div style="font-size:18px;font-family: SimHei;color:red;;float:left;">￥230</div></a>

         </div>
        <!-- 图片列表 end -->
       </div>
       <div id="List2"></div>
      </div>
     </div>
     <div class="yougun" onmousedown="ISL_GoDown()" onmouseup="ISL_StopDown()" onmouseout="ISL_StopDown()" >
      <img id="youguntu" src="../Public/images/travelstore/yougun.png"></div>
    </div>
   </div>
</div>


<!--以上这一段是优惠套餐滚动实现-->
     	
<div class="gerenxinxi">
  <img src="../Public/images/travelstore/wodexinxi.png" style="position:relative;top:3px;left:5px;float:left;">
  <div style="position:relative;top:3px;left:7px;font-size:16px;">我的信息</div>
  <div style="position:relative;font-size:13px;top:20px;">尊敬的会员 <span id="smhuiyuanming" style="font-size:13px;">moonsin</span>,欢迎您！</div>
   <div style="position:absolute;left:10px;top:62px;font-size:13px;">订单总数：<span id="dingdanzongshu" style="font-size:17px;font-family: SimHei;color:#ff8004">1</span></div>
  <table  style="width: 157px;height: 30px;border:1px solid #c6c6c6;position:absolute;top:100px;left:10px;">
<td width="57px" align="center" class="" style= "cursor:pointer;border:1px solid #c6c6c6;font-size:15px;">合计</td>
<td  id="hejijiage"width="100px" align="center" class="" style= "cursor:pointer; font-size:15px;font-family: SimHei;color:red;">￥2300</td>
  </table>
</div>



<div class="chicontent" id="chicontent">
    <div class="chitupian">
<!-- 这是吃的每层楼的div 最多显示三个，你来做页码 -->
       <div class="chiceng">
          <div class="chicengtu" id="chicengtu"><img src="../Public/images/travelstore/chitu.jpg" width="145" height="95"></div>
          <div style="position:relative;top:5px;left:3px;font-size:14px;word-break: break-all;">店名:<span id="smdianming" style="font-size:14;">111113423</span></div>
          <div style="position:relative;top:5px;left:3px;font-size:14px;word-break: break-all;">地址:<span id="smdizhi"></span></div>
          <div style="position:relative;top:5px;left:3px;font-size:14px;word-break: break-all;">电话:<span id="smdianhua"></span></div>
</div>
<!-- 以上是一层楼 -->
<!-- 这是吃的每层楼的div 最多显示三个，你来做页码 -->
       <div class="chiceng">
          <div class="chicengtu" id="chicengtu"><img src="../Public/images/travelstore/chitu.jpg" width="145" height="95"></div>
          <div style="position:relative;top:5px;left:3px;font-size:14px;word-break: break-all;">店名:<span id="smdianming" style="font-size:14;">111113423</span></div>
          <div style="position:relative;top:5px;left:3px;font-size:14px;word-break: break-all;">地址:<span id="smdizhi"></span></div>
          <div style="position:relative;top:5px;left:3px;font-size:14px;word-break: break-all;">电话:<span id="smdianhua"></span></div>
</div>
<!-- 以上是一层楼 -->
<!-- 这是吃的每层楼的div 最多显示三个，你来做页码 -->
       <div class="chiceng">
          <div class="chicengtu" id="chicengtu"><img src="../Public/images/travelstore/chitu.jpg" width="145" height="95"></div>
          <div style="position:relative;top:5px;left:3px;font-size:14px;word-break: break-all;">店名:<span id="smdianming" style="font-size:14;">111113423</span></div>
          <div style="position:relative;top:5px;left:3px;font-size:14px;word-break: break-all;">地址:<span id="smdizhi"></span></div>
          <div style="position:relative;top:5px;left:3px;font-size:14px;word-break: break-all;">电话:<span id="smdianhua"></span></div>
</div>
<!-- 以上是一层楼 -->
  <img src="../Public/images/travelstore/shangye.png" style="position:absolute;top:356px;left:35px;">
  <img src="../Public/images/travelstore/xiaye.png" style="position:absolute;top:355px;left:235px;">
</div>
<div class="baiduditu">
   <div id="allmap">
</div>
</div>
</div>


<div class="zhucontent" id="zhucontent">

</div>




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
<div class="theme-popover-mask"></div>
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
<script language="javascript" type="text/javascript">
<!--//--><![CDATA[/><!--
//图片滚动列表 mengjia 070816
var Speed = 10; //速度(毫秒)
var Space = 5; //每次移动(px)
var PageWidth = 168; //翻页宽度
var fill = 0; //整体移位
var MoveLock = false;
var MoveTimeObj;
var Comp = 0;
var AutoPlayObj = null;
GetObj("List2").innerHTML = GetObj("List1").innerHTML;
GetObj('ISL_Cont').scrollLeft = fill;
GetObj("ISL_Cont").onmouseover = function(){clearInterval(AutoPlayObj);}
GetObj("ISL_Cont").onmouseout = function(){AutoPlay();}
AutoPlay();
function GetObj(objName){if(document.getElementById){return eval('document.getElementById("'+objName+'")')}else{return eval('document.all.'+objName)}}
function AutoPlay(){ //自动滚动
 clearInterval(AutoPlayObj);
 AutoPlayObj = setInterval('ISL_GoDown();ISL_StopDown();',8000); //间隔时间
}
function ISL_GoUp(){ //上翻开始
 if(MoveLock) return;
 clearInterval(AutoPlayObj);
 MoveLock = true;
 MoveTimeObj = setInterval('ISL_ScrUp();',Speed);
}
function ISL_StopUp(){ //上翻停止
 clearInterval(MoveTimeObj);
 if(GetObj('ISL_Cont').scrollLeft % PageWidth - fill != 0){
  Comp = fill - (GetObj('ISL_Cont').scrollLeft % PageWidth);
  CompScr();
 }else{
  MoveLock = false;
 }
 AutoPlay();
}
function ISL_ScrUp(){ //上翻动作
 if(GetObj('ISL_Cont').scrollLeft <= 0){GetObj('ISL_Cont').scrollLeft = GetObj('ISL_Cont').scrollLeft + GetObj('List1').offsetWidth}
 GetObj('ISL_Cont').scrollLeft -= Space ;
}
function ISL_GoDown(){ //下翻
 clearInterval(MoveTimeObj);
 if(MoveLock) return;
 clearInterval(AutoPlayObj);
 MoveLock = true;
 ISL_ScrDown();
 MoveTimeObj = setInterval('ISL_ScrDown()',Speed);
}
function ISL_StopDown(){ //下翻停止
 clearInterval(MoveTimeObj);
 if(GetObj('ISL_Cont').scrollLeft % PageWidth - fill != 0 ){
  Comp = PageWidth - GetObj('ISL_Cont').scrollLeft % PageWidth + fill;
  CompScr();
 }else{
  MoveLock = false;
 }
 AutoPlay();
}
function ISL_ScrDown(){ //下翻动作
 if(GetObj('ISL_Cont').scrollLeft >= GetObj('List1').scrollWidth){GetObj('ISL_Cont').scrollLeft = GetObj('ISL_Cont').scrollLeft - GetObj('List1').scrollWidth;}
 GetObj('ISL_Cont').scrollLeft += Space ;
}
function CompScr(){
 var num;
 if(Comp == 0){MoveLock = false;return;}
 if(Comp < 0){ //上翻
  if(Comp < -Space){
   Comp += Space;
   num = Space;
  }else{
   num = -Comp;
   Comp = 0;
  }
  GetObj('ISL_Cont').scrollLeft -= num;
  setTimeout('CompScr()',Speed);
 }else{ //下翻
  if(Comp > Space){
   Comp -= Space;
   num = Space;
  }else{
   num = Comp;
   Comp = 0;
  }
  GetObj('ISL_Cont').scrollLeft += num;
  setTimeout('CompScr()',Speed);
 }
}
//--><!]]>
</script>
</body>
</html>
<!-- 以下是百度地图代码 -->
<script type="text/javascript">
  // 百度地图API功能
  var map = new BMap.Map("allmap");
  var point = new BMap.Point(116.331398,39.897445);
  map.centerAndZoom(point,12);
  // 创建地址解析器实例
  var myGeo = new BMap.Geocoder();
  // 将地址解析结果显示在地图上,并调整地图视野
  myGeo.getPoint("成都市一环路东一段", function(point){
    if (point) {
      map.centerAndZoom(point, 16);
      map.addOverlay(new BMap.Marker(point));
    }else{
      alert("您选择地址没有解析到结果!");
    }
  }, "北京市");
</script>