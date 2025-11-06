-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 06 nov. 2025 à 00:10
-- Version du serveur : 11.4.8-MariaDB
-- Version de PHP : 8.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `diso2055_albaraime`
--

-- --------------------------------------------------------

--
-- Structure de la table `activites`
--

CREATE TABLE `activites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` text NOT NULL,
  `description` text NOT NULL,
  `image1` varchar(255) NOT NULL,
  `alt_image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `alt_image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL,
  `alt_image3` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `activites`
--

INSERT INTO `activites` (`id`, `content`, `description`, `image1`, `alt_image1`, `image2`, `alt_image2`, `image3`, `alt_image3`, `created_at`, `updated_at`) VALUES
(1, '<h2>Équipements sportifs</h2><p><br></p><blockquote>Notre école privée met à disposition des équipements sportifs modernes et variés pour encourager nos élèves à développer leurs aptitudes physiques. Du terrain de football aux salles de gymnastique entièrement équipées, chaque espace est conçu pour offrir un environnement sûr et stimulant, favorisant la pratique d\'activités sportives tout en promouvant l\'esprit d\'équipe et le bien-être de nos élèves.</blockquote><p><br></p>', '<p><br></p><p><strong>Le sport : un pilier essentiel pour l\'épanouissement de vos enfants</strong></p><p><br>À travers l’activité physique, vos enfants développent bien plus que leurs muscles : ils cultivent leur équilibre, leur coordination, et leur précision, tout en découvrant la pleine maîtrise de leur corps et de ses mouvements dans l’espace.<br>Le sport, c’est aussi une école de vie. Il aide à canaliser leur énergie, à renforcer leur confiance en eux, et à cultiver des qualités précieuses telles que l’autonomie, l’esprit d’initiative, le respect des autres, et le fair-play.<br>Chez nous, chaque activité sportive est pensée pour favoriser leur épanouissement global, à la fois sur le plan physique et émotionnel.<br>Donnez à vos enfants les clés pour grandir et s’épanouir pleinement grâce au sport !</p><p><br></p>', 'uploads/cafeteria/IMG_5821.jpg', 'img1', 'uploads/cafeteria/29b99bbd-3bbe-4523-a91d-31837a417d16.jpg', 'img2', 'uploads/cafeteria/766b9823-3276-4095-837a-4409f370d79b.jpg', 'img3', '2024-12-24 21:19:22', '2024-12-31 22:21:55');

-- --------------------------------------------------------

--
-- Structure de la table `albaraime1`
--

CREATE TABLE `albaraime1` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) NOT NULL,
  `profile` text NOT NULL,
  `description` text NOT NULL,
  `content` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `alt_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `albaraime1`
--

INSERT INTO `albaraime1` (`id`, `nom`, `profile`, `description`, `content`, `title`, `image`, `alt_image`, `created_at`, `updated_at`) VALUES
(1, 'Mme Naima Karafi', 'Présidente Directrice-générale', '<p>Chers élèves, chers parents,</p><p>Depuis plus de 30 ans, les Écoles AL Baraime s’engagent à offrir un enseignement d’excellence dans un cadre bienveillant, où chaque élève peut s’épanouir et construire son avenir avec confiance.</p><p>Notre mission va bien au-delà de l’instruction : nous transmettons des valeurs humaines universelles et accompagnons chaque élève dans son développement personnel et professionnel. À AL Baraime, nous croyons en une éducation qui allie rigueur académique, esprit d’innovation et engagement citoyen.</p><p>Grâce à une équipe pédagogique passionnée et à des méthodes adaptées aux défis du monde d’aujourd’hui, nous préparons nos élèves à devenir des adultes responsables, créatifs et ambitieux.</p><p>Ensemble, construisons un avenir prometteur pour nos enfants.</p><p><br></p>', '<p>Nos méthodes pédagogiques, visent l’autonomie, la créativité, l’épanouissement et l’ouverture sur le monde extérieur tout en respectant notre identité nationale.</p><p>Encouragé par les excellents résultats obtenus et soutenu par la satisfaction de nos chers Parents, École Albaraime est devenu une référence dans le monde éducatif.</p><p><br></p>', 'A propos de nous', 'uploads/alBaraime1/IMG_F347809DA232-1.jpg', 'MME KARAFI', '2024-12-23 20:49:30', '2025-02-10 10:59:09');

-- --------------------------------------------------------

--
-- Structure de la table `albaraime2`
--

CREATE TABLE `albaraime2` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) NOT NULL,
  `profile` text NOT NULL,
  `description` text NOT NULL,
  `content` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `alt_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `albaraime2`
--

INSERT INTO `albaraime2` (`id`, `nom`, `profile`, `description`, `content`, `title`, `image`, `alt_image`, `created_at`, `updated_at`) VALUES
(1, 'M. Mohammed HAMAMAT', 'Directeur Pédagogique', '<p>Chers élèves, chers parents,</p><p>C’est avec enthousiasme que nous vous accueillons aux Écoles AL Baraime, un établissement dédié à l’épanouissement et à la réussite de chaque élève. Depuis plus de 30 ans, nous nous engageons à offrir un enseignement de qualité dans un cadre bienveillant, propice au développement personnel et professionnel de nos élèves.</p><p>Notre mission repose sur deux piliers essentiels : transmettre un savoir solide et inculquer des valeurs humaines universelles. Nous avons à cœur d’accompagner nos élèves dans leur construction, afin qu’ils grandissent en devenant des adultes responsables, épanouis et engagés dans la société.</p><p>L’excellence est au cœur de notre démarche. Grâce à une équipe pédagogique passionnée et des méthodes innovantes, nous nous efforçons chaque jour de créer un environnement stimulant, où nos élèves développent confiance, créativité et esprit d’initiative.</p><p>Ensemble, écrivons l’avenir et réalisons de grandes choses !</p>', '<p>Nos méthodes pédagogiques, visent l’autonomie, la créativité, l’épanouissement et l’ouverture sur le monde extérieur tout en respectant notre identité nationale.</p><p>Encouragé par les excellents résultats obtenus et soutenu par la satisfaction de nos chers Parents, École Albaraime est devenu une référence dans le monde éducatif.</p>', 'A propos de nous', 'uploads/alBaraime2/med.jpg', 'Carson Stuckey', '2024-12-23 21:00:42', '2025-02-10 10:59:54');

-- --------------------------------------------------------

--
-- Structure de la table `apropos`
--

