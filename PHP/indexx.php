
<!DOCTYPE html>
<html lang="ko">
<head>
    <title>대한민국 IT포털의 중심! 뉴스</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta property="og:type" content="article" />
   <link rel="stylesheet" type="text/css" media="all" href="http://58.120.226.147/assets/css/adistory.css">
    <script type="text/javascript" src="http://m.etnews.com/inc/js/jindo.js" charset="utf-8"></script>
    <script type="text/javascript" src="http://m.etnews.com/inc/js/jindo_mobile_component.js" charset="utf-8"></script>
    <script type="text/javascript" src="http://m.etnews.com/inc/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="http://m.etnews.com/inc/js/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="http://m.etnews.com/inc/js/iscroll.js"></script>
    <script type="text/javascript" src="http://m.etnews.com/inc/js/jquery.bxslider.js"></script>
    <script type="text/javascript" src="http://m.etnews.com/inc/js/ui.etnews.js"></script>
    <script type="text/javascript" src="http://m.etnews.com/static/js/article.js"></script>
    <script type="text/javascript" src="https://developers.kakao.com/sdk/js/kakao.min.js"></script>
    <script type="text/javascript" src="http://m.etnews.com/static/js/jquery.cookie.js"></script>
	
    <link rel="shortcut icon" href="http://img.etnews.com/favicon.ico" />
    <link rel="apple-touch-icon" href="http://img.etnews.com/201208/images/apple-touch-icon.png" />

	<link rel="stylesheet" type="text/css" href="http://m.etnews.com/test/common.css"><!-- css링크 -->
	<link rel="stylesheet" type="text/css" href="http://m.etnews.com/inc/css/etnews.css?2015121501"><!-- css링크 -->
			<link rel="stylesheet" type="text/css" href="http://img.etnews.com/2015/popup_2015/facebook_popup.css"><!-- css링크 -->
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-18401344-1', 'auto');
  ga('send', 'pageview');

</script>
<style>
</style>
    <script type="text/javascript">

		function search1(f)
		{
			if(f.kwd.value == '')
			{
				alert('검색어를 입력바랍니다.');
				f.kwd.focus();
				return false;
			}
			return true;
		}
	</script>

</head>


