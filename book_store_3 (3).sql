-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Apr 25, 2017 at 05:24 AM
-- Server version: 5.5.49-log
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_store_3`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`userId`) VALUES
(69);

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE IF NOT EXISTS `author` (
  `AuthorId` int(11) NOT NULL,
  `FirstName` varchar(40) NOT NULL,
  `LastName` varchar(40) NOT NULL,
  `MiddleName` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`AuthorId`, `FirstName`, `LastName`, `MiddleName`) VALUES
(1, 'Greg ', 'Iles', ''),
(2, 'James', 'Patterson', ''),
(3, 'John', 'Grishom', ''),
(4, 'Martha Hall', 'Kelly', ''),
(5, 'Neil', 'Gaiman', ''),
(6, 'William', 'Young', 'P.'),
(7, 'Margaret', 'Atwood', 'Eleanor'),
(8, 'Megan', 'Miranda', ''),
(9, 'J.', 'Delaney', 'P.'),
(10, 'Liane', 'Moriarty', ''),
(11, 'Randy', 'White', 'Wayne'),
(12, 'Fredrik', 'Backman', ''),
(13, 'Ray', 'Bradbury', ''),
(14, 'Stephen', 'King', ''),
(15, 'Nicholas', 'Sparks', ''),
(16, 'C.', 'Box', 'J.'),
(17, 'Debbie', 'Macomber', ''),
(18, 'W. ', 'Cameron', 'Bruce'),
(19, 'Clive', 'Cussler', ''),
(20, 'Candice', 'Fox', ''),
(21, 'Bill', 'O''Reilly', ''),
(22, 'Rupi', 'Kaur', ''),
(23, 'Chip', 'Gaines', ''),
(24, 'David', 'Horowitz', ''),
(25, 'J.', 'Vance', 'D.'),
(26, 'Diane', 'Ackerman', ''),
(27, 'Mark', 'Manson', ''),
(28, 'Tony', 'Robbins', ''),
(29, 'Wizards', 'Rpg', ''),
(30, 'Melissa', 'Hartwig', ''),
(31, 'Margot', 'Shetterly', 'Lee'),
(32, 'George', 'Bush', 'W.'),
(33, 'Michael', 'Savage', ''),
(34, 'Travis', 'Stork, M.D.', ''),
(35, 'Jen', 'Sincero', ''),
(36, 'Rory', 'Feek', ''),
(37, 'Gary', 'Chapman', ''),
(38, 'Kim', 'Mohan', ''),
(39, 'Bruce', 'Feirstein', ''),
(40, 'Joanna', 'Gaines', ''),
(41, 'Mark', 'Dagostino', ''),
(42, 'Martin', 'Dugard', ''),
(43, 'Peter', 'Mallouk', ''),
(44, 'Dallas', 'Hartwig', ''),
(45, 'Richard', 'Bradford', ''),
(46, 'Alexandra', 'Grablewski', ''),
(47, 'Mike', 'Mearls', ''),
(48, 'Nicola', 'Yoon', ''),
(49, 'Liz', 'Braswell', ''),
(50, 'Victoria', 'Aveyard', ''),
(51, 'Jay', 'Asher', ''),
(52, 'Marieke', 'Nijkamp', ''),
(53, 'Lauren', 'Oliver', ''),
(54, 'Scott', 'Crawthon', ''),
(55, 'Angie', 'Thomas', ''),
(56, 'Brittany', 'Rubiano', ''),
(57, 'S.', 'Hinton', 'E.'),
(58, 'Maddie', 'Zielger', ''),
(59, 'Ransom', 'Riggs', ''),
(60, 'Danielle', 'Paige', ''),
(61, 'Sarah', 'Maas', 'J.'),
(62, 'Alex', 'Hirsch', ''),
(63, 'Jennifer', 'Donnelly', ''),
(64, 'J.', 'Rowling', 'K.'),
(65, 'Jeff', 'Kinney', ''),
(66, 'Dr.', 'Seuess', ''),
(67, 'Dav', 'Pikey', ''),
(68, 'Newt', 'Scammander', ''),
(69, 'Elizabeth', 'Rudnick', ''),
(70, 'Rob', 'Renzetti', ''),
(71, 'Andy', 'Gonsalves', ''),
(72, 'Stephanie', 'Ramirez', ''),
(73, 'Evan', 'Spillotpoulous', ''),
(74, 'Stephen', 'Chobsky', ''),
(75, 'Bill', 'Condon', ''),
(76, 'Paula', 'Hawkins', ''),
(77, 'Scott', 'Westerfeld', ''),
(78, 'H.', 'Wells', 'G.'),
(79, 'W.', 'Wagner', 'Warren'),
(80, 'John', 'Green', ''),
(81, 'Dennis', 'Lehane', ''),
(82, 'Renee', 'Ahdieh', '');

-- --------------------------------------------------------

--
-- Table structure for table `authorbook`
--

CREATE TABLE IF NOT EXISTS `authorbook` (
  `BookId` int(11) NOT NULL,
  `AuthorId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authorbook`
--

INSERT INTO `authorbook` (`BookId`, `AuthorId`) VALUES
(1, 1),
(2, 2),
(20, 2),
(3, 3),
(72, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11),
(12, 12),
(13, 13),
(74, 13),
(14, 14),
(15, 15),
(16, 16),
(17, 17),
(18, 18),
(19, 19),
(20, 20),
(72, 20),
(21, 21),
(25, 21),
(22, 22),
(23, 23),
(24, 24),
(26, 25),
(27, 26),
(30, 26),
(79, 26),
(28, 27),
(29, 28),
(31, 29),
(32, 30),
(33, 31),
(34, 32),
(35, 33),
(36, 34),
(37, 35),
(38, 36),
(39, 37),
(72, 37),
(40, 38),
(21, 39),
(23, 40),
(23, 41),
(25, 42),
(29, 43),
(32, 44),
(32, 45),
(32, 46),
(40, 47),
(41, 48),
(59, 48),
(42, 49),
(50, 49),
(43, 50),
(52, 50),
(53, 50),
(44, 51),
(46, 51),
(45, 52),
(47, 53),
(51, 53),
(48, 54),
(49, 55),
(54, 56),
(55, 57),
(73, 57),
(56, 58),
(57, 59),
(75, 59),
(58, 60),
(60, 61),
(61, 62),
(62, 63),
(63, 64),
(67, 64),
(68, 64),
(69, 64),
(64, 65),
(65, 66),
(66, 67),
(67, 68),
(70, 69),
(61, 70),
(61, 71),
(61, 72),
(70, 73),
(70, 74),
(70, 75),
(71, 76),
(76, 77),
(77, 81),
(78, 82),
(79, 82);

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `Id` int(11) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `ISBN13` varchar(40) NOT NULL,
  `PublishDate` date NOT NULL,
  `Publisher` varchar(40) NOT NULL,
  `Binding` varchar(40) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Qty` int(11) NOT NULL,
  `CoverImage` varchar(100) NOT NULL,
  `Price` decimal(11,2) NOT NULL,
  `Pages` int(11) NOT NULL,
  `Flag` tinyint(1) NOT NULL,
  `GenreId` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`Id`, `Title`, `ISBN13`, `PublishDate`, `Publisher`, `Binding`, `Description`, `Qty`, `CoverImage`, `Price`, `Pages`, `Flag`, `GenreId`) VALUES
