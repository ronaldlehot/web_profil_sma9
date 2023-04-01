-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2023 at 01:11 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolahku`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_artikel`
--

CREATE TABLE `tbl_artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `isi` text,
  `tanggal` date DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `nama_pembuat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_artikel`
--

INSERT INTO `tbl_artikel` (`id`, `judul`, `isi`, `tanggal`, `foto`, `id_kategori`, `nama_pembuat`) VALUES
(12, 'Upacara Hari Pahlawan Tahun 2018', '<p>Marilah kita panjatkan puji dan syukur kehadirat Allah SWT-Tuhan Yang Maha Esa, karena atas limpahan rahmat dan karunia-Nya, bangsa Indonesia pada hari ini memperingati Hari Pahlawan Tahun 2018.</p><p>Setiap tahun pada tanggal 10 Nopember, bangsa Indonesia memperingati Hari Pahlawan untuk mengenang peristiwa pertempuran di Surabaya pada 73 tahun silam yang merupakan perang fisik pertama setelah bangsa Indonesia menyatakan kemerdekaannya.</p><p>Di bulan Nopember ingatan kolektif bangsa akan tertuju pada keberanian, semangat pantang menyerah serta pengorbanan tanpa pamrih para pahlawan yang telah gugur mendahului kita. Para syuhada bangsa tersebut telah mewariskan Negara Kesatuan Republik Indonesia yang berdiri kokoh sampai saat ini dan untuk selamanya.</p><p>&nbsp;</p><p><strong>Saudara sebangsa dan setanah air</strong></p><p>Prosesi peringatan Hari Pahlawan khususnya Upacara Pengibaran Bendera Merah Putih serta mengheningkan Cipta Secara Serantak Selama 60 Detik seperti yang saat ini kita lakukan, juga dilaksanakan di seluruh pelosok tanah air, bahkan di Perwakilan Negara Republik Indonesia di luar negeri. Seluruh rangkaian kegiatan peringatan Hari Pahlawan tersebut bertujuan untuk memperkuat nilai-nilai kepahlawanan, mempertebal rasa cinta tanah air dan meneguhkan semangat pengabdian bagi bangsa dan Negara di hati sanubari bangsa Indonesia.</p><p>Peringatan Hari Pahlawan bukan semata sebuah acara namun harus sarat makna, bukan hanya sebagai prosesi namun substansi setiap peringatan Hari Pahlawan harus dapat menggali dan memunculkan semangat baru dalam implementasi nilai-nilai kepahlawanan dalam kehidupan sehari-hari. Hal ini penting karena nilai kepahlawanan bukan bersifat statis namun dinamis, bisa menguat bahkan dapat melemah. Untuk itu, kiranya seluruh rangkaian kegiatan peringatan Hari Pahlawan harus menjadi energi dan semangat baru mewarisi nilai kejuangan dan patriotisme dalam membangun bangsa Indonesia.</p><p>&nbsp;</p><p><strong>Hadirin Sekalian</strong></p><p>Peringatan Hari Pahlawan, menjadi momentum bagi bangsa Indonesia untuk melakukan introspeksi diri. Sampai seberapa jauh setiap komponen bangsa dapat mewarisi nilai-nilai kepahlawanan, melanjutkan perjuangan, mengisi kemerdekaan demi mencapai Negara Kesatuan Republik Indonesia yang sejahtera, adil dan makmur.</p><p>Pada hakekatnya setiap perjuangan pasti ada hasilnya namun tidak ada kata akhir/berhenti untuk berjuang. Setiap etape perjuangan berlanjut pada etape perjuangan berikutnya sesuai tuntutan lingkungan strategis. Oleh karenanya peringatan Hari Pahlawan harus melahirkan ide dan gagasan mentransformasikan semangat pahlawan menjadi keuletan dalam melaksanakan pembangunan. Mentransformasikan keberanian melawan penjajah menjadi inspirasi mengusir musuh bersama bangsa saat ini antara lain kemiskinan. Selanjutnya transformasi kecerdikan para pahlawan dalam mengatur strategi, menjadikan inspirasi rakyat Indonesia untuk melakukan inovasi cerdas memperkuat daya saing bangsa dalam pergaulan dunia.</p><p>&nbsp;</p><p><strong>Hadirin yang berbahagia</strong></p><p>Setiap zaman pasti ada pahlawannya dan setiap pahlawan pasti berkiprah di eranya. Terkait dengan hal tersebut, bangsa Indonesia memerlukan pahlawan baru. Indonesia saat ini membutuhkan sosok yang berdedikasi dan berprestasi pada bidangnya untuk memajukan negeri.</p><p>Terlebih lagi dibutuhkan sosok pemuda Indonesia sebagai generasi penerus yang mempunyai jiwa patriotisme, pantang menyerah, berdisiplin, berkarakter menguasai ilmu pegetahuan dan keterampilandi bidangnya. Sadar bahwa negerinya memiliki beragam agama, suku, adat istiadat namun mampu memanfaatkan keberagaman sebagai modal sosial dipergunakan untuk keunggulan Indonesia dalam pergaulan dunia. Bukan justru untuk memanfaatkan perbedaan demi kepentingan pribadi maupun golongan yang menjadi penghambat bagi kemajuan Indonesia.</p><p>Negeri ini membutuhkan pemuda yang kokoh dengan jati dirinya, mempunyai karakter lokal yang luhur, percaya diri dan peka terhadap permasalahan sosial sehingga mampu terlibat dalam usaha-usaha kesejahteraan sosial, memberikan pelayanan sosial bagi mereka yang membutuhkan pertolongan sosial.</p><p>Negeri ini juga membutuhkan pemuda yang mempunyai pandangan global, mampu berkolaborasi untuk kemajuan bangsa dan mampu memanfaatkan kemajuan teknologi untuk menjadikan Indonesia diperhitungkan dalam bersaing dan bersanding dengan Negara lain khususnya ketika negeri ini memasuki era revolusi industri 4.0.</p><p>Pada akhirnya melalui momentum Peringatan Hari Pahlawan, saya mengajak marilah kita berbuat yang terbaik bagi bangsa ini. Mari berkontribusi bagi kemajuan bangsa. Mulai dari yang dapat kita lakukan, mulai dari lingkungan terdekat yang pada akhirnya memberikan kekuatan dan ketahanan bagi bangsa dan Negara.</p>', '2020-01-10', '20200110-upacara-hari-pahlawan-tahun-2018.jpg', 10, ''),
(13, 'Seleksi Calon Siswa UT School Angkatan 26, 27 dan 28 Tahun 2019', '<p>UT School bekerjasama dengan SMK Negeri 1 Wanareja akan melaksanakan seleksi Calon Siswa UT School Angkatan 26, 27 dan 28 pada awal tahun 2019 nanti.</p><p>Kesempatan ini terbuka untuk umum baik Alumni SMK Negeri 1 Wanareja maupun dari sekolah lain boleh mengikuti asalkan memenuhi kriteria yang dipersyaratkan.</p><p>Tentang UT School :</p><ul><li><p>Visi</p><p>Menjadi lembaga pendidikan keterampilan mekanik dan operator alat &ndash; alat berat terbaik di dunia.</p></li><li><p>Misi</p><ul><li>Menciptakan sumberdaya manusia yang berkualitas, profesional dan berwawasan internasional.</li><li>Menjadi sumber IPTEK terapan.</li><li>Menciptakan jaringan yang luas dengan industri &ndash; industri didalam dan di luar negeri</li></ul></li><li><p>Tujuan</p><ul><li>Menciptakan tenaga terampil di bidang mekanik, operator dan instruktur alat berat profesional yang siap karya dan siap latih.</li><li>Menjadi lembaga pendidikan keterampilan mekanik terbaik di dunia.</li><li>Turut serta untuk mencerdaskan kehidupan bangsa.</li></ul></li><li><p>Nilai</p><ul><li>Integritas (integrity)</li><li>Santun (Good Manners)</li><li>Berani (Courageous)</li></ul></li></ul><p>============================================</p><ol><li>UT SCHOOL membuka kelas angkatan 26 tahun ajaran 2019/2020&nbsp;<strong>Prodi MEKANIK ALAT BERAT</strong>&nbsp;untuk alumni SMK/SMA tahun 2016/2017/2018 jurusan TKR/TSM/TAB, Mesin Produksi, Listrik Arus Kuat (TITL) dan IPA.</li></ol><ol><li>UT SCHOOL membuka kelas angkatan 27 dan 28 tahun ajaran 2019/2020/2021 Prodi&nbsp;<strong>MEKANIK DAN OPERATOR ALAT BERAT</strong>&nbsp;untuk siswa SMK/SMA yang masih duduk di kelas 3&nbsp; jurusan TKR/TSM/TAB, Mesin Produksi, Listrik Arus Kuat (TITL) dan IPA.</li></ol><p>Dengan kriteria jenis kelamin laki-laki, tinggi badan minimum 164 CM, Tidak berkacamata, Tidak Bertato, Tidak Butawarna, Tidak Bertindik serta Sehat Jasmani dan Rohani.</p><p>Waktu Pendaftaran mulai Sekarang sampai dengan akhir Desember 2018</p><p>Tempat Pendaftaran di BKK SMK Negeri 1 Wanareja</p><p><strong>Pelaksanaan test adalah:</strong></p><ul><li>Hari, tanggal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Senin dan Selasa, 14 dan 15 Januari 2019</li><li>Waktu&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 07.30 sampai selesai</li><li>Tempat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp; Aula SMK Negeri 1 Wanareja</li><li>Yang berminat bisa langsung mengisi Formulir disini&nbsp;<a target=\"_blank\" href=\"https://goo.gl/rsWEUv\">https://goo.gl/rsWEUv</a></li></ul><p>Demikian info dari BKK Mandiri SMK Negeri 1 Wanareja. Semoga informasi ini bermanfaat. Jangan lupa share melalui sosial media kepada sahabat, kerabat atau teman yang membutuhkan.</p>', '2020-01-10', '20200110-seleksi-calon-siswa-ut-school-angkatan-26,-27-dan-28-tahun-2019.jpg', 3, ''),
(14, 'Belajar Sehari Di Luar Kelas', '<p>Menindaklanjuti Surat dari Cabang Dinas Pendidikan Wilayah X Pemerintah Provinsi Jawa Tengah nomor : 427/01520/XI/2019 dan Surat dari Dinas Pemberdayaan Perempuan, Perlindungan Anak dan Keluarga Berencana nomor : 421.7/35551 Tanggal 31 Oktober 2019 hal Pelaksanaan Sehari Belajar di Luar Kelas bahwa merupakan salah satu bentuk pengembangan Sekolah Ramah Anak.</p><p>Pada hari kamis, 7 November 2019 SMK Negeri 1 Wanareja melaksanakan Belajar sehari di luar kelas dengan urutan acara sebagai berikut :</p><ul><li>Menyambut siswa yang datang ke sekolah dengan senyum, sapa, salam. Kegiatan ini bertujuan untuk menanamkan Penguatan Pendidikan Karakter (PPK).</li><li>Apel Pagi bersama tim &amp; siswa Menyanyikan lagu Indonesia Raya (3 stanza).</li><li>Seluruh warga sekolah menyanyikan lagu Indonesia Raya 3 stanza dengan sikap siap sempurna.</li><li>Siswa diajak untuk melaksanakan cuci tangan sebelum makan. Kegiatan ini bertujuan untuk membiasakan Prilaku Hidup Bersih dan Sehat (PHBS).</li><li>Berdoa bersama sebelum makan dilakukan untuk meningkatkan keimanan dan ketakwaan terhadap Tuhan Yang Maha Esa Sarapan bersama, siswa memakan sarapan sehat yang disiapkan oleh orangtua masing-masing.</li><li>Berdoa setelah makan.</li><li>Cuci tangan setelah makan.</li><li>Siswa diajak untuk memeriksa lingkungan sekolah. Tanaman, barang, atau hal-hal yang membahayakan anak agar disingkirkan.</li><li>Memeriksa lampu, peralatan listrik, dan kran air. Jika tidak dipakai, agar dimatikan untuk menghemat energi.</li><li>Melaksanakan kegiatan membaca buku di luar kelas selama 15 menit untuk meningkatkan gerakan literasi sekolah (GLS).</li><li>Melaksanakan simulasi evakuasi bencana melalui lagu dan gerak selama 10 menit. Melaksanakan senam germas selama 5 menit.</li><li>Siswa diajak melaksanakan permainan tradisional selama 45 menit. Permainan ini disesuaikan dengan masing-masing daerah.</li><li>Melakukan tepuk hak anak dan yel-yel sekolah ramah anak selama 7 menit.</li><li>Melakukan deklarasi sekolah ramah anak selama 5 menit Pelantikan Tim Sekolah Ramah Anak selama 5 menit.</li><li>Masing-masing sekolah diharapkan membentuk Tim Sekolah Ramah Anak Kegiatan akhir yaitu penutupan.</li><li>Seluruh siswa diajak menyanyikan lagu Maju Tak Gentar (5 menit).</li></ul>', '2020-01-10', '20200110-belajar-sehari-di-luar-kelas.jpg', 3, ''),
(15, 'Upacara Hari Pahlawan Tahun 2019', '<p>Wanareja &ndash; SMK Negeri 1 Wanareja pada hari Minggu, 10 November 2019 walaupun bertepatan dengan hari libur tetap melaksanakan Upacara Memperingati Hari Pahlawan tahun ini. Upacara hari ini diikuti oleh semua Guru, Karyawan &amp; Siswa dengan penuh hikmad. Sebagai pembina upacara beliau Bapak Dayatudin, SP menyampaikan amanat dari Menteri Sosial Republik indonesia Juliani P Batubara.</p><p>Berikut amanat yang disampaikan pada Upacara Hari Pahlawan tahun ini :</p><p>Assalamu&rsquo;alaikum WR.Wb.<br />salam sejahtera bagi kita semua<br />Om Swasti Astu<br />Nano Buddhaya<br />Salam Kebajikan</p><p>Bapak/Ibu, sebangsa dan setanah air</p><p>Puji syukur marilah kita panjatkan kehadirat Allah SWT, Tuhan Yang Maha Kuasa, atas limpahan rahmat dan karuniaNya, pada hari ini di seluruh pelosok tanah air dan Perwakilan RI di seluruh Negeri, kita dapat melaksanakan Upacara Bendera dan mengheningkan Cipta serentak selama 60 detik untuk memperingati Hari Pahlawan 10 November 2019 dengan khidmat.</p><p>Setiap Hari Pahlawan, kita diingatkan kembali kepada peristiwa pertempuran 10 November 1945 di Surbaya sebagai salah satu momen paling bersejarah dalam merebut kemerdekaan Indonesia.</p><p>Pada pertempuran tersebut rakyat bersatu padu, berjuang, pantang menyerah melawan penjajah yang ingin menancapkan kembali kekuasaannya di Indonesia.</p><p>Peristiwa Perang mengingatkan kita bahwa kemerdekaan yang kita rasakan saat ini tidaklah datang begitu saja, namun memerlukan perjuangan dan pengorbanan yang luar biasa dari para pendahulu negeri. semangat yang ditunjukkan para pahlawan dan pejuang tersebut hendaknya perlu terus ditumbuhkembangkan di dalam hati sanubari segenap insan Warga Negara Indonesia.</p><p>Dengan Peringatan Hari Pahlwan diharapkan kita akan lebih menghargai jasa dan pengorbanan para pahlawan, sebagaimana ungkapan salah seorang The Founding Fathers kita Bung Karno yang menyatakan bahwa &ldquo;&hellip;.hanya bangsa yang menghargai jasa para pahlawannya dapat menajdi bangsa yang besar&hellip;&rdquo;. Selain itu peringatan Hari Pahlawan kita bangkitkan semangat berinovasi bagi anak &ndash; anak bangsa untuk menjadi pahlawan masa kini, sebagaimana tema peringatan hari pahlawan masa kini.</p><p>Menjadi Pahlawan Masa Kini dapat diakukan oleh siapapun warga negara Indonesia, dalam bentuk aksi &ndash; aksi nyata memperkuat keutuhan NKRI, seperti tolong menolong sesama yang terkena musibah, tidak melakukan provokasi yang dapat menggangu ketertiban umum, tidak menyebarkan berita hoax, tidak melakukan perbuatan anarkis atau merugukan orang lain dan sebagainnya.</p><p>Jika dahulu semangat kepahlawanan ditunjukkan melalui pengorbanan tenaga, harta bahakan nyawa. sekarang, untuk menajdi pahlawa, bukan hanya mereka yang berjuang mengangkat senjata mengusir penjajah, tetapi kita juga bisa, dengan cara menorehkan prestasi di berbagai bidang kehidupan, memberikan kemaslahatan bagi masyarakt, membawa harum nama bangsa di mata Internasional.</p><p>Peringatan Hari Pahlawan kiranya dapat meningkatkan kesadaran kita untuk lebih mencintai tanah air dan menjaganya sampai akhir hayat.</p><p>Jangan biarkan keutuhan NKRI yang telah dibangun para pendahulu negeri dengan tetesan darah dan air mata menjadi sia-sia. jangan biarkan tangan-tangan jahil atau pihak yang tidak bertanggungjawab merusak persatuan dan kesatuan bangsa. jangan biarkan negeri kita terkoyak, tercerai berai, terprovokasi untuk saling menghasut dan berkonflik satu sama lain.</p><p>Mari kita maknai hari pahlawan hari pahlawan ini dengan wujud nyata, bekerja dan bekerja membangun negeri menuju Indonesia maju.</p><p>Saudara sebangsa dan setanah air, hari pahlawan kiranya bukan hanya bersifat seremonial semata tetapi dapat diisi dengan berbagai akifitas yang dapat menyuburkan rasa nasionalisme dan meningkatkan rasa kepedulian untuk menolon sesama yang membutuhkan.</p><p>Dengan menjadikan diri kita sebagai Pahlawan masa kini, maka permasalahan yang melanda bangsa dewasa ini dapat teratasi. untuk itu marilah kita terus menerus berupaya memupuk nilai kepahlawanan agar tumbuh subur dalam hati sanubari segenap insan masyarakat Indonesia.</p><p>Selamat Hari Pahlawan 2019, semoga Allah SWT, Tuhan Yang Maha Kuasa senantiasa memberikan bimbingan dan kekuatan kepada bangsa Indonesia agar dapat menjaga keutuhan NKRI yang telah diperjuangkan oleh para pendahulu negeri. sekali lagi jadilah pahlawan masa kini yang membanggalkan negeri.</p><p>Sekian, Terima Kasih<br />Wassalamu&rsquo;alaikum Wr.Wb.</p>', '2020-01-10', '20200110-upacara-hari-pahlawan-tahun-2019.jpg', 10, ''),
(16, 'qeqe', '<p>qwewqe</p>', '2023-03-30', '20230330-qeqe.jpg', 3, 'qweqe');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bukutamu`
--

