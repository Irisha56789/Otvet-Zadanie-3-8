<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $order_id = $_POST['order_id'];
    $reason = $_POST['reason'];

    $sql = "INSERT INTO cancellations (order_id, reason) VALUES (:order_id, :reason)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['order_id' => $order_id, 'reason' => $reason]);

    echo "Заказ #$order_id успешно отменен! <a href='index.php'>Вернуться</a>";
}
?>
