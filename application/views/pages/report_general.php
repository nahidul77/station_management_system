<div class="row" style="border: 1px solid gainsboro;background-color: white">
    <div class="col-xs-12">
        <div class="panel-body">
            <div class="table-header">
                <i class="fa fa-list"></i>
                Sale Reports
            </div>
        </div>

        <div class="col-md-12 well no-print">
            <form class="form-horizontal" id="notice-submit" action="<?php echo base_url() . 'report_general/generate/'; ?>" method="post">
                <div class="form-group">
                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="general_report">Select an option</label>
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
                            echo form_dropdown('general_report', $report_types, $report->general_report, 'class="col-sm-6 col-xs-12 testselect1" id="general_report"');
                            ?>
                        </div>
                        <div class="help-block" id="title-exists"><?php echo form_error('general_report'); ?></div>
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
                <h3>Sales</h3>
                <table id="dataTableExample3" class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>SL No</th>
                            <th>Date</th>
                            <th>Invoice ID</th>
                            <th>Customer Name</th>
                            <th>Customer Phone</th>
                            <th>Sell Unit</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th colspan="6" class="text-right">Grand Total : </th>
                            <th></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        // print_r($result['general']);
                        if (isset($result) && isset($result['general'])) :
                            $searial = 1;
                            $grand_total = 0;
                            foreach ($result['general'] as $value) :
                                $grand_total = $grand_total + $value->amount;
                        ?>
                                <tr>
                                    <td><?php echo $searial++; ?></td>
                                    <td><?php echo date("d-m-Y", strtotime($value->date)); ?></td>
                                    <td><?php echo $value->invoice_id; ?></td>
                                    <td><?php echo $value->customer_name; ?></td>
                                    <td><?php echo $value->customer_phone; ?></td>
                                    <td><?php echo $value->sell_unit; ?></td>
                                    <td><?php echo $value->amount; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>

            <div class="table-responsive">
                <h3>Vehicle List</h3>
                <table id="dataTableExample4" class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>SL No</th>
                            <th>Vehicle Name</th>
                            <th>Appearance</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (isset($result) && isset($result['vehicle_list'])) :
                            $searial = 1;
                            foreach ($result['vehicle_list'] as $value) :
                        ?>
                                <tr>
                                    <td><?php echo $searial++; ?></td>
                                    <td><?php echo $value->vehicle_name; ?></td>
                                    <td><?php echo $value->total; ?></td>
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