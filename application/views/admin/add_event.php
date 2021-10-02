<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Add New Event
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i>Dashboard</a></li>
            <li><a href="<?php echo base_url(); ?>admin/manage_event">Manage Event</a></li>
            <li class="active">Add New Event</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <form action="<?php echo base_url(); ?>admin/save_event" method="POST" enctype="multipart/form-data">
                        <h3 style="color:green">
                            <?php
                            $msg = $this->session->userdata('save_event');
                            if (isset($msg)) {
                                echo "<p style='margin-left:2%;'>$msg</p>";
                                $this->session->unset_userdata('save_event');
                            }
                            ?>
                        </h3>
                        <div class="alert alert-danger">
                            Width = 270px and Height = 330px
                        </div>
                        <div class="col-xs-6">
                            <div class="box-body">
                                <div class="form-group">
                                    <label>Event Name</label>
                                    <input type="text" name="event_name" class="form-control">
                                </div>                             
                                <div class="form-group">
                                    <label>Main Image</label>
                                    <input type="file" name="event_slider_0" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Event Description</label>
                                    <textarea name="event_description" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Event Slider - 1</label>
                                    <input type="file" name="event_slider_1" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Event Slider - 2</label>
                                    <input type="file" name="event_slider_2" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Event Slider - 3</label>
                                    <input type="file" name="event_slider_3" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Event Slider - 4</label>
                                    <input type="file" name="event_slider_4" class="form-control">
                                </div>
                                <button type="reset" class="btn btn-default">Cancel</button>
                                <button type="submit" class="btn btn-info pull-right">Save</button>
                            </div>
                        </div>
                        <div class="box-footer"></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>