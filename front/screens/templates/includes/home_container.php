
    <section class="divider bg-light">
      <div class="container pt-40 pb-40">
        <div class="row">
          <div class="">
            <div class="col-md-5 text-center">
              <img alt="" src="assets/images/bg/acharya.jpg">
            </div>
            <div class="col-md-7 text-left">
              <!-- <h4 class="mt-50 text-theme-colored mb-0">Big discount!</h4> -->
              <h1 class="mt-0"> FOUNDER - ACHARYA</h1>
              <h4 class="mt-20">Founder AcharyaHis Divine Grace A.C. Bhaktivedanta Swami Prabhupada ... Lord Caitanya Mahaprabhu who taught the public glorification of Hare Krishna mantra.</h4>
              <a href="about-us" class="btn btn-theme-colored btn-circled mt-20">KNOW MORE</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
<section>
      <div class="container pt-70 pb-40">
           <div class="section-title text-center">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h2 class="text-uppercase line-bottom-center mt-0">Main <span class="text-theme-colored">Activities</span></h2>
          <div class="title-flaticon">
            <i class="flaticon-charity-alms"></i>
          </div>
          <p>All living bodies subsist on food grains, which are produced from rains. Rains are produced by performance of yajna [sacrifice], and yajna is born of prescribed duties.</p>
        </div>
      </div>
    </div>
        <div class="section-content">
          <div class="row">
          <div class="row mt-40">
            <div class="col-md-4">
              <div class="icon-box p-0">
                <a class="icon-border-effect effect-circled  icon icon-circled mb-0 mr-0 pull-left icon-lg" href="#">
                  <!-- <i class="flaticon-charity-food-donation text-theme-colored font-54"></i> -->
                  <img src="assets/images/photos/gopala.jpg" style="opacity:1; border-radius: 50%">
                </a>
                <div class="ml-190 mt-40">
                  <h4 class="icon-box-title mt-20 mb-10 text-uppercase">GOPALA SAKHA</h4>
                  <p class="text-gray">Culturely enticing programs for children.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="icon-box p-0 ">
                <a class="icon-border-effect effect-circled  icon icon-circled mb-0 mr-0 pull-left icon-lg" href="#">
                  <!-- <i class="flaticon-charity-person-inside-a-heart text-theme-colored font-54"></i> -->
                  <img src="assets/images/photos/folk.jpg" style="opacity:1; border-radius: 50%">
                </a>
                <div class="ml-190 mt-40">
                  <h4 class="icon-box-title mt-20 mb-10 text-uppercase">FOLK</h4>
                  <p class="text-gray">A transformative experience for todays youth</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="icon-box p-0">
                <a class="icon-border-effect effect-circled  icon icon-circled mb-0 mr-0 pull-left icon-lg" href="#">
                  <!-- <i class="flaticon-charity-shelter text-theme-colored font-54"></i> -->
                  <img src="assets/images/photos/asharya.jpg" style="opacity:1; border-radius: 50%">
                </a>
                <div class="ml-190 mt-40">
                  <h4 class="icon-box-title mt-20 mb-10 text-uppercase">KRISHNASHRAYA</h4>
                  <p class="text-gray">Congerial, Congregational happiness for every family</p>
                </div>
              </div>
            </div>
          </div>
          </div>
         
        </div>
      </div>
    </section>



