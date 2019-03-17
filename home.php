<!DOCTYPE html>
<html lang="ja">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
  <meta charset="UTF-8">
  <meta name="description" content="メタディスクリプション系です">
  <meta name="viewport" content="width=device-width">
  <!--css-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/static/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/static/css/custom.css">
  <style>
 /**
  * Original CSS
  */
.oe-header-area{
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
  margin-left: auto;
  margin-right: auto;
  position: relative;
  width: 88.28125%;
  max-width: 1130px;
  height: 100%; 
}

.navbar {
  margin-bottom: 0px;
}
.navbar-brand {
  background: url("<?php echo get_template_directory_uri(); ?>/static/img/corpo-image.png") no-repeat left center;
  background-size: contain;
  height: 50px;
  width: 250px;
}
.top-image-area {
  overflow: hidden;
  position: relative;
  width: 100%;
  height: auto;
  min-height: 445px;
}
.top-footer-area {
  overflow: hidden;
  position: relative;
  width: 100%;
  height: auto;
  min-height: 445px;
}
.top01 {
  background: url("<?php echo get_template_directory_uri(); ?>/static/img/top01.jpg") no-repeat left center;
  background-size: cover
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
.top02{
  background: #696969;
}
.top02-left {
}
.top03{
  background: #ffffffff;
}
.top04{
  background: #008080;
}
.top05{
  background: #ffffffff;
}
.top06{
  background: url("<?php echo get_template_directory_uri(); ?>/static/img/meeting.jpg") no-repeat center center;
  background-size: cover
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
.top07{
  background: #000000;
}

.top-item-catch-black {
  color: #000000;
  font-size: 40px;
  text-shadow: 0px 0px 0px #888888;
}
.top-item-description {
}
.top-item-catch-white {
  color: #ffffff;
  font-size: 40px;
  text-shadow: 0px 0px 0px #888888;
}
.top-item-description-white {
  color: #ffffff;
  font-size: 16px;
}

.oe-button-teal {
    color:#ffffff;
    background: #008080;
    padding: 20px 20px;
    padding: 0 60px;
    height: 70px;
    line-height: 70px;
    font-size: 24px;
    border-radius: 70px;
    margin: 40px 0 20px 0;
}
.oe-button-black {
    color:#ffffff;
    background: #000000;
    padding: 20px 20px;
    padding: 0 60px;
    height: 70px;
    line-height: 70px;
    font-size: 24px;
    border-radius: 70px;
    margin: 40px 0 20px 0;
}
a.expand-link{
  color:#ffffff;
  text-decoration:none;
}
a.expand-link:hover{
  animation: big 0.1s;
  animation-fill-mode: forwards;
}
@keyframes big 
{
  0% {transform: scale(1); }
  100% {transform: scale(1.1);}
}
a.expand-link:active
{
  animation: small 0.1s;
  animation-fill-mode: forwards;
}

@keyframes small 
{
  100% {transform: scale(0.9);}
}

p.icon-check-box-white{
  padding-left:30px;
  background: url("<?php echo get_template_directory_uri(); ?>/static/img/icon-checkbox.svg") no-repeat left center;
}
p.icon-file-white{
  padding-left:30px;
  background: url("<?php echo get_template_directory_uri(); ?>/static/img/icon-file.svg") no-repeat left center;
}

  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light rounded border-bottom">
    <div class= "container">
      <a href="./index.html" class="navbar-brand"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#folding-target" aria-controls="folding-target" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="folding-target">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item"><a class="nav-link mr-3" href="https://one-ap-engineer.com/">HOME</a></li>
          <li class="nav-item dropdown mr-1">
            <a class="nav-link dropdown-toggle" href="" id="dropdown-service" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SERVICE</a>
            <div class="dropdown-menu" aria-labelledby="dropdown-service">
              <a class="dropdown-item" href="https://one-ap-engineer.com/web-work-consul">Webサイト制作・相談</a>
              <a class="dropdown-item" href="https://one-ap-engineer.com/theme-work">WPテーマ制作</a>
              <a class="dropdown-item" href="https://one-ap-engineer.com/blog">Engineer向けブログ</a>
            </div>
          </li>
          <li class="nav-item mr-1"><a class="nav-link" href="https://one-ap-engineer.com/about-me">ABOUT ME</a></li>
          <li class="nav-item mr-1"><a class="nav-link mr-2" href="https://one-ap-engineer.com/blog">BLOG</a></li>
          <li class="nav-item mr-1"><a class="nav-link mr-2" href="https://one-ap-engineer.com/news">NEWS</a></li>
          <li class="nav-item mr-1"><a class="nav-link" href="https://one-ap-engineer.com/contact">CONTACT</a></li>
        </ul>
        <form role="search" method="get" id="searchform" action="https://one-ap-engineer.com" class="searchform form-inline my-3 my-md-0">
          <input type="search" id="search-form-1" class="form-control" placeholder="Search" aria-label="Search" value="" name="s" />
        </form>
      </div>
    </div>
  </nav>
  <div class="top-image-area top01">
    <div class="row my-5 py-5">
    <div class="col-md-2"></div>
    <div class="col-md-8 mt-5 pt-5 mx-1">
      <div class="top-item-catch-black">
        <p>企業サイト制作は<br>OneEingineerに丸投げ!</p>
      </div>
      <div class="top-item-description">
        <p>OneEngineerでは、お客様の情報を世界中に発信するためのサポートをします。<br>
        ３つの料金プランから選択・サイトイメージのすり合わせだけで１ヶ月後にはサイトを公開できます。</p>
      </div>
      <div class="my-2 mb-5">
        <a class="oe-button-teal expand-link py-4" href="./index.html">料金プランをみる</a>
      </div>
    </div>
    <div class="col-md-2"></div>
    </div>
    </div>
    <div class="top-image-area top02">
      <div class="row my-5">
        <div class="col-md-2"></div>
        <div class="col-md-4 top02-left my-5"><img src="<?php echo get_template_directory_uri(); ?>/static/img/theme-img.png" class="img-fluid"></div>
        <div class="col-md-4 my-5 mx-1">
          <div class="top-item-catch-white">
            <p>ハイクオリティデザインWPテーマを使用</p>
          </div>
          <div class="top-item-description-white">
            <p>
              独自開発のハイクオリティデザインテーマを使用してサイト制作を行います。<br>
              ウェブサイトで最も重要な"見た目"にこだわり抜いたサイトで会社の情報を公開することができます。
            </p>
            <p>
              レスポンシブウェブデザインでスマホにも対応しており<br>
              PCとモバイルどちらのユーザに対しても崩れないデザインを表示します。
            </p>
            <p>
              ワードプレスで作成するため、納品後のブログ記事追加もユーザ様で行っていただけます。
            </p>
          </div>
        </div>
        <div class="col-md-2"></div>
      </div>
    </div>
    <div class="container top-image-area top03">
      <div class="row my-3 pt-5 top-item-catch-black">
         <div class="col-md-4"></div>
        <div class="col-md-4 top-item-catch-black"><p>丸投げプランでは<br>３つ決めるだけ！</p></div>
        <div class="col-md-4"></div>
      </div>
      <div class="row my-5 pb-5">
      <div class="col-lg-4">
        <div class="my-3">
          <svg version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="width: 128px; height: 128px; opacity: 1;" xml:space="preserve">
<style type="text/css">
	.st0{fill:#4B4B4B;}
</style>
<g>
	<path class="st0" d="M143.398,164.433l0.799,0.464l57.667,0.523l0.821-0.447c19.191-10.563,31.243-30.707,31.446-52.594
		c0.182-20.752-6.764-38.437-13.484-55.533c-4.598-11.688-9.334-23.756-11.815-36.8c-2.051-10.772-1.643-15.426-1.648-15.436
		L207.747,0l-4.593,0.716c-21.286,3.352-43.602,17.19-61.217,37.991c-18.507,21.837-28.817,47.616-29.043,72.59
		C112.696,133.174,124.389,153.528,143.398,164.433z M130.228,93.529c0.331-0.81,0.623-1.676,0.926-2.618
		c3.242-10.497,14.174-14.488,16.374,0.734c2.211,15.249,14.643,12.002,17.57-1.009c3.644-16.358,13.562-12.168,15.249-5.712
		c1.704,6.45-0.149,18.132,8.617,18.8c5.276,0.402,6.874-6.638,10.094-16.875c1.841-5.878,11.742-11.219,17.553,5.154
		c1.522,6.538,2.454,13.198,2.393,20.238c-0.133,15.277-8.232,29.81-21.143,38.013l-49.397-0.441
		c-12.768-8.446-20.591-23.106-20.453-38.388C128.072,105.553,128.816,99.555,130.228,93.529z" style="fill: rgb(75, 75, 75);"></path>
	<path class="st0" d="M186.185,182.108l-26.612-0.243c-8.182-0.066-16.049,3.225-21.744,9.113
		c-5.678,5.893-8.699,13.854-8.352,22.041l1.61,37.053l82.348,0.728l2.272-37.014c0.501-8.182-2.371-16.187-7.95-22.174
		C202.173,185.614,194.372,182.185,186.185,182.108z" style="fill: rgb(75, 75, 75);"></path>
	<path class="st0" d="M141.248,484.39c0.662,15.332,13.215,27.477,28.563,27.604l0.204,0.006
		c15.354,0.133,28.122-11.776,29.065-27.102l13.562-220.93l-80.976-0.711L141.248,484.39z" style="fill: rgb(75, 75, 75);"></path>
	<path class="st0" d="M426.831,189.236c-22.245-32.858-53.631-58.996-90.668-74.636c-24.616-10.387-51.768-16.142-80.166-16.142
		c-1.919,0-3.837,0-5.756,0.055c0.562,4.515,0.904,9.201,0.844,14.003c-0.281,25.851-13.436,49.789-34.771,63.957
		c1.35,1.13,2.652,2.316,3.837,3.617c0.336,0.336,0.678,0.732,0.904,1.069c6.715,4.746,11.065,12.647,11.065,21.512
		c0,0.562,0,1.13-0.055,1.637c0.562,3.44,0.789,6.941,0.562,10.497l-1.974,32.406l-7.002,113.531
		c2.542,1.185,4.967,2.652,7.338,4.234c10.784,7.282,19.306,17.553,24.445,29.638c3.385,8.071,5.249,16.936,5.249,26.248
		c0.055,3.787-0.562,7.679-1.577,11.969c-0.965,4.294-2.26,8.92-3.446,14.058c-1.075,4.796-1.582,9.427-1.582,13.832
		c-0.055,8.126,1.864,15.58,5.364,21.732c3.446,6.213,8.352,11.01,13.716,14.394c3.617,2.261,7.399,3.953,11.236,5.139
		c5.083,1.582,10.276,2.315,15.298,2.315c4.742,0,9.317-0.617,13.661-1.974c42.622-13.209,79.714-39.126,106.249-73.506
		c26.534-34.435,42.395-77.453,42.395-124.364C461.999,261.832,449.015,222.088,426.831,189.236z M282.361,215.881
		c-13.154,0-23.877-10.728-23.877-23.883c0-13.209,10.723-23.877,23.877-23.877c13.214,0,23.883,10.668,23.883,23.877
		C306.244,205.152,295.575,215.881,282.361,215.881z M341.075,206.057c11.743,0,21.28,9.488,21.28,21.225
		c0,11.743-9.537,21.286-21.28,21.286c-11.743,0-21.28-9.543-21.28-21.286C319.795,215.544,329.332,206.057,341.075,206.057z
		 M379.182,384.68c-2.486,5.811-6.55,10.778-11.688,14.223c-5.193,3.501-11.456,5.536-18.122,5.536
		c-4.46,0-8.694-0.904-12.586-2.542c-5.816-2.432-10.728-6.55-14.229-11.688c-3.501-5.193-5.53-11.401-5.53-18.122
		c0-4.405,0.904-8.694,2.542-12.586c2.481-5.761,6.544-10.728,11.737-14.229c5.138-3.445,11.407-5.53,18.066-5.474
		c4.46,0,8.749,0.904,12.592,2.541c5.816,2.426,10.723,6.544,14.224,11.682c3.501,5.138,5.535,11.406,5.535,18.066
		C381.723,376.548,380.818,380.837,379.182,384.68z M369.925,300.165c-9.147,0-16.6-7.448-16.6-16.649c0-9.146,7.454-16.6,16.6-16.6
		c9.201,0,16.649,7.454,16.649,16.6C386.574,292.717,379.126,300.165,369.925,300.165z" style="fill: rgb(75, 75, 75);"></path>
	<path class="st0" d="M129.544,175.685c-7.002-4.857-13.099-10.723-18.122-17.444c-0.171,0.171-0.397,0.397-0.568,0.562
		c-37.086,37.263-60.065,88.75-60.853,145.485v2.089c0,15.128,2.254,28.111,6.318,39.066c4.069,10.949,9.995,19.814,17.107,26.419
		c4.742,4.46,9.996,7.906,15.47,10.332c7.228,3.274,14.847,4.796,22.24,4.796c3.049,0,5.987-0.281,8.92-0.789l-5.193-119.341
		l-2.316-53.124c-0.507-12.757,4.234-25.349,13.099-34.495C126.887,177.946,128.188,176.76,129.544,175.685z" style="fill: rgb(75, 75, 75);"></path>
    </g>
          </svg>
        </div>
        <h2>コンセプトカラー</h2>
        <p>コンセプトカラーを１つ決めていただき、モノクロカラーにコンセプトカラーを適用してサイトを制作します。色に迷う場合は、サイトイメージをヒアリングしたのち、こちらから色の候補をご提案いたします。</p>
        <p><a class="btn btn-secondary" href="#" role="button">詳細へ &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
<div class="my-3">
<svg version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" style="width: 128px; height: 128px; opacity: 1;" xml:space="preserve">
<style type="text/css">

	.st0{fill:#4B4B4B;}

</style>
<g>
	<path class="st0" d="M422.002,6.017C315.33,20.736,213.205,220.861,162.939,313.486c-12.641,23.297,9.422,35.406,22.422,13.125
		c9.344-16.016,32.109-62.5,44.422-60.094c58.797,9.797,90.156-28.547,67.891-52.672c74.797,1.531,111.875-39.609,90.656-64.609
		c22.313,7.063,55.078,6.031,83.766-9.609C533.33,106.22,529.627-8.827,422.002,6.017z" style="fill: rgb(75, 75, 75);"></path>
	<path class="st0" d="M409.189,207.048c-9.719,9.141-27.031,22.141-41.547,27.813v207.062c-0.016,4.609-1.781,8.531-4.781,11.563
		c-3.031,3-6.953,4.766-11.547,4.781H65.361c-4.594-0.016-8.531-1.781-11.563-4.781c-3-3.031-4.766-6.953-4.781-11.563V155.986
		c0.016-4.594,1.781-8.531,4.781-11.563c3.031-3,6.969-4.766,11.563-4.781h160.391c11.234-17.125,22.734-33.578,34.484-49.016
		H65.361c-17.969-0.016-34.469,7.344-46.219,19.141c-11.781,11.75-19.156,28.25-19.141,46.219v285.937
		c-0.016,17.969,7.359,34.469,19.141,46.234c11.75,11.781,28.25,19.156,46.219,19.141h285.953
		c17.953,0.016,34.453-7.359,46.219-19.141c11.781-11.766,19.156-28.266,19.141-46.234V206.017
		C416.674,206.017,414.002,202.517,409.189,207.048z" style="fill: rgb(75, 75, 75);"></path>
</g>
</svg>
</div>
        <h2>ページ内容</h2>
        <p>「トップページ」「企業概要」「お問い合わせフォーム」「サービス概要」「ブログ」といった、コンテンツとして作成するページを決めていただきます。決めかねる場合はオーソドックスなパターンをご提案します。</p>
        <p><a class="btn btn-secondary" href="#" role="button">詳細へ &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
      <div class="my-3">
        <svg version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" style="width: 128px; height: 128px; opacity: 1;" xml:space="preserve">
          <style type="text/css">.st0{fill:#4B4B4B;}</style>
         <g>
           <path class="st0" d="M256,224.828c-34.344,0-62.156,28.078-62.156,62.719s27.813,62.719,62.156,62.719s62.156-28.078,62.156-62.719
           S290.344,224.828,256,224.828z" style="fill: rgb(75, 75, 75);"></path>
           <path class="st0" d="M478.766,135.75h-58.625c-13.078,0-24.938-7.75-30.297-19.781l-17.547-39.313
           c-5.359-12.016-17.234-19.766-30.313-19.766H170.016c-13.078,0-24.953,7.75-30.328,19.766l-17.531,39.313
           C116.797,128,104.938,135.75,91.859,135.75H33.234C14.875,135.75,0,150.766,0,169.266v252.328c0,18.5,14.875,33.516,33.234,33.516
           h244.25h201.281c18.344,0,33.234-15.016,33.234-33.516V169.266C512,150.766,497.109,135.75,478.766,135.75z M256,403.844
           c-63.688,0-115.297-52.063-115.297-116.297S192.313,171.234,256,171.234s115.297,52.078,115.297,116.313
           S319.688,403.844,256,403.844z" style="fill: rgb(75, 75, 75);"></path>
         </g>
       </svg>
       </div>
        <h2>イメージ画像</h2>
        <p>企業サイトには企業様ありのままのご様子を載せたい！そんな場合は実際に撮影した写真や、製品画像を掲載いただくのが一番の方法です。いただいた画像を必要に応じて加工し、トップページやコンテンツページに適用します。</p>
        <p><a class="btn btn-secondary" href="#" role="button">詳細へ &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      </div>
      
    </div>
        <div class="top-image-area top04">
              <div class="row my-5 py-5">
        <div class="col-md-2"></div>
        <div class="col-md-4 top02-left my-5 mx-1">
          <div class="top-item-catch-white">
            <p>徹底的に拘るあなたに</p>
          </div>
          <div class="top-item-description-white">
            <p>
              ページ構成やボタンの動きなど、細かな部分まで自分で決めたいあなたのためにフルオーダーメイドプランをご用意しております。
            </p>
            <p>複数のサンプルサイトから成果物イメージのすりあわせを行い、あなたの希望通りのサイトを仕上げます。</p>
            <p>
              イメージすり合わせのために、100を超えるヒアリング項目にお答えいただき、それをもとにイメージ作成を行います。
            </p>
            <p>
              右記の項目が当てはまるあなたに最適なプランとなります。
            </p>
          </div>
        </div>
        <div class="col-md-4 my-5 mx-2">
          <div class="top-item-description-white">
            <p class="icon-check-box-white">コンテンツごとに異なるデザインにしたい</p>
            <p class="icon-check-box-white">ボタンの色や形、動きをページごとに変えたい</p>
            <p class="icon-check-box-white">作成したいサイトの構成が頭に浮かんでいる</p>
            <p class="icon-check-box-white">在席管理や掲示板など特殊な機能がほしい</p>
            <p class="icon-check-box-white">商品の販売ページを作成したい</p>
            <p class="icon-check-box-white">サイト掲載したい画像が大量にある</p>
            <p class="icon-check-box-white">別途用意したデザインをサイト化したい</p>
            <p class="icon-check-box-white">現在所有のサイトデザインに不満がある</p>
            <p class="icon-check-box-white">他社さんに依頼したが投げられてしまった</p>
            <p class="icon-check-box-white">動画やアニメーションを組み込みたい</p>
          </div>
        </div>
        <div class="col-md-2"></div>
      </div>
    </div>
    <div class="container top-image-area top05">
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
          <div class="top-item-catch-black">
            <p>選べる３プラン</p>
          </div>
  <p class="lead">ご要望に合わせて３つのプランを用意しました。お客様によるサーバ管理有無と、サイトデザインの自由度に応じてご選択ください。</p>
</div>

<div class="container">
  <div class="card-deck mb-3 text-center">
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">テーマのみプラン</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">¥29800<small class="text-muted">/ 初回</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>WPテーマのみのご購入</li>
          <li>サーバはご自身でご用意の必要あり</li>
          <li>バージョンアップ時は無料配布</li>
          <li>複数サイトで利用OK</li>
          <li>２次利用不可</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-primary" onclick="location.href='https://one-ap-engineer.com/plan-theme-only'">プラン詳細へ</button>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">丸投げプラン</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">¥98000 <small class="text-muted">/ 初回</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>ハイクオリティテンプレートを利用</li>
          <li>サーバ・ドメインの用意を代行</li>
          <li>サイト制作をゼロから実施</li>
          <li>https化・Basic認証設定も代行</li>
          <li>サーバ・ドメイン保守契約可能に</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-outline-primary" onclick="location.href='https://one-ap-engineer.com/plan-package'">プラン詳細へ</button>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">拘りプラン</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">¥298000 <small class="text-muted">/ 初回</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>フルオーダーメイドでサイト制作</li>
          <li>サーバ・ドメインの用意を代行</li>
          <li>サイト制作をゼロから実施</li>
          <li>https化・Basic認証設定も代行</li>
          <li>サーバ・ドメイン保守契約可能に</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-primary" onclick="location.href='https://one-ap-engineer.com/plan-full-order-made'">プラン詳細へ</button>
      </div>
    </div>
  </div>
    </div>
    </div>
    <div class="top-image-area top06">
     <div class="row my-5 py-5">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <div class="text-center">
          <div class="top-item-catch-white">
            <p class="">不明点や制作依頼があれば<br>お気軽におたずねください</p>
          </div>
          <div class="pt-3">
            <a class="oe-button-black expand-link py-4" href="https://one-ap-engineer.com/contact">OneEngineerに連絡する</a>
          </div>
        </div>
      </div>
      <div class="col-md-2"></div>
    </div>
    </div>
    <div class="top-footer-area top07">
      <div class="container">
        <div class="row my-5 top-item-description-white text-left">
          <div class="col-md-4">
            <h3>ADRESS</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/static/img/gio-japan.svg" class="my-4">
            <p>日本のどこか</p>
          </div>
          <div class="col-md-4">
            <h3>MORE INFO</h3>
            <div class="my-4">
              <p class="icon-file-white"><a href="https://one-ap-engineer.com/about-me" class="text-light">サイト管理者について</a></p>
              <p class="icon-file-white"><a href="https://one-ap-engineer.com/terms-of-service" class="text-light">利用規約</a></p>
              <p class="icon-file-white"><a href="https://one-ap-engineer.com/about-personal-info" class="text-light">個人情報の取り扱いについて</a></p>
              <p class="icon-file-white"><a href="https://one-ap-engineer.com/law" class="text-light">特定商取引法にもとづく表記</a></p>
              <p class="icon-file-white"><a href="https://one-ap-engineer.com/contact" class="text-light">お問い合わせ</a></p>
            </div>
          </div>
          <div class="col-md-4">
            <h3>TWEET</h3>
            <a class="twitter-timeline" data-width="300" data-height="300" href="https://twitter.com/web_command?ref_src=twsrc%5Etfw">Tweets by web_command</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
          </div>
        </div>
        <div class="row my-2 top-item-description-white">
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <div class="text-center">
              <p class="">© 2019 OneEngineer</p>
            </div>
          </div>
          <div class="col-md-2"></div>
        </div>
      </div>
    </div>
    
  <!--javascript-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript" ></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js" type="text/javascript"></script>
  <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/static/js/bootstrap.min.js'></script>
  <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/static/js/custom.js'></script>
</body>
</html>

