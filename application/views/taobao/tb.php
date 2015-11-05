<?php
defined('BASEPATH') or exit('No direct script access allowed');
?><!DOCTYPE html>
<!DOCTYPE html>
<?php include APPPATH . "/views/comm/header.php";?>


    <!-- start site's main content area -->
    <section class="content-wrap">
        <div class="container">
            <div class="row">

                <div class="col-md-8 main-content post">

        <table class="table">
      <thead>
        <tr>
          <th>拍卖物名称</th>
          <th>起拍时间</th>
          <th style="width:100px">起拍价</th>

        </tr>
      </thead>
      <tbody>
      <?php foreach ($rows as $r) {
    ?>

        <tr>
          <th scope="row"><?php echo $r->grab_title;?></th>
          <td><?php echo $r->start_time;?></td>
          <?php $initial_price = $r->initial_price;
    $price                         = $initial_price / 1000;?>
          <td><font color="red"><?php echo floor($price);?> 万</font></td>
          <td><a href="<?php echo $r->src_record_url;?>" class='btn btn-default'>直达链接</a></td>
        </tr>
<?php }
?>
      </tbody>
    </table>


<?php echo $page;?>




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

