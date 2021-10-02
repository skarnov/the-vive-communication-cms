<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Manage Client
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo base_url(); ?>admin/add_client"> Add Client</a></li>
            <li class="active">Manage Client</li>
        </ol>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-header"></div>
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($all_client as $v_client) {
                            ?>
                            <tr>
                                <td>
                                    <img src="<?php echo base_url() . $v_client->client_image; ?>" style="height:50px; width:50px;" />
                                </td>
                                <td>
                                    <a href="<?php echo base_url(); ?>admin/delete_client/<?php echo $v_client->client_id; ?>" class="btn btn-danger" data-toggle="tooltip" title="Delete Client" onclick="return check_delete();"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>
                </div>
            </div>
        </div>
    </section>
</div>