(1, 'Mississippi Blood', '9780062311153', '2017-03-01', 'William Morrow & Company', 'Hardcover', 'The endgame is at hand for Penn Cage, his family, and the enemies bent on destroying them in this revelatory volume in the epic trilogy set in modern-day Natchez, Mississippi--Greg Iles''s epic tale of love and honor, hatred and revenge that explores how the sins of the past continue to haunt the present.', 3, 'MississippiBlood.jpg', 17.39, 704, 0, 1),
(2, 'The Black Book', '9780316273886', '2017-03-01', 'Little Brown and Company', 'Hardcover', 'Three bodies in a beautiful and luxurious bedroom. Billy Harney was born to be a cop. The son of Chicago''s chief of detectives, whose twin sister is also on the force, Billy plays it by the book. Alongside Detective Kate Fenton, Billy''s tempestuous, adrenaline-junkie partner, there''s nothing he wouldn''t sacrifice for his job.', 5, 'BlackBook.jpg', 16.80, 448, 0, 1),
(3, 'The Whistler', '9780385541190', '2016-10-01', 'Doubleday Books', 'Hardcover', ' From John Grisham, America''s #1 bestselling author, comes the most electrifying novel of the year, a high-stakes thrill ride through the darkest corners of the Sunshine State. \nWe expect our judges to be honest and wise. Their integrity and impartiality are the bedrock of the entire judicial system.  ', 2, 'Whistler.jpg', 17.37, 384, 0, 1),
(4, 'Lilac Girls', '9781101883082', '2017-02-01', 'Ballantine Books', 'Paperback', 'For readers of The Nightingale and Sarah''s Key, inspired by the life of a real World War II heroine, this remarkable debut novel reveals the power of unsung women to change history in their quest for love, freedom, and second chances.', 4, 'LilacGirls.jpg', 10.47, 512, 0, 1),
(5, 'Norse Mythology', '9780393609097', '2017-02-01', 'W. W. Norton & Company', 'Hardcover', 'In Norse Mythology , Gaiman stays true to the myths in envisioning the major Norse pantheon: Odin, the highest of the high, wise, daring, and cunning; Thor, Odin''s son, incredibly strong yet not the wisest of gods; and Loki--son of a giant--blood brother to Odin and a trickster and unsurpassable manipulator', 2, 'NorseMythology.jpg', 16.35, 304, 0, 1),
(6, 'The Shack', '9780964729230', '2007-05-01', 'Windblown Media', 'Paperback', 'Mackenzie Allen Philips'' youngest daughter, Missy, has been abducted during a family vacation and evidence that she may have been brutally murdered is found in an abandoned shack deep in the Oregon wilderness. Four years later in the midst of his "Great Sadness," Mack receives a suspicious note, apparently from God, inviting him back to that shack for a weekend.', 3, 'Shack.jpg', 9.15, 248, 0, 1),
(7, 'The Handmaid''s Tale', '9780385490818', '1998-04-01', 'Anchor Books', 'Paperback', 'Offred is a Handmaid in the Republic of Gilead. She may leave the home of the Commander and his wife once a day to walk to food markets whose signs are now pictures instead of words because women are no longer allowed to read.', 1, 'HandmaidsTale.jpg', 9.56, 320, 0, 1),
(8, 'All the Missing Girls', '9781501107979', '2017-01-01', 'Simon & Schuster', 'Paperback', 'It''s been ten years since Nicolette Farrell left her rural hometown after her best friend, Corinne, disappeared from Cooley Ridge without a trace. Back again to tie up loose ends and care for her ailing father, Nic is soon plunged into a shocking drama that reawakens Corinne''s case and breaks open old wounds long since stitched. \nThe decade-old investigation focused on Nic, her brother Daniel, boyfriend Tyler, and Corinne''s boyfriend Jackson. Since then, only Nic has left Cooley Ridge. Daniel and his wife, Laura, are expecting a baby; Jackson works at the town bar; and Tyler is dating Annaleise Carter, Nic''s younger neighbor and the group''s alibi the night Corinne disappeared. Then, within days of Nic''s return, Annaleise goes missing. ', 6, 'AllTheMissingGirls.jpg', 10.88, 400, 0, 1),
(9, 'The Girl Before', '978042585046', '2017-01-01', 'Ballantine Books', 'Hardcover', 'In the tradition of The Girl on the Train, The Silent Wife, and Gone Girl comes an enthralling psychological thriller that spins one woman''s seemingly good fortune, and another woman''s mysterious fate, through a kaleidoscope of duplicity, death, and deception. \nSOON TO BE A MAJOR MOTION PICTURE DIRECTED BY RON HOWARD ', 4, 'GirlBefore.jpg', 16.20, 352, 0, 1),
(10, 'Big Little Lies', '9780425274866', '2015-08-01', 'Berkley Books', 'Paperback', 'The #1 New York Times bestseller that Entertainment Weekly called a surefire hit. \nSoon to be a major HBO(r) series starring Nicole Kidman and Reese Witherspoon \nSometimes it s the little lies that turn out to be the most lethal... ', 3, 'BigLittleLies.jpg', 10.24, 512, 0, 1),
(11, 'Mangrove Lightning', '9780399576683', '2017-03-01', 'G. P. Putman''s Sons', 'Hardcover', 'Doc Ford has been involved in many strange cases. This may be one of the strangest. A legendary charter captain and guide named Tootsie Barlow has come to him, muttering about a curse. The members of his extended family have suffered a bizarre series of attacks, and Barlow is convinced it has something to do with a multiple murder in 1925, in which his family had a shameful part. \r\nFord doesn''t believe in curses, but as he and his friend Tomlinson begin to investigate, following the trail of the attacks from Key Largo to Tallahassee, they, too, suffer a series of near-fatal mishaps. Is it really a curse? Or just a crime spree? The answer lies in solving a near-hundred-year-old murder...and probing the mind of a madman.', 2, 'MangroveLightning.jpg', 16.20, 352, 0, 1),
(12, 'A Man Called Ove', '9781476738024', '2015-05-01', 'Washington Square Press', 'Paperback', 'Meet Ove. He s a curmudgeon the kind of man who points at people he dislikes as if they were burglars caught outside his bedroom window. He has staunch principles, strict routines, and a short fuse. People call him the bitter neighbor from hell. But must Ove be bitter just because he doesn t walk around with a smile plastered to his face all the time? \r\nBehind the cranky exterior there is a story and a sadness. So when one November morning a chatty young couple with two chatty young daughters move in next door and accidentally flatten Ove s mailbox, it is the lead-in to a comical and heartwarming tale of unkempt cats, unexpected friendship, and the ancient art of backing up a U-Haul. All of which will change one cranky old man and a local residents association to their very foundations. ', 3, 'ManCalledOve.jpg', 9.92, 368, 0, 1),
(13, 'Fahrenheit 451', '9781451673319', '2012-01-01', 'Simon & Schuster', 'Paperback', 'Ray Bradbury''s internationally acclaimed novel Fahrenheit 451 is a masterwork of twentieth-century literature set in a bleak, dystopian future.Guy Montag is a fireman. In his world, where television rules and literature is on the brink of extinction, firemen start fires rather than put them out.', 8, 'Fahrenheit451.jpg', 9.75, 159, 0, 1),
(14, 'It', '9781501142970', '2016-01-01', 'Scribner Book Company', 'Paperback', 'A landmark in American literature- (Chicago Sun-Times)--Stephen King''s #1 national bestseller about seven adults who return to their hometown to confront a nightmare they had first stumbled on as teenagers...an evil without a name:It', 10, 'It.jpg', 13.39, 1168, 0, 1),
(15, 'Two By Two', '9781455520695', '2016-10-01', 'Grand Central Publishing', 'Hardcover', '#1 New York Times bestselling author Nicholas Sparks returns with an emotionally powerful story of unconditional love, its challenges, its risks and most of all, its rewards. \r\nAt 32, Russell Green has it all: a stunning wife, a lovable six year-old daughter, a successful career as an advertising executive and an expansive home in Charlotte. He is living the dream, and his marriage to the bewitching Vivian is the center of that. But underneath the shiny surface of this perfect existence, fault lines are beginning to appear...and no one is more surprised than Russ when he finds every aspect of the life he took for granted turned upside down. In a matter of months, Russ finds himself without a job or wife, caring for his young daughter while struggling to adapt to a new and baffling reality. Throwing himself into the wilderness of single parenting, Russ embarks on a journey at once terrifying and rewarding-one that will test his abilities and his emotional resources beyond anything[...]', 3, 'TwoByTwo.jpg', 16.20, 496, 0, 1),
(16, 'Vicious Circle', '9780339176616', '2017-03-01', 'G. P. Putman''s Sons', 'Hardcover', 'The plane circled in the dark. Joe Pickett could just make out down below a figure in the snow and timber, and then three other figures closing in. There was nothing he could do about it. And Joe knew that he might be their next target. \nThe Cates family had always been a bad lot. Game warden Joe Pickett had been able to strike a fierce blow against them when the life of his daughter April had been endangered, but he''d always wondered if there''d be a day of reckoning. He''s not wondering any longer. Joe knows they''re coming after him and his family now. He has his friend Nate by his side, but will that be enough this time All he can do is prepare...and wait for them to make the first move.', 6, 'ViciousCircle.jpg', 16.20, 384, 0, 1),
(17, 'If Not For You', '9780553391961', '2017-03-01', 'Ballantine Books', 'Hardcover', 'If not for her loving but controlling parents, Beth Prudhomme might never have taken charge of her life and moved from her native Chicago to Portland, Oregon, where she s reconnected with her spirited Aunt Sunshine and found a job as a high school music teacher.', 4, 'IfNotForYou.jpg', 17.82, 384, 0, 1),
(18, 'A Dog''s Purpose: A Novel For Humans', '9780765388117', '2016-12-01', 'Forge', 'Paperback', 'A Dog s Purposewhich spent a year on theNew York TimesBest Seller list is heading to the big screen Based on the beloved bestselling novel by W. Bruce Cameron,A Dog s Purpose, from director Lasse Hallstrom (The Cider House Rules,Dear John,The 100-Foot Journey), shares the soulful and surprising story of one devoted dog (voiced by Josh Gad) who finds the meaning of his own existence through the lives of the humans he teaches to laugh and love.', 10, 'DogsPurpose.jpg', 9.23, 336, 1, 1),
(19, 'The Cutthroat', '9780399575600', '2017-03-01', 'G. P. Putman''s Sons', 'Hardcover', 'The year is 1911. Chief Investigator Isaac Bell of the Van Dorn Detective Agency has had many extraordinary cases before. But none quite like this. \r\nHired to find a young woman named Anna Pape who ran away from home to become an actress, Bell gets a shock when her murdered body turns up instead. Vowing to bring the killer to justice, he begins a manhunt which leads him into increasingly more alarming territory. Anna Pape was not alone in her fate--petite young blond women like Anna are being murdered in cities across America. ', 5, 'Cutthroat.jpg', 17.40, 416, 0, 1),
(20, 'Never Never', '9780316433174', '2017-01-01', 'Little Brown and Company', 'Hardcover', 'Never...assume you know someone. Harry Blue is the top Sex Crimes investigator in her department. She''s a seasoned pro who''s seen it all. But even she didn''t see this coming: her own brother arrested for the grisly murders of three beautiful young women.', 2, 'NeverNever.jpg', 16.80, 400, 0, 1),
(21, 'Old School - Life in the Sane Lane', '9781250135797', '2017-03-01', 'Henry Holt', 'Hardcover', 'You have probably heard the term Old School, but what you might not know is that there is a concentrated effort to tear that school down. Its a values thing. The antiOld School forces believe the traditional way of looking at life is oppressive.', 10, 'OldSchool.jpg', 16.20, 192, 0, 2),
(22, 'Milk and Honey', '9781449474256', '2015-10-01', 'Andrews McMeal Publishing', 'Paperback', 'Milk and Honeyis a collection of poetry and prose about survival. About the experience of violence, abuse, love, loss, and femininity.The book is divided into four chapters, and each chapter serves a different purpose. Deals with a different pain. Heals a different heartache.Milk and Honeytakes readers through a journey of the most bitter moments in life and finds sweetness in them because there is sweetness everywhere if you are just willing to look.', 6, 'MilkAndHoney.jpg', 9.14, 208, 0, 2),
(23, 'The Magnolia Story', '9780718079185', '2016-10-01', 'Thomas Nelson', 'Hardcover', 'Are you ready to see your fixer upper These famous words are now synonymous with the dynamic husband-and-wife team Chip and Joanna Gaines, stars of HGTV s Fixer Upper. As this question fills the airwaves with anticipation, their legions of fans continue to multiply and ask a different series of questions, like Who are these peopleWhat''s the secret to their success', 4, 'MagnoliaStory.jpg', 16.69, 208, 0, 2),
(24, 'Big Agenda: President Trump''s Plan to Save America', '9781630060879', '2017-01-01', 'Humanix Books', 'Hardcover', 'Donald Trump''s victory in the 2016 election was more than a historic upset. It was the beginning of a major political, economic, and social revolution that will change America -- and the world. \r\nOne of the nation''s foremost conservative commentators, New York Times bestselling author, and a mentor to many of Donald Trump''s key advisers, David Horowitz presents a White House battle plan to halt the Democrats'' march to extinguish the values America holds dear. \r\nBig Agenda details President Trump''s likely moves, including his: \r\n- First wave of executive orders -- restoring Guantanamo, Keystone XL, nixing amnesty\r\n- Surprising judicial appointments -- Supreme Court and the federal judiciary\r\n- Radical changes to federal rules & regulations -- Obamacare, EPA overreach, and a New Deal for black America \r\nWith the White House and Senate in GOP hands, and a Supreme Court soon to follow, President Trump will have a greater opportunity than even Ronald Reagan had to reshape the American[...]', 3, 'BigAgenda.jpg', 16.46, 208, 1, 2),
(25, 'Killing the Rising Sun', '9781627790628', '2016-09-01', 'Henry Holt & Company', 'Hardcover', 'Autumn 1944. World War II is nearly over in Europe but is escalating in the Pacific, where American soldiers face an opponent who will go to any length to avoid defeat. The Japanese army follows the samurai code of Bushido, stipulating that surrender is a form of dishonor. Killing the Rising Sun takes readers to the bloody tropical-island battlefields of Peleliu and Iwo Jima and to the embattled Philippines, where General Douglas MacArthur has made a triumphant return and is plotting a full-scale invasion of Japan.\r\n\r\nAcross the globe in Los Alamos, New Mexico, Dr. J. Robert Oppenheimer and his team of scientists are preparing to test the deadliest weapon known to mankind. In Washington, DC, FDR dies in office and Harry Truman ascends to the presidency, only to face the most important political decision in history: whether to use that weapon. And in Tokyo, Emperor Hirohito, who is considered a deity by his subjects, refuses to surrender, despite a massive and mounting death toll.', 3, 'KillingTheRisingSun.jpg', 18.51, 336, 0, 2),
(26, 'Hillbilly Elegy', '9780062300546', '2016-06-01', 'Harper', 'Hardcover', 'From a former marine and Yale Law School graduate, a powerful account of growing up in a poor Rust Belt town that offers a broader, probing look at the struggles of America''s white working class\r\n\r\nHillbilly Elegy is a passionate and personal analysis of a culture in crisis--that of white working-class Americans. The decline of this group, a demographic of our country that has been slowly disintegrating over forty years, has been reported on with growing frequency and alarm, but has never before been written about as searingly from the inside. J. D. Vance tells the true story of what a social, regional, and class decline feels like when you were born with it hung around your neck.', 7, 'HillbillyElegy.jpg', 17.28, 272, 0, 2),
(27, 'The Zookeeper''s Wife', '9780393333060', '2008-09-01', 'W. W. Norton & Company', 'Paperback', 'After their zoo was bombed, Polish zookeepers Jan and Antonina Zabinski managed to save over three hundred people from the Nazis by hiding refugees in the empty animal cages. With animal names for these -guests, - and human names for the animals, it''s no wonder that the zoo''s code name became -The House Under a Crazy Star.- Best-selling naturalist and acclaimed storyteller Diane Ackerman combines extensive research and an exuberant writing style to re-create this fascinating, true-life story--sharing Antonina''s life as -the zookeeper''s wife, - while examining the disturbing obsessions at the core of Nazism.', 6, 'ZookeepersWife.jpg', 15.96, 368, 0, 2),
(28, 'The Subtle Art of Not Giving A F*ck', '9780062457714', '2016-09-01', 'HarperOne', 'Hardcover', 'In this generation-defining self-help guide, a superstar blogger cuts through the crap to show us how to stop trying to be "positive" all the time so that we can truly become better, happier people.\r\n\r\nFor decades, we''ve been told that positive thinking is the key to a happy, rich life. "F**k positivity," Mark Manson says. "Let''s be honest, shit is f**ked and we have to live with it." In his wildly popular Internet blog, Manson doesn''t sugarcoat or equivocate. He tells it like it is--a dose of raw, refreshing, honest truth that is sorely lacking today. The Subtle Art of Not Giving a F**k is his antidote to the coddling, let''s-all-feel-good mindset that has infected modern society and spoiled a generation, rewarding them with gold medals just for showing up.\r\n\r\nManson makes the argument, backed both by academic research and well-timed poop jokes, that improving our lives hinges not on our ability to turn lemons into lemonade, but on learning to stomach lemons better. Human beings[...]', 4, 'SubtleArtOfGiving.jpg', 14.98, 224, 0, 2),
(29, 'Unshakeable', '9781501164583', '2017-02-01', 'Simon & Schuster', 'Hardcover', 'After interviewing fifty of the world''s greatest financial minds and penning the #1New York TimesbestsellerMoney: Master the Game, Tony Robbins returns with a step-by-step playbook, taking you on a journey to transform your financial life and accelerate your path to financial freedom.', 4, 'Unshakeable.jpg', 15.86, 256, 0, 2),
(30, 'The Zookeeper''s Wife', '9780393354256', '2017-02-01', 'W. W. Norton & Company', 'Paperback', '1939: the Germans have invaded Poland. The keepers of the Warsaw zoo, Jan and Antonina Zabinski, survive the bombardment of the city, only to see the occupiers ruthlessly kill many of their animals. The Nazis then carry off the prized specimens to Berlin for their program to create the -purest- breeds, much as they saw themselves as the purest human race.', 4, 'TheZookeepersWife.jpg', 9.84, 384, 0, 2),
(31, 'Player''s Handbook', '9780786965601', '2014-08-01', 'Wizards of the Coast', 'Hardcover', 'The Player''s Handbook(R) is the essential reference for every Dungeons & Dragons(R) roleplayer. It contains rules for character creation and advancement, backgrounds and skills, exploration and combat, equipment, spells, and much more.', 4, 'PlayersHandbook.jpg', 30.31, 320, 0, 2),
(32, 'The Whole30', '9780544609716', '2015-04-01', 'Houghton Mifflin', 'Hardcover', 'Melissa and Dallas Hartwig''s critically-acclaimed Whole30 program has helped hundreds of thousands of people transform how they think about their food, bodies, and lives. Their approach leads to effortless weight loss and better health--along with stunning improvements in sleep quality, energy levels, mood, and self-esteem. Their first book, theNew York Timesbest-sellingIt Starts With Food, explained the science behind their life-changing program. Now they bring youThe Whole30, a stand-alone, step-by-step plan to break unhealthy habits, reduce cravings, improve digestion, and strengthen your immune system.The Whole30features more than 100 chef-developed recipes, like Chimichurri Beef Kabobs and Halibut with Citrus Ginger Glaze, designed to build your confidence in the kitchen and inspire your taste buds. The book also includes real-life success stories, community resources, and an extensive FAQ to give you the support you need on your journey to -food freedom.-', 4, 'Whole30.jpg', 18.54, 432, 0, 2),
(33, 'Hidden Figures', '9780062363603', '2016-12-01', 'William Morrow & Company', 'Paperback', 'The phenomenal true story of the black female mathematicians at NASA whose calculations helped fuel some of America s greatest achievements in space. Soon to be a major motion picture starring Taraji P. Henson, Octavia Spencer, Janelle Monae, Kirsten Dunst, and Kevin Costner.', 5, 'HiddenFigures.jpg', 10.07, 368, 0, 2),
(34, 'Portraits of Courage', '9780804189767', '2017-02-01', 'Crown Publishing Group (NY)', 'Hardcover', 'Growing out of President Bush''s own outreach and the ongoing work of the George W. Bush Institute''s Military Service Initiative,Portraits of Couragebrings together sixty-six full-color portraits and a four-panel mural painted by President Bush of members of the United States military who have served our nation with honor since 9/11--and whom he has come to know personally.Our men and women in uniform have faced down enemies, liberated millions, and in doing so showed the true compassion of our nation. Often, they return home with injuries--both visible and invisible--that intensify the challenges of transitioning into civilian life. In addition to these burdens, research shows a civilian-military divide. Seventy-one percent of Americans say they have little understanding of the issues facing veterans, and veterans agree: eighty-four percent say that the public has -little awareness- of the issues facing them and their families.Each painting in this meticulously produced hardcover ', 5, 'PortraitsOfCourage.jpg', 21.60, 192, 0, 2),
(35, 'Trump''s War: His Battle for America', '9781478976677', '2017-03-01', 'Center Street', 'Hardcover', 'The -Godfather of Trumpmania, - Michael Savage, examines the initial appointments, speeches, tweets and history of Donald Trump and offers his insights and analysis. The man many consider to be the determining factor in driving Trump over the finish line by motivating millions of undecideds and the -Deplorables, - who would have otherwise sat out the election, provides a crucial first look at the early direction of the Trump presidency.', 5, 'TrumpsWar.jpg', 16.37, 288, 0, 2),
(36, 'The Lose Your Belly Diet', '9781939457592', '2016-12-01', 'Ghost Mountain Books', 'Hardcover', 'We want to be healthy. We want to be lean. And we want to lose that annoying fat around our bellies. We can achieve ALL of these goals withThe Lose Your Belly Diet. Based on exciting new research about the dramatic benefits of vibrant gut health and a diverse gut microbiome, this plan nurtures your gut while helping you burn off excess weight and harmful belly fat.', 5, 'LoseYourBellyDiet.jpg', 16.09, 256, 0, 2),
(37, 'You Are a Badass: How to Stop Doubting Your Greatness and Start Living an Awesome Life', '9780762447695', '2013-04-01', 'Running Press Book Publishers', 'Paperback', 'In this refreshingly entertaining how-to guide, bestselling author and world-traveling success coach, Jen Sincero, serves up 27 bitesized chapters full of hilariously inspiring stories, sage advice, easy exercises, and the occasional swear word, helping you to: Identify and change the self-sabotaging beliefs and behaviors that stop you from getting what you want, Create a life you totally love.', 5, 'YouAreABadass.jpg', 9.59, 254, 0, 2),
(38, 'This Life I Live: One Man''s Extraordinary, Ordinary Life and the Woman Who Changed It Forever ', '9780718090197', '2017-02-01', 'Thomas Nelson', 'Hardcover', 'By inviting so many into the final months of Joey''s life as she battled cancer, Joey and Rory Feek captured hearts around the world with how they handled the diagnosis; the inspiring, simple way they chose to live; and how they loved each other every step of the way.', 6, 'ThisLifeILive.jpg', 15.24, 240, 0, 2),
(39, 'The 5 Love Languages', '9780802412706', '2015-01-01', 'Northfield Publishing', 'Paperback', 'Falling in love is easy. Staying in love--that''s the challenge. How can you keep your relationship fresh and growing amid the demands, conflicts, and just plain boredom of everyday life?\r\n\r\nIn the #1 New York Times bestseller The 5 Love Languages, you''ll discover the secret that has transformed millions of relationships worldwide. Whether your relationship is flourishing or failing, Dr. Gary Chapman''s proven approach to showing and receiving love will help you experience deeper and richer levels of intimacy with your partner--starting today.\r\n\r\nThe 5 Love Languages is as practical as it is insightful. Updated to reflect the complexities of relationships today, this new edition reveals intrinsic truths and applies relevant, actionable wisdom in ways that work.\r\n\r\nIncludes the Couple''s Personal Profile assessment so you can discover your love language and that of your loved one.', 6, '5LoveLanguages.jpg', 9.75, 208, 0, 2),
(40, 'Tales from the Yawning Portal', '9780786966097', '2017-04-01', 'Wizards of the Coast', 'Hardcover', 'Within this tome are seven of the most compelling dungeons from the 40+ year history of Dungeons & Dragons. Some are classics that have hosted an untold number of adventurers, while others are some of the most popular adventures ever printed. The seeds of these stories now rest in your hands.', 6, 'TalesFromTheYawningPortal.jpg', 30.83, 248, 0, 2),
(41, 'Everything Everything', '9780553496673', '2017-03-01', 'Ember', 'Paperback', 'My disease is as rare as it is famous. Basically, I''m allergic to the world. I don''t leave my house, have not left my house in seventeen years. The only people I ever see are my mom and my nurse, Carla. \r\nBut then one day, a moving truck arrives next door. I look out my window, and I see him. He''s tall, lean and wearing all black--black T-shirt, black jeans, black sneakers, and a black knit cap that covers his hair completely. He catches me looking and stares at me. I stare right back. His name is Olly. \r\nMaybe we can''t predict the future, but we can predict some things. For example, I am certainly going to fall in love with Olly. It''s almost certainly going to be a disaster.\r\nAnd don''t miss The Sun Is Also A Star, the breathtaking and romantic new novel from #1 New York Times bestselling author Nicola Yoon in which two teens are brought together just when it seems like the universe is sending them in opposite directions.', 6, 'EverythingEverything.jpg', 7.47, 352, 0, 3),
(42, 'As Old as Time: A Twisted Tale', '9781484707289', '2016-09-01', 'Disney Press', 'Hardcover', 'What if Belle''s mother cursed the BeastAs Old as Timeis the third book in a new YA line that reimagines classic Disney stories in surprising new ways. When Belle touches the Beast''s enchanted rose, memories flood through Belle''s mind-memories of a mother she thought she would never see again.', 6, 'AsOldAsTime.jpg', 11.15, 496, 0, 3),
(43, 'King''s Cage', '9780062310699', '2017-02-01', 'Harper Teen', 'Hardcover', 'In the third book in the #1 New York Times bestselling Red Queen series, Mare is forced to play a psychological cat-and-mouse game with an old and deadly enemy, where the stakes are not only the future of the Red Rebellion but the sanctity of her own mind.', 7, 'KingsCage.jpg', 11.99, 528, 0, 3),
(44, 'Th1rteen R3asons Why', '9781595141880', '2011-06-01', 'Razorbill', 'Paperback', 'Clay Jensen returns home from school to find a strange package with his name on it lying on his porch. Inside he discovers several cassette tapes recorded by Hannah Baker--his classmate and crush--who committed suicide two weeks earlier. Hannah''s voice tells him that there are thirteen reasons why she decided to end her life. Clay is one of them. If he listens, he''ll find out why.', 7, 'Th1rteenR3asonsWhy.jpg', 6.70, 288, 0, 3),
(45, 'This Is Where It Ends', '9781492622468', '2016-01-01', 'Sourcebooks Fire', 'Hardcover', 'Everyone has a reason to fear the boy with the gun. 10:00 a.m.The principal of Opportunity, Alabama''s high school finishes her speech, welcoming the entire student body to a new semester and encouraging them to excel and achieve.', 7, 'ThisIsWhereItEnds.jpg', 10.97, 288, 0, 3),
(46, '13 Reasons Why', '9780451478290', '2017-03-01', 'Razorbill', 'Paperback', 'Clay Jensen returns home from school to find a strange package with his name on it lying on his porch. Inside he discovers several cassette tapes recorded by Hannah Baker--his classmate and crush--who committed suicide two weeks earlier. Hannah''s voice tells him that there are thirteen reasons why she decided to end her life. Clay is one of them. If he listens, he''ll find out why.', 7, '13ReasonsWhy.jpg', 6.92, 336, 0, 3),
(47, 'Before I Fall: Movie Tie-In Edition', '9780062656322', '2017-02-01', 'HarperCollins', 'Paperback', 'This special enhanced edition of the New York Times bestselling Before I Fall by award-winning author Lauren Oliver includes two brand-new stories set in the world of Before I Fall, an essay by the author about the "greatest hits" of her life, and extra behind-the-scenes content on the making of this bestseller.\r\n\r\nSamantha Kingston has it all: looks, popularity, the perfect boyfriend. Friday, February 12, should be just another day in her charmed life. Instead, it turns out to be her last.\r\n\r\nThe catch: Samantha still wakes up the next morning. Living the last day of her life seven times during one miraculous week, she will untangle the mystery surrounding her death--and discover the true value of everything she is in danger of losing.', 7, 'BeforeIFallMovie.jpg', 7.14, 496, 0, 3),
(48, 'Five Nights at Freddy''s: The Silver Eyes', '9781338134377', '2016-09-01', 'Scholastic Inc.', 'Paperback', 'Ten years after the horrific murders at Freddy Fazbear''s Pizza that ripped their town apart, Charlie, whose father owned the restaurant, and her childhood friends reunite on the anniversary of the tragedy and find themselves at the old pizza place which had been locked up and abandoned for years.', 8, 'FiveNightsAtFreddys.jpg', 9.99, 400, 0, 3),
(49, 'The Hate U Give', '9780062498533', '2017-02-01', 'Balzer & Bray/Harper Teen', 'Hardcover', 'Sixteen-year-old Starr Carter moves between two worlds: the poor neighborhood where she lives and the fancy suburban prep school she attends. The uneasy balance between these worlds is shattered when Starr witnesses the fatal shooting of her childhood best friend Khalil at the hands of a police officer. Khalil was unarmed.', 8, 'TheHateUGive.jpg', 10.79, 464, 0, 3),
(50, 'Once Upon a Dream', '9781484707302', '2017-01-01', 'Disney Press', 'Paperback', 'What if the sleeping beauty never woke upOnce Upon a Dreammarks the second book in a new YA line that reimagines classic Disney stories in surprising new ways.It should be simple--a dragon defeated, a slumbering princess in a castle, a prince poised to wake her.', 8, 'OnceUponADream.jpg', 9.99, 464, 0, 3),
(51, 'Before I Fall', '9780061726811', '2011-10-01', 'HarperCollins Publishers', 'Paperback', 'With this stunning debut novel, New York Times bestselling author Lauren Oliver emerged as one of today''s foremost authors of young adult fiction. Like Jay Asher''s Thirteen Reasons Why and Gayle Forman''s If I Stay, Before I Fall raises thought-provoking questions about love, death, and how one person''s life can affect so many others.\r\n\r\nFor popular high school senior Samantha Kingston, February 12--"Cupid Day"--should be one big party, a day of valentines and roses and the privileges that come with being at the top of the social pyramid. And it is...until she dies in a terrible accident that night.\r\n\r\nHowever, she still wakes up the next morning. In fact, Sam lives the last day of her life seven times, until she realizes that by making even the slightest changes, she may hold more power than she ever imagined.\r\n\r\nNamed to numerous state reading lists, this novel was also recognized as a Best Book of the Year by Amazon.com, Barnes & Noble, The Daily Beast, NPR, and Publishers Weekly.', 8, 'BeforeIFall.jpg', 6.70, 470, 0, 3),
(52, 'Glass Sword', '9780062310668', '2016-02-01', 'Harper Teen', 'Hardcover', 'The electrifying next installment in the Red Queen series escalates the struggle between the growing rebel army and the blood-segregated world they''ve always known and pits Mare against the darkness that has grown in her soul.', 8, 'GlassSword.jpg', 12.37, 464, 0, 3),
(53, 'Red Queen', '9780062310644', '2016-06-01', 'Harper Teen', 'Paperback', 'Graceling meets The Selection in debut novelist Victoria Aveyard''s sweeping tale of seventeen-year-old Mare, a common girl whose once-latent magical power draws her into the dangerous intrigue of the king''s palace. Will her power save her or condemn her?\r\n\r\nMare Barrow''s world is divided by blood--those with common, Red blood serve the Silver- blooded elite, who are gifted with superhuman abilities. Mare is a Red, scraping by as a thief in a poor, rural village, until a twist of fate throws her in front of the Silver court. Before the king, princes, and all the nobles, she discovers she has an ability of her own.', 9, 'RedQueen.jpg', 8.19, 416, 0, 3),
(54, 'Beauty and the Beast: Belle''s Library', '9781484780992', '2017-01-01', 'Disney Press', 'Hardcover', 'Disney''s Belle is one of the best fictional bookworms around. But what exactly is on her reading list In this unique literary journal, enjoy inspiring quotes from some of Belle''s favorite books, as well as her insightful notes and colorful drawings.', 9, 'BeautyAndTheBeast.jpg', 8.17, 208, 0, 3),
(55, 'The Outsiders', '9780425288290', '2016-11-01', 'Penguin Books', 'Hardcover', 'Ponyboy can count on his brothers. And on his friends. But not on much else besides trouble with the Socs, a vicious gang of rich kids whose idea of a goo d time is beating up on "greasers" like Ponyboy. At least he knows what to expect--until the night someone takes things too far.', 9, 'TheOutsiders.jpg', 20.00, 224, 0, 3),
(56, 'The Maddie Diaries', '9781501150661', '2017-03-01', 'Gallery Books', 'Hardcover', 'Teen dance prodigy, breakoutDance Momsstar,and judge onSo You Think You Can Dance: The Next Generationpresents her uplifting coming-of-age memoir about following her dreams and working hard to achieve success in both the dance world and in life.', 9, 'TheMaddieDiaries.jpg', 13.41, 240, 0, 3),
(57, 'Miss Peregrine''s Home for Peculiar Children', '9781594746031', '2013-06-01', 'Quirk Books', 'Paperback', 'It all waits to be discovered in "Miss Peregrine s Home for Peculiar Children," an unforgettable novel that mixes fiction and photography in a thrilling reading experience. As our story opens, a horrific family tragedy sets sixteen-year-old Jacob journeying to a remote island off the coast of Wales, where he discovers the crumbling ruins of Miss Peregrine s Home for Peculiar Children. As Jacob explores its abandoned bedrooms and hallways, it becomes clear that the children were more than just peculiar. They may have been dangerous. They may have been quarantined on a deserted island for good reason. And somehow impossible though it seems they may still be alive. A spine-tingling fantasy illustrated with haunting vintage photography, "Miss Peregrine s Home for Peculiar Children" will delight adults, teens, and anyone who relishes an adventure in the shadows.', 9, 'MissPeregrines.jpg', 6.70, 382, 0, 3),
(58, 'The End of Oz', '9780062423770', '2017-03-01', 'HarperCollins', 'Hardcover', 'In this dark, action-packed fourth book in the New York Times bestselling Dorothy Must Die series, Amy Gumm travels from Oz to the twisted land of Ev, where she fights to free Oz from evil once and for all.\r\n\r\nMy name is Amy Gumm. You might remember me as the other girl from Kansas. When a tornado swept me away to the magical land of Oz, I was given a mission: Dorothy must die. That''s right, everyone''s favorite Wicked-Witch-slayer had let the magic of Oz corrupt her. She turned evil. So I killed her.\r\n\r\nBut just when we thought it was safe to start rebuilding the damaged land of Oz, we were betrayed. Now I''m following the Road of Yellow Brick as it helps me escape toward the mysterious land of Ev, where the Nome King rules a bleak and angry world. And what I''m about to find is shocking: My original mission may not have been successful.\r\n\r\nI thought my job was over, but it''s only just beginning. And it''s up to me to foil Dorothy''s plans for revenge--and finally save the land[...]', 10, 'TheEndOfOz.jpg', 11.39, 304, 0, 3),
(59, 'Everything Everything', '9780553496642', '2015-09-01', 'Delacorte Press', 'Hardcover', 'My disease is as rare as it is famous. Basically, I''m allergic to the world. I don''t leave my house, have not left my house in seventeen years. The only people I ever see are my mom and my nurse, Carla. \r\nBut then one day, a moving truck arrives next door. I look out my window, and I see him. He''s tall, lean and wearing all black--black T-shirt, black jeans, black sneakers, and a black knit cap that covers his hair completely. He catches me looking and stares at me. I stare right back. His name is Olly. \r\nMaybe we can''t predict the future, but we can predict some things. For example, I am certainly going to fall in love with Olly. It''s almost certainly going to be a disaster.\r\nAnd don''t miss The Sun Is Also A Star, the breathtaking and romantic new novel from #1 New York Times bestselling author Nicola Yoon in which two teens are brought together just when it seems like the universe is sending them in opposite directions.', 10, 'EverythingEverything2.jpg', 11.38, 336, 0, 3),
(60, 'Throne of Glass', '9781619630345', '2013-05-01', 'Bloomsbury U.S.A. Children''s Books', 'Paperback', 'In a land without magic, where the king rules with an iron hand, an assassin is summoned to the castle. She comes not to kill the king, but to win her freedom. If she defeats twenty-three killers, thieves, and warriors in a competition, she is released from prison to serve as the king''s champion.', 10, 'ThroneOfGlass.jpg', 7.03, 406, 0, 3),
(61, 'Gravity Falls: Journal 3', '9781484746691', '2016-07-01', 'Disney Press', 'Hardcover', 'Journal 3 brims with every page ever seen on the show plus all-new pages with monsters and secrets, notes from Dipper and Mabel, and the Author''s full story. Fans of Gravity Falls will simply love this 288-page full-color jacketed hardcover version of Journal 3 Plus the book jacket doubles as an exclusive poster ', 5, 'GravityFalls.jpg', 12.39, 288, 0, 4),
(62, 'Beauty and the Beast: Lost in a Book', '9781484780985', '2017-01-01', 'Disney Press', 'Hardcover', 'Smart, bookish Belle, a captive in the Beast''s castle, has become accustomed to her new home and has befriended its inhabitants. When she comes uponNevermore, an enchanted book unlike anything else she has seen in the castle, Belle finds herself pulled into its pages and transported to a world of glamour and intrigue.', 8, 'BeautyAndTheBeast2.jpg', 10.87, 352, 0, 4),
(63, 'Harry Potter and the Cursed Child Parts I & II (Special Rehearsal Edition)', '9781338099133', '2016-07-01', 'Scholastic Inc.', 'Hardcover', 'The Eighth Story. Nineteen Years Later.Based on an original new story by J.K. Rowling, Jack Thorne and John Tiffany, a new play by Jack Thorne,Harry Potter and the Cursed Childis the eighth story in the Harry Potter series and the first official Harry Potter story to be presented on stage. The play will receive its world premiere in Londons West End on July 30, 2016. It was always difficult being Harry Potter and it isn''t much easier now that he is an overworked employee of the Ministry of Magic, a husband and father of three school-age children. While Harry grapples with a past that refuses to stay where it belongs, his youngest son Albus must struggle with the weight of a family legacy he never wanted. As past and present fuse ominously, both father and son learn the uncomfortable truth: sometimes, darkness comes from unexpected places.', 5, 'HarryPotterAndTheCursedChild.jpg', 17.99, 336, 0, 4),
(64, 'Diary of a Wimpy Kid Book 11 - Double Down', '9781419723445', '2016-11-01', 'Amulet Books', 'Hardcover', 'The pressure''s really piling up on Greg Heffley. His mom thinks video games are turning his brain to mush, so she wants her son to put down the controller and explore his -creative side.-As if that''s not scary enough, Halloween''s just around the corner and the frights are coming at Greg from every angle.', 2, 'DoubleDown.jpg', 8.50, 224, 0, 4),
(65, 'Oh, the Places You''ll Go!', '9780679805274', '1990-01-01', 'Random House Children''s Books', 'Hardcover', '"Don''t be fooled by the title of this seriocomic ode to success; it''s not ''Climb Every Mountain,'' kid version. All journeys face perils, whether from indecision, from loneliness, or worst of all, from too much waiting. Seuss'' familiar pajama-clad hero is up to the challenge, and his odyssey is captured vividly in busy two-page spreads evoking both the good times (grinning purple elephants, floating golden castles) and the bad (deep blue wells of confusion).', 2, 'OhThePlacesYoullGo.jpg', 11.61, 56, 0, 4),
(66, 'Dog Man Unleashed (Dog Man #2)', '9780545935203', '2016-12-01', 'Graphix', 'Hardcover', 'Dog Man, the newest hero from the creator of Captain Underpants, is still learning a few tricks of the trade. Petey the cat is out of the bag, and his criminal curiosity is taking the city by storm. Something fishy is going on Can Dog Man unleash justice on this ruffian in time to save the city, or will Petey get away with the purr-fect crime', 4, 'DogManUnleashed.jpg', 9.99, 224, 0, 4),
(67, 'Fantastic Beasts and Where to Find Them', '9781338132311', '2017-03-01', 'Scholastic Inc.', 'Hardcover', 'An approved textbook at Hogwarts School of Witchcraft and Wizardry since publication, Newt Scamander''s masterpiece has entertained wizarding families through the generations. Fantastic Beasts and Where to Find Them is an indispensable introduction to the magical beasts of the wizarding world.', 2, 'FantasticBeastsAndWhereToFindThem.jpg', 7.79, 128, 0, 4),
(68, 'Fantastic Beasts and Where to Find Them - The Original Screenplay', '9781338109061', '2016-11-01', 'Arthur A. Levine Books', 'Hardcover', 'J.K. Rowling''s screenwriting debut is captured in this exciting hardcover edition of the Fantastic Beasts and Where to Find Them screenplay. When Magizoologist Newt Scamander arrives in New York, he intends his stay to be just a brief stopover. However, when his magical case is misplaced and some of Newt''s fantastic beasts escape, it spells trouble for everyone Fantastic Beasts and Where to Find Them marks the screenwriting debut of J.K.', 6, 'FantasticBeastsAndWhereToFindThemScreenplay.jpg', 15.24, 304, 0, 4),
(69, 'Harry Potter and the Sorcerer''s Stone - The Illustrated Edition', '9780545790352', '2016-01-01', 'Scholastic Inc.', 'Hardcover', 'For the first time, J. K. Rowling''s beloved Harry Potter books will be presented in lavishly illustrated full-color editions. Rowling herself selected artist Jim Kay, whose over 100 illustrations make this deluxe format as perfect a gift for the child being introduced to the series as for the dedicated fan.', 6, 'HarryPotterAndTheSorcerersStone.jpg', 27.19, 256, 0, 4),
(70, 'Beauty and the Beast Novelization', '9781484781005', '2017-01-01', 'Disney Press', 'Paperback', 'Belle has dreamt of adventures like the ones she reads in her books, of traveling the world outside her small town. But when Belle''s father is taken prisoner by a beast in an enchanted castle, her path is forever changed. Enjoy this tale as old as time about adventure and love, about looking past first appearances, and about the inner Beauty and Beast in all of us in this beautiful novelization of the upcoming star-studded film', 8, 'BeautyAndTheBeastNovelization.jpg', 8.99, 288, 0, 4),
(71, 'Into the Water', '9780735211209', '2017-05-01', 'Riverhead Books', 'Hardcover', 'The author of the #1 New York Times bestseller and global phenomenon The Girl on the Train returns with Into the Water, her addictive new novel of psychological suspense.With the same propulsion that captivated millions of readers around the world in her novel The Girl on the Train, Paula Hawkins unfurls a gripping, twisting, layered plot, interwoven with a powerful understanding of human instincts and the damage they can inflict. ', 10, 'IntoTheWater.jpg', 20.25, 400, 0, 1),
(72, 'Testing', '9785641239874', '1981-01-01', 'Test', 'paperback', 'This is just a test.', 0, 'C:fakepath\0553391968_b.jpg', 1.50, 354, 1, 2),
(73, 'Rumble Fish', '9780385375689', '2013-08-01', 'Delacorte Press', 'paperback', '&quot;Rumble Fish&quot; is a trade paperback from the best-selling author of &quot;The Outsiders,&quot; S.E. Hinton, whose novels are as relevant as ever, exploring sibling relationships, the importance of role models, and the courage to think independently. This edition includes a new and exclusive Author&#039;s Note.&quot;\n&quot;\n\nRusty-James is the number one tough guy among the junior high kids who hang out and shoot pool at Benny&#039;s. He&#039;s even proud of keeping up his reputation. Actually though, what he wants most of all is to be just like his older brother, the Motorcycle Boy. Rusty-James isn&#039;t book-smart, he relies more on his fists than his brains. When he gets in over his head, the Motorcycle Boy has always been there to bail him out. The day Rusty-James&#039; world comes apart, the Motorcycle boy isn&#039;t around to pick up the pieces. What now?', 5, 'RumbleFish.jpg', 3.97, 144, 0, 3),
(74, 'Something Wicked This Way Comes', '9780380729401', '1998-03-01', 'Eos', 'paperback', 'The carnival rolls in sometime after midnight, ushering in Halloween a week early. The shrill siren song of a calliope beckons to all with a seductive promise of dreams and youth regained. In this season of dying, Cooger &amp; Dark&#039;s Pandemonium Shadow Show has come to Green Town, Illinois, to destroy every life touched by its strange and sinister mystery. And two boys will discover the secret of its smoke, mazes, and mirrors; two friends who will soon know all too well the heavy cost of wishes. . .and the stuff of nightmare.\nFew American novels written this century have endured in the heart and memory as has Ray Bradbury&#039;s unparalleled literary classic SOMETHING WICKED THIS WAY COMES. For those who still dream and remember, for those yet to experience the hypnotic power of its dark poetry, step inside. The show is about to begin.The carnival rolls in sometime after midnight, ushering in Halloween a week early. The shrill siren song of a calliope beckons to all with a seducti', 3, 'SomethingWickedThisWayComes.jpg', 7.99, 304, 0, 1),
(75, 'Hollow City: The Second Novel of Miss Peregrine&#039;s Peculiar Children', '9781594747359', '2015-02-01', 'Quirk Books', 'paperback', '&quot;Miss Peregrine&#039;s Home for Peculiar Children&quot; was the surprise best seller of 2011--an unprecedented mix of YA fantasy and vintage photography that enthralled readers and critics alike. Publishers Weekly called it &quot;an enjoyable, eccentric read, distinguished by well-developed characters, a believable Welsh setting, and some very creepy monsters.&quot; \nThis second novel begins in 1940, immediately after the first book ended. Having escaped Miss Peregrine&#039;s island by the skin of their teeth, Jacob and his new friends must journey to London, the peculiar capital of the world. Along the way, they encounter new allies, a menagerie of peculiar animals, and other unexpected surprises. \nComplete with dozens of newly discovered (and thoroughly mesmerizing) vintage photographs, this new adventure will delight readers of all ages.', 6, 'HollowCity.jpg', 6.70, 416, 0, 3),
(76, 'Uglies', '9781442419810', '2011-05-01', 'Simon Pulse', 'paperback', 'The first installment of Scott Westerfeld&#039;s New York Times bestselling series--a global phenomenon that started the dystopian trend. \nThe Uglies series has more than 3 million books in print, has been translated into twenty-seven languages, and spent more than fifty weeks on the New York Times bestseller list. Now all four books feature fresh new covers and will reach an even wider audience. \nTally&#039;s adventures begin in Uglies, where she learns the truth about what life as a Pretty really means. She rebels against the surgery that will make her a Pretty, but ultimately succumbs. In Pretties, Tally has forgotten all about her Ugly life, and when she&#039;s reminded, she has a hard time listening. And what little&#039;s left of the old Tally is further compromised in Specials, because Tally has been transformed into a fierce fighting machine. But when she&#039;s offered a chance to forever improve civilization, will she be able to overcome her brainwashing? The answer is eviden', 4, 'Uglies.jpg', 7.31, 406, 0, 3),
(77, 'Since We Fell', '9780062129383', '2017-05-09', 'Ecco Press', 'hardcover', 'Since We Fell follows Rachel Childs, a former journalist who, after an on-air mental breakdown, now lives as a virtual shut-in. In all other respects, however, she enjoys an ideal life with an ideal husband. Until a chance encounter on a rainy afternoon causes that ideal life to fray. As does Rachel&#039;s marriage. As does Rachel herself. Sucked into a conspiracy thick with deception, violence, and possibly madness, Rachel must find the strength within herself to conquer unimaginable fears and mind-altering truths. By turns heart- breaking, suspenseful, romantic, and sophisticated, Since We Fell is a novel of profound psychological insight and tension. It is Dennis Lehane at his very best.', 10, 'SinceWeFell.jpg', 18.97, 432, 0, 1);
INSERT INTO `books` (`Id`, `Title`, `ISBN13`, `PublishDate`, `Publisher`, `Binding`, `Description`, `Qty`, `CoverImage`, `Price`, `Pages`, `Flag`, `GenreId`) VALUES
(78, 'The Rose &amp; the Dagger', '9780147513861', '2017-04-01', 'Speak', 'paperback', 'In a land on the brink of war, Shahrzad has been torn from the love of her husband Khalid, the Caliph of Khorasan. She once believed him a monster, but his secrets revealed a man tormented by guilt and a powerful curse--one that might keep them apart forever. Reunited with her family, who have taken refuge with enemies of Khalid, and Tariq, her childhood sweetheart, she should be happy. But Tariq now commands forces set on destroying Khalid&#039;s empire. Shahrzad is almost a prisoner caught between loyalties to people she loves. But she refuses to be a pawn and devises a plan. While her father, Jahandar, continues to play with magical forces he doesn&#039;t yet understand, Shahrzad tries to uncover powers that may lie dormant within her. With the help of a tattered old carpet and a tempestuous but sage young man, Shahrzad will attempt to break the curse and reunite with her one true love.', 4, 'TheRoseAndTheDagger.jpg', 8.20, 448, 0, 3),
(79, '000000', '0000000000001', '0001-01-01', '000', 'paperback', '0000', 0, '0553391968_b.jpg', 0.00, 0, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE IF NOT EXISTS `genre` (
  `GenreId` int(11) NOT NULL,
  `Name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`GenreId`, `Name`) VALUES
(1, 'Fiction'),
(2, 'NonFiction'),
(3, 'Teen'),
(4, 'Kids');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE IF NOT EXISTS `orderdetails` (
  `ExpectedShippingDate` date NOT NULL,
  `ActualShippingDate` date NOT NULL,
  `Price` decimal(11,2) NOT NULL,
  `Flag` tinyint(1) NOT NULL,
  `OrderId` int(11) NOT NULL,
  `BookId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `OrderId` int(11) NOT NULL,
  `DateCreated` date NOT NULL,
  `DateCompleted` date NOT NULL,
  `Flag` tinyint(1) NOT NULL,
  `UserId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subgenre`
--

CREATE TABLE IF NOT EXISTS `subgenre` (
  `SunGenreId` int(11) NOT NULL,
  `Name` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=109 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subgenre`
--

INSERT INTO `subgenre` (`SunGenreId`, `Name`) VALUES
(1, 'Thriller'),
(2, 'Mystery & Detective'),
(3, 'Crime'),
(4, 'Suspense'),
(5, 'Historical'),
(6, 'Literary'),
(7, 'Contemporary Women'),
(8, 'Social Science'),
(9, 'Folklore & Mythology'),
(10, 'Christian'),
(11, 'Coming of Age'),
(12, 'Psychological'),
(13, 'Family Life'),
(14, 'Humorous'),
(15, 'Classics'),
(16, 'Science Fiction'),
(17, 'Romance'),
(18, 'Contemporary'),
(19, 'Sagas'),
(20, 'Action & Adventure'),
(21, 'Political Science'),
(22, 'Commentary & Opinion'),
(23, 'Political Ideologies'),
(24, 'Public Policy'),
(25, 'Poetry'),
(26, 'Women Authors'),
(27, 'American'),
(28, 'Biography & Autobiography'),
(29, 'Personal Memoirs'),
(30, 'Entertainment & Performing Arts'),
(31, 'American Government'),
(32, 'Military'),
(33, 'World War II'),
(34, 'United States'),
(35, 'Asia'),
(36, 'Japan'),
(37, 'Sociology'),
(38, 'Rural'),
(39, 'Poverty'),
(40, 'Ethnic Studies'),
(41, 'History'),
(42, 'Holocaust'),
(43, 'Eastern Europe'),
(44, 'Self-Help'),
(45, 'Motivational & Inspirational'),
(46, 'Personal Growth'),
(47, 'Happiness'),
(48, 'Success'),
(49, 'Business & Economics'),
(50, 'Personal Finance'),
(51, 'Money Management'),
(52, 'Games'),
(53, 'Role Playing & Fantasy'),
(54, 'Health & Fitness'),
(55, 'Diet & Nutrition'),
(56, 'Weight Loss'),
(57, 'Nutrition'),
(58, 'Health & Healing'),
(59, 'Weight Control'),
(60, 'Cooking'),
(61, 'African American'),
(62, 'Women'),
(63, 'Mathematics'),
(64, 'History & Philosophy'),
(65, 'Art'),
(66, 'Subjects & Themes'),
(67, 'Portraits'),
(68, 'Veterans'),
(69, 'Diets'),
(70, 'Religion'),
(71, 'Christian Life'),
(72, 'Inspirational'),
(73, 'Family & Realtionships'),
(74, 'Marriage & Long Term Realtionships'),
(75, 'Love & Romance'),
(76, 'Love & Marriage'),
(77, 'Social Themes'),
(78, 'New Experience'),
(79, 'Friendship'),
(80, 'Fantasy'),
(81, 'Fairy Tales & Folklore'),
(82, 'Royalty'),
(83, 'Suicide'),
(84, 'Bullying'),
(85, 'Survival Stories'),
(86, 'LGBT'),
(87, 'Death & Dying'),
(88, 'Visionary & Metaphysical'),
(89, 'Prejudice & Racism'),
(90, 'Violence'),
(91, 'People & Places'),
(92, 'Dystopian'),
(93, 'Media Tie-In'),
(94, 'Books & Libraries'),
(95, 'Class Difference'),
(96, 'Performing Arts'),
(97, 'Dance'),
(98, 'Horror'),
(99, 'Time Travel'),
(100, 'Magic'),
(101, 'Drama'),
(102, 'Comics & Graphic Novels'),
(103, 'Animals'),
(104, 'Dragons, Unicorns & Mythical'),
(105, 'Legends, Myths & Fables'),
(106, 'Children''s Literature'),
(108, 'Ancient Civilizations');

-- --------------------------------------------------------

--
-- Table structure for table `subgenrebook`
--

CREATE TABLE IF NOT EXISTS `subgenrebook` (
  `BookId` int(11) NOT NULL,
  `SubGenreId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subgenrebook`
--

INSERT INTO `subgenrebook` (`BookId`, `SubGenreId`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 3),
(2, 4),
(3, 1),
(3, 4),
(4, 5),
(4, 6),
(4, 7),
(5, 8),
(5, 9),
(6, 10),
(6, 4),
(7, 6),
(8, 1),
(8, 4),
(8, 7),
(8, 11),
(9, 1),
(9, 4),
(9, 6),
(9, 12),
(10, 13),
(10, 7),
(10, 2),
(11, 3),
(11, 1),
(11, 4),
(12, 6),
(12, 14),
(13, 15),
(13, 16),
(14, 98),
(15, 13),
(16, 3),
(16, 1),
(16, 4),
(16, 2),
(17, 17),
(17, 18),
(17, 7),
(17, 19),
(18, 13),
(19, 20),
(19, 1),
(19, 4),
(19, 5),
(20, 1),
(21, 21),
(21, 22),
(21, 23),
(21, 24),
(22, 25),
(22, 26),
(22, 27),
(23, 28),
(23, 29),
(23, 30),
(24, 21),
(24, 22),
(24, 23),
(24, 31),
(25, 32),
(25, 33),
(25, 34),
(25, 35),
(25, 36),
(26, 8),
(26, 37),
(26, 38),
(26, 39),
(26, 40),
(27, 41),
(27, 42),
(27, 43),
(27, 32),
(27, 33),
(28, 44),
(28, 45),
(28, 46),
(28, 47),
(28, 48),
(29, 49),
(29, 50),
(29, 51),
(29, 46),
(29, 45),
(29, 44),
(29, 48),
(30, 41),
(30, 42),
(30, 43),
(30, 32),
(30, 33),
(31, 52),
(31, 53),
(32, 54),
(32, 55),
(32, 56),
(32, 57),
(32, 58),
(32, 59),
(32, 60),
(33, 41),
(33, 61),
(33, 62),
(33, 63),
(33, 64),
(34, 65),
(34, 66),
(34, 67),
(34, 68),
(34, 28),
(34, 32),
(34, 41),
(35, 21),
(35, 22),
(35, 23),
(35, 31),
(36, 54),
(36, 55),
(36, 56),
(36, 69),
(37, 44),
(37, 45),
(37, 46),
(38, 28),
(38, 29),
(38, 70),
(38, 71),
(38, 72),
(39, 71),
(39, 73),
(39, 74),
(39, 75),
(39, 76),
(40, 52),
(40, 53),
(41, 17),
(41, 18),
(41, 77),
(41, 78),
(41, 79),
(42, 80),
(42, 81),
(42, 20),
(43, 80),
(43, 17),
(43, 82),
(44, 2),
(44, 77),
(44, 83),
(44, 84),
(45, 20),
(45, 85),
(45, 86),
(45, 77),
(45, 84),
(46, 77),
(46, 83),
(46, 84),
(46, 87),
(47, 77),
(47, 87),
(47, 79),
(47, 88),
(48, 98),
(49, 89),
(49, 90),
(49, 91),
(49, 77),
(49, 61),
(49, 34),
(50, 81),
(50, 80),
(50, 20),
(51, 77),
(51, 87),
(51, 79),
(51, 88),
(52, 80),
(52, 17),
(52, 82),
(53, 80),
(53, 92),
(53, 1),
(53, 4),
(54, 93),
(54, 94),
(54, 81),
(55, 95),
(55, 77),
(55, 90),
(55, 79),
(56, 28),
(56, 96),
(56, 97),
(56, 72),
(56, 46),
(57, 80),
(57, 98),
(57, 99),
(58, 20),
(58, 80),
(58, 17),
(59, 17),
(59, 18),
(59, 77),
(59, 78),
(59, 79),
(60, 80),
(60, 20),
(60, 17),
(61, 93),
(61, 20),
(61, 14),
(62, 93),
(62, 80),
(62, 100),
(62, 94),
(63, 101),
(64, 14),
(64, 102),
(65, 14),
(66, 14),
(66, 102),
(66, 20),
(67, 103),
(67, 104),
(67, 105),
(67, 80),
(67, 100),
(68, 101),
(69, 106),
(69, 52),
(69, 100),
(69, 80),
(70, 93),
(70, 80),
(70, 100),
(70, 94),
(71, 1),
(71, 4),
(71, 6),
(71, 7),
(73, 11),
(73, 13),
(73, 95),
(73, 79),
(73, 77),
(74, 15),
(74, 80),
(74, 6),
(75, 80),
(75, 98),
(75, 99),
(76, 16),
(76, 77),
(77, 6),
(77, 12),
(77, 4),
(77, 1),
(78, 20),
(78, 5),
(78, 17),
(78, 108),
(79, 15),
(79, 9),
(79, 68);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `UserId` int(11) NOT NULL,
  `FirstName` varchar(40) NOT NULL,
  `MiddleName` varchar(40) NOT NULL,
  `LastName` varchar(40) NOT NULL,
  `Address` varchar(40) NOT NULL,
  `City` varchar(40) NOT NULL,
  `State` varchar(40) NOT NULL,
  `Country` varchar(40) NOT NULL,
  `Postal` int(11) NOT NULL,
  `Phone` bigint(11) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserId`, `FirstName`, `MiddleName`, `LastName`, `Address`, `City`, `State`, `Country`, `Postal`, `Phone`, `Email`, `Password`) VALUES
(69, 'a', 'a', 'a', 'a', 'a', 'a', 'a', 76123, 8176576659, 'testt4@gmail.com', '$2y$10$n3RYnCAYkzwLAkc17O5W8eBC2SOONmHuIe42GGrYvHBaD/7lKJgF.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`AuthorId`);

--
-- Indexes for table `authorbook`
--
ALTER TABLE `authorbook`
  ADD PRIMARY KEY (`BookId`,`AuthorId`),
  ADD KEY `AuthorId` (`AuthorId`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `GenreId` (`GenreId`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`GenreId`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`OrderId`,`BookId`),
  ADD KEY `BookId` (`BookId`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderId`),
  ADD KEY `UserId` (`UserId`);

--
-- Indexes for table `subgenre`
--
ALTER TABLE `subgenre`
  ADD PRIMARY KEY (`SunGenreId`);

--
-- Indexes for table `subgenrebook`
--
ALTER TABLE `subgenrebook`
  ADD KEY `BookId` (`BookId`),
  ADD KEY `SubGenreId` (`SubGenreId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserId`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `AuthorId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=83;
--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=80;
--
-- AUTO_INCREMENT for table `subgenre`
--
ALTER TABLE `subgenre`
  MODIFY `SunGenreId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=109;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=70;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `authorbook`
--
ALTER TABLE `authorbook`
  ADD CONSTRAINT `authorbook_ibfk_1` FOREIGN KEY (`BookId`) REFERENCES `books` (`Id`),
  ADD CONSTRAINT `authorbook_ibfk_2` FOREIGN KEY (`AuthorId`) REFERENCES `author` (`AuthorId`);

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`GenreId`) REFERENCES `genre` (`GenreId`);

--
-- Constraints for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `orderdetails_ibfk_1` FOREIGN KEY (`OrderId`) REFERENCES `orders` (`OrderId`),
  ADD CONSTRAINT `orderdetails_ibfk_2` FOREIGN KEY (`BookId`) REFERENCES `books` (`Id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `users` (`UserId`);

--
-- Constraints for table `subgenrebook`
--
ALTER TABLE `subgenrebook`
  ADD CONSTRAINT `subgenrebook_ibfk_1` FOREIGN KEY (`BookId`) REFERENCES `books` (`Id`),
  ADD CONSTRAINT `subgenrebook_ibfk_2` FOREIGN KEY (`SubGenreId`) REFERENCES `subgenre` (`SunGenreId`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
