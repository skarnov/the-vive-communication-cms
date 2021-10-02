<div class="content-wrapper">
    <section class="content-header">
        <h1>
        Edit Slider
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo base_url(); ?>admin/manage_slider"> Manage Slider</a></li>
            <li class="active">Edit Slider</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <form action="<?php echo base_url(); ?>admin/update_slider" method="POST" enctype="multipart/form-data">
                        <div class="alert alert-danger">
                            Width = 1600px and Height = 1064px
                        </div>
                        <div class="col-xs-6">
                            <div class="box-body">
                                <div class="form-group">
                                    <label>Image</label>
                                    <img src="<?php echo base_url(). $slider_info->slider_image; ?>" class="img-responsive" />
                                    <input type="file" name="slider_image" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Slider Heading</label>
                                    <input type="text" name="slider_heading" value="<?php echo $slider_info->slider_heading; ?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Slider Sub-Heading</label>
                                    <input type="text" name="slider_subheading" value="<?php echo $slider_info->slider_subheading; ?>" class="form-control">
                                    <input type="hidden" name="slider_id" value="<?php echo $slider_info->slider_id; ?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Slider Link</label>
                                    <input type="text" name="slider_link" value="<?php echo $slider_info->slider_link; ?>" class="form-control">
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