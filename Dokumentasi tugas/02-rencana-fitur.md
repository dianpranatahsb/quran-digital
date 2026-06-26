# Rencana Fitur

---

## Fitur 1 — Daftar Surah Al-Qur'an

**Role Penanggung Jawab:** `Frontend & Backend`

**Sumber Data:** `Third-Party API — AlQuran Cloud API`

**Deskripsi & Ekspektasi:**
Fitur ini menampilkan seluruh daftar surah Al-Qur'an yang tersedia. Backend mengambil data dari API AlQuran Cloud dan mengirimkannya ke frontend dalam bentuk JSON. Frontend menampilkan daftar surah lengkap beserta nomor surah, nama surah, jumlah ayat, dan jenis wahyu (Makkiyah/Madaniyah). Pengguna dapat memilih surah untuk melihat detailnya.

---

## Fitur 2 — Detail Surah dan Ayat

**Role Penanggung Jawab:** `Frontend & Backend`

**Sumber Data:** `Third-Party API — AlQuran Cloud API`

**Deskripsi & Ekspektasi:**
Fitur ini memungkinkan pengguna melihat isi lengkap suatu surah. Ketika pengguna memilih surah tertentu, frontend mengirim permintaan ke backend. Backend mengambil data ayat-ayat dari API AlQuran Cloud dan mengirimkannya ke frontend untuk ditampilkan secara terstruktur.

---

## Fitur 3 — Pencarian Surah

**Role Penanggung Jawab:** `Frontend`

**Sumber Data:** `Internal System`

**Deskripsi & Ekspektasi:**
Fitur pencarian memungkinkan pengguna mencari surah berdasarkan nama surah. Saat pengguna mengetik kata kunci pada kolom pencarian, daftar surah akan difilter secara otomatis sehingga memudahkan pengguna menemukan surah yang diinginkan dengan cepat.

---

## Fitur 4 — Riwayat Pencarian

**Role Penanggung Jawab:** `Backend & Frontend`

**Sumber Data:** `Internal System (Database MySQL)`

**Deskripsi & Ekspektasi:**
Setiap pencarian yang dilakukan pengguna akan disimpan ke dalam database. Pengguna dapat melihat daftar riwayat pencarian yang pernah dilakukan. Backend menyediakan API untuk menyimpan dan mengambil data riwayat pencarian, sedangkan frontend menampilkan data tersebut kepada pengguna.

---

## Fitur 5 — Jadwal Sholat

**Role Penanggung Jawab:** `Frontend & Backend`

**Sumber Data:** `Third-Party API — Aladhan Prayer Times API`

**Deskripsi & Ekspektasi:**
Fitur ini menampilkan jadwal waktu sholat harian seperti Subuh, Dzuhur, Ashar, Maghrib, dan Isya. Backend mengambil data jadwal sholat dari API Aladhan dan mengirimkannya ke frontend. Frontend menampilkan informasi jadwal sholat dalam bentuk yang mudah dibaca oleh pengguna.

---

## Fitur 6 — REST API Qur'an Digital

**Role Penanggung Jawab:** `Backend`

**Sumber Data:** `Internal System & Third-Party API`

**Deskripsi & Ekspektasi:**
Backend menyediakan REST API yang digunakan oleh frontend untuk mengakses data surah, detail surah, jadwal sholat, dan riwayat pencarian. API dibangun menggunakan Laravel dan menjadi penghubung utama antara frontend dengan sumber data eksternal maupun database internal.

---

## Fitur 7 — Integrasi dan Deployment Proyek

**Role Penanggung Jawab:** `DevOps`

**Sumber Data:** `GitHub Repository`

**Deskripsi & Ekspektasi:**
Fitur ini mencakup pengelolaan repository GitHub, integrasi kode dari frontend dan backend, serta persiapan deployment menggunakan Docker Compose. Tujuannya adalah memastikan seluruh komponen aplikasi dapat berjalan secara terintegrasi dan mudah dikelola oleh tim pengembang.
