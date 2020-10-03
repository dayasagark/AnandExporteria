<?php
include ('header.php');
?>
<div>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/gallery/Fresh-Honey.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Fresh Honey</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/gallery/rice-grain.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Rice Grains</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/gallery/SampleImg1.jpg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Fruits & Vegetables</h5>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="slider-part">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
      <h2 class="header-title">Welcome to Anand Imports and Exports</h2>
      <p>Anand Imports and Exports was established in the year 2019. We are Exporter and Importer and Wholesaler and Retailers of Agricultural Related Products Like – Rice, Honey, Fresh Fruits, Fresh Vegetables , Spices etc. Meanwhile, we make sure to test our products on several quality constraints to ensure their optimal usability in terms of freshness, purity and nutritious value. Products are delivered within stipulated time.</p>
      </div>
    </div>
	</div>
  </div>
</div>
</div>
<div class="about-part" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="about">
                            <h1 class="header-title">About Us</h1>
                            <hr>
                            <div style="text-align: left;">
                            <p>We are glad to introduce our- self – Anand Imports and Exports as a company in the field of imports and exports of agricultural products and relevant items and an Indian based company. We do have strong experience in fresh industry for past few years in domestic retail market. We assure on timely delivery with best quality of farm produce and rates are also competitive with us, as we source from direct farm orchards.</p>
                            </div>
</div>
                    </div>
                </div>
              </div>
</div>

<div class="about-part" id="Products">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="about">
          <h1 class="header-title">Products</h1>
          <hr>
          <div style="text-align: left;">
          
        </div>
        
        </div>
      </div>
    </div>

</div>
</div>
<!--
<div class="about-part" id="contact">
  <div class="container">
  <div class="about">
  <h1>Contact Us</h1>
          <hr>
</div>
  </div>
  <div class="mapOuter">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d443090.18942734366!2d-95.68149196141165!3d29.816882370502118!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640b8b4488d8501%3A0xca0d02def365053b!2sHouston%2C%20TX%2C%20USA!5e0!3m2!1sen!2sin!4v1596795423183!5m2!1sen!2sin" width="100%" height="250" frameborder="0" style="border:0;" allowfullscreen=""></iframe
  </div>
  <div class="container" style="margin-top: 15px;">
    <div class="row">
      <div class="col-md-6">
      <p>Address: <strong>Houston Texas</strong></p>
      <p>
      Phone: <strong>832-930-1404</strong> <br>

      Email: <strong><a href="mailto:sam%40smtechso.com">sam@smtechso.com</a></strong> <br>

      Business Hours: <strong>Mon-Fri 8:30 AM - 5:30 PM CST</strong> <br>
      </p>
      </div>
      
      <div class="col-md-6">
        <form action="subscription.php" class="subscription" method="post">
          <div class="form-group">
            <h5>Reach out to us</h5>
            <div class="row">
              <div class="col-md-12">
                <div class="subscriptionouter">
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Your Email">
                  <button type="button" class="btn btn-primary subscribe">Send </button>
                </div>
                <span class="resMessae"></span>
              </div>
            </div>
          </div>

        </form>
      </div>
      
        </div> -->
    </div>

  </div>
        </div>

<script>
  $(document).ready(function () {
    $('.subscribe').click(function () {
      var email = $('#exampleInputEmail1').val();
      var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
      if (email !== '') {
        if (!emailReg.test(email)) {
          $('.resMessae').html('Enter the valid email').css('color', 'red');
          return false;
        }
        else {
          $('.resMessae').html('');
          $.ajax({
            type: "POST",
            url: 'subscription.php',
            data: { 'email': email },
            dataType: 'html',
            success: function (response) {
              if (response == 'success') {
                $('.resMessae').html('<h6><small>Will get back you soon !</small></h6>').css('color', 'green');
              }
              else {
                $('.resMessae').html('something went wrong .. ').css('color', 'red');
              }

            }
          });
        }
      } else {
        $('.resMessae').html('This field is required.').css('color', 'red');
      }

    });

  });
</script>
<?php
include ('footer.php');
?>
