      
      <section class=" p-5"  >
        <?php if(empty($categories)){ ?>
  <div class="container pb-40">
    <div class="section-title text-center">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
              <h2 class="text-uppercase line-bottom-center mt-0">No Galleries Found</h2>
        </div>
      </div>
    </div>
  </div>

  <?php }else{ ?>

    <div class="container pb-40 pt-5">
    <div class="section-title text-center">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
              <h2 class="text-uppercase line-bottom-center mt-0">Gallery <span class="text-theme-colored">Categories</span></h2>
        </div>
      </div>
    </div>
  </div>

    <div class="row multi-row-clearfix">
    <?php foreach($categories as $gallery){?>
      
      <div class="col-sm-6 col-md-4">
        <div class="causes bg-silver-light maxwidth500 mb-30 border-1px bg-white" style="height: 400px">
          <div class="thumb">
            <a href="<?php echo 'gallery/show_gallery/'.$gallery->category_id; ?>"><img src="<?php echo GALLERY_IMG_UPLOAD_PATH . $gallery->gallery_img; ?>" alt="<?php echo $gallery->category_name; ?>" class="img-fullwidth"></a>
          </div>
          <div class="causes-details  clearfix p-20 pt-10 pb-20">
            <h4 class="text-uppercase"><a href="<?php echo 'gallery/show_gallery/'.$gallery->category_id; ?>"><?php echo $gallery->category_name; ?></a></h4>
            <a href="<?php echo 'gallery/show_gallery/'.$gallery->category_id; ?>" class="btn btn-default btn-theme-colored btn-xs font-16 mt-10">View</a>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
  <?php } ?>
</section>
  
  