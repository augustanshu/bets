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
<a style="height:69px;overflow:hidden;" onclick="_hmt.push(['_trackEvent', 'ͷ�����', 'click', '��ר���Ƽ� �����н�������', 1])" href="http://cp.zgzcw.com/zjtj/index.jsp" target="_blank" rel="nofollow"><img class="ad01" width="384" height="69" src="http://public.zgzcw.com/d/images/20161071475821970022_721.png" alt="��ר���Ƽ� �����н�������" title="��ר���Ƽ� �����н�������">
</a>

</div>
<span class="kf"> <a href="javascript:;" onclick="open_kfchat()"></a>
 <p> <span id="nyr">2017-6-26</span> <br>
    <b id="xt_h">16</b><b id="xt_m">26</b><b id="xt_s">42</b> </p>
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
						
				  		
				  		
				  		
				  			<img src="http://img.zgzcw.com/zgzcw/matchCenter/league/images/2014zhongchao.jpg" width="100" height="100" border="0">
				  		
				  		
					</dt>
					<dd>
					
						[�г�]
				    
					</dd>
				</dl>
				<div class="team_out">
					<div class="team_lian">
	              	<span>����ѡ��</span>
	                <div class="leagueSelBox clearfix" style="">
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
	                <ul class="select_options" style="display: none;">
	                 
	                 
	                  
	                  
	                   <a href="http://saishi.zgzcw.com:80/soccer/league/60/2017/">
	                  <li>2017</li></a>
	                   
	                   <a href="http://saishi.zgzcw.com:80/soccer/league/60/2016/">
	                  <li>2016</li></a>
	                   
	                   <a href="http://saishi.zgzcw.com:80/soccer/league/60/2015/">
	                  <li>2015</li></a>
	                   
	                   <a href="http://saishi.zgzcw.com:80/soccer/league/60/2014/">
	                  <li>2014</li></a>
	                   
	                   <a href="http://saishi.zgzcw.com:80/soccer/league/60/2013/">
	                  <li>2013</li></a>
	                   
	                   <a href="http://saishi.zgzcw.com:80/soccer/league/60/2012/">
	                  <li>2012</li></a>
	                   
	                   <a href="http://saishi.zgzcw.com:80/soccer/league/60/2011/">
	                  <li>2011</li></a>
	                   
	                   <a href="http://saishi.zgzcw.com:80/soccer/league/60/2010/">
	                  <li>2010</li></a>
	                   
	                   <a href="http://saishi.zgzcw.com:80/soccer/league/60/2009/">
	                  <li>2009</li></a>
	                   
	                   <a href="http://saishi.zgzcw.com:80/soccer/league/60/2008/">
	                  <li>2008</li></a>
	                   
	                   <a href="http://saishi.zgzcw.com:80/soccer/league/60/2007/">
	                  <li>2007</li></a>
	                   
	                   <a href="http://saishi.zgzcw.com:80/soccer/league/60/2006/">
	                  <li>2006</li></a>
	                   
	                   <a href="http://saishi.zgzcw.com:80/soccer/league/60/2005/">
	                  <li>2005</li></a>
	                   
	                   <a href="http://saishi.zgzcw.com:80/soccer/league/60/2004/">
	                  <li>2004</li></a>
	                   
	                 
	                              
	                </ul>
              </div>
				</div>
			</div>
			
				<div class="tongji_list">
				
					<div>����ͳ��</div>
					<ul>
						<li class="cur">
						<a href="http://saishi.zgzcw.com:80/soccer/league/60">
						������Ϣ</a></li>
	                   
						<li>
						<a href="http://saishi.zgzcw.com:80/soccer/league/60/2013/ssb">
						���ְ�</a></li>
						<li>
						<a href="http://saishi.zgzcw.com:80/soccer/league/60/2013/jqds">
						�ܽ���˫</a></li>
						<li>
						<a href="http://saishi.zgzcw.com:80/soccer/league/60/2013/sxds">
						���µ�˫</a></li>
						<li>
						<a href="http://saishi.zgzcw.com:80/soccer/league/60/2013/sxpl">
						������·��</a></li>
					</ul>
				</div>
			
			<div class="tongji_list">
				<div>����б�</div>
				<ul>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/535" target="_blank" class="a1" title="���ݺ��">
					<li>���ݺ��</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/40" target="_blank" class="a1" title="ɽ��³��">
					<li>ɽ��³��</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/43" target="_blank" class="a1" title="��������">
					<li>��������</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/16668" target="_blank" class="a1" title="���ݸ���">
					<li>���ݸ���</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/3969" target="_blank" class="a1" title="�����˺�">
					<li>�����˺�</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/13969" target="_blank" class="a1" title="����һ��">
					<li>����һ��</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/7642" target="_blank" class="a1" title="�Ϻ��ϸ�">
					<li>�Ϻ��ϸ�</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/39" target="_blank" class="a1" title="�Ϻ��껨">
					<li>�Ϻ��껨</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/89" target="_blank" class="a1" title="���̩��">
					<li>���̩��</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/41" target="_blank" class="a1" title="��������">
					<li>��������</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/542" target="_blank" class="a1" title="�����̳�">
					<li>�����̳�</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/543" target="_blank" class="a1" title="��������">
					<li>��������</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/4050" target="_blank" class="a1" title="�Ϻ�����">
					<li>�Ϻ�����</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/528" target="_blank" class="a1" title="������̩">
					<li>������̩</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/44" target="_blank" class="a1" title="�ൺ����">
					<li>�ൺ����</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/16667" target="_blank" class="a1" title="�人׿��">
					<li>�人׿��</li>
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

<form id="form_1" method="post">				
	<input type="hidden" name="seasonType" value="1">
</form>
<form id="form_2" method="post">				
	<input type="hidden" name="seasonType" value="2">	
</form>

<!-- �Ҳ�ҳ�� -->
	<div class="league_right">
		<!-- <div class="league_right_01">
		
			<div class="selector">
			
				<select id="selectYear">						
					
						
							<option value="2017">2017����</option>
						
					
						
							<option value="2016">2016����</option>
						
					
						
							<option value="2015">2015����</option>
						
					
						
							<option value="2014">2014����</option>
						
					
						
							<option value="2013" selected="selected">2013����</option>
						
					
						
							<option value="2012">2012����</option>
						
					
						
							<option value="2011">2011����</option>
						
					
						
							<option value="2010">2010����</option>
						
					
						
							<option value="2009">2009����</option>
						
					
						
							<option value="2008">2008����</option>
						
					
						
							<option value="2007">2007����</option>
						
					
						
							<option value="2006">2006����</option>
						
					
						
							<option value="2005">2005����</option>
						
					
						
							<option value="2004">2004����</option>
						
					
				</select> <select id="selectTeam">
					<option value="0" selected="selected">ѡ�����</option>
					
						<option value="39">�Ϻ��껨</option>
					
						<option value="40">ɽ��³��</option>
					
						<option value="41">��������</option>
					
						<option value="43">��������</option>
					
						<option value="44">�ൺ����</option>
					
						<option value="89">���̩��</option>
					
						<option value="528">������̩</option>
					
						<option value="535">���ݺ��</option>
					
						<option value="542">�����̳�</option>
					
						<option value="543">��������</option>
					
						<option value="3969">�����˺�</option>
					
						<option value="4050">�Ϻ�����</option>
					
						<option value="7642">�Ϻ��ϸ�</option>
					
						<option value="13969">����һ��</option>
					
						<option value="16667">�人׿��</option>
					
						<option value="16668">���ݸ���</option>
					
				</select> <select id="selectTeam2" style="display:none;">
					<option value="0" selected="selected">ѡ�����</option>
					
						<option value="39">�Ϻ��껨</option>
					
						<option value="40">ɽ��³��</option>
					
						<option value="41">��������</option>
					
						<option value="43">��������</option>
					
						<option value="44">�ൺ����</option>
					
						<option value="89">���̩��</option>
					
						<option value="528">������̩</option>
					
						<option value="535">���ݺ��</option>
					
						<option value="542">�����̳�</option>
					
						<option value="543">��������</option>
					
						<option value="3969">�����˺�</option>
					
						<option value="4050">�Ϻ�����</option>
					
						<option value="7642">�Ϻ��ϸ�</option>
					
						<option value="13969">����һ��</option>
					
						<option value="16667">�人׿��</option>
					
						<option value="16668">���ݸ���</option>
					
				</select>
				<select id="fjsai">
				<option value="0" selected="selected">����</option>
				<option value="1" >������</option>
				</select>
			</div>
			�г�2013 -- ����&nbsp;
						
			
		</div> -->
	<div class="table_out">
		<div class="table_head">
			<div class="team_out2">
			
				<div class="div-select team_lian fl" id="selectTeam" value="0">
                    <span>��ѡ�����</span>
                    <ul class="select_options">
                        
							<li value="39">�Ϻ��껨</li>
						
							<li value="40">ɽ��³��</li>
						
							<li value="41">��������</li>
						
							<li value="43">��������</li>
						
							<li value="44">�ൺ����</li>
						
							<li value="89">���̩��</li>
						
							<li value="528">������̩</li>
						
							<li value="535">���ݺ��</li>
						
							<li value="542">�����̳�</li>
						
							<li value="543">��������</li>
						
							<li value="3969">�����˺�</li>
						
							<li value="4050">�Ϻ�����</li>
						
							<li value="7642">�Ϻ��ϸ�</li>
						
							<li value="13969">����һ��</li>
						
							<li value="16667">�人׿��</li>
						
							<li value="16668">���ݸ���</li>
						
                    </ul>
                </div>
                <b class="qxzqd fl">VS</b>
                <div class="div-select fl" style="margin-left:20px;" id="selectTeam2" value="0">
                    <span>��ѡ�����</span>
                    <ul class="select_options">
                        
							<li value="39">�Ϻ��껨</li>
						
							<li value="40">ɽ��³��</li>
						
							<li value="41">��������</li>
						
							<li value="43">��������</li>
						
							<li value="44">�ൺ����</li>
						
							<li value="89">���̩��</li>
						
							<li value="528">������̩</li>
						
							<li value="535">���ݺ��</li>
						
							<li value="542">�����̳�</li>
						
							<li value="543">��������</li>
						
							<li value="3969">�����˺�</li>
						
							<li value="4050">�Ϻ�����</li>
						
							<li value="7642">�Ϻ��ϸ�</li>
						
							<li value="13969">����һ��</li>
						
							<li value="16667">�人׿��</li>
						
							<li value="16668">���ݸ���</li>
						
                    </ul>
                </div>
               
			</div>
			<span>
				2013�г�����
			</span>
			
			
				<!-- ��K�� -->
				
				
					<ul id="fjsai">
						<li class="cur" style="margin-left:80px;">������</li>
						<li>������</li>
					</ul>
				
			
			
			<!-- <select id="fjsai">
				<option value="0" selected="selected">������</option>
				<option value="1" >������</option>
			</select> -->
			<select id="selectYear" style="visibility:hidden;height:0;width:0;line-height:0;margin:0;padding:0;">						
				
					
						<option value="2017">2017����</option>
					
				
					
						<option value="2016">2016����</option>
					
				
					
						<option value="2015">2015����</option>
					
				
					
						<option value="2014">2014����</option>
					
				
					
						<option value="2013" selected="selected">2013����</option>
					
				
					
						<option value="2012">2012����</option>
					
				
					
						<option value="2011">2011����</option>
					
				
					
						<option value="2010">2010����</option>
					
				
					
						<option value="2009">2009����</option>
					
				
					
						<option value="2008">2008����</option>
					
				
					
						<option value="2007">2007����</option>
					
				
					
						<option value="2006">2006����</option>
					
				
					
						<option value="2005">2005����</option>
					
				
					
						<option value="2004">2004����</option>
					
				
			</select>
			<!-- <select id="selectTeam">
				<option value="0" selected="selected">ѡ�����</option>
				
					<option value="39">�Ϻ��껨</option>
				
					<option value="40">ɽ��³��</option>
				
					<option value="41">��������</option>
				
					<option value="43">��������</option>
				
					<option value="44">�ൺ����</option>
				
					<option value="89">���̩��</option>
				
					<option value="528">������̩</option>
				
					<option value="535">���ݺ��</option>
				
					<option value="542">�����̳�</option>
				
					<option value="543">��������</option>
				
					<option value="3969">�����˺�</option>
				
					<option value="4050">�Ϻ�����</option>
				
					<option value="7642">�Ϻ��ϸ�</option>
				
					<option value="13969">����һ��</option>
				
					<option value="16667">�人׿��</option>
				
					<option value="16668">���ݸ���</option>
				
			</select>
			<select id="selectTeam2">
				<option value="0" selected="selected">ѡ�����</option>
				
					<option value="39">�Ϻ��껨</option>
				
					<option value="40">ɽ��³��</option>
				
					<option value="41">��������</option>
				
					<option value="43">��������</option>
				
					<option value="44">�ൺ����</option>
				
					<option value="89">���̩��</option>
				
					<option value="528">������̩</option>
				
					<option value="535">���ݺ��</option>
				
					<option value="542">�����̳�</option>
				
					<option value="543">��������</option>
				
					<option value="3969">�����˺�</option>
				
					<option value="4050">�Ϻ�����</option>
				
					<option value="7642">�Ϻ��ϸ�</option>
				
					<option value="13969">����һ��</option>
				
					<option value="16667">�人׿��</option>
				
					<option value="16668">���ݸ���</option>
				
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
				
				<div class="clear"></div>
			</div>
		</div>
		<div class="league_right_022" id="matchInfo">
			
				









<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_" class="zstab" style="display: none;">
	<thead>
		<tr>
			<th width="127">ʱ��</th>
			<th width="165">����</th>
			<th width="33">�ȷ�</th>
			<th width="165">�Ͷ�</th>
			<th width="65">�볡</th>
			<th width="153">����</th>
			<th width="66">����</th>
			<!-- <th width="90">ʱ��</th>
            <th width="50">����</th>
            <th width="30">�ȷ�</th>
            <th width="50">�Ͷ�</th>
            <th width="45">�볡</th>
            <th width="65">����</th>
            <th width="55">����</th> -->
		</tr>
	</thead>

	
	
		
			<tbody><tr>
				
			<td>2013-03-08 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3969" target="_blank" title="">�����˺�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140225133203.jpg"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140327133627.gif"><a href="soccer/team/44" target="_blank" title="">�ൺ����</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1163217/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1163217/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1163217/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-03-08 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/543" target="_blank" title="">��������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160121104955.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322180048.png"><a href="soccer/team/16667" target="_blank" title="">�人׿��</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1163218/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1163218/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1163218/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-03-08 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/43" target="_blank" title="">��������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322171729.png"></td>
			<td>			
				
					4:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322175313.png"><a href="soccer/team/7642" target="_blank" title="">�Ϻ��ϸ�</a></td>
			<td>			
				
					3:1
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1163219/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1163219/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1163219/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-03-08 20:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/535" target="_blank" title="">���ݺ��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322172236.png"></td>
			<td>			
				
					5:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322175805.png"><a href="soccer/team/4050" target="_blank" title="">�Ϻ�����</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				���/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1163226/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1163226/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1163226/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-03-09 15:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/40" target="_blank" title="">ɽ��³��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140222132332.gif"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174050.png"><a href="soccer/team/13969" target="_blank" title="">����һ��</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1162432/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1162432/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1162432/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-03-09 16:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/16668" target="_blank" title="">���ݸ���</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140211195608.jpg"></td>
			<td>			
				
					2:4
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174927.png"><a href="soccer/team/41" target="_blank" title="">��������</a></td>
			<td>			
				
					1:2
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1162433/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1162433/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1162433/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-03-09 19:45</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/39" target="_blank" title="">�Ϻ��껨</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160202133545.png"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160122173710.png"><a href="soccer/team/89" target="_blank" title="">���̩��</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1162524/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1162524/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1162524/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-03-10 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/542" target="_blank" title="">�����̳�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174601.png"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140225131744.jpg"><a href="soccer/team/528" target="_blank" title="">������̩</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1161913/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1161913/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1161913/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
</tbody></table>



			
		