<body>
    <!-- header //-->
    <header class="header">
	
	<div class="searchBox">
		<form id="search" method="get" action="/search/news.html" name="search" onsubmit="return search1(this)">
            <fieldset>
                <legend>검색입력</legend>
                <div class="search_wrap">
                    <input class="search_input" type="text" name="kwd" value="" placeholder="검색어 입력" title="검색어 입력" onfocus="keywordEx()" onblur="keywordBr()">
                    <button class="search_del" type="button" id="search_box_del" onclick="keywordEr()"><span class="blind">입력 내용 삭제</span></button>
                    <button class="search_btn" type="submit"><span class="blind">검색</span></button>
                </div>
            </fieldset>
        </form>
	</div>
	
	<div id="nav">

    
		<nav class="mainNav">
			
		</nav>
		
		<div id="scrollWrapper">
			<nav class="subNav" id="scroller">
        					
    ?>
				<ul>
					<li><a href="/news/section.html?p=editorial">사설</a></li>
					<li><a href="/news/section.html?p=column">칼럼</a></li>
					<li><a href="/news/news_issue.html?p=issue_anal">이슈분석</a></li>
					<li><a href="/news/news_special.html?p=special">특집</a></li>
					<li><a href="/news/news_special.html?p=series">연재</a></li>
					<li><a href="/news/news_issue.html?p=infographic">인포그래픽</a></li>
					<li><a href="/news/news_issue.html?p=cardnews">카드뉴스</a></li>
					<li><a href="/news/section.html?p=people">인사·부음·동정</a></li>
					<li><a href="/news/news_special.html?p=ifocus">이슈모음</a></li>
				</ul>
    
			</nav>
			<span class="bg"></span>
			<span class="bg right"></span>
		</div>

	</div>
	
	<div class="fpg" style="display: none;">
		<span class="fpg_n"><em id="currentPage" class="fpg_non">1</em> / <span id="totalPage">5</span></span>
	</div>
	
	<!--전체메뉴 //-->
	<section id="gnb" class="gnb">
	    
		<div class="gnbBody">
			<nav class="gnbHeader">
				<a href="http://fb.com/etnews.kr" class="btn fb">페이스북</a>
				<a href="http://twitter.com/imetnews" class="btn tw">트위터</a>
				<!--
				<a href="#" class="txtBtn login">로그인</a>
				<a href="#" class="txtBtn">회원가입</a>
				-->
			</nav>
			
			<nav class="section">
				<a href="/news/timeline_news.html" class="icoBtn news">속보</a>
				<a href="/news/photonews.html" class="icoBtn photo">포토</a>
			</nav>
			
			<nav class="section">
				<a href="/html/index.html?indexCode=1" class="icoBtn industry">산업</a>
				<ul class="clfix">
					<li><a href="/news/section.html?p=communi">통신∙미디어</a></li>
					<li><a href="/news/section.html?p=computing">컴퓨팅</a></li>
					<li><a href="/news/section.html?p=device">디바이스</a></li>
					<li><a href="/news/section.html?p=mobile">홈∙모바일</a></li>
					<li><a href="/news/section.html?p=contents">콘텐츠</a></li>
					<li><a href="/news/section.html?p=ecoedu">경제/교육/과학</a></li>
					<li><a href="/news/section.html?p=nation">전국</a></li>
					<li><a href="/news/section.html?p=world">국제</a></li>
				</ul>
			</nav>
			
			<nav class="section">
				<a href="/html/index.html?indexCode=2" class="icoBtn inside">인사이드 IT</a>
				<ul class="clfix">
					<li><a href="/news/section.html?p=editorial">사설</a></li>
					<li><a href="/news/section.html?p=column">칼럼</a></li>
					<li><a href="/news/news_issue.html?p=issue_anal">이슈분석</a></li>
					<li><a href="/news/news_special.html?p=special">특집</a></li>
					<li><a href="/news/news_special.html?p=series">연재</a></li>
					<li><a href="/news/news_issue.html?p=infographic">인포그래픽</a></li>
					<li><a href="/news/section.html?p=people">인사·부음·동정</a></li>
					<li><a href="/news/news_special.html?p=ifocus">이슈모음</a></li>
				</ul>
			</nav>
			
			<nav class="section">
				<a href="/html/index.html?indexCode=3" class="icoBtn life">라이프</a>
				<ul class="clfix">
					<li><a href="/news/section.html?p=hotissue">핫이슈</a></li>
					<li><a href="/news/section.html?p=game">게임</a></li>
					<li><a href="/news/section.html?p=travel">여행∙레저</a></li>
					<li><a href="/news/section.html?p=beauty">패션∙뷰티∙건강</a></li>
					<li><a href="/news/section.html?p=edu">교육∙공연</a></li>
					<li><a href="/news/section.html?p=eco">경제</a></li>
				</ul>
			</nav>
			
			<!-- 미디어플러스 -->
			<section class="mediaPlus">
				<h2>미디어 <span>플러스+</span></h2>
				<div class="listArea">
					<ul class="clfix">
						<li><a href="http://www.greendaily.co.kr/">그린데일리</a></li>
						<li><a href="http://rpm9.etnews.com/">RPM9</a></li>
						<li><a href="http://www.ebuzz.co.kr/">eBuzz</a></li>
						<li><a href="http://ciobiz.etnews.com/">CIOBIZ+</a></li>
						<li><a href="http://www.gvalley.co.kr/">Gvalley</a></li>
						<li><a href="http://www.boan.com">보안닷컴</a></li>
					</ul>
				</div>
			</section><!--// 미디어플러스 -->
			<div class="footerMenu">
				<nav class="footerBtn">
					<ul>
						<li><a href="/">홈</a></li>
						<li><a href="http://www.etnews.com/">PC버전</a></li>
						<!-- li><a href="/mobile.html">앱다운로드</a></li -->
					</ul>
				</nav>
			</div><!--// footerMenu -->
		</div><!--// gnbBody -->
		<a href="#" class="btn close">닫기</a>
		<div class="blackBG"></div>

	</section><!--// 전체메뉴 -->
	
