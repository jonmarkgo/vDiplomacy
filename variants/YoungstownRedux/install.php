<?php
// This is file installs the map data for the YoungstownRedux variant
defined('IN_CODE') or die('This script can not be run by itself.');
require_once("variants/install.php");

InstallTerritory::$Territories=array();
$countries=$this->countries;
$territoryRawData=array(
	array('Moscow', 'Land', 'Yes', 10, 373, 143, 368, 144),
	array('Ukraine', 'Land', 'No', 10, 335, 208, 334, 210),
	array('Livonia', 'Coast', 'No', 10, 269, 133, 268, 138),
	array('Warsaw', 'Land', 'Yes', 10, 279, 175, 277, 176),
	array('Omsk', 'Land', 'Yes', 10, 525, 151, 493, 142),
	array('Finland', 'Coast', 'No', 10, 266, 66, 266, 73),
	array('Siberia', 'Land', 'No', 10, 668, 114, 658, 118),
	array('Kamchatka', 'Coast', 'No', 10, 813, 64, 819, 59),
	array('Sevastopol', 'Coast', 'Yes', 10, 373, 228, 386, 248),
	array('Caucasus', 'Land', 'No', 10, 423, 277, 424, 278),
	array('Turkmenistan', 'Land', 'No', 10, 496, 269, 494, 276),
	array('Vladivostok', 'Coast', 'Yes', 10, 863, 152, 841, 150),
	array('Saint Petersburg', 'Coast', 'Yes', 10, 364, 74, 320, 103),
	array('Saint Petersburg (South Coast)', 'Coast', 'No', 10, 300, 108, 304, 113),
	array('Saint Petersburg (North Coast)', 'Coast', 'No', 10, 359, 47, 349, 48),
	array('Prussia', 'Coast', 'No', 8, 229, 165, 228, 168),
	array('Berlin', 'Coast', 'Yes', 8, 184, 174, 187, 172),
	array('Kiel', 'Coast', 'Yes', 8, 159, 180, 158, 177),
	array('Cologne', 'Land', 'Yes', 8, 153, 201, 156, 203),
	array('Norway', 'Coast', 'Yes', 0, 155, 89, 156, 91),
	array('Sweden', 'Coast', 'Yes', 0, 194, 100, 194, 105),
	array('Gulf of Bothina', 'Sea', 'No', 0, 230, 101, 232, 100),
	array('Baltic Sea', 'Sea', 'No', 0, 226, 138, 223, 140),
	array('Denmark', 'Coast', 'Yes', 0, 155, 144, 156, 142),
	array('Holland', 'Coast', 'Yes', 0, 134, 187, 133, 187),
	array('Belgium', 'Coast', 'Yes', 0, 126, 209, 130, 208),
	array('Picardy', 'Coast', 'No', 7, 108, 221, 111, 223),
	array('Brest', 'Coast', 'Yes', 7, 80, 241, 81, 242),
	array('North Sea', 'Sea', 'No', 0, 114, 141, 115, 141),
	array('Skagerrak', 'Sea', 'No', 0, 161, 123, 159, 124),
	array('Heligoland Bight', 'Sea', 'No', 0, 142, 159, 140, 160),
	array('Barents Sea', 'Sea', 'No', 0, 322, 17, 326, 17),
	array('Norwegian Sea', 'Sea', 'No', 0, 131, 52, 125, 56),
	array('North Atlantic Ocean', 'Sea', 'No', 0, 52, 78, 50, 76),
	array('Irish Sea', 'Sea', 'No', 0, 44, 185, 44, 188),
	array('Clyde', 'Coast', 'No', 6, 69, 108, 69, 106),
	array('Edinburgh', 'Coast', 'Yes', 6, 84, 119, 81, 120),
	array('Liverpool', 'Coast', 'Yes', 6, 79, 144, 77, 147),
	array('Yorkshire', 'Coast', 'No', 6, 92, 161, 94, 161),
	array('Ireland', 'Coast', 'Yes', 0, 31, 151, 34, 158),
	array('Box A', 'Sea', 'No', 0, 26, 86, 24, 87),
	array('Box B', 'Sea', 'No', 0, 25, 307, 24, 306),
	array('Wales', 'Coast', 'No', 6, 76, 182, 74, 182),
	array('London', 'Coast', 'Yes', 6, 95, 188, 95, 186),
	array('Paris', 'Land', 'Yes', 7, 107, 254, 106, 249),
	array('Burgundy', 'Land', 'No', 7, 137, 244, 135, 250),
	array('Marseilles', 'Coast', 'Yes', 7, 139, 277, 138, 279),
	array('Piedmont', 'Coast', 'No', 4, 162, 266, 164, 267),
	array('Milan', 'Land', 'Yes', 4, 178, 259, 181, 260),
	array('Venetia', 'Coast', 'No', 4, 196, 264, 196, 263),
	array('Naples', 'Coast', 'Yes', 4, 242, 318, 242, 321),
	array('Apulia', 'Coast', 'No', 4, 234, 296, 237, 296),
	array('Adriatic Sea', 'Sea', 'No', 0, 221, 276, 220, 276),
	array('English Channel', 'Sea', 'No', 0, 74, 215, 75, 213),
	array('Serbia', 'Land', 'Yes', 0, 277, 279, 278, 276),
	array('Bulgaria', 'Coast', 'Yes', 0, 308, 276, 309, 277),
	array('Greece', 'Coast', 'Yes', 0, 290, 315, 289, 313),
	array('Albania', 'Coast', 'Yes', 0, 268, 298, 270, 300),
	array('Macedonia', 'Coast', 'No', 9, 294, 295, 293, 296),
	array('Constantinople', 'Coast', 'Yes', 9, 332, 303, 331, 302),
	array('Ankara', 'Coast', 'Yes', 9, 369, 296, 366, 294),
	array('Konya', 'Coast', 'No', 9, 355, 317, 355, 317),
	array('Armenia', 'Coast', 'No', 9, 402, 293, 406, 295),
	array('Bagdad', 'Coast', 'Yes', 9, 418, 332, 419, 354),
	array('Levant', 'Coast', 'No', 9, 363, 347, 363, 352),
	array('Levant (North Coast)', 'Coast', 'No', 0, 362, 334, 357, 337),
	array('Levant (South Coast)', 'Coast', 'No', 0, 364, 369, 363, 369),
	array('Mecca', 'Coast', 'Yes', 9, 383, 395, 380, 391),
	array('Arabia', 'Coast', 'No', 0, 418, 388, 422, 387),
	array('Arabia (North Coast)', 'Coast', 'No', 0, 454, 394, 450, 389),
	array('Arabia (South Coast)', 'Coast', 'No', 0, 413, 434, 415, 434),
	array('Egypt', 'Coast', 'Yes', 0, 313, 413, 312, 418),
	array('Gascony', 'Coast', 'No', 7, 99, 282, 101, 281),
	array('Spain', 'Coast', 'Yes', 0, 90, 321, 87, 324),
	array('Sarajevo', 'Coast', 'Yes', 3, 253, 271, 255, 271),
	array('Vienna', 'Land', 'Yes', 3, 234, 234, 234, 234),
	array('Bohemia', 'Land', 'No', 3, 210, 210, 213, 212),
	array('Tyrol', 'Land', 'No', 3, 209, 238, 208, 237),
	array('Trieste', 'Coast', 'Yes', 3, 232, 264, 231, 262),
	array('Switzerland', 'Land', 'Yes', 0, 166, 247, 164, 248),
	array('Swabia', 'Land', 'No', 8, 158, 230, 159, 229),
	array('Silesia', 'Land', 'No', 8, 227, 194, 229, 195),
	array('Saxony', 'Land', 'No', 8, 189, 197, 189, 197),
	array('Mid Atlantic Ocean', 'Sea', 'No', 0, 18, 250, 21, 255),
	array('Central Africa', 'Land', 'No', 0, 243, 481, 244, 483),
	array('Tripolitania', 'Coast', 'Yes', 0, 211, 394, 220, 390),
	array('Tunisia', 'Coast', 'No', 0, 178, 359, 178, 362),
	array('Algeria', 'Coast', 'Yes', 0, 150, 365, 145, 365),
	array('Sahara', 'Land', 'No', 0, 134, 418, 125, 446),
	array('Mali', 'Coast', 'No', 0, 59, 457, 55, 456),
	array('Black Sea', 'Sea', 'No', 0, 340, 276, 339, 275),
	array('Aden', 'Coast', 'Yes', 6, 433, 460, 433, 463),
	array('Yemen', 'Coast', 'No', 0, 463, 456, 465, 456),
	array('Oman', 'Coast', 'Yes', 0, 505, 418, 507, 419),
	array('Persia', 'Coast', 'Yes', 0, 475, 352, 473, 352),
	array('Persian Gulf', 'Sea', 'No', 0, 471, 376, 467, 377),
	array('Rome', 'Coast', 'Yes', 4, 193, 281, 194, 281),
	array('Gulf of Lyons', 'Sea', 'No', 0, 142, 302, 151, 301),
	array('Western Mediterranean Sea', 'Sea', 'No', 0, 132, 335, 117, 335),
	array('Eastern Mediterranean Sea', 'Sea', 'No', 0, 326, 351, 322, 354),
	array('Aegean Sea', 'Sea', 'No', 0, 307, 315, 307, 316),
	array('Ionian Sea', 'Sea', 'No', 0, 227, 361, 233, 361),
	array('Tyrrhenian Sea', 'Sea', 'No', 0, 196, 321, 196, 312),
	array('Afghanistan', 'Land', 'Yes', 0, 521, 301, 518, 300),
	array('Ethiopia', 'Coast', 'Yes', 0, 388, 496, 389, 494),
	array('Kenya', 'Coast', 'No', 0, 392, 580, 398, 584),
	array('Mogadishu', 'Coast', 'Yes', 4, 430, 553, 431, 556),
	array('Awdal', 'Coast', 'No', 4, 440, 509, 444, 508),
	array('Red Sea', 'Sea', 'No', 0, 368, 413, 367, 411),
	array('Gulf of Aden', 'Sea', 'No', 0, 453, 483, 461, 480),
	array('Arabian Sea', 'Sea', 'No', 0, 528, 439, 530, 438),
	array('Horn of Africa', 'Sea', 'No', 0, 487, 542, 484, 536),
	array('Munich', 'Land', 'Yes', 8, 182, 223, 182, 220),
	array('Portugal', 'Coast', 'Yes', 0, 54, 319, 55, 318),
	array('Morocco', 'Coast', 'Yes', 0, 88, 385, 89, 383),
	array('Cyrene', 'Coast', 'No', 0, 265, 388, 263, 391),
	array('Sindh', 'Coast', 'No', 1, 534, 345, 533, 349),
	array('Xinjiang', 'Land', 'Yes', 0, 613, 231, 611, 234),
	array('Mongolia', 'Land', 'Yes', 0, 674, 186, 669, 185),
	array('Manchuria', 'Coast', 'Yes', 0, 816, 204, 812, 203),
	array('Korea', 'Coast', 'Yes', 0, 857, 236, 857, 236),
	array('Sakhalin', 'Coast', 'No', 10, 889, 133, 885, 128),
	array('Budapest', 'Land', 'Yes', 3, 264, 248, 270, 234),
	array('Galicia', 'Land', 'No', 3, 291, 214, 293, 215),
	array('Karafuto', 'Coast', 'Yes', 0, 903, 153, 904, 156),
	array('Tsingtao', 'Coast', 'Yes', 8, 820, 262, 820, 261),
	array('Peking', 'Coast', 'Yes', 5, 769, 236, 767, 236),
	array('Inner Mongolia', 'Land', 'No', 5, 724, 231, 728, 231),
	array('Tibet', 'Land', 'No', 0, 658, 314, 666, 307),
	array('Kashmir', 'Land', 'No', 1, 564, 298, 560, 295),
	array('Hebei', 'Coast', 'No', 5, 804, 275, 798, 268),
	array('Hebei (North Coast)', 'Coast', 'No', 0, 806, 252, 806, 253),
	array('Hebei (South Coast)', 'Coast', 'No', 0, 829, 280, 827, 281),
	array('Delhi', 'Land', 'Yes', 1, 596, 342, 598, 345),
	array('Calcutta', 'Coast', 'Yes', 1, 662, 356, 641, 390),
	array('Nepal', 'Land', 'No', 0, 619, 332, 621, 333),
	array('Deccan', 'Land', 'No', 1, 613, 387, 608, 387),
	array('Wuhan', 'Land', 'Yes', 5, 779, 307, 778, 302),
	array('Yunnan', 'Land', 'No', 5, 734, 332, 738, 346),
	array('Guangzhou', 'Coast', 'Yes', 5, 798, 352, 800, 353),
	array('Bombay', 'Coast', 'Yes', 1, 574, 385, 593, 402),
	array('Box C', 'Sea', 'No', 0, 16, 590, 18, 592),
	array('South Atlantic Ocean', 'Sea', 'No', 0, 16, 442, 16, 436),
	array('Ceylon', 'Coast', 'Yes', 0, 645, 519, 644, 518),
	array('Western Indian Ocean', 'Sea', 'No', 0, 550, 488, 567, 484),
	array('Bay of Bengal', 'Sea', 'No', 0, 650, 445, 661, 426),
	array('Andaman Sea', 'Sea', 'No', 0, 727, 482, 726, 483),
	array('Burma', 'Coast', 'Yes', 0, 707, 390, 704, 398),
	array('Thailand', 'Coast', 'Yes', 0, 750, 418, 747, 420),
	array('Thailand (East Coast)', 'Coast', 'No', 0, 763, 432, 763, 430),
	array('Thailand (West Coast)', 'Coast', 'No', 0, 745, 463, 745, 466),
	array('Singapore', 'Coast', 'Yes', 6, 771, 503, 768, 500),
	array('Sumatra', 'Coast', 'No', 0, 760, 532, 757, 530),
	array('Vietnam', 'Coast', 'Yes', 0, 774, 371, 774, 370),
	array('Qinghai', 'Land', 'No', 5, 729, 293, 723, 293),
	array('Laos', 'Land', 'No', 0, 756, 389, 753, 390),
	array('Java Sea', 'Sea', 'No', 0, 801, 546, 806, 547),
	array('Java', 'Coast', 'Yes', 0, 836, 577, 829, 576),
	array('Timor Sea', 'Sea', 'No', 0, 938, 582, 938, 581),
	array('Borneo', 'Coast', 'Yes', 0, 842, 520, 844, 532),
	array('Annam', 'Coast', 'No', 7, 814, 425, 810, 421),
	array('Saigon', 'Coast', 'Yes', 7, 807, 457, 812, 455),
	array('Philippines', 'Coast', 'Yes', 0, 926, 465, 926, 466),
	array('Formosa', 'Coast', 'Yes', 0, 864, 363, 862, 365),
	array('Yellow Sea', 'Sea', 'No', 0, 844, 257, 841, 258),
	array('Sapporo', 'Coast', 'Yes', 2, 934, 208, 938, 209),
	array('Sea of Okhotsk', 'Sea', 'No', 0, 910, 121, 905, 118),
	array('Sea of Japan', 'Sea', 'No', 0, 904, 249, 903, 252),
	array('North Pacific Ocean', 'Sea', 'No', 0, 969, 206, 966, 203),
	array('Akita', 'Coast', 'No', 2, 936, 246, 938, 250),
	array('Tokyo', 'Coast', 'Yes', 2, 948, 268, 945, 269),
	array('Kyoto', 'Coast', 'Yes', 2, 916, 282, 918, 280),
	array('Shizuoka', 'Coast', 'No', 2, 939, 291, 937, 290),
	array('Kagoshima', 'Coast', 'No', 2, 895, 307, 892, 306),
	array('Osaka', 'Coast', 'Yes', 2, 916, 295, 913, 296),
	array('East China Sea', 'Sea', 'No', 0, 913, 338, 911, 339),
	array('South China Sea', 'Sea', 'No', 0, 851, 397, 870, 447),
	array('Gulf of Tonkin', 'Sea', 'No', 0, 797, 385, 798, 386),
	array('South Pacific Ocean', 'Sea', 'No', 0, 941, 409, 941, 399),
	array('Box D', 'Sea', 'No', 0, 974, 80, 976, 79),
	array('Box E', 'Sea', 'No', 0, 974, 407, 977, 408),
	array('Madras', 'Coast', 'Yes', 1, 609, 456, 608, 456),
	array('Sudan', 'Coast', 'Yes', 0, 321, 462, 344, 481),
	array('Shanghai', 'Coast', 'Yes', 5, 839, 316, 844, 322),
	array('Box F', 'Sea', 'No', 0, 969, 585, 974, 587),
	array('Box H', 'Sea', 'No', 0, 700, 592, 701, 594),
	array('Box G', 'Sea', 'No', 0, 569, 591, 574, 594),
	array('Cambodia', 'Coast', 'Yes', 0, 791, 442, 792, 440),
	array('Eastern Indian Ocean', 'Sea', 'No', 0, 718, 552, 729, 553),
	array('Celebes Sea', 'Sea', 'No', 0, 878, 562, 880, 563),
	array('Fez', 'Land', 'No', 0, 246, 432, 251, 432),
	array('Gulf of Thailand', 'Sea', 'No', 0, 776, 475, 776, 477),
	array('Rumania', 'Coast', 'Yes', 0, 313, 255, 314, 254),
	array('Spain (North Coast)', 'Coast', 'No', 0, 57, 295, 55, 297),
	array('Spain (South Coast)', 'Coast', 'No', 0, 98, 336, 94, 345),
	array('Africa', 'Coast', 'No', 0, 246, 552, 226, 541)
);

