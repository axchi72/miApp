-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 07-10-2020 a las 20:48:16
-- Versión del servidor: 5.7.24
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `miapp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `afiliados`
--

CREATE TABLE `afiliados` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `identidad` varchar(13) COLLATE utf8mb4_spanish_ci NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `foto` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `nombre` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `url` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `orden` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `icono` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `creo` bigint(20) UNSIGNED DEFAULT NULL,
  `actualizo` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `menus`
--

INSERT INTO `menus` (`id`, `menu_id`, `nombre`, `url`, `orden`, `icono`, `creo`, `actualizo`, `created_at`, `updated_at`) VALUES
(1, 0, 'Admin', '#', 1, 'fa-tachometer-alt', 1, NULL, '2020-09-28 10:37:18', '2020-10-08 01:33:50'),
(2, 1, 'Menú', 'admin/menu', 2, 'fa-bars', 1, NULL, '2020-09-28 10:38:28', '2020-10-08 01:33:50'),
(3, 1, 'Menú - Rol', 'admin/menu-rol', 4, 'fa-server', 1, NULL, '2020-09-28 10:45:05', '2020-10-08 01:33:50'),
(5, 1, 'Rol', 'admin/rol', 3, 'fa-id-card-alt', NULL, NULL, '2020-09-29 02:41:08', '2020-10-08 01:33:50'),
(6, 1, 'Permiso', 'admin/permiso', 5, 'fa-user-lock', NULL, NULL, '2020-09-29 02:43:34', '2020-10-08 01:33:50'),
(7, 1, 'Permiso - Rol', 'admin/permiso-rol', 6, 'fa-unlock', NULL, NULL, '2020-09-29 02:44:58', '2020-10-08 01:33:50'),
(8, 0, 'Afiliado', 'afiliado', 3, 'fa-address-card', NULL, NULL, '2020-10-02 08:23:27', '2020-10-08 01:33:50'),
(9, 1, 'Usuarios', 'admin/usuario', 1, 'fa fa-users', NULL, NULL, '2020-10-04 02:05:33', '2020-10-08 01:33:50'),
(10, 0, 'Publicaciones', 'frontend/post', 2, 'fa-mail-bulk', NULL, NULL, '2020-10-07 05:19:16', '2020-10-08 01:33:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu_rols`
--