CREATE TABLE `tbl_bukutamu` (
  `id` int(11) NOT NULL,
  `nama` varchar(80) DEFAULT NULL,
  `email` varchar(90) DEFAULT NULL,
  `isi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_bukutamu`
--

INSERT INTO `tbl_bukutamu` (`id`, `nama`, `email`, `isi`) VALUES
(3, 'Fakhrul Fanani Nugroho', 'fakhrulnugroho@gmail.com', 'Websitenya sangat bagus dan menarik!');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ekskul`
--

CREATE TABLE `tbl_ekskul` (
  `id` int(11) NOT NULL,
  `nama_ekskul` varchar(50) DEFAULT NULL,
  `pembina` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_ekskul`
--

INSERT INTO `tbl_ekskul` (`id`, `nama_ekskul`, `pembina`) VALUES
(1, 'Videografi', NULL),
(2, 'Fotografi', 14);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_galeri`
--

CREATE TABLE `tbl_galeri` (
  `id` int(11) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_galeri`
--

INSERT INTO `tbl_galeri` (`id`, `foto`) VALUES
(4, '-.jpg'),
(6, '-.webp');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guru`
--

CREATE TABLE `tbl_guru` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nip` int(10) DEFAULT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `no_hp` varchar(12) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `mata_pelajaran` varchar(50) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `jenis_pangkatgol` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_guru`
--

INSERT INTO `tbl_guru` (`id`, `nama`, `nip`, `jenis_kelamin`, `no_hp`, `tempat_lahir`, `tanggal_lahir`, `mata_pelajaran`, `alamat`, `foto`, `jenis_pangkatgol`) VALUES
(14, 'Wahyu Tri Widodo', 1980201803, 'L', '085643529976', 'Cilacap', '1980-06-02', 'Produktif', 'Kedungreja', 'wahyu-tri-widodo.jpg', ''),
(17, 'mas isap aku dong ', 1213, 'P', '123213', '123213', '0000-00-00', '123123', '123213', 'mas-isap-aku-dong-.jpeg', '123213');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_informasi`
--

CREATE TABLE `tbl_informasi` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` date NOT NULL,
  `foto` varchar(100) NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_informasi`
--

INSERT INTO `tbl_informasi` (`id`, `judul`, `isi`, `tanggal`, `foto`, `id_kategori`) VALUES
(1, 'apa yah', '<p>kamu cantik banget</p>', '2023-03-26', '20230326-apa-yah.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jenisgtk`
--

CREATE TABLE `tbl_jenisgtk` (
  `id` int(11) NOT NULL,
  `jenis_gtk` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jenisgtk`
--

INSERT INTO `tbl_jenisgtk` (`id`, `jenis_gtk`) VALUES
(2, 'Guru Bahasa Indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jurusan`
--

CREATE TABLE `tbl_jurusan` (
  `id` int(11) NOT NULL,
  `nama_jurusan` varchar(30) DEFAULT NULL,
  `ka_prodi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_jurusan`
--

INSERT INTO `tbl_jurusan` (`id`, `nama_jurusan`, `ka_prodi`) VALUES
(8, 'x ipa 2', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori_artikel`
--

CREATE TABLE `tbl_kategori_artikel` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kategori_artikel`
--

INSERT INTO `tbl_kategori_artikel` (`id`, `nama_kategori`) VALUES
(3, 'Kegiatan Sekolah'),
(10, 'Event');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kelas`
--

CREATE TABLE `tbl_kelas` (
  `id` int(11) NOT NULL,
  `nama_kelas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kelas`
--

INSERT INTO `tbl_kelas` (`id`, `nama_kelas`) VALUES
(7, 'x ipa');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ketegori_informasi`
--

CREATE TABLE `tbl_ketegori_informasi` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ketegori_informasi`
--

INSERT INTO `tbl_ketegori_informasi` (`id`, `nama_kategori`) VALUES
(2, 'adasd'),
(3, 'fef');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pangkatgol`
--

CREATE TABLE `tbl_pangkatgol` (
  `id` int(11) NOT NULL,
  `jenis_pangkatgol` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pangkatgol`
--

INSERT INTO `tbl_pangkatgol` (`id`, `jenis_pangkatgol`) VALUES
(1, 'IV/B');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengguna`
--

CREATE TABLE `tbl_pengguna` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pengguna`
--

INSERT INTO `tbl_pengguna` (`id`, `nama`, `username`, `password`, `foto`) VALUES
(3, 'Administrator', 'admin', '$2y$10$9uAKnax9/7HoMVtMFWDUEe6GhtWdq5SIn75AWwHnYboKctXCfybVG', 'administrator.jpg'),
(5, 'ronald', 'ronald', '$2y$10$ZFbHSvcHLo7HBWv/Mtk3..DIQJH8ssMYkzuwN5jOcXwPu9omOEeVe', 'ronald.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengguna_guru`
--

CREATE TABLE `tbl_pengguna_guru` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengguna_guru`
--

INSERT INTO `tbl_pengguna_guru` (`id`, `nama`, `username`, `password`) VALUES
(1, 'ronald', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prestasi`
--

CREATE TABLE `tbl_prestasi` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_prestasi`
--

INSERT INTO `tbl_prestasi` (`id`, `judul`, `tanggal`, `foto`) VALUES
(2, 'ahhhh mas jangan gitu dong ', '2023-03-27', '20230327-ahhhh-mas-jangan-gitu-dong-.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sambutan`
--

CREATE TABLE `tbl_sambutan` (
  `id` int(11) NOT NULL,
  `isi` text NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sambutan`
--

INSERT INTO `tbl_sambutan` (`id`, `isi`, `foto`) VALUES
(2, '<p>ngentot</p>', '-.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nis` int(4) DEFAULT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `tempat_lahir` varchar(80) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `no_hp` varchar(12) DEFAULT NULL,
  `foto` varchar(120) DEFAULT NULL,
  `id_jurusan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`id`, `nama`, `nis`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `no_hp`, `foto`, `id_jurusan`) VALUES
(1, 'Fakhrul', 6315, 'L', 'Cilacap', '2002-07-15', 'Sidareja', '089538018082', 'fakhrul-fanani-nugroho.jpg', NULL),
(3, 'Fanani', 6316, 'L', 'Cilacap', '2002-07-16', 'Sidareja', '081929102912', 'fanani.jpg', NULL),
(4, 'Nugroho', 6317, 'L', 'Cilacap', '2002-02-18', 'Sidareja', '089519291829', 'nugroho.jpg', NULL),
(5, 'Ronald Lehot', 1232131, 'L', 'kanfaf', '0012-12-12', '', '0818381831', 'ronald-lehot.jpg', NULL),
(6, 'kamu kayak anjing', 12313123, 'L', '123213', '1321-03-21', '123213', '12321321313', 'kamu-kayak-anjing.jpg', 8);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_struktur`
--

CREATE TABLE `tbl_struktur` (
  `id` int(11) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_struktur`
--

INSERT INTO `tbl_struktur` (`id`, `foto`) VALUES
(1, '-.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tentang_website`
--

CREATE TABLE `tbl_tentang_website` (
  `id` int(11) NOT NULL,
  `tentang_website` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_tentang_website`
--

INSERT INTO `tbl_tentang_website` (`id`, `tentang_website`) VALUES
(1, '<p>Tentang Website SMK Negeri 1 Wanareja dan pembaharuan Versinya.</p><p>Website SMK Negeri 1 Wanareja sebagai media yang dikelola oleh sekolah dan berada di Wilayah Negara Kesatuan Republik Indonesia tentunya Taat dan Patuh sepenuhnya terhadap Hukum dan Perundang Undangan yang berlaku di wilayah Negara Kesatuan Republik Indonesia. Dan mentaati Undang Undang Nomor 19 Tahun 2016 tentang ITE seperti yang tercantum pada tautan berikut&nbsp;<a target=\"_blank\" href=\"https://www.smkn1wanareja.sch.id/wp-content/uploads/2018/04/UU-19-Tahun-2016-ite.pdf\">UU Nomor 19 Tahun 2016</a>.</p><p>Website SMK Negeri 1 Wanareja sebelumnya berada di smk1wanareja.sch.id dan karena suatu hal maka mulai tahun 2018 diluncurkan website dengan alamat baru yaitu www.smkn1wanareja.sch.id. Mulai dikerjakan pada akhir Maret 2018 dan akhirnya bisa online pada tanggal 27 Maret 2018. lmjmm</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_visi_misi`
--

CREATE TABLE `tbl_visi_misi` (
  `id` int(11) NOT NULL,
  `visi_misi` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_visi_misi`
--

INSERT INTO `tbl_visi_misi` (`id`, `visi_misi`) VALUES
(1, '<p><strong>Visi SMK Negeri 1 Wanareja</strong></p><p>Mewujudkan SMK berkarakter, berkompeten dan unggul</p><p><strong>Misi SMK Negeri 1 Wanareja</strong></p><ol><li>Menanamkan keimanan, ketaqwaan dan akhlak mulia.</li><li>Menyelenggarakan pendidikan yang memadukan aspek agama, iptek dan budaya</li><li>Menumbuhkan budaya literasi dan kecakapan hidup</li><li>Menciptakan sumber daya yang kompeten, mandiri dan mampu beradaptasi</li><li>Mewujudkan lingkungan yang bersih, indah dan nyaman</li></ol><p><strong>Tujuan SMK Negeri 1 Wanareja</strong></p><p>Tujuan penyelenggaraan pendidikan di SMK Negeri 1 Wanareja adalah</p><ol><li>Sekolah menghasilkan lulusan yang beriman, bertaqwa, berakhak mulia dengan kompetensi yang bersaing di era global.</li><li>Sekolah menghasilkan dan menerapkan kurikulum sekolah yang mampu mencapai Standar Kompetensi Lulusan (SKL) Pendidikan Menengah Kejuruan (PMK).</li><li>Sekolah meraih nilai &rdquo;A&rdquo; pada akreditasi nasional dengan mengimplementasikan Penjamin Mutu Pendidikan (PMP).</li><li>Sekolah melaksanakan proses pembelajaran yang inovatif, kreatif, komunikatif, kolaboratif dan berbasis IT dengan menerapkan pembelajaran bilingual pada mata pelajaran peminatan.</li><li>Sekolah menyediakan sarana dan prasarana pendidikan yang relevan dan memenuhi standar sarana dan prasarana pendidikan menengah kejuruan.</li><li>Sekolah melaksanakan kegiatan pengembangan diri dalam rangka membentuk karakter peserta didik.</li><li>Sekolah menerapkan budaya etos kerja pendidik dan tenaga kependidikan yang tangguh, disiplin dan profesional.</li><li>Sekolah meraih prestasi bidang akademik dan nonakademik pada tingkat nasional dan internasional.</li><li>Sekolah mengembangkan budaya literasi, budaya bersih dan budaya sopan santun.</li><li>Sekolah mewujudkan lingkungan sekolah yang bersih, indah dan nyaman sesuai dengan konsep sekolah adiwiyata.</li></ol>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `tbl_bukutamu`
--
ALTER TABLE `tbl_bukutamu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_ekskul`
--
ALTER TABLE `tbl_ekskul`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pembina` (`pembina`);

--
-- Indexes for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_informasi`
--
ALTER TABLE `tbl_informasi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_informasi` (`id_kategori`);

--
-- Indexes for table `tbl_jenisgtk`
--
ALTER TABLE `tbl_jenisgtk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_jurusan`
--
ALTER TABLE `tbl_jurusan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_jurusan_ibfk_1` (`ka_prodi`);

--
-- Indexes for table `tbl_kategori_artikel`
--
ALTER TABLE `tbl_kategori_artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_ketegori_informasi`
--
ALTER TABLE `tbl_ketegori_informasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pangkatgol`
--
ALTER TABLE `tbl_pangkatgol`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pengguna_guru`
--
ALTER TABLE `tbl_pengguna_guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_prestasi`
--
ALTER TABLE `tbl_prestasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sambutan`
--
ALTER TABLE `tbl_sambutan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_jurusan` (`id_jurusan`);

--
-- Indexes for table `tbl_struktur`
--
ALTER TABLE `tbl_struktur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_tentang_website`
--
ALTER TABLE `tbl_tentang_website`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_visi_misi`
--
ALTER TABLE `tbl_visi_misi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_bukutamu`
--
ALTER TABLE `tbl_bukutamu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_ekskul`
--
ALTER TABLE `tbl_ekskul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_informasi`
--
ALTER TABLE `tbl_informasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_jenisgtk`
--
ALTER TABLE `tbl_jenisgtk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_jurusan`
--
ALTER TABLE `tbl_jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_kategori_artikel`
--
ALTER TABLE `tbl_kategori_artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_ketegori_informasi`
--
ALTER TABLE `tbl_ketegori_informasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_pangkatgol`
--
ALTER TABLE `tbl_pangkatgol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_pengguna_guru`
--
ALTER TABLE `tbl_pengguna_guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_prestasi`
--
ALTER TABLE `tbl_prestasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_sambutan`
--
ALTER TABLE `tbl_sambutan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_struktur`
--
ALTER TABLE `tbl_struktur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_tentang_website`
--
ALTER TABLE `tbl_tentang_website`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_visi_misi`
--
ALTER TABLE `tbl_visi_misi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  ADD CONSTRAINT `tbl_artikel_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tbl_kategori_artikel` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `tbl_ekskul`
--
ALTER TABLE `tbl_ekskul`
  ADD CONSTRAINT `tbl_ekskul_ibfk_1` FOREIGN KEY (`pembina`) REFERENCES `tbl_guru` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `tbl_jurusan`
--
ALTER TABLE `tbl_jurusan`
  ADD CONSTRAINT `tbl_jurusan_ibfk_1` FOREIGN KEY (`ka_prodi`) REFERENCES `tbl_guru` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD CONSTRAINT `tbl_siswa_ibfk_1` FOREIGN KEY (`id_jurusan`) REFERENCES `tbl_jurusan` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
