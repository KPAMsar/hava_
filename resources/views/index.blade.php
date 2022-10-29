@include('includes.header')

<!-- start slider section -->
<section class="no-padding main-slider height-100 mobile-height wow fadeIn border-color-deep-pink border-bottom ">
    <div class="swiper-full-screen swiper-container height-100 width-100 black-move">
        <div class="swiper-wrapper">
            <!-- start slider item -->
            <div class="swiper-slide cover-background" style="background-image:url('img/slider1.jpg');">
                <div class="container position-relative full-screen">
                    <div class="col-md-12 slider-typography text-md-left">
                        <div class="slider-text-middle-main">
                            <div class="slider-text-middle">

                                @if(Session::has('success'))
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <div class="alert alert-success" role="alert">
                                    {{ Session('success') }}
                                </div>
                                @endif
                                <h1 class="alt-font text-extra-dark-gray font-weight-700 letter-spacing-minus-1 line-height-80  text-align-center padding-left-40px  margin-35px-bottom lg-width-30 md-width-30 lg-line-height-auto sm-width-100  sm-margin-50px-top sm-margin-15px-bottom slider_txt">
                                    Ahava Development Initiative (ADI)</h1>
                                <h class="text-extra-dark-gray text-large margin-four-bottom text-align-center
                                         sm-margin-15px-bottom  font-size-30px slider_txt">Is a non-profit organisation
                                    contributing to societal transformation.We seek to tackle the root causes of socio economic crimes 
                                    in Nigeria, which we believe to be, poverty, hunger, inequality, competitiveness in which relationships 
                                    are undermined, decline in social values specifically ethics that emphasize honesty and justice. The vast
                                     social and economic disparity in the country has led to anger, tension, violence, and outright criminality;
                                      We are also concerned with the radicalization of children into terrorism in some instances. The crisis 
                                      in Nigeria is not mainly a financial or intellectual crisis, it is more of a moral, 
                                    cultural, ideological and relational crisis which has resulted to the resistance to economic development and progress. 
                                     </h>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end slider item -->
            <!-- start slider item -->
            <div class="swiper-slide cover-background" style="background-image:url('img/slider2.jpg');">
                <div class="container position-relative full-screen">
                    <div class="col-md-12 slider-typography text-md-left">
                        <div class="slider-text-middle-main">
                            <div class="slider-text-middle">
                                <h1 class="alt-font text-extra-dark-gray font-weight-700 letter-spacing-minus-1 line-height-80  text-align-center padding-left-40px  margin-35px-bottom lg-width-30 md-width-30 lg-line-height-auto sm-width-100  sm-margin-50px-top sm-margin-15px-bottom slider_txt">
                                </h1>
                                <h class="text-extra-dark-gray text-large margin-four-bottom text-align-center sm-margin-15px-bottom  font-size-30px slider_txt " > 
                                 We are championing a relational revolution, reorientating individuals’ mindsets on productivity and values, 
                                then empowering them in their transformed versions.
                                We are promoting the adjustment of social programs that are compatible with the demands faced by developing
                                 nations in 
                                the 21st century. Hence, we design community-based interventions that prioritises relational well-being, 
                                brotherliness, productivity, moral order, virtue and communion rather than competition,display, power, or greed.
 </h>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end slider item -->

            <!-- start slider item -->
            <div class="swiper-slide cover-background" style="background-image:url('img/slider3.jpg');">
                <div class="container position-relative full-screen">
                    <div class="col-md-12 slider-typography text-md-left">
                        <div class="slider-text-middle-main">
                            <div class="slider-text-middle" style="text-align: center;padding-left: auto;padding-right: auto;">
                                <h1 class="alt-font text-extra-dark-gray font-weight-700 letter-spacing-minus-1 line-height-80  text-align-center padding-left-40px  margin-35px-bottom lg-width-30 md-width-30 lg-line-height-auto sm-width-100  sm-margin-50px-top sm-margin-15px-bottom slider_txt">
                                    Our Vision</h1>
                                <h class="text-extra-dark-gray text-large margin-four-bottom text-align-center sm-margin-15px-bottom  font-size-30px slider_txt" style="font-size:30px;">
                                  Improving living standards & tackling the root causes of socioeconomic crimes.</h>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end slider item -->

            <!-- start slider item -->
            <div class="swiper-slide cover-background" style="background-image:url('img/slider4.jpg'); height:100%;">
                <div class="container position-relative full-screen">
                    <div class="col-md-12 slider-typography text-md-left">
                        <div class="slider-text-middle-main">
                            <div class="slider-text-middle">
                                <h1 class="alt-font text-extra-dark-gray font-weight-700 
                                        letter-spacing-minus-1 line-height-80  text-align-center
                                         padding-left-40px  margin-35px-bottom lg-width-30 md-width-30 
                                         lg-line-height-auto sm-width-100  sm-margin-50px-top sm-margin-15px-bottom 
                                         slider_txt">Our Mission</h1>
                                <h class="text-extra-dark-gray text-large margin-four-bottom text-align-center sm-margin-15px-bottom  font-size-30px slider_txt" style="font-size:30px;">
                                    We are reorganizing the social and economic system through bridging the gap between people of all social and financial backgrounds, sharing, reorientating on values and productivity then empowering individuals in their transformed versions.
                                </h>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end slider item -->


            <!-- end slider item -->
        </div>
        <!-- start slider pagination -->
        <div class="swiper-pagination swiper-full-screen-pagination"></div>
        <div class="swiper-button-next swiper-button-black-highlight d-none"></div>
        <div class="swiper-button-prev swiper-button-black-highlight d-none"></div>
        <!-- end slider pagination -->
    </div>
