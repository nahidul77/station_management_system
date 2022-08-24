<div class="row" style="border: 1px solid gainsboro;background-color: white">
    <div class="col-xs-12">
        <div class="widget-box">
            <div class="panel-body">
                <div class="widget-header widget-header-blue widget-header-flat">
                    <h4 class="widget-title lighter">
                        expensereports
                    </h4>
                </div>
            </div>
            <div class="widget-body">
                <div class="widget-main">
                    <div class="step-content pos-rel" id="step-container">
                        <div class="step-pane active" id="step1">
                            <form class="form-horizontal" id="notice-submit" action="<?php echo base_url() . 'report_expense/generate/'; ?>" method="post">
                                <!-- select an option -->
                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="company_id">selectanoption &nbsp;&nbsp;<span class="fa fa-asterisk red" style="color:red;"></span></label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <select class="testselect1" id="expense_report" name="expense_report">
                                                <option value="">selectanoption</option>
                                                <option value="1">01. dailyexpenseallvehicle</option>
                                                <option value="2">02. dailyexpensesinglevehicle</option>
                                                <option value="3">03. allvehicleexpense</option>
                                                <option value="4">04. vehiclewiseexpense</option>
                                                <option value="5">05. datetodatesinglevehicleexpense</option>
                                                <option value="6">06. datetodateallvehicleexpense</option>
                                                <option value="7">07. particularwiseexpense</option>
                                                <option value="8">08. datetodateparticularwiseexpense</option>
                                                <option value="9">09. regularexpense</option>

                                                <option value="10">10. datetodateregularexpense</option>
                                                <option value="11">11. maintenanceexpense</option>
                                                <option value="12">12. datetodatemaintenanceexpense</option>


                                                <option value="19">13. officeexpense</option>
                                                <option value="20">14. datetodateofficeexpense</option>
                                                <option value="21">15. garageexpense</option>
                                                <option value="22">16. datetodategarageexpense</option>


                                                <option value="13">17. othersexpense</option>
                                                <option value="14">18. datetodateothersexpense</option>
                                                <option value="15">19. ownervehicleexpense</option>
                                                <option value="16">20. hirevehicleexpense</option>
                                                <option value="17">21. vehiclewiseparticularexpense</option>
                                                <option value="18">22. datetodatevehiclewiseparticularexpense</option>
                                            </select>
                                        </div>
                                        <div class="help-block" id="title-exists"><?php echo form_error('company_id'); ?></div>
                                    </div>
                                </div>


                                <!-- form_hidden_part option -->
                                <div id="form_hidden_part">
                                    <!-- This part is load by ajax ...  -->
                                    <!-- defination in ajax_query controller -->
                                </div>


                                <!-- submit-btn name -->
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

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="panel panel-bd lobidrag">
                                        <div class="panel-heading">
                                            <div class="panel-title">
                                                <h4 class="text-center bg-info" style="padding:10px">
                                                    <?php
                                                    $report = array(
                                                        "1" =>  'dailyexpenseallvehicle',
                                                        "2" =>  'dailyexpensesinglevehicle',
                                                        "3" =>  'allvehicleexpense',
                                                        "4" =>  'vehiclewiseexpense',
                                                        "5" =>  'datetodatesinglevehicleexpense',
                                                        "6" =>  'datetodateallvehicleexpense',
                                                        "7" =>  'particularwiseexpense',
                                                        "8" =>  'datetodateparticularwiseexpense',
                                                        "9" =>  'regularexpense',
                                                        "10" => 'datetodateregularexpense',
                                                        "11" => 'maintenanceexpense',
                                                        "12" => 'datetodatemaintenanceexpense',
                                                        "19" => 'officeexpense',
                                                        "20" => 'datetodateofficeexpense',
                                                        "21" => 'garageexpense',
                                                        "22" => 'datetodategarageexpense',
                                                        "13" => 'othersexpense',
                                                        "14" => 'datetodateothersexpense',
                                                        "15" => 'ownervehicleexpense',
                                                        "16" => 'hirevehicleexpense',
                                                        "17" => 'vehiclewiseparticularexpense',
                                                        "18" => 'datetodatevehiclewiseparticularexpense'
                                                    );
                                                    if ($this->input->post('expense_report')) {
                                                        echo $report[$this->input->post('expense_report')];
                                                    }
                                                    if ($this->input->post('date_1') && $this->input->post('date_1')) {
                                                        echo " (" . $this->input->post('date_1') . " to " . $this->input->post('date_2') . ")";
                                                    }
                                                    ?>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <table id="dataTableExample3" class="table table-bordered table-striped table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>slno</th>
                                                            <th>date</th>
                                                            <th>vehicleregistrationno</th>
                                                            <th>Expense Group </th>
                                                            <th>particular </th>
                                                            <th>quantity </th>
                                                            <th>amount (Taka)</th>
                                                            <th>total (Taka)</th>
                                                        </tr>
                                                    </thead>

                                                    <tfoot>
                                                        <tr>
                                                            <th colspan="7" class="text-right">grandtotal : </th>
                                                            <th></th>
                                                        </tr>
                                                    </tfoot>

                                                    <tbody>
                                                        <?php
                                                        $m_group = array(1 => 'regular', 2 => 'maintenance', 3 => 'others', 4 => 'office', 5 => 'garage');
                                                        if (isset($exp_report)) {
                                                            $count = 1;
                                                            foreach ($exp_report as $value) {
                                                        ?>
                                                                <tr>
                                                                    <td><?php echo $count; ?></td>
                                                                    <td><?php echo date("d-m-Y", strtotime($value->date)); ?></td>
                                                                    <td><?php echo (!empty($value->hire_v_id)) ? "<span class=\"blue\" title=\"Hired vehicle\">$value->hire_v_id</span>" : $value->v_registration_no; ?></td>
                                                                    <td><?php echo $m_group[$value->expense_group]; ?></td>
                                                                    <td><?php echo $value->expense_name; ?></td>
                                                                    <td><?php echo $value->quantity; ?></td>
                                                                    <td><?php echo $value->amount; ?></td>
                                                                    <td><?php echo round($value->amount * $value->quantity, 2); ?></td>
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
                        </div>
                    </div>
                </div><!-- /.widget-main -->
            </div><!-- /.widget-body -->
        </div><!-- PAGE CONTENT ENDS -->



    </div><!-- /.col -->
</div><!-- /.row -->

<script type="text/javascript">
    /*-----------STARTS OF EXPENSE REPORT FORM--------------*/
    $(document).ready(function() {
        $("#expense_report").change(function() {
            var report = $(this).val();
            jquery_ajax('ajax_query', 'expense_report_form', report, "#form_hidden_part");
        });
    });
    /*-----------ENDS OF EXPENSE REPORTS FORM------------------*/
</script>
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
                total = api.column(7, {
                    page: 'current'
                }).data().reduce(function(a, b) {
                    return intVal(a) + intVal(b);
                }, 0);
                //#-----------ends of Total over this page------------------#

                // Update footer 
                $(api.column(7).footer()).html(total.toFixed(2));
            }
        });
    });
</script>