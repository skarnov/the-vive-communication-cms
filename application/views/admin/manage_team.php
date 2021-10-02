<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Manage Team
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo base_url(); ?>admin/add_team">Add New Team</a></li>
            <li class="active">Manage Team</li>
        </ol>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($all_team as $v_team) {
                            ?>
                            <tr>
                                <td><img src="<?php echo base_url() . $v_team->team_image; ?>" style="height:200px; width:250px;" /></td>
                                <td><?php echo $v_team->team_name; ?></td>
                                <td><?php echo $v_team->team_designation; ?></td>
                                <td>
                                    <a href="<?php echo base_url(); ?>admin/edit_team/<?php echo $v_team->team_id; ?>" class="btn btn-primary" data-toggle="tooltip" title="Edit Team"><i class="fa fa-pencil-square-o"></i></a>
                                    <a href="<?php echo base_url(); ?>admin/delete_team/<?php echo $v_team->team_id; ?>" class="btn btn-danger" data-toggle="tooltip" title="Delete Team" onclick="return check_delete();"><i class="fa fa-trash"></i></a>
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