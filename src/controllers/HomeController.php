<?php
    class Home extends Controller
    {

        static $user;

        public function __construct()
        {
            self::$user = $this->model('User');
        }

        public function index()
        {
            self::$user->getAll();
            
            $title = "Home";

            return $this->view('home', [
                'title' => $title,
            ]);
        }

        public function one($id)
        {
            echo $id;
        }

        public function create()
        {
            echo __METHOD__;
        }

        public function update($id)
        {
            echo __METHOD__;
        }

        public function delete($id)
        {
            echo __METHOD__;
        }

    }