CREATE TABLE `apropos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `quote` varchar(255) NOT NULL,
  `title_service1` varchar(255) NOT NULL,
  `text_service1` varchar(255) NOT NULL,
  `title_service2` varchar(255) NOT NULL,
  `text_service2` varchar(255) NOT NULL,
  `qualite` varchar(255) NOT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT 0,
  `image1` varchar(255) NOT NULL,
  `alt_image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `alt_image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL,
  `alt_image3` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `apropos`
--

INSERT INTO `apropos` (`id`, `title`, `description`, `quote`, `title_service1`, `text_service1`, `title_service2`, `text_service2`, `qualite`, `is_published`, `image1`, `alt_image1`, `image2`, `alt_image2`, `image3`, `alt_image3`, `created_at`, `updated_at`) VALUES
(1, 'Notre système éducatif vous Inspire encore.', '<p>Les écoles AL Baraime reposent sur une histoire riche de<strong> 35 ans</strong> d’enseignement privé au Maroc, plus précisément à <strong>Azemmour</strong> . Sa fondation a vu le jour avec la vision de Madame <strong><em>Naima KARAFI</em></strong>, la Présidente Directrice-Générale qui a reconnu dans le temps un besoin éducatif spécifique dans notre communauté et a contribué en offrant une éducation de qualité durant toutes ces décennies.</p>', 'Les Écoles ALBaraime Privées s\'engagent à offrir un enseignement de qualité, répondant aux besoins éducatifs spécifiques de la communauté à Azemmour.', 'Albaraime Services', 'Enseignement de l\'anglais dès la maternelle.', 'Enseignement trilingue', 'Anglais ☑  Français ☑  Arabe ☑', 'Plus 35 Ans Qualité de service', 1, 'uploads/apropos/PHOTO-2025-03-01-21-48-56.jpg', 'img1', 'uploads/apropos/01JFMPZH909CT9V2FDGFYDK3N5.jpg', 'img2', 'uploads/apropos/01JFMPZH91V6547A9AR981B2DK.jpg', 'img3', '2024-12-17 19:28:46', '2025-03-03 07:52:04');

-- --------------------------------------------------------

--
-- Structure de la table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categorie_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL,
  `image` varchar(255) NOT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `blogs`
--

INSERT INTO `blogs` (`id`, `categorie_id`, `title`, `slug`, `content`, `date`, `image`, `is_published`, `created_at`, `updated_at`) VALUES
(2, 1, 'la Journée d’Accueil et d’Intégration des nouveaux élèves ! 🤩🥰', 'la-journee-daccueil-et-dintegration-des-nouveaux-eleves', 'C\'est une occasion idéale pour s\'immerger dans la vie de l\'établissement, poser toutes vos questions, et commencer cette nouvelle aventure scolaire dans une ambiance conviviale et chaleureuse. Soyez prêts à vivre une expérience enrichissante qui marque le début de votre parcours ! 🎉', '2024-11-17', 'uploads/blogs/01JD2S0MVR2T7YKTQWCSE7C3X9.jpg', 1, '2024-11-17 14:08:54', '2024-12-27 13:36:28'),
(3, 1, ' 🎉 نظمت مدارس البراعم الخاصة بآزمور كرنفالا تحت شعار التميز دائما وأبدا ', 'nthmt-mdars-albraaam-alkhas-bazmor-krnfala-tht-shaaar-altmyz-dayma-oabda', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\n\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', '2024-11-24', 'uploads/blogs/01JD2S1057TKRS0F6B89B9V1J5.jpg', 1, '2024-11-17 15:15:27', '2024-11-19 16:55:18'),
(4, 1, '😍 رحلة استمتع فيها براعمنا بمجموعة من الأنشطة الترفيهية والتنافسية', 'rhl-astmtaa-fyha-braaamna-bmgmoaa-mn-alansht-altrfyhy-oaltnafsy', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\n\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', '2024-11-17', 'uploads/blogs/01JD2S1CF6RWAXJ3Z28CXHHS7J.jpg', 1, '2024-11-17 15:15:58', '2024-11-19 16:55:30'),
(5, 1, 'une séance unique de langue française a eu lieu à la plage', 'une-seance-unique-de-langue-francaise-a-eu-lieu-a-la-plage', 'L’enseignement est un métier de cœur. Transmettre, c’est offrir à l’autre les clés pour ouvrir les portes de l’avenir.\nPour les élèves du tronc commun, une séance unique de langue française a eu lieu à la plage, dirigée avec passion par notre cher professeur Mohammed HAMAMAT.\nCe cadre exceptionnel a permis d’apprendre autrement, en stimulant la créativité des élèves.', '2024-11-17', 'uploads/blogs/01JD2S1PV83PCDC8K5RVKYJ0SG.jpg', 1, '2024-11-17 15:17:40', '2024-11-19 16:55:41'),
(6, 2, 'روض البراعم بأزمور يحصد أول لواء أخضر للتعليم الأولي في المغرب: نموذج يحتذى في التربية البيئية ', 'rod-albraaam-bazmor-yhsd-aol-loaaa-akhdr-lltaalym-alaoly-fy-almghrb-nmothg-yhtth-fy-altrby-albyyy', 'https://www.achewa9e3.com/?p=199268', '2024-12-21', 'uploads/blogs/01JGFDR39ZXY10D9FMBYBHVMFJ.jpeg', 1, '2024-12-31 22:35:25', '2025-01-01 01:30:02'),
(7, 2, 'اللواء الاخضر يرفرف في مجموعة مدارس البراعم بازمور كمؤسسة متميزة بالمديرية الإقليمية بالجديدة', 'alloaaa-alakhdr-yrfrf-fy-mgmoaa-mdars-albraaam-bazmor-kmoss-mtmyz-balmdyry-alaklymy-balgdyd', 'https://sahifatalyaoum.com/2024/12/22/اللواء-الاخضر-يرفرف-في-مجموعة-مدارس-ال/', '2024-12-21', 'uploads/blogs/01JGFDTS680KNJ39NFW2EJTTKA.jpg', 1, '2024-12-31 22:36:53', '2024-12-31 22:36:59');

-- --------------------------------------------------------

--
-- Structure de la table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('1238236f7c205e87a8ee15cd426795a12fcceab0', 'i:1;', 1735681411),
('1238236f7c205e87a8ee15cd426795a12fcceab0:timer', 'i:1735681411;', 1735681411),
('16f503315c33110298390a368ff13093c1ad79bb', 'i:1;', 1735505242),
('16f503315c33110298390a368ff13093c1ad79bb:timer', 'i:1735505242;', 1735505242),
('1970f031299493b1ce1aeac180dcaf895b39167a', 'i:1;', 1735402589),
('1970f031299493b1ce1aeac180dcaf895b39167a:timer', 'i:1735402589;', 1735402589),
('356a192b7913b04c54574d18c28d46e6395428ab', 'i:1;', 1740342197),
('356a192b7913b04c54574d18c28d46e6395428ab:timer', 'i:1740342197;', 1740342197),
('3e0eaed64eac64407379effc910d81d19853649b', 'i:1;', 1735488023),
('3e0eaed64eac64407379effc910d81d19853649b:timer', 'i:1735488023;', 1735488023),
('478569c522436e90644ce7ffa91c3c37dc4df382', 'i:1;', 1735402472),
('478569c522436e90644ce7ffa91c3c37dc4df382:timer', 'i:1735402472;', 1735402472),
('6450b27ef3d5724859ef830515a616ae54204c6f', 'i:1;', 1738859763),
('6450b27ef3d5724859ef830515a616ae54204c6f:timer', 'i:1738859763;', 1738859763),
('999054d923d78d0278930939e064e708561661b7', 'i:1;', 1735691789),
('999054d923d78d0278930939e064e708561661b7:timer', 'i:1735691789;', 1735691789),
('a17961fa74e9275d529f489537f179c05d50c2f3', 'i:1;', 1735397416),
('a17961fa74e9275d529f489537f179c05d50c2f3:timer', 'i:1735397416;', 1735397416),
('ad14dd53d2f22eebf19fa12b249e5a202926c1cf', 'i:1;', 1739184900),
('ad14dd53d2f22eebf19fa12b249e5a202926c1cf:timer', 'i:1739184900;', 1739184900),
('ec0db5ff2eac55fdbd3479edf76f2f6a10e31614', 'i:1;', 1739199311),
('ec0db5ff2eac55fdbd3479edf76f2f6a10e31614:timer', 'i:1739199311;', 1739199311),
('fb9248ed8dd8a492315b12821e9f5d321b5172d9', 'i:1;', 1740339593),
('fb9248ed8dd8a492315b12821e9f5d321b5172d9:timer', 'i:1740339593;', 1740339593),
('lesecolesalbaraime_cache_1e20d1ef4cf1d216758d293f420bc748b2ccf6b0', 'i:1;', 1740873915),
('lesecolesalbaraime_cache_1e20d1ef4cf1d216758d293f420bc748b2ccf6b0:timer', 'i:1740873915;', 1740873915),
('lesecolesalbaraime_cache_28bb06b3acfd2b1487e542cbd795360ff1db72f5', 'i:1;', 1740991430),
('lesecolesalbaraime_cache_28bb06b3acfd2b1487e542cbd795360ff1db72f5:timer', 'i:1740991430;', 1740991430),
('lesecolesalbaraime_cache_31f0246c1703a5abcc9eaaecc0e3a9c3b4e2463e', 'i:1;', 1740485860),
('lesecolesalbaraime_cache_31f0246c1703a5abcc9eaaecc0e3a9c3b4e2463e:timer', 'i:1740485860;', 1740485860),
('lesecolesalbaraime_cache_6e54fa95f3677bade21a4a23717dae16f1887678', 'i:1;', 1740864819),
('lesecolesalbaraime_cache_6e54fa95f3677bade21a4a23717dae16f1887678:timer', 'i:1740864819;', 1740864819),
('lesecolesalbaraime_cache_77de68daecd823babbb58edb1c8e14d7106e83bb', 'i:1;', 1756813266),
('lesecolesalbaraime_cache_77de68daecd823babbb58edb1c8e14d7106e83bb:timer', 'i:1756813266;', 1756813266),
('lesecolesalbaraime_cache_d563cad89b7de3c8ff304fd8357a0d8c83b4f5aa', 'i:1;', 1740874762),
('lesecolesalbaraime_cache_d563cad89b7de3c8ff304fd8357a0d8c83b4f5aa:timer', 'i:1740874762;', 1740874762);

-- --------------------------------------------------------

--
-- Structure de la table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `cafeterias`
--

CREATE TABLE `cafeterias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` text NOT NULL,
  `description` text NOT NULL,
  `image1` varchar(255) NOT NULL,
  `alt_image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `alt_image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL,
  `alt_image3` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `cafeterias`
--

INSERT INTO `cafeterias` (`id`, `content`, `description`, `image1`, `alt_image1`, `image2`, `alt_image2`, `image3`, `alt_image3`, `created_at`, `updated_at`) VALUES
(1, '<h2><strong>Nous prenons soin de la santé et du bien-être de vos enfants</strong></h2><p><br></p><ul><li>Parce que leur énergie et leur concentration sont essentielles à leur réussite, nous proposons des repas préparés avec soin : frais, savoureux et parfaitement équilibrés. Ces repas permettent à vos enfants de rester dynamiques tout au long de l\'après-midi et de tirer le meilleur de chaque moment d’apprentissage.</li><li>Nous comprenons également les besoins spécifiques de certains enfants. Ainsi, pour des raisons de santé ou de choix, les élèves ayant des allergies alimentaires ou préférant ne pas profiter de notre service de cantine peuvent bénéficier de notre option de garde repas, spécialement adaptée à leur confort.</li></ul>', '<h2>La restauration scolaire</h2><p><br></p><ul><li>Les menus, conçus et validés par des professionnels du secteur, sont variés, équilibrés et visent à éduquer le goût des élèves. Préparés dans les cuisines centrales de chaque site, ils respectent rigoureusement les normes d’hygiène et de sécurité alimentaire, bénéficiant ainsi aux élèves de la maternelle au lycée.&nbsp;</li></ul><p><br></p>', 'uploads/cafeteria/IMG_9171.jpg', 'image1', 'uploads/cafeteria/IMG_8162.jpg', 'image2', 'uploads/cafeteria/la-buvette-du-centro.jpg', 'image3', '2024-12-24 21:14:48', '2025-02-23 20:22:43');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `title`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Blog', 'blog', '2024-11-14 16:39:46', '2024-11-17 15:06:54'),
(2, 'Presse', 'presse', '2024-11-17 15:07:07', '2024-11-17 15:07:07');

-- --------------------------------------------------------

--
-- Structure de la table `colleges`
--

CREATE TABLE `colleges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `niveau` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `alt_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `colleges`
--

INSERT INTO `colleges` (`id`, `niveau`, `title`, `description`, `image`, `alt_image`, `created_at`, `updated_at`) VALUES
(1, 'Collège', 'Bienvenue au Collège !', '<p>Les élèves préparent les examens français. La section internationale arabe commencée à l’école primaire permet aux élèves de préparer cette option internationale au Brevet des collèges puis au Baccalauréat. Les élèves passent aussi des certifications en anglais, des enseignants expérimentés, dont un professeur documentaliste et un professeur ressource en information sur l’orientation, accompagnent les élèves dans la construction de leur parcours, tant au niveau de l’acquisition des savoirs et des méthodes, qu’au niveau de l’éducation à l’orientation. Dès la classe de 1APIC, les métiers sont présentés à travers les projets pédagogiques pluridisciplinaires. C’est aussi une des façons de s’inscrire dans l’environnement local. Le lycée a vocation à accompagner les projets de chacun, citoyen du monde, vers la réussite et l’épanouissement.</p><p><br></p>', 'uploads/college/s1.jpg', 'college', '2024-12-25 18:34:50', '2025-01-01 00:56:36');

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(6, 'MR MOHAMMED HAMAMAT', 'mohammed.hamamat@lesecolesalbaraime.com', '..', 'hello !', '2024-12-29 16:03:08', '2024-12-31 22:39:19'),
(7, 'JohnHycle', 'yawiviseya67@gmail.com', 'Hello  i am wrote about   the prices', 'Γεια σου, ήθελα να μάθω την τιμή σας.', '2025-03-05 19:40:39', '2025-03-05 19:40:39'),
(8, 'Johnthigo', 'duqotayowud23@gmail.com', 'Hallo, i am writing about your the price', 'Hæ, ég vildi vita verð þitt.', '2025-03-13 10:25:23', '2025-03-13 10:25:23'),
(9, 'Johnthigo', 'duqotayowud23@gmail.com', 'Hello, i am writing about your the price for reseller', 'Hæ, ég vildi vita verð þitt.', '2025-03-16 18:38:05', '2025-03-16 18:38:05'),
(10, 'JohnHycle', 'zekisuquc419@gmail.com', 'Hi, i am wrote about   the price for reseller', 'Zdravo, htio sam znati vašu cijenu.', '2025-03-22 09:07:03', '2025-03-22 09:07:03'),
(11, 'Johnthigo', 'zekisuquc419@gmail.com', 'Hello, i am wrote about your   price for reseller', 'Sveiki, aš norėjau sužinoti jūsų kainą.', '2025-03-31 16:50:59', '2025-03-31 16:50:59'),
(12, 'JohnHycle', 'zekisuquc419@gmail.com', 'Hi  i am writing about   the price', 'Szia, meg akartam tudni az árát.', '2025-04-05 20:06:58', '2025-04-05 20:06:58'),
(13, 'Johnthigo', 'zekisuquc419@gmail.com', 'Hello  i writing about   the prices', 'Salut, ech wollt Äre Präis wëssen.', '2025-04-07 08:35:47', '2025-04-07 08:35:47'),
(14, 'WilliamJal', 'Emilyrose05115@gmail.com', 'URGENT MESSAGE! URGENT ALERT: CLAIM YOUR $199,455.37 NOW https://script.google.com/macros/s/AKfycbww6x-jZKZOrQqfDgu9E0lN1fOFMMATdcnlqZeIHIxlT597iME81ZmySiaItbbYH4zaEw/exec/2f1m6d2r/5m0t/p/a0/1v2h8k3p/6n9q/5/d8/3e2u7l4i/7e5z/a/c9', 'URGENT MESSAGE! Final Notice: $199,875.54 Withdrawal Expires Tonight https://script.google.com/macros/s/AKfycbw5YtTEonqqAw2R4nJWvcWOL46FkPjfwJUsGi8eCvmPhptjlCgXmgnGqVEmTH2wK8gZMg/exec/7v9b8a5r/4c7m/o/yr/2z1g8d1p/6t8t/l/p5/8w9h6k4r/7v6t/l/u0', '2025-07-01 03:49:32', '2025-07-01 03:49:32'),
(15, 'WilliamJal', 'Emilyrose05115@gmail.com', 'URGENT MESSAGE! URGENT ALERT: CLAIM YOUR $199,455.37 NOW https://script.google.com/macros/s/AKfycbww6x-jZKZOrQqfDgu9E0lN1fOFMMATdcnlqZeIHIxlT597iME81ZmySiaItbbYH4zaEw/exec/2f1m6d2r/5m0t/p/a0/1v2h8k3p/6n9q/5/d8/3e2u7l4i/7e5z/a/c9', 'URGENT MESSAGE! Final Notice: $199,875.54 Withdrawal Expires Tonight https://script.google.com/macros/s/AKfycbw5YtTEonqqAw2R4nJWvcWOL46FkPjfwJUsGi8eCvmPhptjlCgXmgnGqVEmTH2wK8gZMg/exec/7v9b8a5r/4c7m/o/yr/2z1g8d1p/6t8t/l/p5/8w9h6k4r/7v6t/l/u0', '2025-07-01 03:49:41', '2025-07-01 03:49:41'),
(16, 'WilliamJal', 'Emilyrose05115@gmail.com', 'URGENT MESSAGE! URGENT ALERT: CLAIM YOUR $199,455.37 NOW https://script.google.com/macros/s/AKfycbww6x-jZKZOrQqfDgu9E0lN1fOFMMATdcnlqZeIHIxlT597iME81ZmySiaItbbYH4zaEw/exec/2f1m6d2r/5m0t/p/a0/1v2h8k3p/6n9q/5/d8/3e2u7l4i/7e5z/a/c9', 'URGENT MESSAGE! Final Notice: $199,875.54 Withdrawal Expires Tonight https://script.google.com/macros/s/AKfycbw5YtTEonqqAw2R4nJWvcWOL46FkPjfwJUsGi8eCvmPhptjlCgXmgnGqVEmTH2wK8gZMg/exec/7v9b8a5r/4c7m/o/yr/2z1g8d1p/6t8t/l/p5/8w9h6k4r/7v6t/l/u0', '2025-07-01 03:49:50', '2025-07-01 03:49:50'),
(17, 'Michaelalula', 'pagalannu01@gmail.com', 'URGENT MESSAGE! FINAL CALL: COLLECT YOUR $213,295.36 PRIZE TODAY', 'URGENT! Claim Your $213,685.49 Prize: Act Fast https://script.google.com/macros/s/AKfycbwkzfePICPpEuaLZgfpQYYZf-VfxC-IlIlTsO1CswndiiIlED2Cw-ulROkk1jthVVMV/exec/1f3h9a3q/6r9d/z/c1/5w7n6l3y/6m8y/1/oi/3z9u6s5y/6n0r/a/48', '2025-08-19 17:31:23', '2025-08-19 17:31:23'),
(18, 'Michaelalula', 'pagalannu01@gmail.com', 'URGENT MESSAGE! FINAL CALL: COLLECT YOUR $213,295.36 PRIZE TODAY', 'URGENT! Claim Your $213,685.49 Prize: Act Fast https://script.google.com/macros/s/AKfycbwkzfePICPpEuaLZgfpQYYZf-VfxC-IlIlTsO1CswndiiIlED2Cw-ulROkk1jthVVMV/exec/1f3h9a3q/6r9d/z/c1/5w7n6l3y/6m8y/1/oi/3z9u6s5y/6n0r/a/48', '2025-08-19 17:31:37', '2025-08-19 17:31:37'),
(19, 'Michaelalula', 'pagalannu01@gmail.com', 'URGENT MESSAGE! FINAL CALL: COLLECT YOUR $213,295.36 PRIZE TODAY', 'URGENT! Claim Your $213,685.49 Prize: Act Fast https://script.google.com/macros/s/AKfycbwkzfePICPpEuaLZgfpQYYZf-VfxC-IlIlTsO1CswndiiIlED2Cw-ulROkk1jthVVMV/exec/1f3h9a3q/6r9d/z/c1/5w7n6l3y/6m8y/1/oi/3z9u6s5y/6n0r/a/48', '2025-08-19 17:31:50', '2025-08-19 17:31:50'),
(20, 'Jennifer Lechuga', 'register@websearchindex.site', 'lesecolesalbaraime.org', 'Hello,\r\n\r\nYour lesecolesalbaraime.org website need to be indexed in Google Search Index to be displayed in Search Results.\r\n\r\nSiubmit lesecolesalbaraime.org at https://searchregister.org', '2025-10-17 15:34:42', '2025-10-17 15:34:42');

-- --------------------------------------------------------

--
-- Structure de la table `cursus_scolaires`
--

CREATE TABLE `cursus_scolaires` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `service1` varchar(255) NOT NULL,
  `service2` varchar(255) NOT NULL,
  `service3` varchar(255) NOT NULL,
  `service4` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `alt_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `cursus_scolaires`
