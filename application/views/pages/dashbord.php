<div class=row>
    <?php if (false) : ?>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
            <div class="statistic-box statistic-filled-3">

                <h2><span id=count-trip></span><span class=slight><i class="fa fa-play fa-rotate-270 text-warning"></i></span></h2>
                <div class=small><?php echo display('trip'); ?></div>

                <img style="margin-left:58%;margin-top:-48%;width: 30%;" src="<?php echo base_url(); ?>assets/img/delivery-truck.png">
                <div class="sparkline3 text-center"></div>

            </div>
        </div>
    <?php endif ?>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
        <div class="statistic-box statistic-filled-1">
            <h2 class="text-center"><span id=count-vehicle>0</span></h2>
            <div class="small text-center">Vehicles</div>
            <div class="text-center"> <img style="margin-top: 1%;width: 30%;" src="<?php echo base_url(); ?>assets/img/car.png"> </div>
            <div class="sparkline1 text-center"></div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
        <div class="statistic-box statistic-filled-2">
            <h2 class="text-center"><span id=count-customer>0</span></h2>
            <div class="small text-center"><?php echo display('customers'); ?></div>
            <div class="text-center"> <img style="margin-top: 1%;width: 30%;" src="<?php echo base_url(); ?>assets/img/specialist-use.png"> </div>
            <div class="sparkline1 text-center"></div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
        <div class="statistic-box statistic-filled-3">
            <h2 class="text-center"><span id="count-driver">0</span></h2>
            <div class="text-center small"><?php echo display('driver'); ?></div>
            <div class="text-center"> <img style="margin-top: 1%;width: 30%;" src="<?php echo base_url(); ?>assets/img/driver.png"> </div>
            <div class="sparkline4 text-center"></div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
        <div class="statistic-box statistic-filled-4">
            <h2 class="text-center"><span id="count-trip">0</span></h2>
            <div class="text-center small">Trip</div>
            <div class="text-center"> <img style="margin-top: 1%;width: 30%;" src="<?php echo base_url(); ?>assets/img/trip.png"> </div>
            <div class="sparkline4 text-center"></div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {

        $.ajax({
            dataType: "json",
            url: "<?php echo base_url() ?>chart/customer",
            method: "GET",
            success: function(data) {


                // $('#count-trip').html(String(data.trip));
                $('#count-customer').html(String(data.customer));
                $('#count-driver').html(String(data.driver));
                $('#count-vehicle').html(String(data.vehicle));

            }
        });

    });
</script>