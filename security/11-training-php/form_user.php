<?php
// Start the session
session_start();
require_once 'models/UserModel.php';
$userModel = new UserModel();

$user = NULL; // Add new user
$_id = NULL;

if (!empty($_GET['id'])) {
    $_id = $_GET['id'];
    $user = $userModel->findUserById($_id); // Update existing user
}

// Khởi tạo biến lỗi
$errors = [];

if (!empty($_POST['submit'])) {
    // Lấy dữ liệu từ POST
    $name = $_POST['name'];
    $password = $_POST['password'];

    // Xác thực thông tin name
    if (empty($name)) {
        $errors[] = "Tên là bắt buộc.";
    } elseif (!preg_match("/^[A-Za-z0-9]{5,15}$/", $name)) {
        $errors[] = "Tên phải dài 5-15 ký tự và chỉ có thể chứa chữ cái và số.";
    }

    // Xác thực thông tin password
    if (empty($password)) {
        $errors[] = "Password là bắt buộc..";
    } elseif (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[~!@#$%^&*()]).{5,10}$/", $password)) {
        $errors[] = "Password phải bao gồm chữ thường, chữ HOA, số và kí tự đặc biệt. Và có chiều dài từ 5 - 10 kí tự";
    }

    // Nếu không có lỗi, thực hiện cập nhật hoặc thêm người dùng
    if (empty($errors)) {
        if (!empty($_id)) {
            $userModel->updateUser($_POST);
        } else {
            $userModel->insertUser($_POST);
        }
        header('location: list_users.php');
        exit; // Ngừng thực thi mã sau khi chuyển hướng
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>User form</title>
    <?php include 'views/meta.php' ?>
</head>
<body>
    <?php include 'views/header.php'?>
    <div class="container">
        <?php if ($user || !isset($_id)) { ?>
            <div class="alert alert-warning" role="alert">
                User form
            </div>
            <form method="POST">
                <input type="hidden" name="id" value="<?php echo $_id ?>">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" name="name" placeholder="Name" value='<?php if (!empty($user[0]['name'])) echo $user[0]['name'] ?>'>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
                <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
            </form>
            <!-- Hiển thị lỗi nếu có -->
            <?php if (!empty($errors)) { ?>
                <div class="alert alert-danger mt-3" role="alert">
                    <ul>
                        <?php foreach ($errors as $error) { ?>
                            <li><?php echo $error; ?></li>
                        <?php } ?>
                    </ul>
                </div>
            <?php } ?>
        <?php } else { ?>
            <div class="alert alert-success" role="alert">
                User not found!
            </div>
        <?php } ?>
    </div>
</body>
</html>
