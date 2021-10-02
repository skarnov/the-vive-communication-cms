<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Add New Testimonial
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo base_url(); ?>admin/manage_testimonial"> Manage Testimonial</a></li>
            <li class="active">Add New Testimonial</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <form action="<?php echo base_url(); ?>admin/save_testimonial" method="POST" enctype="multipart/form-data">
                        <h3 style="color:green">
                            <?php
                            $msg = $this->session->userdata('save_testimonial');
                            if (isset($msg)) {
                                echo "<p style='margin-left:2%;'>$msg</p>";
                                $this->session->unset_userdata('save_testimonial');
                            }
                            ?>
                        </h3>
                        <div class="col-xs-6">
                            <div class="box-body">
                                <div class="form-group">
                                    <label>Testimonial Details</label>
                                    <input type="text" name="testimonial_details" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Testimonial Name</label>
                                    <input type="text" name="testimonial_name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Designation</label>
                                    <textarea name="testimonial_designation" class="form-control"></textarea>
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