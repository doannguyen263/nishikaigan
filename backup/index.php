<?php
include_once(__DIR__."/init.php");
$page_curent = 'index';
?>
<!DOCTYPE html>
<html lang="ja">
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="assets/images/favicon.png">

		<title><?= $init['meta']['home']['title'] ?></title>
		<meta name="description" content="<?= $init['meta']['home']['description'] ?>">
		<meta name="keywords" content="<?= $init['meta']['home']['keyword'] ?>">
		<meta property="og:title" content="<?= $init['meta']['home']['title'] ?>">
		<meta property="og:description" content="<?= $init['meta']['home']['description'] ?>">
		<meta property="og:url" content="<?= $init['clinic']['url'] ?>">
		<meta property="og:image" content="<?= $init['clinic']['url'] ?>images/cmn/pic_ogp.jpg">
		<meta property="og:type" content="website">

		<script type="application/ld+json">
			{
				"@context": "http://schema.org",
				"@type": "BreadcrumbList",
				"itemListElement": [
					{
						"@type": "ListItem",
						"position": 1,
						"item": {
							"@id": "https://www.nakamegurogt-dc.com",
							"name": "HOME"
						}
					}
				]
			}
		</script>

		<?php include_once(ROOTPATH."assets/inc/header_link.php"); ?>
	</head>
