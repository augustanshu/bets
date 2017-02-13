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
    <b id="xt_h">21</b><b id="xt_m">55</b><b id="xt_s">56</b> </p>
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
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/5964" target="_blank" class="a1" title="梅拿达">
					<li>梅拿达</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/5923" target="_blank" class="a1" title="鲁斯塔维">
					<li>鲁斯塔维</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/4351" target="_blank" class="a1" title="马沙斯洛克">
					<li>马沙斯洛克</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/3572" target="_blank" class="a1" title="KF地拉那">
					<li>KF地拉那</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/2612" target="_blank" class="a1" title="托尔斯">
					<li>托尔斯</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/2559" target="_blank" class="a1" title="谢里夫">
					<li>谢里夫</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/2555" target="_blank" class="a1" title="皮尤尼克">
					<li>皮尤尼克</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/2528" target="_blank" class="a1" title="哈扎尔利">
					<li>哈扎尔利</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/2478" target="_blank" class="a1" title="卡奧拿斯">
					<li>卡奧拿斯</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/2435" target="_blank" class="a1" title="巴特">
					<li>巴特</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/2391" target="_blank" class="a1" title="樸比达">
					<li>樸比达</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/2388" target="_blank" class="a1" title="FC流浪">
					<li>FC流浪</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/1646" target="_blank" class="a1" title="林菲尔德">
					<li>林菲尔德</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/1607" target="_blank" class="a1" title="耶贝塔">
					<li>耶贝塔</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/1490" target="_blank" class="a1" title="泽塔">
					<li>泽塔</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/1296" target="_blank" class="a1" title="多姆扎莱">
					<li>多姆扎莱</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/1261" target="_blank" class="a1" title="新圣徒">
					<li>新圣徒</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/1031" target="_blank" class="a1" title="斯利纳">
					<li>斯利纳</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/1024" target="_blank" class="a1" title="卢宾扎格">
					<li>卢宾扎格</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/721" target="_blank" class="a1" title="布加勒斯">
					<li>布加勒斯</li>
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
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/695" target="_blank" class="a1" title="德布勒森">
					<li>德布勒森</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/683" target="_blank" class="a1" title="阿斯塔纳">
					<li>阿斯塔纳</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/678" target="_blank" class="a1" title="布斯巴达">
					<li>布斯巴达</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/674" target="_blank" class="a1" title="利瓦迪亚">
					<li>利瓦迪亚</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/666" target="_blank" class="a1" title="萨拉热窝">
					<li>萨拉热窝</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/653" target="_blank" class="a1" title="萨迪纳摩">
					<li>萨迪纳摩</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/617" target="_blank" class="a1" title="索斯基">
					<li>索斯基</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/616" target="_blank" class="a1" title="AEK雅典">
					<li>AEK雅典</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/612" target="_blank" class="a1" title="红星">
					<li>红星</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/603" target="_blank" class="a1" title="文茨皮斯">
					<li>文茨皮斯</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/449" target="_blank" class="a1" title="苏黎世">
					<li>苏黎世</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/417" target="_blank" class="a1" title="埃夫斯堡">
					<li>埃夫斯堡</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/411" target="_blank" class="a1" title="莫斯巴达">
					<li>莫斯巴达</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/396" target="_blank" class="a1" title="坦佩雷">
					<li>坦佩雷</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/312" target="_blank" class="a1" title="德里城">
					<li>德里城</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/253" target="_blank" class="a1" title="阿贾克斯">
					<li>阿贾克斯</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/227" target="_blank" class="a1" title="哥本哈根">
					<li>哥本哈根</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/216" target="_blank" class="a1" title="图卢兹">
					<li>图卢兹</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/153" target="_blank" class="a1" title="安德莱赫">
					<li>安德莱赫</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/147" target="_blank" class="a1" title="亨克">
					<li>亨克</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/9" target="_blank" class="a1" title="萨尔茨堡">
					<li>萨尔茨堡</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/25" target="_blank" class="a1" title="利物浦">
					<li>利物浦</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/86" target="_blank" class="a1" title="塞维利亚">
					<li>塞维利亚</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/19" target="_blank" class="a1" title="阿森纳">
					<li>阿森纳</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/27" target="_blank" class="a1" title="曼联">
					<li>曼联</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/82" target="_blank" class="a1" title="皇马">
					<li>皇马</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/152" target="_blank" class="a1" title="国际米兰">
					<li>国际米兰</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/84" target="_blank" class="a1" title="巴萨">
					<li>巴萨</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/150" target="_blank" class="a1" title="AC米兰">
					<li>AC米兰</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/174" target="_blank" class="a1" title="罗马">
					<li>罗马</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/568" target="_blank" class="a1" title="奥林匹亚">
					<li>奥林匹亚</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/205" target="_blank" class="a1" title="里昂">
					<li>里昂</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/24" target="_blank" class="a1" title="切尔西">
					<li>切尔西</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/466" target="_blank" class="a1" title="里斯本">
					<li>里斯本</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/537" target="_blank" class="a1" title="费内巴切">
					<li>费内巴切</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/468" target="_blank" class="a1" title="波尔图">
					<li>波尔图</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/132" target="_blank" class="a1" title="不来梅">
					<li>不来梅</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/182" target="_blank" class="a1" title="拉齐奥">
					<li>拉齐奥</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/77" target="_blank" class="a1" title="流浪者">
					<li>流浪者</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/155" target="_blank" class="a1" title="斯图加特">
					<li>斯图加特</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/407" target="_blank" class="a1" title="莫陆军">
					<li>莫陆军</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/211" target="_blank" class="a1" title="马赛">
					<li>马赛</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/507" target="_blank" class="a1" title="罗森博格">
					<li>罗森博格</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/716" target="_blank" class="a1" title="顿矿工">
					<li>顿矿工</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/70" target="_blank" class="a1" title="凯尔特人">
					<li>凯尔特人</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/151" target="_blank" class="a1" title="沙尔克04">
					<li>沙尔克04</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/463" target="_blank" class="a1" title="本菲卡">
					<li>本菲卡</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/651" target="_blank" class="a1" title="斯拉维亚">
					<li>斯拉维亚</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/529" target="_blank" class="a1" title="贝西克塔">
					<li>贝西克塔</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/626" target="_blank" class="a1" title="布星">
					<li>布星</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/712" target="_blank" class="a1" title="基辅迪纳">
					<li>基辅迪纳</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/254" target="_blank" class="a1" title="埃因霍温">
					<li>埃因霍温</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/91" target="_blank" class="a1" title="巴伦西亚">
					<li>巴伦西亚</li>
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
											<td>2007-07-17 22:15</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5923" target="_blank" title="鲁斯塔维">鲁斯塔维</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/683" target="_blank" title="阿斯塔纳">阿斯塔纳</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1640450/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1640450/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1640450/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-07-17 23:59</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2528" target="_blank" title="哈扎尔利">哈扎尔利</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/653" target="_blank" title="萨迪纳摩">萨迪纳摩</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1640460/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1640460/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1640460/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-07-18 01:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/703" target="_blank" title="希腊人">希腊人</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2435" target="_blank" title="巴特">巴特</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1640473/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1640473/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1640473/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-07-18 02:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1261" target="_blank" title="新圣徒">新圣徒</a></td>
											<td>			
												
												
													3:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/603" target="_blank" title="文茨皮斯">文茨皮斯</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												受让半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1640492/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1640492/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1640492/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-07-18 02:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1490" target="_blank" title="泽塔">泽塔</a></td>
											<td>			
												
												
													3:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2478" target="_blank" title="卡奧拿斯">卡奧拿斯</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1640493/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1640493/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1640493/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-07-18 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1646" target="_blank" title="林菲尔德">林菲尔德</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/417" target="_blank" title="埃夫斯堡">埃夫斯堡</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1640498/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1640498/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1640498/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-07-18 03:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5964" target="_blank" title="梅拿达">梅拿达</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/396" target="_blank" title="坦佩雷">坦佩雷</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												受让半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1640504/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1640504/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1640504/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-07-18 23:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2391" target="_blank" title="樸比达">樸比达</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/674" target="_blank" title="利瓦迪亚">利瓦迪亚</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1640341/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1640341/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1640341/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-07-19 01:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2559" target="_blank" title="谢里夫">谢里夫</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2388" target="_blank" title="FC流浪">FC流浪</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												两球半/三球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1640370/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1640370/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1640370/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-07-19 01:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/702" target="_blank" title="迪德朗">迪德朗</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1031" target="_blank" title="斯利纳">斯利纳</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												受让球半/两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1640371/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1640371/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1640371/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-07-19 02:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/4351" target="_blank" title="马沙斯洛克">马沙斯洛克</a></td>
											<td>			
												
												
													0:6
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/666" target="_blank" title="萨拉热窝">萨拉热窝</a></td>
											<td>			
												
												
													0:4
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1640392/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1640392/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1640392/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-07-19 02:15</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1296" target="_blank" title="多姆扎莱">多姆扎莱</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/3572" target="_blank" title="KF地拉那">KF地拉那</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1640401/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1640401/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1640401/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-07-19 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/312" target="_blank" title="德里城">德里城</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2555" target="_blank" title="皮尤尼克">皮尤尼克</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1640411/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1640411/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1640411/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-07-19 04:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/711" target="_blank" title="哈夫纳夫">哈夫纳夫</a></td>
											<td>			
												
												
													4:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2612" target="_blank" title="托尔斯">托尔斯</a></td>
											<td>			
												
												
													2:1
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1640418/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1640418/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1640418/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-07-24 20:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/683" target="_blank" title="阿斯塔纳">阿斯塔纳</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/5923" target="_blank" title="鲁斯塔维">鲁斯塔维</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1639690/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1639690/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1639690/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-07-24 23:59</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2435" target="_blank" title="巴特">巴特</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/703" target="_blank" title="希腊人">希腊人</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1639716/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1639716/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1639716/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-07-24 23:59</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2388" target="_blank" title="FC流浪">FC流浪</a></td>
											<td>			
												
												
													0:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2559" target="_blank" title="谢里夫">谢里夫</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1639717/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1639717/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1639717/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-07-25 01:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2478" target="_blank" title="卡奧拿斯">卡奧拿斯</a></td>
											<td>			
												
												
													3:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1490" target="_blank" title="泽塔">泽塔</a></td>
											<td>			
												
												
													3:1
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1639730/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1639730/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1639730/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-07-25 02:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/666" target="_blank" title="萨拉热窝">萨拉热窝</a></td>
											<td>			
												
												
													3:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/4351" target="_blank" title="马沙斯洛克">马沙斯洛克</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1639743/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1639743/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1639743/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-07-25 02:15</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/653" target="_blank" title="萨迪纳摩">萨迪纳摩</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2528" target="_blank" title="哈扎尔利">哈扎尔利</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1639744/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1639744/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1639744/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-07-25 23:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/603" target="_blank" title="文茨皮斯">文茨皮斯</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1261" target="_blank" title="新圣徒">新圣徒</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1639576/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1639576/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1639576/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-07-25 23:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2555" target="_blank" title="皮尤尼克">皮尤尼克</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/312" target="_blank" title="德里城">德里城</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1639577/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1639577/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1639577/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-07-25 23:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/674" target="_blank" title="利瓦迪亚">利瓦迪亚</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2391" target="_blank" title="樸比达">樸比达</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1639588/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1639588/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1639588/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-07-25 23:59</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/396" target="_blank" title="坦佩雷">坦佩雷</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/5964" target="_blank" title="梅拿达">梅拿达</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1639590/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1639590/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1639590/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-07-26 01:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/417" target="_blank" title="埃夫斯堡">埃夫斯堡</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1646" target="_blank" title="林菲尔德">林菲尔德</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1639603/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1639603/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1639603/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-07-26 02:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2612" target="_blank" title="托尔斯">托尔斯</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/711" target="_blank" title="哈夫纳夫">哈夫纳夫</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1639638/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1639638/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1639638/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-07-26 02:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1031" target="_blank" title="斯利纳">斯利纳</a></td>
											<td>			
												
												
													5:4
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/702" target="_blank" title="迪德朗">迪德朗</a></td>
											<td>			
												
												
													3:1
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1639639/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1639639/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1639639/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-07-26 02:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3572" target="_blank" title="KF地拉那">KF地拉那</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1296" target="_blank" title="多姆扎莱">多姆扎莱</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1639646/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1639646/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1639646/bfyc" class="oyx" target="_blank">析</a>
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
											<td>2007-07-31 23:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2555" target="_blank" title="皮尤尼克">皮尤尼克</a></td>
											<td>			
												
												
													0:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/716" target="_blank" title="顿矿工">顿矿工</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1638868/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1638868/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1638868/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-07-31 23:59</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/396" target="_blank" title="坦佩雷">坦佩雷</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/617" target="_blank" title="索斯基">索斯基</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1638872/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1638872/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1638872/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-08-01 02:15</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/227" target="_blank" title="哥本哈根">哥本哈根</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1607" target="_blank" title="耶贝塔">耶贝塔</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1638900/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1638900/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1638900/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-08-01 02:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/147" target="_blank" title="亨克">亨克</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/666" target="_blank" title="萨拉热窝">萨拉热窝</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1638901/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1638901/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1638901/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-08-01 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/695" target="_blank" title="德布勒森">德布勒森</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/417" target="_blank" title="埃夫斯堡">埃夫斯堡</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1638906/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1638906/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1638906/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-08-01 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1024" target="_blank" title="卢宾扎格">卢宾扎格</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/626" target="_blank" title="布星">布星</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1638907/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1638907/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1638907/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-08-01 03:05</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/77" target="_blank" title="流浪者">流浪者</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1490" target="_blank" title="泽塔">泽塔</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1638925/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1638925/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1638925/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-08-01 21:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/683" target="_blank" title="阿斯塔纳">阿斯塔纳</a></td>
											<td>			
												
												
													1:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/507" target="_blank" title="罗森博格">罗森博格</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1638793/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1638793/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1638793/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-08-01 23:59</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/603" target="_blank" title="文茨皮斯">文茨皮斯</a></td>
											<td>			
												
												
													0:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/9" target="_blank" title="萨尔茨堡">萨尔茨堡</a></td>
											<td>			
												
												
													0:2
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1638800/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1638800/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1638800/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-08-02 02:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1031" target="_blank" title="斯利纳">斯利纳</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/651" target="_blank" title="斯拉维亚">斯拉维亚</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1638814/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1638814/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1638814/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-08-02 02:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/529" target="_blank" title="贝西克塔">贝西克塔</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2559" target="_blank" title="谢里夫">谢里夫</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1638815/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1638815/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1638815/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-08-02 02:15</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/612" target="_blank" title="红星">红星</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/674" target="_blank" title="利瓦迪亚">利瓦迪亚</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1638818/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1638818/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1638818/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-08-02 02:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1296" target="_blank" title="多姆扎莱">多姆扎莱</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/653" target="_blank" title="萨迪纳摩">萨迪纳摩</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1638819/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1638819/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1638819/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-08-02 03:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/711" target="_blank" title="哈夫纳夫">哈夫纳夫</a></td>
											<td>			
												
												
													1:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2435" target="_blank" title="巴特">巴特</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1638830/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1638830/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1638830/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-08-08 01:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/617" target="_blank" title="索斯基">索斯基</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/396" target="_blank" title="坦佩雷">坦佩雷</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1637888/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1637888/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1637888/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-08-08 02:05</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1490" target="_blank" title="泽塔">泽塔</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/77" target="_blank" title="流浪者">流浪者</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1637893/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1637893/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1637893/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-08-08 02:15</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1607" target="_blank" title="耶贝塔">耶贝塔</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/227" target="_blank" title="哥本哈根">哥本哈根</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1637894/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1637894/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1637894/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-08-08 02:15</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/653" target="_blank" title="萨迪纳摩">萨迪纳摩</a></td>
											<td>			
												
												
													3:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1296" target="_blank" title="多姆扎莱">多姆扎莱</a></td>
											<td>			
												
												
													2:1
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1637895/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1637895/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1637895/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-08-08 23:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/674" target="_blank" title="利瓦迪亚">利瓦迪亚</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/612" target="_blank" title="红星">红星</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1637791/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1637791/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1637791/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-08-08 23:59</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2435" target="_blank" title="巴特">巴特</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/711" target="_blank" title="哈夫纳夫">哈夫纳夫</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1637803/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1637803/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1637803/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-08-09 01:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/716" target="_blank" title="顿矿工">顿矿工</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2555" target="_blank" title="皮尤尼克">皮尤尼克</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1637812/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1637812/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1637812/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-08-09 01:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/417" target="_blank" title="埃夫斯堡">埃夫斯堡</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/695" target="_blank" title="德布勒森">德布勒森</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1637813/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1637813/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1637813/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-08-09 01:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2559" target="_blank" title="谢里夫">谢里夫</a></td>
											<td>			
												
												
													0:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/529" target="_blank" title="贝西克塔">贝西克塔</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1637814/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1637814/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1637814/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-08-09 01:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/626" target="_blank" title="布星">布星</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1024" target="_blank" title="卢宾扎格">卢宾扎格</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1637823/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1637823/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1637823/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-08-09 01:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/666" target="_blank" title="萨拉热窝">萨拉热窝</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/147" target="_blank" title="亨克">亨克</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1637824/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1637824/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1637824/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-08-09 02:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/9" target="_blank" title="萨尔茨堡">萨尔茨堡</a></td>
											<td>			
												
												
													4:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/603" target="_blank" title="文茨皮斯">文茨皮斯</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1637837/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1637837/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1637837/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-08-09 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/507" target="_blank" title="罗森博格">罗森博格</a></td>
											<td>			
												
												
													7:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/683" target="_blank" title="阿斯塔纳">阿斯塔纳</a></td>
											<td>			
												
												
													4:1
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1637839/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1637839/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1637839/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-08-09 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/651" target="_blank" title="斯拉维亚">斯拉维亚</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1031" target="_blank" title="斯利纳">斯利纳</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1637840/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1637840/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1637840/bfyc" class="oyx" target="_blank">析</a>
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
											<td>2007-08-15 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/182" target="_blank" title="拉齐奥">拉齐奥</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/721" target="_blank" title="布加勒斯">布加勒斯</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1636804/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1636804/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1636804/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-08-15 03:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/77" target="_blank" title="流浪者">流浪者</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/612" target="_blank" title="红星">红星</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1636853/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1636853/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1636853/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-08-15 03:15</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/463" target="_blank" title="本菲卡">本菲卡</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/227" target="_blank" title="哥本哈根">哥本哈根</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1636855/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1636855/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1636855/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-08-15 04:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/91" target="_blank" title="巴伦西亚">巴伦西亚</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/417" target="_blank" title="埃夫斯堡">埃夫斯堡</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1636857/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1636857/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1636857/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-08-15 22:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/216" target="_blank" title="图卢兹">图卢兹</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/25" target="_blank" title="利物浦">利物浦</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1636657/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1636657/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1636657/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-08-15 23:59</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/396" target="_blank" title="坦佩雷">坦佩雷</a></td>
											<td>			
												
												
													0:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/507" target="_blank" title="罗森博格">罗森博格</a></td>
											<td>			
												
												
													0:2
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1636665/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1636665/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1636665/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-08-15 23:59</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/411" target="_blank" title="莫斯巴达">莫斯巴达</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/70" target="_blank" title="凯尔特人">凯尔特人</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1636666/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1636666/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1636666/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-08-16 01:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2435" target="_blank" title="巴特">巴特</a></td>
											<td>			
												
												
													2:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/626" target="_blank" title="布星">布星</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1636674/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1636674/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1636674/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-08-16 02:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/666" target="_blank" title="萨拉热窝">萨拉热窝</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/712" target="_blank" title="基辅迪纳">基辅迪纳</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1636688/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1636688/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1636688/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-08-16 02:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/537" target="_blank" title="费内巴切">费内巴切</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/153" target="_blank" title="安德莱赫">安德莱赫</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1636689/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1636689/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1636689/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-08-16 02:15</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/449" target="_blank" title="苏黎世">苏黎世</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/529" target="_blank" title="贝西克塔">贝西克塔</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1636699/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1636699/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1636699/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-08-16 02:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/132" target="_blank" title="不来梅">不来梅</a></td>
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
												<a href="http://fenxi.zgzcw.com/1636700/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1636700/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1636700/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-08-16 02:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/9" target="_blank" title="萨尔茨堡">萨尔茨堡</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/716" target="_blank" title="顿矿工">顿矿工</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1636701/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1636701/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1636701/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-08-16 02:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/253" target="_blank" title="阿贾克斯">阿贾克斯</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/651" target="_blank" title="斯拉维亚">斯拉维亚</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1636702/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1636702/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1636702/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-08-16 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/678" target="_blank" title="布斯巴达">布斯巴达</a></td>
											<td>			
												
												
													0:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/19" target="_blank" title="阿森纳">阿森纳</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1636717/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1636717/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1636717/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-08-16 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/86" target="_blank" title="塞维利亚">塞维利亚</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/616" target="_blank" title="AEK雅典">AEK雅典</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1636718/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1636718/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1636718/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-08-29 02:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/612" target="_blank" title="红星">红星</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/77" target="_blank" title="流浪者">流浪者</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1634131/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1634131/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1634131/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-08-29 03:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/721" target="_blank" title="布加勒斯">布加勒斯</a></td>
											<td>			
												
												
													1:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/182" target="_blank" title="拉齐奥">拉齐奥</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1634174/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1634174/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1634174/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-08-29 03:05</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/25" target="_blank" title="利物浦">利物浦</a></td>
											<td>			
												
												
													4:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/216" target="_blank" title="图卢兹">图卢兹</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1634177/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1634177/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1634177/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-08-29 23:59</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/712" target="_blank" title="基辅迪纳">基辅迪纳</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/666" target="_blank" title="萨拉热窝">萨拉热窝</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1634012/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1634012/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1634012/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-08-29 23:59</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/716" target="_blank" title="顿矿工">顿矿工</a></td>
											<td>			
												
												
													3:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/9" target="_blank" title="萨尔茨堡">萨尔茨堡</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1634013/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1634013/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1634013/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-08-30 01:15</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/529" target="_blank" title="贝西克塔">贝西克塔</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/449" target="_blank" title="苏黎世">苏黎世</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1634025/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1634025/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1634025/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-08-30 01:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/626" target="_blank" title="布星">布星</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2435" target="_blank" title="巴特">巴特</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1634026/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1634026/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1634026/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-08-30 02:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/653" target="_blank" title="萨迪纳摩">萨迪纳摩</a></td>
											<td>			
												
												
													2:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/132" target="_blank" title="不来梅">不来梅</a></td>
											<td>			
												
												
													2:2
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1634040/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1634040/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1634040/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-08-30 02:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/651" target="_blank" title="斯拉维亚">斯拉维亚</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/253" target="_blank" title="阿贾克斯">阿贾克斯</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1634041/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1634041/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1634041/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-08-30 02:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/153" target="_blank" title="安德莱赫">安德莱赫</a></td>
											<td>			
												
												
													0:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/537" target="_blank" title="费内巴切">费内巴切</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1634042/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1634042/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1634042/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-08-30 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/70" target="_blank" title="凯尔特人">凯尔特人</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/411" target="_blank" title="莫斯巴达">莫斯巴达</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1634052/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1634052/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1634052/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-08-30 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/417" target="_blank" title="埃夫斯堡">埃夫斯堡</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/91" target="_blank" title="巴伦西亚">巴伦西亚</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												受让半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1634053/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1634053/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1634053/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-08-30 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/227" target="_blank" title="哥本哈根">哥本哈根</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/463" target="_blank" title="本菲卡">本菲卡</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1634054/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1634054/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1634054/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-08-30 03:05</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/19" target="_blank" title="阿森纳">阿森纳</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/678" target="_blank" title="布斯巴达">布斯巴达</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1634065/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1634065/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1634065/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-08-30 03:40</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/507" target="_blank" title="罗森博格">罗森博格</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/396" target="_blank" title="坦佩雷">坦佩雷</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1634068/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1634068/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1634068/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-09-04 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/616" target="_blank" title="AEK雅典">AEK雅典</a></td>
											<td>			
												
												
													1:4
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/86" target="_blank" title="塞维利亚">塞维利亚</a></td>
											<td>			
												
												
													0:3
												
														
											</td>
											<td align="center">
											
											
												受让半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1632755/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1632755/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1632755/bfyc" class="oyx" target="_blank">析</a>
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
											<td>2007-09-19 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/211" target="_blank" title="马赛">马赛</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/529" target="_blank" title="贝西克塔">贝西克塔</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1630210/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1630210/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1630210/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-09-19 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/468" target="_blank" title="波尔图">波尔图</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/25" target="_blank" title="利物浦">利物浦</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1630211/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1630211/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1630211/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-10-04 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/25" target="_blank" title="利物浦">利物浦</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/211" target="_blank" title="马赛">马赛</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1626886/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1626886/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1626886/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-10-04 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/529" target="_blank" title="贝西克塔">贝西克塔</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/468" target="_blank" title="波尔图">波尔图</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1626887/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1626887/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1626887/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-10-25 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/529" target="_blank" title="贝西克塔">贝西克塔</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/25" target="_blank" title="利物浦">利物浦</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												受让半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1623235/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1623235/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1623235/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-10-25 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/211" target="_blank" title="马赛">马赛</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/468" target="_blank" title="波尔图">波尔图</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1623236/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1623236/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1623236/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-11-07 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/25" target="_blank" title="利物浦">利物浦</a></td>
											<td>			
												
												
													8:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/529" target="_blank" title="贝西克塔">贝西克塔</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												球半/两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1620400/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1620400/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1620400/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-11-07 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/468" target="_blank" title="波尔图">波尔图</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/211" target="_blank" title="马赛">马赛</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1620401/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1620401/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1620401/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-11-29 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/529" target="_blank" title="贝西克塔">贝西克塔</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/211" target="_blank" title="马赛">马赛</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1617267/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1617267/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1617267/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-11-29 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/25" target="_blank" title="利物浦">利物浦</a></td>
											<td>			
												
												
													4:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/468" target="_blank" title="波尔图">波尔图</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1617268/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1617268/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1617268/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-12-12 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/211" target="_blank" title="马赛">马赛</a></td>
											<td>			
												
												
													0:4
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/25" target="_blank" title="利物浦">利物浦</a></td>
											<td>			
												
												
													0:2
												
														
											</td>
											<td align="center">
											
											
												受让半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1615300/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1615300/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1615300/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-12-12 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/468" target="_blank" title="波尔图">波尔图</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/529" target="_blank" title="贝西克塔">贝西克塔</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1615301/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1615301/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1615301/bfyc" class="oyx" target="_blank">析</a>
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
											<td>2007-09-19 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/24" target="_blank" title="切尔西">切尔西</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/507" target="_blank" title="罗森博格">罗森博格</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												球半/两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1630212/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1630212/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1630212/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-09-19 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/151" target="_blank" title="沙尔克04">沙尔克04</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/91" target="_blank" title="巴伦西亚">巴伦西亚</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1630213/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1630213/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1630213/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-10-04 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/91" target="_blank" title="巴伦西亚">巴伦西亚</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/24" target="_blank" title="切尔西">切尔西</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1626888/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1626888/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1626888/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-10-04 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/507" target="_blank" title="罗森博格">罗森博格</a></td>
											<td>			
												
												
													0:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/151" target="_blank" title="沙尔克04">沙尔克04</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1626889/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1626889/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1626889/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-10-25 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/507" target="_blank" title="罗森博格">罗森博格</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/91" target="_blank" title="巴伦西亚">巴伦西亚</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1623237/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1623237/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1623237/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-10-25 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/24" target="_blank" title="切尔西">切尔西</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/151" target="_blank" title="沙尔克04">沙尔克04</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1623238/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1623238/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1623238/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-11-07 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/91" target="_blank" title="巴伦西亚">巴伦西亚</a></td>
											<td>			
												
												
													0:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/507" target="_blank" title="罗森博格">罗森博格</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												球半/两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1620402/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1620402/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1620402/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-11-07 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/151" target="_blank" title="沙尔克04">沙尔克04</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/24" target="_blank" title="切尔西">切尔西</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1620403/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1620403/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1620403/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-11-29 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/507" target="_blank" title="罗森博格">罗森博格</a></td>
											<td>			
												
												
													0:4
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/24" target="_blank" title="切尔西">切尔西</a></td>
											<td>			
												
												
													0:3
												
														
											</td>
											<td align="center">
											
											
												受让半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1617269/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1617269/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1617269/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-11-29 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/91" target="_blank" title="巴伦西亚">巴伦西亚</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/151" target="_blank" title="沙尔克04">沙尔克04</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1617270/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1617270/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1617270/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-12-12 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/24" target="_blank" title="切尔西">切尔西</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/91" target="_blank" title="巴伦西亚">巴伦西亚</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1615302/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1615302/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1615302/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-12-12 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/151" target="_blank" title="沙尔克04">沙尔克04</a></td>
											<td>			
												
												
													3:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/507" target="_blank" title="罗森博格">罗森博格</a></td>
											<td>			
												
												
													3:1
												
														
											</td>
											<td align="center">
											
											
												球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1615303/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1615303/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1615303/bfyc" class="oyx" target="_blank">析</a>
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
											<td>2007-09-19 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/82" target="_blank" title="皇马">皇马</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/132" target="_blank" title="不来梅">不来梅</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1630214/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1630214/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1630214/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-09-19 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/568" target="_blank" title="奥林匹亚">奥林匹亚</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/182" target="_blank" title="拉齐奥">拉齐奥</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1630215/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1630215/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1630215/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-10-04 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/182" target="_blank" title="拉齐奥">拉齐奥</a></td>
											<td>			
												
												
													2:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/82" target="_blank" title="皇马">皇马</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1626890/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1626890/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1626890/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-10-04 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/132" target="_blank" title="不来梅">不来梅</a></td>
											<td>			
												
												
													1:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/568" target="_blank" title="奥林匹亚">奥林匹亚</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1626891/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1626891/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1626891/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-10-25 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/132" target="_blank" title="不来梅">不来梅</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/182" target="_blank" title="拉齐奥">拉齐奥</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1623239/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1623239/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1623239/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-10-25 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/82" target="_blank" title="皇马">皇马</a></td>
											<td>			
												
												
													4:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/568" target="_blank" title="奥林匹亚">奥林匹亚</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1623240/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1623240/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1623240/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-11-07 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/182" target="_blank" title="拉齐奥">拉齐奥</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/132" target="_blank" title="不来梅">不来梅</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1620404/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1620404/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1620404/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-11-07 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/568" target="_blank" title="奥林匹亚">奥林匹亚</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/82" target="_blank" title="皇马">皇马</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1620405/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1620405/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1620405/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-11-29 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/132" target="_blank" title="不来梅">不来梅</a></td>
											<td>			
												
												
													3:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/82" target="_blank" title="皇马">皇马</a></td>
											<td>			
												
												
													2:1
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1617271/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1617271/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1617271/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-11-29 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/182" target="_blank" title="拉齐奥">拉齐奥</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/568" target="_blank" title="奥林匹亚">奥林匹亚</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1617272/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1617272/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1617272/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-12-12 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/82" target="_blank" title="皇马">皇马</a></td>
											<td>			
												
												
													3:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/182" target="_blank" title="拉齐奥">拉齐奥</a></td>
											<td>			
												
												
													3:0
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1615304/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1615304/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1615304/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-12-12 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/568" target="_blank" title="奥林匹亚">奥林匹亚</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/132" target="_blank" title="不来梅">不来梅</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1615305/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1615305/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1615305/bfyc" class="oyx" target="_blank">析</a>
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
											<td>2007-09-19 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/150" target="_blank" title="AC米兰">AC米兰</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/463" target="_blank" title="本菲卡">本菲卡</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1630216/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1630216/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1630216/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-09-19 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/716" target="_blank" title="顿矿工">顿矿工</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/70" target="_blank" title="凯尔特人">凯尔特人</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1630217/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1630217/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1630217/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-10-04 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/70" target="_blank" title="凯尔特人">凯尔特人</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/150" target="_blank" title="AC米兰">AC米兰</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1626892/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1626892/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1626892/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-10-04 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/463" target="_blank" title="本菲卡">本菲卡</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/716" target="_blank" title="顿矿工">顿矿工</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1626893/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1626893/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1626893/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-10-25 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/463" target="_blank" title="本菲卡">本菲卡</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/70" target="_blank" title="凯尔特人">凯尔特人</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1623241/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1623241/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1623241/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-10-25 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/150" target="_blank" title="AC米兰">AC米兰</a></td>
											<td>			
												
												
													4:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/716" target="_blank" title="顿矿工">顿矿工</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1623242/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1623242/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1623242/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-11-07 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/70" target="_blank" title="凯尔特人">凯尔特人</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/463" target="_blank" title="本菲卡">本菲卡</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1620406/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1620406/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1620406/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-11-07 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/716" target="_blank" title="顿矿工">顿矿工</a></td>
											<td>			
												
												
													0:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/150" target="_blank" title="AC米兰">AC米兰</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1620407/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1620407/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1620407/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-11-29 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/463" target="_blank" title="本菲卡">本菲卡</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/150" target="_blank" title="AC米兰">AC米兰</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1617273/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1617273/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1617273/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-11-29 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/70" target="_blank" title="凯尔特人">凯尔特人</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/716" target="_blank" title="顿矿工">顿矿工</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1617274/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1617274/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1617274/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-12-05 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/150" target="_blank" title="AC米兰">AC米兰</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/70" target="_blank" title="凯尔特人">凯尔特人</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1616264/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1616264/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1616264/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-12-05 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/716" target="_blank" title="顿矿工">顿矿工</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/463" target="_blank" title="本菲卡">本菲卡</a></td>
											<td>			
												
												
													1:2
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1616265/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1616265/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1616265/bfyc" class="oyx" target="_blank">析</a>
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
											<td>2007-09-20 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/77" target="_blank" title="流浪者">流浪者</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/155" target="_blank" title="斯图加特">斯图加特</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1630106/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1630106/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1630106/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-09-20 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/84" target="_blank" title="巴萨">巴萨</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/205" target="_blank" title="里昂">里昂</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1630107/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1630107/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1630107/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-10-03 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/205" target="_blank" title="里昂">里昂</a></td>
											<td>			
												
												
													0:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/77" target="_blank" title="流浪者">流浪者</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1627006/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1627006/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1627006/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-10-03 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/155" target="_blank" title="斯图加特">斯图加特</a></td>
											<td>			
												
												
													0:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/84" target="_blank" title="巴萨">巴萨</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1627007/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1627007/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1627007/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-10-24 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/155" target="_blank" title="斯图加特">斯图加特</a></td>
											<td>			
												
												
													0:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/205" target="_blank" title="里昂">里昂</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1623320/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1623320/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1623320/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-10-24 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/77" target="_blank" title="流浪者">流浪者</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/84" target="_blank" title="巴萨">巴萨</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1623321/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1623321/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1623321/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-11-08 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/205" target="_blank" title="里昂">里昂</a></td>
											<td>			
												
												
													4:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/155" target="_blank" title="斯图加特">斯图加特</a></td>
											<td>			
												
												
													3:1
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1620307/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1620307/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1620307/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-11-08 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/84" target="_blank" title="巴萨">巴萨</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/77" target="_blank" title="流浪者">流浪者</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												球半/两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1620308/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1620308/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1620308/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-11-28 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/155" target="_blank" title="斯图加特">斯图加特</a></td>
											<td>			
												
												
													3:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/77" target="_blank" title="流浪者">流浪者</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1617329/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1617329/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1617329/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-11-28 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/205" target="_blank" title="里昂">里昂</a></td>
											<td>			
												
												
													2:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/84" target="_blank" title="巴萨">巴萨</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1617330/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1617330/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1617330/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-12-13 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/77" target="_blank" title="流浪者">流浪者</a></td>
											<td>			
												
												
													0:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/205" target="_blank" title="里昂">里昂</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1615248/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1615248/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1615248/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-12-13 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/84" target="_blank" title="巴萨">巴萨</a></td>
											<td>			
												
												
													3:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/155" target="_blank" title="斯图加特">斯图加特</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1615249/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1615249/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1615249/bfyc" class="oyx" target="_blank">析</a>
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
											<td>2007-09-20 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/174" target="_blank" title="罗马">罗马</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/712" target="_blank" title="基辅迪纳">基辅迪纳</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1630108/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1630108/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1630108/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-09-20 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/466" target="_blank" title="里斯本">里斯本</a></td>
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
												<a href="http://fenxi.zgzcw.com/1630109/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1630109/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1630109/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-10-03 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/27" target="_blank" title="曼联">曼联</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/174" target="_blank" title="罗马">罗马</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1627008/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1627008/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1627008/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-10-03 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/712" target="_blank" title="基辅迪纳">基辅迪纳</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/466" target="_blank" title="里斯本">里斯本</a></td>
											<td>			
												
												
													1:2
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1627009/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1627009/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1627009/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-10-24 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/712" target="_blank" title="基辅迪纳">基辅迪纳</a></td>
											<td>			
												
												
													2:4
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/27" target="_blank" title="曼联">曼联</a></td>
											<td>			
												
												
													1:3
												
														
											</td>
											<td align="center">
											
											
												受让半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1623322/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1623322/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1623322/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-10-24 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/174" target="_blank" title="罗马">罗马</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/466" target="_blank" title="里斯本">里斯本</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1623323/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1623323/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1623323/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-11-08 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/27" target="_blank" title="曼联">曼联</a></td>
											<td>			
												
												
													4:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/712" target="_blank" title="基辅迪纳">基辅迪纳</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												两球/两球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1620309/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1620309/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1620309/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-11-08 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/466" target="_blank" title="里斯本">里斯本</a></td>
											<td>			
												
												
													2:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/174" target="_blank" title="罗马">罗马</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1620310/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1620310/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1620310/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-11-28 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/712" target="_blank" title="基辅迪纳">基辅迪纳</a></td>
											<td>			
												
												
													1:4
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/174" target="_blank" title="罗马">罗马</a></td>
											<td>			
												
												
													0:3
												
														
											</td>
											<td align="center">
											
											
												受让半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1617331/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1617331/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1617331/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-11-28 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/27" target="_blank" title="曼联">曼联</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/466" target="_blank" title="里斯本">里斯本</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1617332/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1617332/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1617332/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-12-13 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/174" target="_blank" title="罗马">罗马</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/27" target="_blank" title="曼联">曼联</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1615250/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1615250/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1615250/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-12-13 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/466" target="_blank" title="里斯本">里斯本</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/712" target="_blank" title="基辅迪纳">基辅迪纳</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1615251/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1615251/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1615251/bfyc" class="oyx" target="_blank">析</a>
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
											<td>2007-09-20 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/254" target="_blank" title="埃因霍温">埃因霍温</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/407" target="_blank" title="莫陆军">莫陆军</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1630110/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1630110/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1630110/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-09-20 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/537" target="_blank" title="费内巴切">费内巴切</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/152" target="_blank" title="国际米兰">国际米兰</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1630111/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1630111/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1630111/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-10-03 00:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/407" target="_blank" title="莫陆军">莫陆军</a></td>
											<td>			
												
												
													2:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/537" target="_blank" title="费内巴切">费内巴切</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1626980/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1626980/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1626980/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-10-03 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/152" target="_blank" title="国际米兰">国际米兰</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/254" target="_blank" title="埃因霍温">埃因霍温</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1627010/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1627010/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1627010/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-10-24 00:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/407" target="_blank" title="莫陆军">莫陆军</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/152" target="_blank" title="国际米兰">国际米兰</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												受让半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1623300/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1623300/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1623300/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-10-24 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/254" target="_blank" title="埃因霍温">埃因霍温</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/537" target="_blank" title="费内巴切">费内巴切</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1623324/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1623324/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1623324/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-11-08 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/152" target="_blank" title="国际米兰">国际米兰</a></td>
											<td>			
												
												
													4:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/407" target="_blank" title="莫陆军">莫陆军</a></td>
											<td>			
												
												
													2:2
												
														
											</td>
											<td align="center">
											
											
												球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1620311/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1620311/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1620311/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-11-08 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/537" target="_blank" title="费内巴切">费内巴切</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/254" target="_blank" title="埃因霍温">埃因霍温</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1620312/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1620312/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1620312/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-11-28 01:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/407" target="_blank" title="莫陆军">莫陆军</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/254" target="_blank" title="埃因霍温">埃因霍温</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1617312/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1617312/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1617312/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-11-28 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/152" target="_blank" title="国际米兰">国际米兰</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/537" target="_blank" title="费内巴切">费内巴切</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1617333/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1617333/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1617333/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-12-13 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/254" target="_blank" title="埃因霍温">埃因霍温</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/152" target="_blank" title="国际米兰">国际米兰</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1615252/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1615252/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1615252/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-12-13 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/537" target="_blank" title="费内巴切">费内巴切</a></td>
											<td>			
												
												
													3:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/407" target="_blank" title="莫陆军">莫陆军</a></td>
											<td>			
												
												
													2:1
												
														
											</td>
											<td align="center">
											
											
												球半/两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1615253/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1615253/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1615253/bfyc" class="oyx" target="_blank">析</a>
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
											<td>2007-09-20 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/651" target="_blank" title="斯拉维亚">斯拉维亚</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/626" target="_blank" title="布星">布星</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1630112/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1630112/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1630112/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-09-20 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/19" target="_blank" title="阿森纳">阿森纳</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/86" target="_blank" title="塞维利亚">塞维利亚</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1630113/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1630113/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1630113/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-10-03 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/626" target="_blank" title="布星">布星</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/19" target="_blank" title="阿森纳">阿森纳</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1627011/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1627011/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1627011/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-10-03 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/86" target="_blank" title="塞维利亚">塞维利亚</a></td>
											<td>			
												
												
													4:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/651" target="_blank" title="斯拉维亚">斯拉维亚</a></td>
											<td>			
												
												
													2:1
												
														
											</td>
											<td align="center">
											
											
												球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1627012/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1627012/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1627012/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-10-24 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/19" target="_blank" title="阿森纳">阿森纳</a></td>
											<td>			
												
												
													7:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/651" target="_blank" title="斯拉维亚">斯拉维亚</a></td>
											<td>			
												
												
													3:0
												
														
											</td>
											<td align="center">
											
											
												球半/两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1623325/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1623325/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1623325/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-10-24 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/86" target="_blank" title="塞维利亚">塞维利亚</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/626" target="_blank" title="布星">布星</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												球半/两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1623326/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1623326/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1623326/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-11-08 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/651" target="_blank" title="斯拉维亚">斯拉维亚</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/19" target="_blank" title="阿森纳">阿森纳</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1620313/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1620313/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1620313/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-11-08 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/626" target="_blank" title="布星">布星</a></td>
											<td>			
												
												
													0:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/86" target="_blank" title="塞维利亚">塞维利亚</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1620314/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1620314/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1620314/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-11-28 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/626" target="_blank" title="布星">布星</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/651" target="_blank" title="斯拉维亚">斯拉维亚</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1617334/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1617334/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1617334/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-11-28 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/86" target="_blank" title="塞维利亚">塞维利亚</a></td>
											<td>			
												
												
													3:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/19" target="_blank" title="阿森纳">阿森纳</a></td>
											<td>			
												
												
													2:1
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1617335/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1617335/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1617335/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-12-13 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/19" target="_blank" title="阿森纳">阿森纳</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/626" target="_blank" title="布星">布星</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1615254/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1615254/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1615254/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2007-12-13 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/651" target="_blank" title="斯拉维亚">斯拉维亚</a></td>
											<td>			
												
												
													0:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/86" target="_blank" title="塞维利亚">塞维利亚</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1615255/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1615255/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1615255/bfyc" class="oyx" target="_blank">析</a>
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
											<td>2008-02-20 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/151" target="_blank" title="沙尔克04">沙尔克04</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/468" target="_blank" title="波尔图">波尔图</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1607409/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1607409/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1607409/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-02-20 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/25" target="_blank" title="利物浦">利物浦</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/152" target="_blank" title="国际米兰">国际米兰</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1607410/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1607410/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1607410/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-02-20 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/174" target="_blank" title="罗马">罗马</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/82" target="_blank" title="皇马">皇马</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1607411/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1607411/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1607411/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-02-20 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/568" target="_blank" title="奥林匹亚">奥林匹亚</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/24" target="_blank" title="切尔西">切尔西</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1607412/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1607412/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1607412/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-02-21 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/205" target="_blank" title="里昂">里昂</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/27" target="_blank" title="曼联">曼联</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1607323/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1607323/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1607323/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-02-21 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/19" target="_blank" title="阿森纳">阿森纳</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/150" target="_blank" title="AC米兰">AC米兰</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1607324/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1607324/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1607324/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-02-21 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/70" target="_blank" title="凯尔特人">凯尔特人</a></td>
											<td>			
												
												
													2:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/84" target="_blank" title="巴萨">巴萨</a></td>
											<td>			
												
												
													2:1
												
														
											</td>
											<td align="center">
											
											
												受让半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1607325/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1607325/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1607325/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-02-21 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/537" target="_blank" title="费内巴切">费内巴切</a></td>
											<td>			
												
												
													3:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/86" target="_blank" title="塞维利亚">塞维利亚</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1607326/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1607326/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1607326/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-03-05 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/150" target="_blank" title="AC米兰">AC米兰</a></td>
											<td>			
												
												
													0:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/19" target="_blank" title="阿森纳">阿森纳</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1604939/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1604939/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1604939/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-03-05 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/84" target="_blank" title="巴萨">巴萨</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/70" target="_blank" title="凯尔特人">凯尔特人</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												球半/两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1604940/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1604940/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1604940/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-03-05 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/86" target="_blank" title="塞维利亚">塞维利亚</a></td>
											<td>			
												
												
													3:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/537" target="_blank" title="费内巴切">费内巴切</a></td>
											<td>			
												
												
													3:1
												
														
											</td>
											<td align="center">
											
											
												球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1604941/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1604941/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1604941/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-03-05 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/27" target="_blank" title="曼联">曼联</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/205" target="_blank" title="里昂">里昂</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1604942/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1604942/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1604942/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-03-06 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/468" target="_blank" title="波尔图">波尔图</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/151" target="_blank" title="沙尔克04">沙尔克04</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1604864/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1604864/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1604864/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-03-06 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/82" target="_blank" title="皇马">皇马</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/174" target="_blank" title="罗马">罗马</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1604865/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1604865/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1604865/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-03-06 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/24" target="_blank" title="切尔西">切尔西</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/568" target="_blank" title="奥林匹亚">奥林匹亚</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												球半/两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1604866/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1604866/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1604866/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-03-12 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/152" target="_blank" title="国际米兰">国际米兰</a></td>
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
												<a href="http://fenxi.zgzcw.com/1603622/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1603622/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1603622/bfyc" class="oyx" target="_blank">析</a>
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
											<td>2008-04-02 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/174" target="_blank" title="罗马">罗马</a></td>
											<td>			
												
												
													0:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/27" target="_blank" title="曼联">曼联</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1599553/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1599553/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1599553/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-04-02 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/151" target="_blank" title="沙尔克04">沙尔克04</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/84" target="_blank" title="巴萨">巴萨</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1599554/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1599554/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1599554/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-04-03 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/19" target="_blank" title="阿森纳">阿森纳</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/25" target="_blank" title="利物浦">利物浦</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1599470/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1599470/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1599470/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-04-03 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/537" target="_blank" title="费内巴切">费内巴切</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/24" target="_blank" title="切尔西">切尔西</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1599471/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1599471/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1599471/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-04-09 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/25" target="_blank" title="利物浦">利物浦</a></td>
											<td>			
												
												
													4:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/19" target="_blank" title="阿森纳">阿森纳</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1598063/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1598063/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1598063/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-04-09 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/24" target="_blank" title="切尔西">切尔西</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/537" target="_blank" title="费内巴切">费内巴切</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1598064/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1598064/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1598064/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-04-10 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/27" target="_blank" title="曼联">曼联</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/174" target="_blank" title="罗马">罗马</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1597979/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1597979/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1597979/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-04-10 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/84" target="_blank" title="巴萨">巴萨</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/151" target="_blank" title="沙尔克04">沙尔克04</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1597980/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1597980/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1597980/bfyc" class="oyx" target="_blank">析</a>
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
											<td>2008-04-23 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/25" target="_blank" title="利物浦">利物浦</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/24" target="_blank" title="切尔西">切尔西</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1594872/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1594872/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1594872/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-04-24 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/84" target="_blank" title="巴萨">巴萨</a></td>
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
												<a href="http://fenxi.zgzcw.com/1594810/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1594810/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1594810/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-04-30 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/27" target="_blank" title="曼联">曼联</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/84" target="_blank" title="巴萨">巴萨</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1593416/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1593416/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1593416/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2008-05-01 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/24" target="_blank" title="切尔西">切尔西</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/25" target="_blank" title="利物浦">利物浦</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1593274/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1593274/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1593274/bfyc" class="oyx" target="_blank">析</a>
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
											<td>2008-05-22 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/27" target="_blank" title="曼联">曼联</a></td>
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
												<a href="http://fenxi.zgzcw.com/1589083/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1589083/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1589083/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
							</tbody></table>
						</div>						
										
				
				</ul>
			
			
		</div>

		
		
		
		
		
		
		
		
		
		
		
		




</body>