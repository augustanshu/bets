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
<a style="height:69px;overflow:hidden;" onclick="_hmt.push(['_trackEvent', 'ͷ�����', 'click', '��ר���Ƽ� �����н�������', 1])" href="http://news.zgzcw.com/zjtj/index.shtml" target="_blank" rel="nofollow"><img class="ad01" width="384" height="69" src="http://public.zgzcw.com/d/images/20161071475821970022_721.png" alt="��ר���Ƽ� �����н�������" title="��ר���Ƽ� �����н�������">
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
						<a href="http://saishi.zgzcw.com:80/soccer/league/6/2016-2017/ssb">
						���ְ�</a></li>
						<li>
						<a href="http://saishi.zgzcw.com:80/soccer/league/6/2016-2017/jqds">
						�ܽ���˫</a></li>
						<li>
						<a href="http://saishi.zgzcw.com:80/soccer/league/6/2016-2017/sxds">
						���µ�˫</a></li>
						<li>
						<a href="http://saishi.zgzcw.com:80/soccer/league/6/2016-2017/sxpl">
						������·��</a></li>
					</ul>
				</div>
			
			<div class="tongji_list">
				<div>����б�</div>
				<ul>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/659" target="_blank" class="a1" title="��ɳ����">
					<li>��ɳ����</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/3159" target="_blank" class="a1" title="��������">
					<li>��������</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/5910" target="_blank" class="a1" title="������">
					<li>������</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/1142" target="_blank" class="a1" title="������">
					<li>������</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/609" target="_blank" class="a1" title="�����Ʒ�">
					<li>�����Ʒ�</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/1009" target="_blank" class="a1" title="������">
					<li>������</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/1234" target="_blank" class="a1" title="ʩ���ղ�">
					<li>ʩ���ղ�</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/658" target="_blank" class="a1" title="������ά">
					<li>������ά</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/2342" target="_blank" class="a1" title="���л���">
					<li>���л���</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/1024" target="_blank" class="a1" title="¬������">
					<li>¬������</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/652" target="_blank" class="a1" title="�����">
					<li>�����</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/2537" target="_blank" class="a1" title="����">
					<li>����</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/11123" target="_blank" class="a1" title="LKS������">
					<li>LKS������</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/2894" target="_blank" class="a1" title="˹��˹��">
					<li>˹��˹��</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/1041" target="_blank" class="a1" title="����ά��">
					<li>����ά��</li>
				</a>
				
				<a href="http://saishi.zgzcw.com:80/soccer/team/667" target="_blank" class="a1" title="���񵤿�">
					<li>���񵤿�</li>
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
					
						
							<option value="2016-2017" selected="selected">2016-2017����</option>
						
					
						
							<option value="2015-2016">2015-2016����</option>
						
					
						
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
					
						<option value="652">�����</option>
					
						<option value="658">������ά</option>
					
						<option value="659">��ɳ����</option>
					
						<option value="667">���񵤿�</option>
					
						<option value="1009">������</option>
					
						<option value="1024">¬������</option>
					
						<option value="1041">����ά��</option>
					
						<option value="1142">������</option>
					
						<option value="1234">ʩ���ղ�</option>
					
						<option value="2342">���л���</option>
					
						<option value="2537">����</option>
					
						<option value="2894">˹��˹��</option>
					
						<option value="3159">��������</option>
					
						<option value="5910">������</option>
					
						<option value="11123">LKS������</option>
					
				</select> <select id="selectTeam2" style="display:none;">
					<option value="0" selected="selected">ѡ�����</option>
					
						<option value="609">�����Ʒ�</option>
					
						<option value="652">�����</option>
					
						<option value="658">������ά</option>
					
						<option value="659">��ɳ����</option>
					
						<option value="667">���񵤿�</option>
					
						<option value="1009">������</option>
					
						<option value="1024">¬������</option>
					
						<option value="1041">����ά��</option>
					
						<option value="1142">������</option>
					
						<option value="1234">ʩ���ղ�</option>
					
						<option value="2342">���л���</option>
					
						<option value="2537">����</option>
					
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
			������2016-2017 -- ����&nbsp;
						
			
		</div> -->
	<div class="table_out">
		<div class="table_head">
			<div class="team_out2">
			
				<div class="div-select team_lian fl" id="selectTeam" value="0">
                    <span>��ѡ�����</span>
                    <ul class="select_options">
                        
							<li value="609">�����Ʒ�</li>
						
							<li value="652">�����</li>
						
							<li value="658">������ά</li>
						
							<li value="659">��ɳ����</li>
						
							<li value="667">���񵤿�</li>
						
							<li value="1009">������</li>
						
							<li value="1024">¬������</li>
						
							<li value="1041">����ά��</li>
						
							<li value="1142">������</li>
						
							<li value="1234">ʩ���ղ�</li>
						
							<li value="2342">���л���</li>
						
							<li value="2537">����</li>
						
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
						
							<li value="652">�����</li>
						
							<li value="658">������ά</li>
						
							<li value="659">��ɳ����</li>
						
							<li value="667">���񵤿�</li>
						
							<li value="1009">������</li>
						
							<li value="1024">¬������</li>
						
							<li value="1041">����ά��</li>
						
							<li value="1142">������</li>
						
							<li value="1234">ʩ���ղ�</li>
						
							<li value="2342">���л���</li>
						
							<li value="2537">����</li>
						
							<li value="2894">˹��˹��</li>
						
							<li value="3159">��������</li>
						
							<li value="5910">������</li>
						
							<li value="11123">LKS������</li>
						
                    </ul>
                </div>
               
			</div>
			<span>
				2016-2017����������
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
				
					
						<option value="2016-2017" selected="selected">2016-2017����</option>
					
				
					
						<option value="2015-2016">2015-2016����</option>
					
				
					
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
				
					<option value="652">�����</option>
				
					<option value="658">������ά</option>
				
					<option value="659">��ɳ����</option>
				
					<option value="667">���񵤿�</option>
				
					<option value="1009">������</option>
				
					<option value="1024">¬������</option>
				
					<option value="1041">����ά��</option>
				
					<option value="1142">������</option>
				
					<option value="1234">ʩ���ղ�</option>
				
					<option value="2342">���л���</option>
				
					<option value="2537">����</option>
				
					<option value="2894">˹��˹��</option>
				
					<option value="3159">��������</option>
				
					<option value="5910">������</option>
				
					<option value="11123">LKS������</option>
				
			</select>
			<select id="selectTeam2">
				<option value="0" selected="selected">ѡ�����</option>
				
					<option value="609">�����Ʒ�</option>
				
					<option value="652">�����</option>
				
					<option value="658">������ά</option>
				
					<option value="659">��ɳ����</option>
				
					<option value="667">���񵤿�</option>
				
					<option value="1009">������</option>
				
					<option value="1024">¬������</option>
				
					<option value="1041">����ά��</option>
				
					<option value="1142">������</option>
				
					<option value="1234">ʩ���ղ�</option>
				
					<option value="2342">���л���</option>
				
					<option value="2537">����</option>
				
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
				
			<td>2017-03-04 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1009" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"></td>
			<td>			
				
					2:1
				
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
				<a href="http://fenxi.zgzcw.com/2103097/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103097/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103097/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2017-03-04 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1024" target="_blank" title="">¬������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"></td>
			<td>			
				
					1:3
				
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
				<a href="http://fenxi.zgzcw.com/2103059/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103059/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103059/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2017-03-04 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/658" target="_blank" title="">������ά</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20141009172714.png"><a href="soccer/team/2537" target="_blank" title="">����</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103055/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103055/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103055/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2017-03-05 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/11123" target="_blank" title="">LKS������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"><a href="soccer/team/2342" target="_blank" title="">���л���</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103056/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103056/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103056/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2017-03-05 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1041" target="_blank" title="">����ά��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"><a href="soccer/team/609" target="_blank" title="">�����Ʒ�</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103057/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103057/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103057/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2017-03-05 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3159" target="_blank" title="">��������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"></td>
			<td>			
				
					4:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"><a href="soccer/team/2894" target="_blank" title="">˹��˹��</a></td>
			<td>			
				
					2:1
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103096/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103096/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103096/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2017-03-06 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1142" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"><a href="soccer/team/5910" target="_blank" title="">������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103098/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103098/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103098/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2017-03-07 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1234" target="_blank" title="">ʩ���ղ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"></td>
			<td>			
								
					-:-
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813175336.jpg"><a href="soccer/team/652" target="_blank" title="">�����</a></td>
			<td>			
								
					-:-
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103058/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103058/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103058/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2017-02-25 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2537" target="_blank" title="">����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20141009172714.png"></td>
			<td>			
				
					4:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"><a href="soccer/team/1009" target="_blank" title="">������</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103088/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103088/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103088/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2017-02-25 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1234" target="_blank" title="">ʩ���ղ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"></td>
			<td>			
				
					0:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"><a href="soccer/team/1142" target="_blank" title="">������</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103092/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103092/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103092/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2017-02-25 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/652" target="_blank" title="">�����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813175336.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"><a href="soccer/team/1024" target="_blank" title="">¬������</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103095/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103095/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103095/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2017-02-26 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5910" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"></td>
			<td>			
				
					4:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"><a href="soccer/team/658" target="_blank" title="">������ά</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103090/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103090/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103090/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2017-02-26 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/609" target="_blank" title="">�����Ʒ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"></td>
			<td>			
				
					3:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"><a href="soccer/team/3159" target="_blank" title="">��������</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103094/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103094/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103094/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2017-02-26 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/667" target="_blank" title="">���񵤿�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"></td>
			<td>			
				
					1:0
				
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
				<a href="http://fenxi.zgzcw.com/2103089/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103089/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103089/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2017-02-27 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/659" target="_blank" title="">��ɳ����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"><a href="soccer/team/11123" target="_blank" title="">LKS������</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				һ��/���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103091/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103091/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103091/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2017-02-28 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2342" target="_blank" title="">���л���</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"></td>
			<td>			
				
					2:0
				
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
				<a href="http://fenxi.zgzcw.com/2103093/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103093/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103093/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2017-02-18 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3159" target="_blank" title="">��������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"></td>
			<td>			
				
					5:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"><a href="soccer/team/667" target="_blank" title="">���񵤿�</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103081/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103081/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103081/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2017-02-18 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/11123" target="_blank" title="">LKS������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"><a href="soccer/team/5910" target="_blank" title="">������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103084/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103084/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103084/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2017-02-18 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1009" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"></td>
			<td>			
				
					4:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813175336.jpg"><a href="soccer/team/652" target="_blank" title="">�����</a></td>
			<td>			
				
					2:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103082/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103082/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103082/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2017-02-19 01:00</td>
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
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103086/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103086/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103086/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2017-02-19 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1041" target="_blank" title="">����ά��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"></td>
			<td>			
				
					0:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"><a href="soccer/team/1142" target="_blank" title="">������</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				�ܰ���/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103085/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103085/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103085/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2017-02-19 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/658" target="_blank" title="">������ά</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"></td>
			<td>			
				
					1:1
				
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
				<a href="http://fenxi.zgzcw.com/2103080/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103080/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103080/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2017-02-20 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/659" target="_blank" title="">��ɳ����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"></td>
			<td>			
				
					1:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"><a href="soccer/team/2342" target="_blank" title="">���л���</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103083/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103083/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103083/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2017-02-21 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1024" target="_blank" title="">¬������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20141009172714.png"><a href="soccer/team/2537" target="_blank" title="">����</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103087/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103087/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103087/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2017-02-11 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2342" target="_blank" title="">���л���</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"></td>
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
				<a href="http://fenxi.zgzcw.com/2103077/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103077/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103077/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2017-02-11 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1142" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"></td>
			<td>			
				
					3:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"><a href="soccer/team/11123" target="_blank" title="">LKS������</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103074/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103074/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103074/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2017-02-12 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/609" target="_blank" title="">�����Ʒ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"></td>
			<td>			
				
					2:0
				
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
				<a href="http://fenxi.zgzcw.com/2103078/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103078/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103078/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2017-02-12 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2537" target="_blank" title="">����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20141009172714.png"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"><a href="soccer/team/659" target="_blank" title="">��ɳ����</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				�ܰ���/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103052/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103052/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103052/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2017-02-12 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/652" target="_blank" title="">�����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813175336.jpg"></td>
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
				<a href="http://fenxi.zgzcw.com/2103079/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103079/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103079/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2017-02-13 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5910" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"></td>
			<td>			
				
					3:0
				
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
				<a href="http://fenxi.zgzcw.com/2103075/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103075/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103075/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2017-02-14 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1234" target="_blank" title="">ʩ���ղ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"><a href="soccer/team/1041" target="_blank" title="">����ά��</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103076/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103076/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103076/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2017-03-08 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/667" target="_blank" title="">���񵤿�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"></td>
			<td>			
								
					-:-
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"><a href="soccer/team/1024" target="_blank" title="">¬������</a></td>
			<td>			
								
					-:-
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103053/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103053/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103053/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2016-12-17 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/11123" target="_blank" title="">LKS������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"><a href="soccer/team/1234" target="_blank" title="">ʩ���ղ�</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103048/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103048/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103048/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-12-17 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2342" target="_blank" title="">���л���</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"><a href="soccer/team/609" target="_blank" title="">�����Ʒ�</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103049/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103049/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103049/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-12-17 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1009" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"><a href="soccer/team/5910" target="_blank" title="">������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103046/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103046/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103046/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-12-18 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3159" target="_blank" title="">��������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813175336.jpg"><a href="soccer/team/652" target="_blank" title="">�����</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103045/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103045/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103045/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-12-18 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/658" target="_blank" title="">������ά</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"></td>
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
				<a href="http://fenxi.zgzcw.com/2103044/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103044/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103044/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-12-18 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2894" target="_blank" title="">˹��˹��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20141009172714.png"><a href="soccer/team/2537" target="_blank" title="">����</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103050/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103050/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103050/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-12-19 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/659" target="_blank" title="">��ɳ����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"></td>
			<td>			
				
					5:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"><a href="soccer/team/667" target="_blank" title="">���񵤿�</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				���/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103047/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103047/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103047/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-12-20 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1024" target="_blank" title="">¬������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"><a href="soccer/team/1041" target="_blank" title="">����ά��</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103051/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103051/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103051/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_1" class="zstab" style="display: none;">
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
				
			<td>2016-07-15 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/652" target="_blank" title="">�����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813175336.jpg"></td>
			<td>			
				
					2:1
				
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
				<a href="http://fenxi.zgzcw.com/2102881/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102881/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102881/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-07-16 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2894" target="_blank" title="">˹��˹��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"></td>
			<td>			
				
					0:0
				
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
				<a href="http://fenxi.zgzcw.com/2102879/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102879/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102879/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-07-16 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2342" target="_blank" title="">���л���</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"></td>
			<td>			
				
					2:1
				
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
				<a href="http://fenxi.zgzcw.com/2102878/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102878/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102878/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-07-16 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/609" target="_blank" title="">�����Ʒ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"><a href="soccer/team/1234" target="_blank" title="">ʩ���ղ�</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102880/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102880/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102880/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-07-17 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/659" target="_blank" title="">��ɳ����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"><a href="soccer/team/3159" target="_blank" title="">��������</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102876/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102876/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102876/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-07-17 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1024" target="_blank" title="">¬������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"></td>
			<td>			
				
					4:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"><a href="soccer/team/1009" target="_blank" title="">������</a></td>
			<td>			
				
					4:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102883/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102883/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102883/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-07-17 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/658" target="_blank" title="">������ά</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"></td>
			<td>			
				
					5:1
				
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
				<a href="http://fenxi.zgzcw.com/2102882/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102882/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102882/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-07-18 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/11123" target="_blank" title="">LKS������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20141009172714.png"><a href="soccer/team/2537" target="_blank" title="">����</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102877/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102877/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102877/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2016-07-22 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1234" target="_blank" title="">ʩ���ղ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"></td>
			<td>			
				
					1:1
				
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
				<a href="http://fenxi.zgzcw.com/2102891/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102891/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102891/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-07-23 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2537" target="_blank" title="">����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20141009172714.png"></td>
			<td>			
				
					3:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"><a href="soccer/team/609" target="_blank" title="">�����Ʒ�</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102887/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102887/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102887/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-07-23 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3159" target="_blank" title="">��������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"></td>
			<td>			
				
					4:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"><a href="soccer/team/2342" target="_blank" title="">���л���</a></td>
			<td>			
				
					2:1
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102889/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102889/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102889/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-07-24 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/659" target="_blank" title="">��ɳ����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"><a href="soccer/team/2894" target="_blank" title="">˹��˹��</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102890/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102890/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102890/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-07-24 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/11123" target="_blank" title="">LKS������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"></td>
			<td>			
				
					3:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"><a href="soccer/team/658" target="_blank" title="">������ά</a></td>
			<td>			
				
					3:1
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102893/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102893/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102893/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-07-24 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1041" target="_blank" title="">����ά��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813175336.jpg"><a href="soccer/team/652" target="_blank" title="">�����</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102894/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102894/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102894/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-07-24 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1142" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"><a href="soccer/team/1024" target="_blank" title="">¬������</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102892/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102892/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102892/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-07-25 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/667" target="_blank" title="">���񵤿�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"><a href="soccer/team/5910" target="_blank" title="">������</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				�ܰ���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102888/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102888/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102888/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2016-07-29 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2537" target="_blank" title="">����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20141009172714.png"></td>
			<td>			
				
					3:0
				
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
				<a href="http://fenxi.zgzcw.com/2102900/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102900/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102900/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-07-30 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1142" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"></td>
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
				<a href="http://fenxi.zgzcw.com/2102901/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102901/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102901/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-07-30 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5910" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"></td>
			<td>			
				
					3:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"><a href="soccer/team/609" target="_blank" title="">�����Ʒ�</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102902/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102902/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102902/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-07-31 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/652" target="_blank" title="">�����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813175336.jpg"></td>
			<td>			
				
					2:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"><a href="soccer/team/659" target="_blank" title="">��ɳ����</a></td>
			<td>			
				
					2:2
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102904/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102904/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102904/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-07-31 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/667" target="_blank" title="">���񵤿�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"></td>
			<td>			
				
					0:0
				
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
				<a href="http://fenxi.zgzcw.com/2102905/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102905/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102905/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-07-31 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1024" target="_blank" title="">¬������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"><a href="soccer/team/11123" target="_blank" title="">LKS������</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102907/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102907/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102907/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-07-31 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1009" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"></td>
			<td>			
				
					1:1
				
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
				<a href="http://fenxi.zgzcw.com/2102906/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102906/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102906/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-08-01 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1234" target="_blank" title="">ʩ���ղ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"><a href="soccer/team/2894" target="_blank" title="">˹��˹��</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102903/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102903/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102903/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2016-08-05 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3159" target="_blank" title="">��������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"></td>
			<td>			
				
					4:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20141009172714.png"><a href="soccer/team/2537" target="_blank" title="">����</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102911/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102911/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102911/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-08-06 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/658" target="_blank" title="">������ά</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"><a href="soccer/team/609" target="_blank" title="">�����Ʒ�</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102936/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102936/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102936/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-08-06 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/11123" target="_blank" title="">LKS������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"><a href="soccer/team/667" target="_blank" title="">���񵤿�</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102913/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102913/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102913/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-08-06 23:59</td>
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
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102935/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102935/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102935/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-08-07 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1009" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"></td>
			<td>			
				
					4:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"><a href="soccer/team/1142" target="_blank" title="">������</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102912/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102912/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102912/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-08-07 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1024" target="_blank" title="">¬������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"><a href="soccer/team/1234" target="_blank" title="">ʩ���ղ�</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102938/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102938/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102938/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-08-07 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/659" target="_blank" title="">��ɳ����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"></td>
			<td>			
				
					0:0
				
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
				<a href="http://fenxi.zgzcw.com/2102937/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102937/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102937/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-08-08 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2342" target="_blank" title="">���л���</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813175336.jpg"><a href="soccer/team/652" target="_blank" title="">�����</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102934/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102934/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102934/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2016-08-12 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5910" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"></td>
			<td>			
				
					3:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"><a href="soccer/team/1009" target="_blank" title="">������</a></td>
			<td>			
				
					2:1
							
			</td>
			<td>
			
				һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102947/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102947/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102947/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-08-13 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1142" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"><a href="soccer/team/658" target="_blank" title="">������ά</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102946/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102946/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102946/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-08-13 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2537" target="_blank" title="">����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20141009172714.png"></td>
			<td>			
				
					2:0
				
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
				<a href="http://fenxi.zgzcw.com/2102944/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102944/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102944/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-08-13 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/667" target="_blank" title="">���񵤿�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"></td>
			<td>			
				
					1:0
				
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
				<a href="http://fenxi.zgzcw.com/2102945/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102945/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102945/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-08-14 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1234" target="_blank" title="">ʩ���ղ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"></td>
			<td>			
				
					5:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"><a href="soccer/team/11123" target="_blank" title="">LKS������</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102949/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102949/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102949/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-08-14 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1041" target="_blank" title="">����ά��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"></td>
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
				<a href="http://fenxi.zgzcw.com/2102948/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102948/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102948/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-08-14 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/609" target="_blank" title="">�����Ʒ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"></td>
			<td>			
				
					1:2
				
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
				<a href="http://fenxi.zgzcw.com/2102950/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102950/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102950/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-08-15 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/652" target="_blank" title="">�����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813175336.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"><a href="soccer/team/3159" target="_blank" title="">��������</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102951/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102951/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102951/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2016-08-19 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2894" target="_blank" title="">˹��˹��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813175336.jpg"><a href="soccer/team/652" target="_blank" title="">�����</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102958/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102958/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102958/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-08-20 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/11123" target="_blank" title="">LKS������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"><a href="soccer/team/1142" target="_blank" title="">������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102956/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102956/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102956/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-08-20 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/658" target="_blank" title="">������ά</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"><a href="soccer/team/2342" target="_blank" title="">���л���</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102952/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102952/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102952/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-08-20 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1041" target="_blank" title="">����ά��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"><a href="soccer/team/1234" target="_blank" title="">ʩ���ղ�</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102957/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102957/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102957/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-08-21 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/659" target="_blank" title="">��ɳ����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"></td>
			<td>			
				
					1:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20141009172714.png"><a href="soccer/team/2537" target="_blank" title="">����</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102955/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102955/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102955/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-08-21 21:30</td>
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
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102959/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102959/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102959/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-08-21 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3159" target="_blank" title="">��������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"></td>
			<td>			
				
					0:1
				
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
				<a href="http://fenxi.zgzcw.com/2102953/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102953/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102953/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-08-22 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1009" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"><a href="soccer/team/609" target="_blank" title="">�����Ʒ�</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102954/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102954/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102954/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2016-08-26 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/652" target="_blank" title="">�����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813175336.jpg"></td>
			<td>			
				
					1:2
				
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
				<a href="http://fenxi.zgzcw.com/2102916/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102916/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102916/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-08-27 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/609" target="_blank" title="">�����Ʒ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"></td>
			<td>			
				
					1:5
				
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
				<a href="http://fenxi.zgzcw.com/2102915/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102915/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102915/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-08-27 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1234" target="_blank" title="">ʩ���ղ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"></td>
			<td>			
				
					1:1
				
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
				<a href="http://fenxi.zgzcw.com/2102964/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102964/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102964/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-08-27 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/667" target="_blank" title="">���񵤿�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"><a href="soccer/team/3159" target="_blank" title="">��������</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102961/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102961/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102961/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-08-28 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2537" target="_blank" title="">����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20141009172714.png"></td>
			<td>			
				
					1:1
				
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
				<a href="http://fenxi.zgzcw.com/2102960/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102960/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102960/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-08-28 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1142" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"><a href="soccer/team/1041" target="_blank" title="">����ά��</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102962/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102962/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102962/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-08-28 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5910" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"><a href="soccer/team/11123" target="_blank" title="">LKS������</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102963/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102963/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102963/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-08-28 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2342" target="_blank" title="">���л���</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"></td>
			<td>			
				
					0:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"><a href="soccer/team/659" target="_blank" title="">��ɳ����</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				�ܰ���/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102965/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102965/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102965/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2016-09-09 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/658" target="_blank" title="">������ά</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"></td>
			<td>			
				
					0:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"><a href="soccer/team/5910" target="_blank" title="">������</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102966/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102966/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102966/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-09-10 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1024" target="_blank" title="">¬������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813175336.jpg"><a href="soccer/team/652" target="_blank" title="">�����</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102973/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102973/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102973/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-09-10 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1041" target="_blank" title="">����ά��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"></td>
			<td>			
				
					3:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"><a href="soccer/team/667" target="_blank" title="">���񵤿�</a></td>
			<td>			
				
					3:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102971/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102971/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102971/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-09-10 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1009" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20141009172714.png"><a href="soccer/team/2537" target="_blank" title="">����</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102968/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102968/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102968/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-09-11 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/11123" target="_blank" title="">LKS������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"><a href="soccer/team/659" target="_blank" title="">��ɳ����</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				�ܰ���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102970/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102970/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102970/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-09-11 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1142" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"></td>
			<td>			
				
					3:1
				
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
				<a href="http://fenxi.zgzcw.com/2102969/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102969/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102969/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-09-11 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3159" target="_blank" title="">��������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"></td>
			<td>			
				
					2:1
				
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
				<a href="http://fenxi.zgzcw.com/2102967/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102967/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102967/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-09-12 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2894" target="_blank" title="">˹��˹��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"></td>
			<td>			
				
					1:2
				
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
				<a href="http://fenxi.zgzcw.com/2102972/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102972/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102972/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2016-09-16 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2342" target="_blank" title="">���л���</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"></td>
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
				<a href="http://fenxi.zgzcw.com/2102978/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102978/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102978/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-09-17 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2894" target="_blank" title="">˹��˹��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"></td>
			<td>			
				
					0:4
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"><a href="soccer/team/3159" target="_blank" title="">��������</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102979/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102979/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102979/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-09-17 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/667" target="_blank" title="">���񵤿�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"></td>
			<td>			
				
					4:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"><a href="soccer/team/1009" target="_blank" title="">������</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102975/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102975/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102975/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-09-17 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/652" target="_blank" title="">�����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813175336.jpg"></td>
			<td>			
				
					2:0
				
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
				<a href="http://fenxi.zgzcw.com/2102981/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102981/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102981/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-09-18 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/609" target="_blank" title="">�����Ʒ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"><a href="soccer/team/1041" target="_blank" title="">����ά��</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102980/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102980/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102980/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-09-18 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5910" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"><a href="soccer/team/1142" target="_blank" title="">������</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102976/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102976/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102976/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-09-18 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/659" target="_blank" title="">��ɳ����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"></td>
			<td>			
				
					2:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"><a href="soccer/team/1024" target="_blank" title="">¬������</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102977/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102977/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102977/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-09-19 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2537" target="_blank" title="">����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20141009172714.png"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"><a href="soccer/team/658" target="_blank" title="">������ά</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102974/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102974/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102974/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2016-09-23 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/11123" target="_blank" title="">LKS������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813175336.jpg"><a href="soccer/team/652" target="_blank" title="">�����</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102918/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102918/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102918/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-09-24 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/609" target="_blank" title="">�����Ʒ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"></td>
			<td>			
				
					0:0
				
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
				<a href="http://fenxi.zgzcw.com/2102985/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102985/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102985/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-09-24 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1234" target="_blank" title="">ʩ���ղ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"><a href="soccer/team/667" target="_blank" title="">���񵤿�</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102984/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102984/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102984/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-09-24 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5910" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"><a href="soccer/team/2342" target="_blank" title="">���л���</a></td>
			<td>			
				
					2:1
							
			</td>
			<td>
			
				һ��/���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102917/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102917/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102917/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-09-25 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1024" target="_blank" title="">¬������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"></td>
			<td>			
				
					1:1
				
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
				<a href="http://fenxi.zgzcw.com/2102920/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102920/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102920/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-09-25 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1009" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"><a href="soccer/team/3159" target="_blank" title="">��������</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102982/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102982/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102982/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-09-25 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1142" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20141009172714.png"><a href="soccer/team/2537" target="_blank" title="">����</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102983/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102983/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102983/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-09-26 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1041" target="_blank" title="">����ά��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"></td>
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
				<a href="http://fenxi.zgzcw.com/2102919/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102919/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102919/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2016-09-30 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2342" target="_blank" title="">���л���</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"></td>
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
				<a href="http://fenxi.zgzcw.com/2102988/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102988/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102988/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-10-01 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/667" target="_blank" title="">���񵤿�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"></td>
			<td>			
				
					1:2
				
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
				<a href="http://fenxi.zgzcw.com/2102923/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102923/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102923/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-10-01 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2537" target="_blank" title="">����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20141009172714.png"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"><a href="soccer/team/1041" target="_blank" title="">����ά��</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102921/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102921/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102921/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-10-01 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/652" target="_blank" title="">�����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813175336.jpg"></td>
			<td>			
				
					2:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"><a href="soccer/team/609" target="_blank" title="">�����Ʒ�</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102990/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102990/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102990/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-10-02 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/659" target="_blank" title="">��ɳ����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"></td>
			<td>			
				
					3:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"><a href="soccer/team/5910" target="_blank" title="">������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102987/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102987/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102987/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-10-02 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/658" target="_blank" title="">������ά</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"></td>
			<td>			
				
					6:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"><a href="soccer/team/1009" target="_blank" title="">������</a></td>
			<td>			
				
					3:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102922/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102922/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102922/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-10-02 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2894" target="_blank" title="">˹��˹��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"><a href="soccer/team/11123" target="_blank" title="">LKS������</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102989/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102989/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102989/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-10-02 23:59</td>
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
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102986/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102986/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102986/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2016-10-14 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/658" target="_blank" title="">������ά</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"></td>
			<td>			
				
					1:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813175336.jpg"><a href="soccer/team/652" target="_blank" title="">�����</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102991/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102991/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102991/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-10-15 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1234" target="_blank" title="">ʩ���ղ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"></td>
			<td>			
				
					3:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"><a href="soccer/team/659" target="_blank" title="">��ɳ����</a></td>
			<td>			
				
					2:1
							
			</td>
			<td>
			
				�ܰ���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102997/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102997/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102997/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-10-15 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/667" target="_blank" title="">���񵤿�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20141009172714.png"><a href="soccer/team/2537" target="_blank" title="">����</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102992/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102992/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102992/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-10-15 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1041" target="_blank" title="">����ά��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"></td>
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
				<a href="http://fenxi.zgzcw.com/2102996/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102996/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102996/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-10-16 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1024" target="_blank" title="">¬������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"><a href="soccer/team/5910" target="_blank" title="">������</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102998/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102998/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102998/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-10-16 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/11123" target="_blank" title="">LKS������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"><a href="soccer/team/3159" target="_blank" title="">��������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102995/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102995/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102995/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-10-16 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1142" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"><a href="soccer/team/609" target="_blank" title="">�����Ʒ�</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102994/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102994/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102994/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-10-17 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1009" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"></td>
			<td>			
				
					1:2
				
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
				<a href="http://fenxi.zgzcw.com/2102993/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102993/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102993/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2016-10-21 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2537" target="_blank" title="">����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20141009172714.png"></td>
			<td>			
				
					0:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"><a href="soccer/team/1234" target="_blank" title="">ʩ���ղ�</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102999/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102999/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102999/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-10-22 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/609" target="_blank" title="">�����Ʒ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"></td>
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
				<a href="http://fenxi.zgzcw.com/2103005/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103005/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103005/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-10-22 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/652" target="_blank" title="">�����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813175336.jpg"></td>
			<td>			
				
					1:2
				
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
				<a href="http://fenxi.zgzcw.com/2103006/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103006/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103006/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-10-22 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2894" target="_blank" title="">˹��˹��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"></td>
			<td>			
				
					2:2
				
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
				<a href="http://fenxi.zgzcw.com/2103004/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103004/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103004/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-10-23 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/659" target="_blank" title="">��ɳ����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"><a href="soccer/team/1142" target="_blank" title="">������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103002/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103002/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103002/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-10-23 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5910" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"></td>
			<td>			
				
					3:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"><a href="soccer/team/1041" target="_blank" title="">����ά��</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103001/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103001/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103001/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-10-23 23:59</td>
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
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103000/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103000/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103000/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-10-24 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2342" target="_blank" title="">���л���</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"></td>
			<td>			
				
					4:0
				
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
				<a href="http://fenxi.zgzcw.com/2103003/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103003/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103003/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2016-10-28 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1041" target="_blank" title="">����ά��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"><a href="soccer/team/11123" target="_blank" title="">LKS������</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103012/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103012/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103012/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-10-29 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1009" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"></td>
			<td>			
				
					2:4
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"><a href="soccer/team/659" target="_blank" title="">��ɳ����</a></td>
			<td>			
				
					2:1
							
			</td>
			<td>
			
				��һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103010/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103010/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103010/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-10-29 21:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/667" target="_blank" title="">���񵤿�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"></td>
			<td>			
				
					0:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"><a href="soccer/team/2894" target="_blank" title="">˹��˹��</a></td>
			<td>			
				
					0:3
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103009/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103009/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103009/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-10-29 23:59</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1234" target="_blank" title="">ʩ���ղ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"><a href="soccer/team/2342" target="_blank" title="">���л���</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103013/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103013/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103013/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-10-30 02:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1142" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813175336.jpg"><a href="soccer/team/652" target="_blank" title="">�����</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103011/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103011/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103011/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-10-30 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/658" target="_blank" title="">������ά</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"></td>
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
				<a href="http://fenxi.zgzcw.com/2103008/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103008/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103008/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-10-31 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2537" target="_blank" title="">����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20141009172714.png"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"><a href="soccer/team/5910" target="_blank" title="">������</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103007/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103007/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103007/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-11-01 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1024" target="_blank" title="">¬������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"></td>
			<td>			
				
					2:2
				
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
				<a href="http://fenxi.zgzcw.com/2103014/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103014/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103014/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2016-11-05 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/652" target="_blank" title="">�����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813175336.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20141009172714.png"><a href="soccer/team/2537" target="_blank" title="">����</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102931/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102931/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102931/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-11-05 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2342" target="_blank" title="">���л���</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"></td>
			<td>			
				
					0:5
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"><a href="soccer/team/1142" target="_blank" title="">������</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				�ܰ���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102928/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102928/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102928/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-11-05 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/11123" target="_blank" title="">LKS������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"></td>
			<td>			
				
					1:3
				
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
				<a href="http://fenxi.zgzcw.com/2102927/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102927/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102927/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-11-06 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3159" target="_blank" title="">��������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"><a href="soccer/team/1041" target="_blank" title="">����ά��</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102924/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102924/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102924/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-11-06 03:30</td>
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
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102925/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102925/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102925/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-11-06 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2894" target="_blank" title="">˹��˹��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"></td>
			<td>			
				
					2:1
				
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
				<a href="http://fenxi.zgzcw.com/2102929/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102929/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102929/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-11-06 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/609" target="_blank" title="">�����Ʒ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"></td>
			<td>			
				
					3:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"><a href="soccer/team/667" target="_blank" title="">���񵤿�</a></td>
			<td>			
				
					2:1
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102930/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102930/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102930/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-11-07 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/659" target="_blank" title="">��ɳ����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"></td>
			<td>			
				
					2:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"><a href="soccer/team/658" target="_blank" title="">������ά</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102926/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102926/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102926/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2016-11-19 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1041" target="_blank" title="">����ά��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"></td>
			<td>			
				
					2:2
				
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
				<a href="http://fenxi.zgzcw.com/2103021/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103021/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103021/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-11-19 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3159" target="_blank" title="">��������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"></td>
			<td>			
				
					1:4
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"><a href="soccer/team/659" target="_blank" title="">��ɳ����</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103017/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103017/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103017/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-11-19 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/667" target="_blank" title="">���񵤿�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"></td>
			<td>			
				
					0:4
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"><a href="soccer/team/2342" target="_blank" title="">���л���</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103016/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103016/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103016/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-11-20 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1234" target="_blank" title="">ʩ���ղ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"></td>
			<td>			
				
					6:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"><a href="soccer/team/609" target="_blank" title="">�����Ʒ�</a></td>
			<td>			
				
					4:1
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103022/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103022/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103022/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-11-20 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5910" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813175336.jpg"><a href="soccer/team/652" target="_blank" title="">�����</a></td>
			<td>			
				
					0:1
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103020/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103020/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103020/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-11-20 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2537" target="_blank" title="">����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20141009172714.png"></td>
			<td>			
				
					1:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"><a href="soccer/team/11123" target="_blank" title="">LKS������</a></td>
			<td>			
				
					1:2
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103015/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103015/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103015/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-11-21 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1142" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"></td>
			<td>			
				
					3:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"><a href="soccer/team/2894" target="_blank" title="">˹��˹��</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				����/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103019/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103019/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103019/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-11-22 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1009" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"><a href="soccer/team/1024" target="_blank" title="">¬������</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103018/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103018/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103018/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2016-11-26 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/658" target="_blank" title="">������ά</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"></td>
			<td>			
				
					1:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"><a href="soccer/team/11123" target="_blank" title="">LKS������</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103023/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103023/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103023/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-11-26 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1024" target="_blank" title="">¬������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"></td>
			<td>			
				
					0:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"><a href="soccer/team/1142" target="_blank" title="">������</a></td>
			<td>			
				
					0:3
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103030/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103030/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103030/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-11-26 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1009" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172534.jpg"></td>
			<td>			
				
					4:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"><a href="soccer/team/1234" target="_blank" title="">ʩ���ղ�</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103024/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103024/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103024/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-11-27 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2342" target="_blank" title="">���л���</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"><a href="soccer/team/3159" target="_blank" title="">��������</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				�ܰ���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103026/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103026/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103026/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-11-27 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/609" target="_blank" title="">�����Ʒ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"></td>
			<td>			
				
					5:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20141009172714.png"><a href="soccer/team/2537" target="_blank" title="">����</a></td>
			<td>			
				
					3:1
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103028/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103028/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103028/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-11-27 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/652" target="_blank" title="">�����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813175336.jpg"></td>
			<td>			
				
					0:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"><a href="soccer/team/1041" target="_blank" title="">����ά��</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103029/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103029/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103029/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-11-28 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2894" target="_blank" title="">˹��˹��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"></td>
			<td>			
				
					0:4
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"><a href="soccer/team/659" target="_blank" title="">��ɳ����</a></td>
			<td>			
				
					0:4
							
			</td>
			<td>
			
				�ܰ���/һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103027/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103027/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103027/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-11-29 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5910" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"></td>
			<td>			
				
					3:0
				
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
				<a href="http://fenxi.zgzcw.com/2103025/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103025/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103025/bfyc" target="_blank" class="oyx">��</a>
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
				
			<td>2016-12-03 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/11123" target="_blank" title="">LKS������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813183631.jpg"></td>
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
				<a href="http://fenxi.zgzcw.com/2103034/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103034/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103034/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-12-03 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/659" target="_blank" title="">��ɳ����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"></td>
			<td>			
				
					2:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813175336.jpg"><a href="soccer/team/652" target="_blank" title="">�����</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				һ��/���
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103033/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103033/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103033/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-12-03 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1041" target="_blank" title="">����ά��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"></td>
			<td>			
				
					1:0
				
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
				<a href="http://fenxi.zgzcw.com/2103035/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103035/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103035/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-12-04 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2894" target="_blank" title="">˹��˹��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"></td>
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
				<a href="http://fenxi.zgzcw.com/2102933/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102933/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102933/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-12-04 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/609" target="_blank" title="">�����Ʒ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"></td>
			<td>			
				
					3:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"><a href="soccer/team/5910" target="_blank" title="">������</a></td>
			<td>			
				
					2:0
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103054/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103054/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103054/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-12-04 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/658" target="_blank" title="">������ά</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172411.jpg"></td>
			<td>			
				
					1:1
				
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
				<a href="http://fenxi.zgzcw.com/2103031/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103031/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103031/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-12-05 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/3159" target="_blank" title="">��������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"></td>
			<td>			
				
					2:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"><a href="soccer/team/1142" target="_blank" title="">������</a></td>
			<td>			
				
					1:1
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103032/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103032/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103032/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-12-06 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2342" target="_blank" title="">���л���</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"></td>
			<td>			
				
					1:2
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20141009172714.png"><a href="soccer/team/2537" target="_blank" title="">����</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				ƽ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2102932/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2102932/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2102932/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
</tbody></table>












