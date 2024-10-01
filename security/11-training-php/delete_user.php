<?php
session_start();
require_once 'models/UserModel.php';
$userModel = new UserModel();

// Kiểm tra xem người dùng đã đăng nhập
if (!isset($_SESSION['user_id'])) {
    echo "Bạn cần đăng nhập trước khi xóa người dùng này.";
    exit;
}

$currentUserId = $_SESSION['user_id']; // ID của người dùng hiện tại
$id = base64_decode($_GET['id'] ?? null); // Lấy ID từ URL

// Lấy mã thông báo CSRF
$csrfToken = $_GET['csrf_token'] ?? '';

// Kiểm tra mã thông báo CSRF
if (hash_equals($_SESSION['csrf_token'], $csrfToken)) {
    // Kiểm tra xem người dùng có quyền xóa hay không
    if ($currentUserId == $id) {
        // Thực hiện xóa người dùng
        if ($userModel->deleteUserById($id)) {
            header('Location: list_users.php');
            exit;
        } else {
            echo "Error deleting user.";
        }
    } else {
        echo "Bạn không có quyền xóa người dùng này.";
        exit;
    }
} else {
    echo "Mã thông báo CSRF không hợp lệ.";
}
?>
