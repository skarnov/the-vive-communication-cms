<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Edit Event
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo base_url(); ?>admin/manage_event"> Manage Event</a></li>
            <li class="active">Add New Event</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <form name="event" action="<?php echo base_url(); ?>admin/update_event" method="POST" enctype="multipart/form-data">
                        <div class="col-xs-6">
                            <div class="box-body">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="event_name" value="<?php echo $event_info->event_name; ?>" class="form-control">
                                    <input type="hidden" name="event_id" value="<?php echo $event_info->event_id; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Image</label>
                                    <img src="<?php echo base_url().$event_info->event_slider_0; ?>" style="height: 200px; width: 300px;" />
                                    <input type="file" name="event_slider_0" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="event_description" class="form-control"><?php echo $event_info->event_description; ?></textarea>
                                </div>
                                <button type="reset" class="btn btn-default">Cancel</button>
                                <button type="submit" class="btn btn-info pull-right">Edit</button>
                            </div>
                        </div>
                        <div class="box-footer"></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
<script>
    document.forms['event'].elements['category_id'].value = '<?php echo $event_info->category_id; ?>';
</script>