<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tab_19" class="zstab">
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
				
			<td>2016-12-10 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1234" target="_blank" title="">ʩ���ղ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173222.jpg"></td>
			<td>			
				
					1:1
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172724.jpg"><a href="soccer/team/1024" target="_blank" title="">¬������</a></td>
			<td>			
				
					0:0
							
			</td>
			<td>
			
				ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103041/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103041/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103041/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-12-10 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/5910" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173910.jpg"></td>
			<td>			
				
					3:0
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813173548.jpg"><a href="soccer/team/2894" target="_blank" title="">˹��˹��</a></td>
			<td>			
				
					1:0
							
			</td>
			<td>
			
				һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103039/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103039/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103039/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-12-10 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/667" target="_blank" title="">���񵤿�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/2004924153239.gif"></td>
			<td>			
				
					3:0
				
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
				<a href="http://fenxi.zgzcw.com/2103037/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103037/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103037/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-12-11 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/652" target="_blank" title="">�����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813175336.jpg"></td>
			<td>			
				
					4:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172543.jpg"><a href="soccer/team/2342" target="_blank" title="">���л���</a></td>
			<td>			
				
					2:2
							
			</td>
			<td>
			
				����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103043/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103043/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103043/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-12-11 03:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/609" target="_blank" title="">�����Ʒ�</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813184413.jpg"></td>
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
				<a href="http://fenxi.zgzcw.com/2103042/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103042/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103042/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-12-11 22:30</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1142" target="_blank" title="">������</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172922.jpg"></td>
			<td>			
				
					1:0
				
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
				<a href="http://fenxi.zgzcw.com/2103038/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103038/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103038/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>
				
			<td>2016-12-12 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/1041" target="_blank" title="">����ά��</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/200792905551.gif"></td>
			<td>			
				
					1:5
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130813172221.jpg"><a href="soccer/team/659" target="_blank" title="">��ɳ����</a></td>
			<td>			
				
					0:2
							
			</td>
			<td>
			
				��һ��
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103040/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103040/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103040/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
	
		
			<tr>               
				
			<td>2016-12-13 01:00</td>
			<td class="team_logo" style="float:right;padding-right:20px;"><a href="soccer/team/2537" target="_blank" title="">����</a>
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20141009172714.png"></td>
			<td>			
				
					2:3
				
			</td>
			<td class="team_logo" style="padding-left:10px;float:left;">
			
			<img src="http://img.zgzcw.com/zgzcw/matchCenter/team/images/20130814172615.gif"><a href="soccer/team/3159" target="_blank" title="">��������</a></td>
			<td>			
				
					2:1
							
			</td>
			<td>
			
				��ƽ��/����
			
			</td>
			<td>
				<a href="http://fenxi.zgzcw.com/2103036/ypdb" target="_blank" class="oyx">��</a>
				<a href="http://fenxi.zgzcw.com/2103036/bjop" target="_blank" class="oyx">ŷ</a>
				<a href="http://fenxi.zgzcw.com/2103036/bfyc" target="_blank" class="oyx">��</a>
			</td>
		</tr>
	
	
</tbody></table>


</div>
		<div class="league_right_022" id="matchInfofj">
		</div>
	</div>
	




</body>