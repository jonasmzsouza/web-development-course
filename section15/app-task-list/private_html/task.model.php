<?php

    class Task {

        private $id_task;
        private $id_status;
        private $ds_task;
        private $dt_register;

        public function __get($attribute) {
            return $this->$attribute;
        }

        public function __set($attribute, $value) {
            $this->$attribute = $value;
            return $this;
        }

    }

?>