--

INSERT INTO `cursus_scolaires` (`id`, `title`, `description`, `service1`, `service2`, `service3`, `service4`, `image`, `alt_image`, `created_at`, `updated_at`) VALUES
(1, 'Un parcours d’excellence pour grandir en confiance!', 'Aux écoles AL Baraime, de la maternelle au lycée, l’enseignement et l’apprentissage se font conformément au programme et aux exigences du Ministère de l’Education Nationale et des Sports, pour tous les cycles et à tous les niveaux. Découvrez notre cursus pédagogique…', 'Préscolaire', 'Primaire', 'Collège', 'Lycée', 'uploads/cursusScolaire/01JFMR7P5V2Q2ZQA6864QE85VZ.jpg', 'cursus Scolaire', '2024-12-18 10:14:15', '2024-12-21 12:59:12');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `fournitures`
--

CREATE TABLE `fournitures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `niveau` text NOT NULL,
  `file` varchar(255) NOT NULL,
  `title_btn` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `fournitures`
--

INSERT INTO `fournitures` (`id`, `title`, `niveau`, `file`, `title_btn`, `created_at`, `updated_at`) VALUES
(1, ' 1ère Année du primaire', 'primaire', 'uploads/fournitures/1ère Année du primaire._compressed.pdf', 'Télécharger en pdf', '2024-12-24 21:05:42', '2025-07-17 17:29:53'),
(2, ' 2ème Année du primaire.', 'primaire', 'uploads/fournitures/2ème Année du primaire.pdf', 'Télécharger en pdf', '2024-12-24 21:54:40', '2025-07-17 17:36:58'),
(3, '3ème Année du primaire.', 'primaire', 'uploads/fournitures/3ème Année du primaire.pdf', 'Télécharger en pdf', '2024-12-24 21:55:05', '2025-07-17 17:38:01'),
(4, '4ème Année du primaire.', 'primaire', 'uploads/fournitures/4ème Année du primaire. ￼￼￼￼￼￼￼￼￼￼￼￼￼￼￼￼￼￼￼￼￼pdf.pdf', 'Télécharger en pdf', '2024-12-24 21:55:36', '2025-07-17 17:39:01'),
(5, '5ème Année du primaire.', 'primaire', 'uploads/fournitures/5ème Année du primaire.pdf', 'Télécharger en pdf', '2024-12-24 21:55:51', '2025-07-17 17:40:30'),
(6, '6ème Année du primaire.', 'primaire', 'uploads/fournitures/6ème Année du primaire.pdf', 'Télécharger en pdf', '2024-12-24 21:56:04', '2025-07-17 17:41:36'),
(7, '1ère Année du collège – Parcours International.', 'collège', 'uploads/fournitures/1APIC.pdf', 'Télécharger en pdf', '2024-12-24 21:56:29', '2025-08-22 16:46:19'),
(8, '2ème Année du collège – Parcours International', 'collège', 'uploads/fournitures/2APIC.pdf', 'Télécharger en pdf', '2024-12-24 21:56:54', '2025-08-22 16:48:20'),
(9, '3ème Année du collège – Parcours International', 'collège', 'uploads/fournitures/3APIC.pdf', 'Télécharger en pdf', '2024-12-24 21:57:09', '2025-08-22 16:50:14'),
(10, 'Tronc Commun Scientifiques – Parcours International.', 'lycée', 'uploads/fournitures/Tronc Commun Scientifiques – Parcours International.pdf', 'Télécharger en pdf', '2024-12-24 21:57:39', '2025-07-17 17:47:04'),
(11, '1ère Année du Baccalauréat Sciences Expérimentales – Parcours International.', 'lycée', 'uploads/fournitures/1ère Année du Baccalauréat Sciences Expérimentales – Parcours International.pdf', 'Télécharger en pdf', '2024-12-24 21:58:09', '2025-07-17 17:49:20'),
(13, '2ème Année du Baccalauréat Sciences Économiques et Gestion', 'lycée', 'uploads/fournitures/2ème Année du Baccalauréat Sciences Économiques et Gestion – Parcours International.pdf', 'Télécharger en pdf', '2024-12-24 21:59:32', '2025-07-17 17:58:10'),
(14, '2ème Année du Baccalauréat Sciences Physiques – Parcours International.', 'lycée', 'uploads/fournitures/2ème Année du Baccalauréat Sciences Physiques – Parcours International.pdf', 'Télécharger en pdf', '2024-12-24 22:00:46', '2025-07-17 17:56:36');

-- --------------------------------------------------------

--
-- Structure de la table `galeries`
--

CREATE TABLE `galeries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `galeries`
--