<!-- Section: About  -->
<section>
  <div class="container pb-sm-50">
    <div class="row">
      <div class="col-xs-12 col-md-6">
        <h3 class="line-bottom border-bottom mt-0">Events</h3>
        <div class="bxslider bx-nav-top">
          <?php foreach($events as $event){  

            $start_date = explode(' ', date('Y F d',strtotime($event->start_date)));
            $end_date = explode(' ', date('Y F d',strtotime($event->end_date)));
          
            
            ?>
            <div class="event media sm-maxwidth400 bg-silver-light border-1px mt-0 mb-15 p-10">
              <div class="row">
              <div class="col-xs-2 col-md-3 pr-0">
                <div class="event-date text-center p-5 pt-10 pb-10 bg-theme-colored sm-custom-style">
                  <ul>
                    <li class="font-30 text-white font-weight-700"><?php echo $start_date[2]; ?></li>
                    <li class="font-18 text-white text-center text-uppercase"><?php echo $start_date[1]; ?></li>
                  </ul>
                </div>
              </div>
              <div class="col-xs-9 pr-10 pl-10">
                <div class="event-content p-5 pb-0 pt-0">
                  <ul class="list-inline font-weight-600 text-gray-dimgray">
                    <li><i class="fa fa-clock-o text-theme-colored"></i> <?php echo $start_date[1].' '.$start_date[2] .' @ '. $event->start_time .' - '.$event->end_time; ?></li>
                    <li> <i class="fa fa-map-marker text-theme-colored"></i> <?php echo $event->place; ?></li>
                  </ul>
                  <h5 class="media-heading font-16 font-weight-600"><a href="<?php echo base_url().'index/event/'.$event->event_id; ?>"><?php echo $event->event_name; ?></a></h5>
                </div>
              </div>
            </div>
          </div>
              <?php } ?>
         
        </div>
      </div>
      <div class="col-xs-12 col-md-6">
        <div class="row">
        <div class="col-xs-12 col-md-4">
            <h3 class="line-bottom border-bottom mt-0">Latest News</h3>
        </div>
        </div>
        <article class="post clearfix mb-30 bg-lighter">
          <div class="entry-content p-20 pr-10">
            <div class="entry-meta media no-bg no-border mt-15 pb-20">
              <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                <ul>
                  <li class="font-16 text-white font-weight-600">28</li>
                  <li class="font-12 text-white text-uppercase">Feb</li>
                </ul>
              </div>
              <div class="media-body pl-15">
                <div class="event-content pull-left flip">
                  <h4 class="entry-title text-white text-uppercase m-0"><a href="#">Sri Hanuman Jayanti</a></h4>
                  <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-theme-colored"></i> 214 Comments</span>
                  <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-heart-o mr-5 text-theme-colored"></i> 895 Likes</span>
                </div>
              </div>
            </div>
            <p class="mt-10"></p>
            <a href="#" class="btn-read-more">Read more</a>
            <div class="clearfix"></div>
          </div>
          <div class="entry-content p-20 pr-10">
            <div class="entry-meta media no-bg no-border mt-15 pb-20">
              <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                <ul>
                  <li class="font-16 text-white font-weight-600">28</li>
                  <li class="font-12 text-white text-uppercase">Feb</li>
                </ul>
              </div>
              <div class="media-body pl-15">
                <div class="event-content pull-left flip">
                  <h4 class="entry-title text-white text-uppercase m-0"><a href="#">ISKON Feeding drive to  Covid 19</a></h4>
                  <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-theme-colored"></i> 214 Comments</span>
                  <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-heart-o mr-5 text-theme-colored"></i> 895 Likes</span>
                </div>
              </div>
            </div>
            <p class="mt-10"></p>
            <a href="#" class="btn-read-more">Read more</a>
            <div class="clearfix"></div>
          </div>
         
        </article>
      </div>

    </div>
  </div>
</section>

