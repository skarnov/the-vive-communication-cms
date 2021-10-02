<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Edit Testimonial
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo base_url(); ?>admin/manage_testimonial"> Manage Testimonial</a></li>
            <li class="active">Edit Testimonial</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <form action="<?php echo base_url(); ?>admin/update_testimonial" method="POST">
                        <div class="col-xs-6">
                            <div class="box-body">
                                <div class="form-group">
                                    <label>Testimonial Details</label>
                                    <input type="text" name="testimonial_details" value="<?php echo $testimonial_info->testimonial_details; ?>" class="form-control">
                                    <input type="hidden" name="testimonial_id" value="<?php echo $testimonial_info->testimonial_id; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Testimonial Name</label>
                                    <input type="text" name="testimonial_name" value="<?php echo $testimonial_info->testimonial_name; ?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Designation</label>
                                    <textarea name="testimonial_designation" class="form-control"><?php echo $testimonial_info->testimonial_designation; ?></textarea>
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