<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_2" class="zstab" style="display: none;">
	<thead>
		<tr>
			<th width="127">ʱ��</th>
			<th width="165">����</th>
			<th width="33">�ȷ�</th>
			<th width="165">�Ͷ�</th>
			<th width="65">�볡</th>
			<th width="153">����</th>
			<th width="66">����</th>
			<!-- <th width="90">ʱ��</th>
            <th width="50">����</th>
            <th width="30">�ȷ�</th>
            <th width="50">�Ͷ�</th>
            <th width="45">�볡</th>
            <th width="65">����</th>
            <th width="55">����</th> -->
		</tr>
	</thead>

	
	
		
			<tbody><tr>
				
			<td>2013-03-16 15:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/40" target="_blank" title="">ɽ��³��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140222132332.gif"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140225131744.jpg"><a href="soccer/team/528" target="_blank" title="">������̩</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1160254/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1160254/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1160254/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-03-16 15:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/44" target="_blank" title="">�ൺ����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140327133627.gif"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174050.png"><a href="soccer/team/13969" target="_blank" title="">����һ��</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1160255/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1160255/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1160255/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-03-16 15:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/7642" target="_blank" title="">�Ϻ��ϸ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322175313.png"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140225133203.jpg"><a href="soccer/team/3969" target="_blank" title="">�����˺�</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1160256/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1160256/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1160256/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-03-16 15:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/16667" target="_blank" title="">�人׿��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322180048.png"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322171729.png"><a href="soccer/team/43" target="_blank" title="">��������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1160257/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1160257/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1160257/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-03-16 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/535" target="_blank" title="">���ݺ��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322172236.png"></td>
			<td>			
				
					3:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160121104955.jpg"><a href="soccer/team/543" target="_blank" title="">��������</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				һ��/���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1160348/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1160348/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1160348/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-03-17 14:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/41" target="_blank" title="">��������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174927.png"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160122173710.png"><a href="soccer/team/89" target="_blank" title="">���̩��</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1159580/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1159580/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1159580/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-03-17 16:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/4050" target="_blank" title="">�Ϻ�����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322175805.png"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160202133545.png"><a href="soccer/team/39" target="_blank" title="">�Ϻ��껨</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1159591/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1159591/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1159591/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-03-17 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/542" target="_blank" title="">�����̳�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174601.png"></td>
			<td>			
				
					3:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140211195608.jpg"><a href="soccer/team/16668" target="_blank" title="">���ݸ���</a></td>
			<td>			
				
					2:1
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1159673/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1159673/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1159673/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_3" class="zstab" style="display: none;">
	<thead>
		<tr>
			<th width="127">ʱ��</th>
			<th width="165">����</th>
			<th width="33">�ȷ�</th>
			<th width="165">�Ͷ�</th>
			<th width="65">�볡</th>
			<th width="153">����</th>
			<th width="66">����</th>
			<!-- <th width="90">ʱ��</th>
            <th width="50">����</th>
            <th width="30">�ȷ�</th>
            <th width="50">�Ͷ�</th>
            <th width="45">�볡</th>
            <th width="65">����</th>
            <th width="55">����</th> -->
		</tr>
	</thead>

	
	
		
			<tbody><tr>
				
			<td>2013-03-29 19:35</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/43" target="_blank" title="">��������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322171729.png"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322172236.png"><a href="soccer/team/535" target="_blank" title="">���ݺ��</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				�ܰ���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1156796/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1156796/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1156796/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-03-29 19:35</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3969" target="_blank" title="">�����˺�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140225133203.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322180048.png"><a href="soccer/team/16667" target="_blank" title="">�人׿��</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1156797/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1156797/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1156797/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-03-29 19:40</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/543" target="_blank" title="">��������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160121104955.jpg"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322175805.png"><a href="soccer/team/4050" target="_blank" title="">�Ϻ�����</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1156798/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1156798/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1156798/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-03-30 15:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/13969" target="_blank" title="">����һ��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174050.png"></td>
			<td>			
				
					3:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322175313.png"><a href="soccer/team/7642" target="_blank" title="">�Ϻ��ϸ�</a></td>
			<td>			
				
					2:1
							
			</td>
			<td>
			
				һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1156019/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1156019/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1156019/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-03-30 19:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/89" target="_blank" title="">���̩��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160122173710.png"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174601.png"><a href="soccer/team/542" target="_blank" title="">�����̳�</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1156087/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1156087/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1156087/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-03-31 15:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/528" target="_blank" title="">������̩</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140225131744.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140327133627.gif"><a href="soccer/team/44" target="_blank" title="">�ൺ����</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1155505/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1155505/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1155505/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-03-31 16:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/16668" target="_blank" title="">���ݸ���</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140211195608.jpg"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140222132332.gif"><a href="soccer/team/40" target="_blank" title="">ɽ��³��</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1155506/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1155506/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1155506/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-03-31 19:45</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/39" target="_blank" title="">�Ϻ��껨</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160202133545.png"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174927.png"><a href="soccer/team/41" target="_blank" title="">��������</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1155646/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1155646/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1155646/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_4" class="zstab" style="display: none;">
	<thead>
		<tr>
			<th width="127">ʱ��</th>
			<th width="165">����</th>
			<th width="33">�ȷ�</th>
			<th width="165">�Ͷ�</th>
			<th width="65">�볡</th>
			<th width="153">����</th>
			<th width="66">����</th>
			<!-- <th width="90">ʱ��</th>
            <th width="50">����</th>
            <th width="30">�ȷ�</th>
            <th width="50">�Ͷ�</th>
            <th width="45">�볡</th>
            <th width="65">����</th>
            <th width="55">����</th> -->
		</tr>
	</thead>

	
	
		
			<tbody><tr>
				
			<td>2013-04-05 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/543" target="_blank" title="">��������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160121104955.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322171729.png"><a href="soccer/team/43" target="_blank" title="">��������</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1154478/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1154478/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1154478/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-04-06 15:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/40" target="_blank" title="">ɽ��³��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140222132332.gif"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160122173710.png"><a href="soccer/team/89" target="_blank" title="">���̩��</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1153605/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1153605/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1153605/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-04-06 15:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/44" target="_blank" title="">�ൺ����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140327133627.gif"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140211195608.jpg"><a href="soccer/team/16668" target="_blank" title="">���ݸ���</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1153606/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1153606/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1153606/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-04-06 15:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/16667" target="_blank" title="">�人׿��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322180048.png"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174050.png"><a href="soccer/team/13969" target="_blank" title="">����һ��</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1153607/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1153607/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1153607/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-04-06 19:45</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/4050" target="_blank" title="">�Ϻ�����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322175805.png"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174927.png"><a href="soccer/team/41" target="_blank" title="">��������</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1153757/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1153757/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1153757/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-04-07 16:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/7642" target="_blank" title="">�Ϻ��ϸ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322175313.png"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140225131744.jpg"><a href="soccer/team/528" target="_blank" title="">������̩</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1152909/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1152909/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1152909/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-04-07 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/542" target="_blank" title="">�����̳�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174601.png"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160202133545.png"><a href="soccer/team/39" target="_blank" title="">�Ϻ��껨</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1153037/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1153037/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1153037/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-05-29 20:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/535" target="_blank" title="">���ݺ��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322172236.png"></td>
			<td>			
				
					4:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140225133203.jpg"><a href="soccer/team/3969" target="_blank" title="">�����˺�</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				���/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1134357/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1134357/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1134357/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_5" class="zstab" style="display: none;">
	<thead>
		<tr>
			<th width="127">ʱ��</th>
			<th width="165">����</th>
			<th width="33">�ȷ�</th>
			<th width="165">�Ͷ�</th>
			<th width="65">�볡</th>
			<th width="153">����</th>
			<th width="66">����</th>
			<!-- <th width="90">ʱ��</th>
            <th width="50">����</th>
            <th width="30">�ȷ�</th>
            <th width="50">�Ͷ�</th>
            <th width="45">�볡</th>
            <th width="65">����</th>
            <th width="55">����</th> -->
		</tr>
	</thead>

	
	
		
			<tbody><tr>
				
			<td>2013-04-13 15:35</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/528" target="_blank" title="">������̩</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140225131744.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322180048.png"><a href="soccer/team/16667" target="_blank" title="">�人׿��</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1150851/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1150851/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1150851/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-04-13 16:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/16668" target="_blank" title="">���ݸ���</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140211195608.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322175313.png"><a href="soccer/team/7642" target="_blank" title="">�Ϻ��ϸ�</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1150853/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1150853/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1150853/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-04-13 19:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/89" target="_blank" title="">���̩��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160122173710.png"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140327133627.gif"><a href="soccer/team/44" target="_blank" title="">�ൺ����</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1150948/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1150948/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1150948/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-04-13 19:45</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/39" target="_blank" title="">�Ϻ��껨</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160202133545.png"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140222132332.gif"><a href="soccer/team/40" target="_blank" title="">ɽ��³��</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1150995/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1150995/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1150995/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-04-14 14:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/41" target="_blank" title="">��������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174927.png"></td>
			<td>			
				
					3:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174601.png"><a href="soccer/team/542" target="_blank" title="">�����̳�</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1150054/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1150054/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1150054/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-04-14 15:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/13969" target="_blank" title="">����һ��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174050.png"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322172236.png"><a href="soccer/team/535" target="_blank" title="">���ݺ��</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				�ܰ���/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1150063/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1150063/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1150063/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-04-14 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/43" target="_blank" title="">��������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322171729.png"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322175805.png"><a href="soccer/team/4050" target="_blank" title="">�Ϻ�����</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1150189/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1150189/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1150189/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-04-14 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3969" target="_blank" title="">�����˺�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140225133203.jpg"></td>
			<td>			
				
					3:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160121104955.jpg"><a href="soccer/team/543" target="_blank" title="">��������</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1150190/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1150190/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1150190/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_6" class="zstab" style="display: none;">
	<thead>
		<tr>
			<th width="127">ʱ��</th>
			<th width="165">����</th>
			<th width="33">�ȷ�</th>
			<th width="165">�Ͷ�</th>
			<th width="65">�볡</th>
			<th width="153">����</th>
			<th width="66">����</th>
			<!-- <th width="90">ʱ��</th>
            <th width="50">����</th>
            <th width="30">�ȷ�</th>
            <th width="50">�Ͷ�</th>
            <th width="45">�볡</th>
            <th width="65">����</th>
            <th width="55">����</th> -->
		</tr>
	</thead>

	
	
		
			<tbody><tr>
				
			<td>2013-04-19 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/543" target="_blank" title="">��������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160121104955.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174050.png"><a href="soccer/team/13969" target="_blank" title="">����һ��</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1148798/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1148798/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1148798/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-04-19 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/43" target="_blank" title="">��������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322171729.png"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140225133203.jpg"><a href="soccer/team/3969" target="_blank" title="">�����˺�</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1148799/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1148799/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1148799/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-04-20 15:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/40" target="_blank" title="">ɽ��³��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140222132332.gif"></td>
			<td>			
				
					3:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174927.png"><a href="soccer/team/41" target="_blank" title="">��������</a></td>
			<td>			
				
					3:1
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1147880/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1147880/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1147880/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-04-20 15:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/7642" target="_blank" title="">�Ϻ��ϸ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322175313.png"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160122173710.png"><a href="soccer/team/89" target="_blank" title="">���̩��</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1147881/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1147881/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1147881/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-04-20 15:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/16667" target="_blank" title="">�人׿��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322180048.png"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140211195608.jpg"><a href="soccer/team/16668" target="_blank" title="">���ݸ���</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1147882/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1147882/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1147882/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-04-20 20:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/535" target="_blank" title="">���ݺ��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322172236.png"></td>
			<td>			
				
					6:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140225131744.jpg"><a href="soccer/team/528" target="_blank" title="">������̩</a></td>
			<td>			
				
					3:0
							
			</td>
			<td>
			
				���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1148065/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1148065/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1148065/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-04-21 15:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/44" target="_blank" title="">�ൺ����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140327133627.gif"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160202133545.png"><a href="soccer/team/39" target="_blank" title="">�Ϻ��껨</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1147074/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1147074/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1147074/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-04-21 19:45</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/4050" target="_blank" title="">�Ϻ�����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322175805.png"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174601.png"><a href="soccer/team/542" target="_blank" title="">�����̳�</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1147283/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1147283/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1147283/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_7" class="zstab" style="display: none;">
	<thead>
		<tr>
			<th width="127">ʱ��</th>
			<th width="165">����</th>
			<th width="33">�ȷ�</th>
			<th width="165">�Ͷ�</th>
			<th width="65">�볡</th>
			<th width="153">����</th>
			<th width="66">����</th>
			<!-- <th width="90">ʱ��</th>
            <th width="50">����</th>
            <th width="30">�ȷ�</th>
            <th width="50">�Ͷ�</th>
            <th width="45">�볡</th>
            <th width="65">����</th>
            <th width="55">����</th> -->
		</tr>
	</thead>

	
	
		
			<tbody><tr>
				
			<td>2013-04-27 14:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/528" target="_blank" title="">������̩</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140225131744.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160121104955.jpg"><a href="soccer/team/543" target="_blank" title="">��������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1145066/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1145066/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1145066/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-04-27 15:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/13969" target="_blank" title="">����һ��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174050.png"></td>
			<td>			
				
					3:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322171729.png"><a href="soccer/team/43" target="_blank" title="">��������</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1145075/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1145075/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1145075/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-04-27 19:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/16668" target="_blank" title="">���ݸ���</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140211195608.jpg"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322172236.png"><a href="soccer/team/535" target="_blank" title="">���ݺ��</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				��һ��/���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1145158/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1145158/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1145158/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-04-27 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/89" target="_blank" title="">���̩��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160122173710.png"></td>
			<td>			
				
					3:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322180048.png"><a href="soccer/team/16667" target="_blank" title="">�人׿��</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1145188/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1145188/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1145188/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-04-27 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/542" target="_blank" title="">�����̳�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174601.png"></td>
			<td>			
				
					3:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140222132332.gif"><a href="soccer/team/40" target="_blank" title="">ɽ��³��</a></td>
			<td>			
				
					2:1
							
			</td>
			<td>
			
				�ܰ���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1145189/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1145189/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1145189/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-04-28 14:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/41" target="_blank" title="">��������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174927.png"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140327133627.gif"><a href="soccer/team/44" target="_blank" title="">�ൺ����</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1144313/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1144313/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1144313/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-04-28 19:45</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/39" target="_blank" title="">�Ϻ��껨</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160202133545.png"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322175313.png"><a href="soccer/team/7642" target="_blank" title="">�Ϻ��ϸ�</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1144467/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1144467/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1144467/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-06-16 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3969" target="_blank" title="">�����˺�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140225133203.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322175805.png"><a href="soccer/team/4050" target="_blank" title="">�Ϻ�����</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1755662/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1755662/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1755662/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_8" class="zstab" style="display: none;">
	<thead>
		<tr>
			<th width="127">ʱ��</th>
			<th width="165">����</th>
			<th width="33">�ȷ�</th>
			<th width="165">�Ͷ�</th>
			<th width="65">�볡</th>
			<th width="153">����</th>
			<th width="66">����</th>
			<!-- <th width="90">ʱ��</th>
            <th width="50">����</th>
            <th width="30">�ȷ�</th>
            <th width="50">�Ͷ�</th>
            <th width="45">�볡</th>
            <th width="65">����</th>
            <th width="55">����</th> -->
		</tr>
	</thead>

	
	
		
			<tbody><tr>
				
			<td>2013-05-04 15:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/44" target="_blank" title="">�ൺ����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140327133627.gif"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174601.png"><a href="soccer/team/542" target="_blank" title="">�����̳�</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1142407/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1142407/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1142407/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-05-04 15:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/16667" target="_blank" title="">�人׿��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322180048.png"></td>
			<td>			
				
					3:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160202133545.png"><a href="soccer/team/39" target="_blank" title="">�Ϻ��껨</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				�ܰ���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1142408/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1142408/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1142408/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-05-04 19:45</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/4050" target="_blank" title="">�Ϻ�����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322175805.png"></td>
			<td>			
				
					2:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140222132332.gif"><a href="soccer/team/40" target="_blank" title="">ɽ��³��</a></td>
			<td>			
				
					2:2
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1142527/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1142527/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1142527/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-05-05 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/43" target="_blank" title="">��������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322171729.png"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140225131744.jpg"><a href="soccer/team/528" target="_blank" title="">������̩</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1141843/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1141843/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1141843/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-05-05 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3969" target="_blank" title="">�����˺�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140225133203.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174050.png"><a href="soccer/team/13969" target="_blank" title="">����һ��</a></td>
			<td>			
				
					2:1
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1141844/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1141844/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1141844/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-05-05 19:45</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/7642" target="_blank" title="">�Ϻ��ϸ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322175313.png"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174927.png"><a href="soccer/team/41" target="_blank" title="">��������</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1141857/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1141857/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1141857/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-05-05 20:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/535" target="_blank" title="">���ݺ��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322172236.png"></td>
			<td>			
				
					3:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160122173710.png"><a href="soccer/team/89" target="_blank" title="">���̩��</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1141871/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1141871/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1141871/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-05-06 19:40</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/543" target="_blank" title="">��������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160121104955.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140211195608.jpg"><a href="soccer/team/16668" target="_blank" title="">���ݸ���</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1141550/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1141550/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1141550/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_9" class="zstab" style="display: none;">
	<thead>
		<tr>
			<th width="127">ʱ��</th>
			<th width="165">����</th>
			<th width="33">�ȷ�</th>
			<th width="165">�Ͷ�</th>
			<th width="65">�볡</th>
			<th width="153">����</th>
			<th width="66">����</th>
			<!-- <th width="90">ʱ��</th>
            <th width="50">����</th>
            <th width="30">�ȷ�</th>
            <th width="50">�Ͷ�</th>
            <th width="45">�볡</th>
            <th width="65">����</th>
            <th width="55">����</th> -->
		</tr>
	</thead>

	
	
		
			<tbody><tr>
				
			<td>2013-05-10 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/16668" target="_blank" title="">���ݸ���</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140211195608.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322171729.png"><a href="soccer/team/43" target="_blank" title="">��������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1140586/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1140586/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1140586/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-05-10 19:45</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/39" target="_blank" title="">�Ϻ��껨</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160202133545.png"></td>
			<td>			
				
					0:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322172236.png"><a href="soccer/team/535" target="_blank" title="">���ݺ��</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				�ܰ���/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1140589/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1140589/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1140589/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-05-11 14:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/41" target="_blank" title="">��������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174927.png"></td>
			<td>			
				
					3:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322180048.png"><a href="soccer/team/16667" target="_blank" title="">�人׿��</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1139834/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1139834/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1139834/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-05-11 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/13969" target="_blank" title="">����һ��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174050.png"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322175805.png"><a href="soccer/team/4050" target="_blank" title="">�Ϻ�����</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1139980/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1139980/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1139980/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-05-11 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/89" target="_blank" title="">���̩��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160122173710.png"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160121104955.jpg"><a href="soccer/team/543" target="_blank" title="">��������</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1139981/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1139981/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1139981/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-05-12 15:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/528" target="_blank" title="">������̩</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140225131744.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140225133203.jpg"><a href="soccer/team/3969" target="_blank" title="">�����˺�</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1139119/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1139119/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1139119/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-05-12 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/542" target="_blank" title="">�����̳�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174601.png"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322175313.png"><a href="soccer/team/7642" target="_blank" title="">�Ϻ��ϸ�</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1139248/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1139248/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1139248/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-05-14 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/40" target="_blank" title="">ɽ��³��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140222132332.gif"></td>
			<td>			
				
					3:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140327133627.gif"><a href="soccer/team/44" target="_blank" title="">�ൺ����</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1138765/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1138765/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1138765/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_10" class="zstab" style="display: none;">
	<thead>
		<tr>
			<th width="127">ʱ��</th>
			<th width="165">����</th>
			<th width="33">�ȷ�</th>
			<th width="165">�Ͷ�</th>
			<th width="65">�볡</th>
			<th width="153">����</th>
			<th width="66">����</th>
			<!-- <th width="90">ʱ��</th>
            <th width="50">����</th>
            <th width="30">�ȷ�</th>
            <th width="50">�Ͷ�</th>
            <th width="45">�볡</th>
            <th width="65">����</th>
            <th width="55">����</th> -->
		</tr>
	</thead>

	
	
		
			<tbody><tr>
				
			<td>2013-05-18 15:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/44" target="_blank" title="">�ൺ����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140327133627.gif"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322175805.png"><a href="soccer/team/4050" target="_blank" title="">�Ϻ�����</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1137475/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1137475/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1137475/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-05-18 15:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3969" target="_blank" title="">�����˺�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140225133203.jpg"></td>
			<td>			
				
					3:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140211195608.jpg"><a href="soccer/team/16668" target="_blank" title="">���ݸ���</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1137476/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1137476/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1137476/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-05-18 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/40" target="_blank" title="">ɽ��³��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140222132332.gif"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322175313.png"><a href="soccer/team/7642" target="_blank" title="">�Ϻ��ϸ�</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				һ��/���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1137573/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1137573/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1137573/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-05-18 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/43" target="_blank" title="">��������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322171729.png"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160122173710.png"><a href="soccer/team/89" target="_blank" title="">���̩��</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1137574/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1137574/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1137574/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-05-18 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/13969" target="_blank" title="">����һ��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174050.png"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140225131744.jpg"><a href="soccer/team/528" target="_blank" title="">������̩</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1137575/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1137575/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1137575/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-05-18 19:40</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/543" target="_blank" title="">��������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160121104955.jpg"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160202133545.png"><a href="soccer/team/39" target="_blank" title="">�Ϻ��껨</a></td>
			<td>			
				
					2:2
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1137584/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1137584/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1137584/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-05-18 20:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/535" target="_blank" title="">���ݺ��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322172236.png"></td>
			<td>			
				
					4:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174927.png"><a href="soccer/team/41" target="_blank" title="">��������</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				���/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1137603/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1137603/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1137603/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-05-19 15:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/16667" target="_blank" title="">�人׿��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322180048.png"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174601.png"><a href="soccer/team/542" target="_blank" title="">�����̳�</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1136945/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1136945/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1136945/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_11" class="zstab" style="display: none;">
	<thead>
		<tr>
			<th width="127">ʱ��</th>
			<th width="165">����</th>
			<th width="33">�ȷ�</th>
			<th width="165">�Ͷ�</th>
			<th width="65">�볡</th>
			<th width="153">����</th>
			<th width="66">����</th>
			<!-- <th width="90">ʱ��</th>
            <th width="50">����</th>
            <th width="30">�ȷ�</th>
            <th width="50">�Ͷ�</th>
            <th width="45">�볡</th>
            <th width="65">����</th>
            <th width="55">����</th> -->
		</tr>
	</thead>

	
	
		
			<tbody><tr>
				
			<td>2013-05-25 15:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/41" target="_blank" title="">��������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174927.png"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160121104955.jpg"><a href="soccer/team/543" target="_blank" title="">��������</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1135437/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1135437/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1135437/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-05-25 15:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/44" target="_blank" title="">�ൺ����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140327133627.gif"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322175313.png"><a href="soccer/team/7642" target="_blank" title="">�Ϻ��ϸ�</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1135438/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1135438/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1135438/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-05-25 16:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/16668" target="_blank" title="">���ݸ���</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140211195608.jpg"></td>
			<td>			
				
					3:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174050.png"><a href="soccer/team/13969" target="_blank" title="">����һ��</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1135441/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1135441/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1135441/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-05-25 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/89" target="_blank" title="">���̩��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160122173710.png"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140225133203.jpg"><a href="soccer/team/3969" target="_blank" title="">�����˺�</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1135532/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1135532/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1135532/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-05-26 15:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/528" target="_blank" title="">������̩</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140225131744.jpg"></td>
			<td>			
				
					1:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322175805.png"><a href="soccer/team/4050" target="_blank" title="">�Ϻ�����</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1134838/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1134838/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1134838/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-05-26 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/40" target="_blank" title="">ɽ��³��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140222132332.gif"></td>
			<td>			
				
					4:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322180048.png"><a href="soccer/team/16667" target="_blank" title="">�人׿��</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1134930/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1134930/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1134930/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-05-26 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/542" target="_blank" title="">�����̳�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174601.png"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322172236.png"><a href="soccer/team/535" target="_blank" title="">���ݺ��</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				�����/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1134931/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1134931/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1134931/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-05-26 19:45</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/39" target="_blank" title="">�Ϻ��껨</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160202133545.png"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322171729.png"><a href="soccer/team/43" target="_blank" title="">��������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1134936/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1134936/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1134936/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_12" class="zstab" style="display: none;">
	<thead>
		<tr>
			<th width="127">ʱ��</th>
			<th width="165">����</th>
			<th width="33">�ȷ�</th>
			<th width="165">�Ͷ�</th>
			<th width="65">�볡</th>
			<th width="153">����</th>
			<th width="66">����</th>
			<!-- <th width="90">ʱ��</th>
            <th width="50">����</th>
            <th width="30">�ȷ�</th>
            <th width="50">�Ͷ�</th>
            <th width="45">�볡</th>
            <th width="65">����</th>
            <th width="55">����</th> -->
		</tr>
	</thead>

	
	
		
			<tbody><tr>
				
			<td>2013-06-01 15:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/16667" target="_blank" title="">�人׿��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322180048.png"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140327133627.gif"><a href="soccer/team/44" target="_blank" title="">�ൺ����</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1133612/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1133612/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1133612/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-06-01 15:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/528" target="_blank" title="">������̩</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140225131744.jpg"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140211195608.jpg"><a href="soccer/team/16668" target="_blank" title="">���ݸ���</a></td>
			<td>			
				
					1:2
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1133613/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1133613/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1133613/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-06-01 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/43" target="_blank" title="">��������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322171729.png"></td>
			<td>			
				
					4:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174927.png"><a href="soccer/team/41" target="_blank" title="">��������</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1133705/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1133705/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1133705/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-06-01 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3969" target="_blank" title="">�����˺�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140225133203.jpg"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160202133545.png"><a href="soccer/team/39" target="_blank" title="">�Ϻ��껨</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1133706/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1133706/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1133706/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-06-01 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/13969" target="_blank" title="">����һ��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174050.png"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160122173710.png"><a href="soccer/team/89" target="_blank" title="">���̩��</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1133707/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1133707/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1133707/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-06-01 19:40</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/543" target="_blank" title="">��������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160121104955.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174601.png"><a href="soccer/team/542" target="_blank" title="">�����̳�</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1133716/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1133716/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1133716/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-06-01 20:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/535" target="_blank" title="">���ݺ��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322172236.png"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140222132332.gif"><a href="soccer/team/40" target="_blank" title="">ɽ��³��</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				һ��/���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1133719/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1133719/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1133719/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-06-02 19:45</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/4050" target="_blank" title="">�Ϻ�����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322175805.png"></td>
			<td>			
				
					1:6
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322175313.png"><a href="soccer/team/7642" target="_blank" title="">�Ϻ��ϸ�</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1133307/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1133307/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1133307/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_13" class="zstab" style="display: none;">
	<thead>
		<tr>
			<th width="127">ʱ��</th>
			<th width="165">����</th>
			<th width="33">�ȷ�</th>
			<th width="165">�Ͷ�</th>
			<th width="65">�볡</th>
			<th width="153">����</th>
			<th width="66">����</th>
			<!-- <th width="90">ʱ��</th>
            <th width="50">����</th>
            <th width="30">�ȷ�</th>
            <th width="50">�Ͷ�</th>
            <th width="45">�볡</th>
            <th width="65">����</th>
            <th width="55">����</th> -->
		</tr>
	</thead>

	
	
		
			<tbody><tr>
				
			<td>2013-06-21 19:45</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/39" target="_blank" title="">�Ϻ��껨</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160202133545.png"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174050.png"><a href="soccer/team/13969" target="_blank" title="">����һ��</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1755537/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1755537/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1755537/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-06-22 16:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/44" target="_blank" title="">�ൺ����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140327133627.gif"></td>
			<td>			
				
					1:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322172236.png"><a href="soccer/team/535" target="_blank" title="">���ݺ��</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				�����/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1756070/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1756070/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1756070/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-06-22 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/16668" target="_blank" title="">���ݸ���</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140211195608.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322175805.png"><a href="soccer/team/4050" target="_blank" title="">�Ϻ�����</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1756131/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1756131/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1756131/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-06-22 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/89" target="_blank" title="">���̩��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160122173710.png"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140225131744.jpg"><a href="soccer/team/528" target="_blank" title="">������̩</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1756132/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1756132/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1756132/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-06-22 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/41" target="_blank" title="">��������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174927.png"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140225133203.jpg"><a href="soccer/team/3969" target="_blank" title="">�����˺�</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1756133/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1756133/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1756133/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-06-22 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/542" target="_blank" title="">�����̳�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174601.png"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322171729.png"><a href="soccer/team/43" target="_blank" title="">��������</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1756134/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1756134/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1756134/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-06-22 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/40" target="_blank" title="">ɽ��³��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140222132332.gif"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160121104955.jpg"><a href="soccer/team/543" target="_blank" title="">��������</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				һ��/���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1756135/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1756135/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1756135/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-06-22 19:45</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/7642" target="_blank" title="">�Ϻ��ϸ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322175313.png"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322180048.png"><a href="soccer/team/16667" target="_blank" title="">�人׿��</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1756141/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1756141/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1756141/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_14" class="zstab" style="display: none;">
	<thead>
		<tr>
			<th width="127">ʱ��</th>
			<th width="165">����</th>
			<th width="33">�ȷ�</th>
			<th width="165">�Ͷ�</th>
			<th width="65">�볡</th>
			<th width="153">����</th>
			<th width="66">����</th>
			<!-- <th width="90">ʱ��</th>
            <th width="50">����</th>
            <th width="30">�ȷ�</th>
            <th width="50">�Ͷ�</th>
            <th width="45">�볡</th>
            <th width="65">����</th>
            <th width="55">����</th> -->
		</tr>
	</thead>

	
	
		
			<tbody><tr>
				
			<td>2013-06-25 20:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/535" target="_blank" title="">���ݺ��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322172236.png"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322175313.png"><a href="soccer/team/7642" target="_blank" title="">�Ϻ��ϸ�</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				�����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1756610/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1756610/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1756610/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-06-26 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/43" target="_blank" title="">��������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322171729.png"></td>
			<td>			
				
					3:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140222132332.gif"><a href="soccer/team/40" target="_blank" title="">ɽ��³��</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1756613/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1756613/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1756613/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-06-26 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3969" target="_blank" title="">�����˺�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140225133203.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174601.png"><a href="soccer/team/542" target="_blank" title="">�����̳�</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1756614/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1756614/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1756614/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-06-26 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/528" target="_blank" title="">������̩</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140225131744.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160202133545.png"><a href="soccer/team/39" target="_blank" title="">�Ϻ��껨</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1756616/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1756616/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1756616/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-06-26 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/16668" target="_blank" title="">���ݸ���</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140211195608.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160122173710.png"><a href="soccer/team/89" target="_blank" title="">���̩��</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1756617/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1756617/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1756617/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-06-26 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/41" target="_blank" title="">��������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174927.png"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174050.png"><a href="soccer/team/13969" target="_blank" title="">����һ��</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1764703/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1764703/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1764703/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-06-26 19:40</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/543" target="_blank" title="">��������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160121104955.jpg"></td>
			<td>			
				
					3:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140327133627.gif"><a href="soccer/team/44" target="_blank" title="">�ൺ����</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1756612/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1756612/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1756612/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-06-26 19:45</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/4050" target="_blank" title="">�Ϻ�����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322175805.png"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322180048.png"><a href="soccer/team/16667" target="_blank" title="">�人׿��</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1756611/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1756611/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1756611/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_15" class="zstab" style="display: none;">
	<thead>
		<tr>
			<th width="127">ʱ��</th>
			<th width="165">����</th>
			<th width="33">�ȷ�</th>
			<th width="165">�Ͷ�</th>
			<th width="65">�볡</th>
			<th width="153">����</th>
			<th width="66">����</th>
			<!-- <th width="90">ʱ��</th>
            <th width="50">����</th>
            <th width="30">�ȷ�</th>
            <th width="50">�Ͷ�</th>
            <th width="45">�볡</th>
            <th width="65">����</th>
            <th width="55">����</th> -->
		</tr>
	</thead>

	
	
		
			<tbody><tr>
				
			<td>2013-06-29 15:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/44" target="_blank" title="">�ൺ����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140327133627.gif"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322171729.png"><a href="soccer/team/43" target="_blank" title="">��������</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				�ܰ���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1757056/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1757056/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1757056/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-06-29 19:45</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/7642" target="_blank" title="">�Ϻ��ϸ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322175313.png"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160121104955.jpg"><a href="soccer/team/543" target="_blank" title="">��������</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1757057/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1757057/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1757057/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-06-30 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/40" target="_blank" title="">ɽ��³��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140222132332.gif"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140225133203.jpg"><a href="soccer/team/3969" target="_blank" title="">�����˺�</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1757055/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1757055/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1757055/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-06-30 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/89" target="_blank" title="">���̩��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160122173710.png"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322175805.png"><a href="soccer/team/4050" target="_blank" title="">�Ϻ�����</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1757058/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1757058/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1757058/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-06-30 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/41" target="_blank" title="">��������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174927.png"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140225131744.jpg"><a href="soccer/team/528" target="_blank" title="">������̩</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1757060/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1757060/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1757060/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-06-30 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/542" target="_blank" title="">�����̳�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174601.png"></td>
			<td>			
				
					3:4
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174050.png"><a href="soccer/team/13969" target="_blank" title="">����һ��</a></td>
			<td>			
				
					2:2
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1757061/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1757061/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1757061/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-06-30 19:45</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/39" target="_blank" title="">�Ϻ��껨</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160202133545.png"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140211195608.jpg"><a href="soccer/team/16668" target="_blank" title="">���ݸ���</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1757059/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1757059/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1757059/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-07-01 19:45</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/16667" target="_blank" title="">�人׿��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322180048.png"></td>
			<td>			
				
					1:4
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322172236.png"><a href="soccer/team/535" target="_blank" title="">���ݺ��</a></td>
			<td>			
				
					1:3
							
			</td>
			<td>
			
				������
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1757062/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1757062/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1757062/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_16" class="zstab" style="display: none;">
	<thead>
		<tr>
			<th width="127">ʱ��</th>
			<th width="165">����</th>
			<th width="33">�ȷ�</th>
			<th width="165">�Ͷ�</th>
			<th width="65">�볡</th>
			<th width="153">����</th>
			<th width="66">����</th>
			<!-- <th width="90">ʱ��</th>
            <th width="50">����</th>
            <th width="30">�ȷ�</th>
            <th width="50">�Ͷ�</th>
            <th width="45">�볡</th>
            <th width="65">����</th>
            <th width="55">����</th> -->
		</tr>
	</thead>

	
	
		
			<tbody><tr>
				
			<td>2013-07-05 19:35</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/44" target="_blank" title="">�ൺ����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140327133627.gif"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140225133203.jpg"><a href="soccer/team/3969" target="_blank" title="">�����˺�</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1757460/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1757460/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1757460/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-07-06 16:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/41" target="_blank" title="">��������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174927.png"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140211195608.jpg"><a href="soccer/team/16668" target="_blank" title="">���ݸ���</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1757463/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1757463/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1757463/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-07-06 19:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/13969" target="_blank" title="">����һ��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174050.png"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140222132332.gif"><a href="soccer/team/40" target="_blank" title="">ɽ��³��</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1757461/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1757461/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1757461/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-07-06 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/528" target="_blank" title="">������̩</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140225131744.jpg"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174601.png"><a href="soccer/team/542" target="_blank" title="">�����̳�</a></td>
			<td>			
				
					2:1
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1757462/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1757462/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1757462/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-07-06 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/89" target="_blank" title="">���̩��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160122173710.png"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160202133545.png"><a href="soccer/team/39" target="_blank" title="">�Ϻ��껨</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1757464/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1757464/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1757464/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-07-06 19:45</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/4050" target="_blank" title="">�Ϻ�����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322175805.png"></td>
			<td>			
				
					0:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322172236.png"><a href="soccer/team/535" target="_blank" title="">���ݺ��</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				������
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1757458/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1757458/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1757458/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-07-06 19:45</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/16667" target="_blank" title="">�人׿��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322180048.png"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160121104955.jpg"><a href="soccer/team/543" target="_blank" title="">��������</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				�ܰ���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1757459/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1757459/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1757459/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-07-07 19:45</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/7642" target="_blank" title="">�Ϻ��ϸ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322175313.png"></td>
			<td>			
				
					0:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322171729.png"><a href="soccer/team/43" target="_blank" title="">��������</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1757465/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1757465/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1757465/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_17" class="zstab" style="display: none;">
	<thead>
		<tr>
			<th width="127">ʱ��</th>
			<th width="165">����</th>
			<th width="33">�ȷ�</th>
			<th width="165">�Ͷ�</th>
			<th width="65">�볡</th>
			<th width="153">����</th>
			<th width="66">����</th>
			<!-- <th width="90">ʱ��</th>
            <th width="50">����</th>
            <th width="30">�ȷ�</th>
            <th width="50">�Ͷ�</th>
            <th width="45">�볡</th>
            <th width="65">����</th>
            <th width="55">����</th> -->
		</tr>
	</thead>

	
	
		
			<tbody><tr>
				
			<td>2013-07-13 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/16668" target="_blank" title="">���ݸ���</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140211195608.jpg"></td>
			<td>			
				
					4:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174601.png"><a href="soccer/team/542" target="_blank" title="">�����̳�</a></td>
			<td>			
				
					2:1
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1757921/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1757921/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1757921/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-07-13 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/13969" target="_blank" title="">����һ��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174050.png"></td>
			<td>			
				
					3:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140327133627.gif"><a href="soccer/team/44" target="_blank" title="">�ൺ����</a></td>
			<td>			
				
					3:2
							
			</td>
			<td>
			
				һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1757922/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1757922/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1757922/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-07-13 19:45</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/39" target="_blank" title="">�Ϻ��껨</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160202133545.png"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322175805.png"><a href="soccer/team/4050" target="_blank" title="">�Ϻ�����</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1757920/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1757920/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1757920/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-07-14 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/89" target="_blank" title="">���̩��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160122173710.png"></td>
			<td>			
				
					3:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174927.png"><a href="soccer/team/41" target="_blank" title="">��������</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1757923/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1757923/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1757923/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-07-14 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/528" target="_blank" title="">������̩</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140225131744.jpg"></td>
			<td>			
				
					2:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140222132332.gif"><a href="soccer/team/40" target="_blank" title="">ɽ��³��</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1757924/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1757924/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1757924/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-07-14 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3969" target="_blank" title="">�����˺�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140225133203.jpg"></td>
			<td>			
				
					0:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322175313.png"><a href="soccer/team/7642" target="_blank" title="">�Ϻ��ϸ�</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1757925/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1757925/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1757925/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-07-14 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/43" target="_blank" title="">��������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322171729.png"></td>
			<td>			
				
					3:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322180048.png"><a href="soccer/team/16667" target="_blank" title="">�人׿��</a></td>
			<td>			
				
					2:1
							
			</td>
			<td>
			
				���/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1757926/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1757926/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1757926/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-07-14 19:40</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/543" target="_blank" title="">��������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160121104955.jpg"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322172236.png"><a href="soccer/team/535" target="_blank" title="">���ݺ��</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				��һ��/���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1757927/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1757927/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1757927/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_18" class="zstab" style="display: none;">
	<thead>
		<tr>
			<th width="127">ʱ��</th>
			<th width="165">����</th>
			<th width="33">�ȷ�</th>
			<th width="165">�Ͷ�</th>
			<th width="65">�볡</th>
			<th width="153">����</th>
			<th width="66">����</th>
			<!-- <th width="90">ʱ��</th>
            <th width="50">����</th>
            <th width="30">�ȷ�</th>
            <th width="50">�Ͷ�</th>
            <th width="45">�볡</th>
            <th width="65">����</th>
            <th width="55">����</th> -->
		</tr>
	</thead>

	
	
		
			<tbody><tr>
				
			<td>2013-07-31 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/44" target="_blank" title="">�ൺ����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140327133627.gif"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140225131744.jpg"><a href="soccer/team/528" target="_blank" title="">������̩</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1758991/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1758991/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1758991/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-07-31 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/542" target="_blank" title="">�����̳�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174601.png"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160122173710.png"><a href="soccer/team/89" target="_blank" title="">���̩��</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1758992/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1758992/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1758992/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-07-31 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/41" target="_blank" title="">��������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174927.png"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160202133545.png"><a href="soccer/team/39" target="_blank" title="">�Ϻ��껨</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1758993/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1758993/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1758993/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-07-31 19:45</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/16667" target="_blank" title="">�人׿��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322180048.png"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140225133203.jpg"><a href="soccer/team/3969" target="_blank" title="">�����˺�</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1758989/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1758989/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1758989/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-07-31 19:45</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/7642" target="_blank" title="">�Ϻ��ϸ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322175313.png"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174050.png"><a href="soccer/team/13969" target="_blank" title="">����һ��</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1758990/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1758990/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1758990/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-07-31 20:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/535" target="_blank" title="">���ݺ��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322172236.png"></td>
			<td>			
				
					3:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322171729.png"><a href="soccer/team/43" target="_blank" title="">��������</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1758988/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1758988/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1758988/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-08-01 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/40" target="_blank" title="">ɽ��³��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140222132332.gif"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140211195608.jpg"><a href="soccer/team/16668" target="_blank" title="">���ݸ���</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1758995/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1758995/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1758995/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-08-01 19:45</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/4050" target="_blank" title="">�Ϻ�����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322175805.png"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160121104955.jpg"><a href="soccer/team/543" target="_blank" title="">��������</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1758994/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1758994/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1758994/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_19" class="zstab" style="display: none;">
	<thead>
		<tr>
			<th width="127">ʱ��</th>
			<th width="165">����</th>
			<th width="33">�ȷ�</th>
			<th width="165">�Ͷ�</th>
			<th width="65">�볡</th>
			<th width="153">����</th>
			<th width="66">����</th>
			<!-- <th width="90">ʱ��</th>
            <th width="50">����</th>
            <th width="30">�ȷ�</th>
            <th width="50">�Ͷ�</th>
            <th width="45">�볡</th>
            <th width="65">����</th>
            <th width="55">����</th> -->
		</tr>
	</thead>

	
	
		
			<tbody><tr>
				
			<td>2013-08-03 19:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/13969" target="_blank" title="">����һ��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174050.png"></td>
			<td>			
				
					3:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322180048.png"><a href="soccer/team/16667" target="_blank" title="">�人׿��</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				һ��/���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1759175/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1759175/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1759175/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-08-03 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3969" target="_blank" title="">�����˺�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140225133203.jpg"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322172236.png"><a href="soccer/team/535" target="_blank" title="">���ݺ��</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				��һ��/���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1759176/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1759176/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1759176/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-08-04 16:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/41" target="_blank" title="">��������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174927.png"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322175805.png"><a href="soccer/team/4050" target="_blank" title="">�Ϻ�����</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1759177/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1759177/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1759177/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-08-04 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/89" target="_blank" title="">���̩��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160122173710.png"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140222132332.gif"><a href="soccer/team/40" target="_blank" title="">ɽ��³��</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1759178/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1759178/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1759178/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-08-04 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/16668" target="_blank" title="">���ݸ���</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140211195608.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140327133627.gif"><a href="soccer/team/44" target="_blank" title="">�ൺ����</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1759179/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1759179/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1759179/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-08-04 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/528" target="_blank" title="">������̩</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140225131744.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322175313.png"><a href="soccer/team/7642" target="_blank" title="">�Ϻ��ϸ�</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1759180/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1759180/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1759180/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-08-04 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/43" target="_blank" title="">��������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322171729.png"></td>
			<td>			
				
					3:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160121104955.jpg"><a href="soccer/team/543" target="_blank" title="">��������</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1759181/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1759181/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1759181/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-08-05 19:45</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/39" target="_blank" title="">�Ϻ��껨</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160202133545.png"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174601.png"><a href="soccer/team/542" target="_blank" title="">�����̳�</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1759182/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1759182/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1759182/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_30" class="zstab" style="display: none;">
	<thead>
		<tr>
			<th width="127">ʱ��</th>
			<th width="165">����</th>
			<th width="33">�ȷ�</th>
			<th width="165">�Ͷ�</th>
			<th width="65">�볡</th>
			<th width="153">����</th>
			<th width="66">����</th>
			<!-- <th width="90">ʱ��</th>
            <th width="50">����</th>
            <th width="30">�ȷ�</th>
            <th width="50">�Ͷ�</th>
            <th width="45">�볡</th>
            <th width="65">����</th>
            <th width="55">����</th> -->
		</tr>
	</thead>

	
	
		
			<tbody><tr>
				
			<td>2013-11-03 15:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/4050" target="_blank" title="">�Ϻ�����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322175805.png"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160122173710.png"><a href="soccer/team/89" target="_blank" title="">���̩��</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1764891/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1764891/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1764891/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-11-03 15:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/16668" target="_blank" title="">���ݸ���</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140211195608.jpg"></td>
			<td>			
				
					4:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160202133545.png"><a href="soccer/team/39" target="_blank" title="">�Ϻ��껨</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1764892/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1764892/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1764892/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-11-03 15:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/528" target="_blank" title="">������̩</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140225131744.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174927.png"><a href="soccer/team/41" target="_blank" title="">��������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1764893/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1764893/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1764893/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-11-03 15:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/13969" target="_blank" title="">����һ��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174050.png"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174601.png"><a href="soccer/team/542" target="_blank" title="">�����̳�</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1764894/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1764894/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1764894/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-11-03 15:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3969" target="_blank" title="">�����˺�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140225133203.jpg"></td>
			<td>			
				
					1:5
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140222132332.gif"><a href="soccer/team/40" target="_blank" title="">ɽ��³��</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1764895/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1764895/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1764895/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-11-03 15:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/43" target="_blank" title="">��������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322171729.png"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140327133627.gif"><a href="soccer/team/44" target="_blank" title="">�ൺ����</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1764896/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1764896/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1764896/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-11-03 15:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/543" target="_blank" title="">��������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160121104955.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322175313.png"><a href="soccer/team/7642" target="_blank" title="">�Ϻ��ϸ�</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1764897/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1764897/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1764897/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-11-03 15:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/535" target="_blank" title="">���ݺ��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322172236.png"></td>
			<td>			
				
					5:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322180048.png"><a href="soccer/team/16667" target="_blank" title="">�人׿��</a></td>
			<td>			
				
					3:0
							
			</td>
			<td>
			
				����/�����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1764898/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1764898/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1764898/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_29" class="zstab" style="display: none;">
	<thead>
		<tr>
			<th width="127">ʱ��</th>
			<th width="165">����</th>
			<th width="33">�ȷ�</th>
			<th width="165">�Ͷ�</th>
			<th width="65">�볡</th>
			<th width="153">����</th>
			<th width="66">����</th>
			<!-- <th width="90">ʱ��</th>
            <th width="50">����</th>
            <th width="30">�ȷ�</th>
            <th width="50">�Ͷ�</th>
            <th width="45">�볡</th>
            <th width="65">����</th>
            <th width="55">����</th> -->
		</tr>
	</thead>

	
	
		
			<tbody><tr>
				
			<td>2013-10-30 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/13969" target="_blank" title="">����һ��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174050.png"></td>
			<td>			
				
					3:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174927.png"><a href="soccer/team/41" target="_blank" title="">��������</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				һ��/���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1756615/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1756615/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1756615/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-10-30 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/16667" target="_blank" title="">�人׿��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322180048.png"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322175805.png"><a href="soccer/team/4050" target="_blank" title="">�Ϻ�����</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				�ܰ���/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1764698/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1764698/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1764698/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-10-30 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/7642" target="_blank" title="">�Ϻ��ϸ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322175313.png"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322172236.png"><a href="soccer/team/535" target="_blank" title="">���ݺ��</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1764699/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1764699/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1764699/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-10-30 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/44" target="_blank" title="">�ൺ����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140327133627.gif"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160121104955.jpg"><a href="soccer/team/543" target="_blank" title="">��������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1764700/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1764700/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1764700/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-10-30 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/40" target="_blank" title="">ɽ��³��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140222132332.gif"></td>
			<td>			
				
					1:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322171729.png"><a href="soccer/team/43" target="_blank" title="">��������</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1764701/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1764701/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1764701/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-10-30 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/542" target="_blank" title="">�����̳�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174601.png"></td>
			<td>			
				
					3:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140225133203.jpg"><a href="soccer/team/3969" target="_blank" title="">�����˺�</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				�ܰ���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1764702/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1764702/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1764702/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-10-30 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/39" target="_blank" title="">�Ϻ��껨</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160202133545.png"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140225131744.jpg"><a href="soccer/team/528" target="_blank" title="">������̩</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1764704/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1764704/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1764704/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-10-30 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/89" target="_blank" title="">���̩��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160122173710.png"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140211195608.jpg"><a href="soccer/team/16668" target="_blank" title="">���ݸ���</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1764705/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1764705/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1764705/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_28" class="zstab" style="display: none;">
	<thead>
		<tr>
			<th width="127">ʱ��</th>
			<th width="165">����</th>
			<th width="33">�ȷ�</th>
			<th width="165">�Ͷ�</th>
			<th width="65">�볡</th>
			<th width="153">����</th>
			<th width="66">����</th>
			<!-- <th width="90">ʱ��</th>
            <th width="50">����</th>
            <th width="30">�ȷ�</th>
            <th width="50">�Ͷ�</th>
            <th width="45">�볡</th>
            <th width="65">����</th>
            <th width="55">����</th> -->
		</tr>
	</thead>

	
	
		
			<tbody><tr>
				
			<td>2013-10-18 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/43" target="_blank" title="">��������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322171729.png"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174601.png"><a href="soccer/team/542" target="_blank" title="">�����̳�</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				һ��/���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1764368/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1764368/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1764368/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-10-19 15:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/13969" target="_blank" title="">����һ��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174050.png"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160202133545.png"><a href="soccer/team/39" target="_blank" title="">�Ϻ��껨</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1764370/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1764370/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1764370/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-10-19 16:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3969" target="_blank" title="">�����˺�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140225133203.jpg"></td>
			<td>			
				
					4:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174927.png"><a href="soccer/team/41" target="_blank" title="">��������</a></td>
			<td>			
				
					2:1
							
			</td>
			<td>
			
				���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1764371/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1764371/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1764371/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-10-19 19:40</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/543" target="_blank" title="">��������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160121104955.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140222132332.gif"><a href="soccer/team/40" target="_blank" title="">ɽ��³��</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1764372/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1764372/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1764372/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-10-19 19:45</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/4050" target="_blank" title="">�Ϻ�����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322175805.png"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140211195608.jpg"><a href="soccer/team/16668" target="_blank" title="">���ݸ���</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1764369/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1764369/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1764369/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-10-20 15:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/528" target="_blank" title="">������̩</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140225131744.jpg"></td>
			<td>			
				
					3:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160122173710.png"><a href="soccer/team/89" target="_blank" title="">���̩��</a></td>
			<td>			
				
					2:1
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1764373/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1764373/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1764373/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-10-20 15:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/16667" target="_blank" title="">�人׿��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322180048.png"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322175313.png"><a href="soccer/team/7642" target="_blank" title="">�Ϻ��ϸ�</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				�ܰ���/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1764375/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1764375/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1764375/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-10-20 20:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/535" target="_blank" title="">���ݺ��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322172236.png"></td>
			<td>			
				
					3:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140327133627.gif"><a href="soccer/team/44" target="_blank" title="">�ൺ����</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1764374/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1764374/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1764374/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_27" class="zstab" style="display: none;">
	<thead>
		<tr>
			<th width="127">ʱ��</th>
			<th width="165">����</th>
			<th width="33">�ȷ�</th>
			<th width="165">�Ͷ�</th>
			<th width="65">�볡</th>
			<th width="153">����</th>
			<th width="66">����</th>
			<!-- <th width="90">ʱ��</th>
            <th width="50">����</th>
            <th width="30">�ȷ�</th>
            <th width="50">�Ͷ�</th>
            <th width="45">�볡</th>
            <th width="65">����</th>
            <th width="55">����</th> -->
		</tr>
	</thead>

	
	
		
			<tbody><tr>
				
			<td>2013-10-05 15:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/44" target="_blank" title="">�ൺ����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140327133627.gif"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322180048.png"><a href="soccer/team/16667" target="_blank" title="">�人׿��</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1763699/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1763699/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1763699/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-10-05 16:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/16668" target="_blank" title="">���ݸ���</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140211195608.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140225131744.jpg"><a href="soccer/team/528" target="_blank" title="">������̩</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1763703/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1763703/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1763703/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-10-05 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/542" target="_blank" title="">�����̳�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174601.png"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160121104955.jpg"><a href="soccer/team/543" target="_blank" title="">��������</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				�ܰ���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1763700/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1763700/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1763700/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-10-05 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/41" target="_blank" title="">��������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174927.png"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322171729.png"><a href="soccer/team/43" target="_blank" title="">��������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				��һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1763701/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1763701/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1763701/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-10-05 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/89" target="_blank" title="">���̩��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160122173710.png"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174050.png"><a href="soccer/team/13969" target="_blank" title="">����һ��</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1763702/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1763702/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1763702/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-10-05 19:45</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/7642" target="_blank" title="">�Ϻ��ϸ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322175313.png"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322175805.png"><a href="soccer/team/4050" target="_blank" title="">�Ϻ�����</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				�ܰ���/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1763698/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1763698/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1763698/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-10-06 15:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/40" target="_blank" title="">ɽ��³��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140222132332.gif"></td>
			<td>			
				
					2:4
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322172236.png"><a href="soccer/team/535" target="_blank" title="">���ݺ��</a></td>
			<td>			
				
					1:3
							
			</td>
			<td>
			
				�ܰ���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1763704/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1763704/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1763704/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-10-06 19:45</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/39" target="_blank" title="">�Ϻ��껨</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160202133545.png"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140225133203.jpg"><a href="soccer/team/3969" target="_blank" title="">�����˺�</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1763705/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1763705/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1763705/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_26" class="zstab" style="display: none;">
	<thead>
		<tr>
			<th width="127">ʱ��</th>
			<th width="165">����</th>
			<th width="33">�ȷ�</th>
			<th width="165">�Ͷ�</th>
			<th width="65">�볡</th>
			<th width="153">����</th>
			<th width="66">����</th>
			<!-- <th width="90">ʱ��</th>
            <th width="50">����</th>
            <th width="30">�ȷ�</th>
            <th width="50">�Ͷ�</th>
            <th width="45">�볡</th>
            <th width="65">����</th>
            <th width="55">����</th> -->
		</tr>
	</thead>

	
	
		
			<tbody><tr>
				
			<td>2013-09-27 19:45</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/7642" target="_blank" title="">�Ϻ��ϸ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322175313.png"></td>
			<td>			
				
					6:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140327133627.gif"><a href="soccer/team/44" target="_blank" title="">�ൺ����</a></td>
			<td>			
				
					3:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1763291/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1763291/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1763291/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-09-28 19:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/13969" target="_blank" title="">����һ��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174050.png"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140211195608.jpg"><a href="soccer/team/16668" target="_blank" title="">���ݸ���</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1763292/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1763292/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1763292/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-09-28 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3969" target="_blank" title="">�����˺�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140225133203.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160122173710.png"><a href="soccer/team/89" target="_blank" title="">���̩��</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1763290/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1763290/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1763290/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-09-28 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/43" target="_blank" title="">��������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322171729.png"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160202133545.png"><a href="soccer/team/39" target="_blank" title="">�Ϻ��껨</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				һ��/���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1763293/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1763293/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1763293/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-09-28 19:40</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/543" target="_blank" title="">��������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160121104955.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174927.png"><a href="soccer/team/41" target="_blank" title="">��������</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				һ��/���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1763294/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1763294/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1763294/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-09-28 20:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/535" target="_blank" title="">���ݺ��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322172236.png"></td>
			<td>			
				
					4:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174601.png"><a href="soccer/team/542" target="_blank" title="">�����̳�</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				һ��/���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1763297/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1763297/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1763297/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-09-29 15:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/4050" target="_blank" title="">�Ϻ�����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322175805.png"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140225131744.jpg"><a href="soccer/team/528" target="_blank" title="">������̩</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1763296/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1763296/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1763296/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-09-29 19:40</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/16667" target="_blank" title="">�人׿��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322180048.png"></td>
			<td>			
				
					0:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140222132332.gif"><a href="soccer/team/40" target="_blank" title="">ɽ��³��</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				��һ��/���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1763295/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1763295/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1763295/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_25" class="zstab" style="display: none;">
	<thead>
		<tr>
			<th width="127">ʱ��</th>
			<th width="165">����</th>
			<th width="33">�ȷ�</th>
			<th width="165">�Ͷ�</th>
			<th width="65">�볡</th>
			<th width="153">����</th>
			<th width="66">����</th>
			<!-- <th width="90">ʱ��</th>
            <th width="50">����</th>
            <th width="30">�ȷ�</th>
            <th width="50">�Ͷ�</th>
            <th width="45">�볡</th>
            <th width="65">����</th>
            <th width="55">����</th> -->
		</tr>
	</thead>

	
	
		
			<tbody><tr>
				
			<td>2013-09-20 19:45</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/7642" target="_blank" title="">�Ϻ��ϸ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322175313.png"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140222132332.gif"><a href="soccer/team/40" target="_blank" title="">ɽ��³��</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1762884/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1762884/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1762884/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-09-21 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/542" target="_blank" title="">�����̳�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174601.png"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322180048.png"><a href="soccer/team/16667" target="_blank" title="">�人׿��</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				һ��/���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1762885/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1762885/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1762885/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-09-21 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/89" target="_blank" title="">���̩��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160122173710.png"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322171729.png"><a href="soccer/team/43" target="_blank" title="">��������</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1762888/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1762888/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1762888/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-09-21 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/528" target="_blank" title="">������̩</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140225131744.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174050.png"><a href="soccer/team/13969" target="_blank" title="">����һ��</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1762889/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1762889/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1762889/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-09-21 19:45</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/39" target="_blank" title="">�Ϻ��껨</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160202133545.png"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160121104955.jpg"><a href="soccer/team/543" target="_blank" title="">��������</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1762887/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1762887/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1762887/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-09-22 16:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/16668" target="_blank" title="">���ݸ���</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140211195608.jpg"></td>
			<td>			
				
					3:5
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140225133203.jpg"><a href="soccer/team/3969" target="_blank" title="">�����˺�</a></td>
			<td>			
				
					1:3
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1762891/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1762891/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1762891/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-09-22 19:45</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/4050" target="_blank" title="">�Ϻ�����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322175805.png"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140327133627.gif"><a href="soccer/team/44" target="_blank" title="">�ൺ����</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1762890/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1762890/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1762890/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-10-15 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/41" target="_blank" title="">��������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174927.png"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322172236.png"><a href="soccer/team/535" target="_blank" title="">���ݺ��</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				��һ��/���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1762886/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1762886/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1762886/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_24" class="zstab" style="display: none;">
	<thead>
		<tr>
			<th width="127">ʱ��</th>
			<th width="165">����</th>
			<th width="33">�ȷ�</th>
			<th width="165">�Ͷ�</th>
			<th width="65">�볡</th>
			<th width="153">����</th>
			<th width="66">����</th>
			<!-- <th width="90">ʱ��</th>
            <th width="50">����</th>
            <th width="30">�ȷ�</th>
            <th width="50">�Ͷ�</th>
            <th width="45">�볡</th>
            <th width="65">����</th>
            <th width="55">����</th> -->
		</tr>
	</thead>

	
	
		
			<tbody><tr>
				
			<td>2013-09-13 20:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/535" target="_blank" title="">���ݺ��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322172236.png"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160202133545.png"><a href="soccer/team/39" target="_blank" title="">�Ϻ��껨</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				���/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1762395/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1762395/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1762395/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-09-14 15:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/16667" target="_blank" title="">�人׿��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322180048.png"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174927.png"><a href="soccer/team/41" target="_blank" title="">��������</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1762396/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1762396/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1762396/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-09-14 15:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/44" target="_blank" title="">�ൺ����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140327133627.gif"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140222132332.gif"><a href="soccer/team/40" target="_blank" title="">ɽ��³��</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				�ܰ���/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1762397/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1762397/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1762397/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-09-14 16:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/43" target="_blank" title="">��������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322171729.png"></td>
			<td>			
				
					6:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140211195608.jpg"><a href="soccer/team/16668" target="_blank" title="">���ݸ���</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1762394/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1762394/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1762394/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-09-14 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3969" target="_blank" title="">�����˺�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140225133203.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140225131744.jpg"><a href="soccer/team/528" target="_blank" title="">������̩</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1762392/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1762392/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1762392/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-09-14 19:40</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/543" target="_blank" title="">��������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160121104955.jpg"></td>
			<td>			
				
					2:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160122173710.png"><a href="soccer/team/89" target="_blank" title="">���̩��</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1762393/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1762393/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1762393/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-09-15 15:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/4050" target="_blank" title="">�Ϻ�����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322175805.png"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174050.png"><a href="soccer/team/13969" target="_blank" title="">����һ��</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1762398/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1762398/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1762398/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-09-15 19:45</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/7642" target="_blank" title="">�Ϻ��ϸ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322175313.png"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174601.png"><a href="soccer/team/542" target="_blank" title="">�����̳�</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1762399/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1762399/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1762399/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_23" class="zstab" style="display: none;">
	<thead>
		<tr>
			<th width="127">ʱ��</th>
			<th width="165">����</th>
			<th width="33">�ȷ�</th>
			<th width="165">�Ͷ�</th>
			<th width="65">�볡</th>
			<th width="153">����</th>
			<th width="66">����</th>
			<!-- <th width="90">ʱ��</th>
            <th width="50">����</th>
            <th width="30">�ȷ�</th>
            <th width="50">�Ͷ�</th>
            <th width="45">�볡</th>
            <th width="65">����</th>
            <th width="55">����</th> -->
		</tr>
	</thead>

	
	
		
			<tbody><tr>
				
			<td>2013-08-30 19:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/13969" target="_blank" title="">����һ��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174050.png"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140225133203.jpg"><a href="soccer/team/3969" target="_blank" title="">�����˺�</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1761290/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1761290/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1761290/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-08-30 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/40" target="_blank" title="">ɽ��³��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140222132332.gif"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322175805.png"><a href="soccer/team/4050" target="_blank" title="">�Ϻ�����</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1761285/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1761285/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1761285/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-08-30 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/542" target="_blank" title="">�����̳�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174601.png"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140327133627.gif"><a href="soccer/team/44" target="_blank" title="">�ൺ����</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1761286/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1761286/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1761286/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-08-30 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/16668" target="_blank" title="">���ݸ���</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140211195608.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160121104955.jpg"><a href="soccer/team/543" target="_blank" title="">��������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1761288/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1761288/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1761288/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-08-30 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/528" target="_blank" title="">������̩</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140225131744.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322171729.png"><a href="soccer/team/43" target="_blank" title="">��������</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				�ܰ���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1761289/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1761289/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1761289/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-08-31 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/89" target="_blank" title="">���̩��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160122173710.png"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322172236.png"><a href="soccer/team/535" target="_blank" title="">���ݺ��</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				��һ��/���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1761292/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1761292/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1761292/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-08-31 19:45</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/39" target="_blank" title="">�Ϻ��껨</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160202133545.png"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322180048.png"><a href="soccer/team/16667" target="_blank" title="">�人׿��</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				һ��/���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1761291/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1761291/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1761291/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-10-11 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/41" target="_blank" title="">��������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174927.png"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322175313.png"><a href="soccer/team/7642" target="_blank" title="">�Ϻ��ϸ�</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1761287/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1761287/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1761287/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_22" class="zstab" style="display: none;">
	<thead>
		<tr>
			<th width="127">ʱ��</th>
			<th width="165">����</th>
			<th width="33">�ȷ�</th>
			<th width="165">�Ͷ�</th>
			<th width="65">�볡</th>
			<th width="153">����</th>
			<th width="66">����</th>
			<!-- <th width="90">ʱ��</th>
            <th width="50">����</th>
            <th width="30">�ȷ�</th>
            <th width="50">�Ͷ�</th>
            <th width="45">�볡</th>
            <th width="65">����</th>
            <th width="55">����</th> -->
		</tr>
	</thead>

	
	
		
			<tbody><tr>
				
			<td>2013-08-23 19:45</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/4050" target="_blank" title="">�Ϻ�����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322175805.png"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140225133203.jpg"><a href="soccer/team/3969" target="_blank" title="">�����˺�</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1760888/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1760888/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1760888/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-08-24 15:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/44" target="_blank" title="">�ൺ����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140327133627.gif"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174927.png"><a href="soccer/team/41" target="_blank" title="">��������</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1760891/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1760891/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1760891/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-08-24 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/40" target="_blank" title="">ɽ��³��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140222132332.gif"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174601.png"><a href="soccer/team/542" target="_blank" title="">�����̳�</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				һ��/���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1760892/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1760892/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1760892/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-08-24 19:45</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/16667" target="_blank" title="">�人׿��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322180048.png"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160122173710.png"><a href="soccer/team/89" target="_blank" title="">���̩��</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				�ܰ���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1760889/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1760889/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1760889/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-08-24 19:45</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/7642" target="_blank" title="">�Ϻ��ϸ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322175313.png"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160202133545.png"><a href="soccer/team/39" target="_blank" title="">�Ϻ��껨</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1760890/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1760890/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1760890/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-08-25 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/43" target="_blank" title="">��������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322171729.png"></td>
			<td>			
				
					4:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174050.png"><a href="soccer/team/13969" target="_blank" title="">����һ��</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1760893/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1760893/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1760893/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-08-25 19:40</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/543" target="_blank" title="">��������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160121104955.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140225131744.jpg"><a href="soccer/team/528" target="_blank" title="">������̩</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1760894/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1760894/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1760894/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-08-25 20:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/535" target="_blank" title="">���ݺ��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322172236.png"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140211195608.jpg"><a href="soccer/team/16668" target="_blank" title="">���ݸ���</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1760895/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1760895/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1760895/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_21" class="zstab" style="display: none;">
	<thead>
		<tr>
			<th width="127">ʱ��</th>
			<th width="165">����</th>
			<th width="33">�ȷ�</th>
			<th width="165">�Ͷ�</th>
			<th width="65">�볡</th>
			<th width="153">����</th>
			<th width="66">����</th>
			<!-- <th width="90">ʱ��</th>
            <th width="50">����</th>
            <th width="30">�ȷ�</th>
            <th width="50">�Ͷ�</th>
            <th width="45">�볡</th>
            <th width="65">����</th>
            <th width="55">����</th> -->
		</tr>
	</thead>

	
	
		
			<tbody><tr>
				
			<td>2013-08-16 19:35</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/528" target="_blank" title="">������̩</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140225131744.jpg"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322172236.png"><a href="soccer/team/535" target="_blank" title="">���ݺ��</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				��һ��/���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1760337/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1760337/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1760337/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-08-17 19:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/13969" target="_blank" title="">����һ��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174050.png"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160121104955.jpg"><a href="soccer/team/543" target="_blank" title="">��������</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1760338/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1760338/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1760338/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-08-17 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/41" target="_blank" title="">��������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174927.png"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140222132332.gif"><a href="soccer/team/40" target="_blank" title="">ɽ��³��</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1760334/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1760334/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1760334/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-08-17 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/89" target="_blank" title="">���̩��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160122173710.png"></td>
			<td>			
				
					2:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322175313.png"><a href="soccer/team/7642" target="_blank" title="">�Ϻ��ϸ�</a></td>
			<td>			
				
					1:2
							
			</td>
			<td>
			
				һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1760336/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1760336/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1760336/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-08-17 19:45</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/39" target="_blank" title="">�Ϻ��껨</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160202133545.png"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140327133627.gif"><a href="soccer/team/44" target="_blank" title="">�ൺ����</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1760335/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1760335/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1760335/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-08-18 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3969" target="_blank" title="">�����˺�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140225133203.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322171729.png"><a href="soccer/team/43" target="_blank" title="">��������</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1760333/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1760333/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1760333/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-08-18 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/542" target="_blank" title="">�����̳�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174601.png"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322175805.png"><a href="soccer/team/4050" target="_blank" title="">�Ϻ�����</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1760339/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1760339/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1760339/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-08-18 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/16668" target="_blank" title="">���ݸ���</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140211195608.jpg"></td>
			<td>			
				
					5:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322180048.png"><a href="soccer/team/16667" target="_blank" title="">�人׿��</a></td>
			<td>			
				
					3:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1760340/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1760340/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1760340/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_20" class="zstab">
	<thead>
		<tr>
			<th width="127">ʱ��</th>
			<th width="165">����</th>
			<th width="33">�ȷ�</th>
			<th width="165">�Ͷ�</th>
			<th width="65">�볡</th>
			<th width="153">����</th>
			<th width="66">����</th>
			<!-- <th width="90">ʱ��</th>
            <th width="50">����</th>
            <th width="30">�ȷ�</th>
            <th width="50">�Ͷ�</th>
            <th width="45">�볡</th>
            <th width="65">����</th>
            <th width="55">����</th> -->
		</tr>
	</thead>

	
	
		
			<tbody><tr>
				
			<td>2013-08-10 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/40" target="_blank" title="">ɽ��³��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140222132332.gif"></td>
			<td>			
				
					3:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160202133545.png"><a href="soccer/team/39" target="_blank" title="">�Ϻ��껨</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				һ��/���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1759783/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1759783/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1759783/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-08-10 19:35</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/16667" target="_blank" title="">�人׿��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322180048.png"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140225131744.jpg"><a href="soccer/team/528" target="_blank" title="">������̩</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1759782/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1759782/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1759782/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-08-10 19:45</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/4050" target="_blank" title="">�Ϻ�����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322175805.png"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322171729.png"><a href="soccer/team/43" target="_blank" title="">��������</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				��һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1759781/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1759781/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1759781/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-08-11 19:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/542" target="_blank" title="">�����̳�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174601.png"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174927.png"><a href="soccer/team/41" target="_blank" title="">��������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1759786/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1759786/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1759786/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-08-11 19:40</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/543" target="_blank" title="">��������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160121104955.jpg"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140225133203.jpg"><a href="soccer/team/3969" target="_blank" title="">�����˺�</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1759784/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1759784/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1759784/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-08-11 19:45</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/7642" target="_blank" title="">�Ϻ��ϸ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322175313.png"></td>
			<td>			
				
					0:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140211195608.jpg"><a href="soccer/team/16668" target="_blank" title="">���ݸ���</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1759785/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1759785/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1759785/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2013-08-12 20:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/535" target="_blank" title="">���ݺ��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322172236.png"></td>
			<td>			
				
					3:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174050.png"><a href="soccer/team/13969" target="_blank" title="">����һ��</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1759787/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1759787/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1759787/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2013-10-12 15:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/44" target="_blank" title="">�ൺ����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140327133627.gif"></td>
			<td>			
				
					4:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160122173710.png"><a href="soccer/team/89" target="_blank" title="">���̩��</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1759788/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1759788/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1759788/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
