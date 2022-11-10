CREATE DATABASE fakultas; 

CREATE TABLE jurusan (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    kode CHAR(4) NOT NULL,
    nama VARCHAR(50) NOT NULL
);  


CREATE TABLE mahasiswa (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    id_jurusan INTEGER NOT NULL,
    nim CHAR(8) NOT NULL,
    nama VARCHAR(50) NOT NULL,
    jenis_kelamin enum('laki-laki', 'perempuan') NOT NULL, 
    tempat_lahir VARCHAR(50) NOT NULL,
    tanggal_lahir DATE NOT NULL,
    alamat VARCHAR(255) NOT NULL, 
    FOREIGN KEY (id_jurusan) REFERENCES jurusan (id)
);

-- memasukkan data jurusan
insert into jurusan (kode,nama) values ('KRTF','Manajemen');
insert into jurusan (kode,nama) values ('LGRI','Teknik Informatika');

-- memasukkan data mahasiswa
insert into mahasiswa (id_jurusan, nim, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat)
values (1,'20200004', 'Hasna', 'Perempuan', 'Blitar', '1998-11-23', 'Jl. Mastrip 09');
insert into mahasiswa (id_jurusan, nim, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat)
values (2,'20190002', 'Diaz', 'laki-laki', 'Malang', '1998-05-26', 'Jl. Soekarno Hatta 67');

-- update data mahasiswa
update mahasiswa set tempat_lahir = "Malang" where id = 1;

-- delete data mahasiswa
delete from mahasiswa where id=2; 