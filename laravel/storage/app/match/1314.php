<body>
<!--  ͷ��ҳ�� -->





<link rel="stylesheet" type="text/css" href="http://public.zgzcw.com/zcwindex/zgzcw2015header.css?v=20160926">
<script src="http://public.zgzcw.com/newhead/images/header_tab.js?v=20160926"></script>
<!--�ֻ��ͷ��� -->
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
    
    <!-- ��¼��Ϣ -->
    <iframe id="toplogin" width="500" scrolling="no" class="flip-up" frameborder="0" allowtransparency="true" src="http://cp.zgzcw.com/ifrm_newtop_logininfonodomain.jsp?c=zgzcw"></iframe>
    
    <!-- �˵��� -->
    
    <ul class="topLoginR">
      <li class="myOrders">
        <dl>
          <dt><a href="http://cp.zgzcw.com/uc/betmanage/betrecord.action" target="_blank">�ҵĶ���</a></dt>
          <dd><a href="http://cp.zgzcw.com/uc/betmanage/betrecord.action" target="_blank">Ͷע��¼</a></dd>
          <dd><a href="http://cp.zgzcw.com/uc/betmanage/custombill.action" target="_blank">���Ƹ���</a></dd>
          <dd><a href="http://cp.zgzcw.com/uc/betmanage/mytracknumb.action" target="_blank">�ҵ�׷��</a></dd>
          <dd><a href="http://cp.zgzcw.com/uc/betmanage/mytracknumb.action?subType=1" target="_blank">�ҵĶ�Ͷ</a></dd>
          <dd><a href="http://cp.zgzcw.com/uc/betmanage/betprosave.action" target="_blank">����ķ���</a></dd>
        </dl>
      </li>
      <li class="phone">
        <p class="phone-t"> <a href="http://www.caipiao365.com/" target="_blank">�ֻ�����</a> </p>
        <div class="phone-con">
<div class="phone-left topsending" style="display:none;">
            <h3> ���Ż�ȡ���ص�ַ </h3>
            <p class="ps"> ����д�ֻ��ţ����ص�ַ�����͵������ֻ��ϡ� </p>
            <label>
              <input class="$1" type="text" oncontextmenu="return false">
            </label>
            <div class="$2 topnotice"> 
              
              <!-- �����͵Ĵ������࣬���Ժ����ԣ� -->  </div>
            <label>
              <button class="$3">��ѷ���</button>
            </label>
            <p class="sentcon"> <strong>�ѷ��ͣ�</strong> <span>�����յ�һ�������ֻ��ͻ������ص�ַ�Ķ��ţ���������еĵ�ַ�������ء�</span> <a class="$4 a-1" href="javascript:;">�ٴη��Ͷ���</a> </p>
          </div>          
          <div class="phone-right">
            <h3> ɨ���ά������ </h3>
            <div class="ewm"><img src="http://public.zgzcw.com/d/images/201512231450839551917_752.png" alt="��Ʊ356" width="118" height="115" title="��Ʊ365ɨ��"></div>
          </div>
        </div>
      </li>
      <li class="service"> <a href="http://www.zgzcw.com/help/" target="_blank">��������</a> </li>
      <li class="bbs"> <a href="http://bbs.zgzcw.com/" target="_blank">�²���̳</a> </li>
      <li class="webNav">
        <p class="webNav-t"> <a href="http://www.zgzcw.com/sitemap.shtml" target="_blank">��վ����</a> </p>
        <div class="webNav-con">
          <dl>
            <dt> <a href="http://cp.zgzcw.com/zgzcw/index.jsp" target="_blank">�����Ʊ</a> <a href="http://news.zgzcw.com/" target="_blank">��Ʊ��Ѷ</a> <a href="http://www.caipiao365.com/" target="_blank">�ֻ�����</a><br>
              <a href="http://saishi.zgzcw.com/" target="_blank">��������</a> <a href="http://live.zgzcw.com/" target="_blank">�ȷ�ֱ��</a> <a href="http://t.diyicai.com/" target="_blank">����΢��</a> </dt>
            <dd>
              <h4> ���� </h4>
              <p> <a href="http://cp.zgzcw.com/gcdt.jsp" target="_blank">���ʴ���</a> <a href="http://cp.zgzcw.com/hemai/" target="_blank">�������</a> <a href="http://cp.zgzcw.com/tc.action?action=selectGroup" target="_blank">�Ų�</a> <a href="http://guoguan.zgzcw.com/servlet/lotterynumberaction?action=index" target="_blank">����</a> </p>
            </dd>
            <dd>
              <h4> Ԥ����� </h4>
              <p> <a href="http://saishi.zgzcw.com/" target="_blank">��������</a> <a href="http://trend.zgzcw.com/" target="_blank">����ͼ��</a> <a href="http://odds.zgzcw.com/" target="_blank">ָ������</a> <a href="http://www.zgzcw.com/html/310xingxiang.html" target="_blank">�������</a> </p>
            </dd>
            <dd>
              <h4> ��Ѷ </h4>
              <p> <a href="http://news.zgzcw.com/" target="_blank">��Ʊ��Ѷ</a> <a href="http://news.zgzcw.com/zhuanti/" target="_blank">����ר��</a> <a href="http://www.zgzcw.com/top/" target="_blank">��Ʊ�ȵ�</a> </p>
            </dd>
            <dd class="spe"> <a href="http://www.zgzcw.com/sitemap.shtml" target="_blank">��������&gt;&gt;</a> </dd>
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
    * ͷ���˵�
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

      //�˻����
      jQuery($).find('.topCash').mouseover(function(e) {

        close();

        n = this;
        n.className = 'topCash-show';
        e.stopPropagation();

      });

      //���ϵ�½
      jQuery($).find('.unionlogin').mouseover(function(e) {

        close();

        n = this;
        n.className = 'unionlogin-show';
        e.stopPropagation();

      });

      //�ҵĶ���
      jQuery($).find('.myOrders').mouseover(function(e) {

        close();

        n = this;
        n.className = 'myOrders-show';
        e.stopPropagation();

      });

      //�ֻ�����
      jQuery($).find('.phone').mouseover(function(e) {

        close();

        n = this;
        n.className = 'phone-show';
        e.stopPropagation();

      });

      //��վ����
      jQuery($).find('.webNav').mouseover(function(e) {

        close();

        n = this;
        n.className = 'webNav-show';
        e.stopPropagation();

      });

      //���¼�
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
<div class="logo-ban"> <h1><a href="http://www.zgzcw.com/" class="zcw-logo" title="�й������"><img src="http://www.zgzcw.com/images/logo.png" alt="�й������"></a></h1>
<div style="float:left; margin-left:315px; width:384px; height:69px; overflow:hidden;">
<a style="height:69px;overflow:hidden;" onclick="_hmt.push(['_trackEvent', 'ͷ�����', 'click', '��ר���Ƽ� �����н�������', 1])" href="http://news.zgzcw.com/zjtj/" target="_blank" rel="nofollow"><img class="ad01" width="384" height="69" src="http://public.zgzcw.com/d/images/20161071475821970022_721.png" alt="��ר���Ƽ� �����н�������" title="��ר���Ƽ� �����н�������">
</a>

</div>
<span class="kf"> <a href="javascript:;" onclick="open_kfchat()"></a>
 <p> <span id="nyr">2017-2-13</span> <br>
    <b id="xt_h">21</b><b id="xt_m">51</b><b id="xt_s">43</b> </p>
  </span> 
</div>



<!-- navigation -->

<div class="zcw-header-wap">
  <div class="zcw-menu">
    <div class="zcw-menu-title"> <a href="http://zhuanti.zgzcw.com/worldcup/" target="_blank" class="sjbcoming"></a> <span>ȫ����Ʊ����</span><div class="toggletri"></div> 
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
            <dt> <a href="http://cp.zgzcw.com/lottery/jchtplayvsForJsp.action?lotteryId=47&amp;type=jcmini" target="_self"><span>����</span></a> </dt>
<dd> 
<a href="http://cp.zgzcw.com/lottery/jchtplayvsForJsp.action?lotteryId=47&amp;type=jcmini" target="_self">ʤƽ��/����</a>��
<a href="http://cp.zgzcw.com/lottery/jcplayvsForJsp.action?lotteryId=23" target="_self">�ȷ�</a>��
<a href="http://cp.zgzcw.com/lottery/jchtplayvsForJsp.action?lotteryId=22_dg&amp;type=jcmini" target="_self">����</a>

<br>
<a href="http://cp.zgzcw.com/lottery/jcplayvsForJsp.action?lotteryId=24" target="_self">�ܽ���</a>��
<a href="http://cp.zgzcw.com/lottery/jcplayvsForJsp.action?lotteryId=25" target="_self">��ȫ��</a>��
<a href="http://cp.zgzcw.com/lottery/jchtplayvsForJsp.action?lotteryId=47" target="_self">��Ϲ���</a>

<a href="http://cp.zgzcw.com/lottery/jchtplayvsForJsp.action?lotteryId=47&amp;type=jcrxy" target="_self">��ѡһ</a>��
<a href="http://cp.zgzcw.com/lottery/jchtplayvsForJsp.action?lotteryId=46&amp;type=jcmini" target="_self">һ����ʤ</a>��
</dd>
          </dl>
          <p class="jingcai"><a href="http://www.zgzcw.com/huodong/jingc_football/football.html" target="_blank"></a></p>
          <p class="dgfanz"><a href="http://cp.zgzcw.com/activity/lq/HappynewYear.jsp " target="_blank"></a></p>
          <p class="jc-new"><a href="javascript:void(0)"></a></p>
          
        </li>
        <li class="side-menu-02">
          <dl class="zcw-nav-dl">
            <dt> <a href="http://cp.zgzcw.com/zgzcw/index.jsp?czid=lottery%2FjcplayvsForJsp.action%3FlotteryId%3D26" target="_self"><span>����</span></a> </dt>
            <dd>
<a href="http://cp.zgzcw.com/lottery/jchtplayvsForJsp.action?lotteryId=48&amp;type=jcmini" target="_self">ʤ��/�÷�</a>��
<a href="http://cp.zgzcw.com/zgzcw/index.jsp?czid=lottery%2FjcplayvsForJsp.action%3FlotteryId%3D28" target="_self">ʤ�ֲ�</a>��
<a href="http://cp.zgzcw.com/lottery/jchtplayvsForJsp.action?lotteryId=27_dg&amp;type=jcmini" target="_self">����</a>

<a href="http://cp.zgzcw.com/zgzcw/index.jsp?czid=lottery%2FjcplayvsForJsp.action%3FlotteryId%3D29" target="_self">��С��</a>��
<a href="http://cp.zgzcw.com/zgzcw/index.jsp?czid=lottery%2FjchtplayvsForJsp.action%3FlotteryId%3D48" target="_self">��Ϲ���</a>  </dd>
          </dl>
          <p class="jclq-jia"><a href="http://www.zgzcw.com/huodong/jingc_baseket/baseket.html" target="_blank"></a></p>
          <!--<p class="dgfanl"><a href="http://cp.zgzcw.com/activity/lq/HappynewYear.jsp " target="_blank"></a></p>-->
          <p class="dgfanlq"><a href="http://cp.zgzcw.com/activity/lq/HappynewYear.jsp " target="_blank"></a></p>

        </li>
        <li class="side-menu-03">
          <dl class="zcw-nav-dl">
            <dt> <a href="http://cp.zgzcw.com/lottery/bdplayvsforJsp.action?lotteryId=200&amp;v=1224" target="_self"><span>����</span></a> </dt>
            <dd>
