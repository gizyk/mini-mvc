<?php
    abstract class ApiController {
        public function index(): View {
            return new View("api/index", $_POST);
        }
    }
?>