

<?php include 'includes/header.php' ?>
<!-- popup starts here -->
<div id="popup1" class="modal-box">
  <header> <a href="#" class="js-modal-close close">×</a>
</header>
  <div class="modal-body">
    <img class="popupimg" src="img/carousel4.jpg"/>
  </div>
</div>
</script>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script> 
<script>
$(function(){
var appendthis =  ("<div class='modal-overlay js-modal-close'></div>");

$(document).ready(function(){
  
    $("body").append(appendthis);
    $(".modal-overlay").fadeTo(500, 0.6);
		var modalBox ='popup1';
		$('#popup1').fadeIn($('popup1').data());
	});  
  
  
$(".js-modal-close, .modal-overlay").click(function() {
    $(".modal-box, .modal-overlay").fadeOut(500, function() {
        $(".modal-overlay").remove();
    });
 
});
 
$(window).resize(function() {
    $(".modal-box").css({
        top: ($(window).height() - $(".modal-box").outerHeight()) / 2,
        left: ($(window).width() - $(".modal-box").outerWidth()) / 2
    });
});
 
$(window).resize();
 
});
</script>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

<!-- popup ends here -->
<div id="heading">
  <h1>DIGIYOUTH INFOTECH - DIGITAL MARKETING SCHOOL|AGENCY</h1>
  <p style="margin:1em 4em">DigiYouth Infotech is one of the most trusted Digital Marketing School and Agency in India .</p>
  
</div>
<!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v6.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your customer chat code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="101560258153205">
      </div>


    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="img/carousel4.jpeg" alt="Digiyouth Infotech" style="width:100%;">
      </div>

      <div class="item">
        <img src="img/carousel2.jpeg" alt="Digiyouth Infotech" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="img/carousel3.jpeg" alt="Digiyouth Infotech" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  
<div class="home-wrapper">
<div class="container">
  <!-- <h2 style="color:wheat;font-weight: 600;font-size:50px;">Youth Development Program</h2>
 -->
</div>

</div>

</header>


<div id="masteryProgram">
  <h3 style="font-size:36px;font-weight: 600">Join Our Mastery Program To Lead The Marketing</h3>
  <button><a style="text-decoration: none;color:#fff;"  href="./mastery-program.php"><span class="glyphicon glyphicon-play"></span></i>Explore</a></button>
</div>
<!-- courses div -->

