<?
// controller phần index 

// extrac  trích dẫn câu lệnh đó ra 

// session lưu trữ thông tin của người dùng 

// role dùng để phân biệt tài khoản ng dùng và quản trị

// isset là biến dùng để khai báo câu lẹnh có tồn tại hay k

// is_array kiểm tra xem một biến có phải là mảng hay không

session_start(); // biến khởi chạy cho session

session_unset(); // hàm dùng để hủy trở về giá trị ban đầu

extract($_SESSION['user']); // extrac dùng để trích dẫn câu lệnh đó ra 

// move_uploaded_file() di chuyển tệp đã tải lên đến đích mới

// basename() trả về tên tệp từ một đường dẫn.

// $_GET['...'] lấy giá trị

// $_POST['...']  gán  giá trị

$target_dir = "../upload/";  //chỉ định thư mục chứa tệp sẽ được đặt

// $target_file đường dẫn của tệp sẽ được tải lên
?>