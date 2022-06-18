-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Creato il: Giu 12, 2022 alle 17:30
-- Versione del server: 10.4.21-MariaDB
-- Versione PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `WebPharma`
--
CREATE DATABASE IF NOT EXISTS `WebPharma` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `WebPharma`;

-- --------------------------------------------------------

--
-- Struttura della tabella `farmaco`
--

CREATE TABLE `farmaco` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `image_path` varchar(100) DEFAULT NULL,
  `descrizione` varchar(1000) NOT NULL,
  `prezzo` float NOT NULL,
  `prescrizione` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `farmaco`
--

INSERT INTO `farmaco` (`id`, `nome`, `image_path`, `descrizione`, `prezzo`, `prescrizione`) VALUES
(1, 'Xanax-500-mg', './../../img/xanax.jpeg', 'Lo Xanax è un farmaco che ha come principio attivo l\'Alprazolam, triazolo–benzodiazepina capace di legarsi a livello del sistema nervoso centrale. Come altre benzodiazepine, si lega a siti specifici del recettore GABA e possiede proprietà ansiolitiche, amnesiche, sedative, ipnotiche, anticonvulsivanti. Viene principalmente prescritto ad adulti affetti da disturbi d\'ansia, da disturbi d\'ansia causati dalla depressione, da attacchi di panico, come il disturbo d’ansia generalizzato (DAG) o il disturbo d’ansia sociale (DAS). Lo Xanax si trova in commercio sotto forma di compresse da 0.25, 0.50 e 1 mg., oppure sotto forma di gocce orali in soluzione contenente 0,75 mg/ml.', 5.4, 1),
(2, 'Tachipirina-500-mg', './../../img/tachipirina.jpeg', 'Tachipirina contiene il principio attivo paracetamolo che agisce riducendo la febbre (antipiretico) e\r\nalleviando il dolore (analgesico).\r\nTachipirina è utilizzato negli adulti, adolescenti e bambini per:\r\n- il trattamento sintomatico degli stati febbrili quali l’influenza, le malattie esantematiche (malattie infettive\r\ntipiche dei bambini e degli adolescenti), le malattie acute del tratto respiratorio, ecc.\r\n- dolori di varia origine e natura (mal di testa, nevralgie, dolori muscolari ed altre manifestazioni dolorose\r\ndi media entità).', 5.99, 0),
(3, 'Augmentin-750-mg', './../../img/augmentin.jpeg', 'Augmentin è un farmaco a base di Amoxicillina Triidrato e Potassio Clavulanato: l\'amoxicillina è un antibiotico appartenente alla classe dei ß-lattamici, gruppo delle penicilline semisintetiche, deputato a combatte i batteri nel corpo; il potassio è una forma di acido clavulanico simile alla penicillina, che combatte i batteri che spesso resistono alle penicilline e ad altri antibiotici. Augmentin è infatti utilizzato nel trattamento di diverse infezioni causate da batteri diversi, tra cui frequentemente: sinusite batterica, otite acuta, polmonite, infezioni alle orecchie, bronchiti, infezioni del tratto urinario (ad esempio cistite), infezioni della pelle e dei tessuti molli, infezioni ossee ed articolari, in particolare osteomielite.\r\n', 5.99, 0),
(4, 'Voltaren-Emulgel-2%', './../../img/voltaren.jpeg', 'Voltaren Emulgel contiene il principio attivo diclofenac dietilammonio. Il diclofenac appartiene alla classe\r\ndei farmaci antiinfiammatori non steroidei (FANS) ed è usato per ridurre il dolore e l’infiammazione.\r\nVoltaren Emulgel è indicato per il trattamento locale di stati dolorosi e infiammatori di natura reumatica o\r\ntraumatica che interessano:\r\n• articolazioni, ad es. osteoartrosi e artriti\r\n• muscoli, ad es. contratture o lesioni\r\n• tendini e legamenti, ad es. tendiniti ', 5.99, 0),
(5, 'Brufen-400-mg', './../../img/brufen.jpeg', 'Brufen è un medicinale a base di ibuprofene, un analgesico e antinfiammatorio utile per il trattamento del dolore da lieve a moderato come mal di testa, mal di denti, dolori muscolari e articolari, dolori mestruali, febbre e dolore associati a raffreddore.\r\n\r\n', 5.99, 1),
(6, 'Be-Total', './../../img/betotal-advance-b12-30-flaconcini.jpeg', 'Integratore alimentare specificatamente formulato per fornire un sostegno all\'organismo in caso di stanchezza fisica e mentale.\r\nLa capacità dell\'organismo di assorbire alcuni nutrienti essenziali, tra i quali la vitamina B12, tende a ridursi fisiologicamente negli anni. Ecco perchè spesso ci si sente deboli e stanchi, a livello fisico e mentale. BE-TOTAL ADVANCE B12 contiene un alto dosaggio di vitamina B12, calibrato proprio per i bisogni delle persone dopo i 50 anni.\r\n', 5.99, 1),
(7, 'Colchicina-Lirca-0.5g', './../../img/COLCHICINA-LIRCA.png', 'COLCHICINA LIRCA contiene il principio attivo colchicina ed appartiene ad un gruppo di medicinali chiamati\r\nantigottosi che riducono l’infiammazione dovuta a depositi di acido urico nei tessuti.\r\nLa colchicina riduce l’infiammazione anche in malattie diverse dalla gotta. Questo medicinale è indicato:\r\n• per il trattamento di attacchi di gotta (artrite gottosa), un’infiammazione delle articolazioni, causata\r\ndall’aumento di acido urico;\r\n• per la prevenzione dell’artrite gottosa ricorrente;\r\n• per il trattamento della pericardite acuta, una infiammazione della membrana che avvolge il cuore;', 5.99, 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `prenotazione`
--

CREATE TABLE `prenotazione` (
  `farmaco` int(11) NOT NULL,
  `utente` varchar(100) NOT NULL,
  `data` varchar(50) NOT NULL,
  `stato` varchar(100) NOT NULL,
  `quantita` int(11) NOT NULL,
  `codice` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `prenotazione`
--

INSERT INTO `prenotazione` (`farmaco`, `utente`, `data`, `stato`, `quantita`, `codice`) VALUES
(1, 'daniel', 'June 11, 2022, 10:24 am', 'ritirato', 1, 21),
(1, 'daniel', 'June 11, 2022, 9:52 am', 'non ritirato', 3, 20),
(1, 'daniel', 'June 9, 2022, 7:20 pm', 'non ritirato', 1, 18),
(1, 'niccolo', 'June 12, 2022, 11:46 am', 'ritirato', 1, 26),
(1, 'Rennalaaa', 'June 12, 2022, 11:21 am', 'ritirato', 1, 23),
(2, 'daniel', 'June 12, 2022, 11:44 am', 'ritirato', 1, 25),
(2, 'Rennalaaa', 'June 12, 2022, 11:39 am', 'ritirato', 1, 24),
(3, 'daniel', 'June 11, 2022, 2:08 pm', 'annullato', 1, 22),
(4, 'daniel', 'June 10, 2022, 12:00 pm', 'ritirato', 1, 19);

-- --------------------------------------------------------

--
-- Struttura della tabella `review`
--

CREATE TABLE `review` (
  `utente` varchar(100) NOT NULL,
  `farmaco` int(100) NOT NULL,
  `data` varchar(50) NOT NULL,
  `testo` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `review`
--

INSERT INTO `review` (`utente`, `farmaco`, `data`, `testo`) VALUES
('daniel', 1, 'June 12, 2022, 11:34 am', 'Mi avevano prescritto 10 gocce di Xanax al bisogno per ansia e attacchi di panico.\\r\\nNon sono mai stata così male: preso nel tardo pomeriggio, l\\\'ansia è passata ma la notte ho avuto forti tremori (ho completamente perso il controllo dei muscoli), e incubi a non finire.\\r\\nIo mai più Xanax.'),
('daniel', 2, 'June 12, 2022, 11:45 am', 'Quando ho i sintomi influenzali o la febbre acquisto sempre le Compresse Tachipirina. Si tratta di un prodotto che va acquistato in farmacia senza bisogno di ricetta medica ed è molto efficace per combattere i sintomi influenzali e far scendere la febbre. '),
('niccolo', 1, 'June 12, 2022, 11:50 am', 'Se una persona ha una buona qualità di vita assumendo 3 volte al giorno un farmaco, mai mettere mano ad un equilibrio che si è trovato.\\r\\nLe problematiche del sistema nervoso sono diverse da persona a persona.\\r\\nIo prendo farmaci 8 volte al giorno e non ho un grande benessere...'),
('Rennalaaa', 1, 'June 12, 2022, 11:35 am', 'Io prendo una compressa di Xanax da 1 mg. solo quando prendo l\\\'aereo, poiche\\\' non sono mai riuscita a superare la paura di volare... Solo così riesco a controllare l\\\'ansia e gli attacchi di panico durante tutta la durata del volo.'),
('Rennalaaa', 2, 'June 12, 2022, 11:41 am', 'In caso di febbre o sintomi della stessa, tachipirina è sempre l\\\'ideale per me.Le compresse devono essere ingerite, meglio se a stomaco pieno, se la compressa sembra troppo grande consiglio di spezzarla a metà.');

-- --------------------------------------------------------

--
-- Struttura della tabella `utente`
--

CREATE TABLE `utente` (
  `username` varchar(100) NOT NULL,
  `hashvalue` varchar(1000) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `tipo` varchar(100) NOT NULL DEFAULT 'cliente',
  `codice_fiscale` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `utente`
--

INSERT INTO `utente` (`username`, `hashvalue`, `email`, `telefono`, `tipo`, `codice_fiscale`) VALUES
('Antonella', '$2y$10$zIw0SgSKgswD1BhyFlooYeaI5flF7s33XtHVa/UeqG.GwGiq9WooW', 'deiana.studio1@gmail.com', '3293449041', 'farmacista', ''),
('daniel', '$2y$10$zIw0SgSKgswD1BhyFlooYeaI5flF7s33XtHVa/UeqG.GwGiq9WooW', 'deiana.studio1@gmail.com', '3293449041', 'cliente', ''),
('Niccolo', '$2y$10$UZggLArTUPm5L9WFvU5yX.z0sMnmxtzRttQpLdlw8GUp1jYPiaxsG', 'deiana.studio1@gmail.com', '3293449041', 'cliente', 'DNEDNL01A21G015L'),
('Rennalaaa', '$2y$10$LUDLXM1t7kogYvNOblncS.odS.nEscOazyuDWQT.VOMXCiC39ptSO', 'deiana.studio1@gmail.com', '3293449041', 'cliente', 'DNEDNL01A21G015L'),
('valentina', '$2y$10$qBD0nMOToqPPexFSwcpU1e.XUdyut3zLzYzcnHbwb7jYGOFixlLe6', 'valentina22092000@gmail.com', '3293449041', 'farmacista\r\n', '');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `farmaco`
--
ALTER TABLE `farmaco`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `prenotazione`
--
ALTER TABLE `prenotazione`
  ADD PRIMARY KEY (`farmaco`,`utente`,`data`),
  ADD UNIQUE KEY `codice` (`codice`),
  ADD KEY `farmaco` (`farmaco`,`utente`);

--
-- Indici per le tabelle `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`utente`,`farmaco`);

--
-- Indici per le tabelle `utente`
--
ALTER TABLE `utente`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `prenotazione`
--
ALTER TABLE `prenotazione`
  MODIFY `codice` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`utente`) REFERENCES `utente` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