</section>
<section class="wow fadeIn pb-0 position-relative parallax sm-background-image-center half-section" data-stellar-background-ratio="0.5" style="background-image:url('img/bg.jpg');" id="whoweare">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-8 col-lg-9 text-extra-dark-gray text-center last-paragraph-no-margin">
                <h5 class="alt-font  font-weight-600">What we do</h5>
            </div>
        </div>

    </div>
    <div class="row margin-five-bottom ">
        <!-- start features box item -->
        <div class="col-12 col-lg-3 col-md-3 md-margin-four-bottom  sm-margin-30px-bottom wow fadeInUp last-paragraph-no-margin">
            <div class="wwd text-medium text-center border-radius-4 position-relative h-100">
                <div class="d-inline-block margin-20px-bottom">
                    <i class="border-color-deep-pink border
                                 text-extra-dark-gray bg-white icon-round-medium">
                        <img src="css/icons/share.png">
                    </i>
                </div>


                <div class="text-extra-dark-gray font-weight-400 margin-10px-bottom">
                    <b> We Share</b><br>
                    We share simple acts of kindness through our livelihood program, such as  providing basic 
                    life essentials and relief to families living below the poverty line and encourage others to do same.

                </div>
            </div>
        </div>
        <!-- end features box item -->
        <!-- start features box item -->
        <div class="col-12 col-lg-3 col-md-3 md-margin-four-bottom sm-margin-30px-bottom wow fadeInDown last-paragraph-no-margin" data-wow-delay="0.2s">
            <div class="wwd text-medium text-center border-radius-4 position-relative h-100">
                <div class="d-inline-block margin-20px-bottom"><i class="material-icons-outlined  border-color-deep-pink bg-white text-extra-dark-gray border icon-round-medium">

                        <img src="css/icons/educate.png"> </i></div>
                <div class="text-extra-dark-gray font-weight-400 margin-10px-bottom">
                    <b> Educate</b><br>

                    We engage in peace building education amongst the youth to reduce the
                    prospects of conflicts in our communities. We also educate the youth on
                    nation building, patriotic culture
                    and safe guarding the nations gains (including the physical social amenities
                    in their communities).<br>


                </div>
            </div>
        </div>
        <!-- end features box item -->
        <!-- start features box item -->
        <div class="col-12 col-lg-3 col-md-3 sm-margin-30px-bottom wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.4s">
            <div class="wwd text-medium text-center border-radius-4 position-relative h-100">
                <div class="d-inline-block margin-20px-bottom"><i class=" border-color-deep-pink 
                                bg-white text-extra-dark-gray border icon-round-medium">

                        <img src="css/icons/advocate.png"></i></div>
                <div class="text-extra-dark-gray font-weight-400 margin-10px-bottom">
                    <b> Advocate</b><br>
                    We fight for social justice. We demand accountable governance
                    on issues relating to the marginalized. We tackle inequalities
                    that accelerate poverty and promote an inter-reliant culture
                    through our supported sponsored social mobility, to lift one
                    person at a time out of poverty.
                </div>
            </div>
        </div>

        <!-- end features box item -->
        <!-- start features box item -->
        <div class="col-12 col-lg-3 col-md-3 sm-margin-30px-bottom wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.4s">
            <div class="wwd text-medium text-center border-radius-4 position-relative h-100">
                <div class="d-inline-block margin-20px-bottom"><i class="border-color-deep-pink bg-white text-extra-dark-gray border icon-round-medium">
                        <img src="css/icons/mobilize.png"></i></div>
                <div class="text-extra-dark-gray font-weight-400 margin-10px-bottom">
                    <b> Mobilize</b><br>
                    We promote youth participation in productive activities and
                    encourage dignity of labor.
                    We are building an inclusive society and mobilising
                    funds for socially impactful initiatives.
                </div>
            </div>
        </div>

        <!-- end features box item -->

        <!-- end features box item -->
    </div>
    </div>

    <!-- <section class="wow fadeIn pb-0 position-relative parallax sm-background-image-center half-section" data-stellar-background-ratio="0.5" style="background-image:url('img/bg.jpg');">
     			<div class="opacity-full bg-dark-gray"></div>
            <div class="container" id="whatwedo">
                <div class="row justify-content-center margin-two-top">
                    <div class="col-12 col-xl-8 text-white col-lg-9 text-center last-paragraph-no-margin">
                        <h5 class="alt-font  font-weight-600">What We Do</h5>
                        <p class="width-90 mx-auto text-medium font-weight-400 d-inline-block sm-width-100">We are investors in human capital. We do this by organizing workshops both virtually and otherwise with industry experts for Nigerian undergrads. We also further equip them with hands-on work experience through internship placements in multiple industries. </p>
                    </div>
                </div>
                 <div class="row justify-content-center">
                    <div class="col-5 col-xl-3 col-sm-4 text-white col-lg-3 text-center">
                        <img src="img/bulb.png" alt="bulb" />
                    </div>
                </div>
            </div> -->
