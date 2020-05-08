# -Practive--Customer_management_application
[Thực hành] Ứng dụng quản lý khách hàng
Mục tiêu
Luyện tập phát triển các ứng dụng quản lý sử dụng kiến trúc MVC.

Điều kiện
- Nắm được kiến trúc MVC

- Biết cách triển khai các ứng dụng quản lý sử dụng kiến trúc MVC

Mô tả
Trong phần này, chúng ta sẽ phát triển một ứng dụng quản lý khách hàng. Ứng dụng có các chức năng chính sau:

Hiển thị danh sách khách hàng

Thêm một khách hàng mới

Sửa đổi thông tin của khách hàng

Xoá một khách hàng

Một khách hàng bao gồm các thành phần

id: Id của khách hàng

name: Tên của khách hàng

email: Email của khách hàng

address: Địa chỉ của khách hàng

Hướng dẫn
Triển khai kiến trúc MVC bằng cách định nghĩa các thành phần như sau:

Model:

Lớp Customer: Đại diện cho một khách hàng

Lớp CustomerDB: Chứa các phương thức để làm việc với CSDL

View:

File list.php: Hiển thị danh sách khách hàng, bao gồm: Tên, email, address của khách hàng

File add.php: Chứa form thêm một khách hàng mới

File edit.php: Chứa form chỉnh sửa một khách hàng

File delete.php: Chứa form để xoá một khách hàng

File view.php: Hiển thị nội dung chi tiết của một khách hàng

Controller:

Lớp CustomerController: Chứa các phương thức để xử lý các thao tác của người dùng

Ngoài ra, file index.php là file sẽ đón nhận tất các các request, phân loại theo các trang và chuyển request đến từng phương thức tương ứng của Controller.

Tạo Database
Tạo bảng customers bao gồm các cột:

id: integer - tự tăng
name: varchar
email: varchar
address: varchar