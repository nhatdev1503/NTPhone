1. Clone source code về máy tính 
   git clone ....
2. Cập nhật thư viện vendor về máy
   composer install
3. Copy file .env.example và đổi tên thành .env

4. Trong file .env kiểm tra các trường :
                  DB_DATABASE=WD-32
                  DB_USERNAME=root
                  DB_PASSWORD=
5. Chạy php artisan migrate --seed để tạo db và fake datadata