<!-- Section: Causes -->
<section class="bg-silver-light">
  <div class="container pb-40">
    <div class="section-title text-center">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h2 class="text-uppercase line-bottom-center mt-0">Offer <span class="text-theme-colored">Sevas</span></h2>
          <div class="title-flaticon">
            <i class="flaticon-charity-alms"></i>
          </div>
          <p>Sri Krishna Janmashtami is the festival to celebrate the appearance day of Sri Krsna, the Supreme Personality of Godhead. </p>
        </div>
      </div>
    </div>
    <div class="row multi-row-clearfix">
      <div class="col-sm-6 col-md-4">
        <div class="causes bg-silver-light maxwidth500 mb-30">
          <div class="thumb">
            <img src="assets/images/photos/sri-krishna-anmashtami.jpg" alt="" class="img-fullwidth">
          </div>
          <div class="causes-details border-1px bg-white clearfix p-20 pt-10 pb-20">
            <h4 class="text-uppercase"><a href="page-single-cause.html">Sri Krishna Janmastami</a></h4>
            <!-- <ul class="list-inline font-14 font-weight-600 clearfix mb-5">
              <li class="pull-left font-weight-400 text-gray pr-0">Raised: <span class="text-theme-colored font-weight-700">$2860</span></li>
              <li class="pull-right font-weight-400 text-black-333 pr-0">Goal: <span class="text-theme-colored font-weight-700">$5000</span></li>
            </ul> -->
            <!-- <div class="progress-item mt-10">
              <div class="progress mb-0">
                <div data-percent="84" class="progress-bar"><span class="percent">0</span></div>
              </div>
            </div> -->
            <p class="mt-20">Sri Krishna Janmashtami is the festival to celebrate the appearance day of Sri Krsna, the Supreme Personality of Godhead. </p>
            <a href="page-donate.html" class="btn btn-default btn-theme-colored btn-xs font-16 mt-10">Donate <i class="flaticon-charity-make-a-donation font-16 ml-5"></i></a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="causes bg-silver-light maxwidth500 mb-30">
          <div class="thumb">
            <img src="assets/images/photos/Goshala.jpg" alt="" class="img-fullwidth">
          </div>
          <div class="causes-details border-1px bg-white clearfix p-20 pt-10 pb-20">
            <h4 class="text-uppercase"><a href="page-single-cause.html">Goshala</a></h4>
            <!-- <ul class="list-inline font-14 font-weight-600 clearfix mb-5">
              <li class="pull-left font-weight-400 text-gray pr-0">Raised: <span class="text-theme-colored font-weight-700">$2860</span></li>
              <li class="pull-right font-weight-400 text-black-333 pr-0">Goal: <span class="text-theme-colored font-weight-700">$5000</span></li>
            </ul>
            <div class="progress-item mt-10">
              <div class="progress mb-0">
                <div data-percent="84" class="progress-bar"><span class="percent">0</span></div>
              </div>
            </div> -->
            <p class="mt-20">Currently we are caring for the cows from a small makeshift goshala at our Bhilai temple campus but as the number of cows </p>
            <a href="page-donate.html" class="btn btn-default btn-theme-colored btn-xs font-16 mt-10">Donate <i class="flaticon-charity-make-a-donation font-16 ml-5"></i></a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="causes bg-silver-light maxwidth500 mb-30">
          <div class="thumb">
            <img src="assets/images/photos/sri-radhastami.jpg" alt="" class="img-fullwidth">
          </div>
          <div class="causes-details border-1px bg-white clearfix p-20 pt-10 pb-20">
            <h4 class="text-uppercase"><a href="page-single-cause.html">Sri Radhastami</a></h4>
            <!-- <ul class="list-inline font-14 font-weight-600 clearfix mb-5">
              <li class="pull-left font-weight-400 text-gray pr-0">Raised: <span class="text-theme-colored font-weight-700">$2860</span></li>
              <li class="pull-right font-weight-400 text-black-333 pr-0">Goal: <span class="text-theme-colored font-weight-700">$5000</span></li>
            </ul>
            <div class="progress-item mt-10">
              <div class="progress mb-0">
                <div data-percent="84" class="progress-bar"><span class="percent">0</span></div>
              </div>
            </div> -->
            <p class="mt-20">The divine appearance day of Srimati Radharani, the eternal consort of Krishna, the Supreme Personality of Godhead.</p>
            <a href="page-donate.html" class="btn btn-default btn-theme-colored btn-xs font-16 mt-10">Donate <i class="flaticon-charity-make-a-donation font-16 ml-5"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
      <div class="container-fluid pt-70 pb-40">
        <div class="section-content bg-logo-blue ">
          <div class="row">
            <div class="col-md-6 p-40 mt-60">
              <div class="d-flex justify-content-center">
              <img src="assets/images/lotus.png" >
              </div>
              <h3 class=" font-28 letter-space-3 mt-20 text-white text-center"> Become a<span class="text-theme-yellow-colored text-uppercase"> life time patron</span> and enoy the Previliages - enroll Today!</h3>
              <h5 class=" font-weight-400 text-white text-center mt-20">Srila Prabhupada says -The Hare Krishna mantra is a prayer for protection and deliverance, a prayer to the Lord for His divine presence and for the opportunity to serve Him. </h5>
                <div class="d-flex justify-content-center">
                <a href="become-a-life-patron" class="btn btn-default btn-theme-colored btn-xs font-16 mt-10 mx-auto">Become a life Patron <i class="flaticon-charity-make-a-donation font-16 ml-5"></i></a>
                </div>
            </div>
            <div class="col-md-6 ">
              <div class="thumb">
                <img alt="" src="assets/images/photos/pic4.jpg" class="img-fullwidth">
              </div>
            </div>
          </div>
         
        </div>
      </div>
    </section>


