-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1:3307
-- Létrehozás ideje: 2025. Már 21. 10:50
-- Kiszolgáló verziója: 10.4.32-MariaDB
-- PHP verzió: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `reanbeauty`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `allergen`
--

CREATE TABLE `allergen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `allergen` int(11) NOT NULL,
  `db` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `conection`
--

CREATE TABLE `conection` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rutin_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `allergen_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `favourites`
--

CREATE TABLE `favourites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rutin_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `illatanyagok`
--

CREATE TABLE `illatanyagok` (
  `id` int(11) NOT NULL,
  `allergenneve` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(42, '2025_03_05_194631_allergen', 1),
(43, '2025_03_05_195502_conection', 1),
(51, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(52, '2025_02_05_080358_users', 2),
(53, '2025_02_05_080754_products', 2),
(54, '2025_02_05_080811_rutin', 2),
(55, '2025_02_05_080912_products_reaction', 2),
(56, '2025_02_05_080940_rutin_reaction', 2),
(57, '2025_02_05_081037_favourites', 2);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_type` tinyint(3) UNSIGNED NOT NULL,
  `title` varchar(50) NOT NULL,
  `p_image` varchar(700) DEFAULT NULL,
  `a_image` varchar(700) DEFAULT NULL,
  `description` varchar(700) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `products`
--

INSERT INTO `products` (`id`, `product_type`, `title`, `p_image`, `a_image`, `description`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'lemoso', 'products/BYf4slUFTpj4AQdC6TtuRmNupbRQRsdYNfvZ0tAd.jpg', 'products/IZWn9eVaMjQlGGsgmKcYxVrUzloA82txpIKieqQX.jpg', 'szia', 1, '2025-03-18 07:25:01', '2025-03-18 07:25:01'),
(2, 1, 'krém', 'products/IVjX3hdtAFFJI8QxqyswOGN7S6uoLVyRWixMzn6d.webp', 'products/Bjt0hXrBIJyIjYZfXLWPaS9vdCno23bqxmwggrc8.webp', 'fff', 1, '2025-03-18 08:07:30', '2025-03-18 08:07:30'),
(3, 1, 'szia', 'products/Wxew9nS2cNWumSdsXoOi3MFq54dBp2bFsfxdhOLm.webp', 'products/6DRopeRqbKGWYzm0eheh7fvIw22mT2zSomlLCp28.webp', 'sss', 1, '2025-03-18 08:12:18', '2025-03-18 08:12:18'),
(4, 1, 'szia', 'products/HqvWrjUFrErwWugEKYHnddZBGZmXMCxmaF7CVDwv.webp', 'products/KRmNnq7S1k6uZmNOrhs3jHpTEkQVfSyLBNT15IE8.webp', 'sss', 1, '2025-03-18 08:13:31', '2025-03-18 08:13:31');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `products_reaction`
--

CREATE TABLE `products_reaction` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `comment` varchar(700) DEFAULT NULL,
  `like` tinyint(3) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `rutin`
--

CREATE TABLE `rutin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `rutin_type` tinyint(3) UNSIGNED NOT NULL,
  `title` varchar(50) NOT NULL,
  `p_image` varchar(700) DEFAULT NULL,
  `a_image` varchar(700) DEFAULT NULL,
  `description` varchar(2500) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `rutin_reaction`
--

CREATE TABLE `rutin_reaction` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rutin_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `comment` varchar(700) DEFAULT NULL,
  `like` tinyint(3) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `role` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone_number` varchar(12) NOT NULL,
  `password` varchar(150) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`id`, `username`, `role`, `email`, `phone_number`, `password`, `created_at`, `updated_at`) VALUES
(1, 'artstyle', 1, 'filani302@hengersor.hu', '+36302223345', '$2y$10$DDclt1HJEZOal5pZ.FF.beBdXOQXJJO4BKAZGzUKSRkIvZrPusDzu', '2025-03-18 07:17:48', '2025-03-18 07:17:48');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `allergen`
--
ALTER TABLE `allergen`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `conection`
--
ALTER TABLE `conection`
  ADD PRIMARY KEY (`id`),
  ADD KEY `conection_rutin_id_foreign` (`rutin_id`),
  ADD KEY `conection_product_id_foreign` (`product_id`),
  ADD KEY `conection_allergen_id_foreign` (`allergen_id`);

--
-- A tábla indexei `favourites`
--
ALTER TABLE `favourites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `favourites_rutin_id_foreign` (`rutin_id`),
  ADD KEY `favourites_product_id_foreign` (`product_id`),
  ADD KEY `favourites_user_id_foreign` (`user_id`);

--
-- A tábla indexei `illatanyagok`
--
ALTER TABLE `illatanyagok`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- A tábla indexei `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_user_id_foreign` (`user_id`);

--
-- A tábla indexei `products_reaction`
--
ALTER TABLE `products_reaction`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_reaction_product_id_foreign` (`product_id`),
  ADD KEY `products_reaction_user_id_foreign` (`user_id`);

--
-- A tábla indexei `rutin`
--
ALTER TABLE `rutin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rutin_product_id_foreign` (`product_id`),
  ADD KEY `rutin_user_id_foreign` (`user_id`);

--
-- A tábla indexei `rutin_reaction`
--
ALTER TABLE `rutin_reaction`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rutin_reaction_rutin_id_foreign` (`rutin_id`),
  ADD KEY `rutin_reaction_product_id_foreign` (`product_id`),
  ADD KEY `rutin_reaction_user_id_foreign` (`user_id`);

--
-- A tábla indexei `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `allergen`
--
ALTER TABLE `allergen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `conection`
--
ALTER TABLE `conection`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `favourites`
--
ALTER TABLE `favourites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `illatanyagok`
--
ALTER TABLE `illatanyagok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT a táblához `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT a táblához `products_reaction`
--
ALTER TABLE `products_reaction`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `rutin`
--
ALTER TABLE `rutin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `rutin_reaction`
--
ALTER TABLE `rutin_reaction`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `favourites`
--
ALTER TABLE `favourites`
  ADD CONSTRAINT `favourites_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `favourites_rutin_id_foreign` FOREIGN KEY (`rutin_id`) REFERENCES `rutin` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `favourites_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Megkötések a táblához `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Megkötések a táblához `products_reaction`
--
ALTER TABLE `products_reaction`
  ADD CONSTRAINT `products_reaction_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_reaction_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Megkötések a táblához `rutin`
--
ALTER TABLE `rutin`
  ADD CONSTRAINT `rutin_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `rutin_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Megkötések a táblához `rutin_reaction`
--
ALTER TABLE `rutin_reaction`
  ADD CONSTRAINT `rutin_reaction_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `rutin_reaction_rutin_id_foreign` FOREIGN KEY (`rutin_id`) REFERENCES `rutin` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `rutin_reaction_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
