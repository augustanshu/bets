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
    <b id="xt_h">21</b><b id="xt_m">57</b><b id="xt_s">01</b> </p>
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
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/23131" target="_blank" class="a1" title="FC林肯">
					<li>FC林肯</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/19307" target="_blank" class="a1" title="艾拉斯">
					<li>艾拉斯</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/14654" target="_blank" class="a1" title="塞伊奈">
					<li>塞伊奈</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/14630" target="_blank" class="a1" title="泰拜尼">
					<li>泰拜尼</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/8557" target="_blank" class="a1" title="久尔久">
					<li>久尔久</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/5913" target="_blank" class="a1" title="圣达哥林">
					<li>圣达哥林</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/4395" target="_blank" class="a1" title="卡拉巴克">
					<li>卡拉巴克</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/3576" target="_blank" class="a1" title="地游击">
					<li>地游击</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/3249" target="_blank" class="a1" title="波青年">
					<li>波青年</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/2560" target="_blank" class="a1" title="兹林尼">
					<li>兹林尼</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/2559" target="_blank" class="a1" title="谢里夫">
					<li>谢里夫</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/2534" target="_blank" class="a1" title="比尔森">
					<li>比尔森</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/2531" target="_blank" class="a1" title="托尔B36">
					<li>托尔B36</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/2522" target="_blank" class="a1" title="弗罗拉">
					<li>弗罗拉</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/2435" target="_blank" class="a1" title="巴特">
					<li>巴特</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/2389" target="_blank" class="a1" title="萨尔基">
					<li>萨尔基</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/2165" target="_blank" class="a1" title="北雪平">
					<li>北雪平</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/1650" target="_blank" class="a1" title="十字军">
					<li>十字军</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/1345" target="_blank" class="a1" title="邓多克">
					<li>邓多克</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/1295" target="_blank" class="a1" title="奥林比查">
					<li>奥林比查</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/1261" target="_blank" class="a1" title="新圣徒">
					<li>新圣徒</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/1232" target="_blank" class="a1" title="特伦钦">
					<li>特伦钦</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/955" target="_blank" class="a1" title="贝夏普尔">
					<li>贝夏普尔</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/940" target="_blank" class="a1" title="瓦尔达">
					<li>瓦尔达</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/726" target="_blank" class="a1" title="费伦茨">
					<li>费伦茨</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/724" target="_blank" class="a1" title="塞萨洛尼">
					<li>塞萨洛尼</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/716" target="_blank" class="a1" title="顿矿工">
					<li>顿矿工</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/711" target="_blank" class="a1" title="哈夫纳夫">
					<li>哈夫纳夫</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/703" target="_blank" class="a1" title="希腊人">
					<li>希腊人</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/702" target="_blank" class="a1" title="迪德朗">
					<li>迪德朗</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/683" target="_blank" class="a1" title="阿斯塔纳">
					<li>阿斯塔纳</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/678" target="_blank" class="a1" title="布斯巴达">
					<li>布斯巴达</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/661" target="_blank" class="a1" title="瓦莱塔">
					<li>瓦莱塔</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/626" target="_blank" class="a1" title="布星">
					<li>布星</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/614" target="_blank" class="a1" title="梅塔鲁格">
					<li>梅塔鲁格</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/612" target="_blank" class="a1" title="红星">
					<li>红星</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/610" target="_blank" class="a1" title="第比利斯">
					<li>第比利斯</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/568" target="_blank" class="a1" title="奥林匹亚">
					<li>奥林匹亚</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/537" target="_blank" class="a1" title="费内巴切">
					<li>费内巴切</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/507" target="_blank" class="a1" title="罗森博格">
					<li>罗森博格</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/442" target="_blank" class="a1" title="年轻人">
					<li>年轻人</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/253" target="_blank" class="a1" title="阿贾克斯">
					<li>阿贾克斯</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/174" target="_blank" class="a1" title="罗马">
					<li>罗马</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/153" target="_blank" class="a1" title="安德莱赫">
					<li>安德莱赫</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/107" target="_blank" class="a1" title="比利亚雷">
					<li>比利亚雷</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/9" target="_blank" class="a1" title="萨尔茨堡">
					<li>萨尔茨堡</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/99" target="_blank" class="a1" title="多特蒙德">
					<li>多特蒙德</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/84" target="_blank" class="a1" title="巴萨">
					<li>巴萨</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/19" target="_blank" class="a1" title="阿森纳">
					<li>阿森纳</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/82" target="_blank" class="a1" title="皇马">
					<li>皇马</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/88" target="_blank" class="a1" title="拜仁">
					<li>拜仁</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/271" target="_blank" class="a1" title="巴黎圣曼">
					<li>巴黎圣曼</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/26" target="_blank" class="a1" title="曼城">
					<li>曼城</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/166" target="_blank" class="a1" title="尤文图斯">
					<li>尤文图斯</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/1419" target="_blank" class="a1" title="那不勒斯">
					<li>那不勒斯</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/463" target="_blank" class="a1" title="本菲卡">
					<li>本菲卡</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/468" target="_blank" class="a1" title="波尔图">
					<li>波尔图</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/197" target="_blank" class="a1" title="摩纳哥">
					<li>摩纳哥</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/529" target="_blank" class="a1" title="贝西克塔">
					<li>贝西克塔</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/659" target="_blank" class="a1" title="华沙军团">
					<li>华沙军团</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/165" target="_blank" class="a1" title="勒沃库森">
					<li>勒沃库森</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/712" target="_blank" class="a1" title="基辅迪纳">
					<li>基辅迪纳</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/109" target="_blank" class="a1" title="马竞">
					<li>马竞</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/59" target="_blank" class="a1" title="莱切斯特">
					<li>莱切斯特</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/86" target="_blank" class="a1" title="塞维利亚">
					<li>塞维利亚</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/227" target="_blank" class="a1" title="哥本哈根">
					<li>哥本哈根</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/33" target="_blank" class="a1" title="热刺">
					<li>热刺</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/429" target="_blank" class="a1" title="罗斯托夫">
					<li>罗斯托夫</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/15175" target="_blank" class="a1" title="卢多戈雷">
					<li>卢多戈雷</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/205" target="_blank" class="a1" title="里昂">
					<li>里昂</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/128" target="_blank" class="a1" title="门兴">
					<li>门兴</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/466" target="_blank" class="a1" title="里斯本">
					<li>里斯本</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/407" target="_blank" class="a1" title="莫陆军">
					<li>莫陆军</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/70" target="_blank" class="a1" title="凯尔特人">
					<li>凯尔特人</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/254" target="_blank" class="a1" title="埃因霍温">
					<li>埃因霍温</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/451" target="_blank" class="a1" title="巴塞尔">
					<li>巴塞尔</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/148" target="_blank" class="a1" title="布鲁日">
					<li>布鲁日</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/653" target="_blank" class="a1" title="萨迪纳摩">
					<li>萨迪纳摩</li>
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
				<ul id="tabs9" style="height:40px;width:2000px;overflow:hidden; position: relative;">
					
					
						
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
					
						
						<li id="main_6" fl="yxMatch61" class="cur">十六强
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
											<td>2016-06-28 23:59</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2522" target="_blank" title="弗罗拉">弗罗拉</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/23131" target="_blank" title="FC林肯">FC林肯</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2105560/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2105560/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2105560/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-06-29 01:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/661" target="_blank" title="瓦莱塔">瓦莱塔</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2531" target="_blank" title="托尔B36">托尔B36</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2105557/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2105557/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2105557/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-06-29 02:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1261" target="_blank" title="新圣徒">新圣徒</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/14630" target="_blank" title="泰拜尼">泰拜尼</a></td>
											<td>			
												
												
													2:1
												
														
											</td>
											<td align="center">
											
											
												两球半/三球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2105558/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2105558/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2105558/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-06-29 02:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5913" target="_blank" title="圣达哥林">圣达哥林</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/19307" target="_blank" title="艾拉斯">艾拉斯</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2105559/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2105559/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2105559/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-07-05 23:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/19307" target="_blank" title="艾拉斯">艾拉斯</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/5913" target="_blank" title="圣达哥林">圣达哥林</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2105600/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2105600/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2105600/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-07-06 01:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2531" target="_blank" title="托尔B36">托尔B36</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/661" target="_blank" title="瓦莱塔">瓦莱塔</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2105601/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2105601/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2105601/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-07-06 02:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/14630" target="_blank" title="泰拜尼">泰拜尼</a></td>
											<td>			
												
												
													0:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1261" target="_blank" title="新圣徒">新圣徒</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2105602/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2105602/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2105602/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-07-07 01:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/23131" target="_blank" title="FC林肯">FC林肯</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2522" target="_blank" title="弗罗拉">弗罗拉</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2105599/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2105599/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2105599/bfyc" class="oyx" target="_blank">析</a>
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
											<td>2016-07-13 00:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2560" target="_blank" title="兹林尼">兹林尼</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/659" target="_blank" title="华沙军团">华沙军团</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2115454/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2115454/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2115454/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-07-13 01:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/4395" target="_blank" title="卡拉巴克">卡拉巴克</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/702" target="_blank" title="迪德朗">迪德朗</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												球半/两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2115455/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2115455/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2115455/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-07-13 01:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/610" target="_blank" title="第比利斯">第比利斯</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/19307" target="_blank" title="艾拉斯">艾拉斯</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2117332/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2117332/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2117332/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-07-13 01:50</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/955" target="_blank" title="贝夏普尔">贝夏普尔</a></td>
											<td>			
												
												
													3:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2559" target="_blank" title="谢里夫">谢里夫</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2115456/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2115456/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2115456/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-07-13 02:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2435" target="_blank" title="巴特">巴特</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/14654" target="_blank" title="塞伊奈">塞伊奈</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2115457/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2115457/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2115457/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-07-13 02:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1261" target="_blank" title="新圣徒">新圣徒</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/703" target="_blank" title="希腊人">希腊人</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2116326/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2116326/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2116326/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-07-13 02:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/661" target="_blank" title="瓦莱塔">瓦莱塔</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/612" target="_blank" title="红星">红星</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												受让球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2116327/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2116327/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2116327/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-07-13 02:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/23131" target="_blank" title="FC林肯">FC林肯</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/70" target="_blank" title="凯尔特人">凯尔特人</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让两球/两球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2117342/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2117342/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2117342/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-07-13 02:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/9" target="_blank" title="萨尔茨堡">萨尔茨堡</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/614" target="_blank" title="梅塔鲁格">梅塔鲁格</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												三球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2115458/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2115458/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2115458/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-07-13 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/940" target="_blank" title="瓦尔达">瓦尔达</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/653" target="_blank" title="萨迪纳摩">萨迪纳摩</a></td>
											<td>			
												
												
													0:2
												
														
											</td>
											<td align="center">
											
											
												受让半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2115459/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2115459/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2115459/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-07-14 01:15</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/507" target="_blank" title="罗森博格">罗森博格</a></td>
											<td>			
												
												
													3:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2165" target="_blank" title="北雪平">北雪平</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2115368/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2115368/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2115368/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-07-14 01:15</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2389" target="_blank" title="萨尔基">萨尔基</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/683" target="_blank" title="阿斯塔纳">阿斯塔纳</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2115460/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2115460/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2115460/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-07-14 01:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/15175" target="_blank" title="卢多戈雷">卢多戈雷</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/3249" target="_blank" title="波青年">波青年</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2115461/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2115461/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2115461/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-07-14 02:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1650" target="_blank" title="十字军">十字军</a></td>
											<td>			
												
												
													0:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/227" target="_blank" title="哥本哈根">哥本哈根</a></td>
											<td>			
												
												
													0:2
												
														
											</td>
											<td align="center">
											
											
												受让球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2115462/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2115462/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2115462/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-07-14 02:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3576" target="_blank" title="地游击">地游击</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/726" target="_blank" title="费伦茨">费伦茨</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2115463/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2115463/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2115463/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-07-14 02:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1295" target="_blank" title="奥林比查">奥林比查</a></td>
											<td>			
												
												
													3:4
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1232" target="_blank" title="特伦钦">特伦钦</a></td>
											<td>			
												
												
													2:4
												
														
											</td>
											<td align="center">
											
											
												受让半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2115464/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2115464/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2115464/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-07-14 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1345" target="_blank" title="邓多克">邓多克</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/711" target="_blank" title="哈夫纳夫">哈夫纳夫</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2115465/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2115465/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2115465/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-07-19 23:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/19307" target="_blank" title="艾拉斯">艾拉斯</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/610" target="_blank" title="第比利斯">第比利斯</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2117357/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2117357/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2117357/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-07-19 23:59</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/614" target="_blank" title="梅塔鲁格">梅塔鲁格</a></td>
											<td>			
												
												
													0:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/9" target="_blank" title="萨尔茨堡">萨尔茨堡</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让球半/两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2115450/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2115450/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2115450/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-07-20 01:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/14654" target="_blank" title="塞伊奈">塞伊奈</a></td>
											<td>			
												
												
													2:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2435" target="_blank" title="巴特">巴特</a></td>
											<td>			
												
												
													1:2
												
														
											</td>
											<td align="center">
											
											
												受让半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2115451/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2115451/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2115451/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-07-20 01:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2559" target="_blank" title="谢里夫">谢里夫</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/955" target="_blank" title="贝夏普尔">贝夏普尔</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2115471/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2115471/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2115471/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-07-20 01:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/703" target="_blank" title="希腊人">希腊人</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1261" target="_blank" title="新圣徒">新圣徒</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2116366/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2116366/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2116366/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-07-20 01:15</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/227" target="_blank" title="哥本哈根">哥本哈根</a></td>
											<td>			
												
												
													6:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1650" target="_blank" title="十字军">十字军</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												两球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2115452/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2115452/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2115452/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-07-20 02:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/612" target="_blank" title="红星">红星</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/661" target="_blank" title="瓦莱塔">瓦莱塔</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												两球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2116332/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2116332/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2116332/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-07-20 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/659" target="_blank" title="华沙军团">华沙军团</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2560" target="_blank" title="兹林尼">兹林尼</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2115453/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2115453/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2115453/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-07-20 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3249" target="_blank" title="波青年">波青年</a></td>
											<td>			
												
												
													0:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/15175" target="_blank" title="卢多戈雷">卢多戈雷</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2115475/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2115475/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2115475/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-07-20 22:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/683" target="_blank" title="阿斯塔纳">阿斯塔纳</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2389" target="_blank" title="萨尔基">萨尔基</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2115469/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2115469/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2115469/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-07-20 23:59</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/702" target="_blank" title="迪德朗">迪德朗</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/4395" target="_blank" title="卡拉巴克">卡拉巴克</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2115470/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2115470/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2115470/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-07-21 01:15</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2165" target="_blank" title="北雪平">北雪平</a></td>
											<td>			
												
												
													3:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/507" target="_blank" title="罗森博格">罗森博格</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2115472/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2115472/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2115472/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-07-21 01:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/726" target="_blank" title="费伦茨">费伦茨</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/3576" target="_blank" title="地游击">地游击</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2115473/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2115473/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2115473/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-07-21 02:15</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1232" target="_blank" title="特伦钦">特伦钦</a></td>
											<td>			
												
												
													2:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1295" target="_blank" title="奥林比查">奥林比查</a></td>
											<td>			
												
												
													2:2
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2115494/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2115494/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2115494/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-07-21 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/653" target="_blank" title="萨迪纳摩">萨迪纳摩</a></td>
											<td>			
												
												
													3:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/940" target="_blank" title="瓦尔达">瓦尔达</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												球半/两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2115474/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2115474/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2115474/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-07-21 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/70" target="_blank" title="凯尔特人">凯尔特人</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/23131" target="_blank" title="FC林肯">FC林肯</a></td>
											<td>			
												
												
													3:0
												
														
											</td>
											<td align="center">
											
											
												三球/三球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2117347/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2117347/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2117347/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-07-21 03:15</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/711" target="_blank" title="哈夫纳夫">哈夫纳夫</a></td>
											<td>			
												
												
													2:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1345" target="_blank" title="邓多克">邓多克</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2115476/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2115476/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2115476/bfyc" class="oyx" target="_blank">析</a>
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
											<td>2016-07-27 02:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/678" target="_blank" title="布斯巴达">布斯巴达</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/626" target="_blank" title="布星">布星</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2126471/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2126471/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2126471/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-07-27 02:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/15175" target="_blank" title="卢多戈雷">卢多戈雷</a></td>
											<td>			
												
												
													2:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/612" target="_blank" title="红星">红星</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2127399/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2127399/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2127399/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-07-27 02:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2435" target="_blank" title="巴特">巴特</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1345" target="_blank" title="邓多克">邓多克</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2127401/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2127401/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2127401/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-07-27 02:15</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3576" target="_blank" title="地游击">地游击</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/9" target="_blank" title="萨尔茨堡">萨尔茨堡</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2127400/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2127400/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2127400/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-07-27 02:15</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2534" target="_blank" title="比尔森">比尔森</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/4395" target="_blank" title="卡拉巴克">卡拉巴克</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2127402/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2127402/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2127402/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-07-27 02:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/429" target="_blank" title="罗斯托夫">罗斯托夫</a></td>
											<td>			
												
												
													2:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/153" target="_blank" title="安德莱赫">安德莱赫</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2126468/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2126468/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2126468/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-07-27 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/253" target="_blank" title="阿贾克斯">阿贾克斯</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/724" target="_blank" title="塞萨洛尼">塞萨洛尼</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2126467/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2126467/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2126467/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-07-27 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/716" target="_blank" title="顿矿工">顿矿工</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/442" target="_blank" title="年轻人">年轻人</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2126470/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2126470/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2126470/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-07-27 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/653" target="_blank" title="萨迪纳摩">萨迪纳摩</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/610" target="_blank" title="第比利斯">第比利斯</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2127403/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2127403/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2127403/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-07-27 22:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/683" target="_blank" title="阿斯塔纳">阿斯塔纳</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/70" target="_blank" title="凯尔特人">凯尔特人</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2127404/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2127404/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2127404/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-07-28 01:15</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/507" target="_blank" title="罗森博格">罗森博格</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/703" target="_blank" title="希腊人">希腊人</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2127405/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2127405/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2127405/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-07-28 01:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/8557" target="_blank" title="久尔久">久尔久</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/227" target="_blank" title="哥本哈根">哥本哈根</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												受让半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2127284/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2127284/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2127284/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-07-28 02:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/537" target="_blank" title="费内巴切">费内巴切</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/197" target="_blank" title="摩纳哥">摩纳哥</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2126469/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2126469/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2126469/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-07-28 02:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1232" target="_blank" title="特伦钦">特伦钦</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/659" target="_blank" title="华沙军团">华沙军团</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2127406/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2127406/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2127406/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-07-28 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/568" target="_blank" title="奥林匹亚">奥林匹亚</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/955" target="_blank" title="贝夏普尔">贝夏普尔</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2127326/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2127326/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2127326/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-08-03 00:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/4395" target="_blank" title="卡拉巴克">卡拉巴克</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2534" target="_blank" title="比尔森">比尔森</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2127548/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2127548/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2127548/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-08-03 01:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/610" target="_blank" title="第比利斯">第比利斯</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/653" target="_blank" title="萨迪纳摩">萨迪纳摩</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2127595/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2127595/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2127595/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-08-03 01:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/703" target="_blank" title="希腊人">希腊人</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/507" target="_blank" title="罗森博格">罗森博格</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2127597/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2127597/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2127597/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-08-03 02:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/612" target="_blank" title="红星">红星</a></td>
											<td>			
												
												
													2:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/15175" target="_blank" title="卢多戈雷">卢多戈雷</a></td>
											<td>			
												
												
													1:2
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2127593/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2127593/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2127593/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-08-03 03:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1345" target="_blank" title="邓多克">邓多克</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2435" target="_blank" title="巴特">巴特</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												受让半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2127596/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2127596/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2127596/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-08-04 01:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/626" target="_blank" title="布星">布星</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/678" target="_blank" title="布斯巴达">布斯巴达</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2126473/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2126473/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2126473/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-08-04 01:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/227" target="_blank" title="哥本哈根">哥本哈根</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/8557" target="_blank" title="久尔久">久尔久</a></td>
											<td>			
												
												
													3:0
												
														
											</td>
											<td align="center">
											
											
												球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2127327/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2127327/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2127327/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-08-04 02:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/955" target="_blank" title="贝夏普尔">贝夏普尔</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/568" target="_blank" title="奥林匹亚">奥林匹亚</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2127328/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2127328/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2127328/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-08-04 02:15</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/442" target="_blank" title="年轻人">年轻人</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/716" target="_blank" title="顿矿工">顿矿工</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2126555/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2126555/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2126555/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-08-04 02:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/724" target="_blank" title="塞萨洛尼">塞萨洛尼</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/253" target="_blank" title="阿贾克斯">阿贾克斯</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2126556/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2126556/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2126556/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-08-04 02:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/9" target="_blank" title="萨尔茨堡">萨尔茨堡</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/3576" target="_blank" title="地游击">地游击</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												两球/两球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2127547/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2127547/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2127547/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-08-04 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/197" target="_blank" title="摩纳哥">摩纳哥</a></td>
											<td>			
												
												
													3:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/537" target="_blank" title="费内巴切">费内巴切</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2126472/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2126472/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2126472/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-08-04 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/153" target="_blank" title="安德莱赫">安德莱赫</a></td>
											<td>			
												
												
													0:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/429" target="_blank" title="罗斯托夫">罗斯托夫</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2126557/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2126557/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2126557/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-08-04 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/70" target="_blank" title="凯尔特人">凯尔特人</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/683" target="_blank" title="阿斯塔纳">阿斯塔纳</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2127592/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2127592/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2127592/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-08-04 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/659" target="_blank" title="华沙军团">华沙军团</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1232" target="_blank" title="特伦钦">特伦钦</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2127594/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2127594/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2127594/bfyc" class="oyx" target="_blank">析</a>
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
											<td>2016-08-17 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/253" target="_blank" title="阿贾克斯">阿贾克斯</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/429" target="_blank" title="罗斯托夫">罗斯托夫</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2141952/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2141952/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2141952/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-08-17 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/653" target="_blank" title="萨迪纳摩">萨迪纳摩</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/9" target="_blank" title="萨尔茨堡">萨尔茨堡</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2141974/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2141974/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2141974/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-08-17 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/227" target="_blank" title="哥本哈根">哥本哈根</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/703" target="_blank" title="希腊人">希腊人</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2141976/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2141976/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2141976/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-08-17 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/626" target="_blank" title="布星">布星</a></td>
											<td>			
												
												
													0:5
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/26" target="_blank" title="曼城">曼城</a></td>
											<td>			
												
												
													0:2
												
														
											</td>
											<td align="center">
											
											
												受让一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2141979/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2141979/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2141979/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-08-17 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/442" target="_blank" title="年轻人">年轻人</a></td>
											<td>			
												
												
													1:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/128" target="_blank" title="门兴">门兴</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2141981/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2141981/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2141981/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-08-18 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/70" target="_blank" title="凯尔特人">凯尔特人</a></td>
											<td>			
												
												
													5:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/955" target="_blank" title="贝夏普尔">贝夏普尔</a></td>
											<td>			
												
												
													3:0
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2141953/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2141953/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2141953/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-08-18 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1345" target="_blank" title="邓多克">邓多克</a></td>
											<td>			
												
												
													0:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/659" target="_blank" title="华沙军团">华沙军团</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2141975/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2141975/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2141975/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-08-18 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/468" target="_blank" title="波尔图">波尔图</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/174" target="_blank" title="罗马">罗马</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2141977/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2141977/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2141977/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-08-18 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/15175" target="_blank" title="卢多戈雷">卢多戈雷</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2534" target="_blank" title="比尔森">比尔森</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2141978/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2141978/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2141978/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-08-18 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/107" target="_blank" title="比利亚雷">比利亚雷</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/197" target="_blank" title="摩纳哥">摩纳哥</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2141980/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2141980/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2141980/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-08-24 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/955" target="_blank" title="贝夏普尔">贝夏普尔</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/70" target="_blank" title="凯尔特人">凯尔特人</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2142561/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2142561/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2142561/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-08-24 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/659" target="_blank" title="华沙军团">华沙军团</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1345" target="_blank" title="邓多克">邓多克</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2142562/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2142562/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2142562/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-08-24 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/174" target="_blank" title="罗马">罗马</a></td>
											<td>			
												
												
													0:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/468" target="_blank" title="波尔图">波尔图</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2142563/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2142563/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2142563/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-08-24 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2534" target="_blank" title="比尔森">比尔森</a></td>
											<td>			
												
												
													2:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/15175" target="_blank" title="卢多戈雷">卢多戈雷</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2142564/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2142564/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2142564/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-08-24 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/197" target="_blank" title="摩纳哥">摩纳哥</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/107" target="_blank" title="比利亚雷">比利亚雷</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2142565/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2142565/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2142565/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-08-25 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/9" target="_blank" title="萨尔茨堡">萨尔茨堡</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/653" target="_blank" title="萨迪纳摩">萨迪纳摩</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2142566/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2142566/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2142566/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-08-25 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/128" target="_blank" title="门兴">门兴</a></td>
											<td>			
												
												
													6:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/442" target="_blank" title="年轻人">年轻人</a></td>
											<td>			
												
												
													3:0
												
														
											</td>
											<td align="center">
											
											
												球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2142567/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2142567/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2142567/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-08-25 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/429" target="_blank" title="罗斯托夫">罗斯托夫</a></td>
											<td>			
												
												
													4:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/253" target="_blank" title="阿贾克斯">阿贾克斯</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2142568/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2142568/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2142568/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-08-25 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/703" target="_blank" title="希腊人">希腊人</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/227" target="_blank" title="哥本哈根">哥本哈根</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2142569/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2142569/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2142569/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-08-25 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/26" target="_blank" title="曼城">曼城</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/626" target="_blank" title="布星">布星</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												两球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2142570/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2142570/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2142570/bfyc" class="oyx" target="_blank">析</a>
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
											<td>2016-09-14 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/271" target="_blank" title="巴黎圣曼">巴黎圣曼</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/19" target="_blank" title="阿森纳">阿森纳</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2158827/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2158827/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2158827/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-09-14 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/451" target="_blank" title="巴塞尔">巴塞尔</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/15175" target="_blank" title="卢多戈雷">卢多戈雷</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2158828/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2158828/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2158828/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-09-29 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/15175" target="_blank" title="卢多戈雷">卢多戈雷</a></td>
											<td>			
												
												
													1:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/271" target="_blank" title="巴黎圣曼">巴黎圣曼</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												受让一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2158864/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2158864/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2158864/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-09-29 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/19" target="_blank" title="阿森纳">阿森纳</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/451" target="_blank" title="巴塞尔">巴塞尔</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												球半/两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2158865/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2158865/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2158865/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-10-20 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/271" target="_blank" title="巴黎圣曼">巴黎圣曼</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/451" target="_blank" title="巴塞尔">巴塞尔</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												球半/两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2158872/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2158872/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2158872/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-10-20 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/19" target="_blank" title="阿森纳">阿森纳</a></td>
											<td>			
												
												
													6:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/15175" target="_blank" title="卢多戈雷">卢多戈雷</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												两球/两球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2158873/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2158873/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2158873/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-11-02 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/451" target="_blank" title="巴塞尔">巴塞尔</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/271" target="_blank" title="巴黎圣曼">巴黎圣曼</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2158951/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2158951/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2158951/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-11-02 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/15175" target="_blank" title="卢多戈雷">卢多戈雷</a></td>
											<td>			
												
												
													2:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/19" target="_blank" title="阿森纳">阿森纳</a></td>
											<td>			
												
												
													2:2
												
														
											</td>
											<td align="center">
											
											
												受让一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2158952/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2158952/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2158952/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-11-24 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/19" target="_blank" title="阿森纳">阿森纳</a></td>
											<td>			
												
												
													2:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/271" target="_blank" title="巴黎圣曼">巴黎圣曼</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2159032/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2159032/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2159032/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-11-24 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/15175" target="_blank" title="卢多戈雷">卢多戈雷</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/451" target="_blank" title="巴塞尔">巴塞尔</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2159033/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2159033/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2159033/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-12-07 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/451" target="_blank" title="巴塞尔">巴塞尔</a></td>
											<td>			
												
												
													1:4
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/19" target="_blank" title="阿森纳">阿森纳</a></td>
											<td>			
												
												
													0:2
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2159074/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2159074/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2159074/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-12-07 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/271" target="_blank" title="巴黎圣曼">巴黎圣曼</a></td>
											<td>			
												
												
													2:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/15175" target="_blank" title="卢多戈雷">卢多戈雷</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2159075/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2159075/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2159075/bfyc" class="oyx" target="_blank">析</a>
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
											<td>2016-09-14 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/712" target="_blank" title="基辅迪纳">基辅迪纳</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1419" target="_blank" title="那不勒斯">那不勒斯</a></td>
											<td>			
												
												
													1:2
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2158829/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2158829/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2158829/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-09-14 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/463" target="_blank" title="本菲卡">本菲卡</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/529" target="_blank" title="贝西克塔">贝西克塔</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2158830/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2158830/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2158830/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-09-29 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1419" target="_blank" title="那不勒斯">那不勒斯</a></td>
											<td>			
												
												
													4:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/463" target="_blank" title="本菲卡">本菲卡</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2158866/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2158866/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2158866/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-09-29 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/529" target="_blank" title="贝西克塔">贝西克塔</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/712" target="_blank" title="基辅迪纳">基辅迪纳</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2158867/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2158867/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2158867/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-10-20 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/712" target="_blank" title="基辅迪纳">基辅迪纳</a></td>
											<td>			
												
												
													0:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/463" target="_blank" title="本菲卡">本菲卡</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2158932/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2158932/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2158932/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-10-20 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1419" target="_blank" title="那不勒斯">那不勒斯</a></td>
											<td>			
												
												
													2:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/529" target="_blank" title="贝西克塔">贝西克塔</a></td>
											<td>			
												
												
													1:2
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2158933/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2158933/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2158933/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-11-02 01:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/529" target="_blank" title="贝西克塔">贝西克塔</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1419" target="_blank" title="那不勒斯">那不勒斯</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2158953/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2158953/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2158953/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-11-02 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/463" target="_blank" title="本菲卡">本菲卡</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/712" target="_blank" title="基辅迪纳">基辅迪纳</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2158994/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2158994/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2158994/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-11-24 01:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/529" target="_blank" title="贝西克塔">贝西克塔</a></td>
											<td>			
												
												
													3:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/463" target="_blank" title="本菲卡">本菲卡</a></td>
											<td>			
												
												
													0:3
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2159034/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2159034/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2159034/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-11-24 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1419" target="_blank" title="那不勒斯">那不勒斯</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/712" target="_blank" title="基辅迪纳">基辅迪纳</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2159035/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2159035/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2159035/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-12-07 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/463" target="_blank" title="本菲卡">本菲卡</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1419" target="_blank" title="那不勒斯">那不勒斯</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2159076/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2159076/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2159076/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-12-07 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/712" target="_blank" title="基辅迪纳">基辅迪纳</a></td>
											<td>			
												
												
													6:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/529" target="_blank" title="贝西克塔">贝西克塔</a></td>
											<td>			
												
												
													4:0
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2159077/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2159077/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2159077/bfyc" class="oyx" target="_blank">析</a>
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
											<td>2016-09-14 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/84" target="_blank" title="巴萨">巴萨</a></td>
											<td>			
												
												
													7:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/70" target="_blank" title="凯尔特人">凯尔特人</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												两球半/三球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2158832/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2158832/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2158832/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-09-15 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/26" target="_blank" title="曼城">曼城</a></td>
											<td>			
												
												
													4:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/128" target="_blank" title="门兴">门兴</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2158831/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2158831/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2158831/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-09-29 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/128" target="_blank" title="门兴">门兴</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/84" target="_blank" title="巴萨">巴萨</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												受让一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2158868/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2158868/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2158868/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-09-29 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/70" target="_blank" title="凯尔特人">凯尔特人</a></td>
											<td>			
												
												
													3:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/26" target="_blank" title="曼城">曼城</a></td>
											<td>			
												
												
													2:2
												
														
											</td>
											<td align="center">
											
											
												受让球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2158869/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2158869/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2158869/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-10-20 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/84" target="_blank" title="巴萨">巴萨</a></td>
											<td>			
												
												
													4:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/26" target="_blank" title="曼城">曼城</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2158934/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2158934/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2158934/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-10-20 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/70" target="_blank" title="凯尔特人">凯尔特人</a></td>
											<td>			
												
												
													0:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/128" target="_blank" title="门兴">门兴</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2158954/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2158954/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2158954/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-11-02 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/26" target="_blank" title="曼城">曼城</a></td>
											<td>			
												
												
													3:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/84" target="_blank" title="巴萨">巴萨</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2158995/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2158995/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2158995/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-11-02 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/128" target="_blank" title="门兴">门兴</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/70" target="_blank" title="凯尔特人">凯尔特人</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2158996/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2158996/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2158996/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-11-24 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/70" target="_blank" title="凯尔特人">凯尔特人</a></td>
											<td>			
												
												
													0:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/84" target="_blank" title="巴萨">巴萨</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2159036/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2159036/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2159036/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-11-24 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/128" target="_blank" title="门兴">门兴</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/26" target="_blank" title="曼城">曼城</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												受让半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2159037/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2159037/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2159037/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-12-07 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/84" target="_blank" title="巴萨">巴萨</a></td>
											<td>			
												
												
													4:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/128" target="_blank" title="门兴">门兴</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2159062/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2159062/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2159062/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-12-07 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/26" target="_blank" title="曼城">曼城</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/70" target="_blank" title="凯尔特人">凯尔特人</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2159063/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2159063/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2159063/bfyc" class="oyx" target="_blank">析</a>
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
											<td>2016-09-14 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/254" target="_blank" title="埃因霍温">埃因霍温</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/109" target="_blank" title="马竞">马竞</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2158833/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2158833/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2158833/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-09-14 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/88" target="_blank" title="拜仁">拜仁</a></td>
											<td>			
												
												
													5:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/429" target="_blank" title="罗斯托夫">罗斯托夫</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												三球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2158834/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2158834/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2158834/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-09-29 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/109" target="_blank" title="马竞">马竞</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/88" target="_blank" title="拜仁">拜仁</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2158885/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2158885/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2158885/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-09-29 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/429" target="_blank" title="罗斯托夫">罗斯托夫</a></td>
											<td>			
												
												
													2:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/254" target="_blank" title="埃因霍温">埃因霍温</a></td>
											<td>			
												
												
													2:2
												
														
											</td>
											<td align="center">
											
											
												受让半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2158886/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2158886/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2158886/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-10-20 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/429" target="_blank" title="罗斯托夫">罗斯托夫</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/109" target="_blank" title="马竞">马竞</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2158955/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2158955/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2158955/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-10-20 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/88" target="_blank" title="拜仁">拜仁</a></td>
											<td>			
												
												
													4:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/254" target="_blank" title="埃因霍温">埃因霍温</a></td>
											<td>			
												
												
													2:1
												
														
											</td>
											<td align="center">
											
											
												两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2158956/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2158956/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2158956/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-11-02 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/254" target="_blank" title="埃因霍温">埃因霍温</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/88" target="_blank" title="拜仁">拜仁</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												受让球半/两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2158976/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2158976/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2158976/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-11-02 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/109" target="_blank" title="马竞">马竞</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/429" target="_blank" title="罗斯托夫">罗斯托夫</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												两球/两球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2158977/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2158977/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2158977/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-11-24 01:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/429" target="_blank" title="罗斯托夫">罗斯托夫</a></td>
											<td>			
												
												
													3:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/88" target="_blank" title="拜仁">拜仁</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												受让球半/两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2159038/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2159038/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2159038/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-11-24 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/109" target="_blank" title="马竞">马竞</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/254" target="_blank" title="埃因霍温">埃因霍温</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2159039/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2159039/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2159039/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-12-07 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/88" target="_blank" title="拜仁">拜仁</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/109" target="_blank" title="马竞">马竞</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2159064/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2159064/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2159064/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-12-07 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/254" target="_blank" title="埃因霍温">埃因霍温</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/429" target="_blank" title="罗斯托夫">罗斯托夫</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2159065/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2159065/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2159065/bfyc" class="oyx" target="_blank">析</a>
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
											<td>2016-09-15 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/165" target="_blank" title="勒沃库森">勒沃库森</a></td>
											<td>			
												
												
													2:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/407" target="_blank" title="莫陆军">莫陆军</a></td>
											<td>			
												
												
													2:2
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2158732/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2158732/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2158732/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-09-15 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/33" target="_blank" title="热刺">热刺</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/197" target="_blank" title="摩纳哥">摩纳哥</a></td>
											<td>			
												
												
													1:2
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2158733/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2158733/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2158733/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-09-28 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/197" target="_blank" title="摩纳哥">摩纳哥</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/165" target="_blank" title="勒沃库森">勒沃库森</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2158877/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2158877/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2158877/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-09-28 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/407" target="_blank" title="莫陆军">莫陆军</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/33" target="_blank" title="热刺">热刺</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2158878/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2158878/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2158878/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-10-19 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/165" target="_blank" title="勒沃库森">勒沃库森</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/33" target="_blank" title="热刺">热刺</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2158924/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2158924/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2158924/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-10-19 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/407" target="_blank" title="莫陆军">莫陆军</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/197" target="_blank" title="摩纳哥">摩纳哥</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2158925/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2158925/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2158925/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-11-03 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/197" target="_blank" title="摩纳哥">摩纳哥</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/407" target="_blank" title="莫陆军">莫陆军</a></td>
											<td>			
												
												
													3:0
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2158978/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2158978/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2158978/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-11-03 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/33" target="_blank" title="热刺">热刺</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/165" target="_blank" title="勒沃库森">勒沃库森</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2158979/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2158979/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2158979/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-11-23 01:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/407" target="_blank" title="莫陆军">莫陆军</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/165" target="_blank" title="勒沃库森">勒沃库森</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2159024/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2159024/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2159024/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-11-23 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/197" target="_blank" title="摩纳哥">摩纳哥</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/33" target="_blank" title="热刺">热刺</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2159025/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2159025/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2159025/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-12-08 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/33" target="_blank" title="热刺">热刺</a></td>
											<td>			
												
												
													3:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/407" target="_blank" title="莫陆军">莫陆军</a></td>
											<td>			
												
												
													2:1
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2159078/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2159078/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2159078/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-12-08 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/165" target="_blank" title="勒沃库森">勒沃库森</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/197" target="_blank" title="摩纳哥">摩纳哥</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2159079/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2159079/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2159079/bfyc" class="oyx" target="_blank">析</a>
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
											<td>2016-09-15 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/659" target="_blank" title="华沙军团">华沙军团</a></td>
											<td>			
												
												
													0:6
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/99" target="_blank" title="多特蒙德">多特蒙德</a></td>
											<td>			
												
												
													0:3
												
														
											</td>
											<td align="center">
											
											
												受让球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2158835/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2158835/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2158835/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-09-15 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/82" target="_blank" title="皇马">皇马</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/466" target="_blank" title="里斯本">里斯本</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2158836/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2158836/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2158836/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-09-28 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/99" target="_blank" title="多特蒙德">多特蒙德</a></td>
											<td>			
												
												
													2:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/82" target="_blank" title="皇马">皇马</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2158879/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2158879/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2158879/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-09-28 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/466" target="_blank" title="里斯本">里斯本</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/659" target="_blank" title="华沙军团">华沙军团</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												球半/两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2158880/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2158880/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2158880/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-10-19 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/466" target="_blank" title="里斯本">里斯本</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/99" target="_blank" title="多特蒙德">多特蒙德</a></td>
											<td>			
												
												
													0:2
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2158926/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2158926/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2158926/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-10-19 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/82" target="_blank" title="皇马">皇马</a></td>
											<td>			
												
												
													5:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/659" target="_blank" title="华沙军团">华沙军团</a></td>
											<td>			
												
												
													3:1
												
														
											</td>
											<td align="center">
											
											
												四球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2158927/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2158927/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2158927/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-11-03 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/659" target="_blank" title="华沙军团">华沙军团</a></td>
											<td>			
												
												
													3:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/82" target="_blank" title="皇马">皇马</a></td>
											<td>			
												
												
													1:2
												
														
											</td>
											<td align="center">
											
											
												受让两球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2158980/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2158980/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2158980/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-11-03 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/99" target="_blank" title="多特蒙德">多特蒙德</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/466" target="_blank" title="里斯本">里斯本</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2158981/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2158981/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2158981/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-11-23 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/466" target="_blank" title="里斯本">里斯本</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/82" target="_blank" title="皇马">皇马</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2159026/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2159026/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2159026/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-11-23 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/99" target="_blank" title="多特蒙德">多特蒙德</a></td>
											<td>			
												
												
													8:4
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/659" target="_blank" title="华沙军团">华沙军团</a></td>
											<td>			
												
												
													5:2
												
														
											</td>
											<td align="center">
											
											
												两球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2159027/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2159027/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2159027/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-12-08 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/659" target="_blank" title="华沙军团">华沙军团</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/466" target="_blank" title="里斯本">里斯本</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												受让半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2159066/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2159066/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2159066/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-12-08 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/82" target="_blank" title="皇马">皇马</a></td>
											<td>			
												
												
													2:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/99" target="_blank" title="多特蒙德">多特蒙德</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2159080/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2159080/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2159080/bfyc" class="oyx" target="_blank">析</a>
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
											<td>2016-09-15 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/148" target="_blank" title="布鲁日">布鲁日</a></td>
											<td>			
												
												
													0:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/59" target="_blank" title="莱切斯特">莱切斯特</a></td>
											<td>			
												
												
													0:2
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2158837/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2158837/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2158837/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-09-15 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/468" target="_blank" title="波尔图">波尔图</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/227" target="_blank" title="哥本哈根">哥本哈根</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2158838/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2158838/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2158838/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-09-28 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/59" target="_blank" title="莱切斯特">莱切斯特</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/468" target="_blank" title="波尔图">波尔图</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2158881/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2158881/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2158881/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-09-28 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/227" target="_blank" title="哥本哈根">哥本哈根</a></td>
											<td>			
												
												
													4:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/148" target="_blank" title="布鲁日">布鲁日</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2158882/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2158882/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2158882/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-10-19 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/148" target="_blank" title="布鲁日">布鲁日</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/468" target="_blank" title="波尔图">波尔图</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												受让半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2158928/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2158928/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2158928/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-10-19 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/59" target="_blank" title="莱切斯特">莱切斯特</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/227" target="_blank" title="哥本哈根">哥本哈根</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2158929/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2158929/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2158929/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-11-03 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/227" target="_blank" title="哥本哈根">哥本哈根</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/59" target="_blank" title="莱切斯特">莱切斯特</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2158982/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2158982/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2158982/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-11-03 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/468" target="_blank" title="波尔图">波尔图</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/148" target="_blank" title="布鲁日">布鲁日</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2158983/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2158983/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2158983/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-11-23 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/227" target="_blank" title="哥本哈根">哥本哈根</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/468" target="_blank" title="波尔图">波尔图</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2159028/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2159028/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2159028/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-11-23 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/59" target="_blank" title="莱切斯特">莱切斯特</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/148" target="_blank" title="布鲁日">布鲁日</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2159029/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2159029/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2159029/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-12-08 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/468" target="_blank" title="波尔图">波尔图</a></td>
											<td>			
												
												
													5:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/59" target="_blank" title="莱切斯特">莱切斯特</a></td>
											<td>			
												
												
													3:0
												
														
											</td>
											<td align="center">
											
											
												球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2159067/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2159067/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2159067/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-12-08 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/148" target="_blank" title="布鲁日">布鲁日</a></td>
											<td>			
												
												
													0:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/227" target="_blank" title="哥本哈根">哥本哈根</a></td>
											<td>			
												
												
													0:2
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2159068/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2159068/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2159068/bfyc" class="oyx" target="_blank">析</a>
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
											<td>2016-09-15 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/166" target="_blank" title="尤文图斯">尤文图斯</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/86" target="_blank" title="塞维利亚">塞维利亚</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2158839/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2158839/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2158839/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-09-15 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/205" target="_blank" title="里昂">里昂</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/653" target="_blank" title="萨迪纳摩">萨迪纳摩</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2158840/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2158840/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2158840/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-09-28 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/653" target="_blank" title="萨迪纳摩">萨迪纳摩</a></td>
											<td>			
												
												
													0:4
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/166" target="_blank" title="尤文图斯">尤文图斯</a></td>
											<td>			
												
												
													0:2
												
														
											</td>
											<td align="center">
											
											
												受让球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2158883/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2158883/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2158883/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-09-28 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/86" target="_blank" title="塞维利亚">塞维利亚</a></td>
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
												<a href="http://fenxi.zgzcw.com/2158884/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2158884/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2158884/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-10-19 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/205" target="_blank" title="里昂">里昂</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/166" target="_blank" title="尤文图斯">尤文图斯</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2158930/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2158930/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2158930/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-10-19 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/653" target="_blank" title="萨迪纳摩">萨迪纳摩</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/86" target="_blank" title="塞维利亚">塞维利亚</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2158931/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2158931/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2158931/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-11-03 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/166" target="_blank" title="尤文图斯">尤文图斯</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/205" target="_blank" title="里昂">里昂</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2158984/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2158984/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2158984/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-11-03 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/86" target="_blank" title="塞维利亚">塞维利亚</a></td>
											<td>			
												
												
													4:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/653" target="_blank" title="萨迪纳摩">萨迪纳摩</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												球半/两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2158985/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2158985/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2158985/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-11-23 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/86" target="_blank" title="塞维利亚">塞维利亚</a></td>
											<td>			
												
												
													1:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/166" target="_blank" title="尤文图斯">尤文图斯</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2159030/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2159030/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2159030/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-11-23 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/653" target="_blank" title="萨迪纳摩">萨迪纳摩</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/205" target="_blank" title="里昂">里昂</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2159031/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2159031/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2159031/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-12-08 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/205" target="_blank" title="里昂">里昂</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/86" target="_blank" title="塞维利亚">塞维利亚</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2159081/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2159081/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2159081/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2016-12-08 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/166" target="_blank" title="尤文图斯">尤文图斯</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/653" target="_blank" title="萨迪纳摩">萨迪纳摩</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												两球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2159082/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2159082/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2159082/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
							</tbody></table>
						</div>						
										
				
				</ul>
			
				<ul class="tabs9_main1" id="tabs9_main_6" style="">

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
											<td>2017-02-15 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/463" target="_blank" title="本菲卡">本菲卡</a></td>
											<td>			
												
												
													-:-
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/99" target="_blank" title="多特蒙德">多特蒙德</a></td>
											<td>			
												
												
													-:-
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2188899/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2188899/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2188899/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2017-02-15 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/271" target="_blank" title="巴黎圣曼">巴黎圣曼</a></td>
											<td>			
												
												
													-:-
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/84" target="_blank" title="巴萨">巴萨</a></td>
											<td>			
												
												
													-:-
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2188900/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2188900/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2188900/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2017-02-16 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/88" target="_blank" title="拜仁">拜仁</a></td>
											<td>			
												
												
													-:-
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/19" target="_blank" title="阿森纳">阿森纳</a></td>
											<td>			
												
												
													-:-
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2188901/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2188901/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2188901/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2017-02-16 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/82" target="_blank" title="皇马">皇马</a></td>
											<td>			
												
												
													-:-
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1419" target="_blank" title="那不勒斯">那不勒斯</a></td>
											<td>			
												
												
													-:-
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2188902/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2188902/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2188902/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2017-02-22 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/165" target="_blank" title="勒沃库森">勒沃库森</a></td>
											<td>			
												
												
													-:-
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/109" target="_blank" title="马竞">马竞</a></td>
											<td>			
												
												
													-:-
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2188903/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2188903/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2188903/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2017-02-22 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/26" target="_blank" title="曼城">曼城</a></td>
											<td>			
												
												
													-:-
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/197" target="_blank" title="摩纳哥">摩纳哥</a></td>
											<td>			
												
												
													-:-
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2188904/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2188904/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2188904/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2017-02-23 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/86" target="_blank" title="塞维利亚">塞维利亚</a></td>
											<td>			
												
												
													-:-
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/59" target="_blank" title="莱切斯特">莱切斯特</a></td>
											<td>			
												
												
													-:-
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2188867/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2188867/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2188867/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2017-02-23 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/468" target="_blank" title="波尔图">波尔图</a></td>
											<td>			
												
												
													-:-
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/166" target="_blank" title="尤文图斯">尤文图斯</a></td>
											<td>			
												
												
													-:-
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2188868/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2188868/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2188868/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2017-03-08 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/19" target="_blank" title="阿森纳">阿森纳</a></td>
											<td>			
												
												
													-:-
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/88" target="_blank" title="拜仁">拜仁</a></td>
											<td>			
												
												
													-:-
												
														
											</td>
											<td align="center">
											
											
												
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2188920/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2188920/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2188920/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2017-03-08 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1419" target="_blank" title="那不勒斯">那不勒斯</a></td>
											<td>			
												
												
													-:-
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/82" target="_blank" title="皇马">皇马</a></td>
											<td>			
												
												
													-:-
												
														
											</td>
											<td align="center">
											
											
												
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2188922/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2188922/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2188922/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2017-03-09 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/84" target="_blank" title="巴萨">巴萨</a></td>
											<td>			
												
												
													-:-
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/271" target="_blank" title="巴黎圣曼">巴黎圣曼</a></td>
											<td>			
												
												
													-:-
												
														
											</td>
											<td align="center">
											
											
												
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2188898/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2188898/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2188898/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2017-03-09 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/99" target="_blank" title="多特蒙德">多特蒙德</a></td>
											<td>			
												
												
													-:-
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/463" target="_blank" title="本菲卡">本菲卡</a></td>
											<td>			
												
												
													-:-
												
														
											</td>
											<td align="center">
											
											
												
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2188921/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2188921/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2188921/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2017-03-15 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/59" target="_blank" title="莱切斯特">莱切斯特</a></td>
											<td>			
												
												
													-:-
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/86" target="_blank" title="塞维利亚">塞维利亚</a></td>
											<td>			
												
												
													-:-
												
														
											</td>
											<td align="center">
											
											
												
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2188923/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2188923/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2188923/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2017-03-15 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/166" target="_blank" title="尤文图斯">尤文图斯</a></td>
											<td>			
												
												
													-:-
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/468" target="_blank" title="波尔图">波尔图</a></td>
											<td>			
												
												
													-:-
												
														
											</td>
											<td align="center">
											
											
												
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2188924/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2188924/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2188924/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2017-03-16 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/109" target="_blank" title="马竞">马竞</a></td>
											<td>			
												
												
													-:-
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/165" target="_blank" title="勒沃库森">勒沃库森</a></td>
											<td>			
												
												
													-:-
												
														
											</td>
											<td align="center">
											
											
												
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2188919/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2188919/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2188919/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2017-03-16 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/197" target="_blank" title="摩纳哥">摩纳哥</a></td>
											<td>			
												
												
													-:-
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/26" target="_blank" title="曼城">曼城</a></td>
											<td>			
												
												
													-:-
												
														
											</td>
											<td align="center">
											
											
												
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/2188925/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/2188925/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/2188925/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
							</tbody></table>
						</div>						
										
				
				</ul>
			
			
		</div>

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		




</body>