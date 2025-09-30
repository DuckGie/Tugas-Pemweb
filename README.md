# 📋 Aplikasi Pendaftaran Mahasiswa

Proyek ini adalah aplikasi sederhana berbasis **PHP** untuk melakukan pendaftaran mahasiswa. Data yang diinput akan tersimpan di file **JSON**, kemudian ditampilkan dalam bentuk tabel dengan desain modern.

## ✨ Fitur Utama

- 📝 **Form Pendaftaran**  
  - Input Nama Lengkap  
  - Input NIM  
  - Pilih Program Studi  
  - Pilih Jenis Kelamin (Radio Button dengan animasi)  
  - Pilih Hobi (Checkbox, mendukung lebih dari satu pilihan)  
  - Input Alamat  

- 💾 **Penyimpanan Data**  
  - Data mahasiswa tersimpan ke dalam file `biodata.json`.  
  - Setiap data baru akan ditambahkan tanpa menghapus data lama.  

- 📊 **Tabel Data Mahasiswa**  
  - Menampilkan seluruh data mahasiswa yang sudah terdaftar.  
  - Tabel berada di tengah halaman dengan border putih.  
  - Hobi ditampilkan dipisahkan dengan koma.  

- 🔍 **Fitur Pencarian**  
  - Cari mahasiswa berdasarkan **nama, NIM, prodi, jenis kelamin, alamat, maupun hobi**.  
  - Pencarian dilakukan secara **case-insensitive**.  

## 🛠️ Teknologi yang Digunakan

- **PHP** (proses backend dan penyimpanan JSON)  
- **HTML5 & CSS3** (struktur dan tampilan form)  
- **Custom CSS + Animasi** (efek glitch pada input, radio, dan checkbox)  