</header>

<script type="text/javascript">
	var is_mobile = false;
	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
		is_mobile = true;
	}
	
	//뷰페이지에 들어오자마자 쿠키를 굽는다.
	var sns_popup = true;
		$(function(){
		if($.cookie("sns_pop1") != "Y"){
			$.cookie("sns_pop1", "Y", {
				expires : 1
			});
		}else{
			sns_popup = false;
		}
	});	
	</script>

<body>




	<!-- container //-->
	<div id="container">
	    

	    
	    
		<!--전체메뉴 //-->
		<div class="gnb">
		</div><!--// 전체메뉴 -->
		
		<!-- contents //-->
		<div class="contents">
			<div class="newsView">
				<!-- 광고 배너 -->
                <iframe style="width:100%;height:48px;" src="http://www.etnews.com/tools/refresh_script.html?duration=30&src=http%3A%2F%2Fadv.etnews.com%2FRealMedia%2Fads%2Fadstream_jx.ads%2Fetnews.co.kr%2FMobile%40x60" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe>
				<!--// 광고 배너 -->
				
				<!-- newsDetail 기사 상세  -->
				<section class="newsDetail">
					<div class="detailTop">
						<p class="tit">"정세"</p>
						<p class="sub"></p>
						<div class="authorInfo">
														<span class="date"><em>입력</em>2016.02.15  <strong>15:39</strong></span>
														<span class="date mb0"><em>수정</em>2016.02.15  <strong>15:39</strong></span>
													</div>
						<div class="fontSize clfix">
							<a href="#" class="size minus">가 -</a>
							<a href="#" class="size plus">가 +</a>
						</div>
					</div><!--// detailTop -->

					<div class="context" id="boxContent">
					<!-- 상단 SNS : 2015-10-29 SNS 관련 작업-->
					<div class="snsArea151029 clearfix">
						<a href="http://www.facebook.com/sharer.php?u=http%3A%2F%2Fm.etnews.com%2F20160215000341" class="fb">Facebook</a>
						<a href="http://twitter.com/share?url=http%3A%2F%2Fm.etnews.com%2F20160215000341%3FSNS%3D00001&text=%EC%8B%9C%EB%AA%AC%EB%8A%90%2C+%EC%8F%98%EC%B9%B4+%EB%A7%88%EC%BC%80%ED%8C%85%EC%9D%B4+%EA%B6%81%EA%B8%88%ED%95%98%EB%8B%A4%EB%A9%B4%3F%21" class="tw">Twitter</a>
						<a id="kakao-link-btn" href="javascript:;"  class="kt">Kakao Talk</a>
						<a href="http://line.me/R/msg/text/?%EC%8B%9C%EB%AA%AC%EB%8A%90%2C+%EC%8F%98%EC%B9%B4+%EB%A7%88%EC%BC%80%ED%8C%85%EC%9D%B4+%EA%B6%81%EA%B8%88%ED%95%98%EB%8B%A4%EB%A9%B4%3F%21+http%3A%2F%2Fm.etnews.com%2F20160215000341" class="ln">Line</a>
						<a href="#" class="ta" id="buttonCommentWrite" onclick="return false;">LiveRe</a>
					</div>
					<div style="padding-top:10px"></div>
					<!-- 상단 SNS -->	
										
					    <div id="adiContents">"정세 험악…군사적 대응방식, 선제공격으로 전환"

朴대통령 실명거론…"대책없이 무모한 무력증강 놀음"<br/><br/>

김정은 북한 국방위원회 제1위원장은 "국가 방위를 위해 실전 배비한(배치한) 핵탄두들을 임의의 순간에 쏴버릴 수 있게 항시적으로 준비해야 한다"고 말했다.<br/><br/>
김 제1위원장은 신형 대구경 방사포 시험사격을 현지지도하면서 "미제가 군사적 강권을 휘두르면서 다른 나라와 민족들에 전쟁과 재난을 강요하고 있는 극단적인 상황에서 우리 민족의 자주권과 생존권을 지키기 위한 유일한 방도는 핵무력을 질량적으로 더욱 강화해 힘의 균형을 이룩하는 것뿐"이라면서 이같이 지시했다고 조선중앙통신이 4일 보도했다.<br/><br/>

