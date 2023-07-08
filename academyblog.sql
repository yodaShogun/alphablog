-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 08 juil. 2023 à 04:27
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `academyblog`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `article` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `cover` varchar(255) NOT NULL,
  `manager` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `publish_date` datetime NOT NULL DEFAULT current_timestamp(),
  `actived` tinyint(4) NOT NULL DEFAULT 0,
  `deleted` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`article`, `category`, `cover`, `manager`, `title`, `content`, `publish_date`, `actived`, `deleted`) VALUES
(1, 5, '6472b37632a12.png', 1, 'Roadster', '&lt;p style=&quot;-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);color:rgb(32, 33, 34);font-family:sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;margin:0.5em 0px;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;&quot;&gt;&amp;nbsp;&lt;/p&gt;&lt;figure class=&quot;image&quot;&gt;&lt;img src=&quot;https://cdn.motor1.com/images/mgl/VA0z9/s3/tesla-roadster.webp&quot; alt=&quot;Tesla Roadster Founders&quot;&gt;&lt;/figure&gt;&lt;p style=&quot;-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);color:rgb(32, 33, 34);font-family:sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;margin:0.5em 0px;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;&quot;&gt;&lt;strong&gt;Tesla Inc.&lt;/strong&gt; (&lt;strong&gt;Tesla Motors&lt;/strong&gt; jusqu&#039;en 2017) est un &lt;a style=&quot;color:rgb(51, 102, 204);overflow-wrap:break-word;text-decoration:none;&quot; href=&quot;https://fr.wikipedia.org/wiki/Constructeur_automobile&quot; title=&quot;Constructeur automobile&quot;&gt;constructeur automobile&lt;/a&gt; de voitures &lt;a style=&quot;color:rgb(51, 102, 204);overflow-wrap:break-word;text-decoration:none;&quot; href=&quot;https://fr.wikipedia.org/wiki/Voiture_%C3%A9lectrique&quot; title=&quot;Voiture électrique&quot;&gt;électriques&lt;/a&gt; dont le siège social se situe à &lt;a style=&quot;color:rgb(51, 102, 204);overflow-wrap:break-word;text-decoration:none;&quot; href=&quot;https://fr.wikipedia.org/wiki/Austin_(Texas)&quot; title=&quot;Austin (Texas)&quot;&gt;Austin&lt;/a&gt;, au &lt;a style=&quot;color:rgb(51, 102, 204);overflow-wrap:break-word;text-decoration:none;&quot; href=&quot;https://fr.wikipedia.org/wiki/Texas&quot; title=&quot;Texas&quot;&gt;Texas&lt;/a&gt;, sur le fleuve &lt;a style=&quot;color:rgb(51, 102, 204);overflow-wrap:break-word;text-decoration:none;&quot; href=&quot;https://fr.wikipedia.org/wiki/Colorado_(fleuve_du_Texas)&quot; title=&quot;Colorado (fleuve du Texas)&quot;&gt;Colorado&lt;/a&gt;, aux &lt;a style=&quot;color:rgb(51, 102, 204);overflow-wrap:break-word;text-decoration:none;&quot; href=&quot;https://fr.wikipedia.org/wiki/%C3%89tats-Unis&quot; title=&quot;États-Unis&quot;&gt;États-Unis&lt;/a&gt;. Le nom de l&#039;entreprise est un hommage à &lt;a style=&quot;color:rgb(51, 102, 204);overflow-wrap:break-word;text-decoration:none;&quot; href=&quot;https://fr.wikipedia.org/wiki/Nikola_Tesla&quot; title=&quot;Nikola Tesla&quot;&gt;Nikola Tesla&lt;/a&gt;, inventeur et ingénieur &lt;a style=&quot;color:rgb(51, 102, 204);overflow-wrap:break-word;text-decoration:none;&quot; href=&quot;https://fr.wikipedia.org/wiki/Am%C3%A9ricains_(peuple)&quot; title=&quot;Américains (peuple)&quot;&gt;américain&lt;/a&gt; d’origine &lt;a style=&quot;color:rgb(51, 102, 204);overflow-wrap:break-word;text-decoration:none;&quot; href=&quot;https://fr.wikipedia.org/wiki/Serbes&quot; title=&quot;Serbes&quot;&gt;serbe&lt;/a&gt;. Elle est fondée en 2003 à &lt;a style=&quot;color:rgb(51, 102, 204);overflow-wrap:break-word;text-decoration:none;&quot; href=&quot;https://fr.wikipedia.org/wiki/San_Carlos_(Californie)&quot; title=&quot;San Carlos (Californie)&quot;&gt;San Carlos&lt;/a&gt; par &lt;a style=&quot;color:rgb(51, 102, 204);overflow-wrap:break-word;text-decoration:none;&quot; href=&quot;https://fr.wikipedia.org/wiki/Martin_Eberhard&quot; title=&quot;Martin Eberhard&quot;&gt;Martin Eberhard&lt;/a&gt; et &lt;a style=&quot;color:rgb(51, 102, 204);overflow-wrap:break-word;text-decoration:none;&quot; href=&quot;https://fr.wikipedia.org/wiki/Marc_Tarpenning&quot; title=&quot;Marc Tarpenning&quot;&gt;Marc Tarpenning&lt;/a&gt;. &lt;a style=&quot;color:rgb(51, 102, 204);overflow-wrap:break-word;text-decoration:none;&quot; href=&quot;https://fr.wikipedia.org/wiki/Elon_Musk&quot; title=&quot;Elon Musk&quot;&gt;Elon Musk&lt;/a&gt;, son actuel dirigeant, en a fait un constructeur d&#039;automobiles électriques destinées au grand public. Si la marque se fait connaître notamment par ses promesses de proposer des véhicules se déplaçant en &lt;a class=&quot;mw-redirect&quot; style=&quot;color:rgb(51, 102, 204);overflow-wrap:break-word;text-decoration:none;&quot; href=&quot;https://fr.wikipedia.org/wiki/Aide_%C3%A0_la_conduite_automobile&quot; title=&quot;Aide à la conduite automobile&quot;&gt;pilotage automatique&lt;/a&gt;, les véhicules Tesla ne proposent qu’une assistance à la conduite.&lt;/p&gt;&lt;p style=&quot;-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);color:rgb(32, 33, 34);font-family:sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;margin:0.5em 0px;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;&quot;&gt;L&#039;entreprise s&#039;est diversifiée dans les solutions énergétiques sous la forme notamment de batteries stationnaires, appelées «&amp;nbsp;&lt;a style=&quot;color:rgb(51, 102, 204);overflow-wrap:break-word;text-decoration:none;&quot; href=&quot;https://fr.wikipedia.org/wiki/Tesla_Powerwall&quot; title=&quot;Tesla Powerwall&quot;&gt;&lt;span class=&quot;lang-en&quot; lang=&quot;en&quot; dir=&quot;ltr&quot;&gt;powerwall&lt;/span&gt;&lt;/a&gt;&amp;nbsp;» pour le secteur résidentiel et «&amp;nbsp;&lt;a style=&quot;color:rgb(51, 102, 204);overflow-wrap:break-word;text-decoration:none;&quot; href=&quot;https://fr.wikipedia.org/wiki/Tesla_Powerwall#Versions&quot; title=&quot;Tesla Powerwall&quot;&gt;&lt;span class=&quot;lang-en&quot; lang=&quot;en&quot; dir=&quot;ltr&quot;&gt;powerpack&lt;/span&gt;&lt;/a&gt;&amp;nbsp;» pour le secteur industriel. En 2016, la fusion avec l&#039;entreprise &lt;a style=&quot;color:rgb(51, 102, 204);overflow-wrap:break-word;text-decoration:none;&quot; href=&quot;https://fr.wikipedia.org/wiki/SolarCity&quot; title=&quot;SolarCity&quot;&gt;SolarCity&lt;/a&gt; ajoute à son portefeuille de produits les &lt;a style=&quot;color:rgb(51, 102, 204);overflow-wrap:break-word;text-decoration:none;&quot; href=&quot;https://fr.wikipedia.org/wiki/Capteur_solaire_photovolta%C3%AFque&quot; title=&quot;Capteur solaire photovoltaïque&quot;&gt;panneaux et tuiles photovoltaïques&lt;/a&gt;.&lt;/p&gt;&lt;p style=&quot;-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);color:rgb(32, 33, 34);font-family:sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;margin:0.5em 0px;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;&quot;&gt;La &lt;a style=&quot;color:rgb(51, 102, 204);overflow-wrap:break-word;text-decoration:none;&quot; href=&quot;https://fr.wikipedia.org/wiki/Tesla_Model_S&quot; title=&quot;Tesla Model S&quot;&gt;Tesla Model S&lt;/a&gt;, &lt;a style=&quot;color:rgb(51, 102, 204);overflow-wrap:break-word;text-decoration:none;&quot; href=&quot;https://fr.wikipedia.org/wiki/Familiale_routi%C3%A8re&quot; title=&quot;Familiale routière&quot;&gt;berline familiale&lt;/a&gt; haut de gamme produite depuis 2012, devient la voiture 100&amp;nbsp;% électrique la plus vendue dans le monde en 2015 et 2016. Ses ventes atteignent 200&amp;nbsp;000&amp;nbsp;unités au quatrième trimestre 2017. En &lt;time class=&quot;nowrap&quot; style=&quot;white-space:nowrap;&quot; datetime=&quot;2015-09&quot; data-sort-value=&quot;2015-09&quot;&gt;septembre 2015&lt;/time&gt;, le constructeur sort le &lt;a style=&quot;color:rgb(51, 102, 204);overflow-wrap:break-word;text-decoration:none;&quot; href=&quot;https://fr.wikipedia.org/wiki/Tesla_Model_X&quot; title=&quot;Tesla Model X&quot;&gt;Model X&lt;/a&gt;, un &lt;a class=&quot;mw-redirect&quot; style=&quot;color:rgb(51, 102, 204);overflow-wrap:break-word;text-decoration:none;&quot; href=&quot;https://fr.wikipedia.org/wiki/SUV&quot; title=&quot;SUV&quot;&gt;SUV&lt;/a&gt; dérivé de la Model S. Conformément au plan de l&#039;entreprise publié en 2006, l&#039;entreprise lance en &lt;time class=&quot;nowrap&quot; style=&quot;white-space:nowrap;&quot; datetime=&quot;2017-07&quot; data-sort-value=&quot;2017-07&quot;&gt;juillet 2017&lt;/time&gt; une &lt;a style=&quot;color:rgb(51, 102, 204);overflow-wrap:break-word;text-decoration:none;&quot; href=&quot;https://fr.wikipedia.org/wiki/Automobile_compacte&quot; title=&quot;Automobile compacte&quot;&gt;berline compacte&lt;/a&gt; plus abordable que la Model S, appelée &lt;a style=&quot;color:rgb(51, 102, 204);overflow-wrap:break-word;text-decoration:none;&quot; href=&quot;https://fr.wikipedia.org/wiki/Tesla_Model_3&quot; title=&quot;Tesla Model 3&quot;&gt;&lt;span class=&quot;nowrap&quot; style=&quot;white-space:nowrap;&quot;&gt;Model 3&lt;/span&gt;&lt;/a&gt;. Tesla dépasse la barre des 300&amp;nbsp;000&amp;nbsp;véhicules produits en &lt;time class=&quot;nowrap&quot; style=&quot;white-space:nowrap;&quot; datetime=&quot;2018-02&quot; data-sort-value=&quot;2018-02&quot;&gt;février 2018&lt;/time&gt; et atteint le premier million de véhicules produits en &lt;time class=&quot;nowrap&quot; style=&quot;white-space:nowrap;&quot; datetime=&quot;2020-03&quot; data-sort-value=&quot;2020-03&quot;&gt;mars 2020&lt;/time&gt;.&lt;/p&gt;&lt;p style=&quot;-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);color:rgb(32, 33, 34);font-family:sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;margin:0.5em 0px;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;&quot;&gt;En 2021, Tesla devient le constructeur automobile le plus rentable du monde occidental et sa capitalisation boursière dépasse 1&amp;nbsp;000&amp;nbsp;milliards de dollars. Les ventes mondiales de l&#039;année atteignent plus de &lt;span class=&quot;nowrap&quot; style=&quot;white-space:nowrap;&quot;&gt;936 000 voitures&lt;/span&gt;, en progression de 87&amp;nbsp;%. En 2022, la &lt;a style=&quot;color:rgb(51, 102, 204);overflow-wrap:break-word;text-decoration:none;&quot; href=&quot;https://fr.wikipedia.org/wiki/Bulle_(%C3%A9conomie)&quot; title=&quot;Bulle (économie)&quot;&gt;bulle&lt;/a&gt; boursière explose, et la société perd plus de la moitié de sa &lt;a style=&quot;color:rgb(51, 102, 204);overflow-wrap:break-word;text-decoration:none;&quot; href=&quot;https://fr.wikipedia.org/wiki/Capitalisation_boursi%C3%A8re&quot; title=&quot;Capitalisation boursière&quot;&gt;capitalisation&lt;/a&gt;, mais elle regagne 65&amp;nbsp;% en janvier 2023.&lt;/p&gt;&lt;h2 style=&quot;-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);border-bottom:1px solid rgb(162, 169, 177);color:rgb(0, 0, 0);font-family:&amp;quot;Linux Libertine&amp;quot;, Georgia, Times, serif;font-size:1.5em;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:normal;letter-spacing:normal;line-height:1.375;margin:1em 0px 0.25em;orphans:2;overflow:hidden;padding:0px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;&quot;&gt;&lt;span class=&quot;mw-headline&quot; id=&quot;Histoire&quot;&gt;Histoire&lt;/span&gt;&lt;/h2&gt;&lt;h2 style=&quot;-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);border-bottom:1px solid rgb(162, 169, 177);color:rgb(0, 0, 0);font-family:&amp;quot;Linux Libertine&amp;quot;, Georgia, Times, serif;font-size:1.5em;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:normal;letter-spacing:normal;line-height:1.375;margin:1em 0px 0.25em;orphans:2;overflow:hidden;padding:0px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;&quot;&gt;&lt;span class=&quot;mw-headline&quot; id=&quot;Fondation_(2003-2004)&quot;&gt;&lt;strong&gt;Fondation (2003-2004)&lt;/strong&gt;&lt;/span&gt;&lt;/h2&gt;&lt;p style=&quot;-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);color:rgb(32, 33, 34);font-family:sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;margin:0.5em 0px;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;&quot;&gt;Fondée sous le nom de Tesla Motors, Tesla est créée le &lt;abbr class=&quot;abbr&quot; style=&quot;border-bottom-width:0px;cursor:help;text-decoration:none;&quot; title=&quot;premier&quot;&gt;&lt;time class=&quot;nowrap&quot; style=&quot;white-space:nowrap;&quot; datetime=&quot;2003-07-01&quot; data-sort-value=&quot;2003-07-01&quot;&gt;1&lt;/time&gt;&lt;sup style=&quot;line-height:1;&quot;&gt;&lt;time class=&quot;nowrap&quot; style=&quot;white-space:nowrap;&quot; datetime=&quot;2003-07-01&quot; data-sort-value=&quot;2003-07-01&quot;&gt;er&lt;/time&gt;&lt;/sup&gt;&lt;/abbr&gt;&lt;time class=&quot;nowrap&quot; style=&quot;white-space:nowrap;&quot; datetime=&quot;2003-07-01&quot; data-sort-value=&quot;2003-07-01&quot;&gt; juillet 2003&lt;/time&gt; par &lt;a style=&quot;color:rgb(51, 102, 204);overflow-wrap:break-word;text-decoration:none;&quot; href=&quot;https://fr.wikipedia.org/wiki/Martin_Eberhard&quot; title=&quot;Martin Eberhard&quot;&gt;Martin Eberhard&lt;/a&gt; et &lt;a style=&quot;color:rgb(51, 102, 204);overflow-wrap:break-word;text-decoration:none;&quot; href=&quot;https://fr.wikipedia.org/wiki/Marc_Tarpenning&quot; title=&quot;Marc Tarpenning&quot;&gt;Marc Tarpenning&lt;/a&gt;. Eberhard et Tarpenning occupent alors respectivement les postes de &lt;a style=&quot;color:rgb(51, 102, 204);overflow-wrap:break-word;text-decoration:none;&quot; href=&quot;https://fr.wikipedia.org/wiki/Pr%C3%A9sident-directeur_g%C3%A9n%C3%A9ral&quot; title=&quot;Président-directeur général&quot;&gt;PDG&lt;/a&gt; et de &lt;a style=&quot;color:rgb(51, 102, 204);overflow-wrap:break-word;text-decoration:none;&quot; href=&quot;https://fr.wikipedia.org/wiki/Directeur_administratif_et_financier&quot; title=&quot;Directeur administratif et financier&quot;&gt;directeur financier&lt;/a&gt;. Selon Eberhard, l&#039;idée derrière la fondation de Tesla Motors vient d&#039;une volonté de créer &lt;span class=&quot;citation&quot;&gt;«&amp;nbsp;un constructeur automobile qui soit également une entreprise technologique&amp;nbsp;»&lt;/span&gt;, dont les technologies de base seraient &lt;span class=&quot;citation&quot;&gt;«&amp;nbsp;la batterie, le logiciel informatique et le moteur&amp;nbsp;»&lt;/span&gt;.&lt;/p&gt;&lt;p style=&quot;-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);color:rgb(32, 33, 34);font-family:sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;margin:0.5em 0px;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;&quot;&gt;Ian Wright, le troisième employé de Tesla, rejoint l&#039;entreprise quelques mois plus tard. Les trois collègues lèvent 7,5&amp;nbsp;millions de &lt;a style=&quot;color:rgb(51, 102, 204);overflow-wrap:break-word;text-decoration:none;&quot; href=&quot;https://fr.wikipedia.org/wiki/Dollar_am%C3%A9ricain&quot; title=&quot;Dollar américain&quot;&gt;dollars&lt;/a&gt; en &lt;time class=&quot;nowrap&quot; style=&quot;white-space:nowrap;&quot; datetime=&quot;2004-02&quot; data-sort-value=&quot;2004-02&quot;&gt;février 2004&lt;/time&gt; dans le cadre d&#039;un &lt;a style=&quot;color:rgb(51, 102, 204);overflow-wrap:break-word;text-decoration:none;&quot; href=&quot;https://fr.wikipedia.org/wiki/Capital_risque&quot; title=&quot;Capital risque&quot;&gt;financement de série A&lt;/a&gt; auprès de divers investisseurs, dont &lt;a style=&quot;color:rgb(51, 102, 204);overflow-wrap:break-word;text-decoration:none;&quot; href=&quot;https://fr.wikipedia.org/wiki/Elon_Musk&quot; title=&quot;Elon Musk&quot;&gt;Elon Musk&lt;/a&gt;, qui contribue pour la grande majorité avec 6,5&amp;nbsp;millions de dollars. Après l&#039;investissement, Elon Musk rejoint la société et devient président du conseil d&#039;administration. J. B. Straubel rejoint Tesla en &lt;time class=&quot;nowrap&quot; style=&quot;white-space:nowrap;&quot; datetime=&quot;2004-05&quot; data-sort-value=&quot;2004-05&quot;&gt;mai 2004&lt;/time&gt;. À la suite d&#039;un procès entre Eberhard et Tesla en &lt;time class=&quot;nowrap&quot; style=&quot;white-space:nowrap;&quot; datetime=&quot;2009-09&quot; data-sort-value=&quot;2009-09&quot;&gt;septembre 2009&lt;/time&gt;, Eberhard, Tarpenning, Wright, Musk et Straubel sont reconnus comme cofondateurs de Tesla Motors.&lt;/p&gt;', '2023-05-29 00:00:00', 1, 0),
(2, 5, 'blog-4-720x480.jpg', 2, 'Dodge Charger SRT 1970', '&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;figure class=&quot;image image_resized&quot; style=&quot;width:50%;&quot;&gt;&lt;img src=&quot;https://www.motortrend.com/uploads/sites/5/2021/02/speedkore-charger-hellraiser-05.jpg?fit=around%7C875:492&quot;&gt;&lt;/figure&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;h5 style=&quot;text-align:center;&quot;&gt;First meet up between the ceo andy augustin and the developer Pierre&lt;/h5&gt;&lt;h5 style=&quot;text-align:center;&quot;&gt;&amp;nbsp;&lt;/h5&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;', '2023-05-28 00:00:00', 1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `category` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`category`, `title`) VALUES
(1, 'Environnments'),
(2, 'Assainissement &amp; Eau Potable '),
(3, 'Développement Durable'),
(4, 'Matériaux de construction'),
(5, 'Recherches Scientifiques'),
(6, 'Infrastructures '),
(7, 'Actualités d&#039;ingénierie &amp; découvertes'),
(8, 'Entretiens'),
(9, 'Events');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `article` int(11) NOT NULL,
  `suscriber` int(11) NOT NULL,
  `comment_on` varchar(255) NOT NULL,
  `created_on` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `managers`