CREATE TABLE `menu_rols` (
  `rol_id` bigint(20) UNSIGNED NOT NULL,
  `menu_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `menu_rols`
--

INSERT INTO `menu_rols` (`rol_id`, `menu_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(2, 8),
(1, 9),
(3, 8),
(1, 10),
(4, 8),
(4, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(9, '2019_08_19_000000_create_failed_jobs_table', 1),
(10, '2020_09_27_173358_crear_tabla_usuarios', 1),
(11, '2020_09_27_174709_crear_tabla_rols', 1),
(12, '2020_09_27_174914_crear_tabla_permisos', 1),
(13, '2020_09_27_175111_crear_tabla_usuario_rols', 1),
(14, '2020_09_27_182754_crear_tabla_permiso_rols', 1),
(15, '2020_09_27_215141_crear_tabla_menus', 1),
(16, '2020_09_27_220132_crear_tabla_menu_rols', 1),
(17, '2014_10_12_100000_create_password_resets_table', 2),
(18, '2020_10_06_222104_crear_tabla_posts', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `creo` bigint(20) UNSIGNED DEFAULT NULL,
  `actualizo` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`id`, `nombre`, `slug`, `creo`, `actualizo`, `created_at`, `updated_at`) VALUES
(1, 'Listar afiliado', 'listar-afiliado', NULL, NULL, '2020-10-02 06:47:52', '2020-10-02 08:16:29'),
(2, 'Crear afiliado', 'crear-afiliado', NULL, NULL, '2020-10-02 06:48:07', '2020-10-02 08:17:32'),
(3, 'Editar afiliado', 'editar-afiliado', NULL, NULL, '2020-10-02 06:48:18', '2020-10-02 08:17:55'),
(4, 'Eliminar afiliado', 'eliminar-afiliado', NULL, NULL, '2020-10-02 06:48:30', '2020-10-02 08:18:14'),
(5, 'Listar post', 'listar-post', NULL, NULL, '2020-10-07 05:24:09', '2020-10-07 05:24:09'),
(6, 'Crear post', 'crear-post', NULL, NULL, '2020-10-07 05:24:19', '2020-10-07 05:24:19'),
(7, 'Ver post', 'ver-post', NULL, NULL, '2020-10-07 05:24:37', '2020-10-07 05:24:37'),
(8, 'Editar post', 'editar-post', NULL, NULL, '2020-10-07 05:24:48', '2020-10-07 05:24:48'),
(9, 'Eliminar post', 'eliminar-post', NULL, NULL, '2020-10-07 05:25:00', '2020-10-07 05:25:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permiso_rols`
--

CREATE TABLE `permiso_rols` (
  `rol_id` bigint(20) UNSIGNED NOT NULL,
  `permiso_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `permiso_rols`
--

INSERT INTO `permiso_rols` (`rol_id`, `permiso_id`) VALUES
(2, 1),
(3, 1),
(3, 2),
(3, 3),
(2, 2),
(2, 3),
(4, 5),
(4, 6),
(4, 7),
(4, 8),
(4, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `extracto` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `contenido` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `usuario_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `posts`
--

INSERT INTO `posts` (`id`, `titulo`, `extracto`, `contenido`, `foto`, `usuario_id`, `created_at`, `updated_at`) VALUES
(3, 'Autem ut nam ut.', 'Beatae et perferendis quaerat ut nihil. Est maiores ducimus nam blanditiis nihil ut sit. Iste voluptate optio nihil mollitia est vel. A laudantium est ab recusandae. Modi rem voluptatem sed sit aut.', 'Commodi suscipit eius ut ut quas eveniet. Et est enim nesciunt rem. Sunt ea aut necessitatibus qui. Error laboriosam quia necessitatibus eum odit repellendus aperiam.', 'XC4TtjuUW223nG2NU7ur.jpg', 1, '1995-03-13 06:00:00', '2020-10-07 10:05:00'),
(4, 'Sunt quis dicta ullam libero.', 'Beatae vero odit illum id non. Rerum dolorum ut neque quo et. Dolore inventore quia et velit suscipit odit.', 'Rem qui laudantium adipisci dolores quia. Iste qui rerum cum ut quod enim.', 'IarVQd0yp4Wqij7SxtAk.jpg', 1, '1977-11-16 06:00:00', '2020-10-07 10:05:23'),
(5, 'Reprehenderit in ea maiores.', 'Molestiae qui illo delectus in quod quae. Tempore velit magni sed et esse aut in. Dolorum nesciunt et aliquid. Dignissimos aut qui accusamus ea sapiente qui. Est laborum quae dolores est aperiam eum.', 'Minima iusto ut quia quidem. Non asperiores eos voluptas explicabo autem quos. Nihil sed ut ipsum similique voluptatem esse.', 'J1SyFGbkJLhGlwPAxKvj.jpg', 1, '2019-06-15 06:00:00', '2020-10-07 10:05:45'),
(6, 'Et esse voluptatem nihil id occaecati atque.', 'Quam nostrum sint sed vero voluptatem. Ut alias suscipit aut. Illum a quia aliquam dicta est.', 'Porro rerum consequatur quia. Qui ad neque qui hic eum. Id numquam quia asperiores nesciunt et.', 'https://lorempixel.com/1024/1024/?44997', 2, '2014-07-25 06:00:00', '2020-03-15 06:00:00'),
(7, 'Quia incidunt consectetur quia pariatur.', 'Quo ad iusto fugit. Molestias enim et ullam ut fuga assumenda commodi. Minima molestiae accusantium cum commodi.', 'Quia veniam blanditiis doloribus voluptatem repellat veritatis distinctio. Nihil sequi consequuntur molestiae praesentium dicta. Est itaque delectus omnis est dolor ut.', 'https://lorempixel.com/1024/1024/?69692', 2, '1992-07-07 06:00:00', '1981-10-12 06:00:00'),
(8, 'Non et dolorum suscipit ducimus nihil distinctio autem.', 'Hic recusandae dolor harum quasi non quia. Ipsum vel incidunt et. Sequi quod est corporis labore rem sed deleniti. Minima nulla amet consequuntur ad laboriosam rerum.', 'Excepturi est ad porro aut tempora quam. Minima vero culpa dolor dolore minus consequatur et.', 'https://lorempixel.com/1024/1024/?41284', 1, '1975-04-22 06:00:00', '1992-10-21 06:00:00'),
(9, 'Eos velit atque velit ut commodi assumenda.', 'Rerum vero omnis accusantium eos. Rerum nobis omnis non. Delectus repellendus iste veniam deserunt veritatis sit. Sapiente debitis nemo cumque assumenda voluptates. Aut nihil vitae numquam animi.', 'At perferendis sunt molestiae perferendis sed iure a vitae. Veniam itaque amet ut veritatis et.', 'https://lorempixel.com/1024/1024/?62632', 1, '2013-06-15 06:00:00', '1990-09-16 06:00:00'),
(10, 'Laboriosam est quo autem qui est.', 'Iure placeat consectetur et quidem rerum voluptatum nesciunt. Et harum officiis est quisquam cum.', 'Cupiditate assumenda ea vero velit animi quisquam. Asperiores temporibus consequatur nam quia aut iure. Est sed repellendus dolorem numquam.', 'https://lorempixel.com/1024/1024/?60885', 2, '2019-05-18 06:00:00', '2010-03-25 06:00:00'),
(11, 'Esse mollitia ut consequatur et unde.', 'Repellendus non eum mollitia aliquid. In quos esse ab tenetur iste totam facere saepe. Possimus nihil aut consectetur aut minima. Dolores esse aut aut non.', 'Nesciunt suscipit iusto maiores accusantium. Dolorem quis est perferendis omnis facere aut enim.', 'https://lorempixel.com/1024/1024/?78796', 2, '1984-06-13 06:00:00', '2002-10-25 06:00:00'),
(12, 'Exercitationem cum perferendis sit tenetur at est hic magni.', 'Sunt cum repellat quis veritatis. Velit error qui est quo eos. Est dolor est enim ab vel quos sint. Velit adipisci et minus. Dolor architecto tenetur cumque et.', 'Occaecati est sunt repellendus perspiciatis ut ipsa id voluptas. Autem eos dolores ipsa dolorem quidem error nemo qui. Ea eveniet omnis quia vel.', 'https://lorempixel.com/1024/1024/?16753', 2, '2014-05-10 06:00:00', '1981-04-28 06:00:00'),
(13, 'Quaerat debitis deserunt expedita ut.', 'Autem numquam qui dolor consectetur expedita ut. Aliquid cum error aut. Dignissimos tempora suscipit voluptatem. Similique fuga eaque voluptas eos omnis sed sit.', 'Quo rerum facilis magnam odit. Molestias et debitis maxime placeat voluptatibus minima porro architecto. Possimus illo consequuntur saepe officiis. Magnam quasi modi eos qui hic et.', 'https://lorempixel.com/1024/1024/?16934', 2, '1972-05-21 06:00:00', '2011-11-10 06:00:00'),
(14, 'Sit praesentium delectus veritatis illum magni aut quam.', 'Tenetur earum aliquid nulla sunt quod modi. Est sequi cum error ex sunt voluptas consequatur voluptates. Expedita sunt cupiditate exercitationem magnam sunt reprehenderit ut.', 'Expedita voluptas ea quia. Qui assumenda ut in. Quo voluptatem sapiente deserunt. Voluptatem voluptatem qui id autem aperiam praesentium beatae.', 'https://lorempixel.com/1024/1024/?24370', 1, '1996-10-20 06:00:00', '1985-01-25 06:00:00'),
(15, 'Qui aut at pariatur veniam nam expedita.', 'Ut quia qui minima blanditiis omnis. Temporibus nihil et repellat ea. Voluptates ea tempore dicta voluptates dolore est ad.', 'Blanditiis reiciendis adipisci dolore dolorum. Officiis et a minima rem asperiores. Incidunt laborum minima molestias porro voluptatem excepturi deleniti. Rerum omnis consequuntur quaerat quos quae.', 'https://lorempixel.com/1024/1024/?12285', 2, '1989-07-16 06:00:00', '1978-09-15 06:00:00'),
(16, 'Ut sed laborum molestiae perferendis quae recusandae.', 'Sed sit sequi fugit velit qui. Aut corporis et nesciunt facere aut repellat voluptates. Quis aut sunt reiciendis illo deleniti quisquam aperiam accusantium.', 'Inventore omnis iste qui perspiciatis. Optio enim natus aliquam officia laboriosam ratione ullam neque. Praesentium rerum quo non ut iste. Sequi odit aut velit porro placeat et.', 'https://lorempixel.com/1024/1024/?27503', 1, '1989-02-14 06:00:00', '1978-12-26 06:00:00'),
(17, 'Minima aperiam eligendi similique perspiciatis.', 'Officia dolorum dolores impedit et occaecati rerum. Qui facere sunt eos incidunt. Blanditiis aut officiis repellat quis recusandae iusto. Enim ab maiores commodi consequuntur nostrum.', 'Neque perferendis ut repellat nihil quas. Alias consectetur ducimus ratione nemo aut neque praesentium. Et accusantium voluptate tenetur et hic a.', 'https://lorempixel.com/1024/1024/?59368', 2, '2006-06-23 06:00:00', '2000-03-22 06:00:00'),
(18, 'Quis dolor ipsa praesentium ad voluptatem consequuntur.', 'Voluptates nihil aliquid incidunt dolores neque non dolorem. Sunt est repellendus assumenda in earum consequuntur. Reiciendis deleniti amet vitae ducimus cum in aut consectetur.', 'Rerum ut assumenda et expedita mollitia fugit. Et nesciunt totam nisi dignissimos hic recusandae quia dolores.', 'https://lorempixel.com/1024/1024/?18753', 1, '2000-01-22 06:00:00', '1988-12-11 06:00:00'),
(19, 'Nihil optio et ipsum vel.', 'Eveniet autem numquam commodi at praesentium ipsam. Vero iure voluptatibus unde qui eaque quidem. Nemo non magni sed qui dolorem omnis. Earum sed dolor velit.', 'In iure laudantium repellat fugit soluta ullam. Libero recusandae animi id fuga ut. Ut omnis est ad officiis voluptate iure.', 'https://lorempixel.com/1024/1024/?16757', 1, '1979-07-27 06:00:00', '2007-03-27 06:00:00'),
(20, 'Est in quia fuga excepturi qui blanditiis harum.', 'Debitis earum omnis quisquam aut non voluptates. Tenetur harum ipsum aliquid error voluptatem repellat. Vel facilis voluptates repellendus dolores. Autem cum id sit porro ex beatae et.', 'Incidunt ad cum est quo. Corporis molestias id voluptatem sapiente iusto ipsum repellat. Et aliquam mollitia harum qui.', 'https://lorempixel.com/1024/1024/?67070', 2, '1996-12-16 06:00:00', '1982-05-24 06:00:00'),
(21, 'Neque non voluptates placeat aperiam est eius.', 'Numquam dicta qui corporis alias sed qui. Quaerat ullam non error voluptatem omnis delectus quia. Enim quia exercitationem eos laborum commodi ad.', 'Quod amet aut est eligendi earum assumenda. Deserunt minus eos delectus ex nam dolore id. Quam esse earum commodi harum voluptatem voluptatem et.', 'https://lorempixel.com/1024/1024/?17954', 1, '1998-02-05 06:00:00', '1986-01-05 06:00:00'),
(22, 'Laudantium veniam et nam facilis.', 'Nesciunt voluptas natus animi. Est hic expedita aspernatur voluptatem. Est et voluptas debitis voluptatum.', 'Aut quod velit et officia aut hic debitis officiis. Ab iusto vero eaque aliquid laborum quisquam consequuntur. Dolorem voluptates debitis quos doloribus aut.', 'https://lorempixel.com/1024/1024/?50467', 1, '1999-11-06 06:00:00', '1998-11-11 06:00:00'),
(23, 'Qui ducimus voluptatum quisquam.', 'Quibusdam sit non repellat sit rerum magnam atque. Occaecati dolorem illo autem est. Et eum veritatis veritatis vitae assumenda.', 'Minus nostrum voluptas dolorum. Architecto expedita eos quia iste sapiente. Sed iste cupiditate magnam quaerat. Quod sunt inventore quis adipisci velit est sit.', 'https://lorempixel.com/1024/1024/?44659', 2, '2016-04-17 06:00:00', '1990-01-21 06:00:00'),
(24, 'Ut magni et aliquam soluta aliquam.', 'Explicabo atque inventore ipsam. Odio debitis natus omnis et qui neque. Repudiandae debitis ut quia itaque molestiae. Ea saepe dicta et atque sed dolorum id.', 'Aut quaerat est mollitia. Et quos ea rerum est. Eius beatae sunt in molestiae voluptatem dicta iste. Illo ipsam sapiente dolor quia odio.', 'https://lorempixel.com/1024/1024/?81321', 1, '2009-08-31 06:00:00', '1998-03-25 06:00:00'),
(25, 'Odio in est quis unde atque laboriosam dignissimos qui.', 'Iure quod voluptas aut est quod rerum fugiat. Unde consequuntur eius nihil. Dolores incidunt velit eos. Voluptatem eaque dolorem voluptas aspernatur aperiam est nesciunt.', 'Nihil ut minus ut quidem est. Sit quidem est et voluptatem illum dolores alias. Molestiae non nulla aut reiciendis alias repellat. Nesciunt impedit eaque nulla distinctio omnis quo corrupti.', 'https://lorempixel.com/1024/1024/?99289', 2, '1988-01-31 06:00:00', '1985-03-30 06:00:00'),
(26, 'Itaque est animi aliquam ea sapiente.', 'Corporis ab nihil facere atque inventore ducimus expedita. Et unde adipisci repellendus sit dolor libero non. Expedita et autem beatae voluptatem natus quas quos illo.', 'Exercitationem distinctio sequi cum. Culpa repellendus aut omnis ad temporibus temporibus. Blanditiis eius reprehenderit esse occaecati quia rem reprehenderit.', 'https://lorempixel.com/1024/1024/?98534', 1, '1975-05-27 06:00:00', '1975-04-11 06:00:00'),
(27, 'Magnam ipsa ut labore molestiae consequatur et.', 'Velit suscipit et praesentium vero. Sequi similique sequi maxime molestiae dolores. Autem voluptatibus animi maxime deleniti.', 'Ea vero atque alias temporibus officia. Nulla recusandae beatae aliquid nostrum sint. Doloremque occaecati dignissimos qui ad. Maiores qui enim omnis soluta quaerat eligendi.', 'https://lorempixel.com/1024/1024/?61878', 1, '1971-11-06 06:00:00', '2002-10-06 06:00:00'),
(28, 'Autem vel quia similique numquam.', 'Beatae suscipit doloremque reiciendis et. Quis et quia optio eum assumenda. Atque quos dolorem dignissimos occaecati. Voluptatum consectetur sunt at vel laudantium repellat eum.', 'Dolores tempore quos ea non. Quos dolorem placeat quia ratione assumenda reiciendis voluptas. Adipisci voluptas neque aliquam non autem et reprehenderit. Dicta minima nam voluptas.', 'https://lorempixel.com/1024/1024/?91350', 2, '2001-03-07 06:00:00', '1985-12-04 06:00:00'),
(29, 'Nesciunt enim maiores et ratione sit qui earum.', 'Fugit repellat dolorem id dolor esse id illum. Possimus adipisci maiores voluptatem enim. Esse maxime ipsam perspiciatis ullam tempore quas labore fuga.', 'Molestiae numquam quisquam nobis distinctio. Velit sunt ratione ipsum dolorem dignissimos. Nesciunt fugiat qui placeat corrupti voluptatem expedita et et.', 'https://lorempixel.com/1024/1024/?10021', 2, '1982-12-02 06:00:00', '2013-03-03 06:00:00'),
(30, 'Qui dolores cumque animi a assumenda.', 'Itaque laborum ut blanditiis aliquid optio qui. Qui doloribus incidunt possimus et voluptas sunt. Accusantium repellat modi maxime voluptatem ut et non aut. Dolor ea doloribus officiis quia.', 'Harum dolorum sed quia doloremque tempore placeat. Assumenda voluptatem dicta quis et tempora et temporibus. Voluptatem et accusantium voluptas ipsa magni explicabo. Est voluptatem qui et quia esse.', 'https://lorempixel.com/1024/1024/?69994', 1, '1973-10-27 06:00:00', '1981-03-24 06:00:00'),
(31, 'Et quia corporis cupiditate sit recusandae minus laboriosam voluptates.', 'Ut eum illum at quis delectus. Et doloremque ex qui nobis aliquid. Minus quo in ab similique veritatis nesciunt atque officiis. Et vel velit quas. Dolores eos quas dolores.', 'Rerum at enim omnis modi pariatur optio nihil. Consequatur quia ad fuga quia modi. Libero repellat cupiditate aliquam cumque aut incidunt.', 'https://lorempixel.com/1024/1024/?60652', 1, '1970-11-07 06:00:00', '2010-04-06 06:00:00'),
(32, 'Eaque molestias ab in qui voluptatem et.', 'Architecto quo eveniet quo facere et error. Dolores et enim maiores repellat in. Nemo ut possimus sunt.', 'Tenetur eveniet aliquid provident consequatur. Esse atque vero odit maiores quaerat. Sint ad in commodi placeat optio qui et. Voluptatem temporibus officiis totam provident nihil rerum vero expedita.', 'https://lorempixel.com/1024/1024/?40548', 2, '1995-05-14 06:00:00', '2009-08-29 06:00:00'),
(33, 'Sunt voluptatem odit voluptatum quae earum aut.', 'Aut ab ab in omnis sint unde et. Omnis harum doloremque iste alias cum similique ex. Et et facilis perspiciatis voluptas eum beatae. Error officia facilis porro est saepe sed quod.', 'Pariatur temporibus atque totam excepturi reprehenderit. Autem explicabo magnam esse minima tempore a vel. Atque dolorem quia maxime sapiente. Consectetur voluptates dolor corrupti nihil laudantium.', 'https://lorempixel.com/1024/1024/?17025', 2, '1971-09-15 06:00:00', '1992-10-08 06:00:00'),
(34, 'Architecto distinctio architecto excepturi illum.', 'A et expedita quos culpa est aut placeat. Assumenda tenetur quia consequatur fugit maiores voluptatem reprehenderit. Possimus iure ea qui quam. Et et vel tempora nesciunt magnam aut in voluptas.', 'Aut suscipit et facere et sit. Et minus et molestiae quia explicabo veritatis. Est distinctio sed et et ea suscipit. Nesciunt nobis repudiandae pariatur repudiandae ratione est vel et.', 'https://lorempixel.com/1024/1024/?30930', 1, '2016-02-12 06:00:00', '1980-03-11 06:00:00'),
(35, 'In nisi eaque explicabo consectetur voluptatem repellendus voluptate.', 'Labore tempore reiciendis eum enim quibusdam amet eos aliquid. Nostrum nisi non eos sed. Quae eveniet perspiciatis modi enim officia aut. Dolores nesciunt a aut nobis autem rem hic.', 'Sit optio et magnam at. Necessitatibus voluptatem maiores iste minima amet molestiae et. Voluptate occaecati saepe et aspernatur quibusdam.', 'https://lorempixel.com/1024/1024/?26899', 2, '1994-08-16 06:00:00', '1972-10-31 06:00:00'),
(36, 'Qui ipsum nam quisquam.', 'Autem qui omnis tempora velit quisquam odio consequatur. Eos id consequatur autem nam aut velit. Vel deserunt doloremque necessitatibus aut quos quas. Deserunt eos sequi laboriosam incidunt in.', 'Sequi ut officia sit ex delectus repellendus. Dolorem laborum nam dolores odio ex. Nesciunt ea quas amet voluptatibus aut.', 'https://lorempixel.com/1024/1024/?54203', 2, '2000-10-29 06:00:00', '1971-11-24 06:00:00'),
(37, 'Similique totam perspiciatis consequatur esse.', 'Possimus fugit sint autem distinctio ut tempora voluptas omnis. Et ab molestiae quidem libero. Alias sapiente qui reprehenderit incidunt. Cumque quibusdam aut at quia iusto sit vitae.', 'Quasi suscipit sed aperiam dignissimos. Omnis in veritatis necessitatibus.', 'https://lorempixel.com/1024/1024/?89648', 2, '2006-02-12 06:00:00', '1991-11-18 06:00:00'),
(38, 'Minima dolorem provident itaque.', 'Vero voluptatem deserunt tenetur molestias corporis. Aliquid illum sit odit praesentium nam rerum.', 'Animi id qui aliquid in nemo omnis illum. Minima facere et rem porro rem amet aut. Maxime aut dicta delectus velit debitis.', 'https://lorempixel.com/1024/1024/?78533', 2, '1985-09-08 06:00:00', '2019-01-01 06:00:00'),
(39, 'Iure quasi sit mollitia labore ut architecto praesentium.', 'Cupiditate tempore adipisci provident repellat. Tenetur non enim minima et ullam. Unde aliquam ratione adipisci sit sed et rerum. Rem qui et ratione deserunt enim sint.', 'Quam ut dolor fugit reiciendis ratione amet. Illum aspernatur deleniti rerum quam et. Libero deserunt deleniti aut possimus accusamus modi fuga.', 'https://lorempixel.com/1024/1024/?27745', 2, '1972-03-16 06:00:00', '1994-06-21 06:00:00'),
(40, 'Magnam odit deleniti distinctio aut quibusdam voluptates molestiae velit.', 'Consequatur vel quam temporibus. Quo consequuntur consequatur consectetur. Cumque fugiat numquam libero voluptate est enim.', 'Illum dolor tempore et officiis dolorem cumque provident iusto. Aliquam aliquam et ut quia ea illum nihil non. Vitae ut fugiat natus at velit harum error.', 'https://lorempixel.com/1024/1024/?21406', 1, '1974-11-25 06:00:00', '2001-04-21 06:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rols`
--

CREATE TABLE `rols` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `creo` bigint(20) UNSIGNED NOT NULL,
  `actualizo` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `rols`
--

INSERT INTO `rols` (`id`, `nombre`, `creo`, `actualizo`, `created_at`, `updated_at`) VALUES
(1, 'Super administrador', 1, NULL, '2020-09-29 00:04:58', '2020-09-29 00:04:58'),
(2, 'Servicio al afiliado', 1, NULL, '2020-09-29 00:05:52', '2020-09-29 00:05:52'),
(3, 'Apoyo técnico', 1, NULL, '2020-09-29 01:35:41', '2020-09-29 01:35:41'),
(4, 'Editor', 1, NULL, '2020-10-07 05:19:54', '2020-10-07 05:19:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `usuario` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `celular` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `foto` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `creo` bigint(20) UNSIGNED DEFAULT NULL,
  `actualizo` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `password`, `nombre`, `email`, `celular`, `foto`, `creo`, `actualizo`, `created_at`, `updated_at`) VALUES
(1, 'hchirinos', '$2y$10$CogkZsii1pqT2ifhdXvtWePfNkYASyHmNe5OP/qosv2jxCmEaKtAm', 'Henry Alexander Chirinos', 'axchi72@gmail.com', '9842-2685', 'GYkcXuiUCkPwBHfplBE8.jpg', 1, NULL, '2020-09-29 08:09:17', '2020-10-07 02:50:33'),
(2, 'lirias', '$2y$10$c/P5caBG/7d4b3y6iWub9OsKcp4yRtxbABEWF64A7Z4uN.JEdRWTu', 'Luis Orlando Irias Galeano', 'luisirias29@gamil.com', '9931-7223', 'UJzWmFqR71nUYO1qpmDf.jpg', 1, NULL, '2020-09-29 08:09:17', '2020-10-07 01:36:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_rols`
--

CREATE TABLE `usuario_rols` (
  `rol_id` bigint(20) UNSIGNED NOT NULL,
  `usuario_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuario_rols`
--

INSERT INTO `usuario_rols` (`rol_id`, `usuario_id`) VALUES
(1, 1),
(2, 2),
(4, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `afiliados`
--
ALTER TABLE `afiliados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `menu_rols`
--
ALTER TABLE `menu_rols`
  ADD KEY `fk_menurols_rol` (`rol_id`),
  ADD KEY `fk_menurols_menu` (`menu_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `permiso_rols`
--
ALTER TABLE `permiso_rols`
  ADD KEY `fk_permisorols_rol` (`rol_id`),
  ADD KEY `fk_permisorols_permiso` (`permiso_id`);

--
-- Indices de la tabla `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_usuariopost_usuario` (`usuario_id`);

--
-- Indices de la tabla `rols`
--
ALTER TABLE `rols`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario_rols`
--
ALTER TABLE `usuario_rols`
  ADD KEY `fk_usuariorols_rol` (`rol_id`),
  ADD KEY `fk_usuariorols_usuario` (`usuario_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `afiliados`
--
ALTER TABLE `afiliados`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de la tabla `rols`
--
ALTER TABLE `rols`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `menu_rols`
--
ALTER TABLE `menu_rols`
  ADD CONSTRAINT `fk_menurols_menu` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_menurols_rol` FOREIGN KEY (`rol_id`) REFERENCES `rols` (`id`);

--
-- Filtros para la tabla `permiso_rols`
--
ALTER TABLE `permiso_rols`
  ADD CONSTRAINT `fk_permisorols_permiso` FOREIGN KEY (`permiso_id`) REFERENCES `permisos` (`id`),
  ADD CONSTRAINT `fk_permisorols_rol` FOREIGN KEY (`rol_id`) REFERENCES `rols` (`id`);

--
-- Filtros para la tabla `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `fk_usuariopost_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `usuario_rols`
--
ALTER TABLE `usuario_rols`
  ADD CONSTRAINT `fk_usuariorols_rol` FOREIGN KEY (`rol_id`) REFERENCES `rols` (`id`),
  ADD CONSTRAINT `fk_usuariorols_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
