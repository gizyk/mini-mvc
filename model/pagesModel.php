<?php
    require_once('../core/model.php');
    require_once('../core/sqlBuilder.php');

    abstract class PagesModel extends Model {
        public function setup() {
            $sqlBuilder = new SqlBuilder('pages');
            return $sqlBuilder;
        }
        public function getTable() {
            $sqlBuilder = PagesModel::setup();
            return parent::getMany($sqlBuilder->getAll()->exec());
        }

        public function getPage($key, $value) {
            $sqlBuilder = PagesModel::setup();
            return parent::getOne($sqlBuilder->getAll()->where($key, $value, "=")->exec());
        }
    }
?>