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
    <b id="xt_h">21</b><b id="xt_m">52</b><b id="xt_s">47</b> </p>
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
	                <ul class="select_options" style="display: none;">
	                 
	                 
	                  
	                  
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
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/15175" target="_blank" class="a1" title="卢多戈雷">
					<li>卢多戈雷</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/14630" target="_blank" class="a1" title="泰拜尼">
					<li>泰拜尼</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/11677" target="_blank" class="a1" title="卢西塔">
					<li>卢西塔</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/5785" target="_blank" class="a1" title="泽斯塔弗">
					<li>泽斯塔弗</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/5762" target="_blank" class="a1" title="尤耶塞斯">
					<li>尤耶塞斯</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/5726" target="_blank" class="a1" title="萨克特卡">
					<li>萨克特卡</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/4107" target="_blank" class="a1" title="铁路工人">
					<li>铁路工人</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/3573" target="_blank" class="a1" title="科尔察">
					<li>科尔察</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/2894" target="_blank" class="a1" title="斯拉斯克">
					<li>斯拉斯克</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/2618" target="_blank" class="a1" title="内弗特奇">
					<li>内弗特奇</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/2603" target="_blank" class="a1" title="瓦斯卢伊">
					<li>瓦斯卢伊</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/2559" target="_blank" class="a1" title="谢里夫">
					<li>谢里夫</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/2531" target="_blank" class="a1" title="托尔B36">
					<li>托尔B36</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/2522" target="_blank" class="a1" title="弗罗拉">
					<li>弗罗拉</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/1952" target="_blank" class="a1" title="谢莫普尔">
					<li>谢莫普尔</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/1926" target="_blank" class="a1" title="布塔纳斯">
					<li>布塔纳斯</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/1646" target="_blank" class="a1" title="林菲尔德">
					<li>林菲尔德</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/1642" target="_blank" class="a1" title="雷克雅">
					<li>雷克雅</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/1579" target="_blank" class="a1" title="利马索尔">
					<li>利马索尔</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/1261" target="_blank" class="a1" title="新圣徒">
					<li>新圣徒</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/1031" target="_blank" class="a1" title="斯利纳">
					<li>斯利纳</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/940" target="_blank" class="a1" title="瓦尔达">
					<li>瓦尔达</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/725" target="_blank" class="a1" title="马里博尔">
					<li>马里博尔</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/722" target="_blank" class="a1" title="贝尔游击">
					<li>贝尔游击</li>
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
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/671" target="_blank" class="a1" title="利贝雷茨">
					<li>利贝雷茨</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/661" target="_blank" class="a1" title="瓦莱塔">
					<li>瓦莱塔</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/603" target="_blank" class="a1" title="文茨皮斯">
					<li>文茨皮斯</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/566" target="_blank" class="a1" title="帕纳辛纳">
					<li>帕纳辛纳</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/537" target="_blank" class="a1" title="费内巴切">
					<li>费内巴切</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/505" target="_blank" class="a1" title="莫尔德">
					<li>莫尔德</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/451" target="_blank" class="a1" title="巴塞尔">
					<li>巴塞尔</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/404" target="_blank" class="a1" title="赫尔辛堡">
					<li>赫尔辛堡</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/383" target="_blank" class="a1" title="赫尔辛基">
					<li>赫尔辛基</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/252" target="_blank" class="a1" title="费耶诺德">
					<li>费耶诺德</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/227" target="_blank" class="a1" title="哥本哈根">
					<li>哥本哈根</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/187" target="_blank" class="a1" title="乌迪内斯">
					<li>乌迪内斯</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/177" target="_blank" class="a1" title="沙姆洛克">
					<li>沙姆洛克</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/148" target="_blank" class="a1" title="布鲁日">
					<li>布鲁日</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/128" target="_blank" class="a1" title="门兴">
					<li>门兴</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/75" target="_blank" class="a1" title="马瑟韦尔">
					<li>马瑟韦尔</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/9" target="_blank" class="a1" title="萨尔茨堡">
					<li>萨尔茨堡</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/24" target="_blank" class="a1" title="切尔西">
					<li>切尔西</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/88" target="_blank" class="a1" title="拜仁">
					<li>拜仁</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/82" target="_blank" class="a1" title="皇马">
					<li>皇马</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/271" target="_blank" class="a1" title="巴黎圣曼">
					<li>巴黎圣曼</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/91" target="_blank" class="a1" title="巴伦西亚">
					<li>巴伦西亚</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/166" target="_blank" class="a1" title="尤文图斯">
					<li>尤文图斯</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/102" target="_blank" class="a1" title="马拉加">
					<li>马拉加</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/716" target="_blank" class="a1" title="顿矿工">
					<li>顿矿工</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/99" target="_blank" class="a1" title="多特蒙德">
					<li>多特蒙德</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/84" target="_blank" class="a1" title="巴萨">
					<li>巴萨</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/468" target="_blank" class="a1" title="波尔图">
					<li>波尔图</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/151" target="_blank" class="a1" title="沙尔克04">
					<li>沙尔克04</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/19" target="_blank" class="a1" title="阿森纳">
					<li>阿森纳</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/27" target="_blank" class="a1" title="曼联">
					<li>曼联</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/1298" target="_blank" class="a1" title="克卢日">
					<li>克卢日</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/70" target="_blank" class="a1" title="凯尔特人">
					<li>凯尔特人</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/568" target="_blank" class="a1" title="奥林匹亚">
					<li>奥林匹亚</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/2435" target="_blank" class="a1" title="巴特">
					<li>巴特</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/253" target="_blank" class="a1" title="阿贾克斯">
					<li>阿贾克斯</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/516" target="_blank" class="a1" title="加拉塔萨">
					<li>加拉塔萨</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/150" target="_blank" class="a1" title="AC米兰">
					<li>AC米兰</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/26" target="_blank" class="a1" title="曼城">
					<li>曼城</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/459" target="_blank" class="a1" title="布拉加">
					<li>布拉加</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/411" target="_blank" class="a1" title="莫斯巴达">
					<li>莫斯巴达</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/395" target="_blank" class="a1" title="泽尼特">
					<li>泽尼特</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/712" target="_blank" class="a1" title="基辅迪纳">
					<li>基辅迪纳</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/351" target="_blank" class="a1" title="蒙彼利埃">
					<li>蒙彼利埃</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/463" target="_blank" class="a1" title="本菲卡">
					<li>本菲卡</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/153" target="_blank" class="a1" title="安德莱赫">
					<li>安德莱赫</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/266" target="_blank" class="a1" title="里尔">
					<li>里尔</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/231" target="_blank" class="a1" title="北西兰">
					<li>北西兰</li>
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
											<td>2012-07-04 00:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/702" target="_blank" title="迪德朗">迪德朗</a></td>
											<td>			
												
												
													7:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/14630" target="_blank" title="泰拜尼">泰拜尼</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												两球/两球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1229759/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1229759/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1229759/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-07-04 01:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/661" target="_blank" title="瓦莱塔">瓦莱塔</a></td>
											<td>			
												
												
													8:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/11677" target="_blank" title="卢西塔">卢西塔</a></td>
											<td>			
												
												
													6:0
												
														
											</td>
											<td align="center">
											
											
												两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1229775/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1229775/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1229775/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-07-04 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1646" target="_blank" title="林菲尔德">林菲尔德</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2531" target="_blank" title="托尔B36">托尔B36</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												球半/两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1229785/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1229785/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1229785/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-07-11 01:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2531" target="_blank" title="托尔B36">托尔B36</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1646" target="_blank" title="林菲尔德">林菲尔德</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1228599/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1228599/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1228599/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-07-11 01:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/11677" target="_blank" title="卢西塔">卢西塔</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/661" target="_blank" title="瓦莱塔">瓦莱塔</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让球半/两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1228615/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1228615/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1228615/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-07-11 02:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/14630" target="_blank" title="泰拜尼">泰拜尼</a></td>
											<td>			
												
												
													0:4
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/702" target="_blank" title="迪德朗">迪德朗</a></td>
											<td>			
												
												
													0:4
												
														
											</td>
											<td align="center">
											
											
												受让两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1228622/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1228622/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1228622/bfyc" class="oyx" target="_blank">析</a>
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
											<td>2012-07-17 23:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5762" target="_blank" title="尤耶塞斯">尤耶塞斯</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2559" target="_blank" title="谢里夫">谢里夫</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1227243/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1227243/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1227243/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-07-17 23:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2522" target="_blank" title="弗罗拉">弗罗拉</a></td>
											<td>			
												
												
													0:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/451" target="_blank" title="巴塞尔">巴塞尔</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让球半/两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1227253/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1227253/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1227253/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-07-17 23:59</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/383" target="_blank" title="赫尔辛基">赫尔辛基</a></td>
											<td>			
												
												
													7:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1642" target="_blank" title="雷克雅">雷克雅</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1227259/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1227259/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1227259/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-07-17 23:59</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2618" target="_blank" title="内弗特奇">内弗特奇</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/5785" target="_blank" title="泽斯塔弗">泽斯塔弗</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1227260/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1227260/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1227260/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-07-18 00:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/702" target="_blank" title="迪德朗">迪德朗</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/9" target="_blank" title="萨尔茨堡">萨尔茨堡</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1227270/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1227270/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1227270/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-07-18 01:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/671" target="_blank" title="利贝雷茨">利贝雷茨</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/5726" target="_blank" title="萨克特卡">萨克特卡</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1227276/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1227276/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1227276/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-07-18 01:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1031" target="_blank" title="斯利纳">斯利纳</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1952" target="_blank" title="谢莫普尔">谢莫普尔</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1227296/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1227296/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1227296/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-07-18 02:15</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1261" target="_blank" title="新圣徒">新圣徒</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/404" target="_blank" title="赫尔辛堡">赫尔辛堡</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1227306/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1227306/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1227306/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-07-18 02:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3573" target="_blank" title="科尔察">科尔察</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/695" target="_blank" title="德布勒森">德布勒森</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1227309/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1227309/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1227309/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-07-18 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/661" target="_blank" title="瓦莱塔">瓦莱塔</a></td>
											<td>			
												
												
													1:4
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/722" target="_blank" title="贝尔游击">贝尔游击</a></td>
											<td>			
												
												
													0:3
												
														
											</td>
											<td align="center">
											
											
												受让球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1227319/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1227319/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1227319/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-07-18 03:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/177" target="_blank" title="沙姆洛克">沙姆洛克</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/693" target="_blank" title="伊兰纳斯">伊兰纳斯</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1227338/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1227338/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1227338/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-07-18 23:59</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2435" target="_blank" title="巴特">巴特</a></td>
											<td>			
												
												
													3:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/940" target="_blank" title="瓦尔达">瓦尔达</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												球半/两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1227097/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1227097/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1227097/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-07-19 01:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1579" target="_blank" title="利马索尔">利马索尔</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1646" target="_blank" title="林菲尔德">林菲尔德</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1227135/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1227135/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1227135/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-07-19 02:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/725" target="_blank" title="马里博尔">马里博尔</a></td>
											<td>			
												
												
													4:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/4107" target="_blank" title="铁路工人">铁路工人</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1227163/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1227163/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1227163/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-07-19 02:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/15175" target="_blank" title="卢多戈雷">卢多戈雷</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/653" target="_blank" title="萨迪纳摩">萨迪纳摩</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1227164/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1227164/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1227164/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-07-19 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1926" target="_blank" title="布塔纳斯">布塔纳斯</a></td>
											<td>			
												
												
													0:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2894" target="_blank" title="斯拉斯克">斯拉斯克</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1227181/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1227181/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1227181/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-07-19 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/505" target="_blank" title="莫尔德">莫尔德</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/603" target="_blank" title="文茨皮斯">文茨皮斯</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1227182/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1227182/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1227182/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-07-24 21:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5726" target="_blank" title="萨克特卡">萨克特卡</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/671" target="_blank" title="利贝雷茨">利贝雷茨</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1225761/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1225761/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1225761/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-07-24 23:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/603" target="_blank" title="文茨皮斯">文茨皮斯</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/505" target="_blank" title="莫尔德">莫尔德</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												受让半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1225784/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1225784/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1225784/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-07-24 23:59</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/9" target="_blank" title="萨尔茨堡">萨尔茨堡</a></td>
											<td>			
												
												
													4:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/702" target="_blank" title="迪德朗">迪德朗</a></td>
											<td>			
												
												
													2:1
												
														
											</td>
											<td align="center">
											
											
												两球/两球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1225791/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1225791/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1225791/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-07-25 00:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1952" target="_blank" title="谢莫普尔">谢莫普尔</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1031" target="_blank" title="斯利纳">斯利纳</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1225801/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1225801/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1225801/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-07-25 01:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/693" target="_blank" title="伊兰纳斯">伊兰纳斯</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/177" target="_blank" title="沙姆洛克">沙姆洛克</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1225807/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1225807/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1225807/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-07-25 01:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5785" target="_blank" title="泽斯塔弗">泽斯塔弗</a></td>
											<td>			
												
												
													2:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2618" target="_blank" title="内弗特奇">内弗特奇</a></td>
											<td>			
												
												
													2:1
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1225808/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1225808/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1225808/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-07-25 01:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2559" target="_blank" title="谢里夫">谢里夫</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/5762" target="_blank" title="尤耶塞斯">尤耶塞斯</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												球半/两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1225809/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1225809/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1225809/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-07-25 02:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/451" target="_blank" title="巴塞尔">巴塞尔</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2522" target="_blank" title="弗罗拉">弗罗拉</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												两球/两球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1225835/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1225835/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1225835/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-07-25 02:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/695" target="_blank" title="德布勒森">德布勒森</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/3573" target="_blank" title="科尔察">科尔察</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												球半/两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1225845/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1225845/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1225845/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-07-25 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/722" target="_blank" title="贝尔游击">贝尔游击</a></td>
											<td>			
												
												
													3:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/661" target="_blank" title="瓦莱塔">瓦莱塔</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												两球/两球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1225851/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1225851/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1225851/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-07-25 03:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/4107" target="_blank" title="铁路工人">铁路工人</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/725" target="_blank" title="马里博尔">马里博尔</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1225875/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1225875/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1225875/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-07-25 03:15</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1642" target="_blank" title="雷克雅">雷克雅</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/383" target="_blank" title="赫尔辛基">赫尔辛基</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1225879/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1225879/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1225879/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-07-26 01:15</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/404" target="_blank" title="赫尔辛堡">赫尔辛堡</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1261" target="_blank" title="新圣徒">新圣徒</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												球半/两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1225643/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1225643/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1225643/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-07-26 02:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/940" target="_blank" title="瓦尔达">瓦尔达</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2435" target="_blank" title="巴特">巴特</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1225659/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1225659/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1225659/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-07-26 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1646" target="_blank" title="林菲尔德">林菲尔德</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1579" target="_blank" title="利马索尔">利马索尔</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1225687/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1225687/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1225687/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-07-26 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/653" target="_blank" title="萨迪纳摩">萨迪纳摩</a></td>
											<td>			
												
												
													3:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/15175" target="_blank" title="卢多戈雷">卢多戈雷</a></td>
											<td>			
												
												
													1:2
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1225688/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1225688/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1225688/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-07-26 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2894" target="_blank" title="斯拉斯克">斯拉斯克</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1926" target="_blank" title="布塔纳斯">布塔纳斯</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1225689/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1225689/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1225689/bfyc" class="oyx" target="_blank">析</a>
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
											<td>2012-08-01 01:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/712" target="_blank" title="基辅迪纳">基辅迪纳</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/252" target="_blank" title="费耶诺德">费耶诺德</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1223991/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1223991/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1223991/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-08-01 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/75" target="_blank" title="马瑟韦尔">马瑟韦尔</a></td>
											<td>			
												
												
													0:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/566" target="_blank" title="帕纳辛纳">帕纳辛纳</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1224030/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1224030/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1224030/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-08-01 23:59</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2435" target="_blank" title="巴特">巴特</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/695" target="_blank" title="德布勒森">德布勒森</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1223775/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1223775/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1223775/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-08-02 00:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1952" target="_blank" title="谢莫普尔">谢莫普尔</a></td>
											<td>			
												
												
													4:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2618" target="_blank" title="内弗特奇">内弗特奇</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1223788/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1223788/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1223788/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-08-02 01:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2559" target="_blank" title="谢里夫">谢里夫</a></td>
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
												<a href="http://fenxi.zgzcw.com/1223793/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1223793/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1223793/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-08-02 01:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/505" target="_blank" title="莫尔德">莫尔德</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/451" target="_blank" title="巴塞尔">巴塞尔</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1223794/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1223794/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1223794/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-08-02 01:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1579" target="_blank" title="利马索尔">利马索尔</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/722" target="_blank" title="贝尔游击">贝尔游击</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1223845/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1223845/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1223845/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-08-02 02:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/725" target="_blank" title="马里博尔">马里博尔</a></td>
											<td>			
												
												
													4:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/702" target="_blank" title="迪德朗">迪德朗</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1223846/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1223846/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1223846/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-08-02 02:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/153" target="_blank" title="安德莱赫">安德莱赫</a></td>
											<td>			
												
												
													5:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/693" target="_blank" title="伊兰纳斯">伊兰纳斯</a></td>
											<td>			
												
												
													3:0
												
														
											</td>
											<td align="center">
											
											
												两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1223847/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1223847/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1223847/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-08-02 02:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/227" target="_blank" title="哥本哈根">哥本哈根</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/148" target="_blank" title="布鲁日">布鲁日</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1223848/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1223848/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1223848/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-08-02 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2894" target="_blank" title="斯拉斯克">斯拉斯克</a></td>
											<td>			
												
												
													0:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/404" target="_blank" title="赫尔辛堡">赫尔辛堡</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1223866/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1223866/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1223866/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-08-02 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/537" target="_blank" title="费内巴切">费内巴切</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2603" target="_blank" title="瓦斯卢伊">瓦斯卢伊</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1223867/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1223867/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1223867/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-08-02 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1298" target="_blank" title="克卢日">克卢日</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/671" target="_blank" title="利贝雷茨">利贝雷茨</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1223868/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1223868/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1223868/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-08-02 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/70" target="_blank" title="凯尔特人">凯尔特人</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/383" target="_blank" title="赫尔辛基">赫尔辛基</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1223869/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1223869/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1223869/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-08-08 02:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/252" target="_blank" title="费耶诺德">费耶诺德</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/712" target="_blank" title="基辅迪纳">基辅迪纳</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1222093/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1222093/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1222093/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-08-08 02:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/695" target="_blank" title="德布勒森">德布勒森</a></td>
											<td>			
												
												
													0:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2435" target="_blank" title="巴特">巴特</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1222116/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1222116/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1222116/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-08-08 23:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/702" target="_blank" title="迪德朗">迪德朗</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/725" target="_blank" title="马里博尔">马里博尔</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1221820/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1221820/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1221820/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-08-08 23:59</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/404" target="_blank" title="赫尔辛堡">赫尔辛堡</a></td>
											<td>			
												
												
													3:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2894" target="_blank" title="斯拉斯克">斯拉斯克</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1221835/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1221835/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1221835/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-08-08 23:59</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2618" target="_blank" title="内弗特奇">内弗特奇</a></td>
											<td>			
												
												
													2:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1952" target="_blank" title="谢莫普尔">谢莫普尔</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1221836/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1221836/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1221836/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-08-09 01:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/671" target="_blank" title="利贝雷茨">利贝雷茨</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1298" target="_blank" title="克卢日">克卢日</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1221856/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1221856/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1221856/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-08-09 01:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/693" target="_blank" title="伊兰纳斯">伊兰纳斯</a></td>
											<td>			
												
												
													0:6
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/153" target="_blank" title="安德莱赫">安德莱赫</a></td>
											<td>			
												
												
													0:3
												
														
											</td>
											<td align="center">
											
											
												受让球半/两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1221857/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1221857/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1221857/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-08-09 01:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/383" target="_blank" title="赫尔辛基">赫尔辛基</a></td>
											<td>			
												
												
													0:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/70" target="_blank" title="凯尔特人">凯尔特人</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1221858/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1221858/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1221858/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-08-09 02:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2603" target="_blank" title="瓦斯卢伊">瓦斯卢伊</a></td>
											<td>			
												
												
													1:4
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/537" target="_blank" title="费内巴切">费内巴切</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1221890/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1221890/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1221890/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-08-09 02:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/451" target="_blank" title="巴塞尔">巴塞尔</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/505" target="_blank" title="莫尔德">莫尔德</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1221891/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1221891/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1221891/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-08-09 02:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/148" target="_blank" title="布鲁日">布鲁日</a></td>
											<td>			
												
												
													2:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/227" target="_blank" title="哥本哈根">哥本哈根</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1221914/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1221914/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1221914/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-08-09 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/653" target="_blank" title="萨迪纳摩">萨迪纳摩</a></td>
											<td>			
												
												
													4:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2559" target="_blank" title="谢里夫">谢里夫</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1221924/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1221924/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1221924/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-08-09 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/722" target="_blank" title="贝尔游击">贝尔游击</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1579" target="_blank" title="利马索尔">利马索尔</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1221925/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1221925/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1221925/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-08-09 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/566" target="_blank" title="帕纳辛纳">帕纳辛纳</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/75" target="_blank" title="马瑟韦尔">马瑟韦尔</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1221926/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1221926/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1221926/bfyc" class="oyx" target="_blank">析</a>
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
											<td>2012-08-21 23:59</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/411" target="_blank" title="莫斯巴达">莫斯巴达</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/537" target="_blank" title="费内巴切">费内巴切</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1217484/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1217484/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1217484/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-08-22 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/128" target="_blank" title="门兴">门兴</a></td>
											<td>			
												
												
													1:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/712" target="_blank" title="基辅迪纳">基辅迪纳</a></td>
											<td>			
												
												
													1:2
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1217533/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1217533/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1217533/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-08-22 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/227" target="_blank" title="哥本哈根">哥本哈根</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/266" target="_blank" title="里尔">里尔</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1217534/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1217534/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1217534/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-08-22 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/451" target="_blank" title="巴塞尔">巴塞尔</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1298" target="_blank" title="克卢日">克卢日</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1217535/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1217535/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1217535/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-08-22 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/404" target="_blank" title="赫尔辛堡">赫尔辛堡</a></td>
											<td>			
												
												
													0:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/70" target="_blank" title="凯尔特人">凯尔特人</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1217536/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1217536/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1217536/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-08-23 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/459" target="_blank" title="布拉加">布拉加</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/187" target="_blank" title="乌迪内斯">乌迪内斯</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1217395/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1217395/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1217395/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-08-23 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/102" target="_blank" title="马拉加">马拉加</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/566" target="_blank" title="帕纳辛纳">帕纳辛纳</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1217396/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1217396/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1217396/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-08-23 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2435" target="_blank" title="巴特">巴特</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1952" target="_blank" title="谢莫普尔">谢莫普尔</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1217397/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1217397/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1217397/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-08-23 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1579" target="_blank" title="利马索尔">利马索尔</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/153" target="_blank" title="安德莱赫">安德莱赫</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1217398/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1217398/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1217398/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-08-23 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/653" target="_blank" title="萨迪纳摩">萨迪纳摩</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/725" target="_blank" title="马里博尔">马里博尔</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1217399/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1217399/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1217399/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-08-29 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1952" target="_blank" title="谢莫普尔">谢莫普尔</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2435" target="_blank" title="巴特">巴特</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1214905/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1214905/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1214905/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-08-29 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/153" target="_blank" title="安德莱赫">安德莱赫</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1579" target="_blank" title="利马索尔">利马索尔</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1214906/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1214906/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1214906/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-08-29 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/725" target="_blank" title="马里博尔">马里博尔</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/653" target="_blank" title="萨迪纳摩">萨迪纳摩</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1214907/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1214907/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1214907/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-08-29 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/187" target="_blank" title="乌迪内斯">乌迪内斯</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/459" target="_blank" title="布拉加">布拉加</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1214908/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1214908/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1214908/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-08-29 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/566" target="_blank" title="帕纳辛纳">帕纳辛纳</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/102" target="_blank" title="马拉加">马拉加</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1214909/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1214909/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1214909/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-08-30 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1298" target="_blank" title="克卢日">克卢日</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/451" target="_blank" title="巴塞尔">巴塞尔</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1214701/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1214701/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1214701/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-08-30 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/70" target="_blank" title="凯尔特人">凯尔特人</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/404" target="_blank" title="赫尔辛堡">赫尔辛堡</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1214702/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1214702/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1214702/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-08-30 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/537" target="_blank" title="费内巴切">费内巴切</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/411" target="_blank" title="莫斯巴达">莫斯巴达</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1214703/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1214703/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1214703/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-08-30 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/712" target="_blank" title="基辅迪纳">基辅迪纳</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/128" target="_blank" title="门兴">门兴</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1214704/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1214704/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1214704/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-08-30 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/266" target="_blank" title="里尔">里尔</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/227" target="_blank" title="哥本哈根">哥本哈根</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1214705/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1214705/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1214705/bfyc" class="oyx" target="_blank">析</a>
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
											<td>2012-09-19 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/653" target="_blank" title="萨迪纳摩">萨迪纳摩</a></td>
											<td>			
												
												
													0:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/468" target="_blank" title="波尔图">波尔图</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1207650/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1207650/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1207650/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-09-19 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/271" target="_blank" title="巴黎圣曼">巴黎圣曼</a></td>
											<td>			
												
												
													4:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/712" target="_blank" title="基辅迪纳">基辅迪纳</a></td>
											<td>			
												
												
													3:0
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1207651/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1207651/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1207651/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-10-04 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/712" target="_blank" title="基辅迪纳">基辅迪纳</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/653" target="_blank" title="萨迪纳摩">萨迪纳摩</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1201793/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1201793/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1201793/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-10-04 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/468" target="_blank" title="波尔图">波尔图</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/271" target="_blank" title="巴黎圣曼">巴黎圣曼</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1201794/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1201794/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1201794/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-10-25 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/468" target="_blank" title="波尔图">波尔图</a></td>
											<td>			
												
												
													3:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/712" target="_blank" title="基辅迪纳">基辅迪纳</a></td>
											<td>			
												
												
													2:1
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1194977/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1194977/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1194977/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-10-25 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/653" target="_blank" title="萨迪纳摩">萨迪纳摩</a></td>
											<td>			
												
												
													0:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/271" target="_blank" title="巴黎圣曼">巴黎圣曼</a></td>
											<td>			
												
												
													0:2
												
														
											</td>
											<td align="center">
											
											
												受让一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1194978/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1194978/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1194978/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-11-07 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/712" target="_blank" title="基辅迪纳">基辅迪纳</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/468" target="_blank" title="波尔图">波尔图</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1190356/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1190356/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1190356/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-11-07 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/271" target="_blank" title="巴黎圣曼">巴黎圣曼</a></td>
											<td>			
												
												
													4:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/653" target="_blank" title="萨迪纳摩">萨迪纳摩</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1190357/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1190357/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1190357/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-11-22 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/468" target="_blank" title="波尔图">波尔图</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/653" target="_blank" title="萨迪纳摩">萨迪纳摩</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												两球/两球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1185937/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1185937/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1185937/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-11-22 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/712" target="_blank" title="基辅迪纳">基辅迪纳</a></td>
											<td>			
												
												
													0:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/271" target="_blank" title="巴黎圣曼">巴黎圣曼</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1185938/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1185938/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1185938/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-12-05 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/653" target="_blank" title="萨迪纳摩">萨迪纳摩</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/712" target="_blank" title="基辅迪纳">基辅迪纳</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1182398/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1182398/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1182398/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-12-05 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/271" target="_blank" title="巴黎圣曼">巴黎圣曼</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/468" target="_blank" title="波尔图">波尔图</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1182399/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1182399/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1182399/bfyc" class="oyx" target="_blank">析</a>
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
											<td>2012-09-19 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/351" target="_blank" title="蒙彼利埃">蒙彼利埃</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/19" target="_blank" title="阿森纳">阿森纳</a></td>
											<td>			
												
												
													1:2
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1207652/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1207652/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1207652/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-09-19 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/568" target="_blank" title="奥林匹亚">奥林匹亚</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/151" target="_blank" title="沙尔克04">沙尔克04</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1207653/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1207653/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1207653/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-10-04 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/151" target="_blank" title="沙尔克04">沙尔克04</a></td>
											<td>			
												
												
													2:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/351" target="_blank" title="蒙彼利埃">蒙彼利埃</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1201795/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1201795/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1201795/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-10-04 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/19" target="_blank" title="阿森纳">阿森纳</a></td>
											<td>			
												
												
													3:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/568" target="_blank" title="奥林匹亚">奥林匹亚</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1201796/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1201796/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1201796/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-10-25 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/19" target="_blank" title="阿森纳">阿森纳</a></td>
											<td>			
												
												
													0:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/151" target="_blank" title="沙尔克04">沙尔克04</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1194979/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1194979/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1194979/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-10-25 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/351" target="_blank" title="蒙彼利埃">蒙彼利埃</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/568" target="_blank" title="奥林匹亚">奥林匹亚</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1194980/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1194980/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1194980/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-11-07 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/151" target="_blank" title="沙尔克04">沙尔克04</a></td>
											<td>			
												
												
													2:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/19" target="_blank" title="阿森纳">阿森纳</a></td>
											<td>			
												
												
													1:2
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1190358/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1190358/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1190358/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-11-07 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/568" target="_blank" title="奥林匹亚">奥林匹亚</a></td>
											<td>			
												
												
													3:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/351" target="_blank" title="蒙彼利埃">蒙彼利埃</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1190359/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1190359/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1190359/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-11-22 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/19" target="_blank" title="阿森纳">阿森纳</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/351" target="_blank" title="蒙彼利埃">蒙彼利埃</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1185939/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1185939/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1185939/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-11-22 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/151" target="_blank" title="沙尔克04">沙尔克04</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/568" target="_blank" title="奥林匹亚">奥林匹亚</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1185940/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1185940/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1185940/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-12-05 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/351" target="_blank" title="蒙彼利埃">蒙彼利埃</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/151" target="_blank" title="沙尔克04">沙尔克04</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1182400/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1182400/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1182400/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-12-05 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/568" target="_blank" title="奥林匹亚">奥林匹亚</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/19" target="_blank" title="阿森纳">阿森纳</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1182401/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1182401/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1182401/bfyc" class="oyx" target="_blank">析</a>
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
											<td>2012-09-19 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/102" target="_blank" title="马拉加">马拉加</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/395" target="_blank" title="泽尼特">泽尼特</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1207654/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1207654/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1207654/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-09-19 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/150" target="_blank" title="AC米兰">AC米兰</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/153" target="_blank" title="安德莱赫">安德莱赫</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1207655/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1207655/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1207655/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-10-03 23:59</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/395" target="_blank" title="泽尼特">泽尼特</a></td>
											<td>			
												
												
													2:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/150" target="_blank" title="AC米兰">AC米兰</a></td>
											<td>			
												
												
													1:2
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1201758/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1201758/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1201758/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-10-04 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/153" target="_blank" title="安德莱赫">安德莱赫</a></td>
											<td>			
												
												
													0:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/102" target="_blank" title="马拉加">马拉加</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1201797/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1201797/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1201797/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-10-24 23:59</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/395" target="_blank" title="泽尼特">泽尼特</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/153" target="_blank" title="安德莱赫">安德莱赫</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1194935/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1194935/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1194935/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-10-25 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/102" target="_blank" title="马拉加">马拉加</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/150" target="_blank" title="AC米兰">AC米兰</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1194981/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1194981/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1194981/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-11-07 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/153" target="_blank" title="安德莱赫">安德莱赫</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/395" target="_blank" title="泽尼特">泽尼特</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1190360/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1190360/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1190360/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-11-07 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/150" target="_blank" title="AC米兰">AC米兰</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/102" target="_blank" title="马拉加">马拉加</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1190361/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1190361/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1190361/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-11-22 01:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/395" target="_blank" title="泽尼特">泽尼特</a></td>
											<td>			
												
												
													2:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/102" target="_blank" title="马拉加">马拉加</a></td>
											<td>			
												
												
													0:2
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1185921/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1185921/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1185921/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-11-22 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/153" target="_blank" title="安德莱赫">安德莱赫</a></td>
											<td>			
												
												
													1:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/150" target="_blank" title="AC米兰">AC米兰</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1185941/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1185941/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1185941/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-12-05 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/102" target="_blank" title="马拉加">马拉加</a></td>
											<td>			
												
												
													2:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/153" target="_blank" title="安德莱赫">安德莱赫</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1182402/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1182402/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1182402/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-12-05 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/150" target="_blank" title="AC米兰">AC米兰</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/395" target="_blank" title="泽尼特">泽尼特</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1182403/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1182403/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1182403/bfyc" class="oyx" target="_blank">析</a>
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
											<td>2012-09-19 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/99" target="_blank" title="多特蒙德">多特蒙德</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/253" target="_blank" title="阿贾克斯">阿贾克斯</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1207656/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1207656/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1207656/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-09-19 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/82" target="_blank" title="皇马">皇马</a></td>
											<td>			
												
												
													3:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/26" target="_blank" title="曼城">曼城</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1207657/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1207657/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1207657/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-10-04 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/26" target="_blank" title="曼城">曼城</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/99" target="_blank" title="多特蒙德">多特蒙德</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1201798/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1201798/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1201798/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-10-04 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/253" target="_blank" title="阿贾克斯">阿贾克斯</a></td>
											<td>			
												
												
													1:4
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/82" target="_blank" title="皇马">皇马</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1201799/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1201799/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1201799/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-10-25 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/253" target="_blank" title="阿贾克斯">阿贾克斯</a></td>
											<td>			
												
												
													3:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/26" target="_blank" title="曼城">曼城</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												受让半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1194982/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1194982/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1194982/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-10-25 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/99" target="_blank" title="多特蒙德">多特蒙德</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/82" target="_blank" title="皇马">皇马</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1194983/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1194983/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1194983/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-11-07 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/26" target="_blank" title="曼城">曼城</a></td>
											<td>			
												
												
													2:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/253" target="_blank" title="阿贾克斯">阿贾克斯</a></td>
											<td>			
												
												
													1:2
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1190362/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1190362/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1190362/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-11-07 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/82" target="_blank" title="皇马">皇马</a></td>
											<td>			
												
												
													2:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/99" target="_blank" title="多特蒙德">多特蒙德</a></td>
											<td>			
												
												
													1:2
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1190363/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1190363/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1190363/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-11-22 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/253" target="_blank" title="阿贾克斯">阿贾克斯</a></td>
											<td>			
												
												
													1:4
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/99" target="_blank" title="多特蒙德">多特蒙德</a></td>
											<td>			
												
												
													0:3
												
														
											</td>
											<td align="center">
											
											
												受让半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1185942/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1185942/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1185942/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-11-22 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/26" target="_blank" title="曼城">曼城</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/82" target="_blank" title="皇马">皇马</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1185943/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1185943/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1185943/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-12-05 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/99" target="_blank" title="多特蒙德">多特蒙德</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/26" target="_blank" title="曼城">曼城</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1182404/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1182404/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1182404/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-12-05 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/82" target="_blank" title="皇马">皇马</a></td>
											<td>			
												
												
													4:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/253" target="_blank" title="阿贾克斯">阿贾克斯</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												球半/两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1182405/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1182405/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1182405/bfyc" class="oyx" target="_blank">析</a>
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
											<td>2012-09-20 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/716" target="_blank" title="顿矿工">顿矿工</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/231" target="_blank" title="北西兰">北西兰</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												两球/两球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1207469/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1207469/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1207469/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-09-20 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/24" target="_blank" title="切尔西">切尔西</a></td>
											<td>			
												
												
													2:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/166" target="_blank" title="尤文图斯">尤文图斯</a></td>
											<td>			
												
												
													2:1
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1207470/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1207470/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1207470/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-10-03 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/166" target="_blank" title="尤文图斯">尤文图斯</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/716" target="_blank" title="顿矿工">顿矿工</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1201955/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1201955/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1201955/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-10-03 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/231" target="_blank" title="北西兰">北西兰</a></td>
											<td>			
												
												
													0:4
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/24" target="_blank" title="切尔西">切尔西</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1201956/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1201956/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1201956/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-10-24 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/231" target="_blank" title="北西兰">北西兰</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/166" target="_blank" title="尤文图斯">尤文图斯</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1195133/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1195133/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1195133/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-10-24 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/716" target="_blank" title="顿矿工">顿矿工</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/24" target="_blank" title="切尔西">切尔西</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1195134/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1195134/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1195134/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-11-08 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/166" target="_blank" title="尤文图斯">尤文图斯</a></td>
											<td>			
												
												
													4:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/231" target="_blank" title="北西兰">北西兰</a></td>
											<td>			
												
												
													3:0
												
														
											</td>
											<td align="center">
											
											
												两球/两球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1190190/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1190190/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1190190/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-11-08 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/24" target="_blank" title="切尔西">切尔西</a></td>
											<td>			
												
												
													3:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/716" target="_blank" title="顿矿工">顿矿工</a></td>
											<td>			
												
												
													2:1
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1190191/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1190191/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1190191/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-11-21 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/231" target="_blank" title="北西兰">北西兰</a></td>
											<td>			
												
												
													2:5
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/716" target="_blank" title="顿矿工">顿矿工</a></td>
											<td>			
												
												
													2:2
												
														
											</td>
											<td align="center">
											
											
												受让球半/两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1186072/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1186072/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1186072/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-11-21 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/166" target="_blank" title="尤文图斯">尤文图斯</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/24" target="_blank" title="切尔西">切尔西</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1186073/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1186073/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1186073/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-12-06 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/716" target="_blank" title="顿矿工">顿矿工</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/166" target="_blank" title="尤文图斯">尤文图斯</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1182293/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1182293/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1182293/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-12-06 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/24" target="_blank" title="切尔西">切尔西</a></td>
											<td>			
												
												
													6:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/231" target="_blank" title="北西兰">北西兰</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												两球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1182294/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1182294/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1182294/bfyc" class="oyx" target="_blank">析</a>
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
											<td>2012-09-20 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/266" target="_blank" title="里尔">里尔</a></td>
											<td>			
												
												
													1:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2435" target="_blank" title="巴特">巴特</a></td>
											<td>			
												
												
													0:3
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1207471/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1207471/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1207471/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-09-20 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/88" target="_blank" title="拜仁">拜仁</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/91" target="_blank" title="巴伦西亚">巴伦西亚</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1207472/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1207472/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1207472/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-10-03 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/91" target="_blank" title="巴伦西亚">巴伦西亚</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/266" target="_blank" title="里尔">里尔</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1201957/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1201957/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1201957/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-10-03 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2435" target="_blank" title="巴特">巴特</a></td>
											<td>			
												
												
													3:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/88" target="_blank" title="拜仁">拜仁</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												受让球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1201958/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1201958/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1201958/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-10-24 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2435" target="_blank" title="巴特">巴特</a></td>
											<td>			
												
												
													0:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/91" target="_blank" title="巴伦西亚">巴伦西亚</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1195135/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1195135/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1195135/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-10-24 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/266" target="_blank" title="里尔">里尔</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/88" target="_blank" title="拜仁">拜仁</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1195136/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1195136/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1195136/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-11-08 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/91" target="_blank" title="巴伦西亚">巴伦西亚</a></td>
											<td>			
												
												
													4:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2435" target="_blank" title="巴特">巴特</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												球半/两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1190192/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1190192/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1190192/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-11-08 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/88" target="_blank" title="拜仁">拜仁</a></td>
											<td>			
												
												
													6:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/266" target="_blank" title="里尔">里尔</a></td>
											<td>			
												
												
													5:0
												
														
											</td>
											<td align="center">
											
											
												球半/两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1190193/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1190193/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1190193/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-11-21 01:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2435" target="_blank" title="巴特">巴特</a></td>
											<td>			
												
												
													0:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/266" target="_blank" title="里尔">里尔</a></td>
											<td>			
												
												
													0:2
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1186046/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1186046/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1186046/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-11-21 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/91" target="_blank" title="巴伦西亚">巴伦西亚</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/88" target="_blank" title="拜仁">拜仁</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1186074/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1186074/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1186074/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-12-06 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/266" target="_blank" title="里尔">里尔</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/91" target="_blank" title="巴伦西亚">巴伦西亚</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1182295/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1182295/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1182295/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-12-06 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/88" target="_blank" title="拜仁">拜仁</a></td>
											<td>			
												
												
													4:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2435" target="_blank" title="巴特">巴特</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												两球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1182296/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1182296/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1182296/bfyc" class="oyx" target="_blank">析</a>
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
											<td>2012-09-20 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/84" target="_blank" title="巴萨">巴萨</a></td>
											<td>			
												
												
													3:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/411" target="_blank" title="莫斯巴达">莫斯巴达</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												三球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1207473/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1207473/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1207473/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-09-20 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/70" target="_blank" title="凯尔特人">凯尔特人</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/463" target="_blank" title="本菲卡">本菲卡</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1207474/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1207474/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1207474/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-10-02 23:59</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/411" target="_blank" title="莫斯巴达">莫斯巴达</a></td>
											<td>			
												
												
													2:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/70" target="_blank" title="凯尔特人">凯尔特人</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1201928/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1201928/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1201928/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-10-03 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/463" target="_blank" title="本菲卡">本菲卡</a></td>
											<td>			
												
												
													0:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/84" target="_blank" title="巴萨">巴萨</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1201959/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1201959/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1201959/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-10-23 23:59</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/411" target="_blank" title="莫斯巴达">莫斯巴达</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/463" target="_blank" title="本菲卡">本菲卡</a></td>
											<td>			
												
												
													2:1
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1195101/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1195101/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1195101/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-10-24 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/84" target="_blank" title="巴萨">巴萨</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/70" target="_blank" title="凯尔特人">凯尔特人</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												两球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1195137/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1195137/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1195137/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-11-08 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/463" target="_blank" title="本菲卡">本菲卡</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/411" target="_blank" title="莫斯巴达">莫斯巴达</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1190194/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1190194/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1190194/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-11-08 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/70" target="_blank" title="凯尔特人">凯尔特人</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/84" target="_blank" title="巴萨">巴萨</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												受让球半/两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1190195/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1190195/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1190195/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-11-21 01:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/411" target="_blank" title="莫斯巴达">莫斯巴达</a></td>
											<td>			
												
												
													0:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/84" target="_blank" title="巴萨">巴萨</a></td>
											<td>			
												
												
													0:3
												
														
											</td>
											<td align="center">
											
											
												受让球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1186047/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1186047/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1186047/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-11-21 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/463" target="_blank" title="本菲卡">本菲卡</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/70" target="_blank" title="凯尔特人">凯尔特人</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1186075/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1186075/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1186075/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-12-06 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/84" target="_blank" title="巴萨">巴萨</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/463" target="_blank" title="本菲卡">本菲卡</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1182297/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1182297/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1182297/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-12-06 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/70" target="_blank" title="凯尔特人">凯尔特人</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/411" target="_blank" title="莫斯巴达">莫斯巴达</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1182298/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1182298/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1182298/bfyc" class="oyx" target="_blank">析</a>
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
											<td>2012-09-20 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/27" target="_blank" title="曼联">曼联</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/516" target="_blank" title="加拉塔萨">加拉塔萨</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1207475/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1207475/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1207475/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-09-20 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/459" target="_blank" title="布拉加">布拉加</a></td>
											<td>			
												
												
													0:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1298" target="_blank" title="克卢日">克卢日</a></td>
											<td>			
												
												
													0:2
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1207476/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1207476/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1207476/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-10-03 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1298" target="_blank" title="克卢日">克卢日</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/27" target="_blank" title="曼联">曼联</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												受让半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1201960/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1201960/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1201960/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-10-03 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/516" target="_blank" title="加拉塔萨">加拉塔萨</a></td>
											<td>			
												
												
													0:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/459" target="_blank" title="布拉加">布拉加</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1201961/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1201961/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1201961/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-10-24 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/516" target="_blank" title="加拉塔萨">加拉塔萨</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1298" target="_blank" title="克卢日">克卢日</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1195138/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1195138/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1195138/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-10-24 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/27" target="_blank" title="曼联">曼联</a></td>
											<td>			
												
												
													3:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/459" target="_blank" title="布拉加">布拉加</a></td>
											<td>			
												
												
													1:2
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1195139/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1195139/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1195139/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-11-08 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1298" target="_blank" title="克卢日">克卢日</a></td>
											<td>			
												
												
													1:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/516" target="_blank" title="加拉塔萨">加拉塔萨</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1190196/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1190196/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1190196/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-11-08 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/459" target="_blank" title="布拉加">布拉加</a></td>
											<td>			
												
												
													1:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/27" target="_blank" title="曼联">曼联</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1190197/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1190197/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1190197/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-11-21 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/516" target="_blank" title="加拉塔萨">加拉塔萨</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/27" target="_blank" title="曼联">曼联</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1186076/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1186076/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1186076/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-11-21 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1298" target="_blank" title="克卢日">克卢日</a></td>
											<td>			
												
												
													3:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/459" target="_blank" title="布拉加">布拉加</a></td>
											<td>			
												
												
													3:1
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1186077/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1186077/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1186077/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-12-06 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/27" target="_blank" title="曼联">曼联</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1298" target="_blank" title="克卢日">克卢日</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1182299/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1182299/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1182299/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2012-12-06 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/459" target="_blank" title="布拉加">布拉加</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/516" target="_blank" title="加拉塔萨">加拉塔萨</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1182300/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1182300/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1182300/bfyc" class="oyx" target="_blank">析</a>
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
											<td>2013-02-13 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/70" target="_blank" title="凯尔特人">凯尔特人</a></td>
											<td>			
												
												
													0:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/166" target="_blank" title="尤文图斯">尤文图斯</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1169768/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1169768/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1169768/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-02-13 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/91" target="_blank" title="巴伦西亚">巴伦西亚</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/271" target="_blank" title="巴黎圣曼">巴黎圣曼</a></td>
											<td>			
												
												
													0:2
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1169769/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1169769/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1169769/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-02-14 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/82" target="_blank" title="皇马">皇马</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/27" target="_blank" title="曼联">曼联</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1169583/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1169583/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1169583/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-02-14 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/716" target="_blank" title="顿矿工">顿矿工</a></td>
											<td>			
												
												
													2:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/99" target="_blank" title="多特蒙德">多特蒙德</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1169584/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1169584/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1169584/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-02-20 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/19" target="_blank" title="阿森纳">阿森纳</a></td>
											<td>			
												
												
													1:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/88" target="_blank" title="拜仁">拜仁</a></td>
											<td>			
												
												
													0:2
												
														
											</td>
											<td align="center">
											
											
												受让半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1167811/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1167811/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1167811/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-02-20 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/468" target="_blank" title="波尔图">波尔图</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/102" target="_blank" title="马拉加">马拉加</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1167812/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1167812/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1167812/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-02-21 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/516" target="_blank" title="加拉塔萨">加拉塔萨</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/151" target="_blank" title="沙尔克04">沙尔克04</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1167646/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1167646/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1167646/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-02-21 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/150" target="_blank" title="AC米兰">AC米兰</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/84" target="_blank" title="巴萨">巴萨</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1167647/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1167647/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1167647/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-03-06 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/27" target="_blank" title="曼联">曼联</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/82" target="_blank" title="皇马">皇马</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1163861/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1163861/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1163861/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-03-06 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/99" target="_blank" title="多特蒙德">多特蒙德</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/716" target="_blank" title="顿矿工">顿矿工</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1163862/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1163862/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1163862/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-03-07 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/166" target="_blank" title="尤文图斯">尤文图斯</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/70" target="_blank" title="凯尔特人">凯尔特人</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1163713/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1163713/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1163713/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-03-07 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/271" target="_blank" title="巴黎圣曼">巴黎圣曼</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/91" target="_blank" title="巴伦西亚">巴伦西亚</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1163714/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1163714/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1163714/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-03-13 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/151" target="_blank" title="沙尔克04">沙尔克04</a></td>
											<td>			
												
												
													2:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/516" target="_blank" title="加拉塔萨">加拉塔萨</a></td>
											<td>			
												
												
													1:2
												
														
											</td>
											<td align="center">
											
											
												半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1161562/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1161562/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1161562/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-03-13 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/84" target="_blank" title="巴萨">巴萨</a></td>
											<td>			
												
												
													4:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/150" target="_blank" title="AC米兰">AC米兰</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												球半/两球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1161563/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1161563/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1161563/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-03-14 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/102" target="_blank" title="马拉加">马拉加</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/468" target="_blank" title="波尔图">波尔图</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1161391/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1161391/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1161391/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-03-14 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/88" target="_blank" title="拜仁">拜仁</a></td>
											<td>			
												
												
													0:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/19" target="_blank" title="阿森纳">阿森纳</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1161392/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1161392/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1161392/bfyc" class="oyx" target="_blank">析</a>
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
											<td>2013-04-03 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/271" target="_blank" title="巴黎圣曼">巴黎圣曼</a></td>
											<td>			
												
												
													2:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/84" target="_blank" title="巴萨">巴萨</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1155189/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1155189/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1155189/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-04-03 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/88" target="_blank" title="拜仁">拜仁</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/166" target="_blank" title="尤文图斯">尤文图斯</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1155190/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1155190/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1155190/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-04-04 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/82" target="_blank" title="皇马">皇马</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/516" target="_blank" title="加拉塔萨">加拉塔萨</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												两球/两球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1154999/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1154999/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1154999/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-04-04 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/102" target="_blank" title="马拉加">马拉加</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/99" target="_blank" title="多特蒙德">多特蒙德</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1155000/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1155000/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1155000/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-04-10 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/516" target="_blank" title="加拉塔萨">加拉塔萨</a></td>
											<td>			
												
												
													3:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/82" target="_blank" title="皇马">皇马</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												受让半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1152623/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1152623/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1152623/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-04-10 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/99" target="_blank" title="多特蒙德">多特蒙德</a></td>
											<td>			
												
												
													3:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/102" target="_blank" title="马拉加">马拉加</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1152624/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1152624/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1152624/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-04-11 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/166" target="_blank" title="尤文图斯">尤文图斯</a></td>
											<td>			
												
												
													0:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/88" target="_blank" title="拜仁">拜仁</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1152392/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1152392/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1152392/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-04-11 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/84" target="_blank" title="巴萨">巴萨</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/271" target="_blank" title="巴黎圣曼">巴黎圣曼</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1152393/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1152393/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1152393/bfyc" class="oyx" target="_blank">析</a>
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
											<td>2013-04-24 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/88" target="_blank" title="拜仁">拜仁</a></td>
											<td>			
												
												
													4:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/84" target="_blank" title="巴萨">巴萨</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1146856/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1146856/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1146856/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-04-25 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/99" target="_blank" title="多特蒙德">多特蒙德</a></td>
											<td>			
												
												
													4:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/82" target="_blank" title="皇马">皇马</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												平手
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1146651/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1146651/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1146651/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-05-01 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/82" target="_blank" title="皇马">皇马</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/99" target="_blank" title="多特蒙德">多特蒙德</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												一球/球半
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1144094/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1144094/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1144094/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-05-02 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/84" target="_blank" title="巴萨">巴萨</a></td>
											<td>			
												
												
													0:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/88" target="_blank" title="拜仁">拜仁</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												平手/半球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1143906/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1143906/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1143906/bfyc" class="oyx" target="_blank">析</a>
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
											<td>2013-05-26 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/99" target="_blank" title="多特蒙德">多特蒙德</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/88" target="_blank" title="拜仁">拜仁</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												受让半球/一球
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1135941/ypdb" class="oyx" target="_blank">亚</a>
												<a href="http://fenxi.zgzcw.com/1135941/bjop" class="oyx" target="_blank">欧</a>
												<a href="http://fenxi.zgzcw.com/1135941/bfyc" class="oyx" target="_blank">析</a>
											</td>
																
										</tr>									
								
							</tbody></table>
						</div>						
										
				
				</ul>
			
			
		</div>

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		





</body>