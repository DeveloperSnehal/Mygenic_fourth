<?php include("header.php"); ?>

    <!-- ========================
       page title
    =========================== -->
    <section class="page-title-layout1 page-title-light pb-0 bg-overlay bg-parallax">
      <div class="bg-img"><img src="assets/images/page-titles/1.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
            <h1 class="pagetitle-heading">Our Category</h1>
            <p class="pagetitle-desc">Your focus is on providing patients the best possible care and we’re here to
              help. To complement our comprehensive menu of tests, we provide resources to registered healthcare
              professionals to support your testing needs.
            </p>
          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
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
              <li class="breadcrumb-item active" aria-current="page">Our Category</li>
            </ol>
          </nav>
        </div><!-- /.container -->
      </div><!-- /.breadcrumb-area -->
    </section><!-- /.page-title -->

   <!-- ========================
       shop
    =========================== -->
    <section class="shop pt-120 pb-70">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center mb-50">
              <h3 class="heading-title">Our Category</h3>
            </div>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
         <?php
            require ('connection/connect.php');

            $category_id=$_GET['category_id'];
            $sql = "SELECT * FROM `productdetails` WHERE category_id='$category_id'";
            $result = mysqli_query($con,$sql);
            $check_crud = mysqli_num_rows($result) > 0;

            if($check_crud)
            {
              while($row = mysqli_fetch_array($result))
              {
                ?>
            <!-- Product item #1 -->
            <div class="col-sm-6 col-md-6 col-lg-3">
              <div class="product-item">
               <div class="product-info">
                  <h4 class="product-title"><a href="supplies-single.html"><?php echo $row['Product_Name']; ?></a></h4>
                </div><!-- /.product-content -->

                <div class="product-img">
                  <?php echo '<img class="card-img-top img-fluid" src="./admin/product_images/'.$row['Product_Image'].'" style="height: 200px; width: 200px;" alt=" ">' ?>
                  <div class="product-action">
                    <a href="sub-categoryview.php?Product_Chemical=<?php echo $row['Product_Chemical']; ?>" class="btn btn-secondary">
                      <i class="icon-bi bi-eye-fill"></i> <span>View Product</span>
                    </a>
                  </div><!-- /.product-action -->
                </div><!-- /.product-img -->

                <div class="product-info">
                  <h4 class="product-title"><a href="#"><span style="color:#ed6f1e;">Product Chemical:</span> <?php echo $row['Product_Chemical']; ?></a></h4>
                </div><!-- /.product-content -->
              </div><!-- /.product-item -->
            </div><!-- /.col-lg-3 -->
            <?php
                  }
                }
             else
              {

              }
          ?>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.shop -->




<?php include("footer.php"); ?>