@extends('app.home')

@section('index')
<!--======= HOME MAIN SLIDER =========-->
<section class="home-slider"> 
  <!-- Slider Loader -->
  <div id="loader" class="hom-slie">
    <div class="tp-loader spinner0"> <span class="dot1"></span> <span class="dot2"></span> <span class="bounce1"></span> <span class="bounce2"></span> <span class="bounce3"></span> </div>
  </div>
  
  <!-- SLIDE Start -->
  <div class="tp-banner-container">
    <div class="tp-banner">
      <ul>
        <!-- SLIDE  -->
        <li data-transition="random" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" > 
          <!-- MAIN IMAGE --> 
          <img src="images/slide-1.jpg"  alt="slider"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"> 
          <!-- LAYERS --> 
          
          <!-- LAYER NR. 2 -->
          <div class="tp-caption sfr font-bold tp-resizeme letter-space-4" 
              data-x="left" data-hoffset="0" 
              data-y="center" data-voffset="-80" 
              data-speed="800" 
              data-start="800" 
              data-easing="Power3.easeInOut" 
              data-splitin="chars" 
              data-splitout="none" 
              data-elementdelay="0.07" 
              data-endelementdelay="0.1" 
              data-endspeed="300" 
              style="z-index: 6; font-size:35px; color:#fff; text-transform:uppercase; white-space: nowrap;">Feel the magic of Creative Design </div>
          
          <!-- LAYER NR. 2 -->
          <div class="tp-caption sfr font-bold tp-resizeme letter-space-3" 
              data-x="left" data-hoffset="0" 
              data-y="center" data-voffset="0" 
              data-speed="800" 
              data-start="1300" 
              data-easing="Power3.easeInOut" 
              data-splitin="chars" 
              data-splitout="none" 
              data-elementdelay="0.07" 
              data-endelementdelay="0.1" 
              data-endspeed="300" 
              style="z-index: 6; font-size:70px; color:#1cd1aa; text-transform:uppercase; white-space: nowrap;">Welcome To Premio </div>
          
          <!-- LAYER NR. 3 -->
          <div class="tp-caption sfb tp-resizeme letter-space-1" 
              data-x="left" data-hoffset="0" 
              data-y="center" data-voffset="70" 
              data-speed="800" 
              data-start="1800" 
              data-easing="Power3.easeInOut" 
              data-splitin="none" 
              data-splitout="none" 
              data-elementdelay="0.1" 
              data-endelementdelay="0.1" 
              data-endspeed="300" 
              style="z-index: 7; font-size:18px;  font-style:italic; color:#fff; max-width: auto; max-height: auto; white-space: nowrap;">You'll Look a Little Lovelier Each Day with Fabulous Pink Creative design </div>
          
          <!-- LAYER NR. 4 -->
          <div class="tp-caption lfb tp-resizeme" 
              data-x="left" data-hoffset="0" 
              data-y="center" data-voffset="150" 
              data-speed="800" 
              data-start="2200" 
              data-easing="Power3.easeInOut" 
              data-elementdelay="0.1" 
              data-endelementdelay="0.1" 
              data-endspeed="300" 
              data-scrolloffset="0"
              style="z-index: 8;"><a href="#." class="btn margin-right-20">Buy Theme</a> <a href="#." class="btn btn-white">Get Started</a> </div>
        </li>
        <!-- SLIDE  -->
        <li data-transition="random" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" > 
          <!-- MAIN IMAGE --> 
          <!-- <img src="images/slide-2.jpg"  alt="slider"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">  -->
          <!-- LAYERS --> 
          
          <!-- LAYER NR. 2 -->
          <div class="tp-caption sfb font-bold tp-resizeme letter-space-4" 
              data-x="left" data-hoffset="0" 
              data-y="center" data-voffset="-80" 
              data-speed="800" 
              data-start="800" 
              data-easing="Power3.easeInOut" 
              data-splitin="words" 
              data-splitout="none" 
              data-elementdelay="0.07" 
              data-endelementdelay="0.1" 
              data-endspeed="300" 
              style="z-index: 6; font-size:35px; color:#fff; text-transform:uppercase; white-space: nowrap;">Our Premio will give you softer skin </div>
          
          <!-- LAYER NR. 2 -->
          <div class="tp-caption sfb font-bold tp-resizeme letter-space-3" 
              data-x="left" data-hoffset="0" 
              data-y="center" data-voffset="0" 
              data-speed="800" 
              data-start="1300" 
              data-easing="Power3.easeInOut" 
              data-splitin="words" 
              data-splitout="none" 
              data-elementdelay="0.07" 
              data-endelementdelay="0.1" 
              data-endspeed="300" 
              style="z-index: 6; font-size:70px; color:#1cd1aa; text-transform:uppercase; white-space: nowrap;">We Deal With Creative Design </div>
          
          <!-- LAYER NR. 3 -->
          <div class="tp-caption sfb tp-resizeme letter-space-1" 
              data-x="left" data-hoffset="0" 
              data-y="center" data-voffset="70" 
              data-speed="800" 
              data-start="1800" 
              data-easing="Power3.easeInOut" 
              data-splitin="none" 
              data-splitout="none" 
              data-elementdelay="0.1" 
              data-endelementdelay="0.1" 
              data-endspeed="300" 
              style="z-index: 7; font-size:18px;  font-style:italic; color:#fff; max-width: auto; max-height: auto; white-space: nowrap;">Premio Stays Sharp 'til The Bottom of the Glass, Nunc mattis vitae dui ut eleifend. </div>
          
          <!-- LAYER NR. 4 -->
          <div class="tp-caption lfb tp-resizeme" 
              data-x="left" data-hoffset="0" 
              data-y="center" data-voffset="150" 
              data-speed="800" 
              data-start="2200" 
              data-easing="Power3.easeInOut" 
              data-elementdelay="0.1" 
              data-endelementdelay="0.1" 
              data-endspeed="300" 
              data-scrolloffset="0"
              style="z-index: 8;"><a href="#." class="btn margin-right-20">Buy Theme</a> </div>
        </li>
        <!-- SLIDE  -->
        <li data-transition="random" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" > 
          <!-- MAIN IMAGE --> 
          <!-- <img src="images/slide-3.jpg"  alt="home_slider3"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">  -->
          <!-- LAYERS --> 
          
          <!-- LAYER NR. 1 -->
          <div class="tp-caption font-bold tp-resizeme" 
              data-x="center" data-hoffset="0" 
              data-y="center" data-voffset="-60" 
              data-speed="100" 
              data-start="800" 
              data-easing="Power3.easeInOut" 
              data-splitin="chars" 
              data-splitout="none" 
              data-elementdelay="0.1" 
              data-endelementdelay="0.1" 
              data-endspeed="300" 
              style="z-index: 5; font-size:45px; color:#fff; max-width: auto; text-transform:uppercase; max-height: auto; white-space: nowrap;">Only The Crumbliest Flakiest </div>
          
          <!-- LAYER NR. 1 -->
          <div class="tp-caption font-bold tp-resizeme" 
              data-x="center" data-hoffset="0" 
              data-y="center" data-voffset="0" 
              data-speed="100" 
              data-start="800" 
              data-easing="Power3.easeInOut" 
              data-splitin="chars" 
              data-splitout="none" 
              data-elementdelay="0.1" 
              data-endelementdelay="0.1" 
              data-endspeed="300" 
              style="z-index: 5; font-size:45px; color:#1cd1aa; max-width: auto; text-transform:uppercase; max-height: auto; white-space: nowrap;">Corporate business </div>
          
          <!-- LAYER NR. 2 -->
          <div class="tp-caption font-italic font-lora sfb tp-resizeme text-center" 
              data-x="center" data-hoffset="0" 
              data-y="center" data-voffset="80" 
              data-speed="300" 
              data-start="1500" 
              data-easing="Power3.easeInOut" 
              data-splitin="none" 
              data-splitout="none" 
              data-elementdelay="0.07" 
              data-endelementdelay="0.1" 
              data-endspeed="300" 
              style="z-index: 7; font-size:18px;  font-style:italic; color:#fff; max-width: auto; max-height: auto; white-space: nowrap;">We are driven by creating experiences that deliver results for your business
            and for your <br>
            consumers. Our approach is simple and iterative.Sed ut perspiciatis unde omnis.</div>
          
          <!-- LAYER NR. 3 -->
          <div class="tp-caption skewfromleft tp-resizeme" 
              data-x="center" data-hoffset="0" 
              data-y="center" data-voffset="170" 
              data-speed="500" 
              data-start="2000" 
              data-easing="Power3.easeInOut" 
              data-splitin="none" 
              data-splitout="none" 
              data-elementdelay="0.1" 
              data-endelementdelay="0.1" 
              data-endspeed="300" 
              style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;"><a href="#." class="btn">PURCHASE NOW</a> </div>
        </li>
      </ul>
    </div>
  </div>