<section id="courses" class="cid-rUmAIVE18Z mbr-parallax-background">
    <div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(239, 239, 239);">
    </div>
    <div class="container  kps1">
        <h3 class="mbr-section-title align-center mbr-fonts-style display-2">Our Modules</h3>
        <h4 class="mbr-section-subtitle align-center pb-4 mbr-fonts-style display-5">_</h4>
        <div class="row mbr-gallery" data-toggle="modal" data-target="#rUmRKUxBZe">
          <!-- <div class="bound"> -->
            <div class="col-6 col-md-6 col-lg-2 item gallery-image abc">
                <div class="item-wrapper">
                    <!-- <img  src="assets/images/background1.jpg" alt="" data-slide-to="0" data-target="#rUmRKUxuuB"> -->
                    <img class="w-100" alt="SEARCH ENGINE OPTIMIZATION (SEO)" class="w-100" 
                    src="img/seo.svg">
                      <div class="coursename"><a class="alink" href="./course-search-engine-optimization.php" style="color:black;text-align: center;">SEARCH ENGINE OPTIMIZATION (SEO)</a></div>
                </div>
            </div>
            <div class="col-6 col-md-6 col-lg-2 item gallery-image abc">
              <div class="item-wrapper">
                  <!-- <img  src="assets/images/background1.jpg" alt="" data-slide-to="0" data-target="#rUmRKUxuuB"> -->
                  <img class="w-100" alt="CONTENT MARKETING" class="w-100" 
                  src="img/contentmarket.svg">
                    <div class="coursename"><a class="alink"  href="./course-content-marketing.php" style="color:black;text-align: center;">CONTENT MARKETING</a></div>
              </div>
          </div>
          <div class="col-6 col-md-6 col-lg-2 item gallery-image abc">
            <div class="item-wrapper">
                <!-- <img  src="assets/images/background1.jpg" alt="" data-slide-to="0" data-target="#rUmRKUxuuB"> -->
                <img class="w-100" alt="DISPLAY ADVERTISING" class="w-100" 
                src="img/ecommarket.png">
                  <div class="coursename"><a  class="alink" href="./course-display-advertising.php" style="color:black;text-align: center;">DISPLAY ADVERTISING</a></div>
            </div>
        </div>
        <div class="col-6 col-md-6 col-lg-2 item gallery-image abc">
          <div class="item-wrapper">
              <!-- <img  src="assets/images/background1.jpg" alt="" data-slide-to="0" data-target="#rUmRKUxuuB"> -->
              <img class="w-100" alt="INFLUENCER MARKETING" class="w-100" 
              src="img/inboundmarket.svg">
                <div class="coursename"><a  class="alink" href="./course-influencer-marketing.php" style="color:black;text-align: center;">INFLUENCER MARKETING</a></div>
          </div>
      </div>
      <div class="col-6 col-md-6 col-lg-2 item gallery-image abc">
        <div class="item-wrapper">
            <!-- <img  src="assets/images/background1.jpg" alt="" data-slide-to="0" data-target="#rUmRKUxuuB"> -->
            
            <img class="w-100" src="img/makemoneyonline.svg" alt="SOCIAL MEDIA MARKETING">
              <div class="coursename"><a class="alink"  href="./course-social-media-marketing.php" style="color:black;text-align: center;">SOCIAL MEDIA MARKETING</a></div>
        </div>
    </div>
    <!-- <span class="jkl"> -->
   </div>
    <div class="row mbr-gallery" data-toggle="modal" data-target="#rUmRKUxBZe"> 
    <!-- </span> -->
    <div class="col-6 col-md-6 col-lg-2 item gallery-image abc">
      <div class="item-wrapper">
          <!-- <img  src="assets/images/background1.jpg" alt="" data-slide-to="0" data-target="#rUmRKUxuuB"> -->
          <img class="w-100" alt="EMAIL MARKETING" class="w-100" 
          src="img/emailmarket.svg">
            <div class="coursename"><a  class="alink" href="#" style="color:black;text-align: center;">EMAIL MARKETING</a></div>
      </div>
  </div>
  <div class="col-6 col-md-6 col-lg-2 item gallery-image abc">
    <div class="item-wrapper">
        <!-- <img  src="assets/images/background1.jpg" alt="" data-slide-to="0" data-target="#rUmRKUxuuB"> -->
        <img class="w-100" alt="REMARKETING" class="w-100" 
        src="img/sem.svg">
          <div class="coursename"><a  class="alink" href="./course-remarketing.php" style="color:black;text-align: center;">REMARKETING</a></div>
    </div>
</div>
<div class="col-6 col-md-6 col-lg-2 item gallery-image abc">
  <div class="item-wrapper">
      <!-- <img  src="assets/images/background1.jpg" alt="" data-slide-to="0" data-target="#rUmRKUxuuB"> -->
      <img class="w-100" alt="WEB ANALYTICS-GOOGLE ANALYTICS" class="w-100" src="img/analyticsweb.svg">
        <div class="coursename"><a  class="alink" href="#" style="color:black;text-align: center;">WEB ANALYTICS-GOOGLE ANALYTICS</a></div>
  </div>
</div>
<div class="col-6 col-md-6 col-lg-2 item gallery-image abc">
  <div class="item-wrapper">
      <!-- <img  src="assets/images/background1.jpg" alt="" data-slide-to="0" data-target="#rUmRKUxuuB"> -->
      <img class="w-100" alt="MOBILE MARKETING" class="w-100" 
      src="img/mobilemarket.png">
        <div class="coursename"><a  class="alink" href="#" style="color:black;text-align: center;">MOBILE MARKETING</a></div>
  </div>
</div>
<div class="col-6 col-md-6 col-lg-2 item gallery-image abc">
  <div class="item-wrapper">
      <!-- <img  src="assets/images/background1.jpg" alt="" data-slide-to="0" data-target="#rUmRKUxuuB"> -->
      <img class="w-100" alt="GOOGLE DATA STUDIO" class="w-100" 
      src="img/googledatastudio.png">
        <div class="coursename"><a  class="alink" href="#" style="color:black;text-align: center;">GOOGLE DATA STUDIO</a></div>
  </div>