</section>

<section class="pb-0 half-section wow fadeIn bg-gradd cover-background text-center" id="strategy">
    <div class="opacity-medium bg-extra-dark-gray"></div>
    <div class="container">
        <div class="row justify-content-center sm-margin-30px-bottom margin-60px-bottom">
            <div class="col- col-xl-6 text-white col-lg-6 col-md-12  last-paragraph-no-margin">
                <img src="css/icons/vision.png">
                <h5 class="alt-font font-weight-600">Our Vision</h5>
                <p class="mx-auto text-medium font-weight-400 d-inline-block sm-width-100">Improving living standards & tackling the root causes of socioeconomic crimes.
                    </span>
                    <br /><br />
                    <!-- <a  onclick="myFunctionn()" id="myBtnn" ><span class="text-medium text-deep-pink">Read More&nbsp;&nbsp;<i class="fa fa-arrow-right mr-0" aria-hidden="true"></i></span></a></p> -->
            </div>
            <div class="col- col-xl-6 text-white col-lg-6  col-md-12 last-paragraph-no-margin">
                <img src="css/icons/mission.png">
                <h5 class="alt-font font-weight-600">Our Mission</h5>
                <p class="mx-auto text-medium font-weight-400 d-inline-block sm-width-100">We are reorganizing the social and economic system through bridging the gap between people of all social and financial backgrounds, sharing, reorientating on values and productivity then empowering individuals in their transformed versions.
                    </span>
                    <br /><br />
                    <!-- <a  onclick="myFunctionn()" id="myBtnn" ><span class="text-medium text-deep-pink">Read More&nbsp;&nbsp;<i class="fa fa-arrow-right mr-0" aria-hidden="true"></i></span></a></p> -->
            </div>
        </div>
    </div>
