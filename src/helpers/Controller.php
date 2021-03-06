<?php
    class Controller
    {
        const VIEW_FOLDER_NAME = './src/views';

        const MODEL_FOLDER_NAME = './src/models';

        public function view($path, $data = [])
        {
            foreach($data as $key => $value) {
                $$key = $value;
            }

            $view = self::VIEW_FOLDER_NAME . "/" . str_replace(".", "/", $path) . ".deo.php";

            return require $view;
        }

        public function model($name)
        {
            $path = self::MODEL_FOLDER_NAME . "/" . $name . ".php";

            require $path;

            $model = ucfirst($name) . "Model";

            return new $model;
        }
    }