</div>
    </div>
        <!-- </div> -->
    </div>
</section>
<!-- <div id="courses" class="section md-padding">

<div class="container">

<div class="row">

<div class="section-header text-center">

<h2 class="title">Our Modules</h2>
</div>


<div class="col-md-4 col-sm-6">
<div class="service" >
<img src="img/seo-course.jpg" alt="Digiyouth Infotech">
<h3 ><a href="./course-search-engine-optimization.php" style="color:black;">Search Engine Optimization</a></h3>
<p>Google answers over 40,000 search queries every second, Can you imagine? Ever wonder? How Google finds the right answer?</p>
</div>
</div>


<div class="col-md-4 col-sm-6">
<div class="service">
<img src="img/adwords.jpg" alt="Digiyouth Infotech">
<h3><a href="./course-content-marketing.php" style="color:black;">Content Marketing</a></h3>
<p>Content marketing is an art to selling your product. Whether you’re a start-up or an established company, content matters most in terms of growth. Premium quality content, blogs.</p>
</div>
</div>


<div class="col-md-4 col-sm-6">
<div class="service">
<img src="img/blogging.jpg" alt="Digiyouth Infotech">
<h3><a href="./course-influencer-marketing.php" style="color:black;">Influencer Marketing</a></h3>
<p>Influencer marketing or IM engages the brand advertising option where a person will influence your business. We assist our clients to opt out the best person in the market ...</p>
</div>
</div>



</div>
<div class="row">

<div class="col-md-4 col-sm-6">
<div class="service">
<img src="img/affilate.jpg" alt="Digiyouth Infotech">
<h3><a href="./course-display-advertising.php" style="color:black;">Display Advertising</a></h3>
<p>The brand new business module in digital marketing segment is display advertising, effective yet low-cost module which is successfully run in the market. We offer our clients several ...</p>
</div>
</div>


<div class="col-md-4 col-sm-6">
<div class="service" style="text-align: center;">
<span  style="font-size:32px;padding:16px" class="glyphicon glyphicon-pencil"></span>
<h3><a href="./course-social-media-marketing.php" style="color:black;">Social Media Marketing</a></h3>
<p>By 2019, there will be more than  2.77 billion social media users across the globe. We are here to help you understand Social media marketing and how it works.</p>
</div>
</div>


<div class="col-md-4 col-sm-6">
<div class="service">
<img src="img/sales-training-course.jpg" alt="Digiyouth Infotech">
<h3><a href="./course-remarketing.php" style="color:black;">Remarketing </a></h3>
<p>Remarketing or redirecting is a very cost-effective way to display your ads on the site. We recommend our clients who are merely a start-up, can avail the  remarketing from Google Adwords.</p>
</div>
</div>
</div>

</div>

</div> -->


<!-- Counter Start -->

<div id="digiyouth-counter" class="digiyouth-counters animated">
    <div class="container digiyouth_counter_content">
      <div class="row">
        <div class="col-md-4 text-center animate-box fadeInUp animated-fast">
          <!-- <div class="counter_img" style="background-image: url(images/counter/happy_trainees.jpg);"></div> -->
          <span class="digiyouth-counter js-counter" data-from="0" data-to="2000" data-speed="5000" data-refresh-interval="50">2000</span><span class="counter_percent">+</span><!-- <span class="counter_percent">%</span> -->
          <div class="digiyouth-counter-label">Hours <br>Of Learning</div>
        </div>
        <div class="col-md-4 text-center animate-box digiyouth_counter_succ_story fadeInUp animated-fast">
          <!-- <div class="counter_img" style="background-image: url(images/counter/success_stories.jpg);"></div> -->
          <span class="digiyouth-counter js-counter" data-from="0" data-to="200" data-speed="5000" data-refresh-interval="50">500</span><span class="counter_percent">+</span>
          <div class="digiyouth-counter-label success_stories_plus">Graduated <br>Students</div>
        </div>
        <div class="col-md-4 text-center animate-box fadeInUp animated-fast">
          <!-- <div class="counter_img" style="background-image: url(images/counter/jobs_assistance.jpg);"></div> -->
          <span class="digiyouth-counter js-counter" data-from="0" data-to="20" data-speed="5000" data-refresh-interval="50">20</span><span class="counter_percent counter_percent1">+</span>
          <div class="digiyouth-counter-label">Partner <br>Companies</div>
        </div>
      </div>
    </div>
  </div>



