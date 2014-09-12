<?php
/**
 * Template Name: Custom CV
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

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

<?php if(have_posts()): while(have_posts()): the_post();
            the_content();
                endwhile; endif;
?>



                </div>


            </div>
        </div>
    </div>
</section>



<section id="services" class="services-section template">
<div class="container">
<div class="mask-blue">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Resume</h1>
            <div class="col-lg-3 lang">

                <h3>  Languages<br></h3>
                <h4>-<a href="http://photo.vancitywebsiteservices.com/public/public_gallery.php"> PHP </a></h4><br>
                <h4>- <a href="http://store-s.sthomasmccarthy.com/"> ASP.NET,</a><a href="https://github.com/Shane-McCarthy/Bubble-Sort-C-Sharp"> C#</a></h4><br>
                <h4>- HTML,<a href="http://anotherview.ca/public/"> CSS</a></h4><br>
                <h4>-<a href="http://block-draw.vancitywebsiteservices.com/blockdrawHTML.html"> JavaScript</a>,<a href="http://weather.vancitywebsiteservices.com/#/home"> Angular</a></h4><br>
                <h3>Databases<br> </h3>
                <h4>  - MySql, SQL Server</h4><br>
                <h4>- Couch</h4><br>
                <h3> Frameworks<br></h3>
                <h4>-<a HREF="http://www.fiveholeforfood.com/"> Wordpress</a></h4><br>
                <h4>-<a href="http://laravel.vancitywebsiteservices.com/public/users/login"> Laravel</a></h4><br>
                <h4>-<a href="http://doctorphong.com/"> Codeigniter</a></h4><br>
                <h4>- Bootstrap</h4><br>
                <h4>- <a href="http://www.jamroom.net/">Jamroom Smarty</a></h4><br>
                <h3>  Software<br></h3>
                <h4>- Photoshop</h4><br>
                <h4>- GIMP</h4><br>
                <h4>- Ubuntu</h4><br>
                <h3>Also <br></h3>
                <h4>- LAMP<br></h4>
                <h4>- Windows<br></h4>
                <h4>- OOP<br></h4>
                <h4>- JSON<br></h4>
                <h4>- RESTful APIs<br></h4>
                <h4>- AJAX <br></h4>
                <h4>- Source Control <br></h4>
                <h4>- jQuery <br></h4>

            </div>
            <div class="col-lg-8 resume">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">What Makes You Tick?</h3>
                    </div>
                    <div class="panel-body">
                        <ul class="list-group">
                            <li class="list-group-item"><h4>Enthusiastic, innovative and technologically curious by nature.  </h4></li>
                            <li class="list-group-item"><h4>Well rounded with working experience in the web development process.  </h4></li>
                            <li class="list-group-item"><h4>Outgoing personality with a background in sales.  </h4></li>
                            <li class="list-group-item"><h4>Educated and experienced in continuous improvement systems such as Kaizen. </h4></li>
                        </ul>

                    </div>
                </div>

                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Experience</h3>
                    </div>
                    <div class="panel-body">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title"><a href="http://Vancitywebsiteservices.com"> Can You Dig It Ltd - Vancitywebsiteservices.com </a>(Apr 09 – Aug 14)</h3>
                            </div>
                            <div class="panel-body">
                                Director/Web Developer - Setup and develop Wordpress websites for customers including all necessary
                                features. Created PPC ad campaigns, managed analytics and created and tested landing pages. Managed
                                Social Media. Designed, built and styled web pages. Setup ecommerce on Wordpress sites.
                            </div>
                        </div>
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title"><a href="http://www.spontanea.com/"> Spontenea Technologies</a> – Internet Marketing (Dec 09 – Present)</h3>
                            </div>
                            <div class="panel-body">
                                Chief Copywriter - Research and create compelling web content for SEO projects on a wide variety
                                of topics.
                            </div>
                        </div>

                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title"><a href="http://doctorphong.com/">Music and Artist Aggregation Website – Drphong.com</a> (Dec 09 –Aug 13)</h3>
                            </div>
                            <div class="panel-body">
                                <ul class="list-group">
                                    <li class="list-group-item">Web Developer – Developed a Code Igniter site to collect via RSS feeds music blog posts and store
                                        information and music from the post. Also included in the site, user signup, favorites and other user
                                        features. Artist’s section included music upload and paid promotion section for music and tour dates.</li>

                                    <li class="list-group-item">
                                        Marketing/SEO – Created a PPC ad campaign to attract listeners and artists. Built and tested
                                        landing pages for artist signup with the final result being a 30% conversion rate. Secured inbound
                                        links from the most popular blogs listed on our site with a focus on their ranking for our keywords.
                                    </li></ul>
                            </div>
                        </div>
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title">Canadian Comedy Website – Nuttybeaver.com (Dec 09 – Sept 12)</h3>
                            </div>
                            <div class="panel-body">
                                <ul class="list-group">
                                    <li class="list-group-item">  Web Developer -<a href="http://www.jamroom.net/"> Developed a Smarty base CMS (Jamroom)</a> to showcase Canadian comedians via
                                        their videos and tour dates. Built custom smarty templates for video pages, calendar, ticket sales
                                        and PayPal API integration.</li>

                                    <li class="list-group-item">
                                        Marketing/SEO - Marketed the site through social media, social bookmarking, blogging and
                                        inbound linking. Achieved 450k visitors in a 6 month period with average 21% returning visitors and
                                        increasing Google rank on medium competition keywords to 1st
                                        page.
                                    </li></ul>
                            </div>
                        </div>
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title">Sales – Technical (Prior to Apr 09)</h3>
                            </div>
                            <div class="panel-body">
                                <ul class="list-group">
                                    <li class="list-group-item">Hydraulic Systems – Norcan Fluid Power (May 08 – Apr09) - Outside sales representative
                                        working directly with customers on their specific requirements for custom hydraulic systems and
                                        supplying them with the appropriate components to fit the system’s needs.</li>

                                    <li class="list-group-item">
                                        Equipment Sales and Rentals– United Rentals (Oct 06 – May 08) – Coordinating
                                        equipment for projects per customer requests. Equipment sales based on customer needs and job
                                        requirements.
                                    </li></ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">Education</h3>
                </div>
                <div class="panel-body">

                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title"><a href="http://www.bcit.ca/study/programs/699ccertt">Software System Developer (Web Programming) – BCIT</a>, Vancouver, BC (Sept 13 – Apr 14)</h3>
                        </div>
                        <div class="panel-body">
                            Areas of study: C#, ASP.NET - MVC, PHP, Laravel, JavaScript, Angular JS, Java, Android Application,
                            Web Design, Web Application Security, SQL.
                        </div>
                    </div>

                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title"><a href="http://www.spontanea.com/"> Internet Marketing – Spontenea Coaching and Mentoring</a>, Vancouver, BC (Apr 09 – Dec 09)</h3>
                        </div>
                        <div class="panel-body">
                            Areas of study: SEO, Website Design, Web Content, PPC, Link Building, Market Research, Keyword
                            Research, Analytics, Social Media, Wordpress for SEO.
                        </div>
                    </div>

                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">Self-Employment Program – S.U.C.C.E.S.S. WorkBC Program, Vancouver, BC (Apr 09 - Aug 09)</h3>
                        </div>
                        <div class="panel-body">
                            Areas of study: Marketing, Finance, Business Plan, Business Structure.
                        </div>
                    </div>

                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">Manufacturing Engineering Diploma – St. Clair College of Technology, Windsor, ON. (Sept 00 – Jun 03)</h3>
                        </div>
                        <div class="panel-body">
                            Areas of study: Computer Assisted Design, Project Management, CNC Programming, Management
                            Principles, Quality Control, Physics and Calculus.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">Volunteer Work</h3>
            </div>
            <div class="panel-body">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title"><a HREF="http://www.fiveholeforfood.com/">Five Hole For Food (Front End Programming) – (Apr 13 – July 13)</a></h3>
                    </div>
                    <div class="panel-body">
                        Developed a Wordpress site from scratch complete with custom templates and functionality from a
                        professionally designed mock up of the site. Features included custom image hover action, custom
                        JQuery slider, multiple image backgrounds that change only the right side image on refresh, responsive
                        website.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>



</section>
<?php get_footer();?>