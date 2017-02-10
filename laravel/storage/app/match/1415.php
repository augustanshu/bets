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
 <p> <span id="nyr">2017-2-10</span> <br>
    <b id="xt_h">9</b><b id="xt_m">17</b><b id="xt_s">24</b> </p>
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

<div class="minibar"><span class="location">当前位置：</span><a href="http://www.zgzcw.com/" target="_self">中国足彩网</a> <span class="dotline">&gt;</span> <a href="http://saishi.zgzcw.com:80/soccer/" target="_self">赛事中心</a> <span class="dotline">&gt;</span> <span class="indext">联赛资料</span></div>

<div class="league wapper">
<!--  左侧页面 -->

	
		
		
	
	



<div class="left">
			<div class="left_head">
				<dl class="head_dl">
					<dt>
						
				  		
				  		
				  		
				  		
				  			
				  			<img src="http://img.zgzcw.com/zgzcw/matchCenter/league/images/20130118151214.jpg" width="100" height="100" border="0">
				  			
				  		
					</dt>
					<dd>
					
						[法乙]
				    
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
	                <ul class="select_options" style="display: none;">
	                 
	                 
	                  
	                  
	                   <a href="http://saishi.zgzcw.com:80/soccer/league/12/2016-2017/">
	                  <li>2016-2017</li></a>
	                   
	                   <a href="http://saishi.zgzcw.com:80/soccer/league/12/2015-2016/">
	                  <li>2015-2016</li></a>
	                   
	                   <a href="http://saishi.zgzcw.com:80/soccer/league/12/2014-2015/">
	                  <li>2014-2015</li></a>
	                   
	                   <a href="http://saishi.zgzcw.com:80/soccer/league/12/2013-2014/">
	                  <li>2013-2014</li></a>
	                   
	                   <a href="http://saishi.zgzcw.com:80/soccer/league/12/2012-2013/">
	                  <li>2012-2013</li></a>
	                   
	                   <a href="http://saishi.zgzcw.com:80/soccer/league/12/2011-2012/">
	                  <li>2011-2012</li></a>
	                   
	                   <a href="http://saishi.zgzcw.com:80/soccer/league/12/2010-2011/">
	                  <li>2010-2011</li></a>
	                   
	                   <a href="http://saishi.zgzcw.com:80/soccer/league/12/2009-2010/">
	                  <li>2009-2010</li></a>
	                   
	                   <a href="http://saishi.zgzcw.com:80/soccer/league/12/2008-2009/">
	                  <li>2008-2009</li></a>
	                   
	                   <a href="http://saishi.zgzcw.com:80/soccer/league/12/2007-2008/">
	                  <li>2007-2008</li></a>
	                   
	                   <a href="http://saishi.zgzcw.com:80/soccer/league/12/2006-2007/">
	                  <li>2006-2007</li></a>
	                   
	                   <a href="http://saishi.zgzcw.com:80/soccer/league/12/2005-2006/">
	                  <li>2005-2006</li></a>
	                   
	                   <a href="http://saishi.zgzcw.com:80/soccer/league/12/2004-2005/">
	                  <li>2004-2005</li></a>
	                   
	                 
	                              
	                </ul>
              </div>
				</div>
			</div>
			
				<div class="tongji_list">
				
					<div>赛事统计</div>
					<ul>
						<li class="cur">
						<a href="http://saishi.zgzcw.com:80/soccer/league/12">
						赛程信息</a></li>
	                   
						<li>
						<a href="http://saishi.zgzcw.com:80/soccer/league/12/2014-2015/ssb">
						射手榜</a></li>
						<li>
						<a href="http://saishi.zgzcw.com:80/soccer/league/12/2014-2015/jqds">
						总进球单双</a></li>
						<li>
						<a href="http://saishi.zgzcw.com:80/soccer/league/12/2014-2015/sxds">
						上下单双</a></li>
						<li>
						<a href="http://saishi.zgzcw.com:80/soccer/league/12/2014-2015/sxpl">
						上下盘路榜</a></li>
					</ul>
				</div>
			
			<div class="tongji_list">
				<div>球队列表</div>
				<ul>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/366" target="_blank" class="a1" title="特鲁瓦">
					<li>特鲁瓦</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/301" target="_blank" class="a1" title="南锡">
					<li>南锡</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/2141" target="_blank" class="a1" title="阿雅GFCO">
					<li>阿雅GFCO</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/2103" target="_blank" class="a1" title="图尔">
					<li>图尔</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/215" target="_blank" class="a1" title="欧塞尔">
					<li>欧塞尔</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/304" target="_blank" class="a1" title="昂热">
					<li>昂热</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/335" target="_blank" class="a1" title="勒阿弗尔">
					<li>勒阿弗尔</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/320" target="_blank" class="a1" title="第戎">
					<li>第戎</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/1744" target="_blank" class="a1" title="尼姆">
					<li>尼姆</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/374" target="_blank" class="a1" title="克雷泰伊">
					<li>克雷泰伊</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/313" target="_blank" class="a1" title="克莱蒙">
					<li>克莱蒙</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/306" target="_blank" class="a1" title="布雷斯特">
					<li>布雷斯特</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/330" target="_blank" class="a1" title="拉瓦勒">
					<li>拉瓦勒</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/325" target="_blank" class="a1" title="尼奥尔">
					<li>尼奥尔</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/267" target="_blank" class="a1" title="索肖">
					<li>索肖</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/5025" target="_blank" class="a1" title="奥尔良">
					<li>奥尔良</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/2104" target="_blank" class="a1" title="瓦朗谢纳">
					<li>瓦朗谢纳</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/194" target="_blank" class="a1" title="阿雅克肖">
					<li>阿雅克肖</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/308" target="_blank" class="a1" title="沙托鲁">
					<li>沙托鲁</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/6037" target="_blank" class="a1" title="阿尔勒">
					<li>阿尔勒</li>
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

<form id="form_1" method="post">				
	<input type="hidden" name="seasonType" value="1">
</form>
<form id="form_2" method="post">				
	<input type="hidden" name="seasonType" value="2">	
</form>

<!-- 右侧页面 -->
	<div class="league_right">
		<!-- <div class="league_right_01">
		
			<div class="selector">
			
				<select id="selectYear">						
					
						
							<option value="2016-2017">2016-2017赛季</option>
						
					
						
							<option value="2015-2016">2015-2016赛季</option>
						
					
						
							<option value="2014-2015" selected="selected">2014-2015赛季</option>
						
					
						
							<option value="2013-2014">2013-2014赛季</option>
						
					
						
							<option value="2012-2013">2012-2013赛季</option>
						
					
						
							<option value="2011-2012">2011-2012赛季</option>
						
					
						
							<option value="2010-2011">2010-2011赛季</option>
						
					
						
							<option value="2009-2010">2009-2010赛季</option>
						
					
						
							<option value="2008-2009">2008-2009赛季</option>
						
					
						
							<option value="2007-2008">2007-2008赛季</option>
						
					
						
							<option value="2006-2007">2006-2007赛季</option>
						
					
						
							<option value="2005-2006">2005-2006赛季</option>
						
					
						
							<option value="2004-2005">2004-2005赛季</option>
						
					
				</select> <select id="selectTeam">
					<option value="0" selected="selected">选择球队</option>
					
						<option value="194">阿雅克肖</option>
					
						<option value="215">欧塞尔</option>
					
						<option value="267">索肖</option>
					
						<option value="301">南锡</option>
					
						<option value="304">昂热</option>
					
						<option value="306">布雷斯特</option>
					
						<option value="308">沙托鲁</option>
					
						<option value="313">克莱蒙</option>
					
						<option value="330">拉瓦勒</option>
					
						<option value="335">勒阿弗尔</option>
					
						<option value="366">特鲁瓦</option>
					
						<option value="374">克雷泰伊</option>
					
						<option value="1744">尼姆</option>
					
						<option value="2103">图尔</option>
					
						<option value="2104">瓦朗谢纳</option>
					
						<option value="2141">阿雅GFCO</option>
					
						<option value="5025">奥尔良</option>
					
						<option value="6037">阿尔勒</option>
					
						<option value="325">尼奥尔</option>
					
						<option value="320">第戎</option>
					
				</select> <select id="selectTeam2" style="display:none;">
					<option value="0" selected="selected">选择球队</option>
					
						<option value="194">阿雅克肖</option>
					
						<option value="215">欧塞尔</option>
					
						<option value="267">索肖</option>
					
						<option value="301">南锡</option>
					
						<option value="304">昂热</option>
					
						<option value="306">布雷斯特</option>
					
						<option value="308">沙托鲁</option>
					
						<option value="313">克莱蒙</option>
					
						<option value="330">拉瓦勒</option>
					
						<option value="335">勒阿弗尔</option>
					
						<option value="366">特鲁瓦</option>
					
						<option value="374">克雷泰伊</option>
					
						<option value="1744">尼姆</option>
					
						<option value="2103">图尔</option>
					
						<option value="2104">瓦朗谢纳</option>
					
						<option value="2141">阿雅GFCO</option>
					
						<option value="5025">奥尔良</option>
					
						<option value="6037">阿尔勒</option>
					
						<option value="325">尼奥尔</option>
					
						<option value="320">第戎</option>
					
				</select>
				<select id="fjsai">
				<option value="0" selected="selected">联赛</option>
				<option value="1" >附加赛</option>
				</select>
			</div>
			法乙2014-2015 -- 赛程&nbsp;
						
			
		</div> -->
	<div class="table_out">
		<div class="table_head">
			<div class="team_out2">
			
				<div class="div-select team_lian fl" id="selectTeam" value="0">
                    <span>请选择球队</span>
                    <ul class="select_options">
                        
							<li value="194">阿雅克肖</li>
						
							<li value="215">欧塞尔</li>
						
							<li value="267">索肖</li>
						
							<li value="301">南锡</li>
						
							<li value="304">昂热</li>
						
							<li value="306">布雷斯特</li>
						
							<li value="308">沙托鲁</li>
						
							<li value="313">克莱蒙</li>
						
							<li value="330">拉瓦勒</li>
						
							<li value="335">勒阿弗尔</li>
						
							<li value="366">特鲁瓦</li>
						
							<li value="374">克雷泰伊</li>
						
							<li value="1744">尼姆</li>
						
							<li value="2103">图尔</li>
						
							<li value="2104">瓦朗谢纳</li>
						
							<li value="2141">阿雅GFCO</li>
						
							<li value="5025">奥尔良</li>
						
							<li value="6037">阿尔勒</li>
						
							<li value="325">尼奥尔</li>
						
							<li value="320">第戎</li>
						
                    </ul>
                </div>
                <b class="qxzqd fl">VS</b>
                <div class="div-select fl" style="margin-left:20px;" id="selectTeam2" value="0">
                    <span>请选择球队</span>
                    <ul class="select_options">
                        
							<li value="194">阿雅克肖</li>
						
							<li value="215">欧塞尔</li>
						
							<li value="267">索肖</li>
						
							<li value="301">南锡</li>
						
							<li value="304">昂热</li>
						
							<li value="306">布雷斯特</li>
						
							<li value="308">沙托鲁</li>
						
							<li value="313">克莱蒙</li>
						
							<li value="330">拉瓦勒</li>
						
							<li value="335">勒阿弗尔</li>
						
							<li value="366">特鲁瓦</li>
						
							<li value="374">克雷泰伊</li>
						
							<li value="1744">尼姆</li>
						
							<li value="2103">图尔</li>
						
							<li value="2104">瓦朗谢纳</li>
						
							<li value="2141">阿雅GFCO</li>
						
							<li value="5025">奥尔良</li>
						
							<li value="6037">阿尔勒</li>
						
							<li value="325">尼奥尔</li>
						
							<li value="320">第戎</li>
						
                    </ul>
                </div>
               
			</div>
			<span>
				2014-2015法乙赛事
			</span>
			
			
				<!-- 韩K赛 -->
				
				
					<ul id="fjsai">
						<li class="cur" style="margin-left:80px;">常规赛</li>
						<li>附加赛</li>
					</ul>
				
			
			
			<!-- <select id="fjsai">
				<option value="0" selected="selected">常规赛</option>
				<option value="1" >附加赛</option>
			</select> -->
			<select id="selectYear" style="visibility:hidden;height:0;width:0;line-height:0;margin:0;padding:0;">						
				
					
						<option value="2016-2017">2016-2017赛季</option>
					
				
					
						<option value="2015-2016">2015-2016赛季</option>
					
				
					
						<option value="2014-2015" selected="selected">2014-2015赛季</option>
					
				
					
						<option value="2013-2014">2013-2014赛季</option>
					
				
					
						<option value="2012-2013">2012-2013赛季</option>
					
				
					
						<option value="2011-2012">2011-2012赛季</option>
					
				
					
						<option value="2010-2011">2010-2011赛季</option>
					
				
					
						<option value="2009-2010">2009-2010赛季</option>
					
				
					
						<option value="2008-2009">2008-2009赛季</option>
					
				
					
						<option value="2007-2008">2007-2008赛季</option>
					
				
					
						<option value="2006-2007">2006-2007赛季</option>
					
				
					
						<option value="2005-2006">2005-2006赛季</option>
					
				
					
						<option value="2004-2005">2004-2005赛季</option>
					
				
			</select>
			<!-- <select id="selectTeam">
				<option value="0" selected="selected">选择球队</option>
				
					<option value="194">阿雅克肖</option>
				
					<option value="215">欧塞尔</option>
				
					<option value="267">索肖</option>
				
					<option value="301">南锡</option>
				
					<option value="304">昂热</option>
				
					<option value="306">布雷斯特</option>
				
					<option value="308">沙托鲁</option>
				
					<option value="313">克莱蒙</option>
				
					<option value="330">拉瓦勒</option>
				
					<option value="335">勒阿弗尔</option>
				
					<option value="366">特鲁瓦</option>
				
					<option value="374">克雷泰伊</option>
				
					<option value="1744">尼姆</option>
				
					<option value="2103">图尔</option>
				
					<option value="2104">瓦朗谢纳</option>
				
					<option value="2141">阿雅GFCO</option>
				
					<option value="5025">奥尔良</option>
				
					<option value="6037">阿尔勒</option>
				
					<option value="325">尼奥尔</option>
				
					<option value="320">第戎</option>
				
			</select>
			<select id="selectTeam2">
				<option value="0" selected="selected">选择球队</option>
				
					<option value="194">阿雅克肖</option>
				
					<option value="215">欧塞尔</option>
				
					<option value="267">索肖</option>
				
					<option value="301">南锡</option>
				
					<option value="304">昂热</option>
				
					<option value="306">布雷斯特</option>
				
					<option value="308">沙托鲁</option>
				
					<option value="313">克莱蒙</option>
				
					<option value="330">拉瓦勒</option>
				
					<option value="335">勒阿弗尔</option>
				
					<option value="366">特鲁瓦</option>
				
					<option value="374">克雷泰伊</option>
				
					<option value="1744">尼姆</option>
				
					<option value="2103">图尔</option>
				
					<option value="2104">瓦朗谢纳</option>
				
					<option value="2141">阿雅GFCO</option>
				
					<option value="5025">奥尔良</option>
				
					<option value="6037">阿尔勒</option>
				
					<option value="325">尼奥尔</option>
				
					<option value="320">第戎</option>
				
			</select> -->
		</div>
		<style>
			.league_right_01 input{	
				background:#fff;	
				border: 1px solid #cdc;
				overflow: hidden;
				cursor: pointer;
				height: 22px;
				width:71px;
			}
			.league_right_01 input.cur{
				background: #a70300;
				border: 1px solid #a70300;
				overflow: hidden;
				color: #fff;
			}
		</style>
		
		<div class="league_right_021">
			<div class="box luncib">
				
					<em class="em_1">1</em>
				
					<em class="em_1">2</em>
				
					<em class="em_1">3</em>
				
					<em class="em_1">4</em>
				
					<em class="em_1">5</em>
				
					<em class="em_1">6</em>
				
					<em class="em_1">7</em>
				
					<em class="em_1">8</em>
				
					<em class="em_1">9</em>
				
					<em class="em_1">10</em>
				
					<em class="em_1">11</em>
				
					<em class="em_1">12</em>
				
					<em class="em_1">13</em>
				
					<em class="em_1">14</em>
				
					<em class="em_1">15</em>
				
					<em class="em_1">16</em>
				
					<em class="em_1">17</em>
				
					<em class="em_1">18</em>
				
					<em class="em_1">19</em>
				
					<em class="em_1 em_2">20</em>
				
					<em class="em_1">21</em>
				
					<em class="em_1">22</em>
				
					<em class="em_1">23</em>
				
					<em class="em_1">24</em>
				
					<em class="em_1">25</em>
				
					<em class="em_1">26</em>
				
					<em class="em_1">27</em>
				
					<em class="em_1">28</em>
				
					<em class="em_1">29</em>
				
					<em class="em_1">30</em>
				
					<em class="em_1">31</em>
				
					<em class="em_1">32</em>
				
					<em class="em_1">33</em>
				
					<em class="em_1">34</em>
				
					<em class="em_1">35</em>
				
					<em class="em_1">36</em>
				
					<em class="em_1">37</em>
				
					<em class="em_1">38</em>
				
				<div class="clear"></div>
			</div>
		</div>
		<div class="league_right_022" id="matchInfo">
			
				









