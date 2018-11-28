<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>HALCINEMA公式サイトトップページ</title>

<link type="text/css" rel="stylesheet" href="{{ asset('css/reset.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css">
<link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}">


<meta charset="utf-8">
<meta name="description" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="">
<link rel="shortcut icon" href="">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/js/swiper.min.js"></script>
</head>
<body>

<div class="top">

  <header>
    <div class="logo"><h1><a href="CustomerTop.html"><img alt="HALCINEMA" src="{{ asset('img/logo.png') }}"></a></h1></div>
    <div class="login-member">
      <div class="login"><img src="{{ asset('img/login-icon.png') }}"><a href="">ログイン</a></div>
      <div class="newmember"><img src="{{ asset('img/new-member-icon.png') }}"><a href ="">新規登録</a></div>
    </div>
  </header>

  <nav class="container">
    <ul>
      <li class="menu"><a href="/customer/schedule">上映中作品<br><span class="color">Showing</span></a></li>
      <li>│</li>
      <li class="menu"><a href="">上映予定作品<br><span class="color">Schedule</span></a></li>
      <li>│</li>
      <li class="menu"><a href="">お知らせ<br><span class="color">News</span></a></li>
      <li>│</li>
      <li class="menu"><a href="">料金<br><span class="color">Price</span></a></li>
      <li>│</li>
      <li class="menu"><a href="">アクセス<br><span class="color">Access</span></a></li>
      <li>│</li>
      <li class="menu"><a href="">劇場案内<br><span class="color">Teater infomation</span></a></li>
      <li>│</li>
      <li class="menu"><a href="">マイページ<br><span class="color">My page</span></a></li>
    </ul>
  </nav>

  <div class="swiper-container">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide"><img src="{{ asset('img/slide-img01.jpg') }}"></div>
          <div class="swiper-slide"><img src="{{ asset('img/slide-img02.jpg') }}"></div>
          <div class="swiper-slide"><img src="{{ asset('img/slide-img03.jpg') }}"></div>
      </div>
      <!-- If we need pagination -->
      <div class="swiper-pagination"></div>

      <!-- If we need navigation buttons -->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
  </div>

  <div class="movie">
<!--日付５日分入れて-->
    <div class="movie-day">
      <div class="day-box">
        <p><a href="">10/<span class="bold">11</span>(水)<br><span class="red">レディースデイ</span></a></p>
        <p><a href="">10/<span class="bold">11</span></a></p>
        <p><a href="">10/<span class="bold">11</span></a></p>
        <p><a href="">10/<span class="bold">11</span></a></p>
        <p><a href="">10/<span class="bold">11</span></a></p>
      </div>
    </div>

    <div class="cancel">
      <div class="about-cancel">
       <h2>キャンセルについて</h2>
        <p>予約キャンセル、または変更は<span class="red">お電話対応のみ</span>となっております</p>
        <p class="cancel-tel">TEL:99-9999-9999</p>
      </div>

      <div class="about-price">
        <p>当日キャンセルは<span class="red">料金の30%</span>をいただいております。</p>
        <p>キャンセル料金が発生した場合、会員登録時に登録したクレジットカードから引き落とさせていただきます。</p>
        <p class="sub-text">※予約は最大６席までとなっております。それ以上ご予約されたいお客様はお手数ですがお電話にてご相談ください。</p>
      </div>
    </div>

    <div class="about-sheet">
      <div class="sheet-left"><img src="{{ asset('img/vacancy.png') }}" alt="空席あり"></div><div class="sheet-right"><p>…空席あり</p></div>
      <div class="sheet-left"><img src="{{ asset('img/few.png') }}" alt="残りわずか"></div><div class="sheet-right"><p>…残りわずか</p></div>
      <div class="sheet-left"><img src="{{ asset('img/sold-out.png') }}" alt="完売"></div><div class="sheet-right"><p>…完売</p></div>
      <div class="sheet-left"><img src="{{ asset('img/end.png') }}" alt="販売終了"></div><div class="sheet-right"><p>…販売終了、販売前</p></div>
    </div>


    <div class="movie-info">
     <div class="movie-left"><img src="{{ asset('img/img.png') }}" alt=""></div>
     <div class="movie-right">
     	<h2><a href="">ダミーダミーダミー</a></h2>

      <div class="movie-right-text">
        <div class="movie-box">
      		<p>シアター3</p>
          <div class="details">
            <div class="sheet-status"><img src="{{ asset('img/vacancy.png') }}"></div>
            <div class="movie-time"><a href="/customer/schedule/1"><span class="bold">12:00</span><br>~14:00</a></div>
          </div>
      	</div>

        <div class="movie-box">
      		<p>シアター3</p>
          <div class="details">
            <div class="sheet-status"></div>
            <div class="movie-time"><a href="/customer/schedule/2"><span class="bold">12:00</span><br>~14:00</a></div>
          </div>
      	</div>

      </div>

      </div>
    </div>



  </div>


  <div class="news">
    <h2>お知らせ</h2>
    <h2><span class="color">News</span></h2>

    <div class="news-details">
      <div class="news-top">
        <div class="news-top-img"><a href=""><img src="{{ asset('img/slide-img01.jpg') }}"></a></div>
        <div class="topics-img"><img src="{{ asset('img/news-topics.png') }}"></div>
        <div class="news-text">
          <p>日付<span class="news-jenre">ジャンル</span></p>
          <h3><a href="">ニュースタイトル</a></h3>
          <p>ダミーダミーダミー</p>
        </div>
      </div>

      <div class="news-sub">

        <div class="news-box">
          <div class="news-img"><img src="{{ asset('img/news-img02.jpg') }}"></div>
          <div class="news-sub-text">
            <p>日付<span class="news-jenre">ジャンル</span></p>
            <h3><a href="">ニュースタイトル</a></h3>
            <p>ダミーダミーダミー</p>
          </div>
        </div>

        <div class="news-box">
          <div class="news-img"><img src="{{ asset('img/news-img02.jpg') }}"></div>
          <div class="news-sub-text">
            <p>日付<span class="news-jenre">ジャンル</span></p>
            <h3><a href="">ニュースタイトル</a></h3>
            <p>ダミーダミーダミー</p>
          </div>
        </div>

        <div class="news-box">
          <div class="news-img"><img src="{{ asset('img/news-img02.jpg') }}"></div>
          <div class="news-sub-text">
            <p>日付<span class="news-jenre">ジャンル</span></p>
            <h3><a href="">ニュースタイトル</a></h3>
            <p>ダミーダミーダミー</p>
          </div>
        </div>



      </div>
    </div>

    <a href="" class="new-news">最新ニュースをもっと見る</a>
  </div>

  <div class="footer">
    <div class="footer-logo"><img alt="HALCINEMA" src="{{ asset('img/logo.png') }}"></div>
    <div class="company">
      <p>TEL:</p>
      <p>住所:</p>
    </div>
    <div class="info">
      <a href="" class="cancel-button">キャンセルはお電話で</a><br>
      <a href="" class="info-button">ご意見・お問い合せ</a>
      <p class="site-map"><a href="">サイトマップ　│</a><a href="">　著作権について　│</a><a href="">　個人情報保護方針</a></p>
    </div>
  </div>

</div>
<script src="{{ asset('js/slide.js') }}"></script>
</body>
</html>
