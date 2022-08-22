<section class="inner-header divider " data-bg-img="assets/images/bg/banner-bg.png" style="background-image: url('assets/images/bg/banner-bg.png'); background-position: bottom left;">
  <div class="container  pt-40">
    <!-- Section Content -->
    <div class="section-content">
      <div class="row">
        <div class="col-md-12">
          <h2 class="text-white text-center font-36"><?php echo $page_items->sevas_page_title; ?></h2>
          <!-- <ol class="breadcrumb text-left mt-10 white">
                <li><a href="#">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active"><?php echo $page_items->page_title; ?></li>
              </ol> -->
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section: Causes -->
<section>
  <div class="container pt-70 pb-40">
    <div class="row mtli-row-clearfix">
      <div class="col-sm-6 col-md-8 col-lg-8">
        <div class="causes bg-white maxwidth500 mb-30">
          <div class="thumb">
            <img src="<?php echo SEVA_PAGE_BANNER_PATH . $page_items->seva_page_banner; ?>" alt="" class="img-fullwidth">
          </div>

        </div>
      </div>

      <div class="col-sm-6 col-md-4 col-lg-4">
        <div class="sidebar sidebar-right mt-sm-30">
          <div class="widget">
            <h4 class="widget-title line-bottom">Festival Schedule</h4>
            <p><b><?php echo $page_items->celebration_details; ?></b></p>
          </div>
        
          <!--<div class="widget">-->
          <!--  <h5 class="widget-title line-bottom">Festival Schedule</h5>-->
          <!--  <b><?php //echo date('F j, Y', strtotime($page_items->celebration_date)) . " " . $page_items->celebration_time; ?></b>-->
          <!--</div>-->

        </div>
      </div>

    </div>
    <div class="row">
      <div class="col-sm-12">
        <div class="causes-details border-1px bg-white clearfix p-20 pt-10 pb-20">
          <h4 class="font-20 text-uppercase"><?php echo $page_items->sevas_page_title; ?></h4>
          <p class="mt-15" id="show_more"><?php echo $page_items->seva_page_desc_top; ?> </p>
          <!--<button type="button" id="more_less_btn" class="btn btn-xs btn-theme-colored btn-default read_more">Read More</button>-->
        </div>
        <div class="container">
          <?php foreach ($sevas as $seva) { ?>
            <div class="row">

              <!-- <h4 class="font-20 text-uppercase"><?php echo $seva->category_title; ?></h4> -->
              <?php if (!empty($seva->seva)) { ?>
                <?php $numOfCols = 4;
                $rowCount = 0;
                $bootstrapColWidth = 12 / $numOfCols; ?>

                <?php foreach ($seva->seva as $key => $seva) {
                  if ($rowCount % $numOfCols == 0) { ?>
                    <div class="row display-flex"> <?php }
                                                  $rowCount++; ?>
                    <div class="col-md-<?php echo $bootstrapColWidth; ?> mt-10">
                      <div class="causes bg-silver-light maxwidth500 border-1px bg-white mb-30">
                        <div class="thumb">
                          <img src="<?php echo SEVAS_PHOTO_UPLOAD_PATH . $seva->seva_image; ?>" alt="" class="img-fullwidth">
                        </div>
                        <div class="causes-details  bg-white clearfix p-15 pb-30">
                          <h4 class="font-16 text-uppercase"><a href="page-single-cause.html"><?php echo $seva->seva_name; ?></a></h4>
                          <ul class="list-inline font-weight-600 font-14 clearfix mb-5">
                            <li class="pull-left font-weight-400 text-black-333 pr-0">Amount: <span class="text-theme-colored font-weight-700">&#8377;<?php echo $seva->seva_amount; ?></span></li>
                            <!-- <li class="pull-right font-weight-400 text-black-333 pr-0">Goal: <span class="text-theme-colored font-weight-700">$5000</span></li> -->
                          </ul>
                          <!-- <div class="progress-item mt-5">
                            <div class="progress mb-0">
                              <div data-percent="84" class="progress-bar appeared" style="width: 84%;"><span class="percent">0</span><span class="percent">84%</span></div>
                            </div>
                          </div> -->
                          <p class="mt-15"><?php echo $seva->description; ?></p>
                          <input type="hidden" id="seva_amount" vlaue="<?php echo $seva->seva_amount; ?>">
                          <button type="button" class="btn btn-default btn-theme-colored mt-10 font-16 btn-sm" data-name="<?php echo $seva->seva_name; ?>" data-amount="<?php echo $seva->seva_amount; ?>" data-toggle="modal" data-target="#myModal" onclick="seva_amount(this.getAttribute('data-amount'),this.getAttribute('data-name'))">Offer Seva <i class="flaticon-charity-make-a-donation font-16 ml-5"></i></button>
                        </div>
                      </div>
                    </div>
                    <?php
                    if (1 + $rowCount % $numOfCols == 0) { ?>
                    </div>
                <?php }
                  } ?>
            </div>
        </div>
    <?php  }
            } ?>
      </div>
    </div>

    <div class="event-details">
      <?php echo $page_items->seva_page_desc_bottom; ?>
    </div>
  </div>


  </div>
