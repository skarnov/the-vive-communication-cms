<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Edit Category
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo base_url(); ?>admin/manage_category"> Manage Category</a></li>
            <li class="active">Edit Category</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <form action="<?php echo base_url(); ?>admin/update_category" method="POST">
                    <div class="box box-info">
                        <div class="col-xs-8">
                            <div class="box-body">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="category_name" value="<?php echo $category_info->category_name; ?>" class="form-control">
                                    <input type="hidden" name="category_id" value="<?php echo $category_info->category_id; ?>" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-info pull-right">Edit</button>
                            </div>
                        </div>
                        <div class="box-footer"></div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>