<!-- Gallery Grid 4 -->
<section class="bg-silver-light">
  <div class="container pb-70">
    <div class="section-title text-center">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h2 class="text-uppercase line-bottom-center mt-0"> OUR <span class="text-theme-colored">Gallery</span></h2>
          <div class="title-flaticon">
            <i class="flaticon-charity-alms"></i>
          </div>
          <p>Here are the Glimpses of Harekrishna Mandir Raipur - Bhillai</p>
        </div>
      </div>
    </div>
    <div class="section-content">
      <div class="row">
        <div class="col-md-12">

          <div class="gallery-isotope grid-4 gutter-small clearfix" data-lightbox="gallery">
            <!-- Portfolio Item Start -->
            <div class="gallery-item">
              <div class="thumb">
                <img alt="project" src="assets/images/gallery/gallery (1).jpg" class="img-fullwidth">
                <div class="overlay-shade"></div>
                <div class="icons-holder">
                  <div class="icons-holder-inner">
                    <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                      <a href="assets/images/gallery/gallery (1).jpg" data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Portfolio Item End -->

            <!-- Portfolio Item Start -->
            <div class="gallery-item">
              <div class="thumb">
                <img alt="project" src="assets/images/gallery/gallery (2).jpg" class="img-fullwidth">
                <div class="overlay-shade"></div>
                <div class="icons-holder">
                  <div class="icons-holder-inner">
                    <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                      <a href="assets/images/gallery/gallery (2).jpg" data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Portfolio Item End -->

            <!-- Portfolio Item Start -->
            <div class="gallery-item">
              <div class="thumb">
                <img alt="project" src="assets/images/gallery/gallery (3).jpg" class="img-fullwidth">
                <div class="overlay-shade"></div>
                <div class="icons-holder">
                  <div class="icons-holder-inner">
                    <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                      <a href="assets/images/gallery/gallery (3).jpg" data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Portfolio Item End -->

            <!-- Portfolio Item Start -->
            <div class="gallery-item">
              <div class="thumb">
                <img alt="project" src="assets/images/gallery/gallery (4).jpg" class="img-fullwidth">
                <div class="overlay-shade"></div>
                <div class="icons-holder">
                  <div class="icons-holder-inner">
                    <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                      <a href="assets/images/gallery/gallery (4).jpg" data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Portfolio Item End -->

            <!-- Portfolio Item Start -->
            <div class="gallery-item">
              <div class="thumb">
                <img alt="project" src="assets/images/gallery/gallery (5).jpg" class="img-fullwidth">
                <div class="overlay-shade"></div>
                <div class="icons-holder">
                  <div class="icons-holder-inner">
                    <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                      <a href="assets/images/gallery/gallery (5).jpg" data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Portfolio Item End -->

            <!-- Portfolio Item Start -->
            <div class="gallery-item">
              <div class="thumb">
                <img alt="project" src="assets/images/gallery/gallery (6).jpg" class="img-fullwidth">
                <div class="overlay-shade"></div>
                <div class="icons-holder">
                  <div class="icons-holder-inner">
                    <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                      <a href="assets/images/gallery/gallery (6).jpg" data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Portfolio Item End -->

            <!-- Portfolio Item Start -->
            <div class="gallery-item">
              <div class="thumb">
                <img alt="project" src="assets/images/gallery/gallery (7).jpg" class="img-fullwidth">
                <div class="overlay-shade"></div>
                <div class="icons-holder">
                  <div class="icons-holder-inner">
                    <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                      <a href="assets/images/gallery/gallery (7).jpg" data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Portfolio Item End -->

            <!-- Portfolio Item Start -->
            <div class="gallery-item">
              <div class="thumb">
                <img alt="project" src="assets/images/gallery/gallery (8).jpg" class="img-fullwidth">
                <div class="overlay-shade"></div>
                <div class="icons-holder">
                  <div class="icons-holder-inner">
                    <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                      <a href="assets/images/gallery/gallery (8).jpg" data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Portfolio Item End -->

            <!-- Portfolio Item Start -->
            <div class="gallery-item">
              <div class="thumb">
                <img alt="project" src="assets/images/gallery/gallery (9).jpg" class="img-fullwidth">
                <div class="overlay-shade"></div>
                <div class="icons-holder">
                  <div class="icons-holder-inner">
                    <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                      <a href="assets/images/gallery/gallery (9).jpg" data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Portfolio Item End -->

            <!-- Portfolio Item Start -->
            <div class="gallery-item">
              <div class="thumb">
                <img alt="project" src="assets/images/gallery/gallery (1).jpg" class="img-fullwidth">
                <div class="overlay-shade"></div>
                <div class="icons-holder">
                  <div class="icons-holder-inner">
                    <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                      <a href="assets/images/gallery/gallery (1).jpg" data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Portfolio Item End -->

            <!-- Portfolio Item Start -->
            <div class="gallery-item">
              <div class="thumb">
                <img alt="project" src="assets/images/gallery/gallery (2).jpg" class="img-fullwidth">
                <div class="overlay-shade"></div>
                <div class="icons-holder">
                  <div class="icons-holder-inner">
                    <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                      <a href="assets/images/gallery/gallery (2).jpg" data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Portfolio Item End -->

            <!-- Portfolio Item Start -->
            <div class="gallery-item">
              <div class="thumb">
                <img alt="project" src="assets/images/gallery/gallery (3).jpg" class="img-fullwidth">
                <div class="overlay-shade"></div>
                <div class="icons-holder">
                  <div class="icons-holder-inner">
                    <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                      <a href="assets/images/gallery/gallery (3).jpg" data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Portfolio Item End -->
          </div>
          <!-- End Portfolio Gallery Grid -->

        </div>
      </div>
    </div>
  </div>
