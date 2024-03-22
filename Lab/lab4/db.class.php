<?php
class Db
{
    // Biến kết nối cơ sở dữ liệu
    protected static $connection;

    // Hàm khởi tạo kết nối
    public function connect()
    {
        // Kết nối đến cơ sở dữ liệu
        $connection = mysqli_connect("localhost", "root", "", "demo_lap3");
        mysqli_set_charset($connection, 'utf8');

        // Kiểm tra kết nối
        if (mysqli_connect_errno()) {
            echo "Kết nối cơ sở dữ liệu thất bại: " . mysqli_connect_error();
        }
        return $connection;
    }

    // Hàm thực thi truy vấn
    public function query_execute($queryString)
    {
        // Khởi tạo kết nối
        $connection = $this->connect();

        // Thực thi truy vấn
        $result = $connection->query($queryString);

        // Đóng kết nối
        $connection->close();

        return $result;
    }

    // Hàm truy vấn và trả về một mảng kết quả
    public function select_to_array($queryString)
    {
        $rows = array();

        // Thực thi truy vấn
        $result = $this->query_execute($queryString);

        if ($result == false) return false;

        // Duyệt qua kết quả và thêm vào mảng
        while ($item = $result->fetch_assoc()) {
            $rows[] = $item;
        }

        return $rows;
    }
}
?>