<img src="http://t1.daumcdn.net/news/201603/04/yonhap/20160304091547172riox.jpg">

↑ 北 김정은, 신형 대구경 방사포 시험사격 참관 (서울=연합뉴스) 김정은 북한 국방위원회 제1위원장이 신형대구경방사포 시험사격을 현지지도했다고 노동신문이 4일 보도했다. 
신문은 김 제1위원장의 참관 일자를 적시하지는 않았지만, 전날 북한이 동해상으로 단거리 발사체를 쏜 것으로 미뤄 3일 참관한 것으로 보인다. <br/><br/>

김 제1위원장은 현지지도에서 "국가 방위를 위해 실전 배비한(배치한) 핵탄두들을 임의의 순간에 쏴버릴 수 있게 항시적으로 준비해야 한다"며 "이제는 적들에 대한 우리의 군사적 대응방식을 선제공격적인 방식으로 모두 전환시킬 것"이라고 말했다. 현지지도에는 최룡해 노동당 비서, 홍영칠·김정식 당 부부장, 윤동현 인민무력부 부부장(육군 상장)이 수행했으나, 황병서 군 총정치국장은 수행자 명단에 포함되지 않았다.<br/><br/>

김 제1위원장은 "지금 적들이 '참수작전'과 '체제붕괴'와 같은 어리석기 짝이 없는 마지막 도박에 매달리고 있는 것으로 하여 정세는 더 이상 수수방관할 수 없는 험악한 지경에 이르렀다"며 
"이제는 적들에 대한 우리의 군사적 대응방식을 선제공격적인 방식으로 모두 전환시킬 것"이라고 말했다.<br/><br/>

이어 "첨예한 정세의 요구에 맞게 만반의 최후결전 분비를 완성하기 위해 최근 개발한 타격 무기들을 최고사령부의 작전 전역들에 하루빨리 실전 배비함으로써 적들이 제 땅에 최후의 종말을 맞는 순간까지 단 하루, 단 한시도 발편잠을 자지 못하게 해야 한다"고 주문했다.<br/><br/>

그러면서 "적들이 각종 전략전술 무기들을 조선반도의 남쪽 땅에 배비해놓고 우리에 대한 위협공갈을 일삼고 있는 지금이야말로 핵무력 강화의 필요성을 보다 더 절실히 느끼게 되는 역사적 시기"라며 "핵보유를 선택하고 핵무력을 백방으로 장성 강화시켜온 길이 얼마나 정당했는가를 확신하게 된다"고 말했다고 통신은 밝혔다.<br/><br/>

김 제1위원장의 이 같은 발언은 전날 채택된 유엔 안전보장이사회의 대북제재 결의와 7일부터 진행되는 한미연합 군사훈련에 대립각을 세우면서 한반도 긴장을 최고조로 끌어올리기 위한 것으로 분석된다.
이번 키 리졸브 및 독수리 연습은 역대 최대 규모로 실시되며, 핵추진 항공모함을 주축으로 한 항모강습단과 스텔스 전략폭격기인 'B-2' 등 미군 전략자산도 참여할 것으로 알려졌다.<br/><br/>

김 제1위원장은 또 이례적으로 박근혜 대통령의 실명을 거론하며 "박근혜가 지금 뒷일을 감당해낼 대책도 없이 무모한 무력증강 놀음을 벌여놓고 선제공격까지 운운하고 있는데 이는 섶을 지고 불 속에 뛰어드는 것과 같은 어리석은 짓"이라고 비난했다.
그러면서 "박근혜 정권이 미제를 겨냥하는 우리의 핵타격 무장의 조준경 안으로 들어오는 자살적인 망동을 당장 걷어치우고 이성적으로 분별있게 처신하고 심사숙고해야 할 것"이라며 "조선인민군은 섬멸의 포문을 열어두고 박근혜의 생존욕과 생존방식을 지켜볼 것"이라고 위협했다.<br/><br/>