</section>


</section>


<section>
    <div class="container">
        <!-- <div class="row justify-conthsla#af0a20, 49%, 0.932)4%, 49%, 0.932)0%, 43%, 0.932)0%, 43%, 0.932) 70%, 42%, 0.932) 70%, 42%, 0.932) 70%, 42%, 0.932) 70%, 42%, 0.932)42%, 48%, 0.932)42%, 48%, 0.932)42%, 48%, 0.932)42%, 48%, 0.932), 42%, 48%, 0.932)ter">
                <div class="col-12 col-xl-8 col-lg-9 text-extra-dark-gray text-center last-paragraph-no-margin">
                    <h5 class="alt-font  top_bal font-weight-600" style="text-align: center;">Our Programs</h5>
                </div>
                
            </div> -->
        <div class="row justify-content-center">
            <div class="col-12 col-xl-8 col-lg-12 text-extra-dark-gray 
                text-center last-paragraph-no-margin">
                <h5 class="alt-font  font-weight-600 obj" style="padding-top: 10%;">Our Programs </h5>
            </div>
        </div>
        <div class="row position-relative">
            <div class="swiper-container text-extra-dark-gray swiper-pagination-bottom 
           
           
         blog-slider  
           
           black-move blog-slider ">
                <div class="swiper-wrapper">
                    <!-- start testimonial item -->
                    <div class=" col-lg-4  swiper-slide md-margin-four-bottom">

                        <div class="margin-half-all bg-llight-gray border-radius-10 box-shadow-light padding-seven-all sm-padding-30px-all">
                            <h5 class="alt-font  font-weight-600"> Ahava livelihood and social mobility program</h5>
                            <p class="mx-auto text-medium font-weight-400 md-margin-15px-bottom sm-margin-20px-bottom">
                            Our initiative seeks to adopt the Peacebuilding, Conflict prevention
                          and preventive diplomacy model which undertakes activities that vary from 
                          broad and long-term, to targeted and short-term, and can be employed simultaneously. Our 
                          preventive work is to 
                          urge restraint and facilitate the de-escalation that paves the way for reconciliation.
                                <a href="{{ route('livelihood')}}"><span class="text-medium text-deep-pink">More&nbsp;&nbsp;<i class="fa fa-arrow-right mr-0" aria-hidden="true"></i></span></a>
                            </p>

                        </div>
                    </div>
                    <!-- end testimonial item -->





















                    <!-- start testimonial item -->
                    <div class=" col-lg-4 swiper-slide md-margin-four-bottom">
                        <div class="margin-half-all bg-llight-gray border-radius-10 box-shadow-light padding-seven-all sm-padding-30px-all">
                            <h5 class="alt-font  font-weight-600">Ahava Social Fund Management </h5>
                            <p class="mx-auto text-medium font-weight-400 md-margin-15px-bottom sm-margin-20px-bottom">
                                A fund management pool for socially conscious investors we operate on a businesslike
                                approach of private equities to operate. We are a credible philanthropic
                                fund manager for donors to help them increase the positive impact of philanthropic
                                giving.</p>
                            <a href=""><span class="text-medium text-deep-pink">More&nbsp;&nbsp;<i class="fa fa-arrow-right mr-0" aria-hidden="true"></i></span></a>
                        </div>
                    </div>
                    <!-- end testimonial item -->

                    <div class=" col-lg-4  swiper-slide md-margin-four-bottom">
                        <div class="margin-half-all bg-llight-gray border-radius-10 box-shadow-light padding-seven-all sm-padding-30px-all">
                            <h5 class="alt-font  font-weight-600">Ahava Patroitism and Peacebuilding Program</h5>
                            <p class="mx-auto text-medium font-weight-400 md-margin-15px-bottom sm-margin-20px-bottom">
                                A place where we can educate a future generation of peacebuilders. And a space to
                                transform our mindset. Empowering civic action toward a culture of peace, compassion
                                and values.</p>
                            <a href="ahava-love.html"><span class="text-medium text-deep-pink">More&nbsp;&nbsp;<i class="fa fa-arrow-right mr-0" aria-hidden="true"></i></span></a>
                        </div>
                    </div>
                    <!-- end testimonial item -->

                    <!-- end testimonial item -->
                </div>
            </div>
        </div>

    </div>
