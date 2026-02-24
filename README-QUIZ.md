# Quiz Evaluasi: Controller & Routing (Modul 5)

**Mata Kuliah:** Pemrograman Web Lanjut (Laravel 12)  
**Nama:** Evan Ridwan Rustandi Saputra  
**NIM:** [31242315]  
**Kampus:** STMIK IKMI Cirebon  

---

## Deskripsi Tugas
Menyelesaikan kuis praktikum mandiri Modul 5 dengan rincian:
1. **Resource Controller:** Membuat `BukuController` untuk manajemen katalog.
2. **Resource Routing:** Menggunakan `Route::resource` untuk URL `/koleksi`.
3. **Data Binding:** Mengirim array judul buku ke view menggunakan `compact` atau array manual.
4. **Dynamic URL:** Mengambil parameter ID di method `show` untuk detail buku.

## Cara Menjalankan & Testing
Pastikan server sudah jalan (`php artisan serve`), lalu akses link berikut:

1. **Daftar Koleksi:** [http://localhost:8000/koleksi](http://localhost:8000/koleksi)
2. **Detail Buku (ID 101):** [http://localhost:8000/koleksi/101](http://localhost:8000/koleksi/101)

## Perintah Terminal Terkait
Untuk melihat daftar rute yang terbentuk:
```bash
php artisan route:list --path=koleksi