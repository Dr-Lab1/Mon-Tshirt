-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           5.7.33 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour e-commerce
-- CREATE DATABASE IF NOT EXISTS `e-commerce` /*!40100 DEFAULT CHARACTER SET latin1 */;
-- USE `e-commerce`;

-- Listage de la structure de la table e-commerce. categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_online` tinyint(1) NOT NULL DEFAULT '0',
  `parent_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table e-commerce.categories : ~12 rows (environ)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `created_at`, `updated_at`, `nom`, `is_online`, `parent_id`) VALUES
	(1, '2022-12-01 08:07:23', '2022-12-01 08:07:23', 'Films', 1, NULL),
	(2, '2022-12-01 08:08:02', '2022-12-01 08:08:02', 'Séries TV', 1, NULL),
	(3, '2022-12-01 08:08:17', '2022-12-01 08:08:17', 'Musique', 1, NULL),
	(4, '2022-12-01 08:08:32', '2022-12-01 08:08:32', 'Jeux-Vidéos', 1, NULL),
	(5, '2022-12-01 08:09:01', '2022-12-01 08:09:01', 'Sport', 1, NULL),
	(6, '2022-12-03 22:05:19', '2022-12-03 22:05:19', 'Football', 1, 5),
	(7, '2022-12-03 22:05:19', '2022-12-03 22:05:19', 'Basketball', 1, 5),
	(8, '2022-12-03 22:05:19', '2022-12-03 22:05:19', 'Tenis', 1, 5),
	(9, '2022-12-03 22:06:47', '2022-12-03 22:06:47', 'Marvel', 1, 2),
	(10, '2022-12-03 22:06:47', '2022-12-03 22:06:47', 'Starz', 1, 2),
	(11, '2022-12-03 22:06:47', '2022-12-03 22:06:47', 'NetFlix', 1, 2),
	(14, '2022-12-03 22:07:47', '2022-12-03 22:07:47', 'NetFlix', 1, 1);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Listage de la structure de la table e-commerce. failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table e-commerce.failed_jobs : ~0 rows (environ)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Listage de la structure de la table e-commerce. migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table e-commerce.migrations : ~9 rows (environ)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2022_11_29_133233_create_produits_table', 1),
	(6, '2022_12_01_075454_create_categories_table', 2),
	(7, '2022_12_02_092028_add_category_id_produits_table', 3),
	(8, '2022_12_03_083943_add_field_parent_id_categories_table', 4),
	(9, '2022_12_05_214340_create_tags_table', 4),
	(10, '2022_12_05_215541_create_produit_tag_table', 5);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Listage de la structure de la table e-commerce. password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table e-commerce.password_resets : ~0 rows (environ)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Listage de la structure de la table e-commerce. personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table e-commerce.personal_access_tokens : ~0 rows (environ)
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Listage de la structure de la table e-commerce. produits
CREATE TABLE IF NOT EXISTS `produits` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix_ht` double(8,2) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo_principale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table e-commerce.produits : ~31 rows (environ)
/*!40000 ALTER TABLE `produits` DISABLE KEYS */;
INSERT INTO `produits` (`id`, `created_at`, `updated_at`, `nom`, `prix_ht`, `description`, `photo_principale`, `category_id`) VALUES
	(1, '2022-12-02 12:08:52', '2022-12-02 12:08:52', 'Black T-shirt', 2.00, 'T-shirt noir, beau et souple...', 'Black_Tshirt.jpg', 5),
	(2, '2022-12-02 12:09:14', '2022-12-02 12:09:15', 'Blue T-shirt', 5.00, 'T-shirt bleu, beau et souple...', 'Blue_Tshirt.jpg', 4),
	(4, '2022-12-02 12:09:53', '2022-12-02 12:09:53', 'Grise T-shirt', 17.00, 'T-shirt grise, beau et souple... Elengi fort !', 'Grise_Tshirt.jpg', 3),
	(8, '2022-12-02 12:12:03', '2022-12-02 12:12:03', 'Green T-shirt', 25.00, 'T-shirt vert, beau et souple... Très sportif et facile à laver !', 'Green_Tshirt.jpg', 4),
	(9, '2022-12-02 12:12:29', '2022-12-02 12:12:30', 'Metalic T-shirt', 500.00, 'T-shirt un peu grise, beau et souple... Dernier polo officiel du groupe <strong>Youth Group</strong>', 'Metalic_Tshirt.jpg', 3),
	(10, '2022-12-02 12:12:38', '2022-12-02 12:12:38', 'Pink T-shirt', 75.00, 'T-shirt rose, beau et souple... Pas besoin de le repasser pour le mettre...', 'Pink_Tshirt.jpg', 2),
	(11, '2022-12-02 12:12:45', '2022-12-02 12:12:45', 'Simpson T-shirt', 25.00, 'T-shirt Simpson, beau et souple... Voyez vous dans la peau de Homer Simpson', 'Simpson_Tshirt.jpg', 2),
	(12, '2022-12-02 12:13:15', '2022-12-02 12:13:15', 'Yello T-shirt', 35.00, 'T-shirt jaune, très souple, leger, beau et souple...', 'Yellow_Tshirt.jpg', 1),
	(13, '2022-12-02 12:13:21', '2022-12-02 12:13:21', 'White T-shirt', 50.00, 'T-shirt blanc, beau et souple... De la marque <strong>NIKE.</strong>', 'White_Tshirt.jpg', 1),
	(14, '2022-12-04 12:40:10', '2022-12-04 12:40:10', 'Captain America T-shirt', 50.00, 'T-shirt beau et souple...', 'Captain_America.jpg', 9),
	(15, '2022-12-04 12:40:10', '2022-12-04 12:40:10', 'Marvel Amazon', 35.00, 'T-shirt beau et souple...', 'Marvel_Amazon.jpg', 9),
	(16, '2022-12-04 12:40:10', '2022-12-04 12:40:10', 'Marvel Guest', 33.00, 'T-shirt beau et souple...', 'Marvel_Guest.jpg', 9),
	(17, '2022-12-04 12:40:10', '2022-12-04 12:40:10', 'Marvel IronMan', 45.00, 'T-shirt beau et souple...', 'Marvel_IronMan.jpg', 9),
	(18, '2022-12-04 12:40:10', '2022-12-04 12:40:10', 'Football Allemagne', 145.00, 'T-shirt beau et souple...', 'Football_Allemagne.jpg', 6),
	(19, '2022-12-04 12:40:10', '2022-12-04 12:40:10', 'Football Manchester City', 105.00, 'T-shirt beau et souple...', 'Football_Man_City.jpg', 6),
	(20, '2022-12-04 12:40:10', '2022-12-04 12:40:10', 'Football tottenham Club', 125.00, 'T-shirt beau et souple...', 'Football_Tot.jpg', 6),
	(21, '2022-12-04 12:40:10', '2022-12-04 12:40:10', 'Football t-shirt', 78.00, 'T-shirt beau et souple...', 'Football.jpg', 6),
	(22, '2022-12-04 12:40:10', '2022-12-04 12:40:10', 'Basketball maillot NBA Jayson TATUM 0', 100.00, 'T-shirt beau et souple...', 'maillot-nba-jayson-tatum.jpg', 7),
	(23, '2022-12-04 12:40:10', '2022-12-04 12:40:10', 'Basketball maillot NBA Stephen CURRY 30', 130.00, 'T-shirt beau et souple...', 'Sport_Basket_stephen-curry.jpg', 7),
	(24, '2022-12-04 12:40:10', '2022-12-04 12:40:10', 'Basketball maillot NBA Kyrie IRVING 11', 170.00, 'T-shirt beau et souple...', 'Sport_Basket.jpeg', 7),
	(25, '2022-12-04 12:40:10', '2022-12-04 12:40:10', 'Basketball maillot NBA Anthony DAVIS 3', 140.00, 'T-shirt beau et souple...', 'Sport_Basketball.png', 7),
	(26, '2022-12-04 12:40:10', '2022-12-04 12:40:10', 'Football maillot L1 Kylian MBAPPE 7', 140.00, 'T-shirt beau et souple...', 'Sport_PSG.jpg', 6),
	(27, '2022-12-04 12:40:10', '2022-12-04 12:40:10', 'Starz t-shirt', 40.00, 'T-shirt beau et souple...', 'Starz_Eminem-l500.jpg', 10),
	(28, '2022-12-04 12:40:10', '2022-12-04 12:40:10', 'Starz t-shirt insolite', 40.00, 'T-shirt beau et souple...', 'Starz_Yeah.png', 10),
	(29, '2022-12-04 12:40:10', '2022-12-04 12:40:10', 'Starz t-shirt l400', 40.00, 'T-shirt beau et souple...', 'Starz-l400.jpg', 10),
	(30, '2022-12-04 12:40:10', '2022-12-04 12:40:10', 'Starz t-shirt l4000', 40.00, 'T-shirt beau et souple...', 'Starz-l4000.jpg', 10),
	(31, '2022-12-04 12:40:10', '2022-12-04 12:40:10', 'Netflix movie black', 50.00, 'T-shirt beau et souple...', 'Netflix-Movie-Black-Tshirts.jpg', 14),
	(32, '2022-12-04 12:40:10', '2022-12-04 12:40:10', 'Netflix movie', 50.00, 'T-shirt beau et souple...', 'Netflix+SS.png', 14),
	(33, '2022-12-04 12:40:10', '2022-12-04 12:40:10', 'Netflix', 50.00, 'T-shirt beau et souple...', 't-shirt-insolite-netflix.jpg', 14),
	(34, '2022-12-04 12:40:10', '2022-12-04 12:40:10', 'Netflix tenis', 60.00, 'T-shirt beau et souple...', 'Tenis_white.jpg', 8),
	(35, '2022-12-04 12:40:11', '2022-12-04 12:40:11', 'Netflix tenis th', 65.00, 'T-shirt beau et souple...', 'tenis.jpg', 8);
/*!40000 ALTER TABLE `produits` ENABLE KEYS */;

-- Listage de la structure de la table e-commerce. produit_recommande
CREATE TABLE IF NOT EXISTS `produit_recommande` (
  `produit_recommande_id` int(10) unsigned NOT NULL,
  `produit_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table e-commerce.produit_recommande : ~3 rows (environ)