</section>



<!-- Section: DonetForm & Testimonials -->
<section class="layer-overlay overlay-white-6" data-bg-img="assets/images/bg/164882399_3857410594346513_501610221870845719_n.jpg" style="background-size:cover; background-position:bottom center">
  <div class="container pb-50">
    <div class="section-content">
      <div class="row">
        
        <div class="col-xs-12 col-sm-12 col-md-12">
          <h2 class="text-uppercase title line-bottom mt-0 mb-30 "><i class="fa fa-comments-o text-theme-yellow-colored mr-10"></i> <span class="text-theme-yellow-colored">Testimonials</span></h2>
          <div class="testimonial style1 owl-carousel-1col owl-nav-top">
            <div class="item">
              <div class="comment bg-theme-blue-colored">
                <p>A Karma-yogi performs action by body, mind, intellect, and senses, without attachment (or ego), only for self-purification</p>
              </div>
              <div class="content mt-20">
                <div class="thumb pull-right">
                  <img class="img-circle" alt="" src="assets/images/photos/modi.jpg">
                </div>
                <div class="patient-details text-right pull-right mr-20 mt-10">
                  <h5 class="author text-theme-colored">Modi</h5>
                  <h6 class="title">Prime Minister</h6>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="comment bg-theme-colored">
                <p>A Karma-yogi performs action by body, mind, intellect, and senses, without attachment (or ego), only for self-purification</p>
              </div>
              <div class="content mt-20">
                <div class="thumb pull-right">
                  <img class="img-circle" alt="" src="assets/images/photos/modi.jpg">
                </div>
                <div class="patient-details text-right pull-right mr-20 mt-10">
                  <h5 class="author text-theme-colored">Modi</h5>
                  <h6 class="title">Prime Minister</h6>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="comment bg-theme-colored">
                <p>A Karma-yogi performs action by body, mind, intellect, and senses, without attachment (or ego), only for self-purification</p>
              </div>
              <div class="content mt-20">
                <div class="thumb pull-right">
                  <img class="img-circle" alt="" src="assets/images/photos/modi.jpg">
                </div>
                <div class="patient-details text-right pull-right mr-20 mt-10">
                  <h5 class="author text-theme-colored">Modi</h5>
                  <h6 class="title">Prime Minister</h6>
                </div>
              </div>
            </div>
          
          
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section: blog -->
<!-- <section id="blog">
  <div class="container pb-70 pb-sm-40">
    <div class="section-title text-center">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h2 class="text-uppercase line-bottom-center mt-0">Our <span class="text-theme-colored">Blog</span></h2>
          <div class="title-flaticon">
            <i class="flaticon-charity-alms"></i>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p>
        </div>
      </div>
    </div>
    <div class="section-content">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4">
          <article class="post clearfix mb-sm-30 bg-silver-light border-1px">
            <div class="entry-header">
              <div class="post-thumb thumb">
                <img src="assets/images/blog/3.jpg" alt="" class="img-responsive img-fullwidth">
              </div>
              <div class="entry-meta media">
                <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                  <ul>
                    <li class="font-16 text-white font-weight-600 border-bottom">28</li>
                    <li class="font-12 text-white text-uppercase">Feb</li>
                  </ul>
                </div>
                <div class="media-body pl-20">
                  <div class="event-content">
                    <h4 class="entry-title font-22 mb-5"><a href="#">Water for poor children</a></h4>
                    <span class="mb-10 mr-10"><i class="fa fa-user-o mr-5 text-theme-colored"></i> Admin</span>
                    <span class="mb-10 mr-10"><i class="fa fa-commenting-o text-theme-colored"></i> 112 Comments</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="entry-content">
              <p>Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis deleniti, sint assumenda Pariatur istetue</p>
              <a href="#" class="btn btn-default btn-sm btn-theme-colored mt-10">Read more</a>
            </div>
          </article>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
          <article class="post clearfix mb-sm-30 bg-silver-light border-1px">
            <div class="entry-header">
              <div class="post-thumb thumb">
                <img src="assets/images/blog/6.jpg" alt="" class="img-responsive img-fullwidth">
              </div>
              <div class="entry-meta media">
                <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                  <ul>
                    <li class="font-16 text-white font-weight-600 border-bottom">28</li>
                    <li class="font-12 text-white text-uppercase">Feb</li>
                  </ul>
                </div>
                <div class="media-body pl-20">
                  <div class="event-content">
                    <h4 class="entry-title font-22 mb-5"><a href="#">Help the poor children</a></h4>
                    <span class="mb-10 mr-10"><i class="fa fa-user-o mr-5 text-theme-colored"></i> Admin</span>
                    <span class="mb-10 mr-10"><i class="fa fa-commenting-o text-theme-colored"></i> 112 Comments</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="entry-content">
              <p>Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis deleniti, sint assumenda Pariatur istetue</p>
              <a href="#" class="btn btn-default btn-sm btn-theme-colored mt-10">Read more</a>
            </div>
          </article>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
          <article class="post clearfix mb-sm-30 bg-silver-light border-1px">
            <div class="entry-header">
              <div class="post-thumb thumb">
                <img src="assets/images/blog/8.jpg" alt="" class="img-responsive img-fullwidth">
              </div>
              <div class="entry-meta media">
                <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                  <ul>
                    <li class="font-16 text-white font-weight-600 border-bottom">28</li>
                    <li class="font-12 text-white text-uppercase">Feb</li>
                  </ul>
                </div>
                <div class="media-body pl-20">
                  <div class="event-content">
                    <h4 class="entry-title font-22 mb-5"><a href="#">Education for children</a></h4>
                    <span class="mb-10 mr-10"><i class="fa fa-user-o mr-5 text-theme-colored"></i> Admin</span>
                    <span class="mb-10 mr-10"><i class="fa fa-commenting-o text-theme-colored"></i> 112 Comments</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="entry-content">
              <p>Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis deleniti, sint assumenda Pariatur istetue</p>
              <a href="#" class="btn btn-default btn-sm btn-theme-colored mt-10">Read more</a>
            </div>
          </article>
        </div>
      </div>
    </div>
  </div>
</section> -->