<a href="http://cp.zgzcw.com/lottery/bdplayvsforJsp.action?lotteryId=200&amp;v=1224" target="_self">ʤƽ��</a>��
<a href="http://cp.zgzcw.com/lottery/bdplayvsforJsp.action?lotteryId=230" target="_self">�ܽ���</a>��
<a href="http://cp.zgzcw.com/lottery/bdplayvsforJsp.action?lotteryId=210" target="_self">���µ�˫</a>
<br>
<a href="http://cp.zgzcw.com/lottery/bdplayvsforJsp.action?lotteryId=250" target="_self">�ȷ�</a>��
<a href="http://cp.zgzcw.com/lottery/bdplayvsforJsp.action?lotteryId=270" target="_self">ʤ��</a>��
<a href="http://cp.zgzcw.com/lottery/bdplayvsforJsp.action?lotteryId=240" target="_self">��ȫ��</a>
</dd>

          </dl>
          <p class="danchang"><a href="http://www.zgzcw.com/wzgg/content_2363.shtml" target="_blank"></a></p>

            
        </li>
        <li class="side-menu-04"> 
          <dl class="zcw-nav-dl">
            <dt> <a href="http://cp.zgzcw.com/zgzcw/lottery/14csfc/index.jsp" target="_self"><span>���</span></a> </dt>
            <dd>
<a href="http://cp.zgzcw.com/zgzcw/lottery/14csfc/index.jsp" target="_self">ʤ����</a>��
<a href="http://cp.zgzcw.com/zgzcw/lottery/rx9/index.jsp" target="_self">��ѡ��</a>��
<a href="http://cp.zgzcw.com/zgzcw/lottery/6cbqc/index.jsp" target="_self">��ȫ��</a>
<br>
<a href="http://cp.zgzcw.com/zgzcw/lottery/4cjqc/index.jsp" target="_self">�����</a>
</dd>
          </dl>

            
        </li>
        <li class="side-menu-05">

          
          <dl class="zcw-nav-dl">
            <dt> <a href="http://cp.zgzcw.com/zgzcw/index.jsp?czid=lottery%2F11x5%2Findex.jsp" target="_self"><span>��Ƶ</span></a> </dt>
            <dd>
<a href="http://cp.zgzcw.com/zgzcw/index.jsp?czid=lottery%2Fnew11x5%2Findex.jsp" target="_self">��11ѡ5</a>��
<a href="http://cp.zgzcw.com/zgzcw/index.jsp?czid=lottery%2Fssc%2Findex.jsp" target="_self">ʱʱ��</a>��
<a href="http://cp.zgzcw.com/lottery/kl8/index.jsp" target="_self">����8</a>
<br>
<a href="http://cp.zgzcw.com/lottery/kl10f/index.jsp" target="_self">����ʮ��</a>��
<a href="http://cp.zgzcw.com/lottery/pk10/index.jsp" target="_self">PKʰ</a>��
<a href="http://cp.zgzcw.com/lottery/hubk3/index.jsp" target="_self">������3</a>
</dd>
          </dl>

            
        </li>
        <li class="side-menu-06"> 
          <dl class="zcw-nav-dl">
            <dt> <a href="http://cp.zgzcw.com/zgzcw/index.jsp?czid=lottery%2Fssq%2Findex.jsp" target="_self"><span>����</span></a> </dt>
            <dd>
<a href="http://cp.zgzcw.com/zgzcw/index.jsp?czid=lottery%2Fssq%2Findex.jsp" target="_self">˫ɫ��</a>��
<a href="http://cp.zgzcw.com/zgzcw/index.jsp?czid=lottery%2F7lec%2Findex.jsp" target="_self">���ֲ�</a>��
<a href="http://cp.zgzcw.com/zgzcw/index.jsp?czid=lottery%2F3d%2Findex.jsp" target="_self">����3D</a>
</dd>
          </dl>
          <p class="shuangseqiu"><a href="http://zhuanti.zgzcw.com/sdsd/ssqjj.shtml" target="_blank"></a></p>

            
        </li>
        <li class="side-menu-07"> 
          <dl class="zcw-nav-dl">
            <dt> <a href="http://cp.zgzcw.com/zgzcw/index.jsp?czid=lottery%2Fdlt%2Findex.jsp" target="_self"><span>���</span></a> </dt>
            <dd>
<a href="http://cp.zgzcw.com/zgzcw/index.jsp?czid=lottery%2Fdlt%2Findex.jsp" target="_self">����͸</a>��
<a href="http://cp.zgzcw.com/zgzcw/index.jsp?czid=lottery%2F7xc%2Findex.jsp" target="_self">���ǲ�</a>��
<a href="http://cp.zgzcw.com/zgzcw/index.jsp?czid=lottery%2Fpl3%2Findex.jsp" target="_self">������</a>
<br>
<a href="http://cp.zgzcw.com/zgzcw/index.jsp?czid=lottery%2Fpl5%2Findex.jsp" target="_self">������</a>
</dd>
          </dl>
          <p class="daletou"><a href="http://www.zgzcw.com/wzgg/content_3145.shtml" target="_self"></a></p>
          <p class="pai3"><a href="http://www.zgzcw.com/wzgg/content_2930.shtml" target="_self"></a></p>
          <p class="pai5"><a href="http://www.zgzcw.com/wzgg/content_2948.shtml" target="_blank"></a></p>

            
        </li>
        <li class="side-menu-all"> 
          <!--<a href="http://cp.zgzcw.com/game/jj/index.jsp" target="_blank" class="jjgame">��ҳ��Ϸ<i>>></i></a>--> 
          <a href="http://cp.zgzcw.com/gcdt.jsp" target="_self">�������</a> </li>
      </ul>
    </div>
    <ul class="main-menu">
      <li class="index" t="sy"> <a href="http://www.zgzcw.com/">��ҳ</a> </li>
      <li t="gcdt" class="zjtj-menu" style="position:relative;">
        <div class="zjtj-new-gif" style="position:absolute; top:3px; left:63px;"><img src="http://public.zgzcw.com/newhead/images/news-gif.gif" width="22" height="9" style="float:left"></div>
        <a href="http://cp.zgzcw.com/zjtj/index.jsp" target="_blank">ר���Ƽ�</a> <!--<strong> <a href="http://cp.zgzcw.com/dzgendan/index.jsp" type="huodong" m="2">���Ƹ���</a> <a href="http://cp.zgzcw.com/hemai" type="huodong" m="2">�������</a> </strong> --></li>
      <li t="cpzx"> <a href="http://news.zgzcw.com" type="zixvn" m="0">��Ʊ��Ѷ</a></li>
      <li t="ggtj" class=""> <a href="http://guoguan.zgzcw.com/guoguanCount/guoguan.jsp" type="guoguan" m="0">����ͳ��</a> <strong> <a href="http://guoguan.zgzcw.com/zhongjiangQuery/zhongjiang.jsp?zongCai=jcz&amp;caizhong=jcz" type="guoguan" m="1">��������</a> <a href="http://guoguan.zgzcw.com/zhongjiangQuery/zhongjiang.jsp?zongCai=jcl&amp;caizhong=jcl" type="guoguan" m="2">��������</a> <a href="http://guoguan.zgzcw.com/zhongjiangQuery/zhongjiang.jsp?zongCai=bd&amp;caizhong=bd" type="guoguan" m="3">��������</a> <a href="http://guoguan.zgzcw.com/guoguanCount/guoguan.jsp?zongCai=zc&amp;caizhong=13" type="guoguan" m="4">��ͳ���</a> </strong> </li>
      <li t="sszx" class="menu-cur"> <a href="http://saishi.zgzcw.com/" type="saishi" m="0">��������</a> <strong> <a href="http://cp.zgzcw.com/footballCalendar/index.jsp" type="saishi" m="1">��������</a> <a href="http://saishi.zgzcw.com/html/310xingxiang.html/" type="saishi" m="2">�������</a> <a href="http://zhiboba.zgzcw.com/" type="saishi" m="3">����ֱ��</a> </strong> </li>
      <li t="plzx"> <a href="http://odds.zgzcw.com" type="peilv" m="0">��������</a> <strong> <a href="http://odds.zgzcw.com/oyzs/">ŷ��ָ��</a> <a href="http://odds.zgzcw.com/bjzs">�ټ�ָ��</a> <a href="http://odds.zgzcw.com/zc/bf_data.jsp">�ط�ָ��</a> </strong> </li>
      <li t="bfzb"> <a href="http://live.zgzcw.com/" type="zhibo" m="0">�ȷ�ֱ��</a> <strong> <a href="http://live.zgzcw.com/jz/" type="zhibo" m="1">��������</a> <a href="http://lanqiu.zgzcw.com/" type="zhibo" m="2">��������</a> <a href="http://live.zgzcw.com/bd/" type="zhibo" m="3">��������</a> <a href="http://live.zgzcw.com/sfc/" type="zhibo" m="4">��ͳ���</a> </strong> </li>
      <li t="cpkj"> <a href="http://guoguan.zgzcw.com/servlet/lotterynumberaction?action=index" type="kaijiang">��Ʊ����</a> <strong> <a href="http://guoguan.zgzcw.com/zhongjiangQuery/newzhongjiang.jsp" type="kaijiang" m="2">�н���ѯ</a> </strong> </li>
      <li class="normal spe-li" t="tubiao"> <a href="http://trend.zgzcw.com/">ͼ��</a> </li>
      <li class="normal spe-li" t="huodong"> <a href="http://www.zgzcw.com/huodong/index.shtml">�</a> </li>
    </ul>
  </div>
</div>

<div class="minibar"><span class="location">��ǰλ�ã�</span><a href="http://www.zgzcw.com/" target="_self">�й������</a> <span class="dotline">&gt;</span> <a href="http://saishi.zgzcw.com:80/soccer/" target="_self">��������</a> <span class="dotline">&gt;</span> <span class="indext">��������</span></div>

<div class="league wapper">
<!--  ���ҳ�� -->

	
	
	
	
	
		