/*!40000 ALTER TABLE `produit_recommande` DISABLE KEYS */;
INSERT INTO `produit_recommande` (`produit_recommande_id`, `produit_id`) VALUES
	(19, 18),
	(20, 18),
	(21, 18);
/*!40000 ALTER TABLE `produit_recommande` ENABLE KEYS */;

-- Listage de la structure de la table e-commerce. produit_tag
CREATE TABLE IF NOT EXISTS `produit_tag` (
  `tag_id` int(10) unsigned NOT NULL,
  `produit_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table e-commerce.produit_tag : ~2 rows (environ)
/*!40000 ALTER TABLE `produit_tag` DISABLE KEYS */;
INSERT INTO `produit_tag` (`tag_id`, `produit_id`) VALUES
	(1, 22),
	(2, 22),
	(1, 23);
/*!40000 ALTER TABLE `produit_tag` ENABLE KEYS */;

-- Listage de la structure de la table e-commerce. tags
CREATE TABLE IF NOT EXISTS `tags` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table e-commerce.tags : ~2 rows (environ)
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
INSERT INTO `tags` (`id`, `created_at`, `updated_at`, `nom`) VALUES
	(1, '2022-12-06 08:27:43', '2022-12-06 08:27:43', '#nike'),
	(2, '2022-12-06 08:27:43', '2022-12-06 08:27:43', '#music'),
	(3, '2022-12-06 08:27:43', '2022-12-06 08:27:43', '#studio');
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;

-- Listage de la structure de la table e-commerce. users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table e-commerce.users : ~0 rows (environ)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
