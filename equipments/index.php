<?php
include_once(__DIR__."/../init.php");
$page_curent = 'equipments';
?>

<!DOCTYPE html>
<html lang="ja">
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="/<?= $dir ?>assets/images/favicon.png">

    <title><?= $init['meta']['equipments']['title'] ?></title>
		<meta name="description" content="<?= $init['meta']['equipments']['description'] ?>">
		<meta name="keywords" content="<?= $init['meta']['equipments']['keyword'] ?>">
		<meta property="og:title" content="<?= $init['meta']['equipments']['title'] ?>">
		<meta property="og:description" content="<?= $init['meta']['equipments']['description'] ?>">
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
							"@id": "<?= $init['clinic']['url'] ?>equipments/",
							"name": "<?= $init['meta']['equipments']['title'] ?>"
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
						<img src="../assets/images/equipments/header-bg.png" alt="">
					</div>
				</div>
				<div class="page-header__meta">
					<div class="container text-center">
						<div class="page-header__title">設備紹介</div>
						<div class="page-header__sub">EQUIPMENTS</div>
					</div>
				</div>

		</section>

		<div class="equipments__wrap">
			<div class="container">
				<nav aria-label="breadcrumb">
				  <ol class="breadcrumb">
				    <li class="breadcrumb-item"><a href="#">Top</a></li>
				    <li class="breadcrumb-item active" aria-current="page">設備紹介</li>
				  </ol>
				</nav>
			</div>

			<section class="equipments-intro">
			  <div class="container">
			  	<header class="c-header text-center">
			  		<h2 class="c-header__title">Equipments</h2>
			  		<div class="c-header__sub">設備紹介</div>
			  	</header>
			  	<div class="c-content">
			    	<div class="row g-4 g-md-5">

			    			<div class="col-md-6 wow fadeInUp">
			    				<div class="el-item">
			    				  <div class="el-item__thumb">
			    				    <div class="dnfix__thumb">
			    				      <img src="../assets/images/thumb.jpg" alt="">
			    				    </div>
			    				  </div>
			    				  <div class="el-item__meta">
			    				    <h3 class="el-item__title">タイトルタイトルタイトルタイトル</h3>
			    				    <div class="el-item__excerpt">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</div>
			    				  </div>
			    				</div>
			    			</div>

			    			<div class="col-md-6 wow fadeInUp">
			    				<div class="el-item">
			    				  <div class="el-item__thumb">
			    				    <div class="dnfix__thumb">
			    				      <img src="../assets/images/thumb.jpg" alt="">
			    				    </div>
			    				  </div>
			    				  <div class="el-item__meta">
			    				    <h3 class="el-item__title">タイトルタイトルタイトルタイトル</h3>
			    				    <div class="el-item__excerpt">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</div>
			    				  </div>
			    				</div>
			    			</div>

			    			<div class="col-md-6 wow fadeInUp">
			    				<div class="el-item">
			    				  <div class="el-item__thumb">
			    				    <div class="dnfix__thumb">
			    				      <img src="../assets/images/thumb.jpg" alt="">
			    				    </div>
			    				  </div>
			    				  <div class="el-item__meta">
			    				    <h3 class="el-item__title">タイトルタイトルタイトルタイトル</h3>
			    				    <div class="el-item__excerpt">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</div>
			    				  </div>
			    				</div>
			    			</div>

			    			<div class="col-md-6 wow fadeInUp">
			    				<div class="el-item">
			    				  <div class="el-item__thumb">
			    				    <div class="dnfix__thumb">
			    				      <img src="../assets/images/thumb.jpg" alt="">
			    				    </div>
			    				  </div>
			    				  <div class="el-item__meta">
			    				    <h3 class="el-item__title">タイトルタイトルタイトルタイトル</h3>
			    				    <div class="el-item__excerpt">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</div>
			    				  </div>
			    				</div>
			    			</div>

			    			<div class="col-md-6 wow fadeInUp">
			    				<div class="el-item">
			    				  <div class="el-item__thumb">
			    				    <div class="dnfix__thumb">
			    				      <img src="../assets/images/thumb.jpg" alt="">
			    				    </div>
			    				  </div>
			    				  <div class="el-item__meta">
			    				    <h3 class="el-item__title">タイトルタイトルタイトルタイトル</h3>
			    				    <div class="el-item__excerpt">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</div>
			    				  </div>
			    				</div>
			    			</div>

			    			<div class="col-md-6 wow fadeInUp">
			    				<div class="el-item">
			    				  <div class="el-item__thumb">
			    				    <div class="dnfix__thumb">
			    				      <img src="../assets/images/thumb.jpg" alt="">
			    				    </div>
			    				  </div>
			    				  <div class="el-item__meta">
			    				    <h3 class="el-item__title">タイトルタイトルタイトルタイトル</h3>
			    				    <div class="el-item__excerpt">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</div>
			    				  </div>
			    				</div>
			    			</div>

			    	</div>
			    </div>
			  </div>
			</section>
		</div>

		<section class="equipments-emergency">
		  <div class="container">
		  	<header class="c-header text-center">
		  		<h2 class="c-header__title">Emergency response</h2>
		  		<div class="c-header__sub">緊急対応設備</div>
		  	</header>
		  	<div class="c-content">
		      <div class="row g-4 g-md-5 g-xl-60 justify-content-center">

		          <div class="col-md-6 col-lg-4 wow fadeInUp">
		    				<div class="el-item">
		    				  <div class="el-item__thumb">
		    				    <div class="dnfix__thumb">
		    				      <img src="../assets/images/thumb.jpg" alt="">
		    				    </div>
		    				  </div>
		    				  <div class="el-item__meta">
		    				    <h3 class="el-item__title">タイトルタイトルタイトル</h3>
		    				    <div class="el-item__excerpt text__truncate -n3">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</div>
		    				  </div>
		    				</div>
		    			</div>
		    			<div class="col-md-6 col-lg-4 wow fadeInUp">
		    				<div class="el-item">
		    				  <div class="el-item__thumb">
		    				    <div class="dnfix__thumb">
		    				      <img src="../assets/images/thumb.jpg" alt="">
		    				    </div>
		    				  </div>
		    				  <div class="el-item__meta">
		    				    <h3 class="el-item__title">タイトルタイトルタイトル</h3>
		    				    <div class="el-item__excerpt text__truncate -n3">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</div>
		    				  </div>
		    				</div>
		    			</div>
		    			<div class="col-md-6 col-lg-4 wow fadeInUp">
		    				<div class="el-item">
		    				  <div class="el-item__thumb">
		    				    <div class="dnfix__thumb">
		    				      <img src="../assets/images/thumb.jpg" alt="">
		    				    </div>
		    				  </div>
		    				  <div class="el-item__meta">
		    				    <h3 class="el-item__title">タイトルタイトルタイトル</h3>
		    				    <div class="el-item__excerpt text__truncate -n3">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</div>
		    				  </div>
		    				</div>
		    			</div>

		      </div>
		    </div>
		  </div>
		</section>

		<section class="equipments-foreign">
		  <div class="container">

			  	<div class="el-box">
			  		<div class="el-box__header text-center wow fadeInUp">
				  		<h2 class="el-box__title">外来環</h2>
				  	</div>

			      <div class="el-item">
			      	<div class="row g-4 g-md-5">
			      		<div class="col-lg-6 order-lg-2 wow fadeInRight">
			      			<div class="el-item__thumb">
			  				    <div class="dnfix__thumb">
			  				      <img src="../assets/images/thumb.jpg" alt="">
			  				    </div>
			  				  </div>
			      		</div>
			      		<div class="col-lg-6 wow fadeInLeft">
			      			<div class="el-item__meta">
			  				    <h3 class="el-item__title">タイトルタイトルタイトルタイトル</h3>
			  				    <div class="el-item__excerpt">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</div>
			  				  </div>
			      		</div>
			      	</div>
	  				</div>
  				</div>

  				<div class="el-box">
  					<div class="el-box__header text-center wow fadeInUp">
				  		<h2 class="el-box__title">か強診</h2>
				  	</div>

	  				<div class="el-item">
			      	<div class="row g-4 g-lg-5">
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
			  				    <div class="el-item__excerpt">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</div>
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
