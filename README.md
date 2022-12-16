# EDWARD_03081200026_2OSI2_UAS_BAP
 PROJECT UAS BAP


## Data Diri | UJIAN AKHIR SEMESTER (UAS)
Nama        : EDWARD
Nim         : 03081200026
Kelas       : 20SI2
Mata Kuliah : Business Application Programming (BAP)

# No 1
Soal:
Tambahkan satu buah table pada web aplikasi kemudian buatlah halaman CRUD dengan menggunakan CRUD generator, serta tambahkan menu untuk mengakses table tersebut pada sidebar(30poin).

Jawaban:
Saya menambahkan table voucher discount. 

# No 2
Soal:
Buatlah sebuah view untuk melakukan analisis data yang relevan dengan topik final project anda, simpan query view tersebut kedalam file queryUAS.sql(20poin).

Jawaban:
Query view dapat terlihat di sidebar Voucher discount.

# No 3
Soal: 
Buatlah sebuah antarmuka untuk menampilkan view pada soal 2, kemudian tambahkan tombol untuk mencetaknya kedalam format laporan pdf. Sertakan logo UPH dan nama berserta studentID anda pada header laporan (30)

Jawaban:
di http://127.0.0.1:8000/admin/discount yang dimana terdapat button Print PDF. Laporan itu akan mengenerate menjadi Laporan PDF dan akan otomatis terdownload.


## No 4
Soal:
Buat validasi data untuk halaman insert dan update soal nomor 1 (10 Poin)

Jawaban:
Dimana untuk kolom 'Voucher' tidak boleh kosong dan juga max 30 karakter.
Code Validasi dapat dilihat dibawah ini:

            $validated = $request->validate([
                'voucher' => 'required|max:30',
            ]);

## No 5
Soal: Simpan kode program beserta queryUAS.sql ke public repository github.
Link Github: 
https://github.com/EdwardPY/EDWARD_03081200026_2OSI2_UAS_BAP.git