북한이 이번에 시험사격한 신형 방사포는 지난 3일 북한이 동해상으로 쏘아올린 단거리 발사체인 것으로 보인다.
통신은 신형 방사포가 "남조선 작전지대 안의 주요 타격대상들을 사정권 안에 두고 있는 정밀유도체계를 갖춘 첨단 장거리 대구경 방사포 체계"라며 김 제1위원장이 "3년간 개발단계의 대구경 방사포 시험사격을 13차례나 화선에서 직접 지도했다"고 소개했다.<br/><br/>

그러면서 이번 시험사격이 "파편 지뢰탄, 지하 침투탄, 산포탄에 의한 여러 가지 사격 방식으로 진행"됐다고 전했다.
김 제1위원장의 현지지도에는 최룡해 노동당 비서, 홍영칠·김정식 당 부부장, 윤동현 인민무력부 부부장(육군 상장)이 수행했으나, 황병서 군 총정치국장은 수행자 명단에 포함되지 않았다.<br/><br/>
raychoi@adistory.com
</div>

			<!-- 광고 리스트 -->
            <div style="margin-top:20px;border:0;">
<script type='text/javascript'>
var init2beon = {mdcode:'BFFFFFFP', setZone:[], isTest:false},arrZone=init2beon['setZone'];
arrZone.push(['64LLLLLF', '_2BEON64LLLLLF']);          //텍스트_1(6slot) 영역선언
</script>
<script type='text/javascript' src='http://plugin.2beon.co.kr/script/2beonAdScript.js?ver=1.50' charset='UTF-8'></script>
<div id='_2BEON64LLLLLF'><!--Adtive 텍스트_1(6slot)--></div>            </div>


    <script>
    // 사용할 앱의 Javascript 키를 설정해 주세요.
    Kakao.init('a12e07a68272909d3c91d23afc28ac68');

    // 카카오톡 링크 버튼을 생성합니다. 처음 한번만 호출하면 됩니다.
    Kakao.Link.createTalkLinkButton({
      container: '#kakao-link-btn',
      label: '시몬느, 쏘카 마케팅이 궁금하다면?!',
  
      webLink: {
        text: '▶ 기사 자세히 보기',
        url: 'http://m.etnews.com/20160215000341?SNS=00004' // 앱 설정의 웹 플랫폼에 등록한 도메인의 URL이어야 합니다.
      }
    });
    </script>



					</div>
		            <div id="scrollend"></div>

				</section><!--// newsDetail 기사 상세  -->


<!-- 소셜댓글 -->
<div id="boxSocialComment" style="display:none;">
    <script type="text/javascript">
    // 라이브리
    var title = "시몬느, 쏘카 마케팅이 궁금하다면?!";
    var refer = "m.etnews.com/20160215000341";
    </script>
    <script type="text/javascript" src="https://101.livere.co.kr/js/livere8_lib.js" charset="utf-8"></script>
    <div id="livereContainer" style="100%">
        <script type="text/javascript">
        var consumer_seq	= "583";
        var livere_seq		= "14173";
        var smartlogin_seq	= "656";

        livereReply = new Livere(livere_seq, refer, title);
        livereLib.start();
        </script>
    </div>
