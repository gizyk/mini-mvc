<?php
    abstract class Utils {
        public function evalControllerMethod($controllerString, $args = null) {
            $controllerPath = explode('->', $controllerString);
            return $controllerPath[0]::{$controllerPath[1]}($args);
        }
        public function extractArgumentsFromPath($path, $realPath) {
            $args = array();
            for($i = 0; $i < count($path); $i++) {
                if($path[$i] != $realPath[$i]) {    //if some part of path isn't math
                    $pathElement = $path[$i];
                    $realPathElement = $realPath[$i];
                    if($pathElement[0] == '{' && substr($pathElement, -1) == '}') {   //check if arguments are allowed -> if first and last character is { and }
                        $nameOfValue = substr($pathElement, 1, strlen($path[$i]) -2);           //delete {} from name of value
                        $args[$nameOfValue] = $realPathElement;                                 //add argument to array
                    } else break;
                }
            }
            return $args;
        }
        public function parsedPath() {
            return '/' . (isset($_GET['path']) ? 
            str_replace('\\', '', $_GET["path"]) : 
            '');
        }
        public function resolvePathIssue($path, $globalFile) {
            $ds = DIRECTORY_SEPARATOR;
            $base_dir = realpath(dirname($globalFile)  . $ds . '..') . $ds;
            $newPath = str_replace('../', $base_dir, $path);
            $newPath = str_replace('/', $ds, $newPath);
            return $newPath;
        }
        public function buildStringFromArguments($args) {
            $arguments = "";
            foreach($args as $arg) {
                $arguments .= $arg . ", ";
            }
            return substr($arguments, 0, strlen($arguments) - 2);
        }
    }
?>