<body>
	<div class="wrapper">

		<!-- Menu mobi -->
		<div class="headermb__mb d-lg-none">
			<div class="logo">
				<a href="" class="d-flex">
					<img src="assets/images/logo-mb-horizontal.png" alt="">
				</a>
			</div>
      <a href="#menu__mobile" class="mburger d-flex d-xl-none justify-content-end ms-auto">
          <span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></span>
      </a>
    </div>

  	<section id="home-top" class="sc-banner">
  	  <div class="container-full">
  	  	<div class="d-lg-flex flex-lg-nowrap g-0">
  	  		<div class="col-right order-lg-2 wow fadeInRight">
  	  			<div class="el-mv" style="background: url( assets/images/home-mv.png ) center center / cover no-repeat">
  	  				<div class="el-mv__text d-none d-md-block">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</div>
  	  			</div>
  	  		</div>
  	  		<div class="col-left wow fadeInLeft">

  	  			<h1 class="el-logo text-center">
  	  				<a href="index.html">
  	  					<picture>
										<source media="(max-width:767px)" srcset="assets/images/logo-mb-horizontal.png"><img src="assets/images/logo.png" alt="">
								</picture>
  	  				</a>
  	  			</h1>
  	  				<div class="schedule">
                <table class="table-schedule">
                    <thead>
                    <tr>
                        <th></th>
                        <th>月</th>
                        <th>火</th>
                        <th>水</th>
                        <th>木</th>
                        <th>金</th>
                        <th>土</th>
                        <th>日</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>09:00～12:30</td>
                        <td>●</td>
                        <td>●</td>
                        <td>／</td>
                        <td>●</td>
                        <td>●</td>
                        <td>／</td>
                        <td>●</td>
                    </tr>
                    <tr>
                        <td>14:00～18:00</td>
                        <td>●</td>
                        <td>●</td>
                        <td>／</td>
                        <td>●</td>
                        <td>●</td>
                        <td>／</td>
                        <td>●</td>
                    </tr>
                    </tbody>

                </table>
                <div class="schedule__text text-end">
                	休診日：水曜・土曜・祝日
                </div>
          		</div>

            	<div class="d-flex justify-content-center">
		            <div class="el__group">
		            	<a href="tel:<?= $init['clinic']['tel_num'] ?>" class="el__phone is-tel"><i class="icon-phone"></i><?= $init['clinic']['tel_num'] ?></a>
		            	<div class="el__address mb-5 pb-2">
				        		<p>〒<?= $init['clinic']['postal'] ?></p>
				        		<p><?= $init['clinic']['address'] ?></p>
				        		<p><?= $init['clinic']['address_2'] ?></p>
				        	</div>
		            	<ul class="el__socical">
		            		<li><a href="<?= $init['clinic']['line'] ?>" class="is-line"><i class="icon-line"></i></a></li>
		            		<li><a href="<?= $init['clinic']['instagram'] ?>" class="is-web"><i class="icon-instagram"></i></a></li>
		            		<li><a href="<?= $init['clinic']['twitter'] ?>" class="is-web"><i class="icon-twitter"></i></a></li>
		            	</ul>
	            	</div>
            	</div>

  	  		</div>

  	  	</div>
  	  </div>
  	</section>

  	<nav class="main__nav d-none d-xl-block" data-toggle="sticky-onscroll">
  		<div class="container">
  			<div class="main__nav__inner d-flex align-items-center justify-content-center">
  				<ul class="el-menu">
	          <?php include(ROOTPATH."assets/inc/main_nav.php"); ?>
	        </ul>
         </div>
       </div>
     </nav>

    <section class="sc-opening">
      <div class="container">
      	<header class="c-header text-center wow fadeInUp">
      		<h2 class="c-header__title text-white">Opening</h2>
      		<div class="c-header__sub text-white">開院のお知らせ</div>
      	</header>
      	<div class="c-content">
          <div class="row">

              <div class="col-xl-6 wow fadeInLeft mb-4 mb-xl-0">
                <h2 class="el__date mb-0">2021/10/11 <span>(月) 開業</span></h2>
                <div class="el__excerpt">
                	<p>東京駅エリアに新規開院するビスカデンタルクリニックです。<br>
										むし歯・歯周病はもちろん、インプラントや矯正などの専門的な治療もお任せください。<br>
										どうぞ宜しくお願いいたします。</p>
                </div>
              </div>
              <div class="col-xl-6 wow fadeInRight">
              	<div class="el-box text-center">
                	<h2 class="el-box__title mb-3">内覧会のお知らせ</h2>
                  <p class="el-box__excerpt mb-2">開院に先がけて院内を見学いただける内覧会を開催いたします。<br>ご予約不要ですのでお気軽にお越しください。</p>
                  <ul class="ul-list row g-4 justify-content-center">
                  	<li class="col-sm-4">
                  		<div class="-li-item">
                    		<p class="-li-item--date">10/8<small>(Fri)</small></p>
                    		<p class="-li-item--time">10:00-17:00</p>
                  		</div>
                  	</li>
                  	<li class="col-sm-4">
                  		<div class="-li-item">
                    		<p class="-li-item--date">10/9<small>(Sat)</small></p>
                    		<p class="-li-item--time">11:00-18:00</p>
                    	</div>
                  	</li>
                  	<li class="col-sm-4">
                  		<div class="-li-item">
                    		<p class="-li-item--date">10/10<small>(Sun)</small></p>
                    		<p class="-li-item--time">11:00-18:00</p>
                    	</div>
                  	</li>
                  </ul>
                </div>
              </div>

          </div>
        </div>
      </div>
    </section>

    <section class="sc-new">
      <div class="container">

      	<div class="el-banner wow fadeInUp">
        	<div class="row g-4">
        		<div class="col-md-4 text-center">
        			<a href="" class="is-web">
        				<img src="assets/images/banner-380x100.png" alt="">
        			</a>
        		</div>
        		<div class="col-md-4 text-center">
        			<a href="" class="is-web">
	        			<img src="assets/images/banner-380x100.png" alt="">
	        		</a>
        		</div>
        		<div class="col-md-4 text-center">
        			<a href="" class="is-web">
	        			<img src="assets/images/banner-380x100.png" alt="">
	        		</a>
        		</div>
        	</div>
      	</div>

      	<div class="el-boxnew wow fadeInUp">
      		<div class="row">
      			<div class="col-lg-4 flex-center">
      				<header class="c-header text-center mb-md-0">
	          		<h2 class="c-header__title">News</h2>
	          		<div class="c-header__sub">新着情報</div>
	          	</header>
      			</div>
      			<div class="col-lg-8">

    					<div class="tabs_wrapper">
	      				<div class="nav__wrapper d-md-flex">
	      					<ul class="nav nav-tabs" id="myNewTab" role="tablist">
	        				  <li class="nav-item" role="presentation">
	        				    <a class="nav-link active" id="boxnew-01-tab" data-bs-toggle="tab" data-bs-target="#boxnew-01-tab-pane" type="button" role="tab" aria-controls="boxnew-01-tab-pane" aria-selected="true">すべて</a>
	        				  </li>
	        				  <li class="nav-item" role="presentation">
	        				    <a class="nav-link" id="boxnew-02-tab" data-bs-toggle="tab" data-bs-target="#boxnew-02-tab-pane" type="button" role="tab" aria-controls="boxnew-02-tab-pane" aria-selected="false">新着情報</a>
	        				  </li>
	        				  <li class="nav-item" role="presentation">
	        				    <a class="nav-link" id="boxnew-03-tab" data-bs-toggle="tab" data-bs-target="#boxnew-03-tab-pane" type="button" role="tab" aria-controls="boxnew-03-tab-pane" aria-selected="false">ブログ</a>
	        				  </li>
	        				</ul>
	        				<div class="d-none d-md-block ms-auto">
	      						<a id="blog" class="btn btn-primary"><span>一覧はこちら</span></a>
	      					</div>
	      				</div>

	      				<div class="tab-content" id="myNewTabContent">
	      				  <div class="tab-pane fade show active" id="boxnew-01-tab-pane" role="tabpanel" data-tab="boxnew-01-tab" tabindex="0">
	      				  	<div class="eltab-item d-sm-flex">
	      				  		<div class="eltab-item__date d-flex align-items-center">
	      				  			<p class="-year me-3">2022<br>Nov</p>
	      				  			<p class="-day">26</p>
	      				  		</div>
	      				  		<div class="eltab-item__meta">
	      				  			<h3 class="eltab-item__title"><a href="blog-detail" class="stretched-link">[タイトルタイトル］</a></h3>
	      				  			<p class="text__truncate -n2">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
	      				  		</div>
	      				  		<a href="blog-detail" class="eltab-item__readmore"><i class="icon-angle-right"></i></a>
	      				  	</div>
	      				  	<div class="eltab-item d-sm-flex">
	      				  		<div class="eltab-item__date d-flex align-items-center">
	      				  			<p class="-year me-3">2022<br>Nov</p>
	      				  			<p class="-day">26</p>
	      				  		</div>
	      				  		<div class="eltab-item__meta">
	      				  			<h3 class="eltab-item__title"><a href="blog-detail" class="stretched-link">[タイトルタイトル］</a></h3>
	      				  			<p class="text__truncate -n2">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
	      				  		</div>

	      				  		<a href="blog-detail" class="eltab-item__readmore"><i class="icon-angle-right"></i></a>

	      				  	</div>
	      				  	<div class="eltab-item d-sm-flex">
	      				  		<div class="eltab-item__date d-flex align-items-center">
	      				  			<p class="-year me-3">2022<br>Nov</p>
	      				  			<p class="-day">26</p>
	      				  		</div>
	      				  		<div class="eltab-item__meta">
	      				  			<h3 class="eltab-item__title"><a href="blog-detail" class="stretched-link">[タイトルタイトル］</a></h3>
	      				  			<p class="text__truncate -n2">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
	      				  		</div>
	      				  		<a href="blog-detail" class="eltab-item__readmore"><i class="icon-angle-right"></i></a>
	      				  	</div>
	      				  </div>
	      				  <div class="tab-pane fade" id="boxnew-02-tab-pane" role="tabpanel" data-tab="boxnew-02-tab" tabindex="0">...</div>
	      				  <div class="tab-pane fade" id="boxnew-03-tab-pane" role="tabpanel" data-tab="boxnew-03-tab" tabindex="0">...</div>
	      				</div>
      				</div>

      				<div class="d-md-none text-center mt-4">
    						<a href="blog/" class="btn btn-primary"><span>一覧はこちら</span></a>
    					</div>

      			</div>
      		</div>
      	</div>

      	<div class="el-box text-center wow fadeInUp">
      		<h3 class="el-box__title">待ち時間の軽減のため、予約優先で診療を行っております</h3>
      		<div class="row g-4 g-md-5 g-xl-80 g-xxl-120">
      			<div class="col-lg-6 -col-left">
      				<div>
      					<p class="el-box__text">お電話でのご予約</p>
      					<p><a href="tel:<?= $init['clinic']['tel_num'] ?>" class="el-box__tel is-tel"><i class="icon-phonev2 me-2"></i><?= $init['clinic']['tel_num'] ?></a></p>
      					<div class="el-box__meta">
        					<p>受付時間 9:00 ～18:00</p>
        					<p>木曜・土曜午後・日・祝日は除く</p>
      					</div>
      				</div>
      			</div>
      			<div class="col-lg-6 -col-right">
      				<div>
      					<p class="el-box__text mb-4 mb-sm-0">インターネットでご予約</p>
      					<div class="d-none d-sm-flex justify-content-center mb-3">
      						<div class="me-3">
      							<img src="assets/images/qr-small.jpg" alt="">
      						</div>
      						<div class="el-box__meta text-start">
      							<p>スマートフォンご利用の方は<br>QRコードの読み込みからもご予約できます。</p>
      						</div>
      					</div>
      					<div class="d-flex justify-content-center gap-3 flex-wrap">
      						<a href="" class="btn btn-primary -arrow-right -large is-web"><span>初診の方はこちら</span></a>
      						<a href="" class="btn btn-primary -arrow-right -large is-web"><span>再診の方はこちら</span></a>
      					</div>
      				</div>
      			</div>
      		</div>
      	</div>


      </div>
    </section>

    <section class="sc-policy">
      <div class="container">
      	<header class="c-header text-center wow fadeInUp">
      		<h2 class="c-header__title text-white">Policy</h2>
      		<div class="c-header__sub text-white">診療理念</div>
      	</header>
      	<div class="c-content text-center wow fadeInUp">
          <h3 class="mb-4 mb-md-5">気軽に通える快適な歯科診療で<br>みなさまのお口の健康をサポートします</h3>
          <div>
          	<p>歯科に「痛い」「怖い」というイメージをお持ちの方は、お子さまだけではなく、<br>大人の方にも多いと思います。<br>
				当院はそうしたマイナスイメージをなくし、みなさまが積極的にお口ケアに取り<br>組める環境づくりをめざしています。<br>
				お一人おひとりの症状とペースに合わせた診療で「通いたくなる歯医者さん」と<br>して、みなさまのお口の健康を守ります。</p>
          </div>
        </div>
      </div>
    </section>

    <section class="sc-greeting">
      <div class="container">

      	<div class="c-content">
        	<div class="row">
        		<div class="col-lg-6 order-lg-2 col-right">
        			<div class="col-right__wrap">
	        			<div class="el__thumb -large wow animate__swing" data-wow-duration="2.5s" data-wow-delay=".3s">
	        				<div class="dnfix__thumb">
	        					<img src="assets/images/home-greeting-img-01.png" alt="">
	        				</div>

	        			</div>
	        			<div class="el__thumb -small wow animate__swing" data-wow-duration="2.5s" data-wow-delay=".3s">
	          			<div class="dnfix__thumb">
	          				<img src="assets/images/home-greeting-img-02.png" alt="">
	          			</div>
	        			</div>
        			</div>

        		</div>

        		<div class="col-lg-6 col-left">
        			<header class="c-header wow fadeInUp text-center text-lg-start">
	          		<h2 class="c-header__title">Greeting</h2>
	          		<div class="c-header__sub">ご挨拶</div>
	          	</header>

        			<div class="col-left__wrap">
        				<div class="wow fadeInUp">
	          			<h3 class="mb-4 mb-md-5">地域全体を健やかに、活発に</h3>
	        				<div class="mb-4 mb-md-5">
		            		<p>情に棹させば流される。智に働けば角が立つ。どこへ越しても住みにくいと悟った時、詩が生れて、画が出来る。とかくに人の世は住みにくい。意地を通せば窮屈だ。 とかくに人の世は住みにくい。<br>
										どこへ越しても住みにくいと悟った時、詩が生れて、画が出来る。意地を通せば窮屈だ。山路を登りながら、こう考えた。智に働けば角が立つ。
										</p>
									</div>
									<p class="text-end el__name mb-5 pb-md-4"><span class="me-3 -position">院 長</span><span>山田 太郎</span></p>
								</div>

								<div class="el-box wow fadeInUp">
									<h4 class="el-box__title">院長経歴</h4>
									<ul class="ul-list">
										<li class="-li-item"><span class="-li-item__date">2021.01.19</span><span>テキストテキストテキストテキストテキスト</span></li>
										<li class="-li-item"><span class="-li-item__date">2021.01.19</span><span>テキストテキストテキストテキストテキスト</span></li>
									</ul>
								</div>
								<div class="text-center wow fadeInUp">
									<a href="" class="btn btn-primary-mask ef__shine">詳しくはこちら</a>
								</div>
							</div>
        		</div>

        	</div>
        </div>
      </div>
    </section>

    <section class="sc-features">
    	<div class="sc__wrap">
        <div class="container">
        	<header class="c-header text-center wow fadeInUp">
        		<h2 class="c-header__title">Features</h2>
        		<div class="c-header__sub">当院の特徴</div>
        	</header>
        	<div class="c-content">
          	<div class="el-item">
          		<div class="row g-md-5 g-xl-80">
          			<div class="col-lg-6 wow animate__swing" data-wow-duration="2.5s" data-wow-delay=".3s">
          				<div class="el-item__thumb">
          					<div class="dnfix__thumb">
          						<img src="assets/images/home-features-img-01.png" alt="">
          					</div>
          				</div>
          			</div>
          			<div class="col-lg-6 d-flex flex-column wow fadeInRight">
          				<div class="el-item__meta">
          					<p class="el-item__stt">POINT 01</p>
            				<h3 class="el-item__title">ご自身の「歯を残す」<br>将来を見据えた考えた治療を</h3>
            				<div class="el-item__excerpt">
            					<p>歯科医院＝「痛くなってから通う場所」「痛い治療をするところ」というイメージがありませんか？<br>
											これからの歯科医院は「歯を守るため、生涯ご自身の歯で生活できるように、メンテナンスをする場所」です。<br>
											お子さんにはむし歯にならないためのお口の環境づくり、大人の方にはこれから先、1本でも多く歯を残すための予防ケアのお手伝いをいたします。</p>
            				</div>
          				</div>
          				<div class="mt-auto mb-5 text-end">
            				<a href="" class="btn btn-primary-mask ef__shine mt-auto">詳しくはこちら</a>
            			</div>
          			</div>
          		</div>
          	</div>
          	<div class="el-item">
          		<div class="row">
          			<div class="col-lg-6 order-lg-2 wow animate__swing" data-wow-duration="2.5s" data-wow-delay=".3s">
          				<div class="el-item__thumb">
          					<div class="dnfix__thumb">
          						<img src="assets/images/home-features-img-02.png" alt="">
          					</div>
          				</div>
          			</div>
          			<div class="col-lg-6 d-flex flex-column wow fadeInLeft">
          				<div class="el-item__meta">
            				<p class="el-item__stt">POINT 02</p>
            				<h3 class="el-item__title">原因から考える<br>根本からの治療をご提案します</h3>
            				<div class="el-item__excerpt">
            					<p>情に棹させば流される。智に働けば角が立つ。どこへ越しても住みにくいと悟った時、詩が生れて、画が出来る。とかくに人の世は住みにくい。意地を通せば窮屈だ。とかくに人の世は住みにくい</p>
            				</div>
            			</div>
            			<div class="mt-auto mb-5 text-end">
	            			<a href="" class="btn btn-primary-mask ef__shine mt-auto">詳しくはこちら</a>
	            		</div>
          			</div>
          		</div>
          	</div>
          	<div class="el-item">
          		<div class="row">
          			<div class="col-lg-6 wow animate__swing" data-wow-duration="2.5s" data-wow-delay=".3s">
          				<div class="el-item__thumb">
          					<div class="dnfix__thumb">
          						<img src="assets/images/home-features-img-03.png" alt="">
          					</div>
          				</div>
          			</div>
          			<div class="col-lg-6 d-flex flex-column wow fadeInRight">
          				<div class="el-item__meta">
            				<p class="el-item__stt">POINT 03</p>
            				<h3 class="el-item__title">衛生士担当制による<br>充実のアフターフォロー</h3>
            				<div class="el-item__excerpt">
            					<p>来院する度に毎回担当者が変わって、何度も同じことを話すのが億劫だと思った経験はありませんか？<br>
											当院では、患者さんの口腔内のケアをいつも同じ水準で継続的に行えるよう、歯科衛生士を担当制を採用しています。治療する側・される側という考えではなく、信頼関係を大切にしています。</p>
            				</div>
            			</div>
            			<div class="mt-auto mb-5 text-end">
            				<a href="" class="btn btn-primary-mask ef__shine">詳しくはこちら</a>
            			</div>
          			</div>
          		</div>
          	</div>
          </div>
        </div>
      </div>
    </section>

    <div class="sc-group-service-clinic">
        <section class="sc-service">
          <div class="container">
          	<header class="c-header text-center wow fadeInLeft">
          		<h2 class="c-header__title">Service</h2>
          		<div class="c-header__sub">診療案内</div>
          	</header>
          	<div class="c-content">
            	<ul class="row g-3 g-xl-4 mb-5 pb-3 justify-content-center">
            		<li class="col-6 col-sm-4 col-lg-20 wow fadeInUp" data-wow-delay=".1s">
            			<div class="el-item">
            			  	<div class="el-item__thumb">
	            			    <div class="dnfix__thumb -contain">
	            			      <img src="assets/images/home-service-img-01.png" alt="">
	            			    </div>
            			  	</div>
            			    <h3 class="el-item__title"><a href="services/" class="stretched-link">むし歯</a></h3>
            			</div>
            		</li>
            		<li class="col-6 col-sm-4 col-lg-20 wow fadeInUp" data-wow-delay=".2s">
            			<div class="el-item">
            			  	<div class="el-item__thumb">
	            			    <div class="dnfix__thumb -contain">
	            			      <img src="assets/images/home-service-img-02.png" alt="">
	            			    </div>
            			  	</div>
            			    <h3 class="el-item__title"><a href="services/" class="stretched-link">歯周病</a></h3>
            			</div>
            		</li>
            		<li class="col-6 col-sm-4 col-lg-20 wow fadeInUp" data-wow-delay=".3s">
            			<div class="el-item">
            			  	<div class="el-item__thumb">
	            			    <div class="dnfix__thumb -contain">
	            			      <img src="assets/images/home-service-img-03.png" alt="">
	            			    </div>
            			  	</div>
            			    <h3 class="el-item__title"><a href="services/" class="stretched-link">根幹治療</a></h3>
            			</div>
            		</li>
            		<li class="col-6 col-sm-4 col-lg-20 wow fadeInUp" data-wow-delay=".4s">
            			<div class="el-item">
            			  	<div class="el-item__thumb">
	            			    <div class="dnfix__thumb -contain">
	            			      <img src="assets/images/home-service-img-04.png" alt="">
	            			    </div>
            			  	</div>
            			    <h3 class="el-item__title"><a href="services/" class="stretched-link">入れ歯</a></h3>
            			</div>
            		</li>
            		<li class="col-6 col-sm-4 col-lg-20 wow fadeInUp" data-wow-delay=".5s">
            			<div class="el-item">
            			  	<div class="el-item__thumb">
	            			    <div class="dnfix__thumb -contain">
	            			      <img src="assets/images/home-service-img-05.png" alt="">
	            			    </div>
            			  	</div>
            			    <h3 class="el-item__title"><a href="services/" class="stretched-link">小児歯科</a></h3>
            			</div>
            		</li>
            		<li class="col-6 col-sm-4 col-lg-20 wow fadeInUp" data-wow-delay=".6s">
            			<div class="el-item">
            			  	<div class="el-item__thumb">
	            			    <div class="dnfix__thumb -contain">
	            			      <img src="assets/images/home-service-img-06.png" alt="">
	            			    </div>
            			  	</div>
            			    <h3 class="el-item__title"><a href="services/" class="stretched-link">歯科口腔外科</a></h3>
            			</div>
            		</li>
            		<li class="col-6 col-sm-4 col-lg-20 wow fadeInUp" data-wow-delay=".7s">
            			<div class="el-item">
            			  	<div class="el-item__thumb">
	            			    <div class="dnfix__thumb -contain">
	            			      <img src="assets/images/home-service-img-07.png" alt="">
	            			    </div>
            			  	</div>
            			    <h3 class="el-item__title"><a href="services/" class="stretched-link">予防クリーニング</a></h3>
            			</div>
            		</li>
            		<li class="col-6 col-sm-4 col-lg-20 wow fadeInUp" data-wow-delay=".8s">
            			<div class="el-item">
            			  	<div class="el-item__thumb">
	            			    <div class="dnfix__thumb -contain">
	            			      <img src="assets/images/home-service-img-08.png" alt="">
	            			    </div>
            			  	</div>
            			    <h3 class="el-item__title"><a href="services/" class="stretched-link">インプラント</a></h3>
            			</div>
            		</li>
            		<li class="col-6 col-sm-4 col-lg-20 wow fadeInUp" data-wow-delay=".9s">
            			<div class="el-item">
            			  	<div class="el-item__thumb">
	            			    <div class="dnfix__thumb -contain">
	            			      <img src="assets/images/home-service-img-09.png" alt="">
	            			    </div>
            			  	</div>
            			    <h3 class="el-item__title"><a href="services/" class="stretched-link">矯正治療</a></h3>
            			</div>
            		</li>
            		<li class="col-6 col-sm-4 col-lg-20 wow fadeInUp" data-wow-delay="1s">
            			<div class="el-item">
            			  	<div class="el-item__thumb">
	            			    <div class="dnfix__thumb -contain">
	            			      <img src="assets/images/home-service-img-10.png" alt="">
	            			    </div>
            			  	</div>
            			    <h3 class="el-item__title"><a href="services/" class="stretched-link">ホワイトニング</a></h3>
            			</div>
            		</li>
            	</ul>

            	<div class="text-center wow fadeInUp">
            		<a href="services/" class="btn btn-primary-mask ef__shine">詳しくはこちら</a>
            	</div>
            </div>
          </div>
        </section>

        <section class="sc-clinic">

        	<div class="sc__wrap">
	          <div class="container">
	          	<div class="row">
	          		<div class="col-md-6 col-left">
	          			<div class="col-left__wrap wow fadeInLeft">
		          			<header class="c-header">
				          		<h2 class="c-header__title text-white">Clinic</h2>
				          		<div class="c-header__sub text-white">院内・設備紹介</div>
				          	</header>

				          	<div class="el__meta">
				          		<h3>待合室</h3>
				          		<p>情に棹させば流される。智に働けば角が立つ。どこへ越しても住みにくいと悟った時、詩が生れて、画が出来る。</p>

				          	</div>
				          	<p><a href="" class="btn btn-primary-mask ef__shine -s2">詳しくはこちら</a></p>
			          	</div>
	          		</div>
	          		<div class="col-md-6 wow fadeInRight">
	          			<div class="c-content">
			            	<!-- Slider main container -->
			            	<div class="swiper__wrap">
											<div class="swiper mySwiper">
									      <div class="swiper-wrapper">
									        <div class="swiper-slide">
									        	<div class="swiper-slide__wrap">
										        	<img src="assets/images/pic_top_clinic01.jpg.png" alt="">
										        </div>
										      </div>
									        <div class="swiper-slide">
									        	<div class="swiper-slide__wrap">
										        	<img src="assets/images/pic_top_clinic02.jpg.png" alt="">
										        </div>
										      </div>
										      <div class="swiper-slide">
									        	<div class="swiper-slide__wrap">
										        	<img src="assets/images/pic_top_clinic01.jpg.png" alt="">
										        </div>
										      </div>
										      <div class="swiper-slide">
									        	<div class="swiper-slide__wrap">
										        	<img src="assets/images/pic_top_clinic02.jpg.png" alt="">
										        </div>
										      </div>
									      </div>
									      <div class="swiper-pagination"></div>
									      <div class="swiper-button swiper-button-next"></div>
				      					<div class="swiper-button swiper-button-prev"></div>
									    </div>
								    </div>
			            </div>
	          		</div>
	          	</div>


	          </div>
          </div>

        </section>
      </div>

    <section class="sc-calendar">
      <div class="container">
      	<header class="c-header text-center wow fadeInUp">
      		<h2 class="c-header__title">Calendar</h2>
      		<div class="c-header__sub">カレンダー</div>
      	</header>
      	<div class="c-content wow fadeInUp">
      		<script>
             window.onload = googleCalendarSet;
            function googleCalendarSet(){
            //カレンダーの埋め込みコードをコピペして分割する
            var calendarCode1 = '<iframe src="https://calendar.google.com/calendar/b/1/embed?';
            var calenderCode2 = 'showTitle=0&amp;showNav=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=Asia%2FTokyo&amp;src=aHQzamxmYWFjNWxmZDYyNjN1bGZoNHRxbDhAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;src=amEuamFwYW5lc2UjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&amp;color=%23B39DDB&amp;color=%230B8043&amp;showTitle=0&amp;title=VISCA%20CLINIC%20%E3%81%AE%E8%A8%BA%E7%99%82%E3%82%AB%E3%83%AC%E3%83%B3%E3%83%80%E3%83%BC&amp;showTabs=0&amp;showPrint=0&amp;showTz=0&amp;showCalendars=0&amp;showNav=1&amp;showDate=1" style="border-width:0" width="100%" height="300px" frameborder="0" scrolling="no"></iframe>'
            /*来月のカレンダー*/
            var today = new Date;
            var myYear = today.getFullYear();//年を取得
            var myMonth = today.getMonth()+1;//月を取得、1月が0から始まるからややこしい
            var nextMonth = myMonth+1;
            //12月を超えると1月に
            　if(nextMonth>12){nextMonth-=12;myYear+=1;};
            //10以下を二ケタに
            if(nextMonth<10){nextMonth = "0"+nextMonth;};
            //日付を出力
            var dates = "dates="+String(myYear)+String(nextMonth)+"01/"+String(myYear)+String(nextMonth)+"01&amp;";
            //指定したidを書き換え
            document.getElementById("nextMonthCal").innerHTML = calendarCode1+dates+calenderCode2;
            /*今月のカレンダー*/
            　document.getElementById("MonthCal").innerHTML = calendarCode1+calenderCode2;
            }
        	</script>
	        <div class="row mb-5">
	            <div class="col-md-6">
	                <div class="calendar-wrap  wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
	                    <div id="MonthCal"></div>
	                </div>
	            </div>
	            <div class="col-md-6 d-none d-md-block">
	                <div class="calendar-wrap  wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
	                    <div id="nextMonthCal"></div>
	                </div>
	            </div>
	        </div>
	        <div class="text-center">
	        	<a href="" class="btn btn-primary-mask">Googleカレンダーはこちら</a>
	        </div>
	      </div>
      </div>
    </section>

    <section class="sc-information">
    	<div class="sc__wrap">
	      <div class="container">
	      	<header class="c-header text-center wow fadeInUp">
	      		<h2 class="c-header__title">Information</h2>
	      		<div class="c-header__sub">医院情報</div>
	      	</header>
	      	<div class="c-content">
	          <div class="row g-md-5">
	          	<div class="col-lg-6 wow animate__swing" data-wow-duration="2.5s" data-wow-delay=".3s">
	          		<div class="el__thumb">
	          			<div class="dnfix__thumb">
	          				<img src="assets/images/home-infomation-img-01.png" alt="">
	          			</div>
	          		</div>
	          	</div>
	          	<div class="col-lg-6 col-right wow fadeInRight">
	          		<div class="col-right__wrap">
	            		<ul class="ul-list">
	              		<li><div class="-label">医院名</div><div>ビスカ歯科クリニック</div></li>
	              		<li><div class="-label">所在地</div><div>〒160-0022<br>東京都新宿区新宿6-24-20 KDX新宿6丁目ビル10F</div></li>
	              		<li><div class="-label">電話番号</div><div><a href="tel:<?= $init['clinic']['tel_num'] ?>" class="is-tel"><?= $init['clinic']['tel_num'] ?></a></div></li>
	              		<li><div class="-label">URL</div><div><a href="ttp://●●●.com" class="is-web">http://●●●.com</a></div></li>
	              		<li><div class="-label">診療内容</div><div>歯科、小児歯科、歯科口腔外科、矯正歯科<br>
										（むし歯、根管治療、歯周病、入れ歯、小児歯科、予防・クリーニング、<br class="d-none d-sm-block">
										歯科口腔外科、インプラント、矯正歯科、小児矯正、審美治療、<br class="d-none d-xl-block">
										ホワイトニング）</div>
										</li>
	              	</ul>
	            	</div>
	          	</div>
	          </div>
	        </div>
	      </div>

	      <div class="el-box wow fadeInUp">
	      	<div class="container">
	        	<div class="row">
	        		<div class="col-md-4 el-col">
	        			<div class="el-box__item">
	        				<h3 class="el-box__title">各種保険取り扱い</h3>
	        				<div class="el-box__excerpt">保険診療を主軸に診療を行っております。 自由診療は選択肢の一環としてご説明し、ご希望の方に行います。</div>
	        			</div>
	        		</div>
	        		<div class="col-md-4 el-col">
	        			<div class="el-box__item">
	        				<h3 class="el-box__title">予約優先診療</h3>
	        				<div class="el-box__excerpt">待ち時間軽減のため、原則予約制で診療しています。ご予約はお電話(<?= $init['clinic']['tel_num'] ?>)にてご連絡ください。</div>
	        			</div>
	        		</div>
	        		<div class="col-md-4 el-col">
	        			<div class="el-box__item">
	        				<h3 class="el-box__title">急患随時受付</h3>
	        				<div class="el-box__excerpt">柔軟に対応しております。混雑している場合はお待たせすることもございますので、ご来院いただく前に一度お電話(<?= $init['clinic']['tel_num'] ?>)にてお問い合わせください。</div>
	        			</div>
	        		</div>
	        	</div>
	        </div>
	      </div>
      </div>
    </section>

		<?php include('assets/inc/footer.php') ?>

	</div>

		<?php include('assets/inc/footer_script.php') ?>
    <script>
			var swiper = new Swiper(".mySwiper", {
      grabCursor: true,
      loop: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },

      effect: "cards",
      cardsEffect: {
		    slideShadows : false,
		    perSlideOffset : 2,
		    perSlideRotate : 8,
		  },
    });
		</script>

  </body>
</html>
