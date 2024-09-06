CREATE DATABASE berita_acara;

USE berita_acara;

CREATE TABLE acara (
    id INT AUTO_INCREMENT PRIMARY KEY,
    judul VARCHAR(255),
    deskripsi TEXT,
    tanggal DATE,
    gambar VARCHAR(255)
);
