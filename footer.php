    <?php global $mytheme; ?>
    <!-- footer -->
    <footer class="w3l-footer-16">
        <div class="footer-content py-lg-5 py-4 text-center">
            <div class="container">
                <div class="copy-right">
                    <h6>© <?php date('Y'); ?> <a href="<?php bloginfo('home');?>">Forever IT</a>. Developed by <a href="#">Ismaile Ahmed</a> </h6>
                </div>
            <ul class="author-icons mt-4">
            <?php if(!empty($mytheme['footer-socail-url']['Facebook'])) : ?>
            <li><a class="facebook" href="<?php echo $mytheme['footer-socail-url']['Facebook']; ?>"><span class="fab fa-facebook" aria-hidden="true"></span></a></li>
            <?php endif; ?>   

            <?php if(!empty($mytheme['footer-socail-url']['Twitter'])) : ?>
            <li><a class="twitter" href="<?php echo $mytheme['footer-socail-url']['Twitter']; ?>"><i class="fab fa-twitter-square"></i></a></li>
            <?php endif; ?>

            <?php if(!empty($mytheme['footer-socail-url']['Google'])) : ?>
            <li><a class="google" href="<?php echo $mytheme['footer-socail-url']['Google']; ?>"><i class="fab fa-google-plus"></i></a></li>
            <?php endif; ?>

            <?php if(!empty($mytheme['footer-socail-url']['Linkedin'])) : ?>
            <li><a class="linkedin" href="<?php echo $mytheme['footer-socail-url']['Linkedin']; ?>"><i class="fab fa-linkedin"></i></a></li>
            <?php endif; ?>

            <?php if(!empty($mytheme['footer-socail-url']['Github'])) : ?>
            <li><a class="github" href="<?php echo $mytheme['footer-socail-url']['Github']; ?>"><i class="fab fa-github-square"></i></a></li>
            <?php endif; ?>

            <?php if(!empty($mytheme['footer-socail-url']['Dribbble'])) : ?>
            <li><a class="dribbble" href="<?php echo $mytheme['footer-socail-url']['Dribbble']; ?>"><i class="fab fa-dribbble-square"></i></a></li>
            </ul>
            <?php endif; ?>

                <button onclick="topFunction()" id="movetop" title="Go to top">
                    <span class="fa fa-angle-up"></span>
                </button>
            </div>
        </div>

        <!-- move top -->
        <script>
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function () {
                scrollFunction()
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("movetop").style.display = "block";
                } else {
                    document.getElementById("movetop").style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>
        <!-- //move top -->
    </footer>
    <!-- //footer -->

    <!-- Template JavaScript -->
    <script src="<?php echo get_template_directory_uri() ?>/assets/js/theme-change.js"></script>

    <script src="<?php echo get_template_directory_uri() ?>/assets/js/jquery-3.3.1.min.js"></script>

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- disable body scroll which navbar is in active -->

   <script src="<?php echo get_template_directory_uri() ?>/assets/js/bootstrap.min.js"></script> 
   <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"></script>
   <?php wp_footer(); ?>
</body>

</html>