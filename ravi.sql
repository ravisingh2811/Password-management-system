-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2021 at 06:09 AM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ravi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `name`, `email`, `phone`, `password`) VALUES
(1, 'Ravi Kumar Singh', 'rk250020@gmail.com', '9142009693', 'L0hJTEVUUWRxWXRQMXIxUmcrcCtPUT09OjpuBY8Dhe7aWiYLpn1iZ1v7');

-- --------------------------------------------------------

--
-- Table structure for table `mess`
--

CREATE TABLE `mess` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `number` varchar(25) NOT NULL,
  `subject` varchar(250) NOT NULL,
  `message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mess`
--

INSERT INTO `mess` (`id`, `name`, `email`, `number`, `subject`, `message`) VALUES
(1, 'Ravi Kumar Singh', 'rk250020@gmail.com', '9142009693', 'Activation for my courses multi millionarire digital empire', 'ueqwueoiweuiwe');

-- --------------------------------------------------------

--
-- Table structure for table `pass`
--

CREATE TABLE `pass` (
  `id` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `website` varchar(60) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `password` varbinary(100) NOT NULL,
  `512_encrypt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pass`
--

INSERT INTO `pass` (`id`, `email`, `website`, `user_name`, `password`, `512_encrypt`) VALUES
(13, 'ravi13@gmail.com', 'weqwwew32323', 'rk250020@gmail.com', 0x4e7a677a4f4449324e7a4d34, ''),
(14, 'ravi13@gmail.com', 'yeweuwyiue', 'dimpal@buzztro.dev', 0x4d54497a, ''),
(15, 'dimpal@buzztro.dev', 'http://www.brothersinarmstreeservices.com', 'dimpal@buzztro.dev', 0x4d54497a4d7a51794d7a497a4d673d3d, ''),
(20, 'ravi123@gmail.com', 'http://www.brothersinarmstreeservices.com/contact/', 'root', 0x495635555653706b557955335230453151475a464b6c7052, ''),
(21, 'root@gmail.com', 'http://www.brothersinarmstreeservices.com', 'ravisingh28', 0x636d4632615541794f44457849773d3d, ''),
(22, 'ravisingh28@gmail.com', 'http://www.brothersinarmstvices.com', 'ravisingh28', 0x636d4632615541794f44457849773d3d, ''),
(23, 'ravisingh28@gmail.com', 'http://www.brothersinarmstvices.comeweeqweqw', 'ravisingh28', 0x4e7a4e4563586472535374494b7a6c5561455655566e464b54576868555430394f6a714c6c764b6c3766435277426745596f62326a516547, ''),
(24, 'ravisingh28@gmail.com', 'http://www.brothersinarmstrees68767ervices.com', 'ravising33', 0x646c687062555a6e4f446c5663564e6e4f5735686233704d556b3951647a30394f6a7277675a5963702f71775663497054586e6e59575a64, ''),
(25, 'dimpal@buzztro.dev', 'http://www.brothersinarmstvices.com', 'dimpal@buzztro.dev', 0x59697453536c564a643077304c307779526e56704d4859345a6d6473647a30394f6a6f6474462b6a78694577313052724e7a50533648664f, ''),
(26, 'dimpal@buzztro.dev', 'http://www.brothersinarmstreeservices.com', 'dimpal@buzztro.dev', 0x63325274516c7049595868694f484e6f4c7a42744e475a30637a6878647a30394f6a7045587a69552b425a37574669484a4e686a6a47712f, ''),
(27, 'dimpal@buzztro', 'http://www.brothersinarmstreeservices.com/contact/', 'dimpal@buzztro.dev', 0x4d6c706b4d485a5757466c745433637752465a584f433935596d5a58555430394f6a6f737573656c6f67493532654669397a366330534754, ''),
(28, 'rk250020@gmail.com', 'https://meet.google.com/hws-wram-wty', 'ravisingh28', 0x6230557a546a45344d464a515155353153326c564b3142445a314659647a30394f6a725164693071752b676f5a42326f657342374f2b6f77, ''),
(29, 'dimpal@buzztro.deva', 'http://www.brothersinarmstvices.com', 'dimpal@buzztro.dev312313', 0x6356526b4e56707565545654516d4a7553573555643146304d566461647a30394f6a722b446c66365577484164782b57654153552b333558, ''),
(30, 'dimpal@buzztro.deva', 'http://localhost/phpmyadmin/sql.php?server=1&db=ravi&table=u', 'dimpal@buzztro.dev', 0x63697456556d7049614574324e314e4c61545a364d31466853326453515430394f6a72307a2b504767644a6271574a69384f5934384e774f, ''),
(31, 'test3@gmail.com', 'http://www.brothersinarmstvices.com', 'rk250020@gmail.com', 0x4e445131546a5a33524551345132704a614451774f57706f596c4651555430394f6a715a353779544564595462655566396f6f65434f306f, ''),
(32, 'ravi@gmail.com', 'http://www.brothersinarmstvices.com', 'rk250020@gmail.com', 0x5957464b62454e686433685863325a69637a524c576b52694d445572515430394f6a714c5159614744344566536b47707643626b4f686157, 'f776f2b8de89f7a61d5601ef9104878776b9e7bb9abe74a96b59aa5cbb9fa416ca105fe7185de06b322f20c9a9915e2f558a00dece1c977245b4802c0597a797'),
(33, 'rk25@gmail.com', 'http://www.brothersinarmstreeservices.com/contact/', 'rk250020@gmail.com', 0x5179737956556c616347746a51324672565656334b7a527a546c6878555430394f6a70504e413245376b644879376f433049377049386e74, '9c79ff89b1287a3956eb4262041f6e8c2497bd0a8fd977803b827576af5a235d8267d165a0285c251d251cc380586ac80f10158efa154a1c679fda6b8c35be6d');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `512_encrypt` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `phone`, `password`, `512_encrypt`) VALUES
(31, 'Ravi Kumar Singh', 'dimpal@buzztro.dev211', '9142009693', 'V09jSkhXMGJWWTlucVdCRHZMM0NDQT09', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2'),
(32, 'Ravi Kumar Singh', 'dimpal@buzztro.dev22', '9142009621', 'V09jSkhXMGJWWTlucVdCRHZMM0NDQT09', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2'),
(33, 'ravi sinh', 'ravi@gmail.com', '9124009693', 'cGpqdmdqWEVZb3ZjS0dpVlQ1enNBZz09Ojoh4PKbd4Q8Bp1ThTz4auLz', '9c79ff89b1287a3956eb4262041f6e8c2497bd0a8fd977803b827576af5a235d8267d165a0285c251d251cc380586ac80f10158efa154a1c679fda6b8c35be6d'),
(34, 'Ravi Kumar Singh', 'rk25@gmail.com', '9142009693', 'bGYwcHRBRFlZSnlObjA3RFlVUkttQT09Ojo33g6mjEL2ZHhbKCTKVYk+', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2'),
(35, 'Ravi Kumar Singh', 'rk250020@gmail.com', '9142009693', 'NlRYa1pRdnhFZnd2QVJSZXlESTl0UT09OjriV64gaOnfd8NapepDzp3L', '9c79ff89b1287a3956eb4262041f6e8c2497bd0a8fd977803b827576af5a235d8267d165a0285c251d251cc380586ac80f10158efa154a1c679fda6b8c35be6d');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mess`
--
ALTER TABLE `mess`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pass`
--
ALTER TABLE `pass`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mess`
--
ALTER TABLE `mess`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pass`
--
ALTER TABLE `pass`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
