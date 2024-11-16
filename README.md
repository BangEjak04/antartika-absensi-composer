# Antartika Absensi

Proyek **Antartika Absensi** adalah aplikasi berbasis PHP menggunakan arsitektur MVC untuk mencatat kehadiran siswa. Aplikasi ini menggunakan **TailwindCSS** untuk desain antarmuka, **Alpine.js** untuk interaktivitas, dan terhubung dengan database MySQL.

## Fitur
- Menampilkan daftar siswa dengan data kehadiran.
- Antarmuka interaktif menggunakan **Alpine.js**.
- Penggunaan **TailwindCSS** untuk desain responsif.
- Arsitektur **PHP MVC** untuk pemisahan logika aplikasi.

---

## 🚀 Cara Menggunakan

### 1. **Kebutuhan Sistem**
- PHP >= 8.1
- Composer
- MySQL
- Python >= 3.8 (untuk fitur deteksi wajah)
- Modul Python: `opencv-python`, `numpy` (lihat `requirements.txt`)

### 2. **Langkah-Langkah Instalasi**

#### a. Clone Proyek

```bash
git clone https://github.com/username/antartika-absensi-composer.git
cd antartika-absensi-composer
```
#### b. Instal Dependensi PHP
```bash
composer install
```

#### c. Konfigurasi Database

1. Buat database MySQL bernama ```antartika_absensi.```
2. Impor file SQL jika tersedia.
3. Atur konfigurasi database di file ```src/config/Database.php```.

#### d. Jalankan Server PHP

```bash
php -S localhost:8000 -t public
```

#### e. Konfigurasi Python untuk Deteksi Wajah

1. Masuk ke folder ```src/api```.
2. Buat virtual environment:
    ```bash
    python -m venv .venv
    ```
3. Aktifkan environment:

    + Windows:
    
        ```bash
        .venv\Scripts\activate
        ```

    + Linux/Mac:

        ```bash
        .venv/bin/activate
        ```

4. Instal dependensi Python:

    ```bash
    pip install -r requirements.txt
    ```

5. Jalankan script Python (contoh untuk server API):

    ```bash
    python face_detection/app.py
    ```

### 3. **Mengakses Aplikasi**
1. Buka browser dan akses aplikasi:
```http://localhost:8000```
2. Dashboard tersedia untuk admin dan user.

## 🌟 Fitur Utama
+ **Manajemen Absensi**: Kelola data kehadiran mahasiswa.
+ **Deteksi Wajah**: Gunakan Python untuk mendeteksi wajah secara real-time.
+ **Arsitektur Modular**: Memanfaatkan Composer untuk manajemen dependensi PHP.

## 🤝 Kontribusi
1. Fork repositori ini.
2. Buat branch baru untuk fitur atau perbaikan:
    ```bash
    git checkout -b fitur-baru
    ```
3. Commit perubahan Anda:
    ```bash
    git commit -m "Menambahkan fitur baru"
    ```
4. Push ke branch Anda:
    ```bash
    git push origin fitur-baru
    ```
5. Buat Pull Request.

## 📞 Dukungan
Jika Anda memiliki pertanyaan atau masalah, jangan ragu untuk membuka issue atau menghubungi email@example.com.

> **Note**: Ganti `https://github.com/username/antartika-absensi-composer.git` dengan URL repositori asli Anda dan sesuaikan informasi kontak di bagian Dukungan.

## License

[MIT](https://choosealicense.com/licenses/mit/)