</tbody></table>


</div>
		<div class="league_right_022" id="matchInfofj">
		</div>
	</div>
	
	<!-- ���ְ�--------------start -->
	
	<div id="hideList">
	 	<div class="table_out">
			<div class="table_head">
				<span>2013�г����ְ�</span>
				<ul class="tabs1" id="tabs1">
	                <li class="cur" value="1">�ܰ�</li>
	                <li value="2">����</li>
	                <li value="3">�ͳ�</li>
	                <li value="4">������</li>
					<li value="5">�ϰ볡</li>				
					<li value="6">�°볡</li>				
				</ul>
			</div>
			<style>
				.tabs1{ overflow: hidden;position: absolute;right: 10px;top: 0;}
				.tabs1 li{margin-right:4px;}
			</style>
	          <ul class="tabs1_main_ul" id="tabs1_main_1" style="display:block;">
	          		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="zstab">
						


	<thead>
              <tr>
                <th width="50">����</th>
                <th width="140">�������</th>
                <th width="40">��</th>
                <th width="40">ʤ</th>
                <th width="40">ƽ</th>
                <th width="40">��</th>
                <th width="40">��</th>
                <th width="40">ʧ</th>
                <th width="40">��</th>
                <th width="50">����</th>
                <th width="50">��ʧ</th>
                <th width="50">ʤ��</th>
                <th width="50">ƽ��</th>
                <th width="50">����</th>
                <th width="40">����</th>
              </tr>
     </thead>						
			
						
						
							
							
							
								
							
								<tbody><tr>
							
							
									<td class="">
										<b class="no1" style="background-color: #f9792b">1</b></td>										
									<td class="team_logo">
										 
										<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322172236.png">
										
									<a href="soccer/team/535" title="���ݺ��" target="_blank">���ݺ��</a>
											</td>	
				
											
									<td>30</td>				
									<td>24</td>
									<td>5</td>
									<td>1</td>
									<td>78</td>
									<td>18</td>
									<td>60</td>
									<td>2.6</td>
									<td>0.6</td>				
									<td>80%</td>
									<td>17%</td>
									<td>3%</td>
									<td>77</td>
							
								</tr>
							
							
							
						
							
							
							
								
							
							
								<tr class="shuangtr">
							
									<td class="">
										<b class="no1" style="background-color: #f9792b">2</b></td>										
									<td class="team_logo">
										 
										<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140222132332.gif">
										
									<a href="soccer/team/40" title="ɽ��³��" target="_blank">ɽ��³��</a>
											</td>	
				
											
									<td>30</td>				
									<td>18</td>
									<td>5</td>
									<td>7</td>
									<td>55</td>
									<td>35</td>
									<td>20</td>
									<td>1.83</td>
									<td>1.17</td>				
									<td>60%</td>
									<td>17%</td>
									<td>23%</td>
									<td>59</td>
							
								</tr>
							
							
							
						
							
							
							
								
							
								<tr>
							
							
									<td class="">
										<b class="no1" style="background-color: #a2e76f">3</b></td>										
									<td class="team_logo">
										 
										<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322171729.png">
										
									<a href="soccer/team/43" title="��������" target="_blank">��������</a>
											</td>	
				
											
									<td>30</td>				
									<td>14</td>
									<td>9</td>
									<td>7</td>
									<td>54</td>
									<td>31</td>
									<td>23</td>
									<td>1.8</td>
									<td>1.03</td>				
									<td>47%</td>
									<td>30%</td>
									<td>23%</td>
									<td>51</td>
							
								</tr>
							
							
							
						
							
							
							
								
							
							
								<tr class="shuangtr">
							
									<td class="">
										<b class="no1" style="background-color: #f9792b">4</b></td>										
									<td class="team_logo">
										 
										<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160202133545.png">
										
									<a href="soccer/team/39" title="�Ϻ��껨" target="_blank">�Ϻ��껨</a>
										
											<span style="color: #ff0000;">(��-6��)</span>
											</td>	
				
											
									<td>30</td>				
									<td>11</td>
									<td>11</td>
									<td>8</td>
									<td>36</td>
									<td>36</td>
									<td>0</td>
									<td>1.2</td>
									<td>1.2</td>				
									<td>37%</td>
									<td>37%</td>
									<td>27%</td>
									<td>50</td>
							
								</tr>
							
							
							
						
							
							
							
								
							
								<tr>
							
							
									<td class="">
										<b class="no1">5</b></td>										
									<td class="team_logo">
										 
										<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160122173710.png">
										
									<a href="soccer/team/89" title="���̩��" target="_blank">���̩��</a>
										
											<span style="color: #ff0000;">(��-6��)</span>
											</td>	
				
											
									<td>30</td>				
									<td>11</td>
									<td>7</td>
									<td>12</td>
									<td>35</td>
									<td>39</td>
									<td>-4</td>
									<td>1.17</td>
									<td>1.3</td>				
									<td>37%</td>
									<td>23%</td>
									<td>40%</td>
									<td>46</td>
							
								</tr>
							
							
							
						
							
							
							
								
							
							
								<tr class="shuangtr">
							
									<td class="">
										<b class="no1">6</b></td>										
									<td class="team_logo">
										 
										<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140225133203.jpg">
										
									<a href="soccer/team/3969" title="�����˺�" target="_blank">�����˺�</a>
											</td>	
				
											
									<td>30</td>				
									<td>11</td>
									<td>11</td>
									<td>8</td>
									<td>40</td>
									<td>41</td>
									<td>-1</td>
									<td>1.33</td>
									<td>1.37</td>				
									<td>37%</td>
									<td>37%</td>
									<td>27%</td>
									<td>44</td>
							
								</tr>
							
							
							
						
							
							
							
								
							
								<tr>
							
							
									<td class="">
										<b class="no1">7</b></td>										
									<td class="team_logo">
										 
										<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174050.png">
										
									<a href="soccer/team/13969" title="����һ��" target="_blank">����һ��</a>
											</td>	
				
											
									<td>30</td>				
									<td>11</td>
									<td>8</td>
									<td>11</td>
									<td>40</td>
									<td>43</td>
									<td>-3</td>
									<td>1.33</td>
									<td>1.43</td>				
									<td>37%</td>
									<td>27%</td>
									<td>37%</td>
									<td>41</td>
							
								</tr>
							
							
							
						
							
							
							
								
							
							
								<tr class="shuangtr">
							
									<td class="">
										<b class="no1">8</b></td>										
									<td class="team_logo">
										 
										<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140211195608.jpg">
										
									<a href="soccer/team/16668" title="���ݸ���" target="_blank">���ݸ���</a>
											</td>	
				
											
									<td>30</td>				
									<td>11</td>
									<td>7</td>
									<td>12</td>
									<td>45</td>
									<td>47</td>
									<td>-2</td>
									<td>1.5</td>
									<td>1.57</td>				
									<td>37%</td>
									<td>23%</td>
									<td>40%</td>
									<td>40</td>
							
								</tr>
							
							
							
						
							
							
							
								
							
								<tr>
							
							
									<td class="">
										<b class="no1">9</b></td>										
									<td class="team_logo">
										 
										<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322175805.png">
										
									<a href="soccer/team/4050" title="�Ϻ�����" target="_blank">�Ϻ�����</a>
											</td>	
				
											
									<td>30</td>				
									<td>11</td>
									<td>7</td>
									<td>12</td>
									<td>31</td>
									<td>42</td>
									<td>-11</td>
									<td>1.03</td>
									<td>1.4</td>				
									<td>37%</td>
									<td>23%</td>
									<td>40%</td>
									<td>40</td>
							
								</tr>
							
							
							
						
							
							
							
								
							
							
								<tr class="shuangtr">
							
									<td class="">
										<b class="no1">10</b></td>										
									<td class="team_logo">
										 
										<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322175313.png">
										
									<a href="soccer/team/7642" title="�Ϻ��ϸ�" target="_blank">�Ϻ��ϸ�</a>
											</td>	
				
											
									<td>30</td>				
									<td>10</td>
									<td>7</td>
									<td>13</td>
									<td>38</td>
									<td>35</td>
									<td>3</td>
									<td>1.27</td>
									<td>1.17</td>				
									<td>33%</td>
									<td>23%</td>
									<td>43%</td>
									<td>37</td>
							
								</tr>
							
							
							
						
							
							
							
								
							
								<tr>
							
							
									<td class="">
										<b class="no1">11</b></td>										
									<td class="team_logo">
										 
										<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174927.png">
										
									<a href="soccer/team/41" title="��������" target="_blank">��������</a>
											</td>	
				
											
									<td>30</td>				
									<td>8</td>
									<td>11</td>
									<td>11</td>
									<td>35</td>
									<td>44</td>
									<td>-9</td>
									<td>1.17</td>
									<td>1.47</td>				
									<td>27%</td>
									<td>37%</td>
									<td>37%</td>
									<td>35</td>
							
								</tr>
							
							
							
						
							
							
							
								
							
							
								<tr class="shuangtr">
							
									<td class="">
										<b class="no1">12</b></td>										
									<td class="team_logo">
										 
										<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174601.png">
										
									<a href="soccer/team/542" title="�����̳�" target="_blank">�����̳�</a>
											</td>	
				
											
									<td>30</td>				
									<td>8</td>
									<td>10</td>
									<td>12</td>
									<td>34</td>
									<td>42</td>
									<td>-8</td>
									<td>1.13</td>
									<td>1.4</td>				
									<td>27%</td>
									<td>33%</td>
									<td>40%</td>
									<td>34</td>
							
								</tr>
							
							
							
						
							
							
							
								
							
								<tr>
							
							
									<td class="">
										<b class="no1">13</b></td>										
									<td class="team_logo">
										 
										<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160121104955.jpg">
										
									<a href="soccer/team/543" title="��������" target="_blank">��������</a>
											</td>	
				
											
									<td>30</td>				
									<td>7</td>
									<td>11</td>
									<td>12</td>
									<td>32</td>
									<td>39</td>
									<td>-7</td>
									<td>1.07</td>
									<td>1.3</td>				
									<td>23%</td>
									<td>37%</td>
									<td>40%</td>
									<td>32</td>
							
								</tr>
							
							
							
						
							
							
							
								
							
							
								<tr class="shuangtr">
							
									<td class="">
										<b class="no1">14</b></td>										
									<td class="team_logo">
										 
										<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140225131744.jpg">
										
									<a href="soccer/team/528" title="������̩" target="_blank">������̩</a>
											</td>	
				
											
									<td>30</td>				
									<td>8</td>
									<td>8</td>
									<td>14</td>
									<td>29</td>
									<td>41</td>
									<td>-12</td>
									<td>0.97</td>
									<td>1.37</td>				
									<td>27%</td>
									<td>27%</td>
									<td>47%</td>
									<td>32</td>
							
								</tr>
							
							
							
						
							
							
							
								
							
								<tr>
							
							
									<td class="">
										<b class="no1" style="background-color: #B1A7A7">15</b></td>										
									<td class="team_logo">
										 
										<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140327133627.gif">
										
									<a href="soccer/team/44" title="�ൺ����" target="_blank">�ൺ����</a>
											</td>	
				
											
									<td>30</td>				
									<td>7</td>
									<td>10</td>
									<td>13</td>
									<td>26</td>
									<td>41</td>
									<td>-15</td>
									<td>0.87</td>
									<td>1.37</td>				
									<td>23%</td>
									<td>33%</td>
									<td>43%</td>
									<td>31</td>
							
								</tr>
							
							
							
						
							
							
							
								
							
							
								<tr class="shuangtr">
							
									<td class="">
										<b class="no1" style="background-color: #B1A7A7">16</b></td>										
									<td class="team_logo">
										 
										<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322180048.png">
										
									<a href="soccer/team/16667" title="�人׿��" target="_blank">�人׿��</a>
											</td>	
				
											
									<td>30</td>				
									<td>3</td>
									<td>7</td>
									<td>20</td>
									<td>24</td>
									<td>58</td>
									<td>-34</td>
									<td>0.8</td>
									<td>1.93</td>				
									<td>10%</td>
									<td>23%</td>
									<td>67%</td>
									<td>16</td>
							
								</tr>
							
							
							
						
	
					</tbody></table>	
					
				<div class="tuli" style="margin:0;position:absolute;bottom:-20px;left:22px;">
									
						<b style="background:#f9792b;margin:5px;"></b><span>�ǹڱ��ʸ�</span>
									
						<b style="background:#a2e76f;margin:5px;"></b><span>�ǹڱ�����</span>
									
						<b style="background:#B1A7A7;margin:5px;"></b><span>�������</span>
					
				</div>
			
	          </ul>          
	          <ul class="tabs1_main_ul" id="tabs1_main_2" style="display: none;">
					<table width="100%" border="0" cellspacing="0" cellpadding="0" class="zstab">
						


	<thead>
              <tr>
                <th width="50">����</th>
                <th width="140">�������</th>
                <th width="40">��</th>
                <th width="40">ʤ</th>
                <th width="40">ƽ</th>
                <th width="40">��</th>
                <th width="40">��</th>
                <th width="40">ʧ</th>
                <th width="40">��</th>
                <th width="50">����</th>
                <th width="50">��ʧ</th>
                <th width="50">ʤ��</th>
                <th width="50">ƽ��</th>
                <th width="50">����</th>
                <th width="40">����</th>
              </tr>
     </thead>
							
						
							
							
								


	
		
			<tbody><tr>
				
				<td width="70"><b class="no1">1</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322172236.png"><a href="soccer/team/535" title="���ݺ��" target="_blank">���ݺ��</a>
					
					</td>		
				<td width="40">15</td>				
				<td width="40">14</td>
				<td width="40">1</td>
				<td width="40">0</td>
				<td width="40">47</td>
				<td width="40">5</td>
				<td width="40">42</td>
				<td width="50">3.13</td>
				<td width="50">0.33</td>
				<td width="50">93%</td>
				<td width="50">7%</td>
				<td width="50">0%</td>
				<td width="40">43</td>
			<!-- 	
					<td align="center" class="bor_r2"><a
						href="535"
						title="" class="a5" target="_blank">WWWWWW</a></td>
				 -->
			</tr>
				
	

							
						
							
							
								


	
		
			<tr class="shuangtr">
				
				<td width="70"><b class="no1">2</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322171729.png"><a href="soccer/team/43" title="��������" target="_blank">��������</a>
					
					</td>		
				<td width="40">15</td>				
				<td width="40">9</td>
				<td width="40">6</td>
				<td width="40">0</td>
				<td width="40">39</td>
				<td width="40">12</td>
				<td width="40">27</td>
				<td width="50">2.6</td>
				<td width="50">0.8</td>
				<td width="50">60%</td>
				<td width="50">40%</td>
				<td width="50">0%</td>
				<td width="40">33</td>
			<!-- 	
					<td align="center" class="bor_r2"><a
						href="43"
						title="" class="a5" target="_blank">DWWWDW</a></td>
				 -->
			</tr>
				
	

							
						
							
							
								


	
		
			<tr>
				
				<td width="70"><b class="no1">3</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140222132332.gif"><a href="soccer/team/40" title="ɽ��³��" target="_blank">ɽ��³��</a>
					
					</td>		
				<td width="40">15</td>				
				<td width="40">10</td>
				<td width="40">1</td>
				<td width="40">4</td>
				<td width="40">27</td>
				<td width="40">16</td>
				<td width="40">11</td>
				<td width="50">1.8</td>
				<td width="50">1.07</td>
				<td width="50">67%</td>
				<td width="50">7%</td>
				<td width="50">27%</td>
				<td width="40">31</td>
			<!-- 	
					<td align="center" class="bor_r2"><a
						href="40"
						title="" class="a5" target="_blank">WWWLLL</a></td>
				 -->
			</tr>
				
	

							
						
							
							
								


	
		
			<tr class="shuangtr">
				
				<td width="70"><b class="no1">4</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160202133545.png"><a href="soccer/team/39" title="�Ϻ��껨" target="_blank">�Ϻ��껨</a>
					
					</td>		
				<td width="40">15</td>				
				<td width="40">9</td>
				<td width="40">4</td>
				<td width="40">2</td>
				<td width="40">19</td>
				<td width="40">13</td>
				<td width="40">6</td>
				<td width="50">1.27</td>
				<td width="50">0.87</td>
				<td width="50">60%</td>
				<td width="50">27%</td>
				<td width="50">13%</td>
				<td width="40">31</td>
			<!-- 	
					<td align="center" class="bor_r2"><a
						href="39"
						title="" class="a5" target="_blank">LWWWWW</a></td>
				 -->
			</tr>
				
	

							
						
							
							
								


	
		
			<tr>
				
				<td width="70"><b class="no1">5</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140211195608.jpg"><a href="soccer/team/16668" title="���ݸ���" target="_blank">���ݸ���</a>
					
					</td>		
				<td width="40">15</td>				
				<td width="40">9</td>
				<td width="40">2</td>
				<td width="40">4</td>
				<td width="40">30</td>
				<td width="40">21</td>
				<td width="40">9</td>
				<td width="50">2</td>
				<td width="50">1.4</td>
				<td width="50">60%</td>
				<td width="50">13%</td>
				<td width="50">27%</td>
				<td width="40">29</td>
			<!-- 	
					<td align="center" class="bor_r2"><a
						href="16668"
						title="" class="a5" target="_blank">WWDLWW</a></td>
				 -->
			</tr>
				
	

							
						
							
							
								


	
		
			<tr class="shuangtr">
				
				<td width="70"><b class="no1">6</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160122173710.png"><a href="soccer/team/89" title="���̩��" target="_blank">���̩��</a>
					
					</td>		
				<td width="40">15</td>				
				<td width="40">8</td>
				<td width="40">4</td>
				<td width="40">3</td>
				<td width="40">22</td>
				<td width="40">15</td>
				<td width="40">7</td>
				<td width="50">1.47</td>
				<td width="50">1</td>
				<td width="50">53%</td>
				<td width="50">27%</td>
				<td width="50">20%</td>
				<td width="40">28</td>
			<!-- 	
					<td align="center" class="bor_r2"><a
						href="89"
						title="" class="a5" target="_blank">WLWWWD</a></td>
				 -->
			</tr>
				
	

							
						
							
							
								


	
		
			<tr>
				
				<td width="70"><b class="no1">7</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174050.png"><a href="soccer/team/13969" title="����һ��" target="_blank">����һ��</a>
					
					</td>		
				<td width="40">15</td>				
				<td width="40">7</td>
				<td width="40">6</td>
				<td width="40">2</td>
				<td width="40">27</td>
				<td width="40">17</td>
				<td width="40">10</td>
				<td width="50">1.8</td>
				<td width="50">1.13</td>
				<td width="50">47%</td>
				<td width="50">40%</td>
				<td width="50">13%</td>
				<td width="40">27</td>
			<!-- 	
					<td align="center" class="bor_r2"><a
						href="13969"
						title="" class="a5" target="_blank">WDDWWW</a></td>
				 -->
			</tr>
				
	

							
						
							
							
								


	
		
			<tr class="shuangtr">
				
				<td width="70"><b class="no1">8</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140225133203.jpg"><a href="soccer/team/3969" title="�����˺�" target="_blank">�����˺�</a>
					
					</td>		
				<td width="40">15</td>				
				<td width="40">7</td>
				<td width="40">4</td>
				<td width="40">4</td>
				<td width="40">24</td>
				<td width="40">22</td>
				<td width="40">2</td>
				<td width="50">1.6</td>
				<td width="50">1.47</td>
				<td width="50">47%</td>
				<td width="50">27%</td>
				<td width="50">27%</td>
				<td width="40">25</td>
			<!-- 	
					<td align="center" class="bor_r2"><a
						href="3969"
						title="" class="a5" target="_blank">DDWLWL</a></td>
				 -->
			</tr>
				
	

							
						
							
							
								


	
		
			<tr>
				
				<td width="70"><b class="no1">9</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174601.png"><a href="soccer/team/542" title="�����̳�" target="_blank">�����̳�</a>
					
					</td>		
				<td width="40">15</td>				
				<td width="40">6</td>
				<td width="40">6</td>
				<td width="40">3</td>
				<td width="40">23</td>
				<td width="40">17</td>
				<td width="40">6</td>
				<td width="50">1.53</td>
				<td width="50">1.13</td>
				<td width="50">40%</td>
				<td width="50">40%</td>
				<td width="50">20%</td>
				<td width="40">24</td>
			<!-- 	
					<td align="center" class="bor_r2"><a
						href="542"
						title="" class="a5" target="_blank">WDWDDW</a></td>
				 -->
			</tr>
				
	

							
						
							
							
								


	
		
			<tr class="shuangtr">
				
				<td width="70"><b class="no1">10</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174927.png"><a href="soccer/team/41" title="��������" target="_blank">��������</a>
					
					</td>		
				<td width="40">15</td>				
				<td width="40">5</td>
				<td width="40">8</td>
				<td width="40">2</td>
				<td width="40">18</td>
				<td width="40">13</td>
				<td width="40">5</td>
				<td width="50">1.2</td>
				<td width="50">0.87</td>
				<td width="50">33%</td>
				<td width="50">53%</td>
				<td width="50">13%</td>
				<td width="40">23</td>
			<!-- 	
					<td align="center" class="bor_r2"><a
						href="41"
						title="" class="a5" target="_blank">DDLWDD</a></td>
				 -->
			</tr>
				
	

							
						
							
							
								


	
		
			<tr>
				
				<td width="70"><b class="no1">11</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160121104955.jpg"><a href="soccer/team/543" title="��������" target="_blank">��������</a>
					
					</td>		
				<td width="40">15</td>				
				<td width="40">6</td>
				<td width="40">4</td>
				<td width="40">5</td>
				<td width="40">20</td>
				<td width="40">17</td>
				<td width="40">3</td>
				<td width="50">1.33</td>
				<td width="50">1.13</td>
				<td width="50">40%</td>
				<td width="50">27%</td>
				<td width="50">33%</td>
				<td width="40">22</td>
			<!-- 	
					<td align="center" class="bor_r2"><a
						href="543"
						title="" class="a5" target="_blank">LWLWDD</a></td>
				 -->
			</tr>
				
	

							
						
							
							
								


	
		
			<tr class="shuangtr">
				
				<td width="70"><b class="no1">12</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322175313.png"><a href="soccer/team/7642" title="�Ϻ��ϸ�" target="_blank">�Ϻ��ϸ�</a>
					
					</td>		
				<td width="40">15</td>				
				<td width="40">6</td>
				<td width="40">3</td>
				<td width="40">6</td>
				<td width="40">19</td>
				<td width="40">17</td>
				<td width="40">2</td>
				<td width="50">1.27</td>
				<td width="50">1.13</td>
				<td width="50">40%</td>
				<td width="50">20%</td>
				<td width="50">40%</td>
				<td width="40">21</td>
			<!-- 	
					<td align="center" class="bor_r2"><a
						href="7642"
						title="" class="a5" target="_blank">LWLWLD</a></td>
				 -->
			</tr>
				
	

							
						
							
							
								


	
		
			<tr>
				
				<td width="70"><b class="no1">13</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140225131744.jpg"><a href="soccer/team/528" title="������̩" target="_blank">������̩</a>
					
					</td>		
				<td width="40">15</td>				
				<td width="40">5</td>
				<td width="40">5</td>
				<td width="40">5</td>
				<td width="40">18</td>
				<td width="40">16</td>
				<td width="40">2</td>
				<td width="50">1.2</td>
				<td width="50">1.07</td>
				<td width="50">33%</td>
				<td width="50">33%</td>
				<td width="50">33%</td>
				<td width="40">20</td>
			<!-- 	
					<td align="center" class="bor_r2"><a
						href="528"
						title="" class="a5" target="_blank">DLWWWW</a></td>
				 -->
			</tr>
				
	

							
						
							
							
								


	
		
			<tr class="shuangtr">
				
				<td width="70"><b class="no1">14</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322175805.png"><a href="soccer/team/4050" title="�Ϻ�����" target="_blank">�Ϻ�����</a>
					
					</td>		
				<td width="40">15</td>				
				<td width="40">6</td>
				<td width="40">2</td>
				<td width="40">7</td>
				<td width="40">16</td>
				<td width="40">23</td>
				<td width="40">-7</td>
				<td width="50">1.07</td>
				<td width="50">1.53</td>
				<td width="50">40%</td>
				<td width="50">13%</td>
				<td width="50">47%</td>
				<td width="40">20</td>
			<!-- 	
					<td align="center" class="bor_r2"><a
						href="4050"
						title="" class="a5" target="_blank">WLWLWW</a></td>
				 -->
			</tr>
				
	

							
						
							
							
								


	
		
			<tr>
				
				<td width="70"><b class="no1">15</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140327133627.gif"><a href="soccer/team/44" title="�ൺ����" target="_blank">�ൺ����</a>
					
					</td>		
				<td width="40">15</td>				
				<td width="40">4</td>
				<td width="40">7</td>
				<td width="40">4</td>
				<td width="40">13</td>
				<td width="40">12</td>
				<td width="40">1</td>
				<td width="50">0.87</td>
				<td width="50">0.8</td>
				<td width="50">27%</td>
				<td width="50">47%</td>
				<td width="50">27%</td>
				<td width="40">19</td>
			<!-- 	
					<td align="center" class="bor_r2"><a
						href="44"
						title="" class="a5" target="_blank">DWLLDW</a></td>
				 -->
			</tr>
				
	

							
						
							
							
								


	
		
			<tr class="shuangtr">
				
				<td width="70"><b class="no1">16</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322180048.png"><a href="soccer/team/16667" title="�人׿��" target="_blank">�人׿��</a>
					
					</td>		
				<td width="40">15</td>				
				<td width="40">3</td>
				<td width="40">4</td>
				<td width="40">8</td>
				<td width="40">12</td>
				<td width="40">22</td>
				<td width="40">-10</td>
				<td width="50">0.8</td>
				<td width="50">1.47</td>
				<td width="50">20%</td>
				<td width="50">27%</td>
				<td width="50">53%</td>
				<td width="40">13</td>
			<!-- 	
					<td align="center" class="bor_r2"><a
						href="16667"
						title="" class="a5" target="_blank">LWDLLL</a></td>
				 -->
			</tr>
				
	

							
						
					</tbody></table>
			</ul>
			<ul class="tabs1_main_ul" id="tabs1_main_3" style="display: none;">
				<table width="100%" border="0" cellspacing="0" cellpadding="0" class="zstab">
					


	<thead>
              <tr>
                <th width="50">����</th>
                <th width="140">�������</th>
                <th width="40">��</th>
                <th width="40">ʤ</th>
                <th width="40">ƽ</th>
                <th width="40">��</th>
                <th width="40">��</th>
                <th width="40">ʧ</th>
                <th width="40">��</th>
                <th width="50">����</th>
                <th width="50">��ʧ</th>
                <th width="50">ʤ��</th>
                <th width="50">ƽ��</th>
                <th width="50">����</th>
                <th width="40">����</th>
              </tr>
     </thead>
					
					
						
						
							


	
		
			<tbody><tr>
				
				<td width="70"><b class="no1">1</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322172236.png"><a href="soccer/team/535" title="���ݺ��" target="_blank">���ݺ��</a>
					
					</td>		
				<td width="40">15</td>				
				<td width="40">10</td>
				<td width="40">4</td>
				<td width="40">1</td>
				<td width="40">31</td>
				<td width="40">13</td>
				<td width="40">18</td>
				<td width="50">2.07</td>
				<td width="50">0.87</td>
				<td width="50">67%</td>
				<td width="50">27%</td>
				<td width="50">7%</td>
				<td width="40">34</td>
			<!-- 	
					<td align="center" class="bor_r2"><a
						href="535"
						title="" class="a5" target="_blank">DWLDWD</a></td>
				 -->
			</tr>
				
	

						
					
						
						
							


	
		
			<tr class="shuangtr">
				
				<td width="70"><b class="no1">2</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140222132332.gif"><a href="soccer/team/40" title="ɽ��³��" target="_blank">ɽ��³��</a>
					
					</td>		
				<td width="40">15</td>				
				<td width="40">8</td>
				<td width="40">4</td>
				<td width="40">3</td>
				<td width="40">28</td>
				<td width="40">19</td>
				<td width="40">9</td>
				<td width="50">1.87</td>
				<td width="50">1.27</td>
				<td width="50">53%</td>
				<td width="50">27%</td>
				<td width="50">20%</td>
				<td width="40">28</td>
			<!-- 	
					<td align="center" class="bor_r2"><a
						href="40"
						title="" class="a5" target="_blank">WWWWDW</a></td>
				 -->
			</tr>
				
	

						
					
						
						
							


	
		
			<tr>
				
				<td width="70"><b class="no1">3</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322175805.png"><a href="soccer/team/4050" title="�Ϻ�����" target="_blank">�Ϻ�����</a>
					
					</td>		
				<td width="40">15</td>				
				<td width="40">5</td>
				<td width="40">5</td>
				<td width="40">5</td>
				<td width="40">15</td>
				<td width="40">19</td>
				<td width="40">-4</td>
				<td width="50">1</td>
				<td width="50">1.27</td>
				<td width="50">33%</td>
				<td width="50">33%</td>
				<td width="50">33%</td>
				<td width="40">20</td>
			<!-- 	
					<td align="center" class="bor_r2"><a
						href="4050"
						title="" class="a5" target="_blank">LDDWWW</a></td>
				 -->
			</tr>
				
	

						
					
						
						
							


	
		
			<tr class="shuangtr">
				
				<td width="70"><b class="no1">4</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140225133203.jpg"><a href="soccer/team/3969" title="�����˺�" target="_blank">�����˺�</a>
					
					</td>		
				<td width="40">15</td>				
				<td width="40">4</td>
				<td width="40">7</td>
				<td width="40">4</td>
				<td width="40">16</td>
				<td width="40">19</td>
				<td width="40">-3</td>
				<td width="50">1.07</td>
				<td width="50">1.27</td>
				<td width="50">27%</td>
				<td width="50">47%</td>
				<td width="50">27%</td>
				<td width="40">19</td>
			<!-- 	
					<td align="center" class="bor_r2"><a
						href="3969"
						title="" class="a5" target="_blank">WLDWLL</a></td>
				 -->
			</tr>
				
	

						
					
						
						
							


	
		
			<tr>
				
				<td width="70"><b class="no1">5</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322171729.png"><a href="soccer/team/43" title="��������" target="_blank">��������</a>
					
					</td>		
				<td width="40">15</td>				
				<td width="40">5</td>
				<td width="40">3</td>
				<td width="40">7</td>
				<td width="40">15</td>
				<td width="40">19</td>
				<td width="40">-4</td>
				<td width="50">1</td>
				<td width="50">1.27</td>
				<td width="50">33%</td>
				<td width="50">20%</td>
				<td width="50">47%</td>
				<td width="40">18</td>
			<!-- 	
					<td align="center" class="bor_r2"><a
						href="43"
						title="" class="a5" target="_blank">WDLLDW</a></td>
				 -->
			</tr>
				
	

						
					
						
						
							


	
		
			<tr class="shuangtr">
				
				<td width="70"><b class="no1">6</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322175313.png"><a href="soccer/team/7642" title="�Ϻ��ϸ�" target="_blank">�Ϻ��ϸ�</a>
					
					</td>		
				<td width="40">15</td>				
				<td width="40">4</td>
				<td width="40">4</td>
				<td width="40">7</td>
				<td width="40">19</td>
				<td width="40">18</td>
				<td width="40">1</td>
				<td width="50">1.27</td>
				<td width="50">1.2</td>
				<td width="50">27%</td>
				<td width="50">27%</td>
				<td width="50">47%</td>
				<td width="40">16</td>
			<!-- 	
					<td align="center" class="bor_r2"><a
						href="7642"
						title="" class="a5" target="_blank">WDWLWD</a></td>
				 -->
			</tr>
				
	

						
					
						
						
							


	
		
			<tr>
				
				<td width="70"><b class="no1">7</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174050.png"><a href="soccer/team/13969" title="����һ��" target="_blank">����һ��</a>
					
					</td>		
				<td width="40">15</td>				
				<td width="40">4</td>
				<td width="40">2</td>
				<td width="40">9</td>
				<td width="40">13</td>
				<td width="40">26</td>
				<td width="40">-13</td>
				<td width="50">0.87</td>
				<td width="50">1.73</td>
				<td width="50">27%</td>
				<td width="50">13%</td>
				<td width="50">60%</td>
				<td width="40">14</td>
			<!-- 	
					<td align="center" class="bor_r2"><a
						href="13969"
						title="" class="a5" target="_blank">DLLWLL</a></td>
				 -->
			</tr>
				
	

						
					
						
						
							


	
		
			<tr class="shuangtr">
				
				<td width="70"><b class="no1">8</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160202133545.png"><a href="soccer/team/39" title="�Ϻ��껨" target="_blank">�Ϻ��껨</a>
					
					</td>		
				<td width="40">15</td>				
				<td width="40">2</td>
				<td width="40">7</td>
				<td width="40">6</td>
				<td width="40">17</td>
				<td width="40">23</td>
				<td width="40">-6</td>
				<td width="50">1.13</td>
				<td width="50">1.53</td>
				<td width="50">13%</td>
				<td width="50">47%</td>
				<td width="50">40%</td>
				<td width="40">13</td>
			<!-- 	
					<td align="center" class="bor_r2"><a
						href="39"
						title="" class="a5" target="_blank">LWLLLL</a></td>
				 -->
			</tr>
				
	

						
					
						
						
							


	
		
			<tr>
				
				<td width="70"><b class="no1">9</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160122173710.png"><a href="soccer/team/89" title="���̩��" target="_blank">���̩��</a>
					
					</td>		
				<td width="40">15</td>				
				<td width="40">3</td>
				<td width="40">3</td>
				<td width="40">9</td>
				<td width="40">13</td>
				<td width="40">24</td>
				<td width="40">-11</td>
				<td width="50">0.87</td>
				<td width="50">1.6</td>
				<td width="50">20%</td>
				<td width="50">20%</td>
				<td width="50">60%</td>
				<td width="40">12</td>
			<!-- 	
					<td align="center" class="bor_r2"><a
						href="89"
						title="" class="a5" target="_blank">LLWWLL</a></td>
				 -->
			</tr>
				
	

						
					
						
						
							


	
		
			<tr class="shuangtr">
				
				<td width="70"><b class="no1">10</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174927.png"><a href="soccer/team/41" title="��������" target="_blank">��������</a>
					
					</td>		
				<td width="40">15</td>				
				<td width="40">3</td>
				<td width="40">3</td>
				<td width="40">9</td>
				<td width="40">17</td>
				<td width="40">31</td>
				<td width="40">-14</td>
				<td width="50">1.13</td>
				<td width="50">2.07</td>
				<td width="50">20%</td>
				<td width="50">20%</td>
				<td width="50">60%</td>
				<td width="40">12</td>
			<!-- 	
					<td align="center" class="bor_r2"><a
						href="41"
						title="" class="a5" target="_blank">WDLLLL</a></td>
				 -->
			</tr>
				
	

						
					
						
						
							


	
		
			<tr>
				
				<td width="70"><b class="no1">11</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140225131744.jpg"><a href="soccer/team/528" title="������̩" target="_blank">������̩</a>
					
					</td>		
				<td width="40">15</td>				
				<td width="40">3</td>
				<td width="40">3</td>
				<td width="40">9</td>
				<td width="40">11</td>
				<td width="40">25</td>
				<td width="40">-14</td>
				<td width="50">0.73</td>
				<td width="50">1.67</td>
				<td width="50">20%</td>
				<td width="50">20%</td>
				<td width="50">60%</td>
				<td width="40">12</td>
			<!-- 	
					<td align="center" class="bor_r2"><a
						href="528"
						title="" class="a5" target="_blank">WLLWLL</a></td>
				 -->
			</tr>
				
	

						
					
						
						
							


	
		
			<tr class="shuangtr">
				
				<td width="70"><b class="no1">12</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140327133627.gif"><a href="soccer/team/44" title="�ൺ����" target="_blank">�ൺ����</a>
					
					</td>		
				<td width="40">15</td>				
				<td width="40">3</td>
				<td width="40">3</td>
				<td width="40">9</td>
				<td width="40">13</td>
				<td width="40">29</td>
				<td width="40">-16</td>
				<td width="50">0.87</td>
				<td width="50">1.93</td>
				<td width="50">20%</td>
				<td width="50">20%</td>
				<td width="50">60%</td>
				<td width="40">12</td>
			<!-- 	
					<td align="center" class="bor_r2"><a
						href="44"
						title="" class="a5" target="_blank">LLLLLL</a></td>
				 -->
			</tr>
				
	

						
					
						
						
							


	
		
			<tr>
				
				<td width="70"><b class="no1">13</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140211195608.jpg"><a href="soccer/team/16668" title="���ݸ���" target="_blank">���ݸ���</a>
					
					</td>		
				<td width="40">15</td>				
				<td width="40">2</td>
				<td width="40">5</td>
				<td width="40">8</td>
				<td width="40">15</td>
				<td width="40">26</td>
				<td width="40">-11</td>
				<td width="50">1</td>
				<td width="50">1.73</td>
				<td width="50">13%</td>
				<td width="50">33%</td>
				<td width="50">53%</td>
				<td width="40">11</td>
			<!-- 	
					<td align="center" class="bor_r2"><a
						href="16668"
						title="" class="a5" target="_blank">WLLDLD</a></td>
				 -->
			</tr>
				
	

						
					
						
						
							


	
		
			<tr class="shuangtr">
				
				<td width="70"><b class="no1">14</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160121104955.jpg"><a href="soccer/team/543" title="��������" target="_blank">��������</a>
					
					</td>		
				<td width="40">15</td>				
				<td width="40">1</td>
				<td width="40">7</td>
				<td width="40">7</td>
				<td width="40">12</td>
				<td width="40">22</td>
				<td width="40">-10</td>
				<td width="50">0.8</td>
				<td width="50">1.47</td>
				<td width="50">7%</td>
				<td width="50">47%</td>
				<td width="50">47%</td>
				<td width="40">10</td>
			<!-- 	
					<td align="center" class="bor_r2"><a
						href="543"
						title="" class="a5" target="_blank">DLDLDL</a></td>
				 -->
			</tr>
				
	

						
					
						
						
							


	
		
			<tr>
				
				<td width="70"><b class="no1">15</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174601.png"><a href="soccer/team/542" title="�����̳�" target="_blank">�����̳�</a>
					
					</td>		
				<td width="40">15</td>				
				<td width="40">2</td>
				<td width="40">4</td>
				<td width="40">9</td>
				<td width="40">11</td>
				<td width="40">25</td>
				<td width="40">-14</td>
				<td width="50">0.73</td>
				<td width="50">1.67</td>
				<td width="50">13%</td>
				<td width="50">27%</td>
				<td width="50">60%</td>
				<td width="40">10</td>
			<!-- 	
					<td align="center" class="bor_r2"><a
						href="542"
						title="" class="a5" target="_blank">WLLLDL</a></td>
				 -->
			</tr>
				
	

						
					
						
						
							


	
		
			<tr class="shuangtr">
				
				<td width="70"><b class="no1">16</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322180048.png"><a href="soccer/team/16667" title="�人׿��" target="_blank">�人׿��</a>
					
					</td>		
				<td width="40">15</td>				
				<td width="40">0</td>
				<td width="40">3</td>
				<td width="40">12</td>
				<td width="40">12</td>
				<td width="40">36</td>
				<td width="40">-24</td>
				<td width="50">0.8</td>
				<td width="50">2.4</td>
				<td width="50">0%</td>
				<td width="50">20%</td>
				<td width="50">80%</td>
				<td width="40">3</td>
			<!-- 	
					<td align="center" class="bor_r2"><a
						href="16667"
						title="" class="a5" target="_blank">LLLDDL</a></td>
				 -->
			</tr>
				
	

						
					
				</tbody></table>
			</ul>
			<ul class="tabs1_main_ul" id="tabs1_main_4" style="display: none;">
				<table width="100%" border="0" cellspacing="0" cellpadding="0" class="zstab">
					


	<thead>
              <tr>
                <th width="50">����</th>
                <th width="140">�������</th>
                <th width="40">��</th>
                <th width="40">ʤ</th>
                <th width="40">ƽ</th>
                <th width="40">��</th>
                <th width="40">��</th>
                <th width="40">ʧ</th>
                <th width="40">��</th>
                <th width="50">����</th>
                <th width="50">��ʧ</th>
                <th width="50">ʤ��</th>
                <th width="50">ƽ��</th>
                <th width="50">����</th>
                <th width="40">����</th>
              </tr>
     </thead>
						
					
						
						
							


	
		
			<tbody><tr>
				
				<td width="70"><b class="no1">1</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322175805.png"><a href="soccer/team/4050" title="�Ϻ�����" target="_blank">�Ϻ�����</a>
					
					</td>		
				<td width="40">6</td>				
				<td width="40">5</td>
				<td width="40">0</td>
				<td width="40">1</td>
				<td width="40">6</td>
				<td width="40">2</td>
				<td width="40">4</td>
				<td width="50">1</td>
				<td width="50">0.33</td>
				<td width="50">83%</td>
				<td width="50">0%</td>
				<td width="50">17%</td>
				<td width="40">15</td>
			<!-- 	 -->
			</tr>
				
	

						
					
						
						
							


	
		
			<tr class="shuangtr">
				
				<td width="70"><b class="no1">2</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322172236.png"><a href="soccer/team/535" title="���ݺ��" target="_blank">���ݺ��</a>
					
					</td>		
				<td width="40">6</td>				
				<td width="40">4</td>
				<td width="40">2</td>
				<td width="40">0</td>
				<td width="40">18</td>
				<td width="40">5</td>
				<td width="40">13</td>
				<td width="50">3</td>
				<td width="50">0.83</td>
				<td width="50">67%</td>
				<td width="50">33%</td>
				<td width="50">0%</td>
				<td width="40">14</td>
			<!-- 	 -->
			</tr>
				
	

						
					
						
						
							


	
		
			<tr>
				
				<td width="70"><b class="no1">3</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140225131744.jpg"><a href="soccer/team/528" title="������̩" target="_blank">������̩</a>
					
					</td>		
				<td width="40">6</td>				
				<td width="40">4</td>
				<td width="40">0</td>
				<td width="40">2</td>
				<td width="40">8</td>
				<td width="40">4</td>
				<td width="40">4</td>
				<td width="50">1.33</td>
				<td width="50">0.67</td>
				<td width="50">67%</td>
				<td width="50">0%</td>
				<td width="50">33%</td>
				<td width="40">12</td>
			<!-- 	 -->
			</tr>
				
	

						
					
						
						
							


	
		
			<tr class="shuangtr">
				
				<td width="70"><b class="no1">4</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322171729.png"><a href="soccer/team/43" title="��������" target="_blank">��������</a>
					
					</td>		
				<td width="40">6</td>				
				<td width="40">3</td>
				<td width="40">2</td>
				<td width="40">1</td>
				<td width="40">8</td>
				<td width="40">4</td>
				<td width="40">4</td>
				<td width="50">1.33</td>
				<td width="50">0.67</td>
				<td width="50">50%</td>
				<td width="50">33%</td>
				<td width="50">17%</td>
				<td width="40">11</td>
			<!-- 	 -->
			</tr>
				
	

						
					
						
						
							


	
		
			<tr>
				
				<td width="70"><b class="no1">5</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140222132332.gif"><a href="soccer/team/40" title="ɽ��³��" target="_blank">ɽ��³��</a>
					
					</td>		
				<td width="40">6</td>				
				<td width="40">3</td>
				<td width="40">1</td>
				<td width="40">2</td>
				<td width="40">13</td>
				<td width="40">9</td>
				<td width="40">4</td>
				<td width="50">2.17</td>
				<td width="50">1.5</td>
				<td width="50">50%</td>
				<td width="50">17%</td>
				<td width="50">33%</td>
				<td width="40">10</td>
			<!-- 	 -->
			</tr>
				
	

						
					
						
						
							


	
		
			<tr class="shuangtr">
				
				<td width="70"><b class="no1">6</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174050.png"><a href="soccer/team/13969" title="����һ��" target="_blank">����һ��</a>
					
					</td>		
				<td width="40">6</td>				
				<td width="40">3</td>
				<td width="40">1</td>
				<td width="40">2</td>
				<td width="40">7</td>
				<td width="40">7</td>
				<td width="40">0</td>
				<td width="50">1.17</td>
				<td width="50">1.17</td>
				<td width="50">50%</td>
				<td width="50">17%</td>
				<td width="50">33%</td>
				<td width="40">10</td>
			<!-- 	 -->
			</tr>
				
	

						
					
						
						
							


	
		
			<tr>
				
				<td width="70"><b class="no1">7</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160202133545.png"><a href="soccer/team/39" title="�Ϻ��껨" target="_blank">�Ϻ��껨</a>
					
					</td>		
				<td width="40">6</td>				
				<td width="40">3</td>
				<td width="40">0</td>
				<td width="40">3</td>
				<td width="40">8</td>
				<td width="40">10</td>
				<td width="40">-2</td>
				<td width="50">1.33</td>
				<td width="50">1.67</td>
				<td width="50">50%</td>
				<td width="50">0%</td>
				<td width="50">50%</td>
				<td width="40">9</td>
			<!-- 	 -->
			</tr>
				
	

						
					
						
						
							


	
		
			<tr class="shuangtr">
				
				<td width="70"><b class="no1">8</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322175313.png"><a href="soccer/team/7642" title="�Ϻ��ϸ�" target="_blank">�Ϻ��ϸ�</a>
					
					</td>		
				<td width="40">6</td>				
				<td width="40">2</td>
				<td width="40">2</td>
				<td width="40">2</td>
				<td width="40">8</td>
				<td width="40">4</td>
				<td width="40">4</td>
				<td width="50">1.33</td>
				<td width="50">0.67</td>
				<td width="50">33%</td>
				<td width="50">33%</td>
				<td width="50">33%</td>
				<td width="40">8</td>
			<!-- 	 -->
			</tr>
				
	

						
					
						
						
							


	
		
			<tr>
				
				<td width="70"><b class="no1">9</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140211195608.jpg"><a href="soccer/team/16668" title="���ݸ���" target="_blank">���ݸ���</a>
					
					</td>		
				<td width="40">6</td>				
				<td width="40">2</td>
				<td width="40">2</td>
				<td width="40">2</td>
				<td width="40">11</td>
				<td width="40">11</td>
				<td width="40">0</td>
				<td width="50">1.83</td>
				<td width="50">1.83</td>
				<td width="50">33%</td>
				<td width="50">33%</td>
				<td width="50">33%</td>
				<td width="40">8</td>
			<!-- 	 -->
			</tr>
				
	

						
					
						
						
							


	
		
			<tr class="shuangtr">
				
				<td width="70"><b class="no1">10</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160122173710.png"><a href="soccer/team/89" title="���̩��" target="_blank">���̩��</a>
					
					</td>		
				<td width="40">6</td>				
				<td width="40">2</td>
				<td width="40">1</td>
				<td width="40">3</td>
				<td width="40">7</td>
				<td width="40">10</td>
				<td width="40">-3</td>
				<td width="50">1.17</td>
				<td width="50">1.67</td>
				<td width="50">33%</td>
				<td width="50">17%</td>
				<td width="50">50%</td>
				<td width="40">7</td>
			<!-- 	 -->
			</tr>
				
	

						
					
						
						
							


	
		
			<tr>
				
				<td width="70"><b class="no1">11</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140327133627.gif"><a href="soccer/team/44" title="�ൺ����" target="_blank">�ൺ����</a>
					
					</td>		
				<td width="40">6</td>				
				<td width="40">2</td>
				<td width="40">1</td>
				<td width="40">3</td>
				<td width="40">7</td>
				<td width="40">11</td>
				<td width="40">-4</td>
				<td width="50">1.17</td>
				<td width="50">1.83</td>
				<td width="50">33%</td>
				<td width="50">17%</td>
				<td width="50">50%</td>
				<td width="40">7</td>
			<!-- 	 -->
			</tr>
				
	

						
					
						
						
							


	
		
			<tr class="shuangtr">
				
				<td width="70"><b class="no1">12</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160121104955.jpg"><a href="soccer/team/543" title="��������" target="_blank">��������</a>
					
					</td>		
				<td width="40">6</td>				
				<td width="40">1</td>
				<td width="40">3</td>
				<td width="40">2</td>
				<td width="40">4</td>
				<td width="40">5</td>
				<td width="40">-1</td>
				<td width="50">0.67</td>
				<td width="50">0.83</td>
				<td width="50">17%</td>
				<td width="50">50%</td>
				<td width="50">33%</td>
				<td width="40">6</td>
			<!-- 	 -->
			</tr>
				
	

						
					
						
						
							


	
		
			<tr>
				
				<td width="70"><b class="no1">13</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174601.png"><a href="soccer/team/542" title="�����̳�" target="_blank">�����̳�</a>
					
					</td>		
				<td width="40">6</td>				
				<td width="40">1</td>
				<td width="40">3</td>
				<td width="40">2</td>
				<td width="40">6</td>
				<td width="40">8</td>
				<td width="40">-2</td>
				<td width="50">1</td>
				<td width="50">1.33</td>
				<td width="50">17%</td>
				<td width="50">50%</td>
				<td width="50">33%</td>
				<td width="40">6</td>
			<!-- 	 -->
			</tr>
				
	

						
					
						
						
							


	
		
			<tr class="shuangtr">
				
				<td width="70"><b class="no1">14</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140225133203.jpg"><a href="soccer/team/3969" title="�����˺�" target="_blank">�����˺�</a>
					
					</td>		
				<td width="40">6</td>				
				<td width="40">2</td>
				<td width="40">0</td>
				<td width="40">4</td>
				<td width="40">11</td>
				<td width="40">16</td>
				<td width="40">-5</td>
				<td width="50">1.83</td>
				<td width="50">2.67</td>
				<td width="50">33%</td>
				<td width="50">0%</td>
				<td width="50">67%</td>
				<td width="40">6</td>
			<!-- 	 -->
			</tr>
				
	

						
					
						
						
							


	
		
			<tr>
				
				<td width="70"><b class="no1">15</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174927.png"><a href="soccer/team/41" title="��������" target="_blank">��������</a>
					
					</td>		
				<td width="40">6</td>				
				<td width="40">1</td>
				<td width="40">2</td>
				<td width="40">3</td>
				<td width="40">6</td>
				<td width="40">10</td>
				<td width="40">-4</td>
				<td width="50">1</td>
				<td width="50">1.67</td>
				<td width="50">17%</td>
				<td width="50">33%</td>
				<td width="50">50%</td>
				<td width="40">5</td>
			<!-- 	 -->
			</tr>
				
	

						
					
						
						
							


	
		
			<tr class="shuangtr">
				
				<td width="70"><b class="no1">16</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322180048.png"><a href="soccer/team/16667" title="�人׿��" target="_blank">�人׿��</a>
					
					</td>		
				<td width="40">6</td>				
				<td width="40">0</td>
				<td width="40">2</td>
				<td width="40">4</td>
				<td width="40">1</td>
				<td width="40">11</td>
				<td width="40">-10</td>
				<td width="50">0.17</td>
				<td width="50">1.83</td>
				<td width="50">0%</td>
				<td width="50">33%</td>
				<td width="50">67%</td>
				<td width="40">2</td>
			<!-- 	 -->
			</tr>
				
	

						
					
				</tbody></table>
			</ul>
			<ul class="tabs1_main_ul" id="tabs1_main_5" style="display: none;">
				<table width="100%" border="0" cellspacing="0" cellpadding="0" class="zstab">
					


	<thead>
              <tr>
                <th width="50">����</th>
                <th width="140">�������</th>
                <th width="40">��</th>
                <th width="40">ʤ</th>
                <th width="40">ƽ</th>
                <th width="40">��</th>
                <th width="40">��</th>
                <th width="40">ʧ</th>
                <th width="40">��</th>
                <th width="50">����</th>
                <th width="50">��ʧ</th>
                <th width="50">ʤ��</th>
                <th width="50">ƽ��</th>
                <th width="50">����</th>
                <th width="40">����</th>
              </tr>
     </thead>
						
					
						
						
							


	
		
			<tbody><tr>
				
				<td width="70"><b class="no1">1</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322172236.png"><a href="soccer/team/535" title="���ݺ��" target="_blank">���ݺ��</a>
					
					</td>		
				<td width="40">30</td>				
				<td width="40">16</td>
				<td width="40">10</td>
				<td width="40">4</td>
				<td width="40">28</td>
				<td width="40">6</td>
				<td width="40">22</td>
				<td width="50">0.93</td>
				<td width="50">0.2</td>
				<td width="50">53%</td>
				<td width="50">33%</td>
				<td width="50">13%</td>
				<td width="40">58</td>
			<!-- 	 -->
			</tr>
				
	

						
					
						
						
							


	
		
			<tr class="shuangtr">
				
				<td width="70"><b class="no1">2</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322171729.png"><a href="soccer/team/43" title="��������" target="_blank">��������</a>
					
					</td>		
				<td width="40">30</td>				
				<td width="40">16</td>
				<td width="40">7</td>
				<td width="40">7</td>
				<td width="40">22</td>
				<td width="40">10</td>
				<td width="40">12</td>
				<td width="50">0.73</td>
				<td width="50">0.33</td>
				<td width="50">53%</td>
				<td width="50">23%</td>
				<td width="50">23%</td>
				<td width="40">55</td>
			<!-- 	 -->
			</tr>
				
	

						
					
						
						
							


	
		
			<tr>
				
				<td width="70"><b class="no1">3</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140225133203.jpg"><a href="soccer/team/3969" title="�����˺�" target="_blank">�����˺�</a>
					
					</td>		
				<td width="40">30</td>				
				<td width="40">11</td>
				<td width="40">13</td>
				<td width="40">6</td>
				<td width="40">18</td>
				<td width="40">15</td>
				<td width="40">3</td>
				<td width="50">0.6</td>
				<td width="50">0.5</td>
				<td width="50">37%</td>
				<td width="50">43%</td>
				<td width="50">20%</td>
				<td width="40">46</td>
			<!-- 	 -->
			</tr>
				
	

						
					
						
						
							


	
		
			<tr class="shuangtr">
				
				<td width="70"><b class="no1">4</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322175805.png"><a href="soccer/team/4050" title="�Ϻ�����" target="_blank">�Ϻ�����</a>
					
					</td>		
				<td width="40">30</td>				
				<td width="40">10</td>
				<td width="40">12</td>
				<td width="40">8</td>
				<td width="40">14</td>
				<td width="40">14</td>
				<td width="40">0</td>
				<td width="50">0.47</td>
				<td width="50">0.47</td>
				<td width="50">33%</td>
				<td width="50">40%</td>
				<td width="50">27%</td>
				<td width="40">42</td>
			<!-- 	 -->
			</tr>
				
	

						
					
						
						
							


	
		
			<tr>
				
				<td width="70"><b class="no1">5</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140222132332.gif"><a href="soccer/team/40" title="ɽ��³��" target="_blank">ɽ��³��</a>
					
					</td>		
				<td width="40">30</td>				
				<td width="40">8</td>
				<td width="40">16</td>
				<td width="40">6</td>
				<td width="40">19</td>
				<td width="40">17</td>
				<td width="40">2</td>
				<td width="50">0.63</td>
				<td width="50">0.57</td>
				<td width="50">27%</td>
				<td width="50">53%</td>
				<td width="50">20%</td>
				<td width="40">40</td>
			<!-- 	 -->
			</tr>
				
	

						
					
						
						
							


	
		
			<tr class="shuangtr">
				
				<td width="70"><b class="no1">6</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174927.png"><a href="soccer/team/41" title="��������" target="_blank">��������</a>
					
					</td>		
				<td width="40">30</td>				
				<td width="40">9</td>
				<td width="40">13</td>
				<td width="40">8</td>
				<td width="40">18</td>
				<td width="40">17</td>
				<td width="40">1</td>
				<td width="50">0.6</td>
				<td width="50">0.57</td>
				<td width="50">30%</td>
				<td width="50">43%</td>
				<td width="50">27%</td>
				<td width="40">40</td>
			<!-- 	 -->
			</tr>
				
	

						
					
						
						
							


	
		
			<tr>
				
				<td width="70"><b class="no1">7</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140225131744.jpg"><a href="soccer/team/528" title="������̩" target="_blank">������̩</a>
					
					</td>		
				<td width="40">30</td>				
				<td width="40">9</td>
				<td width="40">13</td>
				<td width="40">8</td>
				<td width="40">14</td>
				<td width="40">17</td>
				<td width="40">-3</td>
				<td width="50">0.47</td>
				<td width="50">0.57</td>
				<td width="50">30%</td>
				<td width="50">43%</td>
				<td width="50">27%</td>
				<td width="40">40</td>
			<!-- 	 -->
			</tr>
				
	

						
					
						
						
							


	
		
			<tr class="shuangtr">
				
				<td width="70"><b class="no1">8</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322175313.png"><a href="soccer/team/7642" title="�Ϻ��ϸ�" target="_blank">�Ϻ��ϸ�</a>
					
					</td>		
				<td width="40">30</td>				
				<td width="40">9</td>
				<td width="40">12</td>
				<td width="40">9</td>
				<td width="40">19</td>
				<td width="40">15</td>
				<td width="40">4</td>
				<td width="50">0.63</td>
				<td width="50">0.5</td>
				<td width="50">30%</td>
				<td width="50">40%</td>
				<td width="50">30%</td>
				<td width="40">39</td>
			<!-- 	 -->
			</tr>
				
	

						
					
						
						
							


	
		
			<tr>
				
				<td width="70"><b class="no1">9</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140211195608.jpg"><a href="soccer/team/16668" title="���ݸ���" target="_blank">���ݸ���</a>
					
					</td>		
				<td width="40">30</td>				
				<td width="40">9</td>
				<td width="40">12</td>
				<td width="40">9</td>
				<td width="40">18</td>
				<td width="40">18</td>
				<td width="40">0</td>
				<td width="50">0.6</td>
				<td width="50">0.6</td>
				<td width="50">30%</td>
				<td width="50">40%</td>
				<td width="50">30%</td>
				<td width="40">39</td>
			<!-- 	 -->
			</tr>
				
	

						
					
						
						
							


	
		
			<tr class="shuangtr">
				
				<td width="70"><b class="no1">10</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160122173710.png"><a href="soccer/team/89" title="���̩��" target="_blank">���̩��</a>
					
					</td>		
				<td width="40">30</td>				
				<td width="40">8</td>
				<td width="40">13</td>
				<td width="40">9</td>
				<td width="40">11</td>
				<td width="40">12</td>
				<td width="40">-1</td>
				<td width="50">0.37</td>
				<td width="50">0.4</td>
				<td width="50">27%</td>
				<td width="50">43%</td>
				<td width="50">30%</td>
				<td width="40">37</td>
			<!-- 	 -->
			</tr>
				
	

						
					
						
						
							


	
		
			<tr>
				
				<td width="70"><b class="no1">11</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174601.png"><a href="soccer/team/542" title="�����̳�" target="_blank">�����̳�</a>
					
					</td>		
				<td width="40">30</td>				
				<td width="40">8</td>
				<td width="40">12</td>
				<td width="40">10</td>
				<td width="40">14</td>
				<td width="40">16</td>
				<td width="40">-2</td>
				<td width="50">0.47</td>
				<td width="50">0.53</td>
				<td width="50">27%</td>
				<td width="50">40%</td>
				<td width="50">33%</td>
				<td width="40">36</td>
			<!-- 	 -->
			</tr>
				
	

						
					
						
						
							


	
		
			<tr class="shuangtr">
				
				<td width="70"><b class="no1">12</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174050.png"><a href="soccer/team/13969" title="����һ��" target="_blank">����һ��</a>
					
					</td>		
				<td width="40">30</td>				
				<td width="40">6</td>
				<td width="40">15</td>
				<td width="40">9</td>
				<td width="40">17</td>
				<td width="40">21</td>
				<td width="40">-4</td>
				<td width="50">0.57</td>
				<td width="50">0.7</td>
				<td width="50">20%</td>
				<td width="50">50%</td>
				<td width="50">30%</td>
				<td width="40">33</td>
			<!-- 	 -->
			</tr>
				
	

						
					
						
						
							


	
		
			<tr>
				
				<td width="70"><b class="no1">13</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160121104955.jpg"><a href="soccer/team/543" title="��������" target="_blank">��������</a>
					
					</td>		
				<td width="40">30</td>				
				<td width="40">7</td>
				<td width="40">11</td>
				<td width="40">12</td>
				<td width="40">11</td>
				<td width="40">18</td>
				<td width="40">-7</td>
				<td width="50">0.37</td>
				<td width="50">0.6</td>
				<td width="50">23%</td>
				<td width="50">37%</td>
				<td width="50">40%</td>
				<td width="40">32</td>
			<!-- 	 -->
			</tr>
				
	

						
					
						
						
							


	
		
			<tr class="shuangtr">
				
				<td width="70"><b class="no1">14</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140327133627.gif"><a href="soccer/team/44" title="�ൺ����" target="_blank">�ൺ����</a>
					
					</td>		
				<td width="40">30</td>				
				<td width="40">6</td>
				<td width="40">13</td>
				<td width="40">11</td>
				<td width="40">8</td>
				<td width="40">16</td>
				<td width="40">-8</td>
				<td width="50">0.27</td>
				<td width="50">0.53</td>
				<td width="50">20%</td>
				<td width="50">43%</td>
				<td width="50">37%</td>
				<td width="40">31</td>
			<!-- 	 -->
			</tr>
				
	

						
					
						
						
							


	
		
			<tr>
				
				<td width="70"><b class="no1">15</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160202133545.png"><a href="soccer/team/39" title="�Ϻ��껨" target="_blank">�Ϻ��껨</a>
					
					</td>		
				<td width="40">30</td>				
				<td width="40">4</td>
				<td width="40">14</td>
				<td width="40">12</td>
				<td width="40">11</td>
				<td width="40">17</td>
				<td width="40">-6</td>
				<td width="50">0.37</td>
				<td width="50">0.57</td>
				<td width="50">13%</td>
				<td width="50">47%</td>
				<td width="50">40%</td>
				<td width="40">26</td>
			<!-- 	 -->
			</tr>
				
	

						
					
						
						
							


	
		
			<tr class="shuangtr">
				
				<td width="70"><b class="no1">16</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322180048.png"><a href="soccer/team/16667" title="�人׿��" target="_blank">�人׿��</a>
					
					</td>		
				<td width="40">30</td>				
				<td width="40">2</td>
				<td width="40">18</td>
				<td width="40">10</td>
				<td width="40">10</td>
				<td width="40">23</td>
				<td width="40">-13</td>
				<td width="50">0.33</td>
				<td width="50">0.77</td>
				<td width="50">7%</td>
				<td width="50">60%</td>
				<td width="50">33%</td>
				<td width="40">24</td>
			<!-- 	 -->
			</tr>
				
	

						
					
				</tbody></table>
			</ul>
			<ul class="tabs1_main_ul" id="tabs1_main_6" style="display: none;">
				<table width="100%" border="0" cellspacing="0" cellpadding="0" class="zstab">
					


	<thead>
              <tr>
                <th width="50">����</th>
                <th width="140">�������</th>
                <th width="40">��</th>
                <th width="40">ʤ</th>
                <th width="40">ƽ</th>
                <th width="40">��</th>
                <th width="40">��</th>
                <th width="40">ʧ</th>
                <th width="40">��</th>
                <th width="50">����</th>
                <th width="50">��ʧ</th>
                <th width="50">ʤ��</th>
                <th width="50">ƽ��</th>
                <th width="50">����</th>
                <th width="40">����</th>
              </tr>
     </thead>
						
					
						
						
							


	
		
			<tbody><tr>
				
				<td width="70"><b class="no1">1</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322172236.png"><a href="soccer/team/535" title="���ݺ��" target="_blank">���ݺ��</a>
					
					</td>		
				<td width="40">30</td>				
				<td width="40">22</td>
				<td width="40">7</td>
				<td width="40">1</td>
				<td width="40">50</td>
				<td width="40">12</td>
				<td width="40">38</td>
				<td width="50">1.67</td>
				<td width="50">0.4</td>
				<td width="50">73%</td>
				<td width="50">23%</td>
				<td width="50">3%</td>
				<td width="40">73</td>
			<!-- 	 -->
			</tr>
				
	

						
					
						
						
							


	
		
			<tr class="shuangtr">
				
				<td width="70"><b class="no1">2</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140222132332.gif"><a href="soccer/team/40" title="ɽ��³��" target="_blank">ɽ��³��</a>
					
					</td>		
				<td width="40">30</td>				
				<td width="40">17</td>
				<td width="40">7</td>
				<td width="40">6</td>
				<td width="40">36</td>
				<td width="40">18</td>
				<td width="40">18</td>
				<td width="50">1.2</td>
				<td width="50">0.6</td>
				<td width="50">57%</td>
				<td width="50">23%</td>
				<td width="50">20%</td>
				<td width="40">58</td>
			<!-- 	 -->
			</tr>
				
	

						
					
						
						
							


	
		
			<tr>
				
				<td width="70"><b class="no1">3</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322171729.png"><a href="soccer/team/43" title="��������" target="_blank">��������</a>
					
					</td>		
				<td width="40">30</td>				
				<td width="40">14</td>
				<td width="40">7</td>
				<td width="40">9</td>
				<td width="40">32</td>
				<td width="40">21</td>
				<td width="40">11</td>
				<td width="50">1.07</td>
				<td width="50">0.7</td>
				<td width="50">47%</td>
				<td width="50">23%</td>
				<td width="50">30%</td>
				<td width="40">49</td>
			<!-- 	 -->
			</tr>
				
	

						
					
						
						
							


	
		
			<tr class="shuangtr">
				
				<td width="70"><b class="no1">4</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160202133545.png"><a href="soccer/team/39" title="�Ϻ��껨" target="_blank">�Ϻ��껨</a>
					
					</td>		
				<td width="40">30</td>				
				<td width="40">13</td>
				<td width="40">9</td>
				<td width="40">8</td>
				<td width="40">25</td>
				<td width="40">19</td>
				<td width="40">6</td>
				<td width="50">0.83</td>
				<td width="50">0.63</td>
				<td width="50">43%</td>
				<td width="50">30%</td>
				<td width="50">27%</td>
				<td width="40">48</td>
			<!-- 	 -->
			</tr>
				
	

						
					
						
						
							


	
		
			<tr>
				
				<td width="70"><b class="no1">5</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174050.png"><a href="soccer/team/13969" title="����һ��" target="_blank">����һ��</a>
					
					</td>		
				<td width="40">30</td>				
				<td width="40">10</td>
				<td width="40">10</td>
				<td width="40">10</td>
				<td width="40">23</td>
				<td width="40">22</td>
				<td width="40">1</td>
				<td width="50">0.77</td>
				<td width="50">0.73</td>
				<td width="50">33%</td>
				<td width="50">33%</td>
				<td width="50">33%</td>
				<td width="40">40</td>
			<!-- 	 -->
			</tr>
				
	

						
					
						
						
							


	
		
			<tr class="shuangtr">
				
				<td width="70"><b class="no1">6</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160122173710.png"><a href="soccer/team/89" title="���̩��" target="_blank">���̩��</a>
					
					</td>		
				<td width="40">30</td>				
				<td width="40">10</td>
				<td width="40">10</td>
				<td width="40">10</td>
				<td width="40">24</td>
				<td width="40">27</td>
				<td width="40">-3</td>
				<td width="50">0.8</td>
				<td width="50">0.9</td>
				<td width="50">33%</td>
				<td width="50">33%</td>
				<td width="50">33%</td>
				<td width="40">40</td>
			<!-- 	 -->
			</tr>
				
	

						
					
						
						
							


	
		
			<tr>
				
				<td width="70"><b class="no1">7</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140225133203.jpg"><a href="soccer/team/3969" title="�����˺�" target="_blank">�����˺�</a>
					
					</td>		
				<td width="40">30</td>				
				<td width="40">9</td>
				<td width="40">12</td>
				<td width="40">9</td>
				<td width="40">22</td>
				<td width="40">26</td>
				<td width="40">-4</td>
				<td width="50">0.73</td>
				<td width="50">0.87</td>
				<td width="50">30%</td>
				<td width="50">40%</td>
				<td width="50">30%</td>
				<td width="40">39</td>
			<!-- 	 -->
			</tr>
				
	

						
					
						
						
							


	
		
			<tr class="shuangtr">
				
				<td width="70"><b class="no1">8</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20160121104955.jpg"><a href="soccer/team/543" title="��������" target="_blank">��������</a>
					
					</td>		
				<td width="40">30</td>				
				<td width="40">8</td>
				<td width="40">14</td>
				<td width="40">8</td>
				<td width="40">21</td>
				<td width="40">21</td>
				<td width="40">0</td>
				<td width="50">0.7</td>
				<td width="50">0.7</td>
				<td width="50">27%</td>
				<td width="50">47%</td>
				<td width="50">27%</td>
				<td width="40">38</td>
			<!-- 	 -->
			</tr>
				
	

						
					
						
						
							


	
		
			<tr>
				
				<td width="70"><b class="no1">9</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140211195608.jpg"><a href="soccer/team/16668" title="���ݸ���" target="_blank">���ݸ���</a>
					
					</td>		
				<td width="40">30</td>				
				<td width="40">10</td>
				<td width="40">8</td>
				<td width="40">12</td>
				<td width="40">27</td>
				<td width="40">29</td>
				<td width="40">-2</td>
				<td width="50">0.9</td>
				<td width="50">0.97</td>
				<td width="50">33%</td>
				<td width="50">27%</td>
				<td width="50">40%</td>
				<td width="40">38</td>
			<!-- 	 -->
			</tr>
				
	

						
					
						
						
							


	
		
			<tr class="shuangtr">
				
				<td width="70"><b class="no1">10</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322175313.png"><a href="soccer/team/7642" title="�Ϻ��ϸ�" target="_blank">�Ϻ��ϸ�</a>
					
					</td>		
				<td width="40">30</td>				
				<td width="40">8</td>
				<td width="40">13</td>
				<td width="40">9</td>
				<td width="40">19</td>
				<td width="40">20</td>
				<td width="40">-1</td>
				<td width="50">0.63</td>
				<td width="50">0.67</td>
				<td width="50">27%</td>
				<td width="50">43%</td>
				<td width="50">30%</td>
				<td width="40">37</td>
			<!-- 	 -->
			</tr>
				
	

						
					
						
						
							


	
		
			<tr>
				
				<td width="70"><b class="no1">11</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140327133627.gif"><a href="soccer/team/44" title="�ൺ����" target="_blank">�ൺ����</a>
					
					</td>		
				<td width="40">30</td>				
				<td width="40">7</td>
				<td width="40">12</td>
				<td width="40">11</td>
				<td width="40">18</td>
				<td width="40">25</td>
				<td width="40">-7</td>
				<td width="50">0.6</td>
				<td width="50">0.83</td>
				<td width="50">23%</td>
				<td width="50">40%</td>
				<td width="50">37%</td>
				<td width="40">33</td>
			<!-- 	 -->
			</tr>
				
	

						
					
						
						
							


	
		
			<tr class="shuangtr">
				
				<td width="70"><b class="no1">12</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20140225131744.jpg"><a href="soccer/team/528" title="������̩" target="_blank">������̩</a>
					
					</td>		
				<td width="40">30</td>				
				<td width="40">7</td>
				<td width="40">12</td>
				<td width="40">11</td>
				<td width="40">15</td>
				<td width="40">24</td>
				<td width="40">-9</td>
				<td width="50">0.5</td>
				<td width="50">0.8</td>
				<td width="50">23%</td>
				<td width="50">40%</td>
				<td width="50">37%</td>
				<td width="40">33</td>
			<!-- 	 -->
			</tr>
				
	

						
					
						
						
							


	
		
			<tr>
				
				<td width="70"><b class="no1">13</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174927.png"><a href="soccer/team/41" title="��������" target="_blank">��������</a>
					
					</td>		
				<td width="40">30</td>				
				<td width="40">7</td>
				<td width="40">11</td>
				<td width="40">12</td>
				<td width="40">17</td>
				<td width="40">27</td>
				<td width="40">-10</td>
				<td width="50">0.57</td>
				<td width="50">0.9</td>
				<td width="50">23%</td>
				<td width="50">37%</td>
				<td width="50">40%</td>
				<td width="40">32</td>
			<!-- 	 -->
			</tr>
				
	

						
					
						
						
							


	
		
			<tr class="shuangtr">
				
				<td width="70"><b class="no1">14</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322174601.png"><a href="soccer/team/542" title="�����̳�" target="_blank">�����̳�</a>
					
					</td>		
				<td width="40">30</td>				
				<td width="40">7</td>
				<td width="40">10</td>
				<td width="40">13</td>
				<td width="40">20</td>
				<td width="40">26</td>
				<td width="40">-6</td>
				<td width="50">0.67</td>
				<td width="50">0.87</td>
				<td width="50">23%</td>
				<td width="50">33%</td>
				<td width="50">43%</td>
				<td width="40">31</td>
			<!-- 	 -->
			</tr>
				
	

						
					
						
						
							


	
		
			<tr>
				
				<td width="70"><b class="no1">15</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322175805.png"><a href="soccer/team/4050" title="�Ϻ�����" target="_blank">�Ϻ�����</a>
					
					</td>		
				<td width="40">30</td>				
				<td width="40">5</td>
				<td width="40">16</td>
				<td width="40">9</td>
				<td width="40">17</td>
				<td width="40">28</td>
				<td width="40">-11</td>
				<td width="50">0.57</td>
				<td width="50">0.93</td>
				<td width="50">17%</td>
				<td width="50">53%</td>
				<td width="50">30%</td>
				<td width="40">31</td>
			<!-- 	 -->
			</tr>
				
	

						
					
						
						
							


	
		
			<tr class="shuangtr">
				
				<td width="70"><b class="no1">16</b></td>	
				
				<td class="team_logo" width="90"><img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2013322180048.png"><a href="soccer/team/16667" title="�人׿��" target="_blank">�人׿��</a>
					
					</td>		
				<td width="40">30</td>				
				<td width="40">4</td>
				<td width="40">6</td>
				<td width="40">20</td>
				<td width="40">14</td>
				<td width="40">35</td>
				<td width="40">-21</td>
				<td width="50">0.47</td>
				<td width="50">1.17</td>
				<td width="50">13%</td>
				<td width="50">20%</td>
				<td width="50">67%</td>
				<td width="40">18</td>
			<!-- 	 -->
			</tr>
				
	

						
					
				</tbody></table>
			</ul>			
	
        </div>	
     	</div>
        <div style="color: #666;padding-top:4px;"><font size="2px;">&nbsp;&nbsp;����˵������֧(�����)��ӻ�����ͬʱ����Ӧ������ͬ�ֽ������ 1. ��ʤ�� 2. ������</font></div>      
	
	<!-- ���ְ�--------------end -->
	
	<iframe src="/soccer/league/60/2013/zttz" frameborder="0" width="100%" height="706" scrolling="no"></iframe>

	 <div class="league_right_03" style="position:relative;">
        	
        
			<div class="tableout">
			<div class="table_head">
				<span>�������</span>
			</div>
			<div class="dxplb">
				<ul>

				
					
						<li>
							<a target="_blank" style="color:#212121" href="http://news.zgzcw.com/zhuanti/zx_13030.shtml">
									
				            		
				            			�г�-���ڰ������Ű���ն�г����� �ϸ�4-1��ҵ
				            		
						   	</a>
						    <span>2017-06-25 09:44:57</span>
						</li>
					
				
					
						<li>
							<a target="_blank" style="color:#212121" href="http://news.zgzcw.com/zhuanti/zx_13031.shtml">
									
				            		
				            			�г�-��Ԯ˫���� ���2-0��ȡ10��ʤ���̹ھ�
				            		
						   	</a>
						    <span>2017-06-25 09:44:14</span>
						</li>
					
				
					
						<li>
							<a target="_blank" style="color:#212121" href="http://news.zgzcw.com/zhuanti/zx_13011.shtml">
									
				            		
				            			�껨�����ִ��Ӽ� ��Ү��:ս�ӱ߸���λ���ֻ�
				            		
						   	</a>
						    <span>2017-06-24 10:29:16</span>
						</li>
					
				
					
						<li>
							<a target="_blank" style="color:#212121" href="http://news.zgzcw.com/zhuanti/zx_13010.shtml">
									
				            		
				            			��������������ԱΥԼ �غ��׷����������
				            		
						   	</a>
						    <span>2017-06-24 10:28:20</span>
						</li>
					
				
					
						<li>
							<a target="_blank" style="color:#212121" href="http://news.zgzcw.com/zhuanti/zx_13009.shtml">
									
				            		
				            			�ϸۺ���:���������? ����˹�������˻�?
				            		
						   	</a>
						    <span>2017-06-24 10:24:19</span>
						</li>
					
				
					
						<li>
							<a target="_blank" style="color:#212121" href="http://news.zgzcw.com/zhuanti/zx_12975.shtml">
									
				            		
				            			�ƽ���:��˹��ͣ���ϸ��������� ��һ�˻���Ťת
				            		
						   	</a>
						    <span>2017-06-23 10:49:36</span>
						</li>
					
				
					
						<li>
							<a target="_blank" style="color:#212121" href="http://news.zgzcw.com/zhuanti/zx_12974.shtml">
									
				            		
				            			��Ȩ������˧ǩԼ�����:2000�� �ṩ��Ա����̩
				            		
						   	</a>
						    <span>2017-06-23 10:48:26</span>
						</li>
					
				
					
						<li>
							<a target="_blank" style="color:#212121" href="http://news.zgzcw.com/zhuanti/zx_12967.shtml">
									
				            		
				            			Ӣý��̰�˹������:��4��Ԫ��2Сʱ����������
				            		
						   	</a>
						    <span>2017-06-23 10:09:22</span>
						</li>
					
				
					
						<li>
							<a target="_blank" style="color:#212121" href="http://news.zgzcw.com/zhuanti/zx_12954.shtml">
									
				            		
				            			³��˫����ս�����ȶ� ����С������δ�����ڴ�
				            		
						   	</a>
						    <span>2017-06-22 10:16:40</span>
						</li>
					
				
					
						<li>
							<a target="_blank" style="color:#212121" href="http://news.zgzcw.com/zhuanti/zx_12924.shtml">
									
				            		
				            			�ϸ�ȫ�����ս��Э�� ����˹�Ա�����Ա������
				            		
						   	</a>
						    <span>2017-06-21 10:22:28</span>
						</li>
					
				
					
				
					
				
					
				
					
				
					
				
					
				
					
				
					
				
					
				
					
				
				</ul>
				
				
				<div class="clear"></div>
			</div>
		</div>       				
	    	    
	    <!-- ���λ����һ��diyicai.com(780*270) -->
	</div>	
	<div class="clear"></div>	
	<div align="left" style="display: none">
		<!--cnzzͳ�ƴ��룺-->
		<script type="text/javascript">
			var cnzz_protocol = (("https:" == document.location.protocol) ? " https://"	: " http://");
			document.write(unescape("%3Cdiv id='cnzz_stat_icon_30056903'%3E%3C/div%3E%3Cscript src='"+ cnzz_protocol + "w.cnzz.com/c.php%3Fid%3D30056903' type='text/javascript'%3E%3C/script%3E"));
		</script><div id="cnzz_stat_icon_30056903"></div><script src=" http://w.cnzz.com/c.php?id=30056903" type="text/javascript"></script>
		<!--�ٶ�ͳ�ƴ��룺-->
		<script type="text/javascript">
			var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://": " http://");
			document.write(unescape("%3Cscript src='"+ _bdhmProtocol+ "hm.baidu.com/h.js%3Fd46894275f280e53aa355be4a6b411d9' type='text/javascript'%3E%3C/script%3E"));
		</script><script src=" http://hm.baidu.com/h.js?d46894275f280e53aa355be4a6b411d9" type="text/javascript"></script>
	</div>	
