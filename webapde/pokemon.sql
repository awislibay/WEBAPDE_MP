-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2018 at 01:30 PM
-- Server version: 5.7.20-log
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pokemon`
--

-- --------------------------------------------------------

--
-- Table structure for table `pokedex`
--

CREATE TABLE `pokedex` (
  `pokedexID` int(11) NOT NULL,
  `highscore` int(11) NOT NULL DEFAULT '0',
  `lowscore` int(11) NOT NULL DEFAULT '0',
  `accumulatedScore` int(11) NOT NULL DEFAULT '0',
  `trainerID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pokedex`
--

INSERT INTO `pokedex` (`pokedexID`, `highscore`, `lowscore`, `accumulatedScore`, `trainerID`) VALUES
(17, 0, 0, 0, 32);

-- --------------------------------------------------------

--
-- Table structure for table `pokedexlog`
--

CREATE TABLE `pokedexlog` (
  `timesSeen` int(11) NOT NULL,
  `timesCaught` int(11) NOT NULL,
  `pokemonID` int(11) NOT NULL,
  `pokedexID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pokemon`
--

CREATE TABLE `pokemon` (
  `pokemonName` varchar(50) NOT NULL,
  `pokemonType` varchar(50) NOT NULL,
  `pokemonSubtype` varchar(50) DEFAULT NULL,
  `pokemonDescription` longtext,
  `pokemonPts` int(11) NOT NULL,
  `pokedexID` int(11) DEFAULT NULL,
  `pokemonID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pokemon`
--

INSERT INTO `pokemon` (`pokemonName`, `pokemonType`, `pokemonSubtype`, `pokemonDescription`, `pokemonPts`, `pokedexID`, `pokemonID`) VALUES
('Bulbasaur', 'Grass', 'Poison', 'Bulbasaur can be seen napping in bright sunlight. There is a seed on its back. By soaking up the sun&#39s rays, the seed grows progressively larger.', 100, NULL, 1),
('Ivysaur', 'Grass', 'Poison', 'To support its bulb, Ivysaur&#39s legs grow sturdy. If it spends more time lying in the sunlight, the bud will soon bloom into a large flower.', 500, NULL, 2),
('Venusaur', 'Grass', 'Poison', 'Venusaur&#39s flower is said to take on vivid colors if it gets plenty of nutrition and sunlight. The flower&#39s aroma soothes the emotions of people.', 1000, NULL, 3),
('Charmander', 'Fire', NULL, 'The flame that burns at the tip of its tail is an indication of its emotions. The flame wavers when Charmander is happy, and blazes when it is enraged.', 100, NULL, 4),
('Charmeleon', 'Fire', NULL, 'Without pity, its sharp claws destroy foes. If it encounters a strong enemy, it becomes agitated, and the flame on its tail flares with a bluish white color.', 500, NULL, 5),
('Charizard', 'Fire', 'Flying', 'A Charizard flies about in search of strong opponents. It breathes intense flames that can melt any material. However, it will never torch a weaker foe.', 1000, NULL, 6),
('Squirtle', 'Water', NULL, 'Its shell is not just for protection. Its rounded shape and the grooves on its surface minimize resistance in water, enabling Squirtle to swim at high speeds.', 100, NULL, 7),
('Wartotle', 'Water', NULL, 'Its large tail is covered with rich, thick fur that deepens in color with age. The scratches on its shell are evidence of this Pokémon&#39s toughness in battle.', 500, NULL, 8),
('Blastoise', 'Water', NULL, 'The waterspouts that protrude from its shell are highly accurate. Their bullets of water can precisely nail tin cans from a distance of over 160 feet.', 1000, NULL, 9),
('Weedle', 'Bug', 'Poison', 'A Weedle has an extremely acute sense of smell. It distinguishes its favorite kinds of leaves from those it dislikes by sniffing with its big red proboscis (nose),\r\n	', 100, NULL, 10),
('Kakuna', 'Bug', 'Poison', 'It remains virtually immobile while it clings to a tree. However, on the inside, it busily prepares for evolution. This is evident from how hot its shell becomes.', 300, NULL, 11),
('Beedrill', 'Bug', 'Poison', 'A Beedrill is extremely territorial. For safety reasons, no one should ever approach its nest. If angered, they will attack in a swarm.', 500, NULL, 12),
('Pidgey', 'Flying', 'Normal', 'It has an extremely sharp sense of direction. It can unerringly return home to its nest, however far it may be removed from its familiar surroundings.', 100, NULL, 13),
('Pdgeotto', 'Flying', 'Normal', 'This Pokémon flies around, patrolling its large territory. If its living space is violated, it shows no mercy in thoroughly punishing the foe with its sharp claws.', 300, NULL, 14),
('Pidgeot', 'Flying', 'Normal', 'This Pokémon has gorgeous, glossy feathers. Many trainers are so captivated by the beautiful feathers on its head that they choose Pidgeot as their Pokémon.', 800, NULL, 15),
('Pikachu', 'Electric', NULL, 'It stores electricity in the electric sacs on its cheeks. When it releases pent-up energy in a burst, the electric power is equal to a lightning bolt.', 300, NULL, 16),
('Raichu', 'Electric', NULL, 'If it stores too much electricity, its behavior turns aggressive. To avoid this, it occasionally discharges excess energy and calms itself down.', 800, NULL, 17),
('Jigglypuff', 'Normal', NULL, 'Nothing can avoid falling asleep hearing a Jigglypuff&#39s song. The sound waves of its singing voice match the brain waves of someone in a deep sleep.', 100, NULL, 18),
('Wigglytuff', 'Normal', NULL, 'Its fur is the ultimate in luxuriousness. Sleeping alongside a Wigglytuff is simply divine. Its body expands seemingly without end when it inhales.', 300, NULL, 19),
('Zubat', 'Poison', 'Flying', 'While living in pitch-black caverns, their eyes gradually grew shut and deprived them of vision. They use ultrasonic waves to detect obstacles.', 100, NULL, 20),
('Golbat', 'Poison', 'Flying', 'Its fangs easily puncture even thick animal hide. It loves to feast on the blood of people and Pokémon. It flits about in darkness and strikes from behind.', 300, NULL, 21),
('Oddish', 'Poison', 'Grass', 'This Pokémon grows by absorbing moonlight. During the daytime, it buries itself in the ground, leaving only its leaves exposed to avoid detection by its enemies.', 100, NULL, 22),
('Gloom', 'Poison', 'Grass', 'A horribly noxious honey drools from its mouth. One whiff of the honey can result in memory loss. Some fans are said to enjoy this overwhelming stink, however.', 300, NULL, 23),
('Vileplume', 'Poison', 'Grass', 'In seasons when it produces more pollen, the air around a Vileplume turns yellow with the powder as it walks. The pollen is highly toxic and causes paralysis.', 800, NULL, 24),
('Meowth', 'Normal', NULL, 'Meowth withdraw their sharp claws into their paws to silently sneak about. For some reason, this Pokémon loves shiny coins that glitter with light.', 100, NULL, 25),
('Persian', 'Normal', NULL, 'A Persian&#39s six bold whiskers sense air movements to determine what is in its vicinity. It becomes docile if grabbed by the whiskers.', 300, NULL, 26),
('Mankey', 'Fighting', NULL, 'When it starts shaking and its nasal breathing turns rough, it&#39s a sure sign of anger. However, since this happens instantly, there is no time to flee.', 100, NULL, 27),
('Primeape', 'Fighting', NULL, 'When it becomes furious, its blood circulation becomes more robust, and its muscles are made stronger. But it also becomes much less intelligent.', 300, NULL, 28),
('Psyduck', 'Water', NULL, 'When its headache intensifies, it starts using strange powers. However, it has no recollection of its powers, so it always looks befuddled and bewildered.', 100, NULL, 29),
('Golduck', 'Water', NULL, 'A Golduck is an adept swimmer. It sometimes joins competitive swimmers in training. It uses psychic powers when its forehead shimmers with light.', 300, NULL, 30),
('Slowpoke', 'Psychic', 'Water', 'It catches prey by dipping its tail in water at the side of a river. But it often forgets what it is doing and spends entire days just loafing at the edge of the water', 100, NULL, 40),
('Slowbro', 'Psychic', 'Water', 'Its tail has a Shellder firmly attached with a bite. As a result, the tail can&#39t be used for fishing anymore. This forces it to reluctantly swim and catch prey.', 500, NULL, 41),
('Gastly', 'Ghost', 'Poison', 'When exposed to a strong wind, a Gastly&#39s gaseous body quickly dwindles away. They cluster under the eaves of houses to escape the ravages of wind.', 100, NULL, 42),
('Haunter', 'Ghost', 'Poison', 'If a Haunter beckons you while it is floating in darkness, do not approach it. This Pokémon will try to lick you with its tongue and steal your life away.', 300, NULL, 43),
('Gengar', 'Ghost', 'Poison', 'Deep in the night, your shadow cast by a streetlight may suddenly overtake you. It is actually a Gengar running past you, pretending to be your shadow.', 800, NULL, 44),
('Onix', 'Ground', 'Rock', 'There is a magnet in its brain that prevents an Onix from losing direction while tunneling. As it grows older, its body becomes steadily rounder and smoother.', 500, NULL, 45),
('Voltorb', 'Electric', NULL, 'It bears an uncanny and unexplained resemblance to a Poké Ball. Because it explodes at the slightest shock, even veteran trainers treat it with caution.', 100, NULL, 46),
('Electrode', 'Electric', NULL, 'They appear in great numbers at electric power plants. Because they feed on electricity, they cause massive and chaotic blackouts in nearby cities.', 300, NULL, 47),
('Cubone', 'Ground', NULL, 'It pines for the mother it will never see again. Seeing a likeness of its mother in the full moon, it cries. The stains on the skull it wears are from its tears.', 300, NULL, 48),
('Marowak', 'Ground', NULL, 'A Marowak is the evolved form of a Cubone that has grown tough by overcoming the grief of losing its mother. Its tempered and hardened spirit is not easily broken.', 500, NULL, 49),
('Hitmonchan', 'Fighting', NULL, 'A Hitmonchan is said to possess the spirit of a boxer who aimed to become the world champion. Having an indomitable spirit means that it will never give up.', 500, NULL, 50),
('Koffing', 'Poison', NULL, 'Getting up close to a Koffing will give you a chance to observe, through its thin skin, the toxic gases swirling inside. It blows up at the slightest stimulation.', 300, NULL, 51),
('Weezing', 'Poison', NULL, 'By diluting its toxic gases with a special process, the highest grade of perfume can be extracted. To Weezing, gases emanating from garbage are the ultimate feast.', 500, NULL, 52),
('Chansey', 'Normal', NULL, 'Chansey lay nutritionally excellent eggs every day. The eggs are so delicious, they are eagerly devoured by even those people who have lost their appetite.', 500, NULL, 53),
('Kangaskhan', 'Normal', NULL, 'If you come across a young Kangaskhan playing by itself, never try to catch it. The baby&#39s parent is sure to be in the area, and it will become violently enraged.', 500, NULL, 54),
('Horsea', 'Water', NULL, 'By cleverly flicking the fins on its back side to side, it moves in any direction while facing forward. It spits ink to escape if it senses danger.', 100, NULL, 55),
('Seadra', 'Water', NULL, 'The poisonous barbs all over its body are highly valued as ingredients for making traditional herbal medicine. It shows no mercy to anything approaching its nest.', 500, NULL, 56),
('Staryu', 'Water', NULL, 'It gathers with others in the night and makes its red core glow on and off with the twinkling stars. It can regenerate limbs if they are severed from its body.', 100, NULL, 57),
('Starmie', 'Psychic', 'Water', 'People in ancient times imagined that Starmie were transformed from the reflections of stars that twinkled on gentle waves at night.', 500, NULL, 58),
('Scyther', 'Bug', 'Flying', 'Its blindingly fast speed adds to the sharpness of its twin forearm scythes. The scythes can slice through thick logs in one wicked stroke.', 500, NULL, 59),
('Jynx', 'Psychic', 'Ice', 'A Jynx sashays rhythmically as if it were dancing. Its motions are so bouncingly alluring, people seeing it are compelled to shake their hips without noticing.', 500, NULL, 60),
('Electabuzz', 'Electric', NULL, 'When a storm approaches, it competes with others to scale heights that are likely to be stricken by lightning. Some towns use Electabuzz in place of lightning rods.', 800, NULL, 61),
('Magikarp', 'Water', NULL, 'Its swimming muscles are weak, so it is easily washed away by currents. In places where water pools, you can see many Magikarp deposited there by the flow.', 10, NULL, 62),
('Gyarados', 'Water', 'Flying', 'It is an extremely vicious and violent Pokémon. When humans begin to fight, it will appear and burn everything to the ground with intensely hot flames.', 800, NULL, 63),
('Evee', 'Normal', NULL, 'An Eevee has an unstable genetic makeup that suddenly mutates due to its environment. Radiation from various stones causes this Pokémon to evolve.', 300, NULL, 64),
('Jolteon', 'Electric', NULL, 'Its cells generate weak power that is amplified by its fur&#39s static electricity to drop thunderbolts. The bristling fur is made of electrically charged needles.', 800, NULL, 65),
('Flareon', 'Fire', NULL, 'Flareon&#39s fluffy fur releases heat into the air so that its body does not get excessively hot. Its body temperature can rise to a maximum of 1,650 degrees F.', 800, NULL, 66),
('Vaporeon', 'Water', NULL, 'Vaporeon underwent a spontaneous mutation and grew fins and gills that allow them to live underwater. They have the ability to freely control water.', 800, NULL, 67),
('Dratini', 'Dragon', NULL, 'A Dratini continually molts and sloughs off its old skin. It does so because the life energy within its body steadily builds to reach uncontrollable levels.', 300, NULL, 68),
('Dragonair', 'Dragon', NULL, 'A Dragonair stores an enormous amount of energy inside its body. It is said to alter the weather around it by loosing energy from the crystals on its neck and tail.', 800, NULL, 69),
('Dragonite', 'Dragon', 'Flying', 'It can circle the globe in just 16 hours. It is a kindhearted Pokémon that leads lost and foundering ships in a storm to the safety of land.', 1000, NULL, 70),
('Agumon', 'Digimon', NULL, 'How did a digimon end up in here??? I mean SHINY CHARMANDERMON-KUN!!!', 5000, NULL, 71),
('Iris', 'Bug', NULL, 'I didn&#39t sign up for this shi...', 10000, NULL, 72),
('Terence', 'Bug', NULL, 'Love me.', 10000, NULL, 73),
('Karl', 'Bug', NULL, 'Karururururururururururururururururururururururururururu wants to die.', 10000, NULL, 74),
('Liam', 'Bug', NULL, 'Your Mom.', 10000, NULL, 75),
('James', 'Bug', NULL, 'I don&#39t even know anymore.', 10000, NULL, 76),
('Czeide', 'Bug', 'Ghost', 'No pork plz.', 10000, NULL, 77);

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE `trainer` (
  `trainerID` int(11) NOT NULL,
  `trainerName` varchar(50) NOT NULL,
  `trainerGender` varchar(2) NOT NULL,
  `trainerUsername` varchar(50) NOT NULL,
  `trainerPassword` varchar(50) NOT NULL,
  `userCreatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`trainerID`, `trainerName`, `trainerGender`, `trainerUsername`, `trainerPassword`, `userCreatedAt`) VALUES
