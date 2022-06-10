# WGadget

WGadget's API dibangun untuk mengintegrasikan data hp yang tersedia di server Website WGadget. API ini bisa dijalankan di Postman dan untuk menjalankannya diharapkan untuk membuka aplikasi xampp terlebih dahulu. Lalu, jalankan Apache dan MySQL. Selanjutnya, importlah file 'wgadget.sql' ke dalam database Anda.

Untuk melihat dokumentasi, Anda bisa mengimport file 'WGadget.postman_collection.json' ke dalam Postman atau bisa melihat dokumentasi di bawah ini.

## GET ../apiBrand/getAll
#### http://localhost/WGadget/public/apiBrand/getAll

Menampilkan semua data brand dapat dilakukan dengan cara memanggil perintah GET ../apiBrand/getAll. Perintah ini merupakan suatu method HTTP yang mengizinkan pengambilan data brand dari server Website WGadget.

#### Respon :
Jika method HTTP ini berhasil, maka server akan menampilkan pesan "Daftar brand behasil ditampilkan." dengan kode status 200.

## GET ../apiBrand/getOne/{id_brand}
#### http://localhost/WGadget/public/apiBrand/getOne/1

Menampilkan data brand dengan id tertentu dapat dilakukan dengan cara memanggil perintah GET ../apiBrand/getOne/{id_brand}. ID diinput oleh user ke dalam {id_brand} yang terletak pada url endpoint. GET ../apiBrand/getOne/{id_brand} mengizinkan pengambilan data brand dengan id tertentu dari server Website WGadget.

#### Respon :
- Jika method HTTP ini berhasil, maka server akan menampilkan pesan "Data brand dengan id {id_brand} behasil ditampilkan." dengan kode status 200.
- Jika id yang diinput oleh user tidak sesuai dengan data manapun, maka server akan menampilkan pesan "Data brand dengan id {id_brand} tidak ditemukan." dengan kode status 204.

## GET ../apiBrand/getBrand/{nama_brand}
#### http://localhost/WGadget/public/apiBrand/getBrand/samsung

Menampilkan data brand dengan nama tertentu dapat dilakukan dengan cara memanggil perintah GET ../apiBrand/getBrand/{nama_brand}. Nama brand diinput oleh user ke dalam {nama_brand} yang terletak pada url endpoint. GET ../apiBrand/getBrand/{nama_brand} mengizinkan pengambilan data brand dengan nama tertentu dari server Website WGadget.

#### Respon :
- Jika method HTTP ini berhasil, maka server akan menampilkan pesan "Data brand dengan nama {nama_brand} behasil ditampilkan." dengan kode status 200.
- Jika nama yang diinput oleh user tidak sesuai dengan data manapun, maka server akan menampilkan pesan "Data brand dengan nama {nama_brand} tidak ditemukan." dengan kode status 204.

## POST ../apiBrand/addOne
#### http://localhost/WGadget/public/apiBrand/addOne

Menambah data brand dapat dilakukan dengan cara memanggil perintah POST ../apiBrand/addOne. POST ../apiBrand/addOne mengizinkan user untuk menambahkan data brand ke dalam server Website WGadget. Penambahan data dapat dilakukan melalui tab Body dan pilih x-www-form-urlencode. Lalu tambahkan data dengan memasukkan parameter nama_brand.

#### Data :
nama_brand memiliki tipe data varchar(255).

#### Respon :
- Jika method HTTP ini berhasil, maka server akan menampilkan pesan "Data brand berhasil ditambahkan." dengan kode status 201.
- Jika nama_brand yang diinput sudah ada di dalam server Website WGadget, maka server akan menampilkan pesan "Brand sudah tersedia." dengan kode status 409.
- Jika nama_brand kosong, maka server akan menampilkan pesan "Nama brand tidak boleh kosong." dengan kode status 400.

## PUT ../apiBrand/updateOne/{id_brand}
#### http://localhost/WGadget/public/apiBrand/updateOne/10