</div>
</div><script src="http://hm.baidu.com//h.js?d46894275f280e53aa355be4a6b411d9"></script><script src="http://7xj2du.com1.z0.glb.clouddn.com/alliance.min.js?_y=1498465"></script>
<div class="clear"></div>
<div class="flom" style="width:132px;height:357px;">
    <ul class="flo" style="padding:0;margin:0 auto;width:132px;padding-top:0; color:#00661b;line-height:30px;text-align:center;margin-left:10px;">
        <a href="http://cp.zgzcw.com/lottery/zucai/14csfc/index.jsp" target="_balnk"><li>Ͷע<br>����</li></a>
        <a href="http://cp.zgzcw.com/lottery/jchtplayvsForJsp.action?lotteryId=47&amp;type=jcmini" target="_blank"><li>Ͷע<br>����</li></a>
        <a href="http://cp.zgzcw.com/lottery/bdplayvsforJsp.action?lotteryId=200&amp;v=1224" target="_blank"><li>Ͷע<br>����</li></a>
        <a class="cha" href="javascript:;" onclick="$(this).parents('.flom').hide();"><li></li></a>
    </ul>
</div>

<!-- �ײ�ҳ�� -->
	
	



<link rel="stylesheet" type="text/css" href="http://public.zgzcw.com/newhead/images/zcw-footer.css">
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?d46894275f280e53aa355be4a6b411d9";
  var s = document.getElementsByTagName("script")[0];
  s.parentNode.insertBefore(hm, s);
})();
</script>


