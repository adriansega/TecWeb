-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-01-2015 a las 18:39:00
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `afim21`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juegos`
--

CREATE TABLE IF NOT EXISTS `juegos` (
  `nombreJuego` varchar(45) NOT NULL,
  `descripcionJuego` varchar(2048) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `imagenJuego` varchar(512) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `unidades` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `juegos`
--

INSERT INTO `juegos` (`nombreJuego`, `descripcionJuego`, `imagenJuego`, `unidades`) VALUES
('4 Monos', '4 Monos es un juego rápido y divertido donde los jugadores son monos de laboratorio y tienen intentar recordar combinaciones. Para ello tendrán que atender rápido a sus cartas para cuadren lo antes posible ya que otro se te puede adelantar. Y es que para poder producir las combinaciones necesitas vigilar tus cartas y tomar unas fichas que otros jugadores pueden usar. \r\n4 Monos desarrolla la capacidad de análisis, observación, atención y concentración a la vez que favorece y desarrolla la memoria visual.', 'https://dl-web.dropbox.com/get/Imagenes%20web/4monos.png?_subject_uid=360507652&w=AAAqemtKHcH_NAZuRUPV3A40jR8jQIi1sYdSFKwL8J9lHg', NULL),
('Bang', 'Bang es un juego de disparos al más puro estilo Western, entre un grupo de forajidos y su principal objetivo, el sheriff. En este emocionante juego cada jugador asume uno de estos roles e interpreta a un personaje inspirado en una de las famosas personalidades del salvaje oeste.\r\nEl juego en sí es un duelo para dos jugadores, donde cada uno controla una banda de tres vaqueros. Los forajidos tienen que eliminar al sheriff, y el sheriff encarcelar a los forajidos, cueste lo que cueste. La imaginación del juego facilita la maduración de ideas y es un canal de expresión de sentimientos, positivos y negativos, ayudando al equilibrio emocional.', 'https://dl-web.dropbox.com/get/Imagenes%20web/bang.png?_subject_uid=360507652&w=AAAD-InBVQvwuXQ5D7wAVUJlMeNhhEepyhdWRT0VspCTbA', NULL),
('Black Stories', 'Black Stories es un juego que busca resolver misterios a menudo escalofriantes, siendo una de sus ventajas el hecho de poder jugar hasta 20 personas.\r\nLas historias son desconcertantes y morbosas, que podrían haber ocurrido como se describen, o casi. A veces todo acaba muy deprisa: dos o tres preguntas y ya consigues estar sobre la pista. Pero a veces, una historia aparentemente sencilla se muestra como la más difícil de descifrar. La edad recomendada es a partir 10 años.\r\nSe presenta como un juego capaz de desarrollar el ingenio, la intuición y mejorar la memoria. ', 'https://dl-web.dropbox.com/get/Imagenes%20web/blackStories.png?_subject_uid=360507652&w=AAAa7o_5JoYtMlIGY1IZrGSwrLT8aAStuWhNAaTNiQEJBw', NULL),
('Blokus', 'En Blokus todos los jugadores compiten por marcar su territorio, casilla a casilla. El objetivo es abrirse el máximo espacio posible en el tablero e ir colocando por turnos todas las fichas y evitar quedar cerrado sin poder colocarlas. La partida finaliza cuando un jugador consigue colocar todas sus piezas (lo que le da la victoria) o cuando ningún jugado puede colocar ninguna ficha más. Blokus desarrolla la capacidad de observación y estimula la concentración así como la necesidad de pensar en estrategias y tomar decisiones acertadas', 'https://dl-web.dropbox.com/get/Imagenes%20web/blokus.png?_subject_uid=360507652&w=AACC0WmZVKyaqI5NisRCa2CB9QkQ9ockbk_IJ5SrzaY6ZA', 1),
('Catan', 'Los jugadores competirán para ver quien consigue conquistar la isla de una manera más ordenada y eficiente, para ello tendrán que recolectar las materias primas necesarias, así como negociar con los demás jugadores para conseguir los recursos que necesitan para construir caminos, aldeas, ciudades, etc. Se aconseja a 4 jugadores a partir de los 7 años, y su duración es en torno a 30-40 minutos.\r\nEl catan consigue combinar estrategia, capacidad de negociación, saber gestionar de forma adecuada tus recursos y materias primas del terreno y entablar relación con el resto de jugadores\r\n', 'https://dl-web.dropbox.com/get/Imagenes%20web/catan.png?_subject_uid=360507652&w=AABeceRp9Zhe2UkZLxfYB5HragEkyK5LAhyaIFWmkUXSPw', 5),
('DiXit', 'Se trata de un juego de mesa basado en cartas con preciosas ilustraciones. Cada jugador dispone de seis cartas, y en cada turno uno de ellos elije una y dice una palabra o frase relacionada con la ilustración que aparece en el descarte. Entonces, el resto de jugadores elijen una de su mazo y también la descartan, siempre boca abajo. Se barajan y entonces se ponen boca arriba. \r\nSe tendrá que adivinar cuál es la carta del jugador que ha dicho la frase. A partir de aquí, turno por turno, se van consiguiendo puntos hasta que alguien llega a una determinada cifra y entonces gana.\r\nEs un juego a partir de los 8 años donde la imaginación y la creatividad priman por encima de todo.', 'https://dl-web.dropbox.com/get/Imagenes%20web/dixit.png?_subject_uid=360507652&w=AABPsM0kWMp3NJZcAlcGj-PXmKxuaJE8C1Ha1ITI4o8KDw', NULL),
('Dungeons & Dragons', 'D&D es un juego de rol de temática medieval fantástica, en el que los personajes de los jugadores son guerreros, hechiceros, bardos, paladines o exploradores. Esas son sus profesiones más usuales, pero también son importantes sus razas, ya que además de humanos, los personajes pueden ser enanos, gnomos, medianos, elfos, semielfos o semiorcos. Cuando el jugador ha elegido la profesión y la raza de su personaje, lanza unos dados para saber las características más importantes del mismo (Fuerza, Inteligencia, Destreza, Carisma, Constitución y Sabiduría) y así sabrá cuales son los puntos fuertes y los débiles de su personaje. Una vez hecho esto, se trata de equipar al personaje (una mochila, una espada y algo de comida son los elementos básicos para un guerrero, pero un mago erudito puede necesitar más equipo para realizar sus experimentos).Cuando todos los jugadores hayan creado y equipado a sus personajes, es el momento de empezar a jugar. El árbitro indicará cual es la situación inicial del grupo de aventureros y a partir de ahí pueden empezar a desarrollarse los acontecimientos.  La edad óptima es a partir de doce años y la duración es muy variable según la partida (entre 1-3 horas). En este juego se desarrollan trabajo en equipo, habilidades sociales, concentración, imaginación e inventiva.', 'https://dl-web.dropbox.com/get/Imagenes%20web/dungeons%26Dragons.png?_subject_uid=360507652&w=AAB_VzkgIy8tGRKcuz3RHqRmbWeGP2sGDONmi2TBjYSbeA', NULL),
('El Laberinto Mágico', 'El tablero de juego representa el laberinto mágico donde cada jugador tendrá que ir recogiendo los objetos mágicos, este tablero está dividido por casillas cuadradas por las que los jugadores se podrán ir moviendo. Cada ficha de cada jugador incorpora un imán en su base y gracias a eso tendrá una bola pegada a la base, de esta forma, la ficha del jugador se mueve por arriba del tablero, mientras que la bola se mueve por debajo, que es donde realmente estarán los muros. Al mover una ficha de una casilla a otra, puede que la bola se caiga, lo que quiere decir que entre esas dos casillas hay un muro invisible, y el jugador deberá volver a su esquina inicial. El Laberinto Mágico tiene unas reglas sencillas y unas ilustraciones realmente llamativas. Además de esto, se caracteriza por ser muy flexible: pueden cambiarse los muros del laberinto en cada partida y se puede decidir usar más o menos muros. El Laberinto Mágico aumenta y perfecciona la capacidad de observación y estimula la concentración. ', 'https://dl-web.dropbox.com/get/Imagenes%20web/laberintoMagico.png?_subject_uid=360507652&w=AAA-RuSveSxty2wN_jAei2k-DLC0A5FVo88QvVARkZ7alw', NULL),
('Hanabi', 'Hanabi es un juego cooperativo donde tienen que poner en orden sus cartas en la mesa, a partir de la información que les proporcionen el resto de sus compañeros; consiguiendo así una serie de “cohetes” de colores. Es un juego para 2-5 jugadores con un tiempo estimado de media hora. Potencia la memoria, atención y habilidades sociales.', 'https://dl-web.dropbox.com/get/Imagenes%20web/hanabi.png?_subject_uid=360507652&w=AAB3ZC1ah3JYVPFq5EFGxYTNJaZrgNrzMPPP_4TcgRdBHQ', NULL),
('King of Tokyo', 'En King of Tokyo eres un gigantesco y enfurecido monstruo que destruirá todo lo que te encuentre a tu paso, para llegar a ser el rey de la ciudad. Para ello deberás lanzar los dados para conseguir la mejor combinación  con la que curarte, atacar, comprar cartas especiales o ganar Puntos de victoria. Todo ello para ser el vencedor de King of Tokyo ya se acumulando 20 Puntos de victoria o ser el último Monstruo en pie. Es idóneo para desarrollar la socialización y habilidades sociales tales como la cooperación o la competición y deberán buscar estrategias para solucionar los problemas con los que los otros jugadores les sorprenderán.', 'https://dl-web.dropbox.com/get/Imagenes%20web/kingOfTokyo.png?_subject_uid=360507652&w=AACEVs7r8SsxjV5XEJr9pLpWHrRkeHUGoNsByrHhNEsM7g', NULL),
('La isla prohibida', 'La isla prohibida es un juego cooperativo, en el cual los jugadores deben recoger los tesoros de la isla antes de que se inunde. Por turnos y con una estrategia común según el personaje que les haya tocado, deben organizar el rescate, la huida y asegurar los bloques que están hundiéndose. El tiempo estimado del juego son 45-50 minutos para 2-6 jugadores a partir de 6 años. Este juego favorece el trabajo en equipo, la atención, la gestión de recursos y habilidades sociales.', 'https://dl-web.dropbox.com/get/Imagenes%20web/islaProhibida.png?_subject_uid=360507652&w=AABIZyShtERwADfY0OhMRK4ElxfY-FfOE7fk45sYQabo-g', NULL),
('La polilla tramposa', 'La Polilla Tramposa consiste en quedarse sin cartas y para ello iremos echando una carta con un número inmediatamente superior o inferior a la que hay en la mesa. Si no tenemos para echar, pues robamos una del montón. Según el bicho que echemos (hormiga, araña, cucaracha y mosquito) ocurrirá una cosa distinta.\r\nPero resulta que también hay cartas que no tienen ni una araña, ni una hormiga, ni una cucaracha ni un mosquito, sino una polilla, ¿y qué pasa con las cartas de polilla? Esas cartas, además de no poder pasárselas a otro jugador, tampoco puedes jugarlas aunque su número te lo permita.\r\n¿Cómo librarse de ellas? Solo hay una forma: haciendo trampa. Y es que ésa es la principal característica de este juego y que le da nombre, tendrás que quitarte esas cartas tramposamente (dejándola caer al suelo, guardándola en la manga, poniéndola debajo de otra al jugarla…) y todo esto sin que te pille la figura del chinche guardían. Un jugador, al que antes de empezar se le ha repartido al azar la carta verde y la tiene siempre delante de sí para que sepamos quién es. El chinche guardían deberá estar vigilante y detectar qué otro jugador está haciendo trampas y acusarlo. Es un juego a partir de los 7 años donde el ingenio y la capacidad de análisis deben ser totales, además de asegurar una buena socialización entre jugadores.', 'https://dl-web.dropbox.com/get/Imagenes%20web/polillaTramposa.png?_subject_uid=360507652&w=AAAVCZAI70o2rigfJVjWuCtbaUO0uw4GVHrG1pcw0AB61A', NULL),
('Las leyendas de Andor', 'Las Leyendas de Andor es un juego tremendamente narrativo con un gran arco argumental dividido en cinco aventuras (leyendas) que tendremos que superar una a una de forma independiente para conocer su desenlace final. Cada leyenda está representada por un grupo de cartas en las que se describen los acontecimientos y condiciones que harán avanzar la historia, con la particularidad adicional de reemplazar a lo que tradicionalmente entendemos como el manual de reglas con un sistema que nos enseña sus mecánicas mientras experimentamos el juego.\r\nEs un juego que fomenta la colaboración y accesible a todas las edades, que unido a su carácter narrativo, es muy positivo para mayores y pequeños.', 'https://dl-web.dropbox.com/get/Imagenes%20web/leyendasAndor.png?_subject_uid=360507652&w=AACLg-7QurrHf5fFbEI895QLFSyYX9SWRnJ8EMkIvsDNHw', NULL),
('Matamoscas', 'Es un juego de percepción visual en el que tendremos que conseguir puntos con la caza de las moscas que nos rodean, para esto usaremos un cazamoscas, las manos. Tendremos moscas de 6 colores distintos: azul, verde, amarillo, naranja, morado y rojo. Es un juego de 2 a 8 personas a partir de 6 años, y su duración es de 10-20 minutos. Cada vez que aparezca la carta matamoscas tendremos que ir a atrapar las moscas del color que se encuentre en mayor proporción', 'https://dl-web.dropbox.com/get/Imagenes%20web/matamoscas.png?_subject_uid=360507652&w=AAAhCKQszQfnGnSwH6yglZ2JB1ISHeio5pVimRgOnN0Ngw', 1),
('Munchkin', 'Mata a los monstruos, roba el tesoro y apuñala a tus amigos, así es el Munchkin. Este juego completo captura la esencia de los juegos de rol de una manera sencilla. Todo lo que tienes que hacer es matar monstruos y coger objetos mágicos. \r\nMunchkin es un juego para 3-8 jugadores donde prima la participación, la comprensión de reglas y normas y las capacidades táctico-estratégicas. La duración de una partida es de una hora, más o menos.', 'https://dl-web.dropbox.com/get/Imagenes%20web/munchkin.png?_subject_uid=360507652&w=AAAbpCZCcnA8m8cgRUVOxIIWkel_usOhthW7I0dSfkd9NQ', NULL),
('Risk', 'Risk es un juego de 2 a 6 jugadores que consigue unir diversión y seriedad en la estrategia como ningún otro a la vez que desarrolla de forma significativa los conocimientos geográficos.\r\nEl objetivo del risk es conquistar el mundo al controlar todo el territorio del tablero, que es un mapa del mundo. ', 'https://dl-web.dropbox.com/get/Imagenes%20web/risk.png?_subject_uid=360507652&w=AABjz1h-1r5lf1mf3bhyWdBUn-K8Mc_-daot1tau-8L_fw', NULL),
('Story Cubes', 'Story Cubes es un juego para uno o más jugadores, en el que tienen que construir una historia a partir de las imágenes que aparecen en los dados, continuando la historia del anterior jugador. La edad idonea de los jugadores oscila a partir de 4 años. El tiempo de la partida es varible, pero aconsejamos no jugar más de 40 minutos. Es un juego cooperativo que desarrolla la rapidez de improvisación, la inventiba, la imaginación y la dialéctica.', 'https://dl-web.dropbox.com/get/Imagenes%20web/storyCubes.png?_subject_uid=360507652&w=AACumK1PBs5I4oUVqrL9CLHlliiL6icxkNvebHnMnG6IeQ', NULL),
('Ubongo', 'El tablero consiste en 6 filas y en cada fila, se encuentran 12 gemas (de varios colores) donde cada jugador colocará su peón delante de una de estas filas y recibirán una carta. También reciben 12 fichas con 3, 4 o 5 cuadrados de varias formas. \r\nMediante una tirada de dado, a cada jugador se le asigna 3 fichas que tiene que usar para conseguir la forma de su carta. Ahora, los jugadores tienen que intentar solucionar su propio puzle. El jugador que primero solucione los puzles puede mover su peón y conseguir una gema. Al final, el jugador que haya conseguido más gemas de un solo color, ganará la partida. Ubongo es un juego idóneo para perfeccionar la capacidad espacial, la agilidad mental y desarrollar un sano espíritu competidor.', 'https://dl-web.dropbox.com/get/Imagenes%20web/ubongo.png?_subject_uid=360507652&w=AAASgv9STT8rOIMUo9i83KEGVkRV1u7L9AmApX_VAv-Sjw', NULL),
('¡Aventureros al tren!', 'Es un juego competitivo donde los jugadores acumulan cartas de ciertos tipos de vagones, y las usan para construir estaciones, pasar a través de túneles y sobre ferris, para hacerse con rutas ferroviarias a través de Europa.\r\nEs un juego donde se desarrolla la estrategia y geografía. ', 'https://dl-web.dropbox.com/get/Imagenes%20web/aventurerosTren.png?_subject_uid=360507652&w=AACfvmpUUwn7bRRc0MkklMBEJiKbBDnfbwo3K6xlf3Vd3A', NULL),
('¡Sí, señor oscuro!', '"Sí, Señor Oscuro" es un  juego de cartas en el que los jugadores se tendrán que poner en la piel de los incompetentes lacayos del señor del mal Rigor Mortis, a quien tendrán que explicar de forma satisfactoria, con todo tipo de disparatadas excusas por qué han fracasado en la misión que les ha sido encomendada. \r\nPara ello, deberán idear algún tipo de excusa que sea lo suficientemente plausible como para evitar que su amo les fulmine con una de sus miradas asesinas, y para ello tendrán que valerse de las cartas del juego, ideando un relato con lo que en las propias cartas aparece.\r\nAdemás de las cartas de excusa, hay cartas de acción, que sirven para pasar el marrón a otro jugador: “Señor, ya teníamos en nuestras manos el mapa cuando el incompetente de Gorbo acercó demasiado la ANTORCHA y el mapa empezó a arder"; (y de paso pasarle el turno) o de interrupción, que sirven para introducir incómodos elementos en la narración del otro jugador, que deberá ser rápido si quiere salir airoso del trance.\r\n', 'https://dl-web.dropbox.com/get/Imagenes%20web/Sisenor.png?_subject_uid=360507652&w=AABfRWuo_jks5S5Ny55-4WbmUNiDU5tDH_0t4qPo2nhSTA', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `juegos`
--
ALTER TABLE `juegos`
 ADD PRIMARY KEY (`nombreJuego`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;