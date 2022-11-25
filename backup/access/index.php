<?php
include_once(__DIR__."/../init.php");
$page_curent = 'access';
?>

<!DOCTYPE html>
<html lang="ja">
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="/<?= $dir ?>/assets/images/favicon.png">

    <title><?= $init['meta']['access']['title'] ?></title>
		<meta name="description" content="<?= $init['meta']['access']['description'] ?>">
		<meta name="keywords" content="<?= $init['meta']['access']['keyword'] ?>">
		<meta property="og:title" content="<?= $init['meta']['access']['title'] ?>">
		<meta property="og:description" content="<?= $init['meta']['access']['description'] ?>">
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
							"@id": "<?= $init['clinic']['url'] ?>access/",
							"name": "<?= $init['meta']['access']['title'] ?>"
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
						<img src="../assets/images/access/header-bg.png" alt="">
					</div>
				</div>
				<div class="page-header__meta">
					<div class="container text-center">
						<div class="page-header__title">アクセス</div>
						<div class="page-header__sub">ACCESS</div>
					</div>
				</div>

		</section>

		<div class="access__wrap">

			<div class="container">
				<nav aria-label="breadcrumb">
				  <ol class="breadcrumb">
				    <li class="breadcrumb-item"><a href="#">Top</a></li>
				    <li class="breadcrumb-item active" aria-current="page">アクセス</li>
				  </ol>
				</nav>
			</div>
			<section class="access-map">
			  <div class="container">
			  	<header class="c-header text-center wow fadeInUp">
			  		<h2 class="c-header__title">Map</h2>
			  		<div class="c-header__sub">アクセスマップ</div>
			  	</header>
			  	<div class="c-content">
			  		<div class="text-center mb-5 wow fadeInUp">
			  			<img src="../assets/images/access/access-map.jpg" alt="">
			  		</div>
			  		<div class="text-center wow fadeInUp">
			      	<a href="" class="btn btn-primary-mask"><span>Google Mapはこちら</span></a>
			      </div>
			    </div>

			    <div class="el-box">
			    	<div class="el-box__header text-center wow fadeInUp">
			    		<h3 class="el-box__title">交通情報</h3>
			    	</div>

			    	<div class="row gx-4 gy-5 g-md-5 g-xl-80 justify-content-center">
			    		<div class="col-md-6 col-lg-4 wow fadeInUp">
			    			<div class="el-item">
			    			  <div class="el-item__thumb">
			    			    <div class="dnfix__thumb">
			    			      <img src="../assets/images/access/thumb.jpg" alt="">
			    			    </div>
			    			  </div>
			    			  <div class="el-item__meta">
			    			    <h3 class="el-item__title">タイトルタイトルタイトル</h3>
			    			    <div class="el-item__excerpt text__truncate -n3">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</div>
			    			  </div>
			    			</div>
			    		</div>
			    		<div class="col-md-6 col-lg-4 wow fadeInUp">
			    			<div class="el-item">
			    			  <div class="el-item__thumb">
			    			    <div class="dnfix__thumb">
			    			      <img src="../assets/images/access/thumb.jpg" alt="">
			    			    </div>
			    			  </div>
			    			  <div class="el-item__meta">
			    			    <h3 class="el-item__title">タイトルタイトルタイトル</h3>
			    			    <div class="el-item__excerpt text__truncate -n3">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</div>
			    			  </div>
			    			</div>
			    		</div>
			    		<div class="col-md-6 col-lg-4 wow fadeInUp">
			    			<div class="el-item">
			    			  <div class="el-item__thumb">
			    			    <div class="dnfix__thumb">
			    			      <img src="../assets/images/access/thumb.jpg" alt="">
			    			    </div>
			    			  </div>
			    			  <div class="el-item__meta">
			    			    <h3 class="el-item__title">タイトルタイトルタイトル</h3>
			    			    <div class="el-item__excerpt text__truncate -n3">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</div>
			    			  </div>
			    			</div>
			    		</div>
			    	</div>


			    </div>
			  </div>
			</section>

		</div>

		<section class="access-guide">
			  <div class="container">
			  	<div class="sc__header text-center wow fadeInUp">
			  		<h2 class="sc__title">アクセス案内</h2>
			  	</div>

			  	<div class="c-content">
			    	<div class="row gx-4 gy-5 g-md-5 g-xl-80 mb-5 justify-content-center wow fadeInUp">
			    		<div class="col-md-6 col-lg-4 el-col">
			    			<div class="el-item">
			    			  <div class="el-item__thumb">
			    			  	<div class="el-item__number">1</div>
			    			    <div class="dnfix__thumb">
			    			      <img src="../assets/images/access/thumb.jpg" alt="">
			    			    </div>
			    			  </div>
			    			  <div class="el-item__meta">
			    			    <h3 class="el-item__title">タイトルタイトルタイトル</h3>
			    			    <div class="el-item__excerpt text__truncate -n3">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</div>
			    			  </div>
			    			</div>
			    		</div>
			    		<div class="col-md-6 col-lg-4 el-col">
			    			<div class="el-item">

			    			  <div class="el-item__thumb">
			    			  	<div class="el-item__number">2</div>
			    			    <div class="dnfix__thumb">
			    			      <img src="../assets/images/access/thumb.jpg" alt="">
			    			    </div>
			    			  </div>
			    			  <div class="el-item__meta">
			    			    <h3 class="el-item__title">タイトルタイトルタイトル</h3>
			    			    <div class="el-item__excerpt text__truncate -n3">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</div>
			    			  </div>
			    			</div>
			    		</div>
			    		<div class="col-md-6 col-lg-4 el-col">
			    			<div class="el-item">

			    			  <div class="el-item__thumb">
			    			  	<div class="el-item__number">3</div>
			    			    <div class="dnfix__thumb">
			    			      <img src="../assets/images/access/thumb.jpg" alt="">
			    			    </div>
			    			  </div>
			    			  <div class="el-item__meta">
			    			    <h3 class="el-item__title">タイトルタイトルタイトル</h3>
			    			    <div class="el-item__excerpt text__truncate -n3">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</div>
			    			  </div>
			    			</div>
			    		</div>
			    	</div>

			    	<div class="row gx-4 gy-5 g-md-5 g-xl-80 justify-content-center wow fadeInUp">
			    		<div class="col-md-6 col-lg-4 el-col">
			    			<div class="el-item">

			    			  <div class="el-item__thumb">
			    			  	<div class="el-item__number">1</div>
			    			    <div class="dnfix__thumb">
			    			      <img src="../assets/images/access/thumb.jpg" alt="">
			    			    </div>
			    			  </div>
			    			  <div class="el-item__meta">
			    			    <h3 class="el-item__title">タイトルタイトルタイトル</h3>
			    			    <div class="el-item__excerpt text__truncate -n3">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</div>
			    			  </div>
			    			</div>
			    		</div>
			    		<div class="col-md-6 col-lg-4 el-col">
			    			<div class="el-item">

			    			  <div class="el-item__thumb">
			    			  	<div class="el-item__number">2</div>
			    			    <div class="dnfix__thumb">
			    			      <img src="../assets/images/access/thumb.jpg" alt="">
			    			    </div>
			    			  </div>
			    			  <div class="el-item__meta">
			    			    <h3 class="el-item__title">タイトルタイトルタイトル</h3>
			    			    <div class="el-item__excerpt text__truncate -n3">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</div>
			    			  </div>
			    			</div>
			    		</div>
			    		<div class="col-md-6 col-lg-4 el-col">
			    			<div class="el-item">

			    			  <div class="el-item__thumb">
			    			  	<div class="el-item__number">3</div>
			    			    <div class="dnfix__thumb">
			    			      <img src="../assets/images/access/thumb.jpg" alt="">
			    			    </div>
			    			  </div>
			    			  <div class="el-item__meta">
			    			    <h3 class="el-item__title">タイトルタイトルタイトル</h3>
			    			    <div class="el-item__excerpt text__truncate -n3">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</div>
			    			  </div>
			    			</div>
			    		</div>
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
		          	<div class="col-lg-6 wow animate__swing infinite" data-wow-duration="1.5s">
		          		<div class="el__thumb">
		          			<div class="dnfix__thumb">
		          				<img src="../assets/images/home-infomation-img-01.png" alt="">
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
											（むし歯、根管治療、歯周病、入れ歯、小児歯科、予防・クリーニング、<br>
											歯科口腔外科、インプラント、矯正歯科、小児矯正、審美治療、<br>
											ホワイトニング）</div>
											</li>
		              	</ul>
		            	</div>
		          	</div>
		          </div>
		        </div>
		      </div>

		      <div class="container-fluid">
		      	<div class="el-box wow fadeInUp">
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

		<?php include('../assets/inc/footer.php') ?>

	</div>

  <?php include('../assets/inc/footer_script.php') ?>


  </body>
</html>
