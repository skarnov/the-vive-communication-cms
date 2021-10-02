<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Manage Slider
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo base_url(); ?>admin/add_slider">Add New Slider</a></li>
            <li class="active">Manage Slider</li>
        </ol>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Heading</th>
                            <th>Subheading</th>
                            <th>Link</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($all_slider as $v_slider) {
                            ?>
                            <tr>
                                <td><img src="<?php echo base_url() . $v_slider->slider_image; ?>" style="height:100px; width:200px;" /></td>
                                <td><?php echo $v_slider->slider_heading; ?></td>
                                <td><?php echo $v_slider->slider_subheading; ?></td>
                                <td><?php echo $v_slider->slider_link; ?></td>
                                <td>
                                    <a href="<?php echo base_url(); ?>admin/edit_slider/<?php echo $v_slider->slider_id; ?>" class="btn btn-primary" data-toggle="tooltip" title="Edit Slider"><i class="fa fa-pencil-square-o"></i></a>
                                    <a href="<?php echo base_url(); ?>admin/delete_slider/<?php echo $v_slider->slider_id; ?>" class="btn btn-danger" data-toggle="tooltip" title="Delete Slider" onclick="return check_delete();"><i class="fa fa-trash"></i></a>
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