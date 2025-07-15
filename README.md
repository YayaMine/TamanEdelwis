# 🏞️ Taman Edelweis Ticketing System: Chatbot-Powered & Seamless Payments 🎟️

Selamat datang di repositori resmi **Taman Edelweis Ticketing System**! Proyek ini adalah sebuah platform website modern yang dirancang untuk mempermudah pengunjung dalam membeli tiket masuk ke Taman Edelweis. Dilengkapi dengan fitur chatbot interaktif, integrasi pembayaran Midtrans yang aman, dan sistem pengiriman e-tiket berbasis QR Code langsung ke email, kami menghadirkan pengalaman pembelian tiket yang cepat, cerdas, dan efisien.

## ✨ Fitur Utama

* **🤖 Chatbot Interaktif:** Pengunjung dapat berinterinteraksi langsung dengan chatbot untuk mendapatkan informasi seputar tiket, jam operasional, harga, dan panduan pembelian. Didukung oleh teknologi AI generatif melalui **Groq API** untuk respons yang cepat dan akurat.
* **💳 Pembayaran Online Aman dengan Midtrans:** Integrasi penuh dengan Midtrans Payment Gateway, memungkinkan pengunjung untuk menyelesaikan transaksi menggunakan berbagai metode pembayaran populer di Indonesia (transfer bank, e-wallet, virtual account, kartu kredit, dll.).
* **🎫 E-Ticket QR Code via Email:** Setelah pembayaran berhasil dikonfirmasi, tiket digital berupa QR Code unik akan secara otomatis dikirimkan ke alamat email pembeli, siap dipindai saat kedatangan.
* **🚀 Panel Admin Powerfull (Filament Admin):** Mengelola seluruh sistem tiket (daftar acara/jenis tiket, harga, transaksi, pengguna, dan interaksi chatbot) melalui antarmuka admin yang intuitif dan kaya fitur, dibangun dengan FilamentPHP.
* **Frontend Modern:** Antarmuka pengguna yang bersih, responsif, dan mudah dinavigasi, memastikan pengalaman pembelian tiket yang nyaman di berbagai perangkat.

## 🛠️ Teknologi yang Digunakan

Proyek ini dibangun di atas tumpukan teknologi modern untuk skalabilitas, keamanan, dan performa tinggi:

* **Backend & Panel Admin:**
    * `PHP` (Bahasa Pemrograman)
    * `Laravel` (Framework PHP terkemuka)
    * `FilamentPHP` (Framework untuk membangun panel admin Laravel dengan cepat dan elegan)
* **Chatbot AI:** `Groq API` (untuk inferensi model bahasa yang sangat cepat, mendukung respons chatbot real-time).
* **Payment Gateway:** `Midtrans` (solusi pembayaran terintegrasi untuk Indonesia).
* **Database:** `MySQL` (atau database relasional lain yang kompatibel dengan Laravel).
* **Queue/Email Service:** Untuk pengiriman email QR Code tiket secara asinkron.
* **Frontend:** `Blade` (Template Engine Laravel) dengan `Livewire` (opsional, jika digunakan untuk interaktivitas) dan `Alpine.js` (opsional).
* **Desain/CSS Framework:** `Tailwind CSS` (opsional, jika digunakan).

## 📦 Struktur Repositori

Repositori ini mengikuti struktur monorepo yang logis untuk memisahkan komponen utama:

Sebelum memulai, pastikan Anda telah menginstal:

* **PHP** (versi 8.1 atau lebih tinggi disarankan).
* **Composer** (manajer dependensi untuk PHP).
* **Node.js & npm/Yarn** (untuk kompilasi aset frontend).
* **MySQL** (atau sistem database lain yang didukung Laravel seperti PostgreSQL).
* **Git** untuk mengkloning repositori.

### 🛠️ Konfigurasi Lingkungan

1.  **Kloning Repositori:**
    Buka terminal atau command prompt Anda:
    ```bash
    git clone [https://github.com/YayaMine/TamanEdelweis.git](https://github.com/YayaMine/TamanEdelweis.git)
    cd TamanEdelweis
    ```

2.  **Konfigurasi Backend (Aplikasi Laravel):**
    * Navigasi ke direktori backend utama:
        ```bash
        cd backend 
        ```
    * Instal semua dependensi PHP yang diperlukan:
        ```bash
        composer install
        ```
    * Salin file konfigurasi lingkungan dasar dan buat *application key*:
        ```bash
        cp .env.example .env
        php artisan key:generate
        ```
    * Buka file `.env` yang baru dibuat dan konfigurasikan detail database serta API keys:
        ```env
        # Konfigurasi Database (contoh untuk MySQL)
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=taman_edelweis_db # Ganti dengan nama database Anda
        DB_USERNAME=root             # Ganti dengan username database Anda
        DB_PASSWORD=                  # Ganti dengan password database Anda

        # Konfigurasi Groq API
        GROQ_API_KEY="your_groq_api_key_here" # Dapatkan dari dashboard Groq Cloud

        # Konfigurasi Midtrans Payment Gateway
        MIDTRANS_SERVER_KEY="server_key_anda" # Dari dashboard Midtrans
        MIDTRANS_CLIENT_KEY="client_key_anda" # Dari dashboard Midtrans
        MIDTRANS_IS_PRODUCTION=false         # Ganti 'true' untuk mode produksi
        MIDTRANS_SANITATION=true             # Umumnya true untuk keamanan

        # Konfigurasi Email (untuk pengiriman QR Code tiket)
        MAIL_MAILER=smtp
        MAIL_HOST=mailpit # atau smtp.mailgun.org, smtp.sendgrid.net, dll.
        MAIL_PORT=1025     # atau 587, 465, dll.
        MAIL_USERNAME=null
        MAIL_PASSWORD=null
        MAIL_ENCRYPTION=null
        MAIL_FROM_ADDRESS="no-reply@tamanedelweis.com" # Ganti dengan email pengirim Anda
        MAIL_FROM_NAME="${APP_NAME}"
        ```
        *(**Penting:** Ganti placeholder `your_...` dengan kunci API dan kredensial Anda yang sebenarnya.)*

    * Jalankan migrasi database untuk membuat tabel-tabel yang diperlukan:
        ```bash
        php artisan migrate
        ```
    * *(Opsional) Seed Database:* Jika Anda memiliki data dummy (pengguna admin, tiket contoh) untuk diisi ke database:
        ```bash
        php artisan db:seed
        ```
    * Kompilasi aset frontend (untuk Filament, atau aset custom lainnya):
        ```bash
        npm install # atau yarn
        npm run dev # atau npm run build untuk produksi
        ```

