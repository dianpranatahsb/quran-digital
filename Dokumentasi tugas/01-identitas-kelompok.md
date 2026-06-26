# Identitas Kelompok

---

**Nama Kelompok:** `Kelompok 8`

**Nama Proyek / Aplikasi:** `Qur'an Digital`

**Jumlah Anggota:** `3 Orang`

**Repositori:** `https://github.com/dianpranatahsb/quran-digital`

---

# Anggota & Role

### Anggota 1

- Nama Lengkap: `Dian Pranata Hasibuan`
- NIM: `230705095`
- Role: `DevOps`
- Teknologi: `GitHub, Docker Compose, Git, Deployment`

### Anggota 2

- Nama Lengkap: `Muhammad Fauzan`
- NIM: `230705072`
- Role: `Frontend Developer`
- Teknologi: `React.js, Vite, React Router, Axios, Tailwind CSS`

### Anggota 3

- Nama Lengkap: `Muhammad Aji Mukti`
- NIM: `230705086`
- Role: `Backend Developer`
- Teknologi: `Laravel 12, REST API, MySQL, External API`

---

# Stack Teknologi

### Frontend

`React.js + Vite`

Digunakan untuk membangun antarmuka pengguna (UI) aplikasi Qur'an Digital yang responsif dan interaktif.

### Backend

`Laravel 12`

Digunakan untuk membangun REST API yang menyediakan data surah, detail surah, jadwal sholat, dan riwayat pencarian.

### Database

`MySQL`

Digunakan untuk menyimpan data riwayat pencarian pengguna.

### DevOps / Infrastruktur

`GitHub, Docker Compose`

Digunakan untuk kolaborasi pengembangan, version control, serta persiapan deployment aplikasi.

---

# Arsitektur Aplikasi

Proyek Qur'an Digital menggunakan arsitektur client-server yang terdiri dari aplikasi frontend dan backend yang saling berkomunikasi melalui REST API.

Frontend bertugas menampilkan antarmuka pengguna dan mengirim permintaan data ke backend. Backend memproses permintaan tersebut, mengambil data dari API eksternal maupun database, kemudian mengembalikan respons dalam format JSON.

---

## Aplikasi 1 — Frontend

- Nama Aplikasi: `Qur'an Digital Frontend`
- Deskripsi Singkat:
  Aplikasi berbasis React yang menampilkan daftar surah Al-Qur'an, detail surah, fitur pencarian surah, riwayat pencarian, serta jadwal sholat.
- Berkomunikasi dengan:
  `Laravel REST API (Backend)`

---

## Aplikasi 2 — Database

- Nama Aplikasi / Service: `MySQL Database`
- Deskripsi Singkat:
  Database yang digunakan untuk menyimpan data riwayat pencarian pengguna.
- Digunakan oleh:
  `Backend Laravel`

---

## Aplikasi 3 — Backend (Laravel)

- Nama Aplikasi / Service: `Qur'an Digital API`
- Deskripsi Singkat:
  Backend berbasis Laravel yang menyediakan endpoint REST API untuk daftar surah, detail surah, jadwal sholat, dan pengelolaan riwayat pencarian.
- Menyediakan layanan untuk:
  `Frontend React.js`
