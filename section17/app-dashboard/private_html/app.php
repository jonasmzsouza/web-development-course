<?php

    require "../../private_html/model.php";
    require "../../private_html/service.php";
    require "../../private_html/connection.php";

    /*
    *  script logic
    */
    $dashboard = new Dashboard();
    $connection = new Connection();
    $db = new Db($connection, $dashboard);

    $competence = explode('-', $_GET['competence']);
    $year = $competence[0];
    $month = $competence[1];

    $days_in_month = cal_days_in_month(CAL_GREGORIAN, $month, $year);

    $dashboard->__set('date_start', $year.'-'.$month.'-01');
    $dashboard->__set('date_end', $year.'-'.$month.'-'.$days_in_month);

    $dashboard->__set('numberSales', $db->getNumberSales());
    $dashboard->__set('totalSales', $db->getTotalSales());
    $dashboard->__set('activeCustomers', $db->getActiveCustomers());
    $dashboard->__set('inactiveCustomers', $db->getInactiveCustomers());
    $dashboard->__set('totalComplaints', $db->getTotalComplaints());
    $dashboard->__set('totalSuggestions', $db->getTotalSuggestions());
    $dashboard->__set('totalCompliments', $db->getTotalCompliments());
    $dashboard->__set('totalExpenses', $db->getTotalExpenses());

    echo json_encode($dashboard)

?>