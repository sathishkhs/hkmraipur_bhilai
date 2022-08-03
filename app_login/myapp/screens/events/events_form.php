<section class="content">
    <section class="wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <form class="form-horizontal" action="events/events_save" method="post" enctype="multipart/form-data">
                            <input name="event_id" type="hidden" value="<?php echo (!empty($query->event_id)) ? $query->event_id : ''; ?>" />
                            <br />
                            <div class="form-group">
                                <label class="col-sm-2 col-md-2 control-label" for="form-field-1">Event Name </label>
                                <div class="col-sm-10">
                                    <span class="eror"><?php echo form_error('event_name'); ?></span>
                                    <input name="event_name" id="event_name" type="text" placeholder="Event Name" class="form-control" value="<?php echo (!empty($query->event_name)) ? $query->event_name : ''; ?>" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-md-2 control-label" for="form-field-1">Event Start Date </label>
                                <div class="col-sm-10">
                                    <span class="eror"><?php echo form_error('start_date_time'); ?></span>
                                    <input name="start_date_time" id="start_date_time" type="datetime-local" placeholder="Event start date" class="form-control" value="<?php echo (!empty($query->start_date_time)) ? $query->start_date_time : ''; ?>" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-md-2 control-label" for="form-field-1">Event End Date </label>
                                <div class="col-sm-10">
                                    <span class="eror"><?php echo form_error('end_date_time'); ?></span>
                                    <input name="end_date_time" id="end_date_time" type="datetime-local" placeholder="Event End Date" class="form-control" value="<?php echo (!empty($query->end_date_time)) ? $query->end_date_time : ''; ?>" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-md-2 control-label" for="form-field-1">Event Place </label>
                                <div class="col-sm-10">
                                    <span class="eror"><?php echo form_error('place'); ?></span>
                                    <input name="place" id="place" type="text" placeholder="Event Place" class="form-control" value="<?php echo (!empty($query->place)) ? $query->place : ''; ?>" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-md-2 control-label" for="form-field-1">Event Description </label>
                                <div class="col-sm-10">
                                    <span class="eror"><?php echo form_error('from_time'); ?></span>
                                    <textarea name="event_description" id="event_description" type="text" placeholder="Event Description" class="form-control"><?php echo (!empty($query->event_description)) ? $query->event_description : ''; ?> </textarea>
                                </div>
                            </div>
                            
                            <h4>Organiser Details</h4>
                            <div class="form-group">
                                <label class="col-sm-2 col-md-2 control-label" for="form-field-1">Organiser Name </label>
                                <div class="col-sm-10">
                                    <span class="eror"><?php echo form_error('organiser_name'); ?></span>
                                    <input name="organiser_name" id="organiser_name" type="text" placeholder="Organiser Name" class="form-control" value="<?php echo (!empty($query->organiser_name)) ? $query->organiser_name : ''; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-md-2 control-label" for="form-field-1">Organisation</label>
                                <div class="col-sm-10">
                                    <span class="eror"><?php echo form_error('organisation'); ?></span>
                                    <input name="organisation" id="organisation" type="text" placeholder="Organisation" class="form-control" value="<?php echo (!empty($query->organisation)) ? $query->organisation : ''; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-md-2 control-label" for="form-field-1">Website</label>
                                <div class="col-sm-10">
                                    <span class="eror"><?php echo form_error('website'); ?></span>
                                    <input name="website" id="website" type="text" placeholder="Website" class="form-control" value="<?php echo (!empty($query->website)) ? $query->website : ''; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-md-2 control-label" for="form-field-1">Email</label>
                                <div class="col-sm-10">
                                    <span class="eror"><?php echo form_error('email'); ?></span>
                                    <input name="email" id="email" type="text" placeholder="Email" class="form-control" value="<?php echo (!empty($query->email)) ? $query->email : ''; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-md-2 control-label" for="form-field-1">Mobile</label>
                                <div class="col-sm-10">
                                    <span class="eror"><?php echo form_error('mobile'); ?></span>
                                    <input name="mobile" id="mobile" type="text" placeholder="Mobile" class="form-control" value="<?php echo (!empty($query->mobile)) ? $query->mobile : ''; ?>" />
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