</section>

<?php echo base_url(); ?>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><?php echo $page_items->sevas_page_title; ?></h4>
      </div>
      <div class="container">
        <div class="modal-body">
          <section>
            <div class="section-content">
              <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                  <h3 class="mt-0 line-bottom">Offer Seva<span class="font-weight-300"> Now!</span></h3>

                  <!-- ===== START: Paypal Both Onetime/Recurring Form ===== -->
                  <form id="popup_paypal_donate_form_onetime_recurring" action="<?php echo $page_items->page_slug; ?>/" method="post" enctype="multipart/form-data">
                  <?php  if ($this->config->item('payment_mode') == 'test') { ?>  
                  <input name="table_name" type="hidden" value="test_payments">
                  <?php }else{ ?>
                  <input name="table_name" type="hidden" value="payments">
                  <?php } ?>
                    <input name="festival" type="hidden" value="<?php echo $page_items->page_slug; ?>">

                    <div class="row">
                      <div class="form-group col-md-12">
                        <label>Full Name</label>
                        <input id="full_name" type="text" name="full_name" value="" class="form-control">
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-6">
                        <label>Phone Number</label>
                        <input id="phone_number" type="text" name="phone_number" value="" class="form-control">
                      </div>
                      <div class="form-group col-md-6">
                        <label>Email Address</label>
                        <input id="email" type="email" name="email" value="" class="form-control">
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-6">
                        <label>Pan Number</label>
                        <input id="pan_number" type="text" name="pan_number" value="" class="form-control">
                      </div>
                      <div class="form-group col-md-6">
                        <label>City</label>
                        <input id="city" type="text" name="city" value="" class="form-control">
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-12">
                        <label>Custom Amount</label>
                        <input id="amount" type="text" name="amount" value="" class="form-control">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group mb-20">
                          <div>
                            <label>Seva you are offering: </label>
                            <input id="seva_name" name="seva_name" value="" class="form-control" readonly>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-group mb-20">
                          <div>
                            <label><strong>Seva Amount: &#8377;</strong><span id="custom_other_amount"> </span> </label>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-sm-12">
                      <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-flat btn-dark btn-theme-colored mt-10 pl-30 pr-30" data-loading-text="Please wait...">Donate Now</button>
                      </div>
                    </div>

                  </form>


                </div>
              </div>
            </div>
        </div>
        </section>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>



<?php  if(!empty($gallery)){  ?>
<section class="bg-silver-light">
  <div class="container pb-70">
    <div class="section-title text-center">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h2 class="text-uppercase line-bottom-center mt-0">Festival <span class="text-theme-colored">Gallery</span></h2>
          <div class="title-flaticon">
            <!-- <i class="flaticon-charity-alms"></i> -->
          </div>
          <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p> -->
        </div>
      </div>
    </div>
    <div class="section-content">
      <div class="row">
        <div class="col-md-12">

          <div class="gallery-isotope grid-4 gutter-small clearfix" data-lightbox="gallery" style="position: relative; height: 586.875px;">
            
           <?php foreach($gallery as $image){ ?>
            <!-- Portfolio Item Start -->
              <div class="gallery-item" style="position: absolute; left: 0px; top: 0px;">
                <div class="thumb">
                  <img alt="project" src="<?php echo GALLERY_UPLOAD_PATH.$image->gallery_img_path;?>" class="img-fullwidth">
                  <div class="overlay-shade"></div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                        <a href="<?php echo GALLERY_UPLOAD_PATH.$image->gallery_img_path;?>" data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Portfolio Item End -->
            <?php } ?>
            
          
          </div>
          <!-- End Portfolio Gallery Grid -->

        </div>
      </div>
    </div>
  </div>
</section>
<?php } ?>

<section class="bg-silver-light">
  <div class="container pb-70">
    <div class="section-title text-center">
      <div class="row">
        <?php if(!empty($page_items->video_link_1)  || !empty($page_items->video_link_2) || !empty($page_items->video_link_3)  ){ ?>         
        <div class="col-md-8 col-md-offset-2">
          <h2 class="text-uppercase line-bottom-center mt-0">Festival <span class="text-theme-colored">Videos</span></h2>
          <div class="title-flaticon">
            <!-- <i class="flaticon-charity-alms"></i> -->
          </div>
          <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p> -->
        </div>
        <?php } ?>
      </div>
    </div>
    <div class="section-content">
      <div class="row">
        <div class="col-md-12">

          <div class="gallery-isotope grid-4 gutter-small clearfix" data-lightbox="gallery" style="position: relative; height: 586.875px;">

          <?php if(!empty($page_items->video_link_1)){ ?>
            <div class="col-xs-12 col-md-4">

              <div class="fluid-video-wrapper">
              <iframe width="767" height="428" src="<?php echo $page_items->video_link_1; ?>" title="Sri Krishna Janmashtami 2019 Glimpses of Bhilai" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

              </div>
            </div>
            <?php } ?>
            <?php if(!empty($page_items->video_link_2) ){ ?>
            <div class="col-xs-12 col-md-4">
              
              <div class="fluid-video-wrapper">
                <iframe width="767" height="428" src="<?php echo $page_items->video_link_2; ?>" title="Sri Krishna Janmashtami 2019 Glimpses of Raipur" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  
                </div>
              </div>
              <?php } ?>
              <?php if(!empty($page_items->video_link_3) ){ ?>
              <div class="col-xs-12 col-md-4">
  
                <div class="fluid-video-wrapper">
                <iframe width="767" height="428" src="<?php echo $page_items->video_link_3; ?>" title="Sri Krishna Janmashtami 2019 Glimpses of Bhilai" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  
                </div>
              </div> 
              <?php } ?>
            
             

          </div>
          <!-- End Portfolio Gallery Grid -->

        </div>
      </div>
    </div>
  </div>
