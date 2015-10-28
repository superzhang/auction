<?php
defined('BASEPATH') or exit('No direct script access allowed');
?><!DOCTYPE html>
<!DOCTYPE html>
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

    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://cdn.bootcss.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://cdn.bootcss.com/highlight.js/8.5/styles/monokai_sublime.min.css">
    <link rel="stylesheet" type="text/css" href="http://www.ghostchina.com/assets/css/screen.css?v=518242e48b" />

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
    <link rel="next" href="http://www.ghostchina.com/page/2/" />
    <meta name="generator" content="Ghost 0.6" />
    <link rel="alternate" type="application/rss+xml" title="Ghost" href="http://www.ghostchina.com/rss/" />
</head>
<body class="home-template">

    <!-- start header -->
<header class="main-header"  style="background-image: url(http://static.ghostchina.com/image/6/d1/fcb3879e14429d75833a461572e64.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                    <!-- start logo -->
                    <a class="branding" href="http://www.ghostchina.com" title="Ghost"><img src="http://static.ghostchina.com/image/b/46/4f5566c1f7bc28b3f7ac1fada8abe.png" alt="Ghost"></a>
                    <!-- end logo -->
                    <h2 style="color:#FFF">1000Auction,中国最全的拍卖资讯平台</h2>

                    <img src="http://static.ghostchina.com/image/6/d1/fcb3879e14429d75833a461572e64.jpg"  class="hide">
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->

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
        <li class="nav-current" role=""><a href='home'>首页</a></li>
        <li  role="presentation"><a href="/fang">房产拍卖</a></li>
        <li  role="presentation"><a href="/website">拍卖网站</a></li>
        <li  role="presentation"><a href="/lawcourt">全国法院</a></li>
        <li  role="presentation"><a href="/about">关于</a></li>
</ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- end navigation -->


    <!-- start site's main content area -->
    <section class="content-wrap">
        <div class="container">
            <div class="row">

                <div class="col-md-8 main-content post">

        <table class="table">
      <thead>
        <tr>
          <th>项目名称</th>
          <th>发布时间</th>
          <th>来源</th>

        </tr>
      </thead>
      <tbody>
      <?php foreach ($rows as $r) {?>

        <tr>
          <th scope="row"><?php echo $r->grab_title;?></th>
          <td><?php echo $r->create_time;?></td>
          <td><a href="<?php echo $r->src_record_url;?>" class='btn btn-default'>原始链接</a></td>
        </tr>
<?php }
?>
      </tbody>
    </table>









<nav class="pagination" role="navigation">
    <span class="page-number">第 1 页 &frasl; 共 7 页</span>
        <a class="older-posts" href="/page/2/"><i class="fa fa-angle-right"></i></a>
</nav>


                </div>

                <aside class="col-md-4 sidebar">
                <!-- start widget -->
<!-- end widget -->

<!-- start tag cloud widget -->

<!-- end tag cloud widget -->


<!-- end widget -->

<!-- start tag cloud widget -->
<div class="widget">
    <h4 class="title">热门地区</h4>
    <div class="content tag-cloud">

<a href="">杭州</a>
<a href="">广州</a>
<a href="">北京</a>
<a href="">上海</a>
<a href="">温州</a>
<a href="">山东</a>
<a href="">江西</a>
<a href="">深圳</a>



        <a href="">...</a>
    </div>
</div>
<!-- end tag cloud widget -->

<!-- start widget -->
<!-- end widget -->

<!-- start widget -->
<!-- end widget -->                </aside>

            </div>
        </div>
    </section>

    <footer class="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="widget">
                        <h4 class="title">联系方式</h4>
                        <div class="content recent-post"></div>
                    </div>
                </div>



                <div class="col-sm-4">
                    <div class="widget">
                        <h4 class="title">收入网站</h4>
                        <div class="content tag-cloud friend-links">


                        </div>
                </div></div>
            </div>
        </div>
    </footer>

    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <span>Copyright &copy; <a href="http://www.1000auction.com/">1000Auction</a></span> |
                    <span><a href="http://www.miibeian.gov.cn/" target="_blank">京ICP备xxxxx号</a></span> |
                    <span>京公网安备11010802014853</span>
                </div>
            </div>
        </div>
    </div>

    <a href="#" id="back-to-top"><i class="fa fa-angle-up"></i></a>

    <script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="http://cdn.bootcss.com/fitvids/1.1.0/jquery.fitvids.min.js"></script>
    <script src="http://cdn.bootcss.com/highlight.js/8.5/highlight.min.js"></script>
    <script src="/assets/js/main.js?v=518242e48b"></script>



</body>
</html>