-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2014 at 05:51 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `meteora`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `type` int(11) NOT NULL,
  `image_small` varchar(255) NOT NULL,
  `image_large` varchar(255) NOT NULL,
  `image_mobile` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `type` (`type`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=103 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `description`, `type`, `image_small`, `image_large`, `image_mobile`) VALUES
(83, 'Officiis tempora est aperiam.', 'Vel est voluptas eum unde dignissimos similique eos cupiditate aut labore sint pariatur temporibus id pariatur qui autem praesentium cupiditate alias magni voluptatum quod recusandae magni repellat nihil fugit incidunt quos.', 2, 'http://lorempixel.com/350/270/technics/', 'http://lorempixel.com/650/450/technics/', 'http://lorempixel.com/350/450/technics/'),
(84, 'Odio et laborum perspiciatis.', 'Sit magnam delectus tempora consequatur quia optio sequi nulla odit alias aliquam quasi molestias id quo vel pariatur similique perspiciatis perspiciatis architecto odit dolores odit pariatur ipsum est est ut reprehenderit illum magnam corporis.', 1, 'http://lorempixel.com/350/270/technics/', 'http://lorempixel.com/650/450/technics/', 'http://lorempixel.com/350/450/technics/'),
(85, 'Deleniti amet nam vero.', 'Eaque voluptatibus nostrum enim esse vel voluptatem harum voluptatem fuga doloremque cumque enim rerum corporis rerum ut laboriosam sed eligendi tenetur doloribus quas iste sit a sint et.', 1, 'http://lorempixel.com/350/270/technics/', 'http://lorempixel.com/650/450/technics/', 'http://lorempixel.com/350/450/technics/'),
(86, 'Rem et exercitationem et aliquid.', 'Magnam rerum ea harum quam ea ea error ratione qui facere ducimus corporis totam eum at facilis est voluptatem ut vel laboriosam dicta qui omnis fugit voluptatem repudiandae dolor inventore facere recusandae et fuga omnis illo aspernatur id dolore est officia dolorem impedit voluptatibus voluptate voluptas dolor maxime rem omnis et.', 3, 'http://lorempixel.com/350/270/technics/', 'http://lorempixel.com/650/450/technics/', 'http://lorempixel.com/350/450/technics/'),
(87, 'Autem beatae ad et tempore.', 'Autem quis quos recusandae quae exercitationem qui facilis voluptatibus qui alias repellendus voluptatem corporis qui veritatis corrupti quia ut voluptates dolorem ullam quibusdam in exercitationem ut doloremque est ullam et et quia molestiae omnis voluptatem laborum nisi accusantium dolorum pariatur.', 2, 'http://lorempixel.com/350/270/technics/', 'http://lorempixel.com/650/450/technics/', 'http://lorempixel.com/350/450/technics/'),
(88, 'Repellat eaque impedit suscipit.', 'Labore dolor nemo vel quia aspernatur ut sed occaecati earum pariatur voluptas necessitatibus minima recusandae harum accusamus voluptatem iusto reprehenderit animi molestiae quia alias quaerat voluptatibus et nulla eos reprehenderit ex accusantium sed aut cum.', 1, 'http://lorempixel.com/350/270/technics/', 'http://lorempixel.com/650/450/technics/', 'http://lorempixel.com/350/450/technics/'),
(89, 'Tempora sint impedit.', 'Quasi ipsam qui excepturi et nisi suscipit eum et hic id placeat delectus autem dolorem quisquam provident ipsa et totam cupiditate repudiandae eos ut esse est ut omnis ullam laudantium nisi ipsam ducimus qui est dignissimos omnis a qui qui est facilis eos ut quibusdam et in quis alias ad in enim omnis facilis.', 3, 'http://lorempixel.com/350/270/technics/', 'http://lorempixel.com/650/450/technics/', 'http://lorempixel.com/350/450/technics/'),
(90, 'Itaque quae.', 'Dolorem vitae sed dolores facilis impedit ipsum vero mollitia iste sit iure asperiores voluptates sit facilis qui officia eius inventore qui quia a tempore totam est distinctio repellat accusantium id et ab quo nam natus laborum corporis quo nihil voluptas rerum vel qui fugiat eius id.', 2, 'http://lorempixel.com/350/270/technics/', 'http://lorempixel.com/650/450/technics/', 'http://lorempixel.com/350/450/technics/'),
(91, 'Facilis officiis fugit molestiae id.', 'Ratione dolore qui ut recusandae doloremque et nulla quidem repudiandae enim excepturi sunt quos rerum occaecati in ad molestiae amet quisquam eos perspiciatis sunt modi corporis sit quasi sed iure eum doloremque sunt quidem praesentium veniam consequatur voluptatum voluptatem eum impedit molestiae praesentium officia qui alias est aspernatur rem.', 2, 'http://lorempixel.com/350/270/technics/', 'http://lorempixel.com/650/450/technics/', 'http://lorempixel.com/350/450/technics/'),
(92, 'Repellendus odit voluptatem ipsa.', 'Exercitationem assumenda magni facilis nihil neque minus expedita dolore doloremque nulla repellendus enim quo facilis debitis quaerat molestias natus quia impedit modi est placeat maxime molestiae velit in deserunt perferendis explicabo quaerat quos maxime deserunt quod et quod assumenda qui.', 3, 'http://lorempixel.com/350/270/technics/', 'http://lorempixel.com/650/450/technics/', 'http://lorempixel.com/350/450/technics/'),
(93, 'Quam a consequatur est.', 'Est quia quia deserunt aspernatur omnis vel ut dolorum voluptatem pariatur non vero quia magnam inventore nostrum dolores ut facilis aut ad doloremque quia distinctio reiciendis voluptatibus magnam aspernatur aperiam neque temporibus nisi magnam vel ut eum ipsam ab enim ea quam sit quae porro omnis fugit modi nulla voluptas dicta omnis eius non possimus expedita.', 3, 'http://lorempixel.com/350/270/technics/', 'http://lorempixel.com/650/450/technics/', 'http://lorempixel.com/350/450/technics/'),
(94, 'Harum sit voluptatem et.', 'Ducimus sit dicta autem blanditiis architecto sint omnis unde error cumque et consequatur sint cupiditate qui similique ut et dolorem sit debitis rerum praesentium est libero odio sed iusto harum pariatur eum ad voluptates vero tempora molestias est commodi est nemo molestias a sunt.', 1, 'http://lorempixel.com/350/270/technics/', 'http://lorempixel.com/650/450/technics/', 'http://lorempixel.com/350/450/technics/'),
(95, 'Consequatur recusandae est deleniti.', 'Adipisci voluptatem est iusto provident et rerum maxime pariatur enim velit mollitia quia omnis aliquam quas ea eius dolorem et ut sit corrupti quo vel autem earum neque recusandae eveniet qui.', 3, 'http://lorempixel.com/350/270/technics/', 'http://lorempixel.com/650/450/technics/', 'http://lorempixel.com/350/450/technics/'),
(96, 'Ut enim quidem similique.', 'Similique laudantium aliquid nihil et laborum non exercitationem voluptatem nihil ut earum eveniet voluptatem qui corporis sit rerum mollitia eligendi aut sequi repellat culpa incidunt id numquam occaecati ducimus facilis est vel omnis consectetur praesentium autem quo et labore quod qui corporis incidunt eius rerum itaque accusantium aliquid deleniti placeat quas animi consequatur repellat deserunt.', 2, 'http://lorempixel.com/350/270/technics/', 'http://lorempixel.com/650/450/technics/', 'http://lorempixel.com/350/450/technics/'),
(97, 'Facilis delectus dolor.', 'Est itaque ut quibusdam necessitatibus commodi voluptatum quos aut maiores veniam dicta sapiente ipsam magnam ut at provident eos qui corrupti voluptates animi adipisci doloremque ex odio vero ratione excepturi et praesentium sequi ipsam nesciunt consequuntur iusto debitis dolor id maxime.', 1, 'http://lorempixel.com/350/270/technics/', 'http://lorempixel.com/650/450/technics/', 'http://lorempixel.com/350/450/technics/'),
(98, 'Quod amet maiores voluptatem.', 'Dolor labore velit voluptas voluptas aut ut cupiditate laboriosam dolorem at sit optio ut quia sint odit illum officia repellendus et aut sed qui est occaecati non id non dicta aut est mollitia qui occaecati.', 2, 'http://lorempixel.com/350/270/technics/', 'http://lorempixel.com/650/450/technics/', 'http://lorempixel.com/350/450/technics/'),
(99, 'Quo accusantium dolorem tempore.', 'Omnis quam et facere provident cumque quaerat inventore culpa vitae molestiae labore odio id alias aut sint qui in id cupiditate et odit voluptatem delectus in qui et aperiam et quam tempore corporis deleniti quia est labore praesentium rerum dolor est perferendis delectus ut exercitationem iusto est ut error quia repudiandae explicabo quia.', 1, 'http://lorempixel.com/350/270/technics/', 'http://lorempixel.com/650/450/technics/', 'http://lorempixel.com/350/450/technics/'),
(100, 'Consequatur quae nihil sit.', 'Quis rem eos omnis a et at labore maxime sequi et in dolor quos doloremque quis omnis et reiciendis aut ab voluptatum dolores odio mollitia sapiente cum qui enim hic aut.', 2, 'http://lorempixel.com/350/270/technics/', 'http://lorempixel.com/650/450/technics/', 'http://lorempixel.com/350/450/technics/'),
(101, 'Ullam numquam repellat.', 'Non reiciendis minima officia asperiores facere sed ducimus labore et qui corporis cupiditate distinctio quia sunt optio repudiandae eos incidunt dicta dicta quasi dignissimos facilis et totam consequatur cupiditate quia asperiores reprehenderit cumque ab soluta blanditiis eligendi.', 3, 'http://lorempixel.com/350/270/technics/', 'http://lorempixel.com/650/450/technics/', 'http://lorempixel.com/350/450/technics/'),
(102, 'Quasi dolores incidunt.', 'Qui iste aspernatur et magnam molestiae qui sequi aut quia ut excepturi enim placeat eum occaecati autem non rerum minus ipsa ad ut consequatur voluptas sunt non aut cumque explicabo nostrum molestiae ut laudantium reprehenderit voluptas ut eligendi ut laudantium.', 1, 'http://lorempixel.com/350/270/technics/', 'http://lorempixel.com/650/450/technics/', 'http://lorempixel.com/350/450/technics/');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `day` int(11) NOT NULL,
  `time` varchar(100) NOT NULL,
  `onstage` int(11) DEFAULT NULL,
  `offstage` int(11) DEFAULT NULL,
  `ground` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `onstage` (`onstage`),
  KEY `offstage` (`offstage`),
  KEY `ground` (`ground`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE IF NOT EXISTS `team` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `description` text,
  `post` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=143 ;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `phone`, `description`, `post`, `image`) VALUES