Memperbarui data brand dengan id tertentu dapat dilakukan dengan cara memanggil perintah PUT ../apiBrand/updateOne/{id_brand}. ID diinput oleh user ke dalam {id_brand} yang terletak pada url endpoint. PUT ../apiBrand/updateOne/{id_brand} mengizinkan user untuk memperbarui data brand yang terdapat di dalam server Website WGadget. Pembaruan data dapat dilakukan melalui tab Body dan pilih x-www-form-urlencode. Lalu perbarui data dengan memasukkan parameter nama_brand.

#### Data :
nama_brand memiliki tipe data varchar(255)

##### Respon :
- Jika method HTTP ini berhasil, maka server akan menampilkan pesan "Data brand berhasil diperbarui." dengan kode status 200.
- Jika nama_brand yang diinput sudah ada di dalam server Website WGadget, maka server akan menampilkan pesan "Brand sudah tersedia." dengan kode status 409.
- Jika nama_brand kosong, maka server akan menampilkan pesan "Nama brand tidak boleh kosong." dengan kode status 400.

## DEL ../apiBrand/deleteOne/{id_brand}
#### http://localhost/WGadget/public/apiBrand/deleteOne/10

Menghapus data Brand dengan id tertentu dapat dilakukan dengan cara memanggil perintah DELETE ../apiBrand/deleteOne/{id_brand}. ID diinput oleh user ke dalam {id_brand} yang terletak pada url endpoint. DELETE ../apiBrand/deleteOne/{id_brand} mengizinkan user untuk menghapus data brand yang terdapat di dalam server Website WGadget.

#### Respon :
- Jika method HTTP ini berhasil, maka server akan menampilkan pesan "Data brand berhasil dihapus" dengan kode status 200.
- Jika id yang dimasukkan oleh user tidak sesuai dengan data manapun, maka server akan menampilkan pesan "Data brand dengan id {id_brand} tidak ditemukan." dengan kode status 204.

#### Catatan :
Apabila data suatu brand dihapus, maka data pencarian dan data hp yang dimiliki brand tersebut beserta spesifikasinya akan ikut terhapus, karena id_brand pada tabel_pencarian, tabel_spek, dan tabel_hp merupakan foreign key.

## GET ../apiHp/getAll
#### http://localhost/WGadget/public/apiHp/getAll

Menampilkan semua data hp dapat dilakukan dengan cara memanggil perintah GET ../apiHp/getAll. Perintah ini merupakan suatu method HTTP yang mengizinkan pengambilan data hp dari server Website WGadget.

#### Respon :
Jika method HTTP ini berhasil, maka server akan menampilkan pesan "Daftar hp behasil ditampilkan." dengan kode status 200.

## GET ../apiHp/getOne/{id_hp}
#### http://localhost/WGadget/public/apiHp/getOne/1

Menampilkan data hp dengan id tertentu dapat dilakukan dengan cara memanggil perintah GET ../apiHp/getOne/{id_hp}. ID diinput oleh user ke dalam {id_hp} yang terletak pada url endpoint. GET ../apiHp/getOne/{id_hp} mengizinkan pengambilan data hp dengan id tertentu dari server Website WGadget.

#### Respon :
- Jika method HTTP ini berhasil, maka server akan menampilkan pesan "Data hp dengan id {id_hp} behasil ditampilkan." dengan kode status 200.
- Jika id yang diinput oleh user tidak sesuai dengan data manapun, maka server akan menampilkan pesan "Data hp dengan id {id_hp} tidak ditemukan." dengan kode status 204.

## GET ../apiHp/getHp/{nama_hp}
#### http://localhost/WGadget/public/apiHp/getHp/iPhone 13

Menampilkan data hp dengan nama tertentu dapat dilakukan dengan cara memanggil perintah GET ../apiHp/getHp/{nama_hp}. Nama hp diinput oleh user ke dalam {nama_hp} yang terletak pada url endpoint. GET ../apiHp/getHp/{nama_hp} mengizinkan pengambilan data hp dengan nama tertentu dari server Website WGadget.

#### Respon :
- Jika method HTTP ini berhasil, maka server akan menampilkan pesan "Data hp dengan nama {nama_hp} behasil ditampilkan." dengan kode status 200.
- Jika nama yang diinput oleh user tidak sesuai dengan data manapun, maka server akan menampilkan pesan "Data hp dengan nama {nama_hp} tidak ditemukan." dengan kode status 204.

