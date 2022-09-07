<div class="row" style="border: 1px solid gainsboro;background-color: white">
    <div class="col-xs-12">
        <div class="panel-body">
            <div class="table-header">
                <i class="fa fa-list"></i>
                Expense Reports
            </div>
        </div>

        <div class="col-md-12 well no-print">
            <form class="form-horizontal" id="notice-submit" action="<?php echo base_url() . 'report_expense/generate/'; ?>" method="post">
                <div class="form-group">
                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="expense_report">Select an option</label>
                    <div class="col-xs-12 col-sm-9">
                        <div class="clearfix">
                            <?php
                            $report_types = array(
                                '' => "select an option",
                                '1' => "last one month",
                                '2' => "last three month",
                                '3' => "last six month",
                                '4' => "last one year",
                                '5' => "date to date",
                            );
                            echo form_dropdown('expense_report', $report_types, $report->expense_report, 'class="col-sm-6 col-xs-12 testselect1" id="expense_report"');
                            ?>
                        </div>
                        <div class="help-block" id="title-exists"><?php echo form_error('expense_report'); ?></div>
                    </div>
                </div>
                <div class="form-group" id="date" style="display:none">
                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="date">date</label>
                    <div class="col-xs-12 col-sm-9">
                        <div class="row">
                            <div class="col-xs-12 col-sm-5">
                                <div class="clearfix" style="width: 92%;">
                                    <input type="text" name="date_1" class="datepicker form-control" value="<?php echo set_value('date_1', $report->date_1); ?>">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-1" style="margin-left: -6%;">To</div>

                            <div class="col-xs-12 col-sm-5">
                                <div class="clearfix" style="width: 92%;margin-left: 4%;;">
                                    <input type="text" name="date_2" class="datepicker form-control" value="<?php echo set_value('date_2', $report->date_2); ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group" id="submit_btn">
                    <label class="control-label col-xs-12 col-sm-3 "></label>
                    <div class="col-xs-12 col-sm-9">
                        <div class="clearfix">
                            <button class="btn btn-sm btn-info" type="submit">
                                <i class="ace-icon fa fa-check"></i> generate
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="clearfix"></div>
        <?php if (isset($result)) : ?>
            <div class="table-responsive">
                <h3>Expense</h3>
                <table id="dataTableExample3" class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>SL No</th>
                            <th>Date</th>
                            <th>Transaction ID</th>
                            <th>Quantity</th>
                            <th>Amount</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th colspan="5" class="text-right">Grand Total : </th>
                            <th></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        if (isset($result) && isset($result['expense'])) :
                            $searial = 1;
                            $grand_total = 0;
                            foreach ($result['expense'] as $value) :
                                $grand_total = $grand_total + $value->amount;
                        ?>
                                <tr>
                                    <td><?php echo $searial++; ?></td>
                                    <td><?php echo date("d-m-Y", strtotime($value->date)); ?></td>
                                    <td><?php echo $value->transection_id; ?></td>
                                    <td><?php echo $value->quantity; ?></td>
                                    <td><?php echo $value->amount; ?></td>
                                    <td><?php echo $value->amount * $value->quantity; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>

            <div class="table-responsive">
                <h3>Expense List</h3>
                <table id="dataTableExample4" class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>SL No</th>
                            <th>Expense Name</th>
                            <th>Quantity</th>
                            <th>Total Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (isset($result) && isset($result['expense_list'])) :

                            $searial = 1;

                            $expense_list = [];



                            foreach ($result['expense_list'] as $arr) {

                                if (!array_key_exists($arr->expense_name, $expense_list)) {

                                    $expense_list[$arr->expense_name]['quantity'] = 0;
                                    $expense_list[$arr->expense_name]['amount'] = 0;
                                }
                            }


                            foreach ($result['expense_list'] as $arr) {

                                foreach (array_keys($expense_list) as $key) {

                                    if ($key == $arr->expense_name) {
                                        $expense_list[$arr->expense_name]['quantity'] += $arr->quantity;
                                        $expense_list[$arr->expense_name]['amount'] += ($arr->quantity * $arr->amount);
                                    }
                                }
                            }

                            foreach ($expense_list as $key => $value) :


                        ?>
                                <tr>
                                    <td><?php echo $searial++; ?></td>
                                    <td><?php echo $key; ?></td>
                                    <td><?php echo $value['quantity']; ?></td>
                                    <td><?php echo $value['amount']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>


    </div>

</div><!-- /.row -->
<!-- PAGE CONTENT ENDS -->
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
                grandTotal = api.column(5, {
                    page: 'current'
                }).data().reduce(function(a, b) {
                    return intVal(a) + intVal(b);
                }, 0);
                //#-----------ends of Total over this page------------------#
                // Update footer
                $(api.column(5).footer()).html(
                    '<i class="fa fa-try"></i> ' + grandTotal
                );
            }
        });


        $("#expense_report").change(function() {
            var x = $(this).val();
            if (x == 5) {
                $("#date").slideDown(300);
            } else {
                $("#date").slideUp(300);
            }
        });

        //after submited form 
        var y = '<?php echo $this->input->post("expense_report"); ?>';
        if (y == 5) {
            $("#date").slideDown(300);
        } else {
            $("#date").slideUp(300);
        }

    });
</script>