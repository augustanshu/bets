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
 <p> <span id="nyr">2017-2-10</span> <br>
    <b id="xt_h">9</b><b id="xt_m">18</b><b id="xt_s">14</b> </p>
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
						
				  		
				  		
				  		
				  		
				  			
				  			<img src="http://img.zgzcw.com/zgzcw/matchCenter/league/images/20130118151214.jpg" width="100" height="100" border="0">
				  			
				  		
					</dt>
					<dd>
					
						[����]
				    
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
	                <ul class="select_options">
	                 
	                 
	                  
	                  
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
				
					<div>����ͳ��</div>
					<ul>
						<li class="cur">
						<a href="http://saishi.zgzcw.com:80/soccer/league/12">
						������Ϣ</a></li>
	                   
						<li>
						<a href="http://saishi.zgzcw.com:80/soccer/league/12/2015-2016/ssb">
						���ְ�</a></li>
						<li>
						<a href="http://saishi.zgzcw.com:80/soccer/league/12/2015-2016/jqds">
						�ܽ���˫</a></li>
						<li>
						<a href="http://saishi.zgzcw.com:80/soccer/league/12/2015-2016/sxds">
						���µ�˫</a></li>
						<li>
						<a href="http://saishi.zgzcw.com:80/soccer/league/12/2015-2016/sxpl">
						������·��</a></li>
					</ul>
				</div>
			
			<div class="tongji_list">
				<div>����б�</div>
				<ul>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/320" target="_blank" class="a1" title="����">
					<li>����</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/301" target="_blank" class="a1" title="����">
					<li>����</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/313" target="_blank" class="a1" title="������">
					<li>������</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/214" target="_blank" class="a1" title="÷˹">
					<li>÷˹</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/335" target="_blank" class="a1" title="�հ�����">
					<li>�հ�����</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/1744" target="_blank" class="a1" title="��ķ">
					<li>��ķ</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/215" target="_blank" class="a1" title="ŷ����">
					<li>ŷ����</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/7052" target="_blank" class="a1" title="������">
					<li>������</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/12220" target="_blank" class="a1" title="ʥ������">
					<li>ʥ������</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/374" target="_blank" class="a1" title="����̩��">
					<li>����̩��</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/2105" target="_blank" class="a1" title="��ά��">
					<li>��ά��</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/202" target="_blank" class="a1" title="��˹">
					<li>��˹</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/2104" target="_blank" class="a1" title="����л��">
					<li>����л��</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/325" target="_blank" class="a1" title="��¶�">
					<li>��¶�</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/2103" target="_blank" class="a1" title="ͼ��">
					<li>ͼ��</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/330" target="_blank" class="a1" title="������">
					<li>������</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/306" target="_blank" class="a1" title="����˹��">
					<li>����˹��</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/267" target="_blank" class="a1" title="��Ф">
					<li>��Ф</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/194" target="_blank" class="a1" title="���ſ�Ф">
					<li>���ſ�Ф</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/1796" target="_blank" class="a1" title="����FC">
					<li>����FC</li>
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
					
						
							<option value="2016-2017">2016-2017����</option>
						
					
						
							<option value="2015-2016" selected="selected">2015-2016����</option>
						
					
						
							<option value="2014-2015">2014-2015����</option>
						
					
						
							<option value="2013-2014">2013-2014����</option>
						
					
						
							<option value="2012-2013">2012-2013����</option>
						
					
						
							<option value="2011-2012">2011-2012����</option>
						
					
						
							<option value="2010-2011">2010-2011����</option>
						
					
						
							<option value="2009-2010">2009-2010����</option>
						
					
						
							<option value="2008-2009">2008-2009����</option>
						
					
						
							<option value="2007-2008">2007-2008����</option>
						
					
						
							<option value="2006-2007">2006-2007����</option>
						
					
						
							<option value="2005-2006">2005-2006����</option>
						
					
						
							<option value="2004-2005">2004-2005����</option>
						
					
				</select> <select id="selectTeam">
					<option value="0" selected="selected">ѡ�����</option>
					
						<option value="194">���ſ�Ф</option>
					
						<option value="202">��˹</option>
					
						<option value="214">÷˹</option>
					
						<option value="215">ŷ����</option>
					
						<option value="267">��Ф</option>
					
						<option value="301">����</option>
					
						<option value="306">����˹��</option>
					
						<option value="313">������</option>
					
						<option value="320">����</option>
					
						<option value="325">��¶�</option>
					
						<option value="330">������</option>
					
						<option value="335">�հ�����</option>
					
						<option value="374">����̩��</option>
					
						<option value="1744">��ķ</option>
					
						<option value="1796">����FC</option>
					
						<option value="2103">ͼ��</option>
					
						<option value="2104">����л��</option>
					
						<option value="2105">��ά��</option>
					
						<option value="7052">������</option>
					
						<option value="12220">ʥ������</option>
					
				</select> <select id="selectTeam2" style="display:none;">
					<option value="0" selected="selected">ѡ�����</option>
					
						<option value="194">���ſ�Ф</option>
					
						<option value="202">��˹</option>
					
						<option value="214">÷˹</option>
					
						<option value="215">ŷ����</option>
					
						<option value="267">��Ф</option>
					
						<option value="301">����</option>
					
						<option value="306">����˹��</option>
					
						<option value="313">������</option>
					
						<option value="320">����</option>
					
						<option value="325">��¶�</option>
					
						<option value="330">������</option>
					
						<option value="335">�հ�����</option>
					
						<option value="374">����̩��</option>
					
						<option value="1744">��ķ</option>
					
						<option value="1796">����FC</option>
					
						<option value="2103">ͼ��</option>
					
						<option value="2104">����л��</option>
					
						<option value="2105">��ά��</option>
					
						<option value="7052">������</option>
					
						<option value="12220">ʥ������</option>
					
				</select>
				<select id="fjsai">
				<option value="0" selected="selected">����</option>
				<option value="1" >������</option>
				</select>
			</div>
			����2015-2016 -- ����&nbsp;
						
			
		</div> -->
	<div class="table_out">
		<div class="table_head">
			<div class="team_out2">
			
				<div class="div-select team_lian fl" id="selectTeam" value="0">
                    <span>��ѡ�����</span>
                    <ul class="select_options">
                        
							<li value="194">���ſ�Ф</li>
						
							<li value="202">��˹</li>
						
							<li value="214">÷˹</li>
						
							<li value="215">ŷ����</li>
						
							<li value="267">��Ф</li>
						
							<li value="301">����</li>
						
							<li value="306">����˹��</li>
						
							<li value="313">������</li>
						
							<li value="320">����</li>
						
							<li value="325">��¶�</li>
						
							<li value="330">������</li>
						
							<li value="335">�հ�����</li>
						
							<li value="374">����̩��</li>
						
							<li value="1744">��ķ</li>
						
							<li value="1796">����FC</li>
						
							<li value="2103">ͼ��</li>
						
							<li value="2104">����л��</li>
						
							<li value="2105">��ά��</li>
						
							<li value="7052">������</li>
						
							<li value="12220">ʥ������</li>
						
                    </ul>
                </div>
                <b class="qxzqd fl">VS</b>
                <div class="div-select fl" style="margin-left:20px;" id="selectTeam2" value="0">
                    <span>��ѡ�����</span>
                    <ul class="select_options">
                        
							<li value="194">���ſ�Ф</li>
						
							<li value="202">��˹</li>
						
							<li value="214">÷˹</li>
						
							<li value="215">ŷ����</li>
						
							<li value="267">��Ф</li>
						
							<li value="301">����</li>
						
							<li value="306">����˹��</li>
						
							<li value="313">������</li>
						
							<li value="320">����</li>
						
							<li value="325">��¶�</li>
						
							<li value="330">������</li>
						
							<li value="335">�հ�����</li>
						
							<li value="374">����̩��</li>
						
							<li value="1744">��ķ</li>
						
							<li value="1796">����FC</li>
						
							<li value="2103">ͼ��</li>
						
							<li value="2104">����л��</li>
						
							<li value="2105">��ά��</li>
						
							<li value="7052">������</li>
						
							<li value="12220">ʥ������</li>
						
                    </ul>
                </div>
               
			</div>
			<span>
				2015-2016��������
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
				
					
						<option value="2016-2017">2016-2017����</option>
					
				
					
						<option value="2015-2016" selected="selected">2015-2016����</option>
					
				
					
						<option value="2014-2015">2014-2015����</option>
					
				
					
						<option value="2013-2014">2013-2014����</option>
					
				
					
						<option value="2012-2013">2012-2013����</option>
					
				
					
						<option value="2011-2012">2011-2012����</option>
					
				
					
						<option value="2010-2011">2010-2011����</option>
					
				
					
						<option value="2009-2010">2009-2010����</option>
					
				
					
						<option value="2008-2009">2008-2009����</option>
					
				
					
						<option value="2007-2008">2007-2008����</option>
					
				
					
						<option value="2006-2007">2006-2007����</option>
					
				
					
						<option value="2005-2006">2005-2006����</option>
					
				
					
						<option value="2004-2005">2004-2005����</option>
					
				
			</select>
			<!-- <select id="selectTeam">
				<option value="0" selected="selected">ѡ�����</option>
				
					<option value="194">���ſ�Ф</option>
				
					<option value="202">��˹</option>
				
					<option value="214">÷˹</option>
				
					<option value="215">ŷ����</option>
				
					<option value="267">��Ф</option>
				
					<option value="301">����</option>
				
					<option value="306">����˹��</option>
				
					<option value="313">������</option>
				
					<option value="320">����</option>
				
					<option value="325">��¶�</option>
				
					<option value="330">������</option>
				
					<option value="335">�հ�����</option>
				
					<option value="374">����̩��</option>
				
					<option value="1744">��ķ</option>
				
					<option value="1796">����FC</option>
				
					<option value="2103">ͼ��</option>
				
					<option value="2104">����л��</option>
				
					<option value="2105">��ά��</option>
				
					<option value="7052">������</option>
				
					<option value="12220">ʥ������</option>
				
			</select>
			<select id="selectTeam2">
				<option value="0" selected="selected">ѡ�����</option>
				
					<option value="194">���ſ�Ф</option>
				
					<option value="202">��˹</option>
				
					<option value="214">÷˹</option>
				
					<option value="215">ŷ����</option>
				
					<option value="267">��Ф</option>
				
					<option value="301">����</option>
				
					<option value="306">����˹��</option>
				
					<option value="313">������</option>
				
					<option value="320">����</option>
				
					<option value="325">��¶�</option>
				
					<option value="330">������</option>
				
					<option value="335">�հ�����</option>
				
					<option value="374">����̩��</option>
				
					<option value="1744">��ķ</option>
				
					<option value="1796">����FC</option>
				
					<option value="2103">ͼ��</option>
				
					<option value="2104">����л��</option>
				
					<option value="2105">��ά��</option>
				
					<option value="7052">������</option>
				
					<option value="12220">ʥ������</option>
				
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
				
					<em class="em_1">30</em>
				
					<em class="em_1">31</em>
				
					<em class="em_1">32</em>
				
					<em class="em_1">33</em>
				
					<em class="em_1">34</em>
				
					<em class="em_1">35</em>
				
					<em class="em_1">36</em>
				
					<em class="em_1">37</em>
				
					<em class="em_1 em_2">38</em>
				
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
				
			<td>2015-08-01 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/194" target="_blank" title="">���ſ�Ф</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"><a href="soccer/team/320" target="_blank" title="">����</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991320/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991320/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991320/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-08-01 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/215" target="_blank" title="">ŷ����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"><a href="soccer/team/306" target="_blank" title="">����˹��</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991321/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991321/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991321/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-08-01 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/7052" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161047.jpg"></td>
			<td>			
				
					1:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"><a href="soccer/team/335" target="_blank" title="">�հ�����</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991323/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991323/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991323/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-08-01 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/325" target="_blank" title="">��¶�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"><a href="soccer/team/2104" target="_blank" title="">����л��</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991324/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991324/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991324/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-08-01 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/313" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"><a href="soccer/team/267" target="_blank" title="">��Ф</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991325/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991325/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991325/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-08-01 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1744" target="_blank" title="">��ķ</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165903.jpg"><a href="soccer/team/2105" target="_blank" title="">��ά��</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991327/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991327/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991327/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-08-01 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1796" target="_blank" title="">����FC</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133625.png"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"><a href="soccer/team/330" target="_blank" title="">������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991328/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991328/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991328/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-08-01 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/12220" target="_blank" title="">ʥ������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122450206.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"><a href="soccer/team/374" target="_blank" title="">����̩��</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991329/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991329/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991329/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-08-01 20:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/214" target="_blank" title="">÷˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327160357.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161938.jpg"><a href="soccer/team/202" target="_blank" title="">��˹</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991326/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991326/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991326/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-08-04 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/301" target="_blank" title="">����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"><a href="soccer/team/2103" target="_blank" title="">ͼ��</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991322/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991322/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991322/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2015-08-08 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/320" target="_blank" title="">����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"></td>
			<td>			
				
					3:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"><a href="soccer/team/325" target="_blank" title="">��¶�</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991341/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991341/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991341/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-08-08 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2105" target="_blank" title="">��ά��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165903.jpg"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"><a href="soccer/team/313" target="_blank" title="">������</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991342/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991342/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991342/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-08-08 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/267" target="_blank" title="">��Ф</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327160357.jpg"><a href="soccer/team/214" target="_blank" title="">÷˹</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991343/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991343/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991343/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-08-08 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/306" target="_blank" title="">����˹��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"><a href="soccer/team/1744" target="_blank" title="">��ķ</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991346/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991346/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991346/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-08-08 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/330" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"><a href="soccer/team/301" target="_blank" title="">����</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991347/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991347/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991347/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-08-08 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2103" target="_blank" title="">ͼ��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133625.png"><a href="soccer/team/1796" target="_blank" title="">����FC</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991348/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991348/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991348/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-08-08 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/374" target="_blank" title="">����̩��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161047.jpg"><a href="soccer/team/7052" target="_blank" title="">������</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991349/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991349/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991349/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-08-08 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2104" target="_blank" title="">����л��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"><a href="soccer/team/215" target="_blank" title="">ŷ����</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991350/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991350/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991350/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-08-08 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/335" target="_blank" title="">�հ�����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"><a href="soccer/team/194" target="_blank" title="">���ſ�Ф</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991344/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991344/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991344/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-08-08 20:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/202" target="_blank" title="">��˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161938.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122450206.jpg"><a href="soccer/team/12220" target="_blank" title="">ʥ������</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991345/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991345/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991345/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2015-08-15 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/194" target="_blank" title="">���ſ�Ф</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165903.jpg"><a href="soccer/team/2105" target="_blank" title="">��ά��</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991362/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991362/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991362/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-08-15 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/215" target="_blank" title="">ŷ����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"></td>
			<td>			
				
					2:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"><a href="soccer/team/330" target="_blank" title="">������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991363/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991363/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991363/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-08-15 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/7052" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161047.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"><a href="soccer/team/320" target="_blank" title="">����</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991365/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991365/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991365/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-08-15 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/325" target="_blank" title="">��¶�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"><a href="soccer/team/267" target="_blank" title="">��Ф</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991366/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991366/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991366/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-08-15 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/313" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"><a href="soccer/team/1744" target="_blank" title="">��ķ</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991367/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991367/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991367/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-08-15 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1796" target="_blank" title="">����FC</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133625.png"></td>
			<td>			
				
					3:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"><a href="soccer/team/335" target="_blank" title="">�հ�����</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991369/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991369/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991369/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-08-15 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/202" target="_blank" title="">��˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161938.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"><a href="soccer/team/374" target="_blank" title="">����̩��</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991370/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991370/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991370/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-08-15 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/12220" target="_blank" title="">ʥ������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122450206.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"><a href="soccer/team/2103" target="_blank" title="">ͼ��</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991371/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991371/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991371/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-08-15 20:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/301" target="_blank" title="">����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"></td>
			<td>			
				
					3:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"><a href="soccer/team/306" target="_blank" title="">����˹��</a></td>
			<td>			
				
					3:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991364/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991364/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991364/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-08-18 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/214" target="_blank" title="">÷˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327160357.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"><a href="soccer/team/2104" target="_blank" title="">����л��</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991368/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991368/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991368/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2015-08-22 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/320" target="_blank" title="">����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161938.jpg"><a href="soccer/team/202" target="_blank" title="">��˹</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991383/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991383/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991383/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-08-22 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2105" target="_blank" title="">��ά��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165903.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"><a href="soccer/team/325" target="_blank" title="">��¶�</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991384/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991384/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991384/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-08-22 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/267" target="_blank" title="">��Ф</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133625.png"><a href="soccer/team/1796" target="_blank" title="">����FC</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991385/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991385/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991385/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-08-22 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/335" target="_blank" title="">�հ�����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"><a href="soccer/team/313" target="_blank" title="">������</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991386/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991386/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991386/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-08-22 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/306" target="_blank" title="">����˹��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"><a href="soccer/team/194" target="_blank" title="">���ſ�Ф</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991388/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991388/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991388/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-08-22 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/330" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122450206.jpg"><a href="soccer/team/12220" target="_blank" title="">ʥ������</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991389/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991389/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991389/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-08-22 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2103" target="_blank" title="">ͼ��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"></td>
			<td>			
				
					3:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"><a href="soccer/team/215" target="_blank" title="">ŷ����</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991390/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991390/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991390/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-08-22 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/374" target="_blank" title="">����̩��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327160357.jpg"><a href="soccer/team/214" target="_blank" title="">÷˹</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991391/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991391/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991391/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-08-22 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2104" target="_blank" title="">����л��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161047.jpg"><a href="soccer/team/7052" target="_blank" title="">������</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991392/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991392/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991392/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-08-22 20:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1744" target="_blank" title="">��ķ</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"><a href="soccer/team/301" target="_blank" title="">����</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				�ܰ���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991387/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991387/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991387/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2015-08-29 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/194" target="_blank" title="">���ſ�Ф</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"><a href="soccer/team/2103" target="_blank" title="">ͼ��</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991404/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991404/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991404/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-08-29 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/215" target="_blank" title="">ŷ����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"><a href="soccer/team/1744" target="_blank" title="">��ķ</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991405/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991405/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991405/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-08-29 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/7052" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161047.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"><a href="soccer/team/267" target="_blank" title="">��Ф</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991406/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991406/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991406/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-08-29 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/325" target="_blank" title="">��¶�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"><a href="soccer/team/330" target="_blank" title="">������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991407/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991407/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991407/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-08-29 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/313" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"><a href="soccer/team/301" target="_blank" title="">����</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991408/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991408/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991408/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-08-29 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/320" target="_blank" title="">����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"></td>
			<td>			
				
					4:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"><a href="soccer/team/374" target="_blank" title="">����̩��</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991409/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991409/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991409/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-08-29 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1796" target="_blank" title="">����FC</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133625.png"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"><a href="soccer/team/306" target="_blank" title="">����˹��</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991411/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991411/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991411/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-08-29 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/12220" target="_blank" title="">ʥ������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122450206.jpg"></td>
			<td>			
				
					1:5
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"><a href="soccer/team/2104" target="_blank" title="">����л��</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991413/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991413/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991413/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-08-29 20:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/214" target="_blank" title="">÷˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327160357.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165903.jpg"><a href="soccer/team/2105" target="_blank" title="">��ά��</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991410/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991410/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991410/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-09-01 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/202" target="_blank" title="">��˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161938.jpg"></td>
			<td>			
				
					0:4
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"><a href="soccer/team/335" target="_blank" title="">�հ�����</a></td>
			<td>			
				
					0:3
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991412/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991412/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991412/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2015-09-12 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/301" target="_blank" title="">����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"><a href="soccer/team/325" target="_blank" title="">��¶�</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				һ��/���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991436/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991436/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991436/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-09-12 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/313" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133625.png"><a href="soccer/team/1796" target="_blank" title="">����FC</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991437/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991437/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991437/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-09-12 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2105" target="_blank" title="">��ά��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165903.jpg"></td>
			<td>			
				
					4:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"><a href="soccer/team/215" target="_blank" title="">ŷ����</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991438/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991438/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991438/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-09-12 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/267" target="_blank" title="">��Ф</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"></td>
			<td>			
				
					0:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"><a href="soccer/team/374" target="_blank" title="">����̩��</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991439/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991439/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991439/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-09-12 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/335" target="_blank" title="">�հ�����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122450206.jpg"><a href="soccer/team/12220" target="_blank" title="">ʥ������</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991440/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991440/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991440/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-09-12 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1744" target="_blank" title="">��ķ</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"><a href="soccer/team/194" target="_blank" title="">���ſ�Ф</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991441/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991441/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991441/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-09-12 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/330" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327160357.jpg"><a href="soccer/team/214" target="_blank" title="">÷˹</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991443/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991443/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991443/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-09-12 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2103" target="_blank" title="">ͼ��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161047.jpg"><a href="soccer/team/7052" target="_blank" title="">������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991444/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991444/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991444/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-09-12 20:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2104" target="_blank" title="">����л��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"></td>
			<td>			
				
					1:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"><a href="soccer/team/320" target="_blank" title="">����</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991445/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991445/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991445/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-09-15 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/306" target="_blank" title="">����˹��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161938.jpg"><a href="soccer/team/202" target="_blank" title="">��˹</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991442/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991442/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991442/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2015-09-19 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/194" target="_blank" title="">���ſ�Ф</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"><a href="soccer/team/330" target="_blank" title="">������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991457/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991457/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991457/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-09-19 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/215" target="_blank" title="">ŷ����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"><a href="soccer/team/313" target="_blank" title="">������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991458/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991458/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991458/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-09-19 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/7052" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161047.jpg"></td>
			<td>			
				
					3:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"><a href="soccer/team/306" target="_blank" title="">����˹��</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991459/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991459/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991459/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-09-19 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/325" target="_blank" title="">��¶�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"><a href="soccer/team/1744" target="_blank" title="">��ķ</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991460/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991460/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991460/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-09-19 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/320" target="_blank" title="">����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"><a href="soccer/team/335" target="_blank" title="">�հ�����</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991461/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991461/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991461/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-09-19 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/214" target="_blank" title="">÷˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327160357.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"><a href="soccer/team/301" target="_blank" title="">����</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991462/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991462/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991462/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-09-19 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/202" target="_blank" title="">��˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161938.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"><a href="soccer/team/2103" target="_blank" title="">ͼ��</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991464/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991464/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991464/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-09-19 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/12220" target="_blank" title="">ʥ������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122450206.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"><a href="soccer/team/267" target="_blank" title="">��Ф</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991465/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991465/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991465/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-09-19 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/374" target="_blank" title="">����̩��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"><a href="soccer/team/2104" target="_blank" title="">����л��</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991466/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991466/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991466/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-09-19 20:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1796" target="_blank" title="">����FC</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133625.png"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165903.jpg"><a href="soccer/team/2105" target="_blank" title="">��ά��</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991463/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991463/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991463/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2015-09-22 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2104" target="_blank" title="">����л��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161938.jpg"><a href="soccer/team/202" target="_blank" title="">��˹</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991487/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991487/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991487/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-09-23 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/301" target="_blank" title="">����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"><a href="soccer/team/215" target="_blank" title="">ŷ����</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991478/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991478/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991478/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-09-23 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/313" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"><a href="soccer/team/194" target="_blank" title="">���ſ�Ф</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991479/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991479/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991479/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-09-23 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2105" target="_blank" title="">��ά��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165903.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122450206.jpg"><a href="soccer/team/12220" target="_blank" title="">ʥ������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991480/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991480/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991480/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-09-23 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/267" target="_blank" title="">��Ф</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"><a href="soccer/team/320" target="_blank" title="">����</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991481/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991481/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991481/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-09-23 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/335" target="_blank" title="">�հ�����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327160357.jpg"><a href="soccer/team/214" target="_blank" title="">÷˹</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991482/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991482/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991482/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-09-23 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1744" target="_blank" title="">��ķ</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133625.png"><a href="soccer/team/1796" target="_blank" title="">����FC</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991483/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991483/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991483/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-09-23 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/306" target="_blank" title="">����˹��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"><a href="soccer/team/325" target="_blank" title="">��¶�</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991484/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991484/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991484/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-09-23 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/330" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"></td>
			<td>			
				
					1:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161047.jpg"><a href="soccer/team/7052" target="_blank" title="">������</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991485/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991485/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991485/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-09-23 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2103" target="_blank" title="">ͼ��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"><a href="soccer/team/374" target="_blank" title="">����̩��</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991486/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991486/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991486/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2015-09-26 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/194" target="_blank" title="">���ſ�Ф</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"><a href="soccer/team/215" target="_blank" title="">ŷ����</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991510/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991510/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991510/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-09-26 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/7052" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161047.jpg"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165903.jpg"><a href="soccer/team/2105" target="_blank" title="">��ά��</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991511/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991511/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991511/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-09-26 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/325" target="_blank" title="">��¶�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"><a href="soccer/team/313" target="_blank" title="">������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991512/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991512/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991512/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-09-26 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/214" target="_blank" title="">÷˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327160357.jpg"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"><a href="soccer/team/1744" target="_blank" title="">��ķ</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991514/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991514/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991514/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-09-26 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/202" target="_blank" title="">��˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161938.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"><a href="soccer/team/267" target="_blank" title="">��Ф</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991516/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991516/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991516/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-09-26 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/12220" target="_blank" title="">ʥ������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122450206.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"><a href="soccer/team/306" target="_blank" title="">����˹��</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991517/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991517/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991517/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-09-26 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/374" target="_blank" title="">����̩��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"><a href="soccer/team/335" target="_blank" title="">�հ�����</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991518/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991518/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991518/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-09-26 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2104" target="_blank" title="">����л��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"><a href="soccer/team/2103" target="_blank" title="">ͼ��</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991519/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991519/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991519/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-09-26 20:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/320" target="_blank" title="">����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"><a href="soccer/team/330" target="_blank" title="">������</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991513/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991513/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991513/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-09-29 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1796" target="_blank" title="">����FC</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133625.png"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"><a href="soccer/team/301" target="_blank" title="">����</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991515/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991515/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991515/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2015-10-03 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/215" target="_blank" title="">ŷ����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133625.png"><a href="soccer/team/1796" target="_blank" title="">����FC</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991520/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991520/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991520/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-10-03 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/301" target="_blank" title="">����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"></td>
			<td>			
				
					3:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"><a href="soccer/team/194" target="_blank" title="">���ſ�Ф</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991521/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991521/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991521/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-10-03 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/313" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"></td>
			<td>			
				
					3:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161047.jpg"><a href="soccer/team/7052" target="_blank" title="">������</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991522/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991522/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991522/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-10-03 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2105" target="_blank" title="">��ά��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165903.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161938.jpg"><a href="soccer/team/202" target="_blank" title="">��˹</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991523/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991523/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991523/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-10-03 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/267" target="_blank" title="">��Ф</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"><a href="soccer/team/2104" target="_blank" title="">����л��</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991524/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991524/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991524/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-10-03 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/335" target="_blank" title="">�հ�����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"><a href="soccer/team/325" target="_blank" title="">��¶�</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991525/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991525/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991525/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-10-03 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1744" target="_blank" title="">��ķ</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122450206.jpg"><a href="soccer/team/12220" target="_blank" title="">ʥ������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991526/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991526/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991526/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-10-03 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/330" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"></td>
			<td>			
				
					3:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"><a href="soccer/team/374" target="_blank" title="">����̩��</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991528/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991528/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991528/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-10-03 20:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/306" target="_blank" title="">����˹��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327160357.jpg"><a href="soccer/team/214" target="_blank" title="">÷˹</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991527/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991527/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991527/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-10-06 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2103" target="_blank" title="">ͼ��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"><a href="soccer/team/320" target="_blank" title="">����</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991529/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991529/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991529/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2015-10-17 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/7052" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161047.jpg"></td>
			<td>			
				
					4:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"><a href="soccer/team/1744" target="_blank" title="">��ķ</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991552/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991552/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991552/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-10-17 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/325" target="_blank" title="">��¶�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"></td>
			<td>			
				
					2:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"><a href="soccer/team/215" target="_blank" title="">ŷ����</a></td>
			<td>			
				
					1:3
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991553/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991553/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991553/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-10-17 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/214" target="_blank" title="">÷˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327160357.jpg"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"><a href="soccer/team/313" target="_blank" title="">������</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991555/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991555/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991555/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-10-17 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/267" target="_blank" title="">��Ф</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"><a href="soccer/team/2103" target="_blank" title="">ͼ��</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991556/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991556/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991556/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-10-17 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1796" target="_blank" title="">����FC</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133625.png"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"><a href="soccer/team/194" target="_blank" title="">���ſ�Ф</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991557/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991557/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991557/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-10-17 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/12220" target="_blank" title="">ʥ������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122450206.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"><a href="soccer/team/301" target="_blank" title="">����</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991559/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991559/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991559/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-10-17 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/374" target="_blank" title="">����̩��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"><a href="soccer/team/306" target="_blank" title="">����˹��</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991560/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991560/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991560/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-10-17 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2104" target="_blank" title="">����л��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"><a href="soccer/team/335" target="_blank" title="">�հ�����</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991561/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991561/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991561/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-10-17 20:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/320" target="_blank" title="">����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"></td>
			<td>			
				
					1:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165903.jpg"><a href="soccer/team/2105" target="_blank" title="">��ά��</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991554/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991554/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991554/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-10-20 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/202" target="_blank" title="">��˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161938.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"><a href="soccer/team/330" target="_blank" title="">������</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991558/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991558/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991558/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2015-10-24 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/194" target="_blank" title="">���ſ�Ф</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327160357.jpg"><a href="soccer/team/214" target="_blank" title="">÷˹</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991573/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991573/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991573/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-10-24 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/215" target="_blank" title="">ŷ����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122450206.jpg"><a href="soccer/team/12220" target="_blank" title="">ʥ������</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991574/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991574/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991574/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-10-24 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/301" target="_blank" title="">����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"></td>
			<td>			
				
					3:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161047.jpg"><a href="soccer/team/7052" target="_blank" title="">������</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991575/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991575/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991575/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-10-24 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2105" target="_blank" title="">��ά��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165903.jpg"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"><a href="soccer/team/374" target="_blank" title="">����̩��</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991577/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991577/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991577/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-10-24 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/335" target="_blank" title="">�հ�����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"><a href="soccer/team/267" target="_blank" title="">��Ф</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991578/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991578/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991578/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-10-24 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1796" target="_blank" title="">����FC</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133625.png"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"><a href="soccer/team/325" target="_blank" title="">��¶�</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991580/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991580/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991580/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-10-24 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/306" target="_blank" title="">����˹��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"><a href="soccer/team/2104" target="_blank" title="">����л��</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991581/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991581/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991581/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-10-24 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/330" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"><a href="soccer/team/2103" target="_blank" title="">ͼ��</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991582/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991582/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991582/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-10-24 20:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1744" target="_blank" title="">��ķ</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"><a href="soccer/team/320" target="_blank" title="">����</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991579/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991579/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991579/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-10-27 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/313" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161938.jpg"><a href="soccer/team/202" target="_blank" title="">��˹</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991576/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991576/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991576/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2015-10-31 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/325" target="_blank" title="">��¶�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"></td>
			<td>			
				
					3:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"><a href="soccer/team/194" target="_blank" title="">���ſ�Ф</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991584/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991584/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991584/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-10-31 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/214" target="_blank" title="">÷˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327160357.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133625.png"><a href="soccer/team/1796" target="_blank" title="">����FC</a></td>
			<td>			
				
					2:1
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991586/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991586/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991586/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-10-31 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/267" target="_blank" title="">��Ф</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165903.jpg"><a href="soccer/team/2105" target="_blank" title="">��ά��</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991587/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991587/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991587/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-10-31 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/12220" target="_blank" title="">ʥ������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122450206.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"><a href="soccer/team/313" target="_blank" title="">������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991589/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991589/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991589/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-10-31 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2103" target="_blank" title="">ͼ��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"><a href="soccer/team/335" target="_blank" title="">�հ�����</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991590/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991590/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991590/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-10-31 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/374" target="_blank" title="">����̩��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"><a href="soccer/team/1744" target="_blank" title="">��ķ</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991591/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991591/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991591/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-10-31 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2104" target="_blank" title="">����л��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"><a href="soccer/team/330" target="_blank" title="">������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991592/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991592/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991592/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-10-31 21:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/7052" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161047.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"><a href="soccer/team/215" target="_blank" title="">ŷ����</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991583/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991583/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991583/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-10-31 21:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/320" target="_blank" title="">����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"></td>
			<td>			
				
					3:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"><a href="soccer/team/306" target="_blank" title="">����˹��</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991585/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991585/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991585/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-11-03 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/202" target="_blank" title="">��˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161938.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"><a href="soccer/team/301" target="_blank" title="">����</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991588/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991588/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991588/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2015-11-07 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/194" target="_blank" title="">���ſ�Ф</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161047.jpg"><a href="soccer/team/7052" target="_blank" title="">������</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991604/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991604/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991604/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-11-07 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/215" target="_blank" title="">ŷ����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161938.jpg"><a href="soccer/team/202" target="_blank" title="">��˹</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991605/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991605/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991605/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-11-07 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/325" target="_blank" title="">��¶�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327160357.jpg"><a href="soccer/team/214" target="_blank" title="">÷˹</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991607/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991607/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991607/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-11-07 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/313" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"><a href="soccer/team/374" target="_blank" title="">����̩��</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991608/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991608/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991608/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-11-07 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2105" target="_blank" title="">��ά��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165903.jpg"></td>
			<td>			
				
					4:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"><a href="soccer/team/2104" target="_blank" title="">����л��</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991609/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991609/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991609/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-11-07 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1744" target="_blank" title="">��ķ</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"><a href="soccer/team/267" target="_blank" title="">��Ф</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991610/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991610/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991610/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-11-07 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/306" target="_blank" title="">����˹��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"></td>
			<td>			
				
					3:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"><a href="soccer/team/2103" target="_blank" title="">ͼ��</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991612/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991612/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991612/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-11-07 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/330" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"><a href="soccer/team/335" target="_blank" title="">�հ�����</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991613/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991613/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991613/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-11-07 21:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1796" target="_blank" title="">����FC</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133625.png"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122450206.jpg"><a href="soccer/team/12220" target="_blank" title="">ʥ������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991611/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991611/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991611/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-11-10 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/301" target="_blank" title="">����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"></td>
			<td>			
				
					3:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"><a href="soccer/team/320" target="_blank" title="">����</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991606/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991606/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991606/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2015-11-21 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/320" target="_blank" title="">����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"></td>
			<td>			
				
					4:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"><a href="soccer/team/313" target="_blank" title="">������</a></td>
			<td>			
				
					4:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991637/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991637/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991637/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-11-21 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2103" target="_blank" title="">ͼ��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165903.jpg"><a href="soccer/team/2105" target="_blank" title="">��ά��</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991643/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991643/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991643/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-11-21 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/374" target="_blank" title="">����̩��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"></td>
			<td>			
				
					0:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"><a href="soccer/team/301" target="_blank" title="">����</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				�ܰ���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991644/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991644/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991644/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-11-21 21:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/214" target="_blank" title="">÷˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327160357.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"><a href="soccer/team/215" target="_blank" title="">ŷ����</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991638/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991638/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991638/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-11-24 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/335" target="_blank" title="">�հ�����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"><a href="soccer/team/306" target="_blank" title="">����˹��</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991640/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991640/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991640/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-11-25 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/7052" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161047.jpg"></td>
			<td>			
				
					4:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133625.png"><a href="soccer/team/1796" target="_blank" title="">����FC</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991636/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991636/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991636/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-11-25 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/267" target="_blank" title="">��Ф</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"><a href="soccer/team/330" target="_blank" title="">������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991639/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991639/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991639/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-11-25 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/202" target="_blank" title="">��˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161938.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"><a href="soccer/team/325" target="_blank" title="">��¶�</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991641/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991641/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991641/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-11-25 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/12220" target="_blank" title="">ʥ������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122450206.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"><a href="soccer/team/194" target="_blank" title="">���ſ�Ф</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991642/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991642/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991642/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-11-25 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2104" target="_blank" title="">����л��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"><a href="soccer/team/1744" target="_blank" title="">��ķ</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991645/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991645/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991645/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2015-11-28 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/194" target="_blank" title="">���ſ�Ф</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161938.jpg"><a href="soccer/team/202" target="_blank" title="">��˹</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991646/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991646/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991646/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-11-28 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/215" target="_blank" title="">ŷ����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"></td>
			<td>			
				
					3:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"><a href="soccer/team/374" target="_blank" title="">����̩��</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991647/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991647/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991647/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-11-28 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/325" target="_blank" title="">��¶�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122450206.jpg"><a href="soccer/team/12220" target="_blank" title="">ʥ������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991649/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991649/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991649/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-11-28 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/313" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"><a href="soccer/team/2104" target="_blank" title="">����л��</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991650/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991650/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991650/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-11-28 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2105" target="_blank" title="">��ά��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165903.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"><a href="soccer/team/330" target="_blank" title="">������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991651/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991651/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991651/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-11-28 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/214" target="_blank" title="">÷˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327160357.jpg"></td>
			<td>			
				
					5:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161047.jpg"><a href="soccer/team/7052" target="_blank" title="">������</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991652/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991652/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991652/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-11-28 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1744" target="_blank" title="">��ķ</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"><a href="soccer/team/2103" target="_blank" title="">ͼ��</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991653/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991653/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991653/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-11-28 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1796" target="_blank" title="">����FC</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133625.png"></td>
			<td>			
				
					0:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"><a href="soccer/team/320" target="_blank" title="">����</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				�ܰ���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991654/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991654/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991654/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-11-28 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/306" target="_blank" title="">����˹��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"><a href="soccer/team/267" target="_blank" title="">��Ф</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991655/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991655/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991655/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-11-28 21:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/301" target="_blank" title="">����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"></td>
			<td>			
				
					3:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"><a href="soccer/team/335" target="_blank" title="">�հ�����</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991648/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991648/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991648/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2015-12-01 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/202" target="_blank" title="">��˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161938.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"><a href="soccer/team/1744" target="_blank" title="">��ķ</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991660/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991660/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991660/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-12-02 04:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/7052" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161047.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"><a href="soccer/team/325" target="_blank" title="">��¶�</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991656/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991656/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991656/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-12-02 04:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/320" target="_blank" title="">����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"><a href="soccer/team/215" target="_blank" title="">ŷ����</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991657/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991657/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991657/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-12-02 04:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/267" target="_blank" title="">��Ф</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"><a href="soccer/team/301" target="_blank" title="">����</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991658/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991658/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991658/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-12-02 04:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/335" target="_blank" title="">�հ�����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"></td>
			<td>			
				
					3:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165903.jpg"><a href="soccer/team/2105" target="_blank" title="">��ά��</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991659/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991659/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991659/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-12-02 04:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/12220" target="_blank" title="">ʥ������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122450206.jpg"></td>
			<td>			
				
					3:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327160357.jpg"><a href="soccer/team/214" target="_blank" title="">÷˹</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991661/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991661/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991661/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-12-02 04:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/330" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"><a href="soccer/team/306" target="_blank" title="">����˹��</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991662/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991662/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991662/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-12-02 04:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2103" target="_blank" title="">ͼ��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"><a href="soccer/team/313" target="_blank" title="">������</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991663/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991663/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991663/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-12-02 04:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/374" target="_blank" title="">����̩��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133625.png"><a href="soccer/team/1796" target="_blank" title="">����FC</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991664/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991664/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991664/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-12-02 04:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2104" target="_blank" title="">����л��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"><a href="soccer/team/194" target="_blank" title="">���ſ�Ф</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991665/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991665/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991665/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2015-12-12 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/194" target="_blank" title="">���ſ�Ф</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"></td>
			<td>			
				
					3:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"><a href="soccer/team/374" target="_blank" title="">����̩��</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991666/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991666/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991666/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-12-12 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/215" target="_blank" title="">ŷ����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"><a href="soccer/team/267" target="_blank" title="">��Ф</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991667/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991667/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991667/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-12-12 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/7052" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161047.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122450206.jpg"><a href="soccer/team/12220" target="_blank" title="">ʥ������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991669/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991669/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991669/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-12-12 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/325" target="_blank" title="">��¶�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"><a href="soccer/team/2103" target="_blank" title="">ͼ��</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991670/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991670/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991670/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-12-12 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/313" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"></td>
			<td>			
				
					4:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"><a href="soccer/team/330" target="_blank" title="">������</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991671/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991671/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991671/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-12-12 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2105" target="_blank" title="">��ά��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165903.jpg"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"><a href="soccer/team/306" target="_blank" title="">����˹��</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991672/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991672/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991672/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-12-12 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1744" target="_blank" title="">��ķ</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"><a href="soccer/team/335" target="_blank" title="">�հ�����</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991674/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991674/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991674/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-12-12 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1796" target="_blank" title="">����FC</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133625.png"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161938.jpg"><a href="soccer/team/202" target="_blank" title="">��˹</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991675/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991675/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991675/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-12-12 21:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/214" target="_blank" title="">÷˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327160357.jpg"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"><a href="soccer/team/320" target="_blank" title="">����</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991673/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991673/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991673/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-12-15 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/301" target="_blank" title="">����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"><a href="soccer/team/2104" target="_blank" title="">����л��</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				һ��/���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991668/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991668/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991668/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2015-12-18 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2105" target="_blank" title="">��ά��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165903.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"><a href="soccer/team/301" target="_blank" title="">����</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				�ܰ���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991677/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991677/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991677/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-12-19 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/320" target="_blank" title="">����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122450206.jpg"><a href="soccer/team/12220" target="_blank" title="">ʥ������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991676/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991676/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991676/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-12-19 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/267" target="_blank" title="">��Ф</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"></td>
			<td>			
				
					3:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"><a href="soccer/team/194" target="_blank" title="">���ſ�Ф</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991678/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991678/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991678/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-12-19 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/335" target="_blank" title="">�հ�����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"><a href="soccer/team/215" target="_blank" title="">ŷ����</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991679/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991679/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991679/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-12-19 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/306" target="_blank" title="">����˹��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"><a href="soccer/team/313" target="_blank" title="">������</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991681/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991681/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991681/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-12-19 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/330" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"></td>
			<td>			
				
					3:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"><a href="soccer/team/1744" target="_blank" title="">��ķ</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991682/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991682/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991682/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-12-19 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/374" target="_blank" title="">����̩��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"></td>
			<td>			
				
					2:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"><a href="soccer/team/325" target="_blank" title="">��¶�</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991684/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991684/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991684/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-12-19 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2104" target="_blank" title="">����л��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133625.png"><a href="soccer/team/1796" target="_blank" title="">����FC</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991685/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991685/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991685/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-12-19 21:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/202" target="_blank" title="">��˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161938.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161047.jpg"><a href="soccer/team/7052" target="_blank" title="">������</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991680/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991680/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991680/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-12-19 21:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2103" target="_blank" title="">ͼ��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327160357.jpg"><a href="soccer/team/214" target="_blank" title="">÷˹</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991683/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991683/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991683/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_20" class="zstab" style="display: none;">
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
				
			<td>2016-01-09 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/194" target="_blank" title="">���ſ�Ф</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"><a href="soccer/team/335" target="_blank" title="">�հ�����</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991686/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991686/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991686/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-01-09 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/215" target="_blank" title="">ŷ����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"><a href="soccer/team/2104" target="_blank" title="">����л��</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991687/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991687/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991687/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-01-09 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/301" target="_blank" title="">����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"><a href="soccer/team/330" target="_blank" title="">������</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				һ��/���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991688/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991688/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991688/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-01-09 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/7052" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161047.jpg"></td>
			<td>			
				
					5:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"><a href="soccer/team/374" target="_blank" title="">����̩��</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991689/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991689/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991689/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-01-09 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/325" target="_blank" title="">��¶�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"><a href="soccer/team/320" target="_blank" title="">����</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991690/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991690/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991690/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-01-09 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/313" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"></td>
			<td>			
				
					4:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165903.jpg"><a href="soccer/team/2105" target="_blank" title="">��ά��</a></td>
			<td>			
				
					4:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991691/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991691/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991691/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-01-09 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1744" target="_blank" title="">��ķ</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"><a href="soccer/team/306" target="_blank" title="">����˹��</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991693/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991693/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991693/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-01-09 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1796" target="_blank" title="">����FC</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133625.png"></td>
			<td>			
				
					1:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"><a href="soccer/team/2103" target="_blank" title="">ͼ��</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991694/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991694/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991694/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-01-09 21:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/12220" target="_blank" title="">ʥ������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122450206.jpg"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161938.jpg"><a href="soccer/team/202" target="_blank" title="">��˹</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991695/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991695/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991695/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-01-12 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/214" target="_blank" title="">÷˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327160357.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"><a href="soccer/team/267" target="_blank" title="">��Ф</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991692/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991692/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991692/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2016-01-16 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/320" target="_blank" title="">����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"></td>
			<td>			
				
					3:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161047.jpg"><a href="soccer/team/7052" target="_blank" title="">������</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991696/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991696/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991696/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-01-16 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2105" target="_blank" title="">��ά��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165903.jpg"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"><a href="soccer/team/194" target="_blank" title="">���ſ�Ф</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991697/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991697/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991697/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-01-16 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/267" target="_blank" title="">��Ф</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"></td>
			<td>			
				
					2:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"><a href="soccer/team/325" target="_blank" title="">��¶�</a></td>
			<td>			
				
					2:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991698/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991698/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991698/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-01-16 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/335" target="_blank" title="">�հ�����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133625.png"><a href="soccer/team/1796" target="_blank" title="">����FC</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991699/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991699/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991699/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-01-16 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1744" target="_blank" title="">��ķ</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"></td>
			<td>			
				
					6:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"><a href="soccer/team/313" target="_blank" title="">������</a></td>
			<td>			
				
					3:2
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991700/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991700/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991700/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-01-16 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/330" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"></td>
			<td>			
				
					4:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"><a href="soccer/team/215" target="_blank" title="">ŷ����</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991702/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991702/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991702/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-01-16 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2103" target="_blank" title="">ͼ��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122450206.jpg"><a href="soccer/team/12220" target="_blank" title="">ʥ������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991703/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991703/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991703/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-01-16 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/374" target="_blank" title="">����̩��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161938.jpg"><a href="soccer/team/202" target="_blank" title="">��˹</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991704/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991704/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991704/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-01-16 21:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/306" target="_blank" title="">����˹��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"><a href="soccer/team/301" target="_blank" title="">����</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				�ܰ���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991701/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991701/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991701/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-01-19 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2104" target="_blank" title="">����л��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327160357.jpg"><a href="soccer/team/214" target="_blank" title="">÷˹</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991705/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991705/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991705/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2016-01-23 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/215" target="_blank" title="">ŷ����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"><a href="soccer/team/2103" target="_blank" title="">ͼ��</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991707/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991707/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991707/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-01-23 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/301" target="_blank" title="">����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"></td>
			<td>			
				
					3:4
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"><a href="soccer/team/1744" target="_blank" title="">��ķ</a></td>
			<td>			
				
					2:2
							
			</td>
			<td>
			
				һ��/���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991708/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991708/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991708/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-01-23 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/7052" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161047.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"><a href="soccer/team/2104" target="_blank" title="">����л��</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991709/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991709/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991709/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-01-23 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/214" target="_blank" title="">÷˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327160357.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"><a href="soccer/team/374" target="_blank" title="">����̩��</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991712/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991712/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991712/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-01-23 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1796" target="_blank" title="">����FC</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133625.png"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"><a href="soccer/team/267" target="_blank" title="">��Ф</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991713/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991713/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991713/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-01-23 21:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/325" target="_blank" title="">��¶�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"></td>
			<td>			
				
					0:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165903.jpg"><a href="soccer/team/2105" target="_blank" title="">��ά��</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991710/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991710/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991710/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-01-23 21:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/202" target="_blank" title="">��˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161938.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"><a href="soccer/team/320" target="_blank" title="">����</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991714/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991714/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991714/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-01-23 21:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/12220" target="_blank" title="">ʥ������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122450206.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"><a href="soccer/team/330" target="_blank" title="">������</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991715/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991715/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991715/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-01-26 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/194" target="_blank" title="">���ſ�Ф</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"><a href="soccer/team/306" target="_blank" title="">����˹��</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991706/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991706/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991706/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-01-26 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/313" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"><a href="soccer/team/335" target="_blank" title="">�հ�����</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991711/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991711/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991711/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2016-01-30 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/301" target="_blank" title="">����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"></td>
			<td>			
				
					3:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"><a href="soccer/team/313" target="_blank" title="">������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991716/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991716/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991716/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-01-30 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2105" target="_blank" title="">��ά��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165903.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327160357.jpg"><a href="soccer/team/214" target="_blank" title="">÷˹</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991717/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991717/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991717/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-01-30 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/267" target="_blank" title="">��Ф</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161047.jpg"><a href="soccer/team/7052" target="_blank" title="">������</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991718/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991718/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991718/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-01-30 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1744" target="_blank" title="">��ķ</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"><a href="soccer/team/215" target="_blank" title="">ŷ����</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991720/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991720/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991720/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-01-30 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/306" target="_blank" title="">����˹��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133625.png"><a href="soccer/team/1796" target="_blank" title="">����FC</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991721/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991721/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991721/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-01-30 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/330" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"><a href="soccer/team/325" target="_blank" title="">��¶�</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991722/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991722/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991722/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-01-30 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2103" target="_blank" title="">ͼ��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"><a href="soccer/team/194" target="_blank" title="">���ſ�Ф</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991723/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991723/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991723/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-01-30 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/374" target="_blank" title="">����̩��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"><a href="soccer/team/320" target="_blank" title="">����</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				�ܰ���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991724/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991724/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991724/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-01-30 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2104" target="_blank" title="">����л��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122450206.jpg"><a href="soccer/team/12220" target="_blank" title="">ʥ������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991725/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991725/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991725/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-01-30 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/335" target="_blank" title="">�հ�����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161938.jpg"><a href="soccer/team/202" target="_blank" title="">��˹</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991719/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991719/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991719/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2016-02-02 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1796" target="_blank" title="">����FC</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133625.png"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"><a href="soccer/team/313" target="_blank" title="">������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991732/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991732/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991732/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-02-03 04:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/194" target="_blank" title="">���ſ�Ф</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"><a href="soccer/team/1744" target="_blank" title="">��ķ</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991726/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991726/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991726/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-02-03 04:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/215" target="_blank" title="">ŷ����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"></td>
			<td>			
				
					3:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165903.jpg"><a href="soccer/team/2105" target="_blank" title="">��ά��</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991727/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991727/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991727/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-02-03 04:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/7052" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161047.jpg"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"><a href="soccer/team/2103" target="_blank" title="">ͼ��</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991728/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991728/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991728/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-02-03 04:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/325" target="_blank" title="">��¶�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"><a href="soccer/team/301" target="_blank" title="">����</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991729/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991729/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991729/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-02-03 04:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/320" target="_blank" title="">����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"><a href="soccer/team/2104" target="_blank" title="">����л��</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				һ��/���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991730/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991730/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991730/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-02-03 04:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/214" target="_blank" title="">÷˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327160357.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"><a href="soccer/team/330" target="_blank" title="">������</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991731/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991731/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991731/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-02-03 04:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/202" target="_blank" title="">��˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161938.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"><a href="soccer/team/306" target="_blank" title="">����˹��</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991733/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991733/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991733/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-02-03 04:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/12220" target="_blank" title="">ʥ������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122450206.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"><a href="soccer/team/335" target="_blank" title="">�հ�����</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991734/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991734/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991734/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-02-03 04:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/374" target="_blank" title="">����̩��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"><a href="soccer/team/267" target="_blank" title="">��Ф</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991735/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991735/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991735/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2016-02-06 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/301" target="_blank" title="">����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327160357.jpg"><a href="soccer/team/214" target="_blank" title="">÷˹</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991736/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991736/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991736/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-02-06 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/313" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"><a href="soccer/team/215" target="_blank" title="">ŷ����</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991737/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991737/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991737/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-02-06 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2105" target="_blank" title="">��ά��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165903.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133625.png"><a href="soccer/team/1796" target="_blank" title="">����FC</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991738/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991738/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991738/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-02-06 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/267" target="_blank" title="">��Ф</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122450206.jpg"><a href="soccer/team/12220" target="_blank" title="">ʥ������</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991739/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991739/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991739/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-02-06 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1744" target="_blank" title="">��ķ</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"><a href="soccer/team/325" target="_blank" title="">��¶�</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991741/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991741/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991741/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-02-06 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/306" target="_blank" title="">����˹��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161047.jpg"><a href="soccer/team/7052" target="_blank" title="">������</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991742/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991742/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991742/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-02-06 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/330" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"><a href="soccer/team/194" target="_blank" title="">���ſ�Ф</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991743/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991743/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991743/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-02-06 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2103" target="_blank" title="">ͼ��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161938.jpg"><a href="soccer/team/202" target="_blank" title="">��˹</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991744/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991744/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991744/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-02-06 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2104" target="_blank" title="">����л��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"><a href="soccer/team/374" target="_blank" title="">����̩��</a></td>
			<td>			
				
					2:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991745/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991745/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991745/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-02-09 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/335" target="_blank" title="">�հ�����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"><a href="soccer/team/320" target="_blank" title="">����</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991740/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991740/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991740/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2016-02-13 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/194" target="_blank" title="">���ſ�Ф</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"></td>
			<td>			
				
					3:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"><a href="soccer/team/313" target="_blank" title="">������</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991746/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991746/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991746/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-02-13 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/215" target="_blank" title="">ŷ����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"><a href="soccer/team/301" target="_blank" title="">����</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991747/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991747/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991747/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-02-13 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/7052" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161047.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"><a href="soccer/team/330" target="_blank" title="">������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991748/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991748/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991748/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-02-13 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/325" target="_blank" title="">��¶�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"><a href="soccer/team/306" target="_blank" title="">����˹��</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991749/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991749/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991749/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-02-13 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/320" target="_blank" title="">����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"><a href="soccer/team/267" target="_blank" title="">��Ф</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991750/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991750/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991750/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-02-13 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1796" target="_blank" title="">����FC</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133625.png"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"><a href="soccer/team/1744" target="_blank" title="">��ķ</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991752/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991752/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991752/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-02-13 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/12220" target="_blank" title="">ʥ������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122450206.jpg"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165903.jpg"><a href="soccer/team/2105" target="_blank" title="">��ά��</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991754/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991754/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991754/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-02-13 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/374" target="_blank" title="">����̩��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"><a href="soccer/team/2103" target="_blank" title="">ͼ��</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991755/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991755/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991755/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-02-13 21:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/214" target="_blank" title="">÷˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327160357.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"><a href="soccer/team/335" target="_blank" title="">�հ�����</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991751/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991751/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991751/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-02-16 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/202" target="_blank" title="">��˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161938.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"><a href="soccer/team/2104" target="_blank" title="">����л��</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991753/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991753/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991753/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2016-02-20 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/215" target="_blank" title="">ŷ����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"><a href="soccer/team/194" target="_blank" title="">���ſ�Ф</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991756/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991756/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991756/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-02-20 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/301" target="_blank" title="">����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"></td>
			<td>			
				
					3:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133625.png"><a href="soccer/team/1796" target="_blank" title="">����FC</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				һ��/���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991757/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991757/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991757/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-02-20 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/313" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"><a href="soccer/team/325" target="_blank" title="">��¶�</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991758/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991758/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991758/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-02-20 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2105" target="_blank" title="">��ά��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165903.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161047.jpg"><a href="soccer/team/7052" target="_blank" title="">������</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991759/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991759/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991759/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-02-20 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/267" target="_blank" title="">��Ф</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161938.jpg"><a href="soccer/team/202" target="_blank" title="">��˹</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991760/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991760/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991760/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-02-20 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/306" target="_blank" title="">����˹��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122450206.jpg"><a href="soccer/team/12220" target="_blank" title="">ʥ������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991763/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991763/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991763/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-02-20 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/330" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"><a href="soccer/team/320" target="_blank" title="">����</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991764/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991764/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991764/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-02-20 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2103" target="_blank" title="">ͼ��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"><a href="soccer/team/2104" target="_blank" title="">����л��</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991765/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991765/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991765/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-02-20 21:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/335" target="_blank" title="">�հ�����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"><a href="soccer/team/374" target="_blank" title="">����̩��</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991761/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991761/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991761/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-02-23 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1744" target="_blank" title="">��ķ</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327160357.jpg"><a href="soccer/team/214" target="_blank" title="">÷˹</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991762/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991762/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991762/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2016-02-27 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/194" target="_blank" title="">���ſ�Ф</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"><a href="soccer/team/301" target="_blank" title="">����</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991766/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991766/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991766/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-02-27 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/7052" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161047.jpg"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"><a href="soccer/team/313" target="_blank" title="">������</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991767/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991767/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991767/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-02-27 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/325" target="_blank" title="">��¶�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"><a href="soccer/team/335" target="_blank" title="">�հ�����</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991768/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991768/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991768/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-02-27 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/320" target="_blank" title="">����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"></td>
			<td>			
				
					3:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"><a href="soccer/team/2103" target="_blank" title="">ͼ��</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991769/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991769/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991769/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-02-27 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/214" target="_blank" title="">÷˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327160357.jpg"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"><a href="soccer/team/306" target="_blank" title="">����˹��</a></td>
			<td>			
				
					2:2
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991770/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991770/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991770/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-02-27 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1796" target="_blank" title="">����FC</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133625.png"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"><a href="soccer/team/215" target="_blank" title="">ŷ����</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991771/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991771/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991771/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-02-27 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/374" target="_blank" title="">����̩��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"><a href="soccer/team/330" target="_blank" title="">������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991774/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991774/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991774/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-02-27 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2104" target="_blank" title="">����л��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"><a href="soccer/team/267" target="_blank" title="">��Ф</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991775/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991775/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991775/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-02-27 21:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/12220" target="_blank" title="">ʥ������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122450206.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"><a href="soccer/team/1744" target="_blank" title="">��ķ</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991773/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991773/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991773/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-03-01 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/202" target="_blank" title="">��˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161938.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165903.jpg"><a href="soccer/team/2105" target="_blank" title="">��ά��</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991772/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991772/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991772/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2016-03-05 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/194" target="_blank" title="">���ſ�Ф</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133625.png"><a href="soccer/team/1796" target="_blank" title="">����FC</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991776/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991776/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991776/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-03-05 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/215" target="_blank" title="">ŷ����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"><a href="soccer/team/325" target="_blank" title="">��¶�</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991777/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991777/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991777/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-03-05 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2105" target="_blank" title="">��ά��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165903.jpg"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"><a href="soccer/team/320" target="_blank" title="">����</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				�ܰ���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991780/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991780/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991780/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-03-05 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/335" target="_blank" title="">�հ�����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"></td>
			<td>			
				
					3:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"><a href="soccer/team/2104" target="_blank" title="">����л��</a></td>
			<td>			
				
					2:1
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991781/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991781/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991781/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-03-05 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1744" target="_blank" title="">��ķ</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161047.jpg"><a href="soccer/team/7052" target="_blank" title="">������</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991782/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991782/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991782/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-03-05 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/306" target="_blank" title="">����˹��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"><a href="soccer/team/374" target="_blank" title="">����̩��</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991783/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991783/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991783/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-03-05 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/330" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161938.jpg"><a href="soccer/team/202" target="_blank" title="">��˹</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991784/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991784/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991784/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-03-05 21:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/301" target="_blank" title="">����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122450206.jpg"><a href="soccer/team/12220" target="_blank" title="">ʥ������</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991778/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991778/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991778/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-03-05 21:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2103" target="_blank" title="">ͼ��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"><a href="soccer/team/267" target="_blank" title="">��Ф</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991785/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991785/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991785/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-03-08 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/313" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327160357.jpg"><a href="soccer/team/214" target="_blank" title="">÷˹</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991779/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991779/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991779/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2016-03-12 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/7052" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161047.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"><a href="soccer/team/301" target="_blank" title="">����</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				�ܰ���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991786/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991786/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991786/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-03-12 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/325" target="_blank" title="">��¶�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133625.png"><a href="soccer/team/1796" target="_blank" title="">����FC</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991787/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991787/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991787/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-03-12 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/214" target="_blank" title="">÷˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327160357.jpg"></td>
			<td>			
				
					3:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"><a href="soccer/team/194" target="_blank" title="">���ſ�Ф</a></td>
			<td>			
				
					1:2
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991789/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991789/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991789/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-03-12 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/267" target="_blank" title="">��Ф</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"><a href="soccer/team/335" target="_blank" title="">�հ�����</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991790/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991790/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991790/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-03-12 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/202" target="_blank" title="">��˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161938.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"><a href="soccer/team/313" target="_blank" title="">������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991791/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991791/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991791/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-03-12 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2103" target="_blank" title="">ͼ��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"><a href="soccer/team/330" target="_blank" title="">������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991793/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991793/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991793/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-03-12 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/374" target="_blank" title="">����̩��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165903.jpg"><a href="soccer/team/2105" target="_blank" title="">��ά��</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991794/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991794/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991794/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-03-12 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2104" target="_blank" title="">����л��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"><a href="soccer/team/306" target="_blank" title="">����˹��</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991795/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991795/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991795/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-03-12 21:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/320" target="_blank" title="">����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"><a href="soccer/team/1744" target="_blank" title="">��ķ</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				һ��/���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991788/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991788/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991788/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-03-15 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/12220" target="_blank" title="">ʥ������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122450206.jpg"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"><a href="soccer/team/215" target="_blank" title="">ŷ����</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991792/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991792/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991792/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_31" class="zstab" style="display: none;">
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
				
			<td>2016-03-19 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/194" target="_blank" title="">���ſ�Ф</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"><a href="soccer/team/325" target="_blank" title="">��¶�</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991796/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991796/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991796/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-03-19 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/215" target="_blank" title="">ŷ����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161047.jpg"><a href="soccer/team/7052" target="_blank" title="">������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991797/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991797/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991797/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-03-19 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2105" target="_blank" title="">��ά��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165903.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"><a href="soccer/team/267" target="_blank" title="">��Ф</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991800/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991800/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991800/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-03-19 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/335" target="_blank" title="">�հ�����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"><a href="soccer/team/2103" target="_blank" title="">ͼ��</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991801/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991801/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991801/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-03-19 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1744" target="_blank" title="">��ķ</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"></td>
			<td>			
				
					1:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"><a href="soccer/team/374" target="_blank" title="">����̩��</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991802/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991802/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991802/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-03-19 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1796" target="_blank" title="">����FC</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133625.png"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327160357.jpg"><a href="soccer/team/214" target="_blank" title="">÷˹</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991803/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991803/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991803/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-03-19 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/306" target="_blank" title="">����˹��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"><a href="soccer/team/320" target="_blank" title="">����</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991804/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991804/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991804/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-03-19 03:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/330" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"></td>
			<td>			
				
					0:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"><a href="soccer/team/2104" target="_blank" title="">����л��</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991805/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991805/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991805/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-03-19 21:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/301" target="_blank" title="">����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161938.jpg"><a href="soccer/team/202" target="_blank" title="">��˹</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991798/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991798/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991798/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-03-22 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/313" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122450206.jpg"><a href="soccer/team/12220" target="_blank" title="">ʥ������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991799/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991799/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991799/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_32" class="zstab" style="display: none;">
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
				
			<td>2016-04-02 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/7052" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161047.jpg"></td>
			<td>			
				
					3:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"><a href="soccer/team/194" target="_blank" title="">���ſ�Ф</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991806/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991806/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991806/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-04-02 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/214" target="_blank" title="">÷˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327160357.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"><a href="soccer/team/325" target="_blank" title="">��¶�</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991808/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991808/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991808/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-04-02 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/267" target="_blank" title="">��Ф</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"><a href="soccer/team/1744" target="_blank" title="">��ķ</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991809/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991809/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991809/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-04-02 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/335" target="_blank" title="">�հ�����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"><a href="soccer/team/330" target="_blank" title="">������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991810/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991810/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991810/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-04-02 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/202" target="_blank" title="">��˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161938.jpg"></td>
			<td>			
				
					3:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"><a href="soccer/team/215" target="_blank" title="">ŷ����</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991811/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991811/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991811/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-04-02 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2103" target="_blank" title="">ͼ��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"><a href="soccer/team/306" target="_blank" title="">����˹��</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991813/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991813/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991813/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-04-02 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/374" target="_blank" title="">����̩��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"></td>
			<td>			
				
					0:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"><a href="soccer/team/313" target="_blank" title="">������</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991814/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991814/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991814/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-04-02 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2104" target="_blank" title="">����л��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165903.jpg"><a href="soccer/team/2105" target="_blank" title="">��ά��</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991815/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991815/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991815/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-04-02 20:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/320" target="_blank" title="">����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"><a href="soccer/team/301" target="_blank" title="">����</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991807/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991807/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991807/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-04-05 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/12220" target="_blank" title="">ʥ������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122450206.jpg"></td>
			<td>			
				
					2:4
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133625.png"><a href="soccer/team/1796" target="_blank" title="">����FC</a></td>
			<td>			
				
					1:2
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991812/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991812/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991812/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_33" class="zstab" style="display: none;">
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
				
			<td>2016-04-09 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/194" target="_blank" title="">���ſ�Ф</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122450206.jpg"><a href="soccer/team/12220" target="_blank" title="">ʥ������</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991816/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991816/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991816/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-04-09 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/215" target="_blank" title="">ŷ����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"></td>
			<td>			
				
					4:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327160357.jpg"><a href="soccer/team/214" target="_blank" title="">÷˹</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991817/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991817/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991817/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-04-09 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/325" target="_blank" title="">��¶�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161938.jpg"><a href="soccer/team/202" target="_blank" title="">��˹</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991819/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991819/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991819/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-04-09 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2105" target="_blank" title="">��ά��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165903.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"><a href="soccer/team/2103" target="_blank" title="">ͼ��</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991821/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991821/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991821/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-04-09 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1744" target="_blank" title="">��ķ</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"><a href="soccer/team/2104" target="_blank" title="">����л��</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991822/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991822/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991822/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-04-09 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1796" target="_blank" title="">����FC</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133625.png"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161047.jpg"><a href="soccer/team/7052" target="_blank" title="">������</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991823/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991823/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991823/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-04-09 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/306" target="_blank" title="">����˹��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"><a href="soccer/team/335" target="_blank" title="">�հ�����</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991824/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991824/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991824/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-04-09 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/330" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"><a href="soccer/team/267" target="_blank" title="">��Ф</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991825/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991825/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991825/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-04-09 20:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/313" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"></td>
			<td>			
				
					2:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"><a href="soccer/team/320" target="_blank" title="">����</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991820/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991820/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991820/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-04-12 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/301" target="_blank" title="">����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"><a href="soccer/team/374" target="_blank" title="">����̩��</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				һ��/���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991818/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991818/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991818/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_34" class="zstab" style="display: none;">
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
				
			<td>2016-04-16 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/7052" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161047.jpg"></td>
			<td>			
				
					0:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327160357.jpg"><a href="soccer/team/214" target="_blank" title="">÷˹</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991826/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991826/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991826/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-04-16 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/267" target="_blank" title="">��Ф</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"><a href="soccer/team/306" target="_blank" title="">����˹��</a></td>
			<td>			
				
					2:1
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991828/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991828/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991828/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-04-16 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/202" target="_blank" title="">��˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161938.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"><a href="soccer/team/194" target="_blank" title="">���ſ�Ф</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991830/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991830/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991830/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-04-16 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/12220" target="_blank" title="">ʥ������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122450206.jpg"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"><a href="soccer/team/325" target="_blank" title="">��¶�</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991831/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991831/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991831/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-04-16 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/330" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165903.jpg"><a href="soccer/team/2105" target="_blank" title="">��ά��</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991832/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991832/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991832/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-04-16 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2103" target="_blank" title="">ͼ��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"><a href="soccer/team/1744" target="_blank" title="">��ķ</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991833/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991833/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991833/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-04-16 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/374" target="_blank" title="">����̩��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"><a href="soccer/team/215" target="_blank" title="">ŷ����</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991834/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991834/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991834/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-04-16 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2104" target="_blank" title="">����л��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"><a href="soccer/team/313" target="_blank" title="">������</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991835/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991835/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991835/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-04-16 20:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/335" target="_blank" title="">�հ�����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"></td>
			<td>			
				
					1:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"><a href="soccer/team/301" target="_blank" title="">����</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991829/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991829/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991829/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-04-19 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/320" target="_blank" title="">����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"></td>
			<td>			
				
					3:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133625.png"><a href="soccer/team/1796" target="_blank" title="">����FC</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991827/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991827/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991827/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_35" class="zstab" style="display: none;">
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
				
			<td>2016-04-23 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/194" target="_blank" title="">���ſ�Ф</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"><a href="soccer/team/2104" target="_blank" title="">����л��</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991836/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991836/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991836/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-04-23 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/325" target="_blank" title="">��¶�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161047.jpg"><a href="soccer/team/7052" target="_blank" title="">������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991839/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991839/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991839/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-04-23 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/313" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"><a href="soccer/team/2103" target="_blank" title="">ͼ��</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991840/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991840/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991840/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-04-23 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2105" target="_blank" title="">��ά��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165903.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"><a href="soccer/team/335" target="_blank" title="">�հ�����</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991841/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991841/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991841/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-04-23 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/214" target="_blank" title="">÷˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327160357.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122450206.jpg"><a href="soccer/team/12220" target="_blank" title="">ʥ������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991842/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991842/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991842/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-04-23 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1744" target="_blank" title="">��ķ</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"></td>
			<td>			
				
					4:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161938.jpg"><a href="soccer/team/202" target="_blank" title="">��˹</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991843/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991843/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991843/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-04-23 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1796" target="_blank" title="">����FC</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133625.png"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"><a href="soccer/team/374" target="_blank" title="">����̩��</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991844/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991844/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991844/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-04-23 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/306" target="_blank" title="">����˹��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"><a href="soccer/team/330" target="_blank" title="">������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991845/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991845/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991845/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-04-23 20:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/215" target="_blank" title="">ŷ����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"><a href="soccer/team/320" target="_blank" title="">����</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				�ܰ���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991837/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991837/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991837/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-04-26 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/301" target="_blank" title="">����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"><a href="soccer/team/267" target="_blank" title="">��Ф</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991838/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991838/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991838/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_36" class="zstab" style="display: none;">
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
				
			<td>2016-04-30 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/267" target="_blank" title="">��Ф</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"></td>
			<td>			
				
					2:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"><a href="soccer/team/215" target="_blank" title="">ŷ����</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991847/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991847/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991847/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-04-30 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/335" target="_blank" title="">�հ�����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"></td>
			<td>			
				
					3:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"><a href="soccer/team/1744" target="_blank" title="">��ķ</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991848/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991848/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991848/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-04-30 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/202" target="_blank" title="">��˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161938.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133625.png"><a href="soccer/team/1796" target="_blank" title="">����FC</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				һ��/���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991849/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991849/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991849/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-04-30 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/12220" target="_blank" title="">ʥ������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122450206.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161047.jpg"><a href="soccer/team/7052" target="_blank" title="">������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991850/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991850/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991850/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-04-30 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/306" target="_blank" title="">����˹��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165903.jpg"><a href="soccer/team/2105" target="_blank" title="">��ά��</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991851/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991851/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991851/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-04-30 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/330" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"><a href="soccer/team/313" target="_blank" title="">������</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991852/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991852/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991852/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-04-30 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2103" target="_blank" title="">ͼ��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"><a href="soccer/team/325" target="_blank" title="">��¶�</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991853/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991853/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991853/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-04-30 02:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/374" target="_blank" title="">����̩��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"><a href="soccer/team/194" target="_blank" title="">���ſ�Ф</a></td>
			<td>			
				
					2:1
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991854/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991854/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991854/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-05-01 20:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/320" target="_blank" title="">����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"></td>
			<td>			
				
					0:4
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327160357.jpg"><a href="soccer/team/214" target="_blank" title="">÷˹</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991846/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991846/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991846/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-05-03 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2104" target="_blank" title="">����л��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"><a href="soccer/team/301" target="_blank" title="">����</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991855/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991855/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991855/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_37" class="zstab" style="display: none;">
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
				
			<td>2016-05-07 02:45</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/194" target="_blank" title="">���ſ�Ф</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"><a href="soccer/team/267" target="_blank" title="">��Ф</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991856/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991856/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991856/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-05-07 02:45</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/215" target="_blank" title="">ŷ����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"></td>
			<td>			
				
					1:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"><a href="soccer/team/335" target="_blank" title="">�հ�����</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991857/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991857/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991857/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-05-07 02:45</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/301" target="_blank" title="">����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165903.jpg"><a href="soccer/team/2105" target="_blank" title="">��ά��</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991858/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991858/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991858/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-05-07 02:45</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/7052" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161047.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161938.jpg"><a href="soccer/team/202" target="_blank" title="">��˹</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991859/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991859/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991859/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-05-07 02:45</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/325" target="_blank" title="">��¶�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"></td>
			<td>			
				
					4:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"><a href="soccer/team/374" target="_blank" title="">����̩��</a></td>
			<td>			
				
					3:2
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991860/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991860/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991860/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-05-07 02:45</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/313" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"><a href="soccer/team/306" target="_blank" title="">����˹��</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991861/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991861/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991861/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-05-07 02:45</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/214" target="_blank" title="">÷˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327160357.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"><a href="soccer/team/2103" target="_blank" title="">ͼ��</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				һ��/���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991862/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991862/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991862/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-05-07 02:45</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1744" target="_blank" title="">��ķ</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"><a href="soccer/team/330" target="_blank" title="">������</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991863/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991863/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991863/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-05-07 02:45</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1796" target="_blank" title="">����FC</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133625.png"></td>
			<td>			
				
					1:4
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"><a href="soccer/team/2104" target="_blank" title="">����л��</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991864/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991864/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991864/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-05-07 02:45</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/12220" target="_blank" title="">ʥ������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122450206.jpg"></td>
			<td>			
				
					3:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"><a href="soccer/team/320" target="_blank" title="">����</a></td>
			<td>			
				
					2:1
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991865/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991865/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991865/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_38" class="zstab">
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
				
			<td>2016-05-14 02:45</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/320" target="_blank" title="">����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328150437.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201212152857.jpg"><a href="soccer/team/194" target="_blank" title="">���ſ�Ф</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991866/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991866/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991866/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-05-14 02:45</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2105" target="_blank" title="">��ά��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165903.jpg"></td>
			<td>			
				
					4:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012713143213.jpg"><a href="soccer/team/1744" target="_blank" title="">��ķ</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991867/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991867/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991867/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-05-14 02:45</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/267" target="_blank" title="">��Ф</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165238.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327163217.jpg"><a href="soccer/team/313" target="_blank" title="">������</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991868/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991868/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991868/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-05-14 02:45</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/335" target="_blank" title="">�հ�����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133342.png"></td>
			<td>			
				
					5:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161047.jpg"><a href="soccer/team/7052" target="_blank" title="">������</a></td>
			<td>			
				
					3:0
							
			</td>
			<td>
			
				һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991869/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991869/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991869/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-05-14 02:45</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/202" target="_blank" title="">��˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327161938.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327160357.jpg"><a href="soccer/team/214" target="_blank" title="">÷˹</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991870/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991870/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991870/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-05-14 02:45</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/306" target="_blank" title="">����˹��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133034.png"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327162105.jpg"><a href="soccer/team/215" target="_blank" title="">ŷ����</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991871/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991871/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991871/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-05-14 02:45</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/330" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201328145648.gif"></td>
			<td>			
				
					3:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133625.png"><a href="soccer/team/1796" target="_blank" title="">����FC</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991872/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991872/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991872/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-05-14 02:45</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2103" target="_blank" title="">ͼ��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122445444.jpg"></td>
			<td>			
				
					2:5
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714132909.jpg"><a href="soccer/team/301" target="_blank" title="">����</a></td>
			<td>			
				
					1:3
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991873/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991873/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991873/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-05-14 02:45</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/374" target="_blank" title="">����̩��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133456.png"></td>
			<td>			
				
					2:4
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2012122450206.jpg"><a href="soccer/team/12220" target="_blank" title="">ʥ������</a></td>
			<td>			
				
					1:3
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991874/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991874/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991874/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-05-14 02:45</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2104" target="_blank" title="">����л��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/201327165752.jpg"></td>
			<td>			
				
					3:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20150714133215.png"><a href="soccer/team/325" target="_blank" title="">��¶�</a></td>
			<td>			
				
					2:2
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1991875/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1991875/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1991875/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
</tbody></table>


</div>
		<div class="league_right_022" id="matchInfofj">
		</div>
	</div>
	



</body>