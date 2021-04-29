-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2021 at 09:27 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moofy_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id_history` bigint(20) NOT NULL,
  `id_user` bigint(20) NOT NULL,
  `genre` varchar(12) NOT NULL,
  `id_movie` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id_history`, `id_user`, `genre`, `id_movie`) VALUES
(1, 1, 'thriller', 68),
(2, 1, 'mystery', 68),
(3, 1, 'adventure', 8),
(4, 1, 'action', 8),
(5, 1, 'anime', 8),
(6, 2, 'fiction', 1),
(7, 2, 'adventure', 1),
(8, 2, 'sci-fi', 1),
(9, 2, 'adventure', 3),
(10, 2, 'action', 3),
(11, 2, 'sci-fi', 3),
(12, 2, 'adventure', 31),
(13, 2, 'action', 31),
(14, 2, 'fantasy', 31),
(15, 2, 'adventure', 36),
(16, 2, 'action', 36),
(17, 2, 'sci-fi', 36),
(18, 2, 'fantasy', 53),
(19, 2, 'drama', 53),
(20, 2, 'romance', 53),
(21, 2, 'fiction', 2),
(22, 2, 'action', 2),
(23, 2, 'sci-fi', 2),
(24, 2, 'adventure', 7),
(25, 2, 'action', 7),
(26, 2, 'sci-fi', 7),
(27, 2, 'adventure', 26),
(28, 2, 'action', 26),
(29, 2, 'sci-fi', 26),
(30, 2, 'adventure', 6),
(31, 2, 'action', 6),
(32, 2, 'anime', 6),
(33, 5, 'adventure', 7),
(34, 5, 'action', 7),
(35, 5, 'sci-fi', 7),
(36, 2, 'action', 18),
(37, 2, 'thriller', 18),
(38, 2, 'horror', 87),
(39, 2, 'fantasy', 87),
(40, 2, 'mystery', 87),
(41, 2, 'adventure', 10),
(42, 2, 'action', 10),
(43, 2, 'sci-fi', 10),
(44, 2, 'adventure', 78),
(45, 2, 'action', 78),
(46, 2, 'drama', 78),
(47, 2, 'adventure', 20),
(48, 2, 'action', 20),
(49, 2, 'comedy', 20),
(50, 2, 'thriller', 75),
(51, 2, 'mystery', 75),
(52, 2, 'drama', 75),
(53, 1, 'adventure', 21),
(54, 1, 'action', 21),
(55, 1, 'thriller', 21);

-- --------------------------------------------------------

--
-- Table structure for table `movies1`
--

