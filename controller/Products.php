<?php

class Products {

    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function findAll()
    {
        $statement = "SELECT * FROM products";

        try {
            $statement = $this->db->query($statement);
            $result = $statement->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }

    public function find($id)
    {
        $statement = "
            SELECT 
                id, name, description, price, img
            FROM
                products
            WHERE id = ".$id.";
        ";

        try {
            $statement = $this->db->prepare($statement);
            $statement->execute();
            $result = $statement->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }

    public function insert(Array $input)
    {
        $statement = "INSERT INTO products (name, description, price, img) VALUES (:name, :description, :price, :img)";
        try {
            $statement = $this->db->prepare($statement);

            if($input['description'] == ""){
                $input['description'] = NULL;
            }

            $statement->execute(array(
                'name' => $input['name'],
                'description'  => $input['description'] ?? NULL,
                'price' => $input['price'],
                'img' => $input['img'],
            ));
            return $statement->rowCount();
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }

    public function update($id, Array $input)
    {
        $statement = "
            UPDATE products
            SET 
                name = :name,
                description  = :description,
                price = :price
            WHERE id = :id;
        ";

        try {
            $statement = $this->db->prepare($statement);
            $statement->execute(array(
                'name' => $input['name'],
                'description' => $input['description'],
                'price' => (int)$input['price'],
                'id' => (int)$id
            ));

            return $statement->rowCount();
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }

    public function delete($id)
    {
        $statement = "
            DELETE FROM products
            WHERE id = :id;
        ";

        try {
            $statement = $this->db->prepare($statement);
            $statement->execute(array('id' => $id));
            return $statement->rowCount();
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }
}