INSERT INTO `galeries` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(8, 'photo1', 'uploads/galerie/01JD2S227PJVY742YB27W3BNFX.jpg', '2024-11-17 14:16:58', '2024-12-01 12:37:49'),
(9, 'photo2', 'uploads/galerie/01JD2S2DTC7QWA06APGQJCCWFQ.jpg', '2024-11-17 14:17:05', '2024-12-01 12:39:07'),
(10, 'photo3', 'uploads/galerie/01JD2S2RKBEKCE6JRTB2M9R45D.jpg', '2024-11-17 14:17:13', '2024-12-01 12:39:13'),
(11, 'photo4', 'uploads/galerie/01JD2S33NT5PC8HRPKJ2WBPRZW.jpg', '2024-11-17 14:17:20', '2024-12-01 12:39:19'),
(13, 'photo5', 'uploads/galerie/01JD2S5KK57JQ2T70PAM23PWH3.jpg', '2024-11-19 16:57:49', '2024-12-01 12:39:32'),
(14, 'photo6', 'uploads/galerie/01JD2S5YHTA4RV0XWRWAEECDN6.jpg', '2024-11-19 16:58:00', '2024-12-01 12:39:28'),
(15, 'MARCHE ROSE', 'uploads/galerie/01JGFDG9F5QV90KBQJWDCT7KPY.jpg', '2024-12-31 22:31:09', '2024-12-31 22:31:09'),
(16, 'MARCHE ROSE', 'uploads/galerie/01JGFDHAG4ZCKTXPBVAH57WNB3.jpg', '2024-12-31 22:31:43', '2024-12-31 22:31:43'),
(17, 'PR HAMAMAT', 'uploads/galerie/01JGFDHQ0HQEHHQ89C3W7Q0NKM.jpg', '2024-12-31 22:31:56', '2024-12-31 22:31:56'),
(18, 'PAVILLON', 'uploads/galerie/01JGFDWFPPSFTPCYB2MGV1B23G.jpg', '2024-12-31 22:37:49', '2024-12-31 22:37:49'),
(19, 'PAVILLON', 'uploads/galerie/01JGFDWVBW91KH3HP73808Z0AQ.jpg', '2024-12-31 22:38:01', '2024-12-31 22:38:01');

