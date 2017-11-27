<?php 
  
  $ma =isset($_GET['matheloai']) ? $_GET['matheloai'] : "";
  $tl_obj = new theloai();
  $tl_data= $tl_obj -> gettentl($ma);
?>
<div class="category-title">
      <?php foreach($tl_data as $arr){ ?>
      <h1><?php echo $arr['tentheloai']; } ?></h1>
    </div>
    
    <div class="category-products">
      <div class="toolbar">
        <div id="sort-by">
          <label class="left">Sort By: </label>
          <ul>
            <li><a href="#">Position<span class="right-arrow"></span></a>
              <ul>
                <li><a href="#">Name</a></li>
                <li><a href="#">Price</a></li>
                <li><a href="#">Position</a></li>
              </ul>
            </li>
          </ul>
           </div>
        <div class="pager">
          <div class="pages">
            <label>Trang:</label>
            <ul class="pagination">
              <li><a href="#">«</a></li>
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">»</a></li>
            </ul>
          </div>
        </div>
      </div>
      
      <ul class="products-grid">
        <?php include "list-sach.php"; ?>
      </ul>
    </div>