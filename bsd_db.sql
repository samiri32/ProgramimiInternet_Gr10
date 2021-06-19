-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2021 at 07:04 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bsd_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `user_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `titulli` varchar(255) NOT NULL,
  `autori` varchar(255) NOT NULL,
  `vleresimi` double NOT NULL,
  `zhanri` varchar(255) NOT NULL,
  `caption` varchar(1000) NOT NULL,
  `gjuha` varchar(255) NOT NULL,
  `datapub` date NOT NULL,
  `link` varchar(255) NOT NULL,
  `img` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`user_id`, `id`, `titulli`, `autori`, `vleresimi`, `zhanri`, `caption`, `gjuha`, `datapub`, `link`, `img`) VALUES
(1, 7, 'Bardha e Temalit', 'Pashko Vasa', 9.3, 'Roman', '“Bardha e Temalit” është një roman dashurie, por njëherësh është edhe një pasqyrë e shoqërisë shqiptare të shekullit të kaluar, më mirë të themi e një pjese të kësaj shoqërie, e Shqipërisë Verior. Te “Bardha e Temalit”, ashtu si në shumë vepra të tjera, dashuria e vërtetë, është e dënuar që në fillim të përfundojë me tragjedi.', 'Shqip', '1970-04-25', 'https://drive.google.com/file/d/1UWXWmoQVcSzOLPu7YD1_Vb6OID2ROQ9K/view', 'bardha.jpg'),
(1, 8, 'Becoming', 'Michelle Obama', 8.5, 'Autobiografi', 'Kur ishte vetëm një vajzë e vogël, e gjithë bota e Michelle Robinson-it ishte e mbyllur brencla Anës Jugore të Çikagos, aty ku ajo dhe i vëllai, Craig-u, ndanin së bashku një dhomëz në apartamentin e vogël të familjes dhe luanin ekakusheka në park. Pikërisht në këtë vend, prindërit e saj, Fraser dhe Marian Robinson-i, e mësuan të fliste haptas dhe të mos kishte frikë. Por shumë shpejt jeta e çoi tepër larg, nga sallat e Princeton-it, ku mësoi për herë të parë se çfarë nënkuptonte të ishe në një dhomë e vetmja grua me ngjyrë, deri te rrokaqielli ku punoi si avokate e fuqishme tregtare dhe ku, mëngjesin e një dite vere, një student i Juridikut me emrin Barack Obama, hyri në zyrën e saj dhe ia shpartalloi të gjitha planet. Në këtë libër, për herë të pare, Michelle Obama përshkruan fillimet e martesës, vështirësitë për të gjetur një ekuilibër mes karrierës, familjes dhe ngjitjes së vrullshme të të shoqit në politikë. Na zbulon debatet e tyre lidhur me mundësinë për të konkurruar për presid', 'Anglisht', '2020-06-05', 'https://drive.google.com/file/d/1r3EHOXAnDlDsIGt6Vezj8FeOVGkX8-9f/view', 'michelle.php'),
(1, 9, 'Prilli i Thyer', 'Ismail Kadare', 10, 'Novele', 'Duke lexuar &#34;Prillin e thyer&#34; kuptohet lehtësisht përse dhe me çfarë force Ismail Kadare është pasionuar për tragjedinë dhe për dy përfaqësuesit më të shquar të saj, Shekspirin dhe Eskilin. &#34;Miku, besa dhe gjakmarrja janë rrotat e mekanizmit të tragjedisë antike, dhe të futesh në mekanizmin e tyre është të shikosh mundësinë e tragjedisë&#34;. Në rrafshnaltën ku udhëtojnë Besian Vorpsi dhe gruaja e tij kjo mundësi është një realitet shumëshekullor. Kadare e ka vendosur kuadrin e romanit të tij në krahinën e Mirditës, një rrafshnaltë e izoluar nga pjesa tjetër e vendit, pa rrugë të denja për këtë emër, dhe bastion katolik e tradicionalist. Këtu, në këtë atelie të tragjedisë shkrimtari ka përqendruar karakteristikat e kanunit (domethënë canon, e drejta zakonore) të shumë krahinave të veriut e të lindjes, të marra nga përshtypjet e mbledhura gjatë qëndrimit të tij në veri, në fund të viteve &#39;70. Kështu, personazhi i Ali Binakut është huajtur nga realiteti: Binak Aliu, që ës', 'Shqip', '2000-10-01', 'https://drive.google.com/file/d/1YYlB-YDMNnxlNcIgQZwdwUDpTnxgZ2Xa/view', 'prilliithyer.php'),
(1, 10, 'Diqka', 'Dikush', 0, 'Diqka', 'eeee', 'Diqka', '1970-11-24', 'Link', 'Bageti e bujqesi.png');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `body`, `created_at`, `image`) VALUES
(36, 1, 'Dorëshkrime të rralla të Fishtës ekspozohen në Bibliotekën Kombëtare', 'Në 80 vjetorin e vdekjes së At Gjegj Fishtës, Biblioteka Kombëtare, “Pjetër Bogdani” në Prishtinë ka hapur sot ekspozitën, “per Atmé e fé” – Gjergj Fishta. Në këtë ekspozitë janë ekspozuar vepra e dorëshkrime të rralla e të pabotuara të Fishtës, por edhe vepra monografike e tematike të shkruara për Fishtën, që gjenden në koleksionin e BKK-së, “Pjetër Bogdani”. Në ceremoninë e hapjes së kësaj ekspozite mori pjesë edhe Ipeshkvi i Kosovës, Dodë Gjergji dhe zv/ministri i Kulturës, Rinisë dhe Sportit, Engelbert Zefaj.', '2021-05-20 21:26:52', 'gjergji.jpg'),
(37, 1, 'Aktiviteti Prishtina lexon', 'Në kuadër të festivalit PrishtinaLexon, banorët e kryeqytetit patën mundësinë të regjistrohen pa pagesë në të gjitha degët e Bibliotekës &#34;Hivzi Sulejmani&#34;, kjo një gjë e cila u mirëpritë nga të gjithë qytetarët pa dallim, ndërsa në sheshin &#34;Zahir Pjaziti&#34;, nga të gjithë lexuesit u shpallën lexuesit e dalluar të Komunës së Prishtinës, duke përfshirë të gjitha grupmoshat, si në vijim:\r\n\r\n1. Era Dragusha, nxënëse;              \r\n2. Flamur Foniqi, student;                    \r\n3. Hazir Mehmeti, pensionist;                  \r\nTre lexuesit e vitit morën mirënjohje dhe libra, dhuratë nga libraria &#34;Dukagjiin&#34;, Biblioteka &#34;Hivzi Sulejmani&#34; dhe Aleanca franceze.', '2021-05-20 21:58:15', 'aktiviteti.png'),
(38, 1, 'Dhurohen libra në SOS Fshatin e fëmijëve', 'Fëmijët e kopshtit “Elita”, kanë dhuruar ndihma simbolike për fëmijët e fshatit “SOS”, kurse arushi “Lino”, ka shpërblyer fëmijët për humanitetin e tyre , me libra për ngjyrosje. Në kuadër të kampanjës “Fëmijët ndihmojnë fëmijët”, fëmijë të kopshteve të ndryshme në Komunën e Prishtinës janë duke dhuruar rrobe për fëmijët e SOS Fshatit, kampanjë kjo që është duke u zhvilluar me brendin Lino, shkruan KultPlus.', '2021-05-20 22:19:39', 'dhurohenlibra.png'),
(39, 1, 'Leximi gjatë pandemisë, bibliotekat pa vizitorë dhe lulëzim i shitjes së librave', 'Mbyllja si pasojë e pandemisë shkaktoi tkurrje drastike të vizitorëve në bibliotekat e vendit ndërkohë që libraritë shënuan rritje në shitje të librave gjatë këtij viti. E pajisur me 70 mijë libra e me 80 ulëse për lexim, biblioteka “Sadik Tafarshiku” në Ferizaj këtë të martë kishte mbetur vetëm me tetë lexues në sallë. Ky është një numër jo i zakonshëm për bibliotekën e cila vizitohet nga nxënës, studentë, studiues e banorë të Ferizajt e rrethinës.', '2021-05-20 22:20:22', 'Dukagjinn-640x480.jpg'),
(40, 1, 'Arsimimi i grave përmes aktiviteteve', 'Në ambientet e Këndit Amerikan, znj. Maja Adiga, zëvendës - asistente e sekretarit të shtetit për programe Akademike në kuadër të Byrosë për çështje arsimore dhe kulturore të Departamentit Amerikan te Shtetit u takua me partnerë si; Biblioteka Hivzi Sulejmani Dega – “ Biblioteka Përkujtimore”, Këndi Amerikan dhe SOS – Fshatrat e fëmijëve të Kosovës. Qëllimi i takimit ishte programi që u ndihmon grave të margjinalizuara të shoqërisë të mësojnë shkrim-lexim, anglisht dhe kompjuter.', '2021-05-20 22:22:32', 'arsimimi.png'),
(41, 1, 'Lagjet e Prishtinës bëhen me mini-biblioteka', 'Hapet mini-biblioteka e parë në Prishtinë me moton “Sill një libër merr një tjetër”. Sot u hap mini-biblioteka e parë në Parkun e vjetër në lagjen “Dardania” të Prishtinës, e cila u mundësua nga ETEA, Kuvendi i të Rinjve të Prishtinës, Libraria “Dukagjini” dhe FIQ.Mini-biblioteka do të ketë qasje 24 orë në 7 ditë të javës dhe do të jetë nën kujdesin e banorëve të lagjes. E njëjta do të ketë mbi 100 libra në dispozicion të banorëve të lagjes dhe të të gjithë të interesuarve për shkëmbim të librave apo huazim të librit përgjatë qëndrimit në lagje.', '2021-05-20 22:23:32', 'mini-biblioteka.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `emri` varchar(255) NOT NULL,
  `mbiemri` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `telefoni` varchar(255) NOT NULL,
  `adresa` varchar(255) NOT NULL,
  `user_datejoined` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `emri`, `mbiemri`, `email`, `password`, `telefoni`, `adresa`, `user_datejoined`, `status`) VALUES
(1, 'Arbresha', 'Zeqiri', 'az@gmail.com', '$2y$10$NUHgDfqKHN9ZpOMCYYKiLO0S59qvL4x10tQXsqrsuk69ACzzo2HgS', '+38349221756', 'Prishtine', '2021-05-19 10:50:41', 'admin'),
(2, 'Samir', 'Simnica', 'ss@gmail.com', '$2y$10$3UqDXXH6ZJdqPWyn9hqzxeXnarNmT07PKVG0M5KiepAN15QtNBS2y', '+38345624380', 'Prishtine', '2021-05-19 11:11:48', 'admin'),
(3, 'Alma', 'Latifi', 'al@gmail.com', '$2y$10$X7DJle8KQexgWFpJ7oo5OOQfBo7AfMT1eid.L/lgwYQw6xoyaLSAu', '+38348245976', 'Gjilan', '2021-05-19 11:15:39', 'admin'),
(4, 'Ardi', 'Ismajli', 'ai@gmail.com', '$2y$10$js6wqhh434WEjIpINJ3Md.wjCfnuJWbnvR.mZaGT/CVuyqjMDjTXO', '+38344512647', 'Mitrovice', '2021-05-19 11:18:21', 'admin'),
(5, 'Ana', 'Sopa', 'as@gmail.com', '$2y$10$xOBm9diVjgAe5FlHBjThEOhgherefiYW/gZtxWPpWPPPCbTkzCQX.', '+38343216875', 'Rome', '2021-05-19 11:19:16', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
