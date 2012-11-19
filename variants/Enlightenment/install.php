<?php
// This is file installs the map data for the Succession variant
defined('IN_CODE') or die('This script can not be run by itself.');
require_once("variants/install.php");

InstallTerritory::$Territories=array();
$countries=$this->countries;
$territoryRawData=array(
	array('Norwegian Sea', 'Sea', 'No', 0, 632, 294, 316, 147),
	array('Barents Sea', 'Sea', 'No', 0, 1072, 92, 536, 46),
	array('North Atlantic Ocean', 'Sea', 'No', 0, 280, 346, 140, 173),
	array('Norway', 'Coast', 'Yes', 0, 714, 450, 357, 225),
	array('Lapland', 'Coast', 'No', 9, 880, 252, 440, 126),
	array('Karelia', 'Coast', 'No', 9, 1034, 382, 517, 191),
	array('Novgorod', 'Coast', 'Yes', 1, 1122, 332, 561, 166),
	array('Siberia', 'Land', 'No', 1, 1434, 510, 717, 255),
	array('Moscow', 'Land', 'Yes', 1, 1206, 522, 603, 261),
	array('Pskov', 'Land', 'No', 1, 1058, 548, 529, 274),
	array('Riga', 'Coast', 'Yes', 9, 1002, 510, 501, 255),
	array('Ingria', 'Coast', 'Yes', 0, 1068, 466, 534, 233),
	array('Gulf of Bothina', 'Sea', 'No', 0, 916, 494, 458, 247),
	array('Baltic Sea', 'Sea', 'No', 0, 864, 588, 432, 294),
	array('Stockholm', 'Coast', 'Yes', 9, 814, 448, 407, 224),
	array('Abo', 'Coast', 'Yes', 9, 964, 366, 482, 183),
	array('Denmark', 'Coast', 'Yes', 0, 718, 586, 362, 314),
	array('Skagerrak', 'Sea', 'No', 0, 714, 514, 357, 257),
	array('North Sea', 'Sea', 'No', 0, 602, 616, 301, 308),
	array('Courland', 'Coast', 'Yes', 0, 962, 558, 481, 279),
	array('Warsaw', 'Land', 'Yes', 8, 1024, 668, 512, 334),
	array('Clyde', 'Coast', 'No', 7, 494, 494, 247, 247),
	array('Edinburgh', 'Coast', 'Yes', 7, 522, 520, 261, 260),
	array('Voronezh', 'Land', 'No', 1, 1330, 686, 665, 343),
	array('Lithuania', 'Land', 'No', 8, 1090, 598, 545, 299),
	array('Posen', 'Coast', 'No', 8, 906, 704, 453, 352),
	array('Krakow', 'Land', 'Yes', 8, 1014, 728, 507, 364),
	array('Podolia', 'Land', 'No', 8, 1096, 764, 548, 382),
	array('Konigsberg', 'Coast', 'Yes', 5, 924, 646, 462, 323),
	array('Stettin', 'Coast', 'Yes', 5, 832, 688, 416, 344),
	array('Berlin', 'Coast', 'Yes', 5, 794, 688, 397, 344),
	array('Silesia', 'Land', 'Yes', 3, 848, 730, 424, 365),
	array('Galicia', 'Land', 'No', 8, 984, 788, 492, 394),
	array('Dresden', 'Land', 'Yes', 8, 772, 748, 386, 374),
	array('Prague', 'Land', 'Yes', 3, 834, 778, 427, 394),
	array('Vienna', 'Land', 'Yes', 3, 852, 854, 426, 427),
	array('Yorkshire', 'Coast', 'No', 7, 538, 618, 269, 309),
	array('Liverpool', 'Coast', 'Yes', 7, 506, 590, 253, 295),
	array('London', 'Coast', 'Yes', 7, 548, 676, 274, 338),
	array('Wales', 'Coast', 'No', 7, 478, 664, 239, 332),
	array('Ukraine', 'Land', 'Yes', 0, 1272, 776, 636, 388),
	array('Volga', 'Land', 'No', 1, 1458, 842, 729, 421),
	array('Hanover', 'Coast', 'Yes', 0, 722, 674, 361, 337),
	array('Amsterdam', 'Coast', 'Yes', 7, 638, 698, 319, 349),
	array('English Channel', 'Sea', 'No', 0, 464, 748, 232, 374),
	array('Irish Sea', 'Sea', 'No', 0, 396, 666, 198, 333),
	array('Hesse', 'Land', 'Yes', 0, 728, 784, 364, 392),
	array('Bavaria', 'Land', 'Yes', 0, 754, 808, 377, 404),
	array('Flanders', 'Coast', 'Yes', 10, 624, 740, 312, 370),
	array('Rhineland', 'Land', 'Yes', 0, 696, 836, 348, 418),
	array('Tyrol', 'Land', 'No', 3, 778, 866, 389, 433),
	array('Budapest', 'Land', 'Yes', 3, 958, 844, 479, 422),
	array('Crimea', 'Coast', 'Yes', 0, 1232, 858, 616, 429),
	array('Moldavia', 'Land', 'Yes', 0, 1068, 854, 534, 427),
	array('Wallachia', 'Coast', 'Yes', 0, 1060, 946, 530, 473),
	array('Burgundy', 'Land', 'No', 4, 620, 810, 310, 405),
	array('Picardy', 'Coast', 'No', 4, 572, 764, 286, 382),
	array('Brest', 'Coast', 'Yes', 4, 470, 798, 235, 399),
	array('Bordeaux', 'Coast', 'No', 4, 486, 882, 246, 447),
	array('Paris', 'Land', 'Yes', 4, 562, 836, 281, 418),
	array('Croatia', 'Coast', 'No', 3, 842, 912, 421, 456),
	array('Ragusa', 'Coast', 'Yes', 0, 850, 974, 425, 487),
	array('Bosnia', 'Land', 'No', 6, 891, 965, 443, 483),
	array('Bulgaria', 'Coast', 'No', 6, 1046, 996, 523, 498),
	array('Bay of Biscay', 'Sea', 'No', 0, 412, 860, 206, 430),
	array('Switzerland', 'Land', 'No', 0, 672, 872, 336, 436),
	array('Milan', 'Land', 'Yes', 0, 698, 924, 349, 462),
	array('Venice', 'Coast', 'Yes', 2, 738, 926, 369, 463),
	array('Istria', 'Coast', 'Yes', 2, 800, 906, 400, 453),
	array('Ankara', 'Coast', 'Yes', 6, 1248, 1044, 624, 522),
	array('Adana', 'Coast', 'No', 6, 1160, 1158, 580, 579),
	array('Syria', 'Coast', 'No', 6, 1412, 1166, 706, 583),
	array('Arabia', 'Land', 'No', 0, 1436, 1374, 718, 687),
	array('Cairo', 'Coast', 'Yes', 6, 1260, 1418, 630, 709),
	array('Tuscany', 'Coast', 'Yes', 0, 722, 980, 361, 490),
	array('Armenia', 'Coast', 'No', 6, 1426, 1016, 713, 508),
	array('Macedonia', 'Coast', 'No', 6, 958, 1080, 479, 540),
	array('Macedonia (East Coast)', 'Coast', 'No', 0, 990, 1098, 495, 549),
	array('Macedonia (West Coast)', 'Coast', 'No', 0, 952, 1108, 476, 554),
	array('Peloponnese', 'Coast', 'Yes', 2, 990, 1168, 495, 584),
	array('Tunis', 'Coast', 'Yes', 0, 668, 1224, 334, 612),
	array('Naples', 'Coast', 'Yes', 10, 840, 1066, 420, 533),
	array('Rome', 'Coast', 'Yes', 0, 758, 1010, 379, 505),
	array('Mid Atlantic Ocean', 'Sea', 'No', 0, 196, 772, 98, 386),
	array('Eastern Black Sea', 'Sea', 'No', 0, 1362, 946, 681, 473),
	array('Western Black Sea', 'Sea', 'No', 0, 1194, 962, 597, 481),
	array('Aegean Sea', 'Sea', 'No', 0, 1060, 1140, 530, 570),
	array('Rome (East Coast)', 'Coast', 'No', 0, 760, 972, 380, 486),
	array('Rome (West Coast)', 'Coast', 'No', 0, 790, 1042, 395, 521),
	array('Eastern Mediterranean Sea', 'Sea', 'No', 0, 1220, 1246, 610, 623),
	array('Marseilles', 'Coast', 'Yes', 4, 592, 950, 296, 475),
	array('Lyons', 'Land', 'Yes', 4, 558, 910, 279, 455),
	array('Navarre', 'Coast', 'No', 10, 368, 944, 184, 472),
	array('Aragon', 'Coast', 'No', 10, 452, 1016, 226, 508),
	array('Portugal', 'Coast', 'Yes', 0, 270, 1008, 135, 504),
	array('Madrid', 'Land', 'Yes', 10, 376, 1024, 188, 512),
	array('Sevilla', 'Coast', 'Yes', 10, 342, 1100, 171, 550),
	array('Morocco', 'Coast', 'No', 0, 294, 1268, 147, 634),
	array('Algeria', 'Coast', 'Yes', 0, 548, 1224, 274, 612),
	array('Kola', 'Coast', 'No', 1, 1060, 172, 530, 86),
	array('Tripoli', 'Coast', 'No', 6, 802, 1414, 401, 707),
	array('Mainz', 'Land', 'Yes', 0, 730, 732, 365, 366),
	array('Gulf of Lyons', 'Sea', 'No', 0, 576, 1020, 288, 510),
	array('Western Mediterranean Sea', 'Sea', 'No', 0, 462, 1126, 231, 563),
	array('Tyrrhenian Sea', 'Sea', 'No', 0, 766, 1130, 383, 565),
	array('Maltese Sea', 'Sea', 'No', 0, 746, 1244, 373, 622),
	array('Ionian Sea', 'Sea', 'No', 0, 912, 1276, 456, 638),
	array('Adriatic Sea', 'Sea', 'No', 0, 868, 1032, 434, 516),
	array('Constantinople', 'Coast', 'Yes', 6, 1128, 1104, 564, 552),
	array('Westphalia', 'Land', 'Yes', 0, 671, 716, 342, 359),
	array('Sicily', 'Coast', 'No', 10, 804, 1174, 402, 587),
	array('Sardinia', 'Coast', 'No', 0, 668, 1084, 334, 542),
	array('Lusatia', 'Land', 'No', 8, 798, 730, 399, 365),
	array('Iceland', 'Coast', 'No', 0, 410, 196, 205, 98),
	array('Rostov', 'Coast', 'No', 1, 1384, 868, 692, 434),
	array('Transylvania', 'Land', 'No', 3, 1022, 880, 511, 440),
	array('Savoy', 'Coast', 'No', 0, 658, 934, 329, 467),
	array('Eire', 'Coast', 'Yes', 0, 425, 578, 210, 290),
	array('Belgrade', 'Land', 'Yes', 6, 954, 992, 478, 496),
	array('Georgia', 'Coast', 'Yes', 0, 1475, 966, 738, 477)
);

