1. Clone source code về máy tính 
   git clone ....
2. Cập nhật thư viện vendor về máy
   composer install
3. Copy file .env.example và đổi tên thành .env

4. Trong file .env kiểm tra các trường :
                  APP_KEY=base64:ssolisiF7wqEqTMRnjten9LsvCxyIR3/LX7FB2H3/Vk=
                  DB_DATABASE=WD-32
                  DB_USERNAME=root
                  DB_PASSWORD=
5. Chạy php artisan migrate --seed để tạo db và fake data


Github: 
   Sau khi code xong:
                      - git pull origin main Để update code mới nhất về 
                      - git add . Để thêm các file cần thay đổi vào git
                      - git commit -m "ghi chú" Để ghi chú thay đổi muốn đẩy lên
                      - git push origin main Để đẩy code lên nhánh main