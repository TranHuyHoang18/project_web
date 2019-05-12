# project_web
Các bước cài đặt web trên máy bạn:<br>
Bước 1: +)clone các file trong learning.th<br>
	+) Do mình không dùng xampp(xampp có rất nhiều khi lỗi) nên mình dùng open Server của Nga .Các bạn có thể download về xài . mình thấy khá ổn. Các bạn có thể tìm hiểu thêm ở đây<br>
https://ospanel.io/<br>
Bước 2: Tạo thêm 1 file .env có nội dung giống hết file .env.example<br>
Bước 3: mở terminal lên và chạy các lệnh sau:<br>
	"composer install" . Nếu trong ứng dụng có file composer.lock các bạn cần xóa file này và chạy lại composer install mới được nếu không sẽ gặp lỗi .<br>
Sau khi chạy xong "composer install" các thư viện phụ thuộc sẽ có mặt trong thư mục vendor .<br>
Bước 4: tạo cơ sở dữ liệu trong máy của bạn:<br>
-	Tên cơ sở dữ liệu:learning_db<br>
-	Sau đó mở file database_init để chạy khởi tạo Database<br>


Bước 5: cài đặt laravel filemanager: <br>
Bạn có thể tham khảo theo trang web này để cài đặt
https://unisharp.github.io/laravel-filemanager/installation
Bước 6: Cài đặt pusher qua các câu lệnh sau:<br>
composer require pusher/pusher-php-server<br>
chú ý cài đặt lệnh này sau khi đã CD vào thư mục trong.<br>
Ok. Như vậy là xong các bạn có thể làm việc với.<br>
Lưu ý một số lỗi có thể xảy ra:<br>
	+) Ứng dụng là realtime do đó phải chắc chắn rằng giờ ngày trên máy tính bạn phải chính xác.<br>
	+) có 1 số chỗ mình buộc phải fix cứng url là https://learning.th. Do đó các bạn nên kiểm tra lại một cách tốt nhất để tránh các lỗi ko tìm ra. <br>
Cảm ơn các bạn đã theo dõi.<br>