-- --------------------------------------------------------

--
-- Structure de la table `homes`
--

CREATE TABLE `homes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `second_title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image1` varchar(255) NOT NULL,
  `alt_image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `alt_image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL,
  `alt_image3` varchar(255) NOT NULL,
  `button_text` varchar(255) NOT NULL,
  `button_link` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `homes`
--

INSERT INTO `homes` (`id`, `title`, `second_title`, `description`, `image1`, `alt_image1`, `image2`, `alt_image2`, `image3`, `alt_image3`, `button_text`, `button_link`, `created_at`, `updated_at`) VALUES
(3, 'Bienvenue chez', 'Les écoles AL Baraime', 'De la Maternelle au Lycée, l\'Excellence à Chaque Étape.\n                                ', 'uploads/home/PHOTO-2025-03-01-21-42-40.jpg', 'image1', 'uploads/home/PHOTO-2025-03-01-21-42-40.jpg', 'image2', 'uploads/home/PHOTO-2025-03-01-21-42-40.jpg', 'image3', 'Découvrir', 'https://lesecolesalbaraime.mymadrassati.com/contact', '2024-12-21 11:33:40', '2025-03-03 07:49:48');

-- --------------------------------------------------------

--
-- Structure de la table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `lycees`
--

CREATE TABLE `lycees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `niveau` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `alt_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `lycees`
--

INSERT INTO `lycees` (`id`, `niveau`, `title`, `description`, `image`, `alt_image`, `created_at`, `updated_at`) VALUES
(1, 'Lycée', 'Bienvenue au Lycée !', '<p>AL BARAIME offre la seconde générale et technologique ainsi que le cycle terminal général, tous les niveaux de lycée étant homologués par le Ministère de l\'Éducation Nationale (MEN).</p><p><br></p>', 'uploads/lycee/s9.jpg', 'lycee', '2024-12-25 18:33:48', '2025-01-01 00:55:42');

-- --------------------------------------------------------

--
-- Structure de la table `maternelles`
--

CREATE TABLE `maternelles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `niveau` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `alt_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `maternelles`
--

INSERT INTO `maternelles` (`id`, `niveau`, `title`, `description`, `image`, `alt_image`, `created_at`, `updated_at`) VALUES
(1, 'Maternelle', 'Bienvenue au Préscolaire!', '<p>La maternelle est l’école de la toute première scolarisation. <strong>Albaraime</strong> prend ainsi en compte les spécificités de chaque enfant dans l’organisation de la vie de l’établissement. Les écoles Albaraimes, la construction du langage se construit en français, mais aussi en arabe et en anglais dès la Toute Petite section. La mise en valeur des productions des enfants constitue un levier pour développer chez chaque enfant l\'envie et le plaisir d\'apprendre afin de lui permettre, progressivement, de devenir élève.</p><p>C’est ainsi qu’une équipe pédagogique expérimentée dans la petite enfance encadre les élèves et assure leur épanouissement au quotidien. Un encadrement qui permet d’assurer leur apprentissage, leur épanouissement et leur sécurité.</p><p><br></p>', 'uploads/maternelle/s0.jpg', 'Maternelle', '2024-12-25 18:35:45', '2025-01-01 00:53:02');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_11_14_172229_create_categories_table', 2),
(5, '2024_11_14_172239_create_blogs_table', 2),
(6, '2024_11_14_172326_create_galeries_table', 2),
(7, '2024_12_17_194308_create_apropos_table', 3),
(8, '2024_12_17_194958_create_cursus_scolaires_table', 3),
(9, '2024_12_17_195303_create_reinscriptions_table', 3),
(10, '2024_12_17_195423_create_programmes_table', 3),
(11, '2024_12_17_195631_create_temoignages_table', 3),
(12, '2024_12_21_021948_create_homes_table', 4),
(13, '2024_12_23_210008_create_albaraime1_table', 5),
(31, '2024_12_23_210012_create_albaraime2_table', 6),
(32, '2024_12_23_210021_create_transports_table', 7),
(33, '2024_12_23_210029_create_activites_table', 7),
(34, '2024_12_23_210039_create_fournitures_table', 7),
(35, '2024_12_23_210053_create_cafeterias_table', 7),
(36, '2024_12_23_210128_create_maternelles_table', 7),
(37, '2024_12_23_210138_create_primaires_table', 7),
(38, '2024_12_23_210146_create_colleges_table', 7),
(39, '2024_12_23_210155_create_lycees_table', 7),
(40, '2024_12_27_002122_create_contacts_table', 8),
(42, '2024_12_28_143632_create_settings_table', 9);

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `primaires`
--

CREATE TABLE `primaires` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `niveau` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `alt_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `primaires`
--