<!-- testinomials -->

<?php include 'includes/testimonial.php' ?>


<!-- portfolio/featured work -->

<div id="portfolio" class="section md-padding bg-grey">

<div class="container">

<div class="row">

<div class="section-header text-center">
<h2 class="title">Featured Works</h2>
</div>


<div class="col-md-4 col-xs-6 work">
<img class="img-responsive" src="./img/sample1.png" alt="Digiyouth Infotech">
<div class="overlay"></div>
<div class="work-content">
<span>Category</span>
<h3>Personal Blog</h3>
<div class="work-link">
<a href="https://lensationimagix.com/"><i class="fa fa-external-link"></i></a>
<a class="lightbox" href="./img/sample1.png"><i class="fa fa-search"></i></a>
</div>
</div>
</div>


<div class="col-md-4 col-xs-6 work">
<img class="img-responsive" src="./img/sample2.png" alt="Digiyouth Infotech">
<div class="overlay"></div>
<div class="work-content">
<span>Category</span>
<h3>E-Commerce website</h3>
<div class="work-link">
<a href="https://atmyhome.in/"><i class="fa fa-external-link"></i></a>
<a class="lightbox" href="./img/sample2.png"><i class="fa fa-search"></i></a>
</div>
</div>
</div>


<div class="col-md-4 col-xs-6 work">
<img class="img-responsive" src="./img/sample3.png" alt="Digiyouth Infotech">
<div class="overlay"></div>
<div class="work-content">
<span>Category</span>
<h3>Blogging Website</h3>
<div class="work-link">
<a href="http://fitnesslove.info/"><i class="fa fa-external-link"></i></a>
<a class="lightbox" href="./img/work3.jpg"><i class="fa fa-search"></i></a>
</div>
</div>
</div>

</div>
<div class="row">
<div class="col-md-4 col-xs-6 work">
<img class="img-responsive" src="./img/sample4.png" alt="Digiyouth Infotech">
<div class="overlay"></div>
<div class="work-content">
<span>Category</span>
<h3>Business Website</h3>
<div class="work-link">
<a href="./"><i class="fa fa-external-link"></i></a>
<a class="lightbox" href="./img/sample4.png"><i class="fa fa-search"></i></a>
</div>
</div>
</div>


<div class="col-md-4 col-xs-6 work">
<img class="img-responsive" src="./img/sample1.png" alt="Digiyouth Infotech">
<div class="overlay"></div>
<div class="work-content">
<span>Category</span>
<h3>Personal Blog</h3>
<div class="work-link">
<a href="#"><i class="fa fa-external-link"></i></a>
<a class="lightbox" href="./img/sample1.png"><i class="fa fa-search"></i></a>
</div>
</div>
</div>


<div class="col-md-4 col-xs-6 work">
<img class="img-responsive" src="./img/sample2.png" alt="Digiyouth Infotech">
<div class="overlay"></div>
<div class="work-content">
<span>Category</span>
<h3>E-Commerce Website</h3>
<div class="work-link">
<a href="#"><i class="fa fa-external-link"></i></a>
<a class="lightbox" href="./img/sample2.png"><i class="fa fa-search"></i></a>
</div>
</div>
</div>

</div>

</div>

</div>

<!-- services div -->
<?php include 'includes/service-module.php' ?>
<!-- features div -->

<div id="features" class="section md-padding bg-grey">

<div class="container">

<div class="row">

<div class="col-md-6">
<div class="section-header">
<h2 class="title">Why Choose Us</h2>
</div>
<p>Acquire the Skill set of Digital Marketing.</p>
<div class="feature">
<i class="fa fa-check"></i>
<p>100+ Hours of Learning</p>
</div>
<hr>
<div class="feature">
<i class="fa fa-check"></i>
<p>5+ Capstone Projects and case Studies</p>
</div>
<hr>
<div class="feature">
<i class="fa fa-check"></i>
<p>Learn from industry Experts</p>
</div>
<hr>
<div class="feature">
<i class="fa fa-check"></i>
<p>One to One Practical Sessions</p>
</div>
<hr>
<div class="feature">
<i class="fa fa-check"></i>
<p>100% Placement assistance</p>
</div>
<hr>
<div class="feature">
<i class="fa fa-check"></i>
<p>Free Access to Digital Marketing Tools and Softwares</p>
</div>
<hr>
<div class="feature">
<i class="fa fa-check"></i>
<p>Access to Learning Management Software</p>
</div><hr>
<div class="feature">
<i class="fa fa-check"></i>
<p> Flexible Micro Batches</p>
</div>
</div>

