Anggota Kelompok
- Ahmad Zemar Alvaro - 2440052040
- Richard Prayogi - 2440018154
- Rheza mario - 2440008765
- Muhammad Kadafi Azis - 2440062035
- Calvin - 2440041642


Cara menjalankan program:
1.        composer update
2.        php artisan migrate:fresh --seed
3.        php artisan storage:link
4.        php artisan serve




Asumsi:
* Semua user yang ingin menjadi admin harus melalui proses seeding baru
* Terdapat masing - masing satu akun seeding untuk kedua role, yaitu user dan admin
* Credentials akun admin: email: admin@gmail.com; password: 1234567
* Credentials akun user: email: user@gmail.com; password 1234567
* Untuk bagian category, kami memisahkan pakaian menjadi 2 jenis, yaitu pakaian pria dan pakaian wanita. 
* Untuk pembayaran, kami menggunakan nomor kartu debit sebagai alat pembayaran.
* Database kami bernama textile


Flow (User)
* Guest melakukan register dan menginput data data yang dibutuhkan
* Guest melakukan login dengan credentials yang sudah dibuat
* User melihat produk produk melalui page Home atau mencari produk spesifik menggunakan page Search
* User menekan ‘More Details’ di produk yang akan dibeli
* User memasukan jumlah dari produk yang akan dibeli dan menekan tombol Add to Cart
* User dapat melihat isi dari Cart mereka di halaman Cart
* User menekan Check-Out dan akan di-redirect ke halaman History dan melihat hasil transaksi mereka
* User juga dapat melakukan update terkait quantity produk yang ingin dibeli
* User dapat membuka halaman Profile untuk melakukan update password atau update profile
Flow (Admin)
* Admin melakukan login di halaman Login
* Admin dapat menambahkan produk ke dalam database melalui tombol Add Item dan memasukan data data yang dibutuhkan
* Admin dapat mengedit jumlah stock tiap produk dengan menekan tombol ‘More Detail’ dan memasukan jumlah stock yang ingin diganti
* Admin dapat mengedit password dengan membuka halaman Profile dan mengganti password dengan memasukan password lama dan password baru
