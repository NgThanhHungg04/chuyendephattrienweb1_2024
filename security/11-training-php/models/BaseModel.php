<?php

class BaseModel {
    protected static $_connection;

    // Constructor: Khởi tạo kết nối đến cơ sở dữ liệu
    public function __construct() {
        // Thay đổi thông tin kết nối theo cấu hình của bạn
        self::$_connection = new mysqli('localhost', 'root', '', 'app_web1');

        // Kiểm tra kết nối
        if (self::$_connection->connect_error) {
            die("Connection failed: " . self::$_connection->connect_error);
        }
    }

    // Phương thức để thực hiện truy vấn SELECT
    public function select($sql) {
        $result = self::$_connection->query($sql);
        
        // Kiểm tra kết quả truy vấn
        if ($result) {
            return $result->fetch_all(MYSQLI_ASSOC); // Trả về tất cả các bản ghi dưới dạng mảng
        } else {
            return []; // Trả về mảng rỗng nếu không có kết quả
        }
    }

    // Phương thức để thực hiện truy vấn UPDATE
    public function update($sql) {
        if (self::$_connection->query($sql) === TRUE) {
            return true; // Trả về true nếu cập nhật thành công
        } else {
            return false; // Trả về false nếu cập nhật thất bại
        }
    }

    // Phương thức để thực hiện truy vấn DELETE
    public function delete($sql) {
        if (self::$_connection->query($sql) === TRUE) {
            return true; // Trả về true nếu xóa thành công
        } else {
            return false; // Trả về false nếu xóa thất bại
        }
    }

    // Phương thức để thực hiện truy vấn INSERT
    public function insert($sql) {
        if (self::$_connection->query($sql) === TRUE) {
            return self::$_connection->insert_id; // Trả về ID của bản ghi vừa được thêm
        } else {
            return false; // Trả về false nếu thêm thất bại
        }
    }

    // Phương thức để thực hiện các truy vấn khác (nếu cần)
    public function query($sql) {
        return self::$_connection->query($sql);
    }

    // Destructor: Đóng kết nối khi không sử dụng nữa
    public function __destruct() {
        self::$_connection->close();
    }
}