--

CREATE TABLE `managers` (
  `manager` int(11) NOT NULL,
  `profile` varchar(255) NOT NULL,
  `task` int(11) NOT NULL,
  `fname` varchar(80) DEFAULT NULL,
  `lname` varchar(80) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `position` varchar(50) NOT NULL,
  `pswd` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `managers`
--

INSERT INTO `managers` (`manager`, `profile`, `task`, `fname`, `lname`, `email`, `position`, `pswd`) VALUES
(1, '64722945836d7.jpg', 1, 'Wesley', 'Pierre', 'pierrechriswesley@gmail.com', ' CEO-Founder', '$2y$10$g9M6jZiNuT3G2mokjdij6uMv3gW9FS/cD4/GB9Ztj4Zrz1XRSyFYa'),
(2, '6472bcd550628.jpg', 1, 'Andy', 'Augustin', 'pierrewesley892@gmail.com', 'IT General  Coordinator', '$2y$10$r/5CY8j/sOnnR9hxniPNKOrGOprfPQ4spWc7CgnMRCELHQ/7H/YJ6');

-- --------------------------------------------------------

--
-- Structure de la table `suscribers`
--

CREATE TABLE `suscribers` (
  `suscriber` int(11) NOT NULL,
  `mail` varchar(50) DEFAULT NULL,
  `joinOn` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `suscribers`
--

INSERT INTO `suscribers` (`suscriber`, `mail`, `joinOn`) VALUES
(1, 'pierrewesley892@gmail.com', '2023-04-03 20:46:30');

-- --------------------------------------------------------

--
-- Structure de la table `tasks`
--

CREATE TABLE `tasks` (
  `task` int(11) NOT NULL,
  `task_desc` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tasks`
--

INSERT INTO `tasks` (`task`, `task_desc`) VALUES
(1, 'admin'),
(2, 'editor');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`article`),
  ADD KEY `category` (`category`),
  ADD KEY `manager` (`manager`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article` (`article`),
  ADD KEY `suscriber` (`suscriber`);

--
-- Index pour la table `managers`
--
ALTER TABLE `managers`
  ADD PRIMARY KEY (`manager`),
  ADD KEY `task` (`task`);

--
-- Index pour la table `suscribers`
--
ALTER TABLE `suscribers`
  ADD PRIMARY KEY (`suscriber`);

--
-- Index pour la table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`task`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `managers`
--
ALTER TABLE `managers`
  MODIFY `manager` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `suscribers`
--
ALTER TABLE `suscribers`
  MODIFY `suscriber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `task` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`category`) REFERENCES `categories` (`category`),
  ADD CONSTRAINT `articles_ibfk_2` FOREIGN KEY (`manager`) REFERENCES `managers` (`manager`);

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`article`) REFERENCES `articles` (`article`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`suscriber`) REFERENCES `suscribers` (`suscriber`);

--
-- Contraintes pour la table `managers`
--
ALTER TABLE `managers`
  ADD CONSTRAINT `managers_ibfk_1` FOREIGN KEY (`task`) REFERENCES `tasks` (`task`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