<div class="col-md-6">
  <img src="img/about2.jpg" style="width:100%">
<div id="about-slider" class="owl-carousel owl-theme owl-loaded owl-drag">

</div>
</div>


</div>

</div>

</div>



<!-- Quote start -->


<div id="quote" class="section md-padding">

<div class="container">

<div class="row">
  <div class="col-md-4">
    <img src="img/hey2.png">
  </div>
  <div class="col-md-8">
    <h3 style="color:#fff;padding: 50px;font-weight: 600;">“Instead of becoming an addicted consumer of Digital Era, you have once in a lifetime chance to be the creator of  digitalisation”</h3>
  </div>




</div>

</div>

</div>
<!-- 

<div id="blog" class="section md-padding bg-grey">

<div class="container">

<div class="row">

<div class="section-header text-center">
<h2 class="title">Blogs</h2>
</div>


<div class="col-md-4">
<div class="blog">
<div class="blog-img">
<img class="img-responsive" src="./img/blog1.png" alt="">
</div>
<div class="blog-content">
<ul class="blog-meta">
<li><i class="fa fa-user"></i>Anuj Choudhary</li>
<li><i class="fa fa-clock-o"></i>18 Oct</li>
<li><i class="fa fa-comments"></i>57</li>
</ul>
<h3>SEO kya hai? Search engine Optimization | SEO ka pura gyan in Hinglish</h3>
<p>Google apko TAB pROMOTE krega , Jab APKI Audience APKE CONTENT KO PASAND karegI. Is SEO Guide Me, Bahot Jyada Detail me  jane se Pahale. Kya Aap Jante Hai, Kitni Sari Websites puri duniya  me chalai jaa rahi hai? 1,883 ,637,867 Se jyada Online Aur Ye Number Lagatar...</p>
<a href="blog-single.html">Read more</a>
</div>
</div>
</div>


<div class="col-md-4">
<div class="blog">
<div class="blog-img">
<img class="img-responsive" src="./img/blog2.jpg" alt="">
</div>
<div class="blog-content">
<ul class="blog-meta">
<li><i class="fa fa-user"></i>Prabhat Sharma</li>
<li><i class="fa fa-clock-o"></i>8 Nov</li>
<li><i class="fa fa-comments"></i>57</li>
</ul>
<h3>How to start a blog- Most detailed Guide</h3>
<p>Step-by-Step guide on how to start a blog, proper explanation for beginners to expert. Showcase your creativity and earn money.</p>
<a href="blog-single.html">Read more</a>
</div>
</div>
</div>


<div class="col-md-4">
<div class="blog">
<div class="blog-img">
<img class="img-responsive" src="./img/blog3.png" alt="">
</div>
<div class="blog-content">
<ul class="blog-meta">
<li><i class="fa fa-user"></i>Jyoti Yadav</li>
<li><i class="fa fa-clock-o"></i>18 Dec</li>
<li><i class="fa fa-comments"></i>57</li>
</ul>
<h3>SEO Explained | Lets Learn all about Search Engine Optimization(SEO)- Complete Guide</h3>
<p>Search engine optimization (SEO) is a process of driving traffic to your website,Last and the Best SEO Guide you need to Read. 100% Satisfaction Guaranteed.</p>
<a href="blog-single.html">Read more</a>
</div>
</div>
</div>

</div>

</div>

</div>

 -->





<?php include 'includes/footer.php' ?>


<div id="back-to-top"></div>


<div id="preloader" style="display: none;">
<div class="preloader">
<span></span>
<span></span>
<span></span>
<span></span>
</div>
</div>



<script type="text/javascript">
  $('.digiyouth-counter').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});
</script>

</body>

</html>