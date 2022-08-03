<section class="inner-header divider " data-bg-img="assets/images/bg/banner-bg.png" style="background-image: url('assets/images/bg/banner-bg.png'); background-position: bottom left;">
    <div class="container  pt-40">
        <!-- Section Content -->
        <div class="section-content">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-white text-center font-36"><?php echo $event->event_name; ?></h2>
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

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?php
                $curDateTime = date("Y-m-d H:i:s");
                $myDate = date("Y-m-d H:i:s", strtotime($event->end_date_time));
                if ($curDateTime < $myDate) {
                    echo '<h4 class="text-danger">This event is Passed</h4>';
                } else {
                }
                ?>
                <h6></h6>
            </div>
            <div class="col-lg-4">
                <div class="tribe-events-meta-group tribe-events-meta-group-details">
                    <h2 class="tribe-events-single-section-title"> Details </h2>
                    <dl>
                        <?php $start_date = explode(' ', date('Y F d', strtotime($event->start_date)));
                        $end_date = explode(' ', date('Y F d', strtotime($event->end_date)));
                        ?>

                        <dt class="tribe-events-start-datetime-label"> Start: </dt>
                        <dd>
                            <abbr class="tribe-events-abbr tribe-events-start-datetime updated published dtstart" title="<?php echo $start_date[1] . ' ' . $start_date[2] . ' @ ' . $event->start_time; ?>"> <?php echo $start_date[1] . ' ' . $start_date[2] . ' @ ' . $event->start_time; ?> </abbr>
                        </dd>

                        <dt class="tribe-events-end-datetime-label"> End: </dt>
                        <dd>
                            <abbr class="tribe-events-abbr tribe-events-end-datetime dtend" title="<?php echo $end_date[1] . ' ' . $end_date[2] . ' @ ' . $event->end_time; ?>"><?php echo $end_date[1] . ' ' . $end_date[2] . ' @ ' . $event->end_time; ?> </abbr>
                        </dd>



                        <dt class="tribe-events-event-categories-label">Place:</dt>
                        <dd class="tribe-events-event-categories"><?php echo $event->place; ?></dd>

                        <dt class="tribe-events-event-categories-label">Description:</dt>
                        <dd class="tribe-events-event-categories"><?php echo $event->event_description; ?></dd>

                    </dl>
                </div>
            </div>

            <div class="col-lg-4">
            <div class="tribe-events-single-section tribe-events-event-meta primary tribe-clearfix">




                                <div class="tribe-events-meta-group tribe-events-meta-group-organizer">
                                    <h2 class="tribe-events-single-section-title">Organizer</h2>
                                    <dl>
                                        <dt class="tribe-organizer-tel-label">
                                            Organiser: </dt>
                                        <dd class="tribe-organizer">
                                            <?php echo $event->organiser_name; ?> </dd>
                                            <dt class="tribe-organizer-tel-label">
                                            Organisation: </dt>
                                        <dd class="tribe-organizer">
                                            <?php echo $event->organisation; ?> </dd>
                                        <dt class="tribe-organizer-tel-label">
                                            Phone: </dt>
                                        <dd class="tribe-organizer-tel">
                                            <?php echo $event->phone; ?> </dd>
                                        <dt class="tribe-organizer-email-label">
                                            Email: </dt>
                                        <dd class="tribe-organizer-email">
                                            <?php echo $event->email; ?> </dd>
                                        <dd class="tribe-organizer-url">
                                            <a href="http://<?php echo $event->website; ?>" target="_blank" rel="external">View Organizer Website</a>
                                        </dd>
                                    </dl>
                                </div>

                            </div>
            </div>
             <div class="col-sm-12 mt-3">

                <div id="tribe-events-footer">
                 
                    <!-- <nav class="tribe-events-nav-pagination" aria-label="Event Navigation">
                        <ul class="tribe-events-sub-nav">
                          
                            <li class="tribe-events-nav-previous"><a class="text-info" href='index/event/<?php echo ($event->event_id-1); ?>'><span>«</span> Previous Event </a></li>
                            <li class="tribe-events-nav-next"><a class="text-info" href='<?php echo base_url("index/event/".$event->event_id+1); ?>'>Next Event <span>»</span></a></li>
                        </ul>
                      
                    </nav> -->
                </div>
            </div>

        </div>
    </div>

</section>
