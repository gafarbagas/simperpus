1. *Download [git bash](https://github.com/git-for-windows/git/releases/download/v2.39.0.windows.1/Git-2.39.0-64-bit.exe)* (lewati jika sudah pernah meng-*install*)
2. *Download [vscode](https://code.visualstudio.com/download)* (lewati jika sudah pernah meng-*install*)
3. *Download [xampp](https://www.apachefriends.org/download.html)* (lewati jika sudah pernah meng-*install*)
4. *Download [composer](https://getcomposer.org/Composer-Setup.exe)* (lewati jika sudah pernah meng-*install*)
5. Buka phpmyadmin dan buatlah *database table* baru dengan nama `perpus`

![image](uploads/717eaa09aff2128100283b532602c8e5/image.png)

6. Buka Command-Prompt (CMD) kemudian masuklah ke *directory project*

![image](uploads/f85661a9b9254520ec85484f412faddf/image.png)

7. Bukalah vscode
```
code .
```
![image](uploads/54c607afe45ac636700c7328be6ebe2c/image.png)

8. Buka file `.env`. Masukan `perpus` dibagian `DB_DATABASE=`

![image](uploads/6f7e130f22fc965384274dd39720603d/image.png)

9. Selanjutnya jalankan beberapa perintah dibawah ini:

```
php artisan migrate --seed
```
![image](uploads/75cf4907f6ce549396f617ea40c11e29/image.png)

10. Untuk mengakses aplikasi, jalankan perintah:
```
php artisan serve
```
![image](uploads/2dc0053d30535b770946abf81f309926/image.png)

11. Buka link berikut di browser
```
127.0.0.1:8000
```
12. Selesai
