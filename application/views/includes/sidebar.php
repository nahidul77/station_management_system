<?php

$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

$url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

$base_url = base_url();

?>
<ul class="nav" id="side-menu">
    <li <?php if ($url == $base_url . "dashboard") : ?> class="active" <?php endif ?>><a href="<?php echo $base_url . "dashboard"; ?>" class="material-ripple"><i class="fa fa-home"></i> Dashboard</a></li>

    <li <?php if ($url == $base_url . "dash") : ?> class="active" <?php endif ?>><a href="<?php echo $base_url . "sale"; ?>" class="material-ripple"><i class="fa fa-money"></i> Sales</a></li>

    <li <?php if (
            $url == $base_url . 'vehicle/vehicle_type_list' ||
            $url == $base_url . 'vehicle/vehicle_info_list' ||
            $url == $base_url . 'vehicle/vehicle_information_create' ||
            $url == $base_url . 'vehicle/vehicle_type_create' ||
            strpos($url, 'vehicle_type_edit') ||
            strpos($url, 'vehicle_info_edit')
        ) :  ?> class="active" <?php endif ?>>
        <a href="#" class="material-ripple"><i class="fa fa-car"></i>Vehicle<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li><a href="<?php echo $base_url; ?>vehicle/vehicle_type_list">Vehicle Type List</a></li>
            <li><a href="<?php echo $base_url; ?>vehicle/vehicle_info_list">Vehicle List</a></li>
        </ul>
    </li>
    <li <?php if (
            $url == $base_url . 'driver_info' ||
            $url == $base_url . 'driver_info/create' ||
            strpos($url, 'driver_info/edit/')
        ) :  ?> class="active" <?php endif ?>>
        <a href="#" class="material-ripple"><i class="hvr-buzz-out fa fa-drivers-license"></i>Driver<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li><a href="<?php echo $base_url; ?>driver_info">Driver List</a></li>
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
            $url == $base_url . 'vendor' ||
            $url == $base_url . 'vendor/create'
        ) :  ?> class="active" <?php endif ?>>
        <a href="#" class="material-ripple"><i class="fa fa-users"></i>Vendors<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li><a href="<?php echo $base_url; ?>vendor">Vendor List</a></li>
        </ul>
    </li>
    <li <?php if (
            $url == $base_url . 'company' ||
            $url == $base_url . 'company/create'
        ) :  ?> class="active" <?php endif ?>>
        <a href="#" class="material-ripple"><i class="fa fa-user"></i>Customers<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li><a href="<?php echo $base_url; ?>company">Customer List</a></li>
        </ul>
    </li>
    <li <?php if (
            $url == $base_url . 'fule_rate' ||
            $url == $base_url . 'fule_unit' ||
            $url == $base_url . 'fule_type' ||
            $url == $base_url . 'fule_rate/create' ||
            $url == $base_url . 'fule_unit/create' ||
            $url == $base_url . 'fule_type/create' ||
            strpos($url, 'fule_rate/rate_edit') ||
            strpos($url, 'fule_type/type_edit') ||
            strpos($url, 'fule_unit/unit_edit')
        ) :  ?> class="active" <?php endif ?>>
        <a href="#" class="material-ripple"><i class="hvr-buzz-out fa fa-fire-extinguisher"></i>Fuels<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li><a href="<?php echo $base_url; ?>fule_unit">Manage Unit</a></li>
            <li><a href="<?php echo $base_url; ?>fule_type">Manage Type</a></li>
            <li><a href="<?php echo $base_url; ?>fule_rate">Fuel Management</a></li>
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
        <a href="#" class="material-ripple"><i class="hvr-buzz-out fa fa-plus"></i>Expense<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li><a href="<?php echo $base_url; ?>expense_entry/view">Expense List</a></li>
            <li><a href="<?php echo $base_url; ?>expense_list">Expense Type List</a></li>
        </ul>
    </li>

    <li <?php if (
            $url == $base_url . 'accounting/bank/' ||
            $url == $base_url . 'accounting/account/' ||
            $url == $base_url . 'accounting/company/' ||
            $url == $base_url . 'accounting/inflow/' ||
            $url == $base_url . 'accounting/outflow/' ||
            $url == $base_url . 'accounting/report/' ||
            $url == $base_url . 'accounting/bank/create/' ||
            $url == $base_url . 'accounting/account/create/' ||
            $url == $base_url . 'accounting/inflow/create/' ||
            $url == $base_url . 'accounting/outflow/create/' ||
            $url == $base_url . 'accounting/report/generate/' ||
            strpos($url, 'accounting/bank/edit/') ||
            strpos($url, 'accounting/company/edit/') ||
            strpos($url, 'accounting/inflow/edit/') ||
            strpos($url, 'accounting/inflow/single_view/') ||
            strpos($url, 'accounting/outflow/edit/') ||
            strpos($url, 'accounting/outflow/single_view/') ||
            strpos($url, 'accounting/account/edit/')
        ) :  ?> class="active" <?php endif ?>>
        <a href="#" class="material-ripple"><i class="hvr-buzz-out fa fa-user-circle"></i> Accounting<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li><a href="<?php echo $base_url; ?>accounting/bank/"> Bank Information </a></li>
            <li><a href="<?php echo $base_url; ?>accounting/account/"> Account Information </a></li>
            <li><a href="<?php echo $base_url; ?>accounting/company/"> Company Information</a></li>
            <li><a href="<?php echo $base_url; ?>accounting/inflow/"> Rececipt Information</a></li>
            <li><a href="<?php echo $base_url; ?>accounting/outflow/"> Payment Information</a></li>
            <li><a href="<?php echo $base_url; ?>accounting/report/"> Account Reports</a></li>
        </ul>
    </li>

    <?php if (false) : ?>
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
        <a href="#" class="material-ripple"><i class="hvr-buzz-out fa fa-gear"></i> Settings<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li><a href="<?php echo $base_url; ?>logo">Logo Manage</a></li>
            <li><a href="<?php echo $base_url; ?>admin/app_setting">App Setting</a></li>
        </ul>
    </li>
    <li><a href="<?php echo $base_url; ?>admin/logout" class="material-ripple"><i class="glyphicon glyphicon-off"></i> Logout</a></li>
</ul>