</section>

<!-- Content -->
<div id="content"> 
  
  <!-- Welcome -->
  <section class="padding-top-150 padding-bottom-150">
    <div class="container"> 
      
      <!-- Heading -->
      <div class="heading text-center">
        <h4>What We Offer</h4>
        <span>Creative Design</span>
        <hr>
      </div>
      
      <!-- OFFER -->
      <div class="offers">
        <ul class="row">
          <li class="col-sm-4"> <img src="images/offer-img-1.jpg" class="img-responsive" alt="" >
            <h5>What We Do</h5>
            <hr class="main">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sit amet felis at turpis aliquam maximus. Cras nec mauris ex. Aliquam nibh felis</p>
            <a href="#.">Read more <i class="fa fa-long-arrow-right"></i></a> </li>
          <li class="col-sm-4"> <img src="images/offer-img-2.jpg" class="img-responsive" alt="" >
            <h5> Who We Are</h5>
            <hr class="main">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sit amet felis at turpis aliquam maximus. Cras nec mauris ex. Aliquam nibh felis</p>
            <a href="#.">Read more <i class="fa fa-long-arrow-right"></i></a> </li>
          <li class="col-sm-4"> <img src="images/offer-img-3.jpg" class="img-responsive" alt="" >
            <h5>How We Work</h5>
            <hr class="main">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sit amet felis at turpis aliquam maximus. Cras nec mauris ex. Aliquam nibh felis</p>
            <a href="#.">Read more <i class="fa fa-long-arrow-right"></i></a> </li>
        </ul>
      </div>
    </div>
  </section>
  
  <!-- Gallery -->
  <section>
    <div class="container"> 
      
      <!-- Heading -->
      <div class="heading text-center">
        <h4>Our Work</h4>
        <span>Bring Out the Porfolio</span>
        <hr>
      </div>
    </div>
    
    <!-- PORTFOLIO -->
    <div class="portfolio port-wrap"> 
      <!-- Work Filter -->
      <ul class="portfolio-filter text-center margin-bottom-80">
        <li><a class="active" href="#." data-filter="*">ALL</a></li>
        <li><a href="#." data-filter=".pf-branding-design">Branding </a></li>
        <li><a href="#." data-filter=".pf-photography">Media </a></li>
        <li><a href="#." data-filter=".pf-web-design">Illustration </a></li>
        <li><a href="#." data-filter=".pf-digital-art">UI Design </a></li>
      </ul>
      
      <!-- PORTFOLIO ITEMS -->
      
      <div class="items row col-4"> 
        
        <!-- ITEM -->
        <article class="portfolio-item pf-branding-design pf-web-design">
          <div class="portfolio-image"> <a href="#."> <img alt="" src="images/img-1.jpg"> </a> </div>
          <div class="portfolio-overlay">
            <div class="position-center-center"> <a href="#."><i class="ion-link"></i></a> </div>
          </div>
        </article>
        
        <!-- ITEM -->
        <article class="portfolio-item pf-photography">
          <div class="portfolio-image"> <a href="#."> <img alt="" src="images/img-2.jpg"> </a> </div>
          <div class="portfolio-overlay">
            <div class="position-center-center"> <a href="#."><i class="ion-link"></i></a> </div>
          </div>
        </article>
        
        <!-- ITEM -->
        <article class="portfolio-item pf-web-design pf-branding-design">
          <div class="portfolio-image"> <a href="#."> <img alt="" src="images/img-3.jpg"> </a> </div>
          <div class="portfolio-overlay">
            <div class="position-center-center"> <a href="#."><i class="ion-link"></i></a> </div>
          </div>
        </article>
        
        <!-- ITEM -->
        <article class="portfolio-item pf-branding-design pf-digital-art">
          <div class="portfolio-image"> <a href="#."> <img alt="" src="images/img-6.jpg"> </a> </div>
          <div class="portfolio-overlay">
            <div class="position-center-center"> <a href="#."><i class="ion-link"></i></a> </div>
          </div>
        </article>
        
        <!-- ITEM -->
        <article class="portfolio-item pf-web-design pf-digital-art pf-branding-design">
          <div class="portfolio-image"> <a href="#."> <img alt="" src="images/img-4.jpg"> </a> </div>
          <div class="portfolio-overlay">
            <div class="position-center-center"> <a href="#."><i class="ion-link"></i></a> </div>
          </div>
        </article>
        
        <!-- ITEM -->
        <article class="portfolio-item pf-branding-design pf-digital-art">
          <div class="portfolio-image"> <a href="#."> <img alt="" src="images/img-5.jpg"> </a> </div>
          <div class="portfolio-overlay">
            <div class="position-center-center"> <a href="#."><i class="ion-link"></i></a> </div>
          </div>
        </article>
      </div>
    </div>
    <div class="text-center"></div>
  </section>
  
  <!-- TEAM -->
  <section class="innovaction padding-top-150 padding-bottom-150">
    <div class="container">
      <div class="row">
        <div class="col-sm-6"> 
          
          <!-- Heading -->
          <div class="heading text-left white">
            <h4>the best Innovation design</h4>
            <span>Our Skills</span>
            <hr>
          </div>
          
          <!-- Skills -->
          <div class="team-skills "> 
            <!-- Skills Bars -->
            <div class="progress-bars style-1"> 
              <!-- Photoshop -->
              <div class="bar">
                <p>branding </p>
                <div class="progress" data-percent="95%">
                  <div class="progress-bar"> <span class="progress-bar-tooltip caret-down">95%</span></div>
                </div>
              </div>
              
              <!-- ILLUSTRATOR -->
              <div class="bar">
                <p>HTML5 CSS3</p>
                <div class="progress" data-percent="75%">
                  <div class="progress-bar progress-bar-primary"><span class="progress-bar-tooltip caret-down">75%</span> </div>
                </div>
              </div>
              
              <!-- ILLUSTRATOR -->
              <div class="bar">
                <p>Web Design</p>
                <div class="progress" data-percent="80%">
                  <div class="progress-bar progress-bar-primary"><span class="progress-bar-tooltip caret-down">80%</span> </div>
                </div>
              </div>
              
              <!-- ILLUSTRATOR -->
              <div class="bar">
                <p>Web Development</p>
                <div class="progress" data-percent="60%">
                  <div class="progress-bar progress-bar-primary"><span class="progress-bar-tooltip caret-down">60%</span> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Image -->
        <div class="col-sm-6 text-right"> <img class="img-responsive" src="images/skills-img.png" alt="" > </div>
      </div>
    </div>
  </section>
  
  <!-- TEAM -->
  <section class="padding-top-150 padding-bottom-150">
    <div class="container"> 
      
      <!-- Heading -->
      <div class="heading text-center">
        <h4>Our Team</h4>
        <span>The Top Pick... Team Members</span>
        <hr>
      </div>
      
      <!-- TEAM -->
      <div class="team">
        <div class="row"> 
          
          <!-- MEMBER -->
          <div class="col-md-4">
            <article> <img class="img-responsive" src="images/member-1.jpg" alt="">
              <div class="team-hover">
                <div class="team-name">
                  <h5>Alex Jones</h5>
                  <span>Code Worrior</span><a href="#."><i class="fa fa-facebook"></i></a> <a href="#."><i class="fa fa-twitter"></i></a> <a href="#."><i class="fa fa-dribbble"></i></a> </div>
              </div>
            </article>
          </div>
          
          <!-- MEMBER -->
          <div class="col-md-4">
            <article> <img class="img-responsive" src="images/member-2.jpg" alt="">
              <div class="team-hover">
                <div class="team-name">
                  <h5>Alex Jones</h5>
                  <span>Code Worrior</span><a href="#."><i class="fa fa-facebook"></i></a> <a href="#."><i class="fa fa-twitter"></i></a> <a href="#."><i class="fa fa-dribbble"></i></a> </div>
              </div>
            </article>
          </div>
          
          <!-- MEMBER -->
          <div class="col-md-4">
            <article> <img class="img-responsive" src="images/member-3.jpg" alt="">
              <div class="team-hover">
                <div class="team-name">
                  <h5>Alex Jones</h5>
                  <span>Code Worrior</span><a href="#."><i class="fa fa-facebook"></i></a> <a href="#."><i class="fa fa-twitter"></i></a> <a href="#."><i class="fa fa-dribbble"></i></a> </div>
              </div>
            </article>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- FACTS -->
  <section class="facts parallax-bg padding-top-150 padding-bottom-150" data-stellar-background-ratio="0.5">
    <div class="container"> 
      
      <!-- Heading -->
      <div class="heading text-center white">
        <h4>Fun FActs</h4>
        <span>Don't Be Vague</span>
        <hr>
      </div>
      <div class="row"> 
        <!-- Team Member -->
        <div class="col-md-3 margin-bottom-30"> <i class="icon-anchor"></i>
          <div class="fats-conter"> <span class="number"> <span class="timer" data-speed="2000" data-refresh-interval="100" data-to="35" data-from="0">500 </span> </span>
            <h5>Project Completed</h5>
          </div>
        </div>
        
        <!-- Line Of Codes -->
        <div class="col-md-3 margin-bottom-30"> <i class="icon-pencil"></i>
          <div class="fats-conter"> <span class="number"> <span class="timer" data-speed="2000" data-refresh-interval="100" data-to="5225" data-from="0">254 </span> </span>
            <h5>Line Of Codes</h5>
          </div>
        </div>
        
        <!-- Satisfied Client -->
        <div class="col-md-3  margin-bottom-30"> <i class="icon-heart"></i>
          <div class="fats-conter"> <span class="number"> <span class="timer" data-speed="2000" data-refresh-interval="100" data-to="4977" data-from="0">184 </span> </span>
            <h5>Happy Clients</h5>
          </div>
        </div>
        
        <!-- PSD file included -->
        <div class="col-md-3 margin-bottom-30"> <i class="icon-bike"></i>
          <div class="fats-conter"> <span class="number"> <span class="timer" data-speed="2000" data-refresh-interval="100" data-to="178" data-from="0">35k </span> </span>
            <h5>Km Drive</h5>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Testimonial -->
  <section class="testimonial padding-top-150 padding-bottom-150">
    <div class="container"> 
      
      <!-- Heading -->
      <div class="heading text-center">
        <h4>Our Testimonials</h4>
        <span>Solutions For a Small Testimonial</span>
        <hr>
      </div>
      <div class="row">
        <div class="col-md-12"> 
          
          <!-- Test Slider -->
          <div class="testi">
            <div class="two-slider"> 
              
              <!-- Slider 1 -->
              <div class="in-testi"> 
                
                <!-- Avatars -->
                <div class="avatars"> <img src="images/avatar-1.jpg" alt="" > </div>
                <div class="testi-name">
                  <h5>Steven Smith</h5>
                  <span>CEO Of Premio</span> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i> </div>
                <p>They're creepy and they're kooky mysterious and spooky. They're all together ooky the Addams What might be right for you may not be to right for some Now the world. </p>
              </div>
              
              <!-- Slider 1 -->
              
              <div class="in-testi"> 
                
                <!-- Avatars -->
                <div class="avatars"> <img src="images/avatar-2.jpg" alt="" > </div>
                <div class="testi-name">
                  <h5>Steven Smith</h5>
                  <span>Designer</span> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i> </div>
                <p>They're creepy and they're kooky mysterious and spooky. They're all together ooky the Addams What might be right for you may not be to right for some Now the world. </p>
              </div>
              <!-- Slider 1 -->
              <div class="in-testi"> 
                
                <!-- Avatars -->
                <div class="avatars"> <img src="images/avatar-1.jpg" alt="" > </div>
                <div class="testi-name">
                  <h5>Steven Smith</h5>
                  <span>Designer</span> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i> </div>
                <p>They're creepy and they're kooky mysterious and spooky. They're all together ooky the Addams What might be right for you may not be to right for some Now the world. </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- CLIENTS -->
      <div class="clients-img col-4 padding-top-150">
        <ul class="row">
          <li> <a href="#."> <img src="images/c-img-1.png" class="img-responsive" alt=""> </a></li>
          <li> <a href="#."> <img src="images/c-img-2.png" class="img-responsive" alt=""> </a> </li>
          <li> <a href="#."> <img src="images/c-img-3.png" class="img-responsive" alt=""> </a></li>
          <li> <a href="#."> <img src="images/c-img-4.png" class="img-responsive" alt=""> </a> </li>
        </ul>
      </div>
    </div>
  </section>
  
  <!-- Blog -->
  <section class="blog light-gray-bg padding-bottom-100 padding-top-100">
    <div class="container"> 
      
      <!-- Heading -->
      <div class="heading text-center">
        <h4>Latest News</h4>
        <span>Creative Blogs</span>
        <hr>
      </div>
      
      <!-- Row -->
      <div class="row"> 
        
        <!-- BLOG POST -->
        <div class="col-md-4">
          <article> <img class="img-responsive" src="images/post-img-1.jpg" alt="" >
            <div class="post-info">
              <div class="post-in">
                <div class="extra"> <span><i class="icon-calendar"></i>Aug 29, 2015</span> </div>
                <a href="#." class="tittle-post">It's Good To Talk Photography </a> <a href="#.">Read More <i class="fa fa-long-arrow-right margin-left-10"></i></a> </div>
            </div>
          </article>
        </div>
        
        <!-- BLOG POST -->
        <div class="col-md-4">
          <article> <img class="img-responsive" src="images/post-img-2.jpg" alt="" >
            <div class="post-info">
              <div class="post-in">
                <div class="extra"> <span><i class="icon-calendar"></i>Aug 29, 2015</span> </div>
                <a href="#." class="tittle-post">It's Good To Talk Photography </a> <a href="#.">Read More <i class="fa fa-long-arrow-right margin-left-10"></i></a> </div>
            </div>
          </article>
        </div>
        
        <!-- BLOG POST -->
        <div class="col-md-4">
          <article> <img class="img-responsive" src="images/post-img-3.jpg" alt="" >
            <div class="post-info">
              <div class="post-in">
                <div class="extra"> <span><i class="icon-calendar"></i>Aug 29, 2015</span> </div>
                <a href="#." class="tittle-post">It's Good To Talk Photography </a> <a href="#.">Read More <i class="fa fa-long-arrow-right margin-left-10"></i></a> </div>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>
  
  <!-- CONTACT US -->
  <section class="contact-us padding-top-150 padding-bottom-150">
    <div class="container"> 
      
      <!-- Heading -->
      <div class="heading text-center white">
        <h4>Contact Us</h4>
        <span>Get in Touch</span>
        <hr>
      </div>
      <div class="row"> 
        
        <!-- FORM -->
        <div class="col-md-8">
          <div class="contact-form"> 
            
            <!-- FORM -->
            <form role="form" id="contact_form" class="contact-form" method="post" onSubmit="return false">
              <ul class="row">
                <li class="col-sm-6">
                  <label>*NAME
                    <input type="text" class="form-control" name="name" id="name" placeholder="">
                  </label>
                </li>
                <li class="col-sm-6">
                  <label>*EMAIL
                    <input type="text" class="form-control" name="email" id="email" placeholder="">
                  </label>
                </li>
                <li class="col-sm-12">
                  <label>*MESSAGE
                    <textarea class="form-control" name="message" id="message" rows="5" placeholder=""></textarea>
                  </label>
                </li>
                <li class="col-sm-12 no-margin">
                  <button type="submit" value="submit" class="btn" id="btn_submit" onClick="proceed();">SEND NOW <i class="fa fa-long-arrow-right"></i></button>
                </li>
              </ul>
            </form>
          </div>
        </div>
        
        <!-- FORM -->
        <div class="col-md-4">
          <ul class="contact-info">
            
            <!-- Email -->
            <li>
              <div class="media-left"> <i class="fa fa-envelope"></i> </div>
              <div class="media-body">
                <h6>Email</h6>
                <p>premio@.co.uk</p>
                <p>domain@.co.uk</p>
              </div>
            </li>
            
            <!-- Address -->
            <li>
              <div class="media-left"> <i class="fa fa-map-marker"></i> </div>
              <div class="media-body">
                <h6>Address</h6>
                <p>Andrew Cross 50 Front Street
                  KNOTTY GREEN HP9 2WB</p>
              </div>
            </li>
            
            <!-- Address -->
            <li>
              <div class="media-left"> <i class="fa fa-phone"></i> </div>
              <div class="media-body">
                <h6>Phone</h6>
                <p>+44 078-5099-1689</p>
                <p>+44 078-5099-1859</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
</div>


@endsection

