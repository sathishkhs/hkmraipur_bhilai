

<section>
  <div class="container pb-40 pt-5">


    <?php if (empty($gallery_videos)) { ?>
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrapper mb-1 text-center">
            <!-- <h6 class="subtitle line-shape-bottom line-shape-center text-theme-colored1">Gallery</h6> -->
            <h2 class="title mb-0">No Videos Found</h2>
          </div>
        </div>
      </div>
    <?php } else { ?>
      

      <div class="container pb-40">
    <div class="section-title text-center">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
              <h2 class="text-uppercase line-bottom-center mt-0"> <span class="text-theme-colored"><?php echo $this->db->where('video_gallery_id',$video_gallery_id)->get('video_gallery')->row()->gallery_name; ?></span></h2>
        </div>
      </div>
    </div>
  </div>



      <div class="section-content">
        <div class="row">
          <div class="col-md-12">
            <div class="tm-sc-gallery tm-sc-gallery-grid gallery-style1-basic">


              <!-- Isotope Gallery Grid -->
              <div id="gallery-holder-618422" class="isotope-layout grid-3 gutter-15 clearfix lightgallery-lightbox ">
                <div class="Gallery " id="itemContainer">
                  <?php if (!empty($gallery_videos)) {
                    foreach ($gallery_videos as $image) {  ?>
                    <div class="col-md-4">
                        <img loading="lazy" class="lightboxed w-100 " style="width:100%; height: 240px; margin-top: 7px;" height="200px" rel="group1" data-caption="<?php echo $image->image_name; ?>" alt="<?php echo $image->image_name; ?>" src="<?php echo GALLERY_VIDEO_UPLOAD_PATH . $image->video_cover_path; ?>" data-link="<?php echo  $image->video_link; ?>">
                        </div>
                  <?php }
                  } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>

</section>

<script>
JavaScriptGallery.initGallery();
</script>