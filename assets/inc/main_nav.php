<li class="menu-item <?= ($page_curent == 'index') ? 'active': ''; ?>"><a href="/<?= $dir ?>"><span>トップ</span></a></li>
<li class="menu-item menu-item-has-children <?= ($page_curent == 'services') ? 'active': ''; ?>">
	<a href="/<?= $dir ?>services/"><span>診療案内</span></a>
	<div class="sub-menu -full -col5">
		<div class="container">
  		<ul class="sub-menu__inner">
  			<li><a href="">むし歯</a></li>
          		<li><a href="">歯周病</a></li>
          		<li><a href="">根管治療</a></li>
          		<li><a href="">入れ歯</a></li>
          		<li><a href="">小児歯科</a></li>
          		<li><a href="">歯科口腔外科</a></li>
          		<li><a href="">予防クリーニング</a></li>
          		<li><a href="">インプラント</a></li>
          		<li><a href="">矯正治療</a></li>
          		<li><a href="">ホワイトニング</a></li>
  		</ul>
		</div>
  	</div>
</li>
<li class="menu-item  <?= ($page_curent == 'staff') ? 'active': ''; ?>"><a href="/<?= $dir ?>staff/">院長・<span class="fix-lg-br"></span>スタッフ</a></li>
<li class="menu-item <?= ($page_curent == 'facilities') ? 'active': ''; ?>"><a href="/<?= $dir ?>facilities/">院内紹介</a></li>
<li class="menu-item <?= ($page_curent == 'equipments') ? 'active': ''; ?>"><a href="/<?= $dir ?>equipments/">設備紹介</a></li>

<li class="menu-item <?= ($page_curent == 'access') ? 'active': ''; ?>"><a href="/<?= $dir ?>access/"><span>アクセス</span></a></li>
<li class="menu-item <?= ($page_curent == 'blog') ? 'active': ''; ?>"><a href="/<?= $dir ?>blog/"><span>お知らせ</span></a></li>
