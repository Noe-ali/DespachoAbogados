-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 26-11-2021 a las 08:12:47
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gabriela2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `abogadoespecialidad`
--

CREATE TABLE `abogadoespecialidad` (
  `Id_abogado` bigint(20) UNSIGNED NOT NULL,
  `Id_especialidad` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `abogadoespecialidad`
--

INSERT INTO `abogadoespecialidad` (`Id_abogado`, `Id_especialidad`, `created_at`, `updated_at`) VALUES
(6, 1, '2021-11-26 02:51:23', '2021-11-26 02:51:23'),
(8, 2, '2021-11-26 04:14:52', '2021-11-26 04:14:52'),
(9, 1, '2021-11-26 04:15:35', '2021-11-26 05:23:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `Id_cita` bigint(20) UNSIGNED NOT NULL,
  `Id_cliente` bigint(20) UNSIGNED NOT NULL,
  `Id_abogado` bigint(20) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `estatus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Servicio` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT 'Ninguno'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`Id_cita`, `Id_cliente`, `Id_abogado`, `fecha`, `descripcion`, `estatus`, `created_at`, `updated_at`, `Servicio`) VALUES
(1, 7, 6, '2021-11-18', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fermentum at sem vel volutpat. Aliquam in lacus sem. Duis nec egestas lacus. Vestibulum sed blandit mauris, vel faucibus enim. Suspendisse congue non tortor a varius. Pellentesque arcu sapien, molestie sed semper sit amet, aliquam quis dui. Sed at vestibulum nunc. Phasellus volutpat varius ipsum, vitae pharetra nisl sodales porttitor. Etiam eleifend vestibulum ligula sollicitudin finibus. Nunc vehicula velit sem. Integer vel urna a eros euismod posuere a varius augue. Ut nulla neque, tristique in sagittis at, maximus ut eros. Aenean sem lacus, scelerisque non hendrerit id, blandit sed lectus.\n\nPhasellus sapien tellus, mattis non metus eget, efficitur sodales quam. Nulla consequat nibh sed nulla finibus, at porttitor lectus efficitur. Aliquam feugiat justo et nunc fringilla accumsan. Vestibulum malesuada aliquet sagittis. Phasellus sapien purus, lacinia vel diam malesuada, blandit convallis est. Donec ex purus, condimentum a libero id, lobortis venenatis massa. Cras sit amet massa aliquet, pulvinar nibh ultrices, condimentum leo. Mauris in eros iaculis, tincidunt erat sed, laoreet libero. Phasellus placerat interdum velit, maximus accumsan arcu blandit id. Curabitur condimentum ex lectus, eget ultrices risus imperdiet ut. Sed iaculis consequat felis, id sodales est aliquet eu. Duis finibus tincidunt nulla, ac euismod metus fringilla ut. Integer at purus vitae enim aliquet posuere eget sit amet enim.', 'Culminado', '2021-11-26 04:04:01', '2021-11-26 07:06:47', 'Derecho Penal'),
(2, 5, 6, '2021-11-25', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fermentum at sem vel volutpat. Aliquam in lacus sem. Duis nec egestas lacus. Vestibulum sed blandit mauris, vel faucibus enim. Suspendisse congue non tortor a varius. Pellentesque arcu sapien, molestie sed semper sit amet, aliquam quis dui. Sed at vestibulum nunc. Phasellus volutpat varius ipsum, vitae pharetra nisl sodales porttitor. Etiam eleifend vestibulum ligula sollicitudin finibus. Nunc vehicula velit sem. Integer vel urna a eros euismod posuere a varius augue. Ut nulla neque, tristique in sagittis at, maximus ut eros. Aenean sem lacus, scelerisque non hendrerit id, blandit sed lectus.\n\nPhasellus sapien tellus, mattis non metus eget, efficitur sodales quam. Nulla consequat nibh sed nulla finibus, at porttitor lectus efficitur. Aliquam feugiat justo et nunc fringilla accumsan. Vestibulum malesuada aliquet sagittis. Phasellus sapien purus, lacinia vel diam malesuada, blandit convallis est. Donec ex purus, condimentum a libero id, lobortis venenatis massa. Cras sit amet massa aliquet, pulvinar nibh ultrices, condimentum leo. Mauris in eros iaculis, tincidunt erat sed, laoreet libero. Phasellus placerat interdum velit, maximus accumsan arcu blandit id. Curabitur condimentum ex lectus, eget ultrices risus imperdiet ut. Sed iaculis consequat felis, id sodales est aliquet eu. Duis finibus tincidunt nulla, ac euismod metus fringilla ut. Integer at purus vitae enim aliquet posuere eget sit amet enim.', 'Por aprobar', '2021-11-26 04:04:56', '2021-11-26 04:04:56', 'Derecho Penal'),
(3, 7, 8, '2021-11-26', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fermentum at sem vel volutpat. Aliquam in lacus sem. Duis nec egestas lacus. Vestibulum sed blandit mauris, vel faucibus enim. Suspendisse congue non tortor a varius. Pellentesque arcu sapien, molestie sed semper sit amet, aliquam quis dui. Sed at vestibulum nunc. Phasellus volutpat varius ipsum, vitae pharetra nisl sodales porttitor. Etiam eleifend vestibulum ligula sollicitudin finibus. Nunc vehicula velit sem. Integer vel urna a eros euismod posuere a varius augue. Ut nulla neque, tristique in sagittis at, maximus ut eros. Aenean sem lacus, scelerisque non hendrerit id, blandit sed lectus.\n\nPhasellus sapien tellus, mattis non metus eget, efficitur sodales quam. Nulla consequat nibh sed nulla finibus, at porttitor lectus efficitur. Aliquam feugiat justo et nunc fringilla accumsan. Vestibulum malesuada aliquet sagittis. Phasellus sapien purus, lacinia vel diam malesuada, blandit convallis est. Donec ex purus, condimentum a libero id, lobortis venenatis massa. Cras sit amet massa aliquet, pulvinar nibh ultrices, condimentum leo. Mauris in eros iaculis, tincidunt erat sed, laoreet libero. Phasellus placerat interdum velit, maximus accumsan arcu blandit id. Curabitur condimentum ex lectus, eget ultrices risus imperdiet ut. Sed iaculis consequat felis, id sodales est aliquet eu. Duis finibus tincidunt nulla, ac euismod metus fringilla ut. Integer at purus vitae enim aliquet posuere eget sit amet enim.', 'Por aprobar', '2021-11-26 04:16:22', '2021-11-26 04:16:22', 'Derecho Civil'),
(4, 7, 9, '2021-11-28', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fermentum at sem vel volutpat. Aliquam in lacus sem. Duis nec egestas lacus. Vestibulum sed blandit mauris, vel faucibus enim. Suspendisse congue non tortor a varius. Pellentesque arcu sapien, molestie sed semper sit amet, aliquam quis dui. Sed at vestibulum nunc. Phasellus volutpat varius ipsum, vitae pharetra nisl sodales porttitor. Etiam eleifend vestibulum ligula sollicitudin finibus. Nunc vehicula velit sem. Integer vel urna a eros euismod posuere a varius augue. Ut nulla neque, tristique in sagittis at, maximus ut eros. Aenean sem lacus, scelerisque non hendrerit id, blandit sed lectus.\n\nPhasellus sapien tellus, mattis non metus eget, efficitur sodales quam. Nulla consequat nibh sed nulla finibus, at porttitor lectus efficitur. Aliquam feugiat justo et nunc fringilla accumsan. Vestibulum malesuada aliquet sagittis. Phasellus sapien purus, lacinia vel diam malesuada, blandit convallis est. Donec ex purus, condimentum a libero id, lobortis venenatis massa. Cras sit amet massa aliquet, pulvinar nibh ultrices, condimentum leo. Mauris in eros iaculis, tincidunt erat sed, laoreet libero. Phasellus placerat interdum velit, maximus accumsan arcu blandit id. Curabitur condimentum ex lectus, eget ultrices risus imperdiet ut. Sed iaculis consequat felis, id sodales est aliquet eu. Duis finibus tincidunt nulla, ac euismod metus fringilla ut. Integer at purus vitae enim aliquet posuere eget sit amet enim.', 'Culminado', '2021-11-26 04:16:37', '2021-11-26 05:16:22', 'Derecho Internacional');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidades`
--

CREATE TABLE `especialidades` (
  `Id_especialidad` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `documentacion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `especialidades`
--

INSERT INTO `especialidades` (`Id_especialidad`, `nombre`, `descripcion`, `documentacion`, `imagen`, `created_at`, `updated_at`) VALUES
(1, 'Derecho Penal', 'Manejamos todo tipo de delitos, homicidio, lesiones, robo, despojo, fraude, abuso de confianza, daño en propiedad ajena, secuestro, violación, lenocinio y trata de personas, portación de armas, cohecho, delitos contra la salud, entre otros.', 'Coadyuvancia con la Fiscalía (Ministerio Público)\r\nElaboración de denuncias para presentar ante la Fiscalía\r\nMecanismos alternativos de solución a conflictos\r\nDefensa jurídica durante cualquier etapa del procedimiento penal (audiencia inicial, intermedia y Juicio)\r\nProcedimiento abreviado\r\nSuspensión condicional del proceso\r\nAcuerdos reparatorios\r\nAmparos penales', 'abogado-2.jpeg', '2021-11-26 00:39:47', '2021-11-26 00:39:47'),
(2, 'Derecho Civil', 'Es la rama del derecho que atribuye facultades personalísimas a los sujetos como individuos, como miembros de una familia y como titulares de un patrimonio.\r\n\r\nEs el área encargada de las relaciones jurídicas entre los particulares como sujetos de derechos.', 'Juicios reivindicatorios\r\nCumplimiento o recisión de contratos\r\nUsucapión\r\nArrendamientos\r\nRendición de cuentas\r\nComodato\r\nDonación\r\nDesocupaciones\r\nEmbargos', 'ABOGADOS.jpeg', '2021-11-26 04:11:01', '2021-11-26 04:13:55'),
(3, 'Derecho Familiar', 'El Derecho Familiar gira en torno a la protección, tutela, subsistencia, estabilidad, conformación, así como a la disolución de la familia.\r\n\r\nSiendo la familia la base de nuestra sociedad y en el entendimiento de lo importante que son todos los asuntos familiares, los manejamos con la sensibilidad y profesionalismo que la materia exige.', 'Divorcio express (incausado)\r\nPensión alimenticia\r\nGuarda y custodia\r\nVisita y convivencia\r\nCancelación o disminución de pensión alimenticia\r\nPérdida de patria potestad\r\nSeparación del domicilio conyugal\r\nJuicio de paternidad\r\nJuicios testamentarios e intestamentarios\r\nCorrección de actas\r\nAdopción\r\nJuicio de interdicción\r\nContradicción de paternidad\r\nOtros', 'derecho_de_familia_1.jpeg', '2021-11-26 04:11:37', '2021-11-26 04:11:37'),
(4, 'Derecho Mercantil', 'Conjunto de normas que regulan la actividad de los comerciantes, los actos de comercio y las relaciones jurídicas derivadas de la realización de éstos.\r\n\r\nComo área del derecho que regula los actos de comercio, requiere de análisis y estrategia para obtener los mejores resultados para nuestros clientes.\r\n\r\nSomos expertos en pagarés, cheques, letras de cambio, facturas, contratos, entre otros.', 'Juicio Ejecutivo Mercantil\r\nJuicio Ordinario Mercantil\r\nJuicio Oral Mercantil\r\nEmbargos\r\nCancelación de embargos\r\nEntre otros', '4.jpg', '2021-11-26 04:12:18', '2021-11-26 04:12:18'),
(5, 'Derecho Internacional', 'La globalización ha permitido una gran apertura de comercio y relaciones personales entre México y otros países, esto ha traído consigo problemáticas jurídicas entre mexicanos con personas de otros países entre ellos EE. UU.', 'Ninguna', 'Abogado.jpeg', '2021-11-26 04:12:45', '2021-11-26 04:12:45');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2020_05_21_100000_create_teams_table', 1),
(6, '2020_05_21_200000_create_team_user_table', 1),
(7, '2020_05_21_300000_create_team_invitations_table', 1),
(8, '2021_11_24_234629_usuarios', 1),
(9, '2021_11_24_234635_especialidades', 1),
(10, '2021_11_24_234800_citas', 1),
(11, '2021_11_24_234805_abogadoespecialidad', 1),
(12, '2021_11_25_195246_create_sessions_table', 1);

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
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('UPqX2SPoufRtIzUTTpxiI23zE8vLPulBTqYuABD7', 7, '172.18.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.69 Safari/537.36 Edg/95.0.1020.53', 'YTo2OntzOjM6InVybCI7YToxOntzOjg6ImludGVuZGVkIjtzOjE2OiJodHRwOi8vbG9jYWxob3N0Ijt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3QvaG9tZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NjoiX3Rva2VuIjtzOjQwOiJnaVpuWlZlWnVZOHhGbWJobzZBWVNHOVloVWN5NEk1dTZOejl6NXpvIjtzOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo3O3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjc6Im1lZ2ExMjMiO30=', 1637910480);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_team` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `team_invitations`
--

CREATE TABLE `team_invitations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `team_user`
--

CREATE TABLE `team_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `Id_usuario` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numero` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `avatar` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipo_usuario` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Id_usuario` bigint(20) UNSIGNED NOT NULL,
  `correo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipo_usuario` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id_usuario`, `correo`, `nombre`, `apellidos`, `password`, `numero`, `avatar`, `tipo_usuario`, `created_at`, `updated_at`) VALUES
(4, 'charlie@admin.com', 'Charlie', 'cox', 'admin123', '2211889301', 'Charlie_Cox.png', 'Administrador', NULL, '2021-11-26 04:06:17'),
(5, 'robertomtz@gmail.com', 'Roberto', 'Martinez Osuna', 'Roberto123', '(52) (81) 8299 2101', 'unnamed.jpeg', 'Cliente', '2021-11-26 02:51:04', '2021-11-26 02:51:04'),
(6, 'ArmandoAR@basham.com.mx', 'ARMANDO', 'RAMIREZ', 'armando123', '2231324566', 'abogado-junior-despacho.jpeg', 'Abogado', '2021-11-26 02:51:23', '2021-11-26 02:51:23'),
(7, 'noe.rivera1110@uppuebla.edu.mx', 'Noé', 'Rivera Lugo', 'mega123', '2211805619', '3.jpg', 'Cliente', '2021-11-26 02:53:05', '2021-11-26 02:53:05'),
(8, 'Zarina@contacto.mx', 'Zarina', 'Beltrán Bretón', 'azar123', '(52) (81) 8299 2101', 'istockphoto-931752312-170667a.jpeg', 'Abogado', '2021-11-26 04:14:52', '2021-11-26 04:14:52'),
(9, 'Rodrigomarc@contactar.mx', 'Rodrigo', 'Marquez', 'mega123', '1241251351', '1.jpg', 'Abogado', '2021-11-26 04:15:35', '2021-11-26 05:23:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `abogadoespecialidad`
--
ALTER TABLE `abogadoespecialidad`
  ADD KEY `abogadoespecialidad_id_especialidad_foreign` (`Id_especialidad`),
  ADD KEY `abogadoespecialidad_ibfk_1` (`Id_abogado`);

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`Id_cita`),
  ADD KEY `citas_id_cliente_foreign` (`Id_cliente`),
  ADD KEY `citas_id_abogado_foreign` (`Id_abogado`);

--
-- Indices de la tabla `especialidades`
--
ALTER TABLE `especialidades`
  ADD PRIMARY KEY (`Id_especialidad`);

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
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indices de la tabla `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teams_user_id_index` (`user_id`);

--
-- Indices de la tabla `team_invitations`
--
ALTER TABLE `team_invitations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_invitations_team_id_email_unique` (`team_id`,`email`);

--
-- Indices de la tabla `team_user`
--
ALTER TABLE `team_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_user_team_id_user_id_unique` (`team_id`,`user_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id_usuario`),
  ADD UNIQUE KEY `users_correo_unique` (`email`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id_usuario`),
  ADD UNIQUE KEY `usuarios_correo_unique` (`correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `Id_cita` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `especialidades`
--
ALTER TABLE `especialidades`
  MODIFY `Id_especialidad` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `team_invitations`
--
ALTER TABLE `team_invitations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `team_user`
--
ALTER TABLE `team_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `Id_usuario` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id_usuario` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `abogadoespecialidad`
--
ALTER TABLE `abogadoespecialidad`
  ADD CONSTRAINT `abogadoespecialidad_ibfk_1` FOREIGN KEY (`Id_abogado`) REFERENCES `usuarios` (`Id_usuario`) ON DELETE CASCADE,
  ADD CONSTRAINT `abogadoespecialidad_id_especialidad_foreign` FOREIGN KEY (`Id_especialidad`) REFERENCES `especialidades` (`Id_especialidad`);

--
-- Filtros para la tabla `citas`
--
ALTER TABLE `citas`
  ADD CONSTRAINT `citas_id_abogado_foreign` FOREIGN KEY (`Id_abogado`) REFERENCES `usuarios` (`Id_usuario`),
  ADD CONSTRAINT `citas_id_cliente_foreign` FOREIGN KEY (`Id_cliente`) REFERENCES `usuarios` (`Id_usuario`);

--
-- Filtros para la tabla `team_invitations`
--
ALTER TABLE `team_invitations`
  ADD CONSTRAINT `team_invitations_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
