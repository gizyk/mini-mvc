<?php
    abstract class PagesController {
        public function index(): View {
            return new View("home", PagesModel::getPage('title', 'Home'));
        }

        public function about(): View {
            return new View("about", PagesModel::getPage('title', 'about'));
        }

        public function page($args): View {
            if(isset($args['id']) && is_numeric($args['id'])) {
                $args = array_merge($args, ['pages' => PagesModel::getPage('id', $args['id'])]);
                if($args["pages"]) {
                    return new View("page", $args);
                }
            }
            return new View("404");
        }
    }
?>