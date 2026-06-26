# API Specification

> Dokumentasikan setiap endpoint yang dikembangkan maupun yang dikonsumsi dari layanan eksternal.
> Salin dan ulangi blok di bawah untuk setiap endpoint tambahan.

---

## Get List of Hadith Books

**Method:** `GET`

**URL:** `/api/v1/hadith/books`

**Deskripsi:** `Mengambil daftar seluruh kitab atau perawi hadis yang tersedia di dalam database sistem (dikonsumsi dari Sunnah AmanahAgent / Public Hadith API).`

**Autentikasi Diperlukan:** `Tidak`

**Sumber:** `[Third-Party API — Sunnah AmanahAgent API]`

**Request Headers:**

```
Content-Type:application/json
X-API-Key:<key>
```

**Request Body:**

```json
{ "q": "keutamaan sholat", "type": "hadith", "limit": 3 }
```

**Response Sukses (`200 OK`):**

```json
{
  "results": [
    {
      "hadith_key": "ibnmajah:1019",
      "collection_name": "Sunan Ibn Majah",
      "text_indonesian": "Telah menceritakan kepada kami [Ahmad bin Sa'id Ad Darimi] berkata, telah menceritakan kepada kami [An Nadlr bin Syumail] berkata, telah menceritakan kepada kami [Yunus bin Abu Ishaq] dari [Abu Ishaq] dari [Abu Al Ahwash] dari [Abdullah] ia berkata, \"Ketika shalat kami memberi shalat, \" lalu dikatakan kepada kami: \"Sesungguhnya dalam shalat ada kesibukan",
      "grades": "[{\"name\": \"Al-Albani\", \"grade\": \"Sahih\"}, {\"name\": \"Muhammad Fouad Abd al-Baqi\", \"grade\": \"Sahih\"}, {\"name\": \"Zubair Ali Zai\", \"grade\": \"Isnaad Hasan\"}]",
      "similarity": 0.6214635253979109,
      "_type": "hadith"
    }
  ],
  "method": "vector",
  "total": 1
}
```

**Response Gagal:**

```
-
```

---

## Get Hadith by Number

**Method:** `GET`

**URL:** `/api/v1/hadith/books/{book_id}/{hadith_number}`

**Deskripsi:** Mengambil konten teks hadis spesifik (teks Arab dan terjemahan Indonesia) berdasarkan ID Kitab dan nomor hadis.

**Autentikasi Diperlukan:** `Tidak`

**Sumber:** `Third-Party API — Sunnah AmanahAgent API`

**Request Headers:**

```
Content-Type:application/json
X-API-Key:<Key>
```

**Request Body:** `-`

````json
{"q": "hadith yang melarang kita mencuri", "type": "hadith", "limit": 3}

