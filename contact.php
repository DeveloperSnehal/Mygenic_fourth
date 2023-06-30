<?php include("header.php"); ?>


    <!-- =========================
            Google Map
    =========================  -->
    <section class="map py-0">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7543.8578653229415!2d73.087864!3d19.022853!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7e9d7de2988b5%3A0x65f0babb8b111ed6!2sDolphin%20Platinum!5e0!3m2!1sen!2sin!4v1687349312472!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      <div class="map-container">
        <div class="contact-panel p-0">
          <div class="panel-header">
            <h3 class="panel-title color-white mb-0">Offices and Main Labs</h3>
          </div>
          <div class="accordion" id="accordion">
            <div class="accordion-item opened">
              <div class="accordion-header" data-toggle="collapse" data-target="#collapse1">
                <a class="accordion-title" href="#">Navi Mumbai</a>
              </div><!-- /.accordion-item-header -->
              <div id="collapse1" class="collapse show" data-parent="#accordion">
                <div class="accordion-body">
                  <ul class="contact-list list-unstyled mb-0">
                    <li><b>Phone: </b> +91 9867592446</li>
                    <li><b>Email: </b> info@mygenichealthcare.com</li>
                    <li><b>Address: </b> Office No- 2 Plot No- 98, Sector 35 Dolphin Platinum Kamothe, Navi Mumbai, Maharashtra, India</li>
                  </ul>
                </div><!-- /.accordion-item-body -->
              </div>
            </div><!-- /.accordion-item -->
          </div><!-- /.accordion -->
        </div>
      </div><!-- /.map-container -->
    </section><!-- /.GoogleMap -->

    <!-- ==========================
        contact layout 1
    =========================== -->
    <section class="contact-layout1" style="padding-bottom: 110px;">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-7">
            <div class="heading-layout2 mb-50">
              <h2 class="heading-subtitle">Get in Tocuh with us..!</h2>
              <h3 class="heading-title">Contact with the Team</h3>
            </div>
          </div><!-- /.col-lg-7 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-4">
            <div class="text-block">
              <p class="text-block-desc">We are one of the leading Exporter of a premium range of Pharmaceutical Tablets, Pharmaceutical Injection & Anti Cancer Capsules and many more.</p>
            </div>
            <a href="about-us.php" class="btn btn-primary">
              <span>Accreditation & Licensing</span> <i class="icon-arrow-right"></i>
            </a>
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-12 col-md-12 col-lg-8">
            <form class="contact-panel-form" method="post" action="https://7oroof.com/demos/provetta/assets/php/contact.php" id="contactForm">
              <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Name" id="contact-name" name="contact-name"
                      required>
                  </div>
                </div><!-- /.col-lg-4 -->
                <div class="col-sm-12 col-md-4 col-lg-4">
                  <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email" id="contact-email" name="contact-email"
                      required>
                  </div>
                </div><!-- /.col-lg-4 -->
                <div class="col-sm-12 col-md-4 col-lg-4">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Phone" id="contact-Phone" name="contact-phone"
                      required>
                  </div>
                </div><!-- /.col-lg-4 -->
                <div class="col-12">
                  <div class="form-group">
                    <textarea class="form-control" placeholder="Additional Details" id="contact-message"
                      name="contact-message"></textarea>
                  </div>
                  <button type="submit" class="btn btn-secondary  btn-block btn-xhight mt-10">
                    <span>Submit Request</span> <i class="icon-arrow-right"></i>
                  </button>
                  <div class="contact-result"></div>
                </div><!-- /.col-lg-12 -->
              </div><!-- /.row -->
            </form>
          </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.contact layout 1 -->



    <?php include("footer.php"); ?>