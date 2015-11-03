<html lang="zh-CN">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <title>Auction 全国最大的拍卖咨询平台 | auction中国</title>
    <meta name="description" content="1000auction,中国最大的拍卖资讯平台" />
    <meta name="keywords" content="1000auction,最全的拍卖资讯平台">

    <meta name="HandheldFriendly" content="True" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="shortcut icon" href="/favicon.ico">

    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://cdn.bootcss.com/font-awesome/4.3.0/css/font-awesome.min.css">
<!--     <link rel="stylesheet" href="http://cdn.bootcss.com/highlight.js/8.5/styles/monokai_sublime.min.css">
 -->    <link rel="stylesheet" type="text/css" href="/public/css/main.css" />

    <script>
    /*====================================================
      THEME SETTINGS & GLOBAL VARIABLES
    ====================================================*/

    //  1. Sidebar Position
    var sidebar_left = false; // Set true or flase for positioning sidebar on left

    //  2. Recent Post count
    var recent_post_count = 3;

    </script>

    <link rel="canonical" href="http://www.1000auction.com/" />
    <link rel="next" href="http://www.1000auction.com/page/2/" />
    <meta name="generator" content="Auction 0.5" />
</head>
<body class="home-template">

    <!-- start header -->
<header class="main-header"  style="background-image: url(http://www.1000auction.com/public/img/background.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                    <!-- start logo -->
                    <a class="branding" href="http://www.1000auction.com" title="1000auction"><img src="http://static.ghostchina.com/image/b/46/4f5566c1f7bc28b3f7ac1fada8abe.png" alt="Ghost"></a>
                    <!-- end logo -->
                    <h2 style="color:#FFF">1000Auction,中国最全的拍卖资讯平台</h2>

                    <img src="http://static.ghostchina.com/image/6/d1/fcb3879e14429d75833a461572e64.jpg"  class="hide">
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->
  <?php $uri_string = $this->uri->uri_string();?>
    <!-- start navigation -->
    <nav class="main-navigation">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="navbar-header">
                        <span class="nav-toggle-button collapsed" data-toggle="collapse" data-target="#main-menu">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-bars"></i>
                        </span>
                    </div>
                    <div class="collapse navbar-collapse" id="main-menu">
                        <ul class="menu">
        <li <?php if ($uri_string == '' || count(explode('home', $uri_string)) > 1) {
    echo 'class="nav-current"';
}
?>role=""><a href="/home/index">首页</a></li>
        <li  role="presentation"><a href="">房产拍卖</a></li>
        <li <?php if (count(explode('website', $uri_string)) > 1) {
    echo 'class="nav-current"';
}
?>role="presentation"><a href="/website/index">拍卖网站</a></li>
        <li  role="presentation"><a href="">全国法院</a></li>
        <li  role="presentation"><a href="/about/">关于</a></li>
</ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- end navigation -->