<section class="content">
    <section class="wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <form class="form-horizontal" action="events/vaishnava_calendar_save" method="post" enctype="multipart/form-data">
                            <input name="id" type="hidden" value="<?php echo (!empty($query->id)) ? $query->id : ''; ?>" />
                            <br />
                            <div class="form-group">
                                <label class="col-sm-2 col-md-2 control-label" for="form-field-1">Title </label>
                                <div class="col-sm-10">
                                    <span class="eror"><?php echo form_error('event_name'); ?></span>
                                    <input name="title" id="title" type="text" placeholder="Title" class="form-control" value="<?php echo (!empty($query->title)) ? $query->title : ''; ?>" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-md-2 control-label" for="form-field-1">Start Date </label>
                                <div class="col-sm-10">
                                    <span class="eror"><?php echo form_error('start_time'); ?></span>
                                    <input name="start" id="start" type="date" placeholder=" start date" class="form-control" value="<?php echo (!empty($query->start)) ? $query->start : ''; ?>" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-md-2 control-label" for="form-field-1">Event End Date </label>
                                <div class="col-sm-10">
                                    <span class="eror"><?php echo form_error('end_time'); ?></span>
                                    <input name="end" id="end" type="date" placeholder="End Date" class="form-control" value="<?php echo (!empty($query->end)) ? $query->end : ''; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-md-2 control-label" for="form-field-1">Redirect URL </label>
                                <div class="col-sm-10">
                                    <span class="eror"><?php echo form_error('url'); ?></span>
                                    <input name="url" id="url" type="text" placeholder="URL" class="form-control" value="<?php echo (!empty($query->url)) ? $query->url : ''; ?>" />
                                </div>
                            </div>
                            
                         
                            <div class="form-group">
                                <label class="col-sm-2 col-md-2 control-label" for="form-field-8">Status</label>
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


