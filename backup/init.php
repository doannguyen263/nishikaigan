<?php
// Noticeエラー非表示
error_reporting(E_ALL & ~E_NOTICE);

$init = [
	/**********************
		[1] meta情報
	***********************/
	'meta'         =>[
		'home'=>[
			'title'	        => 'home title',
			'description'	  => 'home description',
			'keyword'    	  => 'home keyword',
			'h1'	          => 'home h1 新宿区新宿の歯科・歯医者なら、ビスカこども歯科クリニック'
		],
		'404'=>[
			'title'	        => '404 title',
			'description'	  => '404 description',
			'keyword'    	  => '404 keyword',
			'h1'	          => '404 h1 新宿区新宿の歯科・歯医者なら、ビスカこども歯科クリニック'
		],
		'services'=>[
			'title'	        => '診療案内',
			'description'	  => 'services description',
			'keyword'    	  => 'services keyword',
			'h1'	          => 'services h1'
		],
		'staff'=>[
			'title'	        => '院長・スタッフ',
			'description'	  => 'staff description',
			'keyword'    	  => 'staff keyword',
			'h1'	          => 'staff h1'
		],
		'facilities'=>[
			'title'	        => '院内紹介',
			'description'	  => 'facilities description',
			'keyword'    	  => 'facilities keyword',
			'h1'	          => 'facilities h1'
		],
		'equipments'=>[
			'title'	        => '設備紹介',
			'description'	  => 'equipments description',
			'keyword'    	  => 'equipments keyword',
			'h1'	          => 'equipments h1'
		],
		'access'=>[
			'title'	        => 'アクセス',
			'description'	  => 'access description',
			'keyword'    	  => 'access keyword',
			'h1'	          => 'access h1'
		],
		'blog'=>[
			'title'	        => 'お知らせ',
			'description'	  => 'blog description',
			'keyword'   	  => 'blog keyword',
			'h1'	          => 'blog h1'
		],
		'blog/detail.html'=>[
			'title'	        => 'blog detail title',
			'description'	  => 'blog detail description',
			'keyword'   	  => 'blog detail keyword',
			'h1'	          => 'blog detail h1'
		],
		'blog/category.html'=>[
			'title'	        => 'blog category title',
			'description'	  => 'blog category description',
			'keyword'   	  => 'blog category keyword',
			'h1'	          => 'blog category h1'
		]
	],
	/**********************
		[2] Google Analytics Code
	***********************/
	'GoogleCode'     => 'UA-000000000-00', // UA-000000000-00
	/**********************
		[3] 医院情報
		※開院日の「opendate」に日付を入れるとTOPの開院日エリアが自動で記入日の1か月後に非表示になります
		※最終内覧会日の「predate_end」に日付を入れるとTOPの内覧会エリアが記入日以降に非表示になります
	***********************/
	'clinic'            => [
		'clinic_name'	  => 'ビスカ歯科クリニック',
		'tel_num'         => '03-5292-5151',
		'fax_num'         => '00-0000-0000',
		'line'         	  => '#',
		'instagram'       => '#',
		'twitter'         => '#',
		'postal'          => '160-0022',
		'address'         => '東京都新宿区新宿６丁目２４−２０',
		'address_2'       => 'KDX新宿六丁目ビル10階',
		'address_full'    => '東京都新宿区新宿６丁目２４−２０KDX新宿六丁目ビル10階',
		'url'             => 'https://arc.visca-japan.xyz/',
		'webform'         => '',
		'opendate'        => '3000/12/16', // 開院日 YYYY/MM/DD
		'predate_end'     => '3000/12/16',  // 最終内覧会日 YYYY/MM/DD
		'copyright'     => 'Copyright © 2022 VISCA.All Rights Reserved.'
	],
	/**********************
		[4] アカウント情報
	***********************/
	'color'       => 'blue', // blue. beige, green
	'testdir'     => 'nishikaigan'
];


//////////////////////////////////////////////////
// ※※※　以下は触らないでください　※※※
//////////////////////////////////////////////////
$page_curent = 'index';
// rootのパス指定
if(__DIR__ == $_SERVER['DOCUMENT_ROOT']):
	// 公開時
	define('ROOTPATH',$_SERVER['DOCUMENT_ROOT'].'/');
else:
	// テストディレクトリ
	define('ROOTPATH',__DIR__.'/');
endif;

// 開院後の処理
// 現在日時を YYYY/MM/DD の書式の文字列で取得する
$date = date('Y/m/d');
$oneMonthAfter = date('Y/m/d', strtotime($init['clinic']['opendate']." +1 month"));
$openFlg = ($date <= $oneMonthAfter)? true : false;
$preFlg = ($date <= $init['clinic']['predate_end'])? true : false;

$dir = '';
// テストDirか判断
if($init['testdir']):
	$dir = $init['testdir'];
endif;
