use aplikasi_peminjaman_atk_mobil;

create table user(
    kode_user VARCHAR(10) not null primary key ,
    nama VARCHAR(200) not null ,
    alamat VARCHAR(200) not null ,
    no_hp CHAR(15) not null ,
    username VARCHAR(50) not null ,
    password VARCHAR(300) not null ,
    role enum("Admin", "Karyawan") not null
);


