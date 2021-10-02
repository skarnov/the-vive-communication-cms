<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Add New Team
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo base_url(); ?>admin/manage_team"> Manage Team</a></li>
            <li class="active">Add New Team</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <form action="<?php echo base_url(); ?>admin/save_team" method="POST" enctype="multipart/form-data">
                        <h3 style="color:green">
                            <?php
                            $msg = $this->session->userdata('save_team');
                            if (isset($msg)) {
                                echo "<p style='margin-left:2%;'>$msg</p>";
                                $this->session->unset_userdata('save_team');
                            }
                            ?>
                        </h3>
                        <div class="alert alert-danger">
                            Width = 350px and Height = 250px
                        </div>
                        <div class="col-xs-6">
                            <div class="box-body">
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" name="team_image" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="team_name" class="form-control">
                                </div>                      
                                <div class="form-group">
                                    <label>Designation</label>
                                    <input type="text" name="team_designation" class="form-control">
                                </div>                      
                                <div class="form-group">
                                    <label>Facebook Link</label>
                                    <input type="text" name="team_facebook_link" class="form-control">
                                </div>               
                                <div class="form-group">
                                    <label>linkedin Link</label>
                                    <input type="text" name="team_twitter_link" class="form-control">
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