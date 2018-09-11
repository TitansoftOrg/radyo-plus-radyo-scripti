-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 11 Eyl 2018, 13:54:26
-- Sunucu sürümü: 10.1.35-MariaDB-cll-lve
-- PHP Sürümü: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `enesbeyn_radyo`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `authme`
--

CREATE TABLE `authme` (
  `id` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `ad` varchar(225) COLLATE utf8_turkish_ci NOT NULL,
  `soyad` varchar(205) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 DEFAULT 'your@email.com',
  `facebook` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `googleplus` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `hakkinda` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `profilresmi` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `dogum` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `gorevbasla` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `gorevbitir` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `cinsiyet` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `skype` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `yetki` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `authme`
--

INSERT INTO `authme` (`id`, `username`, `password`, `ad`, `soyad`, `email`, `facebook`, `twitter`, `googleplus`, `hakkinda`, `profilresmi`, `dogum`, `gorevbasla`, `gorevbitir`, `cinsiyet`, `skype`, `yetki`) VALUES
(526, 'admin', '123456', 'Enes Alperen', 'Hürüm', 'admin@enesbey.net', 'eahrm', 'enesbeycom', 'Enes Alperen Hürüm', 'Radyo+\'ın kurucusu ve en yetkilisidir!', 'enes-alperen.png', '1998-07-26', '12:00', '16:00', 'Erkek', '', '1'),
(557, 'aylinbadem', 'djaylin', 'Aylin', 'Badem', 'aylin@enesbey.net', 'aylinbadem', 'aylinbadem', 'Aylin Badem', 'Radyo+\'ın kadın DJ\'i', 'aylin.jpg', '1986-05-15', '18:00', '00:00', 'Kadın', 'aylinbadem', '0'),
(558, 'cemkara', 'djcem', 'Cem', 'Kara', 'cem@enesbey.net', 'cemkara', 'cemkara', 'Cem Kara', 'Gecelerin çocuğu Cem!', 'cem.jpg', '1992-10-29', '00:00', '08:00', 'Erkek', 'cemkara', '0'),
(559, 'sedatakalin', 'yazarsedat', 'Sedat', 'Akalın', 'sedat@enesbey.net', 'sedatakalin', '', '', 'Radyo+\'ın Haber Editörü', 'sedat.jpg', '1988-04-21', '08:00', '17:00', 'Erkek', 'sedatakalin', '2');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `haberler`
--

CREATE TABLE `haberler` (
  `id` int(11) NOT NULL,
  `baslik` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `seobaslik` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `gorsel` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `etiketler` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `seoetiket` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `keywords` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `icerik` longtext CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `yazar` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `seoyazar` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `seokategori` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `kategori` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `tarih` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `haberler`
--

INSERT INTO `haberler` (`id`, `baslik`, `seobaslik`, `gorsel`, `etiketler`, `seoetiket`, `keywords`, `icerik`, `yazar`, `seoyazar`, `seokategori`, `kategori`, `tarih`) VALUES
(34, 'Dream Theater, İstanbul\'a Geliyor', 'dream theater, istanbula geliyor', 'dream-theater-istanbula-geliyor.jpg', 'Dream, Theater, İstanbula, Geliyor', 'dream, theater, istanbula, geliyor', '', '<p>G&uuml;n&uuml;m&uuml;z&uuml;n en &ouml;nemli virt&uuml;&ouml;zlerinden John Petrucci, James LaBrie, Jordan Rudess, John Myung ve Mike Mangini&#39;den kurulu ABD&#39;li progresif metal grubu Dream Theater, efsane alb&uuml;m&uuml; &#39;Images &amp; Words&#39;&uuml;n 25&#39;inci yıl turnesi kapsamında 10 Ekim&#39;de Maslak&#39;taki Volkswagen Arena&#39;da konser verecek.<br />\r\n&nbsp;<br />\r\nVera M&uuml;zik ve Freebird Agency tarafından ger&ccedil;ekleşecek organizasyonda grup, İstanbul&#39;daki hayranlarına unutulmaz bir m&uuml;zik ziyafeti yaşatacak.<br />\r\n&nbsp;<br />\r\n<strong>&Uuml;&ccedil; perdelik g&ouml;steri</strong><br />\r\nDream Theatre, 3 perde olarak ger&ccedil;ekleşecek konserin ilk perdesinde kariyerinin farklı &nbsp;d&ouml;nemlerinden &ouml;ne &ccedil;ıkan şarkılarını, 2 ve 3&#39;&uuml;nc&uuml; perdelerde ise &#39;Images and Words&#39; alb&uuml;m&uuml; ve 23 dakikalık &#39;A Change of Seasons&#39; par&ccedil;asını eksiksiz olarak &ccedil;alacak.</p>\r\n', 'Enes Alperen Hürüm', 'enes alperen hurum', 'yeni', 'yeni', '20 Ağustos 2017'),
(35, 'Yayınlanmamış Şarkıları Albüm Oldu', 'yayinlanmamis sarkilari album oldu', 'yayinlanmamis-sarkilari-album-oldu.jpg', 'Yayınlanmamış, Şarkıları, Albüm, Oldu, Müslüm gürses', 'yayinlanmamis, sarkilari, album, oldu, muslum gurses', '', '<h2>Arabesk m&uuml;ziğin &#39;Baba&#39;sı M&uuml;sl&uuml;m G&uuml;rses&#39;in daha &ouml;nce yayınlanmamış şarkıları, yeni bir alb&uuml;mde toplandı.</h2>\r\n\r\n<p>M&uuml;sl&uuml;m G&uuml;rses&#39;in bug&uuml;ne kadar yayınlanmayan alb&uuml;m&uuml; &lsquo;Mahzendeki Şarkılar&rsquo; yayınlanmayı bekliyor. M&uuml;sl&uuml;m Baba&rsquo;nın eşi Muhterem Nur, alb&uuml;m i&ccedil;in Elenor M&uuml;zik&#39;in sahibi Muhteşem Candan el sıktı.<br />\r\n<br />\r\n&lsquo;&Ouml;mr&uuml;mce Ağladım&rsquo; isimli yeni kitabıyla b&uuml;y&uuml;k beğeni toplayan Muhterem Nur, M&uuml;sl&uuml;m G&uuml;rses&rsquo;in bu &ccedil;alışması i&ccedil;in elinden geleni yapacağını s&ouml;yledi.</p>\r\n\r\n<p><img alt=\"\" src=\"https://mediacdns.karnaval.com/media/news_media/uploads/muhteremnur.jpg\" /><br />\r\n<br />\r\nBug&uuml;ne kadar duyulmamış yepyeni şarkıların bulunduğu alb&uuml;m, 18 Ağustos&rsquo;ta internette, 24 Ağustos&rsquo;ta da m&uuml;zik marketlerde olacak.<br />\r\n<br />\r\nS&ouml;zc&uuml;</p>\r\n', 'yayinci1 yayinci1', 'yayinci1 yayinci1', 'muzik haberleri', 'Müzik Haberleri', '20 Ağustos 2017'),
(36, 'dfsfs', 'dfsfs', 'gorsel-yok.jpg', '', '', '', '<p>fsdfsd</p>\r\n', 'Enes Alperen Hürüm', 'enes alperen hurum', 'muzik haberleri', 'Müzik Haberleri', '20 Ekim 2017'),
(37, 'FSDFsdfs', 'fsdfsdfs', 'gorsel-yok.jpg', '', '', '', '<p>fsdfsdfsd</p>\r\n', 'Enes Alperen Hürüm', 'enes alperen hurum', 'muzik haberleri', 'Müzik Haberleri', '20 Ekim 2017'),
(38, 'asdfaqfsdf', 'asdfaqfsdf', 'gorsel-yok.jpg', '', '', '', '<p>dsfsfdasfasf</p>\r\n', 'Enes Alperen Hürüm', 'enes alperen hurum', 'muzik haberleri', 'Müzik Haberleri', '20 Ekim 2017'),
(39, 'jdlıkadlkash', 'jdlikadlkash', 'gorsel-yok.jpg', '', '', '', '<p>wkeıjpfewd</p>\r\n', 'Enes Alperen Hürüm', 'enes alperen hurum', 'muzik haberleri', 'Müzik Haberleri', '20 Ekim 2017'),
(40, 'rwehjrdlkh', 'rwehjrdlkh', 'gorsel-yok.jpg', '', '', '', '<p>werkfojsdlk</p>\r\n', 'Enes Alperen Hürüm', 'enes alperen hurum', 'muzik haberleri', 'Müzik Haberleri', '20 Ekim 2017'),
(41, 'dwejrkdfıohuoı', 'dwejrkdfiohuoi', 'gorsel-yok.jpg', '', '', '', '<p>wejuıodsjufıowek</p>\r\n', 'Enes Alperen Hürüm', 'enes alperen hurum', 'muzik haberleri', 'Müzik Haberleri', '20 Ekim 2017'),
(42, 'dfgsdgfsfda', 'dfgsdgfsfda', 'gorsel-yok.jpg', '', '', '', '<p>fsdfsdfsd</p>\r\n', 'Enes Alperen Hürüm', 'enes alperen hurum', 'asdjksldj', 'asdjksldj', '20 Ekim 2017'),
(43, 'dsfasdfasf', 'dsfasdfasf', 'gorsel-yok.jpg', '', '', '', '<p>fsdfafsdfa</p>\r\n', 'Enes Alperen Hürüm', 'enes alperen hurum', 'asdjksldj', 'asdjksldj', '20 Ekim 2017');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `haberyorum`
--

CREATE TABLE `haberyorum` (
  `idsi` int(11) NOT NULL,
  `isim` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `yorum` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `haber` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `onay` int(255) NOT NULL,
  `tarihi` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `haberyorum`
--

INSERT INTO `haberyorum` (`idsi`, `isim`, `email`, `yorum`, `haber`, `onay`, `tarihi`) VALUES
(13, 'Mehmet A.', 'mehmet@enesbey.net', 'Çok güzel bir haber. Teşekkürler!', '35', 1, '20.10.2017 00:36:29');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategoriler`
--

CREATE TABLE `kategoriler` (
  `idsi` int(11) NOT NULL,
  `kate` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `kategoriler`
--

INSERT INTO `kategoriler` (`idsi`, `kate`) VALUES
(3, 'Müzik Haberleri'),
(4, 'asdjksldj'),
(5, 'yeni');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `programlar`
--

CREATE TABLE `programlar` (
  `id` int(11) NOT NULL,
  `progadi` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `programlar`
--

INSERT INTO `programlar` (`id`, `progadi`) VALUES
(10, 'Sabah Dinletisi'),
(11, 'Top 25'),
(12, 'Türkiye Popüler'),
(13, 'Global Popüler'),
(14, 'Pop Rüzgarı'),
(15, 'Rock\'n Roll'),
(16, 'Cem ile Geceler');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `reklam`
--

CREATE TABLE `reklam` (
  `id` int(11) NOT NULL,
  `anasayfaust` longtext CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `anasayfaalt` longtext CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `haberlistesi` longtext CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `haberici` longtext CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `reklam`
--

INSERT INTO `reklam` (`id`, `anasayfaust`, `anasayfaalt`, `haberlistesi`, `haberici`) VALUES
(1, '<script async src=\"//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"></script>\r\n<!-- Test -->\r\n<ins class=\"adsbygoogle\"\r\n     style=\"display:block\"\r\n     data-ad-client=\"ca-pub-6260992426069971\"\r\n     data-ad-slot=\"4974726135\"\r\n     data-ad-format=\"auto\"></ins>\r\n<script>\r\n(adsbygoogle = window.adsbygoogle || []).push({});\r\n</script>', '<script async src=\"//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"></script>\r\n<!-- Test -->\r\n<ins class=\"adsbygoogle\"\r\n     style=\"display:block\"\r\n     data-ad-client=\"ca-pub-6260992426069971\"\r\n     data-ad-slot=\"4974726135\"\r\n     data-ad-format=\"auto\"></ins>\r\n<script>\r\n(adsbygoogle = window.adsbygoogle || []).push({});\r\n</script>', '<script async src=\"//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"></script>\r\n<!-- Test -->\r\n<ins class=\"adsbygoogle\"\r\n     style=\"display:block\"\r\n     data-ad-client=\"ca-pub-6260992426069971\"\r\n     data-ad-slot=\"4974726135\"\r\n     data-ad-format=\"auto\"></ins>\r\n<script>\r\n(adsbygoogle = window.adsbygoogle || []).push({});\r\n</script>', '<script async src=\"//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"></script>\r\n<!-- Test -->\r\n<ins class=\"adsbygoogle\"\r\n     style=\"display:block\"\r\n     data-ad-client=\"ca-pub-6260992426069971\"\r\n     data-ad-slot=\"4974726135\"\r\n     data-ad-format=\"auto\"></ins>\r\n<script>\r\n(adsbygoogle = window.adsbygoogle || []).push({});\r\n</script>');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sidebar`
--

CREATE TABLE `sidebar` (
  `id` int(11) NOT NULL,
  `baslik` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `sira` int(11) NOT NULL,
  `aktif` int(11) NOT NULL,
  `icerigi` longtext CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `sidebar`
--

INSERT INTO `sidebar` (`id`, `baslik`, `sira`, `aktif`, `icerigi`) VALUES
(1, 'Arama yap', 1, 1, '<div class=\"blog-search\"><form action=\"arama\" method=\"get\">\r\n <input type=\"text\" name=\"kelime\" placeholder=\"Aramak istediğiniz kelimeyi yazınız\"><br>\r\n <input type=\"submit\" value=\"Ara\">\r\n</form></div>'),
(2, 'Kategoriler', 2, 1, 'Radyo Plus Radyo Scripti'),
(3, 'Reklam Alanı', 3, 1, 'Reklam alanı'),
(4, 'Kullanıcıya Özel Alan #1', 4, 1, 'Kullanıcı alanı'),
(5, 'Kullanıcıya Özel Alan #2', 5, 1, 'Kullanıcıya Özel Alan #2');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `site`
--

CREATE TABLE `site` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `radyourl` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `logo` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `adres` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `telefon` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `eposta` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `facebook` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `twitter` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `googleplus` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `instagram` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `port` varchar(11) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `protokol` varchar(6) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `versiyon` varchar(11) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `tema` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `boy` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `konum` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `otoplay` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `haberliste` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `site`
--

INSERT INTO `site` (`id`, `title`, `radyourl`, `logo`, `adres`, `telefon`, `eposta`, `facebook`, `twitter`, `googleplus`, `instagram`, `port`, `protokol`, `versiyon`, `tema`, `boy`, `konum`, `otoplay`, `haberliste`) VALUES
(1, 'Radyo Plus', '46.20.13.51', 'deneme.jpg', 'Gazi Mah. Can Sokak No:36 34600 Kadıköy/İstanbul', '0850 000 00 00', 'radyoplus@enesbey.net', 'radyoplus', 'radyoplus', 'Radyo Plus', 'radyoplus', '1240', 'http', '1', 'dark', 'minimized', 'right', 'false', 6);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `topliste`
--

CREATE TABLE `topliste` (
  `id` int(11) NOT NULL,
  `sanatci` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `sarki` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `embed` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `sira` int(2) NOT NULL,
  `album` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `topliste`
--

INSERT INTO `topliste` (`id`, `sanatci`, `sarki`, `embed`, `sira`, `album`) VALUES
(1, 'ED Sheeran', 'Shape Of You', 'JGwWNGJdvx8', 1, 'shape-of-you.jpg'),
(2, 'Inna', 'Gimme Gimme', 'Jr4TMIU9oQ4', 3, 'gimme-gimme.jpg'),
(3, 'Wiz Khalifa ft. Charlie Puth', 'See You Again', 'RgKAFK5djSk', 2, 'see-you-again.jpg'),
(4, 'No Method', 'Let Me Go', 'lcOtPV352H8', 10, 'let-me-go.jpg'),
(5, 'Anne Marie', 'Ciao Adios', 'qqob4D3BoZc', 4, 'ciao-adios.jpg'),
(6, 'Jason Derulo', 'Swalla', 'NGLxoKOvzu4', 5, 'swalla.jpg'),
(7, 'Sean Paul', 'No Lie', 'GzU8KqOY8YA', 6, 'no-lie.jpg'),
(8, 'Daddy Yankee', 'Despacito', 'kJQP7kiw5Fk', 7, 'despacito.jpg'),
(9, 'Anne Marie', 'Rockabye', 'papuvlVeZg8', 8, 'rockabye.jpg'),
(10, 'Jax Jones Feat Raye', 'You Don\'t Know Me', 'PKB4cioGs98', 9, 'you-dont-know-me.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yayinakisi`
--

CREATE TABLE `yayinakisi` (
  `id` int(11) NOT NULL,
  `gun` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `baslangic` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `bitis` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `yayinci` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `program` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `yayinakisi`
--

INSERT INTO `yayinakisi` (`id`, `gun`, `baslangic`, `bitis`, `yayinci`, `program`) VALUES
(45, 'Pazartesi', '00:00', '04:00', 'Aylin Badem', 'Pop Rüzgarı'),
(46, 'Pazartesi', '04:00', '09:00', 'Enes Alperen Hürüm', 'Sabah Dinletisi'),
(47, 'Pazartesi', '09:00', '13:00', 'Cem Kara', 'Top 25'),
(48, 'Pazartesi', '14:00', '17:00', 'Aylin Badem', 'Türkiye Popüler'),
(49, 'Pazartesi', '13:00', '14:00', 'Cem Kara', 'Rock\'n Roll'),
(50, 'Pazartesi', '17:00', '20:00', 'Enes Alperen Hürüm', 'Global Popüler'),
(51, 'Pazartesi', '20:00', '00:00', 'Cem Kara', 'Cem ile Geceler'),
(52, 'Salı', '00:00', '05:00', 'Enes Alperen Hürüm', 'Pop Rüzgarı'),
(53, 'Salı', '05:00', '07:00', 'Cem Kara', 'Sabah Dinletisi'),
(54, 'Salı', '07:00', '11:00', 'Aylin Badem', 'Top 25'),
(55, 'Salı', '11:00', '14:00', 'Enes Alperen Hürüm', 'Rock\'n Roll'),
(56, 'Salı', '14:00', '18:00', 'Aylin Badem', 'Global Popüler'),
(57, 'Salı', '18:00', '22:00', 'Cem Kara', 'Cem ile Geceler'),
(58, 'Salı', '22:00', '00:00', 'Aylin Badem', 'Türkiye Popüler'),
(59, 'Çarşamba', '00:00', '04:00', 'Aylin Badem', 'Rock\'n Roll'),
(60, 'Çarşamba', '04:00', '08:00', 'Aylin Badem', 'Sabah Dinletisi'),
(61, 'Çarşamba', '08:00', '12:00', 'Cem Kara', 'Türkiye Popüler'),
(62, 'Çarşamba', '12:00', '15:00', 'Enes Alperen Hürüm', 'Global Popüler'),
(63, 'Çarşamba', '15:00', '18:00', 'Cem Kara', 'Top 25'),
(64, 'Çarşamba', '18:00', '00:00', 'Aylin Badem', 'Pop Rüzgarı'),
(65, 'Perşembe', '00:00', '02:00', 'Cem Kara', 'Cem ile Geceler'),
(66, 'Perşembe', '02:00', '06:00', 'Enes Alperen Hürüm', 'Sabah Dinletisi'),
(67, 'Perşembe', '06:00', '10:00', 'Aylin Badem', 'Top 25'),
(68, 'Perşembe', '10:00', '14:00', 'Cem Kara', 'Global Popüler'),
(69, 'Perşembe', '14:00', '16:00', 'Enes Alperen Hürüm', 'Pop Rüzgarı'),
(70, 'Perşembe', '16:00', '20:00', 'Sedat Akalın', 'Türkiye Popüler'),
(71, 'Perşembe', '20:00', '00:00', 'Cem Kara', 'Cem ile Geceler'),
(72, 'Cuma', '00:00', '06:00', 'Enes Alperen Hürüm', 'Sabah Dinletisi'),
(73, 'Cuma', '06:00', '10:00', 'Aylin Badem', 'Global Popüler'),
(74, 'Cuma', '10:00', '14:00', 'Sedat Akalın', 'Top 25'),
(75, 'Cuma', '14:00', '18:00', 'Aylin Badem', 'Rock\'n Roll'),
(76, 'Cuma', '18:00', '22:00', 'Cem Kara', 'Cem ile Geceler'),
(77, 'Cuma', '22:00', '00:00', 'Aylin Badem', 'Pop Rüzgarı'),
(78, 'Cumartesi', '00:00', '04:00', 'Sedat Akalın', 'Sabah Dinletisi'),
(79, 'Cumartesi', '04:00', '08:00', 'Enes Alperen Hürüm', 'Pop Rüzgarı'),
(80, 'Cumartesi', '08:00', '12:00', 'Aylin Badem', 'Top 25'),
(81, 'Cumartesi', '12:00', '16:00', 'Cem Kara', 'Global Popüler'),
(82, 'Cumartesi', '16:00', '19:00', 'Sedat Akalın', 'Rock\'n Roll'),
(83, 'Cumartesi', '19:00', '20:00', 'Aylin Badem', 'Türkiye Popüler'),
(84, 'Cumartesi', '20:00', '00:00', 'Cem Kara', 'Cem ile Geceler'),
(85, 'Pazar', '00:00', '04:00', 'Enes Alperen Hürüm', 'Sabah Dinletisi'),
(86, 'Pazar', '04:00', '08:00', 'Aylin Badem', 'Türkiye Popüler'),
(87, 'Pazar', '08:00', '13:00', 'Cem Kara', 'Top 25'),
(88, 'Pazar', '13:00', '17:00', 'Sedat Akalın', 'Rock\'n Roll'),
(89, 'Pazar', '17:00', '20:00', 'Enes Alperen Hürüm', 'Pop Rüzgarı'),
(90, 'Pazar', '20:00', '00:00', 'Cem Kara', 'Cem ile Geceler');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumlar`
--

CREATE TABLE `yorumlar` (
  `id` int(11) NOT NULL,
  `isim` varchar(120) COLLATE utf8_bin NOT NULL,
  `email` varchar(120) COLLATE utf8_bin NOT NULL,
  `istek` varchar(255) COLLATE utf8_bin NOT NULL,
  `yorum` varchar(999) COLLATE utf8_bin NOT NULL,
  `tarih` varchar(255) COLLATE utf8_bin NOT NULL,
  `durum` varchar(11) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Tablo döküm verisi `yorumlar`
--

INSERT INTO `yorumlar` (`id`, `isim`, `email`, `istek`, `yorum`, `tarih`, `durum`) VALUES
(41365, 'son', 'eahurum@gmail.com', 'son', 'son', '21.10.2017 02:01:40', 'istek'),
(41364, 'asda', 'deneme@deneme.com', 'hfh', 'gfh', '21.10.2017 02:00:53', 'istek'),
(41363, 'asda', 'deneme@deneme.com', 'hfh', 'gfh', '21.10.2017 02:00:53', 'istek'),
(41362, 'asda', 'deneme@deneme.com', 'hfh', 'gfh', '21.10.2017 02:00:53', 'istek'),
(41360, 'sda', 'deneme@deneme.com', 'gdf', 'gdf', '21.10.2017 01:56:40', 'istek'),
(41361, 'gfdg', 'gk145303@gmail.com', 'dfgd', 'gdfg', '21.10.2017 01:56:48', 'istek'),
(41359, 'asda@asd.com', 'asda@asd.com', 'asda@asd.com', 'asda@asd.com', '21.10.2017 01:54:23', 'istek'),
(41358, 'asda@asd.com', 'asda@asd.com', 'asda@asd.com', 'asda@asd.com', '21.10.2017 01:54:23', 'istek'),
(41355, 'dasdas', 'eahurum@gmail.com', 'dasdas', 'dasd', '20.10.2017 22:19:12', 'istek'),
(41356, 'fsdfs', 'fsdfsdad@dasdc.com', 'sdfs', 'dfsf', '21.10.2017 01:51:54', 'istek'),
(41357, 'fsdfsdad@dasdc.com', 'fsdfsdad@dasdc.com', 'fsdfsdad@dasdc.com', 'fsdfsdad@dasdc.com', '21.10.2017 01:52:49', 'istek');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `authme`
--
ALTER TABLE `authme`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Tablo için indeksler `haberler`
--
ALTER TABLE `haberler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `haberyorum`
--
ALTER TABLE `haberyorum`
  ADD PRIMARY KEY (`idsi`);

--
-- Tablo için indeksler `kategoriler`
--
ALTER TABLE `kategoriler`
  ADD PRIMARY KEY (`idsi`);

--
-- Tablo için indeksler `programlar`
--
ALTER TABLE `programlar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `reklam`
--
ALTER TABLE `reklam`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sidebar`
--
ALTER TABLE `sidebar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `site`
--
ALTER TABLE `site`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `topliste`
--
ALTER TABLE `topliste`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yayinakisi`
--
ALTER TABLE `yayinakisi`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yorumlar`
--
ALTER TABLE `yorumlar`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `authme`
--
ALTER TABLE `authme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=560;

--
-- Tablo için AUTO_INCREMENT değeri `haberler`
--
ALTER TABLE `haberler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- Tablo için AUTO_INCREMENT değeri `haberyorum`
--
ALTER TABLE `haberyorum`
  MODIFY `idsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Tablo için AUTO_INCREMENT değeri `kategoriler`
--
ALTER TABLE `kategoriler`
  MODIFY `idsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `programlar`
--
ALTER TABLE `programlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Tablo için AUTO_INCREMENT değeri `reklam`
--
ALTER TABLE `reklam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `sidebar`
--
ALTER TABLE `sidebar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `site`
--
ALTER TABLE `site`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `topliste`
--
ALTER TABLE `topliste`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `yayinakisi`
--
ALTER TABLE `yayinakisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- Tablo için AUTO_INCREMENT değeri `yorumlar`
--
ALTER TABLE `yorumlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41366;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