CREATE TABLE `movies1` (
  `id_movies` bigint(20) NOT NULL,
  `fiction` int(1) DEFAULT NULL,
  `adventure` int(11) DEFAULT NULL,
  `horror` int(11) DEFAULT NULL,
  `action` int(11) DEFAULT NULL,
  `thriller` int(11) DEFAULT NULL,
  `comedy` int(11) DEFAULT NULL,
  `criminal` int(11) DEFAULT NULL,
  `fantasy` int(11) DEFAULT NULL,
  `anime` int(11) DEFAULT NULL,
  `sci-fi` int(11) DEFAULT NULL,
  `mystery` int(11) DEFAULT NULL,
  `drama` int(11) DEFAULT NULL,
  `romance` int(11) DEFAULT NULL,
  `name` varchar(30) NOT NULL,
  `dir` varchar(20) NOT NULL,
  `rdate` int(11) NOT NULL,
  `description` varchar(300) NOT NULL,
  `yt_link` varchar(50) NOT NULL,
  `rating` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies1`
--

INSERT INTO `movies1` (`id_movies`, `fiction`, `adventure`, `horror`, `action`, `thriller`, `comedy`, `criminal`, `fantasy`, `anime`, `sci-fi`, `mystery`, `drama`, `romance`, `name`, `dir`, `rdate`, `description`, `yt_link`, `rating`) VALUES
(1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 'Rampage', 'rampage1.jpg', 2018, 'When three different animals become infected with a dangerous pathogen, a primatologist and a geneticist team up to stop them from destroying Chicago.', 'https://youtube.com/embed/coOKvrsmQiI', 6.1),
(2, 1, 0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 'Black Panther', 'blackpanther.jpg', 2017, 'T\'Challa, heir to the hidden but advanced kingdom of Wakanda, must step forward to lead his people into a new future and must confront a challenger from his country\'s past.', 'https://youtube.com/embed/xjDjIWPwcPU', 7.3),
(3, 0, 1, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 'Spiderman - Home Coming', 'spiderman.jpg', 2017, 'Peter Parker balances his life as an ordinary high school student in Queens with his superhero alter-ego Spider-Man, and finds himself on the trail of a new menace prowling the skies of New York City.', 'https://youtube.com/embed/39udgGPyYMg', 7.4),
(4, 0, 1, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 'Jumanji', 'jumanji.jpg', 2017, 'Four teenagers are sucked into a magical video game, and the only way they can escape is to work together to finish the game.', 'https://youtube.com/embed/2QKg5SZ_35I', 6.9),
(5, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 'The Conjuring', 'coonjuring.jpg', 2013, 'Paranormal investigators Ed and Lorraine Warren work to help a family terrorized by a dark presence in their farmhouse.', 'https://youtube.com/embed/k10ETZ41q5o', 7.5),
(6, 0, 1, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 'Naruto Road To Ninja', 'naruto.jpg', 2013, 'Naruto and Sakura are captured in a parallel world by Madara, who\'s intentions are to steal the Nine Tails from Naruto.', 'https://youtube.com/embed/klSvCSxFZzY ', 7.7),
(7, 0, 1, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 'Avengers - Infinity War', 'infinitywar.jpg', 2018, 'The Avengers and their allies must be willing to sacrifice all in an attempt to defeat the powerful Thanos before his blitz of devastation and ruin puts an end to the universe.', 'https://youtube.com/embed/6ZfuNTqbHE8', 8.4),
(8, 0, 1, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 'Naruto Last Movie ', 'narutolast.jpg', 2021, 'Hinata Hyuga\'s younger sister has been kidnapped, so Naruto must do what he can to save her.', 'https://youtube.com/embed/tA3yE4_t6SY', 7.6),
(9, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 'Every Breath You Take', 'ebyt.jpg', 2021, 'A psychiatrist, whose client commits suicide, finds his family life disrupted after introducing her surviving brother to his wife and daughter.', 'https://youtube.com/embed/tlMByNo3g8M', 5.8),
(10, 0, 1, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 'Vanquisher', 'vanquisher.jpg', 2021, 'Sector 70 is a noir-ish dystopian future where prosperity belongs to the few - and those determined to take it.', 'https://youtube.com/embed/3wCfCJIpi8M', 5.5),
(11, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Virus Shark', 'virusshark.jpg', 2021, 'The world is ravaged by a new virus, SHVID-1, spread by a shark bite. At the bottom of the ocean, a group of scientists are racing against the clock to find a cure.', 'https://youtube.com/embed/Pl3KS9iwUIA', 6.1),
(12, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Jakobs Wife ', 'jakobs.jpeg', 2021, 'Anne, married to a small-town Minister, feels her life has been shrinking over the past 30 years. Encountering The Master brings her a new sense of power and an appetite to live bolder. However, the change comes with a heavy body count.', 'https://youtube.com/embed/xA8ALfbP_hA', 7.8),
(13, 0, 1, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 'Mortal Kombat', 'mortalkombat.jpg', 2021, 'MMA fighter Cole Young seeks out Earth\'s greatest champions in order to stand against the enemies of Outworld in a high stakes battle for the universe.', 'https://youtube.com/embed/QJHY4ggYCk4', 7.5),
(14, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 'We Broke Up', 'wbu.jpg', 2021, 'Lori and Doug, a longtime couple who break up just days before Lori\'s little sister Bea\'s wedding to Jayson.', 'https://youtube.com/embed/s3BmWaO0d6Q', 7.7),
(15, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 'Spiral', 'spiral.jpg', 2021, 'A criminal mastermind unleashes a twisted form of justice in Spiral, the terrifying new chapter from the book of Saw.', 'https://youtube.com/embed/gzy6ORqE9IY', 7.2),
(16, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 'Cruella', 'cruella.jpg', 2021, 'A live-action prequel feature film following a young Cruella de Vil.', 'https://youtube.com/embed/gmRKv7n2If8', 7.6),
(17, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 'We Are The Millers', 'watm.jpg', 2012, 'A veteran pot dealer creates a fake family as part of his plan to move a huge shipment of weed into the U.S. from Mexico.', 'https://youtube.com/embed/0Vsy5KzsieQ', 7.1),
(18, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 'Wrath of Man', 'wrathman.jpg', 2021, 'The plot follows H, a cold and mysterious character working at a cash truck company responsible for moving hundreds of millions of dollars around Los Angeles each week.', 'https://youtube.com/embed/my4eXuV0MbI', 6.4),
(19, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 1, 'Emma', 'emma.jpg', 2019, 'In 1800s England, a well meaning but selfish young woman meddles in the love lives of her friends.', 'https://youtube.com/embed/qsOwj0PR5Sk', 6.9),
(20, 0, 1, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 'Deadpool', 'deadpool.jpg', 2016, 'A wisecracking mercenary gets experimented on and becomes immortal but ugly, and sets out to track down the man who ruined his looks.', 'https://youtube.com/embed/ONHBaC-pfsk', 7.8),
(21, 0, 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 'No Time To Die', 'notime.png', 2021, 'James Bond has left active service. His peace is short-lived when Felix Leiter, an old friend from the CIA, turns up asking for help, leading Bond onto the trail of a mysterious villain armed with dangerous new technology.', 'https://youtube.com/embed/BIhNsAtPbPI', 7.1),
(22, 0, 1, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 'Black Widow', 'blackwidow.jpg', 2021, 'A film about Natasha Romanoff in her quests between the films Civil War and Infinity War.', 'https://youtube.com/embed/ybji16u608U', 7.7),
(23, 0, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, 1, 0, 'Joker', 'joker.jpg', 2019, 'In Gotham City, mentally troubled comedian Arthur Fleck is disregarded and mistreated by society. He then embarks on a downward spiral of revolution and bloody crime.', 'https://youtube.com/embed/zAGVQLHvwOY', 7.9),
(24, 0, 1, 0, 1, 0, 0, 0, 1, 0, 1, 0, 0, 0, 'Star Wars : The Rise Skywalker', 'starwars.jpg', 2019, 'The surviving members of the resistance face the First Order once again, and the legendary conflict between the Jedi and the Sith reaches its peak bringing the Skywalker saga to its end.', 'https://youtube.com/embed/8Qn_spdM5Zg', 7.4),
(25, 0, 1, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 'Terminator', 'terminator.jpg', 2019, 'After volunteering to participate in a crossword solving competition with a new supercomputer, crossword puzzle editor Tess Harper finds herself swept up into the investigation of the bizarre murder of the tech CEO.', 'https://youtube.com/embed/jCyEX6u-Yhs', 6.8),
(26, 0, 1, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 'Captain Marvel', 'captainmarvel.jpg', 2019, 'Carol Danvers becomes one of the universe\'s most powerful heroes when Earth is caught in the middle of a galactic war between two alien races.', 'https://youtube.com/embed/Z1BCujX3pw8', 7.9),
(27, 0, 1, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 'Jurrasic Park : Dominon', 'jp.jpg', 2021, 'A decidedly odd couple with ulterior motives convince Dr. Grant to go to Isla Sorna for a holiday, but their unexpected landing startles the island\'s new inhabitants.', 'https://youtube.com/embed/lVYwe2htD-s', 7.3),
(28, 0, 1, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 'Ant-Man', 'antman.jpg', 2015, 'Armed with a super-suit with the astonishing ability to shrink in scale but increase in strength, cat burglar Scott Lang must embrace his inner hero and help his mentor, Dr. Hank Pym, plan and pull off a heist that will save the world.', 'https://youtube.com/embed/pWdKf3MneyI', 7.9),
(29, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 'Marry Poppins : Return', 'marry.jpg', 2018, 'A few decades after her original visit, Mary Poppins, the magical nanny, returns to help the Banks siblings and Michael\'s children through a difficult time in their lives.', 'https://youtube.com/embed/-3jsfXDZLIY', 6.5),
(30, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 'The Gods Must Be Crazy', 'tgmbc.jpg', 1980, 'A comic allegory about a traveling Bushman who encounters modern civilization and its stranger aspects, including a clumsy scientist and a band of revolutionaries.', 'https://youtube.com/embed/WGpvpuNNWPk', 7.2),
(31, 0, 1, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 'Zack Synders Justice League', 'justiceleague.jpg', 2021, 'Determined to ensure Superman\'s ultimate sacrifice was not in vain, Bruce Wayne aligns forces with Diana Prince with plans to recruit a team of metahumans to protect the world from an approaching threat of catastrophic proportions.', 'https://youtube.com/embed/vM-Bja2Gy04', 8.2),
(32, 0, 0, 0, 1, 1, 0, 0, 0, 0, 1, 0, 0, 0, 'Godzilla vs Kong', 'godzilla.png', 2021, 'The epic next chapter in the cinematic Monsterverse pits two of the greatest icons in motion picture history against one another', 'https://youtube.com/embed/odM92ap8_c0', 6.9),
(33, 0, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, 1, 0, 'Promising Young Woman', 'promisingyoung.jpg', 2020, 'A young woman, traumatized by a tragic event in her past, seeks out vengeance against those who crossed her path.', 'https://youtube.com/embed/6sxCFZ8_d84', 7.5),
(34, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 'Nomadland', 'nomadland.jpg', 2020, 'After losing everything in the Great Recession, a woman embarks on a journey through the American West, living as a van-dwelling modern-day nomad.', 'https://youtube.com/embed/6sxCFZ8_d84', 7.6),
(35, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 1, 0, 'Avengers : End Game', 'Endgame.jpg', 2019, 'After the devastating events of�Avengers: Infinity War�(2018), the universe is in ruins.', 'https://youtube.com/embed/TcMBFSGVi1c', 8.4),
(36, 0, 1, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 'Man Of Steel', 'manofsteel.jpg', 2013, 'An alien child is evacuated from his dying world and sent to Earth to live among humans.', 'https://youtube.com/embed/T6DJcgm3wNY', 7),
(37, 0, 0, 0, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 'I Care A Lot', 'icarealot.jpg', 2020, 'A crooked legal guardian who drains the savings of her elderly wards meets her match when a woman she tries to swindle turns out to be more than she first appears.', 'https://youtube.com/embed/D40uHmTSPew', 6.2),
(38, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 'Four Good Days', 'fourgooddays.jpg', 2020, 'A mother helps her daughter work through four crucial days of recovery from substance abuse.', 'https://youtube.com/embed/uDDCulgiqs4', 6.3),
(39, 0, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, 1, 0, 'The Little Things', 'thelittlethings.jpeg', 2021, 'Kern County Deputy Sheriff Joe Deacon is sent to Los Angeles for what should have been a quick evidence-gathering assignment.', 'https://youtube.com/embed/QXpxUeL0lz4', 6.3),
(40, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 1, 0, 'News of The World', 'newsoftheworld.jpg', 2020, 'A Civil War veteran agrees to deliver a girl, taken by the Kiowa people years ago, to her aunt and uncle, against her will.', 'https://youtube.com/embed/zTZDb_iKooI', 6.8),
(41, 0, 1, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 'Monster Hunter', 'monsterhunter.jpg', 2020, 'When Lt. Artemis and her loyal soldiers are transported to a new world, they engage in a desperate battle for survival against enormous enemies with incredible powers.', 'https://youtube.com/embed/3od-kQMTZ9M', 5.3),
(42, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 1, 0, 'Moolys Game', 'moolys.jpg', 2017, 'The true story of Molly Bloom, an Olympic-class skier who ran the world\'s most exclusive high-stakes poker game and became an FBI target.', 'https://youtube.com/embed/Vu4UPet8Nyc', 7.4),
(43, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 1, 0, 'Blade Runner', 'bladerunner.jpg', 2017, 'Young Blade Runner K\'s discovery of a long-buried secret leads him to track down former Blade Runner Rick Deckard, who\'s been missing for thirty years.', 'https://youtube.com/embed/gCcx85zbxz4', 8.1),
(44, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 1, 'Happily', 'happily.jpg', 2021, 'A dark romantic comedy. Tom and Janet have been happily married for years.', 'https://youtube.com/embed/nagyNvw5Dmk', 5.3),
(45, 0, 0, 0, 1, 0, 0, 1, 0, 1, 0, 0, 0, 0, 'Detective Conan : The Scarlett', 'conanscarlet.jpg', 2021, 'Japan is celebrating the upcoming World Sports Games, the world\'s largest sporting event, in Tokyo.', 'https://youtube.com/embed/Z140FfWSfYE', 7.4),
(46, 0, 1, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 'Birds of Prey', 'birdsofprey.jpg', 2020, 'After splitting with the Joker, Harley Quinn joins superheroes Black Canary, Huntress and Renee Montoya to save a young girl from an evil crime lord.', 'https://youtube.com/embed/kGM4uYZzfu0', 6.1),
(47, 0, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 'The Hunt', 'thehunt.png', 2020, 'Twelve strangers wake up in a clearing. They don\'t know where they are, or how they got there.', 'https://youtube.com/embed/Mfqo5_R2Ny8', 6.5),
(48, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 'Toy Story 4', 'toystory.jpg', 1995, 'A cowboy doll is profoundly threatened and jealous when a new spaceman figure supplants him as top toy in a boy\'s room.', 'https://youtube.com/embed/rNk1Wi8SvNc', 8.3),
(49, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 'Toy Story 3', 'toystory3.jpg', 2010, 'The toys are mistakenly delivered to a day-care center instead of the attic right before Andy leaves for college, and it\'s up to Woody to convince the other toys that they weren\'t abandoned and to return home.', 'https://youtube.com/embed/JcpWXaA2qeg', 8.2),
(50, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 'Finding Nemo', 'findingnemo.jpg', 2001, 'After his son is captured in the Great Barrier Reef and taken to Sydney, a timid clownfish sets out on a journey to bring him home.', 'https://youtube.com/embed/wZdpNglLbt8', 8.1),
(51, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 'Insidious', 'insidious.jpg', 2010, 'A family looks to prevent evil spirits from trapping their comatose child in a realm called The Further.', 'https://youtube.com/embed/zuZnRUcoWos', 6.8),
(52, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 'Titanic', 'titanic.jpg', 1997, 'A seventeen-year-old aristocrat falls in love with a kind but poor artist aboard the luxurious, ill-fated R.M.S. Titanic.', 'https://youtube.com/embed/jUm88F3MEbQ', 7.8),
(53, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 1, 'Twilight', 'twilight.jpg', 2008, 'When Bella Swan moves to a small town in the Pacific Northwest, she falls in love with Edward Cullen, a mysterious classmate who reveals himself to be a 108-year-old vampire.', 'https://youtube.com/embed/uxjNDE2fMjI', 5.2),
(54, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 1, 0, 'A Quiet Place', 'quietplace.jpg', 2018, 'In a post-apocalyptic world, a family is forced to live in silence while hiding from monsters with ultra-sensitive hearing.', 'https://youtube.com/embed/WR7cc5t7tv8', 7.5),
(55, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 'Aquaman', 'aquaman.jpg', 2018, 'Arthur Curry, the human-born heir to the underwater kingdom of Atlantis, goes on a quest to prevent a war between the worlds of ocean and land.', 'https://youtube.com/embed/2wcj6SrX4zw', 6.9),
(56, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 1, 0, 'Rush', 'rush.jpg', 2013, 'The merciless 1970s rivalry between Formula One rivals James Hunt and Niki Lauda.', 'https://youtube.com/embed/lzNbGH1oZJc', 8.1),
(57, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 1, 0, 'Gone Girl', 'gonegirl.jpg', 2014, 'With his wife\'s disappearance having become the focus of an intense media circus, a man sees the spotlight turned on him when it\'s suspected that he may not be innocent.', 'https://youtube.com/embed/esGn-xKFZdU', 8.1),
(58, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 'Moana', 'moana.jpg', 2016, 'In Ancient Polynesia, when a terrible curse incurred by the Demigod Maui reaches Moana\'s island, she answers the Ocean\'s call to seek out the Demigod to set things right.', 'https://youtube.com/embed/LKFuXETZUsI', 7.6),
(59, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 'Hereditary', 'hereditary.jpg', 2018, 'A grieving family is haunted by tragic and disturbing occurrences.', 'https://youtube.com/embed/V6wWKNij_1M', 7.3),
(60, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 'It Follows', 'itfollows.jpg', 2014, 'A young woman is followed by an unknown supernatural force after a sexual encounter.', 'https://youtube.com/embed/51941G1GeTA', 6.8),
(61, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 'The Visit', 'thevisit.jpg', 2015, 'Two siblings become increasingly frightened by their grandparents\' disturbing behavior while visiting them on vacation.', 'https://youtube.com/embed/YfQnRjkuvaY', 6.2),
(62, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 'The Kissing Both', 'kissingboth.jpg', 2018, 'A high school student is forced to confront her secret crush at a kissing booth.', 'https://youtube.com/embed/qelSQce80i8', 6),
(63, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 1, 'Crazy Rich Asians', 'crazyrich.jpg', 2018, 'This contemporary romantic comedy, based on a global bestseller, follows native New Yorker Rachel Chu to Singapore to meet her boyfriend\'s family.', 'https://youtube.com/embed/ZQ-YX-5bAs0', 6.9),
(64, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 'The Boss Baby', 'thebossbaby.jpg', 2017, 'A suit-wearing, briefcase-carrying baby pairs up with his 7-year old brother to stop the dastardly plot of the CEO of Puppy Co.', '\r\nhttps://youtube.com/embed/Ud8j5GaqH3c', 6.3),
(65, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 'Beauty and the Beast', 'thebeast.jpg', 2017, 'A selfish Prince is cursed to become a monster for the rest of his life, unless he learns to fall in love with a beautiful young woman he keeps prisoner.', 'https://youtube.com/embed/e3Nl_TCQXuw', 7.1),
(66, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 1, 0, 'Knives Out', 'knivesout.jpg', 2019, 'A detective investigates the death of a patriarch of an eccentric, combative family.', 'https://youtube.com/embed/xi-1NchUqMA', 7.9),
(67, 0, 0, 0, 0, 1, 0, 1, 0, 0, 0, 1, 0, 0, 'The Raven', 'theraven.jpg', 2012, 'When a madman begins committing horrific murders inspired by Edgar Allan Poe\'s works, a young Baltimore detective joins forces with Poe to stop him from making his stories a reality.', 'https://youtube.com/embed/XMG9HawX1do', 6.4),
(68, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 'Shutter Island', 'shutterisland.jpg', 2010, 'In 1954, a U.S. Marshal investigates the disappearance of a murderer who escaped from a hospital for the criminally insane.', 'https://youtube.com/embed/5iaYLCiq5RM', 8.2),
(69, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 1, 0, 'Prisoners', 'prisoners.jpg', 2013, 'When Keller Dover\'s daughter and her friend go missing, he takes matters into his own hands as the police pursue multiple leads and the pressure mounts.', 'https://youtube.com/embed/K-qBuyssGrE', 8.1),
(70, 0, 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 'Fast & Furious Presents: Hobbs', 'fastfurious.jpg', 2019, 'Lawman Luke Hobbs (Dwayne The Rock Johnson) and outcast Deckard Shaw (Jason Statham) form an unlikely alliance when a cyber-genetically enhanced villain threatens the future of humanity.', 'https://youtube.com/embed/9SA7FaKxZVI', 6.4),
(71, 0, 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 'Mission: Impossible - Fallout ', 'mimpossible.jpg', 2018, 'Ethan Hunt and his IMF team, along with some familiar allies, race against time after a mission gone wrong.', 'https://youtube.com/embed/wb49-oV0F78', 7.7),
(72, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 'Despicable Me', 'despicableme.jpg', 2010, 'When a criminal mastermind uses a trio of orphan girls as pawns for a grand scheme, he finds their love is profoundly changing him for the better.', 'https://youtube.com/embed/zzCZ1W_CUoI', 7.6),
(73, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Angry Birds', 'angrybirds.jpg', 2016, 'When an island populated by happy, flightless birds is visited by mysterious green piggies, it\'s up to three unlikely outcasts - Red, Chuck and Bomb - to figure out what the pigs are up to.', 'https://youtube.com/embed/QRmKa7vvct4', 6.3),
(74, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 'Dolittle', 'dolittle.jpg', 2020, 'A physician who can talk to animals embarks on an adventure to find a legendary island with a young apprentice and a crew of strange pets.', 'https://youtube.com/embed/FEf412bSPLs', 5.6),
(75, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 1, 0, 'Lost Girls', 'lostgirls.jpg', 2020, 'When Mari Gilbert\'s daughter disappears, police inaction drives her own investigation into the gated Long Island community where Shannan was last seen. Her search brings attention to over a dozen murdered sex workers.', 'https://youtube.com/embed/UJzGE00wncU', 6.1),
(76, 0, 0, 0, 0, 0, 0, 0, 1, 0, 1, 0, 1, 0, 'The Midnight Sky', 'midnightsky.jpg', 2020, 'This post-apocalyptic tale follows Augustine, a lonely scientist in the Arctic, as he races to stop Sully and her fellow astronauts from returning home to a mysterious global catastrophe.', 'https://youtube.com/embed/68IrHptBwQs', 5.6),
(77, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 1, 0, 0, 'The Maze Runner', 'mazerunner.jpg', 2014, 'Thomas is deposited in a community of boys after his memory is erased, soon learning they\'re all trapped in a maze that will require him to join forces with fellow runners for a shot at escape.', 'https://youtube.com/embed/AwwbhhjQ9Xk', 6.8),
(78, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 1, 0, 'Alpha', 'alpha.jpg', 2018, 'In the prehistoric past, a young man struggles to return home after being separated from his tribe during a buffalo hunt. He finds a similarly lost wolf companion and starts a friendship that would change humanity.', 'https://youtube.com/embed/uIxnTi4GmCo', 6.7),
(79, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 'The Jungle Book', 'junglebook.jpg', 2016, 'After a threat from the tiger Shere Khan forces him to flee the jungle, a man-cub named Mowgli embarks on a journey of self discovery with the help of panther Bagheera and free-spirited bear Baloo.', 'https://youtube.com/embed/5mkm22yO-bs', 7.4),
(80, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 1, 0, 'Extinction', 'extinction.jpg', 2018, 'A father has a recurring dream of losing his family. His nightmare turns into reality when the planet is invaded by a force bent on destruction. Fighting for their lives, he comes to realize an unknown strength to keep them safe from harm.', 'https://youtube.com/embed/AKS9-MNIhv4', 5.8),
(81, 0, 0, 0, 1, 1, 0, 0, 0, 0, 1, 0, 0, 0, 'Geostrom', 'geostorm.jpg', 2017, 'When the network of satellites designed to control the global climate starts to attack Earth, it\'s a race against the clock for its creator to uncover the real threat before a worldwide Geostorm wipes out everything and everyone.', 'https://youtube.com/embed/Qz8cjvKJLuw', 5.3),
(82, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 'Brightburn', 'brightburn.jpg', 2019, 'What if a child from another world crash-landed on Earth, but instead of becoming a hero to mankind, he proved to be something far more sinister?', 'https://youtube.com/embed/g6eB0JT1DI4', 6.1),
(83, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 'Split', 'split.jpg', 2016, 'Three girls are kidnapped by a man with a diagnosed 23 distinct personalities. They must try to escape before the apparent emergence of a frightful new 24th.', 'https://youtube.com/embed/5VSFwKL93S0', 7.3),
(84, 0, 1, 0, 0, 0, 0, 0, 0, 0, 1, 0, 1, 0, 'IO', 'io.jpg', 2019, 'As a young scientist searches for a way to save a dying Earth, she finds a connection with a man who\'s racing to catch the last shuttle off the planet.', 'https://youtube.com/embed/_tXAE3UGl_0', 4.7),
(85, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 'Friday The 13th', 'friday.jpg', 2009, 'A group of young adults visit a boarded up campsite named Crystal Lake where they soon encounter the mysterious Jason Voorhees and his deadly intentions.', 'https://youtube.com/embed/4-BTxXm8KSg', 5.5),
(86, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 'The Nun', 'thenun.jpg', 2018, 'A priest with a haunted past and a novice on the threshold of her final vows are sent by the Vatican to investigate the death of a young nun in Romania and confront a malevolent force in the form of a demonic nun.', 'https://youtube.com/embed/EQRFgGwGeok', 5.3),
(87, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 1, 0, 0, 'The Grudge', 'thegrudge.jpg', 2020, 'A house is cursed by a vengeful ghost that dooms those who enter it with a violent death.', 'https://youtube.com/embed/O2NKzO-fxwQ', 4.3),
(88, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 'Five Feet Apart', 'feetapart.jpg', 2019, 'A pair of teenagers with cystic fibrosis meet in a hospital and fall in love, though their disease means they must avoid close physical contact.', 'https://youtube.com/embed/5cJ7MT1RTqs', 7.2),
(89, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 'Midnightsun', 'midnightsun.jpg', 2018, 'A 17-year-old girl suffers from a condition that prevents her from being out in the sunlight.', 'https://youtube.com/embed/fEskVQgtwaI', 6.6),
(90, 0, 0, 1, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 'Underwater', 'underwater.jpg', 2020, 'A crew of oceanic researchers working for a deep sea drilling company try to get to safety after a mysterious earthquake devastates their deepwater research and drilling facility located at the bottom of the Mariana Trench.', 'https://youtube.com/embed/tFzFgGGnKu4', 5.8),
(91, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 'Bird Box', 'birdbox.jpg', 2018, 'Five years after an ominous unseen presence drives most of society to suicide, a mother and her two children make a desperate bid to reach safety.', 'https://youtube.com/embed/o2AsIXSh2xo', 6.6),
(92, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 1, 0, 'Cargo', 'cargo.jpg', 2017, 'After an epidemic spreads all over Australia, a father searches for someone willing to protect his daughter.', 'https://youtube.com/embed/VFnS_qGqNUs', 6.3),
(93, 0, 0, 1, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 'Don\'t Breathe', 'dontbreathe.jpg', 2016, 'Hoping to walk away with a massive fortune, a trio of thieves break into the house of a blind man who isn\'t as helpless as he seems.', 'https://youtube.com/embed/76yBTNDB6vU', 7.1),
(94, 0, 0, 0, 1, 0, 0, 1, 0, 0, 1, 0, 0, 0, 'Project Power', 'projectpower.jpg', 2020, 'When a pill that gives its users unpredictable superpowers for five minutes hits the streets of New Orleans, a teenage dealer and a local cop must team with an ex-soldier to take down the group responsible for its creation.', 'https://youtube.com/embed/VVCBR8QygRI', 6),
(95, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 'Annihilation', 'annihilation.jpg', 2018, 'A biologist signs up for a dangerous, secret expedition into a mysterious zone where the laws of nature don\'t apply.', 'https://youtube.com/embed/89OP78l9oF0', 6.8),
(96, 0, 1, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 'Inception', 'inception.jpg', 2010, 'A thief who steals corporate secrets through the use of dream-sharing technology is given the inverse task of planting an idea into the mind of a C.E.O.', 'https://youtube.com/embed/8hP9D6kZseM', 8.8),
(97, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 1, 0, 'Beyond Skyline', 'beyondskyline.jpg', 2017, 'A tough-as-nails detective embarks on a relentless pursuit to free his son from a nightmarish alien warship.', 'https://youtube.com/embed/M2w1HMGaqFM', 5.3),
(98, 0, 1, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 'Doctor Strange ', 'doctorstrange.jpg', 2016, 'While on a journey of physical and spiritual healing, a brilliant neurosurgeon is drawn into the world of the mystic arts.', 'https://youtube.com/embed/MWRUNTLisPo', 7.5),
(99, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 1, 0, 'Arrival', 'arrival.jpg', 2016, 'A linguist works with the military to communicate with alien lifeforms after twelve mysterious spacecraft appear around the world.', 'https://youtube.com/embed/7W1m5ER3I1Y', 7.9),
(100, 0, 1, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 'The Predator', 'thepredator.jpg', 2018, 'When a young boy accidentally triggers the universe\'s most lethal hunters\' return to Earth, only a ragtag crew of ex-soldiers and a disgruntled scientist can prevent the end of the human race.', 'https://youtube.com/embed/AAJ2LVVgqVo', 5.3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'faldi', 'faldi@gmail.com', 'default.jpg', '202cb962ac59075b964b07152d234b70', 2, 1, 1617874748),
(2, 'Rizky Asep Sutrisna', 'asep@asep.com', 'default.jpg', '202cb962ac59075b964b07152d234b70', 2, 1, 1617960192),
(3, 'Rizky Asep Sutrisna', 'asep@gmail.com', 'default.jpg', '$2y$10$iTwB1ASGHCY1nFk7RfY.8OLQ7Q8lxTEu/D3MHRYhNWG0MIT.BiT.m', 1, 1, 1617962423),
(4, 'andi', 'andi@andi.com', 'default.jpg', '$2y$10$aPx5Q./9fG7wgrBejy0MIOFyavlVYNMRTSmr2Jg48vLJpjBRa1odq', 1, 1, 1618011118),
(5, 'rafi', 'rafi@gmail.com', 'default.jpg', 'b2f0d9e408eccecc0edb74d654d36a72', 2, 1, 1618015132),
(6, 'rafi', 'rafiadmin@gmail.com', 'default.jpg', '$2y$10$pXR1o5hAIxPmkR8RaVRcdOGYF8ok9tF507KqBgS17TIH/D.kNn/nC', 1, 1, 1618015212),
(7, 'dadi', 'dadi@dadi.com', 'default.jpg', '$2y$10$N3lLWdRfJ0s/2ycfKz5OFeDTCiEJBRqz3TKwSMb47TXzdC1MkE.8O', 1, 1, 1618133922),
(8, 'dadi', 'dadi@gmail.com', 'default.jpg', '202cb962ac59075b964b07152d234b70', 2, 1, 1618135241);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id_history`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id_history` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
