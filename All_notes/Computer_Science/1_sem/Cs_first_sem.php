
<?php include('../../../includes/file_header.php') ?>
  
    <section class="button-area">
            <div class="container box_1170 border-top-generic">
                <hr>
                <br>
                <h3 class="text-heading"> Computer Science 1 St semester (Latest)</h3>
                
                <div class="button-group-area mt-40     ">
                    <a href="Communication_skills.php" class="genric-btn primary circle  btn-lg">101- COMMUNICATION SKILLS</a><br>
                    <a href="physics.php" class="genric-btn primary circle">102- PHYSICS</a><br>
                    <a href="mathematics.php" class="genric-btn primary circle">103- MATHEMATICS</a><br>
                    <a href="Computer_Fundamental.php" class="genric-btn primary circle">104- COMPUTER FUNDAMENTALS AND ITS APPLICATION</a><br>
                    
            </div>
        </section>
    
     <br>
     <br>
     <br>
<hr>
    <section class="contact-section section_padding">
            <div class="row justify-content-center">
                    <div class="col-xl-5">
                      <div class="section_tittle text-center">
                        <h2>SAY HELLO TO US</h2>
                        <p>Please make sure you mention current URL in the message.</p>
                      </div>
                    </div>
                  </div>
      <div class="container">
          
      <div class="d-none d-sm-block mb-5 pb-4">
        <div class="row">
          
          <div class="col-lg-8">
            <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
              <div class="row">
                <div class="col-12">
                  <div class="form-group">
                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder = 'Enter Message'></textarea>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder = 'Enter your name'>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder = 'Enter email address'>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder = 'Enter Subject'>
                  </div>
                </div>
              </div>
              <div class="form-group mt-3">
                <button type="submit" class="button button-contactForm btn_1">Send Message</button>
              </div>
            </form>
          </div>
          <div class="col-lg-4">
            <div class="media contact-info">
              <span class="contact-info__icon"><i class="ti-home"></i></span>
              <div class="media-body">
                <h3>Bhopal </h3>
                <p>Madhya Pradesh</p>
              </div>
            </div>
            <div class="media contact-info">
              <span class="contact-info__icon"><i class="ti-tablet"></i></span>
              <div class="media-body">
                <h3>9617697736</h3>
                <p>Mon to Fri 9am to 6pm</p>
              </div>
            </div>
            <div class="media contact-info">
              <span class="contact-info__icon"><i class="ti-email"></i></span>
              <div class="media-body">
                <h3>polytechnicnotes.in@gmail.com</h3>
                <p>Send us your query anytime!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php include('../../../includes/file_footer.php') ?>
    