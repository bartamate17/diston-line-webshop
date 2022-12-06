-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Gép: localhost:3306
-- Létrehozás ideje: 2022. Dec 06. 10:20
-- Kiszolgáló verziója: 5.7.24
-- PHP verzió: 7.4.16

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `diston-line`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text,
  `price` float NOT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `img`) VALUES
(1, 'Hurka-kolbász töltő', 'A két sebességű hajtással finoman adagolható a töltelék, de gyorsan vissza is húzható a dugatttyú. Minden TRE SPADE hurka és kolbásztöltőnek szilikon tömítése van, így töltés közben nem folyik ki a dugattyú mellett a töltelék. Hideg massza töltéséhez is kiváló!', 56000, 'assets/img/products/hurka-kolbasz.jpg'),
(2, 'SAMMIC AX-100B kalapos mosogatógép', 'Nagykonyhai felhasználásra gyártott kalapos, átadó rendszerű mosogatógép teljesen rozsdamentes kivitelben. Kiválóan alkalmas tányérok, üvegárúk, csészék, evőeszközök mosogatásához.', 130000, 'assets/img/products/kalapos-mosogatogep.jpg'),
(3, 'ST80 rozsdamentes gépállvány', 'Masszív tartóállvány rozsdamentes acélból. Maximális felhasználói élmény. A lábak fékezhető kerekekkel vannak ellátva. Alábbi PIZZAGROUP készülékekkel használható: PIZZAGROUP TNV-80 pizza alagút, ELEKTHERMAX gázüzemű statikus sütő.', 12000, 'assets/img/products/rozsdamentes-gepallvany.jpg');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
