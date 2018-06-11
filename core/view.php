<?php
    class View {

        private $name;
        private $props;

        public function __construct($name, $props = []) {
            $this->name = $name;
            $this->props = $props;
        }

        public function get() {
            $props = $this->props;
            include("../view/" .$this->name .".php");
        }
    }
?>