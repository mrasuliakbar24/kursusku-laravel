# Tabel Pengujian Praktikum Pertemuan 11

Course CRUD Lanjutan (Show, Form Request, Edit/Update, Delete) - Proyek KursusKu

| No. | Skenario Pengujian | Data Uji | Hasil yang Diharapkan | Actual | Status | Bukti |
|---|---|---|---|---|---|---|
| 1 | Menambah kursus valid | Semua data valid | Kursus berhasil ditambahkan | | Pass | |
| 2 | Kode kursus duplikat | Kode yang sudah ada | Validasi menolak data | Ditolak; pesan "The code has already been taken." tampil di bawah field Kode | Pass | `04-validation-duplicate-code.png` |
| 3 | Nama kursus kosong | Nama dikosongkan | Validasi menolak data | | Belum diuji | |
| 4 | Nama kursus terlalu pendek | Nama 2 karakter | Validasi menolak data | | Belum diuji | |
| 5 | Biaya negatif | -1000 | Validasi menolak data | | Belum diuji | |
| 6 | Biaya bukan bilangan bulat | 1000.5 | Validasi menolak data | | Belum diuji | |
| 7 | Kuota nol | 0 | Validasi menolak data | | Belum diuji | |
| 8 | Kuota melebihi batas | 501 | Validasi menolak data | | Pass | `05-validation-quota-501.png` |
| 9 | Kuota minimum | 1 | Data diterima | | Belum diuji | |
| 10 | Kuota maksimum | 500 | Data diterima | | Belum diuji | |
| 11 | Tanggal tidak valid | Tanggal salah | Validasi menolak data | | Belum diuji | |
| 12 | Status tidak valid | active | Validasi menolak data | | Belum diuji | |
| 13 | Update dengan kode sendiri | Kode tidak diubah | Update berhasil | | Belum diuji | `06-update-success.png` |
| 14 | Update memakai kode kursus lain | Kode duplikat | Validasi menolak data | | Pass | |
| 15 | Hapus kursus percobaan | TEST-DEL-01 | Kursus terhapus | | Pass | `07-delete-success.png` |

Catatan: Ubah status pengujian sesuai hasil yang benar-benar diperoleh. Jangan menandai pengujian sebagai berhasil jika belum dilakukan. Minimal 12 kasus harus tercatat.