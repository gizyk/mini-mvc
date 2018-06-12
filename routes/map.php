<?php
    Router::get("/about", 'pagesController->about');
    Router::get("/", 'pagesController->index');
    Router::get("/page/{id}", 'pagesController->page');
    Router::post("/api", 'apiController->index');
?>