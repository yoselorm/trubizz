<?php include("includes/header-inc.php"); ?>


<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d992.6430076519604!2d-0.09312503044883408!3d5.630011934282758!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdf850073154611%3A0x981b2a292ee51a00!2sNtubed%20global%20ltd.!5e0!3m2!1sen!2sgh!4v1705498673680!5m2!1sen!2sgh" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

<section class="contact-section sec-pad">
  <div class="thm-container">
    <div class="row">
      <div class="col-md-8">
        <div class="contact-form-content">
          <div class="title">
            <span>Contact with us</span>
            <h2>Send Message</h2>
          </div><!-- /.title -->

          <form action="forms/contact.php" method="post" role="form" class="contact-form">
            <input name="type" value="contactus" style="display: none;" hidden />
            <input type="text" validation='alpha' name="name" placeholder="Name" />
            <input type="text" name="email" placeholder="Email Address" />
            <textarea name="message" [validation='message' ] placeholder="What are you seeking?"></textarea>
            <div class="my-3 col-12">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <button type="submit" class="thm-btn yellow-bg">Submit Now</button>

          </form>


        </div><!-- /.contact-form-content -->
      </div><!-- /.col-md-8 -->
      <div class="col-md-4">
        <div class="contact-info text-center">
          <div class="title text-center">
            <span>Contact info</span>
            <h2>Details</h2>
          </div><!-- /.title -->
          <div class="single-contact-info">
            <h4>Address</h4>
            <p>Basket Junction, Adj. Omni Bank,  <br /> Spintex Road, Accra, Ghana</p>
          </div><!-- /.single-contact-info -->
          <div class="single-contact-info">
            <h4>Phone</h4>
            <p>Office: (+233) 030 396 4289 <br /> </p>
          </div><!-- /.single-contact-info -->
          <div class="single-contact-info">
            <h4>Email</h4>
            <p>info@trubizz.ntubedglobal.com <br /> </p>
          </div><!-- /.single-contact-info -->
          <div class="single-contact-info">
            <h4>Follow Us</h4>
            <div class="social">
            <a href="https://twitter.com/trubizzgh" target="_blank" class="fab fa-twitter hvr-pulse"></a> 
               <a href="https://www.instagram.com/trubizzgh/" target="_blank" class="fab fa-instagram hvr-pulse"></a> 
               <a href="https://www.facebook.com/trubizzgh" target="_blank" class="fab fa-facebook-f hvr-pulse"></a>
               <a href="#" class="fab fa-youtube hvr-pulse"></a>
            </div><!-- /.social -->
          </div><!-- /.single-contact-info -->
        </div><!-- /.contact-info -->
      </div><!-- /.col-md-4 -->
    </div><!-- /.row -->
  </div><!-- /.thm-container -->
</section><!-- /.contact-section -->
<?php include("includes/validation-contactPage-inc.php");?>
<?php include("includes/footer-inc.php"); ?>