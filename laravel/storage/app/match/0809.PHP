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
    <b id="xt_h">21</b><b id="xt_m">55</b><b id="xt_s">32</b> </p>
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
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/7612" target="_blank" class="a1" title="国际巴库">
					<li>国际巴库</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/7143" target="_blank" class="a1" title="云拿域克">
					<li>云拿域克</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/5964" target="_blank" class="a1" title="梅拿达">
					<li>梅拿达</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/5913" target="_blank" class="a1" title="圣达哥林">
					<li>圣达哥林</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/4430" target="_blank" class="a1" title="兰内里">
					<li>兰内里</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/4398" target="_blank" class="a1" title="阿克图比">
					<li>阿克图比</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/4102" target="_blank" class="a1" title="蒙迪里卡">
					<li>蒙迪里卡</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/2559" target="_blank" class="a1" title="谢里夫">
					<li>谢里夫</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/2557" target="_blank" class="a1" title="列伯尼基">
					<li>列伯尼基</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/2555" target="_blank" class="a1" title="皮尤尼克">
					<li>皮尤尼克</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/2478" target="_blank" class="a1" title="卡奧拿斯">
					<li>卡奧拿斯</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/2317" target="_blank" class="a1" title="瓦路尔">
					<li>瓦路尔</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/1926" target="_blank" class="a1" title="布塔纳斯">
					<li>布塔纳斯</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/1646" target="_blank" class="a1" title="林菲尔德">
					<li>林菲尔德</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/1607" target="_blank" class="a1" title="耶贝塔">
					<li>耶贝塔</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/1296" target="_blank" class="a1" title="多姆扎莱">
					<li>多姆扎莱</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/1224" target="_blank" class="a1" title="MTK匈格利">
					<li>MTK匈格利</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/927" target="_blank" class="a1" title="吉马良斯">
					<li>吉马良斯</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/722" target="_blank" class="a1" title="贝尔游击">
					<li>贝尔游击</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/702" target="_blank" class="a1" title="迪德朗">
					<li>迪德朗</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/701" target="_blank" class="a1" title="阿特梅迪亚">
					<li>阿特梅迪亚</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/685" target="_blank" class="a1" title="地拉拿戴">
					<li>地拉拿戴</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/678" target="_blank" class="a1" title="布斯巴达">
					<li>布斯巴达</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/674" target="_blank" class="a1" title="利瓦迪亚">
					<li>利瓦迪亚</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/661" target="_blank" class="a1" title="瓦莱塔">
					<li>瓦莱塔</li>
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
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/610" target="_blank" class="a1" title="第比利斯">
					<li>第比利斯</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/609" target="_blank" class="a1" title="克拉科夫">
					<li>克拉科夫</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/603" target="_blank" class="a1" title="文茨皮斯">
					<li>文茨皮斯</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/568" target="_blank" class="a1" title="奥林匹亚">
					<li>奥林匹亚</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/516" target="_blank" class="a1" title="加拉塔萨">
					<li>加拉塔萨</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/498" target="_blank" class="a1" title="布兰">
					<li>布兰</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/413" target="_blank" class="a1" title="哥德堡">
					<li>哥德堡</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/411" target="_blank" class="a1" title="莫斯巴达">
					<li>莫斯巴达</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/396" target="_blank" class="a1" title="坦佩雷">
					<li>坦佩雷</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/329" target="_blank" class="a1" title="德罗赫达">
					<li>德罗赫达</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/250" target="_blank" class="a1" title="特温特">
					<li>特温特</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/153" target="_blank" class="a1" title="安德莱赫">
					<li>安德莱赫</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/151" target="_blank" class="a1" title="沙尔克04">
					<li>沙尔克04</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/130" target="_blank" class="a1" title="标准列日">
					<li>标准列日</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/77" target="_blank" class="a1" title="流浪者">
					<li>流浪者</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/12" target="_blank" class="a1" title="维快速">
					<li>维快速</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/84" target="_blank" class="a1" title="巴萨">
					<li>巴萨</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/205" target="_blank" class="a1" title="里昂">
					<li>里昂</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/88" target="_blank" class="a1" title="拜仁">
					<li>拜仁</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/174" target="_blank" class="a1" title="罗马">
					<li>罗马</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/25" target="_blank" class="a1" title="利物浦">
					<li>利物浦</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/19" target="_blank" class="a1" title="阿森纳">
					<li>阿森纳</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/716" target="_blank" class="a1" title="顿矿工">
					<li>顿矿工</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/109" target="_blank" class="a1" title="马竞">
					<li>马竞</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/82" target="_blank" class="a1" title="皇马">
					<li>皇马</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/468" target="_blank" class="a1" title="波尔图">
					<li>波尔图</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/24" target="_blank" class="a1" title="切尔西">
					<li>切尔西</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/27" target="_blank" class="a1" title="曼联">
					<li>曼联</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/107" target="_blank" class="a1" title="比利亚雷">
					<li>比利亚雷</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/244" target="_blank" class="a1" title="奥尔堡">
					<li>奥尔堡</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/466" target="_blank" class="a1" title="里斯本">
					<li>里斯本</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/566" target="_blank" class="a1" title="帕纳辛纳">
					<li>帕纳辛纳</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/152" target="_blank" class="a1" title="国际米兰">
					<li>国际米兰</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/1574" target="_blank" class="a1" title="阿诺索">
					<li>阿诺索</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/166" target="_blank" class="a1" title="尤文图斯">
					<li>尤文图斯</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/132" target="_blank" class="a1" title="不来梅">
					<li>不来梅</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/208" target="_blank" class="a1" title="波尔多">
					<li>波尔多</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/176" target="_blank" class="a1" title="佛罗伦萨">
					<li>佛罗伦萨</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/211" target="_blank" class="a1" title="马赛">
					<li>马赛</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/1298" target="_blank" class="a1" title="克卢日">
					<li>克卢日</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/254" target="_blank" class="a1" title="埃因霍温">
					<li>埃因霍温</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/712" target="_blank" class="a1" title="基辅迪纳">
					<li>基辅迪纳</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/395" target="_blank" class="a1" title="泽尼特">
					<li>泽尼特</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/70" target="_blank" class="a1" title="凯尔特人">
					<li>凯尔特人</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/537" target="_blank" class="a1" title="费内巴切">
					<li>费内巴切</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/2435" target="_blank" class="a1" title="巴特">
					<li>巴特</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/626" target="_blank" class="a1" title="布星">
					<li>布星</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/451" target="_blank" class="a1" title="巴塞尔">
					<li>巴塞尔</li>
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
				<ul id="tabs9" style="height: 40px; width: 2000px; overflow: hidden; position: relative; left: -138px;">
					
					
						
						<li id="main_1" fl="yxMatch11">第一圈
						</li> 
					
						
						<li id="main_2" fl="yxMatch21">第二圈
						</li> 
					
						
						<li id="main_3" fl="yxMatch31">第三圈
						</li> 
					
						
						<li id="main_4" fl="yxMatch41">分组赛
						</li> 
					
						
						<li id="main_5" fl="yxMatch51">十六强
						</li> 
					
						
						<li id="main_6" fl="yxMatch61">半准决赛
						</li> 
					
						
						<li id="main_7" fl="yxMatch71">准决赛
						</li> 
					
						
						<li id="main_8" fl="yxMatch81" class="cur">决赛
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
											<td>2008-07-15 23:59</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/7612" target="_blank" title="国际巴库">国际巴库</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2557" target="_blank" title="列伯尼基">列伯尼基</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1582900/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1582900/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1582900/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-07-15 23:59</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/396" target="_blank" title="坦佩雷">坦佩雷</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1926" target="_blank" title="布塔纳斯">布塔纳斯</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1582901/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1582901/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1582901/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-07-15 23:59</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2435" target="_blank" title="巴特">巴特</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2317" target="_blank" title="瓦路尔">瓦路尔</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1582902/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1582902/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1582902/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-07-16 01:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1574" target="_blank" title="阿诺索">阿诺索</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2555" target="_blank" title="皮尤尼克">皮尤尼克</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1582914/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1582914/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1582914/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-07-16 01:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/702" target="_blank" title="迪德朗">迪德朗</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1296" target="_blank" title="多姆扎莱">多姆扎莱</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1582915/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1582915/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1582915/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-07-16 01:35</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/4430" target="_blank" title="兰内里">兰内里</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/603" target="_blank" title="文茨皮斯">文茨皮斯</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1582941/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1582941/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1582941/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-07-16 02:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/661" target="_blank" title="瓦莱塔">瓦莱塔</a></td>
											<td>			
												
												
													0:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/701" target="_blank" title="阿特梅迪亚">阿特梅迪亚</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1582945/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1582945/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1582945/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-07-16 02:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/685" target="_blank" title="地拉拿戴">地拉拿戴</a></td>
											<td>			
												
												
													0:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/4102" target="_blank" title="蒙迪里卡">蒙迪里卡</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1582946/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1582946/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1582946/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-07-16 02:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5913" target="_blank" title="圣达哥林">圣达哥林</a></td>
											<td>			
												
												
													1:4
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2478" target="_blank" title="卡奧拿斯">卡奧拿斯</a></td>
											<td>			
												
												
													0:3
												
														
											</td>
											<td align="center">
											
											
												受让球半/两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1582948/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1582948/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1582948/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-07-16 02:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5964" target="_blank" title="梅拿达">梅拿达</a></td>
											<td>			
												
												
													0:5
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/413" target="_blank" title="哥德堡">哥德堡</a></td>
											<td>			
												
												
													0:3
												
														
											</td>
											<td align="center">
											
											
												受让两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1582949/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1582949/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1582949/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-07-16 22:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/610" target="_blank" title="第比利斯">第比利斯</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/7143" target="_blank" title="云拿域克">云拿域克</a></td>
											<td>			
												
												
													3:0
												
														
											</td>
											<td align="center">
											
											
												两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1582744/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1582744/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1582744/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-07-16 23:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/4398" target="_blank" title="阿克图比">阿克图比</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2559" target="_blank" title="谢里夫">谢里夫</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1582747/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1582747/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1582747/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-07-17 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1646" target="_blank" title="林菲尔德">林菲尔德</a></td>
											<td>			
												
												
													0:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/653" target="_blank" title="萨迪纳摩">萨迪纳摩</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1582816/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1582816/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1582816/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-07-17 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/329" target="_blank" title="德罗赫达">德罗赫达</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/674" target="_blank" title="利瓦迪亚">利瓦迪亚</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1582817/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1582817/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1582817/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-07-22 23:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/603" target="_blank" title="文茨皮斯">文茨皮斯</a></td>
											<td>			
												
												
													4:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/4430" target="_blank" title="兰内里">兰内里</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1581885/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1581885/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1581885/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-07-22 23:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2557" target="_blank" title="列伯尼基">列伯尼基</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/7612" target="_blank" title="国际巴库">国际巴库</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1581886/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1581886/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1581886/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-07-23 00:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2478" target="_blank" title="卡奧拿斯">卡奧拿斯</a></td>
											<td>			
												
												
													3:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/5913" target="_blank" title="圣达哥林">圣达哥林</a></td>
											<td>			
												
												
													2:1
												
														
											</td>
											<td align="center">
											
											
												三球/三球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1581914/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1581914/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1581914/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-07-23 01:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2559" target="_blank" title="谢里夫">谢里夫</a></td>
											<td>			
												
												
													4:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/4398" target="_blank" title="阿克图比">阿克图比</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1581923/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1581923/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1581923/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-07-23 02:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/7143" target="_blank" title="云拿域克">云拿域克</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/610" target="_blank" title="第比利斯">第比利斯</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												受让半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1581939/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1581939/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1581939/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-07-23 21:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2555" target="_blank" title="皮尤尼克">皮尤尼克</a></td>
											<td>			
												
												
													0:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1574" target="_blank" title="阿诺索">阿诺索</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1581749/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1581749/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1581749/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-07-23 23:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/674" target="_blank" title="利瓦迪亚">利瓦迪亚</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/329" target="_blank" title="德罗赫达">德罗赫达</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1581769/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1581769/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1581769/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-07-24 02:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/413" target="_blank" title="哥德堡">哥德堡</a></td>
											<td>			
												
												
													4:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/5964" target="_blank" title="梅拿达">梅拿达</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												三球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1581821/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1581821/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1581821/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-07-24 02:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1926" target="_blank" title="布塔纳斯">布塔纳斯</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/396" target="_blank" title="坦佩雷">坦佩雷</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1581822/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1581822/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1581822/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-07-24 02:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/4102" target="_blank" title="蒙迪里卡">蒙迪里卡</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/685" target="_blank" title="地拉拿戴">地拉拿戴</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1581823/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1581823/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1581823/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-07-24 02:15</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/701" target="_blank" title="阿特梅迪亚">阿特梅迪亚</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/661" target="_blank" title="瓦莱塔">瓦莱塔</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												两球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1581828/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1581828/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1581828/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-07-24 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/653" target="_blank" title="萨迪纳摩">萨迪纳摩</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1646" target="_blank" title="林菲尔德">林菲尔德</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												两球/两球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1581838/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1581838/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1581838/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-07-24 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1296" target="_blank" title="多姆扎莱">多姆扎莱</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/702" target="_blank" title="迪德朗">迪德朗</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1581839/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1581839/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1581839/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-07-24 03:15</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2317" target="_blank" title="瓦路尔">瓦路尔</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2435" target="_blank" title="巴特">巴特</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1581851/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1581851/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1581851/bfyc" class="oyx" target="_blank">析</a>
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
											<td>2008-07-29 22:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/7612" target="_blank" title="国际巴库">国际巴库</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/722" target="_blank" title="贝尔游击">贝尔游击</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1580837/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1580837/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1580837/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-07-30 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/329" target="_blank" title="德罗赫达">德罗赫达</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/712" target="_blank" title="基辅迪纳">基辅迪纳</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1580888/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1580888/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1580888/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-07-30 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/498" target="_blank" title="布兰">布兰</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/603" target="_blank" title="文茨皮斯">文茨皮斯</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1580889/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1580889/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1580889/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-07-30 23:59</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/396" target="_blank" title="坦佩雷">坦佩雷</a></td>
											<td>			
												
												
													1:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/701" target="_blank" title="阿特梅迪亚">阿特梅迪亚</a></td>
											<td>			
												
												
													1:2
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1580694/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1580694/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1580694/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-07-31 01:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2559" target="_blank" title="谢里夫">谢里夫</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/678" target="_blank" title="布斯巴达">布斯巴达</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1580719/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1580719/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1580719/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-07-31 02:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/537" target="_blank" title="费内巴切">费内巴切</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1224" target="_blank" title="MTK匈格利">MTK匈格利</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												两球/两球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1580743/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1580743/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1580743/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-07-31 02:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1607" target="_blank" title="耶贝塔">耶贝塔</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/609" target="_blank" title="克拉科夫">克拉科夫</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1580744/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1580744/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1580744/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-07-31 02:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/244" target="_blank" title="奥尔堡">奥尔堡</a></td>
											<td>			
												
												
													5:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/4102" target="_blank" title="蒙迪里卡">蒙迪里卡</a></td>
											<td>			
												
												
													3:0
												
														
											</td>
											<td align="center">
											
											
												球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1580745/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1580745/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1580745/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-07-31 02:15</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/413" target="_blank" title="哥德堡">哥德堡</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/451" target="_blank" title="巴塞尔">巴塞尔</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1580752/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1580752/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1580752/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-07-31 02:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/153" target="_blank" title="安德莱赫">安德莱赫</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2435" target="_blank" title="巴特">巴特</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												球半/两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1580755/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1580755/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1580755/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-07-31 02:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1574" target="_blank" title="阿诺索">阿诺索</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/12" target="_blank" title="维快速">维快速</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1580756/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1580756/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1580756/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-07-31 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/566" target="_blank" title="帕纳辛纳">帕纳辛纳</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/610" target="_blank" title="第比利斯">第比利斯</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												两球/两球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1580761/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1580761/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1580761/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-07-31 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1296" target="_blank" title="多姆扎莱">多姆扎莱</a></td>
											<td>			
												
												
													0:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/653" target="_blank" title="萨迪纳摩">萨迪纳摩</a></td>
											<td>			
												
												
													0:3
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1580762/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1580762/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1580762/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-07-31 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/77" target="_blank" title="流浪者">流浪者</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2478" target="_blank" title="卡奧拿斯">卡奧拿斯</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1580763/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1580763/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1580763/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-08-05 23:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/603" target="_blank" title="文茨皮斯">文茨皮斯</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/498" target="_blank" title="布兰">布兰</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1579732/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1579732/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1579732/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-08-06 01:05</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2478" target="_blank" title="卡奧拿斯">卡奧拿斯</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/77" target="_blank" title="流浪者">流浪者</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												受让半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1579777/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1579777/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1579777/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-08-06 23:59</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/712" target="_blank" title="基辅迪纳">基辅迪纳</a></td>
											<td>			
												
												
													2:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/329" target="_blank" title="德罗赫达">德罗赫达</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1579597/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1579597/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1579597/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-08-06 23:59</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2435" target="_blank" title="巴特">巴特</a></td>
											<td>			
												
												
													2:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/153" target="_blank" title="安德莱赫">安德莱赫</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												受让半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1579598/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1579598/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1579598/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-08-06 23:59</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/610" target="_blank" title="第比利斯">第比利斯</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/566" target="_blank" title="帕纳辛纳">帕纳辛纳</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1579599/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1579599/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1579599/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-08-07 01:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/12" target="_blank" title="维快速">维快速</a></td>
											<td>			
												
												
													3:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1574" target="_blank" title="阿诺索">阿诺索</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1579627/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1579627/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1579627/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-08-07 02:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/4102" target="_blank" title="蒙迪里卡">蒙迪里卡</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/244" target="_blank" title="奥尔堡">奥尔堡</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1579631/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1579631/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1579631/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-08-07 02:15</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/701" target="_blank" title="阿特梅迪亚">阿特梅迪亚</a></td>
											<td>			
												
												
													4:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/396" target="_blank" title="坦佩雷">坦佩雷</a></td>
											<td>			
												
												
													3:0
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1579641/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1579641/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1579641/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-08-07 02:15</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/678" target="_blank" title="布斯巴达">布斯巴达</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2559" target="_blank" title="谢里夫">谢里夫</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1579642/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1579642/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1579642/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-08-07 02:15</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/451" target="_blank" title="巴塞尔">巴塞尔</a></td>
											<td>			
												
												
													4:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/413" target="_blank" title="哥德堡">哥德堡</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1579643/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1579643/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1579643/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-08-07 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/722" target="_blank" title="贝尔游击">贝尔游击</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/7612" target="_blank" title="国际巴库">国际巴库</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												球半/两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1579648/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1579648/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1579648/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-08-07 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/609" target="_blank" title="克拉科夫">克拉科夫</a></td>
											<td>			
												
												
													5:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1607" target="_blank" title="耶贝塔">耶贝塔</a></td>
											<td>			
												
												
													3:0
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1579649/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1579649/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1579649/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-08-07 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1224" target="_blank" title="MTK匈格利">MTK匈格利</a></td>
											<td>			
												
												
													0:5
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/537" target="_blank" title="费内巴切">费内巴切</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1579650/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1579650/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1579650/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-08-07 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/653" target="_blank" title="萨迪纳摩">萨迪纳摩</a></td>
											<td>			
												
												
													3:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1296" target="_blank" title="多姆扎莱">多姆扎莱</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1579651/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1579651/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1579651/bfyc" class="oyx" target="_blank">析</a>
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
											<td>2008-08-13 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/176" target="_blank" title="佛罗伦萨">佛罗伦萨</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/651" target="_blank" title="斯拉维亚">斯拉维亚</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1578327/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1578327/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1578327/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-08-13 23:59</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/411" target="_blank" title="莫斯巴达">莫斯巴达</a></td>
											<td>			
												
												
													1:4
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/712" target="_blank" title="基辅迪纳">基辅迪纳</a></td>
											<td>			
												
												
													1:2
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1578147/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1578147/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1578147/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-08-14 01:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/716" target="_blank" title="顿矿工">顿矿工</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/653" target="_blank" title="萨迪纳摩">萨迪纳摩</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1578171/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1578171/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1578171/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-08-14 01:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/617" target="_blank" title="索斯基">索斯基</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2435" target="_blank" title="巴特">巴特</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1578172/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1578172/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1578172/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-08-14 02:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1574" target="_blank" title="阿诺索">阿诺索</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/568" target="_blank" title="奥林匹亚">奥林匹亚</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1578203/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1578203/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1578203/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-08-14 02:05</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/244" target="_blank" title="奥尔堡">奥尔堡</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2478" target="_blank" title="卡奧拿斯">卡奧拿斯</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1578210/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1578210/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1578210/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-08-14 02:15</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/516" target="_blank" title="加拉塔萨">加拉塔萨</a></td>
											<td>			
												
												
													2:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/626" target="_blank" title="布星">布星</a></td>
											<td>			
												
												
													1:2
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1578211/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1578211/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1578211/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-08-14 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/151" target="_blank" title="沙尔克04">沙尔克04</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/109" target="_blank" title="马竞">马竞</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1578215/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1578215/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1578215/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-08-14 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/250" target="_blank" title="特温特">特温特</a></td>
											<td>			
												
												
													0:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/19" target="_blank" title="阿森纳">阿森纳</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1578216/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1578216/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1578216/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-08-14 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/166" target="_blank" title="尤文图斯">尤文图斯</a></td>
											<td>			
												
												
													4:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/701" target="_blank" title="阿特梅迪亚">阿特梅迪亚</a></td>
											<td>			
												
												
													3:0
												
														
											</td>
											<td align="center">
											
											
												两球/两球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1578217/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1578217/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1578217/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-08-14 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/498" target="_blank" title="布兰">布兰</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/211" target="_blank" title="马赛">马赛</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1578218/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1578218/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1578218/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-08-14 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/678" target="_blank" title="布斯巴达">布斯巴达</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/566" target="_blank" title="帕纳辛纳">帕纳辛纳</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1578219/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1578219/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1578219/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-08-14 03:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/722" target="_blank" title="贝尔游击">贝尔游击</a></td>
											<td>			
												
												
													2:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/537" target="_blank" title="费内巴切">费内巴切</a></td>
											<td>			
												
												
													2:1
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1578226/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1578226/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1578226/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-08-14 03:05</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/130" target="_blank" title="标准列日">标准列日</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/25" target="_blank" title="利物浦">利物浦</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1578230/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1578230/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1578230/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-08-14 03:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/927" target="_blank" title="吉马良斯">吉马良斯</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/451" target="_blank" title="巴塞尔">巴塞尔</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1578231/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1578231/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1578231/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-08-14 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/84" target="_blank" title="巴萨">巴萨</a></td>
											<td>			
												
												
													4:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/609" target="_blank" title="克拉科夫">克拉科夫</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												两球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1578232/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1578232/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1578232/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-08-27 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/566" target="_blank" title="帕纳辛纳">帕纳辛纳</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/678" target="_blank" title="布斯巴达">布斯巴达</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1575400/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1575400/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1575400/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-08-27 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/609" target="_blank" title="克拉科夫">克拉科夫</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/84" target="_blank" title="巴萨">巴萨</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1575401/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1575401/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1575401/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-08-27 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/701" target="_blank" title="阿特梅迪亚">阿特梅迪亚</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/166" target="_blank" title="尤文图斯">尤文图斯</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												受让一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1575402/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1575402/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1575402/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-08-27 23:59</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2435" target="_blank" title="巴特">巴特</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/617" target="_blank" title="索斯基">索斯基</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1575234/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1575234/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1575234/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-08-28 01:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2478" target="_blank" title="卡奧拿斯">卡奧拿斯</a></td>
											<td>			
												
												
													0:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/244" target="_blank" title="奥尔堡">奥尔堡</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1575255/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1575255/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1575255/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-08-28 01:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/712" target="_blank" title="基辅迪纳">基辅迪纳</a></td>
											<td>			
												
												
													4:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/411" target="_blank" title="莫斯巴达">莫斯巴达</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1575280/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1575280/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1575280/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-08-28 01:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/626" target="_blank" title="布星">布星</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/516" target="_blank" title="加拉塔萨">加拉塔萨</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1575281/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1575281/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1575281/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-08-28 02:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/537" target="_blank" title="费内巴切">费内巴切</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/722" target="_blank" title="贝尔游击">贝尔游击</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1575285/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1575285/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1575285/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-08-28 02:15</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/451" target="_blank" title="巴塞尔">巴塞尔</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/927" target="_blank" title="吉马良斯">吉马良斯</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1575299/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1575299/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1575299/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-08-28 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/568" target="_blank" title="奥林匹亚">奥林匹亚</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1574" target="_blank" title="阿诺索">阿诺索</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												球半/两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1575303/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1575303/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1575303/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-08-28 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/653" target="_blank" title="萨迪纳摩">萨迪纳摩</a></td>
											<td>			
												
												
													1:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/716" target="_blank" title="顿矿工">顿矿工</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1575304/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1575304/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1575304/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-08-28 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/109" target="_blank" title="马竞">马竞</a></td>
											<td>			
												
												
													4:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/151" target="_blank" title="沙尔克04">沙尔克04</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1575305/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1575305/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1575305/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-08-28 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/211" target="_blank" title="马赛">马赛</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/498" target="_blank" title="布兰">布兰</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												球半/两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1575306/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1575306/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1575306/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-08-28 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/651" target="_blank" title="斯拉维亚">斯拉维亚</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/176" target="_blank" title="佛罗伦萨">佛罗伦萨</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1575307/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1575307/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1575307/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-08-28 03:05</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/25" target="_blank" title="利物浦">利物浦</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/130" target="_blank" title="标准列日">标准列日</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												球半/两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1575319/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1575319/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1575319/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-08-28 03:05</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/19" target="_blank" title="阿森纳">阿森纳</a></td>
											<td>			
												
												
													4:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/250" target="_blank" title="特温特">特温特</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1575320/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1575320/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1575320/bfyc" class="oyx" target="_blank">析</a>
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
										
										
											A组
										
										
										</a>
									</li>
									
								
									<li id="yxMatch42"><a href="javascript:void(0);">
										
										
											B组
										
										
										</a>
									</li>
									
								
									<li id="yxMatch43"><a href="javascript:void(0);">
										
										
											C组
										
										
										</a>
									</li>
									
								
									<li id="yxMatch44"><a href="javascript:void(0);">
										
										
											D组
										
										
										</a>
									</li>
									
								
									<li id="yxMatch45"><a href="javascript:void(0);">
										
										
											E组
										
										
										</a>
									</li>
									
								
									<li id="yxMatch46"><a href="javascript:void(0);">
										
										
											F组
										
										
										</a>
									</li>
									
								
									<li id="yxMatch47"><a href="javascript:void(0);">
										
										
											G组
										
										
										</a>
									</li>
									
								
									<li id="yxMatch48"><a href="javascript:void(0);">
										
										
											H组
										
										
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
											<td>2008-09-17 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/24" target="_blank" title="切尔西">切尔西</a></td>
											<td>			
												
												
													4:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/208" target="_blank" title="波尔多">波尔多</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1570889/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1570889/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1570889/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-09-17 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/174" target="_blank" title="罗马">罗马</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1298" target="_blank" title="克卢日">克卢日</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1570890/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1570890/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1570890/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-10-02 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1298" target="_blank" title="克卢日">克卢日</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/24" target="_blank" title="切尔西">切尔西</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1566984/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1566984/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1566984/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-10-02 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/208" target="_blank" title="波尔多">波尔多</a></td>
											<td>			
												
												
													1:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/174" target="_blank" title="罗马">罗马</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1566985/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1566985/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1566985/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-10-23 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/208" target="_blank" title="波尔多">波尔多</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1298" target="_blank" title="克卢日">克卢日</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1562227/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1562227/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1562227/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-10-23 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/24" target="_blank" title="切尔西">切尔西</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/174" target="_blank" title="罗马">罗马</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1562228/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1562228/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1562228/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-11-05 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/174" target="_blank" title="罗马">罗马</a></td>
											<td>			
												
												
													3:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/24" target="_blank" title="切尔西">切尔西</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1558725/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1558725/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1558725/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-11-05 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1298" target="_blank" title="克卢日">克卢日</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/208" target="_blank" title="波尔多">波尔多</a></td>
											<td>			
												
												
													1:2
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1558726/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1558726/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1558726/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-11-27 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1298" target="_blank" title="克卢日">克卢日</a></td>
											<td>			
												
												
													1:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/174" target="_blank" title="罗马">罗马</a></td>
											<td>			
												
												
													1:2
												
														
											</td>
											<td align="center">
											
											
												受让半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1554096/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1554096/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1554096/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-11-27 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/208" target="_blank" title="波尔多">波尔多</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/24" target="_blank" title="切尔西">切尔西</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1554097/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1554097/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1554097/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-12-10 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/174" target="_blank" title="罗马">罗马</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/208" target="_blank" title="波尔多">波尔多</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1551761/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1551761/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1551761/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-12-10 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/24" target="_blank" title="切尔西">切尔西</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1298" target="_blank" title="克卢日">克卢日</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1551762/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1551762/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1551762/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
							</tbody></table>
						</div>						
					
						<div class="rounds_con" id="div_yxMatch42" style="display:none">
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
											<td>2008-09-17 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/566" target="_blank" title="帕纳辛纳">帕纳辛纳</a></td>
											<td>			
												
												
													0:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/152" target="_blank" title="国际米兰">国际米兰</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1570891/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1570891/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1570891/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-09-17 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/132" target="_blank" title="不来梅">不来梅</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1574" target="_blank" title="阿诺索">阿诺索</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1570892/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1570892/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1570892/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-10-02 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1574" target="_blank" title="阿诺索">阿诺索</a></td>
											<td>			
												
												
													3:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/566" target="_blank" title="帕纳辛纳">帕纳辛纳</a></td>
											<td>			
												
												
													2:1
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1566986/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1566986/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1566986/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-10-02 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/152" target="_blank" title="国际米兰">国际米兰</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/132" target="_blank" title="不来梅">不来梅</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1566987/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1566987/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1566987/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-10-23 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/152" target="_blank" title="国际米兰">国际米兰</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1574" target="_blank" title="阿诺索">阿诺索</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1562229/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1562229/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1562229/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-10-23 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/566" target="_blank" title="帕纳辛纳">帕纳辛纳</a></td>
											<td>			
												
												
													2:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/132" target="_blank" title="不来梅">不来梅</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1562230/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1562230/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1562230/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-11-05 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1574" target="_blank" title="阿诺索">阿诺索</a></td>
											<td>			
												
												
													3:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/152" target="_blank" title="国际米兰">国际米兰</a></td>
											<td>			
												
												
													2:2
												
														
											</td>
											<td align="center">
											
											
												受让一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1558727/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1558727/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1558727/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-11-05 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/132" target="_blank" title="不来梅">不来梅</a></td>
											<td>			
												
												
													0:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/566" target="_blank" title="帕纳辛纳">帕纳辛纳</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1558728/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1558728/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1558728/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-11-27 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/152" target="_blank" title="国际米兰">国际米兰</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/566" target="_blank" title="帕纳辛纳">帕纳辛纳</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1554098/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1554098/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1554098/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-11-27 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1574" target="_blank" title="阿诺索">阿诺索</a></td>
											<td>			
												
												
													2:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/132" target="_blank" title="不来梅">不来梅</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1554099/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1554099/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1554099/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-12-10 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/566" target="_blank" title="帕纳辛纳">帕纳辛纳</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1574" target="_blank" title="阿诺索">阿诺索</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1551763/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1551763/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1551763/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-12-10 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/132" target="_blank" title="不来梅">不来梅</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/152" target="_blank" title="国际米兰">国际米兰</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1551764/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1551764/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1551764/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
							</tbody></table>
						</div>						
					
						<div class="rounds_con" id="div_yxMatch43" style="display:none">
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
											<td>2008-09-17 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/451" target="_blank" title="巴塞尔">巴塞尔</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/716" target="_blank" title="顿矿工">顿矿工</a></td>
											<td>			
												
												
													0:2
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1570893/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1570893/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1570893/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-09-17 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/84" target="_blank" title="巴萨">巴萨</a></td>
											<td>			
												
												
													3:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/466" target="_blank" title="里斯本">里斯本</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1570894/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1570894/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1570894/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-10-02 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/466" target="_blank" title="里斯本">里斯本</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/451" target="_blank" title="巴塞尔">巴塞尔</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1566988/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1566988/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1566988/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-10-02 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/716" target="_blank" title="顿矿工">顿矿工</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/84" target="_blank" title="巴萨">巴萨</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												受让半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1566989/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1566989/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1566989/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-10-23 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/716" target="_blank" title="顿矿工">顿矿工</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/466" target="_blank" title="里斯本">里斯本</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1562231/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1562231/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1562231/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-10-23 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/451" target="_blank" title="巴塞尔">巴塞尔</a></td>
											<td>			
												
												
													0:5
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/84" target="_blank" title="巴萨">巴萨</a></td>
											<td>			
												
												
													0:3
												
														
											</td>
											<td align="center">
											
											
												受让一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1562232/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1562232/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1562232/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-11-05 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/466" target="_blank" title="里斯本">里斯本</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/716" target="_blank" title="顿矿工">顿矿工</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1558729/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1558729/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1558729/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-11-05 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/84" target="_blank" title="巴萨">巴萨</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/451" target="_blank" title="巴塞尔">巴塞尔</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1558730/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1558730/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1558730/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-11-27 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/716" target="_blank" title="顿矿工">顿矿工</a></td>
											<td>			
												
												
													5:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/451" target="_blank" title="巴塞尔">巴塞尔</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1554100/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1554100/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1554100/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-11-27 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/466" target="_blank" title="里斯本">里斯本</a></td>
											<td>			
												
												
													2:5
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/84" target="_blank" title="巴萨">巴萨</a></td>
											<td>			
												
												
													0:2
												
														
											</td>
											<td align="center">
											
											
												受让半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1554101/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1554101/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1554101/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-12-10 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/451" target="_blank" title="巴塞尔">巴塞尔</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/466" target="_blank" title="里斯本">里斯本</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1551765/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1551765/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1551765/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-12-10 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/84" target="_blank" title="巴萨">巴萨</a></td>
											<td>			
												
												
													2:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/716" target="_blank" title="顿矿工">顿矿工</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1551766/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1551766/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1551766/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
							</tbody></table>
						</div>						
					
						<div class="rounds_con" id="div_yxMatch44" style="display:none">
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
											<td>2008-09-17 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/254" target="_blank" title="埃因霍温">埃因霍温</a></td>
											<td>			
												
												
													0:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/109" target="_blank" title="马竞">马竞</a></td>
											<td>			
												
												
													0:2
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1570895/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1570895/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1570895/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-09-17 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/211" target="_blank" title="马赛">马赛</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/25" target="_blank" title="利物浦">利物浦</a></td>
											<td>			
												
												
													1:2
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1570896/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1570896/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1570896/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-10-02 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/25" target="_blank" title="利物浦">利物浦</a></td>
											<td>			
												
												
													3:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/254" target="_blank" title="埃因霍温">埃因霍温</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1566990/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1566990/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1566990/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-10-02 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/109" target="_blank" title="马竞">马竞</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/211" target="_blank" title="马赛">马赛</a></td>
											<td>			
												
												
													2:1
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1566991/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1566991/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1566991/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-10-23 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/109" target="_blank" title="马竞">马竞</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/25" target="_blank" title="利物浦">利物浦</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1562233/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1562233/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1562233/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-10-23 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/254" target="_blank" title="埃因霍温">埃因霍温</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/211" target="_blank" title="马赛">马赛</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1562234/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1562234/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1562234/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-11-05 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/25" target="_blank" title="利物浦">利物浦</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/109" target="_blank" title="马竞">马竞</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1558731/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1558731/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1558731/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-11-05 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/211" target="_blank" title="马赛">马赛</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/254" target="_blank" title="埃因霍温">埃因霍温</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1558732/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1558732/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1558732/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-11-27 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/109" target="_blank" title="马竞">马竞</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/254" target="_blank" title="埃因霍温">埃因霍温</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1554102/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1554102/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1554102/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-11-27 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/25" target="_blank" title="利物浦">利物浦</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/211" target="_blank" title="马赛">马赛</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1554103/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1554103/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1554103/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-12-10 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/254" target="_blank" title="埃因霍温">埃因霍温</a></td>
											<td>			
												
												
													1:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/25" target="_blank" title="利物浦">利物浦</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1551767/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1551767/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1551767/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-12-10 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/211" target="_blank" title="马赛">马赛</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/109" target="_blank" title="马竞">马竞</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1551768/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1551768/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1551768/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
							</tbody></table>
						</div>						
					
						<div class="rounds_con" id="div_yxMatch45" style="display:none">
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
											<td>2008-09-18 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/27" target="_blank" title="曼联">曼联</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/107" target="_blank" title="比利亚雷">比利亚雷</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1570782/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1570782/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1570782/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-09-18 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/70" target="_blank" title="凯尔特人">凯尔特人</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/244" target="_blank" title="奥尔堡">奥尔堡</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1570783/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1570783/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1570783/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-10-01 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/244" target="_blank" title="奥尔堡">奥尔堡</a></td>
											<td>			
												
												
													0:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/27" target="_blank" title="曼联">曼联</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让球半/两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1567088/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1567088/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1567088/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-10-01 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/107" target="_blank" title="比利亚雷">比利亚雷</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/70" target="_blank" title="凯尔特人">凯尔特人</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1567089/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1567089/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1567089/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-10-22 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/107" target="_blank" title="比利亚雷">比利亚雷</a></td>
											<td>			
												
												
													6:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/244" target="_blank" title="奥尔堡">奥尔堡</a></td>
											<td>			
												
												
													2:2
												
														
											</td>
											<td align="center">
											
											
												两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1562319/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1562319/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1562319/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-10-22 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/27" target="_blank" title="曼联">曼联</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/70" target="_blank" title="凯尔特人">凯尔特人</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												球半/两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1562320/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1562320/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1562320/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-11-06 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/244" target="_blank" title="奥尔堡">奥尔堡</a></td>
											<td>			
												
												
													2:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/107" target="_blank" title="比利亚雷">比利亚雷</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1558621/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1558621/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1558621/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-11-06 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/70" target="_blank" title="凯尔特人">凯尔特人</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/27" target="_blank" title="曼联">曼联</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												受让半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1558622/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1558622/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1558622/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-11-26 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/107" target="_blank" title="比利亚雷">比利亚雷</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/27" target="_blank" title="曼联">曼联</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1554158/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1554158/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1554158/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-11-26 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/244" target="_blank" title="奥尔堡">奥尔堡</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/70" target="_blank" title="凯尔特人">凯尔特人</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1554159/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1554159/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1554159/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-12-11 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/27" target="_blank" title="曼联">曼联</a></td>
											<td>			
												
												
													2:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/244" target="_blank" title="奥尔堡">奥尔堡</a></td>
											<td>			
												
												
													1:2
												
														
											</td>
											<td align="center">
											
											
												球半/两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1551713/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1551713/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1551713/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-12-11 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/70" target="_blank" title="凯尔特人">凯尔特人</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/107" target="_blank" title="比利亚雷">比利亚雷</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1551714/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1551714/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1551714/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
							</tbody></table>
						</div>						
					
						<div class="rounds_con" id="div_yxMatch46" style="display:none">
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
											<td>2008-09-18 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/626" target="_blank" title="布星">布星</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/88" target="_blank" title="拜仁">拜仁</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1570784/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1570784/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1570784/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-09-18 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/205" target="_blank" title="里昂">里昂</a></td>
											<td>			
												
												
													2:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/176" target="_blank" title="佛罗伦萨">佛罗伦萨</a></td>
											<td>			
												
												
													0:2
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1570785/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1570785/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1570785/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-10-01 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/176" target="_blank" title="佛罗伦萨">佛罗伦萨</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/626" target="_blank" title="布星">布星</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1567090/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1567090/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1567090/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-10-01 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/88" target="_blank" title="拜仁">拜仁</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/205" target="_blank" title="里昂">里昂</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1567091/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1567091/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1567091/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-10-22 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/88" target="_blank" title="拜仁">拜仁</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/176" target="_blank" title="佛罗伦萨">佛罗伦萨</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1562321/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1562321/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1562321/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-10-22 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/626" target="_blank" title="布星">布星</a></td>
											<td>			
												
												
													3:5
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/205" target="_blank" title="里昂">里昂</a></td>
											<td>			
												
												
													3:2
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1562322/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1562322/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1562322/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-11-06 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/176" target="_blank" title="佛罗伦萨">佛罗伦萨</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/88" target="_blank" title="拜仁">拜仁</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1558623/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1558623/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1558623/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-11-06 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/205" target="_blank" title="里昂">里昂</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/626" target="_blank" title="布星">布星</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1558624/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1558624/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1558624/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-11-26 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/88" target="_blank" title="拜仁">拜仁</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/626" target="_blank" title="布星">布星</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1554160/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1554160/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1554160/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-11-26 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/176" target="_blank" title="佛罗伦萨">佛罗伦萨</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/205" target="_blank" title="里昂">里昂</a></td>
											<td>			
												
												
													1:2
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1554161/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1554161/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1554161/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-12-11 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/626" target="_blank" title="布星">布星</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/176" target="_blank" title="佛罗伦萨">佛罗伦萨</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1551715/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1551715/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1551715/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-12-11 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/205" target="_blank" title="里昂">里昂</a></td>
											<td>			
												
												
													2:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/88" target="_blank" title="拜仁">拜仁</a></td>
											<td>			
												
												
													0:3
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1551716/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1551716/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1551716/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
							</tbody></table>
						</div>						
					
						<div class="rounds_con" id="div_yxMatch47" style="display:none">
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
											<td>2008-09-18 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/468" target="_blank" title="波尔图">波尔图</a></td>
											<td>			
												
												
													3:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/537" target="_blank" title="费内巴切">费内巴切</a></td>
											<td>			
												
												
													2:1
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1570786/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1570786/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1570786/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-09-18 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/712" target="_blank" title="基辅迪纳">基辅迪纳</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/19" target="_blank" title="阿森纳">阿森纳</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1570787/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1570787/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1570787/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-10-01 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/19" target="_blank" title="阿森纳">阿森纳</a></td>
											<td>			
												
												
													4:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/468" target="_blank" title="波尔图">波尔图</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1567092/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1567092/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1567092/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-10-01 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/537" target="_blank" title="费内巴切">费内巴切</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/712" target="_blank" title="基辅迪纳">基辅迪纳</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1567093/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1567093/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1567093/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-10-22 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/537" target="_blank" title="费内巴切">费内巴切</a></td>
											<td>			
												
												
													2:5
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/19" target="_blank" title="阿森纳">阿森纳</a></td>
											<td>			
												
												
													1:3
												
														
											</td>
											<td align="center">
											
											
												受让半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1562323/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1562323/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1562323/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-10-22 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/468" target="_blank" title="波尔图">波尔图</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/712" target="_blank" title="基辅迪纳">基辅迪纳</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1562324/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1562324/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1562324/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-11-06 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/19" target="_blank" title="阿森纳">阿森纳</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/537" target="_blank" title="费内巴切">费内巴切</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												球半/两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1558625/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1558625/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1558625/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-11-06 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/712" target="_blank" title="基辅迪纳">基辅迪纳</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/468" target="_blank" title="波尔图">波尔图</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1558626/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1558626/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1558626/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-11-26 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/537" target="_blank" title="费内巴切">费内巴切</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/468" target="_blank" title="波尔图">波尔图</a></td>
											<td>			
												
												
													0:2
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1554162/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1554162/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1554162/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-11-26 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/19" target="_blank" title="阿森纳">阿森纳</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/712" target="_blank" title="基辅迪纳">基辅迪纳</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1554163/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1554163/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1554163/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-12-11 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/468" target="_blank" title="波尔图">波尔图</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/19" target="_blank" title="阿森纳">阿森纳</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1551717/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1551717/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1551717/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-12-11 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/712" target="_blank" title="基辅迪纳">基辅迪纳</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/537" target="_blank" title="费内巴切">费内巴切</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1551718/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1551718/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1551718/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
							</tbody></table>
						</div>						
					
						<div class="rounds_con" id="div_yxMatch48" style="display:none">
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
											<td>2008-09-18 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/166" target="_blank" title="尤文图斯">尤文图斯</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/395" target="_blank" title="泽尼特">泽尼特</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1570788/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1570788/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1570788/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-09-18 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/82" target="_blank" title="皇马">皇马</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2435" target="_blank" title="巴特">巴特</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												两球半/三球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1570789/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1570789/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1570789/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-10-01 00:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/395" target="_blank" title="泽尼特">泽尼特</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/82" target="_blank" title="皇马">皇马</a></td>
											<td>			
												
												
													1:2
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1567070/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1567070/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1567070/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-10-01 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2435" target="_blank" title="巴特">巴特</a></td>
											<td>			
												
												
													2:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/166" target="_blank" title="尤文图斯">尤文图斯</a></td>
											<td>			
												
												
													2:2
												
														
											</td>
											<td align="center">
											
											
												受让一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1567094/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1567094/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1567094/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-10-22 00:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/395" target="_blank" title="泽尼特">泽尼特</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2435" target="_blank" title="巴特">巴特</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1562307/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1562307/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1562307/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-10-22 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/166" target="_blank" title="尤文图斯">尤文图斯</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/82" target="_blank" title="皇马">皇马</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1562325/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1562325/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1562325/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-11-06 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2435" target="_blank" title="巴特">巴特</a></td>
											<td>			
												
												
													0:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/395" target="_blank" title="泽尼特">泽尼特</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1558627/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1558627/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1558627/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-11-06 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/82" target="_blank" title="皇马">皇马</a></td>
											<td>			
												
												
													0:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/166" target="_blank" title="尤文图斯">尤文图斯</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1558628/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1558628/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1558628/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-11-26 01:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/395" target="_blank" title="泽尼特">泽尼特</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/166" target="_blank" title="尤文图斯">尤文图斯</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1554148/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1554148/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1554148/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-11-26 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2435" target="_blank" title="巴特">巴特</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/82" target="_blank" title="皇马">皇马</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1554164/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1554164/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1554164/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-12-11 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/166" target="_blank" title="尤文图斯">尤文图斯</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2435" target="_blank" title="巴特">巴特</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1551719/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1551719/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1551719/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-12-11 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/82" target="_blank" title="皇马">皇马</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/395" target="_blank" title="泽尼特">泽尼特</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1551720/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1551720/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1551720/bfyc" class="oyx" target="_blank">析</a>
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
										
										
											全部
										
										
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
											<td>2009-02-25 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/109" target="_blank" title="马竞">马竞</a></td>
											<td>			
												
												
													2:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/468" target="_blank" title="波尔图">波尔图</a></td>
											<td>			
												
												
													2:1
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1540518/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1540518/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1540518/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-02-25 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/205" target="_blank" title="里昂">里昂</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/84" target="_blank" title="巴萨">巴萨</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												受让半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1540519/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1540519/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1540519/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-02-25 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/19" target="_blank" title="阿森纳">阿森纳</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/174" target="_blank" title="罗马">罗马</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1540520/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1540520/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1540520/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-02-25 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/152" target="_blank" title="国际米兰">国际米兰</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/27" target="_blank" title="曼联">曼联</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1540521/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1540521/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1540521/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-02-26 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/82" target="_blank" title="皇马">皇马</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/25" target="_blank" title="利物浦">利物浦</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1540417/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1540417/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1540417/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-02-26 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/24" target="_blank" title="切尔西">切尔西</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/166" target="_blank" title="尤文图斯">尤文图斯</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1540418/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1540418/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1540418/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-02-26 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/107" target="_blank" title="比利亚雷">比利亚雷</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/566" target="_blank" title="帕纳辛纳">帕纳辛纳</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1540419/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1540419/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1540419/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-02-26 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/466" target="_blank" title="里斯本">里斯本</a></td>
											<td>			
												
												
													0:5
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/88" target="_blank" title="拜仁">拜仁</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1540420/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1540420/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1540420/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-03-11 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/25" target="_blank" title="利物浦">利物浦</a></td>
											<td>			
												
												
													4:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/82" target="_blank" title="皇马">皇马</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1537360/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1537360/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1537360/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-03-11 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/166" target="_blank" title="尤文图斯">尤文图斯</a></td>
											<td>			
												
												
													2:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/24" target="_blank" title="切尔西">切尔西</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1537361/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1537361/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1537361/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-03-11 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/566" target="_blank" title="帕纳辛纳">帕纳辛纳</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/107" target="_blank" title="比利亚雷">比利亚雷</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1537362/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1537362/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1537362/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-03-11 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/88" target="_blank" title="拜仁">拜仁</a></td>
											<td>			
												
												
													7:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/466" target="_blank" title="里斯本">里斯本</a></td>
											<td>			
												
												
													4:1
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1537363/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1537363/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1537363/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-03-12 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/468" target="_blank" title="波尔图">波尔图</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/109" target="_blank" title="马竞">马竞</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1537246/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1537246/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1537246/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-03-12 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/84" target="_blank" title="巴萨">巴萨</a></td>
											<td>			
												
												
													5:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/205" target="_blank" title="里昂">里昂</a></td>
											<td>			
												
												
													4:1
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1537247/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1537247/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1537247/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-03-12 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/174" target="_blank" title="罗马">罗马</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/19" target="_blank" title="阿森纳">阿森纳</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1537248/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1537248/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1537248/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-03-12 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/27" target="_blank" title="曼联">曼联</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/152" target="_blank" title="国际米兰">国际米兰</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1537249/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1537249/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1537249/bfyc" class="oyx" target="_blank">析</a>
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
											<td>2009-04-08 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/107" target="_blank" title="比利亚雷">比利亚雷</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/19" target="_blank" title="阿森纳">阿森纳</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1530810/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1530810/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1530810/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-04-08 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/27" target="_blank" title="曼联">曼联</a></td>
											<td>			
												
												
													2:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/468" target="_blank" title="波尔图">波尔图</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1530811/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1530811/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1530811/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-04-09 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/25" target="_blank" title="利物浦">利物浦</a></td>
											<td>			
												
												
													1:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/24" target="_blank" title="切尔西">切尔西</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1530703/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1530703/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1530703/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-04-09 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/84" target="_blank" title="巴萨">巴萨</a></td>
											<td>			
												
												
													4:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/88" target="_blank" title="拜仁">拜仁</a></td>
											<td>			
												
												
													4:0
												
														
											</td>
											<td align="center">
											
											
												球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1530704/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1530704/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1530704/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-04-15 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/24" target="_blank" title="切尔西">切尔西</a></td>
											<td>			
												
												
													4:4
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/25" target="_blank" title="利物浦">利物浦</a></td>
											<td>			
												
												
													0:2
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1528862/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1528862/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1528862/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-04-15 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/88" target="_blank" title="拜仁">拜仁</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/84" target="_blank" title="巴萨">巴萨</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1528863/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1528863/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1528863/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-04-16 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/19" target="_blank" title="阿森纳">阿森纳</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/107" target="_blank" title="比利亚雷">比利亚雷</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1528718/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1528718/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1528718/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-04-16 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/468" target="_blank" title="波尔图">波尔图</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/27" target="_blank" title="曼联">曼联</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1528719/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1528719/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1528719/bfyc" class="oyx" target="_blank">析</a>
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
											<td>2009-04-29 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/84" target="_blank" title="巴萨">巴萨</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/24" target="_blank" title="切尔西">切尔西</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1524922/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1524922/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1524922/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-04-30 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/27" target="_blank" title="曼联">曼联</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/19" target="_blank" title="阿森纳">阿森纳</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1524810/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1524810/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1524810/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-05-06 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/19" target="_blank" title="阿森纳">阿森纳</a></td>
											<td>			
												
												
													1:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/27" target="_blank" title="曼联">曼联</a></td>
											<td>			
												
												
													0:2
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1523143/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1523143/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1523143/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2009-05-07 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/24" target="_blank" title="切尔西">切尔西</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/84" target="_blank" title="巴萨">巴萨</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1522993/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1522993/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1522993/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
							</tbody></table>
						</div>						
										
				
				</ul>
			
				<ul class="tabs9_main1" id="tabs9_main_8" style="">

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
											<td>2009-05-28 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/27" target="_blank" title="曼联">曼联</a></td>
											<td>			
												
												
													0:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/84" target="_blank" title="巴萨">巴萨</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1518312/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1518312/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1518312/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
							</tbody></table>
						</div>						
										
				
				</ul>
			
			
		</div>

		
		
		
		
		
		
		
		
		
		
		
		





</body>