</div>
<!-- /소셜댓글 -->

				<!-- 라이프 핫 뉴스 상단 배너 2015-06-05 By Mj -->
								<hr />
				
				<!-- relBottom 기사 밑에 따라오는 컨텐츠 -->
				<section class="relBottom">
					<!-- 뉴스 판넬 -->
					<section>
						<div class="h2_titBar">
							<h2>주요뉴스</h2>
						</div>

						<div class="defNewList pd0">
							<div class="clfix">
								<div class="imgNews_M">
									<a href="/20160215000257">
										<div class="imgResize">
											<img src="http://img.etnews.com/photonews/1602/772663_20160215140854_551i.jpg" alt="기사제목" />
										</div>
										<p class="txt_short2">애플 아이폰7 전자파 차단한다…핵심칩 ‘EMI 차폐’ 적용</p>
									</a>
								</div>
								<div class="imgNews_M">
									<a href="/20160215000032">
										<div class="imgResize">
											<img src="http://img.etnews.com/photonews/1602/772600_20160215084342_413i.jpg" alt="기사제목" />
										</div>
										<p class="txt_short2">美, 로봇잠수함으로 러 스텔스잠수함 잡는다</p>
									</a>
								</div>
							</div>

														<div style="margin:4px 0 4px 0px;padding:0px;height:99px;border:0px;overflow:hidden;">
		                        <script type="text/javascript" src="http://adv.etnews.com/RealMedia/ads/adstream_jx.ads/etnews.co.kr/Mobile@x72"></script>
							</div>
							<div style="margin:4px 0 4px 0px;padding:0px;height:99px;border:0px;overflow:hidden;">
								<script type="text/javascript" src="http://adv.etnews.com/RealMedia/ads/adstream_jx.ads/etnews.co.kr/Mobile@x73"></script>
							</div>
							
							<div class="inlineNews">
								<a href="/20160212000303">
									<div class="imgResize">
										<img src="http://img.etnews.com/photonews/1602/772264_20160212155236_133i.jpg" alt="기사제목" />
									</div>
									<div class="txtArea">
										<p class="tit">알뜰폰, 휴대폰 소액결제 `불통`</p>
										<span class="txtAid">통신방송</span>
									</div>
								</a>
							</div>


							<div class="inlineNews">
								<a href="/20160215000317">
									<div class="imgResize">
										<img src="http://img.etnews.com/photonews/1602/772857_20160215150454_628i.jpg" alt="기사제목" />
									</div>
									<div class="txtArea">
										<p class="tit">지하 주차장 차 위치 생각 안 날땐 스마트폰을 켜세요</p>
										<span class="txtAid">국제</span>
									</div>
								</a>
							</div>

							<div class="inlineNews">
								<a href="/20160215000310">
									<div class="imgResize">
										<img src="http://img.etnews.com/photonews/1602/772756_20160215150050_623i.jpg" alt="기사제목" />
									</div>
									<div class="txtArea">
										<p class="tit">[진기명기] 파가레(Pagare)</p>
										<span class="txtAid">국제</span>
									</div>
								</a>
							</div>

							<div class="inlineNews">
								<a href="/20160215000209">
									<div class="imgResize">
										<img src="http://img.etnews.com/photonews/1602/772674_20160215132338_500i.jpg" alt="기사제목" />
									</div>
									<div class="txtArea">
										<p class="tit">가전유통도 당일배송시대…롯데하이마트 `번개 배송` 시작</p>
										<span class="txtAid">유통</span>
									</div>
								</a>
							</div>
<div class="inlineAdBanner" style="width:100%;margin-top:8px;">
            <iframe width="100%" height="100" border="0" frameborder="0" scrolling="no" src="http://www.etnews.com/tools/refresh_script.html?src=http%3A%2F%2Fads.mangouni.com%2Fmad%2FETNEWS_M%2Fmob_bt_banner_neo.html"></iframe></div>
							<div class="inlineNews">
								<a href="/20160215000135">
									<div class="imgResize">
										<img src="http://img.etnews.com/photonews/1602/772672_20160215111256_454i.jpg" alt="기사제목" />
									</div>
									<div class="txtArea">
										<p class="tit">인간 두뇌도 대량 배양한다</p>
										<span class="txtAid">국제</span>
									</div>
								</a>
							</div>

							<div class="inlineNews">
								<a href="/20160215000126">
									<div class="imgResize">
										<img src="http://img.etnews.com/photonews/1602/772685_20160215110254_445i.jpg" alt="기사제목" />
									</div>
									<div class="txtArea">
										<p class="tit">ICT 대한민국이 무너진다....수출, 4개월째 내리막길</p>
										<span class="txtAid">디바이스/산전</span>
									</div>
								</a>
							</div>
