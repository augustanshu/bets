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
    <b id="xt_h">21</b><b id="xt_m">56</b><b id="xt_s">22</b> </p>
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
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/4398" target="_blank" class="a1" title="阿克图比">
					<li>阿克图比</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/3856" target="_blank" class="a1" title="艾巴辛尼">
					<li>艾巴辛尼</li>
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
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/2531" target="_blank" class="a1" title="托尔B36">
					<li>托尔B36</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/2530" target="_blank" class="a1" title="伯拉治">
					<li>伯拉治</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/2526" target="_blank" class="a1" title="FK巴库">
					<li>FK巴库</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/2521" target="_blank" class="a1" title="TVMK泰连尼">
					<li>TVMK泰连尼</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/2515" target="_blank" class="a1" title="比基卡">
					<li>比基卡</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/2444" target="_blank" class="a1" title="索利戈尔">
					<li>索利戈尔</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/1646" target="_blank" class="a1" title="林菲尔德">
					<li>林菲尔德</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/1602" target="_blank" class="a1" title="利阿波罗">
					<li>利阿波罗</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/1261" target="_blank" class="a1" title="新圣徒">
					<li>新圣徒</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/1233" target="_blank" class="a1" title="鲁森比洛克">
					<li>鲁森比洛克</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/711" target="_blank" class="a1" title="哈夫纳夫">
					<li>哈夫纳夫</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/702" target="_blank" class="a1" title="迪德朗">
					<li>迪德朗</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/695" target="_blank" class="a1" title="德布勒森">
					<li>德布勒森</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/693" target="_blank" class="a1" title="伊兰纳斯">
					<li>伊兰纳斯</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/691" target="_blank" class="a1" title="施安尼">
					<li>施安尼</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/672" target="_blank" class="a1" title="波利斯拉">
					<li>波利斯拉</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/671" target="_blank" class="a1" title="利贝雷茨">
					<li>利贝雷茨</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/659" target="_blank" class="a1" title="华沙军团">
					<li>华沙军团</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/653" target="_blank" class="a1" title="萨迪纳摩">
					<li>萨迪纳摩</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/615" target="_blank" class="a1" title="哥里卡">
					<li>哥里卡</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/614" target="_blank" class="a1" title="梅塔鲁格">
					<li>梅塔鲁格</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/612" target="_blank" class="a1" title="红星">
					<li>红星</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/607" target="_blank" class="a1" title="海法马卡">
					<li>海法马卡</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/537" target="_blank" class="a1" title="费内巴切">
					<li>费内巴切</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/485" target="_blank" class="a1" title="瓦勒伦加">
					<li>瓦勒伦加</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/449" target="_blank" class="a1" title="苏黎世">
					<li>苏黎世</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/421" target="_blank" class="a1" title="佐加顿斯">
					<li>佐加顿斯</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/391" target="_blank" class="a1" title="迈帕">
					<li>迈帕</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/324" target="_blank" class="a1" title="科克城">
					<li>科克城</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/253" target="_blank" class="a1" title="阿贾克斯">
					<li>阿贾克斯</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/195" target="_blank" class="a1" title="切沃">
					<li>切沃</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/130" target="_blank" class="a1" title="标准列日">
					<li>标准列日</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/94" target="_blank" class="a1" title="奥萨苏纳">
					<li>奥萨苏纳</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/76" target="_blank" class="a1" title="哈茨">
					<li>哈茨</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/9" target="_blank" class="a1" title="萨尔茨堡">
					<li>萨尔茨堡</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/8" target="_blank" class="a1" title="奥维也纳">
					<li>奥维也纳</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/82" target="_blank" class="a1" title="皇马">
					<li>皇马</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/205" target="_blank" class="a1" title="里昂">
					<li>里昂</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/91" target="_blank" class="a1" title="巴伦西亚">
					<li>巴伦西亚</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/84" target="_blank" class="a1" title="巴萨">
					<li>巴萨</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/25" target="_blank" class="a1" title="利物浦">
					<li>利物浦</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/24" target="_blank" class="a1" title="切尔西">
					<li>切尔西</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/88" target="_blank" class="a1" title="拜仁">
					<li>拜仁</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/27" target="_blank" class="a1" title="曼联">
					<li>曼联</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/468" target="_blank" class="a1" title="波尔图">
					<li>波尔图</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/150" target="_blank" class="a1" title="AC米兰">
					<li>AC米兰</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/174" target="_blank" class="a1" title="罗马">
					<li>罗马</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/266" target="_blank" class="a1" title="里尔">
					<li>里尔</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/70" target="_blank" class="a1" title="凯尔特人">
					<li>凯尔特人</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/19" target="_blank" class="a1" title="阿森纳">
					<li>阿森纳</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/132" target="_blank" class="a1" title="不来梅">
					<li>不来梅</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/463" target="_blank" class="a1" title="本菲卡">
					<li>本菲卡</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/411" target="_blank" class="a1" title="莫斯巴达">
					<li>莫斯巴达</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/626" target="_blank" class="a1" title="布星">
					<li>布星</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/153" target="_blank" class="a1" title="安德莱赫">
					<li>安德莱赫</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/516" target="_blank" class="a1" title="加拉塔萨">
					<li>加拉塔萨</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/160" target="_blank" class="a1" title="汉堡">
					<li>汉堡</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/254" target="_blank" class="a1" title="埃因霍温">
					<li>埃因霍温</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/616" target="_blank" class="a1" title="AEK雅典">
					<li>AEK雅典</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/208" target="_blank" class="a1" title="波尔多">
					<li>波尔多</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/716" target="_blank" class="a1" title="顿矿工">
					<li>顿矿工</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/568" target="_blank" class="a1" title="奥林匹亚">
					<li>奥林匹亚</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/152" target="_blank" class="a1" title="国际米兰">
					<li>国际米兰</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/227" target="_blank" class="a1" title="哥本哈根">
					<li>哥本哈根</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/712" target="_blank" class="a1" title="基辅迪纳">
					<li>基辅迪纳</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/407" target="_blank" class="a1" title="莫陆军">
					<li>莫陆军</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/466" target="_blank" class="a1" title="里斯本">
					<li>里斯本</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/617" target="_blank" class="a1" title="索斯基">
					<li>索斯基</li>
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
											<td>2006-07-11 22:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2555" target="_blank" title="皮尤尼克">皮尤尼克</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2559" target="_blank" title="谢里夫">谢里夫</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1684834/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1684834/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1684834/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-07-11 23:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2521" target="_blank" title="TVMK泰连尼">TVMK泰连尼</a></td>
											<td>			
												
												
													2:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/711" target="_blank" title="哈夫纳夫">哈夫纳夫</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1684837/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1684837/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1684837/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-07-11 23:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/691" target="_blank" title="施安尼">施安尼</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2526" target="_blank" title="FK巴库">FK巴库</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1684838/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1684838/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1684838/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-07-11 23:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3856" target="_blank" title="艾巴辛尼">艾巴辛尼</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/693" target="_blank" title="伊兰纳斯">伊兰纳斯</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1684842/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1684842/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1684842/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-07-12 00:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2515" target="_blank" title="比基卡">比基卡</a></td>
											<td>			
												
												
													0:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2612" target="_blank" title="托尔斯">托尔斯</a></td>
											<td>			
												
												
													0:2
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1684846/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1684846/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1684846/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-07-12 01:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1646" target="_blank" title="林菲尔德">林菲尔德</a></td>
											<td>			
												
												
													1:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/615" target="_blank" title="哥里卡">哥里卡</a></td>
											<td>			
												
												
													0:2
												
														
											</td>
											<td align="center">
											
											
												受让半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1684848/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1684848/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1684848/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-07-12 01:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/702" target="_blank" title="迪德朗">迪德朗</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2557" target="_blank" title="列伯尼基">列伯尼基</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1684849/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1684849/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1684849/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-07-12 23:59</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/391" target="_blank" title="迈帕">迈帕</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1261" target="_blank" title="新圣徒">新圣徒</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1684782/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1684782/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1684782/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-07-13 01:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2444" target="_blank" title="索利戈尔">索利戈尔</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2530" target="_blank" title="伯拉治">伯拉治</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1684790/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1684790/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1684790/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-07-13 01:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/614" target="_blank" title="梅塔鲁格">梅塔鲁格</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/4398" target="_blank" title="阿克图比">阿克图比</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1684791/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1684791/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1684791/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-07-13 02:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/324" target="_blank" title="科克城">科克城</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1602" target="_blank" title="利阿波罗">利阿波罗</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1684811/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1684811/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1684811/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-07-18 22:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2526" target="_blank" title="FK巴库">FK巴库</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/691" target="_blank" title="施安尼">施安尼</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1684336/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1684336/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1684336/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-07-18 23:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/693" target="_blank" title="伊兰纳斯">伊兰纳斯</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/3856" target="_blank" title="艾巴辛尼">艾巴辛尼</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1684337/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1684337/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1684337/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-07-19 01:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2559" target="_blank" title="谢里夫">谢里夫</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2555" target="_blank" title="皮尤尼克">皮尤尼克</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1684351/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1684351/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1684351/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-07-19 02:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2557" target="_blank" title="列伯尼基">列伯尼基</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/702" target="_blank" title="迪德朗">迪德朗</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1684367/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1684367/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1684367/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-07-19 23:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/4398" target="_blank" title="阿克图比">阿克图比</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/614" target="_blank" title="梅塔鲁格">梅塔鲁格</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1684261/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1684261/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1684261/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-07-20 02:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1602" target="_blank" title="利阿波罗">利阿波罗</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/324" target="_blank" title="科克城">科克城</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1684307/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1684307/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1684307/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-07-20 02:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2531" target="_blank" title="托尔B36">托尔B36</a></td>
											<td>			
												
												
													2:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2515" target="_blank" title="比基卡">比基卡</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1684308/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1684308/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1684308/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-07-20 02:05</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/615" target="_blank" title="哥里卡">哥里卡</a></td>
											<td>			
												
												
													2:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1646" target="_blank" title="林菲尔德">林菲尔德</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1684312/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1684312/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1684312/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-07-20 02:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2530" target="_blank" title="伯拉治">伯拉治</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2444" target="_blank" title="索利戈尔">索利戈尔</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1684315/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1684315/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1684315/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-07-20 02:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1261" target="_blank" title="新圣徒">新圣徒</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/391" target="_blank" title="迈帕">迈帕</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1684316/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1684316/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1684316/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-07-20 03:15</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/711" target="_blank" title="哈夫纳夫">哈夫纳夫</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2521" target="_blank" title="TVMK泰连尼">TVMK泰连尼</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1684328/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1684328/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1684328/bfyc" class="oyx" target="_blank">析</a>
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
											<td>2006-07-25 23:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/693" target="_blank" title="伊兰纳斯">伊兰纳斯</a></td>
											<td>			
												
												
													1:4
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/653" target="_blank" title="萨迪纳摩">萨迪纳摩</a></td>
											<td>			
												
												
													1:2
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1683806/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1683806/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1683806/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-07-27 01:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2559" target="_blank" title="谢里夫">谢里夫</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/411" target="_blank" title="莫斯巴达">莫斯巴达</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1683752/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1683752/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1683752/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-07-27 01:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/614" target="_blank" title="梅塔鲁格">梅塔鲁格</a></td>
											<td>			
												
												
													1:4
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/712" target="_blank" title="基辅迪纳">基辅迪纳</a></td>
											<td>			
												
												
													0:3
												
														
											</td>
											<td align="center">
											
											
												受让球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1683753/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1683753/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1683753/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-07-27 01:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/617" target="_blank" title="索斯基">索斯基</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/691" target="_blank" title="施安尼">施安尼</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1683762/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1683762/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1683762/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-07-27 02:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/421" target="_blank" title="佐加顿斯">佐加顿斯</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1233" target="_blank" title="鲁森比洛克">鲁森比洛克</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1683767/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1683767/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1683767/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-07-27 02:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/537" target="_blank" title="费内巴切">费内巴切</a></td>
											<td>			
												
												
													4:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2531" target="_blank" title="托尔B36">托尔B36</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1683768/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1683768/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1683768/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-07-27 02:15</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/449" target="_blank" title="苏黎世">苏黎世</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/9" target="_blank" title="萨尔茨堡">萨尔茨堡</a></td>
											<td>			
												
												
													2:1
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1683770/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1683770/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1683770/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-07-27 02:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/711" target="_blank" title="哈夫纳夫">哈夫纳夫</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/659" target="_blank" title="华沙军团">华沙军团</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1683771/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1683771/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1683771/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-07-27 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/695" target="_blank" title="德布勒森">德布勒森</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2557" target="_blank" title="列伯尼基">列伯尼基</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1683775/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1683775/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1683775/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-07-27 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/324" target="_blank" title="科克城">科克城</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/612" target="_blank" title="红星">红星</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1683776/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1683776/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1683776/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-07-27 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/227" target="_blank" title="哥本哈根">哥本哈根</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/391" target="_blank" title="迈帕">迈帕</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1683777/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1683777/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1683777/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-07-27 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/76" target="_blank" title="哈茨">哈茨</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2530" target="_blank" title="伯拉治">伯拉治</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1683778/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1683778/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1683778/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-07-27 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/672" target="_blank" title="波利斯拉">波利斯拉</a></td>
											<td>			
												
												
													3:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/485" target="_blank" title="瓦勒伦加">瓦勒伦加</a></td>
											<td>			
												
												
													3:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1683779/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1683779/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1683779/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-07-27 03:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/615" target="_blank" title="哥里卡">哥里卡</a></td>
											<td>			
												
												
													0:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/626" target="_blank" title="布星">布星</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1683790/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1683790/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1683790/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-08-02 01:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2531" target="_blank" title="托尔B36">托尔B36</a></td>
											<td>			
												
												
													0:5
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/537" target="_blank" title="费内巴切">费内巴切</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1683110/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1683110/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1683110/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-08-02 23:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/691" target="_blank" title="施安尼">施安尼</a></td>
											<td>			
												
												
													0:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/617" target="_blank" title="索斯基">索斯基</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1683045/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1683045/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1683045/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-08-02 23:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/411" target="_blank" title="莫斯巴达">莫斯巴达</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2559" target="_blank" title="谢里夫">谢里夫</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1683046/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1683046/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1683046/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-08-02 23:59</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/712" target="_blank" title="基辅迪纳">基辅迪纳</a></td>
											<td>			
												
												
													4:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/614" target="_blank" title="梅塔鲁格">梅塔鲁格</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												两球/两球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1683047/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1683047/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1683047/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-08-03 01:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/391" target="_blank" title="迈帕">迈帕</a></td>
											<td>			
												
												
													2:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/227" target="_blank" title="哥本哈根">哥本哈根</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1683049/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1683049/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1683049/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-08-03 02:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/626" target="_blank" title="布星">布星</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/615" target="_blank" title="哥里卡">哥里卡</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1683061/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1683061/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1683061/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-08-03 02:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2557" target="_blank" title="列伯尼基">列伯尼基</a></td>
											<td>			
												
												
													4:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/695" target="_blank" title="德布勒森">德布勒森</a></td>
											<td>			
												
												
													3:1
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1683062/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1683062/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1683062/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-08-03 02:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1233" target="_blank" title="鲁森比洛克">鲁森比洛克</a></td>
											<td>			
												
												
													3:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/421" target="_blank" title="佐加顿斯">佐加顿斯</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1683063/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1683063/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1683063/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-08-03 02:15</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/612" target="_blank" title="红星">红星</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/324" target="_blank" title="科克城">科克城</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1683064/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1683064/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1683064/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-08-03 02:15</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/9" target="_blank" title="萨尔茨堡">萨尔茨堡</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/449" target="_blank" title="苏黎世">苏黎世</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1683065/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1683065/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1683065/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-08-03 02:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/659" target="_blank" title="华沙军团">华沙军团</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/711" target="_blank" title="哈夫纳夫">哈夫纳夫</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1683066/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1683066/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1683066/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-08-03 02:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2530" target="_blank" title="伯拉治">伯拉治</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/76" target="_blank" title="哈茨">哈茨</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1683067/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1683067/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1683067/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-08-03 02:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/653" target="_blank" title="萨迪纳摩">萨迪纳摩</a></td>
											<td>			
												
												
													5:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/693" target="_blank" title="伊兰纳斯">伊兰纳斯</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1683068/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1683068/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1683068/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-08-03 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/485" target="_blank" title="瓦勒伦加">瓦勒伦加</a></td>
											<td>			
												
												
													2:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/672" target="_blank" title="波利斯拉">波利斯拉</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1683070/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1683070/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1683070/bfyc" class="oyx" target="_blank">析</a>
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
											<td>2006-08-09 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/8" target="_blank" title="奥维也纳">奥维也纳</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/463" target="_blank" title="本菲卡">本菲卡</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1682328/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1682328/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1682328/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-08-09 03:05</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/653" target="_blank" title="萨迪纳摩">萨迪纳摩</a></td>
											<td>			
												
												
													0:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/19" target="_blank" title="阿森纳">阿森纳</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1682370/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1682370/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1682370/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-08-09 23:59</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/407" target="_blank" title="莫陆军">莫陆军</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1233" target="_blank" title="鲁森比洛克">鲁森比洛克</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1682223/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1682223/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1682223/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-08-09 23:59</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/712" target="_blank" title="基辅迪纳">基辅迪纳</a></td>
											<td>			
												
												
													3:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/537" target="_blank" title="费内巴切">费内巴切</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1682224/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1682224/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1682224/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-08-09 23:59</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/266" target="_blank" title="里尔">里尔</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2557" target="_blank" title="列伯尼基">列伯尼基</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1682225/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1682225/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1682225/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-08-10 00:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/716" target="_blank" title="顿矿工">顿矿工</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/659" target="_blank" title="华沙军团">华沙军团</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1682229/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1682229/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1682229/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-08-10 01:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/617" target="_blank" title="索斯基">索斯基</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/195" target="_blank" title="切沃">切沃</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1682251/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1682251/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1682251/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-08-10 01:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/516" target="_blank" title="加拉塔萨">加拉塔萨</a></td>
											<td>			
												
												
													5:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/672" target="_blank" title="波利斯拉">波利斯拉</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1682252/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1682252/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1682252/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-08-10 02:15</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/671" target="_blank" title="利贝雷茨">利贝雷茨</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/411" target="_blank" title="莫斯巴达">莫斯巴达</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1682261/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1682261/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1682261/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-08-10 02:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/130" target="_blank" title="标准列日">标准列日</a></td>
											<td>			
												
												
													2:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/626" target="_blank" title="布星">布星</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1682262/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1682262/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1682262/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-08-10 02:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/227" target="_blank" title="哥本哈根">哥本哈根</a></td>
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
												<a href="http://fenxi.zgzcw.com/1682263/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1682263/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1682263/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-08-10 02:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/160" target="_blank" title="汉堡">汉堡</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/94" target="_blank" title="奥萨苏纳">奥萨苏纳</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1682264/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1682264/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1682264/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-08-10 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/9" target="_blank" title="萨尔茨堡">萨尔茨堡</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/91" target="_blank" title="巴伦西亚">巴伦西亚</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1682266/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1682266/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1682266/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-08-10 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/76" target="_blank" title="哈茨">哈茨</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/616" target="_blank" title="AEK雅典">AEK雅典</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1682267/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1682267/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1682267/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-08-10 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/150" target="_blank" title="AC米兰">AC米兰</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/612" target="_blank" title="红星">红星</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1682268/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1682268/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1682268/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-08-10 03:15</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/25" target="_blank" title="利物浦">利物浦</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/607" target="_blank" title="海法马卡">海法马卡</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1682278/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1682278/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1682278/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-08-23 02:35</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/607" target="_blank" title="海法马卡">海法马卡</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/25" target="_blank" title="利物浦">利物浦</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1680520/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1680520/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1680520/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-08-23 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/94" target="_blank" title="奥萨苏纳">奥萨苏纳</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/160" target="_blank" title="汉堡">汉堡</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1680522/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1680522/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1680522/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-08-23 03:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/612" target="_blank" title="红星">红星</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/150" target="_blank" title="AC米兰">AC米兰</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1680559/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1680559/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1680559/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-08-23 03:15</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/463" target="_blank" title="本菲卡">本菲卡</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/8" target="_blank" title="奥维也纳">奥维也纳</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1680561/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1680561/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1680561/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-08-23 04:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/91" target="_blank" title="巴伦西亚">巴伦西亚</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/9" target="_blank" title="萨尔茨堡">萨尔茨堡</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1680563/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1680563/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1680563/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-08-23 23:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/411" target="_blank" title="莫斯巴达">莫斯巴达</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/671" target="_blank" title="利贝雷茨">利贝雷茨</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1680401/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1680401/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1680401/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-08-24 01:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/672" target="_blank" title="波利斯拉">波利斯拉</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/516" target="_blank" title="加拉塔萨">加拉塔萨</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1680432/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1680432/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1680432/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-08-24 01:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/626" target="_blank" title="布星">布星</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/130" target="_blank" title="标准列日">标准列日</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1680433/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1680433/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1680433/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-08-24 02:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/537" target="_blank" title="费内巴切">费内巴切</a></td>
											<td>			
												
												
													2:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/712" target="_blank" title="基辅迪纳">基辅迪纳</a></td>
											<td>			
												
												
													1:2
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1680436/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1680436/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1680436/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-08-24 02:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2557" target="_blank" title="列伯尼基">列伯尼基</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/266" target="_blank" title="里尔">里尔</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1680437/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1680437/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1680437/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-08-24 02:15</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1233" target="_blank" title="鲁森比洛克">鲁森比洛克</a></td>
											<td>			
												
												
													0:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/407" target="_blank" title="莫陆军">莫陆军</a></td>
											<td>			
												
												
													0:2
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1680446/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1680446/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1680446/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-08-24 02:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/659" target="_blank" title="华沙军团">华沙军团</a></td>
											<td>			
												
												
													2:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/716" target="_blank" title="顿矿工">顿矿工</a></td>
											<td>			
												
												
													1:3
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1680447/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1680447/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1680447/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-08-24 02:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/253" target="_blank" title="阿贾克斯">阿贾克斯</a></td>
											<td>			
												
												
													0:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/227" target="_blank" title="哥本哈根">哥本哈根</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1680448/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1680448/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1680448/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-08-24 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/616" target="_blank" title="AEK雅典">AEK雅典</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/76" target="_blank" title="哈茨">哈茨</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1680461/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1680461/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1680461/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-08-24 03:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/195" target="_blank" title="切沃">切沃</a></td>
											<td>			
												
												
													2:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/617" target="_blank" title="索斯基">索斯基</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1680478/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1680478/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1680478/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-08-24 03:05</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/19" target="_blank" title="阿森纳">阿森纳</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/653" target="_blank" title="萨迪纳摩">萨迪纳摩</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1680480/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1680480/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1680480/bfyc" class="oyx" target="_blank">析</a>
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
											<td>2006-09-13 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/84" target="_blank" title="巴萨">巴萨</a></td>
											<td>			
												
												
													5:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/617" target="_blank" title="索斯基">索斯基</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1677582/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1677582/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1677582/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-09-13 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/24" target="_blank" title="切尔西">切尔西</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/132" target="_blank" title="不来梅">不来梅</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1677583/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1677583/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1677583/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-09-28 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/132" target="_blank" title="不来梅">不来梅</a></td>
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
												<a href="http://fenxi.zgzcw.com/1675064/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1675064/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1675064/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-09-28 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/617" target="_blank" title="索斯基">索斯基</a></td>
											<td>			
												
												
													1:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/24" target="_blank" title="切尔西">切尔西</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1675065/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1675065/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1675065/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-10-19 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/132" target="_blank" title="不来梅">不来梅</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/617" target="_blank" title="索斯基">索斯基</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1672260/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1672260/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1672260/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-10-19 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/24" target="_blank" title="切尔西">切尔西</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/84" target="_blank" title="巴萨">巴萨</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1672261/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1672261/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1672261/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-11-01 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/84" target="_blank" title="巴萨">巴萨</a></td>
											<td>			
												
												
													2:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/24" target="_blank" title="切尔西">切尔西</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1670204/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1670204/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1670204/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-11-01 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/617" target="_blank" title="索斯基">索斯基</a></td>
											<td>			
												
												
													0:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/132" target="_blank" title="不来梅">不来梅</a></td>
											<td>			
												
												
													0:3
												
														
											</td>
											<td align="center">
											
											
												受让半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1670205/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1670205/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1670205/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-11-23 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/132" target="_blank" title="不来梅">不来梅</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/24" target="_blank" title="切尔西">切尔西</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1667433/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1667433/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1667433/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-11-23 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/617" target="_blank" title="索斯基">索斯基</a></td>
											<td>			
												
												
													0:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/84" target="_blank" title="巴萨">巴萨</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1667434/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1667434/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1667434/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-12-06 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/84" target="_blank" title="巴萨">巴萨</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/132" target="_blank" title="不来梅">不来梅</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1665935/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1665935/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1665935/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-12-06 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/24" target="_blank" title="切尔西">切尔西</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/617" target="_blank" title="索斯基">索斯基</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1665936/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1665936/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1665936/bfyc" class="oyx" target="_blank">析</a>
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
											<td>2006-09-13 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/88" target="_blank" title="拜仁">拜仁</a></td>
											<td>			
												
												
													4:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/411" target="_blank" title="莫斯巴达">莫斯巴达</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1677584/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1677584/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1677584/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-09-13 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/466" target="_blank" title="里斯本">里斯本</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/152" target="_blank" title="国际米兰">国际米兰</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1677585/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1677585/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1677585/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-09-28 00:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/411" target="_blank" title="莫斯巴达">莫斯巴达</a></td>
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
												<a href="http://fenxi.zgzcw.com/1675055/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1675055/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1675055/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-09-28 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/152" target="_blank" title="国际米兰">国际米兰</a></td>
											<td>			
												
												
													0:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/88" target="_blank" title="拜仁">拜仁</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1675066/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1675066/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1675066/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-10-19 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/152" target="_blank" title="国际米兰">国际米兰</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/411" target="_blank" title="莫斯巴达">莫斯巴达</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1672262/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1672262/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1672262/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-10-19 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/466" target="_blank" title="里斯本">里斯本</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/88" target="_blank" title="拜仁">拜仁</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1672263/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1672263/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1672263/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-11-01 01:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/411" target="_blank" title="莫斯巴达">莫斯巴达</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/152" target="_blank" title="国际米兰">国际米兰</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1670192/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1670192/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1670192/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-11-01 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/88" target="_blank" title="拜仁">拜仁</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/466" target="_blank" title="里斯本">里斯本</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1670206/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1670206/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1670206/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-11-23 01:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/411" target="_blank" title="莫斯巴达">莫斯巴达</a></td>
											<td>			
												
												
													2:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/88" target="_blank" title="拜仁">拜仁</a></td>
											<td>			
												
												
													1:2
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1667423/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1667423/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1667423/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-11-23 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/152" target="_blank" title="国际米兰">国际米兰</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/466" target="_blank" title="里斯本">里斯本</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1667435/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1667435/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1667435/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-12-06 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/88" target="_blank" title="拜仁">拜仁</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/152" target="_blank" title="国际米兰">国际米兰</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1665937/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1665937/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1665937/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-12-06 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/466" target="_blank" title="里斯本">里斯本</a></td>
											<td>			
												
												
													1:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/411" target="_blank" title="莫斯巴达">莫斯巴达</a></td>
											<td>			
												
												
													1:2
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1665938/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1665938/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1665938/bfyc" class="oyx" target="_blank">析</a>
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
											<td>2006-09-13 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/516" target="_blank" title="加拉塔萨">加拉塔萨</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/208" target="_blank" title="波尔多">波尔多</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1677586/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1677586/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1677586/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-09-13 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/254" target="_blank" title="埃因霍温">埃因霍温</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/25" target="_blank" title="利物浦">利物浦</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1677587/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1677587/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1677587/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-09-28 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/208" target="_blank" title="波尔多">波尔多</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/254" target="_blank" title="埃因霍温">埃因霍温</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1675067/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1675067/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1675067/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-09-28 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/25" target="_blank" title="利物浦">利物浦</a></td>
											<td>			
												
												
													3:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/516" target="_blank" title="加拉塔萨">加拉塔萨</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1675068/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1675068/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1675068/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-10-19 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/208" target="_blank" title="波尔多">波尔多</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/25" target="_blank" title="利物浦">利物浦</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1672264/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1672264/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1672264/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-10-19 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/516" target="_blank" title="加拉塔萨">加拉塔萨</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/254" target="_blank" title="埃因霍温">埃因霍温</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1672265/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1672265/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1672265/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-11-01 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/25" target="_blank" title="利物浦">利物浦</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/208" target="_blank" title="波尔多">波尔多</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1670207/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1670207/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1670207/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-11-01 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/254" target="_blank" title="埃因霍温">埃因霍温</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/516" target="_blank" title="加拉塔萨">加拉塔萨</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1670208/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1670208/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1670208/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-11-23 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/208" target="_blank" title="波尔多">波尔多</a></td>
											<td>			
												
												
													3:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/516" target="_blank" title="加拉塔萨">加拉塔萨</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1667436/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1667436/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1667436/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-11-23 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/25" target="_blank" title="利物浦">利物浦</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/254" target="_blank" title="埃因霍温">埃因霍温</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1667437/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1667437/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1667437/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-12-06 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/516" target="_blank" title="加拉塔萨">加拉塔萨</a></td>
											<td>			
												
												
													3:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/25" target="_blank" title="利物浦">利物浦</a></td>
											<td>			
												
												
													2:1
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1665939/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1665939/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1665939/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-12-06 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/254" target="_blank" title="埃因霍温">埃因霍温</a></td>
											<td>			
												
												
													1:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/208" target="_blank" title="波尔多">波尔多</a></td>
											<td>			
												
												
													0:3
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1665940/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1665940/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1665940/bfyc" class="oyx" target="_blank">析</a>
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
											<td>2006-09-13 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/568" target="_blank" title="奥林匹亚">奥林匹亚</a></td>
											<td>			
												
												
													2:4
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/91" target="_blank" title="巴伦西亚">巴伦西亚</a></td>
											<td>			
												
												
													1:2
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1677588/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1677588/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1677588/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-09-13 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/174" target="_blank" title="罗马">罗马</a></td>
											<td>			
												
												
													4:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/716" target="_blank" title="顿矿工">顿矿工</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1677589/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1677589/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1677589/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-09-28 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/716" target="_blank" title="顿矿工">顿矿工</a></td>
											<td>			
												
												
													2:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/568" target="_blank" title="奥林匹亚">奥林匹亚</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1675069/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1675069/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1675069/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-09-28 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/91" target="_blank" title="巴伦西亚">巴伦西亚</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/174" target="_blank" title="罗马">罗马</a></td>
											<td>			
												
												
													2:1
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1675070/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1675070/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1675070/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-10-19 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/568" target="_blank" title="奥林匹亚">奥林匹亚</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/174" target="_blank" title="罗马">罗马</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1672266/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1672266/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1672266/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-10-19 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/91" target="_blank" title="巴伦西亚">巴伦西亚</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/716" target="_blank" title="顿矿工">顿矿工</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1672267/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1672267/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1672267/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-11-01 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/174" target="_blank" title="罗马">罗马</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/568" target="_blank" title="奥林匹亚">奥林匹亚</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1670209/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1670209/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1670209/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-11-01 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/716" target="_blank" title="顿矿工">顿矿工</a></td>
											<td>			
												
												
													2:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/91" target="_blank" title="巴伦西亚">巴伦西亚</a></td>
											<td>			
												
												
													2:1
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1670210/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1670210/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1670210/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-11-23 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/716" target="_blank" title="顿矿工">顿矿工</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/174" target="_blank" title="罗马">罗马</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1667438/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1667438/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1667438/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-11-23 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/91" target="_blank" title="巴伦西亚">巴伦西亚</a></td>
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
												<a href="http://fenxi.zgzcw.com/1667439/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1667439/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1667439/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-12-06 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/568" target="_blank" title="奥林匹亚">奥林匹亚</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/716" target="_blank" title="顿矿工">顿矿工</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1665941/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1665941/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1665941/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-12-06 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/174" target="_blank" title="罗马">罗马</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/91" target="_blank" title="巴伦西亚">巴伦西亚</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1665942/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1665942/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1665942/bfyc" class="oyx" target="_blank">析</a>
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
											<td>2006-09-14 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/712" target="_blank" title="基辅迪纳">基辅迪纳</a></td>
											<td>			
												
												
													1:4
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/626" target="_blank" title="布星">布星</a></td>
											<td>			
												
												
													1:3
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1677493/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1677493/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1677493/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-09-14 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/205" target="_blank" title="里昂">里昂</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/82" target="_blank" title="皇马">皇马</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1677494/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1677494/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1677494/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-09-27 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/82" target="_blank" title="皇马">皇马</a></td>
											<td>			
												
												
													5:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/712" target="_blank" title="基辅迪纳">基辅迪纳</a></td>
											<td>			
												
												
													3:0
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1675116/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1675116/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1675116/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-09-27 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/626" target="_blank" title="布星">布星</a></td>
											<td>			
												
												
													0:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/205" target="_blank" title="里昂">里昂</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1675117/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1675117/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1675117/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-10-18 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/712" target="_blank" title="基辅迪纳">基辅迪纳</a></td>
											<td>			
												
												
													0:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/205" target="_blank" title="里昂">里昂</a></td>
											<td>			
												
												
													0:2
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1672317/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1672317/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1672317/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-10-18 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/626" target="_blank" title="布星">布星</a></td>
											<td>			
												
												
													1:4
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/82" target="_blank" title="皇马">皇马</a></td>
											<td>			
												
												
													0:2
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1672318/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1672318/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1672318/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-11-02 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/205" target="_blank" title="里昂">里昂</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/712" target="_blank" title="基辅迪纳">基辅迪纳</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1670146/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1670146/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1670146/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-11-02 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/82" target="_blank" title="皇马">皇马</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/626" target="_blank" title="布星">布星</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1670147/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1670147/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1670147/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-11-22 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/82" target="_blank" title="皇马">皇马</a></td>
											<td>			
												
												
													2:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/205" target="_blank" title="里昂">里昂</a></td>
											<td>			
												
												
													1:2
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1667481/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1667481/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1667481/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-11-22 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/626" target="_blank" title="布星">布星</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/712" target="_blank" title="基辅迪纳">基辅迪纳</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1667482/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1667482/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1667482/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-12-07 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/712" target="_blank" title="基辅迪纳">基辅迪纳</a></td>
											<td>			
												
												
													2:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/82" target="_blank" title="皇马">皇马</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1665906/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1665906/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1665906/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-12-07 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/205" target="_blank" title="里昂">里昂</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/626" target="_blank" title="布星">布星</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1665907/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1665907/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1665907/bfyc" class="oyx" target="_blank">析</a>
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
											<td>2006-09-14 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/227" target="_blank" title="哥本哈根">哥本哈根</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/463" target="_blank" title="本菲卡">本菲卡</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1677495/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1677495/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1677495/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-09-14 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/27" target="_blank" title="曼联">曼联</a></td>
											<td>			
												
												
													3:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/70" target="_blank" title="凯尔特人">凯尔特人</a></td>
											<td>			
												
												
													2:2
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1677496/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1677496/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1677496/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-09-27 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/463" target="_blank" title="本菲卡">本菲卡</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/27" target="_blank" title="曼联">曼联</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1675118/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1675118/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1675118/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-09-27 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/70" target="_blank" title="凯尔特人">凯尔特人</a></td>
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
												<a href="http://fenxi.zgzcw.com/1675119/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1675119/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1675119/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-10-18 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/70" target="_blank" title="凯尔特人">凯尔特人</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/463" target="_blank" title="本菲卡">本菲卡</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1672319/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1672319/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1672319/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-10-18 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/27" target="_blank" title="曼联">曼联</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/227" target="_blank" title="哥本哈根">哥本哈根</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1672320/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1672320/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1672320/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-11-02 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/463" target="_blank" title="本菲卡">本菲卡</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/70" target="_blank" title="凯尔特人">凯尔特人</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1670148/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1670148/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1670148/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-11-02 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/227" target="_blank" title="哥本哈根">哥本哈根</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/27" target="_blank" title="曼联">曼联</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1670149/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1670149/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1670149/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-11-22 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/463" target="_blank" title="本菲卡">本菲卡</a></td>
											<td>			
												
												
													3:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/227" target="_blank" title="哥本哈根">哥本哈根</a></td>
											<td>			
												
												
													3:0
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1667483/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1667483/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1667483/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-11-22 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/70" target="_blank" title="凯尔特人">凯尔特人</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/27" target="_blank" title="曼联">曼联</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1667484/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1667484/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1667484/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-12-07 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/227" target="_blank" title="哥本哈根">哥本哈根</a></td>
											<td>			
												
												
													3:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/70" target="_blank" title="凯尔特人">凯尔特人</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1665908/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1665908/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1665908/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-12-07 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/27" target="_blank" title="曼联">曼联</a></td>
											<td>			
												
												
													3:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/463" target="_blank" title="本菲卡">本菲卡</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1665909/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1665909/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1665909/bfyc" class="oyx" target="_blank">析</a>
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
											<td>2006-09-14 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/160" target="_blank" title="汉堡">汉堡</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/19" target="_blank" title="阿森纳">阿森纳</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1677497/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1677497/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1677497/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-09-14 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/468" target="_blank" title="波尔图">波尔图</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/407" target="_blank" title="莫陆军">莫陆军</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1677498/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1677498/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1677498/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-09-27 00:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/407" target="_blank" title="莫陆军">莫陆军</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/160" target="_blank" title="汉堡">汉堡</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1675102/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1675102/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1675102/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-09-27 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/19" target="_blank" title="阿森纳">阿森纳</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/468" target="_blank" title="波尔图">波尔图</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1675120/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1675120/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1675120/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-10-18 00:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/407" target="_blank" title="莫陆军">莫陆军</a></td>
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
												<a href="http://fenxi.zgzcw.com/1672295/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1672295/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1672295/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-10-18 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/468" target="_blank" title="波尔图">波尔图</a></td>
											<td>			
												
												
													4:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/160" target="_blank" title="汉堡">汉堡</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1672321/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1672321/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1672321/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-11-02 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/19" target="_blank" title="阿森纳">阿森纳</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/407" target="_blank" title="莫陆军">莫陆军</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1670150/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1670150/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1670150/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-11-02 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/160" target="_blank" title="汉堡">汉堡</a></td>
											<td>			
												
												
													1:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/468" target="_blank" title="波尔图">波尔图</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1670151/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1670151/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1670151/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-11-22 01:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/407" target="_blank" title="莫陆军">莫陆军</a></td>
											<td>			
												
												
													0:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/468" target="_blank" title="波尔图">波尔图</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1667468/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1667468/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1667468/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-11-22 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/19" target="_blank" title="阿森纳">阿森纳</a></td>
											<td>			
												
												
													3:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/160" target="_blank" title="汉堡">汉堡</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												球半/两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1667485/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1667485/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1667485/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-12-07 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/160" target="_blank" title="汉堡">汉堡</a></td>
											<td>			
												
												
													3:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/407" target="_blank" title="莫陆军">莫陆军</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1665910/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1665910/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1665910/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-12-07 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/468" target="_blank" title="波尔图">波尔图</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/19" target="_blank" title="阿森纳">阿森纳</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1665911/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1665911/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1665911/bfyc" class="oyx" target="_blank">析</a>
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
											<td>2006-09-14 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/153" target="_blank" title="安德莱赫">安德莱赫</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/266" target="_blank" title="里尔">里尔</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1677499/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1677499/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1677499/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-09-14 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/150" target="_blank" title="AC米兰">AC米兰</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/616" target="_blank" title="AEK雅典">AEK雅典</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1677500/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1677500/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1677500/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-09-27 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/616" target="_blank" title="AEK雅典">AEK雅典</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/153" target="_blank" title="安德莱赫">安德莱赫</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1675121/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1675121/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1675121/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-09-27 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/266" target="_blank" title="里尔">里尔</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/150" target="_blank" title="AC米兰">AC米兰</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1675122/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1675122/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1675122/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-10-18 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/153" target="_blank" title="安德莱赫">安德莱赫</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/150" target="_blank" title="AC米兰">AC米兰</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1672322/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1672322/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1672322/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-10-18 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/266" target="_blank" title="里尔">里尔</a></td>
											<td>			
												
												
													3:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/616" target="_blank" title="AEK雅典">AEK雅典</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1672323/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1672323/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1672323/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-11-02 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/616" target="_blank" title="AEK雅典">AEK雅典</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/266" target="_blank" title="里尔">里尔</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1670152/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1670152/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1670152/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-11-02 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/150" target="_blank" title="AC米兰">AC米兰</a></td>
											<td>			
												
												
													4:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/153" target="_blank" title="安德莱赫">安德莱赫</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1670153/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1670153/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1670153/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-11-22 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/616" target="_blank" title="AEK雅典">AEK雅典</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/150" target="_blank" title="AC米兰">AC米兰</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												受让半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1667486/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1667486/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1667486/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-11-22 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/266" target="_blank" title="里尔">里尔</a></td>
											<td>			
												
												
													2:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/153" target="_blank" title="安德莱赫">安德莱赫</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1667487/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1667487/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1667487/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-12-07 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/153" target="_blank" title="安德莱赫">安德莱赫</a></td>
											<td>			
												
												
													2:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/616" target="_blank" title="AEK雅典">AEK雅典</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1665912/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1665912/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1665912/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2006-12-07 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/150" target="_blank" title="AC米兰">AC米兰</a></td>
											<td>			
												
												
													0:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/266" target="_blank" title="里尔">里尔</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1665913/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1665913/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1665913/bfyc" class="oyx" target="_blank">析</a>
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
											<td>2007-02-21 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/254" target="_blank" title="埃因霍温">埃因霍温</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/19" target="_blank" title="阿森纳">阿森纳</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1659567/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1659567/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1659567/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-02-21 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/266" target="_blank" title="里尔">里尔</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/27" target="_blank" title="曼联">曼联</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1659568/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1659568/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1659568/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-02-21 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/82" target="_blank" title="皇马">皇马</a></td>
											<td>			
												
												
													3:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/88" target="_blank" title="拜仁">拜仁</a></td>
											<td>			
												
												
													3:1
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1659569/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1659569/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1659569/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-02-21 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/70" target="_blank" title="凯尔特人">凯尔特人</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/150" target="_blank" title="AC米兰">AC米兰</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1659570/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1659570/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1659570/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-02-22 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/174" target="_blank" title="罗马">罗马</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/205" target="_blank" title="里昂">里昂</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1659498/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1659498/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1659498/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-02-22 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/84" target="_blank" title="巴萨">巴萨</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/25" target="_blank" title="利物浦">利物浦</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1659499/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1659499/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1659499/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-02-22 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/152" target="_blank" title="国际米兰">国际米兰</a></td>
											<td>			
												
												
													2:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/91" target="_blank" title="巴伦西亚">巴伦西亚</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1659500/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1659500/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1659500/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-02-22 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/468" target="_blank" title="波尔图">波尔图</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/24" target="_blank" title="切尔西">切尔西</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1659501/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1659501/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1659501/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-03-07 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/205" target="_blank" title="里昂">里昂</a></td>
											<td>			
												
												
													0:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/174" target="_blank" title="罗马">罗马</a></td>
											<td>			
												
												
													0:2
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1657805/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1657805/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1657805/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-03-07 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/25" target="_blank" title="利物浦">利物浦</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/84" target="_blank" title="巴萨">巴萨</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1657806/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1657806/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1657806/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-03-07 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/91" target="_blank" title="巴伦西亚">巴伦西亚</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/152" target="_blank" title="国际米兰">国际米兰</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1657807/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1657807/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1657807/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-03-07 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/24" target="_blank" title="切尔西">切尔西</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/468" target="_blank" title="波尔图">波尔图</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1657808/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1657808/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1657808/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-03-08 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/150" target="_blank" title="AC米兰">AC米兰</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/70" target="_blank" title="凯尔特人">凯尔特人</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1657729/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1657729/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1657729/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-03-08 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/88" target="_blank" title="拜仁">拜仁</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/82" target="_blank" title="皇马">皇马</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1657730/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1657730/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1657730/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-03-08 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/27" target="_blank" title="曼联">曼联</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/266" target="_blank" title="里尔">里尔</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1657731/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1657731/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1657731/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-03-08 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/19" target="_blank" title="阿森纳">阿森纳</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/254" target="_blank" title="埃因霍温">埃因霍温</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1657732/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1657732/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1657732/bfyc" class="oyx" target="_blank">析</a>
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
											<td>2007-04-04 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/150" target="_blank" title="AC米兰">AC米兰</a></td>
											<td>			
												
												
													2:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/88" target="_blank" title="拜仁">拜仁</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1653952/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1653952/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1653952/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-04-04 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/254" target="_blank" title="埃因霍温">埃因霍温</a></td>
											<td>			
												
												
													0:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/25" target="_blank" title="利物浦">利物浦</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1653953/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1653953/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1653953/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-04-05 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/174" target="_blank" title="罗马">罗马</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/27" target="_blank" title="曼联">曼联</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1653866/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1653866/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1653866/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-04-05 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/24" target="_blank" title="切尔西">切尔西</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/91" target="_blank" title="巴伦西亚">巴伦西亚</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1653867/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1653867/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1653867/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-04-11 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/27" target="_blank" title="曼联">曼联</a></td>
											<td>			
												
												
													7:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/174" target="_blank" title="罗马">罗马</a></td>
											<td>			
												
												
													4:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1652828/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1652828/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1652828/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-04-11 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/91" target="_blank" title="巴伦西亚">巴伦西亚</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/24" target="_blank" title="切尔西">切尔西</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1652829/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1652829/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1652829/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-04-12 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/88" target="_blank" title="拜仁">拜仁</a></td>
											<td>			
												
												
													0:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/150" target="_blank" title="AC米兰">AC米兰</a></td>
											<td>			
												
												
													0:2
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1652727/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1652727/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1652727/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-04-12 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/25" target="_blank" title="利物浦">利物浦</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/254" target="_blank" title="埃因霍温">埃因霍温</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1652728/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1652728/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1652728/bfyc" class="oyx" target="_blank">析</a>
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
											<td>2007-04-25 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/27" target="_blank" title="曼联">曼联</a></td>
											<td>			
												
												
													3:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/150" target="_blank" title="AC米兰">AC米兰</a></td>
											<td>			
												
												
													1:2
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1650376/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1650376/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1650376/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-04-26 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/24" target="_blank" title="切尔西">切尔西</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/25" target="_blank" title="利物浦">利物浦</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1650273/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1650273/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1650273/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-05-02 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/25" target="_blank" title="利物浦">利物浦</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/24" target="_blank" title="切尔西">切尔西</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1649078/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1649078/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1649078/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-05-03 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/150" target="_blank" title="AC米兰">AC米兰</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/27" target="_blank" title="曼联">曼联</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1648966/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1648966/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1648966/bfyc" class="oyx" target="_blank">析</a>
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
											<td>2007-05-24 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/150" target="_blank" title="AC米兰">AC米兰</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/25" target="_blank" title="利物浦">利物浦</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1645519/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1645519/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1645519/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
							</tbody></table>
						</div>						
										
				
				</ul>
			
			
		</div>

		
		
		
		
		
		
		
		
		
		
		
		




</body>