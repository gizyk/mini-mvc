<?php
    require_once('../config/database.php');

    abstract class Model {
        public function setup() {
            return new PDO(DataBase::getDsn(),DataBase::$user, DataBase::$pass, DataBase::$opt);
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