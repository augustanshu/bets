<body data-eventspy-target-node-id="l7u6059izknqkpqt2qog8pvi">
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
<a style="height:69px;overflow:hidden;" onclick="_hmt.push(['_trackEvent', '头部广告', 'click', '看专家推荐 天天中奖更容易', 1])" href="http://news.zgzcw.com/zjtj/index.shtml" target="_blank" rel="nofollow" data-event-spy-cb="true"><img class="ad01" width="384" height="69" src="http://public.zgzcw.com/d/images/20161071475821970022_721.png" alt="看专家推荐 天天中奖更容易" title="看专家推荐 天天中奖更容易">
</a>

</div>
<span class="kf"> <a href="javascript:;" onclick="open_kfchat()" data-event-spy-cb="true"></a>
 <p> <span id="nyr">2017-3-6</span> <br>
    <b id="xt_h">11</b><b id="xt_m">06</b><b id="xt_s">34</b> </p>
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
						
				  		
				  		
				  		
				  		
				  			
				  			<img src="http://img.zgzcw.com/zgzcw/matchCenter/league/images/20121101163642.jpg" width="100" height="100" border="0">
				  			
				  		
					</dt>
					<dd>
					
						[波兰超]
				    
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
	                 
	                 
	                  
	                  
	                   <a href="http://saishi.zgzcw.com:80/soccer/league/6/2016-2017/">
	                  <li>2016-2017</li></a>
	                   
	                   <a href="http://saishi.zgzcw.com:80/soccer/league/6/2015-2016/">
	                  <li>2015-2016</li></a>
	                   
	                   <a href="http://saishi.zgzcw.com:80/soccer/league/6/2014-2015/">
	                  <li>2014-2015</li></a>
	                   
	                   <a href="http://saishi.zgzcw.com:80/soccer/league/6/2013-2014/">
	                  <li>2013-2014</li></a>
	                   
	                   <a href="http://saishi.zgzcw.com:80/soccer/league/6/2012-2013/">
	                  <li>2012-2013</li></a>
	                   
	                   <a href="http://saishi.zgzcw.com:80/soccer/league/6/2011-2012/">
	                  <li>2011-2012</li></a>
	                   
	                   <a href="http://saishi.zgzcw.com:80/soccer/league/6/2010-2011/">
	                  <li>2010-2011</li></a>
	                   
	                   <a href="http://saishi.zgzcw.com:80/soccer/league/6/2009-2010/">
	                  <li>2009-2010</li></a>
	                   
	                   <a href="http://saishi.zgzcw.com:80/soccer/league/6/2008-2009/">
	                  <li>2008-2009</li></a>
	                   
	                   <a href="http://saishi.zgzcw.com:80/soccer/league/6/2007-2008/">
	                  <li>2007-2008</li></a>
	                   
	                   <a href="http://saishi.zgzcw.com:80/soccer/league/6/2006-2007/">
	                  <li>2006-2007</li></a>
	                   
	                   <a href="http://saishi.zgzcw.com:80/soccer/league/6/2005-2006/">
	                  <li>2005-2006</li></a>
	                   
	                   <a href="http://saishi.zgzcw.com:80/soccer/league/6/2004-2005/">
	                  <li>2004-2005</li></a>
	                   
	                 
	                              
	                </ul>
              </div>
				</div>
			</div>
			
				<div class="tongji_list">
				
					<div>赛事统计</div>
					<ul>
						<li class="cur">
						<a href="http://saishi.zgzcw.com:80/soccer/league/6">
						赛程信息</a></li>
	                   
						<li>
						<a href="http://saishi.zgzcw.com:80/soccer/league/6/2015-2016/ssb">
						射手榜</a></li>
						<li>
						<a href="http://saishi.zgzcw.com:80/soccer/league/6/2015-2016/jqds">
						总进球单双</a></li>
						<li>
						<a href="http://saishi.zgzcw.com:80/soccer/league/6/2015-2016/sxds">
						上下单双</a></li>
						<li>
						<a href="http://saishi.zgzcw.com:80/soccer/league/6/2015-2016/sxpl">
						上下盘路榜</a></li>
					</ul>
				</div>
			
			<div class="tongji_list">
				<div>球队列表</div>
				<ul>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/659" target="_blank" class="a1" title="华沙军团">
					<li>华沙军团</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/658" target="_blank" class="a1" title="克拉科维">
					<li>克拉科维</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/609" target="_blank" class="a1" title="克拉科夫">
					<li>克拉科夫</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/1041" target="_blank" class="a1" title="格里维治">
					<li>格里维治</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/1024" target="_blank" class="a1" title="卢宾扎格">
					<li>卢宾扎格</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/5910" target="_blank" class="a1" title="列治亚">
					<li>列治亚</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/3159" target="_blank" class="a1" title="乔治罗尼">
					<li>乔治罗尼</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/1442" target="_blank" class="a1" title="保德比斯">
					<li>保德比斯</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/1234" target="_blank" class="a1" title="施切钦波">
					<li>施切钦波</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/1142" target="_blank" class="a1" title="波兹南">
					<li>波兹南</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/2894" target="_blank" class="a1" title="斯拉斯克">
					<li>斯拉斯克</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/2342" target="_blank" class="a1" title="罗切霍茹">
					<li>罗切霍茹</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/667" target="_blank" class="a1" title="博格丹卡">
					<li>博格丹卡</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/1009" target="_blank" class="a1" title="哥罗纳">
					<li>哥罗纳</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/11123" target="_blank" class="a1" title="LKS尼切萨">
					<li>LKS尼切萨</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/1143" target="_blank" class="a1" title="萨比利斯">
					<li>萨比利斯</li>
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
						
					
						
							<option value="2015-2016" selected="selected">2015-2016赛季</option>
						
					
						
							<option value="2014-2015">2014-2015赛季</option>
						
					
						
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
					
						<option value="609">克拉科夫</option>
					
						<option value="658">克拉科维</option>
					
						<option value="659">华沙军团</option>
					
						<option value="667">博格丹卡</option>
					
						<option value="1009">哥罗纳</option>
					
						<option value="1024">卢宾扎格</option>
					
						<option value="1041">格里维治</option>
					
						<option value="1142">波兹南</option>
					
						<option value="1143">萨比利斯</option>
					
						<option value="1234">施切钦波</option>
					
						<option value="1442">保德比斯</option>
					
						<option value="2342">罗切霍茹</option>
					
						<option value="2894">斯拉斯克</option>
					
						<option value="3159">乔治罗尼</option>
					
						<option value="5910">列治亚</option>
					
						<option value="11123">LKS尼切萨</option>
					
				</select> <select id="selectTeam2" style="display:none;">
					<option value="0" selected="selected">选择球队</option>
					
						<option value="609">克拉科夫</option>
					
						<option value="658">克拉科维</option>
					
						<option value="659">华沙军团</option>
					
						<option value="667">博格丹卡</option>
					
						<option value="1009">哥罗纳</option>
					
						<option value="1024">卢宾扎格</option>
					
						<option value="1041">格里维治</option>
					
						<option value="1142">波兹南</option>
					
						<option value="1143">萨比利斯</option>
					
						<option value="1234">施切钦波</option>
					
						<option value="1442">保德比斯</option>
					
						<option value="2342">罗切霍茹</option>
					
						<option value="2894">斯拉斯克</option>
					
						<option value="3159">乔治罗尼</option>
					
						<option value="5910">列治亚</option>
					
						<option value="11123">LKS尼切萨</option>
					
				</select>
				<select id="fjsai">
				<option value="0" selected="selected">联赛</option>
				<option value="1" >附加赛</option>
				</select>
			</div>
			波兰超2015-2016 -- 赛程&nbsp;
						
			
		</div> -->
	<div class="table_out">
		<div class="table_head">
			<div class="team_out2">
			
				<div class="div-select team_lian fl" id="selectTeam" value="0">
                    <span>请选择球队</span>
                    <ul class="select_options">
                        
							<li value="609">克拉科夫</li>
						
							<li value="658">克拉科维</li>
						
							<li value="659">华沙军团</li>
						
							<li value="667">博格丹卡</li>
						
							<li value="1009">哥罗纳</li>
						
							<li value="1024">卢宾扎格</li>
						
							<li value="1041">格里维治</li>
						
							<li value="1142">波兹南</li>
						
							<li value="1143">萨比利斯</li>
						
							<li value="1234">施切钦波</li>
						
							<li value="1442">保德比斯</li>
						
							<li value="2342">罗切霍茹</li>
						
							<li value="2894">斯拉斯克</li>
						
							<li value="3159">乔治罗尼</li>
						
							<li value="5910">列治亚</li>
						
							<li value="11123">LKS尼切萨</li>
						
                    </ul>
                </div>
                <b class="qxzqd fl">VS</b>
                <div class="div-select fl" style="margin-left:20px;" id="selectTeam2" value="0">
                    <span>请选择球队</span>
                    <ul class="select_options">
                        
							<li value="609">克拉科夫</li>
						
							<li value="658">克拉科维</li>
						
							<li value="659">华沙军团</li>
						
							<li value="667">博格丹卡</li>
						
							<li value="1009">哥罗纳</li>
						
							<li value="1024">卢宾扎格</li>
						
							<li value="1041">格里维治</li>
						
							<li value="1142">波兹南</li>
						
							<li value="1143">萨比利斯</li>
						
							<li value="1234">施切钦波</li>
						
							<li value="1442">保德比斯</li>
						
							<li value="2342">罗切霍茹</li>
						
							<li value="2894">斯拉斯克</li>
						
							<li value="3159">乔治罗尼</li>
						
							<li value="5910">列治亚</li>
						
							<li value="11123">LKS尼切萨</li>
						
                    </ul>
                </div>
               
			</div>
			<span>
				2015-2016波兰超赛事
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
					
				
					
						<option value="2015-2016" selected="selected">2015-2016赛季</option>
					
				
					
						<option value="2014-2015">2014-2015赛季</option>
					
				
					
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
				
					<option value="609">克拉科夫</option>
				
					<option value="658">克拉科维</option>
				
					<option value="659">华沙军团</option>
				
					<option value="667">博格丹卡</option>
				
					<option value="1009">哥罗纳</option>
				
					<option value="1024">卢宾扎格</option>
				
					<option value="1041">格里维治</option>
				
					<option value="1142">波兹南</option>
				
					<option value="1143">萨比利斯</option>
				
					<option value="1234">施切钦波</option>
				
					<option value="1442">保德比斯</option>
				
					<option value="2342">罗切霍茹</option>
				
					<option value="2894">斯拉斯克</option>
				
					<option value="3159">乔治罗尼</option>
				
					<option value="5910">列治亚</option>
				
					<option value="11123">LKS尼切萨</option>
				
			</select>
			<select id="selectTeam2">
				<option value="0" selected="selected">选择球队</option>
				
					<option value="609">克拉科夫</option>
				
					<option value="658">克拉科维</option>
				
					<option value="659">华沙军团</option>
				
					<option value="667">博格丹卡</option>
				
					<option value="1009">哥罗纳</option>
				
					<option value="1024">卢宾扎格</option>
				
					<option value="1041">格里维治</option>
				
					<option value="1142">波兹南</option>
				
					<option value="1143">萨比利斯</option>
				
					<option value="1234">施切钦波</option>
				
					<option value="1442">保德比斯</option>
				
					<option value="2342">罗切霍茹</option>
				
					<option value="2894">斯拉斯克</option>
				
					<option value="3159">乔治罗尼</option>
				
					<option value="5910">列治亚</option>
				
					<option value="11123">LKS尼切萨</option>
				
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
				
					<em class="em_1">20</em>
				
					<em class="em_1">21</em>
				
					<em class="em_1">22</em>
				
					<em class="em_1">23</em>
				
					<em class="em_1">24</em>
				
					<em class="em_1">25</em>
				
					<em class="em_1">26</em>
				
					<em class="em_1">27</em>
				
					<em class="em_1">28</em>
				
					<em class="em_1">29</em>
				
					<em class="em_1 em_2">30</em>
				
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
				
			<td>2015-07-17 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/609" target="_blank" title="">克拉科夫</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814173929.gif"><a href="soccer/team/1143" target="_blank" title="">萨比利斯</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987659/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987659/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987659/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-07-18 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5910" target="_blank" title="">列治亚</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"><a href="soccer/team/658" target="_blank" title="">克拉科维</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987655/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987655/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987655/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-07-18 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2342" target="_blank" title="">罗切霍茹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"><a href="soccer/team/667" target="_blank" title="">博格丹卡</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987657/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987657/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987657/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-07-18 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1024" target="_blank" title="">卢宾扎格</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173341.jpg"><a href="soccer/team/1442" target="_blank" title="">保德比斯</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987660/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987660/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987660/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-07-19 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1142" target="_blank" title="">波兹南</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"><a href="soccer/team/1234" target="_blank" title="">施切钦波</a></td>
			<td>			
				
					1:2
							
			</td>
			<td>
			
				一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987654/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987654/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987654/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-07-19 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1009" target="_blank" title="">哥罗纳</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"></td>
			<td>			
				
					3:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"><a href="soccer/team/3159" target="_blank" title="">乔治罗尼</a></td>
			<td>			
				
					1:2
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987613/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987613/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987613/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-07-19 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2894" target="_blank" title="">斯拉斯克</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"></td>
			<td>			
				
					1:4
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"><a href="soccer/team/659" target="_blank" title="">华沙军团</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987658/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987658/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987658/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-07-20 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1041" target="_blank" title="">格里维治</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"><a href="soccer/team/11123" target="_blank" title="">LKS尼切萨</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987656/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987656/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987656/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-04-15 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1234" target="_blank" title="">施切钦波</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"><a href="soccer/team/2342" target="_blank" title="">罗切霍茹</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091171/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2091171/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2091171/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-04-16 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/659" target="_blank" title="">华沙军团</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"><a href="soccer/team/1142" target="_blank" title="">波兹南</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091172/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2091172/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2091172/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-04-16 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1009" target="_blank" title="">哥罗纳</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"><a href="soccer/team/2894" target="_blank" title="">斯拉斯克</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091188/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2091188/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2091188/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-04-16 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1024" target="_blank" title="">卢宾扎格</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"><a href="soccer/team/5910" target="_blank" title="">列治亚</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091189/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2091189/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2091189/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-04-17 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1041" target="_blank" title="">格里维治</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"><a href="soccer/team/658" target="_blank" title="">克拉科维</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091190/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2091190/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2091190/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-04-17 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1442" target="_blank" title="">保德比斯</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173341.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"><a href="soccer/team/11123" target="_blank" title="">LKS尼切萨</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091232/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2091232/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2091232/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-04-17 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3159" target="_blank" title="">乔治罗尼</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"><a href="soccer/team/667" target="_blank" title="">博格丹卡</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091233/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2091233/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2091233/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-04-17 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/609" target="_blank" title="">克拉科夫</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"></td>
			<td>			
				
					3:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814173929.gif"><a href="soccer/team/1143" target="_blank" title="">萨比利斯</a></td>
			<td>			
				
					2:1
							
			</td>
			<td>
			
				一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091245/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2091245/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2091245/bfyc" target="_blank" class="oyx">析</a>
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
				
			<td>2015-07-24 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2342" target="_blank" title="">罗切霍茹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"><a href="soccer/team/1041" target="_blank" title="">格里维治</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987641/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987641/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987641/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-07-25 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/658" target="_blank" title="">克拉科维</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"><a href="soccer/team/609" target="_blank" title="">克拉科夫</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987635/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987635/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987635/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-07-25 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1024" target="_blank" title="">卢宾扎格</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"><a href="soccer/team/1009" target="_blank" title="">哥罗纳</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987642/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987642/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987642/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-07-26 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1142" target="_blank" title="">波兹南</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"><a href="soccer/team/5910" target="_blank" title="">列治亚</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987638/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987638/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987638/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-07-26 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3159" target="_blank" title="">乔治罗尼</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"><a href="soccer/team/11123" target="_blank" title="">LKS尼切萨</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987637/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987637/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987637/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-07-26 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1234" target="_blank" title="">施切钦波</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"><a href="soccer/team/2894" target="_blank" title="">斯拉斯克</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987640/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987640/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987640/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-07-26 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/659" target="_blank" title="">华沙军团</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"></td>
			<td>			
				
					5:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173341.jpg"><a href="soccer/team/1442" target="_blank" title="">保德比斯</a></td>
			<td>			
				
					3:0
							
			</td>
			<td>
			
				球半
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987639/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987639/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987639/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-07-27 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/667" target="_blank" title="">博格丹卡</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814173929.gif"><a href="soccer/team/1143" target="_blank" title="">萨比利斯</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987636/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987636/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987636/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-04-19 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/658" target="_blank" title="">克拉科维</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"><a href="soccer/team/1024" target="_blank" title="">卢宾扎格</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091261/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2091261/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2091261/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-04-19 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1142" target="_blank" title="">波兹南</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"><a href="soccer/team/1041" target="_blank" title="">格里维治</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091262/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2091262/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2091262/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-04-20 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2342" target="_blank" title="">罗切霍茹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"><a href="soccer/team/659" target="_blank" title="">华沙军团</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				受一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091250/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2091250/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2091250/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-04-20 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5910" target="_blank" title="">列治亚</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"><a href="soccer/team/1234" target="_blank" title="">施切钦波</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091251/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2091251/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2091251/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-04-20 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/11123" target="_blank" title="">LKS尼切萨</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"><a href="soccer/team/1009" target="_blank" title="">哥罗纳</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091263/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2091263/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2091263/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-04-20 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/667" target="_blank" title="">博格丹卡</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"></td>
			<td>			
				
					0:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"><a href="soccer/team/609" target="_blank" title="">克拉科夫</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091264/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2091264/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2091264/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-04-21 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1143" target="_blank" title="">萨比利斯</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814173929.gif"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173341.jpg"><a href="soccer/team/1442" target="_blank" title="">保德比斯</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091252/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2091252/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2091252/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-04-21 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2894" target="_blank" title="">斯拉斯克</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"></td>
			<td>			
				
					3:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"><a href="soccer/team/3159" target="_blank" title="">乔治罗尼</a></td>
			<td>			
				
					2:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091253/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2091253/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2091253/bfyc" target="_blank" class="oyx">析</a>
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
				
			<td>2015-07-31 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1041" target="_blank" title="">格里维治</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"></td>
			<td>			
				
					3:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814173929.gif"><a href="soccer/team/1143" target="_blank" title="">萨比利斯</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987647/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987647/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987647/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-08-01 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5910" target="_blank" title="">列治亚</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"><a href="soccer/team/1234" target="_blank" title="">施切钦波</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987646/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987646/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987646/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-08-01 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1442" target="_blank" title="">保德比斯</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173341.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"><a href="soccer/team/658" target="_blank" title="">克拉科维</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987648/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987648/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987648/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-08-02 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/609" target="_blank" title="">克拉科夫</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"><a href="soccer/team/1142" target="_blank" title="">波兹南</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987661/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987661/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987661/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-08-02 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3159" target="_blank" title="">乔治罗尼</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"><a href="soccer/team/1024" target="_blank" title="">卢宾扎格</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987644/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987644/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987644/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-08-02 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2894" target="_blank" title="">斯拉斯克</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"><a href="soccer/team/11123" target="_blank" title="">LKS尼切萨</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987649/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987649/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987649/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-08-02 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/667" target="_blank" title="">博格丹卡</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"><a href="soccer/team/659" target="_blank" title="">华沙军团</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				受半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987643/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987643/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987643/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-08-03 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1009" target="_blank" title="">哥罗纳</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"><a href="soccer/team/2342" target="_blank" title="">罗切霍茹</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987645/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987645/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987645/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-04-22 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1024" target="_blank" title="">卢宾扎格</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"></td>
			<td>			
				
					4:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"><a href="soccer/team/2342" target="_blank" title="">罗切霍茹</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091277/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2091277/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2091277/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-04-23 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/659" target="_blank" title="">华沙军团</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"></td>
			<td>			
				
					4:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"><a href="soccer/team/658" target="_blank" title="">克拉科维</a></td>
			<td>			
				
					3:0
							
			</td>
			<td>
			
				一球/球半
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091266/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2091266/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2091266/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-04-23 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1009" target="_blank" title="">哥罗纳</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"><a href="soccer/team/667" target="_blank" title="">博格丹卡</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091268/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2091268/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2091268/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-04-23 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1442" target="_blank" title="">保德比斯</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173341.jpg"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"><a href="soccer/team/2894" target="_blank" title="">斯拉斯克</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091272/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2091272/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2091272/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-04-24 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1234" target="_blank" title="">施切钦波</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"><a href="soccer/team/1142" target="_blank" title="">波兹南</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091286/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2091286/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2091286/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-04-24 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3159" target="_blank" title="">乔治罗尼</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814173929.gif"><a href="soccer/team/1143" target="_blank" title="">萨比利斯</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091308/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2091308/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2091308/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-04-24 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1041" target="_blank" title="">格里维治</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"></td>
			<td>			
				
					3:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"><a href="soccer/team/5910" target="_blank" title="">列治亚</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091309/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2091309/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2091309/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-04-25 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/609" target="_blank" title="">克拉科夫</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"><a href="soccer/team/11123" target="_blank" title="">LKS尼切萨</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091310/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2091310/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2091310/bfyc" target="_blank" class="oyx">析</a>
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
				
			<td>2015-08-07 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/658" target="_blank" title="">克拉科维</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"><a href="soccer/team/1041" target="_blank" title="">格里维治</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987650/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987650/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987650/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-08-08 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/11123" target="_blank" title="">LKS尼切萨</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"><a href="soccer/team/1024" target="_blank" title="">卢宾扎格</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987664/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987664/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987664/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-08-08 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1143" target="_blank" title="">萨比利斯</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814173929.gif"></td>
			<td>			
				
					1:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"><a href="soccer/team/3159" target="_blank" title="">乔治罗尼</a></td>
			<td>			
				
					1:2
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987651/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987651/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987651/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-08-08 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1234" target="_blank" title="">施切钦波</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"><a href="soccer/team/667" target="_blank" title="">博格丹卡</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987665/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987665/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987665/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-08-09 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1142" target="_blank" title="">波兹南</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"><a href="soccer/team/1009" target="_blank" title="">哥罗纳</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				一球/球半
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987662/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987662/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987662/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-08-09 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2894" target="_blank" title="">斯拉斯克</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"><a href="soccer/team/5910" target="_blank" title="">列治亚</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987667/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987667/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987667/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-08-09 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/659" target="_blank" title="">华沙军团</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"><a href="soccer/team/609" target="_blank" title="">克拉科夫</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987663/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987663/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987663/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-08-10 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2342" target="_blank" title="">罗切霍茹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173341.jpg"><a href="soccer/team/1442" target="_blank" title="">保德比斯</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987666/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987666/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987666/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-04-28 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1024" target="_blank" title="">卢宾扎格</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"><a href="soccer/team/659" target="_blank" title="">华沙军团</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091311/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2091311/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2091311/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-04-28 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1142" target="_blank" title="">波兹南</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"><a href="soccer/team/5910" target="_blank" title="">列治亚</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091312/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2091312/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2091312/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-04-29 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1143" target="_blank" title="">萨比利斯</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814173929.gif"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"><a href="soccer/team/2894" target="_blank" title="">斯拉斯克</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091334/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2091334/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2091334/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-04-30 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2342" target="_blank" title="">罗切霍茹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"><a href="soccer/team/658" target="_blank" title="">克拉科维</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091335/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2091335/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2091335/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-04-30 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/11123" target="_blank" title="">LKS尼切萨</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"><a href="soccer/team/667" target="_blank" title="">博格丹卡</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091323/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2091323/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2091323/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-05-01 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1009" target="_blank" title="">哥罗纳</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"></td>
			<td>			
				
					3:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"><a href="soccer/team/609" target="_blank" title="">克拉科夫</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091324/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2091324/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2091324/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-05-01 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3159" target="_blank" title="">乔治罗尼</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"></td>
			<td>			
				
					3:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173341.jpg"><a href="soccer/team/1442" target="_blank" title="">保德比斯</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091346/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2091346/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2091346/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-05-01 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1041" target="_blank" title="">格里维治</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"><a href="soccer/team/1234" target="_blank" title="">施切钦波</a></td>
			<td>			
				
					2:1
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091354/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2091354/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2091354/bfyc" target="_blank" class="oyx">析</a>
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
				
			<td>2015-08-14 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1009" target="_blank" title="">哥罗纳</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"></td>
			<td>			
				
					0:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"><a href="soccer/team/658" target="_blank" title="">克拉科维</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987694/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987694/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987694/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-08-15 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1024" target="_blank" title="">卢宾扎格</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"><a href="soccer/team/1142" target="_blank" title="">波兹南</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987699/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987699/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987699/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-08-15 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/11123" target="_blank" title="">LKS尼切萨</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"></td>
			<td>			
				
					3:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814173929.gif"><a href="soccer/team/1143" target="_blank" title="">萨比利斯</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987695/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987695/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987695/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-08-15 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/667" target="_blank" title="">博格丹卡</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"></td>
			<td>			
				
					2:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"><a href="soccer/team/2894" target="_blank" title="">斯拉斯克</a></td>
			<td>			
				
					2:2
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987652/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987652/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987652/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-08-16 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1041" target="_blank" title="">格里维治</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"><a href="soccer/team/659" target="_blank" title="">华沙军团</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				受半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987696/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987696/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987696/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-08-16 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3159" target="_blank" title="">乔治罗尼</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"><a href="soccer/team/2342" target="_blank" title="">罗切霍茹</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987653/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987653/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987653/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-08-16 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/609" target="_blank" title="">克拉科夫</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"></td>
			<td>			
				
					3:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"><a href="soccer/team/5910" target="_blank" title="">列治亚</a></td>
			<td>			
				
					2:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987698/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987698/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987698/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-08-17 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1442" target="_blank" title="">保德比斯</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173341.jpg"></td>
			<td>			
				
					2:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"><a href="soccer/team/1234" target="_blank" title="">施切钦波</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987697/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987697/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987697/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-05-06 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1442" target="_blank" title="">保德比斯</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173341.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"><a href="soccer/team/1009" target="_blank" title="">哥罗纳</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091349/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2091349/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2091349/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-05-07 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/609" target="_blank" title="">克拉科夫</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"><a href="soccer/team/3159" target="_blank" title="">乔治罗尼</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091350/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2091350/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2091350/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-05-07 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2894" target="_blank" title="">斯拉斯克</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"><a href="soccer/team/11123" target="_blank" title="">LKS尼切萨</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091359/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2091359/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2091359/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-05-07 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/667" target="_blank" title="">博格丹卡</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814173929.gif"><a href="soccer/team/1143" target="_blank" title="">萨比利斯</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091360/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2091360/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2091360/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-05-08 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5910" target="_blank" title="">列治亚</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"><a href="soccer/team/2342" target="_blank" title="">罗切霍茹</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				一球/球半
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091361/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2091361/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2091361/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-05-08 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1234" target="_blank" title="">施切钦波</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"></td>
			<td>			
				
					1:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"><a href="soccer/team/1024" target="_blank" title="">卢宾扎格</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091379/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2091379/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2091379/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-05-08 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/658" target="_blank" title="">克拉科维</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"><a href="soccer/team/1142" target="_blank" title="">波兹南</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091380/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2091380/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2091380/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-05-08 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/659" target="_blank" title="">华沙军团</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"></td>
			<td>			
				
					4:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"><a href="soccer/team/1041" target="_blank" title="">格里维治</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				一球/球半
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091387/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2091387/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2091387/bfyc" target="_blank" class="oyx">析</a>
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
				
			<td>2015-08-21 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1234" target="_blank" title="">施切钦波</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"><a href="soccer/team/609" target="_blank" title="">克拉科夫</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987721/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987721/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987721/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-08-22 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5910" target="_blank" title="">列治亚</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"></td>
			<td>			
				
					3:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"><a href="soccer/team/667" target="_blank" title="">博格丹卡</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987719/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987719/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987719/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-08-22 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2342" target="_blank" title="">罗切霍茹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"></td>
			<td>			
				
					4:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"><a href="soccer/team/11123" target="_blank" title="">LKS尼切萨</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987722/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987722/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987722/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-08-22 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2894" target="_blank" title="">斯拉斯克</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173341.jpg"><a href="soccer/team/1442" target="_blank" title="">保德比斯</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987723/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987723/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987723/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-08-23 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/658" target="_blank" title="">克拉科维</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"><a href="soccer/team/3159" target="_blank" title="">乔治罗尼</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987716/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987716/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987716/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-08-23 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1142" target="_blank" title="">波兹南</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"><a href="soccer/team/1041" target="_blank" title="">格里维治</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987718/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987718/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987718/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-08-23 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/659" target="_blank" title="">华沙军团</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"><a href="soccer/team/1009" target="_blank" title="">哥罗纳</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				球半
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987720/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987720/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987720/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-08-24 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1143" target="_blank" title="">萨比利斯</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814173929.gif"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"><a href="soccer/team/1024" target="_blank" title="">卢宾扎格</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987717/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987717/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987717/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-05-11 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/667" target="_blank" title="">博格丹卡</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"></td>
			<td>			
				
					5:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173341.jpg"><a href="soccer/team/1442" target="_blank" title="">保德比斯</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091390/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2091390/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2091390/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-05-11 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/609" target="_blank" title="">克拉科夫</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"><a href="soccer/team/2894" target="_blank" title="">斯拉斯克</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091391/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2091391/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2091391/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-05-11 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1143" target="_blank" title="">萨比利斯</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814173929.gif"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"><a href="soccer/team/1009" target="_blank" title="">哥罗纳</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091392/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2091392/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2091392/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-05-11 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3159" target="_blank" title="">乔治罗尼</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"><a href="soccer/team/11123" target="_blank" title="">LKS尼切萨</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091393/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2091393/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2091393/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-05-12 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5910" target="_blank" title="">列治亚</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"><a href="soccer/team/659" target="_blank" title="">华沙军团</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091394/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2091394/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2091394/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-05-12 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1234" target="_blank" title="">施切钦波</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"></td>
			<td>			
				
					3:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"><a href="soccer/team/658" target="_blank" title="">克拉科维</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091395/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2091395/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2091395/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-05-12 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2342" target="_blank" title="">罗切霍茹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"></td>
			<td>			
				
					0:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"><a href="soccer/team/1041" target="_blank" title="">格里维治</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091396/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2091396/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2091396/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-05-12 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1024" target="_blank" title="">卢宾扎格</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"></td>
			<td>			
				
					3:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"><a href="soccer/team/1142" target="_blank" title="">波兹南</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091397/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2091397/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2091397/bfyc" target="_blank" class="oyx">析</a>
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
				
			<td>2015-08-28 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1442" target="_blank" title="">保德比斯</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173341.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"><a href="soccer/team/5910" target="_blank" title="">列治亚</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987741/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987741/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987741/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-08-29 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/609" target="_blank" title="">克拉科夫</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"></td>
			<td>			
				
					4:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"><a href="soccer/team/2894" target="_blank" title="">斯拉斯克</a></td>
			<td>			
				
					2:1
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987742/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987742/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987742/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-08-29 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1041" target="_blank" title="">格里维治</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"></td>
			<td>			
				
					3:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"><a href="soccer/team/667" target="_blank" title="">博格丹卡</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987740/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987740/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987740/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-08-29 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1024" target="_blank" title="">卢宾扎格</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"></td>
			<td>			
				
					3:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"><a href="soccer/team/2342" target="_blank" title="">罗切霍茹</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987743/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987743/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987743/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-08-30 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1009" target="_blank" title="">哥罗纳</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"><a href="soccer/team/1234" target="_blank" title="">施切钦波</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987738/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987738/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987738/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-08-30 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1143" target="_blank" title="">萨比利斯</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814173929.gif"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"><a href="soccer/team/658" target="_blank" title="">克拉科维</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987736/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987736/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987736/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-08-30 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/11123" target="_blank" title="">LKS尼切萨</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"></td>
			<td>			
				
					3:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"><a href="soccer/team/1142" target="_blank" title="">波兹南</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				受半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987739/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987739/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987739/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-08-30 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3159" target="_blank" title="">乔治罗尼</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"><a href="soccer/team/659" target="_blank" title="">华沙军团</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				受半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987737/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987737/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987737/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-05-14 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1442" target="_blank" title="">保德比斯</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173341.jpg"></td>
			<td>			
				
					3:4
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"><a href="soccer/team/609" target="_blank" title="">克拉科夫</a></td>
			<td>			
				
					2:1
							
			</td>
			<td>
			
				受半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091403/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2091403/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2091403/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-05-14 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2894" target="_blank" title="">斯拉斯克</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"></td>
			<td>			
				
					3:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"><a href="soccer/team/667" target="_blank" title="">博格丹卡</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091404/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2091404/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2091404/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-05-14 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1009" target="_blank" title="">哥罗纳</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"></td>
			<td>			
				
					1:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"><a href="soccer/team/3159" target="_blank" title="">乔治罗尼</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091405/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2091405/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2091405/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-05-14 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/11123" target="_blank" title="">LKS尼切萨</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814173929.gif"><a href="soccer/team/1143" target="_blank" title="">萨比利斯</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091406/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2091406/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2091406/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-05-15 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/659" target="_blank" title="">华沙军团</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"></td>
			<td>			
				
					3:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"><a href="soccer/team/1234" target="_blank" title="">施切钦波</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				球半/两球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091440/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2091440/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2091440/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-05-15 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/658" target="_blank" title="">克拉科维</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"><a href="soccer/team/5910" target="_blank" title="">列治亚</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091441/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2091441/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2091441/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-05-15 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1041" target="_blank" title="">格里维治</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"><a href="soccer/team/1024" target="_blank" title="">卢宾扎格</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091442/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2091442/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2091442/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-05-15 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1142" target="_blank" title="">波兹南</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"></td>
			<td>			
				
					3:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"><a href="soccer/team/2342" target="_blank" title="">罗切霍茹</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091443/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2091443/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2091443/bfyc" target="_blank" class="oyx">析</a>
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
				
			<td>2015-09-11 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5910" target="_blank" title="">列治亚</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"><a href="soccer/team/1009" target="_blank" title="">哥罗纳</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987750/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987750/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987750/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-09-12 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/659" target="_blank" title="">华沙军团</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"><a href="soccer/team/1024" target="_blank" title="">卢宾扎格</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987751/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987751/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987751/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-09-12 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2894" target="_blank" title="">斯拉斯克</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"></td>
			<td>			
				
					3:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"><a href="soccer/team/3159" target="_blank" title="">乔治罗尼</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987770/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987770/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987770/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-09-12 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/658" target="_blank" title="">克拉科维</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"></td>
			<td>			
				
					2:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"><a href="soccer/team/11123" target="_blank" title="">LKS尼切萨</a></td>
			<td>			
				
					2:2
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987747/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987747/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987747/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-09-13 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1142" target="_blank" title="">波兹南</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173341.jpg"><a href="soccer/team/1442" target="_blank" title="">保德比斯</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				一球/球半
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987749/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987749/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987749/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-09-13 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1234" target="_blank" title="">施切钦波</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"></td>
			<td>			
				
					3:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"><a href="soccer/team/1041" target="_blank" title="">格里维治</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987752/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987752/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987752/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-09-13 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2342" target="_blank" title="">罗切霍茹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814173929.gif"><a href="soccer/team/1143" target="_blank" title="">萨比利斯</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987769/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987769/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987769/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-09-14 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/667" target="_blank" title="">博格丹卡</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"><a href="soccer/team/609" target="_blank" title="">克拉科夫</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987748/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987748/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987748/bfyc" target="_blank" class="oyx">析</a>
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
				
			<td>2015-09-18 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1143" target="_blank" title="">萨比利斯</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814173929.gif"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"><a href="soccer/team/2894" target="_blank" title="">斯拉斯克</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987777/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987777/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987777/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-09-19 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1024" target="_blank" title="">卢宾扎格</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"></td>
			<td>			
				
					4:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"><a href="soccer/team/658" target="_blank" title="">克拉科维</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987784/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987784/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987784/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-09-19 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/11123" target="_blank" title="">LKS尼切萨</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"><a href="soccer/team/1234" target="_blank" title="">施切钦波</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987780/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987780/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987780/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-09-19 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1442" target="_blank" title="">保德比斯</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173341.jpg"></td>
			<td>			
				
					0:6
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"><a href="soccer/team/609" target="_blank" title="">克拉科夫</a></td>
			<td>			
				
					0:3
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987782/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987782/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987782/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-09-20 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1041" target="_blank" title="">格里维治</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"><a href="soccer/team/5910" target="_blank" title="">列治亚</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987781/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987781/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987781/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-09-20 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2342" target="_blank" title="">罗切霍茹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"></td>
			<td>			
				
					1:4
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"><a href="soccer/team/659" target="_blank" title="">华沙军团</a></td>
			<td>			
				
					1:3
							
			</td>
			<td>
			
				受半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987783/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987783/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987783/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-09-20 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3159" target="_blank" title="">乔治罗尼</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"><a href="soccer/team/1142" target="_blank" title="">波兹南</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987778/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987778/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987778/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-09-21 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1009" target="_blank" title="">哥罗纳</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"><a href="soccer/team/667" target="_blank" title="">博格丹卡</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987779/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987779/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987779/bfyc" target="_blank" class="oyx">析</a>
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
				
			<td>2015-09-25 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/609" target="_blank" title="">克拉科夫</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"><a href="soccer/team/1009" target="_blank" title="">哥罗纳</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987810/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987810/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987810/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-09-26 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2894" target="_blank" title="">斯拉斯克</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"><a href="soccer/team/1041" target="_blank" title="">格里维治</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987792/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987792/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987792/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-09-26 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/667" target="_blank" title="">博格丹卡</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173341.jpg"><a href="soccer/team/1442" target="_blank" title="">保德比斯</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987787/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987787/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987787/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-09-26 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/658" target="_blank" title="">克拉科维</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"><a href="soccer/team/2342" target="_blank" title="">罗切霍茹</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987786/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987786/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987786/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-09-27 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1142" target="_blank" title="">波兹南</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814173929.gif"><a href="soccer/team/1143" target="_blank" title="">萨比利斯</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987788/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987788/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987788/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-09-27 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5910" target="_blank" title="">列治亚</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"></td>
			<td>			
				
					3:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"><a href="soccer/team/1024" target="_blank" title="">卢宾扎格</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987789/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987789/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987789/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-09-27 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/659" target="_blank" title="">华沙军团</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"><a href="soccer/team/11123" target="_blank" title="">LKS尼切萨</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				一球/球半
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987790/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987790/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987790/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-09-28 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1234" target="_blank" title="">施切钦波</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"><a href="soccer/team/3159" target="_blank" title="">乔治罗尼</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987791/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987791/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987791/bfyc" target="_blank" class="oyx">析</a>
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
				
			<td>2015-10-02 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2342" target="_blank" title="">罗切霍茹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"><a href="soccer/team/1234" target="_blank" title="">施切钦波</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987829/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987829/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987829/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-10-03 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3159" target="_blank" title="">乔治罗尼</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"></td>
			<td>			
				
					0:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"><a href="soccer/team/5910" target="_blank" title="">列治亚</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987844/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987844/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987844/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-10-03 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/11123" target="_blank" title="">LKS尼切萨</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"><a href="soccer/team/667" target="_blank" title="">博格丹卡</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987827/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987827/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987827/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-10-03 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1009" target="_blank" title="">哥罗纳</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173341.jpg"><a href="soccer/team/1442" target="_blank" title="">保德比斯</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987826/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987826/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987826/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-10-04 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1041" target="_blank" title="">格里维治</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"><a href="soccer/team/609" target="_blank" title="">克拉科夫</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987828/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987828/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987828/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-10-04 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1143" target="_blank" title="">萨比利斯</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814173929.gif"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"><a href="soccer/team/659" target="_blank" title="">华沙军团</a></td>
			<td>			
				
					2:2
							
			</td>
			<td>
			
				受半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987843/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987843/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987843/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-10-04 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1024" target="_blank" title="">卢宾扎格</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"><a href="soccer/team/2894" target="_blank" title="">斯拉斯克</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987830/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987830/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987830/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-10-04 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/658" target="_blank" title="">克拉科维</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"></td>
			<td>			
				
					5:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"><a href="soccer/team/1142" target="_blank" title="">波兹南</a></td>
			<td>			
				
					3:0
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987842/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987842/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987842/bfyc" target="_blank" class="oyx">析</a>
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
				
			<td>2015-10-16 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5910" target="_blank" title="">列治亚</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814173929.gif"><a href="soccer/team/1143" target="_blank" title="">萨比利斯</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987868/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987868/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987868/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-10-17 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2894" target="_blank" title="">斯拉斯克</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"><a href="soccer/team/1009" target="_blank" title="">哥罗纳</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987872/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987872/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987872/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-10-17 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1442" target="_blank" title="">保德比斯</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173341.jpg"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"><a href="soccer/team/1041" target="_blank" title="">格里维治</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987870/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987870/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987870/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-10-17 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/667" target="_blank" title="">博格丹卡</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"></td>
			<td>			
				
					3:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"><a href="soccer/team/3159" target="_blank" title="">乔治罗尼</a></td>
			<td>			
				
					2:1
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987866/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987866/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987866/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-10-17 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1142" target="_blank" title="">波兹南</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"><a href="soccer/team/2342" target="_blank" title="">罗切霍茹</a></td>
			<td>			
				
					1:2
							
			</td>
			<td>
			
				一球/球半
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987867/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987867/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987867/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-10-18 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/609" target="_blank" title="">克拉科夫</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"><a href="soccer/team/11123" target="_blank" title="">LKS尼切萨</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987873/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987873/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987873/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-10-18 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/659" target="_blank" title="">华沙军团</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"></td>
			<td>			
				
					3:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"><a href="soccer/team/658" target="_blank" title="">克拉科维</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987869/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987869/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987869/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-10-19 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1234" target="_blank" title="">施切钦波</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"><a href="soccer/team/1024" target="_blank" title="">卢宾扎格</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987871/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987871/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987871/bfyc" target="_blank" class="oyx">析</a>
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
				
			<td>2015-10-23 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2342" target="_blank" title="">罗切霍茹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"><a href="soccer/team/2894" target="_blank" title="">斯拉斯克</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987904/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987904/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987904/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-10-24 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3159" target="_blank" title="">乔治罗尼</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"></td>
			<td>			
				
					1:4
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"><a href="soccer/team/609" target="_blank" title="">克拉科夫</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987900/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987900/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987900/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-10-24 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/658" target="_blank" title="">克拉科维</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"></td>
			<td>			
				
					4:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"><a href="soccer/team/1234" target="_blank" title="">施切钦波</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987898/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987898/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987898/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-10-24 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1041" target="_blank" title="">格里维治</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"><a href="soccer/team/1009" target="_blank" title="">哥罗纳</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987903/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987903/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987903/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-10-24 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1024" target="_blank" title="">卢宾扎格</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"><a href="soccer/team/667" target="_blank" title="">博格丹卡</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987905/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987905/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987905/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-10-25 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/11123" target="_blank" title="">LKS尼切萨</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"><a href="soccer/team/5910" target="_blank" title="">列治亚</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				受半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987902/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987902/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987902/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-10-26 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/659" target="_blank" title="">华沙军团</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"><a href="soccer/team/1142" target="_blank" title="">波兹南</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987901/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987901/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987901/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-10-27 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1143" target="_blank" title="">萨比利斯</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814173929.gif"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173341.jpg"><a href="soccer/team/1442" target="_blank" title="">保德比斯</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987899/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987899/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987899/bfyc" target="_blank" class="oyx">析</a>
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
				
			<td>2015-10-31 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1234" target="_blank" title="">施切钦波</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814173929.gif"><a href="soccer/team/1143" target="_blank" title="">萨比利斯</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987940/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987940/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987940/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-10-31 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/667" target="_blank" title="">博格丹卡</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"><a href="soccer/team/658" target="_blank" title="">克拉科维</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987935/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987935/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987935/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-10-31 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/609" target="_blank" title="">克拉科夫</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"><a href="soccer/team/2342" target="_blank" title="">罗切霍茹</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987942/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987942/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987942/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-10-31 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1041" target="_blank" title="">格里维治</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"><a href="soccer/team/1024" target="_blank" title="">卢宾扎格</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987938/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987938/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987938/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-11-01 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5910" target="_blank" title="">列治亚</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"></td>
			<td>			
				
					1:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"><a href="soccer/team/659" target="_blank" title="">华沙军团</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987937/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987937/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987937/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-11-01 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2894" target="_blank" title="">斯拉斯克</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"><a href="soccer/team/1142" target="_blank" title="">波兹南</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987941/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987941/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987941/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-11-03 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1009" target="_blank" title="">哥罗纳</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"><a href="soccer/team/11123" target="_blank" title="">LKS尼切萨</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987936/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987936/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987936/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-11-03 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1442" target="_blank" title="">保德比斯</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173341.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"><a href="soccer/team/3159" target="_blank" title="">乔治罗尼</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987939/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987939/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987939/bfyc" target="_blank" class="oyx">析</a>
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
				
			<td>2015-11-07 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1024" target="_blank" title="">卢宾扎格</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"></td>
			<td>			
				
					1:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"><a href="soccer/team/609" target="_blank" title="">克拉科夫</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987950/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987950/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987950/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-11-07 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/658" target="_blank" title="">克拉科维</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"></td>
			<td>			
				
					4:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"><a href="soccer/team/2894" target="_blank" title="">斯拉斯克</a></td>
			<td>			
				
					4:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987943/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987943/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987943/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-11-07 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/11123" target="_blank" title="">LKS尼切萨</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173341.jpg"><a href="soccer/team/1442" target="_blank" title="">保德比斯</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987948/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987948/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987948/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-11-08 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2342" target="_blank" title="">罗切霍茹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"></td>
			<td>			
				
					3:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"><a href="soccer/team/5910" target="_blank" title="">列治亚</a></td>
			<td>			
				
					3:0
							
			</td>
			<td>
			
				受半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987949/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987949/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987949/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-11-08 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3159" target="_blank" title="">乔治罗尼</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"><a href="soccer/team/1041" target="_blank" title="">格里维治</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987945/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987945/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987945/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-11-08 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1143" target="_blank" title="">萨比利斯</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814173929.gif"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"><a href="soccer/team/1009" target="_blank" title="">哥罗纳</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987944/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987944/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987944/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-11-08 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1142" target="_blank" title="">波兹南</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"></td>
			<td>			
				
					3:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"><a href="soccer/team/667" target="_blank" title="">博格丹卡</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987946/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987946/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987946/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-11-09 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/659" target="_blank" title="">华沙军团</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"><a href="soccer/team/1234" target="_blank" title="">施切钦波</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987947/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987947/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987947/bfyc" target="_blank" class="oyx">析</a>
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
				
			<td>2015-11-21 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/11123" target="_blank" title="">LKS尼切萨</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"></td>
			<td>			
				
					3:5
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"><a href="soccer/team/1041" target="_blank" title="">格里维治</a></td>
			<td>			
				
					2:3
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987980/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987980/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987980/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-11-21 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1143" target="_blank" title="">萨比利斯</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814173929.gif"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"><a href="soccer/team/609" target="_blank" title="">克拉科夫</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				受半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987977/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987977/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987977/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-11-21 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3159" target="_blank" title="">乔治罗尼</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"><a href="soccer/team/1009" target="_blank" title="">哥罗纳</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987978/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987978/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987978/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-11-22 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/667" target="_blank" title="">博格丹卡</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"></td>
			<td>			
				
					0:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"><a href="soccer/team/2342" target="_blank" title="">罗切霍茹</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987976/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987976/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987976/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-11-22 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/659" target="_blank" title="">华沙军团</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"><a href="soccer/team/2894" target="_blank" title="">斯拉斯克</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987979/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987979/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987979/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-11-22 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1442" target="_blank" title="">保德比斯</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173341.jpg"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"><a href="soccer/team/1024" target="_blank" title="">卢宾扎格</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987981/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987981/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987981/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-11-23 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1234" target="_blank" title="">施切钦波</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"><a href="soccer/team/1142" target="_blank" title="">波兹南</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987982/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987982/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987982/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-11-24 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/658" target="_blank" title="">克拉科维</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"></td>
			<td>			
				
					3:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"><a href="soccer/team/5910" target="_blank" title="">列治亚</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987975/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987975/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987975/bfyc" target="_blank" class="oyx">析</a>
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
				
			<td>2015-11-28 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1009" target="_blank" title="">哥罗纳</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"><a href="soccer/team/1024" target="_blank" title="">卢宾扎格</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988006/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988006/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988006/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-11-28 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1041" target="_blank" title="">格里维治</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"></td>
			<td>			
				
					3:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"><a href="soccer/team/2342" target="_blank" title="">罗切霍茹</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988009/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988009/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988009/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-11-28 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1143" target="_blank" title="">萨比利斯</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814173929.gif"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"><a href="soccer/team/667" target="_blank" title="">博格丹卡</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988005/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988005/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988005/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-11-29 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2894" target="_blank" title="">斯拉斯克</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"><a href="soccer/team/1234" target="_blank" title="">施切钦波</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988011/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988011/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988011/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-11-29 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5910" target="_blank" title="">列治亚</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"><a href="soccer/team/1142" target="_blank" title="">波兹南</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988007/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988007/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988007/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-11-29 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1442" target="_blank" title="">保德比斯</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173341.jpg"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"><a href="soccer/team/659" target="_blank" title="">华沙军团</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				受半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988010/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988010/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988010/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-11-30 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/609" target="_blank" title="">克拉科夫</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"><a href="soccer/team/658" target="_blank" title="">克拉科维</a></td>
			<td>			
				
					1:2
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987919/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1987919/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1987919/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-12-17 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/11123" target="_blank" title="">LKS尼切萨</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"><a href="soccer/team/3159" target="_blank" title="">乔治罗尼</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988008/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988008/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988008/bfyc" target="_blank" class="oyx">析</a>
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
				
			<td>2015-12-02 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/11123" target="_blank" title="">LKS尼切萨</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"><a href="soccer/team/2894" target="_blank" title="">斯拉斯克</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988016/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988016/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988016/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-12-02 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2342" target="_blank" title="">罗切霍茹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"><a href="soccer/team/1009" target="_blank" title="">哥罗纳</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988018/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988018/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988018/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-12-02 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1143" target="_blank" title="">萨比利斯</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814173929.gif"></td>
			<td>			
				
					5:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"><a href="soccer/team/1041" target="_blank" title="">格里维治</a></td>
			<td>			
				
					1:2
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988013/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988013/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988013/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-12-02 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1024" target="_blank" title="">卢宾扎格</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"><a href="soccer/team/3159" target="_blank" title="">乔治罗尼</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988019/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988019/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988019/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-12-03 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/659" target="_blank" title="">华沙军团</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"><a href="soccer/team/667" target="_blank" title="">博格丹卡</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				一球/球半
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988015/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988015/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988015/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-12-03 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1234" target="_blank" title="">施切钦波</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"><a href="soccer/team/5910" target="_blank" title="">列治亚</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988017/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988017/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988017/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-12-03 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/658" target="_blank" title="">克拉科维</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"></td>
			<td>			
				
					4:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173341.jpg"><a href="soccer/team/1442" target="_blank" title="">保德比斯</a></td>
			<td>			
				
					2:1
							
			</td>
			<td>
			
				一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988012/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988012/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988012/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-12-03 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1142" target="_blank" title="">波兹南</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"><a href="soccer/team/609" target="_blank" title="">克拉科夫</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988014/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988014/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988014/bfyc" target="_blank" class="oyx">析</a>
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
				
			<td>2015-12-05 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1024" target="_blank" title="">卢宾扎格</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"><a href="soccer/team/11123" target="_blank" title="">LKS尼切萨</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988027/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988027/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988027/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-12-05 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3159" target="_blank" title="">乔治罗尼</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"></td>
			<td>			
				
					2:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814173929.gif"><a href="soccer/team/1143" target="_blank" title="">萨比利斯</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988021/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988021/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988021/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-12-05 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1009" target="_blank" title="">哥罗纳</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"><a href="soccer/team/1142" target="_blank" title="">波兹南</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				受半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988022/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988022/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988022/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-12-06 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1041" target="_blank" title="">格里维治</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"><a href="soccer/team/658" target="_blank" title="">克拉科维</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988024/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988024/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988024/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-12-06 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1442" target="_blank" title="">保德比斯</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173341.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"><a href="soccer/team/2342" target="_blank" title="">罗切霍茹</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988025/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988025/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988025/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-12-06 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5910" target="_blank" title="">列治亚</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"><a href="soccer/team/2894" target="_blank" title="">斯拉斯克</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988023/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988023/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988023/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-12-07 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/609" target="_blank" title="">克拉科夫</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"><a href="soccer/team/659" target="_blank" title="">华沙军团</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988026/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988026/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988026/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-12-08 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/667" target="_blank" title="">博格丹卡</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"></td>
			<td>			
				
					2:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"><a href="soccer/team/1234" target="_blank" title="">施切钦波</a></td>
			<td>			
				
					0:3
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988020/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988020/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988020/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_30" class="zstab" style="display: table;">
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
				
			<td>2016-04-09 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/667" target="_blank" title="">博格丹卡</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"><a href="soccer/team/1142" target="_blank" title="">波兹南</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988346/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988346/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988346/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-04-09 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1009" target="_blank" title="">哥罗纳</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814173929.gif"><a href="soccer/team/1143" target="_blank" title="">萨比利斯</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988347/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988347/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988347/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-04-09 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5910" target="_blank" title="">列治亚</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"><a href="soccer/team/2342" target="_blank" title="">罗切霍茹</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				一球/球半
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988348/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988348/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988348/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-04-09 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1041" target="_blank" title="">格里维治</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"><a href="soccer/team/3159" target="_blank" title="">乔治罗尼</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988349/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988349/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988349/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-04-09 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1442" target="_blank" title="">保德比斯</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173341.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"><a href="soccer/team/11123" target="_blank" title="">LKS尼切萨</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988354/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988354/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988354/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-04-09 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1234" target="_blank" title="">施切钦波</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"><a href="soccer/team/659" target="_blank" title="">华沙军团</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				受半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988355/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988355/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988355/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-04-09 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2894" target="_blank" title="">斯拉斯克</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"><a href="soccer/team/658" target="_blank" title="">克拉科维</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988356/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988356/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988356/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-04-09 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/609" target="_blank" title="">克拉科夫</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"><a href="soccer/team/1024" target="_blank" title="">卢宾扎格</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988357/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988357/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988357/bfyc" target="_blank" class="oyx">析</a>
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
				
			<td>2016-04-01 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1143" target="_blank" title="">萨比利斯</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814173929.gif"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"><a href="soccer/team/1234" target="_blank" title="">施切钦波</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988328/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988328/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988328/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-04-02 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1142" target="_blank" title="">波兹南</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"><a href="soccer/team/2894" target="_blank" title="">斯拉斯克</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988334/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988334/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988334/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-04-02 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/11123" target="_blank" title="">LKS尼切萨</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"><a href="soccer/team/1009" target="_blank" title="">哥罗纳</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988336/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988336/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988336/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-04-02 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/658" target="_blank" title="">克拉科维</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"><a href="soccer/team/667" target="_blank" title="">博格丹卡</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988327/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988327/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988327/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-04-03 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/659" target="_blank" title="">华沙军团</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"><a href="soccer/team/5910" target="_blank" title="">列治亚</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988335/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988335/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988335/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-04-03 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1024" target="_blank" title="">卢宾扎格</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"></td>
			<td>			
				
					4:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"><a href="soccer/team/1041" target="_blank" title="">格里维治</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988338/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988338/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988338/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-04-03 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2342" target="_blank" title="">罗切霍茹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"></td>
			<td>			
				
					2:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"><a href="soccer/team/609" target="_blank" title="">克拉科夫</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988337/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988337/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988337/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-04-04 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3159" target="_blank" title="">乔治罗尼</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"></td>
			<td>			
				
					0:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173341.jpg"><a href="soccer/team/1442" target="_blank" title="">保德比斯</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988293/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988293/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988293/bfyc" target="_blank" class="oyx">析</a>
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
				
			<td>2016-03-19 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1009" target="_blank" title="">哥罗纳</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"><a href="soccer/team/1041" target="_blank" title="">格里维治</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988288/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988288/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988288/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-03-19 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/609" target="_blank" title="">克拉科夫</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"></td>
			<td>			
				
					5:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"><a href="soccer/team/3159" target="_blank" title="">乔治罗尼</a></td>
			<td>			
				
					4:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988294/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988294/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988294/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-03-19 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1442" target="_blank" title="">保德比斯</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173341.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814173929.gif"><a href="soccer/team/1143" target="_blank" title="">萨比利斯</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988251/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988251/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988251/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-03-20 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2894" target="_blank" title="">斯拉斯克</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"><a href="soccer/team/2342" target="_blank" title="">罗切霍茹</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988253/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988253/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988253/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-03-20 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1142" target="_blank" title="">波兹南</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"><a href="soccer/team/659" target="_blank" title="">华沙军团</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988249/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988249/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988249/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-03-20 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/667" target="_blank" title="">博格丹卡</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"><a href="soccer/team/1024" target="_blank" title="">卢宾扎格</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988287/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988287/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988287/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-03-20 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5910" target="_blank" title="">列治亚</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"><a href="soccer/team/11123" target="_blank" title="">LKS尼切萨</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988250/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988250/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988250/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-03-21 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1234" target="_blank" title="">施切钦波</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"><a href="soccer/team/658" target="_blank" title="">克拉科维</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988252/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988252/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988252/bfyc" target="_blank" class="oyx">析</a>
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
				
			<td>2016-03-12 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1009" target="_blank" title="">哥罗纳</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"><a href="soccer/team/2894" target="_blank" title="">斯拉斯克</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988278/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988278/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988278/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-03-12 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1041" target="_blank" title="">格里维治</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"></td>
			<td>			
				
					3:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173341.jpg"><a href="soccer/team/1442" target="_blank" title="">保德比斯</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988280/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988280/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988280/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-03-12 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3159" target="_blank" title="">乔治罗尼</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"><a href="soccer/team/667" target="_blank" title="">博格丹卡</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988240/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988240/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988240/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-03-13 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/658" target="_blank" title="">克拉科维</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"><a href="soccer/team/659" target="_blank" title="">华沙军团</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988238/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988238/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988238/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-03-13 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2342" target="_blank" title="">罗切霍茹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"></td>
			<td>			
				
					1:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"><a href="soccer/team/1142" target="_blank" title="">波兹南</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988281/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988281/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988281/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-03-13 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1024" target="_blank" title="">卢宾扎格</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"><a href="soccer/team/1234" target="_blank" title="">施切钦波</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988282/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988282/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988282/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-03-14 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1143" target="_blank" title="">萨比利斯</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814173929.gif"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"><a href="soccer/team/5910" target="_blank" title="">列治亚</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				受半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988239/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988239/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988239/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-03-15 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/11123" target="_blank" title="">LKS尼切萨</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"></td>
			<td>			
				
					2:4
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"><a href="soccer/team/609" target="_blank" title="">克拉科夫</a></td>
			<td>			
				
					1:2
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988279/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988279/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988279/bfyc" target="_blank" class="oyx">析</a>
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
				
			<td>2016-03-05 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1442" target="_blank" title="">保德比斯</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173341.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"><a href="soccer/team/1009" target="_blank" title="">哥罗纳</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988264/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988264/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988264/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-03-05 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/609" target="_blank" title="">克拉科夫</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"><a href="soccer/team/1041" target="_blank" title="">格里维治</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988267/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988267/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988267/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-03-05 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/667" target="_blank" title="">博格丹卡</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"><a href="soccer/team/11123" target="_blank" title="">LKS尼切萨</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988260/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988260/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988260/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-03-06 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2894" target="_blank" title="">斯拉斯克</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"><a href="soccer/team/1024" target="_blank" title="">卢宾扎格</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988266/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988266/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988266/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-03-06 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/659" target="_blank" title="">华沙军团</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"></td>
			<td>			
				
					3:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814173929.gif"><a href="soccer/team/1143" target="_blank" title="">萨比利斯</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				球半
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988263/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988263/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988263/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-03-06 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5910" target="_blank" title="">列治亚</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"></td>
			<td>			
				
					5:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"><a href="soccer/team/3159" target="_blank" title="">乔治罗尼</a></td>
			<td>			
				
					3:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988262/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988262/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988262/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-03-07 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1142" target="_blank" title="">波兹南</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"><a href="soccer/team/658" target="_blank" title="">克拉科维</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988261/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988261/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988261/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-03-08 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1234" target="_blank" title="">施切钦波</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"></td>
			<td>			
				
					2:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"><a href="soccer/team/2342" target="_blank" title="">罗切霍茹</a></td>
			<td>			
				
					2:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988265/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988265/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988265/bfyc" target="_blank" class="oyx">析</a>
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
				
			<td>2016-03-02 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1442" target="_blank" title="">保德比斯</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173341.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"><a href="soccer/team/667" target="_blank" title="">博格丹卡</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988133/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988133/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988133/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-03-02 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1024" target="_blank" title="">卢宾扎格</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"><a href="soccer/team/5910" target="_blank" title="">列治亚</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988235/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988235/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988235/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-03-03 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/11123" target="_blank" title="">LKS尼切萨</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"></td>
			<td>			
				
					3:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"><a href="soccer/team/659" target="_blank" title="">华沙军团</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				受半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988131/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988131/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988131/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-03-03 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2342" target="_blank" title="">罗切霍茹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"></td>
			<td>			
				
					2:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"><a href="soccer/team/658" target="_blank" title="">克拉科维</a></td>
			<td>			
				
					2:1
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988234/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988234/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988234/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-03-03 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1143" target="_blank" title="">萨比利斯</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814173929.gif"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"><a href="soccer/team/1142" target="_blank" title="">波兹南</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				受半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988128/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988128/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988128/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-03-03 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3159" target="_blank" title="">乔治罗尼</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"><a href="soccer/team/1234" target="_blank" title="">施切钦波</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988129/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988129/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988129/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-03-09 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1009" target="_blank" title="">哥罗纳</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"><a href="soccer/team/609" target="_blank" title="">克拉科夫</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988130/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988130/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988130/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-03-09 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1041" target="_blank" title="">格里维治</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"><a href="soccer/team/2894" target="_blank" title="">斯拉斯克</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988132/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988132/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988132/bfyc" target="_blank" class="oyx">析</a>
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
				
			<td>2016-02-27 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2894" target="_blank" title="">斯拉斯克</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814173929.gif"><a href="soccer/team/1143" target="_blank" title="">萨比利斯</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988215/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988215/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988215/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-02-27 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/658" target="_blank" title="">克拉科维</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"><a href="soccer/team/1024" target="_blank" title="">卢宾扎格</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988209/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988209/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988209/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-02-27 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/667" target="_blank" title="">博格丹卡</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"></td>
			<td>			
				
					3:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"><a href="soccer/team/1009" target="_blank" title="">哥罗纳</a></td>
			<td>			
				
					2:2
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988210/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988210/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988210/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-02-28 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5910" target="_blank" title="">列治亚</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"></td>
			<td>			
				
					3:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"><a href="soccer/team/1041" target="_blank" title="">格里维治</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988212/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988212/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988212/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-02-28 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/609" target="_blank" title="">克拉科夫</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173341.jpg"><a href="soccer/team/1442" target="_blank" title="">保德比斯</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988216/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988216/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988216/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-02-28 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1142" target="_blank" title="">波兹南</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"><a href="soccer/team/3159" target="_blank" title="">乔治罗尼</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988211/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988211/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988211/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-02-28 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1234" target="_blank" title="">施切钦波</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"><a href="soccer/team/11123" target="_blank" title="">LKS尼切萨</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988214/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988214/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988214/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-02-29 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/659" target="_blank" title="">华沙军团</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"><a href="soccer/team/2342" target="_blank" title="">罗切霍茹</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				球半
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988213/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988213/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988213/bfyc" target="_blank" class="oyx">析</a>
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
				
			<td>2016-02-20 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3159" target="_blank" title="">乔治罗尼</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"><a href="soccer/team/2894" target="_blank" title="">斯拉斯克</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988190/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988190/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988190/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-02-20 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1041" target="_blank" title="">格里维治</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"><a href="soccer/team/1234" target="_blank" title="">施切钦波</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988193/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988193/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988193/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-02-20 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1009" target="_blank" title="">哥罗纳</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"></td>
			<td>			
				
					4:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"><a href="soccer/team/5910" target="_blank" title="">列治亚</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988191/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988191/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988191/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-02-21 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/11123" target="_blank" title="">LKS尼切萨</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"><a href="soccer/team/658" target="_blank" title="">克拉科维</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988192/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988192/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988192/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-02-21 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1442" target="_blank" title="">保德比斯</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173341.jpg"></td>
			<td>			
				
					4:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"><a href="soccer/team/1142" target="_blank" title="">波兹南</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				受半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988194/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988194/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988194/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-02-21 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1024" target="_blank" title="">卢宾扎格</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"><a href="soccer/team/659" target="_blank" title="">华沙军团</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				受半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988196/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988196/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988196/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-02-22 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1143" target="_blank" title="">萨比利斯</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814173929.gif"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"><a href="soccer/team/2342" target="_blank" title="">罗切霍茹</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988189/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988189/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988189/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-02-23 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/609" target="_blank" title="">克拉科夫</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"><a href="soccer/team/667" target="_blank" title="">博格丹卡</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988195/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988195/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988195/bfyc" target="_blank" class="oyx">析</a>
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
				
			<td>2016-02-13 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2342" target="_blank" title="">罗切霍茹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"><a href="soccer/team/1024" target="_blank" title="">卢宾扎格</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988175/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988175/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988175/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-02-13 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2894" target="_blank" title="">斯拉斯克</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"><a href="soccer/team/609" target="_blank" title="">克拉科夫</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988176/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988176/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988176/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-02-13 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/667" target="_blank" title="">博格丹卡</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"><a href="soccer/team/1041" target="_blank" title="">格里维治</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988171/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988171/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988171/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-02-14 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/658" target="_blank" title="">克拉科维</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"></td>
			<td>			
				
					3:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814173929.gif"><a href="soccer/team/1143" target="_blank" title="">萨比利斯</a></td>
			<td>			
				
					3:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988170/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988170/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988170/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-02-14 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5910" target="_blank" title="">列治亚</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"></td>
			<td>			
				
					5:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173341.jpg"><a href="soccer/team/1442" target="_blank" title="">保德比斯</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988173/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988173/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988173/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-02-14 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1142" target="_blank" title="">波兹南</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"></td>
			<td>			
				
					5:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"><a href="soccer/team/11123" target="_blank" title="">LKS尼切萨</a></td>
			<td>			
				
					2:1
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988172/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988172/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988172/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-02-15 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/659" target="_blank" title="">华沙军团</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"></td>
			<td>			
				
					4:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"><a href="soccer/team/3159" target="_blank" title="">乔治罗尼</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988126/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988126/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988126/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-02-16 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1234" target="_blank" title="">施切钦波</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"></td>
			<td>			
				
					3:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"><a href="soccer/team/1009" target="_blank" title="">哥罗纳</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988174/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988174/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988174/bfyc" target="_blank" class="oyx">析</a>
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
				
			<td>2015-12-19 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1024" target="_blank" title="">卢宾扎格</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"></td>
			<td>			
				
					2:4
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814173929.gif"><a href="soccer/team/1143" target="_blank" title="">萨比利斯</a></td>
			<td>			
				
					2:2
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988067/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988067/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988067/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-12-19 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/609" target="_blank" title="">克拉科夫</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"><a href="soccer/team/1234" target="_blank" title="">施切钦波</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988066/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988066/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988066/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-12-19 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/11123" target="_blank" title="">LKS尼切萨</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"><a href="soccer/team/2342" target="_blank" title="">罗切霍茹</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988063/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988063/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988063/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-12-20 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/667" target="_blank" title="">博格丹卡</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"></td>
			<td>			
				
					3:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"><a href="soccer/team/5910" target="_blank" title="">列治亚</a></td>
			<td>			
				
					2:1
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988060/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988060/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988060/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-12-20 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3159" target="_blank" title="">乔治罗尼</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"><a href="soccer/team/658" target="_blank" title="">克拉科维</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988061/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988061/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988061/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-12-20 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1009" target="_blank" title="">哥罗纳</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"></td>
			<td>			
				
					1:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"><a href="soccer/team/659" target="_blank" title="">华沙军团</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				受半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988062/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988062/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988062/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-12-21 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1041" target="_blank" title="">格里维治</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"><a href="soccer/team/1142" target="_blank" title="">波兹南</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988064/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988064/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988064/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-12-22 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1442" target="_blank" title="">保德比斯</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173341.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"><a href="soccer/team/2894" target="_blank" title="">斯拉斯克</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988065/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988065/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988065/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_20" class="zstab" style="display: none;">
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
				
			<td>2015-12-12 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2894" target="_blank" title="">斯拉斯克</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"><a href="soccer/team/667" target="_blank" title="">博格丹卡</a></td>
			<td>			
				
					2:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988047/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988047/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988047/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-12-12 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2342" target="_blank" title="">罗切霍茹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"></td>
			<td>			
				
					0:4
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"><a href="soccer/team/3159" target="_blank" title="">乔治罗尼</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988046/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988046/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988046/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-12-12 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1234" target="_blank" title="">施切钦波</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173341.jpg"><a href="soccer/team/1442" target="_blank" title="">保德比斯</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988045/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988045/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988045/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-12-13 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1143" target="_blank" title="">萨比利斯</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814173929.gif"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"><a href="soccer/team/11123" target="_blank" title="">LKS尼切萨</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988041/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988041/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988041/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-12-13 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5910" target="_blank" title="">列治亚</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"><a href="soccer/team/609" target="_blank" title="">克拉科夫</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988043/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988043/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988043/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-12-13 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1142" target="_blank" title="">波兹南</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"><a href="soccer/team/1024" target="_blank" title="">卢宾扎格</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988042/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988042/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988042/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-12-14 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/659" target="_blank" title="">华沙军团</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"><a href="soccer/team/1041" target="_blank" title="">格里维治</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988044/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988044/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988044/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-12-15 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/658" target="_blank" title="">克拉科维</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"><a href="soccer/team/1009" target="_blank" title="">哥罗纳</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988040/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/1988040/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/1988040/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
</tbody></table>


</div>
		<div class="league_right_022" id="matchInfofj">
		</div>
	</div>
	



</body>