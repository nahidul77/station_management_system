<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-bd">
            <div class="panel-body">
                <div class="table-header">
                    <i class="fa fa-list"></i>
                    Sale
                    <div class="pull-right btn btn-success">
                        <i class="fa fa-plus "></i>
                        <a style="color:white" href="<?php echo base_url() . 'sale/create'; ?>">Add Sale</a>
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
                                    Invoice
                                </th>
                                <th>
                                    Fuel Name
                                </th>
                                <th>
                                    Fuel Type
                                </th>
                                <th>
                                    Vehicle Type
                                </th>
                                <th>
                                    Customer Name
                                </th>
                                <th>
                                    Customer Phone
                                </th>
                                <th>
                                    Sell Unit
                                </th>
                                <th>
                                    Date
                                </th>
                                <?php if ($this->session->userdata('user_type') == 9) { ?>
                                    <th class="no-print">Action</th>
                                <?php } //ends of if condition
                                ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (!empty($sales)) {
                                $count = 0;
                                foreach ($sales as $sale) {
                            ?>
                                    <tr>
                                        <td class="center"><?php echo $count + 1; ?></td>
                                        <td><?php echo $sale->invoice_id; ?></td>
                                        <td><?php echo $sale->fuel_name; ?></td>
                                        <td><?php echo $sale->fuel_type_name; ?></td>
                                        <td><?php echo $sale->v_type; ?></td>
                                        <td><?php echo $sale->customer_name; ?></td>
                                        <td><?php echo $sale->customer_phone; ?></td>
                                        <td><?php echo $sale->sell_unit; ?></td>
                                        <td><?php echo $sale->date; ?></td>

                                        <?php if ($this->session->userdata('user_type') == 9) { ?>
                                            <td class="no-print text-center">
                                                <!-- <a class="green" data-toggle="tooltip" title="Edit" href="<?php // echo base_url() . "fule_sale/sale_edit/" . $sale->fuel_id; 
                                                                                                                ?>">
                                                    <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                </a>&nbsp;&nbsp; -->
                                                <a class="red delete" data-toggle="tooltip" title="Delete" href="<?php echo base_url() . "sale/delete_sale/" . $sale->sale_id; ?>">
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