INSERT INTO `primaires` (`id`, `niveau`, `title`, `description`, `image`, `alt_image`, `created_at`, `updated_at`) VALUES
(1, 'Primaire', 'Bienvenue au Primaire !', '<p>Les programmes d’enseignement français assurent l\'acquisition des connaissances et des compétences fondamentales.</p><p>Au Groupe Scolaire AL BARAIME, les professeurs travaillent sur ces programmes en mettant en œuvre des projets pédagogiques plurilingues, en utilisant le numérique et en s’inscrivant dans la culture marocaine. L’innovation et la collaboration sont les maîtres mots de cette pédagogie.</p><p><br></p>', 'uploads/primaire/s3.jpg', 'primaire', '2024-12-25 18:36:46', '2025-01-01 00:56:49');

-- --------------------------------------------------------

--
-- Structure de la table `programmes`
--

CREATE TABLE `programmes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `programme1` varchar(255) NOT NULL,
  `programme2` varchar(255) NOT NULL,
  `programme3` varchar(255) NOT NULL,
  `programme4` varchar(255) NOT NULL,
  `programme5` varchar(255) NOT NULL,
  `programme6` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `programmes`
--

INSERT INTO `programmes` (`id`, `title`, `description`, `programme1`, `programme2`, `programme3`, `programme4`, `programme5`, `programme6`, `created_at`, `updated_at`) VALUES
(1, 'Programmes Multidisciplinaires', 'Les élèves exploreront divers connaissances tels que les sciences, les arts et bien plus encore.', 'Sciences en français', 'Calcul mental', 'Informatique', 'Théâtre', 'Activité physique', 'Art', '2024-12-18 10:37:52', '2024-12-18 10:37:52');

-- --------------------------------------------------------

--
-- Structure de la table `reinscriptions`
--

CREATE TABLE `reinscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `alt_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `reinscriptions`
--

INSERT INTO `reinscriptions` (`id`, `title`, `description`, `image`, `alt_image`, `created_at`, `updated_at`) VALUES
(1, 'Inscriptions & Réinscriptions', '- Pour les nouveaux élèves souhaitant s’inscrire aux écoles ALBARAIME, veuillez remplir le formulaire de passation de test en cliquant sur l’école correspondante', 'uploads/reinscriptions/01JFMS5PHSXRHZ5SS0818V3VMN.jpg', 'Réinscriptions', '2024-12-20 09:18:58', '2024-12-21 13:15:35');

-- --------------------------------------------------------

--
-- Structure de la table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('6ibT2HQiMmrTZUQC5lHv4NOLWULKNM1zIkM3dJIx', NULL, '196.217.104.220', 'WhatsApp/2.23.20.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoib3o0N0VUSE9NdTJoSWJZYTZYdjBxOHMwcUZTU29mZWp3TDBTOWxqdiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDM6Imh0dHBzOi8vbGVzZWNvbGVzYWxiYXJhaW1lLm15bWFkcmFzc2F0aS5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1740344512),
('c02TKNkwkyR8IEU1PBHaeNfClOcynUiIBRtSEyb6', NULL, '196.217.104.220', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRFNDTmx6VXZydHdUN0VhQnZrQ1hHQ0dBYnRTd1dFTnA4VHBUU3FJciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTQ6Imh0dHBzOi8vbGVzZWNvbGVzYWxiYXJhaW1lLm15bWFkcmFzc2F0aS5jb20vYWxiYXJhaW1lMSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1740345102),
('mcXtTMoq1UOBS4wL5jGyi4bXrmfufHLlUeHgGkYG', NULL, '105.190.168.211', 'WhatsApp/2.23.20.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoia2VoR0JaY0tKRGdJTW80dGpPUktlS1lEcE9QaVp3RjU0M0hxampXVSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDM6Imh0dHBzOi8vbGVzZWNvbGVzYWxiYXJhaW1lLm15bWFkcmFzc2F0aS5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1740344522),
('P5OB48rhVBmeDR6HyVz8sXLfLIPx7X0PIE86Fqu4', NULL, '2a09:bac2:4828:245a::39f:88', 'Mozilla/5.0 (iPhone; CPU iPhone OS 18_2_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/18.2 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiV01xZndvME5ZUnhQbERhVXpzMmxqQ2NHcUNWVXJpTjVINEhGR0ZUZCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDM6Imh0dHBzOi8vbGVzZWNvbGVzYWxiYXJhaW1lLm15bWFkcmFzc2F0aS5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1740344504),
('XGLMNy6BdMazwvsFCbefLtnKLib4v9Y6m5NzRKjH', 1, '105.67.135.175', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Safari/605.1.15', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiT2dLdFdIUTJrSVBSWlczMGxaT3M4NGtSUXRrdm5CVHdNMTNEQUVrbyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NjQ6Imh0dHBzOi8vbGVzZWNvbGVzYWxiYXJhaW1lLm15bWFkcmFzc2F0aS5jb20vYWRtaW4vYXByb3Bvcy8xL2VkaXQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjM6InVybCI7YTowOnt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEyJDdQeVhtZExRYUNpMWdvZTM3WEJUNnVjckI0WDVleGJrdS91QlNnWVRraS93QWllRHE4c21pIjtzOjg6ImZpbGFtZW50IjthOjA6e319', 1740342243);

-- --------------------------------------------------------

--
-- Structure de la table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `tel1` varchar(255) NOT NULL,
  `tel2` varchar(255) NOT NULL,
  `adresse1` text NOT NULL,
  `adresse1_map` text NOT NULL,
  `adresse2` text NOT NULL,
  `adresse2_map` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `settings`
--

INSERT INTO `settings` (`id`, `facebook`, `instagram`, `tel1`, `tel2`, `adresse1`, `adresse1_map`, `adresse2`, `adresse2_map`, `email`, `created_at`, `updated_at`) VALUES
(1, 'https://www.facebook.com/Albaraime', 'https://www.instagram.com/lesecolesalbaraime', '05 23 35 83 46', '05 23 34 79 38', 'Bvd Mohammed V, Bp 14, Azemmour, 24100 Maroc', 'https://www.google.com/maps/place/Les+%C3%89coles+Albaraime+Priv%C3%A9e+:+Pr%C3%A9scolaire,+Primaire,+Coll%C3%A8ge+%26+Lyc%C3%A9e/@33.2820557,-8.3591975,17z/data=!3m1!4b1!4m6!3m5!1s0xda8e594be4809f5:0x59da0d1e22eda13!8m2!3d33.2820557!4d-8.3566226!16s%2Fg%2F11h0c0czm9?entry=tts&g_ep=EgoyMDI0MTIxMS4wIPu8ASoASAFQAw%3D%3D', '07 Oued Ziz, Bp 14, Azemmour, 24100 Maroc', 'https://www.google.com/maps/place/Les+%C3%89coles+Albaraime+Priv%C3%A9e+:+Pr%C3%A9scolaire,+Primaire,+Coll%C3%A8ge+%26+Lyc%C3%A9e/@33.2820557,-8.3591975,17z/data=!3m1!4b1!4m6!3m5!1s0xda8e594be4809f5:0x59da0d1e22eda13!8m2!3d33.2820557!4d-8.3566226!16s%2Fg%2F11h0c0czm9?entry=tts&g_ep=EgoyMDI0MTIxMS4wIPu8ASoASAFQAw%3D%3D', 'contact@lesecolesalbaraime.com', '2024-12-28 14:06:50', '2025-02-10 11:27:34');

-- --------------------------------------------------------

--
-- Structure de la table `temoignages`
--

CREATE TABLE `temoignages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `temoignage1` varchar(255) NOT NULL,
  `nom1` text NOT NULL,
  `temoignage2` varchar(255) NOT NULL,
  `nom2` text NOT NULL,
  `temoignage3` varchar(255) NOT NULL,
  `nom3` text NOT NULL,
  `temoignage4` varchar(255) NOT NULL,
  `nom4` text NOT NULL,
  `avatar_1` varchar(255) NOT NULL,
  `avatar_2` varchar(255) NOT NULL,
  `avatar_3` varchar(255) NOT NULL,
  `avatar_4` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `temoignages`