<div class="left">
			<div class="left_head">
				<dl class="head_dl">
					<dt>
						
				  		
				  		
				  		
				  		
				  			
				  			<img src="http://img.zgzcw.com/zgzcw/matchCenter/league/images/20130423213803.jpg" width="100" height="100" border="0">
				  			
				  		
					</dt>
					<dd>
					
						[ŷ��]
				    
					</dd>
				</dl>
				<div class="team_out">
					<div class="team_lian">
	              	<span>����ѡ��</span>
	                <div class="leagueSelBox clearfix" style="display: none;">
					    <div class="xuanze">
					        <div class="ssxz"></div>
					        <!-- <a href=""><span class="guanbi">�ر�</span></a> -->
					    </div>
					    <ul class="left2 chooseHead">
					            <li class="nav01" id="nav01" data-id="��������"><em class="icon1"></em>��������</li>
					            <li class="nav02 crt" id="nav02" data-id="ŷ������"><em class="icon2"></em>ŷ������</li>
					            <li class="nav03" id="nav03" data-id="��������"><em class="icon3"></em>��������</li>
					            <li class="nav04" id="nav04" data-id="��������"><em class="icon4"></em>��������</li>
					            <li class="nav05" id="nav05" data-id="��������"><em class="icon5"></em>��������</li>
					    </ul>
					    <div class="gamesSelect fl" style="width:470px;">
						    <div class="right2 rlea nav01_content" style="display: none;">
							    <dl class="league clearfix">
							    	<dd data-id="���籭">
							    		<a title="���籭" href="/soccer/cup/75">���籭</a>
							    	</dd>
							    	<dd data-id="��ŷԤ">
							    		<a title="��ŷԤ" href="/soccer/cup/650">��ŷԤ</a>
							    	</dd>
							    	<dd data-id="����Ԥ">
							    		<a title="����Ԥ" href="/soccer/cup/652">����Ԥ</a>
							    	</dd>
							    	<dd data-id="����Ԥ">
							    		<a title="����Ԥ" href="/soccer/cup/653">����Ԥ</a>
							    	</dd>
							    	<dd><a href="/soccer/fifaRank" target="_blank">FIFA</a></dd>
									<div class="clear"></div>
							    </dl>
						    </div>
						    <div class="right2 rlea nav02_content">
							    <dl class="league clearfix">
							    	<dd><a href="/soccer/league/36/" target="_blank">Ӣ��</a></dd> 
							        <dd><a href="/soccer/league/37/" target="_blank">Ӣ��</a></dd> 
							        <dd><a href="/soccer/league/39/" target="_blank">Ӣ��</a></dd> 
							        <dd><a href="/soccer/league/34/" target="_blank">���</a></dd> 
							        <dd><a href="/soccer/league/40/" target="_blank">����</a></dd> 
							        <dd><a href="/soccer/league/8/" target="_blank">�¼�</a></dd>  
							        <dd><a href="/soccer/league/9/" target="_blank">����</a></dd> 
							        <dd><a href="/soccer/league/31/" target="_blank">����</a></dd>  
							        <dd><a href="/soccer/league/33/" target="_blank">����</a></dd> 
							        <dd><a href="/soccer/league/11/" target="_blank">����</a></dd>  
							        <dd><a href="/soccer/league/12/" target="_blank">����</a></dd> 
							        <dd><a href="/soccer/league/16/" target="_blank">�ɼ�</a></dd> 
							        <dd><a href="/soccer/league/17/" target="_blank">����</a></dd> 
							        <dd><a href="/soccer/league/26/" target="_blank">��</a></dd> 
							        <dd><a href="/soccer/league/122/" target="_blank">���</a></dd> 
							        <dd><a href="/soccer/league/22/" target="_blank">Ų��</a></dd>  
							        <dd><a href="/soccer/league/23/" target="_blank">�ϳ�</a></dd> 
							        <dd><a href="/soccer/league/157/" target="_blank">�ϼ�</a></dd> 
							        <dd><a href="/soccer/league/30/" target="_blank">����</a></dd> 
							        <dd><a href="/soccer/league/10/" target="_blank">��</a></dd> 
							        <dd><a href="/soccer/league/13/" target="_blank">�ҳ�</a></dd> 
							        <dd><a href="/soccer/league/212/" target="_blank">�Ҽ�</a></dd> 
							        <dd><a href="/soccer/league/29/" target="_blank">�ճ�</a></dd> 
							        <dd><a href="/soccer/league/5/" target="_blank">�ȼ�</a></dd> 
							        <dd><a href="/soccer/league/1/" target="_blank">����</a></dd> 
							        <dd><a href="/soccer/league/135/" target="_blank">����</a></dd> 
							        <dd><a href="/soccer/league/235/" target="_blank">���</a></dd> 
							        <dd><a href="/soccer/league/123/" target="_blank">Ų��</a></dd> 
							        <dd><a href="/soccer/league/118/" target="_blank">�Գ�</a></dd> 
							        <dd><a href="/soccer/league/119/" target="_blank">�ڳ�</a></dd> 
							        <dd><a href="/soccer/league/7/" target="_blank">����</a></dd> 
							        <dd><a href="/soccer/league/32" target="_blank">ϣ��</a></dd>
							        <dd><a href="/soccer/cup/103" target="_blank">ŷ�ڱ�</a></dd>  
							        <dd><a href="/soccer/cup/113" target="_blank">ŷ�ް�</a></dd> 
							        <dd><a href="/soccer/cup/67" target="_blank">ŷ�ޱ�</a></dd>     
									<div class="clear"></div>
							    </dl>
						    </div>
						    <div class="right2 rlea nav03_content" style="display: none;">
							    <dl class="league clearfix">
							        <dd><a href="/soccer/league/2" target="_blank">���ס�</a></dd> 
							        <dd><a href="/soccer/league/423" target="_blank">���ҡ�</a></dd> 
							        <dd><a href="/soccer/league/358" target="_blank">���ҡ�</a></dd> 
							        <dd><a href="/soccer/league/4" target="_blank">������</a></dd> 
							        <dd><a href="/soccer/league/21" target="_blank">��ְ��</a></dd> 
							        <dd><a href="/soccer/league/415" target="_blank">������</a></dd> 
							        <dd><a href="/soccer/league/611" target="_blank">������</a></dd> 
							        <dd><a href="/soccer/league/250" target="_blank">���׼�</a></dd> 
							        <dd><a href="/soccer/league/354" target="_blank">������</a></dd>  
							        <dd><a href="/soccer/league/240" target="_blank">������</a></dd> 
							        <dd><a href="/soccer/league/140" target="_blank">ī����</a></dd> 
							        <dd><a href="/soccer/league/242" target="_blank">��³��</a></dd>  
							        <dd><a href="/soccer/league/593" target="_blank">������</a></dd> 
							        <dd><a href="/soccer/cup/224" target="_blank">���ޱ�</a></dd> 
							        <dd><a href="/soccer/cup/89" target="_blank">���ɱ�</a></dd>  
							        <dd><a href="/soccer/cup/232" target="_blank">����</a></dd> 
							        <dd><a href="/soccer/cup/263" target="_blank">����</a></dd> 
									<div class="clear"></div>
							    </dl>
						    </div>
						    <div class="right2 rlea nav04_content" style="display: none;">
							    <dl class="league clearfix">
							        <dd><a href="/soccer/league/60" target="_blank">�г���</a></dd>  
							        <dd><a href="/soccer/league/61" target="_blank">�мס�</a></dd> 
							        <dd><a href="/soccer/league/25" target="_blank">��ְ��</a></dd> 
							        <dd><a href="/soccer/league/284" target="_blank">���ҡ�</a></dd> 
							        <dd><a href="/soccer/league/15" target="_blank">��ְ��</a></dd> 
							        <dd><a href="/soccer/league/273" target="_blank">�ĳ���</a></dd> 
							        <dd><a href="/soccer/league/279" target="_blank">���ʳ�</a></dd> 
							        <dd><a href="/soccer/league/292" target="_blank">ɳ����</a></dd> 
							        <dd><a href="/soccer/league/332" target="_blank">������</a></dd>  
							        <dd><a href="/soccer/league/1078" target="_blank">Լ����</a></dd> 
							        <dd><a href="/soccer/league/766" target="_blank">Խ����</a></dd> 
							        <dd><a href="/soccer/league/772" target="_blank">���ȳ�</a></dd> 
							        <dd><a href="/soccer/league/1122" target="_blank">ӡ�ᳬ</a></dd> 
							        <dd><a href="/soccer/cup/87" target="_blank">��Э��</a></dd> 
							        <dd><a href="/soccer/cup/162" target="_blank">�ջʱ�</a></dd>  
							        <dd><a href="/soccer/cup/72" target="_blank">������</a></dd> 
									<div class="clear"></div>
							    </dl>
						    </div>
						    <div class="right2 rlea nav05_content" style="display: none;">
							    <dl class="league clearfix">
							    	<dd data-id="������">
							    		<a title="������" href="/soccer/league/193">������</a>
							    	</dd>
							    	<dd data-id="�����Ǽ�">
							    		<a title="�����Ǽ�" href="/soccer/league/324">�����Ǽ�</a>
							    	</dd>
							    	<dd data-id="�Ϸǳ�">
							    		<a title="�Ϸǳ�" href="/soccer/league/308">�Ϸǳ�</a>
							    	</dd>
							    	<dd data-id="���ճ�">
							    		<a title="���ճ�" href="/soccer/league/949">���ճ�</a>
							    	</dd>
									<div class="clear"></div>
							    </dl>
						    </div>
						</div>
					</div>
	              </div>
	              <div class="div-select hoverSelect">
	              <span>����ѡ��</span>
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
				<div>����б�</div>
				<ul>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/15175" target="_blank" class="a1" title="¬�����">
					<li>¬�����</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/14869" target="_blank" class="a1" title="���ñ���">
					<li>���ñ���</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/14630" target="_blank" class="a1" title="̩����">
					<li>̩����</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/11677" target="_blank" class="a1" title="¬����">
					<li>¬����</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/8441" target="_blank" class="a1" title="��ʩ����">
					<li>��ʩ����</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/7050" target="_blank" class="a1" title="ŵ÷����">
					<li>ŵ÷����</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/5915" target="_blank" class="a1" title="EB˹����">
					<li>EB˹����</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/5760" target="_blank" class="a1" title="������">
					<li>������</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/5726" target="_blank" class="a1" title="�����ؿ�">
					<li>�����ؿ�</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/4141" target="_blank" class="a1" title="������">
					<li>������</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/4107" target="_blank" class="a1" title="��·����">
					<li>��·����</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/3573" target="_blank" class="a1" title="�ƶ���">
					<li>�ƶ���</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/2618" target="_blank" class="a1" title="�ڸ�����">
					<li>�ڸ�����</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/2559" target="_blank" class="a1" title="л���">
					<li>л���</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/2515" target="_blank" class="a1" title="�Ȼ���">
					<li>�Ȼ���</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/2435" target="_blank" class="a1" title="����">
					<li>����</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/1645" target="_blank" class="a1" title="�������">
					<li>�������</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/1361" target="_blank" class="a1" title="�����Ʒ�">
					<li>�����Ʒ�</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/1352" target="_blank" class="a1" title="������˹">
					<li>������˹</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/1319" target="_blank" class="a1" title="���׺�ķ">
					<li>���׺�ķ</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/1261" target="_blank" class="a1" title="��ʥͽ">
					<li>��ʥͽ</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/1251" target="_blank" class="a1" title="˹������">
					<li>˹������</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/1111" target="_blank" class="a1" title="�Ῠ˹��">
					<li>�Ῠ˹��</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/1006" target="_blank" class="a1" title="������">
					<li>������</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/940" target="_blank" class="a1" title="�߶���">
					<li>�߶���</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/725" target="_blank" class="a1" title="���ﲩ��">
					<li>���ﲩ��</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/724" target="_blank" class="a1" title="��������">
					<li>��������</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/722" target="_blank" class="a1" title="�����λ�">
					<li>�����λ�</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/714" target="_blank" class="a1" title="������">
					<li>������</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/711" target="_blank" class="a1" title="�����ɷ�">
					<li>�����ɷ�</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/703" target="_blank" class="a1" title="ϣ����">
					<li>ϣ����</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/693" target="_blank" class="a1" title="������˹">
					<li>������˹</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/659" target="_blank" class="a1" title="��ɳ����">
					<li>��ɳ����</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/653" target="_blank" class="a1" title="������Ħ">
					<li>������Ħ</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/610" target="_blank" class="a1" title="�ڱ���˹">
					<li>�ڱ���˹</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/537" target="_blank" class="a1" title="���ڰ���">
					<li>���ڰ���</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/505" target="_blank" class="a1" title="Ī����">
					<li>Ī����</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/436" target="_blank" class="a1" title="����">
					<li>����</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/417" target="_blank" class="a1" title="����˹��">
					<li>����˹��</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/383" target="_blank" class="a1" title="�ն�����">
					<li>�ն�����</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/254" target="_blank" class="a1" title="�������">
					<li>�������</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/231" target="_blank" class="a1" title="������">
					<li>������</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/205" target="_blank" class="a1" title="�ﰺ">
					<li>�ﰺ</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/9" target="_blank" class="a1" title="�����ı�">
					<li>�����ı�</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/82" target="_blank" class="a1" title="����">
					<li>����</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/26" target="_blank" class="a1" title="����">
					<li>����</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/88" target="_blank" class="a1" title="����">
					<li>����</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/84" target="_blank" class="a1" title="����">
					<li>����</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/271" target="_blank" class="a1" title="����ʥ��">
					<li>����ʥ��</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/109" target="_blank" class="a1" title="��">
					<li>��</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/27" target="_blank" class="a1" title="����">
					<li>����</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/24" target="_blank" class="a1" title="�ж���">
					<li>�ж���</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/99" target="_blank" class="a1" title="�����ɵ�">
					<li>�����ɵ�</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/1419" target="_blank" class="a1" title="�ǲ���˹">
					<li>�ǲ���˹</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/568" target="_blank" class="a1" title="����ƥ��">
					<li>����ƥ��</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/165" target="_blank" class="a1" title="���ֿ�ɭ">
					<li>���ֿ�ɭ</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/166" target="_blank" class="a1" title="����ͼ˹">
					<li>����ͼ˹</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/19" target="_blank" class="a1" title="��ɭ��">
					<li>��ɭ��</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/463" target="_blank" class="a1" title="���ƿ�">
					<li>���ƿ�</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/150" target="_blank" class="a1" title="AC����">
					<li>AC����</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/516" target="_blank" class="a1" title="��������">
					<li>��������</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/407" target="_blank" class="a1" title="Ī½��">
					<li>Ī½��</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/716" target="_blank" class="a1" title="�ٿ�">
					<li>�ٿ�</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/151" target="_blank" class="a1" title="ɳ����04">
					<li>ɳ����04</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/2534" target="_blank" class="a1" title="�ȶ�ɭ">
					<li>�ȶ�ɭ</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/451" target="_blank" class="a1" title="������">
					<li>������</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/253" target="_blank" class="a1" title="���ֿ�˹">
					<li>���ֿ�˹</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/395" target="_blank" class="a1" title="������">
					<li>������</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/8" target="_blank" class="a1" title="��άҲ��">
					<li>��άҲ��</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/211" target="_blank" class="a1" title="����">
					<li>����</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/468" target="_blank" class="a1" title="����ͼ">
					<li>����ͼ</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/227" target="_blank" class="a1" title="�籾����">
					<li>�籾����</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/153" target="_blank" class="a1" title="��������">
					<li>��������</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/70" target="_blank" class="a1" title="��������">
					<li>��������</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/626" target="_blank" class="a1" title="����">
					<li>����</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/106" target="_blank" class="a1" title="�ʼ����">
					<li>�ʼ����</li>
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
		//ѡ��л�
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