</section>

<!--
       <section class="pb-0 half-section wow fadeIn bg-gradd2 cover-background text-center" id="strategy">
            <div class="opacity-medium bg-extra-dark-gray"></div>
        	 <div class="container">
                <div class="row justify-content-center sm-margin-30px-bottom margin-60px-bottom">
                    <div class="col-12 col-xl-8 text-white col-lg-9 last-paragraph-no-margin">
                        <h5 class="alt-font font-weight-600">Our Strategy</h5>
                        <p class="mx-auto text-medium font-weight-400 d-inline-block sm-width-100">Through a tailored, robust and well-crafted solution, we provide training for select Nigerian undergraduates and also provide them with the opportunity to work in first class organizations cutting across technology, telecommunications, banking, construction, oil & gas and media sectors in Nigeria.<span id="dotss">..</span><span id="moree"><br/><br/>
                 Candidates are chosen through a well-structured and open process with focus on Nigerian university students who are hardworking, driven and responsible.</span>
                 <br/><br/>
                  <a  onclick="myFunctionn()" id="myBtnn" ><span class="text-medium text-deep-pink">Read More&nbsp;&nbsp;<i class="fa fa-arrow-right mr-0" aria-hidden="true"></i></span></a></p>
                    </div>
                </div>
            </div>
        </section>
        <!-- <section class="highlights wow fadeIn pb-0 position-relative parallax sm-background-image-center" data-stellar-background-ratio="0.5" style="background-image:url('img/bg.jpg'); padding-top:150px!important;" id="gallery">

 			<div class="container">
     				<h5 class="alt-font  font-weight-600 text-center text-black">Our Gallery</h5>

 		<div class="row position-relative">
            <div class="swiper-container text-extra-dark-gray swiper-pagination-bottom black-move blog-slider swiper-three-slides">
                <div class="swiper-wrapper">
                    <div class="col-lg-4 col-md-6 col-sm-12 swiper-slide swiper-slide-post">
                        <div class="t" style="height: 340px; background: url(_assets/gallery/Atlantic/IMG_0770.html) center top / cover;  margin-right: 2px; margin-left:2px;" data-swiper-slide-index="3" role="group" aria-label="1 / 14">
                        <div class="swiper-slide-inner">
                        <a target="_blank" class="abs_link" href="gallery.html"></a>
                        <div class="overlay"></div>
                        <article class="highlights-article">
                            <h3>Atlantic Hall<br>Outreach</h3>
                        </article>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 swiper-slide swiper-slide-post">
                        <div class="" style="height: 340px; background: url(_assets/gallery/Childsville/IMG_5900.html) center top / cover;  margin-right: 2px; margin-left:2px;" data-swiper-slide-index="1" role="group" aria-label="1 / 14">
                        <div class="swiper-slide-inner">
                        <a target="_blank" class="abs_link" href="gallery.html"></a>
                        <div class="overlay"></div>
                        <article class="highlights-article">
                            <h3>Childsville<br>Outreach</h3>
                        </article>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 swiper-slide swiper-slide-post">
                        <div class="" style="height: 340px; background: url(_assets/gallery/Bridge/DSC_9634.html) center top / cover;  margin-right: 2px; margin-left:2px;" data-swiper-slide-index="2" role="group" aria-label="1 / 14">
                        <div class="swiper-slide-inner">
                        <a target="_blank" class="abs_link" href="gallery.html"></a>
                        <div class="overlay"></div>
                        <article class="highlights-article">
                            <h3>Bridge House<br>Outreach</h3>
                        </article>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 swiper-slide swiper-slide-post">
                        <div class="t" style="height: 340px; background: url(_assets/gallery/Apen/IMG_7032.html) center top / cover;  margin-right: 2px; margin-left:2px;" data-swiper-slide-index="3" role="group" aria-label="1 / 14">
                        <div class="swiper-slide-inner">
                        <a target="_blank" class="abs_link" href="gallery.html"></a>
                        <div class="overlay"></div>
                        <article class="highlights-article">
                            <h3>Apen<br>Outreach</h3>
                        </article>
                        </div>
                        </div>
                    </div>
                </div>

        </div>
  <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>

  <!--<div class="swiper-button-prev-news" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-533e37ec8fa6aa46"><img class="arrow_nav_prev" src="img/arrow.svg"></div>-->
