<?php
include_once(__DIR__."/../init.php");
$page_curent = 'error';
?>
<!DOCTYPE html>
<html lang="ja"><?php include_once(__DIR__."/../init.php"); ?>
	<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title><?= $init['meta']['404']['title'] ?></title> 
		<meta name="description" content="<?= $init['meta']['404']['description'] ?>">
		<meta name="keywords" content="<?= $init['meta']['404']['keyword'] ?>">
		<meta property="og:title" content="<?= $init['meta']['404']['title'] ?>">
		<meta property="og:description" content="<?= $init['meta']['404']['description'] ?>">
		<meta property="og:url" content="<?= $init['clinic']['url'] ?>_error/404.html">
		<meta property="og:image" content="<?= $init['clinic']['url'] ?>images/common/og-image.jpg">
		<meta property="og:type" content="article"> 
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
			}
		</script>
		<?php include_once(ROOTPATH."assets/inc/header_link.php"); ?>
	</head>
	<body id="p-error">
		<div class="wrapper">
			<?php include_once(ROOTPATH."assets/inc/header.php"); ?>

			<section class="page-header">
				<div class="page-header__thumb">
					<div class="dnfix__thumb">
						<img src="../assets/images/staff/header-bg.png" alt="">
					</div>
				</div>
				<div class="page-header__meta">
					<div class="container text-center">
						<div class="page-header__title"><?= $init['meta']['404']['h1'] ?></div>
						<div class="page-header__sub"></div>
					</div>
				</div>
			</section>

			<div class="container">
				<nav aria-label="breadcrumb">
				  <ol class="breadcrumb">
				    <li class="breadcrumb-item"><a href="#">Top</a></li>
				    <li class="breadcrumb-item active" aria-current="page">404</li>
				  </ol>
				</nav>
			</div>

			<main class="main__contents pb-5 mb-5" id="main">
				<div class="container">
					<!-- mainvisual-->
					<header class="banner_sub mb-5 text-center">
						<div class="banner_sub__ttl">
							<p class="is-en animation fadeInLft">NOT FOUND</p>
							<p class="sub_ttl animation fadeInLft">ページが見つかりません</p>
						</div>
					</header>

					<section class="error text-center">
						<div class="section__ttl">
							<h2 class="error_ttl animation fadeInLft">お探しのページが見つかりませんでした</h2>
						</div>
						<p class="error-text mb-5">誠に申し訳ございませんが、アクセスいただいたURLが見つかりません。<br>移動もしくは削除された可能性があります。</p>

						<div><a class="btn btn-primary-mask" href="/<?= $dir; ?>">TOPページへ戻る</a></div>
					</section>
					<!-- end Content-->
				</div>
			</main>
			<?php include('../assets/inc/footer.php') ?>
		</div>
	<?php include('../assets/inc/footer_script.php') ?>
	</body>
</html>