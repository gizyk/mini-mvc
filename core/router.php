<?php
    abstract class Router {
        public function Get($path, $controller) {
            if ($_SERVER['REQUEST_METHOD'] !== 'POST' && !isset($GLOBALS['found'])) {
                $realpath = Utils::parsedPath();            //Path from GET looks like 'foo\/bar' so in order to work with 'foo/bar' it is  necessary to clean path out.
                $args = [];
                if($path == $realpath)                      //If path match in simple way 1:1
                    $GLOBALS['found'] = true;
                else {                                      //If path has some GET arguments to extract
                    $pathAsArray = explode("/", $path);
                    $realPathAsArray = explode("/", $realpath);
                    if(count($pathAsArray) == count($realPathAsArray)) {
                        $args = Utils::extractArgumentsFromPath($pathAsArray, $realPathAsArray);    //extract all arguments to one array
                        if(count($args))
                            $GLOBALS['found'] = true;
                    }
                }
                if(isset($GLOBALS['found']))
                    Utils::evalControllerMethod($controller, $args)->get();                 //If there isn't any argument $args will be provide as empty array
            }
        }

        public function Post($path, $controller) {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $realpath = Utils::parsedPath();
                if($path == $realpath) {
                    Utils::evalControllerMethod($controller, $args)->get();
                    $GLOBALS['found'] = true;
                }
            }
        }
    }
?>