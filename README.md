# uas_ecom22d
source code untuk projek uas ecommerce 22D UMBY

versi php yang direkomendasikan : 7.4

command untuk clone dari git

``git clone https://github.com/ajikur2901/uas_ecom22d.git``

setelah clone selesai masuk ke folder project nya, 

jalankan

``composer install``

lalu buka folder dengan vs code
copy file .env.example dengan nama .env

``php artisan migrate:fresh --seed``

``php artisan optimize:clear``

``php artisan key:generate``

sampai disini seharusnya sudah bisa berjalan normal, 

apabila masih ada kendala bisa disampaikan di group

default auth :

admin@student.mercubuana-yogya.ac.id pass: 123

user@student.mercubuana-yogya.ac.id pass: 123

command untuk menambahkan code yang terdapat perubahan

``git add *``

command untuk commit perubahan

``git commit -m "contoh commit"``

command untuk push perubahan ke branch baru

``git push origin main:aji``
