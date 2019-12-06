-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 06. Dez 2019 um 15:00
-- Server-Version: 10.3.16-MariaDB
-- PHP-Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `cr13_barbara_schuch_bigevents`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `events`
--

CREATE TABLE `events` (
  `ID` int(10) UNSIGNED NOT NULL,
  `event_name` varchar(250) NOT NULL,
  `event_datetime` datetime NOT NULL,
  `event_description` varchar(500) NOT NULL,
  `event_image` varchar(250) NOT NULL,
  `event_capacity` int(10) UNSIGNED NOT NULL,
  `event_contact` varchar(50) NOT NULL,
  `eventlocation_name` varchar(50) NOT NULL,
  `eventlocation_address` varchar(50) NOT NULL,
  `eventlocation_ZIP_city` varchar(50) NOT NULL,
  `event_url` varchar(250) NOT NULL,
  `event_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `events`
--

INSERT INTO `events` (`ID`, `event_name`, `event_datetime`, `event_description`, `event_image`, `event_capacity`, `event_contact`, `eventlocation_name`, `eventlocation_address`, `eventlocation_ZIP_city`, `event_url`, `event_type`) VALUES
(1, 'Julian Rachlin, Violine - Mischa Maisky, Violoncello', '2019-12-17 19:30:00', 'Robert Schumann: Drei Fantasiestücke für Klavier und Violoncello, op. 73\r\n  Quintett für Klavier, zwei Violinen, Viola und Violoncello Es-Dur, op. 44\r\nCésar Franck: Quintett für Klavier, zwei Violinen, Viola und Violoncello f-Moll', 'https://events.wien.info/media/full/MV_Brahmssaal_1.jpg', 600, 'tickets@musikverein.at', 'Musikverein - Brahms-Saal', 'Musikvereinsplatz 1', '1010 - Wien', 'www.musikverein.at', 'Klassische Musik'),
(2, 'Andy Lee Lang', '2019-12-12 19:30:00', 'Thank you, Frank Sinatra, Merci, Udo Jürgens!\r\n\r\nDas Jubiläumskonzert \r\n\r\nMit der MAX Hagler Bigband\r\n\r\nMit dieser einzigartigen Hommage an zwei der wichtigsten Entertainer präsentiert Andy Lee Lang ein herausragendes Tribute, das sich von all seinen anderen Konzerten abhebt und zum Genuss für sein Publikum wird.', 'https://events.wien.info/media/full/andyleelang_1.jpg', 2000, 'service@stadthalle.com', 'Wiener Stadthalle - Halle F', 'Roland-Rainer-Platz 1', '1150 - Wien', 'www.stadthalle.com', 'Pop, Rock, Schlager'),
(3, 'The Kelly Family', '2019-12-19 19:30:00', '2019 wird ein besonderes Jahr für The Kelly Family, denn das Album „Over The Hump“ feiert 25-jähriges Jubiläum. Ein Vierteljahrhundert nach der Veröffentlichung sie im Herbst auf große „25 Years - Over the Hump“ Arena-Tournee gehen und dabei am 19.12. Halt in der Wiener Stadthalle machen, um dieses Jubiläum gebührend mit ihrem Publikum zu feiern.', 'https://events.wien.info/media/full/kelly.jpg', 16000, 'service@stadthalle.com', 'Wiener Stadthalle - Halle D', 'Roland-Rainer-Platz 1', '1150 -Wien', 'www.stadthalle.com', 'Pop, Rock, Schlager'),
(4, 'Ball der Wiener Philharmoniker', '2020-01-23 22:00:00', 'Die Wiener Philharmoniker laden zu ihrem Ball in den Wiener Musikverein. An den Instrumenten sind die Musiker des weltberühmten Orchesters bei dieser Veranstaltung allerdings nur bei der Eröffnung zu finden. Schließlich wollen auch die Wiener Philharmoniker einmal das Tanzbein schwingen. ', 'https://az694788.vo.msecnd.net/lightbox/Images/Ball/ball07_jhandler/ball07_jh_IMG_8179.jpg', 2800, 'ball@wienerphilharmoniker.at', 'Musikverein', 'Bösendorferstraße 12', '1010 - Wien', 'https://www.wienerphilharmoniker.at/', 'Tanz'),
(5, 'Bonbon Ball', '2020-02-21 21:00:00', 'Der süßeste Ball ist der Bonbon Ball im Wiener Konzerthaus. Der Ball ist bekannt für seine lustige, informelle Stimmung.', 'https://bonbonball.at/wp-content/uploads/2013/04/247-Er%C3%B6ffnung-1030x686.jpg', 2500, 'info@bonbonball.at', 'Wiener Konzerthaus', 'Lothringerstraße 20', '1030 - Wien', 'https://bonbonball.at/', 'Tanz'),
(6, 'Blues Party feat. Herby Dunkel & Gerry Lülik', '2019-12-12 21:00:00', 'Gerry Lülik (Harmonica) gilt wohl als DER führende Blues Harp Spieler Österreichs und hat sich schon den Respekt so mancher internationaler Künstler erworben. Sein dynamischer Stil ist virtuos, packend und einfühlsam zugleich. Kaum ein anderer lässt uns so tief in die Welt von Little Walter und Sonny Boy Williamson eintauchen. Gerry Lülik ist zu 100% Blues, ohne wenn und aber.\r\n\r\nHerby Dunkel (Gitarre, Slide Gitarre, Gesang) ist schon lange ein Begriff an der Blues Gitarre. Geradlinig und zielst', 'https://www.sargfabrik.at/EventDb-Images/BluesFever_1912.jpgr?w=743&q=60', 300, 'buero@sargfabrik.at', 'Sargfabrik', 'Goldschlagstraße 169', '1140 - Wien', 'https://www.sargfabrik.at/Home/Programm-Detail/concert-id/40392', 'Party'),
(7, 'BALKAN TO BOLLYWOOD – “VIENNA TAPES RELEASE PARTY”', '2019-12-13 20:00:00', 'Mr Dunkelbunt and his explosive musical sound factory of downright threatening danceability treat themselves to the 20th anniversary of a monthly takeover in FaniaLive:This regular club night is the place of continuous encounter and of the ongoing experiment with contemporary sounds like Bass Of Asia, Bollywood Trap and Oriental Bass, with live sessions and international guest DJs.', 'https://www.dunkelbunt.org/wp-content/uploads/FaniaLive_12-13.jpg', 250, 'contact@fanialive.at', 'Fanialive', 'U-Bahnbogen 22+23', '1080 - Wien', 'https://www.facebook.com/events/733018753881198/', 'Party'),
(11, 'test', '2019-12-19 19:30:00', 'test', 'test', 16000, 'test', 'test', 'test', 'test', 'test', 'test'),
(12, 'test', '2019-12-19 19:30:00', 'test', 'test', 16000, 'test', 'test', 'test', 'test', 'test', 'test');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `events`
--
ALTER TABLE `events`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
