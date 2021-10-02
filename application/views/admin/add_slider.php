<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Add New Slider
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo base_url(); ?>admin/manage_slider"> Manage Slider</a></li>
            <li class="active">Add New Slider</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <form action="<?php echo base_url(); ?>admin/save_slider" method="POST" enctype="multipart/form-data">
                        <h3 style="color:green">
                            <?php
                            $msg = $this->session->userdata('save_slider');
                            if (isset($msg)) {
                                echo "<p style='margin-left:2%;'>$msg</p>";
                                $this->session->unset_userdata('save_slider');
                            }
                            ?>
                        </h3>
                        <div class="alert alert-danger">
                            Width = 1600px and Height = 1064px
                        </div>
                        <div class="col-xs-6">
                            <div class="box-body">
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" name="slider_image" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Slider Heading</label>
                                    <input type="text" name="slider_heading" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Slider Sub-Heading</label>
                                    <input type="text" name="slider_subheading" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Slider Link</label>
                                    <input type="text" name="slider_link" class="form-control">
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