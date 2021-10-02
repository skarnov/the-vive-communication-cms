<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Manage Event
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo base_url(); ?>admin/add_event">Add New Event</a></li>
            <li class="active">Manage Event</li>
        </ol>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($all_event as $v_event) {
                            ?>
                            <tr>
                                <td><?php echo $v_event->event_name; ?></td>
                                <td><img src="<?php echo base_url() . $v_event->event_slider_0; ?>" style="height:100px; width:200px;" /></td>
                                <td><?php echo $v_event->event_description; ?></td>
                                <td>
                                    <a href="<?php echo base_url(); ?>admin/edit_event/<?php echo $v_event->event_id; ?>" class="btn btn-primary" data-toggle="tooltip" title="Edit Event"><i class="fa fa-pencil-square-o"></i></a>
                                    <a href="<?php echo base_url(); ?>admin/delete_event/<?php echo $v_event->event_id; ?>" class="btn btn-danger" data-toggle="tooltip" title="Delete Event" onclick="return check_delete();"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>