## GET ../apiHp/getBrand/{nama_brand}
#### http://localhost/WGadget/public/apiHp/getBrand/samsung

Menampilkan data hp dengan brand tertentu dapat dilakukan dengan cara memanggil perintah GET ../apiHp/getBrand/{nama_brand}. Nama brand diinput oleh user ke dalam {nama_brand} yang terletak pada url endpoint. GET ../apiHp/getBrand/{nama_brand} mengizinkan pengambilan data hp dengan brand tertentu dari server Website WGadget.

#### Respon :
- Jika method HTTP ini berhasil, maka server akan menampilkan pesan "Daftar hp dengan brand {nama_brand} berhasil ditampilkan." dengan kode status 200.
- Jika nama yang diinput oleh user tidak sesuai dengan data manapun, maka server akan menampilkan pesan "Tidak ada hp dengan brand {nama_brand}." dengan kode status 204.

## POST ../apiHp/addOne
#### http://localhost/WGadget/public/apiHp/addOne

Menambah data hp dapat dilakukan dengan cara memanggil perintah POST ../apiHp/addOne. POST ../apiHp/addOne mengizinkan user untuk menambahkan data hp ke dalam server Website WGadget. Penambahan data dapat dilakukan melalui tab Body dan pilih x-www-form-urlencode. Lalu tambahkan data dengan memasukkan parameter id_brand, nama_hp, foto_hp, tgl_rilis, ukuran_layar, sistem_operasi, chipset, memori, daya_baterai, kamera, jaringan, harga, dan warna.

#### Data :
- id_brand merupakan foreign key sehingga apabila id_brand yang diinput tidak terdapat di dalam database, maka penambahan hp gagal. id_brand memiliki tipe data int(11).
- nama_hp memiliki tipe data varchar(255).
- foto_hp memiliki tipe data varchar(255).
- tgl_rilis memiliki tipe data date dan format penulisannya : YYYY-MM-DD.
- ukuran_layar memiliki tipe data float.
- sistem_operasi memiliki tipe data varchar(255).
- chipset memiliki tipe data varchar(255).
- memori memiliki tipe data varchar(255) dengan format penulisan : X GB RAM dan X GB Memori Internal.
- daya_baterai memiliki tipe data int(11).
- kamera memiliki tipe data varchar(255) dengan format penulisan : Kamera Depan X MP, Kamera Belakang X MP.
- jaringan memiliki tipe data varchar(255).
- harga memiliki tipe data int(11).
- warna memiliki tipe data text.

#### Respon :
- Jika method HTTP ini berhasil, maka server akan menampilkan pesan "Data hp berhasil ditambahkan." dengan kode status 201.
- Jika hp yang ditambahkan sudah ada di dalam server Website WGadget, maka server akan menampilkan pesan "Hp sudah tersedia." dengan kode status 409.
- Jika salah satu data kosong, maka server akan menampilkan pesan "Data tidak boleh kosong." dengan kode status 400.
- Jika id_brand yang diinput tidak sesuai dengan data manapun di dalam database server, maka server akan menampilkan pesan "Brand dengan id {id_brand} tidak ditemukan." dengan kode status 204.

## PUT ../apiHp/updateOne
#### http://localhost/WGadget/public/apiHp/updateOne/46

Memperbarui data hp dengan id tertentu dapat dilakukan dengan cara memanggil perintah PUT ../apiHp/updateOne/{id_hp}. ID diinput oleh user ke dalam {id_hp} yang terletak pada url endpoint. PUT ../apiHp/updateOne/{id_hp} mengizinkan user untuk memperbarui data hp yang terdapat di dalam server Website WGadget. Pembaruan data dapat dilakukan melalui tab Body dan pilih x-www-form-urlencode. Lalu perbarui data dengan memasukkan parameter id_brand, nama_hp, foto_hp, tgl_rilis, ukuran_layar, sistem_operasi, chipset, memori, daya_baterai, kamera, jaringan, harga, dan warna.

