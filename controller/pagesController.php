<?php
    abstract class pagesController {
        public function index(): View {
            return new View("home", pagesModel::getPage('title', 'Home'));
        }

        public function about(): View {
            return new View("about", pagesModel::getPage('title', 'about'));
        }

        public function page($args): View {
            if(isset($args['id']) && is_numeric($args['id'])) {
                $args = array_merge($args, ['pages' => pagesModel::getPage('id', $args['id'])]);
                if($args["pages"]) {
                    return new View("page", $args);
                }
            }
            return new View("404");
        }
    }
?>