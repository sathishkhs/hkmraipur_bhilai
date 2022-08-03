<style>
  .holder {
    margin: 15px 0;
    display: flex;
    justify-content: center;
  }

  .holder a {
    font-size: 16px;
    cursor: pointer;
    margin: 0 5px;
    color: #333;
    padding: 6px 12px;
  }

  .holder a:hover {
    background-color: #348f7a;
    color: #fff;
  }

  .holder a.jp-previous {
    margin-right: 15px;
  }

  .holder a.jp-next {
    margin-left: 15px;
  }

  .holder a.jp-current,
  a.jp-current:hover {
    color: #efc94c;
    font-weight: bold;
  }

  .holder a.jp-disabled,
  a.jp-disabled:hover {
    color: #bbb;
  }

  .holder a.jp-current,
  a.jp-current:hover,
  .holder a.jp-disabled,
  a.jp-disabled:hover {
    cursor: default;
    background: none;
  }

  .holder span {
    margin: 0 5px;
  }

  .holder a.jp-current {
    background: #348f7a;

  }

  .holder a:hover {
    color: #fff !important;
  }
</style>


<section>
  <div class="container pb-40 pt-5">


    <?php if (empty($gallery_images)) { ?>
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrapper mb-1 text-center">
            <!-- <h6 class="subtitle line-shape-bottom line-shape-center text-theme-colored1">Gallery</h6> -->
            <h2 class="title mb-0">No Images Found</h2>
          </div>
        </div>
      </div>
    <?php } else {  ?>


      <div class="container pb-40">
    <div class="section-title text-center">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
              <h2 class="text-uppercase line-bottom-center mt-0"> <span class="text-theme-colored"><?php echo $this->db->where('gallery_id',$gallery_id)->get('gallery')->row()->gallery_name; ?></span></h2>
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
                  <?php if (!empty($gallery_images)) {
                    foreach ($gallery_images as $image) {  
                    if(!empty($image->gallery_img_path) && file_exists(GALLERY_UPLOAD_PATH . $image->gallery_img_path)){                ?>
                    <div class="col-md-4">
                        <img loading="lazy" class="lightboxed w-100 " style="width:100%; height: 240px; margin-top: 7px;" height="200px" rel="group1" data-caption="<?php echo $image->image_name; ?>" alt="<?php echo $image->image_name; ?>" src="<?php echo GALLERY_UPLOAD_PATH . $image->gallery_img_path; ?>" data-link="<?php echo GALLERY_UPLOAD_PATH . $image->gallery_img_path; ?>">
                     </div>
                  <?php } }
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



