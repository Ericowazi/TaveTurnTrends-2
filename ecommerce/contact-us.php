<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

	<?php include 'includes/navbar.php'; ?>

	  <div class="content-wrapper">
	    <div class="container">

	      <!-- Main content -->
				<div class="about-about">
            <h1 class="title text-center" id="contact">Contact Us</h1>
            <div class="space"></div>
            <div class="row">
              <div class="col-sm-6">
                <div class="footer-content">
                  <p class="large">We are here for you 24/7. Have any queries? Comment? Visit or Contact us via</p>
                  <ul class="list-icons">
                    <li><i class="fa fa-map-marker pr-10"></i> Green Stalls, Behind TRM: Shop NO.213.</li>
                    <li><i class="fa fa-phone pr-10"></i> +254 792143573</li>
                    <li><i class="fa fa-fax pr-10"></i> +254 792614085 </li>
                    <li><i class="fa fa-envelope-o pr-10"></i> taveturn@yahoo.com</li>
                  </ul>

                </div>
              </div>
              <div class="col-sm-6">
                <div class="footer-content">
									<h1 class="h11">Send a mail</h1>
                  <form role="form" id="footer-form">
                    <div class="form-group has-feedback">
                      <label class="sr-only" for="name2">Name</label>
                      <input type="text" class="form-control" id="name2" placeholder="Name" name="name2" required>
                      <i class="fa fa-user form-control-feedback"></i>
                    </div>
                    <div class="form-group has-feedback">
                      <label class="sr-only" for="email2">Email address</label>
                      <input type="email" class="form-control" id="email2" placeholder="Enter email" name="email2" required>
                      <i class="fa fa-envelope form-control-feedback"></i>
                    </div>
                    <div class="form-group has-feedback">
                      <label class="sr-only" for="message2">Message</label>
                      <textarea class="form-control" rows="8" id="message2" placeholder="Message" name="message2" required></textarea>
                      <i class="fa fa-pencil form-control-feedback"></i>
                    </div>
										<!-- <a href="mailto:taveturn@yahoo.com" class="btn btn-default">SEND</a> -->
                    <input type="submit" value="Send" class="btn btn-default">
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
        <!-- .footer end -->


  	<?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>
</body>
</html>
