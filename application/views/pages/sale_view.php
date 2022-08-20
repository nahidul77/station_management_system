<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-bd">
            <div class="panel-body">
                <div class="table-header">
                    <i class="fa fa-list"></i>
                    Vehicle Fuel Rate
                    <div class="pull-right btn btn-success">
                        <i class="fa fa-plus "></i>
                        <a style="color:white" href="<?php echo base_url() . 'fule_rate/create'; ?>">Add Fuel Rate</a>
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
                                    Fuel Name
                                </th>
                                <th>
                                    Fuel Type
                                </th>
                                <th>
                                    Fuel Unit
                                </th>
                                <th>
                                    Stock
                                </th>
                                <th>
                                    Buying Price
                                </th>
                                <th>
                                    Selling Price
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
                            if (!empty($rates)) {
                                $count = 0;
                                foreach ($rates as $rate) {
                            ?>
                                    <tr>
                                        <td class="center"><?php echo $count + 1; ?></td>
                                        <td><?php echo $rate->fuel_name; ?></td>
                                        <td><?php echo $rate->fuel_type_name; ?></td>
                                        <td><?php echo $rate->unit_name; ?></td>
                                        <td><?php echo $rate->stock; ?></td>
                                        <td><?php echo $rate->buy_price; ?></td>
                                        <td><?php echo $rate->sell_price; ?></td>
                                        <td><?php if ($rate->active == 1)
                                                echo "Active";
                                            else
                                                echo "Inactive";
                                            ?></td>

                                        <?php if ($this->session->userdata('user_type') == 9) { ?>
                                            <td class="no-print">
                                                <a class="green" data-toggle="tooltip" title="Edit" href="<?php echo base_url() . "fule_rate/rate_edit/" . $rate->fuel_id; ?>">
                                                    <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                </a>&nbsp;&nbsp;
                                                <a class="red delete" data-toggle="tooltip" title="Delete" href="<?php echo base_url() . "fule_rate/delete_rate/" . $rate->fuel_id; ?>">
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