foreach($territoryRawData as $territoryRawRow)
{
	list($name, $type, $supply, $countryID, $x, $y, $sx, $sy)=$territoryRawRow;
	new InstallTerritory($name, $type, $supply, $countryID, $x, $y, $sx, $sy);
}
unset($territoryRawData);

$bordersRawData=array(
	array('Norwegian Sea','Barents Sea','Yes','No'),
	array('Norwegian Sea','North Atlantic Ocean','Yes','No'),
	array('Norwegian Sea','Norway','Yes','No'),
	array('Norwegian Sea','North Sea','Yes','No'),
	array('Norwegian Sea','Clyde','Yes','No'),
	array('Norwegian Sea','Edinburgh','Yes','No'),
	array('Norwegian Sea','Iceland','Yes','No'),
	array('Barents Sea','Norway','Yes','No'),
	array('Barents Sea','Novgorod','Yes','No'),
	array('Barents Sea','Kola','Yes','No'),
	array('North Atlantic Ocean','Clyde','Yes','No'),
	array('North Atlantic Ocean','Liverpool','Yes','No'),
	array('North Atlantic Ocean','Irish Sea','Yes','No'),
	array('North Atlantic Ocean','Mid Atlantic Ocean','Yes','No'),
	array('North Atlantic Ocean','Iceland','Yes','No'),
	array('North Atlantic Ocean','Eire','Yes','No'),
	array('Norway','Lapland','No','Yes'),
	array('Norway','Stockholm','Yes','Yes'),
	array('Norway','Skagerrak','Yes','No'),
	array('Norway','North Sea','Yes','No'),
	array('Norway','Kola','Yes','Yes'),
	array('Lapland','Karelia','No','Yes'),
	array('Lapland','Novgorod','No','Yes'),
	array('Lapland','Gulf of Bothina','Yes','No'),
	array('Lapland','Stockholm','Yes','Yes'),
	array('Lapland','Abo','Yes','Yes'),
	array('Lapland','Kola','No','Yes'),
	array('Karelia','Novgorod','No','Yes'),
	array('Karelia','Ingria','Yes','Yes'),
	array('Karelia','Gulf of Bothina','Yes','No'),
	array('Karelia','Abo','Yes','Yes'),
	array('Novgorod','Siberia','No','Yes'),
	array('Novgorod','Moscow','No','Yes'),
	array('Novgorod','Pskov','No','Yes'),
	array('Novgorod','Ingria','No','Yes'),
	array('Novgorod','Kola','Yes','Yes'),
	array('Siberia','Moscow','No','Yes'),
	array('Siberia','Voronezh','No','Yes'),
	array('Siberia','Volga','No','Yes'),
	array('Moscow','Pskov','No','Yes'),
	array('Moscow','Voronezh','No','Yes'),
	array('Moscow','Lithuania','No','Yes'),
	array('Pskov','Riga','No','Yes'),
	array('Pskov','Ingria','No','Yes'),
	array('Pskov','Courland','No','Yes'),
	array('Pskov','Lithuania','No','Yes'),
	array('Riga','Ingria','Yes','Yes'),
	array('Riga','Gulf of Bothina','Yes','No'),
	array('Riga','Courland','Yes','Yes'),
	array('Ingria','Gulf of Bothina','Yes','No'),
	array('Gulf of Bothina','Baltic Sea','Yes','No'),
	array('Gulf of Bothina','Stockholm','Yes','No'),
	array('Gulf of Bothina','Abo','Yes','No'),
	array('Gulf of Bothina','Courland','Yes','No'),
	array('Baltic Sea','Stockholm','Yes','No'),
	array('Baltic Sea','Denmark','Yes','No'),
	array('Baltic Sea','Courland','Yes','No'),
	array('Baltic Sea','Posen','Yes','No'),
	array('Baltic Sea','Konigsberg','Yes','No'),
	array('Baltic Sea','Stettin','Yes','No'),
	array('Baltic Sea','Berlin','Yes','No'),
	array('Stockholm','Denmark','Yes','Yes'),
	array('Stockholm','Skagerrak','Yes','No'),
	array('Denmark','Skagerrak','Yes','No'),
	array('Denmark','North Sea','Yes','No'),
	array('Denmark','Berlin','Yes','Yes'),
	array('Denmark','Hanover','Yes','Yes'),
	array('Skagerrak','North Sea','Yes','No'),
	array('North Sea','Edinburgh','Yes','No'),
	array('North Sea','Yorkshire','Yes','No'),
	array('North Sea','London','Yes','No'),
	array('North Sea','Amsterdam','Yes','No'),
	array('North Sea','English Channel','Yes','No'),
	array('North Sea','Flanders','Yes','No'),
	array('Courland','Lithuania','No','Yes'),
	array('Courland','Konigsberg','Yes','Yes'),
	array('Warsaw','Lithuania','No','Yes'),
	array('Warsaw','Posen','No','Yes'),
	array('Warsaw','Krakow','No','Yes'),
	array('Clyde','Liverpool','Yes','Yes'),
	array('Clyde','Eire','Yes','Yes'),
	array('Edinburgh','Yorkshire','Yes','Yes'),
	array('Edinburgh','Liverpool','No','Yes'),
	array('Voronezh','Lithuania','No','Yes'),
	array('Voronezh','Ukraine','No','Yes'),
	array('Voronezh','Volga','No','Yes'),
	array('Voronezh','Rostov','No','Yes'),
	array('Lithuania','Posen','No','Yes'),
	array('Lithuania','Podolia','No','Yes'),
	array('Lithuania','Konigsberg','No','Yes'),
	array('Lithuania','Ukraine','No','Yes'),
	array('Posen','Krakow','No','Yes'),
	array('Posen','Konigsberg','Yes','Yes'),
	array('Posen','Stettin','Yes','Yes'),
	array('Posen','Silesia','No','Yes'),
	array('Krakow','Podolia','No','Yes'),
	array('Krakow','Silesia','No','Yes'),
	array('Krakow','Galicia','No','Yes'),
	array('Podolia','Galicia','No','Yes'),
	array('Podolia','Ukraine','No','Yes'),
	array('Podolia','Crimea','No','Yes'),
	array('Podolia','Moldavia','No','Yes'),
	array('Stettin','Berlin','Yes','Yes'),
	array('Stettin','Silesia','No','Yes'),
	array('Berlin','Silesia','No','Yes'),
	array('Berlin','Hanover','No','Yes'),
	array('Berlin','Mainz','No','Yes'),
	array('Berlin','Westphalia','No','Yes'),
	array('Berlin','Lusatia','No','Yes'),
	array('Silesia','Galicia','No','Yes'),
	array('Silesia','Prague','No','Yes'),
	array('Silesia','Lusatia','No','Yes'),
	array('Galicia','Prague','No','Yes'),
	array('Galicia','Budapest','No','Yes'),
	array('Galicia','Moldavia','No','Yes'),
	array('Galicia','Transylvania','No','Yes'),
	array('Dresden','Prague','No','Yes'),
	array('Dresden','Hesse','No','Yes'),
	array('Dresden','Mainz','No','Yes'),
	array('Dresden','Lusatia','No','Yes'),
	array('Prague','Vienna','No','Yes'),
	array('Prague','Hesse','No','Yes'),
	array('Prague','Bavaria','No','Yes'),
	array('Prague','Tyrol','No','Yes'),
	array('Prague','Budapest','No','Yes'),
	array('Prague','Lusatia','No','Yes'),
	array('Vienna','Bavaria','No','Yes'),
	array('Vienna','Tyrol','No','Yes'),
	array('Vienna','Budapest','No','Yes'),
	array('Vienna','Croatia','No','Yes'),
	array('Yorkshire','Liverpool','No','Yes'),
	array('Yorkshire','London','Yes','Yes'),
	array('Liverpool','London','No','Yes'),
	array('Liverpool','Wales','Yes','Yes'),
	array('Liverpool','Irish Sea','Yes','No'),
	array('London','Wales','Yes','Yes'),
	array('London','English Channel','Yes','No'),
	array('Wales','English Channel','Yes','No'),
	array('Wales','Irish Sea','Yes','No'),
	array('Ukraine','Volga','No','Yes'),
	array('Ukraine','Crimea','No','Yes'),
	array('Ukraine','Rostov','No','Yes'),
	array('Volga','Rostov','Yes','No'),
	array('Volga','Georgia','No','Yes'),
	array('Hanover','Amsterdam','No','Yes'),
	array('Hanover','Mainz','No','Yes'),
	array('Hanover','Westphalia','No','Yes'),
	array('Amsterdam','Flanders','Yes','Yes'),
	array('Amsterdam','Westphalia','No','Yes'),
	array('English Channel','Irish Sea','Yes','No'),
	array('English Channel','Flanders','Yes','No'),
	array('English Channel','Picardy','Yes','No'),
	array('English Channel','Brest','Yes','No'),
	array('English Channel','Mid Atlantic Ocean','Yes','No'),
	array('Irish Sea','Mid Atlantic Ocean','Yes','No'),
	array('Irish Sea','Eire','Yes','No'),
	array('Hesse','Bavaria','No','Yes'),
	array('Hesse','Rhineland','No','Yes'),
	array('Hesse','Mainz','No','Yes'),
	array('Hesse','Westphalia','No','Yes'),
	array('Hesse','Lusatia','No','Yes'),
	array('Bavaria','Rhineland','No','Yes'),
	array('Bavaria','Tyrol','No','Yes'),
	array('Flanders','Burgundy','No','Yes'),
	array('Flanders','Picardy','Yes','Yes'),
	array('Flanders','Westphalia','No','Yes'),
	array('Rhineland','Tyrol','No','Yes'),
	array('Rhineland','Burgundy','No','Yes'),
	array('Rhineland','Switzerland','No','Yes'),
	array('Rhineland','Westphalia','No','Yes'),
	array('Tyrol','Croatia','No','Yes'),
	array('Tyrol','Switzerland','No','Yes'),
	array('Tyrol','Milan','No','Yes'),
	array('Tyrol','Venice','No','Yes'),
	array('Tyrol','Istria','No','Yes'),
	array('Budapest','Croatia','No','Yes'),
	array('Budapest','Transylvania','No','Yes'),
	array('Crimea','Moldavia','No','Yes'),
	array('Crimea','Eastern Black Sea','Yes','No'),
	array('Crimea','Western Black Sea','Yes','No'),
	array('Crimea','Rostov','Yes','Yes'),
	array('Moldavia','Wallachia','No','Yes'),
	array('Moldavia','Bulgaria','No','Yes'),
	array('Moldavia','Transylvania','No','Yes'),
	array('Wallachia','Bulgaria','No','Yes'),
	array('Wallachia','Transylvania','No','Yes'),
	array('Burgundy','Picardy','No','Yes'),
	array('Burgundy','Paris','No','Yes'),
	array('Burgundy','Switzerland','No','Yes'),
	array('Burgundy','Lyons','No','Yes'),
	array('Burgundy','Westphalia','No','Yes'),
	array('Picardy','Brest','Yes','Yes'),
	array('Picardy','Paris','No','Yes'),
	array('Brest','Bordeaux','Yes','Yes'),
	array('Brest','Paris','No','Yes'),
	array('Brest','Bay of Biscay','Yes','No'),
	array('Brest','Mid Atlantic Ocean','Yes','No'),
	array('Bordeaux','Paris','No','Yes'),
	array('Bordeaux','Bay of Biscay','Yes','No'),
	array('Bordeaux','Marseilles','No','Yes'),
	array('Bordeaux','Lyons','No','Yes'),
	array('Bordeaux','Navarre','Yes','Yes'),
	array('Bordeaux','Aragon','No','Yes'),
	array('Paris','Lyons','No','Yes'),
	array('Croatia','Ragusa','Yes','Yes'),
	array('Croatia','Bosnia','No','Yes'),
	array('Croatia','Istria','Yes','Yes'),
	array('Croatia','Adriatic Sea','Yes','No'),
	array('Croatia','Belgrade','No','Yes'),
	array('Ragusa','Bosnia','No','Yes'),
	array('Ragusa','Macedonia','No','Yes'),
	array('Ragusa','Macedonia (West Coast)','Yes','No'),
	array('Ragusa','Adriatic Sea','Yes','No'),
	array('Bosnia','Macedonia','No','Yes'),
	array('Bosnia','Belgrade','No','Yes'),
	array('Bulgaria','Macedonia','No','Yes'),
	array('Bulgaria','Western Black Sea','Yes','No'),
	array('Bulgaria','Constantinople','Yes','Yes'),
	array('Bulgaria','Belgrade','No','Yes'),
	array('Bay of Biscay','Mid Atlantic Ocean','Yes','No'),
	array('Bay of Biscay','Navarre','Yes','No'),
	array('Switzerland','Milan','No','Yes'),
	array('Switzerland','Lyons','No','Yes'),
	array('Switzerland','Savoy','No','Yes'),
	array('Milan','Venice','No','Yes'),
	array('Milan','Tuscany','No','Yes'),
	array('Milan','Savoy','No','Yes'),
	array('Venice','Istria','Yes','Yes'),
	array('Venice','Tuscany','No','Yes'),
	array('Venice','Rome','No','Yes'),
	array('Venice','Rome (East Coast)','Yes','No'),
	array('Venice','Adriatic Sea','Yes','No'),
	array('Istria','Adriatic Sea','Yes','No'),
	array('Ankara','Adana','No','Yes'),
	array('Ankara','Syria','No','Yes'),
	array('Ankara','Armenia','Yes','Yes'),
	array('Ankara','Eastern Black Sea','Yes','No'),
	array('Ankara','Western Black Sea','Yes','No'),
	array('Ankara','Aegean Sea','Yes','No'),
	array('Ankara','Constantinople','Yes','Yes'),
	array('Adana','Syria','Yes','Yes'),
	array('Adana','Aegean Sea','Yes','No'),
	array('Adana','Eastern Mediterranean Sea','Yes','No'),
	array('Adana','Constantinople','Yes','Yes'),
	array('Syria','Arabia','No','Yes'),
	array('Syria','Cairo','Yes','Yes'),
	array('Syria','Armenia','No','Yes'),
	array('Arabia','Cairo','No','Yes'),
	array('Cairo','Eastern Mediterranean Sea','Yes','No'),
	array('Cairo','Tripoli','Yes','Yes'),
	array('Cairo','Ionian Sea','Yes','No'),
	array('Tuscany','Rome','No','Yes'),
	array('Tuscany','Rome (West Coast)','Yes','No'),
	array('Tuscany','Gulf of Lyons','Yes','No'),
	array('Tuscany','Savoy','Yes','Yes'),
	array('Armenia','Eastern Black Sea','Yes','No'),
	array('Armenia','Georgia','Yes','Yes'),
	array('Macedonia','Peloponnese','No','Yes'),
	array('Macedonia','Constantinople','No','Yes'),
	array('Macedonia','Belgrade','No','Yes'),
	array('Macedonia (East Coast)','Peloponnese','Yes','No'),
	array('Macedonia (East Coast)','Aegean Sea','Yes','No'),
	array('Macedonia (East Coast)','Constantinople','Yes','No'),
	array('Macedonia (West Coast)','Peloponnese','Yes','No'),
	array('Macedonia (West Coast)','Ionian Sea','Yes','No'),
	array('Macedonia (West Coast)','Adriatic Sea','Yes','No'),
	array('Peloponnese','Aegean Sea','Yes','No'),
	array('Peloponnese','Ionian Sea','Yes','No'),
	array('Tunis','Algeria','Yes','Yes'),
	array('Tunis','Tripoli','Yes','Yes'),
	array('Tunis','Western Mediterranean Sea','Yes','No'),
	array('Tunis','Tyrrhenian Sea','Yes','No'),
	array('Tunis','Maltese Sea','Yes','No'),
	array('Tunis','Ionian Sea','Yes','No'),
	array('Naples','Rome','No','Yes'),
	array('Naples','Rome (East Coast)','Yes','No'),
	array('Naples','Rome (West Coast)','Yes','No'),
	array('Naples','Tyrrhenian Sea','Yes','No'),
	array('Naples','Maltese Sea','Yes','No'),
	array('Naples','Ionian Sea','Yes','No'),
	array('Naples','Adriatic Sea','Yes','No'),
	array('Naples','Sicily','Yes','Yes'),
	array('Mid Atlantic Ocean','Navarre','Yes','No'),
	array('Mid Atlantic Ocean','Portugal','Yes','No'),
	array('Mid Atlantic Ocean','Sevilla','Yes','No'),
	array('Mid Atlantic Ocean','Morocco','Yes','No'),
	array('Mid Atlantic Ocean','Western Mediterranean Sea','Yes','No'),
	array('Mid Atlantic Ocean','Eire','Yes','No'),
	array('Eastern Black Sea','Western Black Sea','Yes','No'),
	array('Eastern Black Sea','Rostov','Yes','No'),
	array('Eastern Black Sea','Georgia','Yes','No'),
	array('Western Black Sea','Constantinople','Yes','No'),
	array('Aegean Sea','Eastern Mediterranean Sea','Yes','No'),
	array('Aegean Sea','Ionian Sea','Yes','No'),
	array('Aegean Sea','Constantinople','Yes','No'),
	array('Rome (East Coast)','Adriatic Sea','Yes','No'),
	array('Rome (West Coast)','Gulf of Lyons','Yes','No'),
	array('Rome (West Coast)','Tyrrhenian Sea','Yes','No'),
	array('Eastern Mediterranean Sea','Ionian Sea','Yes','No'),
	array('Marseilles','Lyons','No','Yes'),
	array('Marseilles','Aragon','Yes','Yes'),
	array('Marseilles','Gulf of Lyons','Yes','No'),
	array('Marseilles','Savoy','Yes','Yes'),
	array('Lyons','Savoy','No','Yes'),
	array('Navarre','Aragon','No','Yes'),
	array('Navarre','Portugal','Yes','Yes'),
	array('Navarre','Madrid','No','Yes'),
	array('Aragon','Madrid','No','Yes'),
	array('Aragon','Gulf of Lyons','Yes','No'),
	array('Portugal','Madrid','No','Yes'),
	array('Portugal','Sevilla','Yes','Yes'),
	array('Madrid','Sevilla','No','Yes'),
	array('Sevilla','Morocco','Yes','Yes'),
	array('Sevilla','Western Mediterranean Sea','Yes','No'),
	array('Morocco','Algeria','Yes','Yes'),
	array('Morocco','Western Mediterranean Sea','Yes','No'),
	array('Algeria','Tripoli','No','Yes'),
	array('Algeria','Western Mediterranean Sea','Yes','No'),
	array('Tripoli','Maltese Sea','Yes','No'),
	array('Tripoli','Ionian Sea','Yes','No'),
	array('Mainz','Westphalia','No','Yes'),
	array('Mainz','Lusatia','No','Yes'),
	array('Gulf of Lyons','Western Mediterranean Sea','Yes','No'),
	array('Gulf of Lyons','Tyrrhenian Sea','Yes','No'),
	array('Gulf of Lyons','Sardinia','Yes','No'),
	array('Gulf of Lyons','Savoy','Yes','No'),
	array('Western Mediterranean Sea','Tyrrhenian Sea','Yes','No'),
	array('Western Mediterranean Sea','Sardinia','Yes','No'),
	array('Tyrrhenian Sea','Maltese Sea','Yes','No'),
	array('Tyrrhenian Sea','Sicily','Yes','No'),
	array('Tyrrhenian Sea','Sardinia','Yes','No'),
	array('Maltese Sea','Ionian Sea','Yes','No'),
	array('Maltese Sea','Sicily','Yes','No'),
	array('Ionian Sea','Adriatic Sea','Yes','No'),
	array('Rostov','Georgia','Yes','Yes'),
	array('Transylvania','Belgrade','No','Yes')
);

foreach($bordersRawData as $borderRawRow)
{
	list($from, $to, $fleets, $armies)=$borderRawRow;
	InstallTerritory::$Territories[$to]  ->addBorder(InstallTerritory::$Territories[$from],$fleets,$armies);
}
unset($bordersRawData);

InstallTerritory::runSQL($this->mapID);
InstallCache::terrJSON($this->territoriesJSONFile(),$this->mapID);
?>
