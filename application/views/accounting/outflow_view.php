<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-bd">
            <div class="table-header">
                <div class="panel-heading">
                    <i class="fa fa-list"></i> Payment Information
                    <div class="btn btn-success panel-title pull-right">
                        <a class="white" href="<?php echo base_url() . "accounting/outflow/create/" ?>">
                            <strong><i class="fa fa-plus"></i> Add Payment</strong>
                        </a>
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
                    <table id="dataTableExample3" class="display compact cell-border" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>SL No</th>
                                <th>Payment date</th>
                                <th>Payment to</th>
                                <th>Payment Type</th>
                                <th>Bank name</th>
                                <th>Branch name</th>
                                <th>Account number</th>
                                <th>Payorder number</th>
                                <th>TxID</th>
                                <th>Deposit Bank name</th>
                                <th>Account name</th>
                                <th>Amount</th>
                                <th>Description</th>
                                <th>Status</th>
                                <?php if ($this->session->userdata('user_type') == 9) : ?>
                                    <th class="no-print" width="8%">Action</th>
                                <?php endif; //ends of if condition 
                                ?>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th colspan="11" class="text-right">Grand Total: </th>
                                <th colspan="4"></th>
                            </tr>
                        </tfoot>

                        <tbody>
                            <?php
                            if (!empty($outflow)) :
                                $searial = 1;
                                foreach ($outflow as $value) :
                            ?>
                                    <tr>
                                        <td><?php echo $searial++; ?></td>
                                        <td><?php echo date("d-m-Y", strtotime($value->payment_date)); ?></td>
                                        <td><?php echo $value->payment_to; ?></td>
                                        <td>
                                            <?php
                                            $pay_type = array(
                                                '1' => 'cash',
                                                '2' => 'cheque',
                                                '3' => 'payorder',
                                                '4' => 'TxID',
                                            );
                                            echo $pay_type[$value->payment_type];
                                            ?>
                                        </td>
                                        <td><?php echo $value->bank_name; ?></td>
                                        <td><?php echo $value->branch_name; ?></td>
                                        <td><?php echo $value->account_number; ?></td>
                                        <td><?php echo $value->pay_order_number; ?></td>
                                        <td><?php echo $value->letter_of_credit; ?></td>
                                        <td><?php echo $value->deposit_bank; ?></td>
                                        <td><?php echo $value->account_name; ?></td>
                                        <td><?php echo $value->amount; ?></td>
                                        <td><?php echo $value->description; ?></td>
                                        <td><?php echo ($value->status == 1) ? 'active' : 'inactive'; ?></td>
                                        <?php if ($this->session->userdata('user_type') == 9) : ?>
                                            <td class="no-print">
                                                <a class="blue" data-toggle="tooltip" title="view" href="<?php echo base_url() . "accounting/outflow/single_view/" . $value->outflow_id ?>">
                                                    <i class="ace-icon fa fa-eye bigger-130"></i>
                                                </a>&nbsp;&nbsp;
                                                <a class="green" data-toggle="tooltip" title="edit" href="<?php echo base_url() . "accounting/outflow/edit/" . $value->outflow_id ?>">
                                                    <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                </a>&nbsp;&nbsp;
                                                <a class="red delete" data-toggle="tooltip" title="delete" href="<?php echo base_url() . "accounting/outflow/delete/" . $value->outflow_id ?>">
                                                    <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                </a>
                                            </td>
                                        <?php endif; //ends of if condition 
                                        ?>
                                    </tr>
                            <?php
                                endforeach;
                            endif;
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    $(document).ready(function() {

        $("#dataTableExample3").DataTable({
            dom: "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>tp",
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            buttons: [{
                    extend: 'copy',
                    className: 'btn-sm'
                },
                {
                    extend: 'csv',
                    title: 'ExampleFile',
                    className: 'btn-sm'
                },
                {
                    extend: 'excel',
                    title: 'ExampleFile',
                    className: 'btn-sm'
                },
                {
                    extend: 'pdf',
                    title: 'ExampleFile',
                    className: 'btn-sm'
                },
                {
                    extend: 'print',
                    className: 'btn-sm'
                }
            ],
            "footerCallback": function(row, data, start, end, display) {
                var api = this.api(),
                    data;
                // Remove the formatting to get integer data for summation
                var intVal = function(i) {
                    return typeof i === 'string' ? i.replace(/[\$,]/g, '') * 1 : typeof i === 'number' ? i : 0;
                };

                //#----------- Total over this page------------------#
                grandTotal = api.column(11, {
                    page: 'current'
                }).data().reduce(function(a, b) {
                    return intVal(a) + intVal(b);
                }, 0);
                //#-----------ends of Total over this page------------------#
                // Update footer
                $(api.column(11).footer()).html(grandTotal);
            }
        });
    });
</script>