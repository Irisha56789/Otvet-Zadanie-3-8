<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $review = $_POST['review'];
    $rating = (int)$_POST['rating'];

    $sql = "INSERT INTO reviews (name, review, rating) VALUES (:name, :review, :rating)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['name' => $name, 'review' => $review, 'rating' => $rating]);

    echo "Отзыв успешно добавлен! <a href='index.php'>Вернуться</a>";
}
?>