<!-- �Ҳ�ҳ�� -->
	<div class="league_right">
		<div class="cupBlock01" style="position:relative;">

			<div class="cup" style="width:780px;overflow:hidden;">
			<div class="table_head cup-t" style="position:relative;">
				<!-- <span>����</span> -->
				<!-- <ul id="tabs9"> -->
				<ul id="tabs9" style="height: 40px; width: 2000px; overflow: hidden; position: relative; left: -230px;">
					
					
						
						<li id="main_1" fl="yxMatch11">��һȦ
						</li> 
					
						
						<li id="main_2" fl="yxMatch21">�ڶ�Ȧ
						</li> 
					
						
						<li id="main_3" fl="yxMatch31">����Ȧ
						</li> 
					
						
						<li id="main_4" fl="yxMatch41">������
						</li> 
					
						
						<li id="main_5" fl="yxMatch51">������
						</li> 
					
						
						<li id="main_6" fl="yxMatch61">ʮ��ǿ
						</li> 
					
						
						<li id="main_7" fl="yxMatch71">��׼����
						</li> 
					
						
						<li id="main_8" fl="yxMatch81">׼����
						</li> 
					
						
						<li id="main_9" fl="yxMatch91" class="cur">����
						</li> 
					
				</ul>
			</div>
			<!-- <h1 class="cupBlock01_h1"></h1> -->
			
			
				<ul class="tabs9_main1" id="tabs9_main_1" style="display:none;">

					<div class="rounds rounds_new">
						<div class="rounds_b">
							<ul>
								
								
									<li class="current" id="yxMatch11"><a href="javascript:void(0);">
										
										
											ȫ��
										
										
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
				                        <th width="90">ʱ��</th>
							            <th width="50">����</th>
							            <th width="55">�ȷ�</th>
							            <th width="50">�Ͷ�</th>
							            <th width="45">�볡</th>
							            <th width="65">����</th>
							            
										<th width="55">����</th>
										
									</tr>
								</thead>
								
											<tbody><tr>
											<td>2013-07-02 21:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5760" target="_blank" title="������">������</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/14630" target="_blank" title="̩����">̩����</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												�����/����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1769888/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1769888/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1769888/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-07-03 01:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/11677" target="_blank" title="¬����">¬����</a></td>
											<td>			
												
												
													2:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/5915" target="_blank" title="EB˹����">EB˹����</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												���ð���/һ��
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1769889/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1769889/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1769889/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-07-10 02:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5915" target="_blank" title="EB˹����">EB˹����</a></td>
											<td>			
												
												
													5:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/11677" target="_blank" title="¬����">¬����</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												���
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1769891/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1769891/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1769891/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-07-10 03:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/14630" target="_blank" title="̩����">̩����</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/5760" target="_blank" title="������">������</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												�������/����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1769890/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1769890/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1769890/bfyc" class="oyx" target="_blank">��</a>
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
										
										
											ȫ��
										
										
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
				                        <th width="90">ʱ��</th>
							            <th width="50">����</th>
							            <th width="55">�ȷ�</th>
							            <th width="50">�Ͷ�</th>
							            <th width="45">�볡</th>
							            <th width="65">����</th>
							            
										<th width="55">����</th>
										
									</tr>
								</thead>
								
											<tbody><tr>
											<td>2013-07-16 23:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2534" target="_blank" title="�ȶ�ɭ">�ȶ�ɭ</a></td>
											<td>			
												
												
													4:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/4107" target="_blank" title="��·����">��·����</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1775133/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1775133/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1775133/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-07-16 23:59</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2435" target="_blank" title="����">����</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/5726" target="_blank" title="�����ؿ�">�����ؿ�</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												���
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1775135/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1775135/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1775135/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-07-16 23:59</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/610" target="_blank" title="�ڱ���˹">�ڱ���˹</a></td>
											<td>			
												
												
													6:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/5915" target="_blank" title="EB˹����">EB˹����</a></td>
											<td>			
												
												
													2:1
												
														
											</td>
											<td align="center">
											
											
												����/�����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1785025/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1785025/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1785025/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-07-17 01:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/693" target="_blank" title="������˹">������˹</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/711" target="_blank" title="�����ɷ�">�����ɷ�</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												ƽ��/����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1775125/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1775125/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1775125/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-07-17 01:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2559" target="_blank" title="л���">л���</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1111" target="_blank" title="�Ῠ˹��">�Ῠ˹��</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												���
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1775126/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1775126/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1775126/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-07-17 01:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2515" target="_blank" title="�Ȼ���">�Ȼ���</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/725" target="_blank" title="���ﲩ��">���ﲩ��</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												����һ��
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1775129/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1775129/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1775129/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-07-17 01:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/8441" target="_blank" title="��ʩ����">��ʩ����</a></td>
											<td>			
												
												
													0:5
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/653" target="_blank" title="������Ħ">������Ħ</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												�������/����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1775153/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1775153/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1775153/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-07-17 01:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/626" target="_blank" title="����">����</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/940" target="_blank" title="�߶���">�߶���</a></td>
											<td>			
												
												
													3:0
												
														
											</td>
											<td align="center">
											
											
												����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1775124/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1775124/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1775124/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-07-17 21:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5760" target="_blank" title="������">������</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/722" target="_blank" title="�����λ�">�����λ�</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												����һ��
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1785662/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1785662/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1785662/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-07-17 23:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/383" target="_blank" title="�ն�����">�ն�����</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/7050" target="_blank" title="ŵ÷����">ŵ÷����</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												���/����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1775130/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1775130/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1775130/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-07-17 23:59</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2618" target="_blank" title="�ڸ�����">�ڸ�����</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/3573" target="_blank" title="�ƶ���">�ƶ���</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												���
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1775128/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1775128/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1775128/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-07-18 01:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/417" target="_blank" title="����˹��">����˹��</a></td>
											<td>			
												
												
													7:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/14869" target="_blank" title="���ñ���">���ñ���</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												����/�����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1775123/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1775123/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1775123/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-07-18 01:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1251" target="_blank" title="˹������">˹������</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/505" target="_blank" title="Ī����">Ī����</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												���ð���
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1775134/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1775134/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1775134/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-07-18 02:15</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1352" target="_blank" title="������˹">������˹</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/15175" target="_blank" title="¬�����">¬�����</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												ƽ��/����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1775132/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1775132/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1775132/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-07-18 02:15</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1261" target="_blank" title="��ʥͽ">��ʥͽ</a></td>
											<td>			
												
												
													1:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/659" target="_blank" title="��ɳ����">��ɳ����</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												�������
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1775138/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1775138/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1775138/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-07-18 02:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/4141" target="_blank" title="������">������</a></td>
											<td>			
												
												
													0:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/714" target="_blank" title="������">������</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												����ƽ��/����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1775127/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1775127/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1775127/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-07-18 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1645" target="_blank" title="�������">�������</a></td>
											<td>			
												
												
													0:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/70" target="_blank" title="��������">��������</a></td>
											<td>			
												
												
													0:2
												
														
											</td>
											<td align="center">
											
											
												�������/����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1775137/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1775137/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1775137/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-07-23 21:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5726" target="_blank" title="�����ؿ�">�����ؿ�</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2435" target="_blank" title="����">����</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1775144/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1775144/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1775144/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-07-23 23:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/14869" target="_blank" title="���ñ���">���ñ���</a></td>
											<td>			
												
												
													0:4
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/417" target="_blank" title="����˹��">����˹��</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												����/�����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1775156/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1775156/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1775156/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-07-23 23:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1111" target="_blank" title="�Ῠ˹��">�Ῠ˹��</a></td>
											<td>			
												
												
													0:5
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2559" target="_blank" title="л���">л���</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												ƽ��/����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1775154/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1775154/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1775154/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-07-23 23:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/7050" target="_blank" title="ŵ÷����">ŵ÷����</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/383" target="_blank" title="�ն�����">�ն�����</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												����/һ��
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1787059/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1787059/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1787059/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-07-24 01:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/505" target="_blank" title="Ī����">Ī����</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1251" target="_blank" title="˹������">˹������</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												����һ��
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1775146/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1775146/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1775146/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-07-24 02:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3573" target="_blank" title="�ƶ���">�ƶ���</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2618" target="_blank" title="�ڸ�����">�ڸ�����</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												ƽ��/����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1775148/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1775148/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1775148/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-07-24 02:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5915" target="_blank" title="EB˹����">EB˹����</a></td>
											<td>			
												
												
													1:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/610" target="_blank" title="�ڱ���˹">�ڱ���˹</a></td>
											<td>			
												
												
													1:2
												
														
											</td>
											<td align="center">
											
											
												һ��
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1787066/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1787066/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1787066/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-07-24 02:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/714" target="_blank" title="������">������</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/4141" target="_blank" title="������">������</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												�������
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1775155/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1775155/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1775155/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-07-24 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/653" target="_blank" title="������Ħ">������Ħ</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/8441" target="_blank" title="��ʩ����">��ʩ����</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												��������/�����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1775122/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1775122/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1775122/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-07-24 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/940" target="_blank" title="�߶���">�߶���</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/626" target="_blank" title="����">����</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												һ��
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1775152/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1775152/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1775152/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-07-24 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/70" target="_blank" title="��������">��������</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1645" target="_blank" title="�������">�������</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												��������/�����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1775157/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1775157/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1775157/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-07-24 03:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/4107" target="_blank" title="��·����">��·����</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2534" target="_blank" title="�ȶ�ɭ">�ȶ�ɭ</a></td>
											<td>			
												
												
													1:2
												
														
											</td>
											<td align="center">
											
											
												һ��
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1775147/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1775147/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1775147/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-07-24 03:15</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/711" target="_blank" title="�����ɷ�">�����ɷ�</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/693" target="_blank" title="������˹">������˹</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												���ð���/һ��
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1775150/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1775150/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1775150/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-07-25 01:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/15175" target="_blank" title="¬�����">¬�����</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1352" target="_blank" title="������˹">������˹</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												����ƽ��/����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1775145/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1775145/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1775145/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-07-25 02:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/725" target="_blank" title="���ﲩ��">���ﲩ��</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2515" target="_blank" title="�Ȼ���">�Ȼ���</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												�������/����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1775149/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1775149/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1775149/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-07-25 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/659" target="_blank" title="��ɳ����">��ɳ����</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1261" target="_blank" title="��ʥͽ">��ʥͽ</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												�������/����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1775151/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1775151/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1775151/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-07-25 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/722" target="_blank" title="�����λ�">�����λ�</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/5760" target="_blank" title="������">������</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												�������
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1787238/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1787238/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1787238/bfyc" class="oyx" target="_blank">��</a>
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
										
										
											ȫ��
										
										
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
				                        <th width="90">ʱ��</th>
							            <th width="50">����</th>
							            <th width="55">�ȷ�</th>
							            <th width="50">�Ͷ�</th>
							            <th width="45">�볡</th>
							            <th width="65">����</th>
							            
										<th width="55">����</th>
										
									</tr>
								</thead>
								
											<tbody><tr>
											<td>2013-07-30 21:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5726" target="_blank" title="�����ؿ�">�����ؿ�</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/3573" target="_blank" title="�ƶ���">�ƶ���</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												һ��
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1792022/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1792022/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1792022/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-07-30 23:59</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/7050" target="_blank" title="ŵ÷����">ŵ÷����</a></td>
											<td>			
												
												
													0:4
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2534" target="_blank" title="�ȶ�ɭ">�ȶ�ɭ</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												���
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1792023/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1792023/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1792023/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-07-30 23:59</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/610" target="_blank" title="�ڱ���˹">�ڱ���˹</a></td>
											<td>			
												
												
													0:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/626" target="_blank" title="����">����</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												ƽ��/����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1792024/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1792024/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1792024/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-07-30 23:59</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/8" target="_blank" title="��άҲ��">��άҲ��</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/711" target="_blank" title="�����ɷ�">�����ɷ�</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												���
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1792025/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1792025/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1792025/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-07-31 01:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/231" target="_blank" title="������">������</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/395" target="_blank" title="������">������</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												һ��
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1787791/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1787791/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1787791/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-07-31 01:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/451" target="_blank" title="������">������</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/714" target="_blank" title="������">������</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												һ��
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1792027/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1792027/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1792027/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-07-31 02:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/724" target="_blank" title="��������">��������</a></td>
											<td>			
												
												
													0:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1361" target="_blank" title="�����Ʒ�">�����Ʒ�</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												����ƽ��/����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1787793/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1787793/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1787793/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-07-31 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/254" target="_blank" title="�������">�������</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1319" target="_blank" title="���׺�ķ">���׺�ķ</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												���
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1787792/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1787792/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1787792/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-07-31 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/653" target="_blank" title="������Ħ">������Ħ</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2559" target="_blank" title="л���">л���</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												���
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1792028/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1792028/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1792028/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-07-31 03:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/205" target="_blank" title="�ﰺ">�ﰺ</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/436" target="_blank" title="����">����</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												һ��
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1787794/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1787794/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1787794/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-08-01 01:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/703" target="_blank" title="ϣ����">ϣ����</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/725" target="_blank" title="���ﲩ��">���ﲩ��</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												����/һ��
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1792031/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1792031/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1792031/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-08-01 01:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/505" target="_blank" title="Ī����">Ī����</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/659" target="_blank" title="��ɳ����">��ɳ����</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												����ƽ��/����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1792032/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1792032/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1792032/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-08-01 01:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/15175" target="_blank" title="¬�����">¬�����</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/722" target="_blank" title="�����λ�">�����λ�</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1792029/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1792029/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1792029/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-08-01 02:30</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/9" target="_blank" title="�����ı�">�����ı�</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/537" target="_blank" title="���ڰ���">���ڰ���</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1787795/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1787795/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1787795/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-08-01 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/70" target="_blank" title="��������">��������</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/417" target="_blank" title="����˹��">����˹��</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												����/һ��
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1792030/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1792030/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1792030/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-08-07 01:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/714" target="_blank" title="������">������</a></td>
											<td>			
												
												
													3:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/451" target="_blank" title="������">������</a></td>
											<td>			
												
												
													2:3
												
														
											</td>
											<td align="center">
											
											
												ƽ��
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1796670/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1796670/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1796670/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-08-07 01:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/626" target="_blank" title="����">����</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/610" target="_blank" title="�ڱ���˹">�ڱ���˹</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												���
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1796672/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1796672/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1796672/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-08-07 02:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/725" target="_blank" title="���ﲩ��">���ﲩ��</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/703" target="_blank" title="ϣ����">ϣ����</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												ƽ��/����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1796673/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1796673/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1796673/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-08-07 02:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3573" target="_blank" title="�ƶ���">�ƶ���</a></td>
											<td>			
												
												
													3:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/5726" target="_blank" title="�����ؿ�">�����ؿ�</a></td>
											<td>			
												
												
													3:1
												
														
											</td>
											<td align="center">
											
											
												���ð���
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1800650/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1800650/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1800650/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-08-07 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/537" target="_blank" title="���ڰ���">���ڰ���</a></td>
											<td>			
												
												
													3:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/9" target="_blank" title="�����ı�">�����ı�</a></td>
											<td>			
												
												
													3:1
												
														
											</td>
											<td align="center">
											
											
												����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1787799/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1787799/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1787799/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-08-07 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/722" target="_blank" title="�����λ�">�����λ�</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/15175" target="_blank" title="¬�����">¬�����</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1796671/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1796671/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1796671/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-08-07 03:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/436" target="_blank" title="����">����</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/205" target="_blank" title="�ﰺ">�ﰺ</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												ƽ��
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1787796/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1787796/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1787796/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-08-07 23:59</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/395" target="_blank" title="������">������</a></td>
											<td>			
												
												
													5:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/231" target="_blank" title="������">������</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												���/����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1787800/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1787800/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1787800/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-08-07 23:59</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/711" target="_blank" title="�����ɷ�">�����ɷ�</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/8" target="_blank" title="��άҲ��">��άҲ��</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												���ð���
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1796675/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1796675/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1796675/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-08-08 01:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1361" target="_blank" title="�����Ʒ�">�����Ʒ�</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/724" target="_blank" title="��������">��������</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												һ��
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1787798/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1787798/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1787798/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-08-08 01:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2559" target="_blank" title="л���">л���</a></td>
											<td>			
												
												
													0:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/653" target="_blank" title="������Ħ">������Ħ</a></td>
											<td>			
												
												
													0:2
												
														
											</td>
											<td align="center">
											
											
												���ð���
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1796680/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1796680/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1796680/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-08-08 01:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/417" target="_blank" title="����˹��">����˹��</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/70" target="_blank" title="��������">��������</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												����ƽ��/����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1796678/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1796678/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1796678/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-08-08 02:15</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2534" target="_blank" title="�ȶ�ɭ">�ȶ�ɭ</a></td>
											<td>			
												
												
													6:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/7050" target="_blank" title="ŵ÷����">ŵ÷����</a></td>
											<td>			
												
												
													2:1
												
														
											</td>
											<td align="center">
											
											
												�����/����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1796679/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1796679/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1796679/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-08-08 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1319" target="_blank" title="���׺�ķ">���׺�ķ</a></td>
											<td>			
												
												
													0:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/254" target="_blank" title="�������">�������</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												����һ��
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1787797/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1787797/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1787797/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-08-08 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/659" target="_blank" title="��ɳ����">��ɳ����</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/505" target="_blank" title="Ī����">Ī����</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												һ��
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1796677/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1796677/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1796677/bfyc" class="oyx" target="_blank">��</a>
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
										
										
											ȫ��
										
										
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
				                        <th width="90">ʱ��</th>
							            <th width="50">����</th>
							            <th width="55">�ȷ�</th>
							            <th width="50">�Ͷ�</th>
							            <th width="45">�볡</th>
							            <th width="65">����</th>
							            
										<th width="55">����</th>
										
									</tr>
								</thead>
								
											<tbody><tr>
											<td>2013-08-20 23:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5726" target="_blank" title="�����ؿ�">�����ؿ�</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/70" target="_blank" title="��������">��������</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												���ð���
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1805345/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1805345/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1805345/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-08-21 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2534" target="_blank" title="�ȶ�ɭ">�ȶ�ɭ</a></td>
											<td>			
												
												
													3:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/725" target="_blank" title="���ﲩ��">���ﲩ��</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												һ��/���
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1805344/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1805344/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1805344/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-08-21 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/205" target="_blank" title="�ﰺ">�ﰺ</a></td>
											<td>			
												
												
													0:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/106" target="_blank" title="�ʼ����">�ʼ����</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												ƽ��/����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1805351/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1805351/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1805351/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-08-21 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1006" target="_blank" title="������">������</a></td>
											<td>			
												
												
													1:4
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/395" target="_blank" title="������">������</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												���ð���/һ��
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1805353/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1805353/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1805353/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-08-21 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/254" target="_blank" title="�������">�������</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/150" target="_blank" title="AC����">AC����</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												ƽ��
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1805354/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1805354/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1805354/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-08-22 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/15175" target="_blank" title="¬�����">¬�����</a></td>
											<td>			
												
												
													2:4
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/451" target="_blank" title="������">������</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												ƽ��
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1805343/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1805343/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1805343/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-08-22 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/626" target="_blank" title="����">����</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/659" target="_blank" title="��ɳ����">��ɳ����</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												����/һ��
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1805346/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1805346/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1805346/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-08-22 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/653" target="_blank" title="������Ħ">������Ħ</a></td>
											<td>			
												
												
													0:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/8" target="_blank" title="��άҲ��">��άҲ��</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												����/һ��
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1805347/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1805347/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1805347/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-08-22 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/537" target="_blank" title="���ڰ���">���ڰ���</a></td>
											<td>			
												
												
													0:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/19" target="_blank" title="��ɭ��">��ɭ��</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												����ƽ��/����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1805349/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1805349/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1805349/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-08-22 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/151" target="_blank" title="ɳ����04">ɳ����04</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/724" target="_blank" title="��������">��������</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												һ��
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1807367/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1807367/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1807367/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-08-28 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/659" target="_blank" title="��ɳ����">��ɳ����</a></td>
											<td>			
												
												
													2:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/626" target="_blank" title="����">����</a></td>
											<td>			
												
												
													1:2
												
														
											</td>
											<td align="center">
											
											
												ƽ��/����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1805428/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1805428/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1805428/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-08-28 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/451" target="_blank" title="������">������</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/15175" target="_blank" title="¬�����">¬�����</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												����/һ��
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1805430/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1805430/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1805430/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-08-28 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/8" target="_blank" title="��άҲ��">��άҲ��</a></td>
											<td>			
												
												
													2:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/653" target="_blank" title="������Ħ">������Ħ</a></td>
											<td>			
												
												
													1:2
												
														
											</td>
											<td align="center">
											
											
												ƽ��
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1805432/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1805432/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1805432/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-08-28 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/19" target="_blank" title="��ɭ��">��ɭ��</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/537" target="_blank" title="���ڰ���">���ڰ���</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												���
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1805437/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1805437/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1805437/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-08-28 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/724" target="_blank" title="��������">��������</a></td>
											<td>			
												
												
													2:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/151" target="_blank" title="ɳ����04">ɳ����04</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												���ð���
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1808445/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1808445/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1808445/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-08-28 23:59</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/395" target="_blank" title="������">������</a></td>
											<td>			
												
												
													4:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1006" target="_blank" title="������">������</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												һ��/���
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1805436/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1805436/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1805436/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-08-29 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/70" target="_blank" title="��������">��������</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/5726" target="_blank" title="�����ؿ�">�����ؿ�</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1805429/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1805429/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1805429/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-08-29 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/725" target="_blank" title="���ﲩ��">���ﲩ��</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2534" target="_blank" title="�ȶ�ɭ">�ȶ�ɭ</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												���ð���
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1805431/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1805431/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1805431/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-08-29 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/150" target="_blank" title="AC����">AC����</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/254" target="_blank" title="�������">�������</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												����/һ��
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1805433/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1805433/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1805433/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-08-29 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/106" target="_blank" title="�ʼ����">�ʼ����</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/205" target="_blank" title="�ﰺ">�ﰺ</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1805434/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1805434/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1805434/bfyc" class="oyx" target="_blank">��</a>
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
										
										
											A��
										
										
										</a>
									</li>
									
								
									<li id="yxMatch52"><a href="javascript:void(0);">
										
										
											B��
										
										
										</a>
									</li>
									
								
									<li id="yxMatch53"><a href="javascript:void(0);">
										
										
											C��
										
										
										</a>
									</li>
									
								
									<li id="yxMatch54"><a href="javascript:void(0);">
										
										
											D��
										
										
										</a>
									</li>
									
								
									<li id="yxMatch55"><a href="javascript:void(0);">
										
										
											E��
										
										
										</a>
									</li>
									
								
									<li id="yxMatch56"><a href="javascript:void(0);">
										
										
											F��
										
										
										</a>
									</li>
									
								
									<li id="yxMatch57"><a href="javascript:void(0);">
										
										
											G��
										
										
										</a>
									</li>
									
								
									<li id="yxMatch58"><a href="javascript:void(0);">
										
										
											H��
										
										
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
				                        <th width="90">ʱ��</th>
							            <th width="50">����</th>
							            <th width="55">�ȷ�</th>
							            <th width="50">�Ͷ�</th>
							            <th width="45">�볡</th>
							            <th width="65">����</th>
							            
										<th width="55">����</th>
										
									</tr>
								</thead>
								
											<tbody><tr>
											<td>2013-09-18 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/27" target="_blank" title="����">����</a></td>
											<td>			
												
												
													4:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/165" target="_blank" title="���ֿ�ɭ">���ֿ�ɭ</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												����/һ��
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1816250/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1816250/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1816250/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-09-18 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/106" target="_blank" title="�ʼ����">�ʼ����</a></td>
											<td>			
												
												
													0:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/716" target="_blank" title="�ٿ�">�ٿ�</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												ƽ��/����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1816251/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1816251/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1816251/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-10-03 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/165" target="_blank" title="���ֿ�ɭ">���ֿ�ɭ</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/106" target="_blank" title="�ʼ����">�ʼ����</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												һ��
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817125/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817125/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817125/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-10-03 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/716" target="_blank" title="�ٿ�">�ٿ�</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/27" target="_blank" title="����">����</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												ƽ��/����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817126/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817126/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817126/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-10-24 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/27" target="_blank" title="����">����</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/106" target="_blank" title="�ʼ����">�ʼ����</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												����/һ��
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817141/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817141/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817141/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-10-24 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/165" target="_blank" title="���ֿ�ɭ">���ֿ�ɭ</a></td>
											<td>			
												
												
													4:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/716" target="_blank" title="�ٿ�">�ٿ�</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												ƽ��/����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817142/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817142/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817142/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-11-06 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/106" target="_blank" title="�ʼ����">�ʼ����</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/27" target="_blank" title="����">����</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												ƽ��
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817148/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817148/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817148/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-11-06 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/716" target="_blank" title="�ٿ�">�ٿ�</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/165" target="_blank" title="���ֿ�ɭ">���ֿ�ɭ</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												ƽ��/����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817149/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817149/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817149/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-11-28 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/165" target="_blank" title="���ֿ�ɭ">���ֿ�ɭ</a></td>
											<td>			
												
												
													0:5
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/27" target="_blank" title="����">����</a></td>
											<td>			
												
												
													0:2
												
														
											</td>
											<td align="center">
											
											
												ƽ��/����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817093/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817093/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817093/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-11-28 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/716" target="_blank" title="�ٿ�">�ٿ�</a></td>
											<td>			
												
												
													4:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/106" target="_blank" title="�ʼ����">�ʼ����</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												һ��
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817094/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817094/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817094/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-12-11 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/27" target="_blank" title="����">����</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/716" target="_blank" title="�ٿ�">�ٿ�</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												ƽ��/����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817180/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817180/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817180/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-12-11 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/106" target="_blank" title="�ʼ����">�ʼ����</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/165" target="_blank" title="���ֿ�ɭ">���ֿ�ɭ</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												����ƽ��/����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817181/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817181/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817181/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
							</tbody></table>
						</div>						
					
						<div class="rounds_con" id="div_yxMatch52" style="display:none">
							<table width="100%" border="0" cellspacing="0" cellpadding="0" class="zstab">
								<thead>
									<tr>
				                        <th width="90">ʱ��</th>
							            <th width="50">����</th>
							            <th width="55">�ȷ�</th>
							            <th width="50">�Ͷ�</th>
							            <th width="45">�볡</th>
							            <th width="65">����</th>
							            
										<th width="55">����</th>
										
									</tr>
								</thead>
								
											<tbody><tr>
											<td>2013-09-18 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/516" target="_blank" title="��������">��������</a></td>
											<td>			
												
												
													1:6
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/82" target="_blank" title="����">����</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												���ð���/һ��
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1816252/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1816252/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1816252/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-09-18 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/227" target="_blank" title="�籾����">�籾����</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/166" target="_blank" title="����ͼ˹">����ͼ˹</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												����һ��
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1816253/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1816253/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1816253/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-10-03 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/166" target="_blank" title="����ͼ˹">����ͼ˹</a></td>
											<td>			
												
												
													2:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/516" target="_blank" title="��������">��������</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												���
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817127/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817127/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817127/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-10-03 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/82" target="_blank" title="����">����</a></td>
											<td>			
												
												
													4:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/227" target="_blank" title="�籾����">�籾����</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817128/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817128/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817128/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-10-24 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/516" target="_blank" title="��������">��������</a></td>
											<td>			
												
												
													3:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/227" target="_blank" title="�籾����">�籾����</a></td>
											<td>			
												
												
													3:0
												
														
											</td>
											<td align="center">
											
											
												һ��
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817143/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817143/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817143/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-10-24 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/82" target="_blank" title="����">����</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/166" target="_blank" title="����ͼ˹">����ͼ˹</a></td>
											<td>			
												
												
													2:1
												
														
											</td>
											<td align="center">
											
											
												����/һ��
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817144/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817144/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817144/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-11-06 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/166" target="_blank" title="����ͼ˹">����ͼ˹</a></td>
											<td>			
												
												
													2:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/82" target="_blank" title="����">����</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												ƽ��/����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817150/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817150/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817150/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-11-06 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/227" target="_blank" title="�籾����">�籾����</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/516" target="_blank" title="��������">��������</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												����ƽ��/����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817151/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817151/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817151/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-11-28 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/166" target="_blank" title="����ͼ˹">����ͼ˹</a></td>
											<td>			
												
												
													3:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/227" target="_blank" title="�籾����">�籾����</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												����/�����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817095/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817095/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817095/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-11-28 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/82" target="_blank" title="����">����</a></td>
											<td>			
												
												
													4:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/516" target="_blank" title="��������">��������</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												���/����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817096/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817096/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817096/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-12-11 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/227" target="_blank" title="�籾����">�籾����</a></td>
											<td>			
												
												
													0:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/82" target="_blank" title="����">����</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												�������
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817182/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817182/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817182/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-12-11 21:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/516" target="_blank" title="��������">��������</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/166" target="_blank" title="����ͼ˹">����ͼ˹</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												����ƽ��/����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817183/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817183/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817183/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
							</tbody></table>
						</div>						
					
						<div class="rounds_con" id="div_yxMatch53" style="display:none">
							<table width="100%" border="0" cellspacing="0" cellpadding="0" class="zstab">
								<thead>
									<tr>
				                        <th width="90">ʱ��</th>
							            <th width="50">����</th>
							            <th width="55">�ȷ�</th>
							            <th width="50">�Ͷ�</th>
							            <th width="45">�볡</th>
							            <th width="65">����</th>
							            
										<th width="55">����</th>
										
									</tr>
								</thead>
								
											<tbody><tr>
											<td>2013-09-18 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/463" target="_blank" title="���ƿ�">���ƿ�</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/153" target="_blank" title="��������">��������</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												һ��/���
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1816280/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1816280/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1816280/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-09-18 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/568" target="_blank" title="����ƥ��">����ƥ��</a></td>
											<td>			
												
												
													1:4
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/271" target="_blank" title="����ʥ��">����ʥ��</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												����ƽ��/����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1816281/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1816281/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1816281/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-10-03 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/153" target="_blank" title="��������">��������</a></td>
											<td>			
												
												
													0:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/568" target="_blank" title="����ƥ��">����ƥ��</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												ƽ��
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817129/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817129/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817129/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-10-03 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/271" target="_blank" title="����ʥ��">����ʥ��</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/463" target="_blank" title="���ƿ�">���ƿ�</a></td>
											<td>			
												
												
													3:0
												
														
											</td>
											<td align="center">
											
											
												����/һ��
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817130/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817130/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817130/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-10-24 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/153" target="_blank" title="��������">��������</a></td>
											<td>			
												
												
													0:5
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/271" target="_blank" title="����ʥ��">����ʥ��</a></td>
											<td>			
												
												
													0:3
												
														
											</td>
											<td align="center">
											
											
												����һ��/���
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817145/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817145/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817145/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-10-24 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/463" target="_blank" title="���ƿ�">���ƿ�</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/568" target="_blank" title="����ƥ��">����ƥ��</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												����/һ��
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817146/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817146/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817146/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-11-06 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/271" target="_blank" title="����ʥ��">����ʥ��</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/153" target="_blank" title="��������">��������</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												����/�����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817152/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817152/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817152/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-11-06 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/568" target="_blank" title="����ƥ��">����ƥ��</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/463" target="_blank" title="���ƿ�">���ƿ�</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												ƽ��/����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817153/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817153/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817153/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-11-28 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/153" target="_blank" title="��������">��������</a></td>
											<td>			
												
												
													2:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/463" target="_blank" title="���ƿ�">���ƿ�</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												���ð���
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817097/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817097/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817097/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-11-28 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/271" target="_blank" title="����ʥ��">����ʥ��</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/568" target="_blank" title="����ƥ��">����ƥ��</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												һ��/���
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817098/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817098/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817098/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-12-11 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/568" target="_blank" title="����ƥ��">����ƥ��</a></td>
											<td>			
												
												
													3:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/153" target="_blank" title="��������">��������</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												һ��/���
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817184/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817184/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817184/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-12-11 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/463" target="_blank" title="���ƿ�">���ƿ�</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/271" target="_blank" title="����ʥ��">����ʥ��</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												ƽ��/����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817185/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817185/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817185/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
							</tbody></table>
						</div>						
					
						<div class="rounds_con" id="div_yxMatch54" style="display:none">
							<table width="100%" border="0" cellspacing="0" cellpadding="0" class="zstab">
								<thead>
									<tr>
				                        <th width="90">ʱ��</th>
							            <th width="50">����</th>
							            <th width="55">�ȷ�</th>
							            <th width="50">�Ͷ�</th>
							            <th width="45">�볡</th>
							            <th width="65">����</th>
							            
										<th width="55">����</th>
										
									</tr>
								</thead>
								
											<tbody><tr>
											<td>2013-09-18 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/88" target="_blank" title="����">����</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/407" target="_blank" title="Ī½��">Ī½��</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												���/����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1816282/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1816282/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1816282/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-09-18 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2534" target="_blank" title="�ȶ�ɭ">�ȶ�ɭ</a></td>
											<td>			
												
												
													0:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/26" target="_blank" title="����">����</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												���ð���
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1816283/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1816283/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1816283/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-10-02 23:59</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/407" target="_blank" title="Ī½��">Ī½��</a></td>
											<td>			
												
												
													3:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2534" target="_blank" title="�ȶ�ɭ">�ȶ�ɭ</a></td>
											<td>			
												
												
													2:1
												
														
											</td>
											<td align="center">
											
											
												����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817124/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817124/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817124/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-10-03 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/26" target="_blank" title="����">����</a></td>
											<td>			
												
												
													1:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/88" target="_blank" title="����">����</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												����ƽ��/����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817131/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817131/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817131/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-10-23 23:59</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/407" target="_blank" title="Ī½��">Ī½��</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/26" target="_blank" title="����">����</a></td>
											<td>			
												
												
													1:2
												
														
											</td>
											<td align="center">
											
											
												���ð���/һ��
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817140/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817140/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817140/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-10-24 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/88" target="_blank" title="����">����</a></td>
											<td>			
												
												
													5:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2534" target="_blank" title="�ȶ�ɭ">�ȶ�ɭ</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												�����/����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817147/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817147/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817147/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-11-06 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2534" target="_blank" title="�ȶ�ɭ">�ȶ�ɭ</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/88" target="_blank" title="����">����</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												��������/�����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817154/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817154/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817154/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-11-06 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/26" target="_blank" title="����">����</a></td>
											<td>			
												
												
													5:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/407" target="_blank" title="Ī½��">Ī½��</a></td>
											<td>			
												
												
													3:1
												
														
											</td>
											<td align="center">
											
											
												����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817155/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817155/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817155/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-11-28 01:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/407" target="_blank" title="Ī½��">Ī½��</a></td>
											<td>			
												
												
													1:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/88" target="_blank" title="����">����</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												����һ��/���
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817092/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817092/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817092/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-11-28 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/26" target="_blank" title="����">����</a></td>
											<td>			
												
												
													4:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/2534" target="_blank" title="�ȶ�ɭ">�ȶ�ɭ</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817099/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817099/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817099/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-12-11 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/88" target="_blank" title="����">����</a></td>
											<td>			
												
												
													2:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/26" target="_blank" title="����">����</a></td>
											<td>			
												
												
													2:1
												
														
											</td>
											<td align="center">
											
											
												���
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817186/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817186/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817186/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-12-11 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2534" target="_blank" title="�ȶ�ɭ">�ȶ�ɭ</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/407" target="_blank" title="Ī½��">Ī½��</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												ƽ��/����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817187/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817187/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817187/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
							</tbody></table>
						</div>						
					
						<div class="rounds_con" id="div_yxMatch55" style="display:none">
							<table width="100%" border="0" cellspacing="0" cellpadding="0" class="zstab">
								<thead>
									<tr>
				                        <th width="90">ʱ��</th>
							            <th width="50">����</th>
							            <th width="55">�ȷ�</th>
							            <th width="50">�Ͷ�</th>
							            <th width="45">�볡</th>
							            <th width="65">����</th>
							            
										<th width="55">����</th>
										
									</tr>
								</thead>
								
											<tbody><tr>
											<td>2013-09-19 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/151" target="_blank" title="ɳ����04">ɳ����04</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/626" target="_blank" title="����">����</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												һ��
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1816284/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1816284/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1816284/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-09-19 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/24" target="_blank" title="�ж���">�ж���</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/451" target="_blank" title="������">������</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												һ��/���
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1816285/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1816285/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1816285/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-10-02 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/451" target="_blank" title="������">������</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/151" target="_blank" title="ɳ����04">ɳ����04</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												ƽ��
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817117/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817117/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817117/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-10-02 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/626" target="_blank" title="����">����</a></td>
											<td>			
												
												
													0:4
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/24" target="_blank" title="�ж���">�ж���</a></td>
											<td>			
												
												
													0:2
												
														
											</td>
											<td align="center">
											
											
												���ð���/һ��
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817118/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817118/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817118/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-10-23 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/151" target="_blank" title="ɳ����04">ɳ����04</a></td>
											<td>			
												
												
													0:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/24" target="_blank" title="�ж���">�ж���</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												����ƽ��/����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817132/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817132/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817132/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-10-23 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/626" target="_blank" title="����">����</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/451" target="_blank" title="������">������</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												ƽ��
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817133/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817133/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817133/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-11-07 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/24" target="_blank" title="�ж���">�ж���</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/151" target="_blank" title="ɳ����04">ɳ����04</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												һ��
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817157/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817157/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817157/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-11-07 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/451" target="_blank" title="������">������</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/626" target="_blank" title="����">����</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												����/һ��
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817158/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817158/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817158/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-11-27 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/626" target="_blank" title="����">����</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/151" target="_blank" title="ɳ����04">ɳ����04</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												���ð���
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817085/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817085/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817085/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-11-27 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/451" target="_blank" title="������">������</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/24" target="_blank" title="�ж���">�ж���</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												���ð���
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817086/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817086/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817086/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-12-12 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/151" target="_blank" title="ɳ����04">ɳ����04</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/451" target="_blank" title="������">������</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												����/һ��
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817188/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817188/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817188/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-12-12 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/24" target="_blank" title="�ж���">�ж���</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/626" target="_blank" title="����">����</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817189/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817189/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817189/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
							</tbody></table>
						</div>						
					
						<div class="rounds_con" id="div_yxMatch56" style="display:none">
							<table width="100%" border="0" cellspacing="0" cellpadding="0" class="zstab">
								<thead>
									<tr>
				                        <th width="90">ʱ��</th>
							            <th width="50">����</th>
							            <th width="55">�ȷ�</th>
							            <th width="50">�Ͷ�</th>
							            <th width="45">�볡</th>
							            <th width="65">����</th>
							            
										<th width="55">����</th>
										
									</tr>
								</thead>
								
											<tbody><tr>
											<td>2013-09-19 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/211" target="_blank" title="����">����</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/19" target="_blank" title="��ɭ��">��ɭ��</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												����ƽ��/����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1816286/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1816286/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1816286/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-09-19 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1419" target="_blank" title="�ǲ���˹">�ǲ���˹</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/99" target="_blank" title="�����ɵ�">�����ɵ�</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												ƽ��
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1816287/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1816287/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1816287/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-10-02 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/19" target="_blank" title="��ɭ��">��ɭ��</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1419" target="_blank" title="�ǲ���˹">�ǲ���˹</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												����/һ��
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817119/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817119/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817119/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-10-02 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/99" target="_blank" title="�����ɵ�">�����ɵ�</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/211" target="_blank" title="����">����</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												���
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817120/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817120/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817120/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-10-23 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/19" target="_blank" title="��ɭ��">��ɭ��</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/99" target="_blank" title="�����ɵ�">�����ɵ�</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												ƽ��
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817134/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817134/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817134/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-10-23 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/211" target="_blank" title="����">����</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1419" target="_blank" title="�ǲ���˹">�ǲ���˹</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												ƽ��
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817135/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817135/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817135/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-11-07 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1419" target="_blank" title="�ǲ���˹">�ǲ���˹</a></td>
											<td>			
												
												
													3:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/211" target="_blank" title="����">����</a></td>
											<td>			
												
												
													2:1
												
														
											</td>
											<td align="center">
											
											
												һ��/���
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817159/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817159/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817159/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-11-07 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/99" target="_blank" title="�����ɵ�">�����ɵ�</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/19" target="_blank" title="��ɭ��">��ɭ��</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												����/һ��
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817160/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817160/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817160/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-11-27 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/19" target="_blank" title="��ɭ��">��ɭ��</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/211" target="_blank" title="����">����</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												���
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817087/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817087/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817087/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-11-27 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/99" target="_blank" title="�����ɵ�">�����ɵ�</a></td>
											<td>			
												
												
													3:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/1419" target="_blank" title="�ǲ���˹">�ǲ���˹</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												һ��/���
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817088/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817088/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817088/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-12-12 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1419" target="_blank" title="�ǲ���˹">�ǲ���˹</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/19" target="_blank" title="��ɭ��">��ɭ��</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												ƽ��
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817190/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817190/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817190/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-12-12 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/211" target="_blank" title="����">����</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/99" target="_blank" title="�����ɵ�">�����ɵ�</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												����һ��/���
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817191/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817191/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817191/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
							</tbody></table>
						</div>						
					
						<div class="rounds_con" id="div_yxMatch57" style="display:none">
							<table width="100%" border="0" cellspacing="0" cellpadding="0" class="zstab">
								<thead>
									<tr>
				                        <th width="90">ʱ��</th>
							            <th width="50">����</th>
							            <th width="55">�ȷ�</th>
							            <th width="50">�Ͷ�</th>
							            <th width="45">�볡</th>
							            <th width="65">����</th>
							            
										<th width="55">����</th>
										
									</tr>
								</thead>
								
											<tbody><tr>
											<td>2013-09-19 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/109" target="_blank" title="��">��</a></td>
											<td>			
												
												
													3:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/395" target="_blank" title="������">������</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												���
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1816254/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1816254/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1816254/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-09-19 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/8" target="_blank" title="��άҲ��">��άҲ��</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/468" target="_blank" title="����ͼ">����ͼ</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												����һ��
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1816288/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1816288/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1816288/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-10-01 23:59</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/395" target="_blank" title="������">������</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/8" target="_blank" title="��άҲ��">��άҲ��</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												���
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817116/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817116/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817116/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-10-02 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/468" target="_blank" title="����ͼ">����ͼ</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/109" target="_blank" title="��">��</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												ƽ��/����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817121/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817121/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817121/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-10-23 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/8" target="_blank" title="��άҲ��">��άҲ��</a></td>
											<td>			
												
												
													0:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/109" target="_blank" title="��">��</a></td>
											<td>			
												
												
													0:2
												
														
											</td>
											<td align="center">
											
											
												����һ��/���
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817136/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817136/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817136/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-10-23 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/468" target="_blank" title="����ͼ">����ͼ</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/395" target="_blank" title="������">������</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												����/һ��
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817137/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817137/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817137/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-11-07 01:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/395" target="_blank" title="������">������</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/468" target="_blank" title="����ͼ">����ͼ</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												ƽ��
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817156/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817156/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817156/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-11-07 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/109" target="_blank" title="��">��</a></td>
											<td>			
												
												
													4:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/8" target="_blank" title="��άҲ��">��άҲ��</a></td>
											<td>			
												
												
													3:0
												
														
											</td>
											<td align="center">
											
											
												����/�����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817161/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817161/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817161/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-11-27 01:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/395" target="_blank" title="������">������</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/109" target="_blank" title="��">��</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												ƽ��/����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817084/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817084/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817084/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-11-27 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/468" target="_blank" title="����ͼ">����ͼ</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/8" target="_blank" title="��άҲ��">��άҲ��</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817089/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817089/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817089/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-12-12 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/8" target="_blank" title="��άҲ��">��άҲ��</a></td>
											<td>			
												
												
													4:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/395" target="_blank" title="������">������</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												���ð���/һ��
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817192/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817192/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817192/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-12-12 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/109" target="_blank" title="��">��</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/468" target="_blank" title="����ͼ">����ͼ</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												ƽ��/����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817193/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817193/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817193/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
							</tbody></table>
						</div>						
					
						<div class="rounds_con" id="div_yxMatch58" style="display:none">
							<table width="100%" border="0" cellspacing="0" cellpadding="0" class="zstab">
								<thead>
									<tr>
				                        <th width="90">ʱ��</th>
							            <th width="50">����</th>
							            <th width="55">�ȷ�</th>
							            <th width="50">�Ͷ�</th>
							            <th width="45">�볡</th>
							            <th width="65">����</th>
							            
										<th width="55">����</th>
										
									</tr>
								</thead>
								
											<tbody><tr>
											<td>2013-09-19 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/150" target="_blank" title="AC����">AC����</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/70" target="_blank" title="��������">��������</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												һ��
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1816255/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1816255/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1816255/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-09-19 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/84" target="_blank" title="����">����</a></td>
											<td>			
												
												
													4:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/253" target="_blank" title="���ֿ�˹">���ֿ�˹</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												�����/����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1816256/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1816256/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1816256/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-10-02 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/253" target="_blank" title="���ֿ�˹">���ֿ�˹</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/150" target="_blank" title="AC����">AC����</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												ƽ��
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817122/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817122/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817122/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-10-02 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/70" target="_blank" title="��������">��������</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/84" target="_blank" title="����">����</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												�������
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817123/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817123/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817123/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-10-23 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/150" target="_blank" title="AC����">AC����</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/84" target="_blank" title="����">����</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												����һ��
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817138/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817138/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817138/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-10-23 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/70" target="_blank" title="��������">��������</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/253" target="_blank" title="���ֿ�˹">���ֿ�˹</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												ƽ��/����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817139/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817139/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817139/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-11-07 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/84" target="_blank" title="����">����</a></td>
											<td>			
												
												
													3:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/150" target="_blank" title="AC����">AC����</a></td>
											<td>			
												
												
													2:1
												
														
											</td>
											<td align="center">
											
											
												����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817083/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817083/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817083/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-11-07 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/253" target="_blank" title="���ֿ�˹">���ֿ�˹</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/70" target="_blank" title="��������">��������</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817162/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817162/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817162/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-11-27 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/70" target="_blank" title="��������">��������</a></td>
											<td>			
												
												
													0:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/150" target="_blank" title="AC����">AC����</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												����ƽ��/����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817090/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817090/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817090/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-11-27 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/253" target="_blank" title="���ֿ�˹">���ֿ�˹</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/84" target="_blank" title="����">����</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												����һ��
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817091/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817091/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817091/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-12-12 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/150" target="_blank" title="AC����">AC����</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/253" target="_blank" title="���ֿ�˹">���ֿ�˹</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												����/һ��
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817194/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817194/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817194/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2013-12-12 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/84" target="_blank" title="����">����</a></td>
											<td>			
												
												
													6:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/70" target="_blank" title="��������">��������</a></td>
											<td>			
												
												
													3:0
												
														
											</td>
											<td align="center">
											
											
												����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1817195/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1817195/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1817195/bfyc" class="oyx" target="_blank">��</a>
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
										
										
											ȫ��
										
										
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
				                        <th width="90">ʱ��</th>
							            <th width="50">����</th>
							            <th width="55">�ȷ�</th>
							            <th width="50">�Ͷ�</th>
							            <th width="45">�볡</th>
							            <th width="65">����</th>
							            
										<th width="55">����</th>
										
									</tr>
								</thead>
								
											<tbody><tr>
											<td>2014-02-19 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/26" target="_blank" title="����">����</a></td>
											<td>			
												
												
													0:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/84" target="_blank" title="����">����</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												����ƽ��/����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1833900/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1833900/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1833900/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2014-02-19 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/165" target="_blank" title="���ֿ�ɭ">���ֿ�ɭ</a></td>
											<td>			
												
												
													0:4
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/271" target="_blank" title="����ʥ��">����ʥ��</a></td>
											<td>			
												
												
													0:3
												
														
											</td>
											<td align="center">
											
											
												����ƽ��/����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1833903/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1833903/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1833903/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2014-02-20 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/150" target="_blank" title="AC����">AC����</a></td>
											<td>			
												
												
													0:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/109" target="_blank" title="��">��</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												���ð���
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1833902/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1833902/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1833902/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2014-02-20 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/19" target="_blank" title="��ɭ��">��ɭ��</a></td>
											<td>			
												
												
													0:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/88" target="_blank" title="����">����</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												���ð���/һ��
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1833907/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1833907/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1833907/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2014-02-26 01:00</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/395" target="_blank" title="������">������</a></td>
											<td>			
												
												
													2:4
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/99" target="_blank" title="�����ɵ�">�����ɵ�</a></td>
											<td>			
												
												
													0:2
												
														
											</td>
											<td align="center">
											
											
												���ð���/һ��
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1833906/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1833906/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1833906/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2014-02-26 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/568" target="_blank" title="����ƥ��">����ƥ��</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/27" target="_blank" title="����">����</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												����ƽ��/����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1833901/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1833901/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1833901/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2014-02-27 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/516" target="_blank" title="��������">��������</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/24" target="_blank" title="�ж���">�ж���</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												����ƽ��/����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1833904/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1833904/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1833904/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2014-02-27 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/151" target="_blank" title="ɳ����04">ɳ����04</a></td>
											<td>			
												
												
													1:6
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/82" target="_blank" title="����">����</a></td>
											<td>			
												
												
													0:2
												
														
											</td>
											<td align="center">
											
											
												����һ��
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1833905/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1833905/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1833905/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2014-03-12 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/109" target="_blank" title="��">��</a></td>
											<td>			
												
												
													4:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/150" target="_blank" title="AC����">AC����</a></td>
											<td>			
												
												
													2:1
												
														
											</td>
											<td align="center">
											
											
												һ��
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1833910/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1833910/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1833910/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2014-03-12 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/88" target="_blank" title="����">����</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/19" target="_blank" title="��ɭ��">��ɭ��</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												���/����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1833915/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1833915/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1833915/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2014-03-13 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/84" target="_blank" title="����">����</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/26" target="_blank" title="����">����</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												һ��
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1833908/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1833908/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1833908/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2014-03-13 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/271" target="_blank" title="����ʥ��">����ʥ��</a></td>
											<td>			
												
												
													2:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/165" target="_blank" title="���ֿ�ɭ">���ֿ�ɭ</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												һ��/���
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1833911/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1833911/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1833911/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2014-03-19 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/24" target="_blank" title="�ж���">�ж���</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/516" target="_blank" title="��������">��������</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												һ��/���
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1833912/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1833912/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1833912/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2014-03-19 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/82" target="_blank" title="����">����</a></td>
											<td>			
												
												
													3:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/151" target="_blank" title="ɳ����04">ɳ����04</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												���/����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1833913/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1833913/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1833913/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2014-03-20 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/27" target="_blank" title="����">����</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/568" target="_blank" title="����ƥ��">����ƥ��</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												һ��/���
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1833909/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1833909/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1833909/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2014-03-20 03:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/99" target="_blank" title="�����ɵ�">�����ɵ�</a></td>
											<td>			
												
												
													1:2
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/395" target="_blank" title="������">������</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												���
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1833914/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1833914/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1833914/bfyc" class="oyx" target="_blank">��</a>
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
										
										
											ȫ��
										
										
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
				                        <th width="90">ʱ��</th>
							            <th width="50">����</th>
							            <th width="55">�ȷ�</th>
							            <th width="50">�Ͷ�</th>
							            <th width="45">�볡</th>
							            <th width="65">����</th>
							            
										<th width="55">����</th>
										
									</tr>
								</thead>
								
											<tbody><tr>
											<td>2014-04-02 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/27" target="_blank" title="����">����</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/88" target="_blank" title="����">����</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												����һ��
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1856529/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1856529/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1856529/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2014-04-02 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/84" target="_blank" title="����">����</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/109" target="_blank" title="��">��</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												һ��
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1856583/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1856583/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1856583/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2014-04-03 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/271" target="_blank" title="����ʥ��">����ʥ��</a></td>
											<td>			
												
												
													3:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/24" target="_blank" title="�ж���">�ж���</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1856528/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1856528/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1856528/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2014-04-03 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/82" target="_blank" title="����">����</a></td>
											<td>			
												
												
													3:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/99" target="_blank" title="�����ɵ�">�����ɵ�</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												һ��/���
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1856584/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1856584/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1856584/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2014-04-09 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/99" target="_blank" title="�����ɵ�">�����ɵ�</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/82" target="_blank" title="����">����</a></td>
											<td>			
												
												
													2:0
												
														
											</td>
											<td align="center">
											
											
												����ƽ��/����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1856532/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1856532/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1856532/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2014-04-09 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/24" target="_blank" title="�ж���">�ж���</a></td>
											<td>			
												
												
													2:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/271" target="_blank" title="����ʥ��">����ʥ��</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1856533/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1856533/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1856533/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2014-04-10 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/109" target="_blank" title="��">��</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/84" target="_blank" title="����">����</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												���ð���
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1856530/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1856530/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1856530/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2014-04-10 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/88" target="_blank" title="����">����</a></td>
											<td>			
												
												
													3:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/27" target="_blank" title="����">����</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												���
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1856586/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1856586/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1856586/bfyc" class="oyx" target="_blank">��</a>
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
										
										
											ȫ��
										
										
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
				                        <th width="90">ʱ��</th>
							            <th width="50">����</th>
							            <th width="55">�ȷ�</th>
							            <th width="50">�Ͷ�</th>
							            <th width="45">�볡</th>
							            <th width="65">����</th>
							            
										<th width="55">����</th>
										
									</tr>
								</thead>
								
											<tbody><tr>
											<td>2014-04-23 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/109" target="_blank" title="��">��</a></td>
											<td>			
												
												
													0:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/24" target="_blank" title="�ж���">�ж���</a></td>
											<td>			
												
												
													0:0
												
														
											</td>
											<td align="center">
											
											
												����/һ��
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1861016/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1861016/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1861016/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2014-04-24 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/82" target="_blank" title="����">����</a></td>
											<td>			
												
												
													1:0
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/88" target="_blank" title="����">����</a></td>
											<td>			
												
												
													1:0
												
														
											</td>
											<td align="center">
											
											
												ƽ��/����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1861015/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1861015/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1861015/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2014-04-30 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/88" target="_blank" title="����">����</a></td>
											<td>			
												
												
													0:4
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/82" target="_blank" title="����">����</a></td>
											<td>			
												
												
													0:3
												
														
											</td>
											<td align="center">
											
											
												����/һ��
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1864140/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1864140/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1864140/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
											<tr>
											<td>2014-05-01 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/24" target="_blank" title="�ж���">�ж���</a></td>
											<td>			
												
												
													1:3
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/109" target="_blank" title="��">��</a></td>
											<td>			
												
												
													1:1
												
														
											</td>
											<td align="center">
											
											
												ƽ��/����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1864150/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1864150/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1864150/bfyc" class="oyx" target="_blank">��</a>
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
										
										
											ȫ��
										
										
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
				                        <th width="90">ʱ��</th>
							            <th width="50">����</th>
							            <th width="55">�ȷ�</th>
							            <th width="50">�Ͷ�</th>
							            <th width="45">�볡</th>
							            <th width="65">����</th>
							            
										<th width="55">����</th>
										
									</tr>
								</thead>
								
											<tbody><tr>
											<td>2014-05-25 02:45</td>
											<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/82" target="_blank" title="����">����</a></td>
											<td>			
												
												
													1:1
												
											
											</td>
											<td class="team_logo" style="float:left;padding-left:10px;"><a href="soccer/team/109" target="_blank" title="��">��</a></td>
											<td>			
												
												
													0:1
												
														
											</td>
											<td align="center">
											
											
												ƽ��/����
											
										
											</td>
											
											<td>
												<a href="http://fenxi.zgzcw.com/1866503/ypdb" class="oyx" target="_blank">��</a>
												<a href="http://fenxi.zgzcw.com/1866503/bjop" class="oyx" target="_blank">ŷ</a>
												<a href="http://fenxi.zgzcw.com/1866503/bfyc" class="oyx" target="_blank">��</a>
											</td>
																
										</tr>									
								
							</tbody></table>
						</div>						
										
				
				</ul>
			
			
		</div>

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		






</body>