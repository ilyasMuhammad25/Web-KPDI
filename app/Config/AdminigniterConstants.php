<?php
// session_start();

$supportLang = ['id', 'en'];
if (!empty($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
    $acceptLang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    $language = in_array($acceptLang, $supportLang) ? $acceptLang : 'id';
} else {
    $language = 'id';
}

define('WEB_LANG', isset($_SESSION['web_lang']) ? $_SESSION['web_lang'] : $language);

define('FORM_JUDUL', 'title');
define('FORM_PENGARANG', 'author');
define('FORM_SUBJEK', 'subject');
define('FORM_ISBN', 'subject');

define('FORM_TAHUN', 'publishyear');
define('FORM_CATALOGID', 'catalog_id');
define('FORM_BIBID', 'bibid');
define('FORM_NOMOR_PANGGIL', 'callnumber');
define('FORM_SEMUA', '');

define('FORM_JUDUL_LABEL', 'Judul');
define('FORM_PENGARANG_LABEL', 'Pengarang');
define('FORM_SUBJEK_LABEL', 'Subjek');
define('FORM_ISBN_LABEL', 'ISBN/ISMN/ISSN');

define('FORM_TAHUN_LABEL', 'Tahun Terbit');
define('FORM_CATALOGID_LABEL', 'Catalog ID');
define('FORM_BIBID_LABEL', 'BIB ID');
define('FORM_NOMOR_PANGGIL_LABEL', 'Nomor Panggil');
define('FORM_SEMUA_LABEL', 'Semua');

define('OPAC_SEMUA_KOLEKSI', '-1');

define('OPAC_NASKAH_KUNO', 12);
define('OPAC_BUKU_LANGKA', 1);
define('OPAC_PETA', 5);
define('OPAC_FOTO_GAMBAR_LUKISAN', 9);
define('OPAC_MAJALAH_SURAT_KABAR_LANGKA', 13);
define('OPAC_MIKRO_FILM', 11);
define('OPAC_SUMBER_LAINNYA', 0);

// Masuk dalam sumber lainnya
define('OPAC_FILM', 3);
define('OPAC_REKAMAN_VIDEO', 7);
define('OPAC_MUSIK', 8);
define('OPAC_REKAMAN_SUARA', 10);
define('OPAC_SUMBER_ELEKTRONIK', 20);
define('OPAC_BAHAN_GRAFIS', 21);

define('OPAC_SEMUA_KOLEKSI_LABEL', 'Semua Koleksi');
define('OPAC_NASKAH_KUNO_LABEL', 'Naskah Kuno');
define('OPAC_BUKU_LANGKA_LABEL', 'Buku Langka');
define('OPAC_PETA_LABEL', 'Peta');
define('OPAC_FOTO_GAMBAR_LUKISAN_LABEL', 'Foto, Gambar & Lukisan');
define('OPAC_MAJALAH_SURAT_KABAR_LANGKA_LABEL', 'Majalah & Surat Kabar Langka');
define('OPAC_MIKRO_FILM_LABEL', 'Mikro Film');
define('OPAC_SUMBER_LAINNYA_LABEL', 'Sumber Lainnya');