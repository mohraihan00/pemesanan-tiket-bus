<?php
include 'koneksi.php';

header('Content-Type: application/json');

if (!isset($_GET['id'])) {
    echo json_encode(['error' => 'ID tidak ditemukan']);
    exit;
}

$id = $_GET['id'];
$stmt = $conn->prepare("SELECT * FROM bus WHERE id_bus = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $bus = $result->fetch_assoc();
    echo json_encode($bus);
} else {
    echo json_encode(['error' => 'Data bus tidak ditemukan']);
}

$stmt->close();
$conn->close();
?>
