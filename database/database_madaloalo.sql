-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 21 juil. 2023 à 16:19
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `database_madaloalo`
--

-- --------------------------------------------------------

--
-- Structure de la table `achat`
--

CREATE TABLE `achat` (
  `id_achat` int(11) NOT NULL,
  `nom_objet` varchar(255) NOT NULL,
  `description_objet` text NOT NULL,
  `image_objet` varchar(255) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `prix_objet` varchar(255) NOT NULL,
  `lieu_d_achat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `achat`
--

INSERT INTO `achat` (`id_achat`, `nom_objet`, `description_objet`, `image_objet`, `categorie`, `prix_objet`, `lieu_d_achat`) VALUES
(26, 'sandale', 'sandale fait avec des peaux d   animaux', '20.jpg', 'sandale', '50.000Ar', 'Analakely'),
(27, 'sandale', 'sandale fait avec des peaux d   animaux', '21.jpg', 'sandale', '50.000Ar', 'Analakely'),
(33, 'sandale', 'Fait avec des peaux d   animaux', 'kapa5.jpg', 'sandale', '50.000Ar', 'Analakely'),
(34, 'sandale', 'Fait avec des peaux d   animaux', 'kapa6.jpg', 'sandale', '50.000Ar', 'Analakely'),
(38, 'sandale', 'Fait avec des peaux d   animaux', 'kapa10.jpg', 'sandale', '50.000Ar', 'Analakely'),
(39, 'sandale', 'Fait avec des peaux d   animaux', 'kapa11.jpg', 'sandale', '50.000Ar', 'Analakely'),
(49, 'Vase', 'Fait avec des argiles', 'vase.jpg', 'vase', '70.000Ar', 'Analakely'),
(50, 'Vase', 'Fait avec des argiles', 'vase1.jpg', 'vase', '70.000Ar', 'Analakely'),
(51, 'Vase', 'Fait avec des argiles', 'vase2.jpg', 'vase', '70.000Ar', 'Analakely'),
(52, 'Vase', 'Fait avec des argiles', 'vase3.jpg', 'vase', '70.000Ar', 'Analakely'),
(53, 'Vase', 'Fait avec des argiles', 'vase4.jpg', 'vase', '70.000Ar', 'Analakely'),
(54, 'Vase', 'Fait avec des argiles', 'vase5.jpg', 'vase', '70.000Ar', 'Analakely'),
(72, 'peinture', '', 'hosidoko.jpg', 'art', '100.000Ar', 'Analakely'),
(73, 'peinture', '', 'hosidoko1.jpg', 'art', '100.000Ar', 'Analakely'),
(74, 'peinture', '', 'hosidoko2.jpg', 'art', '100.000Ar', 'Analakely'),
(75, 'peinture', '', 'hosidoko3.jpg', 'art', '100.000Ar', 'Analakely'),
(77, 'peinture', '', 'hosidoko5.jpg', 'art', '100.000Ar', 'Analakely'),
(78, 'peinture', '', 'hosidoko6.jpg', 'art', '100.000Ar', 'Analakely');

-- --------------------------------------------------------

--
-- Structure de la table `activite`
--

CREATE TABLE `activite` (
  `id_activite` int(11) NOT NULL,
  `nom_act` varchar(255) NOT NULL,
  `image_act` varchar(255) NOT NULL,
  `description_act` text NOT NULL,
  `region` varchar(255) NOT NULL,
  `lieu_localisation` varchar(255) NOT NULL,
  `prix_act` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `activite`
--

INSERT INTO `activite` (`id_activite`, `nom_act`, `image_act`, `description_act`, `region`, `lieu_localisation`, `prix_act`, `contact`) VALUES
(5, 'Croc Farm Conservatoire Botanique de Madagascar', 'FB_IMG_1689616174930.jpg', 'Croc farm est l   une des parcs Biologiques et Botaniques le plus populaire de Madagascar, ce parc possède l   un des plus grands crocodiles du monde connu sous le nom de crocodile du nille ', 'Analamanga', 'Ivato, Madagascar', '10000Ar', ''),
(6, 'Is   art Galerie', 'galery.png', 'Is   art Galerie est un lieu d   exposition et de vente d   art contemporain d   artistes Malagasy et étrangers un  de résidence de création, une scène locale de diffusion de musique et performances, de diffusion d   art vidéo, un lieu de promotion de l   art contemporain toute discipline confondue, de rencontre et de partage entre les artistes et le public, un lieu ouvert a toute proposition créative.  ', 'Analamanga', 'Ampasanimalo, Antananarivo', 'Indéterminé', ''),
(7, 'Ambohimanga Rova', 'rovanambohimanga(1).jpg', 'Ambohimanga Rova est une site classé au patrimoine mondiale de l   Unesco. Terre des ancêtres, terre de nos origines, adoptive des nouveaux arrivants aussi. Ce qui lui vaut d   être la terre de tout les vivants, de tous les malagasy sans distinctions, des 8 recoins de l   île   ', 'Analamanga', 'Ambohimanga, Antananarivo', '10000Ar', ''),
(8, 'Rova Manjakamiadana', 'Royal-palace[trip.com].jpg', 'Le Palais de la Reine est très beau et il conserve de nombreux biens et meubles de la période coloniale, Il est désormais l   un des plus importants musées de Madagascar.', 'Analamanga', 'Haute ville Antananarivo, Antananarivo, Madagascar', '20000Ar', ''),
(9, 'Ankaratra-Natural landmarks', 'Ankaratra-Natural landmarks.jpg', 'Ankaratra  L   Ankaratra est un volcan éteint localisé à 50 kilomètres au sud-ouest de Antananarivo, la capitale de Madagascar.  Il est situé entre les villes de Arivonimamo au nord, Ambatolampy à l   est, Faratsiho, à l   ouest et Betafo au sud.  Il y a quelques traces de source chaude dans les alentours d   Antsirabe. Le volcan culmine à 2 642 mètres d   altitude.', 'Vakinakaratra', 'Ankaratra', '', ''),
(10, 'Lac Andraikiba', 'old-swim-park.jpg', 'Lac Andraikiba  Étendue d’eau sans grand intérêt si ce n’est d’observer la vie locale - quelques picnics et un panorama sur les collines environnantes (balafrées malheureusement par un déboisement effréné et sérieusement contre-productif) relèvent un paysage assez morne Le lac d   Andraikiba est bien plus vaste que je ne l   imaginais et la première impression qui frappe le visiteur est le calme qui règne ici.  On peut s   y promener, il existe une route, ou tout simplement s   y reposer en contemplant l   étendue d   eau. Les courageux pourront aussi s   y baigner en choisissant un endroit où l   eau est bien claire.  Situé à quelques kilomètres d   Antsirabe en direction de Morondava, il est conseillé de recourir à un véhicule pour se déplacer.', 'Vakinakaratra', '', '', ''),
(11, 'Monument Fahaleovantena', 'madagascar-antsirabe-fahaleovantena-tribes-monument-2.jpg', 'Monument Fahaleovantena  Temps de visite recommandé :0.5-2 heures  Cette stèle est une bonne représentation des 18 ethnies de la Grande Ile.  Mais demandez un guide à l   Office du tourisme pour les explications utiles. Immanquable sur le trajet, notre guide a stationné juste devant, le temps de nous expliquer la symbolique des ethnies et de l’hymne national.  Pas de quoi s’éterniser.', 'Vakinakaratra', '', '', ''),
(12, 'Lac Tritriva', 'Lake_Tritriva_01.jpg', 'Lac Tritriva  Le lac Tritriva est un lac de Madagascar situé à quelques kilomètres d   Antsirabe, près de la commune de Belazao. D   origine volcanique, il occupe le sommet du mont Tritriva avec une profondeur de 160 mètres.  Ses eaux d   un vert opaque dégagent une impression étrange.  Les légendes du lac Selon la légende, un couple d   amoureux, Rabeniomby et Ravolahanta, s   y suicida en se noyant après une partie de fanorona. La jeune fille, Ravolahanta, étant issue de la famille royale, et le jeune homme, Rabeniomby, d   une famille modeste, leurs parents n   acceptèrent pas cette union qui devînt alors impossible. Jurant que « la mort seule pourrait les séparer » (Faty no isarahana) ils s   enveloppèrent ensemble dans un tissu de soie avant de se jeter dans le lac, afin d   échapper définitivement aux persécutions dont ils furent victimes de la part de leurs familles et villages respectifs. On peut observer, sortant de la roche, deux arbres entrelacées, censés représenter leur amour sacrifié et on prétend qu   ils saigneraient s   il venait a être coupés1,2.  La forme du lac représente vaguement les contours de l   île de Madagascar. On raconte que lorsqu   un évènement majeur va se passer dans le pays, le lac devient rouge. La couleur des eaux du lac se teinterai également de rouge à chaque décès d   un jeune homme dans le village d   origine de Rabeniomby, tandis que seule la moitié du lac prendrait cette couleur rougeâtre à chaque fois qu’une jeune fille meurt dans le village d’origine de Ravolahanta1,2.  Étant donné que ce lac est baptisé « lac sacré et mystérieux », il est strictement interdit d   y nager après avoir mangé du porc. On raconte ainsi qu’un Chinois essaya de défier ce tabou (fady) et nagea dans le lac avant de s   y noyer. Son corps demeure toujours introuvable1.  Selon la légende de Lanja, une fois mouillé, il serait fatal voire mortel de se sécher le ventre vide, avec une serviette de la même couleur que l   eau du lac.', 'Vakinakaratra', 'Commune de Belazao', '', ''),
(13, 'Ilot de la Vierge', 'Ilot de la Vierge(1).jpg', 'Le lac se sent très calme. Il y a beaucoup d\'arbres au bord du lac, et les petites places devant le lac peuvent être réduites de troubles. \r\nNous n\'avons pas d\'autres touristes quand nous allons, le vent est très confortable. Nous sommes allés au lac de bas visions sur la colline, \r\ntrois jeunes filles sont venues sur le lac et nous devons prendre des photos pour eux. \r\nIls sont heureux de partir après avoir vu les photos. J\'aime beaucoup cette maison.', 'Itasy', '', '', ''),
(14, 'Parc Lémuriens', 'téléchargement.jpg', 'Vous vous rappelez de la bande des animaux de Madagascar?  Le groupe des animaux de cinq est venu à Madagascar, a rencontré des rois fous et des pinguins intelligents.  Pour arriver en Afrique, Madagascar a découvert qu   il n   y avait pas de pinguins, et que les animaux les plus précieux étaient les pinguins.  Les bétails habitent généralement dans les forêts du sud, et dans la capitale de la Malaisie, Tanana Liver,  ils peuvent aussi voir des bétails précieux pour protéger les animaux. Le parc de Lemurs, une zone privée de protection située à 22 kilomètres  à l   ouest de la capitale, vous pouvez trouver neuf espèces de bétail, même si vous n   avez pas la possibilité de voir des bétails dans d   autres endroits,  C   est un bon endroit à visiter! Les béliers sont libres d   élevage (sauf deux espèces de béliers nocturnes, qui sont limitées dans des béliers assez petits) et très chauds, ne nuisent pas à l   homme,  peuvent observer à proximité les habitudes de croissance de différents types de béliers et comprendre leur langue.', 'Itasy', '', '', ''),
(15, 'Lily WaterFall', 'la_lily_ampefy-1050x525.jpg', ' Rando en famille : site magnifique, assez facile d   accès, ...la route reste poussièreuse.  Le petit bémol, les vendeuses de pierre ponce sont un peu insistantes.', 'Itasy', '', '', ''),
(16, 'Lemuria Land   ', 'lemuriland.jpg', 'Le parc du Lemuria Land Lemuria Land Parc, une réserve naturel et botanique au milieu des ylangs centenaires qui ont fait la réputation de l   île de Nosy Be Madagascar et d   une végétation luxuriante, vous accueille tous les jours. Cette visite de près de 3 heures de temps vous amènera à découvrir la faune et flore endémique de Madagascar, bien sur une grande variété des lémuriens endémique, mais aussi les reptiles dont les plus beaux spécimens des caméléons, des crocodiles, des diverses espèces de tortues, des lézards...  Le parcours vous amènera le long d   un ruisseau entouré des plantes à parfums vers l   enclos des sangliers et le lac des canards sauvages.  Vous aurez aussi le loisir de découvrir les plantes grasses, et rares de Madagascar, et du Sud en particulier, tout comme une large gamme de palmiers.  Une case traditionnelle de notre région que nous appellons\"kaz papillons\" qui vous permettra de découvrir une exposition statique des insectes et des magnifiques papillons de Madagascar.  Cette visite sera suivie de la découverte de la distillation de la SPPM (Sociéte des Produits à Parfums de Madagascar) fondée par les Pères missionnaires en 1889, et premier producteur mondial d   ylang-ylang, avec des alambics modernes. Une présentation de toute les huiles essentielles de Madagascar et de nombreuses nouveautés au sein de notre petit musée de la distillation. Un musée qui nous rappellera les magnifique machines à vapeur de l   ère avant l   arrivée de l   électricité.  Enfin, la visite ce continue par la découverte de quelques métiers artisanaux traditionnels, comme la vannerie d   osier, de palmes et de racines de vétiver, les fabrications des nattes, des soubiques et la visite de la Rhumerie, avec une dégustation gratuite des rhums de canne à sucre qui a fait la réputation du rhum de Nosy Be Madagascar; tous en continuant la dégustation des jus de fruits de saison qui vous sera offert  Vous pourrez aussi en profiter pour faire le plein de souvenir dans notre boutique.', 'Diana', '', '', ''),
(17, 'Sakalav Diving', 'requin baleine nosy be_sakalava-diving.jpg', 'Sakalav    Diving est un centre de plongée à taille humaine dirigé avec passion par un couple de français: Nathalie et Alain-Benoit dont ce dernier plonge depuis plus de 45 ans maintenant. Capacité d   accueil de 1 à 25 personnes Plongée sur mesure en toute sécurité et toujours encadrée Spécialités:  photo et vidéo sous-marine, référencement des nudibranches.', 'Diana', '', '', ''),
(18, 'Tsingy Rouge Park', 'Tsingy2_Madagascar,DIANA.jpg', 'La RN6, reliant Diego Suarez à Nosy Be, regorge de curiosités géologiques qui demandent de s’y arrêter.  Tantôt rouges et arrondis, tantôt gris et acérés, les tsingy du Nord de Madagascar attirent grands nombres de curieux chaque année ; des sites d’une beauté exceptionnelle !  Pour cette première étape, partons à la découverte des tsingy rouges de Madagascar.  MILLE NUANCES DE GRÉ Mais aussi de marne et de calcaire. La formation de ces « cheminées de fée » est le fruit d’un long travail de Dame Nature. Creusé par le fleuve de Frodo, ce canyon laisse apparaître d’immenses formations rouge ocre formées par le ruissellement de l’eau dans ces sols à ciel ouvert.  Le mélange de différents oxydes donnent à ces curiosités un panel de couleurs chaudes allant d’un blanc éclatant à un rouge intense. En plus d’être un site hors du commun, celui-ci change d’année en année contrairement à ces voisins. En effet, les fortes pluies et les crues emportent avec elles certaines cheminées et en font apparaître de nouvelles.  Comparez deux photos des tsingy rouges avec quelques années d’écart et la différence vous sautera aux yeux.', 'Diana', '', '', ''),
(19, 'Nosy Anko', 'Time-Tide-Miavana-Piazza-00003_slideshow.jpg', 'Cet écolodge de luxe est posé au large de Madagascar, sur l’île privée de Nosy Ankao, la plus grande des 5 îles de l’archipel. Accessible uniquement par les airs (30 minutes d’hélicoptère depuis Diego Suarez, ou 1 heure depuis Nosy Be), vous n’y croiserez personne en dehors des clients et du personnel de l’hôtel…  Chacune des 14 villas privées (de 1 à 3 chambres et de 450m² à 865m²) dispose d’une vue sur l’océan et d’un accès direct à la plage pour un séjour en parfaite intimité. Les chambres sont décorées avec minutie et élégance, les larges baies vitrées laissent entrer une belle lumière, la douche extérieure offre un moment de détente avec une vue imprenable… Tout, ici, invite immédiatement au repos et au lâcher-prise.  Ce chef d’œuvre d’architecture possède également une superbe piscine avec vue panoramique sur la mer et les plages sauvages. Chaque villa dispose de sa piscine privée.  En plus d’être un joyau de l’hôtellerie de luxe, le lodge est également un sanctuaire pour la faune et la flore de cette région, la plupart étant des espèces endémiques de ces terres.  Dans cet écrin-refuge de 10 km², vous pourrez observer différentes espèces de lémuriens, des tortues marines (qui viennent y pondre d’octobre à février), les baleines à bosse qui passent à côté de cette île privée... Des excursions avec guide naturaliste sont proposées par le Lodge tout au long des saisons.  Paradis pour les amateurs du monde sous-marin, les eaux cristallines vous permettront d’observer ces espèces lors de plongées et snorkeling.  De multiples activités, sports d’eau et de glisse vous seront proposées.  Les bébés sont acceptés à partir de l’âge d’un an.  Un véritable havre de paix dans une nature unique, préservée avec tout le confort du grand luxe…  Découvrez un \"autre hôtel\" sur une île au large de Madagascar. ', 'Sava', '', '', ''),
(20, 'Parc national de Marojejy', 'Massif_Marojejy_01_wikipedia.jpg', 'Le parc national de Marojejy est un parc national dans la région de la Sava au nord-est de Madagascar. Il couvre 55 500 ha sur le massif du Marojejy, une chaîne de montagnes qui culmine à une altitude de 2 132 m. L   accès à celui-ci est longtemps resté l   apanage des chercheurs et des scientifiques lorsque la réserve conservait son statut de réserve naturelle intégrale depuis sa création en 1952. En 1998, il est ouvert au public avec son nouveau statut de parc national et gagne ses lettres de noblesse en 2007 lorsqu   il est inscrit sur la liste du patrimoine mondial, à l   instar de cinq autres aires protégées, regroupées sous la dénomination de forêts humides de l   Atsinanana. Malgré l   irrégularité de son relief, le braconnage et les coupes sélectives demeurent des problèmes persistants, surtout depuis le début de la crise politique de 2009. L   exploitation minière, l   agriculture sur brûlis et les coupes de bois constituent également des menaces pour le parc et sa biodiversité.  Les reliefs escarpés et la topographie particulière qui caractérisent le massif ont créé une multitude d   habitats différents qui se succèdent sur les versants en fonction de l   altitude ou de l   orientation géographique. En effet, au sommet, la forêt de nuages constituée de fruticée, la dernière de Madagascar, laisse place, à mesure que l   on descend, à des arbres plus grands et de moins en moins couvert d   épiphytes. De plus, les flancs orientaux de la montagne sont plus humides et abritent donc une végétation plus luxuriante, alors que les flancs occidentaux sont plus secs. L   étonnante diversité des habitats qui en résulte permet d   y trouver pas moins de 118 espèces d   oiseaux, 148 espèces de reptiles et d   amphibiens et 11 espèces de lémuriens. Le Sifaka soyeux (Propithecus candidus), lémurien emblématique du parc, fait partie des 25 espèces de primates les plus menacées au monde sur la liste de l   UICN. L   Eurycère de Prévost (Euryceros prevostii) est l   oiseau emblématique du parc, endémique des forêts du nord-est de Madagascar.  Une seule piste mène de l   entrée du parc au point culminant du massif le long de laquelle trois campements sont disposés : le camp Mantella à 450 m d   altitude entouré de hauts arbres, le camp Marojejia à 775 m d   altitude à la transition des forêts de basse altitude et celles de montagne, et le camp Simpona à 1 250 m au milieu des forêts de haute montagne. Le camp Simpona fait office de camp de base avant l   ascension du sommet par un sentier qui s   étire sur 2 km parcourus en quatre ou cinq heures.', 'Sava', '', '', ''),
(21, 'PARC NATIONAL DU CAP MASOALA', 'mada-expeditions_kayak-masoala.jpg', 'La région du Masoala et notamment le parc du Cap, est inscrit au Patrimoine Mondial de l’UNESCO. Lieu exceptionnel par la diversité de ses paysages et des activités proposées, vous découvrirez un spot unique et incroyable où tous les rêves sont permis.  Randonnée, plongée, visites culturelles, un large choix s’offre à vous.  Enclavé au nord-est de Madagascar dans la région de Diego Suarez, c’est la plus grande aire protégée de l’île. Masoala constitue un des grands points chauds de la biodiversité mondiale. C’est pour cela qu’il a été inscrit au Patrimoine Mondial de l’UNESCO en 2007. La moitié des espèces de plantes endémiques sont observables dans ce parc. Mais vous y trouverez également une grande diversité d’animaux tels que des lémuriens vari roux, des aye-aye ou encore des grenouilles tomates. Différentes excursions modulables s’offrent à vous pour aller explorer les forêts humides et denses de la région. Vous y découvrirez un monde plein de vie et de surprises : cascades, ancienne voie ferrée, et autres rivières bucoliques.  Masoala est l’une des rares régions de Madagascar qui ait réussi à raccorder la forêt à la mer. Trois sites marins sont accessibles où vous pourrez y faire notamment des activités plongée ou snorkeling. Vous êtes également dans la région des baleines à bosse, où elles viennent s’accoupler et mettre bas dans la baie d’Antongil, offrant la possibilité aux plus chanceux de les observer.  Des activités pour tous ! La région du Masoala offre de nombreuses activités diverses : trekking ou randonnées dans les forêts humides du parc, kayaking, plongée ou snorkeling dans les eaux chaudes et turquoises de la baie d’Antongil. Mais vous pourrez également profiter d’excursions culturelles et historiques. De nombreux circuits et excursions sont proposés par des guides locaux qui vous feront découvrir les plus beaux sites de la région.', 'Sava', '', '', ''),
(22, 'HOTEL MELROSE SAMBAVA', 'hotel_booking.jpg', 'Situé à Sambava, l   HOTEL MELROSE SAMBAVA possède un jardin, une terrasse, un restaurant et un bar. Vous profiterez d   un service d   étage et d   une connexion Wi-Fi gratuite.  Toutes les chambres disposent d   un balcon. Toutes les chambres sont équipées de la climatisation et d   une télévision à écran plat.  Un petit-déjeuner américain ou à la carte est servi sur place.  L   aéroport de Sambava, le plus proche, est implanté à 2 km.  L   établissement HOTEL MELROSE SAMBAVA accueille des clients Booking.com depuis le 11 janv. 2023. Ses points forts Navette aéroport (gratuite) Chambres non-fumeurs Restaurant Parking gratuit Connexion Wi-Fi gratuite Service d   étage Front de mer Chambres familiales Bar Petit-déjeuner', 'Sava', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `hotel`
--

CREATE TABLE `hotel` (
  `id_hotel` int(11) NOT NULL,
  `nom_hotel` varchar(255) NOT NULL,
  `adress_lieu` varchar(255) NOT NULL,
  `description_hotel` text NOT NULL,
  `region` varchar(255) NOT NULL,
  `image_hotel` varchar(255) NOT NULL,
  `prix_s_ejour` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `hotel`
--

INSERT INTO `hotel` (`id_hotel`, `nom_hotel`, `adress_lieu`, `description_hotel`, `region`, `image_hotel`, `prix_s_ejour`, `contact`) VALUES
(4, 'Radisson Blu', 'Zone Tana Waterfront, Antananarivo 101', 'Que ce soit pour les affaires ou pour les loisirs, profitez de la situation centrale de l’hôtel Radisson Blu Antananarivo Waterfront, installé le long de Tana Water Front, entouré d’arbres. Notre emplacement sécurisé et privé est proche du principal quartier d’affaires tout récemment établi : à quelques pas des divertissements, des magasins et des entreprises. Profitez de chambres et de suites élégantes, toutes équipées d’une connexion Wi-Fi haut débit gratuite, d’un service à thé et à café ainsi que d’autres équipements modernes.   Après une longue journée, plongez dans la piscine extérieure sur le toit et admirez la vue, ou faites de l’exercice dans notre centre de fitness moderne. Pour un repas savoureux, ne cherchez pas plus loin : nos restaurants sur place proposent de délicieux plats internationaux, des viandes grillées et des fruits de mer frais. Installez-vous confortablement dans notre café et bar du hall de réception ou dans notre élégant salon avec terrasse.   Si vous voulez organiser un événement ', 'Analamanga', '9f382080.jpg', ' À partir de 781 580 Ar', ''),
(5, 'Les flots bleu', 'Lot 325 bis AFM Morondava Antehiroka Ambohibao, 105 Antananarivo Madagascar, 501 Antananarivo, Madagascar ', 'Situé à Antananarivo, à 12 km de la gare de Soarano, l   établissement Les flots Bleu propose une piscine extérieure, un parking privé gratuit, une salle de sport et un jardin. Il propose un service d   étage, un restaurant et une terrasse. Il propose une réception ouverte 24h/24, un service de navette aéroport, un salon commun et une connexion Wi-Fi gratuite dans l   ensemble de ses locaux.', 'Analamanga', '192226955.jpg', 'À partir de 37 950 Ar', ''),
(6, 'La Ribaudière', '18 Rue Paul Dussac, 101 Antananarivo, Madagascar', 'L   Hôtel Restaurant La Ribaudière se situe au cœur d   Antananarivo, à côté de la Chambre de Commerce, et propose des massages ainsi qu   un restaurant à la carte. Vous bénéficierez gratuitement d   une connexion Wi-Fi disponible dans l   ensemble de l   établissement.  Installé dans un jardin tropical, cet hôtel comporte des chambres climatisées dotées d   un mobilier moderne, d   une télévision par satellite à écran plat et d   un bureau.  Il est conseillé de réserver pour déguster vos repas au restaurant sur place. Ce dernier prépare des spécialités locales et françaises pour le déjeuner et le dîner. Vous vous détendrez sur un canapé sur la terrasse ou lirez un livre dans la bibliothèque. Le personnel de la réception ouverte 24h/24 assure des services de location de voitures et de navette aéroport.', 'selectionnez', '264991416.jpg', 'À partir de 122 976 Ar', ''),
(11, 'Hôtel Carlton', 'Rue Pierre Stibbe Anosy Antananarivo, 101', 'Le Carlton Madagascar Hotel est idéalement situé dans le quartier populaire de Centre-ville d   Antananarivo.  L   hôtel offre un haut niveau de service et d   équipements pour répondre aux besoins individuels de tous les voyageurs. ', 'Analamanga', 'FB_IMG_1689625843368.jpg', 'indéfini', ''),
(13, 'Arotel', '-', 'Arotel continue de donner les meilleurs en service comme en équipement,Cette année,  Nous avons inauguré La Suite MASOANDRO    Haut de gamme classée en Suite PREMUIM  NOS CHAMBRES A la recherche d’un hôtel à Antsirabe ? Prenez le temps de vous évader dans un coin luxueux et paisible au cœur de la ville.  Les chambres Arotel, tout confort, vous accueillent pour un séjour inoubliable.  UN SPA LUXUEUX Aro’spa fait partie des meilleurs spas d’Antsirabe. Plongez dans un univers où votre bien-être passe avant toute chose ! Des moments inédits de relaxation sont au rendez-vous pour tous ceux qui aiment se faire chouchouter.  DES ACTIVITES SYMPA Au sein de notre hôtel avec piscine à Antsirabe, faites quelques brasses ou dépensez-vous dans une salle de sport aux équipements modernes. De nombreuses activités sont prévues pour vos vacances chez  Arotel.  DES INSTALLATIONS POUR TOUS VOS EVENEMENTS Un séminaire dans notre salle de réunion équipée? Un anniversaire autour de la piscine ? Un mariage dans le cadre chic de notre restaurant ? Célébrez vos événements en toute confiance ! Profitez de nos installations entièrement adaptées à vos besoins. Arotel contribue à votre bonheur !', 'Vakinakaratra', 'Arotel.mg.png', '-', ''),
(14, 'Eden lodge', '', 'Bénéficiez d   un traitement VIP grâce au service exclusif de l   établissement Eden Lodge Vous pouvez bénéficier d   une réduction Genius dans l   établissement Eden Lodge ! Connectez-vous pour économiser.  Situé à Madirokely, face à la plage, l   Eden Lodge propose un hébergement 5 étoiles, un jardin, un salon commun et une terrasse. Chaque hébergement de cet hôtel 5 étoiles offre une vue sur la mer. Vous aurez accès à un bar et à des installations de sports nautiques. L   hôtel propose également une connexion Wi-Fi gratuite et un service de navette aéroport payant.  Toutes les chambres comprennent un bureau. Leur salle de bains privative est pourvue d   une douche et d   articles de toilette gratuits. Certaines chambres comprennent une cuisine équipée d   un réfrigérateur. Le linge de lit et les serviettes sont fournis.  Un petit-déjeuner continental, américain ou végétarien est servi sur place. Le restaurant sur place sert une cuisine africaine, française et des fruits de mer. Des plats végétariens, sans produits laitiers et sans gluten peuvent également être préparés sur demande.  Lors de votre séjour à l   Eden Lodge, vous pourrez pratiquer des activités à Madirokely et dans ses environs, comme la randonnée, la planche à voile et la plongée avec tuba.', 'Diana', 'sallon.jpg', '', ''),
(15, 'Orangea Beach Resort', ' Andilana', 'Orangea Beach Resort propose un jardin, un parking privé gratuit, un bar et une plage privée. Cet hôtel 4 étoiles propose une connexion Wi-Fi gratuite, un service d   étage et un service de concierge. Doté d   une piscine extérieure, il se trouve à 11 km du mont Passot.  Les chambres climatisées comprennent un bureau, une machine à café, un minibar, un coffre-fort, une télévision à écran plat, une terrasse et une salle de bains privative avec douche. Certaines offrent une vue sur la mer.  Un petit-déjeuner continental est servi chaque matin.  Vous pourrez jouer au billard et au ping-pong sur place.  L   aéroport le plus proche, celui de Fascene, est situé à 26 km. Un service de navette aéroport peut être assuré moyennant des frais supplémentaires.', 'Diana', 'hotel_booking.jpg', '', ''),
(16, 'Swisscocobeach', '', ' Situé à Nosy Be, à quelques pas de la plage d   Ambondrona, le Swisscocobeach propose des hébergements avec une piscine extérieure, un parking privé gratuit, un jardin et une terrasse. Il propose un restaurant, un service d   étage, un service de concierge et une connexion Wi-Fi gratuite dans l   ensemble de ses locaux. Vous pourrez prendre un verre au bar.  Toutes les chambres comprennent la climatisation, une armoire, une terrasse avec vue sur la mer, une salle de bains privative, une télévision à écran plat, du linge de lit et des serviettes. Certaines chambres comprennent une cuisine avec un réfrigérateur, un four et un micro-ondes. Les logements disposent d   un coffre-fort.  Un petit-déjeuner continental, végétarien ou végétalien est servi tous les matins.  La région est prisée des amateurs de randonnée et de plongée avec tuba. Le Swisscocobeach assure un service de location de voitures.  Vous séjournerez à 1,9 km de la plage de Madirokely et à 2,8 km de celle de Djamanjary. L   aéroport le plus proche, celui de Fascene, est situé à 21 km. Un service de navette aéroport peut être assuré moyennant des frais supplémentaires.', 'Diana', 'vuedejeuner_booking.jpg', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

CREATE TABLE `personne` (
  `id_personne` int(4) NOT NULL,
  `nom_personne` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `mot_de_passe` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `personne`
--

INSERT INTO `personne` (`id_personne`, `nom_personne`, `email`, `mot_de_passe`) VALUES
(1, 'Corinah', 'ctarantsoa@yahoo.fr', '1234'),
(2, 'RAMAHAFENOSOA Fidera', 'fiderananyavoramahaf', '140301');

-- --------------------------------------------------------

--
-- Structure de la table `provinces`
--

CREATE TABLE `provinces` (
  `id_province` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `nom_province` varchar(50) DEFAULT NULL,
  `chef_lieu` varchar(50) DEFAULT NULL,
  `ISO_3166_2` varchar(50) DEFAULT NULL,
  `FIPS_10_4` varchar(50) DEFAULT NULL,
  `population` varchar(50) DEFAULT NULL,
  `superficie` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `provinces`
--

INSERT INTO `provinces` (`id_province`, `id`, `nom_province`, `chef_lieu`, `ISO_3166_2`, `FIPS_10_4`, `population`, `superficie`) VALUES
(1, 0, 'Diego-Suarez', 'Diego-Suarez', 'D', 'MA01', '1188425', '43046'),
(2, 0, 'Majunga', 'Majunga', 'M', 'MA03', '1733917', '150023'),
(3, 0, 'Tuléar', 'Tuléar', 'U', 'MA06', '2229550', '161405'),
(4, 0, 'Tamatave', 'Tamatave', 'A', 'MA04', '2593063', '71911'),
(5, 0, 'Fianarantsoa', 'Fianarantsoa', 'F', 'MA02', '3366291', '102373'),
(6, 0, 'Tananarive', 'Tananarive', 'T', 'MA05', '4580788', '58283');

-- --------------------------------------------------------

--
-- Structure de la table `region`
--

CREATE TABLE `region` (
  `id` int(4) NOT NULL,
  `nom_province` varchar(50) NOT NULL,
  `nom_region` varchar(50) NOT NULL,
  `descriptions` text NOT NULL,
  `code_postal` varchar(50) NOT NULL,
  `image_region` varchar(255) NOT NULL,
  `description1` text NOT NULL,
  `description2` text NOT NULL,
  `description3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `region`
--

INSERT INTO `region` (`id`, `nom_province`, `nom_region`, `descriptions`, `code_postal`, `image_region`, `description1`, `description2`, `description3`) VALUES
(5, 'Fianarantsoa', 'Haute Mahatsiatra', 'Paysages à couper le souffle : Haute Matsiatra est une région montagneuse qui offre des panoramas à couper le souffle. Les collines verdoyantes, les vastes vallées, les rizières en terrasses et les forêts luxuriantes créent un tableau naturel captivant. Vous pourrez explorer les montagnes majestueuses telles que l   Andringitra et le mont Ibity, ainsi que de nombreux lacs et cascades qui parsèment la région.', '301', 'drones.mg_336017000_947527152927224_5353628369049753690_n.jpg', 'Paysages à couper le souffle : Haute Matsiatra est une région montagneuse qui offre des panoramas à couper le souffle. Les collines verdoyantes, les vastes vallées, les rizières en terrasses et les forêts luxuriantes créent un tableau naturel captivant. Vous pourrez explorer les montagnes majestueuses telles que l   Andringitra et le mont Ibity, ainsi que de nombreux lacs et cascades qui parsèment la région.', 'Parcs nationaux et réserves naturelles : Les amoureux de la faune et de la flore seront comblés par la diversité de la biodiversité présente dans la région d   Haute Matsiatra. Le Parc National de l   Andringitra est un incontournable, abritant des espèces endémiques de lémuriens, des oiseaux rares et des plantes uniques. Vous pourrez également visiter la Réserve Naturelle Intégrale d   Ibity, une zone préservée où la nature est reine.', 'Rencontres culturelles : Haute Matsiatra est habitée par plusieurs groupes ethniques malgaches, chacun apportant ses traditions, sa musique et ses danses distinctives. Vous aurez l   occasion de vous immerger dans la vie quotidienne des habitants, d   assister à des cérémonies traditionnelles et de goûter à la délicieuse cuisine malgache. Ne manquez pas le marché de Fianarantsoa, où vous pourrez acheter des produits artisanaux locaux en souvenir.'),
(7, 'Tananarive', 'Analamanga', 'Analamanga est l\'une des vingt-trois régions de Madagascar. Elle est située dans la province d\'Antananarivo, dans le centre de l\'île\r\n', '101', 'Tana.jpg', 'La région de Analamanga est constituée de huit districts et 134 communes :\r\n\r\nDistrict d\'Ambohidratrimo\r\nDistrict d\'Andramasina\r\nDistrict d\'Anjozorobe\r\nDistrict d\'Ankazobe\r\nDistrict d\'Antananarivo-Atsimondrano\r\nDistrict d\'Antananarivo-Avaradrano\r\nDistrict d\'Antananarivo-Renivohitra\r\nDistrict de Manjakandriana\r\n\r\n', 'Coordonnées : 18° 56′ 24″ sud, 47° 31′ 12″  Densité : 152 hab./km2', 'Superficie : 17 488 km² \r\nCapitale : Tananarive \r\nPopulation : 3,618 millions (2018) '),
(8, 'Tuléar', 'Menabe', 'Le Menabe est l\'une des vingt-trois régions de Madagascar. Elle est située dans la province de Toliara, dans le sud-ouest de l\'île.', 'Coordonnées	20° 18′ 00″ sud, 44° 16′ 48″ est Super', 'alealenati_351477826_1240658313274327_4762421463528455821_n.jfif', 'Sa capitale est Morondava.  La population de la région est estimée à environ 390 800 habitants, en 2004, sur une superficie de 46 121 km21', 'La région est divisée en cinq districts :  district de Belo-sur-Tsiribihina ; district de Mahabo ; district de Manja ; district de Miandrivazo ; district de Morondava.', 'Population	390 800 hab. (2004) Densité	8,5 hab./km2 Coordonnées	20° 18′ 00″ sud, 44° 16′ 48″ est Superficie	4 612 100 ha = 46 121 km2'),
(9, 'Tamatave', 'Analanjirofo', 'La région est composée de six districts :  District de Fénérive-Est District de Manarana-Nord District de Maroantsetra District de Nosy Boraha District de Soanierana Ivongo District de Vavatenina', '509', 'andry.dey_316778832_1318735172291692_1946067142628915112_n.jfif', 'La région est composée de six districts :  District de Fénérive-Est District de Manarana-Nord District de Maroantsetra District de Nosy Boraha District de Soanierana Ivongo District de Vavatenina', 'Analanjirofo dispose encore d   une importante couverture forestière par rapport aux autres régions de Madagascar. Le taux de couverture forestier serait estimé à 50 %, en comptabilisant domaines forestiers de l   État et forêts domaniales.', 'Population	1 035 132 hab. (20131) Densité	47 hab./km2 Géographie Coordonnées	16° 35′ 39″ sud, 49° 26′ 19″ est Superficie	2 193 000 ha = 21 930 km2 Divers Devise	\"Ovy haniry tsy tam-bato\"'),
(10, 'Majunga', 'Betsiboka', 'Betsiboka est l\'une des vingt-trois régions de Madagascar. Elle est située dans la province de Majunga, dans le nord de l\'île.\r\nLe pont de Betsiboka est un pont en treillis par lequel la Route nationale 4 franchit le fleuve Betsiboka1, dans le district de Maevatanana, dans la région de Betsiboka, à Madagascar. Long de 350 mètres, le pont de Betsiboka est un des plus longs ponts de l\'île.', '', 'luch_photogram_360143144_805174601096644_2593340722222065686_n.jpg', 'Longueur	531 km Bassin	11 800 ou 49 000 km2 Bassin collecteur	Betsiboka Débit moyen	278 m3/s', 'Source	confluence Jabo et Amparihibe · Coordonnées	18° 21′ 57″ S, 47° 29′ 21″ E Embouchure	Canal du Mozambique Océan Indien · Localisation	Baie de Bombetoka près de Majunga · Altitude	0 m · Coordonnées	15° 43′ 33″ S, 46° 16′ 16″ E', 'Principaux affluents · Rive gauche	Andriantoany, Ikopa · Rive droite	Kamoro'),
(11, 'Diego-Suarez', 'Diana', 'Diana est l\'une des vingt-trois régions de Madagascar, située dans la province de Diego-Suarez, dans le nord de l\'île.\r\n\r\n', '204', 'rmoralles_353619276_763812038772167_3774398611461932855_n.jpg', 'La région est divisée en cinq districts:  District d   Antsiranana I District d   Antsiranana II District d   Ambilobe District d   Ambanja District de Nosy Be', 'La capitale de la région est Antsiranana (Diégo-Suarez). La région est la plus septentrionale de l   île, frontalière avec les régions Sava et Sofia.  La population de la région est estimée à environ 680 000 habitants, en 2010, sur une superficie de 19 266 km2.', 'Densité	35 hab./km2 Géographie Coordonnées	12° 16′ 12″ sud, 49° 16′ 48″ est'),
(12, 'Toliara', 'Anosy', 'Paysages époustouflants : La région Sud Anosy est caractérisée par ses paysages variés et époustouflants. Vous y découvrirez des montagnes majestueuses, des savanes dorées, des forêts tropicales luxuriantes et des plages de sable blanc bordées par des eaux turquoise. Le parc national de l   Andohahela et le parc national d   Andringitra sont des incontournables pour les amateurs de randonnées, d   escalade et d   observation de la faune et de la flore endémiques.', '601', 'anosytourisme_305030493_1812997462377480_2028408217200870366_n.jfif', 'Paysages époustouflants : La région Sud Anosy est caractérisée par ses paysages variés et époustouflants. Vous y découvrirez des montagnes majestueuses, des savanes dorées, des forêts tropicales luxuriantes et des plages de sable blanc bordées par des eaux turquoise. Le parc national de l   Andohahela et le parc national d   Andringitra sont des incontournables pour les amateurs de randonnées, d   escalade et d   observation de la faune et de la flore endémiques.', 'Cultures et traditions : Cette région est également un véritable trésor culturel. Vous aurez l   occasion de rencontrer des communautés locales chaleureuses et accueillantes, qui perpétuent des traditions séculaires. Assistez aux danses traditionnelles, participez à des cérémonies ancestrales et découvrez l   artisanat local, comme les sculptures en bois, les tissus colorés et les paniers tressés, qui reflètent l   identité culturelle unique de la région.', 'Aventure et exploration : Les passionnés d   aventure seront comblés dans la région Sud Anosy. Explorez les grottes mystérieuses de Lavaka, où se cachent des stalactites et stalagmites impressionnants. Les amateurs de spéléologie y trouveront leur bonheur. Vous pouvez également faire du canoë-kayak sur la rivière Manambovo ou faire du snorkeling pour admirer les merveilles sous-marines près des côtes.'),
(13, 'Tuléar', 'Anosy', 'Paysages époustouflants : La région Sud Anosy est caractérisée par ses paysages variés et époustouflants. Vous y découvrirez des montagnes majestueuses, des savanes dorées, des forêts tropicales luxuriantes et des plages de sable blanc bordées par des eaux turquoise. Le parc national de l   Andohahela et le parc national d   Andringitra sont des incontournables pour les amateurs de randonnées, d   escalade et d   observation de la faune et de la flore endémiques.', '601', 'anosytourisme_305030493_1812997462377480_2028408217200870366_n.jfif', 'Paysages époustouflants : La région Sud Anosy est caractérisée par ses paysages variés et époustouflants. Vous y découvrirez des montagnes majestueuses, des savanes dorées, des forêts tropicales luxuriantes et des plages de sable blanc bordées par des eaux turquoise. Le parc national de l   Andohahela et le parc national d   Andringitra sont des incontournables pour les amateurs de randonnées, d   escalade et d   observation de la faune et de la flore endémiques.', 'Cultures et traditions : Cette région est également un véritable trésor culturel. Vous aurez l   occasion de rencontrer des communautés locales chaleureuses et accueillantes, qui perpétuent des traditions séculaires. Assistez aux danses traditionnelles, participez à des cérémonies ancestrales et découvrez l   artisanat local, comme les sculptures en bois, les tissus colorés et les paniers tressés, qui reflètent l   identité culturelle unique de la région.', 'Aventure et exploration : Les passionnés d   aventure seront comblés dans la région Sud Anosy. Explorez les grottes mystérieuses de Lavaka, où se cachent des stalactites et stalagmites impressionnants. Les amateurs de spéléologie y trouveront leur bonheur. Vous pouvez également faire du canoë-kayak sur la rivière Manambovo ou faire du snorkeling pour admirer les merveilles sous-marines près des côtes.'),
(14, 'Majunga', 'Boeny', 'Paysages côtiers à couper le souffle : Boeny est béni par une étendue de littoral spectaculaire. Les plages de sable blanc bordées de palmiers vous invitent à vous détendre et à vous émerveiller devant des couchers de soleil inoubliables. Parmi les plages les plus célèbres, on retrouve la plage de Mahajanga, propice à la baignade et aux sports nautiques, ainsi que la plage de Katsepy, qui offre une ambiance plus tranquille et authentique.', '401', 'leslie.wilmet_297082388_993497251328796_4975673279305314450_n.jpg', 'Paysages côtiers à couper le souffle : Boeny est béni par une étendue de littoral spectaculaire. Les plages de sable blanc bordées de palmiers vous invitent à vous détendre et à vous émerveiller devant des couchers de soleil inoubliables. Parmi les plages les plus célèbres, on retrouve la plage de Mahajanga, propice à la baignade et aux sports nautiques, ainsi que la plage de Katsepy, qui offre une ambiance plus tranquille et authentique.', 'Aventure dans les parcs nationaux : Pour les amoureux de la nature, la région Boeny abrite le Parc National d   Ankarafantsika, un écosystème unique abritant une variété de faune et de flore. Vous aurez la chance d   observer des lémuriens, des oiseaux exotiques et des caméléons parmi une riche biodiversité. Les passionnés d   ornithologie apprécieront particulièrement cette région, car elle regorge d   espèces aviaires endémiques.', 'Exploration des Tsingy : Ne manquez pas l   occasion de découvrir les Tsingy de Namoroka, des formations géologiques étonnantes en calcaire. Ces pics acérés et escarpés offrent un paysage spectaculaire et sont un véritable paradis pour les adeptes de randonnées et d   escalade. En plus de profiter de panoramas à couper le souffle, vous aurez peut-être la chance de rencontrer des espèces de lémuriens et d   autres animaux rares.');

-- --------------------------------------------------------

--
-- Structure de la table `restaurant`
--

CREATE TABLE `restaurant` (
  `id_resto` int(11) NOT NULL,
  `nom_resto` varchar(255) NOT NULL,
  `description_resto` text NOT NULL,
  `image_resto` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `lieu_resto` varchar(255) NOT NULL,
  `contacte` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `restaurant`
--

INSERT INTO `restaurant` (`id_resto`, `nom_resto`, `description_resto`, `image_resto`, `region`, `lieu_resto`, `contacte`) VALUES
(2, 'L  ORION RESTAURANT', 'L   Orion est un restaurant nouvellement ouvert dans un quartier des affaires, dans un cadre calme et stylisé, en plein centre ville d   Antananarivo. Le restaurant a pour spécialités des cuisines européennes et asiatiques uniques de par l’originalité et leurs associations. L   Orion est très connu pour ses buffets gastronomiques et le sushi.', 'Photos ORION & BENTO - © Fireflies-173.jpg', 'Analamanga', 'Lalana Rainitovo, Antananarivo', ''),
(3, 'Orangea Beach Resort', 'Situé à Andilana, à 30 km de la réserve de Lokobe, l   Orangea Beach Resort propose un jardin, un parking privé gratuit, un bar et une plage privée. Cet hôtel 4 étoiles propose une connexion Wi-Fi gratuite, un service d   étage et un service de concierge. Doté d   une piscine extérieure, il se trouve à 11 km du mont Passot.  Les chambres climatisées comprennent un bureau, une machine à café, un minibar, un coffre-fort, une télévision à écran plat, une terrasse et une salle de bains privative avec douche. Certaines offrent une vue sur la mer.', '379463782.jpg', 'selectionnez', 'Ampagnito, Nosy Be, 207 Andilana, Madagascar ', ''),
(4, 'Luxury Sakina Villa - Beachfront', ' Le Luxury Sakina Villa - Beachfront propose un hébergement indépendant avec connexion Wi-Fi, à Nosy-Be.  Le logement comprend la climatisation, une télévision et une terrasse. La cuisine est entièrement équipée avec un lave-vaisselle et un micro-ondes. Les salles de bains, privatives, sont quant à elles munies d   une douche et/ou d   une baignoire. Vous profiterez aussi d   une vue sur la mer et le jardin.  Le Sakina Villa dispose d   une navette aéroport, d   un jardin et d   un barbecue. Vous bénéficierez également d   un salon commun, ainsi que de services de repassage et de blanchisserie. Le stationnement sur place est gratuit.', '347579656.jpg', 'Diana', 'Ampasikely dzamandzar, 207 Dzamandzar, Madagascar ', ''),
(5, 'Royal Beach Hôtel', 'Situé à Madagascar, à Nosy Be, le Royal Beach Hôtel vous propose des hébergements spacieux donnant sur la mer. Situé en face de la baie de Madirokely, il dispose d   une piscine extérieure, d   un spa et d   une connexion Wi-Fi gratuite.  Décorées dans un style traditionnel, les chambres sont munies de grandes fenêtres et d   un mobilier en bois. Climatisées, elles comprennent une télévision à écran plat et une terrasse avec des chiliennes', '353056180.jpg', 'Diana', ' BP 58 Madirokely, 207 Ambatoloaka, Madagascar', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `achat`
--
ALTER TABLE `achat`
  ADD PRIMARY KEY (`id_achat`);

--
-- Index pour la table `activite`
--
ALTER TABLE `activite`
  ADD PRIMARY KEY (`id_activite`);

--
-- Index pour la table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id_hotel`);

--
-- Index pour la table `personne`
--
ALTER TABLE `personne`
  ADD PRIMARY KEY (`id_personne`);

--
-- Index pour la table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id_province`);

--
-- Index pour la table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`id_resto`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `achat`
--
ALTER TABLE `achat`
  MODIFY `id_achat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT pour la table `activite`
--
ALTER TABLE `activite`
  MODIFY `id_activite` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id_hotel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `personne`
--
ALTER TABLE `personne`
  MODIFY `id_personne` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `provinces`
--
ALTER TABLE `provinces`
  MODIFY `id_province` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `region`
--
ALTER TABLE `region`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `id_resto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
