<?php

use App\models\Booking;

include $_SERVER['DOCUMENT_ROOT'] . "/bootstrap.php";

//получаем поток для работы с входными данными
$stream = file_get_contents("php://input");

if (isset($stream)) {
    //декодируем полученные данные
    $product_id = json_decode($stream)->data ?? false;
    $action = json_decode($stream)->action;
    $user_id = $_SESSION['id'];
    
    $productInBasket = match ($action) {
        "add" => Booking::add($product_id, $user_id),
        "delete" => Booking::delete($product_id, $user_id)
    };

    $_SESSION['totalCount'] = Booking::totalCount($user_id);
    echo json_encode([
        "productInBasket" => $productInBasket,
        "totalPrice" => Booking::totalPrice($user_id),
        "totalCount" => Booking::totalCount($user_id)
    ], JSON_UNESCAPED_UNICODE);
}
