<?php

require_once 'controller/Products.php';

class ProductsController
{
    private $db;
    private $requestMethod;
    private $productId;
    private $products;

    public function __construct($db, $requestMethod, $productId)
    {
        $this->db = $db;
        $this->requestMethod = $requestMethod;
        $this->productId = $productId;
        $this->products = new Products($db);
    }

    public function processRequest()
    {
        switch ($this->requestMethod) {
            case 'GET':
                $response = $this->getAllProducts();
                break;
            case 'POST':
                $response = $this->createProductFromRequest();
                break;
            case 'PUT':
                $response = $this->updateProductFromRequest($this->productId);
                break;
            case 'DELETE':
                $response = $this->deleteProduct($this->productId);
                break;
            default:
                $response = $this->notFoundResponse();
                break;
        }
        header($response['status_code_header']);
        if ($response['body']) {
            echo $response['body'];
        }
    }

    private function getAllProducts()
    {
        $result = $this->products->findAll();
        $response['status_code_header'] = 'HTTP/1.1 200 OK';
        $response['body'] = json_encode($result);
        return $response;
    }

    private function createProductFromRequest()
    {
        $input = json_decode(file_get_contents('php://input'), TRUE);

        if (!$this->validateProduct($input)) {
            return $this->unprocessableEntityResponse();
        }

        $this->products->insert($input);
        echo json_encode(array("Success" => 'HTTP/1.1 201 Created'));
    }

    private function updateProductFromRequest($id)
    {
        $result = $this->products->find($id);
        if (!$result) {
            return $this->notFoundResponse();
        }
        $input = json_decode(file_get_contents('php://input'), TRUE);

        if (!$this->validateProduct($input)) {
            return $this->unprocessableEntityResponse();
        }
        $this->products->update($id, $input);
        echo json_encode(array("Success" => 'HTTP/1.1 200 OK'));
    }

    private function deleteProduct($id)
    {
        $result = $this->products->find($id);
        if (!$result) {
            return $this->notFoundResponse();
        }
        $this->products->delete($id);
        echo json_encode(array("Success" => 'HTTP/1.1 200 OK'));
    }

    private function validateProduct($input)
    {
        if (isset($input['name']) && isset($input['price']) && isset($input['description'])) {

            $input['img'] = filter_var($input['img'], FILTER_SANITIZE_SPECIAL_CHARS);
            $input['name'] = filter_var($input['name'], FILTER_SANITIZE_SPECIAL_CHARS);
            $input['price'] = filter_var($input['price'], FILTER_SANITIZE_NUMBER_FLOAT);
            $input['description'] = filter_var($input['description'], FILTER_SANITIZE_SPECIAL_CHARS);

            return true;
        }
        return false;
    }

    private function unprocessableEntityResponse()
    {
        echo json_encode(array("Error" => "Invalid input"));
    }

    private function notFoundResponse()
    {
        echo json_encode(array("Not Found" => 'HTTP/1.1 404 Not Found'));
    }
}