# project_web
Các bước cài đặt web trên máy bạn:
Bước 1: +)clone các file trong learning.th
	+) Do mình không dùng xampp(xampp có rất nhiều khi lỗi) nên mình dùng open Server của Nga .Các bạn có thể download về xài . mình thấy khá ổn. Các bạn có thể tìm hiểu thêm ở đây
https://ospanel.io/
Bước 2: Tạo thêm 1 file .env có nội dung giống hết file .env.example
Bước 3: mở terminal lên và chạy các lệnh sau:
	"composer install" . Nếu trong ứng dụng có file composer.lock các bạn cần xóa file này và chạy lại composer install mới được nếu không sẽ gặp lỗi .
Sau khi chạy xong "composer install" các thư viện phụ thuộc sẽ có mặt trong thư mục vendor .
Bước 4: tạo cơ sở dữ liệu trong máy của bạn:
-	Tên cơ sở dữ liệu:learning_db
-	Sau đó mở file database_init để chạy khởi tạo Database
Bước 5: cài đặt laravel filemanager: 
Bạn có thể tham khảo theo trang web này để cài đặt
https://unisharp.github.io/laravel-filemanager/installation
Bước 6: Cài đặt pusher qua các câu lệnh sau:
composer require pusher/pusher-php-server
chú ý cài đặt lệnh này sau khi đã CD vào thư mục trong.
Ok. Như vậy là xong các bạn có thể làm việc với.
Lưu ý một số lỗi có thể xảy ra:
	+) Ứng dụng là realtime do đó phải chắc chắn rằng giờ ngày trên máy tính bạn phải chính xác.
	+) có 1 số chỗ mình buộc phải fix cứng url là https://learning.th. Do đó các bạn nên kiểm tra lại một cách tốt nhất để tránh các lỗi ko tìm ra. 
Cảm ơn các bạn đã theo dõi.