</section>





<div class="col-sm-12 col-md-12 mx-auto">
<!--<div class="form-body">-->
    <div class="row">
        <div class="form-holder">
            <div class="form-content">
                <div class="form-items">
<!--                    <h3 class="text-center">Akshayachaitanya Donation Page</h3>-->
<!--                    <h4>Select any payment gateway to complete payment.</h4>-->
                    
                    <form id="razorpay-form" action="<?php echo base_url(); ?>seva_page/save_payment" method="POST">
                        <script type="text/javascript"  src="https://checkout.razorpay.com/v1/checkout.js"
                        data-buttontext=""
                        data-key="<?php echo $keyId; ?>"
                        data-amount="<?php echo $amount * 100; ?>"
                        data-currency="INR"
                        data-name="<?php echo $this->config->item('company_name') ?>"
                        data-image="<?php echo SETTINGS_UPLOAD_PATH . $settings->LOGO_IMAGE ?>"
                        data-description="<?php echo $this->config->item('description') ?>"
                        data-prefill.name="<?php echo $full_name ?>"
                        data-prefill.email="<?php echo $email ?>"
                        data-prefill.contact="<?php echo $phone_number ?>"
                        data-prefill.pan="<?php echo $pan_number ?>"
                        data-notes.pan="<?php echo $pan_number ?>"
                        data-notes.shopping_order_id="<?php echo $notes['razorpay_order_id']; ?> "
                        data-modal.confirm_close = 'true'
                        data-modal.ondismiss="this.modal_close()"
                        <?php if ($displayCurrency !== 'INR') { ?>
                        data-display_amount="<?php echo $display_amount ?>" <?php } ?> <?php if ($displayCurrency !== 'INR') { ?>
                        data-display_currency="<?php echo $display_currency ?>" <?php } ?>
                        data-redirect = 'true'
                        data-callback_url = "<?php echo base_url(); ?>seva_page/save_payment/<?php echo $insert_id .'/'.$table_name; ?>"
                        
                        >

                      
                        </script>
                      
                      
                      
                    </form>
                    
                
            </div>
        </div>
        </div>
    <!--</div>-->
</div>
</div>

<style>
  .razorpay-payment-button{
    visibility: hidden;
  }
</style>

<script type="text/javascript" >
    window.onload = function(){
    var button = document.getElementById('clickButton');
    <?php if(!empty($keyId) && !empty($razorpay_order_id)){ ?>
    $('#razorpay-form').submit();
    <?php } ?>
    $('#modal-close').on('click',function(){
      
            //  window.location.replace("donate");
             window.location.href = "<?php echo base_url($page_items->page_slug); ?>";
        
    });

   
}

$("#popup_paypal_donate_form_onetime_recurring").validate({
        // Specify validation rules

        rules: {
            // The key name on the left side is the name attribute
            // of an input field. Validation rules are defined
            // on the right side
            full_name: "required",
            email: {
                required: true,
                // Specify that email should be validated
                // by the built-in "email" rule
                email: true
            },
            phone_number: {
                required: true,
                minlength: 10,
                maxlength: 12
            },
            pan_number: {
                required: true
            },
            amount: {
                required: true
            },
            // payble_amount: required
        },
        // Specify validation error messages
        messages: {
          full_name: "Please enter your Full Name",
          phone_number: {
                required: "Please provide a Mobile Number",
                minlength: "Your mobile number must be at least 10 characters long",
                maxlength: "Your mobile number must not be more than 12 characters length"
            },
            email: "Please enter a valid Email Address",
            pan_number: "please enter Pan Number",
            amount: "Please enter Amount",
        },
        // Make sure the form is submitted to the destination defined
        // in the "action" attribute of the form when valid
        submitHandler: function(form) {
            var amount = $('#amount').val();
            if(amount == '' || amount < 300 ){
                alert('Amount cannot be less than ₹300')
            }else{
            form.submit();
            }
        }
    });



$(".number").keydown(function(event) {        
    k = event.which;
   
  if ((k >= 48 && k <= 57) || k == 8) {
 
  return true
    
  } else {
    event.preventDefault();
    return false;
  }

            
        })

function modal_close(){
    window.location.href = "<?php echo base_url($page_items->page_slug); ?>";
}

</script>
