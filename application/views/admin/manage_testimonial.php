<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Manage Testimonial
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo base_url(); ?>admin/add_testimonial">Add New Testimonial</a></li>
            <li class="active">Manage Testimonial</li>
        </ol>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Testimonial Details</th>
                            <th>Testimonial Name</th>
                            <th>Designation</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($all_testimonial as $v_testimonial) {
                            ?>
                            <tr>
                                <td><?php echo $v_testimonial->testimonial_details; ?></td>
                                <td><?php echo $v_testimonial->testimonial_name; ?></td>
                                <td><?php echo $v_testimonial->testimonial_designation; ?></td>
                                <td>
                                    <a href="<?php echo base_url(); ?>admin/edit_testimonial/<?php echo $v_testimonial->testimonial_id; ?>" class="btn btn-primary" data-toggle="tooltip" title="Edit Testimonial"><i class="fa fa-pencil-square-o"></i></a>
                                    <a href="<?php echo base_url(); ?>admin/delete_testimonial/<?php echo $v_testimonial->testimonial_id; ?>" class="btn btn-danger" data-toggle="tooltip" title="Delete Testimonial" onclick="return check_delete();"><i class="fa fa-trash"></i></a>
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