<?php
require("cssAndFonts.php");
function card($row){
  // echo var_dump($row)."<br>";

?>
        

    <div class="products">
      <div class="product">
        <div class="product-image">    <!--===== Product's Image====-->
          <div style="cursor: pointer" class="image" onclick="sendToDetail(this.id)" id="<?php echo $row['id']?>">
          <img src="<?php echo $row['image'];?>" alt="Image" width=290px>
            </div>
        </div>



        <div class="product-info text-left">    <!--===== Product's Info====-->
          <h3 class="name" id="<?php echo $row['id']?>" onclick="sendToDetail(this.id)">
            <a style="cursor: pointer"><?php echo $row['name'];?></a> <!--=== Name ==-->
          </h3>
          <div class="rating rateit-small"></div>
          <div class="description"></div> 
          <div class="product-price">
            <span class="price"> Rs. <?php echo $row['price'];?></span>  <!--=== Price ==-->
          </div>
        </div>

        <div class="cart clearfix animate-effect">
            <div class="action">
              <ul class="list-unstyled">
                <li class="add-cart-button btn-group">
                  <button class="btn btn-primary icon" data-toggle="dropdown" type="button" id="<?php echo $row['id']?>" onclick="sendToCart(this.id)">
                    <i class="fa fa-shopping-cart"></i>
                  </button>
                  <input type="hidden" name="itemForCart" value="<?php echo $row['id']?>">
                </li>
              </ul>
            </div>
            <!-- /.action -->
        </div>
        <!-- /.cart -->
      </div>
      <!-- /.product -->
    </div>
    <!-- /.products -->

    <script>
          function sendToDetail(id){
            location.href = "detail.php?id="+id;}
            
            function sendToCart(id){
            location.href = "manageCart.php?id="+id;}
        </script>


<?php
}
?>


