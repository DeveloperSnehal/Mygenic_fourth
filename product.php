<?php include("header.php"); ?>

    <!-- ========================
       page title
    =========================== -->
    <section class="page-title-layout1 page-title-light pb-0 bg-overlay bg-parallax">
      <div class="bg-img"><img src="assets/images/page-titles/ourproduct.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
            <h1 class="pagetitle-heading">Our Products</h1>
            <p class="pagetitle-desc">Our products are meticulously crafted to improve lives and enhance patient well-being in the field of pharmaceutical manufacturing and supply. </p>
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
              <li class="breadcrumb-item active" aria-current="page">Our Products</li>
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
              <h3 class="heading-title">Our Products</h3>
              <h2 class="heading-subtitle">Pharmaceutical Tablets And Pharmaceutical Injections</h2>
            </div>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <?php
            require ('connection/connect.php');

            $insert_query=" SELECT * FROM `categories`";
            $result=mysqli_query($con,$insert_query);
            $check_crud = mysqli_num_rows($result) > 0;

            if($check_crud)
            {
                while($row = mysqli_fetch_array($result))
                {
                  ?>
            <!-- Product item #1 -->
            <div class="col-sm-6 col-md-6 col-lg-3">
              <div class="product-item">
                <div class="product-img">
                  <?php echo '<img class="card-img-top img-fluid" src="./admin/category_images/'.$row['category_image'].'" width="100px"; height="100px"; alt=" ">' ?>
                  <div class="product-action">
                    <a href="category.php?category_id=<?php echo $row['category_id']; ?>" class="btn btn-secondary">
                      <i class="icon-bi bi-eye-fill"></i> <span>View category</span>
                    </a>
                  </div><!-- /.product-action -->
                </div><!-- /.product-img -->
                <div class="product-info">
                  <h4 class="product-title"><a href="#"><?php echo $row['category_name']; ?></a></h4>
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