<?php

    /*
    *  class Dashboard (model)
    */
    class Dashboard {
        public $date_start;
        public $date_end;
        public $numberSales;
        public $totalSales;
        public $activeCustomers;
        public $inactiveCustomers;
        public $totalComplaints;
        public $totalCompliments;
        public $totalSuggestions;
        public $totalExpenses;

        public function __get($attribute) {
            return $this->$attribute;
        }

        public function __set($attribute, $value) {
            $this->$attribute = $value;
            return $this;
        }
    }

?>