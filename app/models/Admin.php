<?php

namespace App\models;

use App\helpers\Connection;

class Admin
{
    //Добавление новой категории
    public static function addCategory($name)
    {
        $query = Connection::make()->prepare("INSERT INTO bodies (name) VALUES (:name)");
        $query->execute([
            ':name' => $name
        ]);
    }

    //Получаем категорию
    public static function getCategory($name)
    {
        $query = Connection::make()->prepare("SELECT * FROM bodies WHERE name = :name");
        $query->execute([
            ':name' => $name
        ]);
        $body = $query->fetch();
        var_dump($body);
        if ($body) {
            return $body;
        }
        return null;
    }

    //Удаление категории
    public static function deleteCategory($id)
    {
        $query = Connection::make()->prepare("DELETE FROM bodies WHERE id = :id");
        $query->execute([
            ':id' => $id
        ]);
    }

    public static function deleteSpeed($id)
    {
        $query = Connection::make()->prepare("DELETE FROM speeds WHERE id = :id");
        $query->execute([
            ':id' => $id
        ]);
    }

    public static function deleteModel($id)
    {
        $query = Connection::make()->prepare("DELETE FROM models WHERE id = :id");
        $query->execute([
            ':id' => $id
        ]);
    }

    public static function deleteAdmin($id)
    {
        $query = Connection::make()->prepare("DELETE FROM users WHERE id = :id");
        $query->execute([
            ':id' => $id
        ]);
    }

    //Добавление нового товара
    public static function addProduct($photo, $price_hour, $model_id, $speed_id, $transmission_id, $power_id, $body_id)
    {
        $query = Connection::make()->prepare("INSERT INTO automobiles (photo,price_hour,model_id,speed_id,transmission_id,power_id, body_id) VALUE (:photo,:price_hour,:model_id,:speed_id,:transmission_id,:power_id,:body_id)");
        $query->execute([
            ':photo' => $photo,
            ':price_hour' => $price_hour,
            ':model_id' => $model_id,
            ':speed_id' => $speed_id,
            ':transmission_id' => $transmission_id,
            ':power_id' => $power_id,
            ':body_id' => $body_id,
        ]);
    }

    public static function allAdmin()
    {
        $query = Connection::make()->query("SELECT * FROM users WHERE role_id = 2");
        return $query->fetchAll();
    }


    public static function allModels()
    {
        $query = Connection::make()->query("SELECT * FROM models");
        return $query->fetchAll();
    }

    public static function allSpeeds()
    {
        $query = Connection::make()->query("SELECT * FROM speeds");
        return $query->fetchAll();
    }

    public static function allPowers()
    {
        $query = Connection::make()->query("SELECT * FROM powers");
        return $query->fetchAll();
    }

    public static function allOrder()
    {
        $query = Connection::make()->query("SELECT orders.*, users.name as user, statuses.name as statuse FROM orders 
        INNER JOIN users ON users.id = orders.user_id
        INNER JOIN statuses ON statuses.id = orders.status_id");
        return $query->fetchAll();
    }

    public static function allTransmissions()
    {
        $query = Connection::make()->query("SELECT * FROM transmissions");
        return $query->fetchAll();
    }

    public static function addSpeeds($number)
    {
        $query = Connection::make()->prepare("INSERT INTO speeds (number) VALUE (:number)");
        $query->execute([
            ':number' => $number
        ]);
    }

    public static function addModels($name, $text)
    {
        $query = Connection::make()->prepare("INSERT INTO models (name,text) VALUE (:name,:text)");
        $query->execute([
            ':name' => $name,
            ':text' => $text
        ]);
    }

    public static function getProductsInOrder($order_id)
    {
        $query = Connection::make()->prepare("SELECT products_orders.*,cars.number as number,models.name as model,bodies.name as body FROM products_orders INNER JOIN cars ON cars.id = products_orders.car_id INNER JOIN automobiles ON automobiles.id = cars.automobiles_id INNER JOIN models ON models.id = automobiles.model_id INNER JOIN bodies ON bodies.id = automobiles.body_id WHERE products_orders.order_id = :order_id");
        $query->execute([
            ':order_id' => $order_id
        ]);
        return $query->fetchAll();
    }

    public static function allStatus()
    {
        $query = Connection::make()->query("SELECT * FROM statuses");
        return $query->fetchAll();
    }

    public static function getAutomobiles($photo)
    {
        $query = Connection::make()->prepare("SELECT * FROM automobiles WHERE photo = :photo");
        $query->execute([
            ':photo' => $photo
        ]);
        return $query->fetch();
    }

    public static function addImage($image, $text, $automobyle_id, $is_main)
    {
        $query = Connection::make()->prepare("INSERT INTO images(name, text, automobyle_id, is_main) VALUE (:name, :text, :automobyle_id, :is_main)");
        $query->execute([
            ':name' => $image,
            ':text' => $text,
            ':automobyle_id' => $automobyle_id,
            ':is_main' => $is_main
        ]);
    }

    // //Удаление товара
    // public static function deleteProduct($id)
    // {
    //     $query = Connection::make()->prepare("DELETE FROM products WHERE id = :id");
    //     $query->execute([
    //         ':id' => $id
    //     ]);
    // }

    // public static function getProductsInOrder($id)
    // {
    //     $query = Connection::make()->prepare("SELECT order_products.*,products.name as name,orders.updated_at,products.price FROM order_products INNER JOIN orders ON order_products.order_id = orders.id INNER JOIN products ON order_products.product_id = products.id WHERE order_products.order_id = :id");
    //     $query->execute([
    //         ':id' => $id
    //     ]);
    //     return $query->fetchAll();
    // }

    // public static function getProductsInCategory()
    // {
    //     $query = Connection::make()->query("SELECT * FROM products");
    //     return $query->fetchAll();
    // }

    // public static function productsCategories($id)
    // {
    //     //Формируем параметры для запроса
    //     $query = Connection::make()->prepare("SELECT products.*, countries.name as country, categories.name as category FROM products INNER JOIN countries ON countries.id = products.country_id INNER JOIN categories ON categories.id = products.category_id WHERE category_id = :id");
    //     $query->execute([
    //         ':id' =>$id
    //     ]);
    //     return $query->fetchAll();
    // }

    // public static function totalPriceInOrderProducts($id)
    // {
    //     $query = Connection::make()->prepare("SELECT SUM(products.price) as total_price FROM order_products INNER JOIN products ON order_products.product_id = products.id WHERE order_id = :id");
    //     $query->execute([
    //         ':id' => $id
    //     ]);
    //     return $query->fetch(\PDO::FETCH_COLUMN);
    // }

    // //общее количество товаров в заказе
    // public static function totalCountInOrderProducts($id)
    // {
    //     $query = Connection::make()->prepare("SELECT SUM(count) as total_count FROM order_products WHERE order_id = :id");
    //     $query->execute([
    //         ':id' => $id
    //     ]);
    //     return $query->fetch(\PDO::FETCH_COLUMN);
    // }

    // public static function infoOrderInProducts($id)
    // {
    //     $query = Connection::make()->prepare("SELECT orders.id, users.name as user, orders.updated_at, users.login as login FROM orders INNER JOIN users ON orders.user_id = users.id WHERE orders.id = :id");
    //     $query->execute([
    //         ':id' => $id
    //     ]);
    //     return $query->fetch();
    // }

}
