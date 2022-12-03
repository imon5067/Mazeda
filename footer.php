 <footer id="colophon" class="site-footer footer-v1">
            <div class="col-full">
               <div class="footer-social-icons">
                  <span class="social-icon-text">Follow us</span>
                  <ul class="social-icons list-unstyled">
                     <li><a class="fa fa-facebook" href="#"></a></li>
                     <li><a class="fa fa-twitter" href="#"></a></li>
                     <li><a class="fa fa-instagram" href="#"></a></li>
                     <li><a class="fa fa-youtube" href="#"></a></li>
                     <li><a class="fa fa-dribbble" href="#"></a></li>
                  </ul>
               </div>
               <div class="footer-logo">
                 <a href="index.php" class="custom-logo-link" rel="home">
                     <img src="assets/images/Mazeda.png" alt="Smiley face" height="1000" width="500">
                     </a>
               </div>
               <div class="site-address">
                   <?php $contact = $card->get_cotactInfo();?>
                  <ul class="address">
                     <li>Mazeda Cafe & Restaurant</li>
                     <li><?php  echo $contact['address']; ?></li>
                     
                     <li>Mobile: <?php echo $contact['mobile']; ?></li>
                     <li>Telephone: <?php echo $contact['phone'];?></li>
                     
                  </ul>
               </div>
               <div class="site-info">
                  <p class="copyright">Copyright &copy; 2018 Mazeda Cafe & Restaurant. All rights reserved.</p>
               </div>
               <!-- .site-info --> <a role="button" class="footer-action-btn" data-toggle="collapse" href="#footer-map-collapse"><i class="po po-map-marker"></i>Find us on Map</a>

            </div>
            <!-- .col-full -->
         </footer>
         <!-- #colophon -->
      </div>
     <!-- For demo purposes – can be removed on production -->

      <!-- For demo purposes – can be removed on production : End -->
      <script type="text/javascript" src="assets/js/jquery.min.js"></script>
      <script type="text/javascript" src="assets/js/tether.min.js"></script>
      <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>

      <script type="text/javascript" src="assets/js/social.share.min.js"></script>
      <script type="text/javascript" src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script type="text/javascript" src="assets/js/scripts.min.js"></script>
      <!-- For demo purposes – can be removed on production -->
      <script src="switchstylesheet/switchstylesheet.js"></script>
      <!-- For demo purposes – can be removed on production : End -->
   </body>

<!-- Mirrored from transvelo.github.io/pizzaro-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 29 Apr 2018 10:18:27 GMT -->
</html>
