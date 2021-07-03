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
            print_r(self::$user->getAll("DESC"));
            self::$user->hasMany(['department' => 1], 2);
            $title = "Home";

            return $this->view('home', [
                'title' => $title,
            ]);
        }

        public function one($id)
        {
            print_r(self::$user->getOne($id));
        }

        public function create()
        {
            $data = [
                'name' => 'Bán hàng',
            ];
            self::$user->createOne($data);
        }

        public function update($id)
        {
            $data = [
                'name' => 'Bán hàng chơi 2s',
            ];
            self::$user->updateOne($id, $data);
        }

        public function delete($id)
        {
            self::$user->deleteOne($id);
        }

    }