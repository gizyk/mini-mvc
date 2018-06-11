<?php
    class sqlBuilder {
        private $sqlString;
        private $table;

        public function __construct($table, $sql = '') {
            $this->table = $table;
            $this->sqlString = $sql;
        }

        public function getAll() {
            return new sqlBuilder($this->table, 'SELECT * FROM ' .$this->table);  
        }

        public function get($args) {
            $arguments = buildStrngFromArguments($args);
            return new sqlBuilder($this->table, 'SELECT' .$arguments. 'FROM ' .$this->table); 
        }

        public function exec() {
            return$this->sqlString;
        }

        public function where($key, $value, $compare) {
            return new sqlBuilder($this->table, $this->sqlString . ' WHERE ' .$key.$compare."'".$value."'");
        }

        public function and($key, $value, $compare) {
            return new sqlBuilder($this->table, $this->sqlString . ' AND ' .$key.$compare.$value);
        }

        public function or($key, $value, $compare) {
            return new sqlBuilder($this->table, $this->sqlString . ' OR ' .$key.$compare.$value);
        }

        public function orderBy($condition) {
            return new sqlBuilder($this->table, $this->sqlString . ' ORDER BY ' .$condition);
        }
    } 
?>