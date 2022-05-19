<?php

$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

$url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

$base_url = base_url();

?>
<ul class="nav" id="side-menu">
    <li <?php if ($url == $base_url . "dashboard") : ?> class="active" <?php endif ?>><a href="<?php echo $base_url . "dashboard"; ?>" class="material-ripple"><i class="material-icons">home</i> Dashboard</a></li>
    <li <?php if (
            $url == $base_url . 'vehicle/vehicle_type_list' ||
            $url == $base_url . 'vehicle/vehicle_info_list' ||
            $url == $base_url . 'vehicle/vehicle_information_create' ||
            $url == $base_url . 'vehicle/vehicle_type_create' ||
            strpos($url, 'vehicle_type_edit') ||
            strpos($url, 'vehicle_info_edit')
        ) :  ?> class="active" <?php endif ?>>
        <a href="#" class="material-ripple"><i class="fa fa-car"></i><?php echo display('vehicle'); ?><span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li><a href="<?php echo $base_url; ?>vehicle/vehicle_type_list"><?php echo display('vehicletypelist'); ?></a></li>
            <li><a href="<?php echo $base_url; ?>vehicle/vehicle_info_list"><?php echo display('vehiclelist'); ?></a></li>
        </ul>
    </li>
    <li <?php if (
            $url == $base_url . 'driver_info' ||
            $url == $base_url . 'driver_info/create' ||
            strpos($url, 'driver_info/edit/')
        ) :  ?> class="active" <?php endif ?>>
        <a href="#" class="material-ripple"><i class="hvr-buzz-out fa fa-drivers-license"></i><?php echo display('driver'); ?><span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li><a href="<?php echo $base_url; ?>driver_info"><?php echo display('driverlist'); ?></a></li>
        </ul>
    </li>
    <?php if (false) : ?>
        <li>
            <a href="#" class="material-ripple"> <i class="hvr-buzz-out fa fa-tripadvisor"></i><?php echo display('trip'); ?><span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li><a href="<?php echo $base_url; ?>trip_information/view"><?php echo display('triplist'); ?></a></li>
                <li><a href="<?php echo $base_url; ?>trip_local/view"><?php echo display('localtriplist'); ?></a></li>
                <li><a href="<?php echo $base_url; ?>trip_information/add_trip"><?php echo display('tripentry'); ?></a></li>
                <li><a href="<?php echo $base_url; ?>trip_local/create"><?php echo display('localtripentry'); ?></a></li>
            </ul>
        </li>
    <?php endif ?>
    <li <?php if (
            $url == $base_url . 'company' ||
            $url == $base_url . 'company/create'
        ) :  ?> class="active" <?php endif ?>>
        <a href="#" class="material-ripple"><i class="fa fa-user"></i><?php echo display('customers'); ?><span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li><a href="<?php echo $base_url; ?>company">Customer List</a></li>
            <?php if (false) : ?>
                <li><a href="<?php echo $base_url; ?>rent"><?php echo display('companyrentlist') ?></a></li>
            <?php endif ?>
        </ul>
    </li>
    <li <?php if (
            $url == $base_url . 'expense_entry/view' ||
            $url == $base_url . 'expense_list' ||
            $url == $base_url . 'expense_list/create' ||
            $url == $base_url . 'expense_entry/create' ||
            strpos($url, 'expense_entry_edit') ||
            strpos($url, 'expense_list_edit')
        ) :  ?> class="active" <?php endif ?>>
        <a href="#" class="material-ripple"><i class="hvr-buzz-out fa fa-plus"></i><?php echo display('expense'); ?><span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li><a href="<?php echo $base_url; ?>expense_entry/view"><?php echo display('expenselist') ?></a></li>
            <li><a href="<?php echo $base_url; ?>expense_list"><?php echo display('expensetypelist'); ?></a></li>
        </ul>
    </li>
    <?php if (false) : ?>
        <li>
            <a href="#" class="material-ripple"> <i class="hvr-buzz-out fa fa-legal"></i><?php echo display('fitness'); ?><span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li><a href="<?php echo $base_url; ?>vehicle/vehicle_fitness_list"><?php echo display('fitnesslist') ?></a></li>
            </ul>
        </li>
        <li>
            <a href="#" class="material-ripple"><i class="hvr-buzz-out fa fa-fire-extinguisher"></i><?php echo display('fuel'); ?><span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li><a href="<?php echo $base_url; ?>fule_rate"><?php echo display('fuelratelist'); ?></a></li>


            </ul>
        </li>
        <li>
            <a href="#" class="material-ripple"><i class="material-icons">business</i><?php echo display('stationsetup'); ?><span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li><a href="<?php echo $base_url; ?>district/district_list"><?php echo display('statelist'); ?></a></li>
                <li><a href="<?php echo $base_url; ?>city/city_list"><?php echo display('stationlist'); ?></a></li>
                <li><a href="<?php echo $base_url; ?>station_distence/station_distence_list"><?php echo display('stationdistancelist') ?></a></li>
            </ul>
        </li>

        <li>
            <a href="#" class="material-ripple"><i class="hvr-buzz-out fa fa-user-circle"></i><?php echo display('accounting'); ?><span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li><a href="<?php echo $base_url; ?>accounting/bank/"><?php echo display('bankinformation') ?></a></li>
                <li><a href="<?php echo $base_url; ?>accounting/account/"><?php echo display('accountinformation') ?></a></li>

                <li><a href="<?php echo $base_url; ?>accounting/company/"><?php echo display('companyinformation') ?></a></li>
                <li><a href="<?php echo $base_url; ?>accounting/inflow/"><?php echo display('inflow') ?></a></li>
                <li><a href="<?php echo $base_url; ?>accounting/outflow/"><?php echo display('outflow') ?></a></li>
                <li><a href="<?php echo $base_url; ?>accounting/report/"><?php echo display('accountreports') ?></a></li>
            </ul>
        </li>
        <li>
            <a href="#" class="material-ripple"><i class="hvr-buzz-out fa fa-leanpub"></i><?php echo display('reports'); ?><span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li><a href="<?php echo $base_url; ?>report_general/view"><?php echo display('generalereports') ?></a></li>
                <li><a href="<?php echo $base_url; ?>report_expense/view"><?php echo display('expensereports') ?></a></li>
                <li><a href="<?php echo base_url('report_balancesheet'); ?>"><?php echo display('balancesheet') ?></a></li>
                <li><a href="<?php echo $base_url; ?>report_company/generate"><?php echo display('companybill'); ?></a></li>
            </ul>
        </li>
    <?php endif ?>
    <li <?php if (
            $url == $base_url . 'logo' ||
            $url == $base_url . 'admin/app_setting'
        ) :  ?> class="active" <?php endif ?>>
        <a href="#" class="material-ripple"><i class="hvr-buzz-out fa fa-gear"></i><?php echo display('settings') ?><span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li><a href="<?php echo $base_url; ?>logo"><?php echo display('logomanage') ?></a></li>
            <li><a href="<?php echo $base_url; ?>admin/app_setting"><?php echo display('appsetting') ?></a></li>
            <?php if (false) : ?>
                <li><a href="<?php echo $base_url; ?>language"><?php echo display('languagesetting'); ?></a></li>
                <li><a href="<?php echo $base_url; ?>setting"><?php echo display('softwaresetting'); ?></a></li>
            <?php endif ?>
        </ul>
    </li>
    <li><a href="<?php echo $base_url; ?>admin/logout" class="material-ripple"><i class="glyphicon glyphicon-off"></i> <?php echo display('logout'); ?></a></li>
</ul>