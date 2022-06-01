<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-bd">
            <div class="panel-body">
                <div class="table-header">
                    <i class="fa fa-list"></i> Vendor List
                    <div class="pull-right btn btn-success">
                        <i class="fa fa-plus "></i>
                        <a style="color:white" href="<?php echo base_url(); ?>vendor/create">Add Vendor</a>
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
                                <th style="align:center;">
                                    SL No
                                </th>

                                <th>
                                    Vendor Name
                                </th>
                                <th>
                                    Address
                                </th>

                                <th>
                                    Cell Number
                                </th>
                                <th>
                                    Email
                                </th>
                                <th>
                                    Website
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
                            if (!empty($vendors)) {
                                $count = 0;
                                foreach ($vendors as $vendor) {
                            ?>
                                    <tr>
                                        <td class="center"><?php echo $count + 1; ?></td>
                                        <td><?php echo $vendor->vendor_name; ?></td>
                                        <td><?php echo $vendor->vendor_address; ?></td>
                                        <td><?php echo $vendor->vendor_cell; ?></td>
                                        <td><?php echo $vendor->vendor_email; ?></td>
                                        <td><?php echo $vendor->vendor_web; ?></td>
                                        <td><?php if ($vendor->active == 1)
                                                echo 'Active';
                                            else
                                                echo 'Inactive';
                                            ?></td>

                                        <?php if ($this->session->userdata('user_type') == 9) { ?>
                                            <td class="no-print">
                                                <a class="green" data-toggle="tooltip" title="Edit" href="<?php echo base_url() . "vendor/edit_vendor/" . $vendor->vendor_id; ?>">
                                                    <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                </a>&nbsp;&nbsp;
                                                <a class="red delete" data-toggle="tooltip" title="Delete" href="<?php echo base_url() . "vendor/delete_vendor/" . $vendor->vendor_id; ?>">
                                                    <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                </a>
                                            </td>
                                        <?php } //ends of user type check 
                                        ?>

                                    </tr>
                            <?php
                                    $count++;
                                } //foreach
                            } else {
                                echo '<tr>';
                                echo '<td colspan="7">' . 'No Data Found' . '</td>';
                                echo '</tr>';
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>