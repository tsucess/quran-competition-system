-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2023 at 12:13 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quran_competition`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `avatar` varchar(100) NOT NULL,
  `userpassword` varchar(150) NOT NULL,
  `datecreated` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `firstname`, `lastname`, `username`, `avatar`, `userpassword`, `datecreated`) VALUES
(1, 'TAOFEEQS', 'AHMED', 'NUELD', '1674126511muslim-boy-holding.jpg', '$2y$10$dYw6AEVIubu17f55Uyw4T.Uv./YssvWPjLoJ7b0tr2ZyuUZfPPQOi', '2023-01-17 11:59:49.666899'),
(2, 'TAOFEEQS', 'AREMUS', 'SUCCESS', '1674127232FB_IMG_1600723540974.png', '$2y$10$/zi8ow.HVXqdKduhuMHJv.Wg/cDZhep2c1i.TVDtrKw60MC51mdxa', '2023-01-17 12:01:54.851092'),
(3, 'TAOFEEQ', 'OKI', 'NUEL', '1674545961WhatsApp Image 2022-09-04 at 18.13.26.jpg', '$2y$10$X8lsP1UBWSrmJWptocUwnOABL0wLHTzQ0EGXRp3zz/hLlCqQMg156', '2023-01-17 12:30:27.592083'),
(6, 'KHALEED', 'EXAM OFFICER', 'KHALEED', '167405457019d0574811.jpeg', '$2y$10$oMIt.lDkG3kksCTDz9FrteGc5xLKsstI9kYYQhrpMoUwmOAX0xykG', '2023-01-18 16:09:30.441284');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `banner_title` varchar(150) NOT NULL,
  `year` varchar(50) NOT NULL,
  `datecreated` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_title` varchar(50) NOT NULL,
  `datecreated` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_title`, `datecreated`) VALUES
(6, 'BASIC', '2023-01-17 17:31:50.178105'),
(7, 'INTERMEDIATE', '2023-01-17 17:32:10.419855'),
(8, 'ADVANCED', '2023-01-17 17:32:14.734078'),
(11, 'HIGHER ADVANCE', '2023-01-18 17:15:35.780201');

-- --------------------------------------------------------

--
-- Table structure for table `participant`
--

CREATE TABLE `participant` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `avatar` varchar(100) NOT NULL,
  `school` varchar(100) NOT NULL,
  `class` varchar(100) NOT NULL,
  `age` int(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `country` varchar(100) NOT NULL,
  `category_id` int(11) NOT NULL,
  `riwayat` varchar(100) NOT NULL,
  `biography` varchar(255) NOT NULL,
  `userpassword` varchar(150) NOT NULL,
  `datecreated` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `participant`
--

INSERT INTO `participant` (`id`, `firstname`, `lastname`, `username`, `avatar`, `school`, `class`, `age`, `gender`, `country`, `category_id`, `riwayat`, `biography`, `userpassword`, `datecreated`) VALUES
(3, 'AREMU', 'HASSAN', 'HASSAN', '1674547010FB_IMG_1600723540974.png', 'MSSN', 'GRADE 9', 19, 'male', 'Afghanistan', 8, 'Warsh A n Nafi', ' I am a Muslim', '$2y$10$e4lbhi/jlvy9XviAVa9Em.A80A1G5rNTeAq8MQXjMAOvmntYr8RAq', '2023-01-18 08:10:10.580475'),
(4, 'TAOFEEQ', 'OGUNSANYA', 'NUELU', '167454715519d0574811.jpeg', 'MSSN', 'GRADE 2', 19, 'female', 'Nigeria', 7, 'Abn Dhkwan An Abn Aamr', ' TESTINF', '$2y$10$FS82qefOObHD7/GV8NPHWepusHGhF5YXSyMdqcKwV4JBDkuqCm6oi', '2023-01-18 17:11:54.497801'),
(5, 'MUBARAK', 'ALIYU', 'MUBARAK', '1674546394muslim-boy-holding.jpg', 'MUSLIM SCHOOL', 'GRADE 8', 13, 'male', 'Argentina', 6, 'Assosi A n Abi Amr', ' I AM MUSLIM FROM ARGENTINA', '$2y$10$j855k3oUZoMyikJ67t3NR.PORt9QySNBX8fCex85Hz9PYZgexF8Pm', '2023-01-19 12:22:59.597002');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `category_id` varchar(50) NOT NULL,
  `question` text NOT NULL,
  `is_selected` int(1) NOT NULL,
  `datecreated` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `category_id`, `question`, `is_selected`, `datecreated`) VALUES
(5, '7', 'بِسْمِ ٱللَّهِ ٱلرَّحْمَٰنِ ٱلرَّحِيمِ ۝١&lrm;\r\n[Bismi l-lāhi r-raḥmāni r-raḥīm(i)]\r\n1 In the name of Allah,[a] the Entirely Merciful, the Especially Merciful.[b]\r\nٱلْحَمْدُ لِلَّٰهِ رَبِّ ٱلْعَالَمِينَ ۝٢&lrm;\r\n[&rsquo;alḥamdu lil-lāhi rab-bi l-&lsquo;ālamīn(a)]\r\n2 [All] praise is [due] to Allah, Lord[c] of the worlds &ndash;\r\nٱلرَّحْمَٰنِ ٱلرَّحِيمِ ۝٣&lrm;\r\n[&rsquo;ar-raḥmāni r-raḥīm(i)]\r\n3 The Entirely Merciful, the Especially Merciful,\r\nمَالِكِ[i] يَوْمِ ٱلدِّينِ ۝٤&lrm;\r\n[Māliki yawmi d-dīn(i)]\r\n4 Sovereign of the Day of Recompense.[d]\r\nإِيَّاكَ نَعْبُدُ وَإِيَّاكَ نَسْتَعِينُ ۝٥&lrm;\r\n[&rsquo;iy-yāka na&lsquo;budu wa&rsquo;iy-yāka nasta&lsquo;īn(u)]\r\n5 It is You we worship and You we ask for help.\r\nٱهْدِنَا ٱلصِّرَاطَ ٱلْمُسْتَقِيمَ ۝٦&lrm;\r\n[&rsquo;ihdinā ṣ-ṣirāṭa l-mustaqīm(a)]\r\n6 Guide us to the straight path &ndash;\r\nصِرَاطَ الَّذِينَ أَنعَمتَ عَلَيهِمْ غَيرِ المَغضُوبِ عَلَيهِمْ وَلاَ الضَّالِّينَ ۝٧&lrm;\r\n[Ṣirāṭa l-ladhīna &rsquo;an&lsquo;amta &lsquo;alayhim, ghayri l-maghḍūbi &lsquo;alayhim wala ḍ-ḍāl-līn(a)]', 0, '2023-01-17 21:52:25.575821'),
(7, '6', 'بِسْمِ ٱللَّهِ ٱلرَّحْمَٰنِ ٱلرَّحِيمِ ۝١&lrm;\r\n[Bismi l-lāhi r-raḥmāni r-raḥīm(i)]\r\n1 In the name of Allah,[a] the Entirely Merciful, the Especially Merciful.[b]\r\nٱلْحَمْدُ لِلَّٰهِ رَبِّ ٱلْعَالَمِينَ ۝٢&lrm;\r\n[&rsquo;alḥamdu lil-lāhi rab-bi l-&lsquo;ālamīn(a)]\r\n2 [All] praise is [due] to Allah, Lord[c] of the worlds &ndash;\r\nٱلرَّحْمَٰنِ ٱلرَّحِيمِ ۝٣&lrm;\r\n[&rsquo;ar-raḥmāni r-raḥīm(i)]\r\n3 The Entirely Merciful, the Especially Merciful,\r\nمَالِكِ[i] يَوْمِ ٱلدِّينِ ۝٤&lrm;\r\n[Māliki yawmi d-dīn(i)]\r\n4 Sovereign of the Day of Recompense.[d]\r\nإِيَّاكَ نَعْبُدُ وَإِيَّاكَ نَسْتَعِينُ ۝٥&lrm;\r\n[&rsquo;iy-yāka na&lsquo;budu wa&rsquo;iy-yāka nasta&lsquo;īn(u)]\r\n5 It is You we worship and You we ask for help.\r\nٱهْدِنَا ٱلصِّرَاطَ ٱلْمُسْتَقِيمَ ۝٦&lrm;\r\n[&rsquo;ihdinā ṣ-ṣirāṭa l-mustaqīm(a)]\r\n6 Guide us to the straight path &ndash;\r\nصِرَاطَ الَّذِينَ أَنعَمتَ عَلَيهِمْ غَيرِ المَغضُوبِ عَلَيهِمْ وَلاَ الضَّالِّينَ ۝٧&lrm;\r\n[Ṣirāṭa l-ladhīna &rsquo;an&lsquo;amta &lsquo;alayhim, ghayri l-maghḍūbi &lsquo;alayhim wala ḍ-ḍāl-līn(a)]', 0, '2023-01-18 14:22:16.507044'),
(8, '6', 'بِسْمِ ٱللَّهِ ٱلرَّحْمَٰنِ ٱلرَّحِيمِ ۝١&lrm;\r\n[Bismi l-lāhi r-raḥmāni r-raḥīm(i)]\r\n1 In the name of Allah,[a] the Entirely Merciful, the Especially Merciful.[b]\r\nٱلْحَمْدُ لِلَّٰهِ رَبِّ ٱلْعَالَمِينَ ۝٢&lrm;\r\n[&rsquo;alḥamdu lil-lāhi rab-bi l-&lsquo;ālamīn(a)]\r\n2 [All] praise is [due] to Allah, Lord[c] of the worlds &ndash;\r\nٱلرَّحْمَٰنِ ٱلرَّحِيمِ ۝٣&lrm;\r\n[&rsquo;ar-raḥmāni r-raḥīm(i)]\r\n3 The Entirely Merciful, the Especially Merciful,\r\nمَالِكِ[i] يَوْمِ ٱلدِّينِ ۝٤&lrm;\r\n[Māliki yawmi d-dīn(i)]\r\n4 Sovereign of the Day of Recompense.[d]\r\nإِيَّاكَ نَعْبُدُ وَإِيَّاكَ نَسْتَعِينُ ۝٥&lrm;\r\n[&rsquo;iy-yāka na&lsquo;budu wa&rsquo;iy-yāka nasta&lsquo;īn(u)]\r\n5 It is You we worship and You we ask for help.\r\nٱهْدِنَا ٱلصِّرَاطَ ٱلْمُسْتَقِيمَ ۝٦&lrm;\r\n[&rsquo;ihdinā ṣ-ṣirāṭa l-mustaqīm(a)]\r\n6 Guide us to the straight path &ndash;\r\nصِرَاطَ الَّذِينَ أَنعَمتَ عَلَيهِمْ غَيرِ المَغضُوبِ عَلَيهِمْ وَلاَ الضَّالِّينَ ۝٧&lrm;\r\n[Ṣirāṭa l-ladhīna &rsquo;an&lsquo;amta &lsquo;alayhim, ghayri l-maghḍūbi &lsquo;alayhim wala ḍ-ḍāl-līn(a)]', 0, '2023-01-18 14:22:25.006282'),
(9, '8', 'new quewtt', 0, '2023-01-18 17:16:19.794212'),
(10, '11', 'بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ\r\nالٓمٓ\r\n1\r\nذَٰلِكَ ٱلْكِتَـٰبُ لَا رَيْبَ ۛ فِيهِ ۛ هُدًى لِّلْمُتَّقِينَ\r\n2\r\nٱلَّذِينَ يُؤْمِنُونَ بِٱلْغَيْبِ وَيُقِيمُونَ ٱلصَّلَوٰةَ وَمِمَّا رَزَقْنَـٰهُمْ يُنفِقُونَ\r\n3\r\nوَٱلَّذِينَ يُؤْمِنُونَ بِمَآ أُنزِلَ إِلَيْكَ وَمَآ أُنزِلَ مِن قَبْلِكَ وَبِٱلْـَٔاخِرَةِ هُمْ يُوقِنُونَ\r\n4\r\nأُو۟لَـٰٓئِكَ عَلَىٰ هُدًى مِّن رَّبِّهِمْ ۖ وَأُو۟لَـٰٓئِكَ هُمُ ٱلْمُفْلِحُونَ\r\n5\r\nإِنَّ ٱلَّذِينَ كَفَرُوا۟ سَوَآءٌ عَلَيْهِمْ ءَأَنذَرْتَهُمْ أَمْ لَمْ تُنذِرْهُمْ لَا يُؤْمِنُونَ\r\n6\r\nخَتَمَ ٱللَّهُ عَلَىٰ قُلُوبِهِمْ وَعَلَىٰ سَمْعِهِمْ ۖ وَعَلَىٰٓ أَبْصَـٰرِهِمْ غِشَـٰوَةٌ ۖ وَلَهُمْ عَذَابٌ عَظِيمٌ\r\n7\r\nوَمِنَ ٱلنَّاسِ مَن يَقُولُ ءَامَنَّا بِٱللَّهِ وَبِٱلْيَوْمِ ٱلْـَٔاخِرِ وَمَا هُم بِمُؤْمِنِينَ\r\n8\r\nيُخَـٰدِعُونَ ٱللَّهَ وَٱلَّذِينَ ءَامَنُوا۟ وَمَا يَخْدَعُونَ إِلَّآ أَنفُسَهُمْ وَمَا يَشْعُرُونَ\r\n9\r\nفِى قُلُوبِهِم مَّرَضٌ فَزَادَهُمُ ٱللَّهُ مَرَضًا ۖ وَلَهُمْ عَذَابٌ أَلِيمٌۢ بِمَا كَانُوا۟ يَكْذِبُونَ\r\n10\r\nوَإِذَا قِيلَ لَهُمْ لَا تُفْسِدُوا۟ فِى ٱلْأَرْضِ قَالُوٓا۟ إِنَّمَا نَحْنُ مُصْلِحُونَ\r\n11\r\nأَلَآ إِنَّهُمْ هُمُ ٱلْمُفْسِدُونَ وَلَـٰكِن لَّا يَشْعُرُونَ\r\n12\r\nوَإِذَا قِيلَ لَهُمْ ءَامِنُوا۟ كَمَآ ءَامَنَ ٱلنَّاسُ قَالُوٓا۟ أَنُؤْمِنُ كَمَآ ءَامَنَ ٱلسُّفَهَآءُ ۗ أَلَآ إِنَّهُمْ هُمُ ٱلسُّفَهَآءُ وَلَـٰكِن لَّا يَعْلَمُونَ\r\n13\r\nوَإِذَا لَقُوا۟ ٱلَّذِينَ ءَامَنُوا۟ قَالُوٓا۟ ءَامَنَّا وَإِذَا خَلَوْا۟ إِلَىٰ شَيَـٰطِينِهِمْ قَالُوٓا۟ إِنَّا مَعَكُمْ إِنَّمَا نَحْنُ مُسْتَهْزِءُونَ\r\n14\r\nٱللَّهُ يَسْتَهْزِئُ بِهِمْ وَيَمُدُّهُمْ فِى طُغْيَـٰنِهِمْ يَعْمَهُونَ\r\n15\r\nأُو۟لَـٰٓئِكَ ٱلَّذِينَ ٱشْتَرَوُا۟ ٱلضَّلَـٰلَةَ بِٱلْهُدَىٰ فَمَا رَبِحَت تِّجَـٰرَتُهُمْ وَمَا كَانُوا۟ مُهْتَدِينَ\r\n16\r\nمَثَلُهُمْ كَمَثَلِ ٱلَّذِى ٱسْتَوْقَدَ نَارًا فَلَمَّآ أَضَآءَتْ مَا حَوْلَهُۥ ذَهَبَ ٱللَّهُ بِنُورِهِمْ وَتَرَكَهُمْ فِى ظُلُمَـٰتٍ لَّا يُبْصِرُونَ\r\n17\r\nصُمٌّۢ بُكْمٌ عُمْىٌ فَهُمْ لَا يَرْجِعُونَ\r\n18\r\nأَوْ كَصَيِّبٍ مِّنَ ٱلسَّمَآءِ فِيهِ ظُلُمَـٰتٌ وَرَعْدٌ وَبَرْقٌ يَجْعَلُونَ أَصَـٰبِعَهُمْ فِىٓ ءَاذَانِهِم مِّنَ ٱلصَّوَٰعِقِ حَذَرَ ٱلْمَوْتِ ۚ وَٱللَّهُ مُحِيطٌۢ بِٱلْكَـٰفِرِينَ\r\n19\r\nيَكَادُ ٱلْبَرْقُ يَخْطَفُ أَبْصَـٰرَهُمْ ۖ كُلَّمَآ أَضَآءَ لَهُم مَّشَوْا۟ فِيهِ وَإِذَآ أَظْلَمَ عَلَيْهِمْ قَامُوا۟ ۚ وَلَوْ شَآءَ ٱللَّهُ لَذَهَبَ بِسَمْعِهِمْ وَأَبْصَـٰرِهِمْ ۚ إِنَّ ٱللَّهَ عَلَىٰ كُلِّ شَىْءٍ قَدِيرٌ\r\n20\r\nيَـٰٓأَيُّهَا ٱلنَّاسُ ٱعْبُدُوا۟ رَبَّكُمُ ٱلَّذِى خَلَقَكُمْ وَٱلَّذِينَ مِن قَبْلِكُمْ لَعَلَّكُمْ تَتَّقُونَ\r\n21\r\nٱلَّذِى جَعَلَ لَكُمُ ٱلْأَرْضَ فِرَٰشًا وَٱلسَّمَآءَ بِنَآءً وَأَنزَلَ مِنَ ٱلسَّمَآءِ مَآءً فَأَخْرَجَ بِهِۦ مِنَ ٱلثَّمَرَٰتِ رِزْقًا لَّكُمْ ۖ فَلَا تَجْعَلُوا۟ لِلَّهِ أَندَادًا وَأَنتُمْ تَعْلَمُونَ\r\n22\r\nوَإِن كُنتُمْ فِى رَيْبٍ مِّمَّا نَزَّلْنَا عَلَىٰ عَبْدِنَا فَأْتُوا۟ بِسُورَةٍ مِّن مِّثْلِهِۦ وَٱدْعُوا۟ شُهَدَآءَكُم مِّن دُونِ ٱللَّهِ إِن كُنتُمْ صَـٰدِقِينَ\r\n23\r\nفَإِن لَّمْ تَفْعَلُوا۟ وَلَن تَفْعَلُوا۟ فَٱتَّقُوا۟ ٱلنَّارَ ٱلَّتِى وَقُودُهَا ٱلنَّاسُ وَٱلْحِجَارَةُ ۖ أُعِدَّتْ لِلْكَـٰفِرِينَ\r\n24\r\nوَبَشِّرِ ٱلَّذِينَ ءَامَنُوا۟ وَعَمِلُوا۟ ٱلصَّـٰلِحَـٰتِ أَنَّ لَهُمْ جَنَّـٰتٍ تَجْرِى مِن تَحْتِهَا ٱلْأَنْهَـٰرُ ۖ كُلَّمَا رُزِقُوا۟ مِنْهَا مِن ثَمَرَةٍ رِّزْقًا ۙ قَالُوا۟ هَـٰذَا ٱلَّذِى رُزِقْنَا مِن قَبْلُ ۖ وَأُتُوا۟ بِهِۦ مُتَشَـٰبِهًا ۖ وَلَهُمْ فِيهَآ أَزْوَٰجٌ مُّطَهَّرَةٌ ۖ وَهُمْ فِيهَا خَـٰلِدُونَ\r\n25\r\nإِنَّ ٱللَّهَ لَا يَسْتَحْىِۦٓ أَن يَضْرِبَ مَثَلًا مَّا بَعُوضَةً فَمَا فَوْقَهَا ۚ فَأَمَّا ٱلَّذِينَ ءَامَنُوا۟ فَيَعْلَمُونَ أَنَّهُ ٱلْحَقُّ مِن رَّبِّهِمْ ۖ وَأَمَّا ٱلَّذِينَ كَفَرُوا۟ فَيَقُولُونَ مَاذَآ أَرَادَ ٱللَّهُ بِهَـٰذَا مَثَلًا ۘ يُضِلُّ بِهِۦ كَثِيرًا وَيَهْدِى بِهِۦ كَثِيرًا ۚ وَمَا يُضِلُّ بِهِۦٓ إِلَّا ٱلْفَـٰسِقِينَ\r\n26\r\nٱلَّذِينَ يَنقُضُونَ عَهْدَ ٱللَّهِ مِنۢ بَعْدِ مِيثَـٰقِهِۦ وَيَقْطَعُونَ مَآ أَمَرَ ٱللَّهُ بِهِۦٓ أَن يُوصَلَ وَيُفْسِدُونَ فِى ٱلْأَرْضِ ۚ أُو۟لَـٰٓئِكَ هُمُ ٱلْخَـٰسِرُونَ\r\n27\r\nكَيْفَ تَكْفُرُونَ بِٱللَّهِ وَكُنتُمْ أَمْوَٰتًا فَأَحْيَـٰكُمْ ۖ ثُمَّ يُمِيتُكُمْ ثُمَّ يُحْيِيكُمْ ثُمَّ إِلَيْهِ تُرْجَعُونَ\r\n28\r\nهُوَ ٱلَّذِى خَلَقَ لَكُم مَّا فِى ٱلْأَرْضِ جَمِيعًا ثُمَّ ٱسْتَوَىٰٓ إِلَى ٱلسَّمَآءِ فَسَوَّىٰهُنَّ سَبْعَ سَمَـٰوَٰتٍ ۚ وَهُوَ بِكُلِّ شَىْءٍ عَلِيمٌ\r\n29\r\nوَإِذْ قَالَ رَبُّكَ لِلْمَلَـٰٓئِكَةِ إِنِّى جَاعِلٌ فِى ٱلْأَرْضِ خَلِيفَةً ۖ قَالُوٓا۟ أَتَجْعَلُ فِيهَا مَن يُفْسِدُ فِيهَا وَيَسْفِكُ ٱلدِّمَآءَ وَنَحْنُ نُسَبِّحُ بِحَمْدِكَ وَنُقَدِّسُ لَكَ ۖ قَالَ إِنِّىٓ أَعْلَمُ مَا لَا تَعْلَمُونَ\r\n30\r\nوَعَلَّمَ ءَادَمَ ٱلْأَسْمَآءَ كُلَّهَا ثُمَّ عَرَضَهُمْ عَلَى ٱلْمَلَـٰٓئِكَةِ فَقَالَ أَنۢبِـُٔونِى بِأَسْمَآءِ هَـٰٓؤُلَآءِ إِن كُنتُمْ صَـٰدِقِينَ\r\n31\r\nقَالُوا۟ سُبْحَـٰنَكَ لَا عِلْمَ لَنَآ إِلَّا مَا عَلَّمْتَنَآ ۖ إِنَّكَ أَنتَ ٱلْعَلِيمُ ٱلْحَكِيمُ\r\n32\r\nقَالَ يَـٰٓـَٔادَمُ أَنۢبِئْهُم بِأَسْمَآئِهِمْ ۖ فَلَمَّآ أَنۢبَأَهُم بِأَسْمَآئِهِمْ قَالَ أَلَمْ أَقُل لَّكُمْ إِنِّىٓ أَعْلَمُ غَيْبَ ٱلسَّمَـٰوَٰتِ وَٱلْأَرْضِ وَأَعْلَمُ مَا تُبْدُونَ وَمَا كُنتُمْ تَكْتُمُونَ\r\n33\r\nوَإِذْ قُلْنَا لِلْمَلَـٰٓئِكَةِ ٱسْجُدُوا۟ لِـَٔادَمَ فَسَجَدُوٓا۟ إِلَّآ إِبْلِيسَ أَبَىٰ وَٱسْتَكْبَرَ وَكَانَ مِنَ ٱلْكَـٰفِرِينَ\r\n34\r\nوَقُلْنَا يَـٰٓـَٔادَمُ ٱسْكُنْ أَنتَ وَزَوْجُكَ ٱلْجَنَّةَ وَكُلَا مِنْهَا رَغَدًا حَيْثُ شِئْتُمَا وَلَا تَقْرَبَا هَـٰذِهِ ٱلشَّجَرَةَ فَتَكُونَا مِنَ ٱلظَّـٰلِمِينَ\r\n35\r\nفَأَزَلَّهُمَا ٱلشَّيْطَـٰنُ عَنْهَا فَأَخْرَجَهُمَا مِمَّا كَانَا فِيهِ ۖ وَقُلْنَا ٱهْبِطُوا۟ بَعْضُكُمْ لِبَعْضٍ عَدُوٌّ ۖ وَلَكُمْ فِى ٱلْأَرْضِ مُسْتَقَرٌّ وَمَتَـٰعٌ إِلَىٰ حِينٍ\r\n36\r\nفَتَلَقَّىٰٓ ءَادَمُ مِن رَّبِّهِۦ كَلِمَـٰتٍ فَتَابَ عَلَيْهِ ۚ إِنَّهُۥ هُوَ ٱلتَّوَّابُ ٱلرَّحِيمُ\r\n37\r\nقُلْنَا ٱهْبِطُوا۟ مِنْهَا جَمِيعًا ۖ فَإِمَّا يَأْتِيَنَّكُم مِّنِّى هُدًى فَمَن تَبِعَ هُدَاىَ فَلَا خَوْفٌ عَلَيْهِمْ وَلَا هُمْ يَحْزَنُونَ\r\n38\r\nوَٱلَّذِينَ كَفَرُوا۟ وَكَذَّبُوا۟ بِـَٔايَـٰتِنَآ أُو۟لَـٰٓئِكَ أَصْحَـٰبُ ٱلنَّارِ ۖ هُمْ فِيهَا خَـٰلِدُونَ\r\n39\r\nيَـٰبَنِىٓ إِسْرَٰٓءِيلَ ٱذْكُرُوا۟ نِعْمَتِىَ ٱلَّتِىٓ أَنْعَمْتُ عَلَيْكُمْ وَأَوْفُوا۟ بِعَهْدِىٓ أُوفِ بِعَهْدِكُمْ وَإِيَّـٰىَ فَٱرْهَبُونِ\r\n40\r\nوَءَامِنُوا۟ بِمَآ أَنزَلْتُ مُصَدِّقًا لِّمَا مَعَكُمْ وَلَا تَكُونُوٓا۟ أَوَّلَ كَافِرٍۭ بِهِۦ ۖ وَلَا تَشْتَرُوا۟ بِـَٔايَـٰتِى ثَمَنًا قَلِيلًا وَإِيَّـٰىَ فَٱتَّقُونِ\r\n41\r\nوَلَا تَلْبِسُوا۟ ٱلْحَقَّ بِٱلْبَـٰطِلِ وَتَكْتُمُوا۟ ٱلْحَقَّ وَأَنتُمْ تَعْلَمُونَ\r\n42\r\nوَأَقِيمُوا۟ ٱلصَّلَوٰةَ وَءَاتُوا۟ ٱلزَّكَوٰةَ وَٱرْكَعُوا۟ مَعَ ٱلرَّٰكِعِينَ\r\n43\r\nأَتَأْمُرُونَ ٱلنَّاسَ بِٱلْبِرِّ وَتَنسَوْنَ أَنفُسَكُمْ وَأَنتُمْ تَتْلُونَ ٱلْكِتَـٰبَ ۚ أَفَلَا تَعْقِلُونَ', 0, '2023-01-19 13:20:36.485317');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(11) NOT NULL,
  `participant_id` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `participant_id`, `score`, `comments`, `date_created`) VALUES
(1, 3, 100, 'Excellent', '2023-01-23 00:54:23'),
(2, 4, 80, 'Very Good                                                                                                ', '2023-01-23 00:55:01'),
(3, 5, 50, 'Average', '2023-01-23 08:57:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `participant`
--
ALTER TABLE `participant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `participant`
--
ALTER TABLE `participant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
