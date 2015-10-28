<?php
defined('BASEPATH') or exit('No direct script access allowed');
?><!DOCTYPE html>
<!DOCTYPE html>
<?php include (APPPATH . "/views/comm/header.php");?>
    <!-- end navigation -->


    <!-- start site's main content area -->
    <section class="content-wrap">
        <div class="container">
            <div class="row">

                <div class="col-md-8 main-content post">

        <table class="table">
      <thead>
        <tr>
          <th>拍卖网站</th>
          <th>发布信息数量</th>
          <th>链接</th>

        </tr>
      </thead>
      <tbody>
      <?php foreach ($rows as $r) {?>

        <tr>
          <th scope="row"><?php echo $r->description;?></th>
          <td><?php echo $r->grab_num;?></td>
          <td><a href="<?php echo $r->website;?>" class='btn btn-default'>链接</a></td>
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