<!--  <div class="swiper-button-next-news" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-533e37ec8fa6aa46"><img class="arrow_nav_next" src="img/arrow.svg"></div>-->
<!--  </div>-->

</section> -->





<section>

    <div class="container partners margin-six-bottom" id="volunteer">

        <div class="row justify-content-center">
            <div class="col-12 col-xl-10 col-lg-10 text-extra-dark-gray margin-two-bottom text-center last-paragraph-no-margin">
                <h5 class="alt-font  font-weight-600 obj">Volunteer</h5>

            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-xl-6 col-lg-8">
                <form action="{{ route('volunteer')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div id="success-project-contact-form" class="mx-0"></div>
                        </div>

                        <div class="col-md-12 col-lg-12">
                            <input type="text" name="name" placeholder="Enter your name" class="big-input" required>
                        </div>
                        <div class="col-md-12 col-lg-12">
                            <input type="text" name="phone" placeholder="Enter your phone number" class="big-input" required>
                        </div>
                        <div class="col-md-12 col-lg-12">
                            <input type="email" name="email" placeholder="Enter your email" class="big-input" required>
                        </div>

                        <div class="col-12 text-center sm-margin-30px-bottom md-margin-30px-bottom">
                            <input type="submit" class="btn btn-transparent-deep-pink btn-large btn-rounded margin-20px-top" value="Send" name="send_volunteer">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- <div class="container partners margin-six-bottom" id="volunteer">

                            <div class="row justify-content-center">
                                <div class="col-12 col-xl-8 col-lg-8 text-extra-dark-gray margin-two-bottom text-center last-paragraph-no-margin">
                                    <h5 class="alt-font  font-weight-600">Volunteers</h5>
                                     <p class="width-90 mx-auto text-medium font-weight-400 d-inline-block sm-width-100">Interested in working with us?</p>
                                </div>
                            </div>
                              <div class="row justify-content-center">
                                  <div class="col-12 col-xl-6 col-lg-8">
                                      <form action="#" method="post">
                                <div class="row">
                                    <div class="col-12">
                                        <div id="success-project-contact-form" class="mx-0"></div>
                                    </div>
                                    <div class="col-12 col-lg-12">
                                        <input type="text" name="name" placeholder="Your Name *" class="big-input" required >
                                    </div>

                                    <div class="col-12 col-lg-12">
                                        <input type="email" name="email" placeholder="Your E-mail *" class="big-input" required >
                                    </div>
                                    <div class="col-12">
                                        <textarea name="message" placeholder="Your Message" rows="4" class="big-textarea" required></textarea>
                                    </div>
                                    <div class="col-12 text-center sm-margin-30px-bottom md-margin-30px-bottom">
                                        <input type="submit" class="btn btn-transparent-deep-pink btn-large btn-rounded margin-20px-top" value="Send" name="send_volunteer">
                                    </div>
                                </div>
                            </form>
                                  </div>
                            </div>
                                    </div> -->