--

INSERT INTO `temoignages` (`id`, `title`, `description`, `temoignage1`, `nom1`, `temoignage2`, `nom2`, `temoignage3`, `nom3`, `temoignage4`, `nom4`, `avatar_1`, `avatar_2`, `avatar_3`, `avatar_4`, `created_at`, `updated_at`) VALUES
(1, 'Nos heureux parents', 'Les parents de nos élèves s\'expriment.', 'Albaraime est un lieu où l’apprentissage et le plaisir se rejoignent harmonieusement.', 'Mme Safae DAHAOUI', 'Je suis ravi de voir mes deux enfants s’épanouir dans cette école où l’équipe pédagogique est bienveillante, engagée et soucieuse de leur réussite. Un environnement stimulant qui favorise leur développement académique et personnel !', 'Mr Mohammed ROUCHDI', 'Je tiens à exprimer ma profonde satisfaction quant à la qualité de l’enseignement et au suivi pédagogique dont bénéficient mes enfants au sein de cet établissement.\nMerci pour votre engagement.', 'Mr Samir FOUADI', 'L’atmosphère chaleureuse et bienveillante de l’école favorise l’épanouissement des jeunes esprits.', 'MR Ahmed ERRACHIDI', 'uploads/temoignage/female-296990_960_720.png', 'uploads/temoignage/14318675-icone-de-visage-d-homme-anonyme-style-cartoon-vectoriel.jpg', 'uploads/temoignage/14318675-icone-de-visage-d-homme-anonyme-style-cartoon-vectoriel.jpg', 'uploads/temoignage/14318675-icone-de-visage-d-homme-anonyme-style-cartoon-vectoriel.jpg', '2024-12-20 09:30:02', '2025-02-23 19:40:03');