### ▶️ Menjalankan Aplikasi

1.  **Jalankan Backend (Laravel):**
    Dari direktori `backend` Anda, mulai server pengembangan Laravel:
    ```bash
    php artisan serve
    ```
    Aplikasi Laravel (termasuk panel admin Filament) akan tersedia di `http://127.0.0.1:8000` (atau port lain jika sudah terpakai).

2.  **Akses Panel Admin Filament:**
    Setelah backend berjalan, Anda bisa mengakses panel admin di `http://127.0.0.1:8000/admin` (jika Filament diatur di path default).
    * Anda mungkin perlu membuat user admin pertama kali jika belum di-seed:
        ```bash
        php artisan make:filament-user
        # Ikuti prompt untuk membuat user admin baru
        ```

Sekarang Sistem Tiket Taman Edelweis berbasis chatbot Anda sudah siap untuk diuji!

## 🤖 Cara Kerja Chatbot (Groq API)

Chatbot diintegrasikan di sisi backend Laravel. Ketika pengguna berinteraksi dengan chatbot di frontend:
1.  Permintaan pengguna dikirimkan ke backend Laravel.
2.  Backend memproses permintaan dan, jika perlu, mengirimkannya ke **Groq API**.
3.  Groq API (yang sangat cepat dalam inferensi model bahasa besar) akan memproses pertanyaan dan mengembalikan respons.
4.  Backend Laravel menerima respons dari Groq, memprosesnya lebih lanjut jika diperlukan (misalnya, mengambil data tiket dari database berdasarkan respons AI), dan mengirimkannya kembali ke frontend.

## 💳 Proses Pembelian & Tiket QR Code (Midtrans)

1.  Pengunjung memilih jenis tiket dan jumlahnya di website.
2.  Data pesanan dikirimkan ke backend Laravel.
3.  Backend Laravel membuat transaksi dengan **Midtrans API** dan mendapatkan token transaksi.
4.  Frontend akan mengarahkan pengguna ke halaman pembayaran Midtrans (menggunakan token transaksi) atau menampilkan opsi pembayaran Midtrans di dalam aplikasi.
5.  Setelah pembayaran berhasil di Midtrans, Midtrans akan mengirimkan notifikasi status transaksi (`callback`) ke backend Laravel Anda.
6.  Backend Laravel memverifikasi status pembayaran. Jika berhasil, sistem akan:
    * Mencatat transaksi sebagai berhasil.
    * Menghasilkan **QR Code unik** untuk tiket tersebut.
    * Mengirimkan email berisi detail tiket dan QR Code ke alamat email pembeli.
7.  Pengunjung dapat menampilkan QR Code ini di ponsel atau mencetaknya untuk dipindai saat masuk ke Taman Edelweis.

## 🤝 Kontribusi

Kami sangat menyambut kontribusi untuk membuat Sistem Tiket Taman Edelweis ini lebih baik lagi! Jika Anda tertarik, silakan ikuti alur kontribusi standar:

1.  Fork repositori ini.
2.  Buat branch baru untuk fitur atau perbaikan Anda:
    ```bash
    git checkout -b feature/nama-fitur-baru
    ```
3.  Lakukan perubahan dan commit dengan pesan yang jelas:
    ```bash
    git commit -m 'feat: Menambahkan integrasi fitur baru X'
    ```
4.  Dorong (push) branch Anda ke repositori yang di-fork:
    ```bash
    git push origin feature/nama-fitur-baru
    ```
5.  Buka *Pull Request* baru ke repositori utama.

Kami akan meninjau kontribusi Anda secepatnya!

## 📞 Kontak

Punya pertanyaan, saran, atau ingin tahu lebih banyak tentang proyek ini? Jangan ragu untuk menghubungi:
<p>
  <a href="mailto:cahyafajarpianto@gmail.com"><img src="https://img.shields.io/badge/-Email-red?style=flat-square&logo=gmail&logoColor=white"></a>
  <a href="https://www.linkedin.com/in/fajarpianto" target="_blank"><img src="https://img.shields.io/badge/-LinkedIn-blue?style=flat-square&logo=linkedin&logoColor=white"></a>
  <a href="https://github.com/YayaMine"><img src="https://img.shields.io/badge/-GitHub-black?style=flat-square&logo=github&logoColor=white"></a>
</p>

## 📜 Lisensi

Proyek ini dilisensikan di bawah [YayaMine]. Lihat file `LICENSE` di repositori untuk detail lebih lanjut.

---
