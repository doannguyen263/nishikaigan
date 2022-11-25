<?php
include_once(__DIR__."/../init.php");
$page_curent = 'facilities';
?>
<!DOCTYPE html>
<html lang="ja">
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="/<?= $dir ?>/assets/images/favicon.png">

    <title><?= $init['meta']['facilities']['title'] ?></title>
		<meta name="description" content="<?= $init['meta']['facilities']['description'] ?>">
		<meta name="keywords" content="<?= $init['meta']['facilities']['keyword'] ?>">
		<meta property="og:title" content="<?= $init['meta']['facilities']['title'] ?>">
		<meta property="og:description" content="<?= $init['meta']['facilities']['description'] ?>">
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
							"@id": "<?= $init['clinic']['url'] ?>",
							"name": "HOME"
						}
					}
				]
			},
			{
				"@context": "http://schema.org",
				"@type": "BreadcrumbList",
				"itemListElement": [
					{
						"@type": "ListItem",
						"position": 2,
						"item": {
							"@id": "<?= $init['clinic']['url'] ?>facilities/",
							"name": "<?= $init['meta']['facilities']['title'] ?>"
						}
					}
				]
			}
		</script>

		<?php include_once(ROOTPATH."assets/inc/header_link.php"); ?>
	</head>
<body>
	<div class="wrapper">

		<?php include_once(ROOTPATH."assets/inc/header.php"); ?>

		<section class="page-header">
			<div class="page-header__thumb">
				<div class="dnfix__thumb">
					<img src="../assets/images/facilities/header-bg.png" alt="">
				</div>
			</div>
			<div class="page-header__meta">
				<div class="container text-center">
					<div class="page-header__title">院内紹介</div>
					<div class="page-header__sub">FACILITIES</div>
				</div>
			</div>
		</section>
		<div class="facilities__wrap">
			<div class="container">
				<nav aria-label="breadcrumb">
				  <ol class="breadcrumb">
				    <li class="breadcrumb-item"><a href="#">Top</a></li>
				    <li class="breadcrumb-item active" aria-current="page">院内紹介</li>
				  </ol>
				</nav>
			</div>

			<section class="facilities-clinic">
			  <div class="container">
			  	<header class="c-header text-center">
			  		<h2 class="c-header__title">Clinic</h2>
			  		<div class="c-header__sub">院内紹介</div>
			  	</header>
			  	<div class="c-content">

			    </div>
			  </div>


			    <div class="swiper mySwiper2">
			      <div class="swiper-wrapper">
			        <div class="swiper-slide">
			        	<div class="swiper-slide__wrap">
			        		<div class="swiper-slide__thumb">
					        	<div class="dnfix__thumb">
						          <img src="../assets/images/access/thumb.jpg" />
						        </div>
					        </div>
					        <div class="swiper-slide__meta">
					        	<h3 class="swiper-slide__title">タイトルタイトルタイトルタイ</h3>
					        	<div class="swiper-slide__excerpt">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</div>
					        </div>
				        </div>
			        </div>
			        <div class="swiper-slide">
			        	<div class="swiper-slide__wrap">
				        	<div class="swiper-slide__thumb">
					        	<div class="dnfix__thumb">
						          <img src="../assets/images/access/thumb.jpg" />
						        </div>
					        </div>
					        <div class="swiper-slide__meta">
					        	<h3 class="swiper-slide__title">タイトルタイトルタイトルタイ</h3>
					        	<div class="swiper-slide__excerpt">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</div>
					        </div>
					    </div>
			        </div>
			        <div class="swiper-slide">
			        	<div class="swiper-slide__wrap">
				        	<div class="swiper-slide__thumb">
					        	<div class="dnfix__thumb">
						          <img src="../assets/images/access/thumb.jpg" />
						        </div>
					        </div>
					        <div class="swiper-slide__meta">
					        	<h3 class="swiper-slide__title">タイトルタイトルタイトルタイ</h3>
					        	<div class="swiper-slide__excerpt">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</div>
					        </div>
					    </div>
			        </div>
			        <div class="swiper-slide">
			        	<div class="swiper-slide__wrap">
				        	<div class="swiper-slide__thumb">
					        	<div class="dnfix__thumb">
						          <img src="../assets/images/access/thumb.jpg" />
						        </div>
					        </div>
					        <div class="swiper-slide__meta">
					        	<h3 class="swiper-slide__title">タイトルタイトルタイトルタイ</h3>
					        	<div class="swiper-slide__excerpt">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</div>
					        </div>
					    </div>
			        </div>
			        <div class="swiper-slide">
			        	<div class="swiper-slide__wrap">
				        	<div class="swiper-slide__thumb">
					        	<div class="dnfix__thumb">
						          <img src="../assets/images/access/thumb.jpg" />
						        </div>
					        </div>
					        <div class="swiper-slide__meta">
					        	<h3 class="swiper-slide__title">タイトルタイトルタイトルタイ</h3>
					        	<div class="swiper-slide__excerpt">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</div>
					        </div>
					    </div>
			        </div>
			        <div class="swiper-slide">
			        	<div class="swiper-slide__wrap">
				        	<div class="swiper-slide__thumb">
					        	<div class="dnfix__thumb">
						          <img src="../assets/images/access/thumb.jpg" />
						        </div>
					        </div>
					        <div class="swiper-slide__meta">
					        	<h3 class="swiper-slide__title">タイトルタイトルタイトルタイ</h3>
					        	<div class="swiper-slide__excerpt">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</div>
					        </div>
					    </div>
			        </div>
			        <div class="swiper-slide">
			        	<div class="swiper-slide__wrap">
				        	<div class="swiper-slide__thumb">
					        	<div class="dnfix__thumb">
						          <img src="../assets/images/access/thumb.jpg" />
						        </div>
					        </div>
					        <div class="swiper-slide__meta">
					        	<h3 class="swiper-slide__title">タイトルタイトルタイトルタイ</h3>
					        	<div class="swiper-slide__excerpt">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</div>
					        </div>
					    </div>
			        </div>
			      </div>
			      <div class="swiper-button swiper-button-next"></div>
			      <div class="swiper-button swiper-button-prev"></div>
			    </div>

			    <div class="container container-980">
				    <div thumbsSlider="" class="swiper mySwiper -thumbsSlider">
				      <div class="swiper-wrapper">
				        <div class="swiper-slide">
				          <div class="dnfix__thumb">
				          	<img src="../assets/images/access/thumb.jpg" />
				          </div>
				        </div>
				        <div class="swiper-slide">
				          <div class="dnfix__thumb">
				          	<img src="../assets/images/access/thumb.jpg" />
				          </div>
				        </div>
				        <div class="swiper-slide">
				          <div class="dnfix__thumb">
				          	<img src="../assets/images/access/thumb.jpg" />
				          </div>
				        </div>
				        <div class="swiper-slide">
				          <div class="dnfix__thumb">
				          	<img src="../assets/images/access/thumb.jpg" />
				          </div>
				        </div>
				        <div class="swiper-slide">
				          <div class="dnfix__thumb">
				          	<img src="../assets/images/access/thumb.jpg" />
				          </div>
				        </div>
				        <div class="swiper-slide">
				          <div class="dnfix__thumb">
				          	<img src="../assets/images/access/thumb.jpg" />
				          </div>
				        </div>
				        <div class="swiper-slide">
				          <div class="dnfix__thumb">
				          	<img src="../assets/images/access/thumb.jpg" />
				          </div>
				        </div>
				      </div>
				    </div>
			    </div>

			</section>
		</div>


		<?php include('../assets/inc/footer.php') ?>

	</div>

  <?php include('../assets/inc/footer_script.php') ?>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        loop: true,
        spaceBetween: 10,
        slidesPerView: 6,
        freeMode: true,
        watchSlidesProgress: true,
        breakpoints: {
		    // when window width is >= 320px
		    320: {
		      slidesPerView: 3,
		      spaceBetween: 10
		    },
		    // when window width is >= 320px
		    575: {
		      slidesPerView: 4,
		      spaceBetween: 10
		    },
		    768: {
		      slidesPerView: 5,
		      spaceBetween: 10
		    },
		    992: {
		      slidesPerView: 6,
		      spaceBetween: 10
		    }
		}
      });
      var swiper2 = new Swiper(".mySwiper2", {
        loop: true,
        spaceBetween: 10,
        slidesPerView: 2,
	    centeredSlides: true,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        thumbs: {
          swiper: swiper,
        },
        breakpoints: {
		    // when window width is >= 320px
		    320: {
		      slidesPerView: 1,
		      spaceBetween: 20
		    },
		    992: {
		      slidesPerView: 2,
		      spaceBetween: 10
		    }
		}
      });
    </script>

  </body>
</html>
