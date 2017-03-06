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
<a style="height:69px;overflow:hidden;" onclick="_hmt.push(['_trackEvent', '头部广告', 'click', '看专家推荐 天天中奖更容易', 1])" href="http://news.zgzcw.com/zjtj/index.shtml" target="_blank" rel="nofollow"><img class="ad01" width="384" height="69" src="http://public.zgzcw.com/d/images/20161071475821970022_721.png" alt="看专家推荐 天天中奖更容易" title="看专家推荐 天天中奖更容易">
</a>

</div>
<span class="kf"> <a href="javascript:;" onclick="open_kfchat()"></a>
 <p> <span id="nyr">2017-3-6</span> <br>
    <b id="xt_h">11</b><b id="xt_m">05</b><b id="xt_s">52</b> </p>
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
						<a href="http://saishi.zgzcw.com:80/soccer/league/6/2016-2017/ssb">
						射手榜</a></li>
						<li>
						<a href="http://saishi.zgzcw.com:80/soccer/league/6/2016-2017/jqds">
						总进球单双</a></li>
						<li>
						<a href="http://saishi.zgzcw.com:80/soccer/league/6/2016-2017/sxds">
						上下单双</a></li>
						<li>
						<a href="http://saishi.zgzcw.com:80/soccer/league/6/2016-2017/sxpl">
						上下盘路榜</a></li>
					</ul>
				</div>
			
			<div class="tongji_list">
				<div>球队列表</div>
				<ul>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/659" target="_blank" class="a1" title="华沙军团">
					<li>华沙军团</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/3159" target="_blank" class="a1" title="乔治罗尼">
					<li>乔治罗尼</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/5910" target="_blank" class="a1" title="列治亚">
					<li>列治亚</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/1142" target="_blank" class="a1" title="波兹南">
					<li>波兹南</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/609" target="_blank" class="a1" title="克拉科夫">
					<li>克拉科夫</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/1009" target="_blank" class="a1" title="哥罗纳">
					<li>哥罗纳</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/1234" target="_blank" class="a1" title="施切钦波">
					<li>施切钦波</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/658" target="_blank" class="a1" title="克拉科维">
					<li>克拉科维</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/2342" target="_blank" class="a1" title="罗切霍茹">
					<li>罗切霍茹</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/1024" target="_blank" class="a1" title="卢宾扎格">
					<li>卢宾扎格</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/652" target="_blank" class="a1" title="普洛克">
					<li>普洛克</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/2537" target="_blank" class="a1" title="阿卡">
					<li>阿卡</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/11123" target="_blank" class="a1" title="LKS尼切萨">
					<li>LKS尼切萨</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/2894" target="_blank" class="a1" title="斯拉斯克">
					<li>斯拉斯克</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/1041" target="_blank" class="a1" title="格里维治">
					<li>格里维治</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/667" target="_blank" class="a1" title="博格丹卡">
					<li>博格丹卡</li>
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
					
						
							<option value="2016-2017" selected="selected">2016-2017赛季</option>
						
					
						
							<option value="2015-2016">2015-2016赛季</option>
						
					
						
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
					
						<option value="652">普洛克</option>
					
						<option value="658">克拉科维</option>
					
						<option value="659">华沙军团</option>
					
						<option value="667">博格丹卡</option>
					
						<option value="1009">哥罗纳</option>
					
						<option value="1024">卢宾扎格</option>
					
						<option value="1041">格里维治</option>
					
						<option value="1142">波兹南</option>
					
						<option value="1234">施切钦波</option>
					
						<option value="2342">罗切霍茹</option>
					
						<option value="2537">阿卡</option>
					
						<option value="2894">斯拉斯克</option>
					
						<option value="3159">乔治罗尼</option>
					
						<option value="5910">列治亚</option>
					
						<option value="11123">LKS尼切萨</option>
					
				</select> <select id="selectTeam2" style="display:none;">
					<option value="0" selected="selected">选择球队</option>
					
						<option value="609">克拉科夫</option>
					
						<option value="652">普洛克</option>
					
						<option value="658">克拉科维</option>
					
						<option value="659">华沙军团</option>
					
						<option value="667">博格丹卡</option>
					
						<option value="1009">哥罗纳</option>
					
						<option value="1024">卢宾扎格</option>
					
						<option value="1041">格里维治</option>
					
						<option value="1142">波兹南</option>
					
						<option value="1234">施切钦波</option>
					
						<option value="2342">罗切霍茹</option>
					
						<option value="2537">阿卡</option>
					
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
			波兰超2016-2017 -- 赛程&nbsp;
						
			
		</div> -->
	<div class="table_out">
		<div class="table_head">
			<div class="team_out2">
			
				<div class="div-select team_lian fl" id="selectTeam" value="0">
                    <span>请选择球队</span>
                    <ul class="select_options">
                        
							<li value="609">克拉科夫</li>
						
							<li value="652">普洛克</li>
						
							<li value="658">克拉科维</li>
						
							<li value="659">华沙军团</li>
						
							<li value="667">博格丹卡</li>
						
							<li value="1009">哥罗纳</li>
						
							<li value="1024">卢宾扎格</li>
						
							<li value="1041">格里维治</li>
						
							<li value="1142">波兹南</li>
						
							<li value="1234">施切钦波</li>
						
							<li value="2342">罗切霍茹</li>
						
							<li value="2537">阿卡</li>
						
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
						
							<li value="652">普洛克</li>
						
							<li value="658">克拉科维</li>
						
							<li value="659">华沙军团</li>
						
							<li value="667">博格丹卡</li>
						
							<li value="1009">哥罗纳</li>
						
							<li value="1024">卢宾扎格</li>
						
							<li value="1041">格里维治</li>
						
							<li value="1142">波兹南</li>
						
							<li value="1234">施切钦波</li>
						
							<li value="2342">罗切霍茹</li>
						
							<li value="2537">阿卡</li>
						
							<li value="2894">斯拉斯克</li>
						
							<li value="3159">乔治罗尼</li>
						
							<li value="5910">列治亚</li>
						
							<li value="11123">LKS尼切萨</li>
						
                    </ul>
                </div>
               
			</div>
			<span>
				2016-2017波兰超赛事
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
				
					
						<option value="2016-2017" selected="selected">2016-2017赛季</option>
					
				
					
						<option value="2015-2016">2015-2016赛季</option>
					
				
					
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
				
					<option value="652">普洛克</option>
				
					<option value="658">克拉科维</option>
				
					<option value="659">华沙军团</option>
				
					<option value="667">博格丹卡</option>
				
					<option value="1009">哥罗纳</option>
				
					<option value="1024">卢宾扎格</option>
				
					<option value="1041">格里维治</option>
				
					<option value="1142">波兹南</option>
				
					<option value="1234">施切钦波</option>
				
					<option value="2342">罗切霍茹</option>
				
					<option value="2537">阿卡</option>
				
					<option value="2894">斯拉斯克</option>
				
					<option value="3159">乔治罗尼</option>
				
					<option value="5910">列治亚</option>
				
					<option value="11123">LKS尼切萨</option>
				
			</select>
			<select id="selectTeam2">
				<option value="0" selected="selected">选择球队</option>
				
					<option value="609">克拉科夫</option>
				
					<option value="652">普洛克</option>
				
					<option value="658">克拉科维</option>
				
					<option value="659">华沙军团</option>
				
					<option value="667">博格丹卡</option>
				
					<option value="1009">哥罗纳</option>
				
					<option value="1024">卢宾扎格</option>
				
					<option value="1041">格里维治</option>
				
					<option value="1142">波兹南</option>
				
					<option value="1234">施切钦波</option>
				
					<option value="2342">罗切霍茹</option>
				
					<option value="2537">阿卡</option>
				
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
				
					<em class="em_1 em_2">19</em>
				
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
				
					<em class="em_1">30</em>
				
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
				
			<td>2017-03-04 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1009" target="_blank" title="">哥罗纳</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"></td>
			<td>			
				
					2:1
				
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
				<a href="http://fenxi.zgzcw.com/2103097/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103097/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103097/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2017-03-04 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1024" target="_blank" title="">卢宾扎格</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"></td>
			<td>			
				
					1:3
				
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
				<a href="http://fenxi.zgzcw.com/2103059/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103059/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103059/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2017-03-04 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/658" target="_blank" title="">克拉科维</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20141009172714.png"><a href="soccer/team/2537" target="_blank" title="">阿卡</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103055/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103055/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103055/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2017-03-05 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/11123" target="_blank" title="">LKS尼切萨</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"><a href="soccer/team/2342" target="_blank" title="">罗切霍茹</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103056/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103056/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103056/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2017-03-05 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1041" target="_blank" title="">格里维治</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"><a href="soccer/team/609" target="_blank" title="">克拉科夫</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103057/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103057/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103057/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2017-03-05 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3159" target="_blank" title="">乔治罗尼</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"></td>
			<td>			
				
					4:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"><a href="soccer/team/2894" target="_blank" title="">斯拉斯克</a></td>
			<td>			
				
					2:1
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103096/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103096/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103096/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2017-03-06 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1142" target="_blank" title="">波兹南</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"><a href="soccer/team/5910" target="_blank" title="">列治亚</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103098/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103098/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103098/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2017-03-07 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1234" target="_blank" title="">施切钦波</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"></td>
			<td>			
								
					-:-
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813175336.jpg"><a href="soccer/team/652" target="_blank" title="">普洛克</a></td>
			<td>			
								
					-:-
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103058/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103058/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103058/bfyc" target="_blank" class="oyx">析</a>
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
				
			<td>2017-02-25 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2537" target="_blank" title="">阿卡</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20141009172714.png"></td>
			<td>			
				
					4:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"><a href="soccer/team/1009" target="_blank" title="">哥罗纳</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103088/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103088/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103088/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2017-02-25 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1234" target="_blank" title="">施切钦波</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"></td>
			<td>			
				
					0:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"><a href="soccer/team/1142" target="_blank" title="">波兹南</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103092/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103092/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103092/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2017-02-25 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/652" target="_blank" title="">普洛克</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813175336.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"><a href="soccer/team/1024" target="_blank" title="">卢宾扎格</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103095/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103095/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103095/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2017-02-26 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5910" target="_blank" title="">列治亚</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"></td>
			<td>			
				
					4:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"><a href="soccer/team/658" target="_blank" title="">克拉科维</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103090/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103090/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103090/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2017-02-26 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/609" target="_blank" title="">克拉科夫</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"></td>
			<td>			
				
					3:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"><a href="soccer/team/3159" target="_blank" title="">乔治罗尼</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103094/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103094/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103094/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2017-02-26 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/667" target="_blank" title="">博格丹卡</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"></td>
			<td>			
				
					1:0
				
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
				<a href="http://fenxi.zgzcw.com/2103089/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103089/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103089/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2017-02-27 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/659" target="_blank" title="">华沙军团</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"><a href="soccer/team/11123" target="_blank" title="">LKS尼切萨</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				一球/球半
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103091/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103091/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103091/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2017-02-28 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2342" target="_blank" title="">罗切霍茹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"></td>
			<td>			
				
					2:0
				
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
				<a href="http://fenxi.zgzcw.com/2103093/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103093/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103093/bfyc" target="_blank" class="oyx">析</a>
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
				
			<td>2017-02-18 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3159" target="_blank" title="">乔治罗尼</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"></td>
			<td>			
				
					5:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"><a href="soccer/team/667" target="_blank" title="">博格丹卡</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103081/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103081/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103081/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2017-02-18 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/11123" target="_blank" title="">LKS尼切萨</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"><a href="soccer/team/5910" target="_blank" title="">列治亚</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103084/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103084/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103084/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2017-02-18 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1009" target="_blank" title="">哥罗纳</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"></td>
			<td>			
				
					4:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813175336.jpg"><a href="soccer/team/652" target="_blank" title="">普洛克</a></td>
			<td>			
				
					2:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103082/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103082/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103082/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2017-02-19 01:00</td>
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
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103086/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103086/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103086/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2017-02-19 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1041" target="_blank" title="">格里维治</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"></td>
			<td>			
				
					0:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"><a href="soccer/team/1142" target="_blank" title="">波兹南</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				受半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103085/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103085/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103085/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2017-02-19 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/658" target="_blank" title="">克拉科维</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"></td>
			<td>			
				
					1:1
				
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
				<a href="http://fenxi.zgzcw.com/2103080/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103080/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103080/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2017-02-20 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/659" target="_blank" title="">华沙军团</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"></td>
			<td>			
				
					1:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"><a href="soccer/team/2342" target="_blank" title="">罗切霍茹</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				球半
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103083/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103083/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103083/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2017-02-21 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1024" target="_blank" title="">卢宾扎格</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20141009172714.png"><a href="soccer/team/2537" target="_blank" title="">阿卡</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103087/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103087/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103087/bfyc" target="_blank" class="oyx">析</a>
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
				
			<td>2017-02-11 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2342" target="_blank" title="">罗切霍茹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"></td>
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
				<a href="http://fenxi.zgzcw.com/2103077/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103077/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103077/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2017-02-11 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1142" target="_blank" title="">波兹南</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"></td>
			<td>			
				
					3:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"><a href="soccer/team/11123" target="_blank" title="">LKS尼切萨</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103074/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103074/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103074/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2017-02-12 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/609" target="_blank" title="">克拉科夫</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"></td>
			<td>			
				
					2:0
				
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
				<a href="http://fenxi.zgzcw.com/2103078/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103078/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103078/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2017-02-12 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2537" target="_blank" title="">阿卡</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20141009172714.png"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"><a href="soccer/team/659" target="_blank" title="">华沙军团</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				受半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103052/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103052/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103052/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2017-02-12 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/652" target="_blank" title="">普洛克</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813175336.jpg"></td>
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
				<a href="http://fenxi.zgzcw.com/2103079/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103079/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103079/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2017-02-13 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5910" target="_blank" title="">列治亚</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"></td>
			<td>			
				
					3:0
				
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
				<a href="http://fenxi.zgzcw.com/2103075/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103075/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103075/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2017-02-14 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1234" target="_blank" title="">施切钦波</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"><a href="soccer/team/1041" target="_blank" title="">格里维治</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103076/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103076/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103076/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2017-03-08 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/667" target="_blank" title="">博格丹卡</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"></td>
			<td>			
								
					-:-
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"><a href="soccer/team/1024" target="_blank" title="">卢宾扎格</a></td>
			<td>			
								
					-:-
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103053/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103053/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103053/bfyc" target="_blank" class="oyx">析</a>
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
				
			<td>2016-12-17 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/11123" target="_blank" title="">LKS尼切萨</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"><a href="soccer/team/1234" target="_blank" title="">施切钦波</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103048/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103048/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103048/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-12-17 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2342" target="_blank" title="">罗切霍茹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"><a href="soccer/team/609" target="_blank" title="">克拉科夫</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103049/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103049/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103049/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-12-17 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1009" target="_blank" title="">哥罗纳</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"><a href="soccer/team/5910" target="_blank" title="">列治亚</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103046/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103046/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103046/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-12-18 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3159" target="_blank" title="">乔治罗尼</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813175336.jpg"><a href="soccer/team/652" target="_blank" title="">普洛克</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103045/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103045/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103045/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-12-18 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/658" target="_blank" title="">克拉科维</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"></td>
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
				<a href="http://fenxi.zgzcw.com/2103044/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103044/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103044/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-12-18 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2894" target="_blank" title="">斯拉斯克</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20141009172714.png"><a href="soccer/team/2537" target="_blank" title="">阿卡</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103050/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103050/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103050/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-12-19 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/659" target="_blank" title="">华沙军团</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"></td>
			<td>			
				
					5:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"><a href="soccer/team/667" target="_blank" title="">博格丹卡</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				球半/两球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103047/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103047/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103047/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-12-20 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1024" target="_blank" title="">卢宾扎格</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"><a href="soccer/team/1041" target="_blank" title="">格里维治</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103051/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103051/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103051/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_1" class="zstab" style="display: none;">
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
				
			<td>2016-07-15 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/652" target="_blank" title="">普洛克</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813175336.jpg"></td>
			<td>			
				
					2:1
				
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
				<a href="http://fenxi.zgzcw.com/2102881/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102881/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102881/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-07-16 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2894" target="_blank" title="">斯拉斯克</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"></td>
			<td>			
				
					0:0
				
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
				<a href="http://fenxi.zgzcw.com/2102879/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102879/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102879/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-07-16 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2342" target="_blank" title="">罗切霍茹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"></td>
			<td>			
				
					2:1
				
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
				<a href="http://fenxi.zgzcw.com/2102878/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102878/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102878/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-07-16 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/609" target="_blank" title="">克拉科夫</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"><a href="soccer/team/1234" target="_blank" title="">施切钦波</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102880/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102880/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102880/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-07-17 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/659" target="_blank" title="">华沙军团</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"><a href="soccer/team/3159" target="_blank" title="">乔治罗尼</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102876/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102876/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102876/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-07-17 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1024" target="_blank" title="">卢宾扎格</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"></td>
			<td>			
				
					4:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"><a href="soccer/team/1009" target="_blank" title="">哥罗纳</a></td>
			<td>			
				
					4:0
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102883/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102883/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102883/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-07-17 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/658" target="_blank" title="">克拉科维</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"></td>
			<td>			
				
					5:1
				
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
				<a href="http://fenxi.zgzcw.com/2102882/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102882/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102882/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-07-18 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/11123" target="_blank" title="">LKS尼切萨</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20141009172714.png"><a href="soccer/team/2537" target="_blank" title="">阿卡</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102877/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102877/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102877/bfyc" target="_blank" class="oyx">析</a>
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
				
			<td>2016-07-22 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1234" target="_blank" title="">施切钦波</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"></td>
			<td>			
				
					1:1
				
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
				<a href="http://fenxi.zgzcw.com/2102891/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102891/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102891/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-07-23 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2537" target="_blank" title="">阿卡</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20141009172714.png"></td>
			<td>			
				
					3:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"><a href="soccer/team/609" target="_blank" title="">克拉科夫</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102887/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102887/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102887/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-07-23 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3159" target="_blank" title="">乔治罗尼</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"></td>
			<td>			
				
					4:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"><a href="soccer/team/2342" target="_blank" title="">罗切霍茹</a></td>
			<td>			
				
					2:1
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102889/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102889/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102889/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-07-24 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/659" target="_blank" title="">华沙军团</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"><a href="soccer/team/2894" target="_blank" title="">斯拉斯克</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102890/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102890/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102890/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-07-24 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/11123" target="_blank" title="">LKS尼切萨</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"></td>
			<td>			
				
					3:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"><a href="soccer/team/658" target="_blank" title="">克拉科维</a></td>
			<td>			
				
					3:1
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102893/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102893/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102893/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-07-24 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1041" target="_blank" title="">格里维治</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813175336.jpg"><a href="soccer/team/652" target="_blank" title="">普洛克</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102894/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102894/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102894/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-07-24 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1142" target="_blank" title="">波兹南</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"><a href="soccer/team/1024" target="_blank" title="">卢宾扎格</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102892/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102892/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102892/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-07-25 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/667" target="_blank" title="">博格丹卡</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"><a href="soccer/team/5910" target="_blank" title="">列治亚</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				受半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102888/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102888/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102888/bfyc" target="_blank" class="oyx">析</a>
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
				
			<td>2016-07-29 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2537" target="_blank" title="">阿卡</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20141009172714.png"></td>
			<td>			
				
					3:0
				
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
				<a href="http://fenxi.zgzcw.com/2102900/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102900/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102900/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-07-30 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1142" target="_blank" title="">波兹南</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"></td>
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
				<a href="http://fenxi.zgzcw.com/2102901/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102901/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102901/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-07-30 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5910" target="_blank" title="">列治亚</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"></td>
			<td>			
				
					3:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"><a href="soccer/team/609" target="_blank" title="">克拉科夫</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102902/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102902/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102902/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-07-31 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/652" target="_blank" title="">普洛克</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813175336.jpg"></td>
			<td>			
				
					2:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"><a href="soccer/team/659" target="_blank" title="">华沙军团</a></td>
			<td>			
				
					2:2
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102904/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102904/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102904/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-07-31 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/667" target="_blank" title="">博格丹卡</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"></td>
			<td>			
				
					0:0
				
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
				<a href="http://fenxi.zgzcw.com/2102905/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102905/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102905/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-07-31 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1024" target="_blank" title="">卢宾扎格</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"><a href="soccer/team/11123" target="_blank" title="">LKS尼切萨</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102907/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102907/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102907/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-07-31 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1009" target="_blank" title="">哥罗纳</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"></td>
			<td>			
				
					1:1
				
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
				<a href="http://fenxi.zgzcw.com/2102906/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102906/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102906/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-08-01 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1234" target="_blank" title="">施切钦波</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"><a href="soccer/team/2894" target="_blank" title="">斯拉斯克</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102903/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102903/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102903/bfyc" target="_blank" class="oyx">析</a>
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
				
			<td>2016-08-05 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3159" target="_blank" title="">乔治罗尼</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"></td>
			<td>			
				
					4:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20141009172714.png"><a href="soccer/team/2537" target="_blank" title="">阿卡</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102911/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102911/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102911/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-08-06 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/658" target="_blank" title="">克拉科维</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"><a href="soccer/team/609" target="_blank" title="">克拉科夫</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102936/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102936/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102936/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-08-06 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/11123" target="_blank" title="">LKS尼切萨</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"><a href="soccer/team/667" target="_blank" title="">博格丹卡</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102913/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102913/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102913/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-08-06 23:59</td>
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
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102935/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102935/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102935/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-08-07 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1009" target="_blank" title="">哥罗纳</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"></td>
			<td>			
				
					4:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"><a href="soccer/team/1142" target="_blank" title="">波兹南</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102912/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102912/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102912/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-08-07 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1024" target="_blank" title="">卢宾扎格</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"><a href="soccer/team/1234" target="_blank" title="">施切钦波</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102938/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102938/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102938/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-08-07 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/659" target="_blank" title="">华沙军团</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"></td>
			<td>			
				
					0:0
				
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
				<a href="http://fenxi.zgzcw.com/2102937/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102937/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102937/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-08-08 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2342" target="_blank" title="">罗切霍茹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813175336.jpg"><a href="soccer/team/652" target="_blank" title="">普洛克</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102934/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102934/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102934/bfyc" target="_blank" class="oyx">析</a>
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
				
			<td>2016-08-12 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5910" target="_blank" title="">列治亚</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"></td>
			<td>			
				
					3:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"><a href="soccer/team/1009" target="_blank" title="">哥罗纳</a></td>
			<td>			
				
					2:1
							
			</td>
			<td>
			
				一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102947/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102947/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102947/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-08-13 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1142" target="_blank" title="">波兹南</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"><a href="soccer/team/658" target="_blank" title="">克拉科维</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102946/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102946/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102946/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-08-13 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2537" target="_blank" title="">阿卡</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20141009172714.png"></td>
			<td>			
				
					2:0
				
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
				<a href="http://fenxi.zgzcw.com/2102944/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102944/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102944/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-08-13 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/667" target="_blank" title="">博格丹卡</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"></td>
			<td>			
				
					1:0
				
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
				<a href="http://fenxi.zgzcw.com/2102945/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102945/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102945/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-08-14 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1234" target="_blank" title="">施切钦波</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"></td>
			<td>			
				
					5:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"><a href="soccer/team/11123" target="_blank" title="">LKS尼切萨</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102949/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102949/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102949/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-08-14 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1041" target="_blank" title="">格里维治</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"></td>
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
				<a href="http://fenxi.zgzcw.com/2102948/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102948/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102948/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-08-14 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/609" target="_blank" title="">克拉科夫</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"></td>
			<td>			
				
					1:2
				
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
				<a href="http://fenxi.zgzcw.com/2102950/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102950/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102950/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-08-15 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/652" target="_blank" title="">普洛克</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813175336.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"><a href="soccer/team/3159" target="_blank" title="">乔治罗尼</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102951/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102951/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102951/bfyc" target="_blank" class="oyx">析</a>
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
				
			<td>2016-08-19 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2894" target="_blank" title="">斯拉斯克</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813175336.jpg"><a href="soccer/team/652" target="_blank" title="">普洛克</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102958/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102958/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102958/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-08-20 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/11123" target="_blank" title="">LKS尼切萨</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"><a href="soccer/team/1142" target="_blank" title="">波兹南</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102956/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102956/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102956/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-08-20 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/658" target="_blank" title="">克拉科维</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"><a href="soccer/team/2342" target="_blank" title="">罗切霍茹</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102952/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102952/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102952/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-08-20 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1041" target="_blank" title="">格里维治</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"><a href="soccer/team/1234" target="_blank" title="">施切钦波</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102957/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102957/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102957/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-08-21 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/659" target="_blank" title="">华沙军团</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"></td>
			<td>			
				
					1:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20141009172714.png"><a href="soccer/team/2537" target="_blank" title="">阿卡</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102955/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102955/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102955/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-08-21 21:30</td>
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
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102959/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102959/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102959/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-08-21 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3159" target="_blank" title="">乔治罗尼</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"></td>
			<td>			
				
					0:1
				
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
				<a href="http://fenxi.zgzcw.com/2102953/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102953/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102953/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-08-22 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1009" target="_blank" title="">哥罗纳</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"><a href="soccer/team/609" target="_blank" title="">克拉科夫</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102954/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102954/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102954/bfyc" target="_blank" class="oyx">析</a>
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
				
			<td>2016-08-26 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/652" target="_blank" title="">普洛克</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813175336.jpg"></td>
			<td>			
				
					1:2
				
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
				<a href="http://fenxi.zgzcw.com/2102916/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102916/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102916/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-08-27 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/609" target="_blank" title="">克拉科夫</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"></td>
			<td>			
				
					1:5
				
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
				<a href="http://fenxi.zgzcw.com/2102915/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102915/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102915/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-08-27 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1234" target="_blank" title="">施切钦波</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"></td>
			<td>			
				
					1:1
				
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
				<a href="http://fenxi.zgzcw.com/2102964/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102964/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102964/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-08-27 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/667" target="_blank" title="">博格丹卡</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"><a href="soccer/team/3159" target="_blank" title="">乔治罗尼</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102961/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102961/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102961/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-08-28 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2537" target="_blank" title="">阿卡</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20141009172714.png"></td>
			<td>			
				
					1:1
				
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
				<a href="http://fenxi.zgzcw.com/2102960/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102960/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102960/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-08-28 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1142" target="_blank" title="">波兹南</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"><a href="soccer/team/1041" target="_blank" title="">格里维治</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102962/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102962/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102962/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-08-28 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5910" target="_blank" title="">列治亚</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"><a href="soccer/team/11123" target="_blank" title="">LKS尼切萨</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102963/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102963/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102963/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-08-28 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2342" target="_blank" title="">罗切霍茹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"><a href="soccer/team/659" target="_blank" title="">华沙军团</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				受半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102965/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102965/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102965/bfyc" target="_blank" class="oyx">析</a>
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
				
			<td>2016-09-09 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/658" target="_blank" title="">克拉科维</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"><a href="soccer/team/5910" target="_blank" title="">列治亚</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102966/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102966/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102966/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-09-10 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1024" target="_blank" title="">卢宾扎格</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813175336.jpg"><a href="soccer/team/652" target="_blank" title="">普洛克</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102973/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102973/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102973/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-09-10 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1041" target="_blank" title="">格里维治</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"></td>
			<td>			
				
					3:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"><a href="soccer/team/667" target="_blank" title="">博格丹卡</a></td>
			<td>			
				
					3:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102971/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102971/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102971/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-09-10 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1009" target="_blank" title="">哥罗纳</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20141009172714.png"><a href="soccer/team/2537" target="_blank" title="">阿卡</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102968/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102968/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102968/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-09-11 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/11123" target="_blank" title="">LKS尼切萨</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"><a href="soccer/team/659" target="_blank" title="">华沙军团</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				受半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102970/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102970/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102970/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-09-11 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1142" target="_blank" title="">波兹南</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"></td>
			<td>			
				
					3:1
				
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
				<a href="http://fenxi.zgzcw.com/2102969/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102969/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102969/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-09-11 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3159" target="_blank" title="">乔治罗尼</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"></td>
			<td>			
				
					2:1
				
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
				<a href="http://fenxi.zgzcw.com/2102967/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102967/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102967/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-09-12 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2894" target="_blank" title="">斯拉斯克</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"></td>
			<td>			
				
					1:2
				
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
				<a href="http://fenxi.zgzcw.com/2102972/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102972/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102972/bfyc" target="_blank" class="oyx">析</a>
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
				
			<td>2016-09-16 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2342" target="_blank" title="">罗切霍茹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"></td>
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
				<a href="http://fenxi.zgzcw.com/2102978/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102978/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102978/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-09-17 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2894" target="_blank" title="">斯拉斯克</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"></td>
			<td>			
				
					0:4
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"><a href="soccer/team/3159" target="_blank" title="">乔治罗尼</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102979/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102979/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102979/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-09-17 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/667" target="_blank" title="">博格丹卡</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"></td>
			<td>			
				
					4:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"><a href="soccer/team/1009" target="_blank" title="">哥罗纳</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102975/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102975/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102975/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-09-17 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/652" target="_blank" title="">普洛克</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813175336.jpg"></td>
			<td>			
				
					2:0
				
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
				<a href="http://fenxi.zgzcw.com/2102981/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102981/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102981/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-09-18 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/609" target="_blank" title="">克拉科夫</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"><a href="soccer/team/1041" target="_blank" title="">格里维治</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102980/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102980/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102980/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-09-18 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5910" target="_blank" title="">列治亚</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"><a href="soccer/team/1142" target="_blank" title="">波兹南</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102976/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102976/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102976/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-09-18 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/659" target="_blank" title="">华沙军团</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"></td>
			<td>			
				
					2:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"><a href="soccer/team/1024" target="_blank" title="">卢宾扎格</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102977/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102977/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102977/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-09-19 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2537" target="_blank" title="">阿卡</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20141009172714.png"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"><a href="soccer/team/658" target="_blank" title="">克拉科维</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102974/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102974/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102974/bfyc" target="_blank" class="oyx">析</a>
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
				
			<td>2016-09-23 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/11123" target="_blank" title="">LKS尼切萨</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813175336.jpg"><a href="soccer/team/652" target="_blank" title="">普洛克</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102918/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102918/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102918/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-09-24 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/609" target="_blank" title="">克拉科夫</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"></td>
			<td>			
				
					0:0
				
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
				<a href="http://fenxi.zgzcw.com/2102985/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102985/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102985/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-09-24 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1234" target="_blank" title="">施切钦波</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"><a href="soccer/team/667" target="_blank" title="">博格丹卡</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102984/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102984/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102984/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-09-24 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5910" target="_blank" title="">列治亚</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"><a href="soccer/team/2342" target="_blank" title="">罗切霍茹</a></td>
			<td>			
				
					2:1
							
			</td>
			<td>
			
				一球/球半
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102917/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102917/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102917/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-09-25 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1024" target="_blank" title="">卢宾扎格</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"></td>
			<td>			
				
					1:1
				
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
				<a href="http://fenxi.zgzcw.com/2102920/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102920/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102920/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-09-25 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1009" target="_blank" title="">哥罗纳</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"><a href="soccer/team/3159" target="_blank" title="">乔治罗尼</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102982/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102982/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102982/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-09-25 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1142" target="_blank" title="">波兹南</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20141009172714.png"><a href="soccer/team/2537" target="_blank" title="">阿卡</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102983/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102983/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102983/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-09-26 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1041" target="_blank" title="">格里维治</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"></td>
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
				<a href="http://fenxi.zgzcw.com/2102919/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102919/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102919/bfyc" target="_blank" class="oyx">析</a>
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
				
			<td>2016-09-30 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2342" target="_blank" title="">罗切霍茹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"></td>
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
				<a href="http://fenxi.zgzcw.com/2102988/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102988/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102988/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-10-01 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/667" target="_blank" title="">博格丹卡</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"></td>
			<td>			
				
					1:2
				
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
				<a href="http://fenxi.zgzcw.com/2102923/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102923/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102923/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-10-01 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2537" target="_blank" title="">阿卡</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20141009172714.png"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"><a href="soccer/team/1041" target="_blank" title="">格里维治</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102921/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102921/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102921/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-10-01 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/652" target="_blank" title="">普洛克</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813175336.jpg"></td>
			<td>			
				
					2:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"><a href="soccer/team/609" target="_blank" title="">克拉科夫</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102990/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102990/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102990/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-10-02 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/659" target="_blank" title="">华沙军团</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"></td>
			<td>			
				
					3:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"><a href="soccer/team/5910" target="_blank" title="">列治亚</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102987/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102987/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102987/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-10-02 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/658" target="_blank" title="">克拉科维</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"></td>
			<td>			
				
					6:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"><a href="soccer/team/1009" target="_blank" title="">哥罗纳</a></td>
			<td>			
				
					3:0
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102922/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102922/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102922/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-10-02 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2894" target="_blank" title="">斯拉斯克</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"><a href="soccer/team/11123" target="_blank" title="">LKS尼切萨</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102989/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102989/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102989/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-10-02 23:59</td>
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
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102986/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102986/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102986/bfyc" target="_blank" class="oyx">析</a>
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
				
			<td>2016-10-14 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/658" target="_blank" title="">克拉科维</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813175336.jpg"><a href="soccer/team/652" target="_blank" title="">普洛克</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102991/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102991/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102991/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-10-15 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1234" target="_blank" title="">施切钦波</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"></td>
			<td>			
				
					3:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"><a href="soccer/team/659" target="_blank" title="">华沙军团</a></td>
			<td>			
				
					2:1
							
			</td>
			<td>
			
				受半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102997/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102997/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102997/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-10-15 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/667" target="_blank" title="">博格丹卡</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20141009172714.png"><a href="soccer/team/2537" target="_blank" title="">阿卡</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102992/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102992/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102992/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-10-15 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1041" target="_blank" title="">格里维治</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"></td>
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
				<a href="http://fenxi.zgzcw.com/2102996/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102996/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102996/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-10-16 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1024" target="_blank" title="">卢宾扎格</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"><a href="soccer/team/5910" target="_blank" title="">列治亚</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102998/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102998/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102998/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-10-16 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/11123" target="_blank" title="">LKS尼切萨</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"><a href="soccer/team/3159" target="_blank" title="">乔治罗尼</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102995/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102995/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102995/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-10-16 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1142" target="_blank" title="">波兹南</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"><a href="soccer/team/609" target="_blank" title="">克拉科夫</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102994/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102994/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102994/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-10-17 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1009" target="_blank" title="">哥罗纳</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"></td>
			<td>			
				
					1:2
				
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
				<a href="http://fenxi.zgzcw.com/2102993/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102993/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102993/bfyc" target="_blank" class="oyx">析</a>
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
				
			<td>2016-10-21 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2537" target="_blank" title="">阿卡</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20141009172714.png"></td>
			<td>			
				
					0:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"><a href="soccer/team/1234" target="_blank" title="">施切钦波</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102999/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102999/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102999/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-10-22 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/609" target="_blank" title="">克拉科夫</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"></td>
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
				<a href="http://fenxi.zgzcw.com/2103005/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103005/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103005/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-10-22 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/652" target="_blank" title="">普洛克</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813175336.jpg"></td>
			<td>			
				
					1:2
				
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
				<a href="http://fenxi.zgzcw.com/2103006/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103006/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103006/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-10-22 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2894" target="_blank" title="">斯拉斯克</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"></td>
			<td>			
				
					2:2
				
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
				<a href="http://fenxi.zgzcw.com/2103004/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103004/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103004/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-10-23 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/659" target="_blank" title="">华沙军团</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"><a href="soccer/team/1142" target="_blank" title="">波兹南</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103002/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103002/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103002/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-10-23 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5910" target="_blank" title="">列治亚</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"></td>
			<td>			
				
					3:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"><a href="soccer/team/1041" target="_blank" title="">格里维治</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103001/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103001/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103001/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-10-23 23:59</td>
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
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103000/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103000/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103000/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-10-24 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2342" target="_blank" title="">罗切霍茹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"></td>
			<td>			
				
					4:0
				
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
				<a href="http://fenxi.zgzcw.com/2103003/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103003/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103003/bfyc" target="_blank" class="oyx">析</a>
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
				
			<td>2016-10-28 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1041" target="_blank" title="">格里维治</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"><a href="soccer/team/11123" target="_blank" title="">LKS尼切萨</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103012/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103012/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103012/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-10-29 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1009" target="_blank" title="">哥罗纳</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"></td>
			<td>			
				
					2:4
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"><a href="soccer/team/659" target="_blank" title="">华沙军团</a></td>
			<td>			
				
					2:1
							
			</td>
			<td>
			
				受一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103010/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103010/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103010/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-10-29 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/667" target="_blank" title="">博格丹卡</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"></td>
			<td>			
				
					0:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"><a href="soccer/team/2894" target="_blank" title="">斯拉斯克</a></td>
			<td>			
				
					0:3
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103009/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103009/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103009/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-10-29 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1234" target="_blank" title="">施切钦波</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"><a href="soccer/team/2342" target="_blank" title="">罗切霍茹</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103013/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103013/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103013/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-10-30 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1142" target="_blank" title="">波兹南</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813175336.jpg"><a href="soccer/team/652" target="_blank" title="">普洛克</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103011/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103011/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103011/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-10-30 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/658" target="_blank" title="">克拉科维</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"></td>
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
				<a href="http://fenxi.zgzcw.com/2103008/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103008/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103008/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-10-31 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2537" target="_blank" title="">阿卡</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20141009172714.png"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"><a href="soccer/team/5910" target="_blank" title="">列治亚</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103007/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103007/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103007/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-11-01 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1024" target="_blank" title="">卢宾扎格</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"></td>
			<td>			
				
					2:2
				
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
				<a href="http://fenxi.zgzcw.com/2103014/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103014/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103014/bfyc" target="_blank" class="oyx">析</a>
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
				
			<td>2016-11-05 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/652" target="_blank" title="">普洛克</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813175336.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20141009172714.png"><a href="soccer/team/2537" target="_blank" title="">阿卡</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102931/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102931/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102931/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-11-05 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2342" target="_blank" title="">罗切霍茹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"></td>
			<td>			
				
					0:5
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"><a href="soccer/team/1142" target="_blank" title="">波兹南</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				受半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102928/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102928/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102928/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-11-05 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/11123" target="_blank" title="">LKS尼切萨</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"></td>
			<td>			
				
					1:3
				
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
				<a href="http://fenxi.zgzcw.com/2102927/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102927/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102927/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-11-06 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3159" target="_blank" title="">乔治罗尼</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"><a href="soccer/team/1041" target="_blank" title="">格里维治</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102924/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102924/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102924/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-11-06 03:30</td>
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
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102925/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102925/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102925/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-11-06 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2894" target="_blank" title="">斯拉斯克</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"></td>
			<td>			
				
					2:1
				
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
				<a href="http://fenxi.zgzcw.com/2102929/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102929/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102929/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-11-06 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/609" target="_blank" title="">克拉科夫</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"></td>
			<td>			
				
					3:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"><a href="soccer/team/667" target="_blank" title="">博格丹卡</a></td>
			<td>			
				
					2:1
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102930/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102930/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102930/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-11-07 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/659" target="_blank" title="">华沙军团</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"><a href="soccer/team/658" target="_blank" title="">克拉科维</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102926/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102926/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102926/bfyc" target="_blank" class="oyx">析</a>
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
				
			<td>2016-11-19 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1041" target="_blank" title="">格里维治</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"></td>
			<td>			
				
					2:2
				
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
				<a href="http://fenxi.zgzcw.com/2103021/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103021/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103021/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-11-19 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3159" target="_blank" title="">乔治罗尼</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"></td>
			<td>			
				
					1:4
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"><a href="soccer/team/659" target="_blank" title="">华沙军团</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103017/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103017/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103017/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-11-19 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/667" target="_blank" title="">博格丹卡</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"></td>
			<td>			
				
					0:4
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"><a href="soccer/team/2342" target="_blank" title="">罗切霍茹</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103016/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103016/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103016/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-11-20 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1234" target="_blank" title="">施切钦波</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"></td>
			<td>			
				
					6:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"><a href="soccer/team/609" target="_blank" title="">克拉科夫</a></td>
			<td>			
				
					4:1
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103022/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103022/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103022/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-11-20 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5910" target="_blank" title="">列治亚</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813175336.jpg"><a href="soccer/team/652" target="_blank" title="">普洛克</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103020/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103020/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103020/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-11-20 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2537" target="_blank" title="">阿卡</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20141009172714.png"></td>
			<td>			
				
					1:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"><a href="soccer/team/11123" target="_blank" title="">LKS尼切萨</a></td>
			<td>			
				
					1:2
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103015/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103015/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103015/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-11-21 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1142" target="_blank" title="">波兹南</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"></td>
			<td>			
				
					3:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"><a href="soccer/team/2894" target="_blank" title="">斯拉斯克</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103019/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103019/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103019/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-11-22 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1009" target="_blank" title="">哥罗纳</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"><a href="soccer/team/1024" target="_blank" title="">卢宾扎格</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103018/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103018/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103018/bfyc" target="_blank" class="oyx">析</a>
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
				
			<td>2016-11-26 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/658" target="_blank" title="">克拉科维</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"></td>
			<td>			
				
					1:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"><a href="soccer/team/11123" target="_blank" title="">LKS尼切萨</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103023/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103023/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103023/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-11-26 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1024" target="_blank" title="">卢宾扎格</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"></td>
			<td>			
				
					0:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"><a href="soccer/team/1142" target="_blank" title="">波兹南</a></td>
			<td>			
				
					0:3
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103030/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103030/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103030/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-11-26 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1009" target="_blank" title="">哥罗纳</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"></td>
			<td>			
				
					4:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"><a href="soccer/team/1234" target="_blank" title="">施切钦波</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103024/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103024/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103024/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-11-27 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2342" target="_blank" title="">罗切霍茹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"><a href="soccer/team/3159" target="_blank" title="">乔治罗尼</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				受半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103026/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103026/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103026/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-11-27 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/609" target="_blank" title="">克拉科夫</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"></td>
			<td>			
				
					5:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20141009172714.png"><a href="soccer/team/2537" target="_blank" title="">阿卡</a></td>
			<td>			
				
					3:1
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103028/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103028/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103028/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-11-27 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/652" target="_blank" title="">普洛克</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813175336.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"><a href="soccer/team/1041" target="_blank" title="">格里维治</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103029/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103029/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103029/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-11-28 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2894" target="_blank" title="">斯拉斯克</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"></td>
			<td>			
				
					0:4
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"><a href="soccer/team/659" target="_blank" title="">华沙军团</a></td>
			<td>			
				
					0:4
							
			</td>
			<td>
			
				受半球/一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103027/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103027/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103027/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-11-29 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5910" target="_blank" title="">列治亚</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"></td>
			<td>			
				
					3:0
				
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
				<a href="http://fenxi.zgzcw.com/2103025/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103025/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103025/bfyc" target="_blank" class="oyx">析</a>
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
				
			<td>2016-12-03 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/11123" target="_blank" title="">LKS尼切萨</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"></td>
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
				<a href="http://fenxi.zgzcw.com/2103034/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103034/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103034/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-12-03 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/659" target="_blank" title="">华沙军团</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813175336.jpg"><a href="soccer/team/652" target="_blank" title="">普洛克</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				一球/球半
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103033/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103033/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103033/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-12-03 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1041" target="_blank" title="">格里维治</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"></td>
			<td>			
				
					1:0
				
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
				<a href="http://fenxi.zgzcw.com/2103035/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103035/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103035/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-12-04 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2894" target="_blank" title="">斯拉斯克</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"></td>
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
				<a href="http://fenxi.zgzcw.com/2102933/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102933/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102933/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-12-04 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/609" target="_blank" title="">克拉科夫</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"></td>
			<td>			
				
					3:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"><a href="soccer/team/5910" target="_blank" title="">列治亚</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103054/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103054/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103054/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-12-04 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/658" target="_blank" title="">克拉科维</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"></td>
			<td>			
				
					1:1
				
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
				<a href="http://fenxi.zgzcw.com/2103031/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103031/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103031/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-12-05 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3159" target="_blank" title="">乔治罗尼</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"><a href="soccer/team/1142" target="_blank" title="">波兹南</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103032/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103032/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103032/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-12-06 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2342" target="_blank" title="">罗切霍茹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20141009172714.png"><a href="soccer/team/2537" target="_blank" title="">阿卡</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				平手
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102932/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2102932/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2102932/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_19" class="zstab">
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
				
			<td>2016-12-10 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1234" target="_blank" title="">施切钦波</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"><a href="soccer/team/1024" target="_blank" title="">卢宾扎格</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103041/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103041/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103041/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-12-10 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5910" target="_blank" title="">列治亚</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"></td>
			<td>			
				
					3:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"><a href="soccer/team/2894" target="_blank" title="">斯拉斯克</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103039/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103039/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103039/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-12-10 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/667" target="_blank" title="">博格丹卡</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"></td>
			<td>			
				
					3:0
				
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
				<a href="http://fenxi.zgzcw.com/2103037/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103037/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103037/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-12-11 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/652" target="_blank" title="">普洛克</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813175336.jpg"></td>
			<td>			
				
					4:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"><a href="soccer/team/2342" target="_blank" title="">罗切霍茹</a></td>
			<td>			
				
					2:2
							
			</td>
			<td>
			
				半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103043/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103043/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103043/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-12-11 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/609" target="_blank" title="">克拉科夫</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"></td>
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
				<a href="http://fenxi.zgzcw.com/2103042/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103042/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103042/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-12-11 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1142" target="_blank" title="">波兹南</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"></td>
			<td>			
				
					1:0
				
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
				<a href="http://fenxi.zgzcw.com/2103038/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103038/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103038/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-12-12 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1041" target="_blank" title="">格里维治</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"></td>
			<td>			
				
					1:5
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"><a href="soccer/team/659" target="_blank" title="">华沙军团</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				受一球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103040/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103040/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103040/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-12-13 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2537" target="_blank" title="">阿卡</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20141009172714.png"></td>
			<td>			
				
					2:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"><a href="soccer/team/3159" target="_blank" title="">乔治罗尼</a></td>
			<td>			
				
					2:1
							
			</td>
			<td>
			
				受平手/半球
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103036/ypdb" target="_blank" class="oyx">亚</a>
				<a href="http://fenxi.zgzcw.com/2103036/bjop" target="_blank" class="oyx">欧</a>
				<a href="http://fenxi.zgzcw.com/2103036/bfyc" target="_blank" class="oyx">析</a>
			</td>
		</tr>
	
	
</tbody></table>


</div>
		<div class="league_right_022" id="matchInfofj">
		</div>
	</div>
	




</body>