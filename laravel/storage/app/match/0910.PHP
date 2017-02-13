<body>
<!--  头部页面 -->





<link rel="stylesheet" type="text/css" href="http://public.zgzcw.com/zcwindex/zgzcw2015header.css?v=20160926">
<script src="http://public.zgzcw.com/newhead/images/header_tab.js?v=20160926"></script>
<!--手机客服端 -->
<style type="text/css">
    p,div,h1,h2,h3,h4,h5,h6,li,ul{ padding:0px; margin:0px;}
    .bg-365{ width:100%; background: url(http://www.diyicai.com/img/bg365-2.png) no-repeat; height:201px; text-align:center;}
    .bg-365 .down{ background:url(http://www.diyicai.com/img/bg365-4.png) no-repeat; width:895px; height:201px; margin:0 auto; text-align:left;}
    .bg-365 .down a{ display:inline-block;}
    .bg-365 .down a.clo-365{ width:52px; height:51px; margin-top:12px;}
    .bg-365 .down a.downbtn{ width:264px; height:84px; float:right; margin-top:71px;}
</style>
<script type="text/javascript">
    var  cp365 = {};
    cp365.isFlag = false ;
    cp365.pcUrl = null;
    cp365.uArgs = ['Android','iPhone','iPad'];
    jQuery(function(){
        var ua = navigator.userAgent ;
        if(ua.indexOf('Android') > -1){
            cp365.pcUrl = "http://www.caipiao365.com/download/27001100215.jsp"
        }else if(ua.indexOf('iPhone') > -1){
            cp365.pcUrl = "http://www.caipiao365.com/download/27001100215.jsp"
        }else if(ua.indexOf('iPad') > -1){
            cp365.pcUrl = "http://www.caipiao365.com/download/27001100215.jsp"
        }
        for(var i= 0,len=cp365.uArgs.length;i<len;i++){
            if(ua.indexOf(cp365.uArgs[i]) > -1){
                cp365.isFlag = true ;
            }
        }
        jQuery("#down365").unbind().bind('click',function(){
            jQuery(this).attr('href',cp365.pcUrl);
            //  $("#close365").click();
        })

        jQuery("#close365").unbind().bind('click',function(){
            jQuery("#bg365").slideUp();
        })

        if(!cp365.isFlag){
            return false ;
        }else{
            jQuery("#bg365").slideDown();
        }


    })
</script>
<!--<div class="bg-365" id="bg365" style="display: none">
  <div class="down"> <a href="javascript:void(0)" id="close365" class="clo-365"></a> <a href="javascript:void(0)" id="down365" target="_blank" class="downbtn"></a> </div>
</div> -->


<!-- menu -->

<script type="text/javascript">
   var strDom = '' ;
   jQuery(function(){
         var url = window.location.href;
         if(url.indexOf('diyicai.com') > -1){
              if(url.indexOf('goucai.diyicai.com')>-1){
                  strDom += '/ifrm_newtop_logininfo.jsp?c=diyicai'  ;
              }else{
                 strDom += 'http://goucai.diyicai.com/ifrm_newtop_logininfo.jsp?c=diyicai'  ;
                 document.domain = 'diyicai.com';
              }
         }else if(url.indexOf('zgzcw.com') > -1){
              if(url.indexOf('cp.zgzcw.com')>-1){
                  strDom += '/ifrm_newtop_logininfonodomain.jsp?c=zgzcw'  ;
              }else{
                 strDom += 'http://cp.zgzcw.com/ifrm_newtop_logininfonodomain.jsp?c=zgzcw'  ;
                 document.domain = 'zgzcw.com';
              }
         }else if(url.indexOf('caipiao365.com') > -1){
                 if(url.indexOf('goucai.caipiao365.com')>-1){
                     strDom += '/ifrm_newtop_logininfonodomain.jsp?c=caipiao365'  ;
                 }else{
                     strDom += 'http://cp.caipiao365.com/ifrm_newtop_logininfonodomain.jsp?c=caipiao365'  ;
                     document.domain = 'caipiao365.com';
                 }
         }else{
                strDom += 'http://goucai.caishijie.com/ifrm_newtop_logininfonodomain.jsp?c=caishijie'  ;
               // document.domain = 'caishijie.com';
        }
        jQuery("#toplogin").attr('src',strDom);
   })
</script> 

<div id="menu" class="top">
  <div class="topLogin">
    <div class="top-bar"></div>
    
    <!-- 登录信息 -->
    <iframe id="toplogin" width="500" scrolling="no" class="flip-up" frameborder="0" allowtransparency="true" src="http://cp.zgzcw.com/ifrm_newtop_logininfonodomain.jsp?c=zgzcw"></iframe>
    
    <!-- 菜单项 -->
    
    <ul class="topLoginR">
      <li class="myOrders">
        <dl>
          <dt><a href="http://cp.zgzcw.com/uc/betmanage/betrecord.action" target="_blank">我的订单</a></dt>
          <dd><a href="http://cp.zgzcw.com/uc/betmanage/betrecord.action" target="_blank">投注记录</a></dd>
          <dd><a href="http://cp.zgzcw.com/uc/betmanage/custombill.action" target="_blank">定制跟单</a></dd>
          <dd><a href="http://cp.zgzcw.com/uc/betmanage/mytracknumb.action" target="_blank">我的追号</a></dd>
          <dd><a href="http://cp.zgzcw.com/uc/betmanage/mytracknumb.action?subType=1" target="_blank">我的定投</a></dd>
          <dd><a href="http://cp.zgzcw.com/uc/betmanage/betprosave.action" target="_blank">保存的方案</a></dd>
        </dl>
      </li>
      <li class="phone">
        <p class="phone-t"> <a href="http://www.caipiao365.com/" target="_blank">手机购彩</a> </p>
        <div class="phone-con">
<div class="phone-left topsending" style="display:none;">
            <h3> 短信获取下载地址 </h3>
            <p class="ps"> 请填写手机号，下载地址将发送到您的手机上。 </p>
            <label>
              <input class="$1" type="text" oncontextmenu="return false">
            </label>
            <div class="$2 topnotice"> 
              
              <!-- 您发送的次数过多，请稍后再试！ -->  </div>
            <label>
              <button class="$3">免费发送</button>
            </label>
            <p class="sentcon"> <strong>已发送！</strong> <span>您将收到一条包含手机客户端下载地址的短信，点击短信中的地址即可下载。</span> <a class="$4 a-1" href="javascript:;">再次发送短信</a> </p>
          </div>          
          <div class="phone-right">
            <h3> 扫描二维码下载 </h3>
            <div class="ewm"><img src="http://public.zgzcw.com/d/images/201512231450839551917_752.png" alt="彩票356" width="118" height="115" title="彩票365扫码"></div>
          </div>
        </div>
      </li>
      <li class="service"> <a href="http://www.zgzcw.com/help/" target="_blank">帮助中心</a> </li>
      <li class="bbs"> <a href="http://bbs.zgzcw.com/" target="_blank">猜猜论坛</a> </li>
      <li class="webNav">
        <p class="webNav-t"> <a href="http://www.zgzcw.com/sitemap.shtml" target="_blank">网站导航</a> </p>
        <div class="webNav-con">
          <dl>
            <dt> <a href="http://cp.zgzcw.com/zgzcw/index.jsp" target="_blank">购买彩票</a> <a href="http://news.zgzcw.com/" target="_blank">彩票资讯</a> <a href="http://www.caipiao365.com/" target="_blank">手机购彩</a><br>
              <a href="http://saishi.zgzcw.com/" target="_blank">赛事中心</a> <a href="http://live.zgzcw.com/" target="_blank">比分直播</a> <a href="http://t.diyicai.com/" target="_blank">彩民微博</a> </dt>
            <dd>
              <h4> 购彩 </h4>
              <p> <a href="http://cp.zgzcw.com/gcdt.jsp" target="_blank">购彩大厅</a> <a href="http://cp.zgzcw.com/hemai/" target="_blank">合买大厅</a> <a href="http://cp.zgzcw.com/tc.action?action=selectGroup" target="_blank">团彩</a> <a href="http://guoguan.zgzcw.com/servlet/lotterynumberaction?action=index" target="_blank">开奖</a> </p>
            </dd>
            <dd>
              <h4> 预测分析 </h4>
              <p> <a href="http://saishi.zgzcw.com/" target="_blank">赛事中心</a> <a href="http://trend.zgzcw.com/" target="_blank">数据图表</a> <a href="http://odds.zgzcw.com/" target="_blank">指数中心</a> <a href="http://www.zgzcw.com/html/310xingxiang.html" target="_blank">足彩星象</a> </p>
            </dd>
            <dd>
              <h4> 资讯 </h4>
              <p> <a href="http://news.zgzcw.com/" target="_blank">彩票资讯</a> <a href="http://news.zgzcw.com/zhuanti/" target="_blank">赛事专题</a> <a href="http://www.zgzcw.com/top/" target="_blank">彩票热点</a> </p>
            </dd>
            <dd class="spe"> <a href="http://www.zgzcw.com/sitemap.shtml" target="_blank">更多内容&gt;&gt;</a> </dd>
          </dl>
        </div>
      </li>
    </ul>
    <div class="clear"></div>
  </div>
</div>
<script type="text/javascript">
//<![CDATA[

   /*
    * 头部菜单
    *
    * 13:21 2013-8-12   Zhanghong
    */

    (function() {

      var $ = jQuery('div#menu')[0];
      var n = null;

      var close = function() {

        if(n) {
          n.className = n.className.replace(/\-show/g, '');
        }

      };

      //账户余额
      jQuery($).find('.topCash').mouseover(function(e) {

        close();

        n = this;
        n.className = 'topCash-show';
        e.stopPropagation();

      });

      //联合登陆
      jQuery($).find('.unionlogin').mouseover(function(e) {

        close();

        n = this;
        n.className = 'unionlogin-show';
        e.stopPropagation();

      });

      //我的订单
      jQuery($).find('.myOrders').mouseover(function(e) {

        close();

        n = this;
        n.className = 'myOrders-show';
        e.stopPropagation();

      });

      //手机购彩
      jQuery($).find('.phone').mouseover(function(e) {

        close();

        n = this;
        n.className = 'phone-show';
        e.stopPropagation();

      });

      //网站导航
      jQuery($).find('.webNav').mouseover(function(e) {

        close();

        n = this;
        n.className = 'webNav-show';
        e.stopPropagation();

      });

      //绑定事件
      jQuery(document).mouseover(function(e) {

        close();

      });

    })();

//]]>
</script> 
<a href="http://zhuanti.zgzcw.com/cpgl/11.shtml" class="asiancup_fw" target="_blank"></a> 

<!-- banner --> 

<script type="text/javascript">
//<![CDATA[

   /*
    * kefu
    */

//>>>

function open_kfchat() {
var local_url = window.location.href.replace(/\&/g, "*");
if (local_url.length > 100) local_url = local_url.substring(0, 100);
var mrand = Math.floor(Math.random() * 1000000) + "" + Math.floor(Math.random() * 1000000) + "" + Math.floor(Math.random() * 100000);
var username;
if(!document.getElementById("toplogin").contentWindow.document.getElementById("user_name")){username = "";}else{username = document.getElementById("toplogin").contentWindow.document.getElementById("user_name").innerHTML;}
//if(username ===undefined || username ===null ){username = "";}
username = encodeURI(username);
var url = 'http://webim.tq.cn/sendmain.jsp?admiuin=9410126&action=acd&tag=<ype=1&rand=' + mrand + '&iscallback=0&agentid=0&type_code=11&comtimes=2&page_templete_id=46098&is_message_sms=0&is_send_mail=0&isAgent=0&sort=0&style=2&page=&clientname=' + username + '&localurl=' + local_url + '&spage=&nocache=' + (+new Date),
win = window.open(url, "tq_webchat", "width=596,height=438,location=no,resizable=1,scrollbars=0,status=no,toolbar=no,menu=no,top=100,left=200");
win.focus();
return false;
} 

//<<<

//]]>
</script>
<div class="logo-ban"> <h1><a href="http://www.zgzcw.com/" class="zcw-logo" title="中国足彩网"><img src="http://www.zgzcw.com/images/logo.png" alt="中国足彩网"></a></h1>
<div style="float:left; margin-left:315px; width:384px; height:69px; overflow:hidden;">
<a style="height:69px;overflow:hidden;" onclick="_hmt.push(['_trackEvent', '头部广告', 'click', '看专家推荐 天天中奖更容易', 1])" href="http://news.zgzcw.com/zjtj/" target="_blank" rel="nofollow"><img class="ad01" width="384" height="69" src="http://public.zgzcw.com/d/images/20161071475821970022_721.png" alt="看专家推荐 天天中奖更容易" title="看专家推荐 天天中奖更容易">
</a>

</div>
<span class="kf"> <a href="javascript:;" onclick="open_kfchat()"></a>
 <p> <span id="nyr">2017-2-13</span> <br>
    <b id="xt_h">21</b><b id="xt_m">55</b><b id="xt_s">12</b> </p>
  </span> 
</div>



<!-- navigation -->

<div class="zcw-header-wap">
  <div class="zcw-menu">
    <div class="zcw-menu-title"> <a href="http://zhuanti.zgzcw.com/worldcup/" target="_blank" class="sjbcoming"></a> <span>全部彩票分类</span><div class="toggletri"></div> 
      <script type="text/javascript">

   $(function(){
        $("#search").click(function(){
        
            var v =  $("#txtId").val();
            var ul =   "http://www.zgzcw.com/search/index.shtml?m="+v ;
            window.open(ul,'_blank')
        })
   })

</script>
      <ul class="side-menu" style="display: none;">
        <li class="side-menu-01">
          <dl class="zcw-nav-dl">
            <dt> <a href="http://cp.zgzcw.com/lottery/jchtplayvsForJsp.action?lotteryId=47&amp;type=jcmini" target="_self"><span>竞彩</span></a> </dt>
<dd> 
<a href="http://cp.zgzcw.com/lottery/jchtplayvsForJsp.action?lotteryId=47&amp;type=jcmini" target="_self">胜平负/让球</a>　
<a href="http://cp.zgzcw.com/lottery/jcplayvsForJsp.action?lotteryId=23" target="_self">比分</a>　
<a href="http://cp.zgzcw.com/lottery/jchtplayvsForJsp.action?lotteryId=22_dg&amp;type=jcmini" target="_self">单关</a>

<br>
<a href="http://cp.zgzcw.com/lottery/jcplayvsForJsp.action?lotteryId=24" target="_self">总进球</a>　
<a href="http://cp.zgzcw.com/lottery/jcplayvsForJsp.action?lotteryId=25" target="_self">半全场</a>　
<a href="http://cp.zgzcw.com/lottery/jchtplayvsForJsp.action?lotteryId=47" target="_self">混合过关</a>

<a href="http://cp.zgzcw.com/lottery/jchtplayvsForJsp.action?lotteryId=47&amp;type=jcrxy" target="_self">二选一</a>　
<a href="http://cp.zgzcw.com/lottery/jchtplayvsForJsp.action?lotteryId=46&amp;type=jcmini" target="_self">一场决胜</a>　
</dd>
          </dl>
          <p class="jingcai"><a href="http://www.zgzcw.com/huodong/jingc_football/football.html" target="_blank"></a></p>
          <p class="dgfanz"><a href="http://cp.zgzcw.com/activity/lq/HappynewYear.jsp " target="_blank"></a></p>
          <p class="jc-new"><a href="javascript:void(0)"></a></p>
          
        </li>
        <li class="side-menu-02">
          <dl class="zcw-nav-dl">
            <dt> <a href="http://cp.zgzcw.com/zgzcw/index.jsp?czid=lottery%2FjcplayvsForJsp.action%3FlotteryId%3D26" target="_self"><span>篮彩</span></a> </dt>
            <dd>
<a href="http://cp.zgzcw.com/lottery/jchtplayvsForJsp.action?lotteryId=48&amp;type=jcmini" target="_self">胜负/让分</a>　
<a href="http://cp.zgzcw.com/zgzcw/index.jsp?czid=lottery%2FjcplayvsForJsp.action%3FlotteryId%3D28" target="_self">胜分差</a>　
<a href="http://cp.zgzcw.com/lottery/jchtplayvsForJsp.action?lotteryId=27_dg&amp;type=jcmini" target="_self">单关</a>

<a href="http://cp.zgzcw.com/zgzcw/index.jsp?czid=lottery%2FjcplayvsForJsp.action%3FlotteryId%3D29" target="_self">大小分</a>　
<a href="http://cp.zgzcw.com/zgzcw/index.jsp?czid=lottery%2FjchtplayvsForJsp.action%3FlotteryId%3D48" target="_self">混合过关</a>  </dd>
          </dl>
          <p class="jclq-jia"><a href="http://www.zgzcw.com/huodong/jingc_baseket/baseket.html" target="_blank"></a></p>
          <!--<p class="dgfanl"><a href="http://cp.zgzcw.com/activity/lq/HappynewYear.jsp " target="_blank"></a></p>-->
          <p class="dgfanlq"><a href="http://cp.zgzcw.com/activity/lq/HappynewYear.jsp " target="_blank"></a></p>

        </li>
        <li class="side-menu-03">
          <dl class="zcw-nav-dl">
            <dt> <a href="http://cp.zgzcw.com/lottery/bdplayvsforJsp.action?lotteryId=200&amp;v=1224" target="_self"><span>单场</span></a> </dt>
            <dd>
<a href="http://cp.zgzcw.com/lottery/bdplayvsforJsp.action?lotteryId=200&amp;v=1224" target="_self">胜平负</a>　
<a href="http://cp.zgzcw.com/lottery/bdplayvsforJsp.action?lotteryId=230" target="_self">总进球</a>　
<a href="http://cp.zgzcw.com/lottery/bdplayvsforJsp.action?lotteryId=210" target="_self">上下单双</a>
<br>
<a href="http://cp.zgzcw.com/lottery/bdplayvsforJsp.action?lotteryId=250" target="_self">比分</a>　
<a href="http://cp.zgzcw.com/lottery/bdplayvsforJsp.action?lotteryId=270" target="_self">胜负</a>　
<a href="http://cp.zgzcw.com/lottery/bdplayvsforJsp.action?lotteryId=240" target="_self">半全场</a>
</dd>

          </dl>
          <p class="danchang"><a href="http://www.zgzcw.com/wzgg/content_2363.shtml" target="_blank"></a></p>

            
        </li>
        <li class="side-menu-04"> 
          <dl class="zcw-nav-dl">
            <dt> <a href="http://cp.zgzcw.com/zgzcw/lottery/14csfc/index.jsp" target="_self"><span>足彩</span></a> </dt>
            <dd>
<a href="http://cp.zgzcw.com/zgzcw/lottery/14csfc/index.jsp" target="_self">胜负彩</a>　
<a href="http://cp.zgzcw.com/zgzcw/lottery/rx9/index.jsp" target="_self">任选九</a>　
<a href="http://cp.zgzcw.com/zgzcw/lottery/6cbqc/index.jsp" target="_self">半全场</a>
<br>
<a href="http://cp.zgzcw.com/zgzcw/lottery/4cjqc/index.jsp" target="_self">进球彩</a>
</dd>
          </dl>

            
        </li>
        <li class="side-menu-05">

          
          <dl class="zcw-nav-dl">
            <dt> <a href="http://cp.zgzcw.com/zgzcw/index.jsp?czid=lottery%2F11x5%2Findex.jsp" target="_self"><span>高频</span></a> </dt>
            <dd>
<a href="http://cp.zgzcw.com/zgzcw/index.jsp?czid=lottery%2Fnew11x5%2Findex.jsp" target="_self">新11选5</a>　
<a href="http://cp.zgzcw.com/zgzcw/index.jsp?czid=lottery%2Fssc%2Findex.jsp" target="_self">时时彩</a>　
<a href="http://cp.zgzcw.com/lottery/kl8/index.jsp" target="_self">快乐8</a>
<br>
<a href="http://cp.zgzcw.com/lottery/kl10f/index.jsp" target="_self">快乐十分</a>　
<a href="http://cp.zgzcw.com/lottery/pk10/index.jsp" target="_self">PK拾</a>　
<a href="http://cp.zgzcw.com/lottery/hubk3/index.jsp" target="_self">湖北快3</a>
</dd>
          </dl>

            
        </li>
        <li class="side-menu-06"> 
          <dl class="zcw-nav-dl">
            <dt> <a href="http://cp.zgzcw.com/zgzcw/index.jsp?czid=lottery%2Fssq%2Findex.jsp" target="_self"><span>福彩</span></a> </dt>
            <dd>
<a href="http://cp.zgzcw.com/zgzcw/index.jsp?czid=lottery%2Fssq%2Findex.jsp" target="_self">双色球</a>　
<a href="http://cp.zgzcw.com/zgzcw/index.jsp?czid=lottery%2F7lec%2Findex.jsp" target="_self">七乐彩</a>　
<a href="http://cp.zgzcw.com/zgzcw/index.jsp?czid=lottery%2F3d%2Findex.jsp" target="_self">福彩3D</a>
</dd>
          </dl>
          <p class="shuangseqiu"><a href="http://zhuanti.zgzcw.com/sdsd/ssqjj.shtml" target="_blank"></a></p>

            
        </li>
        <li class="side-menu-07"> 
          <dl class="zcw-nav-dl">
            <dt> <a href="http://cp.zgzcw.com/zgzcw/index.jsp?czid=lottery%2Fdlt%2Findex.jsp" target="_self"><span>体彩</span></a> </dt>
            <dd>
<a href="http://cp.zgzcw.com/zgzcw/index.jsp?czid=lottery%2Fdlt%2Findex.jsp" target="_self">大乐透</a>　
<a href="http://cp.zgzcw.com/zgzcw/index.jsp?czid=lottery%2F7xc%2Findex.jsp" target="_self">七星彩</a>　
<a href="http://cp.zgzcw.com/zgzcw/index.jsp?czid=lottery%2Fpl3%2Findex.jsp" target="_self">排列三</a>
<br>
<a href="http://cp.zgzcw.com/zgzcw/index.jsp?czid=lottery%2Fpl5%2Findex.jsp" target="_self">排列五</a>
</dd>
          </dl>
          <p class="daletou"><a href="http://www.zgzcw.com/wzgg/content_3145.shtml" target="_self"></a></p>
          <p class="pai3"><a href="http://www.zgzcw.com/wzgg/content_2930.shtml" target="_self"></a></p>
          <p class="pai5"><a href="http://www.zgzcw.com/wzgg/content_2948.shtml" target="_blank"></a></p>

            
        </li>
        <li class="side-menu-all"> 
          <!--<a href="http://cp.zgzcw.com/game/jj/index.jsp" target="_blank" class="jjgame">网页游戏<i>>></i></a>--> 
          <a href="http://cp.zgzcw.com/gcdt.jsp" target="_self">更多彩种</a> </li>
      </ul>
    </div>
    <ul class="main-menu">
      <li class="index" t="sy"> <a href="http://www.zgzcw.com/">首页</a> </li>
      <li t="gcdt" class="zjtj-menu" style="position:relative;">
        <div class="zjtj-new-gif" style="position:absolute; top:3px; left:63px;"><img src="http://public.zgzcw.com/newhead/images/news-gif.gif" width="22" height="9" style="float:left"></div>
        <a href="http://cp.zgzcw.com/zjtj/index.jsp" target="_blank">专家推荐</a> <!--<strong> <a href="http://cp.zgzcw.com/dzgendan/index.jsp" type="huodong" m="2">定制跟单</a> <a href="http://cp.zgzcw.com/hemai" type="huodong" m="2">合买大厅</a> </strong> --></li>
      <li t="cpzx"> <a href="http://news.zgzcw.com" type="zixvn" m="0">彩票资讯</a></li>
      <li t="ggtj" class=""> <a href="http://guoguan.zgzcw.com/guoguanCount/guoguan.jsp" type="guoguan" m="0">过关统计</a> <strong> <a href="http://guoguan.zgzcw.com/zhongjiangQuery/zhongjiang.jsp?zongCai=jcz&amp;caizhong=jcz" type="guoguan" m="1">竞彩足球</a> <a href="http://guoguan.zgzcw.com/zhongjiangQuery/zhongjiang.jsp?zongCai=jcl&amp;caizhong=jcl" type="guoguan" m="2">竞彩篮球</a> <a href="http://guoguan.zgzcw.com/zhongjiangQuery/zhongjiang.jsp?zongCai=bd&amp;caizhong=bd" type="guoguan" m="3">北京单场</a> <a href="http://guoguan.zgzcw.com/guoguanCount/guoguan.jsp?zongCai=zc&amp;caizhong=13" type="guoguan" m="4">传统足彩</a> </strong> </li>
      <li t="sszx" class="menu-cur"> <a href="http://saishi.zgzcw.com/" type="saishi" m="0">赛事中心</a> <strong> <a href="http://cp.zgzcw.com/footballCalendar/index.jsp" type="saishi" m="1">足球日历</a> <a href="http://saishi.zgzcw.com/html/310xingxiang.html/" type="saishi" m="2">足彩星相</a> <a href="http://zhiboba.zgzcw.com/" type="saishi" m="3">竞彩直播</a> </strong> </li>
      <li t="plzx"> <a href="http://odds.zgzcw.com" type="peilv" m="0">赔率中心</a> <strong> <a href="http://odds.zgzcw.com/oyzs/">欧亚指数</a> <a href="http://odds.zgzcw.com/bjzs">百家指数</a> <a href="http://odds.zgzcw.com/zc/bf_data.jsp">必发指数</a> </strong> </li>
      <li t="bfzb"> <a href="http://live.zgzcw.com/" type="zhibo" m="0">比分直播</a> <strong> <a href="http://live.zgzcw.com/jz/" type="zhibo" m="1">竞彩足球</a> <a href="http://lanqiu.zgzcw.com/" type="zhibo" m="2">竞彩篮球</a> <a href="http://live.zgzcw.com/bd/" type="zhibo" m="3">北京单场</a> <a href="http://live.zgzcw.com/sfc/" type="zhibo" m="4">传统足彩</a> </strong> </li>
      <li t="cpkj"> <a href="http://guoguan.zgzcw.com/servlet/lotterynumberaction?action=index" type="kaijiang">彩票开奖</a> <strong> <a href="http://guoguan.zgzcw.com/zhongjiangQuery/newzhongjiang.jsp" type="kaijiang" m="2">中奖查询</a> </strong> </li>
      <li class="normal spe-li" t="tubiao"> <a href="http://trend.zgzcw.com/">图表</a> </li>
      <li class="normal spe-li" t="huodong"> <a href="http://www.zgzcw.com/huodong/index.shtml">活动</a> </li>
    </ul>
  </div>
</div>

<div class="minibar"><span class="location">当前位置：</span><a href="http://www.zgzcw.com/" target="_self">中国足彩网</a> <span class="dotline">&gt;</span> <a href="http://saishi.zgzcw.com:80/soccer/" target="_self">赛事中心</a> <span class="dotline">&gt;</span> <span class="indext">杯赛资料</span></div>

<div class="league wapper">
<!--  左侧页面 -->

	
	
	
	
	
		



<div class="left">
			<div class="left_head">
				<dl class="head_dl">
					<dt>
						
				  		
				  		
				  		
				  		
				  			
				  			<img src="http://img.zgzcw.com/zgzcw/matchCenter/league/images/20130423213803.jpg" width="100" height="100" border="0">
				  			
				  		
					</dt>
					<dd>
					
						[欧冠]
				    
					</dd>
				</dl>
				<div class="team_out">
					<div class="team_lian">
	              	<span>赛事选择</span>
	                <div class="leagueSelBox clearfix" style="">
					    <div class="xuanze">
					        <div class="ssxz"></div>
					        <!-- <a href=""><span class="guanbi">关闭</span></a> -->
					    </div>
					    <ul class="left2 chooseHead">
					            <li class="nav01" id="nav01" data-id="国际赛事"><em class="icon1"></em>国际赛事</li>
					            <li class="nav02 crt" id="nav02" data-id="欧洲赛事"><em class="icon2"></em>欧洲赛事</li>
					            <li class="nav03" id="nav03" data-id="美洲赛事"><em class="icon3"></em>美洲赛事</li>
					            <li class="nav04" id="nav04" data-id="亚洲赛事"><em class="icon4"></em>亚洲赛事</li>
					            <li class="nav05" id="nav05" data-id="非洲赛事"><em class="icon5"></em>非洲赛事</li>
					    </ul>
					    <div class="gamesSelect fl" style="width:470px;">
						    <div class="right2 rlea nav01_content" style="display: none;">
							    <dl class="league clearfix">
							    	<dd data-id="世界杯">
							    		<a title="世界杯" href="/soccer/cup/75">世界杯</a>
							    	</dd>
							    	<dd data-id="世欧预">
							    		<a title="世欧预" href="/soccer/cup/650">世欧预</a>
							    	</dd>
							    	<dd data-id="世南预">
							    		<a title="世南预" href="/soccer/cup/652">世南预</a>
							    	</dd>
							    	<dd data-id="世北预">
							    		<a title="世北预" href="/soccer/cup/653">世北预</a>
							    	</dd>
							    	<dd><a href="/soccer/fifaRank" target="_blank">FIFA</a></dd>
									<div class="clear"></div>
							    </dl>
						    </div>
						    <div class="right2 rlea nav02_content">
							    <dl class="league clearfix">
							    	<dd><a href="/soccer/league/36/" target="_blank">英超</a></dd> 
							        <dd><a href="/soccer/league/37/" target="_blank">英冠</a></dd> 
							        <dd><a href="/soccer/league/39/" target="_blank">英甲</a></dd> 
							        <dd><a href="/soccer/league/34/" target="_blank">意甲</a></dd> 
							        <dd><a href="/soccer/league/40/" target="_blank">意乙</a></dd> 
							        <dd><a href="/soccer/league/8/" target="_blank">德甲</a></dd>  
							        <dd><a href="/soccer/league/9/" target="_blank">德乙</a></dd> 
							        <dd><a href="/soccer/league/31/" target="_blank">西甲</a></dd>  
							        <dd><a href="/soccer/league/33/" target="_blank">西乙</a></dd> 
							        <dd><a href="/soccer/league/11/" target="_blank">法甲</a></dd>  
							        <dd><a href="/soccer/league/12/" target="_blank">法乙</a></dd> 
							        <dd><a href="/soccer/league/16/" target="_blank">荷甲</a></dd> 
							        <dd><a href="/soccer/league/17/" target="_blank">荷乙</a></dd> 
							        <dd><a href="/soccer/league/26/" target="_blank">瑞超</a></dd> 
							        <dd><a href="/soccer/league/122/" target="_blank">瑞甲</a></dd> 
							        <dd><a href="/soccer/league/22/" target="_blank">挪超</a></dd>  
							        <dd><a href="/soccer/league/23/" target="_blank">葡超</a></dd> 
							        <dd><a href="/soccer/league/157/" target="_blank">葡甲</a></dd> 
							        <dd><a href="/soccer/league/30/" target="_blank">土超</a></dd> 
							        <dd><a href="/soccer/league/10/" target="_blank">俄超</a></dd> 
							        <dd><a href="/soccer/league/13/" target="_blank">芬超</a></dd> 
							        <dd><a href="/soccer/league/212/" target="_blank">芬甲</a></dd> 
							        <dd><a href="/soccer/league/29/" target="_blank">苏超</a></dd> 
							        <dd><a href="/soccer/league/5/" target="_blank">比甲</a></dd> 
							        <dd><a href="/soccer/league/1/" target="_blank">爱超</a></dd> 
							        <dd><a href="/soccer/league/135/" target="_blank">威超</a></dd> 
							        <dd><a href="/soccer/league/235/" target="_blank">俄甲</a></dd> 
							        <dd><a href="/soccer/league/123/" target="_blank">挪甲</a></dd> 
							        <dd><a href="/soccer/league/118/" target="_blank">以超</a></dd> 
							        <dd><a href="/soccer/league/119/" target="_blank">乌超</a></dd> 
							        <dd><a href="/soccer/league/7/" target="_blank">丹超</a></dd> 
							        <dd><a href="/soccer/league/32" target="_blank">希超</a></dd>
							        <dd><a href="/soccer/cup/103" target="_blank">欧冠杯</a></dd>  
							        <dd><a href="/soccer/cup/113" target="_blank">欧罗巴</a></dd> 
							        <dd><a href="/soccer/cup/67" target="_blank">欧洲杯</a></dd>     
									<div class="clear"></div>
							    </dl>
						    </div>
						    <div class="right2 rlea nav03_content" style="display: none;">
							    <dl class="league clearfix">
							        <dd><a href="/soccer/league/2" target="_blank">阿甲　</a></dd> 
							        <dd><a href="/soccer/league/423" target="_blank">阿乙　</a></dd> 
							        <dd><a href="/soccer/league/358" target="_blank">巴乙　</a></dd> 
							        <dd><a href="/soccer/league/4" target="_blank">巴西甲</a></dd> 
							        <dd><a href="/soccer/league/21" target="_blank">美职联</a></dd> 
							        <dd><a href="/soccer/league/415" target="_blank">智利甲</a></dd> 
							        <dd><a href="/soccer/league/611" target="_blank">智利乙</a></dd> 
							        <dd><a href="/soccer/league/250" target="_blank">哥伦甲</a></dd> 
							        <dd><a href="/soccer/league/354" target="_blank">巴拉甲</a></dd>  
							        <dd><a href="/soccer/league/240" target="_blank">乌拉甲</a></dd> 
							        <dd><a href="/soccer/league/140" target="_blank">墨西联</a></dd> 
							        <dd><a href="/soccer/league/242" target="_blank">秘鲁甲</a></dd>  
							        <dd><a href="/soccer/league/593" target="_blank">玻利甲</a></dd> 
							        <dd><a href="/soccer/cup/224" target="_blank">美洲杯</a></dd> 
							        <dd><a href="/soccer/cup/89" target="_blank">自由杯</a></dd>  
							        <dd><a href="/soccer/cup/232" target="_blank">美金杯</a></dd> 
							        <dd><a href="/soccer/cup/263" target="_blank">南球杯</a></dd> 
									<div class="clear"></div>
							    </dl>
						    </div>
						    <div class="right2 rlea nav04_content" style="display: none;">
							    <dl class="league clearfix">
							        <dd><a href="/soccer/league/60" target="_blank">中超　</a></dd>  
							        <dd><a href="/soccer/league/61" target="_blank">中甲　</a></dd> 
							        <dd><a href="/soccer/league/25" target="_blank">日职　</a></dd> 
							        <dd><a href="/soccer/league/284" target="_blank">日乙　</a></dd> 
							        <dd><a href="/soccer/league/15" target="_blank">韩职联</a></dd> 
							        <dd><a href="/soccer/league/273" target="_blank">澳超　</a></dd> 
							        <dd><a href="/soccer/league/279" target="_blank">伊朗超</a></dd> 
							        <dd><a href="/soccer/league/292" target="_blank">沙特联</a></dd> 
							        <dd><a href="/soccer/league/332" target="_blank">阿曼联</a></dd>  
							        <dd><a href="/soccer/league/1078" target="_blank">约旦甲</a></dd> 
							        <dd><a href="/soccer/league/766" target="_blank">越南联</a></dd> 
							        <dd><a href="/soccer/league/772" target="_blank">乌兹超</a></dd> 
							        <dd><a href="/soccer/league/1122" target="_blank">印尼超</a></dd> 
							        <dd><a href="/soccer/cup/87" target="_blank">足协杯</a></dd> 
							        <dd><a href="/soccer/cup/162" target="_blank">日皇杯</a></dd>  
							        <dd><a href="/soccer/cup/72" target="_blank">日联杯</a></dd> 
									<div class="clear"></div>
							    </dl>
						    </div>
						    <div class="right2 rlea nav05_content" style="display: none;">
							    <dl class="league clearfix">
							    	<dd data-id="阿尔甲">
							    		<a title="阿尔甲" href="/soccer/league/193">阿尔甲</a>
							    	</dd>
							    	<dd data-id="利比亚甲">
							    		<a title="利比亚甲" href="/soccer/league/324">利比亚甲</a>
							    	</dd>
							    	<dd data-id="南非超">
							    		<a title="南非超" href="/soccer/league/308">南非超</a>
							    	</dd>
							    	<dd data-id="尼日超">
							    		<a title="尼日超" href="/soccer/league/949">尼日超</a>
							    	</dd>
									<div class="clear"></div>
							    </dl>
						    </div>
						</div>
					</div>
	              </div>
	              <div class="div-select hoverSelect">
	              <span>赛季选择</span>
	                <ul class="select_options">
	                 
	                 
	                  
	                  
	                   <a href="http://saishi.zgzcw.com:80/soccer/cup/103/2016-2017/">
	                  <li>2016-2017</li></a>
	                   
	                   <a href="http://saishi.zgzcw.com:80/soccer/cup/103/2015-2016/">
	                  <li>2015-2016</li></a>
	                   
	                   <a href="http://saishi.zgzcw.com:80/soccer/cup/103/2014-2015/">
	                  <li>2014-2015</li></a>
	                   
	                   <a href="http://saishi.zgzcw.com:80/soccer/cup/103/2013-2014/">
	                  <li>2013-2014</li></a>
	                   
	                   <a href="http://saishi.zgzcw.com:80/soccer/cup/103/2012-2013/">
	                  <li>2012-2013</li></a>
	                   
	                   <a href="http://saishi.zgzcw.com:80/soccer/cup/103/2011-2012/">
	                  <li>2011-2012</li></a>
	                   
	                   <a href="http://saishi.zgzcw.com:80/soccer/cup/103/2010-2011/">
	                  <li>2010-2011</li></a>
	                   
	                   <a href="http://saishi.zgzcw.com:80/soccer/cup/103/2009-2010/">
	                  <li>2009-2010</li></a>
	                   
	                   <a href="http://saishi.zgzcw.com:80/soccer/cup/103/2008-2009/">
	                  <li>2008-2009</li></a>
	                   
	                   <a href="http://saishi.zgzcw.com:80/soccer/cup/103/2007-2008/">
	                  <li>2007-2008</li></a>
	                   
	                   <a href="http://saishi.zgzcw.com:80/soccer/cup/103/2006-2007/">
	                  <li>2006-2007</li></a>
	                   
	                   <a href="http://saishi.zgzcw.com:80/soccer/cup/103/2005-2006/">
	                  <li>2005-2006</li></a>
	                   
	                   <a href="http://saishi.zgzcw.com:80/soccer/cup/103/2004-2005/">
	                  <li>2004-2005</li></a>
	                   
	                   <a href="http://saishi.zgzcw.com:80/soccer/cup/103/2003-2004/">
	                  <li>2003-2004</li></a>
	                   
	                 
	                              
	                </ul>
              </div>
				</div>
			</div>
			
			<div class="tongji_list">
				<div>球队列表</div>
				<ul>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/10647" target="_blank" class="a1" title="特费奥里">
					<li>特费奥里</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/6997" target="_blank" class="a1" title="莫格伦">
					<li>莫格伦</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/5915" target="_blank" class="a1" title="EB斯特莱">
					<li>EB斯特莱</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/4398" target="_blank" class="a1" title="阿克图比">
					<li>阿克图比</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/4396" target="_blank" class="a1" title="马克顿尼亚">
					<li>马克顿尼亚</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/3572" target="_blank" class="a1" title="KF地拉那">
					<li>KF地拉那</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/2560" target="_blank" class="a1" title="兹林尼">
					<li>兹林尼</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/2559" target="_blank" class="a1" title="谢里夫">
					<li>谢里夫</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/2555" target="_blank" class="a1" title="皮尤尼克">
					<li>皮尤尼克</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/2526" target="_blank" class="a1" title="FK巴库">
					<li>FK巴库</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/2442" target="_blank" class="a1" title="WIT格鲁吉">
					<li>WIT格鲁吉</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/2435" target="_blank" class="a1" title="巴特">
					<li>巴特</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/1649" target="_blank" class="a1" title="格伦托兰">
					<li>格伦托兰</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/1566" target="_blank" class="a1" title="锡瓦斯">
					<li>锡瓦斯</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/1352" target="_blank" class="a1" title="布拉迪斯">
					<li>布拉迪斯</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/1216" target="_blank" class="a1" title="蒂米什瓦">
					<li>蒂米什瓦</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/1175" target="_blank" class="a1" title="莱尔">
					<li>莱尔</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/961" target="_blank" class="a1" title="圣塔祖利">
					<li>圣塔祖利</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/957" target="_blank" class="a1" title="爱尔兰人">
					<li>爱尔兰人</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/725" target="_blank" class="a1" title="马里博尔">
					<li>马里博尔</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/722" target="_blank" class="a1" title="贝尔游击">
					<li>贝尔游击</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/716" target="_blank" class="a1" title="顿矿工">
					<li>顿矿工</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/711" target="_blank" class="a1" title="哈夫纳夫">
					<li>哈夫纳夫</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/702" target="_blank" class="a1" title="迪德朗">
					<li>迪德朗</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/693" target="_blank" class="a1" title="伊兰纳斯">
					<li>伊兰纳斯</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/678" target="_blank" class="a1" title="布斯巴达">
					<li>布斯巴达</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/674" target="_blank" class="a1" title="利瓦迪亚">
					<li>利瓦迪亚</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/653" target="_blank" class="a1" title="萨迪纳摩">
					<li>萨迪纳摩</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/651" target="_blank" class="a1" title="斯拉维亚">
					<li>斯拉维亚</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/617" target="_blank" class="a1" title="索斯基">
					<li>索斯基</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/609" target="_blank" class="a1" title="克拉科夫">
					<li>克拉科夫</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/603" target="_blank" class="a1" title="文茨皮斯">
					<li>文茨皮斯</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/566" target="_blank" class="a1" title="帕纳辛纳">
					<li>帕纳辛纳</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/475" target="_blank" class="a1" title="斯塔贝克">
					<li>斯塔贝克</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/466" target="_blank" class="a1" title="里斯本">
					<li>里斯本</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/426" target="_blank" class="a1" title="卡尔马">
					<li>卡尔马</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/416" target="_blank" class="a1" title="莫迪纳摩">
					<li>莫迪纳摩</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/386" target="_blank" class="a1" title="英特土尔">
					<li>英特土尔</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/250" target="_blank" class="a1" title="特温特">
					<li>特温特</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/227" target="_blank" class="a1" title="哥本哈根">
					<li>哥本哈根</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/180" target="_blank" class="a1" title="波希米亚">
					<li>波希米亚</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/153" target="_blank" class="a1" title="安德莱赫">
					<li>安德莱赫</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/70" target="_blank" class="a1" title="凯尔特人">
					<li>凯尔特人</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/9" target="_blank" class="a1" title="萨尔茨堡">
					<li>萨尔茨堡</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/82" target="_blank" class="a1" title="皇马">
					<li>皇马</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/176" target="_blank" class="a1" title="佛罗伦萨">
					<li>佛罗伦萨</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/205" target="_blank" class="a1" title="里昂">
					<li>里昂</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/19" target="_blank" class="a1" title="阿森纳">
					<li>阿森纳</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/24" target="_blank" class="a1" title="切尔西">
					<li>切尔西</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/86" target="_blank" class="a1" title="塞维利亚">
					<li>塞维利亚</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/27" target="_blank" class="a1" title="曼联">
					<li>曼联</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/407" target="_blank" class="a1" title="莫陆军">
					<li>莫陆军</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/211" target="_blank" class="a1" title="马赛">
					<li>马赛</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/208" target="_blank" class="a1" title="波尔多">
					<li>波尔多</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/88" target="_blank" class="a1" title="拜仁">
					<li>拜仁</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/155" target="_blank" class="a1" title="斯图加特">
					<li>斯图加特</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/149" target="_blank" class="a1" title="沃夫斯堡">
					<li>沃夫斯堡</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/468" target="_blank" class="a1" title="波尔图">
					<li>波尔图</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/150" target="_blank" class="a1" title="AC米兰">
					<li>AC米兰</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/4435" target="_blank" class="a1" title="尤尼里亚">
					<li>尤尼里亚</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/84" target="_blank" class="a1" title="巴萨">
					<li>巴萨</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/152" target="_blank" class="a1" title="国际米兰">
					<li>国际米兰</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/130" target="_blank" class="a1" title="标准列日">
					<li>标准列日</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/712" target="_blank" class="a1" title="基辅迪纳">
					<li>基辅迪纳</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/25" target="_blank" class="a1" title="利物浦">
					<li>利物浦</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/449" target="_blank" class="a1" title="苏黎世">
					<li>苏黎世</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/695" target="_blank" class="a1" title="德布勒森">
					<li>德布勒森</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/568" target="_blank" class="a1" title="奥林匹亚">
					<li>奥林匹亚</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/166" target="_blank" class="a1" title="尤文图斯">
					<li>尤文图斯</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/441" target="_blank" class="a1" title="喀山宝石">
					<li>喀山宝石</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/234" target="_blank" class="a1" title="阿尔克马">
					<li>阿尔克马</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/703" target="_blank" class="a1" title="希腊人">
					<li>希腊人</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/77" target="_blank" class="a1" title="流浪者">
					<li>流浪者</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/529" target="_blank" class="a1" title="贝西克塔">
					<li>贝西克塔</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/109" target="_blank" class="a1" title="马竞">
					<li>马竞</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/607" target="_blank" class="a1" title="海法马卡">
					<li>海法马卡</li>
				</a>
				
				</ul>
			</div>
		</div>
<script>
	$(function(){
		$('.team_lian span').mouseover(function(){
			$(this).siblings('.leagueSelBox').show();
		});
		$('.hoverSelect span').mouseover(function(){
			$(this).siblings('.select_options').show();
		});
		
		// $('.xuanze a').bind('click',function(e){
		// 	$(this).parents('.leagueSelBox').hide();
		// 	e.stopPropagation();
		// 	e.preventDefault();
		// })
		$('.team_lian').mouseleave(function(){
			$(this).find('.leagueSelBox').hide();
		});
		$('.gamesSelect dd').mouseover(function(){
			$(this).addClass('crt');
		}).mouseleave(function(){
			$(this).removeClass('crt');
		})
		//选项卡切换
		function tabsChange(){
			var chosenVar = $('.chooseHead').find('.crt').attr('id');
			$('.gamesSelect').find('.'+chosenVar+'_content').show().siblings('.rlea').hide();
		}
		tabsChange();
		$('.chooseHead li').click(function(){
			$(this).addClass('crt').siblings('li').removeClass('crt');
			tabsChange();
		})
	})
</script>

<!-- 右侧页面 -->
	<div class="league_right">
		<div class="cupBlock01" style="position:relative;">

			<div class="cup" style="width:780px;overflow:hidden;">
			<div class="table_head cup-t" style="position:relative;">
				<!-- <span>赛事</span> -->
				<!-- <ul id="tabs9"> -->
				<ul id="tabs9" style="height: 40px; width: 2000px; overflow: hidden; position: relative; left: -230px;">
					
					
						
						<li id="main_1" fl="yxMatch11">第一圈
						</li> 
					
						
						<li id="main_2" fl="yxMatch21">第二圈
						</li> 
					
						
						<li id="main_3" fl="yxMatch31">第三圈
						</li> 
					
						
						<li id="main_4" fl="yxMatch41">附加赛
						</li> 
					
						
						<li id="main_5" fl="yxMatch51">分组赛
						</li> 
					
						
						<li id="main_6" fl="yxMatch61">十六强
						</li> 
					
						
						<li id="main_7" fl="yxMatch71">半准决赛
						</li> 
					
						
						<li id="main_8" fl="yxMatch81">准决赛
						</li> 
					
						
						<li id="main_9" fl="yxMatch91" class="cur">决赛
						</li> 
					
				</ul>
			</div>
			<!-- <h1 class="cupBlock01_h1"></h1> -->
			
			
				<ul class="tabs9_main1" id="tabs9_main_1" style="display:none;">

					<div class="rounds rounds_new">
						<div class="rounds_b">
							<ul>
								
								
									<li class="current" id="yxMatch11"><a href="javascript:void(0);">
										
										
											全部
										
										
										</a>
									</li>
									
								
								
							</ul>
						</div>
						<div class="clear"></div>
					</div>
					
					
						<div class="rounds_con" id="div_yxMatch11" style="display:block">
							<table width="100%" border="0" cellspacing="0" cellpadding="0" class="zstab">
								<thead>
									<tr>
				                        <th width="90">时间</th>
							            <th width="50">主队</th>
							            <th width="55">比分</th>
							            <th width="50">客队</th>
							            <th width="45">半场</th>
							            <th width="65">让球</th>
							            
										<th width="55">数据</th>
										
									</tr>
								</thead>
								
											<tbody><tr>
											<td>2009-07-01 00:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/957" target="_blank" title="爱尔兰人">爱尔兰人</a></td>
											<td>			
												
												
													0:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/6997" target="_blank" title="莫格伦">莫格伦</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1513932/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1513932/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1513932/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-07-02 02:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/10647" target="_blank" title="特费奥里">特费奥里</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/961" target="_blank" title="圣塔祖利">圣塔祖利</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1513875/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1513875/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1513875/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-07-08 01:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/961" target="_blank" title="圣塔祖利">圣塔祖利</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/10647" target="_blank" title="特费奥里">特费奥里</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1513112/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1513112/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1513112/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-07-09 02:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/6997" target="_blank" title="莫格伦">莫格伦</a></td>
											<td>			
												
												
													4:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/957" target="_blank" title="爱尔兰人">爱尔兰人</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1513055/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1513055/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1513055/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
							</tbody></table>
						</div>						
										
				
				</ul>
			
				<ul class="tabs9_main1" id="tabs9_main_2" style="display:none;">

					<div class="rounds rounds_new">
						<div class="rounds_b">
							<ul>
								
								
									<li class="current" id="yxMatch21"><a href="javascript:void(0);">
										
										
											全部
										
										
										</a>
									</li>
									
								
								
							</ul>
						</div>
						<div class="clear"></div>
					</div>
					
					
						<div class="rounds_con" id="div_yxMatch21" style="display:block">
							<table width="100%" border="0" cellspacing="0" cellpadding="0" class="zstab">
								<thead>
									<tr>
				                        <th width="90">时间</th>
							            <th width="50">主队</th>
							            <th width="55">比分</th>
							            <th width="50">客队</th>
							            <th width="45">半场</th>
							            <th width="65">让球</th>
							            
										<th width="55">数据</th>
										
									</tr>
								</thead>
								
											<tbody><tr>
											<td>2009-07-14 23:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/4396" target="_blank" title="马克顿尼亚">马克顿尼亚</a></td>
											<td>			
												
												
													0:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2435" target="_blank" title="巴特">巴特</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1512155/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1512155/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1512155/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-07-14 23:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2555" target="_blank" title="皮尤尼克">皮尤尼克</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/653" target="_blank" title="萨迪纳摩">萨迪纳摩</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1512156/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1512156/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1512156/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-07-15 02:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5915" target="_blank" title="EB斯特莱">EB斯特莱</a></td>
											<td>			
												
												
													0:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/703" target="_blank" title="希腊人">希腊人</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1512213/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1512213/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1512213/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-07-15 02:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/693" target="_blank" title="伊兰纳斯">伊兰纳斯</a></td>
											<td>			
												
												
													2:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2526" target="_blank" title="FK巴库">FK巴库</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1512214/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1512214/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1512214/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-07-15 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1175" target="_blank" title="莱尔">莱尔</a></td>
											<td>			
												
												
													0:4
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/722" target="_blank" title="贝尔游击">贝尔游击</a></td>
											<td>			
												
												
													0:3
												
														
											</td>
											<td align="center">
											
											
												受让球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1512221/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1512221/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1512221/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-07-15 23:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/603" target="_blank" title="文茨皮斯">文茨皮斯</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/702" target="_blank" title="迪德朗">迪德朗</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												两球/两球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1512018/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1512018/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1512018/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-07-15 23:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/386" target="_blank" title="英特土尔">英特土尔</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2559" target="_blank" title="谢里夫">谢里夫</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1512030/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1512030/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1512030/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-07-15 23:59</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2442" target="_blank" title="WIT格鲁吉">WIT格鲁吉</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/725" target="_blank" title="马里博尔">马里博尔</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1512037/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1512037/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1512037/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-07-16 00:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/617" target="_blank" title="索斯基">索斯基</a></td>
											<td>			
												
												
													4:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/961" target="_blank" title="圣塔祖利">圣塔祖利</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												三球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1512065/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1512065/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1512065/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-07-16 01:50</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/607" target="_blank" title="海法马卡">海法马卡</a></td>
											<td>			
												
												
													6:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1649" target="_blank" title="格伦托兰">格伦托兰</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												球半/两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1512092/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1512092/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1512092/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-07-16 02:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3572" target="_blank" title="KF地拉那">KF地拉那</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/475" target="_blank" title="斯塔贝克">斯塔贝克</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1512093/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1512093/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1512093/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-07-16 02:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/695" target="_blank" title="德布勒森">德布勒森</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/426" target="_blank" title="卡尔马">卡尔马</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1512094/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1512094/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1512094/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-07-16 02:15</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/227" target="_blank" title="哥本哈根">哥本哈根</a></td>
											<td>			
												
												
													6:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/6997" target="_blank" title="莫格伦">莫格伦</a></td>
											<td>			
												
												
													3:0
												
														
											</td>
											<td align="center">
											
											
												球半/两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1512098/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1512098/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1512098/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-07-16 02:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/9" target="_blank" title="萨尔茨堡">萨尔茨堡</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/180" target="_blank" title="波希米亚">波希米亚</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												球半/两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1512100/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1512100/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1512100/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-07-16 02:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2560" target="_blank" title="兹林尼">兹林尼</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1352" target="_blank" title="布拉迪斯">布拉迪斯</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1512101/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1512101/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1512101/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-07-16 02:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/609" target="_blank" title="克拉科夫">克拉科夫</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/674" target="_blank" title="利瓦迪亚">利瓦迪亚</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1512102/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1512102/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1512102/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-07-16 03:15</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/711" target="_blank" title="哈夫纳夫">哈夫纳夫</a></td>
											<td>			
												
												
													0:4
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/4398" target="_blank" title="阿克图比">阿克图比</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1512115/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1512115/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1512115/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-07-21 23:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2526" target="_blank" title="FK巴库">FK巴库</a></td>
											<td>			
												
												
													4:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/693" target="_blank" title="伊兰纳斯">伊兰纳斯</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1511134/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1511134/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1511134/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-07-21 23:59</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2435" target="_blank" title="巴特">巴特</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/4396" target="_blank" title="马克顿尼亚">马克顿尼亚</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												球半/两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1511145/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1511145/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1511145/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-07-22 00:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/961" target="_blank" title="圣塔祖利">圣塔祖利</a></td>
											<td>			
												
												
													0:5
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/617" target="_blank" title="索斯基">索斯基</a></td>
											<td>			
												
												
													0:3
												
														
											</td>
											<td align="center">
											
											
												受让两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1511172/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1511172/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1511172/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-07-22 01:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/703" target="_blank" title="希腊人">希腊人</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/5915" target="_blank" title="EB斯特莱">EB斯特莱</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1511173/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1511173/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1511173/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-07-22 01:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2559" target="_blank" title="谢里夫">谢里夫</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/386" target="_blank" title="英特土尔">英特土尔</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1511174/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1511174/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1511174/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-07-22 01:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1352" target="_blank" title="布拉迪斯">布拉迪斯</a></td>
											<td>			
												
												
													4:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2560" target="_blank" title="兹林尼">兹林尼</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1511188/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1511188/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1511188/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-07-22 02:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/653" target="_blank" title="萨迪纳摩">萨迪纳摩</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2555" target="_blank" title="皮尤尼克">皮尤尼克</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												球半/两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1511196/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1511196/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1511196/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-07-22 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/475" target="_blank" title="斯塔贝克">斯塔贝克</a></td>
											<td>			
												
												
													4:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/3572" target="_blank" title="KF地拉那">KF地拉那</a></td>
											<td>			
												
												
													3:0
												
														
											</td>
											<td align="center">
											
											
												球半/两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1511207/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1511207/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1511207/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-07-22 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/722" target="_blank" title="贝尔游击">贝尔游击</a></td>
											<td>			
												
												
													8:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1175" target="_blank" title="莱尔">莱尔</a></td>
											<td>			
												
												
													4:0
												
														
											</td>
											<td align="center">
											
											
												两球半/三球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1511208/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1511208/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1511208/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-07-22 23:59</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/4398" target="_blank" title="阿克图比">阿克图比</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/711" target="_blank" title="哈夫纳夫">哈夫纳夫</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1511011/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1511011/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1511011/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-07-22 23:59</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/702" target="_blank" title="迪德朗">迪德朗</a></td>
											<td>			
												
												
													1:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/603" target="_blank" title="文茨皮斯">文茨皮斯</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												受让半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1511012/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1511012/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1511012/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-07-22 23:59</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/674" target="_blank" title="利瓦迪亚">利瓦迪亚</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/609" target="_blank" title="克拉科夫">克拉科夫</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1511013/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1511013/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1511013/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-07-23 01:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/426" target="_blank" title="卡尔马">卡尔马</a></td>
											<td>			
												
												
													3:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/695" target="_blank" title="德布勒森">德布勒森</a></td>
											<td>			
												
												
													2:1
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1511035/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1511035/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1511035/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-07-23 01:50</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1649" target="_blank" title="格伦托兰">格伦托兰</a></td>
											<td>			
												
												
													0:4
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/607" target="_blank" title="海法马卡">海法马卡</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1511068/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1511068/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1511068/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-07-23 02:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/6997" target="_blank" title="莫格伦">莫格伦</a></td>
											<td>			
												
												
													0:6
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/227" target="_blank" title="哥本哈根">哥本哈根</a></td>
											<td>			
												
												
													0:4
												
														
											</td>
											<td align="center">
											
											
												受让一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1511076/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1511076/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1511076/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-07-23 02:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/180" target="_blank" title="波希米亚">波希米亚</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/9" target="_blank" title="萨尔茨堡">萨尔茨堡</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1511077/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1511077/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1511077/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-07-23 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/725" target="_blank" title="马里博尔">马里博尔</a></td>
											<td>			
												
												
													3:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2442" target="_blank" title="WIT格鲁吉">WIT格鲁吉</a></td>
											<td>			
												
												
													2:1
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1511084/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1511084/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1511084/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
							</tbody></table>
						</div>						
										
				
				</ul>
			
				<ul class="tabs9_main1" id="tabs9_main_3" style="display:none;">

					<div class="rounds rounds_new">
						<div class="rounds_b">
							<ul>
								
								
									<li class="current" id="yxMatch31"><a href="javascript:void(0);">
										
										
											全部
										
										
										</a>
									</li>
									
								
								
							</ul>
						</div>
						<div class="clear"></div>
					</div>
					
					
						<div class="rounds_con" id="div_yxMatch31" style="display:block">
							<table width="100%" border="0" cellspacing="0" cellpadding="0" class="zstab">
								<thead>
									<tr>
				                        <th width="90">时间</th>
							            <th width="50">主队</th>
							            <th width="55">比分</th>
							            <th width="50">客队</th>
							            <th width="45">半场</th>
							            <th width="65">让球</th>
							            
										<th width="55">数据</th>
										
									</tr>
								</thead>
								
											<tbody><tr>
											<td>2009-07-28 23:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2526" target="_blank" title="FK巴库">FK巴库</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/617" target="_blank" title="索斯基">索斯基</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1509941/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1509941/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1509941/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-07-28 23:59</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/4398" target="_blank" title="阿克图比">阿克图比</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/607" target="_blank" title="海法马卡">海法马卡</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1509948/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1509948/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1509948/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-07-29 02:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/678" target="_blank" title="布斯巴达">布斯巴达</a></td>
											<td>			
												
												
													3:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/566" target="_blank" title="帕纳辛纳">帕纳辛纳</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1509987/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1509987/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1509987/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-07-29 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/153" target="_blank" title="安德莱赫">安德莱赫</a></td>
											<td>			
												
												
													5:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1566" target="_blank" title="锡瓦斯">锡瓦斯</a></td>
											<td>			
												
												
													3:0
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1510003/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1510003/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1510003/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-07-29 23:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/603" target="_blank" title="文茨皮斯">文茨皮斯</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2435" target="_blank" title="巴特">巴特</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1509742/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1509742/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1509742/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-07-29 23:59</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/674" target="_blank" title="利瓦迪亚">利瓦迪亚</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/695" target="_blank" title="德布勒森">德布勒森</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1509795/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1509795/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1509795/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-07-30 01:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2559" target="_blank" title="谢里夫">谢里夫</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/651" target="_blank" title="斯拉维亚">斯拉维亚</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1509814/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1509814/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1509814/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-07-30 01:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/716" target="_blank" title="顿矿工">顿矿工</a></td>
											<td>			
												
												
													2:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1216" target="_blank" title="蒂米什瓦">蒂米什瓦</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												球半/两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1509815/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1509815/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1509815/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-07-30 01:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/703" target="_blank" title="希腊人">希腊人</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/722" target="_blank" title="贝尔游击">贝尔游击</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1509816/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1509816/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1509816/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-07-30 02:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1352" target="_blank" title="布拉迪斯">布拉迪斯</a></td>
											<td>			
												
												
													0:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/568" target="_blank" title="奥林匹亚">奥林匹亚</a></td>
											<td>			
												
												
													0:2
												
														
											</td>
											<td align="center">
											
											
												受让半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1509842/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1509842/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1509842/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-07-30 02:15</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/227" target="_blank" title="哥本哈根">哥本哈根</a></td>
											<td>			
												
												
													3:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/475" target="_blank" title="斯塔贝克">斯塔贝克</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1509845/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1509845/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1509845/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-07-30 02:15</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/449" target="_blank" title="苏黎世">苏黎世</a></td>
											<td>			
												
												
													2:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/725" target="_blank" title="马里博尔">马里博尔</a></td>
											<td>			
												
												
													2:2
												
														
											</td>
											<td align="center">
											
											
												球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1509846/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1509846/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1509846/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-07-30 02:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/9" target="_blank" title="萨尔茨堡">萨尔茨堡</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/653" target="_blank" title="萨迪纳摩">萨迪纳摩</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1509848/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1509848/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1509848/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-07-30 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/70" target="_blank" title="凯尔特人">凯尔特人</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/416" target="_blank" title="莫迪纳摩">莫迪纳摩</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1509857/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1509857/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1509857/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-07-30 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/466" target="_blank" title="里斯本">里斯本</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/250" target="_blank" title="特温特">特温特</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1509871/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1509871/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1509871/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-08-05 01:50</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/607" target="_blank" title="海法马卡">海法马卡</a></td>
											<td>			
												
												
													4:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/4398" target="_blank" title="阿克图比">阿克图比</a></td>
											<td>			
												
												
													2:3
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1508610/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1508610/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1508610/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-08-05 02:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1566" target="_blank" title="锡瓦斯">锡瓦斯</a></td>
											<td>			
												
												
													3:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/153" target="_blank" title="安德莱赫">安德莱赫</a></td>
											<td>			
												
												
													2:1
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1508611/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1508611/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1508611/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-08-05 02:15</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/653" target="_blank" title="萨迪纳摩">萨迪纳摩</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/9" target="_blank" title="萨尔茨堡">萨尔茨堡</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1508614/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1508614/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1508614/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-08-05 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/566" target="_blank" title="帕纳辛纳">帕纳辛纳</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/678" target="_blank" title="布斯巴达">布斯巴达</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1508621/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1508621/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1508621/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-08-05 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/250" target="_blank" title="特温特">特温特</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/466" target="_blank" title="里斯本">里斯本</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1508622/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1508622/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1508622/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-08-05 23:59</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/416" target="_blank" title="莫迪纳摩">莫迪纳摩</a></td>
											<td>			
												
												
													0:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/70" target="_blank" title="凯尔特人">凯尔特人</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1508447/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1508447/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1508447/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-08-05 23:59</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2435" target="_blank" title="巴特">巴特</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/603" target="_blank" title="文茨皮斯">文茨皮斯</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1508448/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1508448/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1508448/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-08-06 01:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/617" target="_blank" title="索斯基">索斯基</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2526" target="_blank" title="FK巴库">FK巴库</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1508468/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1508468/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1508468/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-08-06 01:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1216" target="_blank" title="蒂米什瓦">蒂米什瓦</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/716" target="_blank" title="顿矿工">顿矿工</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1508469/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1508469/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1508469/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-08-06 02:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/695" target="_blank" title="德布勒森">德布勒森</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/674" target="_blank" title="利瓦迪亚">利瓦迪亚</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1508476/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1508476/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1508476/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-08-06 02:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/651" target="_blank" title="斯拉维亚">斯拉维亚</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2559" target="_blank" title="谢里夫">谢里夫</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1508477/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1508477/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1508477/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-08-06 02:15</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/725" target="_blank" title="马里博尔">马里博尔</a></td>
											<td>			
												
												
													0:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/449" target="_blank" title="苏黎世">苏黎世</a></td>
											<td>			
												
												
													0:2
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1508496/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1508496/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1508496/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-08-06 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/475" target="_blank" title="斯塔贝克">斯塔贝克</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/227" target="_blank" title="哥本哈根">哥本哈根</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1508501/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1508501/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1508501/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-08-06 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/568" target="_blank" title="奥林匹亚">奥林匹亚</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1352" target="_blank" title="布拉迪斯">布拉迪斯</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												球半/两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1508502/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1508502/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1508502/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-08-06 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/722" target="_blank" title="贝尔游击">贝尔游击</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/703" target="_blank" title="希腊人">希腊人</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1508503/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1508503/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1508503/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
							</tbody></table>
						</div>						
										
				
				</ul>
			
				<ul class="tabs9_main1" id="tabs9_main_4" style="display:none;">

					<div class="rounds rounds_new">
						<div class="rounds_b">
							<ul>
								
								
									<li class="current" id="yxMatch41"><a href="javascript:void(0);">
										
										
											全部
										
										
										</a>
									</li>
									
								
								
							</ul>
						</div>
						<div class="clear"></div>
					</div>
					
					
						<div class="rounds_con" id="div_yxMatch41" style="display:block">
							<table width="100%" border="0" cellspacing="0" cellpadding="0" class="zstab">
								<thead>
									<tr>
				                        <th width="90">时间</th>
							            <th width="50">主队</th>
							            <th width="55">比分</th>
							            <th width="50">客队</th>
							            <th width="45">半场</th>
							            <th width="65">让球</th>
							            
										<th width="55">数据</th>
										
									</tr>
								</thead>
								
											<tbody><tr>
											<td>2009-08-19 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1216" target="_blank" title="蒂米什瓦">蒂米什瓦</a></td>
											<td>			
												
												
													0:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/155" target="_blank" title="斯图加特">斯图加特</a></td>
											<td>			
												
												
													0:2
												
														
											</td>
											<td align="center">
											
											
												受让半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1505213/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1505213/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1505213/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-08-19 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/70" target="_blank" title="凯尔特人">凯尔特人</a></td>
											<td>			
												
												
													0:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/19" target="_blank" title="阿森纳">阿森纳</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1505214/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1505214/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1505214/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-08-19 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/466" target="_blank" title="里斯本">里斯本</a></td>
											<td>			
												
												
													2:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/176" target="_blank" title="佛罗伦萨">佛罗伦萨</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1505215/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1505215/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1505215/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-08-19 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/227" target="_blank" title="哥本哈根">哥本哈根</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/703" target="_blank" title="希腊人">希腊人</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1505216/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1505216/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1505216/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-08-19 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2559" target="_blank" title="谢里夫">谢里夫</a></td>
											<td>			
												
												
													0:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/568" target="_blank" title="奥林匹亚">奥林匹亚</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1505217/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1505217/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1505217/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-08-20 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/9" target="_blank" title="萨尔茨堡">萨尔茨堡</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/607" target="_blank" title="海法马卡">海法马卡</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1505085/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1505085/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1505085/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-08-20 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/617" target="_blank" title="索斯基">索斯基</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/695" target="_blank" title="德布勒森">德布勒森</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1505086/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1505086/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1505086/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-08-20 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/566" target="_blank" title="帕纳辛纳">帕纳辛纳</a></td>
											<td>			
												
												
													2:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/109" target="_blank" title="马竞">马竞</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1505087/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1505087/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1505087/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-08-20 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/205" target="_blank" title="里昂">里昂</a></td>
											<td>			
												
												
													5:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/153" target="_blank" title="安德莱赫">安德莱赫</a></td>
											<td>			
												
												
													4:0
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1505088/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1505088/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1505088/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-08-20 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/603" target="_blank" title="文茨皮斯">文茨皮斯</a></td>
											<td>			
												
												
													0:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/449" target="_blank" title="苏黎世">苏黎世</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1505089/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1505089/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1505089/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-08-26 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/607" target="_blank" title="海法马卡">海法马卡</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/9" target="_blank" title="萨尔茨堡">萨尔茨堡</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1503344/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1503344/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1503344/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-08-26 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/695" target="_blank" title="德布勒森">德布勒森</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/617" target="_blank" title="索斯基">索斯基</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1503345/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1503345/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1503345/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-08-26 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/109" target="_blank" title="马竞">马竞</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/566" target="_blank" title="帕纳辛纳">帕纳辛纳</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1503346/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1503346/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1503346/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-08-26 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/153" target="_blank" title="安德莱赫">安德莱赫</a></td>
											<td>			
												
												
													1:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/205" target="_blank" title="里昂">里昂</a></td>
											<td>			
												
												
													0:3
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1503347/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1503347/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1503347/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-08-26 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/449" target="_blank" title="苏黎世">苏黎世</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/603" target="_blank" title="文茨皮斯">文茨皮斯</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1503348/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1503348/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1503348/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-08-27 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/19" target="_blank" title="阿森纳">阿森纳</a></td>
											<td>			
												
												
													3:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/70" target="_blank" title="凯尔特人">凯尔特人</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1503192/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1503192/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1503192/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-08-27 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/155" target="_blank" title="斯图加特">斯图加特</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1216" target="_blank" title="蒂米什瓦">蒂米什瓦</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												球半/两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1503193/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1503193/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1503193/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-08-27 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/176" target="_blank" title="佛罗伦萨">佛罗伦萨</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/466" target="_blank" title="里斯本">里斯本</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1503194/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1503194/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1503194/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-08-27 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/703" target="_blank" title="希腊人">希腊人</a></td>
											<td>			
												
												
													3:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/227" target="_blank" title="哥本哈根">哥本哈根</a></td>
											<td>			
												
												
													3:1
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1503195/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1503195/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1503195/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-08-27 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/568" target="_blank" title="奥林匹亚">奥林匹亚</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2559" target="_blank" title="谢里夫">谢里夫</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1503196/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1503196/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1503196/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
							</tbody></table>
						</div>						
										
				
				</ul>
			
				<ul class="tabs9_main1" id="tabs9_main_5" style="display:none;">

					<div class="rounds rounds_new">
						<div class="rounds_b">
							<ul>
								
								
									<li class="current" id="yxMatch51"><a href="javascript:void(0);">
										
										
											A组
										
										
										</a>
									</li>
									
								
									<li id="yxMatch52"><a href="javascript:void(0);">
										
										
											B组
										
										
										</a>
									</li>
									
								
									<li id="yxMatch53"><a href="javascript:void(0);">
										
										
											C组
										
										
										</a>
									</li>
									
								
									<li id="yxMatch54"><a href="javascript:void(0);">
										
										
											D组
										
										
										</a>
									</li>
									
								
									<li id="yxMatch55"><a href="javascript:void(0);">
										
										
											E组
										
										
										</a>
									</li>
									
								
									<li id="yxMatch56"><a href="javascript:void(0);">
										
										
											F组
										
										
										</a>
									</li>
									
								
									<li id="yxMatch57"><a href="javascript:void(0);">
										
										
											G组
										
										
										</a>
									</li>
									
								
									<li id="yxMatch58"><a href="javascript:void(0);">
										
										
											H组
										
										
										</a>
									</li>
									
								
								
							</ul>
						</div>
						<div class="clear"></div>
					</div>
					
					
						<div class="rounds_con" id="div_yxMatch51" style="display:block">
							<table width="100%" border="0" cellspacing="0" cellpadding="0" class="zstab">
								<thead>
									<tr>
				                        <th width="90">时间</th>
							            <th width="50">主队</th>
							            <th width="55">比分</th>
							            <th width="50">客队</th>
							            <th width="45">半场</th>
							            <th width="65">让球</th>
							            
										<th width="55">数据</th>
										
									</tr>
								</thead>
								
											<tbody><tr>
											<td>2009-09-16 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/166" target="_blank" title="尤文图斯">尤文图斯</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/208" target="_blank" title="波尔多">波尔多</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1497569/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1497569/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1497569/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-09-16 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/607" target="_blank" title="海法马卡">海法马卡</a></td>
											<td>			
												
												
													0:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/88" target="_blank" title="拜仁">拜仁</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1497570/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1497570/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1497570/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-10-01 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/88" target="_blank" title="拜仁">拜仁</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/166" target="_blank" title="尤文图斯">尤文图斯</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1492793/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1492793/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1492793/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-10-01 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/208" target="_blank" title="波尔多">波尔多</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/607" target="_blank" title="海法马卡">海法马卡</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1492794/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1492794/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1492794/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-10-22 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/208" target="_blank" title="波尔多">波尔多</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/88" target="_blank" title="拜仁">拜仁</a></td>
											<td>			
												
												
													2:1
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1486589/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1486589/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1486589/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-10-22 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/166" target="_blank" title="尤文图斯">尤文图斯</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/607" target="_blank" title="海法马卡">海法马卡</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1486590/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1486590/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1486590/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-11-04 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/88" target="_blank" title="拜仁">拜仁</a></td>
											<td>			
												
												
													0:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/208" target="_blank" title="波尔多">波尔多</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1482520/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1482520/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1482520/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-11-04 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/607" target="_blank" title="海法马卡">海法马卡</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/166" target="_blank" title="尤文图斯">尤文图斯</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1482521/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1482521/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1482521/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-11-26 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/208" target="_blank" title="波尔多">波尔多</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/166" target="_blank" title="尤文图斯">尤文图斯</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1477426/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1477426/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1477426/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-11-26 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/88" target="_blank" title="拜仁">拜仁</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/607" target="_blank" title="海法马卡">海法马卡</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1477427/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1477427/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1477427/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-12-09 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/166" target="_blank" title="尤文图斯">尤文图斯</a></td>
											<td>			
												
												
													1:4
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/88" target="_blank" title="拜仁">拜仁</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1474470/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1474470/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1474470/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-12-09 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/607" target="_blank" title="海法马卡">海法马卡</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/208" target="_blank" title="波尔多">波尔多</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1474471/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1474471/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1474471/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
							</tbody></table>
						</div>						
					
						<div class="rounds_con" id="div_yxMatch52" style="display:none">
							<table width="100%" border="0" cellspacing="0" cellpadding="0" class="zstab">
								<thead>
									<tr>
				                        <th width="90">时间</th>
							            <th width="50">主队</th>
							            <th width="55">比分</th>
							            <th width="50">客队</th>
							            <th width="45">半场</th>
							            <th width="65">让球</th>
							            
										<th width="55">数据</th>
										
									</tr>
								</thead>
								
											<tbody><tr>
											<td>2009-09-16 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/149" target="_blank" title="沃夫斯堡">沃夫斯堡</a></td>
											<td>			
												
												
													3:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/407" target="_blank" title="莫陆军">莫陆军</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1497571/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1497571/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1497571/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-09-16 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/529" target="_blank" title="贝西克塔">贝西克塔</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/27" target="_blank" title="曼联">曼联</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1497572/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1497572/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1497572/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-10-01 00:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/407" target="_blank" title="莫陆军">莫陆军</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/529" target="_blank" title="贝西克塔">贝西克塔</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1492759/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1492759/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1492759/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-10-01 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/27" target="_blank" title="曼联">曼联</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/149" target="_blank" title="沃夫斯堡">沃夫斯堡</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1492795/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1492795/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1492795/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-10-22 00:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/407" target="_blank" title="莫陆军">莫陆军</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/27" target="_blank" title="曼联">曼联</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1486553/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1486553/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1486553/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-10-22 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/149" target="_blank" title="沃夫斯堡">沃夫斯堡</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/529" target="_blank" title="贝西克塔">贝西克塔</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1486591/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1486591/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1486591/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-11-04 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/27" target="_blank" title="曼联">曼联</a></td>
											<td>			
												
												
													3:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/407" target="_blank" title="莫陆军">莫陆军</a></td>
											<td>			
												
												
													1:2
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1482522/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1482522/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1482522/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-11-04 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/529" target="_blank" title="贝西克塔">贝西克塔</a></td>
											<td>			
												
												
													0:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/149" target="_blank" title="沃夫斯堡">沃夫斯堡</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1482523/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1482523/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1482523/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-11-26 01:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/407" target="_blank" title="莫陆军">莫陆军</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/149" target="_blank" title="沃夫斯堡">沃夫斯堡</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1477401/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1477401/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1477401/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-11-26 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/27" target="_blank" title="曼联">曼联</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/529" target="_blank" title="贝西克塔">贝西克塔</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1477428/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1477428/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1477428/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-12-09 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/149" target="_blank" title="沃夫斯堡">沃夫斯堡</a></td>
											<td>			
												
												
													1:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/27" target="_blank" title="曼联">曼联</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1474472/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1474472/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1474472/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-12-09 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/529" target="_blank" title="贝西克塔">贝西克塔</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/407" target="_blank" title="莫陆军">莫陆军</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1474473/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1474473/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1474473/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
							</tbody></table>
						</div>						
					
						<div class="rounds_con" id="div_yxMatch53" style="display:none">
							<table width="100%" border="0" cellspacing="0" cellpadding="0" class="zstab">
								<thead>
									<tr>
				                        <th width="90">时间</th>
							            <th width="50">主队</th>
							            <th width="55">比分</th>
							            <th width="50">客队</th>
							            <th width="45">半场</th>
							            <th width="65">让球</th>
							            
										<th width="55">数据</th>
										
									</tr>
								</thead>
								
											<tbody><tr>
											<td>2009-09-16 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/449" target="_blank" title="苏黎世">苏黎世</a></td>
											<td>			
												
												
													2:5
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/82" target="_blank" title="皇马">皇马</a></td>
											<td>			
												
												
													0:3
												
														
											</td>
											<td align="center">
											
											
												受让球半/两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1497573/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1497573/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1497573/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-09-16 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/211" target="_blank" title="马赛">马赛</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/150" target="_blank" title="AC米兰">AC米兰</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1497574/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1497574/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1497574/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-10-01 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/150" target="_blank" title="AC米兰">AC米兰</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/449" target="_blank" title="苏黎世">苏黎世</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												球半/两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1492796/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1492796/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1492796/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-10-01 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/82" target="_blank" title="皇马">皇马</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/211" target="_blank" title="马赛">马赛</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1492797/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1492797/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1492797/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-10-22 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/82" target="_blank" title="皇马">皇马</a></td>
											<td>			
												
												
													2:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/150" target="_blank" title="AC米兰">AC米兰</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1486592/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1486592/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1486592/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-10-22 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/449" target="_blank" title="苏黎世">苏黎世</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/211" target="_blank" title="马赛">马赛</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1486593/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1486593/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1486593/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-11-04 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/150" target="_blank" title="AC米兰">AC米兰</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/82" target="_blank" title="皇马">皇马</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1482524/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1482524/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1482524/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-11-04 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/211" target="_blank" title="马赛">马赛</a></td>
											<td>			
												
												
													6:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/449" target="_blank" title="苏黎世">苏黎世</a></td>
											<td>			
												
												
													2:1
												
														
											</td>
											<td align="center">
											
											
												球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1482525/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1482525/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1482525/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-11-26 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/82" target="_blank" title="皇马">皇马</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/449" target="_blank" title="苏黎世">苏黎世</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												两球半/三球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1477429/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1477429/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1477429/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-11-26 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/150" target="_blank" title="AC米兰">AC米兰</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/211" target="_blank" title="马赛">马赛</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1477430/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1477430/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1477430/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-12-09 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/449" target="_blank" title="苏黎世">苏黎世</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/150" target="_blank" title="AC米兰">AC米兰</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												受让一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1474474/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1474474/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1474474/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-12-09 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/211" target="_blank" title="马赛">马赛</a></td>
											<td>			
												
												
													1:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/82" target="_blank" title="皇马">皇马</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1474475/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1474475/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1474475/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
							</tbody></table>
						</div>						
					
						<div class="rounds_con" id="div_yxMatch54" style="display:none">
							<table width="100%" border="0" cellspacing="0" cellpadding="0" class="zstab">
								<thead>
									<tr>
				                        <th width="90">时间</th>
							            <th width="50">主队</th>
							            <th width="55">比分</th>
							            <th width="50">客队</th>
							            <th width="45">半场</th>
							            <th width="65">让球</th>
							            
										<th width="55">数据</th>
										
									</tr>
								</thead>
								
											<tbody><tr>
											<td>2009-09-16 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/24" target="_blank" title="切尔西">切尔西</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/468" target="_blank" title="波尔图">波尔图</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1497575/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1497575/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1497575/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-09-16 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/109" target="_blank" title="马竞">马竞</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/703" target="_blank" title="希腊人">希腊人</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1497576/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1497576/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1497576/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-10-01 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/703" target="_blank" title="希腊人">希腊人</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/24" target="_blank" title="切尔西">切尔西</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1492798/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1492798/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1492798/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-10-01 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/468" target="_blank" title="波尔图">波尔图</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/109" target="_blank" title="马竞">马竞</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1492799/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1492799/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1492799/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-10-22 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/468" target="_blank" title="波尔图">波尔图</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/703" target="_blank" title="希腊人">希腊人</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												球半/两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1486594/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1486594/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1486594/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-10-22 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/24" target="_blank" title="切尔西">切尔西</a></td>
											<td>			
												
												
													4:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/109" target="_blank" title="马竞">马竞</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1486595/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1486595/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1486595/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-11-04 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/703" target="_blank" title="希腊人">希腊人</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/468" target="_blank" title="波尔图">波尔图</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1482526/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1482526/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1482526/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-11-04 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/109" target="_blank" title="马竞">马竞</a></td>
											<td>			
												
												
													2:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/24" target="_blank" title="切尔西">切尔西</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1482527/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1482527/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1482527/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-11-26 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/468" target="_blank" title="波尔图">波尔图</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/24" target="_blank" title="切尔西">切尔西</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1477431/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1477431/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1477431/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-11-26 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/703" target="_blank" title="希腊人">希腊人</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/109" target="_blank" title="马竞">马竞</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1477432/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1477432/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1477432/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-12-09 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/24" target="_blank" title="切尔西">切尔西</a></td>
											<td>			
												
												
													2:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/703" target="_blank" title="希腊人">希腊人</a></td>
											<td>			
												
												
													2:1
												
														
											</td>
											<td align="center">
											
											
												球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1474476/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1474476/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1474476/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-12-09 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/109" target="_blank" title="马竞">马竞</a></td>
											<td>			
												
												
													0:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/468" target="_blank" title="波尔图">波尔图</a></td>
											<td>			
												
												
													0:2
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1474477/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1474477/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1474477/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
							</tbody></table>
						</div>						
					
						<div class="rounds_con" id="div_yxMatch55" style="display:none">
							<table width="100%" border="0" cellspacing="0" cellpadding="0" class="zstab">
								<thead>
									<tr>
				                        <th width="90">时间</th>
							            <th width="50">主队</th>
							            <th width="55">比分</th>
							            <th width="50">客队</th>
							            <th width="45">半场</th>
							            <th width="65">让球</th>
							            
										<th width="55">数据</th>
										
									</tr>
								</thead>
								
											<tbody><tr>
											<td>2009-09-17 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/25" target="_blank" title="利物浦">利物浦</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/695" target="_blank" title="德布勒森">德布勒森</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												三球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1497437/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1497437/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1497437/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-09-17 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/205" target="_blank" title="里昂">里昂</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/176" target="_blank" title="佛罗伦萨">佛罗伦萨</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1497438/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1497438/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1497438/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-09-30 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/176" target="_blank" title="佛罗伦萨">佛罗伦萨</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/25" target="_blank" title="利物浦">利物浦</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												受让半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1492915/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1492915/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1492915/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-09-30 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/695" target="_blank" title="德布勒森">德布勒森</a></td>
											<td>			
												
												
													0:4
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/205" target="_blank" title="里昂">里昂</a></td>
											<td>			
												
												
													0:3
												
														
											</td>
											<td align="center">
											
											
												受让一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1492916/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1492916/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1492916/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-10-21 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/695" target="_blank" title="德布勒森">德布勒森</a></td>
											<td>			
												
												
													3:4
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/176" target="_blank" title="佛罗伦萨">佛罗伦萨</a></td>
											<td>			
												
												
													2:4
												
														
											</td>
											<td align="center">
											
											
												受让一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1486731/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1486731/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1486731/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-10-21 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/25" target="_blank" title="利物浦">利物浦</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/205" target="_blank" title="里昂">里昂</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1486732/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1486732/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1486732/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-11-05 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/176" target="_blank" title="佛罗伦萨">佛罗伦萨</a></td>
											<td>			
												
												
													5:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/695" target="_blank" title="德布勒森">德布勒森</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1482387/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1482387/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1482387/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-11-05 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/205" target="_blank" title="里昂">里昂</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/25" target="_blank" title="利物浦">利物浦</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1482388/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1482388/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1482388/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-11-25 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/695" target="_blank" title="德布勒森">德布勒森</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/25" target="_blank" title="利物浦">利物浦</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让球半/两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1477508/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1477508/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1477508/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-11-25 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/176" target="_blank" title="佛罗伦萨">佛罗伦萨</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/205" target="_blank" title="里昂">里昂</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1477509/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1477509/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1477509/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-12-10 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/25" target="_blank" title="利物浦">利物浦</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/176" target="_blank" title="佛罗伦萨">佛罗伦萨</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1474344/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1474344/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1474344/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-12-10 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/205" target="_blank" title="里昂">里昂</a></td>
											<td>			
												
												
													4:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/695" target="_blank" title="德布勒森">德布勒森</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1474345/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1474345/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1474345/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
							</tbody></table>
						</div>						
					
						<div class="rounds_con" id="div_yxMatch56" style="display:none">
							<table width="100%" border="0" cellspacing="0" cellpadding="0" class="zstab">
								<thead>
									<tr>
				                        <th width="90">时间</th>
							            <th width="50">主队</th>
							            <th width="55">比分</th>
							            <th width="50">客队</th>
							            <th width="45">半场</th>
							            <th width="65">让球</th>
							            
										<th width="55">数据</th>
										
									</tr>
								</thead>
								
											<tbody><tr>
											<td>2009-09-17 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/152" target="_blank" title="国际米兰">国际米兰</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/84" target="_blank" title="巴萨">巴萨</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1497439/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1497439/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1497439/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-09-17 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/712" target="_blank" title="基辅迪纳">基辅迪纳</a></td>
											<td>			
												
												
													3:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/441" target="_blank" title="喀山宝石">喀山宝石</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1497440/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1497440/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1497440/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-09-30 00:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/441" target="_blank" title="喀山宝石">喀山宝石</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/152" target="_blank" title="国际米兰">国际米兰</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												受让半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1492890/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1492890/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1492890/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-09-30 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/84" target="_blank" title="巴萨">巴萨</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/712" target="_blank" title="基辅迪纳">基辅迪纳</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												两球/两球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1492917/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1492917/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1492917/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-10-21 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/84" target="_blank" title="巴萨">巴萨</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/441" target="_blank" title="喀山宝石">喀山宝石</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												两球/两球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1486733/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1486733/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1486733/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-10-21 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/152" target="_blank" title="国际米兰">国际米兰</a></td>
											<td>			
												
												
													2:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/712" target="_blank" title="基辅迪纳">基辅迪纳</a></td>
											<td>			
												
												
													1:2
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1486734/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1486734/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1486734/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-11-05 01:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/441" target="_blank" title="喀山宝石">喀山宝石</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/84" target="_blank" title="巴萨">巴萨</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1482352/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1482352/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1482352/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-11-05 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/712" target="_blank" title="基辅迪纳">基辅迪纳</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/152" target="_blank" title="国际米兰">国际米兰</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1482389/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1482389/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1482389/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-11-25 01:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/441" target="_blank" title="喀山宝石">喀山宝石</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/712" target="_blank" title="基辅迪纳">基辅迪纳</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1477497/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1477497/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1477497/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-11-25 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/84" target="_blank" title="巴萨">巴萨</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/152" target="_blank" title="国际米兰">国际米兰</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1477510/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1477510/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1477510/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-12-10 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/152" target="_blank" title="国际米兰">国际米兰</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/441" target="_blank" title="喀山宝石">喀山宝石</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1474346/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1474346/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1474346/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-12-10 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/712" target="_blank" title="基辅迪纳">基辅迪纳</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/84" target="_blank" title="巴萨">巴萨</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												受让半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1474347/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1474347/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1474347/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
							</tbody></table>
						</div>						
					
						<div class="rounds_con" id="div_yxMatch57" style="display:none">
							<table width="100%" border="0" cellspacing="0" cellpadding="0" class="zstab">
								<thead>
									<tr>
				                        <th width="90">时间</th>
							            <th width="50">主队</th>
							            <th width="55">比分</th>
							            <th width="50">客队</th>
							            <th width="45">半场</th>
							            <th width="65">让球</th>
							            
										<th width="55">数据</th>
										
									</tr>
								</thead>
								
											<tbody><tr>
											<td>2009-09-17 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/155" target="_blank" title="斯图加特">斯图加特</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/77" target="_blank" title="流浪者">流浪者</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1497441/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1497441/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1497441/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-09-17 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/86" target="_blank" title="塞维利亚">塞维利亚</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/4435" target="_blank" title="尤尼里亚">尤尼里亚</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												球半/两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1497442/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1497442/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1497442/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-09-30 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/4435" target="_blank" title="尤尼里亚">尤尼里亚</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/155" target="_blank" title="斯图加特">斯图加特</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1492918/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1492918/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1492918/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-09-30 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/77" target="_blank" title="流浪者">流浪者</a></td>
											<td>			
												
												
													1:4
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/86" target="_blank" title="塞维利亚">塞维利亚</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1492919/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1492919/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1492919/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-10-21 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/77" target="_blank" title="流浪者">流浪者</a></td>
											<td>			
												
												
													1:4
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/4435" target="_blank" title="尤尼里亚">尤尼里亚</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1486735/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1486735/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1486735/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-10-21 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/155" target="_blank" title="斯图加特">斯图加特</a></td>
											<td>			
												
												
													1:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/86" target="_blank" title="塞维利亚">塞维利亚</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1486736/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1486736/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1486736/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-11-05 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/4435" target="_blank" title="尤尼里亚">尤尼里亚</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/77" target="_blank" title="流浪者">流浪者</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1482390/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1482390/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1482390/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-11-05 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/86" target="_blank" title="塞维利亚">塞维利亚</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/155" target="_blank" title="斯图加特">斯图加特</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1482391/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1482391/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1482391/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-11-25 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/77" target="_blank" title="流浪者">流浪者</a></td>
											<td>			
												
												
													0:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/155" target="_blank" title="斯图加特">斯图加特</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1477511/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1477511/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1477511/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-11-25 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/4435" target="_blank" title="尤尼里亚">尤尼里亚</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/86" target="_blank" title="塞维利亚">塞维利亚</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												受让半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1477512/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1477512/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1477512/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-12-10 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/155" target="_blank" title="斯图加特">斯图加特</a></td>
											<td>			
												
												
													3:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/4435" target="_blank" title="尤尼里亚">尤尼里亚</a></td>
											<td>			
												
												
													3:0
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1474348/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1474348/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1474348/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-12-10 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/86" target="_blank" title="塞维利亚">塞维利亚</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/77" target="_blank" title="流浪者">流浪者</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1474349/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1474349/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1474349/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
							</tbody></table>
						</div>						
					
						<div class="rounds_con" id="div_yxMatch58" style="display:none">
							<table width="100%" border="0" cellspacing="0" cellpadding="0" class="zstab">
								<thead>
									<tr>
				                        <th width="90">时间</th>
							            <th width="50">主队</th>
							            <th width="55">比分</th>
							            <th width="50">客队</th>
							            <th width="45">半场</th>
							            <th width="65">让球</th>
							            
										<th width="55">数据</th>
										
									</tr>
								</thead>
								
											<tbody><tr>
											<td>2009-09-17 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/568" target="_blank" title="奥林匹亚">奥林匹亚</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/234" target="_blank" title="阿尔克马">阿尔克马</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1497443/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1497443/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1497443/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-09-17 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/130" target="_blank" title="标准列日">标准列日</a></td>
											<td>			
												
												
													2:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/19" target="_blank" title="阿森纳">阿森纳</a></td>
											<td>			
												
												
													2:1
												
														
											</td>
											<td align="center">
											
											
												受让一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1497444/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1497444/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1497444/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-09-30 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/19" target="_blank" title="阿森纳">阿森纳</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/568" target="_blank" title="奥林匹亚">奥林匹亚</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												球半/两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1492920/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1492920/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1492920/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-09-30 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/234" target="_blank" title="阿尔克马">阿尔克马</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/130" target="_blank" title="标准列日">标准列日</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1492921/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1492921/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1492921/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-10-21 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/234" target="_blank" title="阿尔克马">阿尔克马</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/19" target="_blank" title="阿森纳">阿森纳</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1486737/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1486737/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1486737/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-10-21 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/568" target="_blank" title="奥林匹亚">奥林匹亚</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/130" target="_blank" title="标准列日">标准列日</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1486738/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1486738/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1486738/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-11-05 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/19" target="_blank" title="阿森纳">阿森纳</a></td>
											<td>			
												
												
													4:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/234" target="_blank" title="阿尔克马">阿尔克马</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1482392/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1482392/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1482392/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-11-05 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/130" target="_blank" title="标准列日">标准列日</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/568" target="_blank" title="奥林匹亚">奥林匹亚</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1482393/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1482393/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1482393/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-11-25 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/234" target="_blank" title="阿尔克马">阿尔克马</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/568" target="_blank" title="奥林匹亚">奥林匹亚</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1477513/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1477513/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1477513/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-11-25 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/19" target="_blank" title="阿森纳">阿森纳</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/130" target="_blank" title="标准列日">标准列日</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1477514/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1477514/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1477514/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-12-10 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/568" target="_blank" title="奥林匹亚">奥林匹亚</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/19" target="_blank" title="阿森纳">阿森纳</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1474350/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1474350/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1474350/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-12-10 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/130" target="_blank" title="标准列日">标准列日</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/234" target="_blank" title="阿尔克马">阿尔克马</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1474351/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1474351/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1474351/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
							</tbody></table>
						</div>						
										
				
				</ul>
			
				<ul class="tabs9_main1" id="tabs9_main_6" style="display:none;">

					<div class="rounds rounds_new">
						<div class="rounds_b">
							<ul>
								
								
									<li class="current" id="yxMatch61"><a href="javascript:void(0);">
										
										
											全部
										
										
										</a>
									</li>
									
								
								
							</ul>
						</div>
						<div class="clear"></div>
					</div>
					
					
						<div class="rounds_con" id="div_yxMatch61" style="display:block">
							<table width="100%" border="0" cellspacing="0" cellpadding="0" class="zstab">
								<thead>
									<tr>
				                        <th width="90">时间</th>
							            <th width="50">主队</th>
							            <th width="55">比分</th>
							            <th width="50">客队</th>
							            <th width="45">半场</th>
							            <th width="65">让球</th>
							            
										<th width="55">数据</th>
										
									</tr>
								</thead>
								
											<tbody><tr>
											<td>2010-02-17 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/205" target="_blank" title="里昂">里昂</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/82" target="_blank" title="皇马">皇马</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1461851/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1461851/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1461851/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2010-02-17 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/150" target="_blank" title="AC米兰">AC米兰</a></td>
											<td>			
												
												
													2:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/27" target="_blank" title="曼联">曼联</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1461852/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1461852/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1461852/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2010-02-18 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/88" target="_blank" title="拜仁">拜仁</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/176" target="_blank" title="佛罗伦萨">佛罗伦萨</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1461694/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1461694/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1461694/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2010-02-18 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/468" target="_blank" title="波尔图">波尔图</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/19" target="_blank" title="阿森纳">阿森纳</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1461695/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1461695/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1461695/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2010-02-24 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/155" target="_blank" title="斯图加特">斯图加特</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/84" target="_blank" title="巴萨">巴萨</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												受让半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1460140/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1460140/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1460140/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2010-02-24 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/568" target="_blank" title="奥林匹亚">奥林匹亚</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/208" target="_blank" title="波尔多">波尔多</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1460141/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1460141/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1460141/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2010-02-25 01:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/407" target="_blank" title="莫陆军">莫陆军</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/86" target="_blank" title="塞维利亚">塞维利亚</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1459968/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1459968/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1459968/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2010-02-25 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/152" target="_blank" title="国际米兰">国际米兰</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/24" target="_blank" title="切尔西">切尔西</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1459999/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1459999/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1459999/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2010-03-10 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/19" target="_blank" title="阿森纳">阿森纳</a></td>
											<td>			
												
												
													5:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/468" target="_blank" title="波尔图">波尔图</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1456395/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1456395/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1456395/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2010-03-10 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/176" target="_blank" title="佛罗伦萨">佛罗伦萨</a></td>
											<td>			
												
												
													3:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/88" target="_blank" title="拜仁">拜仁</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1456396/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1456396/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1456396/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2010-03-11 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/82" target="_blank" title="皇马">皇马</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/205" target="_blank" title="里昂">里昂</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1456238/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1456238/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1456238/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2010-03-11 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/27" target="_blank" title="曼联">曼联</a></td>
											<td>			
												
												
													4:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/150" target="_blank" title="AC米兰">AC米兰</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1456239/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1456239/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1456239/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2010-03-17 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/24" target="_blank" title="切尔西">切尔西</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/152" target="_blank" title="国际米兰">国际米兰</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1454364/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1454364/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1454364/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2010-03-17 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/86" target="_blank" title="塞维利亚">塞维利亚</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/407" target="_blank" title="莫陆军">莫陆军</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1454365/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1454365/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1454365/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2010-03-18 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/84" target="_blank" title="巴萨">巴萨</a></td>
											<td>			
												
												
													4:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/155" target="_blank" title="斯图加特">斯图加特</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												球半/两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1454197/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1454197/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1454197/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2010-03-18 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/208" target="_blank" title="波尔多">波尔多</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/568" target="_blank" title="奥林匹亚">奥林匹亚</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1454198/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1454198/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1454198/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
							</tbody></table>
						</div>						
										
				
				</ul>
			
				<ul class="tabs9_main1" id="tabs9_main_7" style="display:none;">

					<div class="rounds rounds_new">
						<div class="rounds_b">
							<ul>
								
								
									<li class="current" id="yxMatch71"><a href="javascript:void(0);">
										
										
											全部
										
										
										</a>
									</li>
									
								
								
							</ul>
						</div>
						<div class="clear"></div>
					</div>
					
					
						<div class="rounds_con" id="div_yxMatch71" style="display:block">
							<table width="100%" border="0" cellspacing="0" cellpadding="0" class="zstab">
								<thead>
									<tr>
				                        <th width="90">时间</th>
							            <th width="50">主队</th>
							            <th width="55">比分</th>
							            <th width="50">客队</th>
							            <th width="45">半场</th>
							            <th width="65">让球</th>
							            
										<th width="55">数据</th>
										
									</tr>
								</thead>
								
											<tbody><tr>
											<td>2010-03-31 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/205" target="_blank" title="里昂">里昂</a></td>
											<td>			
												
												
													3:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/208" target="_blank" title="波尔多">波尔多</a></td>
											<td>			
												
												
													2:1
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1449853/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1449853/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1449853/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2010-03-31 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/88" target="_blank" title="拜仁">拜仁</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/27" target="_blank" title="曼联">曼联</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1449854/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1449854/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1449854/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2010-04-01 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/19" target="_blank" title="阿森纳">阿森纳</a></td>
											<td>			
												
												
													2:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/84" target="_blank" title="巴萨">巴萨</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1449699/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1449699/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1449699/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2010-04-01 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/152" target="_blank" title="国际米兰">国际米兰</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/407" target="_blank" title="莫陆军">莫陆军</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1449700/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1449700/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1449700/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2010-04-07 00:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/407" target="_blank" title="莫陆军">莫陆军</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/152" target="_blank" title="国际米兰">国际米兰</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1447677/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1447677/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1447677/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2010-04-07 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/84" target="_blank" title="巴萨">巴萨</a></td>
											<td>			
												
												
													4:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/19" target="_blank" title="阿森纳">阿森纳</a></td>
											<td>			
												
												
													3:1
												
														
											</td>
											<td align="center">
											
											
												球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1447719/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1447719/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1447719/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2010-04-08 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/208" target="_blank" title="波尔多">波尔多</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/205" target="_blank" title="里昂">里昂</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1447493/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1447493/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1447493/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2010-04-08 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/27" target="_blank" title="曼联">曼联</a></td>
											<td>			
												
												
													3:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/88" target="_blank" title="拜仁">拜仁</a></td>
											<td>			
												
												
													3:1
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1447494/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1447494/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1447494/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
							</tbody></table>
						</div>						
										
				
				</ul>
			
				<ul class="tabs9_main1" id="tabs9_main_8" style="display:none;">

					<div class="rounds rounds_new">
						<div class="rounds_b">
							<ul>
								
								
									<li class="current" id="yxMatch81"><a href="javascript:void(0);">
										
										
											全部
										
										
										</a>
									</li>
									
								
								
							</ul>
						</div>
						<div class="clear"></div>
					</div>
					
					
						<div class="rounds_con" id="div_yxMatch81" style="display:block">
							<table width="100%" border="0" cellspacing="0" cellpadding="0" class="zstab">
								<thead>
									<tr>
				                        <th width="90">时间</th>
							            <th width="50">主队</th>
							            <th width="55">比分</th>
							            <th width="50">客队</th>
							            <th width="45">半场</th>
							            <th width="65">让球</th>
							            
										<th width="55">数据</th>
										
									</tr>
								</thead>
								
											<tbody><tr>
											<td>2010-04-21 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/152" target="_blank" title="国际米兰">国际米兰</a></td>
											<td>			
												
												
													3:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/84" target="_blank" title="巴萨">巴萨</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1442641/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1442641/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1442641/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2010-04-22 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/88" target="_blank" title="拜仁">拜仁</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/205" target="_blank" title="里昂">里昂</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1442493/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1442493/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1442493/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2010-04-28 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/205" target="_blank" title="里昂">里昂</a></td>
											<td>			
												
												
													0:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/88" target="_blank" title="拜仁">拜仁</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1440200/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1440200/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1440200/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2010-04-29 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/84" target="_blank" title="巴萨">巴萨</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/152" target="_blank" title="国际米兰">国际米兰</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1440010/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1440010/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1440010/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
							</tbody></table>
						</div>						
										
				
				</ul>
			
				<ul class="tabs9_main1" id="tabs9_main_9" style="">

					<div class="rounds rounds_new">
						<div class="rounds_b">
							<ul>
								
								
									<li class="current" id="yxMatch91"><a href="javascript:void(0);">
										
										
											全部
										
										
										</a>
									</li>
									
								
								
							</ul>
						</div>
						<div class="clear"></div>
					</div>
					
					
						<div class="rounds_con" id="div_yxMatch91" style="display:block">
							<table width="100%" border="0" cellspacing="0" cellpadding="0" class="zstab">
								<thead>
									<tr>
				                        <th width="90">时间</th>
							            <th width="50">主队</th>
							            <th width="55">比分</th>
							            <th width="50">客队</th>
							            <th width="45">半场</th>
							            <th width="65">让球</th>
							            
										<th width="55">数据</th>
										
									</tr>
								</thead>
								
											<tbody><tr>
											<td>2010-05-23 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/88" target="_blank" title="拜仁">拜仁</a></td>
											<td>			
												
												
													0:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/152" target="_blank" title="国际米兰">国际米兰</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1432866/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1432866/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1432866/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
							</tbody></table>
						</div>						
										
				
				</ul>
			
			
		</div>

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		





</body>