<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_" class="zstab" style="display: none;">
	<thead>
		<tr>
			<th width="127">时间</th>
			<th width="165">主队</th>
			<th width="33">比分</th>
			<th width="165">客队</th>
			<th width="65">半场</th>
			<th width="153">让球</th>
			<th width="66">数据</th>
			<!-- <th width="90">时间</th>
            <th width="50">主队</th>
            <th width="30">比分</th>
            <th width="50">客队</th>
            <th width="45">半场</th>
            <th width="65">让球</th>
            <th width="55">数据</th> -->
		</tr>
	</thead>

	
	
		
			<tbody><tr>
				
			<td>2014-08-02 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/6037" target="_blank" title="">阿尔勒</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012716162543.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"><a href="soccer/team/194" target="_blank" title="">阿雅克肖</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875133/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875133/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875133/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-08-02 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/215" target="_blank" title="">欧塞尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"><a href="soccer/team/335" target="_blank" title="">勒阿弗尔</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875099/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875099/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875099/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2014-08-02 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2141" target="_blank" title="">阿雅GFCO</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327164251.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"><a href="soccer/team/2104" target="_blank" title="">瓦朗谢纳</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875101/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875101/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875101/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-08-02 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1744" target="_blank" title="">尼姆</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"></td>
			<td>			
				
					3:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162816.jpg"><a href="soccer/team/304" target="_blank" title="">昂热</a></td>
			<td>			
				
					3:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875135/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875135/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875135/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2014-08-02 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2103" target="_blank" title="">图尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"></td>
			<td>			
				
					4:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"><a href="soccer/team/374" target="_blank" title="">克雷泰伊</a></td>
			<td>			
				
					2:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875103/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875103/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875103/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-08-02 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/301" target="_blank" title="">南锡</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"><a href="soccer/team/320" target="_blank" title="">第戎</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875104/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875104/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875104/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2014-08-02 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/330" target="_blank" title="">拉瓦勒</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"><a href="soccer/team/325" target="_blank" title="">尼奥尔</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875105/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875105/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875105/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-08-02 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/308" target="_blank" title="">沙托鲁</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201326174356.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122444809.jpg"><a href="soccer/team/366" target="_blank" title="">特鲁瓦</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1898857/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1898857/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1898857/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2014-08-02 23:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/267" target="_blank" title="">索肖</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133813.png"><a href="soccer/team/5025" target="_blank" title="">奥尔良</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875102/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875102/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875102/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-08-05 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/306" target="_blank" title="">布雷斯特</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"><a href="soccer/team/313" target="_blank" title="">克莱蒙</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875100/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875100/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875100/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
</tbody></table>



			
		









