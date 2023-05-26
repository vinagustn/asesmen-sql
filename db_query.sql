create table petugas (
	id_petugas int primary key not null,
	username varchar(10) unique not null,
    password varchar(200) not null,
	name varchar(200),
	nomor_hp varchar(13),
	alamat varchar(200)
);

create table anggota (
	id_anggota int primary key not null,
	nama varchar(200),
	jenis_kelamin char,
	nomor_hp varchar(13),
	alamat varchar(200),
    fk_idPetugas int,
    foreign key (fk_idPetugas) references petugas(id_petugas)
);

create table buku(
	id_buku int not null primary key,
	judul varchar(200),
    pengarang varchar(200),
	deskripsi varchar(200),
	fk_idPetugas int,
    foreign key (fk_idPetugas) references petugas(id_petugas)
);

create table peminjaman(
	id_pinjam int not null primary key,
	tgl_pinjam datetime,
	fk_idPetugas int,
	fk_idAnggota int,
	fk_idBuku int,
    foreign key (fk_idPetugas) references petugas(id_petugas),
    foreign key (fk_idAnggota) references anggota(id_anggota),
    foreign key (fk_idBuku) references buku(id_buku)
);

insert into petugas values
	(1, 'vinagustn', 'vinagustn', 'Vina Agustina','088888888', 'Kutoarjo'),
    (2, 'saraswati', 'saraswati', 'Sartika Saraswati','0887661218', 'Tangerang'),
    (3, 'biilyjosh', 'billyjosh', 'Joshua Billy','09127612533', 'Purbalingga')
;

insert into anggota values
	(1, 'Vina Agustina', 'P', '088888888', 'Kutoarjo', 1),
    (2, 'Sartika Saraswati', 'P','0887661218', 'Tangerang', 3),
    (3, 'Joshua Billy', 'L', '09127612533', 'Purbalingga', 3)
;

insert into buku values
	(1, 'Bukuku', 'Pina', 'Tentang Bukunya Pina', 1),
    (2, 'Tentang Semuanya', 'Ngarang','Tentang semua yang diketahui oleh pengarang', 3),
    (3, 'Hidupku', 'Lemah', 'Tentang hidup yang dijalani lemah', 2)
;

insert into peminjaman values
	(1, '2022-06-26 12:00:00', 2, 3, 1),
    (2, '2021-08-11 13:04:00', 3, 2, 3),
    (3, '2023-04-11 18:30:00', 1, 3, 2)
;

-- delimiter //
CREATE PROCEDURE anggota_perempuan()
BEGIN 
	SELECT * FROM anggota WHERE jenis_kelamin = 'P';
END;

-- delimiter //
CALL anggota_perempuan();

CREATE TABLE pinjam_log(
	id_log int,
    tgl_pinjam_lama datetime,
    tgl_pinjam_baru datetime,
	fk_idPetugas_lama int,
    fk_idPetugas_baru int,
	fk_idAnggota_lama int,
    fk_idAnggota_baru int,
	fk_idBuku_lama int,
    fk_idBuku_baru int,
    waktu_ubah date
);

-- delimiter //
CREATE TRIGGER trg_pinjam
	AFTER UPDATE
    ON peminjaman 
    FOR EACH ROW
BEGIN
	INSERT INTO pinjam_log
    SET tgl_pinjam_lama = old.tgl_pinjam,
    tgl_pinjam_baru = new.tgl_pinjam,
	fk_idPetugas_lama = old.fk_idPetugas,
    fk_idPetugas_baru = new.fk_idPetugas,
	fk_idAnggota_lama = old.fk_idAnggota,
    fk_idAnggota_baru = new.fk_idAnggota,
	fk_idBuku_lama = old.fk_idBuku,
    fk_idBuku_baru = new.fk_idBuku,
    waktu_ubah = NOW();
END;

UPDATE peminjaman SET 
	tgl_pinjam = '2023-03-12 19:05:00',
    fk_idPetugas = 2,
    fk_idAnggota = 3,
	fk_idBuku = 3
where fk_idAnggota = 3;

SELECT * FROM pinjam_log;

CREATE USER 'vinagustn'@'localhost';
CREATE USER 'vivinava'@'localhost' IDENTIFIED BY 'password';

GRANT SELECT ON *.* TO 'vinagustn'@'localhost';
GRANT ALL ON *.* TO 'vinagustn'@'localhost';
    
	








