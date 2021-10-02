<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Add New Project
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo base_url(); ?>admin/manage_project"> Manage Project</a></li>
            <li class="active">Add New Project</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <form action="<?php echo base_url(); ?>admin/save_project" method="POST" enctype="multipart/form-data">
                        <h3 style="color:green">
                            <?php
                            $msg = $this->session->userdata('save_project');
                            if (isset($msg)) {
                                echo "<p style='margin-left:2%;'>$msg</p>";
                                $this->session->unset_userdata('save_project');
                            }
                            ?>
                        </h3>
                        <div class="alert alert-danger">
                            Width = 270px and Height = 330px
                        </div>
                        <div class="col-xs-6">
                            <div class="box-body">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>Select Category <span style="color: red">(Required)</span></label>
                                        <select name="category_id" onclick="selectSubcategory(this.value);" class="form-control select2" style="width: 100%;">
                                            <option value="">Select Category</option>
                                            <?php
                                            foreach ($all_category as $v_category) {
                                                ?>
                                                <option value="<?php echo $v_category->category_id; ?>"><?php echo $v_category->category_name; ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Project Name</label>
                                    <input type="text" name="project_name" class="form-control">
                                </div>                             
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" name="project_image" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Project Description</label>
                                    <textarea name="project_description" class="form-control"></textarea>
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