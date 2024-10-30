<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Отзывы и отмена заказа</title>
</head>
<body>
    <h1>Добавить отзыв</h1>
    <form action="submit_review.php" method="post">
        <label for="name">Ваше имя:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="review">Ваш отзыв:</label>
        <textarea id="review" name="review" required></textarea>
        <br>
        <label for="rating">Рейтинг:</label>
        <input type="number" id="rating" name="rating" min="1" max="5" required>
        <br>
        <button type="submit">Отправить отзыв</button>
    </form>

    <h1>Отмена заказа</h1>
    <form action="cancel_order.php" method="post">
        <label for="order_id">Номер заказа:</label>
        <input type="text" id="order_id" name="order_id" required>
        <br>
        <label for="reason">Причина отмены:</label>
        <textarea id="reason" name="reason" required></textarea>
        <br>
        <button type="submit">Отменить заказ</button>
    </form>

    <h1>Отзывы:</h1>
    <?php
    $sql = "SELECT * FROM reviews";
    $stmt = $pdo->query($sql);
    $reviews = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($reviews as $review) {
        echo "<p><strong>{$review['name']}</strong>: {$review['review']} (Рейтинг: {$review['rating']})</p>";
    }
    ?>
</body>
</html>
