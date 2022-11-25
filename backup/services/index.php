<?php
include_once(__DIR__."/../init.php");
$page_curent = 'services';
?>
<!DOCTYPE html>
<html lang="ja">
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="/<?= $dir ?>/assets/images/favicon.png">

    <title><?= $init['meta']['services']['title'] ?></title>
		<meta name="description" content="<?= $init['meta']['services']['description'] ?>">
		<meta name="keywords" content="<?= $init['meta']['services']['keyword'] ?>">
		<meta property="og:title" content="<?= $init['meta']['services']['title'] ?>">
		<meta property="og:description" content="<?= $init['meta']['services']['description'] ?>">
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
							"@id": "<?= $init['clinic']['url'] ?>services/",
							"name": "<?= $init['meta']['services']['title'] ?>"
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
						<img src="../assets/images/service/header-bg.png" alt="">
					</div>
				</div>
				<div class="page-header__meta">
					<div class="container text-center">
						<div class="page-header__title">診療案内</div>
						<div class="page-header__sub">SERVICES</div>
					</div>
				</div>

		</section>

		<div class="service__wrap">
			<div class="container">
				<nav aria-label="breadcrumb">
				  <ol class="breadcrumb">
				    <li class="breadcrumb-item"><a href="#">Top</a></li>
				    <li class="breadcrumb-item active" aria-current="page">診療案内</li>
				  </ol>
				</nav>
			</div>

			<section class="service-menu">
			  <div class="container">
			  	<header class="c-header text-center">
			  		<h2 class="c-header__title">Menu</h2>
			  		<div class="c-header__sub">当院で行っている診療</div>
			  	</header>

			  	<div class="c-content">

            <ul class="ul-list row g-3 g-xl-4 justify-content-center">
            		<li class="col-6 col-sm-4 col-lg-20 wow fadeInUp" data-wow-delay=".1s">
            			<div class="li-item">
            			  	<div class="li-item__thumb">
	            			    <div class="dnfix__thumb -contain">
	            			      <img src="../assets/images/home-service-img-01.png" alt="">
	            			    </div>
            			  	</div>
            			    <h3 class="li-item__title"><a href="" class="stretched-link">むし歯</a></h3>
            			</div>
            		</li>
            		<li class="col-6 col-sm-4 col-lg-20 wow fadeInUp" data-wow-delay=".2s">
            			<div class="li-item">
            			  	<div class="li-item__thumb">
	            			    <div class="dnfix__thumb -contain">
	            			      <img src="../assets/images/home-service-img-02.png" alt="">
	            			    </div>
            			  	</div>
            			    <h3 class="li-item__title"><a href="" class="stretched-link">歯周病</a></h3>
            			</div>
            		</li>
            		<li class="col-6 col-sm-4 col-lg-20 wow fadeInUp" data-wow-delay=".3s">
            			<div class="li-item">
            			  	<div class="li-item__thumb">
	            			    <div class="dnfix__thumb -contain">
	            			      <img src="../assets/images/home-service-img-03.png" alt="">
	            			    </div>
            			  	</div>
            			    <h3 class="li-item__title"><a href="" class="stretched-link">根幹治療</a></h3>
            			</div>
            		</li>
            		<li class="col-6 col-sm-4 col-lg-20 wow fadeInUp" data-wow-delay=".4s">
            			<div class="li-item">
            			  	<div class="li-item__thumb">
	            			    <div class="dnfix__thumb -contain">
	            			      <img src="../assets/images/home-service-img-04.png" alt="">
	            			    </div>
            			  	</div>
            			    <h3 class="li-item__title"><a href="" class="stretched-link">入れ歯</a></h3>
            			</div>
            		</li>
            		<li class="col-6 col-sm-4 col-lg-20 wow fadeInUp" data-wow-delay=".5s">
            			<div class="li-item">
            			  	<div class="li-item__thumb">
	            			    <div class="dnfix__thumb -contain">
	            			      <img src="../assets/images/home-service-img-05.png" alt="">
	            			    </div>
            			  	</div>
            			    <h3 class="li-item__title"><a href="" class="stretched-link">小児歯科</a></h3>
            			</div>
            		</li>
            		<li class="col-6 col-sm-4 col-lg-20 wow fadeInUp" data-wow-delay=".6s">
            			<div class="li-item">
            			  	<div class="li-item__thumb">
	            			    <div class="dnfix__thumb -contain">
	            			      <img src="../assets/images/home-service-img-06.png" alt="">
	            			    </div>
            			  	</div>
            			    <h3 class="li-item__title"><a href="" class="stretched-link">歯科口腔外科</a></h3>
            			</div>
            		</li>
            		<li class="col-6 col-sm-4 col-lg-20 wow fadeInUp" data-wow-delay=".7s">
            			<div class="li-item">
            			  	<div class="li-item__thumb">
	            			    <div class="dnfix__thumb -contain">
	            			      <img src="../assets/images/home-service-img-07.png" alt="">
	            			    </div>
            			  	</div>
            			    <h3 class="li-item__title"><a href="" class="stretched-link">予防クリーニング</a></h3>
            			</div>
            		</li>
            		<li class="col-6 col-sm-4 col-lg-20 wow fadeInUp" data-wow-delay=".8s">
            			<div class="li-item">
            			  	<div class="li-item__thumb">
	            			    <div class="dnfix__thumb -contain">
	            			      <img src="../assets/images/home-service-img-08.png" alt="">
	            			    </div>
            			  	</div>
            			    <h3 class="li-item__title"><a href="" class="stretched-link">インプラント</a></h3>
            			</div>
            		</li>
            		<li class="col-6 col-sm-4 col-lg-20 wow fadeInUp" data-wow-delay=".9s">
            			<div class="li-item">
            			  	<div class="li-item__thumb">
	            			    <div class="dnfix__thumb -contain">
	            			      <img src="../assets/images/home-service-img-09.png" alt="">
	            			    </div>
            			  	</div>
            			    <h3 class="li-item__title"><a href="" class="stretched-link">矯正治療</a></h3>
            			</div>
            		</li>
            		<li class="col-6 col-sm-4 col-lg-20 wow fadeInUp" data-wow-delay="1s">
            			<div class="li-item">
            			  	<div class="li-item__thumb">
	            			    <div class="dnfix__thumb -contain">
	            			      <img src="../assets/images/home-service-img-10.png" alt="">
	            			    </div>
            			  	</div>
            			    <h3 class="li-item__title"><a href="" class="stretched-link">ホワイトニング</a></h3>
            			</div>
            		</li>
            </ul>


            <div class="el-box">
					  		<div class="el-box__header wow fadeInUp">
						  		<h2 class="el-box__title"><span>タイトルタイトル</span></h2>
						  	</div>

					      <div class="el-item">
					      	<div class="row g-4 g-md-5 g-xl-60">
					      		<div class="col-lg-6 order-lg-2 wow fadeInRight">
					      			<div class="el-item__thumb">
					  				    <div class="dnfix__thumb">
					  				      <img src="../assets/images/thumb.jpg" alt="">
					  				    </div>
					  				  </div>
					      		</div>
					      		<div class="col-lg-6 wow fadeInLeft">
					      			<div class="el-item__meta">
					  				    <div class="el-item__excerpt mb-5">
					  				    	<ul>
					  				    		<li>テキストテキストテキストテキスト</li>
					  				    		<li>テキストテキストテキストテキスト</li>
					  				    		<li>テキストテキストテキストテキスト</li>
					  				    	</ul>
					  				    	<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト<br>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
					  				    </div>
					  				    <div>
					  				    	<a href="" class="btn btn-primary-mask"><span>詳しくはこちら</span></a>
					  				    </div>
					  				  </div>
					      		</div>
					      	</div>
			  				</div>

			  				<div class="el-item -s2">
					      	<div class="row g-4 g-md-5 g-xl-60">
					      		<div class="col-lg-6 wow fadeInLeft">
					      			<div class="el-item__thumb">
					  				    <div class="dnfix__thumb">
					  				      <img src="../assets/images/thumb.jpg" alt="">
					  				    </div>
					  				  </div>
					      		</div>
					      		<div class="col-lg-6 wow fadeInRight">
					      			<div class="el-item__meta">
					  				    <h3 class="el-item__title">タイトルタイトルタイトルタイトル</h3>
					  				    <h3 class="el-item__sub">タイトルタイトルタイトルタイトル</h3>
					  				    <div class="el-item__excerpt mb-5">
					  				    	<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト<br>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
					  				    </div>

					  				  </div>
					      		</div>
					      	</div>
			  				</div>
		  			</div>

		  			<div class="el-box">
					  		<div class="el-box__header wow fadeInUp">
						  		<h2 class="el-box__title"><span>タイトルタイトル </span><span class="el-badge">自由診療</span></h2>
						  	</div>

					      <div class="el-item">
					      	<div class="row g-4 g-md-5 g-xl-60">
					      		<div class="col-lg-6 order-lg-2 wow fadeInRight">
					      			<div class="el-item__thumb">
					  				    <div class="dnfix__thumb">
					  				      <img src="../assets/images/thumb.jpg" alt="">
					  				    </div>
					  				  </div>
					      		</div>
					      		<div class="col-lg-6 wow fadeInLeft">
					      			<div class="el-item__meta">
					  				    <div class="el-item__excerpt mb-5">
					  				    	<ul>
					  				    		<li>テキストテキストテキストテキスト</li>
					  				    		<li>テキストテキストテキストテキスト</li>
					  				    		<li>テキストテキストテキストテキスト</li>
					  				    	</ul>
					  				    	<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト<br>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
					  				    </div>
					  				    <div>
					  				    	<a href="" class="btn btn-primary-mask"><span>詳しくはこちら</span></a>
					  				    </div>
					  				  </div>
					      		</div>
					      	</div>
			  				</div>

		  			</div>

		  			<div class="el-box">
					  		<div class="el-box__header wow fadeInUp">
						  		<h2 class="el-box__title"><span>タイトルタイトル</span></h2>
						  	</div>

					      <div class="el-item">
					      	<div class="row g-4 g-md-5 g-xl-60">
					      		<div class="col-lg-6 order-lg-2 wow fadeInRight">
					      			<div class="el-item__thumb">
					  				    <div class="dnfix__thumb">
					  				      <img src="../assets/images/thumb.jpg" alt="">
					  				    </div>
					  				  </div>
					      		</div>
					      		<div class="col-lg-6 wow fadeInLeft">
					      			<div class="el-item__meta">
					  				    <div class="el-item__excerpt mb-5">
					  				    	<ul>
					  				    		<li>テキストテキストテキストテキスト</li>
					  				    		<li>テキストテキストテキストテキスト</li>
					  				    		<li>テキストテキストテキストテキスト</li>
					  				    	</ul>
					  				    	<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト<br>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
					  				    </div>
					  				    <div>
					  				    	<a href="" class="btn btn-primary-mask"><span>詳しくはこちら</span></a>
					  				    </div>
					  				  </div>
					      		</div>
					      	</div>
			  				</div>

		  			</div>

          </div>

			  </div>
			</section>
		</div>

		<section class="service-higherlevel">
		  <div class="container">
		  	<h2 class="sc__title text-center">連携医している高次医療機関</h2>
		  	<div class="c-content">
		      <div class="row g-4 g-xl-60">
						<div class="col-md-4">
							<div class="el-item text-center">
							  <div class="el-item__thumb">
							    <img src="../assets/images/320x120.jpg" alt="">
							  </div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="el-item text-center">
							  <div class="el-item__thumb">
							    <img src="../assets/images/320x120.jpg" alt="">
							  </div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="el-item text-center">
							  <div class="el-item__thumb">
							    <img src="../assets/images/320x120.jpg" alt="">
							  </div>
							</div>
						</div>
		      </div>
		    </div>
		  </div>
		</section>


		<?php include('../assets/inc/footer.php') ?>

	</div>

	<?php include('../assets/inc/footer_script.php') ?>
  </body>
</html>
