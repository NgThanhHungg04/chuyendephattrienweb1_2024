<?php
// Start the session
session_start();

// Tạo mã CSRF nếu chưa có
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

require_once 'models/UserModel.php';
$userModel = new UserModel();

// Hàm mã hóa ID
function encodeId($id) {
    $salt = "secret_salt"; // Chuỗi salt bí mật
    return base64_encode($id ^ strlen($salt));
}

$params = [];
if (!empty($_GET['keyword'])) {
    $params['keyword'] = $_GET['keyword'];
}


$users = $userModel->getUsers($params);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <?php include 'views/meta.php' ?>
</head>
<body>
    <?php include 'views/header.php'?>
    <div class="container">
        <?php if (!empty($users)) { ?>
            <div class="alert alert-warning" role="alert">
                List of users! <br>
                <!-- Lưu ý rằng từ khóa nguy hiểm này sẽ không còn gây hại nhờ việc sử dụng prepared statements -->
                Hacker URL thử nghiệm: http://php.local/list_users.php?keyword=ASDF%25%22%3BTRUNCATE+banks%3B%23%23
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Username</th>
                        <th scope="col">Fullname</th>
                        <th scope="col">Type</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user) { ?>
                        <tr>
                            <th scope="row"><?php echo htmlspecialchars($user['id']); ?></th>
                            <td>
                                <?php echo htmlspecialchars($user['name']); ?>
                            </td>
                            <td>
                                <?php echo htmlspecialchars($user['fullname']); ?>
                            </td>
                            <td>
                                <?php echo htmlspecialchars($user['type']); ?>
                            </td>
                            <td>
                                <a href="form_user.php?id=<?php echo encodeId($user['id']); ?>">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true" title="Update"></i>
                                </a>
                                <a href="view_user.php?id=<?php echo encodeId($user['id']); ?>">
                                    <i class="fa fa-eye" aria-hidden="true" title="View"></i>
                                </a>
                                <a href="delete_user.php?id=<?php echo $user['id']; ?>&csrf_token=<?php echo $_SESSION['csrf_token']; ?>" 
                                   onclick="return confirm('Bạn có muốn chắc chắn xóa người dùng này không?');">
                                    <i class="fa fa-eraser" aria-hidden="true" title="Delete"></i>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        <?php } else { ?>
            <div class="alert alert-dark" role="alert">
                No users found for your search criteria.
            </div>
        <?php } ?>
    </div>
</body>
</html>
