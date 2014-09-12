<?php
get_header();
?>


<section id="intro" class="intro-section">
    <div class ="content_background">
        <div class="container-intro">

            <div class="row">

                <div class="col-lg-12">

                    <div class="page-scroll">
                        <img src="<?php echo get_template_directory_uri() ?>/img/S.png" alt="icon"/>
                    </div>
                        <?php if(dynamic_sidebar('intro-section')); ?>
                </div>


            </div>
        </div>
    </div>
</section>



<section id="services" class="services-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Projects</h1>

                <div class="row placeholders">
                    <div class="col-lg-6 col-lg-3 placeholder space_img">
                        <a href="http://laravel.vancitywebsiteservices.com/public/users/login">
                            <div class="circle-img">
                                <div class="circle-text"><img src="<?php echo get_template_directory_uri() ?>/img/laravel.png" alt="laravel"/>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-6 col-lg-3 placeholder space_img">
                        <a href="http://photo.vancitywebsiteservices.com/public/public_gallery.php">
                            <div class="circle-img7">
                                <div class="circle-text"><img src="<?php echo get_template_directory_uri() ?>/img/php.png" alt="php"/>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-6 col-lg-3 placeholder space_img">
                        <a href="http://store-s.sthomasmccarthy.com/">
                            <div class="circle-img">
                                <div class="circle-text"><img src="<?php echo get_template_directory_uri() ?>/img/aspnet.png" alt="asp.net"/>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-6 col-lg-3 placeholder space_img">
                        <a href="http://weather.vancitywebsiteservices.com/#/home">
                            <div class="circle-img6">
                                <div class="circle-text"><img src="<?php echo get_template_directory_uri() ?>/img/angularjs.png" alt="angular"/>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row websites_row">
            <div class="col-lg-12">


                <h1 class="page-header">Websites</h1>

                <div class="row placeholders">
                    <div class="col-lg-6 col-lg-3 placeholder space_img">
                        <a href="http://doctorphong.com/">
                            <div class="circle-img2">
                                <div class="circle-text"><img src="<?php echo get_template_directory_uri() ?>/img/codeigniter.png" alt="codeigniter"/>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-lg-3 placeholder space_img">
                        <a href="http://anayaleather.com">
                            <div class="circle-img3">
                                <div class="circle-text"><img src="<?php echo get_template_directory_uri() ?>/img/php.png" alt="php"/>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-lg-3 placeholder space_img">
                        <a href="http://www.fiveholeforfood.com">
                            <div class="circle-img4">
                                <div class="circle-text2"><img src="<?php echo get_template_directory_uri() ?>/img/CSS3.png" alt="css3"/>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-lg-3 placeholder space_img">
                        <a href="http://anotherview.ca/public">
                            <div class="circle-img5">
                                <div class="circle-text2"><img src="<?php echo get_template_directory_uri() ?>/img/CSS3.png" alt="css3"/>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>



</section>
<?php get_footer(); ?>