(133, 'Randi Jacobson', '950-196-8345', 'Consequuntur expedita et eius numquam voluptates excepturi quo natus iste beatae.', 'Quos ut amet.', 'http://lorempixel.com/120/120/people/'),
(134, 'Cleora Gorczany', '013.407.3134', 'Eveniet harum distinctio ducimus quidem et reiciendis soluta nihil qui architecto blanditiis eligendi cumque.', 'Ut impedit.', 'http://lorempixel.com/120/120/people/'),
(135, 'Ms. Kirstin Hartmann', '(534)982-695', 'Soluta sit consequatur sapiente eaque hic aliquid amet.', 'Libero veniam quia.', 'http://lorempixel.com/120/120/people/'),
(136, 'Prof. Donnie Price II', '(282)043-117', 'Recusandae quaerat perspiciatis perspiciatis enim ad expedita iste sed molestiae et ut sint.', 'Facere nam.', 'http://lorempixel.com/120/120/people/'),
(137, 'Lawrence Cronin', '(709)100-074', 'Totam error dolor cupiditate maxime velit repudiandae in eos qui officia illum.', 'Quia id exercitationem.', 'http://lorempixel.com/120/120/people/'),
(138, 'Darrel Zulauf', '544.727.6490', 'Eum quos vel ipsam deserunt ipsam vel et aut vitae odit.', 'Ad sapiente.', 'http://lorempixel.com/120/120/people/'),
(139, 'Miss Leda Ondricka MD', '433-487-3978', 'Quia est tempora quaerat amet est dolorem ratione accusantium repudiandae.', 'Odio voluptas.', 'http://lorempixel.com/120/120/people/'),
(140, 'Angelina Lubowitz', '398-714-5966', 'Consequatur iure qui sit ipsum maxime officia possimus ipsam quia doloremque ipsam architecto accusantium.', 'Deserunt voluptatem a.', 'http://lorempixel.com/120/120/people/'),
(141, 'Immanuel Blick', '(674)594-393', 'Eius at repellat odio ut tempore deserunt dolores quaerat.', 'Voluptates repellat.', 'http://lorempixel.com/120/120/people/'),
(142, 'Madisyn Quitzon', '(584)069-556', 'Suscipit voluptatem ducimus qui non nisi nam.', 'Sit ut.', 'http://lorempixel.com/120/120/people/');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE IF NOT EXISTS `type` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `name`) VALUES
(1, 'Onstage Event'),
(2, 'Offstage Event'),
(3, 'Ground Event');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`type`) REFERENCES `type` (`id`);

--
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `schedule_ibfk_1` FOREIGN KEY (`onstage`) REFERENCES `events` (`id`),
  ADD CONSTRAINT `schedule_ibfk_2` FOREIGN KEY (`offstage`) REFERENCES `events` (`id`),
  ADD CONSTRAINT `schedule_ibfk_3` FOREIGN KEY (`ground`) REFERENCES `events` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
