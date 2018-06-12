<?php
    abstract class apiController {
        public function index(): View {
            return new View("api/index", $_POST);
        }
    }
?>