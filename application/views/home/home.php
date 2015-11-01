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




<nav>


<?php echo $page;?>
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

