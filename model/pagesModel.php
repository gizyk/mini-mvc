<?php
    abstract class pagesModel extends Model {
        public function setup() {
            $sqlBuilder = new sqlBuilder('pages');
            return $sqlBuilder;
        }
        public function getTable() {
            $sqlBuilder = pagesModel::setup();
            return parent::getMany($sqlBuilder->getAll()->exec());
        }

        public function getPage($key, $value) {
            $sqlBuilder = pagesModel::setup();
            return parent::getOne($sqlBuilder->getAll()->where($key, $value, "=")->exec());
        }
    }
?>