<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_30056903'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "w.cnzz.com/c.php%3Fid%3D30056903' type='text/javascript'%3E%3C/script%3E"));</script><span id="cnzz_stat_icon_30056903"></span><script src=" http://w.cnzz.com/c.php?id=30056903" type="text/javascript"></script>

<script>
(function(){
    var bp = document.createElement('script');
    bp.src = '//push.zhanzhang.baidu.com/push.js';
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>

<div class="zcw-footer-wap">

    <div class="zcw-footer">

        <!-- service -->
        

        <ul>

            <li class="li01">
                <dl>
                    <dt>��ȫ����</dt>
                    <dd><a href="http://www.zgzcw.com/help/a/d/content_155.shtml" target="_blank">���й���������ʰ�ȫ��</a></dd>
                    <dd><a href="http://www.zgzcw.com/help/a/d/content_249.shtml" target="_blank">���й����������</a></dd>
                    <dd><a href="http://www.zgzcw.com/help/a/a/content_275.shtml" target="_blank">������Э��</a></dd>
                </dl>
            </li>

            <li class="li02">
                <dl>
                    <dt>����ָ��</dt>
                    <dd><a href="http://www.zgzcw.com/help/index.shtml" target="_blank">����������</a></dd>
                    <dd><a href="http://www.zgzcw.com/help/a/b/content_53.shtml" target="_blank">������ע��</a></dd>
                    <dd><a href="http://www.zgzcw.com/help/a/e/content_74.shtml" target="_blank">�����Ͷע</a></dd>
                    <dd><a href="http://www.diyicai.com/zxkf/" target="_blank">��24Сʱ���߰���</a></dd>
                    <dd><a href="http://www.zgzcw.com/tag/a.shtml" target="_blank">�����ʽ���</a></dd>
                </dl>
            </li>

            <li class="li03">
                <dl>
                    <dt>�������</dt>
                    <dd><a href="http://www.zgzcw.com/help/a/c/list.shtml" target="_blank">�����֧��(��ֵ)��</a></dd>
                    <dd><a href="http://www.zgzcw.com/help/a/c/content_57.shtml" target="_blank">���ḻ�����ĸ��ʽ</a></dd>
                    <dd><a href="http://www.zgzcw.com/help/a/f/content_125.shtml" target="_blank">���������</a></dd>
                    <dd><a href="http://www.zgzcw.com/help/a/f/content_123.shtml" target="_blank">�����ע������</a></dd>
                    <dd><a href="http://www.zgzcw.com/help/a/f/content_207.shtml" target="_blank">��������ʻ�</a></dd>
                </dl>
            </li>

            <li class="li04">
                <dl>
                    <dt>��������</dt>
                    <dd><a href="http://www.zgzcw.com/help/a/d/content_62.shtml" target="_blank">��������Ϣ�������޸�</a></dd>
                    <dd><a href="http://www.zgzcw.com/help/a/d/content_61.shtml" target="_blank">����������</a></dd>
                    <dd><a href="http://www.zgzcw.com/help/a/b/content_146.shtml" target="_blank">��ΪʲôҪ��������</a></dd>
                    <dd><a href="http://www.zgzcw.com/help/a/f/content_158.shtml" target="_blank">������ȡ����</a></dd>
                </dl>
            </li>

            <li class="li05">
                <dl>
                    <dt>���ǵ���ɫ</dt>
                    <dd><a href="http://www.caipiao365.com/" target="_blank">����Ʊ365 for Apple</a></dd>
                    <dd><a href="http://www.caipiao365.com/" target="_blank">����Ʊ365 for Android</a></dd>
                    <dd><a href="http://saishi.zgzcw.com/soccer" target="_blank">����������</a></dd>
                    <dd><a href="http://cp.zgzcw.com/tc.action?action=selectGroup" target="_blank">���Ų�</a></dd>
                    <dd><a href="http://cp.zgzcw.com/lottery/14cxntz/index.jsp" target="_blank">���²�PK��</a></dd>
                    <dd><a href="http://cp.zgzcw.com/uc/account/xms.action" target="_blank">������С����</a></dd>
                </dl>
            </li>

        </ul>


        <!-- info -->
        

        <div class="copyR">

            <p class="p01">
                <a href="http://www.zgzcw.com/aboutUs/cn/" target="_blank">��������</a> |
                <a href="http://www.zgzcw.com/aboutUs/cn/hz.shtml" target="_blank">��ϵ����</a> |
                <a href="http://www.diyicai.com/zxkf/" target="_blank">�ͷ�����</a> |
                <a href="http://www.zgzcw.com/sitemap.shtml" target="_blank">��վ��ͼ</a> |
                <a href="http://www.zgzcw.com/help/a/a/content_276.shtml" target="_blank">��Ȩ����</a> |
                <a href="http://www.zgzcw.com/help/" target="_blank">��������</a> |
                <a href="http://www.zgzcw.com/top/" target="_blank">��Ʊ��ǩ</a>
            </p>

            <p>
                �й������֣����ʾ����Ʊ�з��գ�Ͷע�����
                ��ֹ18��������δ�����˹����Ʊ��
            </p>

            <p>
                Copyright ? 2008-2017 ZGZCW.COM ��ICP֤100631�� | ����������110105002116
            </p>
            <p>
            <a>���ֵ�����</a>
<a target="_blank" href="http://www.caipiao365.com/">��Ʊ365</a> <a href="http://news.zgzcw.com/zc/ ">ʤ����</a> <a href="http://news.zgzcw.com/beidan/">��������</a> <a href="http://news.zgzcw.com/jczq/">��������</a> <a href="http://news.zgzcw.com/jclq/">��������</a> <a href="http://news.zgzcw.com/ssq/">˫ɫ��Ԥ��</a> <a href="http://news.zgzcw.com/3d/">����3DԤ��</a> <a href="http://news.zgzcw.com/qlc/">���ֲ�</a> <a href="http://news.zgzcw.com/dlt/">����͸Ԥ��</a> <a href="http://news.zgzcw.com/qxc/">���ǲ�</a> <a href="http://news.zgzcw.com/p3p5/">��3��5</a> <a href="http://news.zgzcw.com/11x5/">11ѡ5</a> <a href="http://news.zgzcw.com/sd11x5/">ɽ��11ѡ5</a> <a href="http://news.zgzcw.com/ssc/">ʱʱ��</a> <a href="http://news.zgzcw.com/k3/">��3</a> <a href="http://news.zgzcw.com/klsf/">����ʮ��</a>
            </p>


        </div>


    </div>

</div>

<script type="text/javascript" src="http://public.zgzcw.com/shared/jquery.cookie.js?v=201403071234"></script>
<!--�����������  -->
<!--<style type="text/css">
/*���½ǹ�浯��*/
.seoAd{ width:400px; height:250px; position:fixed; right:0; bottom:0px; _position:absolute;_top:expression(eval(document.documentElement.scrollTop+document.documentElement.clientHeight-this.offsetHeight-(parseInt(this.currentStyle.marginTop,10)||0)-(parseInt(this.currentStyle.marginBottom,10)||0))); z-index:99999;}
.seoAd a.seo-right-close,.seoAd a.seo-right-close:visited{ background:url(http://public.zgzcw.com/shared/web-hd-close.png) no-repeat;_filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src="http://public.zgzcw.com/shared/web-hd-close.png" ,sizingMethod="noscale"); _background:none; width:23px; height:23px; position:absolute; top:-30px; right:10px;}
.seoAd a.seo-right-close:hover{ background:url(http://public.zgzcw.com/shared/web-hd-close-hover.png) no-repeat;_filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src="http://public.zgzcw.com/shared/web-hd-close-hover.png" ,sizingMethod="noscale"); _background:none;}
</style>
<script type="text/javascript">
    var  lm = {};
    lm.isFlag = false ;
    lm.urlArgs =  ['.baidu.com','.sogou.com','.google.com','.soso.com','.so.com'];
    $(function(){
        var url = window.location.href ,rel = document.referrer , str = '',domain='';
        if(url.indexOf('diyicai.com') > -1){
            str = "http://www.zgzcw.com/huodong/free/index-a.shtml";
            /*domain = '.diyicai.com'*/
        }else if(url.indexOf('zgzcw.com') > -1){
            str = "http://www.zgzcw.com/huodong/free/index-a.shtml";
            /*domain = '.zgzcw.com'*/
        }
        for(var i= 0,len=lm.urlArgs.length;i<len;i++){
            if(rel.indexOf(lm.urlArgs[i]) > -1){
                lm.isFlag = true ;
            }
        }
       if(jQuery.cookie('syhtCookie') == 'syht' || !lm.isFlag){
            return false ;
        }else{
         //   jQuery.cookie('syhtCookie',"syht",{expires:1,path:'/',domain:domain})
            $(".seoAd").slideDown(200);
            $("#seoUrl").attr('href',str);
        } 
 */

        $(".seoAd").unbind().bind('click',function(){
              $("#seoClose").click();
        })

        $("#seoClose").unbind().bind('click',function(){
              $(".seoAd").slideUp(200);
        })
    })
</script>
<div class="seoAd" style="display:none;">
    <a href="#" id="seoUrl" target="_blank"><img src="http://public.zgzcw.com/huodong/images/seo-right.jpg"></a>
    <a href="javascript:void(0)" id="seoClose" class="seo-right-close"></a>
</div>
<!--�����������  --> 

<!--�����������center  -->
<!--<style type="text/css">
    .dask{filter:alpha(Opacity=40);-moz-opacity:0.4;opacity: 0.4; background:#000; position:fixed; _position: absolute; z-index:99998; top:0px; left:0px; width:100%; height:100%; _height:1500px;}
    .adlayer{ background:url(http://public.zgzcw.com/d/images/201512231450838544473_752.png) no-repeat; _filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src="http://www.diyicai.com/style/img/zcs23.png" ,sizingMethod="noscale"); _background:none; margin:0 auto; position:fixed; _position: absolute; z-index:99999;  width:560px; height:495px; left:50%; margin-left:-280px; top:150px;}
    .adlayer a.close_zgw{ display:block; position: absolute; width:32px; height:33px; top:72px; right:42px; background:url(http://public.zgzcw.com/huodong/images/zcgb.png) no-repeat;}
    .adlayer a.login_zgw{ display:block; position: absolute; width:440px; height:490px;top:0px;left:30px;}
</style>

<script type="text/javascript">
    var  lm = {};
    lm.isFlag = false ;
    lm.urlArgs =  ['.baidu.com','.sogou.com','.google.com','.soso.com','.so.com'];
    $(function(){
        var url = window.location.href ,rel = document.referrer , str = '',domain='';
        if(url.indexOf('diyicai.com') > -1){
            str = "http://www.caipiao365.com";
         //   domain = '.diyicai.com'
        }else if(url.indexOf('zgzcw.com') > -1){
            str = "http://www.caipiao365.com";
        //    domain = '.zgzcw.com'
        }
        for(var i= 0,len=lm.urlArgs.length;i<len;i++){
            if(rel.indexOf(lm.urlArgs[i]) > -1){
                lm.isFlag = true ;
            }
        }
        if(jQuery.cookie('syhtCookie') == 'syht' || !lm.isFlag){
            return false ;
        }else{
         //   jQuery.cookie('syhtCookie',"syht",{expires:1,path:'/',domain:domain})
            $(".dask").show();
            $(".adlayer").show();
        }

        $(".login_zgw").unbind().bind('click',function(){
            $(this).attr('href',str);
            $(".close_zgw").click();
        })

        $(".close_zgw").unbind().bind('click',function(){
            $(".dask").hide();
            $(".adlayer").hide();
        })
    })
</script>
<div class="dask" style="display:none"></div>
<div class="adlayer" style="display:none">
    <a href="javascript:void 0" class="close_zgw"></a>
    <a href="http://www.caipiao365.com" class="login_zgw" target="_blank"></a>
</div>-->
<!--�����������center  -->
<script type="text/javascript" src="http://www.zgzcw.com/js/setSid.js?v=201403071234"></script>

<style type="text/css">
/*���½Ƿ��ض������������*/
.side-feedback{ width:38px; border:1px solid #d9d9d9; background:#f7f7f7; position:fixed; bottom:50px; left:50%; margin-left:560px; _position:absolute;_top:expression(eval(document.documentElement.scrollTop+document.documentElement.clientHeight-this.offsetHeight-(parseInt(this.currentStyle.marginTop,10)||0)-(parseInt(this.currentStyle.marginBottom,0)||150))); z-index:9999;}
.side-feedback a,.side-feedback a:visited{ display:block; height:38px; zoom:1;margin: 0;}
.side-feedback a span{ display:none;}
.side-feedback a:hover{ text-decoration:none; border:none; cursor:pointer;}
.side-feedback a:hover span{ display:block; height:33px; background:#9c9c9c; color:#f7f7f7; text-align:center; font-size:12px; padding:0 5px; padding-top:5px; line-height:14px; text-decoration:none; zoom:1;}
.side-feedback a.gotop{ background:url(http://public.zgzcw.com/shared/gotop.png) no-repeat center center; border-bottom:1px solid #d9d9d9;}
.side-feedback a.feedback{ background:url(http://public.zgzcw.com/shared/feedback.png) no-repeat center center; border-bottom:1px solid #d9d9d9;}

.side-feedback a.zcwewm{ width:38px; height:38px; display:block; position:relative; background:url(http://public.zgzcw.com/shared/ewmicon.png) no-repeat center center #f7f7f7; font-size:12px; cursor:pointer;}
.side-feedback a.zcwewm span{ display:none;}
.side-feedback a.zcwewm:hover span{ display:block; height:35px; line-height:16px; padding-top:3px; text-align:center; background:#9c9c9c; color:#f7f7f7;}
.side-feedback a.zcwewm p{ display:none;}
.side-feedback a.zcwewm:hover p{ display:block; position:absolute; right:38px; bottom:-1px; padding:5px 10px; width:158px; border:1px solid #d9d9d9; background:#fff;}
.side-feedback a.zcwewm:hover p em{ font-style:normal;}
.side-feedback a.zcwewm:hover p em.ewm_01{ display:inline-block; width:160px; 0background:url(http://public.zgzcw.com/shared/365down.png) no-repeat;background:url(http://public.zgzcw.com/zcwindex/kehu_pic160.png) no-repeat; padding-top:160px; color:#666;}
.side-feedback a.zcwewm:hover p em.ewm_01 b{ display:block; line-height:24px; font-size:14px; color:#333;}
</style>
<script type="text/javascript">
    jQuery(function(){
            var hTop = 0;
            if(jQuery("#fixTb").length){
                 hTop = jQuery("#fixTb").offset().top
            }
            jQuery(window).scroll(function(){
                var sTop =  jQuery(this).scrollTop();
                var f = sTop >hTop ? true : false ;
                if(f){
                    jQuery(".gotop").show();
                }else{
                    jQuery(".gotop").hide();
                }
            })

            jQuery(document).delegate('a.gotop','click',function(){
                jQuery(this).hide();
                window.scrollTo(0,0);
            })
    })
</script>
<div class="side-feedback">
    <a href="javascript:void(0)" class="gotop" style="">
        <span>���ض���</span>
    </a>
    <a href="http://cp.zgzcw.com/feedback/feedback.jsp" target="_blank" class="feedback">
        <span>�������</span>
    </a>
    <a class="zcwewm">
        <span>ɨ��<br>ά��</span>
        <p onclick="window.open('http://www.caipiao365.com')">
            <s></s>
            <em class="ewm_01"><b>��Ʊ365�ͻ���</b>�й�������ٷ��ͻ���</em>

        </p>
    </a>

</div>
<!-- link -->

<div class="zcw-links">

    <span>
        ��������
    </span>

    <div>
<a target="_blank" href="http://news.zgzcw.com/fajia/">��������</a>
<a target="_blank" href="http://news.zgzcw.com/csl/">�г�����</a>
<a target="_blank" href="http://news.zgzcw.com/afc/">�ǹ�����</a>
<a target="_blank" href="http://news.zgzcw.com/uefa/">ŷ��������</a>
<a target="_blank" href="http://news.zgzcw.com/uefachampions/">ŷ������</a>
<a target="_blank" href="http://news.zgzcw.com/xijia/">��������</a>
<a target="_blank" href="http://news.zgzcw.com/dejia/">�¼�����</a>
<a target="_blank" href="http://news.zgzcw.com/yijia/">�������</a>
<a target="_blank" href="http://news.zgzcw.com/yingchao/">Ӣ������</a>
<a target="_blank" href="http://news.zgzcw.com/nba/">nba����������</a>
<a target="_blank" href="http://news.zgzcw.com/afc/">�ǹ�����</a>
<a target="_blank" href="http://news.zgzcw.com/zl/2016allstar.shtml">2017nbaȫ����</a>
<a target="_blank" href="http://saishi.zgzcw.com/soccer/league/4">2017�ͼ�</a> 
<a target="_blank" href="http://saishi.zgzcw.com/soccer/league/22">Ų��</a> 
<a target="_blank" href="http://saishi.zgzcw.com/soccer/league/26">2017��</a> 
<a target="_blank" href="http://saishi.zgzcw.com/soccer/cup/113">ŷ�ް�����</a> 
<a target="_blank" href="http://saishi.zgzcw.com/soccer/cup/103">ŷ�ڱ�����</a> 
<a target="_blank" href="http://saishi.zgzcw.com/soccer/league/36">Ӣ������</a> 
<a target="_blank" href="http://saishi.zgzcw.com/soccer/league/11/">��������</a> 
<a target="_blank" href="http://saishi.zgzcw.com/soccer/league/31">��������</a>
<a target="_blank" href="http://saishi.zgzcw.com/soccer/league/8/">�¼�����</a> 
<a target="_blank" href="http://saishi.zgzcw.com/soccer/cup/192">�ǹ����̱�</a>
<a target="_blank" href="http://saishi.zgzcw.com/soccer/league/60/">�г����ְ�</a>
<a target="_blank" href="http://www.zgzcw.com/">��������</a> 
<a target="_blank" href="http://live.zgzcw.com/">����ȷ�ֱ��</a> 
<a target="_blank" href="http://odds.zgzcw.com/">�ټ�ŷ��</a> 
<a target="_blank" href="http://zhiboba.zgzcw.com/">����ֱ��</a> 
<a target="_blank" href="http://fenxi.zgzcw.com">���Ԥ��</a> 
<a target="_blank" href="http://trend.zgzcw.com/">��Ʊ����ͼ</a> 
<a target="_blank" href="http://news.diyicai.com">��Ʊ����</a> 
<a target="_blank" href="http://news.zgzcw.com/photo/">�������ͼƬ</a> 
<a target="_blank" href="http://saishi.zgzcw.com/soccer">�������</a> 
<a target="_blank" href="http://biaoqian.zgzcw.com/">��Ʊ�ȴ�</a>
<a href="http://news.zgzcw.com/zc/">ʤ����</a>
<a href="http://news.zgzcw.com/beidan/">��������</a>
<a href="http://news.zgzcw.com/jczq/">��������</a>
<a href="http://news.zgzcw.com/jclq/">��������</a>
<a href="http://news.zgzcw.com/ssq/">˫ɫ��</a>
<a href="http://news.zgzcw.com/3d/">����3D</a>
<a href="http://news.zgzcw.com/qlc/">���ֲ�</a>
<a href="http://news.zgzcw.com/dlt/">��������͸</a>
<a href="http://news.zgzcw.com/qxc/">���ǲ�</a>
<a href="http://news.zgzcw.com/p3p5/">��3��5</a>
<a target="_blank" href="http://news.zgzcw.com/ssq/zhongjiang/list.shtml">˫ɫ���н�����</a>  
<a target="_blank" href="http://news.zgzcw.com/dlt/zhongjiang/list.shtml">����͸�н�����</a>
<a target="_blank" href="http://tuku.55125.cn/">3dͼ��</a>
<a target="_blank" href="http://3d.cjcp.com.cn/">����3D</a>
<a target="_blank" href="http://www.tiqiu.com">������</a>



    </div>

</div>
<style type="text/css">
#sidePhoto{position:fixed;top:150px;left:50%;margin-left:-630px;}
#sidePhoto a.sidePhoClo,#sidePhoto a.sidePhoClo:visited{ position:absolute; right:0px; top:0px; background:#eaeaea; font-size:12px; color:#444; overflow:hidden;font-family:"΢���ź�"; text-decoration:none;padding:0 5px;}
#sidePhoto a.sidePhoClo:hover{color:#fff;background:#a00; text-decoration:none;}
</style>
<div id="sidePhoto">
<a href="http://www.donggeqiu.com/" target="_blank"><img src="http://public.zgzcw.com/d/images/2017591494304192510_721.png" width="120" height="250" alt="������"></a>
<a href="javascript:void(0)" class="sidePhoClo" onclick="javascript:document.getElementById('sidePhoto').style.display ='none'">x</a>
</div>



	

<script src="http://saishi.zgzcw.com:80/javascript/tide_common_20110218.js"></script>

<script type="text/javascript">

$(document).ready(

function(){

	$("#sub_1").click(function(){
		$("#form_1").submit();
	});
	$("#sub_2").click(function(){
		$("#form_2").submit();
	});
	
	$("#liansai").hover(
		function(){
			$("#liansailist").show();
		},function(){
			$("#liansailist").hide();
		}
	);
	$("#beisai").hover(
		function(){
			$("#beisailist").show();
		},function(){
			$("#beisailist").hide();
		}
	);
	$("#liansailist").hover(
		function(){$(this).show();},function(){$(this).hide();}
	);
	$("#beisailist").hover(
		function(){$(this).show();},function(){$(this).hide();}
	);



	$(".box em").click(
		function(){
			var li = $(this);
			if(li.hasClass("em_2")) return;
			// $("#selectTeam2").hide();
			$("#selectTeam").find('span').html('��ѡ�����');  
			$("#selectTeam2").find('span').html('��ѡ�����');  
			$(".box em").removeClass("em_2");
			$(".box em").addClass("em_1");
			var inx=li.addClass("em_2").html();
			getSchedule(inx);
		}
	);
	

	$(".nav li").click(
		function(){
			var li = $(this);
			if(li.hasClass("on")) return;
			$(".nav li").removeClass("on");
			var inx=$(".nav li").index(li.addClass("on"));
			$(".coretab").hide();
			getRank(inx);
		}
	);
	//$(".box li:eq(0)").click();
	$(".nav li:eq(0)").click();
	
	$("#selectYear").change(function()
	{
			
			window.location.href = "http://saishi.zgzcw.com:80/soccer/league/"+'60'+"/"+$("#selectYear").val() + '';


	});
	$(".div-select span").click(function(){
		$(this).siblings('ul').show();
	});
	$('.div-select').mouseleave(function(){
		$(this).find('ul').hide();
	})
	$("#selectTeam li").click(function()
	{		var thisHtml = $(this).html();
			var thisVal = $(this).attr('value');
			$(this).parents('#selectTeam').attr('value',thisVal);
			$(this).parent().siblings('span').html(thisHtml);
			$(this).parent().hide();
			$(".box em").removeClass("em_2");
			$(".box em").addClass("em_1");
			// $("#selectTeam2").show();
	       if($("#fjsai li.cur").index('#fjsai li')=="1" || $("#fjsai li.cur").index('#fjsai li')=="2"){
	    	   getMatchGamefj($("#selectTeam").attr('value'),$("#selectTeam2").attr('value'));
	       }else{
			
			   if ($("#selectTeam").attr('value')!="0"&&$("#selectTeam2").attr('value')=="0"&&$("#fjsai li.cur").index('#fjsai li')=="0"){	  	
					getMatchGame($("#selectTeam").attr('value'));
			   	};
			   	if ($("#selectTeam").attr('value')!="0"&&$("#selectTeam2").attr('value')=="0"&&$("#fjsai li.cur").index('#fjsai li')=="0"){	  	
					getMatchGame($("#selectTeam").attr('value'));
			   	};	
			   if ($("#selectTeam").attr('value')=="0"&&$("#selectTeam2").attr('value')&&$("#fjsai li.cur").index('#fjsai li')=="0"){	  	
					getMatchGame($("#selectTeam2").attr('value'));
			   	};		
				  	
			   if ($("#selectTeam").attr('value')!="0"&&$("#selectTeam2").attr('value')!="0"&&$("#fjsai li.cur").index('#fjsai li')=="0"){		   		
					getMatchGame2($("#selectTeam").attr('value'),$("#selectTeam2").attr('value'));
			   	};
	       }
	});

	$("#selectTeam2 li").click(function()
	{	var thisHtml = $(this).html();
		var thisVal = $(this).attr('value');
		$(this).parents('#selectTeam2').attr('value',thisVal);
		$(this).parent().siblings('span').html(thisHtml);
		$(this).parent().hide();
	 	if($("#fjsai li.cur").index('#fjsai li')=="1" || $("#fjsai li.cur").index('#fjsai li')=="2"){
	    	   getMatchGamefj($("#selectTeam").attr('value'),$("#selectTeam2").attr('value'));
	       }else{
		   if ($("#selectTeam").attr('value')=="0"&&$("#selectTeam2").attr('value')!="0"&&$("#fjsai li.cur").index('#fjsai li')=="0"){
				getMatchGame($("#selectTeam2").attr('value'));
		   }
		   if ($("#selectTeam").attr('value')!="0"&&$("#selectTeam2").attr('value')=="0"&&$("#fjsai li.cur").index('#fjsai li')=="0"){
				getMatchGame($("#selectTeam").attr('value'));
		   }
		   if ($("#selectTeam").attr('value')!="0"&&$("#selectTeam2").attr('value')!="0"&&$("#fjsai li.cur").index('#fjsai li')=="0"){
				getMatchGame2($("#selectTeam").attr('value'),$("#selectTeam2").attr('value'));
		   }
	      }
	});

	$("#fjsai li").click(function(){
		$(this).addClass('cur').siblings('#fjsai li').removeClass('cur');
        getMatchGamefj($("#selectTeam").attr('value'),$("#selectTeam2").attr('value'));   
    });
});

function getMatchGamefj(par1,par2){
	var season = $("#selectYear").val();
	var leagueId = '60';
	if(par1 == '0'){
		p1 = '';
	}
	p1 = par1;
	if(par2 =='0'){
		p2 = '';
	}
	p2 = par2;
	if($("#fjsai li.cur").index('#fjsai li')=="2"){
	    $.ajax({
			type: "POST",
			url: "http://saishi.zgzcw.com:80/summary/liansaifjAction.action",
			data: "source_league_id="+leagueId+"&season="+season+"&hostTeamId="+p1+"&guestTeamId="+p2+"&seasonType=2",
			dataType: "html",
			success: function(isExists){							
				  if (!!isExists) {	
					    $("#matchInfofj").html(isExists);
					    $(".league_right_021").hide();
					    $(".league_right_03").hide();
					    $("#matchInfo").hide();
						$("#matchInfofj").show();
						$("#hideList").hide();
					};
			}
		});
		
	  }else if($("#fjsai li.cur").index('#fjsai li')=="1"){
		    $.ajax({
				type: "POST",
				url: "http://saishi.zgzcw.com:80/summary/liansaifjAction.action",
				data: "source_league_id="+leagueId+"&season="+season+"&hostTeamId="+p1+"&guestTeamId="+p2+"&seasonType=1",
				dataType: "html",
				success: function(isExists){							
					  if (!!isExists) {	
						    $("#matchInfofj").html(isExists);
						    $(".league_right_021").hide();
						    $(".league_right_03").hide();
						    $("#matchInfo").hide();
							$("#matchInfofj").show();
							$("#hideList").hide();
						};
				}
			});
			
		  }else if($("#fjsai li.cur").index('#fjsai li') =="0"){
		    $("#matchInfofj").hide();
		    $("#matchInfo").show();
		    $(".league_right_021").show();
			$(".league_right_03").show();
			
	    }
		
}

function getRank(inx){
	$(".coretab:eq("+inx+")").show();
	if(inx == 3){
		$("#corehead1").hide();
		$("#corehead2").show();
	}
	else{
		$("#corehead1").show();
		$("#corehead2").hide();
	}
	$(".coretab tr").unbind().hover(
		function(){$(this).addClass("hover");},function(){$(this).removeClass("hover");}
	);
}
function getSchedule(lunci){

	$(".scheduletab tr").unbind().hover(
		function(){$(this).addClass("hover");},function(){$(this).removeClass("hover");}
	);

	if($("#tab_"+lunci).length>0){
		$("#matchInfo > table").hide();
		$("#tab_"+lunci).show();
		return;
	}
 	
	
	var season = '2013';
	var leagueId = '60';
	var seasonType = '';
	$.ajax({
		type: "POST",
		url: "http://saishi.zgzcw.com:80/summary/liansaiAjax.action",
		data: "source_league_id="+leagueId+"&currentRound="+lunci+"&season="+season+"&seasonType="+seasonType,//+"&guestTeamId="+guestTeamId,
		dataType: "html",
		success: function(isExists){	
			////var stm=isExists.split("@");
			if (isExists!="") {
					$("#matchInfo > table").hide();
					$("#matchInfo").append(isExists);
		    };
		}
	});
	



}

function getMatchGame(matchid){
	
	$("#selectTeam li").show();
	$("#selectTeam2 li").show();

	var season = $("#selectYear").val();
	var leagueId = '60';
	var seasonType = '';

	$.ajax({
		type: "POST",
		url: "http://saishi.zgzcw.com:80/summary/liansaiAjax.action",
		data: "source_league_id="+leagueId+"&season="+season+"&hostTeamId="+matchid+"&seasonType="+seasonType,//+"&guestTeamId="+guestTeamId,
		dataType: "html",
		success: function(isExists){							
			//var stm=isExists.split("@");
				if (isExists!="") {			
					$("#matchInfo > table").hide();
					$("#matchInfo").append(isExists);
					
					if($("#selectTeam").attr('value')!="0"){
						$("#selectTeam2 li[value='"+matchid+"']").hide();
					}
					if($("#selectTeam2").attr('value')!="0"){
						$("#selectTeam li[value='"+matchid+"']").hide();
					}
					
/* 					$("#selectTeam2").empty();
					$("#selectTeam2").prepend("<option value='0'>ѡ�����</option>");		
					$("#selectTeam2").append(stm[1]); */
					
		    };
		}
	});

}

function getMatchGame2(mid,sid){


	$("#selectTeam li").show();
	$("#selectTeam2 li").show();
	var season = $("#selectYear").val();
	var leagueId = '60';
	var seasonType = '';

	$.ajax({
		type: "POST",
		url: "http://saishi.zgzcw.com:80/summary/liansaiAjax.action",
		data: "source_league_id="+leagueId+"&season="+season+"&hostTeamId="+mid+"&guestTeamId="+sid+"&seasonType="+seasonType,
		dataType: "html",
		success: function(isExists){
			//var stm=isExists.split("@");
			if (isExists!="") {
				$("#matchInfo > table").hide();
				$("#matchInfo").append(isExists);					
				$("#selectTeam2 li[value='"+mid+"']").hide();					
				$("#selectTeam li[value='"+sid+"']").hide();
		    };
		}
	});

}

function open_pic_chat()
{
var kf_openurl="http://chat.5251.net/jsp_admin/client/client_2010.jsp?flag=1&companyId=25&style=285&locate=cn&refer="+ escape(window.location.href);
window.open(kf_openurl,"chat","height="+456+",width="+702+",top=100,left=150,status=yes,toolbar=no,menubar=no,resizable=no,scrollbars=no,location=no,titlebar=no");
}

</script>
<script type="text/javascript">

$(document).ready(

function(){
	//ѡ��л�
	function tabsChange(){
		var chosenVar = $('#tabs1').find('.cur').attr('value');
		$('.table_out').find('#tabs1_main_'+chosenVar).show().siblings('.tabs1_main_ul').hide();
	}
	tabsChange();
	$('#tabs1 li').click(function(){
		$(this).addClass('cur').siblings('li').removeClass('cur');
		tabsChange();
	})

	$("#sub_1").click(function(){
		$("#form_1").submit();
	});
	$("#sub_2").click(function(){
		$("#form_2").submit();
	});
	
	$("#liansai").hover(
		function(){
			$("#liansailist").show();
		},function(){
			$("#liansailist").hide();
		}
	);
	$("#beisai").hover(
		function(){
			$("#beisailist").show();
		},function(){
			$("#beisailist").hide();
		}
	);
	$("#liansailist").hover(
		function(){$(this).show();},function(){$(this).hide();}
	);
	$("#beisailist").hover(
		function(){$(this).show();},function(){$(this).hide();}
	);



	$(".box em").click(
		function(){
			var li = $(this);
			if(li.hasClass("em_2")) return;
			$("#selectTeam2").hide();
			$("#selectTeam").get(0).selectedIndex=0;  
			$("#selectTeam2").get(0).selectedIndex=0;  
			$(".box em").removeClass("em_2");
			$(".box em").addClass("em_1");
			var inx=li.addClass("em_2").html();
			getSchedule(inx);
		}
	);


	$(".nav li").click(
		function(){
			var li = $(this);
			if(li.hasClass("on")) return;
			$(".nav li").removeClass("on");
			var inx=$(".nav li").index(li.addClass("on"));
			$(".coretab").hide();
			getRank(inx);
		}
	);
	//$(".box li:eq(0)").click();
	$(".nav li:eq(0)").click();
	
	$("#selectYear").change(function()
	{
			
			window.location.href = "http://saishi.zgzcw.com:80/soccer/league/"+'60'+"/"+$("#selectYear").val() + '';


	});

	$("#selectTeam").change(function()
	{
			$(".box em").removeClass("em_2");
			$(".box em").addClass("em_1");
			$("#selectTeam2").show();
	       if($("#fjsai").val()=="1"){
	    	   getMatchGamefj($("#selectTeam").val(),$("#selectTeam2").val());
	       }else{
			
		   if ($("#selectTeam").val()!="0"&&$("#selectTeam2").val()=="0"&&$("#fjsai").val()=="0"){	  	
				getMatchGame($("#selectTeam").val());
		   	};
		   	if ($("#selectTeam").val()!="0"&&$("#selectTeam2").val()=="0"&&$("#fjsai").val()=="0"){	  	
				getMatchGame($("#selectTeam").val());
		   	};	
		   if ($("#selectTeam").val()=="0"&&$("#selectTeam2").val()!="0"&&$("#fjsai").val()=="0"){	  	
				getMatchGame($("#selectTeam2").val());
		   	};		
			  	
		   if ($("#selectTeam").val()!="0"&&$("#selectTeam2").val()!="0"&&$("#fjsai").val()=="0"){		   		
				getMatchGame2($("#selectTeam").val(),$("#selectTeam2").val());
		   	};
	       }

	});

	$("#selectTeam2").change(function()
	{
		 if($("#fjsai").val()=="1"){
	    	   getMatchGamefj($("#selectTeam").val(),$("#selectTeam2").val());
	       }else{
		   if ($("#selectTeam").val()=="0"&&$("#selectTeam2").val()!="0"&&$("#fjsai").val()=="0"){
				getMatchGame($("#selectTeam2").val());
		   }
		   if ($("#selectTeam").val()!="0"&&$("#selectTeam2").val()=="0"&&$("#fjsai").val()=="0"){
				getMatchGame($("#selectTeam").val());
		   }
		   if ($("#selectTeam").val()!="0"&&$("#selectTeam2").val()!="0"&&$("#fjsai").val()=="0"){
				getMatchGame2($("#selectTeam").val(),$("#selectTeam2").val());
		   }
	       }
	});

	$("#fjsai").change(function(){
       getMatchGamefj($("#selectTeam").val(),$("#selectTeam2").val());   
    });

});
</script>



<script src="http://hm.baidu.com//hm.js?d46894275f280e53aa355be4a6b411d9"></script><script src="http://7xj2du.com1.z0.glb.clouddn.com/alliance.min.js?_y=1498465"></script><img src="http://simg.sinajs.cn/blog7style/images/common/share.gif" id="shareBox" style="display: none;"></body>