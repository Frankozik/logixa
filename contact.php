<?php $page_title = "Contact"; ?>
<?php $meta_keywords="Keyword"; ?>
<?php $meta_content="content"; ?>
<?php $thisPage='Blog'; ?>
<?php $canonical= "https://logixa.ae/contact" ?>
<?php include 'include/header.php';?>
<!-- Header-End -->
<header class="container-fluid header">
  <div class="row">
    <div class="col">
      <div class="lg-text">
        <span>Contact Us</span> <br>
        <span class="other-color">Let Logixa Be Your Partner in<br>
            Making Dreams a Reality!</span>
      </div>
    </div>
  </div>
</header>
<div class="container-fluid few-contact">
  <div class="row">
    <div class="col-lg-6 col-sm-12">
      <div class="contact-info-holder">
        <div class="title">Call us</div>
        <div class="contact-info">+971 523 98 1952</div>
      </div>
    </div>
    <div class="col-lg-6 col-sm-12">
      <div class="contact-info-holder">
        <div class="title">E-mail</div>
        <div class="contact-info"><a href="mailto:info@logixa.ae">info@logixa.ae</a></div>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid box-content" id="cont-frm">
  <div class="row">
    <div class="col-lg-6 col-md-12">
      <div class="boxy simple-data default-color d-flex justify-content-center flex-column">
        <div class="lg-text">
          <span>Embark on a Journey of <span class="other-color">Success</span> </span>
          
        </div> <br>
      <div class="normal-text text-center">
        <p>Get in touch with us today and experience the power of our people in turning your ideas into reality. We
          can't wait to collaborate with you and make magic happen!</p>
      </div>
        <!-- <div class="normal-lg-text">
                    <p>We’re in London, UK<br>
                        Str. 8204 Block 2910</p>
                </div> -->
      </div>
    </div>
    <div class="col-lg-6 col-md-12">
      <div class="boxy simple-data c2-color">
        <div class="slg-text">
          <span>Get in touch</span>
        </div>
        <div class="contact-pge-frm">
          <form method="POST" action="blank">
            <div class="mb-3">
              <input type="text" class="form-control" name="Name" required="" id="exampleInputText"
                placeholder="Your Name">
            </div>
            <div class="mb-3">
              <input type="email" class="form-control" name="Email" required="" placeholder="Your Email"
                id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <input type="text" minlength="10" maxlength="10" autocomplete="off"
                onkeypress="return ((event.charCode >= 48 &amp;&amp; event.charCode <= 57) )" name="Number"
                class="form-control" id="phone-country" placeholder="Your Cell No"
                aria-describedby="validationTooltipUsernamePrepend" required="">
            </div>
            <div class="mb-3">
              <textarea name="message" class="form-control" id="exampleInputcomment"
                placeholder="Please tell us a bit about your project"></textarea>
            </div>
            <div class="btn_">
              <input type="submit" class="btn-1" value="Submit">
              <input type="hidden" name="form_name" value="Contact Form">
              <input type="hidden" name="hiddencapcha" value="hiddencapcha">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid our-people-section">
  <div class="row text-center">
    <div class="col">
      <div class="lg-text text-center"><span class="other-color">our people <br> The Backbone of Logixa's Success</span></div>
      <div class="normal-text">
        <p>At <span class="diff-txt">Logixa</span>, we take great pride in our exceptional team of talented professionals who are the driving force
          behind our success. Our people are the true embodiment of creativity, expertise, and dedication, working
          tirelessly to bring your visions to life.<br> Our team is not just a collection of individuals, we are a
          close-knit family united by a shared mission to create extraordinary experiences.</p>
      </div>
    </div>
  </div>
</div>
<!-- Footer-Start -->
<?php include 'include/footer.php';?>