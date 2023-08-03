-- phpMyAdmin SQL Dump
-- version 3.3.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 04, 2013 at 02:38 PM
-- Server version: 5.1.63
-- PHP Version: 5.3.5-1ubuntu7.11

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `prog_pausas`
--

-- --------------------------------------------------------

--
-- Table structure for table `Pac_actividades`
--

CREATE TABLE IF NOT EXISTS `Pac_actividades` (
  `act_id` int(11) NOT NULL,
  `act_titulo` varchar(255) NOT NULL,
  `act_contenido` longtext NOT NULL,
  `act_nivel` int(11) NOT NULL,
  `act_parte_actua` varchar(255) NOT NULL,
  PRIMARY KEY (`act_id`),
  UNIQUE KEY `nivel` (`act_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Pac_actividades`
--

INSERT INTO `Pac_actividades` (`act_id`, `act_titulo`, `act_contenido`, `act_nivel`, `act_parte_actua`) VALUES
(3, 'actividad  para  hombros', '<html dir="ltr">\r\n    <head>\r\n        <title></title>\r\n    </head>\r\n    <body>\r\n        <p><img align="left" width="300" height="257" alt="" src="http://localhost/pausas/uploadsimage/images.jpeg" style="MARGIN-RIGHT: 10px" /></p>\r\n        <h3>actividad para hombros</h3>\r\n        <p style="text-align: justify;">1.Circulo de hombros al frente y atr&aacute;s.</p>\r\n        <p style="text-align: left;">&nbsp;2.coloca  las manos sobre los hombros y dibuja simult&aacute;neamente 5 c&iacute;rculos grandes  hacia atr&aacute;s de forma lenta y suave. Repite el movimiento hacia  adelante.</p>\r\n        <p style="text-align: left;">&nbsp;</p>\r\n    </body>\r\n</html>', 1, 'hombros'),
(333, 'actividad para hombros', '<html dir="ltr">\r\n    <head>\r\n        <title></title>\r\n    </head>\r\n    <body>\r\n        <p><img align="left" width="300" height="257" style="MARGIN-RIGHT: 10px" src="http://localhost/pausas/uploadsimage/hombros2.jpg" alt="" /></p>\r\n        <h3 style="text-align: justify;">actividad para hombros</h3>\r\n        <p style="text-align: justify;">1.coloca uno de los brazos por encima de la cabeza.Toma el codo contrario de la mano hala suavemente el codo hacia la cabeza,inhala y cuenta hasta cinco.Vuelve a la posicion inicial exhalando.Haz lo mismo con el lado contrario 3 o 4 veces.</p>\r\n        <p style="text-align: justify;">2.Con los brazos relajados al lado del cuerpo, dibuja con ambos  hombros  simult&aacute;neamente 5 c&iacute;rculos grandes hacia atr&aacute;s de forma pausada.   Luego, dibuja los c&iacute;rculos hacia adelante.</p>\r\n    </body>\r\n</html>', 1, 'hombros'),
(4, 'actividad  para  cuello', '<html dir="ltr">\r\n    <head>\r\n        <title></title>\r\n    </head>\r\n    <body>\r\n        <p><img align="left" width="300" height="257" style="MARGIN-RIGHT: 10px" src="http://localhost/pausas/uploadsimage/0.jpg" alt="" /></p>\r\n        <h3>actividad para cuello</h3>\r\n        <p style="text-align: justify;">1.Flexion lateral de cuello, izquerda y derecha.</p>\r\n        <p style="text-align: justify;">2.Coloca  la mano derecha sobre la cabeza y cerca de la oreja izquierda, inclina  la cabeza ayud&aacute;ndote con la mano para que intentes tocar el hombro  derecho con la oreja o hasta sentir una leve tensi&oacute;n en el lado  izquierdo del cuello. Conserva el estiramiento por 10 segundos y lleva  la cabeza al centro para luego realizar el estiramiento del lado  izquierdo acercando la oreja al hombro correspondiente. Repite este  ejercicio 3 veces a cada lado.</p>\r\n    </body>\r\n</html>', 1, 'cuello'),
(7, 'actividad  para  codo', '<html dir="ltr">\r\n    <head>\r\n        <title></title>\r\n    </head>\r\n    <body>\r\n        <p><img align="left" width="300" height="257" style="MARGIN-RIGHT: 10px" src="http://localhost/pausas/uploadsimage/codo-tenista.jpg" alt="" /></p>\r\n        <h3>actividad para codo</h3>\r\n        <p style="text-align: justify;">1. Flexi&oacute;n y extensi&oacute;n de codo.</p>\r\n        <p style="text-align: justify;">2.Flexiona  los codos dejando las palmas de las manos hacia abajo, empu&ntilde;a tus manos  y realiza c&iacute;rculos con las mu&ntilde;ecas en forma pausada. Realiza este  movimiento cinco veces hacia afuera y cinco veces hacia adentro.</p>\r\n    </body>\r\n</html>', 1, 'codo'),
(8, 'actividad  para  muÃ±ecas ', '<html dir="ltr">\r\n    <head>\r\n        <title></title>\r\n    </head>\r\n    <body>\r\n        <p><img align="left" width="300" height="257" src="http://localhost/pausas/uploadsimage/mu%C3%B1ecas.jpg" style="MARGIN-RIGHT: 10px" alt="" /></p>\r\n        <h3 style="text-align: justify;">actividad para mu&ntilde;ecas</h3>\r\n        <p>1. Flexi&oacute;n y extensi&oacute;n de manos.</p>\r\n    </body>\r\n</html>', 1, 'muÃ±ecas'),
(12, 'actividad  para  cadera', '<html dir="ltr">\r\n    <head>\r\n        <title></title>\r\n    </head>\r\n    <body>\r\n        <p><img align="left" width="300" height="257" style="MARGIN-RIGHT: 10px" src="http://localhost/pausas/uploadsimage/Anatomia-de-Cadera.jpg" alt="" /></p>\r\n        <h3>actividad para cadera</h3>\r\n        <p style="text-align: justify;">1- Flexion y extencion del tronco.</p>\r\n        <p style="text-align: justify;">2.De pie, con la espalda recta y las rodillas semiflexionadas, coloca las manos en la cintura y lleva la cadera hacia adelante, sost&eacute;n por cinco segundos, vuelve al centro y repite hacia atr&aacute;s sosteniendo por igual tiempo.</p>\r\n    </body>\r\n</html>', 1, 'cadera'),
(15, 'actividad  para  piernas', '<html dir="ltr">\r\n    <head>\r\n        <title></title>\r\n    </head>\r\n    <body>\r\n        <p><img align="left" width="300" height="257" style="MARGIN-RIGHT: 10px" src="http://localhost/pausas/uploadsimage/pierna-de-la-anatom%C3%ADa-thumb2065212.jpg" alt="" /></p>\r\n        <h3>actividad para piernas</h3>\r\n        <p style="text-align: justify;">1.Flexion y extencion de rodilla.</p>\r\n        <p style="text-align: justify;">2.Levanta la pierna izquierda llevando a la rodilla a la altura de la cadera, imagina que el pie est&aacute; ubicado sobre el pedal de una bicicleta y empieza a pedalear de forma suave hacia adelante. Realiza 5 movimientos de pedaleo suaves y cambia de pierna.</p>\r\n        <p style="text-align: justify;">3.De pie, dibuja con toda la pierna derecha 5 c&iacute;rculos grandes hacia  adentro, realizando el movimiento desde la cadera. Descansa y despu&eacute;s  dibuja cinco c&iacute;rculos hacia afuera.</p>\r\n        <p style="text-align: justify;">4.De pie, con la espalda recta, dobla hacia atr&aacute;s la pierna derecha y  toma la punta del pie con la mano derecha, manteniendo la pierna  izquierda semiflexionada, con ambas rodillas el mismo nivel y el tronco  erguido. Si observas molestias, homigueo o mareo suspende la actividad y  consulta a tu medico.</p>\r\n        <p style="text-align: justify;">&nbsp;</p>\r\n    </body>\r\n</html>', 1, 'pierna'),
(18, 'actividad  para  tobillo', '<html dir="ltr">\r\n    <head>\r\n        <title></title>\r\n    </head>\r\n    <body>\r\n        <p><img align="left" width="300" height="257" style="MARGIN-RIGHT: 10px" src="http://localhost/pausas/uploadsimage/tobillo.jpeg" alt="" /></p>\r\n        <h3>actividad para tobillos</h3>\r\n        <p style="text-align: justify;">1.Flexion y extension del tobilloderecho e izquierdo.</p>\r\n    </body>\r\n</html>', 1, 'tobillo'),
(21, 'actividades para  manos', '<html dir="ltr">\r\n    <head>\r\n        <title></title>\r\n    </head>\r\n    <body>\r\n        <p><img align="left" width="300" height="257" src="http://localhost/pausas/uploadsimage/manos.jpg" style="MARGIN-RIGHT: 10px" alt="" /></p>\r\n        <h3>actividad para manos</h3>\r\n        <p style="text-align: justify;">1.Estiramiento de la mano en extensi&oacute;n. Se coloca el brazo extendido con  la palma de lamano hacia abajo, con la ayuda de la mano contraria se  estirara hacia atr&aacute;s la mano de laparte de la palma de esta, se alterna  con la otra mano.</p>\r\n    </body>\r\n</html>', 1, 'manos'),
(1, 'actividad para cuello', '<html dir="ltr">\r\n    <head>\r\n        <title></title>\r\n    </head>\r\n    <body>\r\n        <p style="text-align: justify;"><img align="left" width="300" height="257" style="MARGIN-RIGHT: 10px" src="http://localhost/pausas/uploadsimage/cuello%20mujer.jpg" alt="" /></p>\r\n        <h3 style="text-align: justify;">actividad cuello</h3>\r\n        <p style="text-align: justify;">1.Con las dos manos, masajea los m&uacute;sculos posteriores del cuello y en la regi&oacute;n superior en la espalda. Realiza este ejercicio por 15 segundos.</p>\r\n        <p style="text-align: justify;">2.Flexiona  la cabeza, intentando tocar tu pecho con el ment&oacute;n. En esta posici&oacute;n,  lleva suavemente el ment&oacute;n hacia el lado derecho por 10&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; segundos y luego  ll&eacute;valo hacia el lado izquierdo.</p>\r\n        <p style="text-align: justify;">3.Gira suavemente la cabeza hacia el lado derecho, sost&eacute;n la mirada por encima del hombro por 10 segundos, regresa al centro y luego volt&eacute;ala hacia el lado izquierdo.</p>\r\n        <p style="text-align: justify;">&nbsp;</p>\r\n    </body>\r\n</html>', 1, 'cuello'),
(24, 'actividades para columna', '<html dir="ltr">\r\n    <head>\r\n        <title></title>\r\n    </head>\r\n    <body>\r\n        <p style="text-align: justify;"><img align="left" width="300" height="257" style="MARGIN-RIGHT: 10px" src="http://localhost/pausas/uploadsimage/columna.jpg" alt="" /></p>\r\n        <h3 style="text-align: justify;">actividad para columna</h3>\r\n        <p style="text-align: justify;">1.Estiramiento de la columna vertebral en extensi&oacute;n. De la posici&oacute;n firme  se entrelazan losdedos de las manos y se colocan con las palmas de las  manos hacia arriba por encima de lacabeza, (flexi&oacute;n de los brazos atr&aacute;s)  y se hace una peque&ntilde;a flexi&oacute;n del tronco hacia atr&aacute;s.</p>\r\n    </body>\r\n</html>', 1, 'columna'),
(26, 'actividades para musculos del pecho', '<html dir="ltr">\r\n    <head>\r\n        <title></title>\r\n    </head>\r\n    <body>\r\n        <p><img align="left" width="300" height="257" src="http://localhost/pausas/uploadsimage/pecho.jpg" style="MARGIN-RIGHT: 10px" alt="" /></p>\r\n        <h3>actividad musculos pecho</h3>\r\n        <p style="text-align: justify;">1.Estiramiento de los m&uacute;sculos del pecho. De la posici&oacute;n de firme se  colocan las manos atr&aacute;s con los brazos estirados (extensi&oacute;n de los  brazos), con la ayuda de un compa&ntilde;ero se juntan las manos y se hacen un  poco hacia arriba</p>\r\n    </body>\r\n</html>', 1, 'pecho'),
(30, 'actividades para talones', '<html dir="ltr">\r\n    <head>\r\n        <title></title>\r\n    </head>\r\n    <body>\r\n        <p style="text-align: justify;"><img align="left" width="300" height="257" style="MARGIN-RIGHT: 10px" src="http://localhost/pausas/uploadsimage/talones.jpeg" alt="" /></p>\r\n        <h3 style="text-align: justify;">actividad para talones</h3>\r\n        <p style="text-align: justify;">1.En 16 tiempos se coloca el tal&oacute;n al frente, alternando derecho e izquierdo en su lugar se eleva los hombros.</p>\r\n    </body>\r\n</html>', 2, 'talon'),
(38, 'actividad respiracion', '<html dir="ltr">\r\n    <head>\r\n        <title></title>\r\n    </head>\r\n    <body>\r\n        <p><img align="left" width="300" height="257" style="MARGIN-RIGHT: 10px" src="http://localhost/pausas/uploadsimage/respiracion.gif" alt="" /></p>\r\n        <h3>actividad de respiracion</h3>\r\n        <p style="text-align: justify;">1.Durante esta parte se debe de realizar la actividad ligera para que el  organismo vuelva a su estado de inicio para lo cual utilizaremos  respiraciones profundas, y de ejercicios de flexibilidad y estiramiento,  se puede utilizar m&uacute;sica, debe ser lenta.Respiraci&oacute;n: inhalar y  exhalar con brazos laterales.</p>\r\n    </body>\r\n</html>', 1, 'respiracion'),
(33, 'actividad para hombros', '<html dir="ltr">\r\n    <head>\r\n        <title></title>\r\n    </head>\r\n    <body>\r\n        <p><img align="left" width="300" height="257" src="http://localhost/pausas/uploadsimage/hombros1.jpeg" style="MARGIN-RIGHT: 10px" alt="" /></p>\r\n        <h3>actividad para hombros</h3>\r\n        <p style="text-align: justify;">1.Con  los brazos estirados al lado del cuerpo, con las manos empu&ntilde;adas dibuja  simult&aacute;neamente 5 c&iacute;rculos grandes hacia adelante en forma pausada.  Repite el movimiento dibujando los c&iacute;rculos hacia atr&aacute;s.</p>\r\n        <p style="text-align: justify;">2.Coloca tu mano izquierda detr&aacute;s del cuello, despu&eacute;s pasa la mano  derecha por encima de la cabeza tomando el codo del brazo izquierdo y  empuj&aacute;ndolo hacia atr&aacute;s, sost&eacute;n por 5 segundos y descansa.</p>\r\n        <p style="text-align: justify;">&nbsp;</p>\r\n        <p style="text-align: justify;">&nbsp;</p>\r\n    </body>\r\n</html>', 1, 'hombros'),
(77, 'actividad para codo', '<html dir="ltr">\r\n    <head>\r\n        <title></title>\r\n    </head>\r\n    <body>\r\n        <p><img align="left" width="300" height="257" alt="" style="MARGIN-RIGHT: 10px" src="http://localhost/pausas/uploadsimage/codo1.jpeg" /></p>\r\n        <h3>Actividad para codo</h3>\r\n        <p style="text-align: justify;">1.Flexiona  los codos dejando las palmas de las manos hacia abajo, empu&ntilde;a tus manos  y realiza c&iacute;rculos con las mu&ntilde;ecas en forma pausada. Realiza este  movimiento cinco veces hacia afuera y cinco veces hacia adentro.</p>\r\n        <p style="text-align: justify;">&nbsp;</p>\r\n    </body>\r\n</html>', 1, 'codo'),
(777, 'actividad para codo', '<html dir="ltr">\r\n    <head>\r\n        <title></title>\r\n    </head>\r\n    <body>\r\n        <p style="text-align: justify;"><img align="left" width="300" height="257" style="MARGIN-RIGHT: 10px" src="http://localhost/pausas/uploadsimage/codo2.jpeg" alt="" /></p>\r\n        <h3 style="text-align: justify;">actividad para codo</h3>\r\n        <p style="text-align: justify;">1.Empu&ntilde;a tus manos de manera fuerte y &aacute;brelas estirando y separando los  dedos con una leve tensi&oacute;n. Sost&eacute;n cada movimiento por 5 segundos.</p>\r\n    </body>\r\n</html>', 1, 'codo'),
(9, 'actividad para manos', '<html dir="ltr">\r\n    <head>\r\n        <title></title>\r\n    </head>\r\n    <body>\r\n        <p><img align="left" width="300" height="257" alt="" src="http://localhost/pausas/uploadsimage/manos.jpg" style="MARGIN-RIGHT: 10px" /></p>\r\n        <h3>actividad para manos</h3>\r\n        <p style="text-align: justify;">Flexiona  los codos dejando las palmas de las manos hacia abajo, empu&ntilde;a tus manos  y realiza c&iacute;rculos con las mu&ntilde;ecas en forma pausada. Realiza este  movimiento cinco veces hacia afuera y cinco veces hacia adentro.</p>\r\n        <p>&nbsp;</p>\r\n    </body>\r\n</html>', 1, 'manos'),
(10, 'actividad para manos', '<html dir="ltr">\r\n    <head>\r\n        <title></title>\r\n    </head>\r\n    <body>\r\n        <p><img align="left" width="300" height="257" style="MARGIN-RIGHT: 10px" src="http://localhost/pausas/uploadsimage/manos1.jpeg" alt="" /></p>\r\n        <h3>Actividad para manos</h3>\r\n        <p style="text-align: justify;">1.Empu&ntilde;a tus manos de manera fuerte y &aacute;brelas estirando y separando los dedos con una leve tensi&oacute;n. Sost&eacute;n cada movimiento por 5 segundos.</p>\r\n    </body>\r\n</html>', 1, 'manos'),
(11, 'actividad para manos', '<html dir="ltr">\r\n    <head>\r\n        <title></title>\r\n    </head>\r\n    <body>\r\n        <p><img align="left" width="300" height="257" style="MARGIN-RIGHT: 10px" src="http://localhost/pausas/uploadsimage/mu%C3%B1ecas.jpg" alt="" /></p>\r\n        <h3 style="text-align: justify;">actividad para manos</h3>\r\n        <p style="text-align: justify;">1.Con  una mano a la vez, flexiona dedo por dedo iniciando por el me&ntilde;ique.  Contin&uacute;a con los dem&aacute;s dedos hasta cerrar los pu&ntilde;os. Realiza el  ejercicio con la otra mano.</p>\r\n        <p style="text-align: justify;">2.Flexiona los codos y lleva las manos a la altura del pecho con  los dedos apuntando hacia arriba, gira los antebrazos suavemente  llevando los dedos hacia abajo manteniendo las palmas unidas. Mant&eacute;n  esta posici&oacute;n y repite el estiramiento con la otra mano.</p>\r\n        <p style="text-align: justify;">&nbsp;</p>\r\n    </body>\r\n</html>', 1, 'manos');

-- --------------------------------------------------------

--
-- Table structure for table `Pac_cme`
--

CREATE TABLE IF NOT EXISTS `Pac_cme` (
  `cme_id` int(11) NOT NULL AUTO_INCREMENT,
  `usu_cc` bigint(20) NOT NULL,
  `cme_07_step1` varchar(255) NOT NULL,
  `cme_07_step2` varchar(255) NOT NULL,
  `cme_07_step3` varchar(255) NOT NULL,
  `cme_07_step4` varchar(255) NOT NULL,
  `cme_d12_step1` varchar(255) NOT NULL,
  `cme_d12_step2` varchar(255) NOT NULL,
  `cme_d12_step3` varchar(255) NOT NULL,
  `cme_d12_step4` varchar(255) NOT NULL,
  `cme_step9` varchar(255) NOT NULL,
  `cme_step10` varchar(255) NOT NULL,
  `cme_step11` varchar(255) NOT NULL,
  `cme_step12` varchar(255) NOT NULL,
  `cme_step13` varchar(255) NOT NULL,
  `cme_step20` int(111) NOT NULL,
  `cme_step21` varchar(255) NOT NULL,
  `cme_step22` varchar(255) NOT NULL,
  `cme_step23` varchar(255) NOT NULL,
  `cme_step24` varchar(255) NOT NULL,
  `cme_step25` varchar(255) NOT NULL,
  `cme_step26` varchar(255) NOT NULL,
  `cme_step27` varchar(255) NOT NULL,
  `cme_step28` varchar(255) NOT NULL,
  `cme_step29` varchar(255) NOT NULL,
  `cme_step30` varchar(255) NOT NULL,
  `cme_step31` varchar(255) NOT NULL,
  PRIMARY KEY (`cme_id`),
  KEY `usu_cc` (`usu_cc`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=176 ;

--
-- Dumping data for table `Pac_cme`
--

INSERT INTO `Pac_cme` (`cme_id`, `usu_cc`, `cme_07_step1`, `cme_07_step2`, `cme_07_step3`, `cme_07_step4`, `cme_d12_step1`, `cme_d12_step2`, `cme_d12_step3`, `cme_d12_step4`, `cme_step9`, `cme_step10`, `cme_step11`, `cme_step12`, `cme_step13`, `cme_step20`, `cme_step21`, `cme_step22`, `cme_step23`, `cme_step24`, `cme_step25`, `cme_step26`, `cme_step27`, `cme_step28`, `cme_step29`, `cme_step30`, `cme_step31`) VALUES
(174, 12345, 'si', 'si', ' ambos hombros', 'ambos hombros', 'ambos codos', 'ambos codos', 'manos izquierda', 'mano izquierda', '2', '0', '0', '0', '0', 7, '77', '77', '7', '7', '77', '7', '7', 'si', 'si', 'si', 'si'),
(175, 89098123, 'si', 'si', 'no', 'no', 'codo derecho', 'codo derecho', 'ambas manos', 'ambas manos', '0', '0', '0', '0', '0', 8, '88', '8', '8', '8', '8', '8', '88', 'si', 'si', 'si', 'si');

-- --------------------------------------------------------

--
-- Table structure for table `Pac_lista_chequeo`
--

CREATE TABLE IF NOT EXISTS `Pac_lista_chequeo` (
  `usu_cc` bigint(20) NOT NULL,
  `lista_respuesta` varchar(255) NOT NULL,
  `lista_cod_lc` int(11) NOT NULL AUTO_INCREMENT,
  `pre_id` int(11) NOT NULL,
  PRIMARY KEY (`lista_cod_lc`),
  KEY `usu_cc` (`usu_cc`),
  KEY `id_pregunta` (`pre_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2673 ;

--
-- Dumping data for table `Pac_lista_chequeo`
--

INSERT INTO `Pac_lista_chequeo` (`usu_cc`, `lista_respuesta`, `lista_cod_lc`, `pre_id`) VALUES
(12345, '0.85', 2672, 28),
(12345, '8', 2671, 24),
(12345, '8', 2670, 21),
(12345, '2', 2669, 15),
(12345, '10', 2668, 13),
(12345, '3', 2667, 3),
(89098123, '1.5', 2666, 32),
(89098123, '4', 2665, 23),
(89098123, '2', 2664, 19),
(89098123, '1', 2663, 14),
(89098123, '0', 2662, 7),
(89098123, '4', 2661, 4);

-- --------------------------------------------------------

--
-- Table structure for table `Pac_pregunta`
--

CREATE TABLE IF NOT EXISTS `Pac_pregunta` (
  `pre_id` int(11) NOT NULL,
  `pre_nom` varchar(300) NOT NULL,
  `pre_tipo` int(11) NOT NULL,
  `pre_valor` float NOT NULL,
  PRIMARY KEY (`pre_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Pac_pregunta`
--

INSERT INTO `Pac_pregunta` (`pre_id`, `pre_nom`, `pre_tipo`, `pre_valor`) VALUES
(2, 'Existen 2 pausas(adem&aacute;s del descanso para almorzar), de entre 8 y 10 minutos, cada una para un  movimiento de entre 7 y 8 horas (o 3 pausas sin descanso para almorzar); o una pausa de al menos 8 o 10 minutos en un  movimiento.', 1, 4),
(3, 'Existen 2 pausas, de al menos 8-10 minutos cada una para un movimiento de 6 horas (sin descanso para el almuerzo); ', 1, 3),
(4, 'Existen 2 interrupciones por la maÃ±ana y 2 por la tarde (adem&aacute;s del descanso del almuerzo) de al menos 7-10 minutos para un movimiento de 7-8 horas; ', 1, 2),
(5, 'Existe una &uacute;nica pausa, de al menos 10 minutos, en un movimiento de 7 horas sin descanso para almorzar; o en 8 horas s&oacute;lo existe el descanso para almorzar (el descanso del almuerzo se incluye en las horas de trabajo). ', 1, 6),
(6, 'No existen pausas reales, excepto de unos poco minutos (menos de 5) en 7-8 horas de movimiento. ', 1, 10),
(7, 'Los movimientos del brazo son lentos (20 acciones/minuto). Se permiten pequeÃ±as pausas frecuentes.', 2, 0),
(8, 'Los movimientos del brazo no son demasiado r&aacute;pidos (30 acciones/minuto). Se permiten pequeÃ±as pausas.', 2, 1),
(9, 'Los movimientos del brazo son bastante r&aacute;pidos (m&aacute;s de 40 acciones/minuto). Se permiten pequeÃ±as pausas.', 2, 3),
(10, 'Los movimientos del brazo son bastante r&aacute;pidos (m&aacute;s de 40 acciones/minuto). S&oacute;lo se permiten pequeÃ±as pausas ocasionales e irregulares.', 2, 4),
(11, 'Los movimientos del brazo son r&aacute;pidos (m&aacute;s de 50 acciones/minuto). S&oacute;lo se permiten pequeÃ±as pausas ocasionales e irregulares.', 2, 6),
(12, 'Los movimientos del brazo son r&aacute;pidos (m&aacute;s de 60 acciones/minuto). La carencia de pausas dificulta el mantenimiento del ritmo.', 2, 8),
(13, 'Los movimientos del brazo se realizan con una frecuencia muy alta (70 acciones/minuto o m&aacute;s). No se permite bajo ning&uacute;n concepto las pausas.', 2, 10),
(14, 'El brazo/s no posee apoyo y permanece ligeramente elevado algo m&aacute;s de la mitad el tiempo.', 3, 1),
(15, 'Los brazos se mantienen a la altura de los hombros y sin soporte (o en otra postura extrema) m&aacute;s o menos el 10% del tiempo.', 3, 2),
(16, 'Los brazos se mantienen a la altura de los hombros y sin soporte (o en otra postura extrema) m&aacute;s o menos el 1/3 del tiempo. ', 3, 6),
(17, 'Los brazos se mantienen a la altura de los hombros y sin soporte m&aacute;s de la mitad del tiempo. ', 3, 12),
(18, 'Los brazos se mantienen a la altura de los hombros y sin soporte todo el tiempo.', 3, 24),
(19, 'El codo realiza movimientos repentinos (flexi&oacute;n-extensi&oacute;n o prono-supinaci&oacute;n extrema, tirones, golpes) al menos un tercio del tiempo.', 4, 2),
(20, 'El codo realiza movimientos repentinos (flexi&oacute;n-extensi&oacute;n o prono-supinaci&oacute;n extrema, tirones, golpes) m&aacute;s de la mitad del tiempo. ', 4, 4),
(21, 'El codo realiza movimientos repentinos (flexi&oacute;n-extensi&oacute;n o prono-supinaci&oacute;n extrema, tirones, golpes) casi todo el tiempo. ', 4, 8),
(22, 'La muÃ±eca permanece doblada en una posici&oacute;n extrema o adopta posturas forzadas (alto grado de flexi&oacute;n-extensi&oacute;n o desviaci&oacute;n lateral) al menos 1/3 del tiempo. ', 5, 2),
(23, 'La muÃ±eca permanece doblada en una posici&oacute;n extrema o adopta posturas forzadas (alto grado de flexi&oacute;n-extensi&oacute;n o desviaci&oacute;n lateral) m&aacute;s de la mitad del tiempo. ', 5, 4),
(24, 'La muÃ±eca permanece doblada en una posici&oacute;n extrema, todo el tiempo. ', 5, 8),
(25, 'duraci&oacute;n del movimiento repetitivo esta entre 421-480 minutos', 6, 1),
(26, 'duraci&oacute;n del movimiento repetitivo esta entre  361-420 minutos', 6, 0.95),
(27, 'duraci&oacute;n del movimiento repetitivo esta entre 301-360 minutos', 6, 0.925),
(28, 'duraci&oacute;n del movimiento repetitivo esta entre 241-300 minutos', 6, 0.85),
(29, 'duraci&oacute;n del movimiento repetitivo esta entre 181-240 minutos', 6, 0.75),
(30, 'duraci&oacute;n del movimiento repetitivo es 60-120 minutos', 6, 0.5),
(31, 'duraci&oacute;n del movimiento repetitivo esta entre 121-180 minutos', 6, 0.65),
(32, 'duraci&aacute;n del movimiento repetitivo es mayor 480 minutos', 6, 1.5);

-- --------------------------------------------------------

--
-- Table structure for table `Pac_tipo_usuario`
--

CREATE TABLE IF NOT EXISTS `Pac_tipo_usuario` (
  `tus_id` int(11) NOT NULL,
  `tus_nom` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`tus_id`)
) ENGINE=MyISAM DEFAULT CHARSET=ucs2;

--
-- Dumping data for table `Pac_tipo_usuario`
--

INSERT INTO `Pac_tipo_usuario` (`tus_id`, `tus_nom`) VALUES
(1, 'administrador'),
(2, 'trabajador'),
(3, 'medico');

-- --------------------------------------------------------

--
-- Table structure for table `Pac_usuarios`
--

CREATE TABLE IF NOT EXISTS `Pac_usuarios` (
  `usu_cc` bigint(20) NOT NULL,
  `usu_nom` varchar(255) CHARACTER SET utf8 NOT NULL,
  `usu_ape` varchar(255) CHARACTER SET utf8 NOT NULL,
  `usu_gen` varchar(11) CHARACTER SET utf8 NOT NULL,
  `usu_fechan` date NOT NULL,
  `usu_mano_d` varchar(255) CHARACTER SET utf8 NOT NULL,
  `usu_estatura` varchar(255) CHARACTER SET utf8 NOT NULL,
  `usu_peso` varchar(255) CHARACTER SET utf8 NOT NULL,
  `tus_id` int(11) NOT NULL,
  `usu_login` varchar(20) CHARACTER SET utf8 NOT NULL,
  `usu_clave` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`usu_cc`),
  UNIQUE KEY `usu_clave` (`usu_clave`),
  UNIQUE KEY `usu_login` (`usu_login`),
  KEY `tus_id` (`tus_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Pac_usuarios`
--

INSERT INTO `Pac_usuarios` (`usu_cc`, `usu_nom`, `usu_ape`, `usu_gen`, `usu_fechan`, `usu_mano_d`, `usu_estatura`, `usu_peso`, `tus_id`, `usu_login`, `usu_clave`) VALUES
(89098123, 'Ana Maria', 'Jauregui Salcedo', 'femenino', '1991-05-02', 'izquierda', '1,90', '56', 2, 'anita', '81dc9bdb52d04dc20036dbd8313ed055'),
(12345, 'Luis Armando ', 'Galviz', 'masculino', '1993-08-10', 'derecha', '1.67', '67', 2, 'luis', '827ccb0eea8a706c4c34a16891f84e7b'),
(1094266691, 'Rosa Maria', 'Contreras Villamizar', 'femenino', '1991-05-02', 'derecha', '1,90', '51', 1, 'rochy_ta', '178eca01705c8783999096e912b64287');
