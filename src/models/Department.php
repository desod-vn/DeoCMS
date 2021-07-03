<?php 

    class DepartmentModel extends Model
    {
        protected $table = 'department';

        protected $select = [
            '*'
        ];

        public function getAll($orderBy = "ASC", $limit = 0)
        {
            return $this->all($this->table, $this->select, $orderBy, $limit);
        }

        public function getOne($id = 0)
        {
            return $this->one($this->table, $this->select, $id);

        }

        public function createOne($data = [])
        {
            return $this->store($this->table, $data);
        }

        public function updateOne($id = 0, $data = [])
        {
            return $this->edit($this->table, $id, $data);
        }

        public function deleteOne($id = 0)
        {
            return $this->remove($this->table, $id);
        }

        public function hasMany($join = [], $limit = 0)
        {
            return $this->has($this->table, $this->select, $join, $limit);
        }
    }