<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_2" class="zstab" style="display: none;">
	<thead>
		<tr>
			<th width="127">时间</th>
			<th width="165">主队</th>
			<th width="33">比分</th>
			<th width="165">客队</th>
			<th width="65">半场</th>
			<th width="153">让球</th>
			<th width="66">数据</th>
			<!-- <th width="90">时间</th>
            <th width="50">主队</th>
            <th width="30">比分</th>
            <th width="50">客队</th>
            <th width="45">半场</th>
            <th width="65">让球</th>
            <th width="55">数据</th> -->
		</tr>
	</thead>

	
	
		
			<tbody><tr>
				
			<td>2014-08-09 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/304" target="_blank" title="">昂热</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162816.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012716162543.jpg"><a href="soccer/team/6037" target="_blank" title="">阿尔勒</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875147/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875147/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875147/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-08-09 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/313" target="_blank" title="">克莱蒙</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"><a href="soccer/team/215" target="_blank" title="">欧塞尔</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875148/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875148/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875148/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2014-08-09 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/374" target="_blank" title="">克雷泰伊</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"></td>
			<td>			
				
					3:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201326174356.jpg"><a href="soccer/team/308" target="_blank" title="">沙托鲁</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875149/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875149/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875149/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-08-09 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/320" target="_blank" title="">第戎</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"><a href="soccer/team/330" target="_blank" title="">拉瓦勒</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875150/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875150/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875150/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2014-08-09 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/335" target="_blank" title="">勒阿弗尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327164251.jpg"><a href="soccer/team/2141" target="_blank" title="">阿雅GFCO</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875151/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875151/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875151/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-08-09 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/325" target="_blank" title="">尼奥尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"><a href="soccer/team/306" target="_blank" title="">布雷斯特</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875152/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875152/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875152/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2014-08-09 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5025" target="_blank" title="">奥尔良</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133813.png"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"><a href="soccer/team/301" target="_blank" title="">南锡</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875153/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875153/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875153/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-08-09 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/366" target="_blank" title="">特鲁瓦</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122444809.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"><a href="soccer/team/2103" target="_blank" title="">图尔</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875154/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875154/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875154/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2014-08-09 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2104" target="_blank" title="">瓦朗谢纳</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"><a href="soccer/team/1744" target="_blank" title="">尼姆</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875155/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875155/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875155/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-08-09 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/194" target="_blank" title="">阿雅克肖</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"><a href="soccer/team/267" target="_blank" title="">索肖</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875146/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875146/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875146/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_3" class="zstab" style="display: none;">
	<thead>
		<tr>
			<th width="127">时间</th>
			<th width="165">主队</th>
			<th width="33">比分</th>
			<th width="165">客队</th>
			<th width="65">半场</th>
			<th width="153">让球</th>
			<th width="66">数据</th>
			<!-- <th width="90">时间</th>
            <th width="50">主队</th>
            <th width="30">比分</th>
            <th width="50">客队</th>
            <th width="45">半场</th>
            <th width="65">让球</th>
            <th width="55">数据</th> -->
		</tr>
	</thead>

	
	
		
			<tbody><tr>
				
			<td>2014-08-16 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/215" target="_blank" title="">欧塞尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133813.png"><a href="soccer/team/5025" target="_blank" title="">奥尔良</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875161/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875161/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875161/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-08-16 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/330" target="_blank" title="">拉瓦勒</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"><a href="soccer/team/374" target="_blank" title="">克雷泰伊</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875164/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875164/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875164/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2014-08-16 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/308" target="_blank" title="">沙托鲁</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201326174356.jpg"></td>
			<td>			
				
					3:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"><a href="soccer/team/313" target="_blank" title="">克莱蒙</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875165/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875165/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875165/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-08-16 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/301" target="_blank" title="">南锡</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012716162543.jpg"><a href="soccer/team/6037" target="_blank" title="">阿尔勒</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875166/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875166/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875166/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2014-08-16 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1744" target="_blank" title="">尼姆</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"><a href="soccer/team/320" target="_blank" title="">第戎</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875167/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875167/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875167/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-08-16 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/325" target="_blank" title="">尼奥尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"><a href="soccer/team/335" target="_blank" title="">勒阿弗尔</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875168/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875168/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875168/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2014-08-16 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2103" target="_blank" title="">图尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"><a href="soccer/team/2104" target="_blank" title="">瓦朗谢纳</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875170/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875170/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875170/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-08-16 20:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/306" target="_blank" title="">布雷斯特</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162816.jpg"><a href="soccer/team/304" target="_blank" title="">昂热</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875162/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875162/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875162/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2014-08-19 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2141" target="_blank" title="">阿雅GFCO</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327164251.jpg"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"><a href="soccer/team/194" target="_blank" title="">阿雅克肖</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875163/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875163/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875163/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-08-19 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/267" target="_blank" title="">索肖</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122444809.jpg"><a href="soccer/team/366" target="_blank" title="">特鲁瓦</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875169/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875169/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875169/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_4" class="zstab" style="display: none;">
	<thead>
		<tr>
			<th width="127">时间</th>
			<th width="165">主队</th>
			<th width="33">比分</th>
			<th width="165">客队</th>
			<th width="65">半场</th>
			<th width="153">让球</th>
			<th width="66">数据</th>
			<!-- <th width="90">时间</th>
            <th width="50">主队</th>
            <th width="30">比分</th>
            <th width="50">客队</th>
            <th width="45">半场</th>
            <th width="65">让球</th>
            <th width="55">数据</th> -->
		</tr>
	</thead>

	
	
		
			<tbody><tr>
				
			<td>2014-08-23 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/194" target="_blank" title="">阿雅克肖</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"><a href="soccer/team/2103" target="_blank" title="">图尔</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875175/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875175/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875175/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-08-23 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/304" target="_blank" title="">昂热</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162816.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201326174356.jpg"><a href="soccer/team/308" target="_blank" title="">沙托鲁</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875176/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875176/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875176/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2014-08-23 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/6037" target="_blank" title="">阿尔勒</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012716162543.jpg"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"><a href="soccer/team/267" target="_blank" title="">索肖</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875177/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875177/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875177/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-08-23 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/313" target="_blank" title="">克莱蒙</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"></td>
			<td>			
				
					3:4
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327164251.jpg"><a href="soccer/team/2141" target="_blank" title="">阿雅GFCO</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875178/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875178/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875178/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2014-08-23 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/374" target="_blank" title="">克雷泰伊</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"><a href="soccer/team/325" target="_blank" title="">尼奥尔</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875179/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875179/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875179/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-08-23 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/301" target="_blank" title="">南锡</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"><a href="soccer/team/1744" target="_blank" title="">尼姆</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875181/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875181/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875181/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2014-08-23 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5025" target="_blank" title="">奥尔良</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133813.png"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"><a href="soccer/team/306" target="_blank" title="">布雷斯特</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875182/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875182/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875182/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-08-23 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/366" target="_blank" title="">特鲁瓦</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122444809.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"><a href="soccer/team/330" target="_blank" title="">拉瓦勒</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875183/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875183/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875183/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2014-08-23 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2104" target="_blank" title="">瓦朗谢纳</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"></td>
			<td>			
				
					0:4
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"><a href="soccer/team/335" target="_blank" title="">勒阿弗尔</a></td>
			<td>			
				
					0:3
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875184/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875184/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875184/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-08-23 20:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/320" target="_blank" title="">第戎</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"><a href="soccer/team/215" target="_blank" title="">欧塞尔</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875180/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875180/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875180/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_5" class="zstab" style="display: none;">
	<thead>
		<tr>
			<th width="127">时间</th>
			<th width="165">主队</th>
			<th width="33">比分</th>
			<th width="165">客队</th>
			<th width="65">半场</th>
			<th width="153">让球</th>
			<th width="66">数据</th>
			<!-- <th width="90">时间</th>
            <th width="50">主队</th>
            <th width="30">比分</th>
            <th width="50">客队</th>
            <th width="45">半场</th>
            <th width="65">让球</th>
            <th width="55">数据</th> -->
		</tr>
	</thead>

	
	
		
			<tbody><tr>
				
			<td>2014-08-30 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/215" target="_blank" title="">欧塞尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"><a href="soccer/team/2104" target="_blank" title="">瓦朗谢纳</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875239/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875239/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875239/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-08-30 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2141" target="_blank" title="">阿雅GFCO</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327164251.jpg"></td>
			<td>			
				
					0:4
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122444809.jpg"><a href="soccer/team/366" target="_blank" title="">特鲁瓦</a></td>
			<td>			
				
					0:3
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875241/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875241/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875241/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2014-08-30 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/330" target="_blank" title="">拉瓦勒</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"><a href="soccer/team/194" target="_blank" title="">阿雅克肖</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875242/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875242/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875242/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-08-30 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/335" target="_blank" title="">勒阿弗尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"><a href="soccer/team/374" target="_blank" title="">克雷泰伊</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875243/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875243/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875243/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2014-08-30 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/308" target="_blank" title="">沙托鲁</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201326174356.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133813.png"><a href="soccer/team/5025" target="_blank" title="">奥尔良</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875244/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875244/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875244/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-08-30 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1744" target="_blank" title="">尼姆</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012716162543.jpg"><a href="soccer/team/6037" target="_blank" title="">阿尔勒</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875245/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875245/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875245/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2014-08-30 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/325" target="_blank" title="">尼奥尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"><a href="soccer/team/313" target="_blank" title="">克莱蒙</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875246/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875246/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875246/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-08-30 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/267" target="_blank" title="">索肖</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"><a href="soccer/team/320" target="_blank" title="">第戎</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875247/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875247/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875247/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2014-08-30 20:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2103" target="_blank" title="">图尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162816.jpg"><a href="soccer/team/304" target="_blank" title="">昂热</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875248/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875248/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875248/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-09-02 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/306" target="_blank" title="">布雷斯特</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"><a href="soccer/team/301" target="_blank" title="">南锡</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875240/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875240/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875240/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_6" class="zstab" style="display: none;">
	<thead>
		<tr>
			<th width="127">时间</th>
			<th width="165">主队</th>
			<th width="33">比分</th>
			<th width="165">客队</th>
			<th width="65">半场</th>
			<th width="153">让球</th>
			<th width="66">数据</th>
			<!-- <th width="90">时间</th>
            <th width="50">主队</th>
            <th width="30">比分</th>
            <th width="50">客队</th>
            <th width="45">半场</th>
            <th width="65">让球</th>
            <th width="55">数据</th> -->
		</tr>
	</thead>

	
	
		
			<tbody><tr>
				
			<td>2014-09-13 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/194" target="_blank" title="">阿雅克肖</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201326174356.jpg"><a href="soccer/team/308" target="_blank" title="">沙托鲁</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875278/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875278/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875278/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-09-13 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/304" target="_blank" title="">昂热</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162816.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327164251.jpg"><a href="soccer/team/2141" target="_blank" title="">阿雅GFCO</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875279/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875279/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875279/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2014-09-13 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/6037" target="_blank" title="">阿尔勒</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012716162543.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"><a href="soccer/team/2103" target="_blank" title="">图尔</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875280/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875280/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875280/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-09-13 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/313" target="_blank" title="">克莱蒙</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"><a href="soccer/team/335" target="_blank" title="">勒阿弗尔</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875281/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875281/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875281/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2014-09-13 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/320" target="_blank" title="">第戎</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"><a href="soccer/team/325" target="_blank" title="">尼奥尔</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875282/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875282/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875282/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-09-13 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1744" target="_blank" title="">尼姆</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"><a href="soccer/team/306" target="_blank" title="">布雷斯特</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875284/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875284/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875284/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2014-09-13 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5025" target="_blank" title="">奥尔良</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133813.png"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"><a href="soccer/team/330" target="_blank" title="">拉瓦勒</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875285/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875285/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875285/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-09-13 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2104" target="_blank" title="">瓦朗谢纳</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"><a href="soccer/team/374" target="_blank" title="">克雷泰伊</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875287/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875287/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875287/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2014-09-13 20:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/301" target="_blank" title="">南锡</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"><a href="soccer/team/267" target="_blank" title="">索肖</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875283/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875283/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875283/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-09-16 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/366" target="_blank" title="">特鲁瓦</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122444809.jpg"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"><a href="soccer/team/215" target="_blank" title="">欧塞尔</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875286/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875286/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875286/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_7" class="zstab" style="display: none;">
	<thead>
		<tr>
			<th width="127">时间</th>
			<th width="165">主队</th>
			<th width="33">比分</th>
			<th width="165">客队</th>
			<th width="65">半场</th>
			<th width="153">让球</th>
			<th width="66">数据</th>
			<!-- <th width="90">时间</th>
            <th width="50">主队</th>
            <th width="30">比分</th>
            <th width="50">客队</th>
            <th width="45">半场</th>
            <th width="65">让球</th>
            <th width="55">数据</th> -->
		</tr>
	</thead>

	
	
		
			<tbody><tr>
				
			<td>2014-09-20 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/215" target="_blank" title="">欧塞尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"><a href="soccer/team/194" target="_blank" title="">阿雅克肖</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875230/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875230/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875230/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-09-20 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/306" target="_blank" title="">布雷斯特</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012716162543.jpg"><a href="soccer/team/6037" target="_blank" title="">阿尔勒</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875231/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875231/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875231/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2014-09-20 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/374" target="_blank" title="">克雷泰伊</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"><a href="soccer/team/313" target="_blank" title="">克莱蒙</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875232/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875232/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875232/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-09-20 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2141" target="_blank" title="">阿雅GFCO</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327164251.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"><a href="soccer/team/320" target="_blank" title="">第戎</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875233/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875233/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875233/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2014-09-20 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/330" target="_blank" title="">拉瓦勒</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"></td>
			<td>			
				
					3:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162816.jpg"><a href="soccer/team/304" target="_blank" title="">昂热</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875294/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875294/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875294/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-09-20 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/308" target="_blank" title="">沙托鲁</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201326174356.jpg"></td>
			<td>			
				
					2:5
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"><a href="soccer/team/301" target="_blank" title="">南锡</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875296/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875296/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875296/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2014-09-20 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/325" target="_blank" title="">尼奥尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"></td>
			<td>			
				
					3:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"><a href="soccer/team/2104" target="_blank" title="">瓦朗谢纳</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875297/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875297/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875297/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-09-20 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/267" target="_blank" title="">索肖</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"><a href="soccer/team/1744" target="_blank" title="">尼姆</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875298/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875298/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875298/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2014-09-20 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2103" target="_blank" title="">图尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"></td>
			<td>			
				
					4:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133813.png"><a href="soccer/team/5025" target="_blank" title="">奥尔良</a></td>
			<td>			
				
					3:2
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875299/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875299/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875299/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-09-20 20:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/335" target="_blank" title="">勒阿弗尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"></td>
			<td>			
				
					3:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122444809.jpg"><a href="soccer/team/366" target="_blank" title="">特鲁瓦</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875295/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875295/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875295/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_8" class="zstab" style="display: none;">
	<thead>
		<tr>
			<th width="127">时间</th>
			<th width="165">主队</th>
			<th width="33">比分</th>
			<th width="165">客队</th>
			<th width="65">半场</th>
			<th width="153">让球</th>
			<th width="66">数据</th>
			<!-- <th width="90">时间</th>
            <th width="50">主队</th>
            <th width="30">比分</th>
            <th width="50">客队</th>
            <th width="45">半场</th>
            <th width="65">让球</th>
            <th width="55">数据</th> -->
		</tr>
	</thead>

	
	
		
			<tbody><tr>
				
			<td>2014-09-23 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2104" target="_blank" title="">瓦朗谢纳</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"><a href="soccer/team/313" target="_blank" title="">克莱蒙</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875318/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875318/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875318/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-09-24 02:55</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/194" target="_blank" title="">阿雅克肖</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"><a href="soccer/team/335" target="_blank" title="">勒阿弗尔</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875309/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875309/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875309/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2014-09-24 02:55</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/304" target="_blank" title="">昂热</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162816.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"><a href="soccer/team/215" target="_blank" title="">欧塞尔</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875310/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875310/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875310/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-09-24 02:55</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/6037" target="_blank" title="">阿尔勒</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012716162543.jpg"></td>
			<td>			
				
					2:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"><a href="soccer/team/330" target="_blank" title="">拉瓦勒</a></td>
			<td>			
				
					0:3
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875311/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875311/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875311/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2014-09-24 02:55</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/320" target="_blank" title="">第戎</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"><a href="soccer/team/374" target="_blank" title="">克雷泰伊</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875312/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875312/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875312/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-09-24 02:55</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/301" target="_blank" title="">南锡</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"><a href="soccer/team/2103" target="_blank" title="">图尔</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875313/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875313/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875313/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2014-09-24 02:55</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1744" target="_blank" title="">尼姆</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201326174356.jpg"><a href="soccer/team/308" target="_blank" title="">沙托鲁</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875314/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875314/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875314/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-09-24 02:55</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5025" target="_blank" title="">奥尔良</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133813.png"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327164251.jpg"><a href="soccer/team/2141" target="_blank" title="">阿雅GFCO</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875315/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875315/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875315/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2014-09-24 02:55</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/267" target="_blank" title="">索肖</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"><a href="soccer/team/306" target="_blank" title="">布雷斯特</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875316/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875316/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875316/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-09-24 02:55</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/366" target="_blank" title="">特鲁瓦</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122444809.jpg"></td>
			<td>			
				
					4:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"><a href="soccer/team/325" target="_blank" title="">尼奥尔</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875317/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875317/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875317/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_9" class="zstab" style="display: none;">
	<thead>
		<tr>
			<th width="127">时间</th>
			<th width="165">主队</th>
			<th width="33">比分</th>
			<th width="165">客队</th>
			<th width="65">半场</th>
			<th width="153">让球</th>
			<th width="66">数据</th>
			<!-- <th width="90">时间</th>
            <th width="50">主队</th>
            <th width="30">比分</th>
            <th width="50">客队</th>
            <th width="45">半场</th>
            <th width="65">让球</th>
            <th width="55">数据</th> -->
		</tr>
	</thead>

	
	
		
			<tbody><tr>
				
			<td>2014-09-27 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/215" target="_blank" title="">欧塞尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012716162543.jpg"><a href="soccer/team/6037" target="_blank" title="">阿尔勒</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875328/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875328/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875328/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-09-27 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/374" target="_blank" title="">克雷泰伊</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"></td>
			<td>			
				
					3:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"><a href="soccer/team/194" target="_blank" title="">阿雅克肖</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875330/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875330/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875330/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2014-09-27 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2141" target="_blank" title="">阿雅GFCO</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327164251.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"><a href="soccer/team/1744" target="_blank" title="">尼姆</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875331/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875331/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875331/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-09-27 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/330" target="_blank" title="">拉瓦勒</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"><a href="soccer/team/301" target="_blank" title="">南锡</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875332/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875332/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875332/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2014-09-27 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/335" target="_blank" title="">勒阿弗尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"><a href="soccer/team/320" target="_blank" title="">第戎</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875333/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875333/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875333/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-09-27 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/308" target="_blank" title="">沙托鲁</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201326174356.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"><a href="soccer/team/306" target="_blank" title="">布雷斯特</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875334/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875334/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875334/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2014-09-27 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/325" target="_blank" title="">尼奥尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162816.jpg"><a href="soccer/team/304" target="_blank" title="">昂热</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875335/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875335/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875335/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-09-27 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2103" target="_blank" title="">图尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"><a href="soccer/team/267" target="_blank" title="">索肖</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875336/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875336/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875336/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2014-09-27 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2104" target="_blank" title="">瓦朗谢纳</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133813.png"><a href="soccer/team/5025" target="_blank" title="">奥尔良</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875337/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875337/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875337/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-09-30 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/313" target="_blank" title="">克莱蒙</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122444809.jpg"><a href="soccer/team/366" target="_blank" title="">特鲁瓦</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875329/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875329/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875329/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_10" class="zstab" style="display: none;">
	<thead>
		<tr>
			<th width="127">时间</th>
			<th width="165">主队</th>
			<th width="33">比分</th>
			<th width="165">客队</th>
			<th width="65">半场</th>
			<th width="153">让球</th>
			<th width="66">数据</th>
			<!-- <th width="90">时间</th>
            <th width="50">主队</th>
            <th width="30">比分</th>
            <th width="50">客队</th>
            <th width="45">半场</th>
            <th width="65">让球</th>
            <th width="55">数据</th> -->
		</tr>
	</thead>

	
	
		
			<tbody><tr>
				
			<td>2014-10-04 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/194" target="_blank" title="">阿雅克肖</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"><a href="soccer/team/325" target="_blank" title="">尼奥尔</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875357/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875357/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875357/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-10-04 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/304" target="_blank" title="">昂热</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162816.jpg"></td>
			<td>			
				
					3:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"><a href="soccer/team/374" target="_blank" title="">克雷泰伊</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875358/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875358/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875358/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2014-10-04 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/6037" target="_blank" title="">阿尔勒</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012716162543.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201326174356.jpg"><a href="soccer/team/308" target="_blank" title="">沙托鲁</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875359/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875359/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875359/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-10-04 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/320" target="_blank" title="">第戎</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"><a href="soccer/team/313" target="_blank" title="">克莱蒙</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875361/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875361/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875361/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2014-10-04 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/301" target="_blank" title="">南锡</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327164251.jpg"><a href="soccer/team/2141" target="_blank" title="">阿雅GFCO</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875362/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875362/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875362/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-10-04 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1744" target="_blank" title="">尼姆</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"><a href="soccer/team/330" target="_blank" title="">拉瓦勒</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875363/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875363/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875363/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2014-10-04 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5025" target="_blank" title="">奥尔良</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133813.png"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"><a href="soccer/team/335" target="_blank" title="">勒阿弗尔</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875364/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875364/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875364/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-10-04 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/267" target="_blank" title="">索肖</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"><a href="soccer/team/215" target="_blank" title="">欧塞尔</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875365/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875365/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875365/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2014-10-04 20:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/366" target="_blank" title="">特鲁瓦</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122444809.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"><a href="soccer/team/2104" target="_blank" title="">瓦朗谢纳</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875366/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875366/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875366/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-10-07 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/306" target="_blank" title="">布雷斯特</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"><a href="soccer/team/2103" target="_blank" title="">图尔</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875360/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875360/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875360/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_11" class="zstab" style="display: none;">
	<thead>
		<tr>
			<th width="127">时间</th>
			<th width="165">主队</th>
			<th width="33">比分</th>
			<th width="165">客队</th>
			<th width="65">半场</th>
			<th width="153">让球</th>
			<th width="66">数据</th>
			<!-- <th width="90">时间</th>
            <th width="50">主队</th>
            <th width="30">比分</th>
            <th width="50">客队</th>
            <th width="45">半场</th>
            <th width="65">让球</th>
            <th width="55">数据</th> -->
		</tr>
	</thead>

	
	
		
			<tbody><tr>
				
			<td>2014-10-18 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/215" target="_blank" title="">欧塞尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"><a href="soccer/team/301" target="_blank" title="">南锡</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875386/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875386/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875386/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-10-18 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/313" target="_blank" title="">克莱蒙</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"><a href="soccer/team/194" target="_blank" title="">阿雅克肖</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875387/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875387/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875387/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2014-10-18 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2141" target="_blank" title="">阿雅GFCO</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327164251.jpg"></td>
			<td>			
				
					3:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012716162543.jpg"><a href="soccer/team/6037" target="_blank" title="">阿尔勒</a></td>
			<td>			
				
					3:1
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875389/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875389/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875389/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-10-18 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/330" target="_blank" title="">拉瓦勒</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"><a href="soccer/team/306" target="_blank" title="">布雷斯特</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875390/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875390/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875390/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2014-10-18 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/335" target="_blank" title="">勒阿弗尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162816.jpg"><a href="soccer/team/304" target="_blank" title="">昂热</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875391/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875391/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875391/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-10-18 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/308" target="_blank" title="">沙托鲁</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201326174356.jpg"></td>
			<td>			
				
					1:4
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"><a href="soccer/team/267" target="_blank" title="">索肖</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875392/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875392/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875392/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2014-10-18 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/325" target="_blank" title="">尼奥尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133813.png"><a href="soccer/team/5025" target="_blank" title="">奥尔良</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875393/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875393/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875393/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-10-18 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2103" target="_blank" title="">图尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"><a href="soccer/team/1744" target="_blank" title="">尼姆</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875394/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875394/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875394/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2014-10-18 20:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/374" target="_blank" title="">克雷泰伊</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122444809.jpg"><a href="soccer/team/366" target="_blank" title="">特鲁瓦</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875388/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875388/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875388/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-10-21 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2104" target="_blank" title="">瓦朗谢纳</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"></td>
			<td>			
				
					0:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"><a href="soccer/team/320" target="_blank" title="">第戎</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875395/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875395/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875395/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_12" class="zstab" style="display: none;">
	<thead>
		<tr>
			<th width="127">时间</th>
			<th width="165">主队</th>
			<th width="33">比分</th>
			<th width="165">客队</th>
			<th width="65">半场</th>
			<th width="153">让球</th>
			<th width="66">数据</th>
			<!-- <th width="90">时间</th>
            <th width="50">主队</th>
            <th width="30">比分</th>
            <th width="50">客队</th>
            <th width="45">半场</th>
            <th width="65">让球</th>
            <th width="55">数据</th> -->
		</tr>
	</thead>

	
	
		
			<tbody><tr>
				
			<td>2014-10-25 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/194" target="_blank" title="">阿雅克肖</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"><a href="soccer/team/2104" target="_blank" title="">瓦朗谢纳</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875415/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875415/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875415/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-10-25 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/304" target="_blank" title="">昂热</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162816.jpg"></td>
			<td>			
				
					3:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"><a href="soccer/team/313" target="_blank" title="">克莱蒙</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875416/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875416/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875416/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2014-10-25 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/6037" target="_blank" title="">阿尔勒</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012716162543.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"><a href="soccer/team/325" target="_blank" title="">尼奥尔</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875417/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875417/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875417/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-10-25 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/306" target="_blank" title="">布雷斯特</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"></td>
			<td>			
				
					3:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327164251.jpg"><a href="soccer/team/2141" target="_blank" title="">阿雅GFCO</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875418/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875418/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875418/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2014-10-25 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/308" target="_blank" title="">沙托鲁</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201326174356.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"><a href="soccer/team/2103" target="_blank" title="">图尔</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875419/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875419/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875419/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-10-25 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1744" target="_blank" title="">尼姆</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"><a href="soccer/team/215" target="_blank" title="">欧塞尔</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875421/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875421/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875421/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2014-10-25 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5025" target="_blank" title="">奥尔良</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133813.png"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"><a href="soccer/team/374" target="_blank" title="">克雷泰伊</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875422/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875422/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875422/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-10-25 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/267" target="_blank" title="">索肖</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"><a href="soccer/team/330" target="_blank" title="">拉瓦勒</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875423/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875423/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875423/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2014-10-25 20:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/366" target="_blank" title="">特鲁瓦</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122444809.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"><a href="soccer/team/320" target="_blank" title="">第戎</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875424/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875424/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875424/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-10-28 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/301" target="_blank" title="">南锡</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"><a href="soccer/team/335" target="_blank" title="">勒阿弗尔</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875420/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875420/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875420/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_13" class="zstab" style="display: none;">
	<thead>
		<tr>
			<th width="127">时间</th>
			<th width="165">主队</th>
			<th width="33">比分</th>
			<th width="165">客队</th>
			<th width="65">半场</th>
			<th width="153">让球</th>
			<th width="66">数据</th>
			<!-- <th width="90">时间</th>
            <th width="50">主队</th>
            <th width="30">比分</th>
            <th width="50">客队</th>
            <th width="45">半场</th>
            <th width="65">让球</th>
            <th width="55">数据</th> -->
		</tr>
	</thead>

	
	
		
			<tbody><tr>
				
			<td>2014-11-01 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/215" target="_blank" title="">欧塞尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"></td>
			<td>			
				
					0:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"><a href="soccer/team/306" target="_blank" title="">布雷斯特</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875457/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875457/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875457/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-11-01 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/313" target="_blank" title="">克莱蒙</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"></td>
			<td>			
				
					3:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"><a href="soccer/team/1744" target="_blank" title="">尼姆</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875458/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875458/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875458/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2014-11-01 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/374" target="_blank" title="">克雷泰伊</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"><a href="soccer/team/267" target="_blank" title="">索肖</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875459/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875459/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875459/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-11-01 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/320" target="_blank" title="">第戎</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"></td>
			<td>			
				
					3:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"><a href="soccer/team/194" target="_blank" title="">阿雅克肖</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875460/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875460/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875460/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2014-11-01 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2141" target="_blank" title="">阿雅GFCO</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327164251.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201326174356.jpg"><a href="soccer/team/308" target="_blank" title="">沙托鲁</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875461/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875461/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875461/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-11-01 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/330" target="_blank" title="">拉瓦勒</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"><a href="soccer/team/2103" target="_blank" title="">图尔</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875462/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875462/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875462/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2014-11-01 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/335" target="_blank" title="">勒阿弗尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012716162543.jpg"><a href="soccer/team/6037" target="_blank" title="">阿尔勒</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875463/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875463/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875463/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-11-01 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/366" target="_blank" title="">特鲁瓦</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122444809.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133813.png"><a href="soccer/team/5025" target="_blank" title="">奥尔良</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875465/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875465/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875465/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2014-11-01 21:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/325" target="_blank" title="">尼奥尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"></td>
			<td>			
				
					1:4
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"><a href="soccer/team/301" target="_blank" title="">南锡</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875464/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875464/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875464/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-11-04 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2104" target="_blank" title="">瓦朗谢纳</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162816.jpg"><a href="soccer/team/304" target="_blank" title="">昂热</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875466/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875466/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875466/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_14" class="zstab" style="display: none;">
	<thead>
		<tr>
			<th width="127">时间</th>
			<th width="165">主队</th>
			<th width="33">比分</th>
			<th width="165">客队</th>
			<th width="65">半场</th>
			<th width="153">让球</th>
			<th width="66">数据</th>
			<!-- <th width="90">时间</th>
            <th width="50">主队</th>
            <th width="30">比分</th>
            <th width="50">客队</th>
            <th width="45">半场</th>
            <th width="65">让球</th>
            <th width="55">数据</th> -->
		</tr>
	</thead>

	
	
		
			<tbody><tr>
				
			<td>2014-11-08 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/194" target="_blank" title="">阿雅克肖</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122444809.jpg"><a href="soccer/team/366" target="_blank" title="">特鲁瓦</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875486/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875486/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875486/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-11-08 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/304" target="_blank" title="">昂热</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162816.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"><a href="soccer/team/320" target="_blank" title="">第戎</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875487/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875487/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875487/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2014-11-08 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/6037" target="_blank" title="">阿尔勒</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012716162543.jpg"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"><a href="soccer/team/2104" target="_blank" title="">瓦朗谢纳</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875488/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875488/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875488/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-11-08 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/308" target="_blank" title="">沙托鲁</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201326174356.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"><a href="soccer/team/330" target="_blank" title="">拉瓦勒</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875490/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875490/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875490/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2014-11-08 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1744" target="_blank" title="">尼姆</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"></td>
			<td>			
				
					3:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"><a href="soccer/team/325" target="_blank" title="">尼奥尔</a></td>
			<td>			
				
					1:2
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875492/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875492/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875492/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-11-08 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5025" target="_blank" title="">奥尔良</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133813.png"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"><a href="soccer/team/313" target="_blank" title="">克莱蒙</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875493/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875493/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875493/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2014-11-08 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/267" target="_blank" title="">索肖</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327164251.jpg"><a href="soccer/team/2141" target="_blank" title="">阿雅GFCO</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875494/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875494/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875494/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-11-08 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2103" target="_blank" title="">图尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"></td>
			<td>			
				
					2:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"><a href="soccer/team/215" target="_blank" title="">欧塞尔</a></td>
			<td>			
				
					2:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875495/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875495/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875495/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2014-11-08 21:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/306" target="_blank" title="">布雷斯特</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"><a href="soccer/team/335" target="_blank" title="">勒阿弗尔</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875489/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875489/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875489/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-11-11 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/301" target="_blank" title="">南锡</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"></td>
			<td>			
				
					3:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"><a href="soccer/team/374" target="_blank" title="">克雷泰伊</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875491/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875491/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875491/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_15" class="zstab" style="display: none;">
	<thead>
		<tr>
			<th width="127">时间</th>
			<th width="165">主队</th>
			<th width="33">比分</th>
			<th width="165">客队</th>
			<th width="65">半场</th>
			<th width="153">让球</th>
			<th width="66">数据</th>
			<!-- <th width="90">时间</th>
            <th width="50">主队</th>
            <th width="30">比分</th>
            <th width="50">客队</th>
            <th width="45">半场</th>
            <th width="65">让球</th>
            <th width="55">数据</th> -->
		</tr>
	</thead>

	
	
		
			<tbody><tr>
				
			<td>2014-11-22 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/194" target="_blank" title="">阿雅克肖</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162816.jpg"><a href="soccer/team/304" target="_blank" title="">昂热</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875440/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875440/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875440/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-11-22 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/215" target="_blank" title="">欧塞尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"></td>
			<td>			
				
					3:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201326174356.jpg"><a href="soccer/team/308" target="_blank" title="">沙托鲁</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875500/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875500/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875500/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2014-11-22 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/313" target="_blank" title="">克莱蒙</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"></td>
			<td>			
				
					3:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012716162543.jpg"><a href="soccer/team/6037" target="_blank" title="">阿尔勒</a></td>
			<td>			
				
					3:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875501/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875501/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875501/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-11-22 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/374" target="_blank" title="">克雷泰伊</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"><a href="soccer/team/1744" target="_blank" title="">尼姆</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875502/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875502/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875502/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2014-11-22 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/320" target="_blank" title="">第戎</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133813.png"><a href="soccer/team/5025" target="_blank" title="">奥尔良</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875503/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875503/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875503/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-11-22 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2141" target="_blank" title="">阿雅GFCO</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327164251.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"><a href="soccer/team/330" target="_blank" title="">拉瓦勒</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875504/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875504/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875504/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2014-11-22 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/325" target="_blank" title="">尼奥尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"><a href="soccer/team/2103" target="_blank" title="">图尔</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875506/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875506/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875506/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-11-22 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2104" target="_blank" title="">瓦朗谢纳</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"><a href="soccer/team/306" target="_blank" title="">布雷斯特</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875441/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875441/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875441/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2014-11-22 21:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/335" target="_blank" title="">勒阿弗尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"><a href="soccer/team/267" target="_blank" title="">索肖</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875505/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875505/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875505/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-11-25 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/366" target="_blank" title="">特鲁瓦</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122444809.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"><a href="soccer/team/301" target="_blank" title="">南锡</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875507/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875507/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875507/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_16" class="zstab" style="display: none;">
	<thead>
		<tr>
			<th width="127">时间</th>
			<th width="165">主队</th>
			<th width="33">比分</th>
			<th width="165">客队</th>
			<th width="65">半场</th>
			<th width="153">让球</th>
			<th width="66">数据</th>
			<!-- <th width="90">时间</th>
            <th width="50">主队</th>
            <th width="30">比分</th>
            <th width="50">客队</th>
            <th width="45">半场</th>
            <th width="65">让球</th>
            <th width="55">数据</th> -->
		</tr>
	</thead>

	
	
		
			<tbody><tr>
				
			<td>2014-11-29 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/6037" target="_blank" title="">阿尔勒</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012716162543.jpg"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"><a href="soccer/team/320" target="_blank" title="">第戎</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875452/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875452/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875452/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-11-29 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/306" target="_blank" title="">布雷斯特</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"><a href="soccer/team/374" target="_blank" title="">克雷泰伊</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875453/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875453/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875453/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2014-11-29 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/330" target="_blank" title="">拉瓦勒</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"><a href="soccer/team/215" target="_blank" title="">欧塞尔</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875514/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875514/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875514/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-11-29 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/308" target="_blank" title="">沙托鲁</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201326174356.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"><a href="soccer/team/325" target="_blank" title="">尼奥尔</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875515/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875515/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875515/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2014-11-29 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1744" target="_blank" title="">尼姆</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"></td>
			<td>			
				
					3:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"><a href="soccer/team/335" target="_blank" title="">勒阿弗尔</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875517/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875517/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875517/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-11-29 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5025" target="_blank" title="">奥尔良</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133813.png"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"><a href="soccer/team/194" target="_blank" title="">阿雅克肖</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875518/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875518/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875518/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2014-11-29 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/267" target="_blank" title="">索肖</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"><a href="soccer/team/313" target="_blank" title="">克莱蒙</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875519/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875519/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875519/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-11-29 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2103" target="_blank" title="">图尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327164251.jpg"><a href="soccer/team/2141" target="_blank" title="">阿雅GFCO</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875520/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875520/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875520/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2014-11-29 21:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/304" target="_blank" title="">昂热</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162816.jpg"></td>
			<td>			
				
					0:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122444809.jpg"><a href="soccer/team/366" target="_blank" title="">特鲁瓦</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875451/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875451/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875451/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-12-02 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/301" target="_blank" title="">南锡</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"><a href="soccer/team/2104" target="_blank" title="">瓦朗谢纳</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875516/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875516/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875516/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_17" class="zstab" style="display: none;">
	<thead>
		<tr>
			<th width="127">时间</th>
			<th width="165">主队</th>
			<th width="33">比分</th>
			<th width="165">客队</th>
			<th width="65">半场</th>
			<th width="153">让球</th>
			<th width="66">数据</th>
			<!-- <th width="90">时间</th>
            <th width="50">主队</th>
            <th width="30">比分</th>
            <th width="50">客队</th>
            <th width="45">半场</th>
            <th width="65">让球</th>
            <th width="55">数据</th> -->
		</tr>
	</thead>

	
	
		
			<tbody><tr>
				
			<td>2014-12-13 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/194" target="_blank" title="">阿雅克肖</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"><a href="soccer/team/301" target="_blank" title="">南锡</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875539/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875539/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875539/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-12-13 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/313" target="_blank" title="">克莱蒙</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"><a href="soccer/team/2103" target="_blank" title="">图尔</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875540/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875540/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875540/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2014-12-13 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/374" target="_blank" title="">克雷泰伊</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012716162543.jpg"><a href="soccer/team/6037" target="_blank" title="">阿尔勒</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875541/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875541/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875541/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-12-13 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2141" target="_blank" title="">阿雅GFCO</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327164251.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"><a href="soccer/team/215" target="_blank" title="">欧塞尔</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875543/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875543/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875543/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2014-12-13 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/335" target="_blank" title="">勒阿弗尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"><a href="soccer/team/330" target="_blank" title="">拉瓦勒</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875544/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875544/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875544/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-12-13 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/325" target="_blank" title="">尼奥尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"><a href="soccer/team/267" target="_blank" title="">索肖</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875545/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875545/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875545/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2014-12-13 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5025" target="_blank" title="">奥尔良</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133813.png"></td>
			<td>			
				
					2:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162816.jpg"><a href="soccer/team/304" target="_blank" title="">昂热</a></td>
			<td>			
				
					2:3
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875546/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875546/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875546/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-12-13 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2104" target="_blank" title="">瓦朗谢纳</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201326174356.jpg"><a href="soccer/team/308" target="_blank" title="">沙托鲁</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875548/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875548/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875548/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2014-12-13 21:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/320" target="_blank" title="">第戎</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"><a href="soccer/team/306" target="_blank" title="">布雷斯特</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875542/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875542/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875542/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-12-16 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/366" target="_blank" title="">特鲁瓦</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122444809.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"><a href="soccer/team/1744" target="_blank" title="">尼姆</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				一球/球半
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875547/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875547/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875547/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_18" class="zstab" style="display: none;">
	<thead>
		<tr>
			<th width="127">时间</th>
			<th width="165">主队</th>
			<th width="33">比分</th>
			<th width="165">客队</th>
			<th width="65">半场</th>
			<th width="153">让球</th>
			<th width="66">数据</th>
			<!-- <th width="90">时间</th>
            <th width="50">主队</th>
            <th width="30">比分</th>
            <th width="50">客队</th>
            <th width="45">半场</th>
            <th width="65">让球</th>
            <th width="55">数据</th> -->
		</tr>
	</thead>

	
	
		
			<tbody><tr>
				
			<td>2014-12-19 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/267" target="_blank" title="">索肖</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162816.jpg"><a href="soccer/team/304" target="_blank" title="">昂热</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875575/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875575/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875575/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-12-20 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/215" target="_blank" title="">欧塞尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"><a href="soccer/team/325" target="_blank" title="">尼奥尔</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875568/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875568/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875568/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2014-12-20 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/330" target="_blank" title="">拉瓦勒</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"></td>
			<td>			
				
					3:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"><a href="soccer/team/2104" target="_blank" title="">瓦朗谢纳</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875571/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875571/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875571/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-12-20 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/308" target="_blank" title="">沙托鲁</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201326174356.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"><a href="soccer/team/320" target="_blank" title="">第戎</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				受半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875572/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875572/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875572/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2014-12-20 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/301" target="_blank" title="">南锡</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"><a href="soccer/team/313" target="_blank" title="">克莱蒙</a></td>
			<td>			
				
					1:2
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875573/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875573/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875573/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-12-20 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1744" target="_blank" title="">尼姆</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133813.png"><a href="soccer/team/5025" target="_blank" title="">奥尔良</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875574/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875574/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875574/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2014-12-20 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2103" target="_blank" title="">图尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"></td>
			<td>			
				
					3:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"><a href="soccer/team/335" target="_blank" title="">勒阿弗尔</a></td>
			<td>			
				
					2:1
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875576/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875576/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875576/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-12-20 21:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/6037" target="_blank" title="">阿尔勒</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012716162543.jpg"></td>
			<td>			
				
					0:4
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122444809.jpg"><a href="soccer/team/366" target="_blank" title="">特鲁瓦</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875567/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875567/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875567/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2014-12-20 21:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/306" target="_blank" title="">布雷斯特</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"><a href="soccer/team/194" target="_blank" title="">阿雅克肖</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875569/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875569/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875569/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2014-12-20 21:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2141" target="_blank" title="">阿雅GFCO</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327164251.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"><a href="soccer/team/374" target="_blank" title="">克雷泰伊</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875570/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875570/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875570/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_19" class="zstab" style="display: none;">
	<thead>
		<tr>
			<th width="127">时间</th>
			<th width="165">主队</th>
			<th width="33">比分</th>
			<th width="165">客队</th>
			<th width="65">半场</th>
			<th width="153">让球</th>
			<th width="66">数据</th>
			<!-- <th width="90">时间</th>
            <th width="50">主队</th>
            <th width="30">比分</th>
            <th width="50">客队</th>
            <th width="45">半场</th>
            <th width="65">让球</th>
            <th width="55">数据</th> -->
		</tr>
	</thead>

	
	
		
			<tbody><tr>
				
			<td>2015-01-10 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/194" target="_blank" title="">阿雅克肖</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"><a href="soccer/team/1744" target="_blank" title="">尼姆</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875577/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875577/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875577/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-01-10 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/304" target="_blank" title="">昂热</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162816.jpg"></td>
			<td>			
				
					3:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"><a href="soccer/team/301" target="_blank" title="">南锡</a></td>
			<td>			
				
					2:1
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875578/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875578/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875578/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-01-10 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/313" target="_blank" title="">克莱蒙</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"><a href="soccer/team/330" target="_blank" title="">拉瓦勒</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875579/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875579/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875579/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-01-10 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/374" target="_blank" title="">克雷泰伊</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"><a href="soccer/team/215" target="_blank" title="">欧塞尔</a></td>
			<td>			
				
					2:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875580/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875580/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875580/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-01-10 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/320" target="_blank" title="">第戎</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"></td>
			<td>			
				
					0:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"><a href="soccer/team/2103" target="_blank" title="">图尔</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875581/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875581/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875581/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-01-10 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/335" target="_blank" title="">勒阿弗尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201326174356.jpg"><a href="soccer/team/308" target="_blank" title="">沙托鲁</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875508/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875508/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875508/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-01-10 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/325" target="_blank" title="">尼奥尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327164251.jpg"><a href="soccer/team/2141" target="_blank" title="">阿雅GFCO</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875509/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875509/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875509/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-01-10 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5025" target="_blank" title="">奥尔良</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133813.png"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012716162543.jpg"><a href="soccer/team/6037" target="_blank" title="">阿尔勒</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875582/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875582/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875582/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-01-10 21:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/366" target="_blank" title="">特鲁瓦</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122444809.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"><a href="soccer/team/306" target="_blank" title="">布雷斯特</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875583/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875583/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875583/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-01-13 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2104" target="_blank" title="">瓦朗谢纳</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"><a href="soccer/team/267" target="_blank" title="">索肖</a></td>
			<td>			
				
					1:2
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875584/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875584/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875584/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_38" class="zstab" style="display: none;">
	<thead>
		<tr>
			<th width="127">时间</th>
			<th width="165">主队</th>
			<th width="33">比分</th>
			<th width="165">客队</th>
			<th width="65">半场</th>
			<th width="153">让球</th>
			<th width="66">数据</th>
			<!-- <th width="90">时间</th>
            <th width="50">主队</th>
            <th width="30">比分</th>
            <th width="50">客队</th>
            <th width="45">半场</th>
            <th width="65">让球</th>
            <th width="55">数据</th> -->
		</tr>
	</thead>

	
	
		
			<tbody><tr>
				
			<td>2015-05-23 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/194" target="_blank" title="">阿雅克肖</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012716162543.jpg"><a href="soccer/team/6037" target="_blank" title="">阿尔勒</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875912/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875912/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875912/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-05-23 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/304" target="_blank" title="">昂热</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162816.jpg"></td>
			<td>			
				
					3:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"><a href="soccer/team/1744" target="_blank" title="">尼姆</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				一球/球半
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875913/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875913/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875913/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-05-23 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/313" target="_blank" title="">克莱蒙</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"><a href="soccer/team/306" target="_blank" title="">布雷斯特</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875914/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875914/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875914/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-05-23 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/374" target="_blank" title="">克雷泰伊</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"></td>
			<td>			
				
					1:4
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"><a href="soccer/team/2103" target="_blank" title="">图尔</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875915/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875915/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875915/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-05-23 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/320" target="_blank" title="">第戎</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"></td>
			<td>			
				
					3:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"><a href="soccer/team/301" target="_blank" title="">南锡</a></td>
			<td>			
				
					2:1
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875916/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875916/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875916/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-05-23 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/335" target="_blank" title="">勒阿弗尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"><a href="soccer/team/215" target="_blank" title="">欧塞尔</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875917/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875917/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875917/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-05-23 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/325" target="_blank" title="">尼奥尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"></td>
			<td>			
				
					0:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"><a href="soccer/team/330" target="_blank" title="">拉瓦勒</a></td>
			<td>			
				
					0:3
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875918/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875918/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875918/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-05-23 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5025" target="_blank" title="">奥尔良</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133813.png"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"><a href="soccer/team/267" target="_blank" title="">索肖</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875919/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875919/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875919/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-05-23 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/366" target="_blank" title="">特鲁瓦</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122444809.jpg"></td>
			<td>			
				
					4:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201326174356.jpg"><a href="soccer/team/308" target="_blank" title="">沙托鲁</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				球半/两球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875920/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875920/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875920/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-05-23 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2104" target="_blank" title="">瓦朗谢纳</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327164251.jpg"><a href="soccer/team/2141" target="_blank" title="">阿雅GFCO</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875921/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875921/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875921/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_37" class="zstab" style="display: none;">
	<thead>
		<tr>
			<th width="127">时间</th>
			<th width="165">主队</th>
			<th width="33">比分</th>
			<th width="165">客队</th>
			<th width="65">半场</th>
			<th width="153">让球</th>
			<th width="66">数据</th>
			<!-- <th width="90">时间</th>
            <th width="50">主队</th>
            <th width="30">比分</th>
            <th width="50">客队</th>
            <th width="45">半场</th>
            <th width="65">让球</th>
            <th width="55">数据</th> -->
		</tr>
	</thead>

	
	
		
			<tbody><tr>
				
			<td>2015-05-16 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/6037" target="_blank" title="">阿尔勒</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012716162543.jpg"></td>
			<td>			
				
					4:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133813.png"><a href="soccer/team/5025" target="_blank" title="">奥尔良</a></td>
			<td>			
				
					2:1
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875893/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875893/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875893/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-05-16 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/215" target="_blank" title="">欧塞尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"><a href="soccer/team/374" target="_blank" title="">克雷泰伊</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875894/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875894/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875894/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-05-16 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/306" target="_blank" title="">布雷斯特</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122444809.jpg"><a href="soccer/team/366" target="_blank" title="">特鲁瓦</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875895/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875895/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875895/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-05-16 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2141" target="_blank" title="">阿雅GFCO</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327164251.jpg"></td>
			<td>			
				
					3:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"><a href="soccer/team/325" target="_blank" title="">尼奥尔</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875896/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875896/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875896/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-05-16 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/330" target="_blank" title="">拉瓦勒</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"></td>
			<td>			
				
					3:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"><a href="soccer/team/313" target="_blank" title="">克莱蒙</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875897/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875897/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875897/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-05-16 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/308" target="_blank" title="">沙托鲁</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201326174356.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"><a href="soccer/team/335" target="_blank" title="">勒阿弗尔</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875898/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875898/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875898/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-05-16 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/301" target="_blank" title="">南锡</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162816.jpg"><a href="soccer/team/304" target="_blank" title="">昂热</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875899/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875899/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875899/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-05-16 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1744" target="_blank" title="">尼姆</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"><a href="soccer/team/194" target="_blank" title="">阿雅克肖</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875900/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875900/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875900/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-05-16 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/267" target="_blank" title="">索肖</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"><a href="soccer/team/2104" target="_blank" title="">瓦朗谢纳</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875901/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875901/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875901/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-05-16 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2103" target="_blank" title="">图尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"><a href="soccer/team/320" target="_blank" title="">第戎</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875902/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875902/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875902/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_36" class="zstab" style="display: none;">
	<thead>
		<tr>
			<th width="127">时间</th>
			<th width="165">主队</th>
			<th width="33">比分</th>
			<th width="165">客队</th>
			<th width="65">半场</th>
			<th width="153">让球</th>
			<th width="66">数据</th>
			<!-- <th width="90">时间</th>
            <th width="50">主队</th>
            <th width="30">比分</th>
            <th width="50">客队</th>
            <th width="45">半场</th>
            <th width="65">让球</th>
            <th width="55">数据</th> -->
		</tr>
	</thead>

	
	
		
			<tbody><tr>
				
			<td>2015-05-09 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/194" target="_blank" title="">阿雅克肖</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"><a href="soccer/team/306" target="_blank" title="">布雷斯特</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875883/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875883/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875883/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-05-09 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/313" target="_blank" title="">克莱蒙</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"><a href="soccer/team/301" target="_blank" title="">南锡</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				受半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875885/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875885/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875885/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-05-09 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/320" target="_blank" title="">第戎</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201326174356.jpg"><a href="soccer/team/308" target="_blank" title="">沙托鲁</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				球半/两球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875887/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875887/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875887/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-05-09 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/335" target="_blank" title="">勒阿弗尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"><a href="soccer/team/2103" target="_blank" title="">图尔</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875888/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875888/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875888/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-05-09 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/325" target="_blank" title="">尼奥尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"><a href="soccer/team/215" target="_blank" title="">欧塞尔</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875889/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875889/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875889/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-05-09 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5025" target="_blank" title="">奥尔良</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133813.png"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"><a href="soccer/team/1744" target="_blank" title="">尼姆</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875890/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875890/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875890/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-05-09 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/366" target="_blank" title="">特鲁瓦</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122444809.jpg"></td>
			<td>			
				
					4:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012716162543.jpg"><a href="soccer/team/6037" target="_blank" title="">阿尔勒</a></td>
			<td>			
				
					3:0
							
			</td>
			<td>
			
				一球/球半
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875891/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875891/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875891/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-05-09 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2104" target="_blank" title="">瓦朗谢纳</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"><a href="soccer/team/330" target="_blank" title="">拉瓦勒</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875892/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875892/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875892/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-05-09 20:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/374" target="_blank" title="">克雷泰伊</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327164251.jpg"><a href="soccer/team/2141" target="_blank" title="">阿雅GFCO</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875886/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875886/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875886/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-05-12 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/304" target="_blank" title="">昂热</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162816.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"><a href="soccer/team/267" target="_blank" title="">索肖</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875884/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875884/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875884/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_35" class="zstab" style="display: none;">
	<thead>
		<tr>
			<th width="127">时间</th>
			<th width="165">主队</th>
			<th width="33">比分</th>
			<th width="165">客队</th>
			<th width="65">半场</th>
			<th width="153">让球</th>
			<th width="66">数据</th>
			<!-- <th width="90">时间</th>
            <th width="50">主队</th>
            <th width="30">比分</th>
            <th width="50">客队</th>
            <th width="45">半场</th>
            <th width="65">让球</th>
            <th width="55">数据</th> -->
		</tr>
	</thead>

	
	
		
			<tbody><tr>
				
			<td>2015-05-02 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/304" target="_blank" title="">昂热</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162816.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133813.png"><a href="soccer/team/5025" target="_blank" title="">奥尔良</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875855/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875855/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875855/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-05-02 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/6037" target="_blank" title="">阿尔勒</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012716162543.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"><a href="soccer/team/374" target="_blank" title="">克雷泰伊</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875856/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875856/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875856/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-05-02 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/215" target="_blank" title="">欧塞尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327164251.jpg"><a href="soccer/team/2141" target="_blank" title="">阿雅GFCO</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875857/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875857/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875857/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-05-02 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/330" target="_blank" title="">拉瓦勒</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"><a href="soccer/team/335" target="_blank" title="">勒阿弗尔</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875859/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875859/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875859/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-05-02 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/308" target="_blank" title="">沙托鲁</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201326174356.jpg"></td>
			<td>			
				
					3:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"><a href="soccer/team/2104" target="_blank" title="">瓦朗谢纳</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875860/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875860/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875860/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-05-02 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/301" target="_blank" title="">南锡</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"><a href="soccer/team/194" target="_blank" title="">阿雅克肖</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875861/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875861/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875861/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-05-02 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/267" target="_blank" title="">索肖</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"></td>
			<td>			
				
					2:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"><a href="soccer/team/325" target="_blank" title="">尼奥尔</a></td>
			<td>			
				
					2:2
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875863/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875863/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875863/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-05-02 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2103" target="_blank" title="">图尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"><a href="soccer/team/313" target="_blank" title="">克莱蒙</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875864/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875864/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875864/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-05-02 20:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1744" target="_blank" title="">尼姆</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122444809.jpg"><a href="soccer/team/366" target="_blank" title="">特鲁瓦</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				受半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875862/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875862/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875862/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-05-05 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/306" target="_blank" title="">布雷斯特</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"><a href="soccer/team/320" target="_blank" title="">第戎</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875858/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875858/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875858/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_34" class="zstab" style="display: none;">
	<thead>
		<tr>
			<th width="127">时间</th>
			<th width="165">主队</th>
			<th width="33">比分</th>
			<th width="165">客队</th>
			<th width="65">半场</th>
			<th width="153">让球</th>
			<th width="66">数据</th>
			<!-- <th width="90">时间</th>
            <th width="50">主队</th>
            <th width="30">比分</th>
            <th width="50">客队</th>
            <th width="45">半场</th>
            <th width="65">让球</th>
            <th width="55">数据</th> -->
		</tr>
	</thead>

	
	
		
			<tbody><tr>
				
			<td>2015-04-28 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/313" target="_blank" title="">克莱蒙</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"><a href="soccer/team/267" target="_blank" title="">索肖</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875847/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875847/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875847/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-04-29 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/194" target="_blank" title="">阿雅克肖</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"></td>
			<td>			
				
					2:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133813.png"><a href="soccer/team/5025" target="_blank" title="">奥尔良</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875845/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875845/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875845/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-04-29 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/215" target="_blank" title="">欧塞尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"><a href="soccer/team/330" target="_blank" title="">拉瓦勒</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875846/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875846/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875846/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-04-29 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/374" target="_blank" title="">克雷泰伊</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"><a href="soccer/team/306" target="_blank" title="">布雷斯特</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875848/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875848/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875848/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-04-29 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/320" target="_blank" title="">第戎</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012716162543.jpg"><a href="soccer/team/6037" target="_blank" title="">阿尔勒</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				一球/球半
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875849/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875849/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875849/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-04-29 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2141" target="_blank" title="">阿雅GFCO</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327164251.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"><a href="soccer/team/2103" target="_blank" title="">图尔</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875850/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875850/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875850/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-04-29 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/335" target="_blank" title="">勒阿弗尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"><a href="soccer/team/1744" target="_blank" title="">尼姆</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875851/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875851/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875851/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-04-29 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/325" target="_blank" title="">尼奥尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"></td>
			<td>			
				
					3:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201326174356.jpg"><a href="soccer/team/308" target="_blank" title="">沙托鲁</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875852/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875852/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875852/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-04-29 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/366" target="_blank" title="">特鲁瓦</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122444809.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162816.jpg"><a href="soccer/team/304" target="_blank" title="">昂热</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875853/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875853/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875853/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-04-29 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2104" target="_blank" title="">瓦朗谢纳</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"><a href="soccer/team/301" target="_blank" title="">南锡</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				受半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875854/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875854/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875854/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_33" class="zstab" style="display: none;">
	<thead>
		<tr>
			<th width="127">时间</th>
			<th width="165">主队</th>
			<th width="33">比分</th>
			<th width="165">客队</th>
			<th width="65">半场</th>
			<th width="153">让球</th>
			<th width="66">数据</th>
			<!-- <th width="90">时间</th>
            <th width="50">主队</th>
            <th width="30">比分</th>
            <th width="50">客队</th>
            <th width="45">半场</th>
            <th width="65">让球</th>
            <th width="55">数据</th> -->
		</tr>
	</thead>

	
	
		
			<tbody><tr>
				
			<td>2015-04-25 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/304" target="_blank" title="">昂热</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162816.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"><a href="soccer/team/194" target="_blank" title="">阿雅克肖</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875835/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875835/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875835/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-04-25 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/6037" target="_blank" title="">阿尔勒</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012716162543.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"><a href="soccer/team/313" target="_blank" title="">克莱蒙</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875836/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875836/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875836/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-04-25 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/306" target="_blank" title="">布雷斯特</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"><a href="soccer/team/2104" target="_blank" title="">瓦朗谢纳</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875837/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875837/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875837/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-04-25 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/330" target="_blank" title="">拉瓦勒</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327164251.jpg"><a href="soccer/team/2141" target="_blank" title="">阿雅GFCO</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875838/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875838/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875838/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-04-25 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/308" target="_blank" title="">沙托鲁</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201326174356.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"><a href="soccer/team/215" target="_blank" title="">欧塞尔</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				受半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875839/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875839/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875839/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-04-25 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/301" target="_blank" title="">南锡</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122444809.jpg"><a href="soccer/team/366" target="_blank" title="">特鲁瓦</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875840/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875840/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875840/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-04-25 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1744" target="_blank" title="">尼姆</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"><a href="soccer/team/374" target="_blank" title="">克雷泰伊</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875841/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875841/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875841/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-04-25 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/267" target="_blank" title="">索肖</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"><a href="soccer/team/335" target="_blank" title="">勒阿弗尔</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875843/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875843/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875843/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-04-25 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2103" target="_blank" title="">图尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"><a href="soccer/team/325" target="_blank" title="">尼奥尔</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875844/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875844/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875844/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-04-25 20:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5025" target="_blank" title="">奥尔良</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133813.png"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"><a href="soccer/team/320" target="_blank" title="">第戎</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875842/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875842/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875842/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_32" class="zstab" style="display: none;">
	<thead>
		<tr>
			<th width="127">时间</th>
			<th width="165">主队</th>
			<th width="33">比分</th>
			<th width="165">客队</th>
			<th width="65">半场</th>
			<th width="153">让球</th>
			<th width="66">数据</th>
			<!-- <th width="90">时间</th>
            <th width="50">主队</th>
            <th width="30">比分</th>
            <th width="50">客队</th>
            <th width="45">半场</th>
            <th width="65">让球</th>
            <th width="55">数据</th> -->
		</tr>
	</thead>

	
	
		
			<tbody><tr>
				
			<td>2015-04-18 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/215" target="_blank" title="">欧塞尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"></td>
			<td>			
				
					2:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"><a href="soccer/team/2103" target="_blank" title="">图尔</a></td>
			<td>			
				
					1:2
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875816/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875816/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875816/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-04-18 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/313" target="_blank" title="">克莱蒙</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133813.png"><a href="soccer/team/5025" target="_blank" title="">奥尔良</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875817/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875817/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875817/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-04-18 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/374" target="_blank" title="">克雷泰伊</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"><a href="soccer/team/301" target="_blank" title="">南锡</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875818/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875818/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875818/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-04-18 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2141" target="_blank" title="">阿雅GFCO</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327164251.jpg"></td>
			<td>			
				
					3:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"><a href="soccer/team/267" target="_blank" title="">索肖</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875820/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875820/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875820/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-04-18 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/330" target="_blank" title="">拉瓦勒</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201326174356.jpg"><a href="soccer/team/308" target="_blank" title="">沙托鲁</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875821/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875821/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875821/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-04-18 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/325" target="_blank" title="">尼奥尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"></td>
			<td>			
				
					3:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"><a href="soccer/team/1744" target="_blank" title="">尼姆</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875823/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875823/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875823/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-04-18 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/366" target="_blank" title="">特鲁瓦</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122444809.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"><a href="soccer/team/194" target="_blank" title="">阿雅克肖</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875824/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875824/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875824/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-04-18 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2104" target="_blank" title="">瓦朗谢纳</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"></td>
			<td>			
				
					3:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012716162543.jpg"><a href="soccer/team/6037" target="_blank" title="">阿尔勒</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875825/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875825/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875825/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-04-18 20:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/320" target="_blank" title="">第戎</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162816.jpg"><a href="soccer/team/304" target="_blank" title="">昂热</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875819/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875819/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875819/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-04-21 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/335" target="_blank" title="">勒阿弗尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"><a href="soccer/team/306" target="_blank" title="">布雷斯特</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875822/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875822/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875822/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_31" class="zstab" style="display: none;">
	<thead>
		<tr>
			<th width="127">时间</th>
			<th width="165">主队</th>
			<th width="33">比分</th>
			<th width="165">客队</th>
			<th width="65">半场</th>
			<th width="153">让球</th>
			<th width="66">数据</th>
			<!-- <th width="90">时间</th>
            <th width="50">主队</th>
            <th width="30">比分</th>
            <th width="50">客队</th>
            <th width="45">半场</th>
            <th width="65">让球</th>
            <th width="55">数据</th> -->
		</tr>
	</thead>

	
	
		
			<tbody><tr>
				
			<td>2015-04-11 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/194" target="_blank" title="">阿雅克肖</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"><a href="soccer/team/320" target="_blank" title="">第戎</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875797/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875797/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875797/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-04-11 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/6037" target="_blank" title="">阿尔勒</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012716162543.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"><a href="soccer/team/335" target="_blank" title="">勒阿弗尔</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875799/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875799/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875799/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-04-11 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/308" target="_blank" title="">沙托鲁</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201326174356.jpg"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327164251.jpg"><a href="soccer/team/2141" target="_blank" title="">阿雅GFCO</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875801/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875801/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875801/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-04-11 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/301" target="_blank" title="">南锡</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"><a href="soccer/team/325" target="_blank" title="">尼奥尔</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875802/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875802/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875802/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-04-11 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1744" target="_blank" title="">尼姆</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"><a href="soccer/team/313" target="_blank" title="">克莱蒙</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875803/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875803/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875803/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-04-11 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5025" target="_blank" title="">奥尔良</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133813.png"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122444809.jpg"><a href="soccer/team/366" target="_blank" title="">特鲁瓦</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875804/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875804/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875804/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-04-11 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/267" target="_blank" title="">索肖</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"><a href="soccer/team/374" target="_blank" title="">克雷泰伊</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875805/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875805/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875805/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-04-11 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2103" target="_blank" title="">图尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"><a href="soccer/team/330" target="_blank" title="">拉瓦勒</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875806/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875806/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875806/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-04-11 20:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/306" target="_blank" title="">布雷斯特</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"><a href="soccer/team/215" target="_blank" title="">欧塞尔</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875800/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875800/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875800/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-04-14 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/304" target="_blank" title="">昂热</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162816.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"><a href="soccer/team/2104" target="_blank" title="">瓦朗谢纳</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875798/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875798/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875798/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_30" class="zstab" style="display: none;">
	<thead>
		<tr>
			<th width="127">时间</th>
			<th width="165">主队</th>
			<th width="33">比分</th>
			<th width="165">客队</th>
			<th width="65">半场</th>
			<th width="153">让球</th>
			<th width="66">数据</th>
			<!-- <th width="90">时间</th>
            <th width="50">主队</th>
            <th width="30">比分</th>
            <th width="50">客队</th>
            <th width="45">半场</th>
            <th width="65">让球</th>
            <th width="55">数据</th> -->
		</tr>
	</thead>

	
	
		
			<tbody><tr>
				
			<td>2015-04-04 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/215" target="_blank" title="">欧塞尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"></td>
			<td>			
				
					3:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"><a href="soccer/team/1744" target="_blank" title="">尼姆</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875709/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875709/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875709/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-04-04 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/313" target="_blank" title="">克莱蒙</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162816.jpg"><a href="soccer/team/304" target="_blank" title="">昂热</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875710/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875710/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875710/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-04-04 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/374" target="_blank" title="">克雷泰伊</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133813.png"><a href="soccer/team/5025" target="_blank" title="">奥尔良</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875711/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875711/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875711/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-04-04 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/330" target="_blank" title="">拉瓦勒</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"><a href="soccer/team/267" target="_blank" title="">索肖</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875774/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875774/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875774/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-04-04 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/335" target="_blank" title="">勒阿弗尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"><a href="soccer/team/301" target="_blank" title="">南锡</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875775/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875775/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875775/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-04-04 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/325" target="_blank" title="">尼奥尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012716162543.jpg"><a href="soccer/team/6037" target="_blank" title="">阿尔勒</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875776/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875776/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875776/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-04-04 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2103" target="_blank" title="">图尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201326174356.jpg"><a href="soccer/team/308" target="_blank" title="">沙托鲁</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875777/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875777/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875777/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-04-04 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2104" target="_blank" title="">瓦朗谢纳</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"><a href="soccer/team/194" target="_blank" title="">阿雅克肖</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875778/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875778/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875778/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-04-04 20:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/320" target="_blank" title="">第戎</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122444809.jpg"><a href="soccer/team/366" target="_blank" title="">特鲁瓦</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875712/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875712/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875712/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-04-07 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2141" target="_blank" title="">阿雅GFCO</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327164251.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"><a href="soccer/team/306" target="_blank" title="">布雷斯特</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875713/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875713/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875713/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_29" class="zstab" style="display: none;">
	<thead>
		<tr>
			<th width="127">时间</th>
			<th width="165">主队</th>
			<th width="33">比分</th>
			<th width="165">客队</th>
			<th width="65">半场</th>
			<th width="153">让球</th>
			<th width="66">数据</th>
			<!-- <th width="90">时间</th>
            <th width="50">主队</th>
            <th width="30">比分</th>
            <th width="50">客队</th>
            <th width="45">半场</th>
            <th width="65">让球</th>
            <th width="55">数据</th> -->
		</tr>
	</thead>

	
	
		
			<tbody><tr>
				
			<td>2015-03-21 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/194" target="_blank" title="">阿雅克肖</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"><a href="soccer/team/313" target="_blank" title="">克莱蒙</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875757/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875757/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875757/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-03-21 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/304" target="_blank" title="">昂热</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162816.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"><a href="soccer/team/335" target="_blank" title="">勒阿弗尔</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875758/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875758/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875758/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-03-21 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/6037" target="_blank" title="">阿尔勒</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012716162543.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327164251.jpg"><a href="soccer/team/2141" target="_blank" title="">阿雅GFCO</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875759/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875759/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875759/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-03-21 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/320" target="_blank" title="">第戎</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"><a href="soccer/team/2104" target="_blank" title="">瓦朗谢纳</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875761/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875761/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875761/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-03-21 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1744" target="_blank" title="">尼姆</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"></td>
			<td>			
				
					3:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"><a href="soccer/team/2103" target="_blank" title="">图尔</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875763/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875763/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875763/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-03-21 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5025" target="_blank" title="">奥尔良</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133813.png"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"><a href="soccer/team/325" target="_blank" title="">尼奥尔</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875764/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875764/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875764/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-03-21 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/267" target="_blank" title="">索肖</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"></td>
			<td>			
				
					3:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201326174356.jpg"><a href="soccer/team/308" target="_blank" title="">沙托鲁</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875765/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875765/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875765/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-03-21 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/366" target="_blank" title="">特鲁瓦</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122444809.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"><a href="soccer/team/374" target="_blank" title="">克雷泰伊</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875766/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875766/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875766/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-03-21 21:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/306" target="_blank" title="">布雷斯特</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"><a href="soccer/team/330" target="_blank" title="">拉瓦勒</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875760/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875760/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875760/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-03-24 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/301" target="_blank" title="">南锡</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"><a href="soccer/team/215" target="_blank" title="">欧塞尔</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875762/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875762/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875762/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_28" class="zstab" style="display: none;">
	<thead>
		<tr>
			<th width="127">时间</th>
			<th width="165">主队</th>
			<th width="33">比分</th>
			<th width="165">客队</th>
			<th width="65">半场</th>
			<th width="153">让球</th>
			<th width="66">数据</th>
			<!-- <th width="90">时间</th>
            <th width="50">主队</th>
            <th width="30">比分</th>
            <th width="50">客队</th>
            <th width="45">半场</th>
            <th width="65">让球</th>
            <th width="55">数据</th> -->
		</tr>
	</thead>

	
	
		
			<tbody><tr>
				
			<td>2015-03-14 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/313" target="_blank" title="">克莱蒙</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"></td>
			<td>			
				
					2:5
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"><a href="soccer/team/320" target="_blank" title="">第戎</a></td>
			<td>			
				
					1:3
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875739/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875739/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875739/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-03-14 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/374" target="_blank" title="">克雷泰伊</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162816.jpg"><a href="soccer/team/304" target="_blank" title="">昂热</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875740/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875740/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875740/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-03-14 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2141" target="_blank" title="">阿雅GFCO</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327164251.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"><a href="soccer/team/301" target="_blank" title="">南锡</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875741/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875741/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875741/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-03-14 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/330" target="_blank" title="">拉瓦勒</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"><a href="soccer/team/1744" target="_blank" title="">尼姆</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875742/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875742/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875742/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-03-14 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/335" target="_blank" title="">勒阿弗尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"></td>
			<td>			
				
					3:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133813.png"><a href="soccer/team/5025" target="_blank" title="">奥尔良</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875743/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875743/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875743/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-03-14 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/308" target="_blank" title="">沙托鲁</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201326174356.jpg"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012716162543.jpg"><a href="soccer/team/6037" target="_blank" title="">阿尔勒</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875744/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875744/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875744/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-03-14 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/325" target="_blank" title="">尼奥尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"><a href="soccer/team/194" target="_blank" title="">阿雅克肖</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875745/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875745/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875745/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-03-14 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2103" target="_blank" title="">图尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"><a href="soccer/team/306" target="_blank" title="">布雷斯特</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875746/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875746/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875746/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-03-14 21:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/215" target="_blank" title="">欧塞尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"><a href="soccer/team/267" target="_blank" title="">索肖</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875738/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875738/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875738/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-03-17 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2104" target="_blank" title="">瓦朗谢纳</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122444809.jpg"><a href="soccer/team/366" target="_blank" title="">特鲁瓦</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				受半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875747/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875747/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875747/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_27" class="zstab" style="display: none;">
	<thead>
		<tr>
			<th width="127">时间</th>
			<th width="165">主队</th>
			<th width="33">比分</th>
			<th width="165">客队</th>
			<th width="65">半场</th>
			<th width="153">让球</th>
			<th width="66">数据</th>
			<!-- <th width="90">时间</th>
            <th width="50">主队</th>
            <th width="30">比分</th>
            <th width="50">客队</th>
            <th width="45">半场</th>
            <th width="65">让球</th>
            <th width="55">数据</th> -->
		</tr>
	</thead>

	
	
		
			<tbody><tr>
				
			<td>2015-03-07 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/194" target="_blank" title="">阿雅克肖</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"><a href="soccer/team/374" target="_blank" title="">克雷泰伊</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875719/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875719/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875719/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-03-07 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/304" target="_blank" title="">昂热</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162816.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"><a href="soccer/team/325" target="_blank" title="">尼奥尔</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875720/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875720/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875720/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-03-07 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/301" target="_blank" title="">南锡</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"><a href="soccer/team/330" target="_blank" title="">拉瓦勒</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875724/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875724/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875724/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-03-07 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1744" target="_blank" title="">尼姆</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327164251.jpg"><a href="soccer/team/2141" target="_blank" title="">阿雅GFCO</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875725/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875725/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875725/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-03-07 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5025" target="_blank" title="">奥尔良</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133813.png"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"><a href="soccer/team/2104" target="_blank" title="">瓦朗谢纳</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875726/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875726/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875726/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-03-07 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/267" target="_blank" title="">索肖</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"><a href="soccer/team/2103" target="_blank" title="">图尔</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875727/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875727/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875727/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-03-07 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/366" target="_blank" title="">特鲁瓦</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122444809.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"><a href="soccer/team/313" target="_blank" title="">克莱蒙</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875728/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875728/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875728/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-03-07 21:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/320" target="_blank" title="">第戎</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"><a href="soccer/team/335" target="_blank" title="">勒阿弗尔</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875723/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875723/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875723/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-03-10 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/6037" target="_blank" title="">阿尔勒</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012716162543.jpg"></td>
			<td>			
				
					2:4
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"><a href="soccer/team/215" target="_blank" title="">欧塞尔</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875721/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875721/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875721/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-03-10 03:45</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/306" target="_blank" title="">布雷斯特</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"></td>
			<td>			
				
					3:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201326174356.jpg"><a href="soccer/team/308" target="_blank" title="">沙托鲁</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875722/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875722/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875722/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_26" class="zstab" style="display: none;">
	<thead>
		<tr>
			<th width="127">时间</th>
			<th width="165">主队</th>
			<th width="33">比分</th>
			<th width="165">客队</th>
			<th width="65">半场</th>
			<th width="153">让球</th>
			<th width="66">数据</th>
			<!-- <th width="90">时间</th>
            <th width="50">主队</th>
            <th width="30">比分</th>
            <th width="50">客队</th>
            <th width="45">半场</th>
            <th width="65">让球</th>
            <th width="55">数据</th> -->
		</tr>
	</thead>

	
	
		
			<tbody><tr>
				
			<td>2015-02-28 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/313" target="_blank" title="">克莱蒙</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"><a href="soccer/team/2104" target="_blank" title="">瓦朗谢纳</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875701/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875701/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875701/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-02-28 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/374" target="_blank" title="">克雷泰伊</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"><a href="soccer/team/320" target="_blank" title="">第戎</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875702/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875702/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875702/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-02-28 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2141" target="_blank" title="">阿雅GFCO</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327164251.jpg"></td>
			<td>			
				
					3:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133813.png"><a href="soccer/team/5025" target="_blank" title="">奥尔良</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875703/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875703/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875703/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-02-28 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/330" target="_blank" title="">拉瓦勒</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012716162543.jpg"><a href="soccer/team/6037" target="_blank" title="">阿尔勒</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875704/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875704/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875704/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-02-28 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/335" target="_blank" title="">勒阿弗尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"><a href="soccer/team/194" target="_blank" title="">阿雅克肖</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875705/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875705/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875705/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-02-28 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/308" target="_blank" title="">沙托鲁</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201326174356.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"><a href="soccer/team/1744" target="_blank" title="">尼姆</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875706/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875706/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875706/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-02-28 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/325" target="_blank" title="">尼奥尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122444809.jpg"><a href="soccer/team/366" target="_blank" title="">特鲁瓦</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875707/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875707/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875707/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-02-28 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2103" target="_blank" title="">图尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"><a href="soccer/team/301" target="_blank" title="">南锡</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875708/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875708/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875708/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-02-28 21:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/306" target="_blank" title="">布雷斯特</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"><a href="soccer/team/267" target="_blank" title="">索肖</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875700/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875700/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875700/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-03-03 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/215" target="_blank" title="">欧塞尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162816.jpg"><a href="soccer/team/304" target="_blank" title="">昂热</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875699/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875699/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875699/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_25" class="zstab" style="display: none;">
	<thead>
		<tr>
			<th width="127">时间</th>
			<th width="165">主队</th>
			<th width="33">比分</th>
			<th width="165">客队</th>
			<th width="65">半场</th>
			<th width="153">让球</th>
			<th width="66">数据</th>
			<!-- <th width="90">时间</th>
            <th width="50">主队</th>
            <th width="30">比分</th>
            <th width="50">客队</th>
            <th width="45">半场</th>
            <th width="65">让球</th>
            <th width="55">数据</th> -->
		</tr>
	</thead>

	
	
		
			<tbody><tr>
				
			<td>2015-02-21 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/194" target="_blank" title="">阿雅克肖</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"><a href="soccer/team/215" target="_blank" title="">欧塞尔</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875680/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875680/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875680/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-02-21 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/304" target="_blank" title="">昂热</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162816.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"><a href="soccer/team/330" target="_blank" title="">拉瓦勒</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875681/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875681/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875681/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-02-21 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/6037" target="_blank" title="">阿尔勒</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012716162543.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"><a href="soccer/team/306" target="_blank" title="">布雷斯特</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875682/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875682/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875682/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-02-21 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/313" target="_blank" title="">克莱蒙</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"><a href="soccer/team/374" target="_blank" title="">克雷泰伊</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875683/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875683/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875683/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-02-21 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/320" target="_blank" title="">第戎</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327164251.jpg"><a href="soccer/team/2141" target="_blank" title="">阿雅GFCO</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875684/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875684/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875684/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-02-21 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/301" target="_blank" title="">南锡</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"></td>
			<td>			
				
					6:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201326174356.jpg"><a href="soccer/team/308" target="_blank" title="">沙托鲁</a></td>
			<td>			
				
					4:0
							
			</td>
			<td>
			
				一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875685/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875685/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875685/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-02-21 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5025" target="_blank" title="">奥尔良</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133813.png"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"><a href="soccer/team/2103" target="_blank" title="">图尔</a></td>
			<td>			
				
					2:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875687/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875687/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875687/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-02-21 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2104" target="_blank" title="">瓦朗谢纳</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"></td>
			<td>			
				
					1:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"><a href="soccer/team/325" target="_blank" title="">尼奥尔</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875689/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875689/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875689/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-02-21 21:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/366" target="_blank" title="">特鲁瓦</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122444809.jpg"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"><a href="soccer/team/335" target="_blank" title="">勒阿弗尔</a></td>
			<td>			
				
					2:1
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875688/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875688/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875688/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-02-24 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1744" target="_blank" title="">尼姆</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"><a href="soccer/team/267" target="_blank" title="">索肖</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875686/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875686/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875686/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_24" class="zstab" style="display: none;">
	<thead>
		<tr>
			<th width="127">时间</th>
			<th width="165">主队</th>
			<th width="33">比分</th>
			<th width="165">客队</th>
			<th width="65">半场</th>
			<th width="153">让球</th>
			<th width="66">数据</th>
			<!-- <th width="90">时间</th>
            <th width="50">主队</th>
            <th width="30">比分</th>
            <th width="50">客队</th>
            <th width="45">半场</th>
            <th width="65">让球</th>
            <th width="55">数据</th> -->
		</tr>
	</thead>

	
	
		
			<tbody><tr>
				
			<td>2015-02-14 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/215" target="_blank" title="">欧塞尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122444809.jpg"><a href="soccer/team/366" target="_blank" title="">特鲁瓦</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875661/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875661/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875661/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-02-14 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/374" target="_blank" title="">克雷泰伊</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"><a href="soccer/team/2104" target="_blank" title="">瓦朗谢纳</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875663/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875663/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875663/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-02-14 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2141" target="_blank" title="">阿雅GFCO</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327164251.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162816.jpg"><a href="soccer/team/304" target="_blank" title="">昂热</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875664/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875664/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875664/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-02-14 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/330" target="_blank" title="">拉瓦勒</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133813.png"><a href="soccer/team/5025" target="_blank" title="">奥尔良</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875665/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875665/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875665/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-02-14 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/335" target="_blank" title="">勒阿弗尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"></td>
			<td>			
				
					3:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"><a href="soccer/team/313" target="_blank" title="">克莱蒙</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875666/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875666/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875666/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-02-14 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/308" target="_blank" title="">沙托鲁</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201326174356.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"><a href="soccer/team/194" target="_blank" title="">阿雅克肖</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875667/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875667/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875667/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-02-14 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/325" target="_blank" title="">尼奥尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"><a href="soccer/team/320" target="_blank" title="">第戎</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875668/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875668/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875668/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-02-14 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2103" target="_blank" title="">图尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012716162543.jpg"><a href="soccer/team/6037" target="_blank" title="">阿尔勒</a></td>
			<td>			
				
					1:2
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875670/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875670/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875670/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-02-14 21:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/267" target="_blank" title="">索肖</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"><a href="soccer/team/301" target="_blank" title="">南锡</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875669/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875669/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875669/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-02-17 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/306" target="_blank" title="">布雷斯特</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"></td>
			<td>			
				
					3:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"><a href="soccer/team/1744" target="_blank" title="">尼姆</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875662/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875662/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875662/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_23" class="zstab" style="display: none;">
	<thead>
		<tr>
			<th width="127">时间</th>
			<th width="165">主队</th>
			<th width="33">比分</th>
			<th width="165">客队</th>
			<th width="65">半场</th>
			<th width="153">让球</th>
			<th width="66">数据</th>
			<!-- <th width="90">时间</th>
            <th width="50">主队</th>
            <th width="30">比分</th>
            <th width="50">客队</th>
            <th width="45">半场</th>
            <th width="65">让球</th>
            <th width="55">数据</th> -->
		</tr>
	</thead>

	
	
		
			<tbody><tr>
				
			<td>2015-02-07 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/194" target="_blank" title="">阿雅克肖</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"><a href="soccer/team/330" target="_blank" title="">拉瓦勒</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875642/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875642/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875642/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-02-07 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/304" target="_blank" title="">昂热</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162816.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"><a href="soccer/team/2103" target="_blank" title="">图尔</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875643/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875643/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875643/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-02-07 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/6037" target="_blank" title="">阿尔勒</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012716162543.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"><a href="soccer/team/1744" target="_blank" title="">尼姆</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875644/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875644/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875644/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-02-07 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/313" target="_blank" title="">克莱蒙</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"><a href="soccer/team/325" target="_blank" title="">尼奥尔</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875645/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875645/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875645/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-02-07 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/374" target="_blank" title="">克雷泰伊</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"><a href="soccer/team/335" target="_blank" title="">勒阿弗尔</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875646/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875646/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875646/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-02-07 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5025" target="_blank" title="">奥尔良</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133813.png"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201326174356.jpg"><a href="soccer/team/308" target="_blank" title="">沙托鲁</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875649/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875649/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875649/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-02-07 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/366" target="_blank" title="">特鲁瓦</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122444809.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327164251.jpg"><a href="soccer/team/2141" target="_blank" title="">阿雅GFCO</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875650/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875650/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875650/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-02-07 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2104" target="_blank" title="">瓦朗谢纳</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"><a href="soccer/team/215" target="_blank" title="">欧塞尔</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875651/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875651/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875651/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-02-07 21:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/320" target="_blank" title="">第戎</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"><a href="soccer/team/267" target="_blank" title="">索肖</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875647/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875647/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875647/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-02-10 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/301" target="_blank" title="">南锡</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"><a href="soccer/team/306" target="_blank" title="">布雷斯特</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875648/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875648/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875648/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_22" class="zstab" style="display: none;">
	<thead>
		<tr>
			<th width="127">时间</th>
			<th width="165">主队</th>
			<th width="33">比分</th>
			<th width="165">客队</th>
			<th width="65">半场</th>
			<th width="153">让球</th>
			<th width="66">数据</th>
			<!-- <th width="90">时间</th>
            <th width="50">主队</th>
            <th width="30">比分</th>
            <th width="50">客队</th>
            <th width="45">半场</th>
            <th width="65">让球</th>
            <th width="55">数据</th> -->
		</tr>
	</thead>

	
	
		
			<tbody><tr>
				
			<td>2015-01-31 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/306" target="_blank" title="">布雷斯特</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133813.png"><a href="soccer/team/5025" target="_blank" title="">奥尔良</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875615/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875615/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875615/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-01-31 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2141" target="_blank" title="">阿雅GFCO</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327164251.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"><a href="soccer/team/313" target="_blank" title="">克莱蒙</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875616/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875616/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875616/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-01-31 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/330" target="_blank" title="">拉瓦勒</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122444809.jpg"><a href="soccer/team/366" target="_blank" title="">特鲁瓦</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875617/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875617/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875617/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-01-31 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/308" target="_blank" title="">沙托鲁</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201326174356.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162816.jpg"><a href="soccer/team/304" target="_blank" title="">昂热</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875619/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875619/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875619/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-01-31 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1744" target="_blank" title="">尼姆</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"><a href="soccer/team/301" target="_blank" title="">南锡</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875620/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875620/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875620/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-01-31 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/325" target="_blank" title="">尼奥尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"></td>
			<td>			
				
					1:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"><a href="soccer/team/374" target="_blank" title="">克雷泰伊</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875621/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875621/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875621/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-01-31 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/267" target="_blank" title="">索肖</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012716162543.jpg"><a href="soccer/team/6037" target="_blank" title="">阿尔勒</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875622/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875622/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875622/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-01-31 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2103" target="_blank" title="">图尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"><a href="soccer/team/194" target="_blank" title="">阿雅克肖</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875623/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875623/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875623/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-01-31 21:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/215" target="_blank" title="">欧塞尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"></td>
			<td>			
				
					3:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"><a href="soccer/team/320" target="_blank" title="">第戎</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875614/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875614/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875614/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-02-03 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/335" target="_blank" title="">勒阿弗尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"></td>
			<td>			
				
					3:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"><a href="soccer/team/2104" target="_blank" title="">瓦朗谢纳</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875618/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875618/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875618/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_21" class="zstab" style="display: none;">
	<thead>
		<tr>
			<th width="127">时间</th>
			<th width="165">主队</th>
			<th width="33">比分</th>
			<th width="165">客队</th>
			<th width="65">半场</th>
			<th width="153">让球</th>
			<th width="66">数据</th>
			<!-- <th width="90">时间</th>
            <th width="50">主队</th>
            <th width="30">比分</th>
            <th width="50">客队</th>
            <th width="45">半场</th>
            <th width="65">让球</th>
            <th width="55">数据</th> -->
		</tr>
	</thead>

	
	
		
			<tbody><tr>
				
			<td>2015-01-24 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/194" target="_blank" title="">阿雅克肖</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"></td>
			<td>			
				
					0:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327164251.jpg"><a href="soccer/team/2141" target="_blank" title="">阿雅GFCO</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875600/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875600/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875600/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-01-24 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/6037" target="_blank" title="">阿尔勒</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012716162543.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"><a href="soccer/team/301" target="_blank" title="">南锡</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875602/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875602/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875602/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-01-24 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/374" target="_blank" title="">克雷泰伊</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"><a href="soccer/team/330" target="_blank" title="">拉瓦勒</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875604/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875604/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875604/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-01-24 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/320" target="_blank" title="">第戎</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"></td>
			<td>			
				
					4:5
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"><a href="soccer/team/1744" target="_blank" title="">尼姆</a></td>
			<td>			
				
					2:2
							
			</td>
			<td>
			
				一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875605/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875605/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875605/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-01-24 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/335" target="_blank" title="">勒阿弗尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"><a href="soccer/team/325" target="_blank" title="">尼奥尔</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875606/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875606/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875606/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-01-24 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5025" target="_blank" title="">奥尔良</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133813.png"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"><a href="soccer/team/215" target="_blank" title="">欧塞尔</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875607/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875607/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875607/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-01-24 21:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/313" target="_blank" title="">克莱蒙</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"></td>
			<td>			
				
					3:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201326174356.jpg"><a href="soccer/team/308" target="_blank" title="">沙托鲁</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875603/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875603/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875603/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-01-24 21:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/366" target="_blank" title="">特鲁瓦</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122444809.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"><a href="soccer/team/267" target="_blank" title="">索肖</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875608/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875608/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875608/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-01-24 21:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2104" target="_blank" title="">瓦朗谢纳</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"><a href="soccer/team/2103" target="_blank" title="">图尔</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875609/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875609/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875609/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-01-27 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/304" target="_blank" title="">昂热</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162816.jpg"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"><a href="soccer/team/306" target="_blank" title="">布雷斯特</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875601/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875601/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875601/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_20" class="zstab">
	<thead>
		<tr>
			<th width="127">时间</th>
			<th width="165">主队</th>
			<th width="33">比分</th>
			<th width="165">客队</th>
			<th width="65">半场</th>
			<th width="153">让球</th>
			<th width="66">数据</th>
			<!-- <th width="90">时间</th>
            <th width="50">主队</th>
            <th width="30">比分</th>
            <th width="50">客队</th>
            <th width="45">半场</th>
            <th width="65">让球</th>
            <th width="55">数据</th> -->
		</tr>
	</thead>

	
	
		
			<tbody><tr>
				
			<td>2015-01-17 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/6037" target="_blank" title="">阿尔勒</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012716162543.jpg"></td>
			<td>			
				
					1:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162816.jpg"><a href="soccer/team/304" target="_blank" title="">昂热</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875510/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875510/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875510/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-01-17 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/215" target="_blank" title="">欧塞尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"><a href="soccer/team/313" target="_blank" title="">克莱蒙</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875511/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875511/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875511/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-01-17 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/306" target="_blank" title="">布雷斯特</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"><a href="soccer/team/325" target="_blank" title="">尼奥尔</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875512/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875512/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875512/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-01-17 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2141" target="_blank" title="">阿雅GFCO</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327164251.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"><a href="soccer/team/335" target="_blank" title="">勒阿弗尔</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875513/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875513/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875513/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-01-17 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/330" target="_blank" title="">拉瓦勒</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"><a href="soccer/team/320" target="_blank" title="">第戎</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875594/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875594/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875594/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-01-17 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/308" target="_blank" title="">沙托鲁</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201326174356.jpg"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"><a href="soccer/team/374" target="_blank" title="">克雷泰伊</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875595/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875595/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875595/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-01-17 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1744" target="_blank" title="">尼姆</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"><a href="soccer/team/2104" target="_blank" title="">瓦朗谢纳</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875597/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875597/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875597/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-01-17 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2103" target="_blank" title="">图尔</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122444809.jpg"><a href="soccer/team/366" target="_blank" title="">特鲁瓦</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875599/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875599/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875599/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-01-17 21:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/267" target="_blank" title="">索肖</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"><a href="soccer/team/194" target="_blank" title="">阿雅克肖</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875598/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875598/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875598/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-01-20 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/301" target="_blank" title="">南锡</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133813.png"><a href="soccer/team/5025" target="_blank" title="">奥尔良</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1875596/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1875596/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1875596/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
</tbody></table>


</div>
		<div class="league_right_022" id="matchInfofj">
		</div>
	</div>
	




</body>