</section>
<!-- start contact section -->
<!-- start footer -->

<!--Widgets Section-->
<!-- <div class="widgets-section">
            	<div class="row  cont_row"> -->

<!--Column-->
<!-- <div class="column col-lg-4 col-md-6 col-sm-12">
						<div class="">
                        	<div class="widget-content cont_row">
                                <!-- <div class="footer-logo">
                                    <a href="index.html"><img class="lazy-image" src="images/resource/image-spacer-for-validation.png" data-src="images/footer-logo.png" alt="" /></a>
                                </div> -->
<!-- <h3 class ="alt-font font-weight-500 text-white">Ahava Development Initaitive </h3>
                                <div class="text-white font-weight-400 margin-10px-bottom">A social reform aimed at creating an equal and peaceful society,free from poverty through sharing simple acts of love daily.</div>

                            </div>
						</div>
					</div> -->

<!--Column-->
<!-- <div class="column col-lg-3 col-md-6 col-sm-12">
						<div class="footer-widget links-widget">
							<div class="alt-font font-weight-500 text-white cont_row">
								<h3>Resources</h3>
                                <ul>
                                    <li><a class ="text-white" href="#">Home</a></li>
                                    <li><a class ="text-white" href="#">About Us</a></li>
                                    <li><a class ="text-white"href="#">Campaign & Advocacy </a></li>
                                    <li><a class ="text-white" href="#"></a></li>
                                    <li><a class ="text-white" href="#">News Letter & Updates </a></li>
                                    <li><a  class ="text-white"href="#">Contact Us</a></li>
                                </ul>
							</div>
						</div>
					</div> -->

<!--Column-->
<!-- <div class="column col-lg-3 col-md-6 col-sm-12">
						<div class="alt-font font-weight-500 text-white">
							<div class="widget-content">
								<h3 class ="text-white">Contacts</h3>
								<ul class="contact-info">
                                	<li class ="text-white">3rd Avenue, Lokogoma, Abuja Nigeria.</li>
                                    <li class ="text-white"><a class ="text-white" href="tel:+23481671408543">+23481671408543</a></li>
                                    <li class ="text-white"><a class ="text-white" href="mailto:info@ahavadevinit.org">info@ahavadevinit.org</a></li>
                                </ul>
							</div>
						</div>
					</div> -->

<!--Column-->
<!-- <div class="column col-lg-2 col-md-6 col-sm-12">
						<div class="footer-widget links-widget text-white">
							<div class="alt-font font-weight-500 text-white cont_row2">
								<h3>More </h3>
                                <ul >
                                    <li><a class ="text-white"href="#">Volunteer</a></li>
                                    <li><a class ="text-white"href="#">Support</a></li>
                                    <li><a class ="text-white"href="#">Our Core Values </a></li>
                                   <li><a class ="text-white"href="sfm.html
                                    ">Ahave Social Fund Management </a></li>
                                    <li><a class ="text-white" href="ahava-love.html">Ahava livelihood and social mobility program</a></li>
                                    <li><a  class ="text-white"href="#">Patrotism and  Peacebuilding Program</a></li>
                                </ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->




@include('includes.footer')