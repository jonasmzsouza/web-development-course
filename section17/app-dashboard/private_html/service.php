<?php

    /*
    *  class (service)
    */
    class Db{
        private $connection;
        private $dashboard;

        public function __construct(Connection $connection, Dashboard $dashboard) {
            $this->connection = $connection->connect();
            $this->dashboard = $dashboard;
        }

        public function getNumberSales() {
            $query = '
                    SELECT 
                        COUNT(*) AS number_sales 
                    FROM
                        tb_sales 
                    WHERE
                        dt_sale BETWEEN :date_start AND :date_end';

            $stmt = $this->connection->prepare($query);
            $stmt->bindValue(':date_start', $this->dashboard->__get('date_start'));
            $stmt->bindValue(':date_end', $this->dashboard->__get('date_end'));
            $stmt->execute();

            return $stmt->fetch(PDO::FETCH_OBJ)->number_sales;
        }

        public function getTotalSales() {
            $query = '
                    SELECT 
                        SUM(vl_total_sale) AS total_sales 
                    FROM
                        tb_sales 
                    WHERE
                        dt_sale BETWEEN :date_start AND :date_end';

            $stmt = $this->connection->prepare($query);
            $stmt->bindValue(':date_start', $this->dashboard->__get('date_start'));
            $stmt->bindValue(':date_end', $this->dashboard->__get('date_end'));
            $stmt->execute();

            return $stmt->fetch(PDO::FETCH_OBJ)->total_sales;
        }

        public function getActiveCustomers() {
            $query = '
                    SELECT 
                        COUNT(*) AS active_customers 
                    FROM
                        tb_customers 
                    WHERE
                        st_active_customer = :activeCustomers';

            $stmt = $this->connection->prepare($query);
            $stmt->bindValue(':activeCustomers', 1);
            $stmt->execute();

            return $stmt->fetch(PDO::FETCH_OBJ)->active_customers;
        }

        public function getInactiveCustomers() {
            $query = '
                    SELECT 
                        COUNT(*) AS inactive_customers 
                    FROM
                        tb_customers 
                    WHERE
                        st_active_customer = :inactiveCustomers';

            $stmt = $this->connection->prepare($query);
            $stmt->bindValue(':inactiveCustomers', 0);
            $stmt->execute();

            return $stmt->fetch(PDO::FETCH_OBJ)->inactive_customers;
        }

        public function getTotalComplaints() {
            $query = '
                    SELECT 
                        COUNT(*) AS total_complaints 
                    FROM
                        tb_contacts 
                    WHERE
                        tp_contact = :totalComplaints';

            $stmt = $this->connection->prepare($query);
            $stmt->bindValue(':totalComplaints', 1);
            $stmt->execute();

            return $stmt->fetch(PDO::FETCH_OBJ)->total_complaints;
        }

        public function getTotalSuggestions() {
            $query = '
                    SELECT 
                        COUNT(*) AS total_suggestions 
                    FROM
                        tb_contacts 
                    WHERE
                        tp_contact = :totalSuggestions';

            $stmt = $this->connection->prepare($query);
            $stmt->bindValue(':totalSuggestions', 2);
            $stmt->execute();

            return $stmt->fetch(PDO::FETCH_OBJ)->total_suggestions;
        }

        public function getTotalCompliments() {
            $query = '
                    SELECT 
                        COUNT(*) AS total_compliments 
                    FROM
                        tb_contacts 
                    WHERE
                        tp_contact = :totalCompliments';

            $stmt = $this->connection->prepare($query);
            $stmt->bindValue(':totalCompliments', 3);
            $stmt->execute();

            return $stmt->fetch(PDO::FETCH_OBJ)->total_compliments;
        }

        public function getTotalExpenses() {
            $query = '
                    SELECT 
                        SUM(vl_total_expense) AS total_expenses 
                    FROM
                        tb_expenses 
                    WHERE
                        dt_expense BETWEEN :date_start and :date_end';

            $stmt = $this->connection->prepare($query);
            $stmt->bindValue(':date_start', $this->dashboard->__get('date_start'));
            $stmt->bindValue(':date_end', $this->dashboard->__get('date_end'));
            $stmt->execute();

            return $stmt->fetch(PDO::FETCH_OBJ)->total_expenses;
        }        

    }

?>