<div class="inlineAdBanner" style="width:100%;margin-top:8px;"><iframe width="320" height="100" border="0" frameborder="0" scrolling="no" src="http://ra.ntwoad.co.kr/n2ad_iframe.html?n2ad_cd=MzAyJTdDXyU3QzQ5MQ=="></iframe></div>
							<div class="inlineNews">
								<a href="/20160215000104">
									<div class="imgResize">
										<img src="http://img.etnews.com/news/article/2016/02/15/article_15104037565341.jpg" alt="기사제목" />
									</div>
									<div class="txtArea">
										<p class="tit">[카드뉴스]알뜰한 당신, 알뜰폰에 꽂힌 이유는</p>
										<span class="txtAid">통신방송</span>
									</div>
								</a>
							</div>

							<div class="inlineNews">
								<a href="/20160215000082">
									<div class="imgResize">
										<img src="http://img.etnews.com/news/article/2016/02/15/article_15101408697927.jpg" alt="기사제목" />
									</div>
									<div class="txtArea">
										<p class="tit">로봇 기술의 현재와 미래를 알아보는 "2016 스마트 로봇 융합 기술 및 시장 전망 세미나" 개최</p>
										<span class="txtAid">로봇뉴스</span>
									</div>
								</a>
							</div>
<div class="inlineAdBanner" style="width:100%;margin-top:8px;"><iframe style="width:100%;height:48px;" src="http://www.etnews.com/tools/refresh_script.html?duration=30&src=http%3A%2F%2Fadv.etnews.com%2FRealMedia%2Fads%2Fadstream_jx.ads%2Fetnews.co.kr%2FMobile%40x60" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe></div>
							<div class="inlineNews">
								<a href="/20160215000052">
									<div class="imgResize">
										<img src="http://img.etnews.com/photonews/1602/772628_20160215092332_420i.jpg" alt="기사제목" />
									</div>
									<div class="txtArea">
										<p class="tit">애플워치, 12만원 할인…새 제품 나오나</p>
										<span class="txtAid">국제</span>
									</div>
								</a>
							</div>

							<div class="inlineNews">
								<a href="/20160215000047">
									<div class="imgResize">
										<img src="http://img.etnews.com/photonews/1602/772603_20160215091654_418i.jpg" alt="기사제목" />
									</div>
									<div class="txtArea">
										<p class="tit">세계 스마트폰용·태블릿용 칩 왕좌는</p>
										<span class="txtAid">국제</span>
									</div>
								</a>
							</div>
						</div><!-- defNewsList -->





				</section><!-- 뉴스 판넬 scrollItem -->
				<section style="margin-left:8px;margin-right:8px;">

					</section>
					
					<hr />
											
					<section style="margin-left:8px;margin-right:8px;margin-top:7px;background-color:#fff;">
						<script src="http://outbanner.hu.co.kr/@files/human_banner/iframe/etnnews/mobile_thum.html"></script>
					</section>

					<hr />

				</section><!--// relBottom -->
				

				<script type="text/javascript">
				//뉴스 상세 스크립트
				$(document).ready(function(){
					ctrlSns();
					fontSize();
				});
				</script>
				
			</div><!--// newsView -->
		</div><!--// contents -->
	</div><!--// container -->
	<script type="text/javascript">		
		$(function(){
			if(sns_popup == false){
				$("#facebook_main").hide();
			}else{
								$("#facebook_main").show();
							}

			if(is_mobile == true){
				$('#remove_css').removeClass("fin-mantra").addClass("fin-mantra_mobile");
			}else{
				$('#remove_css').addClass("fin-mantra");
			}
		});
	</script>
	<!-- 하단 고정 페이스북 좋아요 부분 시작 : 2015-10-29 SNS 관련 작업 : By Mj -->	
	<div class="fin" id="facebook_main" style="display:none">
		<ul class="fin-mantra" id="remove_css">
			<li class="fb_header">
				<img src="http://img.etnews.com/2015/popup_2015/facebook_logo.png" alt="facebook">
				<span class="fb_close"><img src="http://img.etnews.com/2015/popup_2015/facebook_close.png" alt="close" style="cursor:pointer" onClick="$('#facebook_main').hide()"></span>
			</li>
			<li>누군가에게 눈과 귀가 되고 꿈이 되는 이야기. 전자신문에 있습니다.</li>
			<li><iframe name="f38f785383e17a2" width="270" height="1000" frameborder="0" allowfullscreen="true" allowtransparency="true" scrolling="no" title="fb:page Facebook Social Plugin" src="http://www.facebook.com/v2.5/plugins/page.php?adapt_container_width=false&amp;app_id=1425291491111655&amp;channel=http%3A%2F%2Fstatic.ak.facebook.com%2Fconnect%2Fxd_arbiter%2FwjDNIDNrTQG.js%3Fversion%3D41%23cb%3Df220281291d56f8%26domain%3Dnh.etnews.com%26origin%3Dhttp%253A%252F%252Fnh.etnews.com%252Ff1eeb74c2139862%26relation%3Dparent.parent&amp;container_width=1489&amp;hide_cover=true&amp;href=https%3A%2F%2Fwww.facebook.com%2Fetnews.kr&amp;locale=ko_KR&amp;sdk=joey&amp;show_facepile=false&amp;show_posts=false&amp;small_header=true&amp;width=270" style="border: currentColor; width: 270px; height: 70px;" ></iframe></li>
		</ul>
	</div>
	<!-- 하단 고정 페이스북 좋아요 부분 끝 : 2015-10-29 : By Mj -->
