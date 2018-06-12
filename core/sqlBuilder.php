<?php
    class sqlBuilder {
        private $sqlString;
        private $table;

        public function __construct($table, $sql = '') {
            $this->table = $table;
            $this->sqlString = $sql;
        }

        public function getAll() {
            $this->sqlString .=  'SELECT * FROM ' .$this->table;
            return $this;
        }

        public function get($args) {
            $arguments = buildStrngFromArguments($args);
            $this->sqlString .= 'SELECT' .$arguments. 'FROM ' .$this->table;
            return $this;
        }

        public function exec() {
            return $this->sqlString;
        }

        public function where($key, $value, $compare) {
            $this->sqlString .= ' WHERE ' .$key.$compare."'".$value."'";
            return $this;
        }

        public function and($key, $value, $compare) {
            $this->sqlString .= ' AND ' .$key.$compare.$value;
            return $this;
        }

        public function or($key, $value, $compare) {
            $this->sqlString .= ' OR ' .$key.$compare.$value;
            return $this;
        }

        public function orderBy($condition) {
            $this->sqlString .= ' ORDER BY ' .$condition;
            return $this;
        }
    } 
?>