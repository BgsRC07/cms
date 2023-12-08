-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2023 at 05:25 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `carousel`
--

CREATE TABLE `carousel` (
  `id_carousel` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carousel`
--

INSERT INTO `carousel` (`id_carousel`, `judul`, `foto`) VALUES
(11, 'Proklamasi Kemerdekaan Indonesia', '20231203141313.jpg'),
(13, 'Keris', '20231203171726.jpg'),
(14, 'OnePiece', '20231203171919.jpg'),
(15, 'tiwul', '20231203172317.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(11, 'Sejarah'),
(13, 'Anime'),
(14, 'Bjawa');

-- --------------------------------------------------------

--
-- Table structure for table `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id_konfigurasi` int(11) NOT NULL,
  `judul_web` varchar(150) NOT NULL,
  `profil_web` text NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_wa` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `konfigurasi`
--

INSERT INTO `konfigurasi` (`id_konfigurasi`, `judul_web`, `profil_web`, `instagram`, `facebook`, `email`, `alamat`, `no_wa`) VALUES
(1, 'CMS BAGUS', 'Saya adalah seorang siswa SMKN 2 KARANGANYAR, saya pelajar yang baik hati dan suka menolong teman ', 'https://instagram.com/bgussst', 'https://facebook.com/Danis Danis', 'bteguh070506@gmail.com', 'Jatiarum Rt.06 Rw.11 Banjarharjo Kebakkramat Karanganyar', '6285800242594');

-- --------------------------------------------------------

--
-- Table structure for table `konten`
--

CREATE TABLE `konten` (
  `id_konten` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `foto` varchar(250) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `id_kategori` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `konten`
--

INSERT INTO `konten` (`id_konten`, `judul`, `keterangan`, `foto`, `slug`, `id_kategori`, `tanggal`, `username`) VALUES
(16, 'Proklamasi', 'Jakarta, InfoPublik - Peristiwa detik-detik proklamasi mengacu pada momen-momen penting yang mengarah kepada Proklamasi Kemerdekaan Indonesia pada 17 Agustus 1945 yang dilakukan oleh Soekarno dan Mohammad Hatta. \r\n\r\nDilansir dari laman Sekretariat Negara pada Kamis (17/8/2023) menyebutkan, rangkuman singkat mengenai peristiwa-peristiwa penting tersebut:\r\n\r\nMalam Sebelum Proklamasi (16 Agustus 1945)\r\n\r\nDi rumah Laksamana Maeda di Jalan Imam Bonjol, Jakarta, terjadi perdebatan mengenai waktu yang tepat untuk memproklamirkan kemerdekaan. Pemuda-pemuda seperti Soediro dan Chaerul Saleh mendesak agar proklamasi dilakukan secepatnya tanpa menunggu persetujuan dari Jepang.\r\n\r\nDini Hari (17 Agustus 1945)\r\n\r\nSoekarno, Hatta, dan Soebardjo mengetik teks Proklamasi Kemerdekaan di rumah Laksamana Maeda. Teksnya sengaja dibuat singkat untuk menghindari kesalahan saat pembacaannya.Teks proklamasi berbunyi: \"Kami bangsa Indonesia dengan ini menjatakan kemerdekaan Indonesia. Hal-hal yang mengenai pemindahan kekuasaan d.l.l. diselenggarakan dengan cara saksama dan dalam tempo yang sesingkat-singkatnya.\"\r\n\r\nPagi Hari (17 Agustus 1945)\r\n\r\nSekitar pukul 10.00 WIB, di rumah Soekarno di Jalan Pegangsaan Timur Nomor 56 (sekarang Jalan Proklamasi), Jakarta, Proklamasi Kemerdekaan dibacakan di hadapan ratusan penduduk yang hadir. Walaupun hanya berlangsung singkat, momen ini menjadi tonggak sejarah bagi bangsa Indonesia. Setelah pembacaan teks proklamasi, bendera merah putih dikibarkan dan lagu kebangsaan \"Indonesia Raya\" dinyanyikan.\r\n\r\nSetelah Proklamasi\r\n\r\nPada hari yang sama, Soekarno dan Hatta diangkat oleh pemuka-pemuka tanah air menjadi Presiden dan Wakil Presiden Republik Indonesia, secara berturut-turut. Berita proklamasi kemerdekaan menyebar ke seluruh nusantara, baik melalui radio maupun cara lainnya. \r\n\r\nFoto: Youtube Setpres\r\n\r\nReferensi :\r\n\r\ninfopublik.id', '20231203163837.jpg', 'Proklamasi', '11', '2023-12-03', 'Admin'),
(17, 'Keris', 'Asal usul dan fungsi\r\nAsal usul keris belum sepenuhnya terjelaskan karena tidak ada sumber tertulis yang deskriptif mengenainya dari masa sebelum abad ke-15, meskipun penyebutan istilah \"keris\" telah tercantum pada prasasti dari abad ke-9 Masehi.[butuh rujukan] . Ada banyak teori yang mencoba menjelaskan asal muasal keris di nusantara. G.B. Gardner dalam bukunya Keris and Other Malay Weapon keris dianggap sebagai pengembangan dari senjata tikam prasejarah. Namun diperkirakan asal mula penyebutan kata \"keris\" merupakan singkatan bahasa Jawa dari \"Mlungker-mlungker kang bisa ngiris\", dugaan bentuk keris berkelok/mlungker adalah pengembangan desain dari bentukan keris yang awalnya lurus, yang diilhami dari seekor ular yang sedang melata karena bagi orang Jawa ular adalah hewan yang disakralkan mengingat orang Jawa pada saat itu mengutamakan dewa Siwa yang berkalung ular. Sedangkan keris yang lurus adalah perkembangan dari bentuk kadga yaitu bentuk paling awal keris. dalam bahasa Jawa berarti \"(kata sinengker, karana, dan aris). Sinengker atau sengkeran mempunyai arti kurungan, karana mempunyai arti jalaran, dan aris mempunyai arti tanpa suloyo\" Kajian ilmiah perkembangan bentuk keris kebanyakan didasarkan pada analisis figur di relief candi atau patung.[butuh rujukan] Sementara itu, pengetahuan mengenai fungsi keris dapat dilacak dari beberapa prasasti dan laporan-laporan penjelajah asing ke Nusantara.\r\n\r\nPrototipe Keris\r\n\r\nPenggambaran keris di relief Candi Borobudur, Magelang, Jawa Tengah\r\n\r\nRelief prajurit ingin menusuk seseorang dengan keris di Candi Penataran, Blitar, Jawa Timur\r\nSatu panel relief Candi Borobudur (abad ke-9) yang memperlihatkan seseorang memegang benda serupa keris tetapi belum memiliki derajat kecondongan dan hulu/deder nya masih menyatu dengan bilah.\r\n\r\nDari abad yang sama, prasasti Karangtengah di Temanggung, Jawa Tengah berangka tahun 824 Masehi menyebut istilah \"keris\" dalam suatu daftar peralatan.[7] Prasasti Poh (904 M) menyebut \"keris\" sebagai bagian dari sesaji yang perlu dipersembahkan.[7] Walaupun demikian, tidak diketahui apakah \"keris\" itu mengacu pada benda seperti yang dikenal sekarang.\r\n\r\nKajian ilmiah perkembangan bentuk keris kebanyakan didasarkan pada analisis figur di relief candi atau patung. Sementara itu, pengetahuan mengenai fungsi keris dapat dilacak dari beberapa prasasti dan laporan-laporan penjelajah asing ke Nusantara.', '20231203171547.jpg', 'Keris', '14', '2023-12-03', 'Admin'),
(18, 'OnePiece', 'One Piece (Jepang: ワンピース, Hepburn: Wan Pīsu) adalah sebuah seri manga Jepang yang ditulis dan diilustrasikan oleh Eiichiro Oda. Manga ini telah dimuat di majalah Weekly Shōnen Jump milik Shueisha sejak tanggal 22 Juli 1997, dan telah dibundel menjadi 105 volume tankōbon hingga Maret 2023. Ceritanya mengisahkan petualangan Monkey D. Luffy, seorang anak laki-laki yang memiliki kemampuan tubuh elastis seperti karet setelah memakan Buah Iblis secara tidak disengaja. Luffy bersama kru bajak lautnya, yang dinamakan Bajak Laut Topi Jerami, menjelajahi Grand Line untuk mencari harta karun terbesar di dunia yang dikenal sebagai \"One Piece\" dalam rangka untuk menjadi Raja Bajak Laut yang berikutnya.\r\n\r\nManga ini telah diadaptasi menjadi sebuah animasi video asli (OVA) yang diproduksi oleh Production I.G pada tahun 1998, dan sebuah serial anime yang diproduksi oleh Toei Animation, yang mulai tayang di Jepang pada tahun 1999. Sebagai tambahan, Toei juga telah memproduksi tiga belas film animasi, satu OVA dan sebelas episode khusus televisi. Beberapa perusahaan telah mengembangkan berbagai jenis pernak-pernik seperti permainan kartu dagang dan beberapa permainan video. Versi manganya telah dilisensi untuk dirilis dalam bahasa Inggris di Amerika Utara dan Britania Raya oleh Viz Media dan di Australia oleh Madman Entertainment. Versi animenya telah dilisensi oleh 4Kids Entertainment untuk perilisan versi bahasa Inggris di Amerika Utara pada tahun 2004, sebelum lisensi tersebut dicabut dan kemudian diakuisisi oleh Funimation pada tahun 2007.\r\n\r\nOne Piece telah menerima pujian atas alur cerita, gambar, karakterisasi, dan humornya. Beberapa volume dari manga ini telah memecahkan rekor penerbitan, termasuk cetakan awal tertinggi dari buku apa pun di Jepang. Situs web resmi untuk manga One Piece karya Eiichiro Oda mengumumkan bahwa manga ini telah meraih Guinness World Record untuk kategori \"salinan terbanyak yang diterbitkan untuk seri buku komik yang sama oleh seorang penulis tunggal\". Hingga bulan Mei 2018, manga ini telah terjual hingga lebih dari 440 juta kopi di seluruh dunia, menjadikannya seri manga terlaris dalam sejarah. One Piece juga menjadi manga terlaris selama sepuluh tahun berturut-turut pada tahun 2017.', '20231203172103.jpg', 'OnePiece', '13', '2023-12-03', 'Admin'),
(19, 'Tiwul', 'Tiwul (baca: thiwul) adalah penganan yang dibuat dari tepung gaplek, diberi gula sedikit, kemudian dikukus, dapat dimakan bersama kelapa parut yang telah diberi garam sedikit.[1]\r\n\r\nTiwul merupakan penganan pokok khas suku Jawa sebagai pengganti beras padi yang dibuat dari gaplek.[2] Masyarakat Jawa kususnya di Ponorogo[3], Trenggalek, Wonosobo, Gunungkidul[4], Wonogiri[5], Pacitan dan Blitar masih rutin mengkonsumsi jenis makanan ini, terutama saat musim paceklik. Dalam bahasa Jawa, nasi disebut sêgo (bahasa Jawa baku) atau sêga (bahasa Jawa non baku).[2]\r\n\r\nSebagai makanan pokok, kandungan kalorinya lebih rendah daripada beras namun cukup memenuhi sebagai bahan makanan pengganti beras. Tiwul dipercaya mencegah penyakit maag, perut keroncongan, dan lain sebagainya. Tiwul pernah digunakan untuk makanan pokok sebagian penduduk Indonesia pada masa penjajahan Jepang dan sekarang tiwul dibuat jadi tiwul instan.[6] Selain itu tiwul identik dengan makanan orang-orang miskin pada zaman dulu karena tidak mampu membeli beras, sehingga menjadikan tiwul sebagai alternatif dari nasi.[7][8]\r\n\r\nDari Kebumen, Banyumas dan Cilacap juga terdapat penganan serupa tiwul yang disebut Oyek.[9] Meskipun sama-sama berasal dari gaplek, kedua jenis makanan ini berbeda dalam proses pembuatannya, sehingga rasanya pun sedikit berbeda. Sedangkan di Gresik, Tiwul menjadi buruan penikmat kuliner pagi hari yang biasanya habis dalam waktu 3 jam setelah buka.', '20231203172258.jpg', 'Tiwul', '14', '2023-12-03', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama`, `password`, `level`) VALUES
(19, 'Admin', 'shina', '0192023a7bbd73250516f069df18b500', 'admin'),
(24, 'mahiru', 'shina', 'b0baee9d279d34fa1dfd71aadb908c3f', 'admin'),
(27, 'shina', 'shina', 'ce182262ab33d0373ada1443f8e56d01', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id_carousel`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  ADD PRIMARY KEY (`id_konfigurasi`);

--
-- Indexes for table `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`id_konten`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id_carousel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `id_konfigurasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `konten`
--
ALTER TABLE `konten`
  MODIFY `id_konten` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
