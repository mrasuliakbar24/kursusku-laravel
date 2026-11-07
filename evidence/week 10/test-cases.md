# TEST CASES – PRAKTIKUM PERTEMUAN 10

**Nama Proyek:** KursusKu  
**Materi:** Laravel Database & CRUD I  
**Fitur yang diuji:** Create dan Read Data Kursus

| ID | Skenario Pengujian | Data/Input Pengujian | Hasil yang Diharapkan | Hasil Aktual | Status |
|---|---|---|---|---|---|
| TC-01 | Menambahkan data kursus dengan input valid | Kode: TEST-101, Nama: Kursus Testing, Biaya: 300000, Kuota: 20, Tanggal: valid, Status: open | Data berhasil disimpan dan muncul pada halaman daftar kursus. | Belum diuji | Pending |
| TC-02 | Menambahkan kode kursus yang sudah digunakan | Kode: WEB-101 | Sistem menolak data karena kode kursus sudah terdaftar. | Belum diuji | Pending |
| TC-03 | Mengosongkan kode kursus | Kode dikosongkan | Sistem menampilkan pesan validasi bahwa kode wajib diisi. | Belum diuji | Pending |
| TC-04 | Mengosongkan nama kursus | Nama dikosongkan | Sistem menampilkan pesan validasi bahwa nama wajib diisi. | Belum diuji | Pending |
| TC-05 | Memasukkan biaya negatif | Biaya: -1000 | Sistem menolak input karena biaya tidak boleh kurang dari 0. | Belum diuji | Pending |
| TC-06 | Memasukkan biaya desimal | Biaya: 1000.5 | Sistem menolak input karena biaya harus berupa bilangan bulat. | Belum diuji | Pending |
| TC-07 | Memasukkan kuota nol | Kuota: 0 | Sistem menolak input karena kuota minimal adalah 1. | Belum diuji | Pending |
| TC-08 | Memasukkan kuota melebihi batas | Kuota: 501 | Sistem menolak input karena kuota maksimal adalah 500. | Belum diuji | Pending |

## Kesimpulan

Pengujian dilakukan untuk memastikan fitur penambahan dan penampilan data kursus berjalan sesuai aturan validasi yang telah diterapkan pada CourseController.

Hasil aktual dan status pengujian diisi setelah setiap test case dijalankan pada aplikasi KursusKu.

**Keterangan Status:**
- Pass: Hasil aktual sesuai dengan hasil yang diharapkan.
- Fail: Hasil aktual tidak sesuai dengan hasil yang diharapkan.
- Pending: Pengujian belum dilakukan.