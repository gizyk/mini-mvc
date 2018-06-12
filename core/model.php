<?php
    abstract class Model {
        public function setup() {
            $database = require('../config/database.php');
            return new PDO($database["dsn"],$database["user"], $database["pass"], $database["opt"]);
        }

        public function get($sql) {
            $pdo = Model::setup();
            $result = $pdo->prepare($sql);
            $result->execute();
            return $result;
        }

        public function getMany($sql) {
            return Model::get($sql)->fetchAll();
        }

        public function getOne($sql) {
            return Model::get($sql)->fetch();
        }
    }

?>