foreach($territoryRawData as $territoryRawRow)
{
	list($name, $type, $supply, $countryID, $x, $y, $sx, $sy)=$territoryRawRow;
	new InstallTerritory($name, $type, $supply, $countryID, $x, $y, $sx, $sy);
}
unset($territoryRawData);

$bordersRawData=array(
	array('Moscow','Ukraine','No','Yes'),
	array('Moscow','Livonia','No','Yes'),
	array('Moscow','Warsaw','No','Yes'),
	array('Moscow','Omsk','No','Yes'),
	array('Moscow','Sevastopol','No','Yes'),
	array('Moscow','Caucasus','No','Yes'),
	array('Moscow','Saint Petersburg','No','Yes'),
	array('Ukraine','Warsaw','No','Yes'),
	array('Ukraine','Sevastopol','No','Yes'),
	array('Ukraine','Galicia','No','Yes'),
	array('Ukraine','Rumania','No','Yes'),
	array('Livonia','Warsaw','No','Yes'),
	array('Livonia','Saint Petersburg','No','Yes'),
	array('Livonia','Saint Petersburg (South Coast)','Yes','No'),
	array('Livonia','Prussia','Yes','Yes'),
	array('Livonia','Gulf of Bothina','Yes','No'),
	array('Livonia','Baltic Sea','Yes','No'),
	array('Warsaw','Prussia','No','Yes'),
	array('Warsaw','Silesia','No','Yes'),
	array('Warsaw','Galicia','No','Yes'),
	array('Omsk','Siberia','No','Yes'),
	array('Omsk','Turkmenistan','No','Yes'),
	array('Omsk','Saint Petersburg','No','Yes'),
	array('Finland','Saint Petersburg','No','Yes'),
	array('Finland','Saint Petersburg (South Coast)','Yes','No'),
	array('Finland','Norway','No','Yes'),
	array('Finland','Sweden','Yes','Yes'),
	array('Finland','Gulf of Bothina','Yes','No'),
	array('Siberia','Kamchatka','No','Yes'),
	array('Siberia','Turkmenistan','No','Yes'),
	array('Siberia','Vladivostok','No','Yes'),
	array('Siberia','Xinjiang','No','Yes'),
	array('Siberia','Mongolia','No','Yes'),
	array('Siberia','Manchuria','No','Yes'),
	array('Kamchatka','Vladivostok','Yes','Yes'),
	array('Kamchatka','Sea of Okhotsk','Yes','No'),
	array('Kamchatka','North Pacific Ocean','Yes','No'),
	array('Sevastopol','Caucasus','No','Yes'),
	array('Sevastopol','Armenia','Yes','Yes'),
	array('Sevastopol','Black Sea','Yes','No'),
	array('Sevastopol','Rumania','Yes','Yes'),
	array('Caucasus','Armenia','No','Yes'),
	array('Caucasus','Persia','No','Yes'),
	array('Turkmenistan','Persia','No','Yes'),
	array('Turkmenistan','Afghanistan','No','Yes'),
	array('Turkmenistan','Xinjiang','No','Yes'),
	array('Turkmenistan','Tibet','No','Yes'),
	array('Vladivostok','Manchuria','No','Yes'),
	array('Vladivostok','Korea','Yes','Yes'),
	array('Vladivostok','Sea of Okhotsk','Yes','No'),
	array('Vladivostok','Sea of Japan','Yes','No'),
	array('Saint Petersburg (South Coast)','Gulf of Bothina','Yes','No'),
	array('Saint Petersburg (North Coast)','Norway','Yes','No'),
	array('Saint Petersburg (North Coast)','Barents Sea','Yes','No'),
	array('Prussia','Berlin','Yes','Yes'),
	array('Prussia','Baltic Sea','Yes','No'),
	array('Prussia','Silesia','No','Yes'),
	array('Berlin','Kiel','Yes','Yes'),
	array('Berlin','Baltic Sea','Yes','No'),
	array('Berlin','Silesia','No','Yes'),
	array('Berlin','Saxony','No','Yes'),
	array('Kiel','Cologne','No','Yes'),
	array('Kiel','Baltic Sea','Yes','No'),
	array('Kiel','Denmark','Yes','Yes'),
	array('Kiel','Holland','Yes','Yes'),
	array('Kiel','Heligoland Bight','Yes','No'),
	array('Kiel','Saxony','No','Yes'),
	array('Cologne','Holland','No','Yes'),
	array('Cologne','Belgium','No','Yes'),
	array('Cologne','Burgundy','No','Yes'),
	array('Cologne','Swabia','No','Yes'),
	array('Cologne','Saxony','No','Yes'),
	array('Cologne','Munich','No','Yes'),
	array('Norway','Sweden','Yes','Yes'),
	array('Norway','North Sea','Yes','No'),
	array('Norway','Skagerrak','Yes','No'),
	array('Norway','Barents Sea','Yes','No'),
	array('Norway','Norwegian Sea','Yes','No'),
	array('Sweden','Gulf of Bothina','Yes','No'),
	array('Sweden','Baltic Sea','Yes','No'),
	array('Sweden','Denmark','Yes','Yes'),
	array('Sweden','Skagerrak','Yes','No'),
	array('Gulf of Bothina','Baltic Sea','Yes','No'),
	array('Baltic Sea','Denmark','Yes','No'),
	array('Denmark','North Sea','Yes','No'),
	array('Denmark','Skagerrak','Yes','No'),
	array('Denmark','Heligoland Bight','Yes','No'),
	array('Holland','Belgium','Yes','Yes'),
	array('Holland','North Sea','Yes','No'),
	array('Holland','Heligoland Bight','Yes','No'),
	array('Belgium','Picardy','Yes','Yes'),
	array('Belgium','North Sea','Yes','No'),
	array('Belgium','Burgundy','No','Yes'),
	array('Belgium','English Channel','Yes','No'),
	array('Picardy','Brest','Yes','Yes'),
	array('Picardy','Paris','No','Yes'),
	array('Picardy','Burgundy','No','Yes'),
	array('Picardy','English Channel','Yes','No'),
	array('Brest','Paris','No','Yes'),
	array('Brest','English Channel','Yes','No'),
	array('Brest','Gascony','Yes','Yes'),
	array('Brest','Mid Atlantic Ocean','Yes','No'),
	array('North Sea','Skagerrak','Yes','No'),
	array('North Sea','Heligoland Bight','Yes','No'),
	array('North Sea','Norwegian Sea','Yes','No'),
	array('North Sea','Edinburgh','Yes','No'),
	array('North Sea','Yorkshire','Yes','No'),
	array('North Sea','London','Yes','No'),
	array('North Sea','English Channel','Yes','No'),
	array('Barents Sea','Norwegian Sea','Yes','No'),
	array('Norwegian Sea','North Atlantic Ocean','Yes','No'),
	array('Norwegian Sea','Clyde','Yes','No'),
	array('Norwegian Sea','Edinburgh','Yes','No'),
	array('North Atlantic Ocean','Irish Sea','Yes','No'),
	array('North Atlantic Ocean','Clyde','Yes','No'),
	array('North Atlantic Ocean','Liverpool','Yes','No'),
	array('North Atlantic Ocean','Ireland','Yes','No'),
	array('North Atlantic Ocean','Box A','Yes','No'),
	array('North Atlantic Ocean','Mid Atlantic Ocean','Yes','No'),
	array('Irish Sea','Liverpool','Yes','No'),
	array('Irish Sea','Ireland','Yes','No'),
	array('Irish Sea','Wales','Yes','No'),
	array('Irish Sea','English Channel','Yes','No'),
	array('Irish Sea','Mid Atlantic Ocean','Yes','No'),
	array('Clyde','Edinburgh','Yes','Yes'),
	array('Clyde','Liverpool','Yes','Yes'),
	array('Edinburgh','Liverpool','No','Yes'),
	array('Edinburgh','Yorkshire','Yes','Yes'),
	array('Liverpool','Yorkshire','No','Yes'),
	array('Liverpool','Wales','Yes','Yes'),
	array('Yorkshire','Wales','No','Yes'),
	array('Yorkshire','London','Yes','Yes'),
	array('Ireland','Mid Atlantic Ocean','Yes','No'),
	array('Box A','Box B','Yes','No'),
	array('Box A','Box C','Yes','No'),
	array('Box A','Box D','Yes','No'),
	array('Box B','Mid Atlantic Ocean','Yes','No'),
	array('Box B','Box C','Yes','No'),
	array('Box B','Box E','Yes','No'),
	array('Wales','London','Yes','Yes'),
	array('Wales','English Channel','Yes','No'),
	array('London','English Channel','Yes','No'),
	array('Paris','Burgundy','No','Yes'),
	array('Paris','Gascony','No','Yes'),
	array('Burgundy','Marseilles','No','Yes'),
	array('Burgundy','Gascony','No','Yes'),
	array('Burgundy','Switzerland','No','Yes'),
	array('Burgundy','Swabia','No','Yes'),
	array('Marseilles','Piedmont','Yes','Yes'),
	array('Marseilles','Gascony','No','Yes'),
	array('Marseilles','Spain','No','Yes'),
	array('Marseilles','Switzerland','No','Yes'),
	array('Marseilles','Gulf of Lyons','Yes','No'),
	array('Marseilles','Spain (South Coast)','Yes','No'),
	array('Piedmont','Milan','No','Yes'),
	array('Piedmont','Switzerland','No','Yes'),
	array('Piedmont','Rome','Yes','Yes'),
	array('Piedmont','Gulf of Lyons','Yes','No'),
	array('Milan','Venetia','No','Yes'),
	array('Milan','Tyrol','No','Yes'),
	array('Milan','Switzerland','No','Yes'),
	array('Milan','Rome','No','Yes'),
	array('Venetia','Apulia','Yes','Yes'),
	array('Venetia','Adriatic Sea','Yes','No'),
	array('Venetia','Tyrol','No','Yes'),
	array('Venetia','Trieste','Yes','Yes'),
	array('Venetia','Rome','No','Yes'),
	array('Naples','Apulia','Yes','Yes'),
	array('Naples','Rome','Yes','Yes'),
	array('Naples','Ionian Sea','Yes','No'),
	array('Naples','Tyrrhenian Sea','Yes','No'),
	array('Apulia','Adriatic Sea','Yes','No'),
	array('Apulia','Rome','No','Yes'),
	array('Apulia','Ionian Sea','Yes','No'),
	array('Adriatic Sea','Albania','Yes','No'),
	array('Adriatic Sea','Sarajevo','Yes','No'),
	array('Adriatic Sea','Trieste','Yes','No'),
	array('Adriatic Sea','Ionian Sea','Yes','No'),
	array('English Channel','Mid Atlantic Ocean','Yes','No'),
	array('Serbia','Bulgaria','No','Yes'),
	array('Serbia','Albania','No','Yes'),
	array('Serbia','Macedonia','No','Yes'),
	array('Serbia','Sarajevo','No','Yes'),
	array('Serbia','Budapest','No','Yes'),
	array('Serbia','Rumania','No','Yes'),
	array('Bulgaria','Macedonia','No','Yes'),
	array('Bulgaria','Constantinople','Yes','Yes'),
	array('Bulgaria','Black Sea','Yes','No'),
	array('Bulgaria','Rumania','Yes','Yes'),
	array('Greece','Albania','Yes','Yes'),
	array('Greece','Macedonia','Yes','Yes'),
	array('Greece','Aegean Sea','Yes','No'),
	array('Greece','Ionian Sea','Yes','No'),
	array('Albania','Macedonia','No','Yes'),
	array('Albania','Sarajevo','Yes','Yes'),
	array('Albania','Ionian Sea','Yes','No'),
	array('Macedonia','Constantinople','Yes','Yes'),
	array('Macedonia','Aegean Sea','Yes','No'),
	array('Constantinople','Ankara','Yes','Yes'),
	array('Constantinople','Konya','Yes','Yes'),
	array('Constantinople','Black Sea','Yes','No'),
	array('Constantinople','Aegean Sea','Yes','No'),
	array('Ankara','Konya','No','Yes'),
	array('Ankara','Armenia','Yes','Yes'),
	array('Ankara','Black Sea','Yes','No'),
	array('Konya','Armenia','No','Yes'),
	array('Konya','Levant','No','Yes'),
	array('Konya','Levant (North Coast)','Yes','No'),
	array('Konya','Eastern Mediterranean Sea','Yes','No'),
	array('Konya','Aegean Sea','Yes','No'),
	array('Armenia','Bagdad','No','Yes'),
	array('Armenia','Levant','No','Yes'),
	array('Armenia','Black Sea','Yes','No'),
	array('Armenia','Persia','No','Yes'),
	array('Bagdad','Levant','No','Yes'),
	array('Bagdad','Arabia','No','Yes'),
	array('Bagdad','Arabia (North Coast)','Yes','No'),
	array('Bagdad','Persia','Yes','Yes'),
	array('Bagdad','Persian Gulf','Yes','No'),
	array('Levant','Mecca','No','Yes'),
	array('Levant','Arabia','No','Yes'),
	array('Levant','Egypt','No','Yes'),
	array('Levant (North Coast)','Egypt','Yes','No'),
	array('Levant (North Coast)','Eastern Mediterranean Sea','Yes','No'),
	array('Levant (South Coast)','Mecca','Yes','No'),
	array('Levant (South Coast)','Egypt','Yes','No'),
	array('Levant (South Coast)','Red Sea','Yes','No'),
	array('Mecca','Arabia','No','Yes'),
	array('Mecca','Arabia (South Coast)','Yes','No'),
	array('Mecca','Red Sea','Yes','No'),
	array('Arabia','Aden','No','Yes'),
	array('Arabia','Yemen','No','Yes'),
	array('Arabia','Oman','No','Yes'),
	array('Arabia (North Coast)','Oman','Yes','No'),
	array('Arabia (North Coast)','Persian Gulf','Yes','No'),
	array('Arabia (South Coast)','Aden','Yes','No'),
	array('Arabia (South Coast)','Red Sea','Yes','No'),
	array('Egypt','Eastern Mediterranean Sea','Yes','No'),
	array('Egypt','Red Sea','Yes','No'),
	array('Egypt','Cyrene','Yes','Yes'),
	array('Egypt','Sudan','Yes','Yes'),
	array('Egypt','Fez','No','Yes'),
	array('Gascony','Spain','No','Yes'),
	array('Gascony','Mid Atlantic Ocean','Yes','No'),
	array('Gascony','Spain (North Coast)','Yes','No'),
	array('Spain','Portugal','No','Yes'),
	array('Sarajevo','Trieste','Yes','Yes'),
	array('Sarajevo','Budapest','No','Yes'),
	array('Vienna','Bohemia','No','Yes'),
	array('Vienna','Tyrol','No','Yes'),
	array('Vienna','Trieste','No','Yes'),
	array('Vienna','Budapest','No','Yes'),
	array('Vienna','Galicia','No','Yes'),
	array('Bohemia','Tyrol','No','Yes'),
	array('Bohemia','Silesia','No','Yes'),
	array('Bohemia','Saxony','No','Yes'),
	array('Bohemia','Munich','No','Yes'),
	array('Bohemia','Galicia','No','Yes'),
	array('Tyrol','Trieste','No','Yes'),
	array('Tyrol','Switzerland','No','Yes'),
	array('Tyrol','Munich','No','Yes'),
	array('Trieste','Budapest','No','Yes'),
	array('Switzerland','Swabia','No','Yes'),
	array('Switzerland','Munich','No','Yes'),
	array('Swabia','Munich','No','Yes'),
	array('Silesia','Saxony','No','Yes'),
	array('Silesia','Galicia','No','Yes'),
	array('Saxony','Munich','No','Yes'),
	array('Mid Atlantic Ocean','Western Mediterranean Sea','Yes','No'),
	array('Mid Atlantic Ocean','Portugal','Yes','No'),
	array('Mid Atlantic Ocean','Morocco','Yes','No'),
	array('Mid Atlantic Ocean','South Atlantic Ocean','Yes','No'),
	array('Mid Atlantic Ocean','Spain (North Coast)','Yes','No'),
	array('Mid Atlantic Ocean','Spain (South Coast)','Yes','No'),
	array('Central Africa','Sahara','No','Yes'),
	array('Central Africa','Sudan','No','Yes'),
	array('Central Africa','Fez','No','Yes'),
	array('Tripolitania','Tunisia','Yes','Yes'),
	array('Tripolitania','Sahara','No','Yes'),
	array('Tripolitania','Ionian Sea','Yes','No'),
	array('Tripolitania','Cyrene','Yes','Yes'),
	array('Tripolitania','Fez','No','Yes'),
	array('Tunisia','Algeria','Yes','Yes'),
	array('Tunisia','Sahara','No','Yes'),
	array('Tunisia','Ionian Sea','Yes','No'),
	array('Tunisia','Tyrrhenian Sea','Yes','No'),
	array('Algeria','Sahara','No','Yes'),
	array('Algeria','Western Mediterranean Sea','Yes','No'),
	array('Algeria','Tyrrhenian Sea','Yes','No'),
	array('Algeria','Morocco','Yes','Yes'),
	array('Sahara','Mali','No','Yes'),
	array('Sahara','Morocco','No','Yes'),
	array('Sahara','Fez','No','Yes'),
	array('Mali','Morocco','Yes','Yes'),
	array('Mali','South Atlantic Ocean','Yes','No'),
	array('Black Sea','Rumania','Yes','No'),
	array('Aden','Yemen','Yes','Yes'),
	array('Aden','Red Sea','Yes','No'),
	array('Aden','Gulf of Aden','Yes','No'),
	array('Yemen','Oman','Yes','Yes'),
	array('Yemen','Gulf of Aden','Yes','No'),
	array('Yemen','Arabian Sea','Yes','No'),
	array('Oman','Persian Gulf','Yes','No'),
	array('Oman','Arabian Sea','Yes','No'),
	array('Persia','Persian Gulf','Yes','No'),
	array('Persia','Afghanistan','No','Yes'),
	array('Persia','Arabian Sea','Yes','No'),
	array('Persia','Sindh','Yes','Yes'),
	array('Persian Gulf','Arabian Sea','Yes','No'),
	array('Rome','Gulf of Lyons','Yes','No'),
	array('Rome','Tyrrhenian Sea','Yes','No'),
	array('Gulf of Lyons','Western Mediterranean Sea','Yes','No'),
	array('Gulf of Lyons','Tyrrhenian Sea','Yes','No'),
	array('Gulf of Lyons','Spain (South Coast)','Yes','No'),
	array('Western Mediterranean Sea','Tyrrhenian Sea','Yes','No'),
	array('Western Mediterranean Sea','Morocco','Yes','No'),
	array('Western Mediterranean Sea','Spain (South Coast)','Yes','No'),
	array('Eastern Mediterranean Sea','Aegean Sea','Yes','No'),
	array('Eastern Mediterranean Sea','Ionian Sea','Yes','No'),
	array('Eastern Mediterranean Sea','Cyrene','Yes','No'),
	array('Aegean Sea','Ionian Sea','Yes','No'),
	array('Ionian Sea','Tyrrhenian Sea','Yes','No'),
	array('Ionian Sea','Cyrene','Yes','No'),
	array('Afghanistan','Sindh','No','Yes'),
	array('Afghanistan','Tibet','No','Yes'),
	array('Afghanistan','Kashmir','No','Yes'),
	array('Ethiopia','Kenya','No','Yes'),
	array('Ethiopia','Mogadishu','No','Yes'),
	array('Ethiopia','Awdal','Yes','Yes'),
	array('Ethiopia','Red Sea','Yes','No'),
	array('Ethiopia','Gulf of Aden','Yes','No'),
	array('Ethiopia','Sudan','Yes','Yes'),
	array('Kenya','Mogadishu','Yes','Yes'),
	array('Kenya','Sudan','No','Yes'),
	array('Mogadishu','Awdal','Yes','Yes'),
	array('Mogadishu','Gulf of Aden','Yes','No'),
	array('Mogadishu','Horn of Africa','Yes','No'),
	array('Awdal','Gulf of Aden','Yes','No'),
	array('Red Sea','Gulf of Aden','Yes','No'),
	array('Red Sea','Sudan','Yes','No'),
	array('Gulf of Aden','Arabian Sea','Yes','No'),
	array('Gulf of Aden','Horn of Africa','Yes','No'),
	array('Gulf of Aden','Western Indian Ocean','Yes','No'),
	array('Arabian Sea','Sindh','Yes','No'),
	array('Arabian Sea','Bombay','Yes','No'),
	array('Arabian Sea','Western Indian Ocean','Yes','No'),
	array('Horn of Africa','Western Indian Ocean','Yes','No'),
	array('Portugal','Spain (North Coast)','Yes','No'),
	array('Portugal','Spain (South Coast)','Yes','No'),
	array('Morocco','South Atlantic Ocean','Yes','No'),
	array('Cyrene','Fez','No','Yes'),
	array('Sindh','Kashmir','No','Yes'),
	array('Sindh','Delhi','No','Yes'),
	array('Sindh','Bombay','Yes','Yes'),
	array('Xinjiang','Mongolia','No','Yes'),
	array('Xinjiang','Inner Mongolia','No','Yes'),
	array('Xinjiang','Tibet','No','Yes'),
	array('Xinjiang','Qinghai','No','Yes'),
	array('Mongolia','Manchuria','No','Yes'),
	array('Mongolia','Inner Mongolia','No','Yes'),
	array('Manchuria','Korea','Yes','Yes'),
	array('Manchuria','Peking','Yes','Yes'),
	array('Manchuria','Inner Mongolia','No','Yes'),
	array('Manchuria','Yellow Sea','Yes','No'),
	array('Korea','Yellow Sea','Yes','No'),
	array('Korea','Sea of Japan','Yes','No'),
	array('Korea','East China Sea','Yes','No'),
	array('Sakhalin','Karafuto','Yes','Yes'),
	array('Sakhalin','Sea of Okhotsk','Yes','No'),
	array('Sakhalin','Sea of Japan','Yes','No'),
	array('Budapest','Galicia','No','Yes'),
	array('Budapest','Rumania','No','Yes'),
	array('Galicia','Rumania','No','Yes'),
	array('Karafuto','Sea of Okhotsk','Yes','No'),
	array('Karafuto','Sea of Japan','Yes','No'),
	array('Karafuto','North Pacific Ocean','Yes','No'),
	array('Tsingtao','Hebei','No','Yes'),
	array('Tsingtao','Hebei (North Coast)','Yes','No'),
	array('Tsingtao','Hebei (South Coast)','Yes','No'),
	array('Tsingtao','Yellow Sea','Yes','No'),
	array('Tsingtao','East China Sea','Yes','No'),
	array('Peking','Inner Mongolia','No','Yes'),
	array('Peking','Hebei','No','Yes'),
	array('Peking','Hebei (North Coast)','Yes','No'),
	array('Peking','Qinghai','No','Yes'),
	array('Peking','Yellow Sea','Yes','No'),
	array('Inner Mongolia','Qinghai','No','Yes'),
	array('Tibet','Kashmir','No','Yes'),
	array('Tibet','Delhi','No','Yes'),
	array('Tibet','Calcutta','No','Yes'),
	array('Tibet','Nepal','No','Yes'),
	array('Tibet','Yunnan','No','Yes'),
	array('Tibet','Burma','No','Yes'),
	array('Tibet','Qinghai','No','Yes'),
	array('Kashmir','Delhi','No','Yes'),
	array('Hebei','Wuhan','No','Yes'),
	array('Hebei','Qinghai','No','Yes'),
	array('Hebei','Shanghai','No','Yes'),
	array('Hebei (North Coast)','Yellow Sea','Yes','No'),
	array('Hebei (South Coast)','Yellow Sea','Yes','No'),
	array('Hebei (South Coast)','East China Sea','Yes','No'),
	array('Hebei (South Coast)','Shanghai','Yes','No'),
	array('Delhi','Calcutta','No','Yes'),
	array('Delhi','Nepal','No','Yes'),
	array('Delhi','Deccan','No','Yes'),
	array('Delhi','Bombay','No','Yes'),
	array('Calcutta','Nepal','No','Yes'),
	array('Calcutta','Deccan','No','Yes'),
	array('Calcutta','Bay of Bengal','Yes','No'),
	array('Calcutta','Burma','Yes','Yes'),
	array('Calcutta','Madras','Yes','Yes'),
	array('Deccan','Bombay','No','Yes'),
	array('Deccan','Madras','No','Yes'),
	array('Wuhan','Yunnan','No','Yes'),
	array('Wuhan','Guangzhou','No','Yes'),
	array('Wuhan','Qinghai','No','Yes'),
	array('Wuhan','Shanghai','No','Yes'),
	array('Yunnan','Guangzhou','No','Yes'),
	array('Yunnan','Burma','No','Yes'),
	array('Yunnan','Vietnam','No','Yes'),
	array('Yunnan','Qinghai','No','Yes'),
	array('Yunnan','Laos','No','Yes'),
	array('Guangzhou','Vietnam','Yes','Yes'),
	array('Guangzhou','South China Sea','Yes','No'),
	array('Guangzhou','Gulf of Tonkin','Yes','No'),
	array('Guangzhou','Shanghai','Yes','Yes'),
	array('Bombay','Western Indian Ocean','Yes','No'),
	array('Bombay','Madras','Yes','Yes'),
	array('Box C','South Atlantic Ocean','Yes','No'),
	array('Box C','Box F','Yes','No'),
	array('Box C','Box H','Yes','No'),
	array('Box C','Box G','Yes','No'),
	array('Ceylon','Western Indian Ocean','Yes','No'),
	array('Ceylon','Eastern Indian Ocean','Yes','No'),
	array('Western Indian Ocean','Madras','Yes','No'),
	array('Western Indian Ocean','Box G','Yes','No'),
	array('Western Indian Ocean','Eastern Indian Ocean','Yes','No'),
	array('Bay of Bengal','Andaman Sea','Yes','No'),
	array('Bay of Bengal','Burma','Yes','No'),
	array('Bay of Bengal','Madras','Yes','No'),
	array('Bay of Bengal','Eastern Indian Ocean','Yes','No'),
	array('Andaman Sea','Burma','Yes','No'),
	array('Andaman Sea','Thailand (West Coast)','Yes','No'),
	array('Andaman Sea','Singapore','Yes','No'),
	array('Andaman Sea','Sumatra','Yes','No'),
	array('Andaman Sea','Java Sea','Yes','No'),
	array('Andaman Sea','Eastern Indian Ocean','Yes','No'),
	array('Burma','Thailand','No','Yes'),
	array('Burma','Thailand (West Coast)','Yes','No'),
	array('Burma','Laos','No','Yes'),
	array('Thailand','Singapore','No','Yes'),
	array('Thailand','Laos','No','Yes'),
	array('Thailand','Cambodia','No','Yes'),
	array('Thailand (East Coast)','Singapore','Yes','No'),
	array('Thailand (East Coast)','Cambodia','Yes','No'),
	array('Thailand (East Coast)','Gulf of Thailand','Yes','No'),
	array('Thailand (West Coast)','Singapore','Yes','No'),
	array('Singapore','Java Sea','Yes','No'),
	array('Singapore','Gulf of Thailand','Yes','No'),
	array('Sumatra','Java Sea','Yes','No'),
	array('Sumatra','Eastern Indian Ocean','Yes','No'),
	array('Vietnam','Laos','No','Yes'),
	array('Vietnam','Annam','Yes','Yes'),
	array('Vietnam','Gulf of Tonkin','Yes','No'),
	array('Laos','Annam','No','Yes'),
	array('Laos','Cambodia','No','Yes'),
	array('Java Sea','Java','Yes','No'),
	array('Java Sea','Borneo','Yes','No'),
	array('Java Sea','Eastern Indian Ocean','Yes','No'),
	array('Java Sea','Celebes Sea','Yes','No'),
	array('Java Sea','Gulf of Thailand','Yes','No'),
	array('Java','Timor Sea','Yes','No'),
	array('Java','Eastern Indian Ocean','Yes','No'),
	array('Java','Celebes Sea','Yes','No'),
	array('Timor Sea','South Pacific Ocean','Yes','No'),
	array('Timor Sea','Box F','Yes','No'),
	array('Timor Sea','Eastern Indian Ocean','Yes','No'),
	array('Timor Sea','Celebes Sea','Yes','No'),
	array('Borneo','South China Sea','Yes','No'),
	array('Borneo','Celebes Sea','Yes','No'),
	array('Borneo','Gulf of Thailand','Yes','No'),
	array('Annam','Saigon','Yes','Yes'),
	array('Annam','South China Sea','Yes','No'),
	array('Annam','Gulf of Tonkin','Yes','No'),
	array('Annam','Cambodia','No','Yes'),
	array('Saigon','South China Sea','Yes','No'),
	array('Saigon','Cambodia','Yes','Yes'),
	array('Saigon','Gulf of Thailand','Yes','No'),
	array('Philippines','East China Sea','Yes','No'),
	array('Philippines','South China Sea','Yes','No'),
	array('Philippines','South Pacific Ocean','Yes','No'),
	array('Philippines','Celebes Sea','Yes','No'),
	array('Formosa','East China Sea','Yes','No'),
	array('Formosa','South China Sea','Yes','No'),
	array('Yellow Sea','East China Sea','Yes','No'),
	array('Sapporo','Sea of Japan','Yes','No'),
	array('Sapporo','North Pacific Ocean','Yes','No'),
	array('Sea of Okhotsk','Sea of Japan','Yes','No'),
	array('Sea of Okhotsk','North Pacific Ocean','Yes','No'),
	array('Sea of Japan','North Pacific Ocean','Yes','No'),
	array('Sea of Japan','Akita','Yes','No'),
	array('Sea of Japan','Kyoto','Yes','No'),
	array('Sea of Japan','Kagoshima','Yes','No'),
	array('Sea of Japan','East China Sea','Yes','No'),
	array('North Pacific Ocean','Akita','Yes','No'),
	array('North Pacific Ocean','Tokyo','Yes','No'),
	array('North Pacific Ocean','South Pacific Ocean','Yes','No'),
	array('North Pacific Ocean','Box D','Yes','No'),
	array('Akita','Tokyo','Yes','Yes'),
	array('Akita','Kyoto','Yes','Yes'),
	array('Tokyo','Kyoto','No','Yes'),
	array('Tokyo','Shizuoka','Yes','Yes'),
	array('Tokyo','South Pacific Ocean','Yes','No'),
	array('Kyoto','Shizuoka','No','Yes'),
	array('Kyoto','Kagoshima','Yes','Yes'),
	array('Kyoto','Osaka','No','Yes'),
	array('Shizuoka','Osaka','Yes','Yes'),
	array('Shizuoka','South Pacific Ocean','Yes','No'),
	array('Kagoshima','Osaka','Yes','Yes'),
	array('Kagoshima','East China Sea','Yes','No'),
	array('Osaka','East China Sea','Yes','No'),
	array('Osaka','South Pacific Ocean','Yes','No'),
	array('East China Sea','South China Sea','Yes','No'),
	array('East China Sea','South Pacific Ocean','Yes','No'),
	array('East China Sea','Shanghai','Yes','No'),
	array('South China Sea','Gulf of Tonkin','Yes','No'),
	array('South China Sea','Shanghai','Yes','No'),
	array('South China Sea','Celebes Sea','Yes','No'),
	array('South China Sea','Gulf of Thailand','Yes','No'),
	array('South Pacific Ocean','Box E','Yes','No'),
	array('South Pacific Ocean','Celebes Sea','Yes','No'),
	array('Box D','Box E','Yes','No'),
	array('Box D','Box F','Yes','No'),
	array('Box E','Box F','Yes','No'),
	array('Madras','Eastern Indian Ocean','Yes','No'),
	array('Sudan','Fez','No','Yes'),
	array('Box F','Box H','Yes','No'),
	array('Box F','Box G','Yes','No'),
	array('Box H','Box G','Yes','No'),
	array('Box H','Eastern Indian Ocean','Yes','No'),
	array('Cambodia','Gulf of Thailand','Yes','No')
);

foreach($bordersRawData as $borderRawRow)
{
	list($from, $to, $fleets, $armies)=$borderRawRow;
	InstallTerritory::$Territories[$to]  ->addBorder(InstallTerritory::$Territories[$from],$fleets,$armies);
}
unset($bordersRawData);

// Custom footer not changed by edit tool

// Just create the database as usual:
InstallTerritory::runSQL($this->mapID);
InstallCache::terrJSON($this->territoriesJSONFile(),$this->mapID);

// Copy the smallmap-sample to the cache-directory to avoid a screwed variantpage (there is no smallmap available)
if (!file_exists('variants/'.$this->name.'/cache/sampleMap.png'))
	copy ('variants/'.$this->name.'/resources/sampleMap.png','variants/'.$this->name.'/cache/sampleMap.png');

?>