-- --------------------------------------------------------

--
-- Structure de la table `transports`
--

CREATE TABLE `transports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` text NOT NULL,
  `description` text NOT NULL,
  `image1` varchar(255) NOT NULL,
  `alt_image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `alt_image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL,
  `alt_image3` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `transports`
--

INSERT INTO `transports` (`id`, `content`, `description`, `image1`, `alt_image1`, `image2`, `alt_image2`, `image3`, `alt_image3`, `created_at`, `updated_at`) VALUES
(1, '<h2><strong>L’école offre à ses élèves des services supplémentaires</strong></h2><p><br></p><p>Ce service que l’Etablissement met à la disposition des parents, revêt une importance capitale, tant pour l’école que certainement les parents. Une sensibilité spécifique le caractérise et une attention effective des parents doit lui être réservée.<br>Pour la sécurité des enfants et le bon fonctionnement du transport scolaire, les familles concernées par ce service</p><p><br></p>', '<p>sont invitées à accorder toute l’attention aux points suivants :</p><p><br></p><h3><strong>Horaires</strong></h3><p>Le respect strict des horaires précis convenus avec la Direction et les chauffeurs des cars, pour le ramassage des enfants.</p><p><br></p><h3><strong>Retard</strong></h3><p>Eviter les retards lors de la remise des enfants, car ceux-ci, créent inévitablement à travers leur cumul, des perturbations et occasionnellement des dis fonctionnements, ce qui génère des plaintes fréquentes et compréhensibles des familles.</p><p><br></p><h3><strong>Accompagnement</strong></h3><p>Accompagner et attendre les enfants là où l’Assistante est chargée de les récupérer, et où le véhicule peut accéder sans difficulté ni danger pour les enfants</p><p><br></p><h3><strong>Lieu de ramassage et de remise d’un enfant</strong></h3><p><br></p><p>Le lieu de ramassage et de remise d’un enfant, une fois arrêté, ne peut être changé que lorsqu’il y a changement effectif d’adresse des parents, et que celle-ci se trouve sur les circuits couverts par les cars de l’Etablissement.</p>', 'uploads/cafeteria/slider-4.jpg', 't1', 'uploads/cafeteria/A05C7CB7-6C2D-434D-A350-4CA9E19398E9.jpg', 'IVECO', 'uploads/cafeteria/t3.jpg', 'IVCO', '2024-12-24 21:11:14', '2025-01-01 01:08:52');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@albaraime.com', NULL, '$2y$10$CUZAarPaeNz1/KgovFpon.wPWKZg3hC6d.Vzr2hVcDnZqiRXxk8uq', 'CItPLZCrjN8yEuuoQayb1je6RFUk3EqtidkSUY8wxL6k7oZt2jJNfMhuZG2y', '2024-11-13 11:00:55', '2025-02-25 11:16:40'),
(3, 'agent', 'agent@albaraime.com', NULL, '$2y$10$N3e0YlTLCRYqLyEXK0lq1enEFfQ41mcLxiiQJz/Y8WFmqmkCGYNqC', 'E6WmbZ99oXmwTmEH0E1LDUYPwY7FLxIEOquEuXP0wCGM920ivVZMjzN56Hyl', '2024-12-25 20:12:47', '2025-03-01 23:18:22');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `activites`
--
ALTER TABLE `activites`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `albaraime1`
--
ALTER TABLE `albaraime1`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `albaraime2`
--
ALTER TABLE `albaraime2`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `apropos`
--
ALTER TABLE `apropos`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_slug_unique` (`slug`),
  ADD KEY `blogs_categorie_id_foreign` (`categorie_id`);

--
-- Index pour la table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Index pour la table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Index pour la table `cafeterias`
--
ALTER TABLE `cafeterias`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Index pour la table `colleges`
--
ALTER TABLE `colleges`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cursus_scolaires`
--
ALTER TABLE `cursus_scolaires`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `fournitures`
--
ALTER TABLE `fournitures`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `galeries`
--
ALTER TABLE `galeries`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `homes`
--
ALTER TABLE `homes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Index pour la table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `lycees`
--
ALTER TABLE `lycees`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `maternelles`
--
ALTER TABLE `maternelles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `primaires`
--
ALTER TABLE `primaires`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `programmes`
--
ALTER TABLE `programmes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reinscriptions`
--
ALTER TABLE `reinscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Index pour la table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `temoignages`
--
ALTER TABLE `temoignages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `transports`
--
ALTER TABLE `transports`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `activites`
--
ALTER TABLE `activites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `albaraime1`
--
ALTER TABLE `albaraime1`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `albaraime2`
--
ALTER TABLE `albaraime2`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `apropos`
--
ALTER TABLE `apropos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `cafeterias`
--
ALTER TABLE `cafeterias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `colleges`
--
ALTER TABLE `colleges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `cursus_scolaires`
--
ALTER TABLE `cursus_scolaires`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `fournitures`
--
ALTER TABLE `fournitures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `galeries`
--
ALTER TABLE `galeries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `homes`
--
ALTER TABLE `homes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `lycees`
--
ALTER TABLE `lycees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `maternelles`
--
ALTER TABLE `maternelles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT pour la table `primaires`
--
ALTER TABLE `primaires`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `programmes`
--
ALTER TABLE `programmes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `reinscriptions`
--
ALTER TABLE `reinscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `temoignages`
--
ALTER TABLE `temoignages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `transports`
--
ALTER TABLE `transports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_categorie_id_foreign` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
