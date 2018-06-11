<?php
    Router::Get("/about", 'pagesController->about');
    Router::Get("/", 'pagesController->index');
    Router::Get("/page/{id}", 'pagesController->page');
    Router::Post("/api", 'apiController->index');
?>