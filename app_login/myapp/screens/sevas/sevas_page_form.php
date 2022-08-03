<div class="card shadow mb-4">
    <section class="content">
        <section class="wrapper">
            <div class="row">
                <div class="col-md-10 col-sm-12 mx-auto">
                    <?php $msg = $this->session->flashdata('msg');
                    if (!empty($msg['txt'])) : ?>
                        <div class="alert alert-block alert-<?php echo $msg['type']; ?>">
                            <button type="button" class="btn defalut" data-dismiss="alert">
                                <i class="fa fa-times"></i>
                            </button>
                            <i class="<?php echo $msg['icon']; ?>"></i>
                            <?php echo $msg['txt']; ?>
                        </div>
                    <?php endif ?>
                </div>
                <div class="col-md-12">
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <form class="form-horizontal" action="sevas/sevas_page_save" method="post" enctype="multipart/form-data">
                                <input name="sevas_page_id" type="hidden" value="<?php echo (!empty($query->sevas_page_id)) ? $query->sevas_page_id : ''; ?>" />
                                <br />
                                <div class="form-group">
                                    <label class="col-sm-6 col-md-6 control-label" for="form-field-1">Seva Page Title </label>
                                    <div class="col-sm-10">
                                        <span class="eror"><?php echo form_error('sevas_page_title'); ?></span>
                                        <input name="sevas_page_title" id="sevas_page_title" type="text" class="form-control" onkeyup="getslug(this.value)" value="<?php echo (!empty($query->sevas_page_title)) ? $query->sevas_page_title : ''; ?>" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-6 col-md-6 control-label" for="form-field-3">Seva Image</label>
                                    <div class="col-sm-<?php echo !empty($query->seva_page_banner) ? 8 : 10 ?>">
                                        <span class="eror"><?php echo form_error('seva_image'); ?></span>
                                        <input name="seva_page_banner" type="file" class="form-control" value="" />
                                        <small class="custom-msg">Image size Should be 1350px width and 300px height</small>
                                    </div>
                                    <?php if (!empty($query->seva_page_banner)) { ?>
                                        <div class="col-sm-2">
                                            <img src="<?php echo SEVA_PAGE_BANNER_PATH . $query->seva_page_banner; ?>" width="80px" height="80px">
                                        </div>
                                    <?php } ?>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-6 col-md-6 control-label" for="form-field-5"> Seva Page Top Description</label>
                                    <div class="col-sm-10">
                                        <span class="eror"><?php echo form_error('seva_page_desc_top'); ?></span>
                                        <textarea name="seva_page_desc_top" type="text" class="form-control ckeditor summernote" value=""><?php echo (!empty($query->seva_page_desc_top)) ? $query->seva_page_desc_top : ''; ?>  </textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-6 col-md-6 control-label" for="form-field-5"> Seva Page Bottom Description</label>
                                    <div class="col-sm-10">
                                        <span class="eror"><?php echo form_error('seva_page_desc_bottom'); ?></span>
                                        <textarea name="seva_page_desc_bottom" type="text" class="form-control ckeditor summernote" value=""><?php echo (!empty($query->seva_page_desc_bottom)) ? $query->seva_page_desc_bottom : ''; ?>  </textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-6 col-md-6 control-label" for="form-field-5"> Celebration Details</label>
                                    <div class="col-sm-10">
                                        <span class="eror"><?php echo form_error('celebration_details'); ?></span>
                                        <textarea name="celebration_details" type="text" class="form-control ckeditor summernote" value=""><?php echo (!empty($query->celebration_details)) ? $query->celebration_details : ''; ?>  </textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-6 col-md-6 control-label" for="form-field-1">Celebration Date </label>
                                    <div class="col-sm-10">
                                        <span class="eror"><?php echo form_error('celebration_date'); ?></span>
                                        <input name="celebration_date" id="celebration_date" type="date" class="form-control" value="<?php echo (!empty($query->celebration_date)) ? $query->celebration_date : ''; ?>" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-6 col-md-6 control-label" for="form-field-1">Celebration Time </label>
                                    <div class="col-sm-10">
                                        <span class="eror"><?php echo form_error('celebration_time'); ?></span>
                                        <input name="celebration_time" id="celebration_time" type="time" class="form-control" value="<?php echo (!empty($query->celebration_time)) ? $query->celebration_time : ''; ?>" />
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="col-sm-6 col-md-6 control-label" for="form-field-4">Seva Category</label>
                                    <div class="col-sm-10">
                                        <span class="eror"><?php echo form_error('sevas_id'); ?></span>
                                        <select class="form-control" name="seva_category_id[]" id="seva_category_id" multiple>
                                            <option value="">Select Seva Category</option>
                                            <?php foreach ($seva_categories as $row) : ?>
                                                <option value="<?php echo $row->seva_category_id; ?>" <?php echo (!empty($query->seva_category_id) && in_array($row->seva_category_id, $query->seva_category_id)) ? 'selected' : ''; ?>><?php echo $row->category_title; ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-6 col-md-6 control-label" for="form-field-4">Select Gallery </label>
                                    <div class="col-sm-10">
                                        <span class="eror"><?php echo form_error('sevas_id'); ?></span>
                                        <select name="gallery_id" id="gallery_id" class="form-control ">

                                            <option value="">Select Category - Gallery</option>

                                            <?php foreach ($galleries as $row) : ?>

                                                <option value="<?php echo $row->gallery_id; ?>" <?php echo (!empty($query->gallery_id) && $row->gallery_id == $query->gallery_id) ? 'selected' : ''; ?>><?php echo $this->db->where('category_id', $row->category_id)->get('category_gallery')->row()->category_name . ' - ' . $row->gallery_name; ?></option>

                                            <?php endforeach ?>

                                        </select>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="col-sm-2 col-md-2 control-label" for="form-field-4">Page Type<span class="eror"><?php echo form_error('speciality_id'); ?></span></label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="type_id" id="type_id">
                                            <option value="">-- Page Type --</option>
                                            <?php foreach ($page_type as $row) : ?>
                                                <option value="<?php echo $row->type_id; ?>" <?php echo (!empty($query->type_id) && $row->type_id == $query->type_id) ? 'selected' : ''; ?>><?php echo $row->type_name; ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-md-2 control-label" for="form-field-4">Template<span class="eror"><?php echo form_error('speciality_id'); ?></span></label>
                                    <div class="col-sm-10">
                                        <select name="template_id" id="template_id" class="form-control" data-validation="required" required>
                                            <option value="">-- Template Type --</option>
                                            <?php foreach ($templates as $row) : ?>
                                                <option value="<?php echo $row->template_id; ?>" <?php echo (!empty($query->template_id) && $row->template_id == $query->template_id) ? 'selected' : ''; ?>><?php echo $row->template_name; ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-md-2 control-label" for="form-field-6">Page Slug<span class="eror"><?php echo form_error('page_slug'); ?></span></label>
                                    <div class="col-sm-10">
                                        <input name="page_slug" id="page_slug" type="text" class="form-control" value="<?php echo (!empty($query->page_slug)) ? $query->page_slug : ''; ?>" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-md-2 control-label" for="form-field-4">Meta Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="meta_title" id="meta_title" class="form-control" placeholder="Meta Title" value="<?php echo (!empty($query->meta_title)) ? $query->meta_title : '' ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-md-2 control-label" for="form-field-4">Meta Description</label>
                                    <div class="col-sm-10">
                                        <textarea type="text" name="meta_description" id="meta_description" class="form-control" placeholder="Meta Description"><?php echo (!empty($query->meta_description)) ? $query->meta_description : '' ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-md-2 control-label" for="form-field-4">Meta Keywords</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="meta_keywords" id="meta_keywords" class="form-control" placeholder="Meta Keywords" value="<?php echo (!empty($query->meta_keywords)) ? $query->meta_keywords : '' ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-md-2 control-label" for="form-field-4">Other Meta Tags</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="other_meta_tags" id="other_meta_tags" class="form-control" placeholder="Other Meta Tags" value="<?php echo (!empty($query->other_meta_tags)) ? $query->other_meta_tags : '' ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-md-2 control-label" for="form-field-4">No Follow Tag</label>
                                    <div class="col-sm-10">
                                        <label class="radiobuttons"><input name="nofollow_ind" value="1" type="radio" <?php echo (!empty($query->nofollow_ind)) ? 'checked' : ''; ?> />
                                            <span class="lbl">Yes</span></label>
                                        &nbsp; &nbsp; &nbsp;&nbsp;
                                        <label class="radiobuttons"><input name="nofollow_ind" value="0" type="radio" <?php echo (empty($query->nofollow_ind)) ? 'checked' : ''; ?> />
                                            <span class="lbl">No</span></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-md-2 control-label" for="form-field-4">No Index Tag</label>
                                    <div class="col-sm-10">
                                        <label class="radiobuttons"><input name="noindex_ind" value="1" type="radio" <?php echo (!empty($query->noindex_ind)) ? 'checked' : ''; ?> />
                                            <span class="lbl">Yes</span></label>
                                        &nbsp; &nbsp; &nbsp;&nbsp;
                                        <label class="radiobuttons"><input name="noindex_ind" value="0" type="radio" <?php echo (empty($query->noindex_ind)) ? 'checked' : ''; ?> />
                                            <span class="lbl">No</span></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-md-2 control-label" for="form-field-4">Add Canonical URL</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="canonical_url" id="canonical_url" class="form-control" placeholder="Add Canonical URL" value="<?php echo (!empty($query->canonical_url)) ? $query->canonical_url : '' ?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-md-2 control-label" for="form-field-4">Redirection Link</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="redirection_link" id="redirection_link" class="form-control" placeholder="Redirection Link" value="<?php echo (!empty($query->redirection_link)) ? $query->redirection_link : '' ?>">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="col-sm-6 col-md-6 control-label" for="form-field-8">Status</label>
                                    <div class="col-sm-10">
                                        <span class="eror"><?php echo form_error('status_ind'); ?></span>
                                        <input name="status_ind" value="1" type="radio" <?php echo (!empty($query->status_ind)) ? 'checked' : ''; ?> />
                                        <span class="label label-success">Publish</span>
                                        &nbsp; &nbsp; &nbsp;&nbsp;
                                        <input name="status_ind" value="0" type="radio" <?php echo (empty($query->status_ind)) ? 'checked' : ''; ?> />
                                        <span class="label label-danger">Unpublish</span>
                                    </div>
                                </div>
                                <hr>

                                <h3>Videos Section</h3>

                                <div class="row">
                                    <div class="col-xs-3 col-sm-3 col-md-3">
                                        <div class="form-group">
                                            <label for="video_link_1">Video Link 1</label>
                                        </div>
                                    </div>
                                    <div class="col-xs-8 col-sm-8 col-md-8">
                                        <div class="form-group">
                                            <input type="text" name="video_link_1" id="video_link_1" class="form-control" placeholder="Video Link 1" value="<?php echo (!empty($query->video_link_1)) ? $query->video_link_1 : '' ?>">
                                            <small class="text-danger">Please enter youtube embed link example: https://www.youtube.com/embed/_1CtuO_QboM </small><br />
                                        </div>
                                    </div>
                                </div>
                           
                                <div class="row">
                                    <div class="col-xs-3 col-sm-3 col-md-3">
                                        <div class="form-group">
                                            <label for="video_link_2">Video Link 2</label>
                                        </div>
                                    </div>
                                    <div class="col-xs-8 col-sm-8 col-md-8">
                                        <div class="form-group">
                                            <input type="text" name="video_link_2" id="video_link_2" class="form-control" placeholder="Video Link 2" value="<?php echo (!empty($query->video_link_2)) ? $query->video_link_2 : '' ?>">
                                            <small class="text-danger">Please enter youtube embed link example: https://www.youtube.com/embed/_1CtuO_QboM </small><br />
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="row">
                                    <div class="col-xs-3 col-sm-3 col-md-3">
                                        <div class="form-group">
                                            <label for="video_link_3">Video Link 3</label>
                                        </div>
                                    </div>
                                    <div class="col-xs-8 col-sm-8 col-md-8">
                                        <div class="form-group">
                                            <input type="text" name="video_link_3" id="video_link_3" class="form-control" placeholder="Video Link 3" value="<?php echo (!empty($query->video_link_3)) ? $query->video_link_3 : '' ?>">
                                            <small class="text-danger">Please enter youtube embed link example: https://www.youtube.com/embed/_1CtuO_QboM </small><br />
                                        </div>
                                    </div>
                                </div>
                               




                                <div class="form-actions form-btns">
                                    <button class="btn btn-round btn-success" type="submit">
                                        <i class="fa fa-check"></i>
                                        Save
                                    </button>
                                    &nbsp; &nbsp; &nbsp;
                                    <button class="btn btn-round btn-default" type="reset">
                                        <i class="fa fa-refresh"></i>
                                        Reset
                                    </button>
                                    &nbsp; &nbsp; &nbsp;
                                    <a href="specialities">
                                        <button class="btn btn-warning btn-round" type="button">
                                            <i class="fa fa-times"></i>
                                            Back
                                        </button></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>


    <script>
    $(document).ready(function(){
 
 $('.summernote').summernote({
     height: 300,                 // set editor height
     minHeight: null,             // set minimum height of editor
     maxHeight: null,             // set maximum height of editor
     focus: true ,                 // set focus to editable area after initializing summernote
   });
})
</script>