**Response Sukses (`200 OK`):**
```json
{
    "results": [
        {
            "hadith_key": "ibnmajah:1979",
            "collection_name": "Sunan Ibn Majah",
            "text_indonesian": "Telah menceritakan kepada kami [Hisyam bin Ammar] berkata, telah menceritakan kepada kami [Sufyan bin Uyainah] dari [Hisyam bin Urwah] dari [Bapaknya] dari ['Aisyah] ia berkata, \"Nabi shallallahu 'alaihi wasallam mendahuluiku, lalu aku ganti mendahuluinya",
            "grades": "[{\"name\": \"Al-Albani\", \"grade\": \"Sahih\"}, {\"name\": \"Muhammad Fouad Abd al-Baqi\", \"grade\": \"Sahih\"}, {\"name\": \"Shuaib Al Arnaut\", \"grade\": \"Sahih\"}, {\"name\": \"Zubair Ali Zai\", \"grade\": \"Sahih\"}]",
            "similarity": 0.7411721236388926,
            "_type": "hadith"
        },
        {
            "hadith_key": "bukhari:105",
            "collection_name": "Sahih al-Bukhari",
            "text_indonesian": "Telah menceritakan kepada kami ['Abdullah bin 'Abdul Wahhab] berkata, telah menceritakan kepada kami [Hammad] dari [Ayyub] dari [Muhammad] dari [Ibnu Abu Bakrah] dari [Abu Bakrah] Nabi shallallahu 'alaihi wasallam menyebutkan: \"Sesungguhnya darah kalian, harta kalian, Muhammad berkata; menurutku beliau mengatakan, \"dan kehormatan kalian adalah haram atas kalian sebagaimana haramnya hari kalian ini di bulan kalian ini. Hendaklah yang hadir menyampaikan kepada yang tidak hadir.\" Dan Muhammad berkata, \"Benarlah Rasulullah shallallahu 'alaihi wasallam seperti apa yang disabdakannya, 'Bukankah aku telah menyampaikannya? ' beliau ulangi hingga dua kali",
            "grades": null,
            "similarity": 0.7400908464752273,
            "_type": "hadith"
        },
        {
            "hadith_key": "muslim:6690",
            "collection_name": "Sahih Muslim",
            "text_indonesian": "Telah menceritakan kepadaku [Abu Ghassan Al Misma'i]; Telah menceritakan kepada kami ['Utsman bin 'Umar]; Telah menceritakan kepada kami [Abu 'Amir] yaitu Al Khazzaz dari [Abu 'Imran Al Jauni] dari ['Abdullah bin Ash Shamit] dari [Abu Dzar] dia berkata; Nabi shallallahu 'alaihi wasallam berkata kepadaku: \"Janganlah kamu menganggap remeh sedikitpun terhadap kebaikan, walaupun kamu hanya bermanis muka kepada saudaramu (sesama muslim) ketika bertemu",
            "grades": null,
            "similarity": 0.739011649126875,
            "_type": "hadith"
        }
    ],
    "method": "vector",
    "total": 3
}
````

**Response Gagal:**

```
-
```

---

## Search Hadith by Keyword

**Method:** `GET`

**URL:** `/api/v1/hadith/search`

**Deskripsi:** `Melakukan pencarian hadis di seluruh kitab atau kitab tertentu berdasarkan kata kunci atau query parameter yang dikirim oleh user.`

**Autentikasi Diperlukan:** `Tidak`

**Sumber:** `Third-Party API — Sunnah AmanahAgent API`

**Request Headers:**

```
Content-Type:application/json
X-API-Key:<key>
```

**Request Body:**

```json

 -

```

**Response Sukses (`200 OK`):**

```json
{
  "status": "success",
  "data": {
    "query": "niat",
    "total_results": 1,
    "results": [
      {
        "book_id": "bukhari",
        "hadith_number": 1,
        "snippet": "...Sesungguhnya setiap amalan bergantung pada niatnya..."
      }
    ]
  }
}
```

**Response Gagal:**

```
{
  "status": "error",
  "message": "Search query parameter is required"
}
```

---

## Get Daily Random Hadith

**Method:** `GET`

**URL:** `/api/v1/hadith/random`

**Deskripsi:** `Menghasilkan satu hadis acak (Random Hadith) yang berubah setiap hari/request untuk dijadikan konten motivasi harian bagi pengguna.`

**Autentikasi Diperlukan:** `Tidak`

**Sumber:** `Third-Party API — Sunnah AmanahAgent API`

**Request Headers:**

```
Content-Type:application/json
X-API-Key:<key>
```

**Request Body:**

```json

 -

```

**Response Sukses (`200 OK`):**

```json
{
  "status": "success",
  "data": {
    "book_name": "Shahih Muslim",
    "number": 242,
    "arab": "الدِّينُ النَّصِيحَةُ...",
    "id_translation": "Agama itu adalah nasihat..."
  }
}
```

**Response Gagal:**

```
{
  "status": "error",
  "message": "Internal gateway timeout while fetching random data"
}
```

---

## Bookmark Hadith (Save to Favorites)

**Method:** `POST`

**URL:** `/api/v1/hadith/bookmarks`

**Deskripsi:** `Menyimpan hadis pilihan user ke dalam sistem database lokal aplikasi kita (Internal System) agar user dapat membacanya kembali di halaman profil/favorit mereka.`

**Autentikasi Diperlukan:** `Ya`

**Sumber:** `Internal System`

**Request Headers:**

```
Content-Type:application/json
X-API-Key:<key>
```

**Request Body:**

```json
{
  "book_id": "string",
  "hadith_number": "integer",
  "notes": "string (optional)"
}
```

**Response Sukses (`200 OK`):**

```json
{
  "status": "success",
  "message": "Hadith successfully bookmarked",
  "data": {
    "bookmark_id": 105,
    "user_id": 12,
    "book_id": "bukhari",
    "hadith_number": 1,
    "bookmarked_at": "2026-06-05T11:17:00Z"
  }
}
```

**Response Gagal:**

```
{
  "status": "error",
  "message": "Unauthorized access. Token invalid or expired."
}
```
