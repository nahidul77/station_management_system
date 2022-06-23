<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-body">
                <div class="table-header">
                    <i class="fa fa-list"></i>
                    Vehicle Type List
                    <div class="pull-right btn btn-success">
                        <i class="fa fa-plus "></i>
                        <a style="color:white" href="<?php echo base_url(); ?>vehicle/vehicle_type_create">Add Vehicle Type</a>
                    </div>
                </div>
                <hr>
            </div>
            <?php
            if ($this->session->flashdata('success')) {
                echo "<div class=\"alert alert-success\" role=\"alert\">" . $this->session->flashdata('success') . "</div>";
            }
            ?>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>
                                    Sl No
                                </th>
                                <th>
                                    Vehicle Type
                                </th>
                                <th>
                                    Status
                                </th>
                                <?php if ($this->session->userdata('user_type') == 9) { ?>
                                    <th class="no-print">Action</th>
                                <?php } //ends of if condition 
                                ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (!empty($vehicle_types)) {
                                $count = 0;
                                foreach ($vehicle_types as $vehicle_type) {
                            ?>
                                    <tr>
                                        <td><?php echo $count + 1; ?></td>
                                        <td><?php echo $vehicle_type->v_type; ?></td>
                                        <td><?php
                                            if ($vehicle_type->active == 1)
                                                echo 'Active';
                                            else
                                                echo 'Inactive';
                                            ?></td>

                                        <?php
                                        if ($this->session->userdata('user_type') == 9) {
                                        ?>
                                            <td class="no-print">
                                                <a class="green" data-toggle="tooltip" title="Edit" href="<?php echo base_url() . "vehicle/vehicle_type_edit/" . $vehicle_type->v_type_id; ?>">
                                                    <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                </a>&nbsp;&nbsp;
                                                <a class="red delete" data-toggle="tooltip" title="Delete" href="<?php echo base_url() . "vehicle/vehicle_type_delete/" . $vehicle_type->v_type_id; ?>">
                                                    <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                </a>
                                            </td>
                                        <?php } //ends of if condition  
                                        ?>

                                    </tr>
                            <?php
                                    $count++;
                                } //foreach
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>