<body data-eventspy-target-node-id="l7u6059izknqkpqt2qog8pvi">
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
<a style="height:69px;overflow:hidden;" onclick="_hmt.push(['_trackEvent', 'ͷ�����', 'click', '��ר���Ƽ� �����н�������', 1])" href="http://news.zgzcw.com/zjtj/index.shtml" target="_blank" rel="nofollow" data-event-spy-cb="true"><img class="ad01" width="384" height="69" src="http://public.zgzcw.com/d/images/20161071475821970022_721.png" alt="��ר���Ƽ� �����н�������" title="��ר���Ƽ� �����н�������">
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
						
				  		
				  		
				  		
				  		
				  			
				  			<img src="http://img.zgzcw.com/zgzcw/matchCenter/league/images/20121101163642.jpg" width="100" height="100" border="0">
				  			
				  		
					</dt>
					<dd>
					
						[������]
				    
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
				
					<div>����ͳ��</div>
					<ul>
						<li class="cur">
						<a href="http://saishi.zgzcw.com:80/soccer/league/6">
						������Ϣ</a></li>
	                   
						<li>
						<a href="http://saishi.zgzcw.com:80/soccer/league/6/2015-2016/ssb">
						���ְ�</a></li>
						<li>
						<a href="http://saishi.zgzcw.com:80/soccer/league/6/2015-2016/jqds">
						�ܽ���˫</a></li>
						<li>
						<a href="http://saishi.zgzcw.com:80/soccer/league/6/2015-2016/sxds">
						���µ�˫</a></li>
						<li>
						<a href="http://saishi.zgzcw.com:80/soccer/league/6/2015-2016/sxpl">
						������·��</a></li>
					</ul>
				</div>
			
			<div class="tongji_list">
				<div>����б�</div>
				<ul>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/659" target="_blank" class="a1" title="��ɳ����">
					<li>��ɳ����</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/658" target="_blank" class="a1" title="������ά">
					<li>������ά</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/609" target="_blank" class="a1" title="�����Ʒ�">
					<li>�����Ʒ�</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/1041" target="_blank" class="a1" title="����ά��">
					<li>����ά��</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/1024" target="_blank" class="a1" title="¬������">
					<li>¬������</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/5910" target="_blank" class="a1" title="������">
					<li>������</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/3159" target="_blank" class="a1" title="��������">
					<li>��������</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/1442" target="_blank" class="a1" title="���±�˹">
					<li>���±�˹</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/1234" target="_blank" class="a1" title="ʩ���ղ�">
					<li>ʩ���ղ�</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/1142" target="_blank" class="a1" title="������">
					<li>������</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/2894" target="_blank" class="a1" title="˹��˹��">
					<li>˹��˹��</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/2342" target="_blank" class="a1" title="���л���">
					<li>���л���</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/667" target="_blank" class="a1" title="���񵤿�">
					<li>���񵤿�</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/1009" target="_blank" class="a1" title="������">
					<li>������</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/11123" target="_blank" class="a1" title="LKS������">
					<li>LKS������</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/1143" target="_blank" class="a1" title="������˹">
					<li>������˹</li>
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
					
						<option value="609">�����Ʒ�</option>
					
						<option value="658">������ά</option>
					
						<option value="659">��ɳ����</option>
					
						<option value="667">���񵤿�</option>
					
						<option value="1009">������</option>
					
						<option value="1024">¬������</option>
					
						<option value="1041">����ά��</option>
					
						<option value="1142">������</option>
					
						<option value="1143">������˹</option>
					
						<option value="1234">ʩ���ղ�</option>
					
						<option value="1442">���±�˹</option>
					
						<option value="2342">���л���</option>
					
						<option value="2894">˹��˹��</option>
					
						<option value="3159">��������</option>
					
						<option value="5910">������</option>
					
						<option value="11123">LKS������</option>
					
				</select> <select id="selectTeam2" style="display:none;">
					<option value="0" selected="selected">ѡ�����</option>
					
						<option value="609">�����Ʒ�</option>
					
						<option value="658">������ά</option>
					
						<option value="659">��ɳ����</option>
					
						<option value="667">���񵤿�</option>
					
						<option value="1009">������</option>
					
						<option value="1024">¬������</option>
					
						<option value="1041">����ά��</option>
					
						<option value="1142">������</option>
					
						<option value="1143">������˹</option>
					
						<option value="1234">ʩ���ղ�</option>
					
						<option value="1442">���±�˹</option>
					
						<option value="2342">���л���</option>
					
						<option value="2894">˹��˹��</option>
					
						<option value="3159">��������</option>
					
						<option value="5910">������</option>
					
						<option value="11123">LKS������</option>
					
				</select>
				<select id="fjsai">
				<option value="0" selected="selected">����</option>
				<option value="1" >������</option>
				</select>
			</div>
			������2015-2016 -- ����&nbsp;
						
			
		</div> -->
	<div class="table_out">
		<div class="table_head">
			<div class="team_out2">
			
				<div class="div-select team_lian fl" id="selectTeam" value="0">
                    <span>��ѡ�����</span>
                    <ul class="select_options">
                        
							<li value="609">�����Ʒ�</li>
						
							<li value="658">������ά</li>
						
							<li value="659">��ɳ����</li>
						
							<li value="667">���񵤿�</li>
						
							<li value="1009">������</li>
						
							<li value="1024">¬������</li>
						
							<li value="1041">����ά��</li>
						
							<li value="1142">������</li>
						
							<li value="1143">������˹</li>
						
							<li value="1234">ʩ���ղ�</li>
						
							<li value="1442">���±�˹</li>
						
							<li value="2342">���л���</li>
						
							<li value="2894">˹��˹��</li>
						
							<li value="3159">��������</li>
						
							<li value="5910">������</li>
						
							<li value="11123">LKS������</li>
						
                    </ul>
                </div>
                <b class="qxzqd fl">VS</b>
                <div class="div-select fl" style="margin-left:20px;" id="selectTeam2" value="0">
                    <span>��ѡ�����</span>
                    <ul class="select_options">
                        
							<li value="609">�����Ʒ�</li>
						
							<li value="658">������ά</li>
						
							<li value="659">��ɳ����</li>
						
							<li value="667">���񵤿�</li>
						
							<li value="1009">������</li>
						
							<li value="1024">¬������</li>
						
							<li value="1041">����ά��</li>
						
							<li value="1142">������</li>
						
							<li value="1143">������˹</li>
						
							<li value="1234">ʩ���ղ�</li>
						
							<li value="1442">���±�˹</li>
						
							<li value="2342">���л���</li>
						
							<li value="2894">˹��˹��</li>
						
							<li value="3159">��������</li>
						
							<li value="5910">������</li>
						
							<li value="11123">LKS������</li>
						
                    </ul>
                </div>
               
			</div>
			<span>
				2015-2016����������
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
				
					<option value="609">�����Ʒ�</option>
				
					<option value="658">������ά</option>
				
					<option value="659">��ɳ����</option>
				
					<option value="667">���񵤿�</option>
				
					<option value="1009">������</option>
				
					<option value="1024">¬������</option>
				
					<option value="1041">����ά��</option>
				
					<option value="1142">������</option>
				
					<option value="1143">������˹</option>
				
					<option value="1234">ʩ���ղ�</option>
				
					<option value="1442">���±�˹</option>
				
					<option value="2342">���л���</option>
				
					<option value="2894">˹��˹��</option>
				
					<option value="3159">��������</option>
				
					<option value="5910">������</option>
				
					<option value="11123">LKS������</option>
				
			</select>
			<select id="selectTeam2">
				<option value="0" selected="selected">ѡ�����</option>
				
					<option value="609">�����Ʒ�</option>
				
					<option value="658">������ά</option>
				
					<option value="659">��ɳ����</option>
				
					<option value="667">���񵤿�</option>
				
					<option value="1009">������</option>
				
					<option value="1024">¬������</option>
				
					<option value="1041">����ά��</option>
				
					<option value="1142">������</option>
				
					<option value="1143">������˹</option>
				
					<option value="1234">ʩ���ղ�</option>
				
					<option value="1442">���±�˹</option>
				
					<option value="2342">���л���</option>
				
					<option value="2894">˹��˹��</option>
				
					<option value="3159">��������</option>
				
					<option value="5910">������</option>
				
					<option value="11123">LKS������</option>
				
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
				
			<td>2015-07-17 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/609" target="_blank" title="">�����Ʒ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814173929.gif"><a href="soccer/team/1143" target="_blank" title="">������˹</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987659/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987659/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987659/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-07-18 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5910" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"><a href="soccer/team/658" target="_blank" title="">������ά</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987655/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987655/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987655/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-07-18 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2342" target="_blank" title="">���л���</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"><a href="soccer/team/667" target="_blank" title="">���񵤿�</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987657/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987657/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987657/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-07-18 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1024" target="_blank" title="">¬������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173341.jpg"><a href="soccer/team/1442" target="_blank" title="">���±�˹</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987660/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987660/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987660/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-07-19 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1142" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"><a href="soccer/team/1234" target="_blank" title="">ʩ���ղ�</a></td>
			<td>			
				
					1:2
							
			</td>
			<td>
			
				һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987654/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987654/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987654/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-07-19 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1009" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"></td>
			<td>			
				
					3:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"><a href="soccer/team/3159" target="_blank" title="">��������</a></td>
			<td>			
				
					1:2
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987613/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987613/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987613/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-07-19 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2894" target="_blank" title="">˹��˹��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"></td>
			<td>			
				
					1:4
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"><a href="soccer/team/659" target="_blank" title="">��ɳ����</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987658/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987658/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987658/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-07-20 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1041" target="_blank" title="">����ά��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"><a href="soccer/team/11123" target="_blank" title="">LKS������</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987656/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987656/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987656/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-04-15 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1234" target="_blank" title="">ʩ���ղ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"><a href="soccer/team/2342" target="_blank" title="">���л���</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091171/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2091171/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2091171/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-04-16 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/659" target="_blank" title="">��ɳ����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"><a href="soccer/team/1142" target="_blank" title="">������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091172/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2091172/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2091172/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-04-16 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1009" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"><a href="soccer/team/2894" target="_blank" title="">˹��˹��</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091188/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2091188/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2091188/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-04-16 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1024" target="_blank" title="">¬������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"><a href="soccer/team/5910" target="_blank" title="">������</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091189/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2091189/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2091189/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-04-17 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1041" target="_blank" title="">����ά��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"><a href="soccer/team/658" target="_blank" title="">������ά</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091190/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2091190/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2091190/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-04-17 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1442" target="_blank" title="">���±�˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173341.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"><a href="soccer/team/11123" target="_blank" title="">LKS������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091232/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2091232/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2091232/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-04-17 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3159" target="_blank" title="">��������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"><a href="soccer/team/667" target="_blank" title="">���񵤿�</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091233/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2091233/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2091233/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-04-17 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/609" target="_blank" title="">�����Ʒ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"></td>
			<td>			
				
					3:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814173929.gif"><a href="soccer/team/1143" target="_blank" title="">������˹</a></td>
			<td>			
				
					2:1
							
			</td>
			<td>
			
				һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091245/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2091245/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2091245/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2015-07-24 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2342" target="_blank" title="">���л���</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"><a href="soccer/team/1041" target="_blank" title="">����ά��</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987641/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987641/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987641/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-07-25 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/658" target="_blank" title="">������ά</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"><a href="soccer/team/609" target="_blank" title="">�����Ʒ�</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987635/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987635/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987635/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-07-25 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1024" target="_blank" title="">¬������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"><a href="soccer/team/1009" target="_blank" title="">������</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987642/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987642/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987642/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-07-26 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1142" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"><a href="soccer/team/5910" target="_blank" title="">������</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987638/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987638/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987638/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-07-26 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3159" target="_blank" title="">��������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"><a href="soccer/team/11123" target="_blank" title="">LKS������</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987637/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987637/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987637/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-07-26 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1234" target="_blank" title="">ʩ���ղ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"><a href="soccer/team/2894" target="_blank" title="">˹��˹��</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987640/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987640/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987640/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-07-26 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/659" target="_blank" title="">��ɳ����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"></td>
			<td>			
				
					5:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173341.jpg"><a href="soccer/team/1442" target="_blank" title="">���±�˹</a></td>
			<td>			
				
					3:0
							
			</td>
			<td>
			
				���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987639/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987639/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987639/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-07-27 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/667" target="_blank" title="">���񵤿�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814173929.gif"><a href="soccer/team/1143" target="_blank" title="">������˹</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987636/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987636/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987636/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-04-19 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/658" target="_blank" title="">������ά</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"><a href="soccer/team/1024" target="_blank" title="">¬������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091261/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2091261/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2091261/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-04-19 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1142" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"><a href="soccer/team/1041" target="_blank" title="">����ά��</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091262/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2091262/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2091262/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-04-20 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2342" target="_blank" title="">���л���</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"><a href="soccer/team/659" target="_blank" title="">��ɳ����</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				��һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091250/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2091250/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2091250/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-04-20 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5910" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"><a href="soccer/team/1234" target="_blank" title="">ʩ���ղ�</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091251/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2091251/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2091251/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-04-20 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/11123" target="_blank" title="">LKS������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"><a href="soccer/team/1009" target="_blank" title="">������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091263/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2091263/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2091263/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-04-20 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/667" target="_blank" title="">���񵤿�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"></td>
			<td>			
				
					0:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"><a href="soccer/team/609" target="_blank" title="">�����Ʒ�</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091264/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2091264/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2091264/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-04-21 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1143" target="_blank" title="">������˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814173929.gif"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173341.jpg"><a href="soccer/team/1442" target="_blank" title="">���±�˹</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091252/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2091252/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2091252/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-04-21 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2894" target="_blank" title="">˹��˹��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"></td>
			<td>			
				
					3:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"><a href="soccer/team/3159" target="_blank" title="">��������</a></td>
			<td>			
				
					2:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091253/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2091253/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2091253/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2015-07-31 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1041" target="_blank" title="">����ά��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"></td>
			<td>			
				
					3:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814173929.gif"><a href="soccer/team/1143" target="_blank" title="">������˹</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987647/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987647/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987647/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-08-01 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5910" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"><a href="soccer/team/1234" target="_blank" title="">ʩ���ղ�</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987646/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987646/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987646/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-08-01 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1442" target="_blank" title="">���±�˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173341.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"><a href="soccer/team/658" target="_blank" title="">������ά</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987648/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987648/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987648/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-08-02 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/609" target="_blank" title="">�����Ʒ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"><a href="soccer/team/1142" target="_blank" title="">������</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987661/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987661/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987661/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-08-02 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3159" target="_blank" title="">��������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"><a href="soccer/team/1024" target="_blank" title="">¬������</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987644/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987644/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987644/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-08-02 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2894" target="_blank" title="">˹��˹��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"><a href="soccer/team/11123" target="_blank" title="">LKS������</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987649/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987649/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987649/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-08-02 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/667" target="_blank" title="">���񵤿�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"><a href="soccer/team/659" target="_blank" title="">��ɳ����</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				�ܰ���/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987643/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987643/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987643/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-08-03 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1009" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"><a href="soccer/team/2342" target="_blank" title="">���л���</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987645/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987645/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987645/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-04-22 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1024" target="_blank" title="">¬������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"></td>
			<td>			
				
					4:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"><a href="soccer/team/2342" target="_blank" title="">���л���</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091277/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2091277/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2091277/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-04-23 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/659" target="_blank" title="">��ɳ����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"></td>
			<td>			
				
					4:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"><a href="soccer/team/658" target="_blank" title="">������ά</a></td>
			<td>			
				
					3:0
							
			</td>
			<td>
			
				һ��/���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091266/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2091266/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2091266/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-04-23 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1009" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"><a href="soccer/team/667" target="_blank" title="">���񵤿�</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091268/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2091268/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2091268/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-04-23 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1442" target="_blank" title="">���±�˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173341.jpg"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"><a href="soccer/team/2894" target="_blank" title="">˹��˹��</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091272/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2091272/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2091272/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-04-24 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1234" target="_blank" title="">ʩ���ղ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"><a href="soccer/team/1142" target="_blank" title="">������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091286/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2091286/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2091286/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-04-24 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3159" target="_blank" title="">��������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814173929.gif"><a href="soccer/team/1143" target="_blank" title="">������˹</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091308/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2091308/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2091308/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-04-24 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1041" target="_blank" title="">����ά��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"></td>
			<td>			
				
					3:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"><a href="soccer/team/5910" target="_blank" title="">������</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091309/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2091309/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2091309/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-04-25 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/609" target="_blank" title="">�����Ʒ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"><a href="soccer/team/11123" target="_blank" title="">LKS������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091310/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2091310/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2091310/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2015-08-07 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/658" target="_blank" title="">������ά</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"><a href="soccer/team/1041" target="_blank" title="">����ά��</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987650/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987650/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987650/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-08-08 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/11123" target="_blank" title="">LKS������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"><a href="soccer/team/1024" target="_blank" title="">¬������</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987664/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987664/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987664/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-08-08 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1143" target="_blank" title="">������˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814173929.gif"></td>
			<td>			
				
					1:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"><a href="soccer/team/3159" target="_blank" title="">��������</a></td>
			<td>			
				
					1:2
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987651/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987651/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987651/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-08-08 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1234" target="_blank" title="">ʩ���ղ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"><a href="soccer/team/667" target="_blank" title="">���񵤿�</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987665/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987665/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987665/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-08-09 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1142" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"><a href="soccer/team/1009" target="_blank" title="">������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				һ��/���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987662/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987662/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987662/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-08-09 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2894" target="_blank" title="">˹��˹��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"><a href="soccer/team/5910" target="_blank" title="">������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987667/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987667/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987667/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-08-09 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/659" target="_blank" title="">��ɳ����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"><a href="soccer/team/609" target="_blank" title="">�����Ʒ�</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987663/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987663/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987663/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-08-10 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2342" target="_blank" title="">���л���</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173341.jpg"><a href="soccer/team/1442" target="_blank" title="">���±�˹</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987666/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987666/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987666/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-04-28 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1024" target="_blank" title="">¬������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"><a href="soccer/team/659" target="_blank" title="">��ɳ����</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091311/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2091311/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2091311/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-04-28 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1142" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"><a href="soccer/team/5910" target="_blank" title="">������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091312/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2091312/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2091312/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-04-29 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1143" target="_blank" title="">������˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814173929.gif"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"><a href="soccer/team/2894" target="_blank" title="">˹��˹��</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091334/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2091334/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2091334/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-04-30 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2342" target="_blank" title="">���л���</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"><a href="soccer/team/658" target="_blank" title="">������ά</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091335/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2091335/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2091335/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-04-30 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/11123" target="_blank" title="">LKS������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"><a href="soccer/team/667" target="_blank" title="">���񵤿�</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091323/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2091323/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2091323/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-05-01 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1009" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"></td>
			<td>			
				
					3:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"><a href="soccer/team/609" target="_blank" title="">�����Ʒ�</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091324/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2091324/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2091324/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-05-01 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3159" target="_blank" title="">��������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"></td>
			<td>			
				
					3:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173341.jpg"><a href="soccer/team/1442" target="_blank" title="">���±�˹</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091346/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2091346/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2091346/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-05-01 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1041" target="_blank" title="">����ά��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"><a href="soccer/team/1234" target="_blank" title="">ʩ���ղ�</a></td>
			<td>			
				
					2:1
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091354/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2091354/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2091354/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2015-08-14 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1009" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"></td>
			<td>			
				
					0:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"><a href="soccer/team/658" target="_blank" title="">������ά</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987694/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987694/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987694/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-08-15 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1024" target="_blank" title="">¬������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"><a href="soccer/team/1142" target="_blank" title="">������</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987699/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987699/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987699/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-08-15 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/11123" target="_blank" title="">LKS������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"></td>
			<td>			
				
					3:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814173929.gif"><a href="soccer/team/1143" target="_blank" title="">������˹</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987695/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987695/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987695/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-08-15 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/667" target="_blank" title="">���񵤿�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"></td>
			<td>			
				
					2:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"><a href="soccer/team/2894" target="_blank" title="">˹��˹��</a></td>
			<td>			
				
					2:2
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987652/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987652/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987652/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-08-16 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1041" target="_blank" title="">����ά��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"><a href="soccer/team/659" target="_blank" title="">��ɳ����</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				�ܰ���/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987696/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987696/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987696/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-08-16 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3159" target="_blank" title="">��������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"><a href="soccer/team/2342" target="_blank" title="">���л���</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987653/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987653/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987653/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-08-16 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/609" target="_blank" title="">�����Ʒ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"></td>
			<td>			
				
					3:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"><a href="soccer/team/5910" target="_blank" title="">������</a></td>
			<td>			
				
					2:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987698/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987698/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987698/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-08-17 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1442" target="_blank" title="">���±�˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173341.jpg"></td>
			<td>			
				
					2:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"><a href="soccer/team/1234" target="_blank" title="">ʩ���ղ�</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987697/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987697/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987697/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-05-06 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1442" target="_blank" title="">���±�˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173341.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"><a href="soccer/team/1009" target="_blank" title="">������</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091349/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2091349/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2091349/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-05-07 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/609" target="_blank" title="">�����Ʒ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"><a href="soccer/team/3159" target="_blank" title="">��������</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091350/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2091350/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2091350/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-05-07 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2894" target="_blank" title="">˹��˹��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"><a href="soccer/team/11123" target="_blank" title="">LKS������</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091359/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2091359/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2091359/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-05-07 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/667" target="_blank" title="">���񵤿�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814173929.gif"><a href="soccer/team/1143" target="_blank" title="">������˹</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091360/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2091360/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2091360/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-05-08 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5910" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"><a href="soccer/team/2342" target="_blank" title="">���л���</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				һ��/���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091361/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2091361/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2091361/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-05-08 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1234" target="_blank" title="">ʩ���ղ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"></td>
			<td>			
				
					1:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"><a href="soccer/team/1024" target="_blank" title="">¬������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091379/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2091379/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2091379/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-05-08 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/658" target="_blank" title="">������ά</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"><a href="soccer/team/1142" target="_blank" title="">������</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091380/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2091380/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2091380/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-05-08 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/659" target="_blank" title="">��ɳ����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"></td>
			<td>			
				
					4:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"><a href="soccer/team/1041" target="_blank" title="">����ά��</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				һ��/���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091387/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2091387/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2091387/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2015-08-21 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1234" target="_blank" title="">ʩ���ղ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"><a href="soccer/team/609" target="_blank" title="">�����Ʒ�</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987721/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987721/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987721/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-08-22 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5910" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"></td>
			<td>			
				
					3:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"><a href="soccer/team/667" target="_blank" title="">���񵤿�</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987719/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987719/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987719/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-08-22 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2342" target="_blank" title="">���л���</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"></td>
			<td>			
				
					4:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"><a href="soccer/team/11123" target="_blank" title="">LKS������</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987722/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987722/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987722/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-08-22 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2894" target="_blank" title="">˹��˹��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173341.jpg"><a href="soccer/team/1442" target="_blank" title="">���±�˹</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987723/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987723/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987723/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-08-23 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/658" target="_blank" title="">������ά</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"><a href="soccer/team/3159" target="_blank" title="">��������</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987716/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987716/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987716/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-08-23 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1142" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"><a href="soccer/team/1041" target="_blank" title="">����ά��</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987718/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987718/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987718/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-08-23 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/659" target="_blank" title="">��ɳ����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"><a href="soccer/team/1009" target="_blank" title="">������</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987720/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987720/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987720/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-08-24 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1143" target="_blank" title="">������˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814173929.gif"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"><a href="soccer/team/1024" target="_blank" title="">¬������</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987717/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987717/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987717/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-05-11 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/667" target="_blank" title="">���񵤿�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"></td>
			<td>			
				
					5:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173341.jpg"><a href="soccer/team/1442" target="_blank" title="">���±�˹</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091390/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2091390/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2091390/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-05-11 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/609" target="_blank" title="">�����Ʒ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"><a href="soccer/team/2894" target="_blank" title="">˹��˹��</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091391/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2091391/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2091391/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-05-11 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1143" target="_blank" title="">������˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814173929.gif"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"><a href="soccer/team/1009" target="_blank" title="">������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091392/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2091392/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2091392/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-05-11 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3159" target="_blank" title="">��������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"><a href="soccer/team/11123" target="_blank" title="">LKS������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091393/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2091393/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2091393/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-05-12 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5910" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"><a href="soccer/team/659" target="_blank" title="">��ɳ����</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091394/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2091394/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2091394/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-05-12 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1234" target="_blank" title="">ʩ���ղ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"></td>
			<td>			
				
					3:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"><a href="soccer/team/658" target="_blank" title="">������ά</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091395/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2091395/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2091395/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-05-12 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2342" target="_blank" title="">���л���</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"></td>
			<td>			
				
					0:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"><a href="soccer/team/1041" target="_blank" title="">����ά��</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091396/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2091396/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2091396/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-05-12 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1024" target="_blank" title="">¬������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"></td>
			<td>			
				
					3:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"><a href="soccer/team/1142" target="_blank" title="">������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091397/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2091397/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2091397/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2015-08-28 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1442" target="_blank" title="">���±�˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173341.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"><a href="soccer/team/5910" target="_blank" title="">������</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987741/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987741/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987741/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-08-29 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/609" target="_blank" title="">�����Ʒ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"></td>
			<td>			
				
					4:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"><a href="soccer/team/2894" target="_blank" title="">˹��˹��</a></td>
			<td>			
				
					2:1
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987742/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987742/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987742/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-08-29 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1041" target="_blank" title="">����ά��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"></td>
			<td>			
				
					3:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"><a href="soccer/team/667" target="_blank" title="">���񵤿�</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987740/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987740/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987740/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-08-29 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1024" target="_blank" title="">¬������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"></td>
			<td>			
				
					3:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"><a href="soccer/team/2342" target="_blank" title="">���л���</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987743/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987743/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987743/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-08-30 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1009" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"><a href="soccer/team/1234" target="_blank" title="">ʩ���ղ�</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987738/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987738/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987738/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-08-30 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1143" target="_blank" title="">������˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814173929.gif"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"><a href="soccer/team/658" target="_blank" title="">������ά</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987736/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987736/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987736/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-08-30 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/11123" target="_blank" title="">LKS������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"></td>
			<td>			
				
					3:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"><a href="soccer/team/1142" target="_blank" title="">������</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				�ܰ���/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987739/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987739/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987739/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-08-30 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3159" target="_blank" title="">��������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"><a href="soccer/team/659" target="_blank" title="">��ɳ����</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				�ܰ���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987737/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987737/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987737/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-05-14 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1442" target="_blank" title="">���±�˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173341.jpg"></td>
			<td>			
				
					3:4
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"><a href="soccer/team/609" target="_blank" title="">�����Ʒ�</a></td>
			<td>			
				
					2:1
							
			</td>
			<td>
			
				�ܰ���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091403/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2091403/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2091403/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-05-14 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2894" target="_blank" title="">˹��˹��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"></td>
			<td>			
				
					3:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"><a href="soccer/team/667" target="_blank" title="">���񵤿�</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091404/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2091404/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2091404/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-05-14 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1009" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"></td>
			<td>			
				
					1:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"><a href="soccer/team/3159" target="_blank" title="">��������</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091405/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2091405/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2091405/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-05-14 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/11123" target="_blank" title="">LKS������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814173929.gif"><a href="soccer/team/1143" target="_blank" title="">������˹</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091406/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2091406/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2091406/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-05-15 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/659" target="_blank" title="">��ɳ����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"></td>
			<td>			
				
					3:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"><a href="soccer/team/1234" target="_blank" title="">ʩ���ղ�</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				���/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091440/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2091440/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2091440/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-05-15 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/658" target="_blank" title="">������ά</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"><a href="soccer/team/5910" target="_blank" title="">������</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091441/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2091441/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2091441/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-05-15 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1041" target="_blank" title="">����ά��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"><a href="soccer/team/1024" target="_blank" title="">¬������</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091442/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2091442/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2091442/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-05-15 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1142" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"></td>
			<td>			
				
					3:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"><a href="soccer/team/2342" target="_blank" title="">���л���</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2091443/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2091443/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2091443/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2015-09-11 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5910" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"><a href="soccer/team/1009" target="_blank" title="">������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987750/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987750/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987750/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-09-12 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/659" target="_blank" title="">��ɳ����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"><a href="soccer/team/1024" target="_blank" title="">¬������</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987751/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987751/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987751/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-09-12 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2894" target="_blank" title="">˹��˹��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"></td>
			<td>			
				
					3:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"><a href="soccer/team/3159" target="_blank" title="">��������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987770/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987770/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987770/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-09-12 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/658" target="_blank" title="">������ά</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"></td>
			<td>			
				
					2:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"><a href="soccer/team/11123" target="_blank" title="">LKS������</a></td>
			<td>			
				
					2:2
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987747/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987747/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987747/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-09-13 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1142" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173341.jpg"><a href="soccer/team/1442" target="_blank" title="">���±�˹</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				һ��/���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987749/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987749/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987749/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-09-13 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1234" target="_blank" title="">ʩ���ղ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"></td>
			<td>			
				
					3:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"><a href="soccer/team/1041" target="_blank" title="">����ά��</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987752/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987752/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987752/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-09-13 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2342" target="_blank" title="">���л���</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814173929.gif"><a href="soccer/team/1143" target="_blank" title="">������˹</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987769/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987769/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987769/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-09-14 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/667" target="_blank" title="">���񵤿�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"><a href="soccer/team/609" target="_blank" title="">�����Ʒ�</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987748/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987748/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987748/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2015-09-18 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1143" target="_blank" title="">������˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814173929.gif"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"><a href="soccer/team/2894" target="_blank" title="">˹��˹��</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987777/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987777/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987777/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-09-19 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1024" target="_blank" title="">¬������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"></td>
			<td>			
				
					4:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"><a href="soccer/team/658" target="_blank" title="">������ά</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987784/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987784/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987784/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-09-19 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/11123" target="_blank" title="">LKS������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"><a href="soccer/team/1234" target="_blank" title="">ʩ���ղ�</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987780/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987780/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987780/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-09-19 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1442" target="_blank" title="">���±�˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173341.jpg"></td>
			<td>			
				
					0:6
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"><a href="soccer/team/609" target="_blank" title="">�����Ʒ�</a></td>
			<td>			
				
					0:3
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987782/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987782/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987782/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-09-20 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1041" target="_blank" title="">����ά��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"><a href="soccer/team/5910" target="_blank" title="">������</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987781/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987781/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987781/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-09-20 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2342" target="_blank" title="">���л���</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"></td>
			<td>			
				
					1:4
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"><a href="soccer/team/659" target="_blank" title="">��ɳ����</a></td>
			<td>			
				
					1:3
							
			</td>
			<td>
			
				�ܰ���/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987783/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987783/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987783/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-09-20 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3159" target="_blank" title="">��������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"><a href="soccer/team/1142" target="_blank" title="">������</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987778/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987778/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987778/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-09-21 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1009" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"><a href="soccer/team/667" target="_blank" title="">���񵤿�</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987779/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987779/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987779/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2015-09-25 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/609" target="_blank" title="">�����Ʒ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"><a href="soccer/team/1009" target="_blank" title="">������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987810/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987810/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987810/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-09-26 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2894" target="_blank" title="">˹��˹��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"><a href="soccer/team/1041" target="_blank" title="">����ά��</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987792/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987792/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987792/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-09-26 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/667" target="_blank" title="">���񵤿�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173341.jpg"><a href="soccer/team/1442" target="_blank" title="">���±�˹</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987787/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987787/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987787/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-09-26 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/658" target="_blank" title="">������ά</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"><a href="soccer/team/2342" target="_blank" title="">���л���</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987786/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987786/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987786/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-09-27 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1142" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814173929.gif"><a href="soccer/team/1143" target="_blank" title="">������˹</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987788/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987788/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987788/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-09-27 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5910" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"></td>
			<td>			
				
					3:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"><a href="soccer/team/1024" target="_blank" title="">¬������</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987789/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987789/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987789/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-09-27 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/659" target="_blank" title="">��ɳ����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"><a href="soccer/team/11123" target="_blank" title="">LKS������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				һ��/���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987790/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987790/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987790/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-09-28 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1234" target="_blank" title="">ʩ���ղ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"><a href="soccer/team/3159" target="_blank" title="">��������</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987791/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987791/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987791/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2015-10-02 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2342" target="_blank" title="">���л���</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"><a href="soccer/team/1234" target="_blank" title="">ʩ���ղ�</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987829/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987829/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987829/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-10-03 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3159" target="_blank" title="">��������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"></td>
			<td>			
				
					0:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"><a href="soccer/team/5910" target="_blank" title="">������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987844/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987844/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987844/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-10-03 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/11123" target="_blank" title="">LKS������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"><a href="soccer/team/667" target="_blank" title="">���񵤿�</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987827/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987827/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987827/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-10-03 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1009" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173341.jpg"><a href="soccer/team/1442" target="_blank" title="">���±�˹</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987826/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987826/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987826/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-10-04 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1041" target="_blank" title="">����ά��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"><a href="soccer/team/609" target="_blank" title="">�����Ʒ�</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987828/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987828/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987828/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-10-04 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1143" target="_blank" title="">������˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814173929.gif"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"><a href="soccer/team/659" target="_blank" title="">��ɳ����</a></td>
			<td>			
				
					2:2
							
			</td>
			<td>
			
				�ܰ���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987843/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987843/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987843/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-10-04 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1024" target="_blank" title="">¬������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"><a href="soccer/team/2894" target="_blank" title="">˹��˹��</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987830/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987830/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987830/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-10-04 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/658" target="_blank" title="">������ά</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"></td>
			<td>			
				
					5:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"><a href="soccer/team/1142" target="_blank" title="">������</a></td>
			<td>			
				
					3:0
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987842/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987842/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987842/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2015-10-16 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5910" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814173929.gif"><a href="soccer/team/1143" target="_blank" title="">������˹</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987868/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987868/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987868/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-10-17 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2894" target="_blank" title="">˹��˹��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"><a href="soccer/team/1009" target="_blank" title="">������</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987872/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987872/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987872/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-10-17 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1442" target="_blank" title="">���±�˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173341.jpg"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"><a href="soccer/team/1041" target="_blank" title="">����ά��</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987870/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987870/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987870/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-10-17 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/667" target="_blank" title="">���񵤿�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"></td>
			<td>			
				
					3:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"><a href="soccer/team/3159" target="_blank" title="">��������</a></td>
			<td>			
				
					2:1
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987866/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987866/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987866/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-10-17 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1142" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"><a href="soccer/team/2342" target="_blank" title="">���л���</a></td>
			<td>			
				
					1:2
							
			</td>
			<td>
			
				һ��/���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987867/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987867/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987867/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-10-18 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/609" target="_blank" title="">�����Ʒ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"><a href="soccer/team/11123" target="_blank" title="">LKS������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987873/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987873/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987873/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-10-18 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/659" target="_blank" title="">��ɳ����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"></td>
			<td>			
				
					3:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"><a href="soccer/team/658" target="_blank" title="">������ά</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987869/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987869/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987869/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-10-19 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1234" target="_blank" title="">ʩ���ղ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"><a href="soccer/team/1024" target="_blank" title="">¬������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987871/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987871/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987871/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2015-10-23 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2342" target="_blank" title="">���л���</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"><a href="soccer/team/2894" target="_blank" title="">˹��˹��</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987904/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987904/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987904/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-10-24 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3159" target="_blank" title="">��������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"></td>
			<td>			
				
					1:4
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"><a href="soccer/team/609" target="_blank" title="">�����Ʒ�</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987900/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987900/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987900/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-10-24 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/658" target="_blank" title="">������ά</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"></td>
			<td>			
				
					4:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"><a href="soccer/team/1234" target="_blank" title="">ʩ���ղ�</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987898/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987898/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987898/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-10-24 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1041" target="_blank" title="">����ά��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"><a href="soccer/team/1009" target="_blank" title="">������</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987903/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987903/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987903/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-10-24 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1024" target="_blank" title="">¬������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"><a href="soccer/team/667" target="_blank" title="">���񵤿�</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987905/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987905/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987905/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-10-25 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/11123" target="_blank" title="">LKS������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"><a href="soccer/team/5910" target="_blank" title="">������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				�ܰ���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987902/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987902/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987902/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-10-26 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/659" target="_blank" title="">��ɳ����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"><a href="soccer/team/1142" target="_blank" title="">������</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987901/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987901/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987901/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-10-27 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1143" target="_blank" title="">������˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814173929.gif"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173341.jpg"><a href="soccer/team/1442" target="_blank" title="">���±�˹</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987899/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987899/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987899/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2015-10-31 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1234" target="_blank" title="">ʩ���ղ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814173929.gif"><a href="soccer/team/1143" target="_blank" title="">������˹</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987940/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987940/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987940/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-10-31 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/667" target="_blank" title="">���񵤿�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"><a href="soccer/team/658" target="_blank" title="">������ά</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987935/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987935/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987935/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-10-31 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/609" target="_blank" title="">�����Ʒ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"><a href="soccer/team/2342" target="_blank" title="">���л���</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987942/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987942/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987942/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-10-31 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1041" target="_blank" title="">����ά��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"><a href="soccer/team/1024" target="_blank" title="">¬������</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987938/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987938/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987938/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-11-01 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5910" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"></td>
			<td>			
				
					1:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"><a href="soccer/team/659" target="_blank" title="">��ɳ����</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987937/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987937/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987937/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-11-01 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2894" target="_blank" title="">˹��˹��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"><a href="soccer/team/1142" target="_blank" title="">������</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987941/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987941/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987941/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-11-03 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1009" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"><a href="soccer/team/11123" target="_blank" title="">LKS������</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987936/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987936/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987936/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-11-03 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1442" target="_blank" title="">���±�˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173341.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"><a href="soccer/team/3159" target="_blank" title="">��������</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987939/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987939/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987939/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2015-11-07 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1024" target="_blank" title="">¬������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"></td>
			<td>			
				
					1:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"><a href="soccer/team/609" target="_blank" title="">�����Ʒ�</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987950/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987950/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987950/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-11-07 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/658" target="_blank" title="">������ά</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"></td>
			<td>			
				
					4:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"><a href="soccer/team/2894" target="_blank" title="">˹��˹��</a></td>
			<td>			
				
					4:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987943/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987943/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987943/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-11-07 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/11123" target="_blank" title="">LKS������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173341.jpg"><a href="soccer/team/1442" target="_blank" title="">���±�˹</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987948/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987948/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987948/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-11-08 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2342" target="_blank" title="">���л���</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"></td>
			<td>			
				
					3:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"><a href="soccer/team/5910" target="_blank" title="">������</a></td>
			<td>			
				
					3:0
							
			</td>
			<td>
			
				�ܰ���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987949/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987949/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987949/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-11-08 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3159" target="_blank" title="">��������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"><a href="soccer/team/1041" target="_blank" title="">����ά��</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987945/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987945/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987945/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-11-08 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1143" target="_blank" title="">������˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814173929.gif"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"><a href="soccer/team/1009" target="_blank" title="">������</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987944/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987944/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987944/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-11-08 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1142" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"></td>
			<td>			
				
					3:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"><a href="soccer/team/667" target="_blank" title="">���񵤿�</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987946/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987946/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987946/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-11-09 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/659" target="_blank" title="">��ɳ����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"><a href="soccer/team/1234" target="_blank" title="">ʩ���ղ�</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987947/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987947/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987947/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2015-11-21 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/11123" target="_blank" title="">LKS������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"></td>
			<td>			
				
					3:5
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"><a href="soccer/team/1041" target="_blank" title="">����ά��</a></td>
			<td>			
				
					2:3
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987980/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987980/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987980/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-11-21 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1143" target="_blank" title="">������˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814173929.gif"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"><a href="soccer/team/609" target="_blank" title="">�����Ʒ�</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				�ܰ���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987977/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987977/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987977/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-11-21 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3159" target="_blank" title="">��������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"><a href="soccer/team/1009" target="_blank" title="">������</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987978/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987978/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987978/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-11-22 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/667" target="_blank" title="">���񵤿�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"></td>
			<td>			
				
					0:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"><a href="soccer/team/2342" target="_blank" title="">���л���</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987976/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987976/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987976/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-11-22 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/659" target="_blank" title="">��ɳ����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"><a href="soccer/team/2894" target="_blank" title="">˹��˹��</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987979/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987979/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987979/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-11-22 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1442" target="_blank" title="">���±�˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173341.jpg"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"><a href="soccer/team/1024" target="_blank" title="">¬������</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987981/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987981/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987981/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-11-23 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1234" target="_blank" title="">ʩ���ղ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"><a href="soccer/team/1142" target="_blank" title="">������</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987982/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987982/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987982/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-11-24 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/658" target="_blank" title="">������ά</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"></td>
			<td>			
				
					3:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"><a href="soccer/team/5910" target="_blank" title="">������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987975/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987975/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987975/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2015-11-28 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1009" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"><a href="soccer/team/1024" target="_blank" title="">¬������</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988006/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988006/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988006/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-11-28 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1041" target="_blank" title="">����ά��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"></td>
			<td>			
				
					3:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"><a href="soccer/team/2342" target="_blank" title="">���л���</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988009/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988009/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988009/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-11-28 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1143" target="_blank" title="">������˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814173929.gif"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"><a href="soccer/team/667" target="_blank" title="">���񵤿�</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988005/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988005/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988005/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-11-29 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2894" target="_blank" title="">˹��˹��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"><a href="soccer/team/1234" target="_blank" title="">ʩ���ղ�</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988011/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988011/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988011/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-11-29 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5910" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"><a href="soccer/team/1142" target="_blank" title="">������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988007/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988007/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988007/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-11-29 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1442" target="_blank" title="">���±�˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173341.jpg"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"><a href="soccer/team/659" target="_blank" title="">��ɳ����</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				�ܰ���/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988010/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988010/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988010/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-11-30 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/609" target="_blank" title="">�����Ʒ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"><a href="soccer/team/658" target="_blank" title="">������ά</a></td>
			<td>			
				
					1:2
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1987919/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1987919/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1987919/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-12-17 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/11123" target="_blank" title="">LKS������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"><a href="soccer/team/3159" target="_blank" title="">��������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988008/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988008/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988008/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2015-12-02 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/11123" target="_blank" title="">LKS������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"><a href="soccer/team/2894" target="_blank" title="">˹��˹��</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988016/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988016/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988016/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-12-02 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2342" target="_blank" title="">���л���</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"><a href="soccer/team/1009" target="_blank" title="">������</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988018/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988018/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988018/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-12-02 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1143" target="_blank" title="">������˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814173929.gif"></td>
			<td>			
				
					5:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"><a href="soccer/team/1041" target="_blank" title="">����ά��</a></td>
			<td>			
				
					1:2
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988013/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988013/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988013/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-12-02 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1024" target="_blank" title="">¬������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"><a href="soccer/team/3159" target="_blank" title="">��������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988019/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988019/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988019/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-12-03 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/659" target="_blank" title="">��ɳ����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"><a href="soccer/team/667" target="_blank" title="">���񵤿�</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				һ��/���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988015/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988015/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988015/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-12-03 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1234" target="_blank" title="">ʩ���ղ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"><a href="soccer/team/5910" target="_blank" title="">������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988017/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988017/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988017/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-12-03 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/658" target="_blank" title="">������ά</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"></td>
			<td>			
				
					4:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173341.jpg"><a href="soccer/team/1442" target="_blank" title="">���±�˹</a></td>
			<td>			
				
					2:1
							
			</td>
			<td>
			
				һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988012/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988012/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988012/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-12-03 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1142" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"><a href="soccer/team/609" target="_blank" title="">�����Ʒ�</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988014/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988014/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988014/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2015-12-05 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1024" target="_blank" title="">¬������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"><a href="soccer/team/11123" target="_blank" title="">LKS������</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988027/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988027/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988027/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-12-05 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3159" target="_blank" title="">��������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"></td>
			<td>			
				
					2:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814173929.gif"><a href="soccer/team/1143" target="_blank" title="">������˹</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988021/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988021/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988021/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-12-05 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1009" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"><a href="soccer/team/1142" target="_blank" title="">������</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				�ܰ���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988022/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988022/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988022/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-12-06 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1041" target="_blank" title="">����ά��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"><a href="soccer/team/658" target="_blank" title="">������ά</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988024/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988024/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988024/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-12-06 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1442" target="_blank" title="">���±�˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173341.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"><a href="soccer/team/2342" target="_blank" title="">���л���</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988025/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988025/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988025/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-12-06 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5910" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"><a href="soccer/team/2894" target="_blank" title="">˹��˹��</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988023/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988023/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988023/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-12-07 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/609" target="_blank" title="">�����Ʒ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"><a href="soccer/team/659" target="_blank" title="">��ɳ����</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988026/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988026/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988026/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-12-08 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/667" target="_blank" title="">���񵤿�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"></td>
			<td>			
				
					2:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"><a href="soccer/team/1234" target="_blank" title="">ʩ���ղ�</a></td>
			<td>			
				
					0:3
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988020/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988020/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988020/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_30" class="zstab" style="display: table;">
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
				
			<td>2016-04-09 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/667" target="_blank" title="">���񵤿�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"><a href="soccer/team/1142" target="_blank" title="">������</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988346/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988346/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988346/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-04-09 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1009" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814173929.gif"><a href="soccer/team/1143" target="_blank" title="">������˹</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988347/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988347/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988347/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-04-09 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5910" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"><a href="soccer/team/2342" target="_blank" title="">���л���</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				һ��/���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988348/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988348/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988348/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-04-09 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1041" target="_blank" title="">����ά��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"><a href="soccer/team/3159" target="_blank" title="">��������</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988349/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988349/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988349/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-04-09 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1442" target="_blank" title="">���±�˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173341.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"><a href="soccer/team/11123" target="_blank" title="">LKS������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988354/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988354/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988354/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-04-09 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1234" target="_blank" title="">ʩ���ղ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"><a href="soccer/team/659" target="_blank" title="">��ɳ����</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				�ܰ���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988355/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988355/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988355/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-04-09 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2894" target="_blank" title="">˹��˹��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"><a href="soccer/team/658" target="_blank" title="">������ά</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988356/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988356/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988356/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-04-09 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/609" target="_blank" title="">�����Ʒ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"><a href="soccer/team/1024" target="_blank" title="">¬������</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988357/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988357/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988357/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2016-04-01 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1143" target="_blank" title="">������˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814173929.gif"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"><a href="soccer/team/1234" target="_blank" title="">ʩ���ղ�</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988328/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988328/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988328/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-04-02 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1142" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"><a href="soccer/team/2894" target="_blank" title="">˹��˹��</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988334/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988334/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988334/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-04-02 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/11123" target="_blank" title="">LKS������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"><a href="soccer/team/1009" target="_blank" title="">������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988336/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988336/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988336/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-04-02 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/658" target="_blank" title="">������ά</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"><a href="soccer/team/667" target="_blank" title="">���񵤿�</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988327/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988327/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988327/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-04-03 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/659" target="_blank" title="">��ɳ����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"><a href="soccer/team/5910" target="_blank" title="">������</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988335/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988335/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988335/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-04-03 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1024" target="_blank" title="">¬������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"></td>
			<td>			
				
					4:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"><a href="soccer/team/1041" target="_blank" title="">����ά��</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988338/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988338/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988338/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-04-03 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2342" target="_blank" title="">���л���</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"></td>
			<td>			
				
					2:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"><a href="soccer/team/609" target="_blank" title="">�����Ʒ�</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988337/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988337/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988337/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-04-04 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3159" target="_blank" title="">��������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"></td>
			<td>			
				
					0:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173341.jpg"><a href="soccer/team/1442" target="_blank" title="">���±�˹</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988293/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988293/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988293/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2016-03-19 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1009" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"><a href="soccer/team/1041" target="_blank" title="">����ά��</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988288/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988288/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988288/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-03-19 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/609" target="_blank" title="">�����Ʒ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"></td>
			<td>			
				
					5:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"><a href="soccer/team/3159" target="_blank" title="">��������</a></td>
			<td>			
				
					4:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988294/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988294/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988294/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-03-19 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1442" target="_blank" title="">���±�˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173341.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814173929.gif"><a href="soccer/team/1143" target="_blank" title="">������˹</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988251/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988251/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988251/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-03-20 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2894" target="_blank" title="">˹��˹��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"><a href="soccer/team/2342" target="_blank" title="">���л���</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988253/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988253/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988253/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-03-20 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1142" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"><a href="soccer/team/659" target="_blank" title="">��ɳ����</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988249/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988249/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988249/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-03-20 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/667" target="_blank" title="">���񵤿�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"><a href="soccer/team/1024" target="_blank" title="">¬������</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988287/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988287/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988287/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-03-20 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5910" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"><a href="soccer/team/11123" target="_blank" title="">LKS������</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988250/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988250/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988250/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-03-21 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1234" target="_blank" title="">ʩ���ղ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"><a href="soccer/team/658" target="_blank" title="">������ά</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988252/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988252/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988252/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2016-03-12 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1009" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"><a href="soccer/team/2894" target="_blank" title="">˹��˹��</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988278/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988278/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988278/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-03-12 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1041" target="_blank" title="">����ά��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"></td>
			<td>			
				
					3:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173341.jpg"><a href="soccer/team/1442" target="_blank" title="">���±�˹</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988280/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988280/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988280/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-03-12 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3159" target="_blank" title="">��������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"><a href="soccer/team/667" target="_blank" title="">���񵤿�</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988240/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988240/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988240/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-03-13 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/658" target="_blank" title="">������ά</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"><a href="soccer/team/659" target="_blank" title="">��ɳ����</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988238/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988238/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988238/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-03-13 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2342" target="_blank" title="">���л���</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"></td>
			<td>			
				
					1:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"><a href="soccer/team/1142" target="_blank" title="">������</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988281/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988281/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988281/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-03-13 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1024" target="_blank" title="">¬������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"><a href="soccer/team/1234" target="_blank" title="">ʩ���ղ�</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988282/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988282/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988282/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-03-14 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1143" target="_blank" title="">������˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814173929.gif"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"><a href="soccer/team/5910" target="_blank" title="">������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				�ܰ���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988239/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988239/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988239/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-03-15 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/11123" target="_blank" title="">LKS������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"></td>
			<td>			
				
					2:4
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"><a href="soccer/team/609" target="_blank" title="">�����Ʒ�</a></td>
			<td>			
				
					1:2
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988279/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988279/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988279/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2016-03-05 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1442" target="_blank" title="">���±�˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173341.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"><a href="soccer/team/1009" target="_blank" title="">������</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988264/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988264/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988264/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-03-05 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/609" target="_blank" title="">�����Ʒ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"><a href="soccer/team/1041" target="_blank" title="">����ά��</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988267/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988267/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988267/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-03-05 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/667" target="_blank" title="">���񵤿�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"><a href="soccer/team/11123" target="_blank" title="">LKS������</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988260/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988260/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988260/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-03-06 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2894" target="_blank" title="">˹��˹��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"><a href="soccer/team/1024" target="_blank" title="">¬������</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988266/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988266/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988266/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-03-06 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/659" target="_blank" title="">��ɳ����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"></td>
			<td>			
				
					3:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814173929.gif"><a href="soccer/team/1143" target="_blank" title="">������˹</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988263/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988263/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988263/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-03-06 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5910" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"></td>
			<td>			
				
					5:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"><a href="soccer/team/3159" target="_blank" title="">��������</a></td>
			<td>			
				
					3:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988262/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988262/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988262/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-03-07 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1142" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"><a href="soccer/team/658" target="_blank" title="">������ά</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988261/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988261/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988261/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-03-08 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1234" target="_blank" title="">ʩ���ղ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"></td>
			<td>			
				
					2:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"><a href="soccer/team/2342" target="_blank" title="">���л���</a></td>
			<td>			
				
					2:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988265/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988265/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988265/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2016-03-02 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1442" target="_blank" title="">���±�˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173341.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"><a href="soccer/team/667" target="_blank" title="">���񵤿�</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988133/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988133/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988133/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-03-02 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1024" target="_blank" title="">¬������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"><a href="soccer/team/5910" target="_blank" title="">������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988235/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988235/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988235/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-03-03 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/11123" target="_blank" title="">LKS������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"></td>
			<td>			
				
					3:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"><a href="soccer/team/659" target="_blank" title="">��ɳ����</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				�ܰ���/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988131/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988131/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988131/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-03-03 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2342" target="_blank" title="">���л���</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"></td>
			<td>			
				
					2:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"><a href="soccer/team/658" target="_blank" title="">������ά</a></td>
			<td>			
				
					2:1
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988234/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988234/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988234/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-03-03 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1143" target="_blank" title="">������˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814173929.gif"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"><a href="soccer/team/1142" target="_blank" title="">������</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				�ܰ���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988128/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988128/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988128/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-03-03 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3159" target="_blank" title="">��������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"><a href="soccer/team/1234" target="_blank" title="">ʩ���ղ�</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988129/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988129/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988129/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-03-09 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1009" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"><a href="soccer/team/609" target="_blank" title="">�����Ʒ�</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988130/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988130/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988130/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-03-09 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1041" target="_blank" title="">����ά��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"><a href="soccer/team/2894" target="_blank" title="">˹��˹��</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988132/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988132/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988132/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2016-02-27 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2894" target="_blank" title="">˹��˹��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814173929.gif"><a href="soccer/team/1143" target="_blank" title="">������˹</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988215/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988215/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988215/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-02-27 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/658" target="_blank" title="">������ά</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"><a href="soccer/team/1024" target="_blank" title="">¬������</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988209/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988209/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988209/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-02-27 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/667" target="_blank" title="">���񵤿�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"></td>
			<td>			
				
					3:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"><a href="soccer/team/1009" target="_blank" title="">������</a></td>
			<td>			
				
					2:2
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988210/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988210/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988210/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-02-28 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5910" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"></td>
			<td>			
				
					3:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"><a href="soccer/team/1041" target="_blank" title="">����ά��</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988212/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988212/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988212/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-02-28 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/609" target="_blank" title="">�����Ʒ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173341.jpg"><a href="soccer/team/1442" target="_blank" title="">���±�˹</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988216/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988216/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988216/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-02-28 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1142" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"><a href="soccer/team/3159" target="_blank" title="">��������</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988211/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988211/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988211/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-02-28 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1234" target="_blank" title="">ʩ���ղ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"><a href="soccer/team/11123" target="_blank" title="">LKS������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988214/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988214/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988214/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-02-29 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/659" target="_blank" title="">��ɳ����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"><a href="soccer/team/2342" target="_blank" title="">���л���</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988213/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988213/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988213/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2016-02-20 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3159" target="_blank" title="">��������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"><a href="soccer/team/2894" target="_blank" title="">˹��˹��</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988190/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988190/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988190/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-02-20 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1041" target="_blank" title="">����ά��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"><a href="soccer/team/1234" target="_blank" title="">ʩ���ղ�</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988193/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988193/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988193/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-02-20 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1009" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"></td>
			<td>			
				
					4:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"><a href="soccer/team/5910" target="_blank" title="">������</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988191/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988191/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988191/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-02-21 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/11123" target="_blank" title="">LKS������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"><a href="soccer/team/658" target="_blank" title="">������ά</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988192/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988192/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988192/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-02-21 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1442" target="_blank" title="">���±�˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173341.jpg"></td>
			<td>			
				
					4:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"><a href="soccer/team/1142" target="_blank" title="">������</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				�ܰ���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988194/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988194/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988194/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-02-21 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1024" target="_blank" title="">¬������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"><a href="soccer/team/659" target="_blank" title="">��ɳ����</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				�ܰ���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988196/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988196/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988196/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-02-22 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1143" target="_blank" title="">������˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814173929.gif"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"><a href="soccer/team/2342" target="_blank" title="">���л���</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988189/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988189/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988189/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-02-23 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/609" target="_blank" title="">�����Ʒ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"><a href="soccer/team/667" target="_blank" title="">���񵤿�</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988195/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988195/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988195/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2016-02-13 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2342" target="_blank" title="">���л���</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"><a href="soccer/team/1024" target="_blank" title="">¬������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988175/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988175/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988175/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-02-13 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2894" target="_blank" title="">˹��˹��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"><a href="soccer/team/609" target="_blank" title="">�����Ʒ�</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988176/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988176/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988176/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-02-13 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/667" target="_blank" title="">���񵤿�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"><a href="soccer/team/1041" target="_blank" title="">����ά��</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988171/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988171/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988171/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-02-14 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/658" target="_blank" title="">������ά</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"></td>
			<td>			
				
					3:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814173929.gif"><a href="soccer/team/1143" target="_blank" title="">������˹</a></td>
			<td>			
				
					3:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988170/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988170/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988170/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-02-14 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5910" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"></td>
			<td>			
				
					5:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173341.jpg"><a href="soccer/team/1442" target="_blank" title="">���±�˹</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988173/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988173/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988173/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-02-14 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1142" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"></td>
			<td>			
				
					5:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"><a href="soccer/team/11123" target="_blank" title="">LKS������</a></td>
			<td>			
				
					2:1
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988172/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988172/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988172/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-02-15 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/659" target="_blank" title="">��ɳ����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"></td>
			<td>			
				
					4:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"><a href="soccer/team/3159" target="_blank" title="">��������</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988126/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988126/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988126/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-02-16 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1234" target="_blank" title="">ʩ���ղ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"></td>
			<td>			
				
					3:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"><a href="soccer/team/1009" target="_blank" title="">������</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988174/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988174/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988174/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2015-12-19 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1024" target="_blank" title="">¬������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"></td>
			<td>			
				
					2:4
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814173929.gif"><a href="soccer/team/1143" target="_blank" title="">������˹</a></td>
			<td>			
				
					2:2
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988067/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988067/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988067/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-12-19 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/609" target="_blank" title="">�����Ʒ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"><a href="soccer/team/1234" target="_blank" title="">ʩ���ղ�</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988066/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988066/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988066/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-12-19 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/11123" target="_blank" title="">LKS������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"><a href="soccer/team/2342" target="_blank" title="">���л���</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988063/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988063/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988063/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-12-20 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/667" target="_blank" title="">���񵤿�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"></td>
			<td>			
				
					3:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"><a href="soccer/team/5910" target="_blank" title="">������</a></td>
			<td>			
				
					2:1
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988060/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988060/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988060/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-12-20 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3159" target="_blank" title="">��������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"><a href="soccer/team/658" target="_blank" title="">������ά</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988061/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988061/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988061/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-12-20 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1009" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"></td>
			<td>			
				
					1:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"><a href="soccer/team/659" target="_blank" title="">��ɳ����</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				�ܰ���/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988062/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988062/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988062/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-12-21 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1041" target="_blank" title="">����ά��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"><a href="soccer/team/1142" target="_blank" title="">������</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988064/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988064/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988064/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-12-22 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1442" target="_blank" title="">���±�˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173341.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"><a href="soccer/team/2894" target="_blank" title="">˹��˹��</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988065/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988065/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988065/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2015-12-12 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2894" target="_blank" title="">˹��˹��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"><a href="soccer/team/667" target="_blank" title="">���񵤿�</a></td>
			<td>			
				
					2:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988047/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988047/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988047/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-12-12 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2342" target="_blank" title="">���л���</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"></td>
			<td>			
				
					0:4
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"><a href="soccer/team/3159" target="_blank" title="">��������</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988046/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988046/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988046/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-12-12 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1234" target="_blank" title="">ʩ���ղ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173341.jpg"><a href="soccer/team/1442" target="_blank" title="">���±�˹</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988045/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988045/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988045/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-12-13 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1143" target="_blank" title="">������˹</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814173929.gif"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"><a href="soccer/team/11123" target="_blank" title="">LKS������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988041/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988041/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988041/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-12-13 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5910" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"><a href="soccer/team/609" target="_blank" title="">�����Ʒ�</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988043/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988043/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988043/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-12-13 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1142" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"><a href="soccer/team/1024" target="_blank" title="">¬������</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988042/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988042/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988042/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2015-12-14 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/659" target="_blank" title="">��ɳ����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"><a href="soccer/team/1041" target="_blank" title="">����ά��</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988044/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988044/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988044/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2015-12-15 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/658" target="_blank" title="">������ά</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"><a href="soccer/team/1009" target="_blank" title="">������</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/1988040/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/1988040/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/1988040/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
</tbody></table>


</div>
		<div class="league_right_022" id="matchInfofj">
		</div>
	</div>
	



</body>