(32, 'Karl', 'M', 'Karu', 'karu123', '2017-12-14 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pokedex`
--
ALTER TABLE `pokedex`
  ADD PRIMARY KEY (`pokedexID`),
  ADD KEY `trainerID` (`trainerID`);

--
-- Indexes for table `pokedexlog`
--
ALTER TABLE `pokedexlog`
  ADD KEY `pokemonID` (`pokemonID`),
  ADD KEY `pokedexID` (`pokedexID`);

--
-- Indexes for table `pokemon`
--
ALTER TABLE `pokemon`
  ADD PRIMARY KEY (`pokemonID`),
  ADD KEY `pokedexID` (`pokedexID`);

--
-- Indexes for table `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`trainerID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pokedex`
--
ALTER TABLE `pokedex`
  MODIFY `pokedexID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `trainer`
--
ALTER TABLE `trainer`
  MODIFY `trainerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pokedex`
--
ALTER TABLE `pokedex`
  ADD CONSTRAINT `pokedex_ibfk_1` FOREIGN KEY (`trainerID`) REFERENCES `trainer` (`trainerID`);

--
-- Constraints for table `pokedexlog`
--
ALTER TABLE `pokedexlog`
  ADD CONSTRAINT `pokedexlog_ibfk_1` FOREIGN KEY (`pokemonID`) REFERENCES `pokemon` (`pokemonID`),
  ADD CONSTRAINT `pokedexlog_ibfk_2` FOREIGN KEY (`pokedexID`) REFERENCES `pokemon` (`pokemonID`);

--
-- Constraints for table `pokemon`
--
ALTER TABLE `pokemon`
  ADD CONSTRAINT `pokemon_ibfk_1` FOREIGN KEY (`pokedexID`) REFERENCES `pokedex` (`pokedexID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
