<div class="page-content">
    <div class="row-fluid">
        <div class="span12">
            <!--PAGE CONTENT BEGINS-->
            <?php
            if ($this->session->flashdata('success')) {
                echo "<div class=\"alert alert-success\" role=\"alert\">" . $this->session->flashdata('success') . "</div>";
            }
            ?>
            <div class="row-fluid" id="PrintArea">
                <div class="span10 offset1">
                    <div class="widget-box transparent invoice-box">
                        <div class="panel-body">
                            <div class="table-header">

                                <i class="fa fa-list"></i> Voucher
                                <div class="pull-right">
                                    <a class="blue" href="<?php echo base_url(); ?>trip_information/view_all">
                                        Serial No:
                                        <?php echo $outflow->outflow_id; ?>
                                        <br />
                                        Date
                                        <span class="blue"><?php echo date("d-m-Y"); ?></span>
                                    </a>
                                </div>
                            </div>
                            <hr>
                        </div>

                        <div class="widget-body">
                            <div class="widget-main padding-24">
                                <div class="row-fluid">


                                    <table width="100%">
                                        <tr>
                                            <td>
                                                <h3 style="margin-left: 1%;"><?php echo $company->name; ?></h3>
                                                <p style="margin-left: 1%;"><?php echo $company->address; ?></p>
                                            </td>
                                            <td width="200">
                                                <ul class="list-unstyled" style="padding: 10%;">
                                                    <li>Mobile : <?php echo $company->mobile_no; ?></li>
                                                    <li>Phone : <?php echo $company->phone_no; ?></li>
                                                    <li>Fax : <?php echo $company->fax_no; ?></li>
                                                    <li>E-mail : <?php echo $company->email; ?></li>
                                                    <li>Website : <?php echo $company->website; ?></li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </table>

                                    <div class="space"></div>

                                    <table class="table">
                                        <tr>
                                            <th width="200">Payment Date</th>
                                            <td><?php echo date("d-m-Y", strtotime($outflow->payment_date)); ?></td>
                                            <th width="200">Payment Type</th>
                                            <td><?php echo $outflow->payment_to; ?></td>
                                        </tr>
                                        <tr>
                                            <th width="200">Account Name</th>
                                            <td colspan="3">
                                                <?php
                                                $pay_type = array(
                                                    '1' =>  'CASH',
                                                    '2' =>  'CHEQUE',
                                                    '3' =>  'PAY_ORDER',
                                                    '4' =>  'TxID',
                                                );
                                                echo @$pay_type[$outflow->payment_type];
                                                ?>
                                            </td>
                                        </tr>

                                        <?php if ($outflow->payment_type == 2 || $outflow->payment_type == 3 || $outflow->payment_type == 4) : ?>
                                            <tr>
                                                <th width="200">BANK NAME</th>
                                                <td><?php echo $outflow->bank_name; ?></td>
                                                <th width="200">BRANCH NAME</th>
                                                <td><?php echo $outflow->branch_name; ?></td>
                                            </tr>
                                            <tr>
                                                <?php if ($outflow->payment_type == 2) : ?>
                                                    <th width="200">Account Number</th>
                                                    <td><?php echo $outflow->account_number; ?></td>
                                                <?php elseif ($outflow->payment_type == 3) : ?>
                                                    <th width="200">Pay Order Number</th>
                                                    <td><?php echo $outflow->pay_order_number; ?></td>
                                                <?php elseif ($outflow->payment_type == 4) : ?>
                                                    <th width="200">TxID</th>
                                                    <td><?php echo $outflow->letter_of_credit; ?></td>
                                                <?php endif; ?>
                                                <th width="200">Deposit Bank Name</th>
                                                <td><?php echo $outflow->deposit_bank; ?></td>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th width="200">Account Name</th>
                                            <td><?php echo $outflow->account_name; ?></td>
                                            <th width="200">Amount</th>
                                            <td><?php echo $outflow->amount; ?></td>
                                        </tr>
                                        <tr>
                                            <th width="200">Description</th>
                                            <td colspan="3"><?php echo $outflow->description; ?></td>
                                        </tr>
                                    </table>

                                    <div class="hr hr8 hr-double hr-dotted"></div>

                                    <table width="100%" height="98px">
                                        <tr>
                                            <td>
                                                <p style="margin-left: 1%;">(Signature of Payment Giver)<br />
                                                    Date:
                                                </p>
                                            </td>
                                            <td style="width:200px" class="text-left">
                                                Account Name<br />
                                                Date:
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--PAGE CONTENT ENDS-->
        </div>
        <!--/.span-->
    </div>
    <!--/.row-fluid-->

    <div class="col-xs-12 no-print">
        <br />
        <a class="btn btn-sm btn-primary pull-right" onclick="printContent('PrintArea')">
            <span class="fa fa-print"></span>&nbsp;&nbsp;Print
        </a>
    </div>

</div>
<!--/.page-content-->

<script>
    // if (navigator.appName == "Microsoft Internet Explorer"){ 
    //   var PrintCommand = '<object ID="PrintCommandObject" WIDTH=0 HEIGHT=0 CLASSID="CLSID:8856F961-340A-11D0-A96B-00C04FD705A2"></object>';
    //   document.body.insertAdjacentHTML('beforeEnd', PrintCommand); 
    //   PrintCommandObject.ExecWB(6, -1); PrintCommandObject.outerHTML = ""; 
    // }  
</script>
<script language="javascript">
    // function Print(){
    // if (document.all){
    //   WebBrowser1.ExecWB(6,6); //use 6, 1 to prompt the print dialog or 6, 6 to omit it;
    //   WebBrowser1.outerHTML = "";
    // } else{
    //   window.print();
    // }
    // }
</script>