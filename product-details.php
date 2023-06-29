
<?php include("header.php"); ?>

    <!-- ========================
       page title
    =========================== -->
    <section class="page-title-layout4 py-0">
      <div class="breadcrumb-area">
        <div class="container">
          <nav>
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item">
                <a href="index.php"><i class="icon-home"></i> <span>Home</span></a>
              </li>
              <li class="breadcrumb-item">
                <a href="product.php">Our Products</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Product Details</li>
            </ol>
          </nav>
        </div><!-- /.container -->
      </div><!-- /.breadcrumb-area -->
    </section><!-- /.page-title -->

    <!-- ========================
       shop single
    =========================== -->
    <section class="shop pb-40 pt-0">
      <div class="container">
        <div class="row">
          <?php
            require ('connection/connect.php');

            $Product_Name=$_GET['Product_Name'];
            $sql = "SELECT * FROM `productdetails`WHERE Product_Name='$Product_Name'";
            $result = mysqli_query($con,$sql);
            $check_crud = mysqli_num_rows($result) > 0;

            if($check_crud)
            {
              while($row = mysqli_fetch_array($result))
              {
                ?>
            <div class="col-12">
              <div class="row product-item-single">
                <div class="col-sm-6">
                  <div class="product-img" style="box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;">
                    <?php echo '<img class="card-img-top" src="./admin/product_images/'.$row['Product_Image'].'" width="250px"; height="500px"; class="zoomin" alt="product" loading="lazy">' ?>
                  </div><!-- /.product-img -->
                </div>
                <div class="col-sm-6" style="padding: 60px; background-color: honeydew;">
                  <h1 class="product-title"><?php echo $row['Product_Name']; ?></h1>
                  <div class="product-meta-details">
                    <ul class="list-unstyled mb-30">
                      <li><span>Product Chemical :</span>  <span>   <?php echo $row['Product_Chemical']; ?></span></li>
                      <li><span>Product Form :</span>  <span>  <?php echo $row['Product_Form']; ?></span></li>
                      <li><span>Company Name :</span>  <span>  <?php echo $row['Company_Name']; ?></span></li>
                      <li><span>Product Storage :</span>  <span>  <?php echo $row['Product_Storage']; ?></span></li>
                      <li><span>Product Packing :</span>  <span>  <?php echo $row['Product_Packing']; ?></span></li>
                      <li><span>Product Category :</span>  <span>  <?php echo $row['category_name']; ?></span></li>
                    </ul>
                  </div><!-- /.product-meta-details -->
                  <ul class="social-icons list-unstyled mb-0">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  </ul><!-- /.social-icons -->
                </div>
              </div><!-- /.row -->

              <!-- <h6 class="related-products-title text-center-xs mb-25" style="margin-top: 70px !important;">Related Products</h6>
              <div class="row">
                <!- Product item #1 ->
                <div class="col-sm-6 col-md-6 col-lg-3">
                  <div class="product-item">
                    <div class="product-img">
                      <img src="assets/images/products/2.jpg" alt="Product" loading="lazy">
                      <div class="product-action">
                        <a href="#" class="btn btn-secondary">
                        <i class="icon-bi bi-eye-fill"></i> <span>View Product</span>
                        </a>
                      </div><!- /.product-action ->
                    </div><!- /.product-img ->
                    <div class="product-info">
                      <h4 class="product-title"><a href="#">Biotin Complex</a></h4>
                    </div><!- /.product-content ->
                  </div><!- /.product-item ->
                </div><!- /.col-lg-3 ->
                <!- Product item #2 ->
                <div class="col-sm-6 col-md-6 col-lg-3">
                  <div class="product-item">
                    <div class="product-img">
                      <img src="assets/images/products/3.jpg" alt="Product" loading="lazy">
                      <div class="product-action">
                        <a href="#" class="btn btn-secondary">
                        <i class="icon-bi bi-eye-fill"></i> <span>View Product</span>
                        </a>
                      </div><!- /.product-action ->
                    </div><!- /.product-img ->
                    <div class="product-info">
                      <h4 class="product-title"><a href="#">Facial Serum</a></h4>
                    </div><-- /.product-content ->
                  </div><!- /.product-item ->
                </div><!- /.col-lg-3 ->
                <!- Product item #3 ->
                <div class="col-sm-6 col-md-6 col-lg-3">
                  <div class="product-item">
                    <div class="product-img">
                      <img src="assets/images/products/4.jpg" alt="Product" loading="lazy">
                      <div class="product-action">
                        <a href="#" class="btn btn-secondary">
                          <i class="icon-bi bi-eye-fill"></i> <span>View Product</span>
                        </a>
                      </div><!- /.product-action ->
                    </div><!- /.product-img ->
                    <div class="product-info">
                      <h4 class="product-title"><a href="#">Calming Herps</a></h4>
                    </div><!- /.product-content ->
                  </div><!- /.product-item ->
                </div><!- /.col-lg-3 ->
                <!- Product item #4 ->
                <div class="col-sm-6 col-md-6 col-lg-3">
                  <div class="product-item">
                    <div class="product-img">
                      <img src="assets/images/products/5.jpg" alt="Product" loading="lazy">
                      <div class="product-action">
                        <a href="#" class="btn btn-secondary">
                        <i class="icon-bi bi-eye-fill"></i> <span>View Product</span>
                        </a>
                      </div><!- /.product-action ->
                    </div><!- /.product-img ->
                    <div class="product-info">
                      <h4 class="product-title"><a href="#">Essential Oil</a></h4>
                    </div><!- /.product-content ->
                  </div><!- /.product-item ->
                </div><!- /.col-lg-3 ->
              </div>/.row -->
           </div><!-- /.col-12 -->
           <?php
                  }
                }
             else
              {

              }
          ?>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.shop single -->


    <?php include("footer.php"); ?>