<div id='adtouchbox'>
<script src="http://ad.adinc.kr/cgi-bin/PelicanC.dll?impr?pageid=00Cp&out=script"></script>
</div>
<script type="text/javascript">
$(function(){ 
    var adYp = $("#scrollend").offset().top; 
    $(window).scroll(function(){ 
       if( adYp - 200 > $(window).scrollTop()) { 
          $("#adtouchbox").show();
       }
	   else{
		   $("#adtouchbox").hide();
	   }
    }); 
 }); 
 </script>
	
	<!-- footer //-->

	<div id="footer" class="footerWrap" >
		<footer>
			<!-- 미디어플러스 -->
			<section class="mediaPlus">
				<h2>미디어 <span>플러스+</span></h2>
				<div class="listArea">
					<ul class="clfix">
						<li><a href="http://greendaily.etnews.com/">그린데일리</a></li>
						<li><a href="http://rpm9.etnews.com/">RPM9</a></li>
						<li><a href="http://www.nextdaily.co.kr/">NextDaily</a></li>
						<li><a href="http://ciobiz.etnews.com/">CIOBIZ+</a></li>
						<li><a href="http://gvalley.etnews.com/">Gvalley</a></li>
						<li><a href="http://boan.etnews.com/">보안닷컴</a></li>
					</ul>
				</div>
			</section><!--// 미디어플러스 -->
			<div class="footerMenu">
				<a href="http://www.facebook.com/etnews.kr" class="fbtn fb">페이스북</a>
				<a href="http://www.twitter.com/imetnews" class="fbtn tw">트위터</a>
				<nav class="footerBtn">
					<ul>
						<li><a href="/">홈</a></li>
						<li><a href="http://www.etnews.com/20160215000341?m=1">PC버전</a></li>
						<!-- li><a href="/mobile.html">앱다운로드</a></li -->
					</ul>
				</nav>
				<a href="#" class="fbtn top">TOP</a>
			</div>
			<p class="copyright">&copy; 전자신문인터넷 ALL RIGHTS RESERVED.</p>
		</footer>
	</div>
	
	<!--// footer -->


<div style="text-align:center;display:;" id="bottomBigBanner">
    <script type="text/javascript" src="http://adv.etnews.com/RealMedia/ads/adstream_jx.ads/etnews.co.kr/Mobile@x62"></script>
</div>

<script type="text/javascript">articleCount('20160215000341');</script>
<script type="text/javascript">articleCount2('20160215000341', '', '', '59.6.87.223', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.109 Safari/537.36', '/20160215000341');</script>
	
<script type="text/javascript" src="http://adv.etnews.com/RealMedia/ads/adstream_jx.ads/etnews.co.kr/Mobile@x94"></script>

<!--
<link rel="stylesheet" type="text/css" media="all" href="http://58.120.226.147/assets/css/adistory.css">
<script type="text/javascript" src="http://58.120.226.147/tracker/adiStory/?method=MzIx&type=s1"></script>
-->

<script type="text/javascript" src="http://58.120.226.147/tracker/adiStory/?method=MzE2&type=s1"></script>

</body>
</html>