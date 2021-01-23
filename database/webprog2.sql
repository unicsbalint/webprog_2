-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2021. Jan 23. 23:02
-- Kiszolgáló verziója: 10.4.17-MariaDB
-- PHP verzió: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `webprog2`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `brand_specific_color`
--

CREATE TABLE `brand_specific_color` (
  `color_id` int(200) NOT NULL,
  `brand` varchar(200) NOT NULL,
  `basic_color_name` varchar(200) NOT NULL,
  `color_code` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `brand_specific_color`
--

INSERT INTO `brand_specific_color` (`color_id`, `brand`, `basic_color_name`, `color_code`) VALUES
(2, 'Mazda', 'Black', 'B10'),
(3, 'Ford', 'Red', 'P9'),
(4, 'Mazda', 'Blue', 'B88');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `car`
--

CREATE TABLE `car` (
  `car_id` int(11) NOT NULL,
  `brand` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `horsepower` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `car`
--

INSERT INTO `car` (`car_id`, `brand`, `type`, `horsepower`) VALUES
(1, 'Ford', 'Focus MK1 1.6', '100'),
(4, 'BMW', 'X6', '500'),
(10, 'Volkswagen', 'Passat', '150'),
(11, 'Seat', 'Altea XL', '160'),
(12, 'Opel', 'Astra H', '110');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `carparts`
--

CREATE TABLE `carparts` (
  `id` int(250) NOT NULL,
  `part` varchar(200) NOT NULL,
  `for_type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `carparts`
--

INSERT INTO `carparts` (`id`, `part`, `for_type`) VALUES
(2, 'BiTurbo', 'X5'),
(3, 'Lengőkar', 'Passat'),
(4, 'Stabilizátor pálca', 'Focus'),
(5, 'Kézifék szoknya', 'Mondeo');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `oil`
--

CREATE TABLE `oil` (
  `oil_id` int(200) NOT NULL,
  `car_brand` varchar(200) NOT NULL,
  `recommended_oil_brand` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `oil`
--

INSERT INTO `oil` (`oil_id`, `car_brand`, `recommended_oil_brand`) VALUES
(2, 'Ford', 'Mannol'),
(3, 'Volkswagen', 'Mannol XTRA'),
(4, 'Audi', 'WMAX'),
(5, 'BMW', 'LUKOIL PROEN');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`id`, `email`, `name`, `password`) VALUES
(6, 'admin@admin.com', 'Dummy User', 'f865b53623b121fd34ee5426c792e5c33af8c227'),
(7, 'adminka@adminka.hu', 'adminka', 'f865b53623b121fd34ee5426c792e5c33af8c227');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `brand_specific_color`
--
ALTER TABLE `brand_specific_color`
  ADD PRIMARY KEY (`color_id`);

--
-- A tábla indexei `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`car_id`);

--
-- A tábla indexei `carparts`
--
ALTER TABLE `carparts`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `oil`
--
ALTER TABLE `oil`
  ADD PRIMARY KEY (`oil_id`);

--
-- A tábla indexei `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `brand_specific_color`
--
ALTER TABLE `brand_specific_color`
  MODIFY `color_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT a táblához `car`
--
ALTER TABLE `car`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT a táblához `carparts`
--
ALTER TABLE `carparts`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT a táblához `oil`
--
ALTER TABLE `oil`
  MODIFY `oil_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT a táblához `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
