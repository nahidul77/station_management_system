<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-bd">
            <div class="panel-body">
                <div class="table-header">
                    <i class="fa fa-list"></i>
                    Vehicle Fuel Unit
                    <div class="pull-right btn btn-success">
                        <i class="fa fa-plus "></i>
                        <a style="color:white" href="<?php echo base_url() . 'fule_unit/create'; ?>">Add Fuel Unit</a>
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
                                    SL No
                                </th>
                                <th>
                                    Fuel Unit
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
                            if (!empty($units)) {
                                $count = 0;
                                foreach ($units as $unit) {
                            ?>
                                    <tr>
                                        <td class="center"><?php echo $count + 1; ?></td>
                                        <td><?php echo $unit->unit_name; ?></td>
                                        <td><?php if ($unit->active == 1)
                                                echo "Active";
                                            else
                                                echo "Inactive";
                                            ?></td>

                                        <?php if ($this->session->userdata('user_type') == 9) { ?>
                                            <td class="no-print">
                                                <a class="green" data-toggle="tooltip" title="Edit" href="<?php echo base_url() . "fule_unit/unit_edit/" . $unit->unit_id; ?>">
                                                    <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                </a>&nbsp;&nbsp;
                                                <a class="red delete" data-toggle="tooltip" title="Delete" href="<?php echo base_url() . "fule_unit/delete_unit/" . $unit->unit_id; ?>">
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