#### Data :
- id_brand merupakan foreign key sehingga apabila id_brand yang diinput tidak terdapat di dalam database, maka penambahan hp gagal. id_brand memiliki tipe data int(11).
- nama_hp memiliki tipe data varchar(255).
- foto_hp memiliki tipe data varchar(255).
- tgl_rilis memiliki tipe data date dan format penulisannya : YYYY-MM-DD.
- ukuran_layar memiliki tipe data float.
- sistem_operasi memiliki tipe data varchar(255).
- chipset memiliki tipe data varchar(255).
- memori memiliki tipe data varchar(255) dengan format penulisan : X GB RAM dan X GB Memori Internal.
- daya_baterai memiliki tipe data int(11).
- kamera memiliki tipe data varchar(255) dengan format penulisan : Kamera Depan X MP, Kamera Belakang X MP.
- jaringan memiliki tipe data varchar(255).
- harga memiliki tipe data int(11).
- warna memiliki tipe data text.

#### Respon :
- Jika method HTTP ini berhasil, maka server akan menampilkan pesan "Data hp berhasil diperbarui." dengan kode status 200.
- Jika hp yang ditambahkan sudah ada di dalam server Website WGadget, maka server akan menampilkan pesan "Hp sudah tersedia." dengan kode status 409.
- Jika salah satu data kosong, maka server akan menampilkan pesan "Data tidak boleh kosong." dengan kode status 400.
- Jika id_brand yang diinput tidak sesuai dengan data manapun di dalam database server, maka server akan menampilkan pesan "Brand dengan id {id_brand} tidak ditemukan." dengan kode status 204.

## DEL ../apiHp/deleteOne/{id_hp}
#### http://localhost/WGadget/public/apiHp/deleteOne/46

Menghapus data Hp dengan id tertentu dapat dilakukan dengan cara memanggil perintah DELETE ../apiHp/deleteOne/{id_hp}. ID diinput oleh user ke dalam {id_hp} yang terletak pada url endpoint. DELETE ../apiHp/deleteOne/{id_hp} mengizinkan user untuk menghapus data hp yang terdapat di dalam server Website WGadget.

#### Respon :
- Jika method HTTP ini berhasil, maka server akan menampilkan pesan "Data hp berhasil dihapus" dengan kode status 200.
- Jika id yang dimasukkan oleh user tidak sesuai dengan data manapun, maka server akan menampilkan pesan "Data hp dengan id {id_hp} tidak ditemukan." dengan kode status 204.

#### Catatan :

Apabila data suatu hp dihapus, maka data pencarian dan spesifikasi dari hp tersebut akan ikut terhapus, karena id_hp pada tabel_pencarian dan tabel_spek merupakan foreign key.

## GET ../apiInterest/getAll
#### http://localhost/WGadget/public/apiInterest/getAll

Menampilkan data hp yang paling diminati oleh user dapat dilakukan dengan cara memanggil perintah GET ../apiInterest/getAll. Perintah ini merupakan suatu method HTTP yang mengizinkan pengambilan data 18 besar hp yang paling diminati oleh user dari server Website WGadget.

#### Respon :
Jika method HTTP ini berhasil, maka server akan menampilkan pesan "Daftar hp yang paling diminati behasil ditampilkan." dengan kode status 200. Namun, jika database masih kosong, maka server akan menampilkan pesan "Belum ada data yang tersedia." dengan kode status 204.

## GET ../apiSearch/getSearch/{kata_kunci}
#### http://localhost/WGadget/public/apiSearch/getSearch/samsung

Menampilkan data pencarian dapat dilakukan dengan cara memanggil perintah GET ../apiSearch/getSearch/{kata_kunci}. Perintah ini merupakan suatu method HTTP yang mengizinkan pencarian data hp dari server Website WGadget dengan memasukkan kata kunci tertentu yang dapat berupa nama hp ataupun nama brand.

#### Respon :
Jika method HTTP ini berhasil, maka server akan menampilkan pesan "Daftar pencarian behasil ditampilkan." dengan kode status 200. Namun, jika data yang dicari tidak ditemukan, maka server akan menampilkan pesan "Tidak ada data yang ditemukan." dengan kode status 204.
