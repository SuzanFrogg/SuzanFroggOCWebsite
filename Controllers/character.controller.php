<?php


/*include_once("../../Models/character.model.php");
include_once("../../Models/character.am.model.php");
include_once("../../Models/character.undertale.model.php");
include_once("../../Models/character.hnk.model.php");*/

class CharacterManager
{
	private $arrayCharacters;

	public function __construct()
	{
		$this->arrayCharacters = array();

		/*$model = new Character(id,name,
		 		firstname,age,height,gender,birthd,specie,likes,
				dislikes,
				array(relation),
				backstory,description,
				array(pic),
				thumbnail);;
				*/


		//SASUIL

		$akio = new Character(
			"Shido_Akio",
			"Shido",
			"Akio",
			14,
			153,
			"Male",
			"05/04",
			"None",
			"Fighting and his sister",
			"When people forget that he's the eldest, his father",
			array("Shido_Sera" => "Twin sister", "Shido_Phia" => "Mother", "Shido_Rocre" => "Father"),
			"Shitty life.",
			"He is part of the Chutlu's cult.",
			array("https://cloud.refsheet.net/images/images/000/119/660/large/akio_ref.PNG?1531769625", "https://cloud.refsheet.net/images/images/000/131/087/large/sera_et_akio_bis.png?1533830857"),
			"https://cloud.refsheet.net/images/images/000/119/659/medium/akio_pic.png?1531769612"
		);

		$aly = new Character(
			"Spine_Aly",
			"Spine",
			"Aly",
			128,
			168,
			"Male",
			"03/01",
			"God",
			"Being powerful, wayching moovies and the night.",
			"Have to wake up.",
			array("Spine_Oseli" => "Big sister"),
			"",
			"He is a Despair God despite his apparence, he is more evil than he looks and can be a real asshole sometimes. He's strong.",
			array("https://cloud.refsheet.net/images/images/000/314/055/large/Aly_Ref.png?1555609209"),
			"https://cloud.refsheet.net/images/images/000/314/053/large/Aly_pic.png?1555609101"
		);


		$ama = new Character(
			"Hona_Ama",
			"Hona",
			"Ama",
			29,
			162,
			"Female",
			"20/02",
			"Beaver",
			"Her son, work and read, water.",
			"Driving and the salt.",
			array(
				"Hona_Dahi" => "Cousin", "Hona_Yth" => "Son", "Hona_Aynth" => "Wife",
				"Hona_Lysthill" => "Step Daughter", "Hona_Satoru" => "Litlte brother"
			),
			"",
			"She is a calm person.
				She lost her eye in a car accident.",
			array("https://cloud.refsheet.net/images/images/000/131/077/large/Ama_et_Yth_ref_-g.png?1533827524"),
			"https://cloud.refsheet.net/images/images/000/131/076/large/ama_pic.PNG?1533827517"
		);

		$sera = new Character(
			"Shido_Sera",
			"Shido",
			"Sera",
			14,
			150,
			"Female",
			"05/04",
			"None",
			"Fighting, see pain, candys, her brother",
			"Uptights peoples, her father",
			array("Shido_Akio" => "Twin brother", "Shido_Phia" => "Mother", "Shido_Rocre" => "Father"),
			"",
			"She is part of the Chutlu's cult.",
			array("https://cloud.refsheet.net/images/images/000/119/656/large/sera_ref.PNG?1531769268", "https://cloud.refsheet.net/images/images/000/131/087/large/sera_et_akio_bis.png?1533830857"),
			"https://cloud.refsheet.net/images/images/000/119/654/medium/sera_pic.png?1531769250"
		);

		$amset = new Character(
			"_Amset",
			"",
			"Amset",
			21,
			176,
			"Male",
			"06/06",
			"None",
			"Gardening, Laly , smoking, plants.",
			"Bugs, snow.",
			array("_Laly" => "Girlfriend", "_Jun" => "Bestfriend"),
			"",
			"He's calm and sad, he can control plants.
				Seems like he doesn't smoke only tabacoo... <br/>
				Part-time member of the <a href=\"../ninasquad.php\">Nina's Squad</a>",
			array("https://cloud.refsheet.net/images/images/000/122/260/large/Amset_Ref_-g.png?1532286934"),
			"https://cloud.refsheet.net/images/images/000/122/259/medium/Amset_pic.PNG?1532286928"
		);

		$ash = new Character(
			"_Ash",
			"",
			"Ash",
			119,
			162,
			"Female",
			"17/05",
			"Zombie",
			"Naly , bodybuilding, kindly scare people.",
			"Shopping, when the loses a member.",
			array("_Naly" => "Girlfriend"),
			"",
			"She died at 21y'o. She is a zombi who loves do bodybuilding and take care of her body.
				She's really strong and cares about other peoples.
				She is pansexual.
				<br/>Member of the <a href=\"../ninasquad.php\">Nina's Squad</a>",
			array("https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/2ad3a17d-3aa5-4d5f-887b-70cac5663cd9/dekuhnr-d89bb850-6fdc-42b0-8cff-a90003f08747.png/v1/fill/w_905,h_883,q_70,strp/ref_ash_new_by_suzanfrogg_dekuhnr-pre.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9MTI0OSIsInBhdGgiOiJcL2ZcLzJhZDNhMTdkLTNhYTUtNGQ1Zi04ODdiLTcwY2FjNTY2M2NkOVwvZGVrdWhuci1kODliYjg1MC02ZmRjLTQyYjAtOGNmZi1hOTAwMDNmMDg3NDcucG5nIiwid2lkdGgiOiI8PTEyODAifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6aW1hZ2Uub3BlcmF0aW9ucyJdfQ.ZkoWmKr0KPDpuoKQpuy_8LyRXQqdM8ha6VeGMZKeWk8"),
			"https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/2ad3a17d-3aa5-4d5f-887b-70cac5663cd9/dekuhuy-961017a2-0f89-46ba-8a1c-3e4e9b265249.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzJhZDNhMTdkLTNhYTUtNGQ1Zi04ODdiLTcwY2FjNTY2M2NkOVwvZGVrdWh1eS05NjEwMTdhMi0wZjg5LTQ2YmEtOGExYy0zZTRlOWIyNjUyNDkucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.SK3La6tYjlaUIN2W7lI7P6l3NNJIpF-vYgFypmepZvU"
		);

		$aynth = new Character(
			"Hona_Aynth",
			"Hona",
			"Aynth",
			25,
			173,
			"Female",
			"21/09",
			"Centaur",
			"The night, the forest and run.",
			"Ice cream and the city.",
			array(
				"Hona_Ama" => "Wife", "Hona_Yth" => "Stepson",
				"Hona_Lysthill" => "Daughter"
			),
			"",
			"She is protestant. She's selfassured and romantic.
				She is lesbian.",
			array("https://cloud.refsheet.net/images/images/000/160/230/large/Aynth_ref_-g.png?1538930173"),
			"https://cloud.refsheet.net/images/images/000/160/229/medium/Aynth_pic.PNG?1538930163"
		);

		$dahi = new Character(
			"Hona_Dahi",
			"Hona",
			"Dahi",
			21,
			178,
			"Female (Trans)",
			"05/12",
			"Fox",
			"Meat, see the sunset, cutes clothes",
			"Go outside, when Tsyna smokes in front of her, sport.",
			array("Hona_Ama" => "Cousin", "Hona_Satoru" => "Cousin", "Hona_Yth" => "Grand Cousin", "Dass_Tsyna" => "Bestfriend"),
			"",
			"She's a cyclope, work at a brothel. She's very shy.
				She also is a magical girl - but only in part time .",
			array("https://cloud.refsheet.net/images/images/000/131/090/large/Dahi_ref_-g.png?1533832063", "https://cloud.refsheet.net/images/images/000/170/908/medium/Dahi_tenue_magique_ref.png?1540467768"),
			"https://cloud.refsheet.net/images/images/000/131/089/medium/Dahi_pic.PNG?1533832056"
		);

		$domma = new Character(
			"Ewana_Domma",
			"Ewana",
			"Domma",
			38,
			181,
			"Male",
			"25/12",
			"None",
			"The respect of the autority, god, his wife Lyci and his daughter Tori.",
			"Queers peoples and none catolic peoples. His daughter Tomoyo",
			array("Ewana_Tomoyo" => "Daughter", "Ewana_Tori" => "Daughter", "Ewana_Lyci" => "Wife"),
			"",
			"He's a priest, he's catolic. He's a severe and strict person.",
			array("https://cloud.refsheet.net/images/images/000/147/899/large/Domma_ref_-g.png?1536776978"),
			"https://cloud.refsheet.net/images/images/000/147/898/medium/Domma_pic.PNG?1536776976"
		);

		$heiby = new Character(
			"Merry_Heiby",
			"Merry",
			"Heiby",
			17,
			165,
			"Genderfluid",
			"21/12",
			"Lamia",
			"Raw frogs, confuse people about they gender and green.",
			"Their boobs, the pepper",
			array(
				"_Sally" => "Crush", "Merry_Smo" => "Adoptive Brother",
				"Merry_Miranda" => "Adoptive Sister"
			),
			"",
			"They are selfassured and buddhist.",
			array("https://cloud.refsheet.net/images/images/000/120/225/large/Heiby_ref_-_g.png?1531856313"),
			"https://cloud.refsheet.net/images/images/000/120/227/medium/heiby_pic.PNG?1531856355"
		);


		$jack = new Character(
			"_Jack",
			"",
			"Jack",
			23,
			181,
			"Male",
			"30/11",
			"None",
			"Chocolate, Satoru",
			"Homophobics peoples, the salt.",
			array("Hona_Satoru" => "Crush"),
			"",
			"He is always happy, at a point he annoy peoples sometimes . He's gay.",
			array("https://cloud.refsheet.net/images/images/000/120/169/large/Jack_ref_-g.png?1531853477"),
			"https://cloud.refsheet.net/images/images/000/120/171/medium/jack_pic.PNG?1531853510"
		);

		$jun = new Character(
			"_Jun",
			"",
			"Jun",
			22,
			185,
			"Male",
			"11/11",
			"None",
			"Saki, drink.",
			"The life, himself.",
			array("Nina_Saki" => "Crush and bestfriend", "_Amset" => "Bestfriend"),
			"",
			"He is often drunk, he drink to forget he's depressed but it just make thing worst. He is a really melancolic person.
				He love roman mythology",
			array("https://cloud.refsheet.net/images/images/000/120/027/large/Jun_ref_-g.png?1531845846"),
			"https://cloud.refsheet.net/images/images/000/120/015/medium/jun_pic.PNG?1531845799"
		);

		$kaele = new Character(
			"Letha_Kaële",
			"Letha",
			"Kaële",
			769,
			181,
			"Female",
			"26/07",
			"Goddess",
			"Rain, plants, forest, her sister Khöös and animals.",
			"Storm, humans.",
			array("Letha_Köös" => "Self declared Sister"),
			"",
			"She is a earth godess, she is lesbian and have a very cute personality.",
			array("https://cloud.refsheet.net/images/images/000/131/084/large/Kaele_Ref__-g.png?1533829707"),
			"https://cloud.refsheet.net/images/images/000/131/083/medium/Ka%C3%ABle_pic.PNG?1533829702"
		);

		$koos = new Character(
			"Letha_Köös",
			"Letha",
			"Köös",
			4296,
			275,
			"Female",
			"Unknow",
			"Goddess",
			"Humans, play chest, rain, fishs and love.",
			"Sadness, wickedness.",
			array("Letha_Kaële" => "Self declared Sister"),
			"",
			"She is really calm and smart.
				She's a Goddess so she is immortal. She can controle everything exepct life/death and time. She try to do everything that she can to make other's life happiest.
				She is a scpace.foam.flower.girl; the flower in her face change with her mood.",
			array("https://cloud.refsheet.net/images/images/000/124/126/large/Kh%C3%B6%C3%B6s_ref_-g.png?1532544530"),
			"https://cloud.refsheet.net/images/images/000/124/120/medium/Kh%C3%B6%C3%B6s_pic.PNG?1532544145"
		);

		$laly = new Character(
			"_Laly",
			"",
			"Laly",
			24,
			166,
			"Female",
			"15/08",
			"Tulip",
			"Nature, water, sun and Amset.",
			"Insects, wickedness.",
			array("_Amset" => "Boyfriend", "_Lèlytè" => "Bestfriend"),
			"",
			"She is buddhist, pansexual, sweet and gentle.",
			array("https://cloud.refsheet.net/images/images/000/120/000/large/Laly_ref_-g.png?1531844218"),
			"https://cloud.refsheet.net/images/images/000/120/001/medium/laly_pic.PNG?1531844232"
		);

		$lelyte = new Character(
			"_Lèlytè",
			"",
			"Lèlytè",
			23,
			169,
			"Female",
			"21/09",
			"Buterfly",
			"She love flowers and nature in a general way, walk, fly and peaceful places.",
			"Rainy days and the noise.",
			array("_Laly" => "Bestfriend", "_Rinji" => "Friend"),
			"",
			"She is blind. She's very calm.
				She's Lesbian.
				She believe in Sasuil Gods.
				The flower on her chest grow depending her hapiness; she can create flowers.",
			array("https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/2ad3a17d-3aa5-4d5f-887b-70cac5663cd9/dda00sj-8632b9f9-6a1c-406e-92a1-308c97ca9dfd.png/v1/fill/w_850,h_940,q_70,strp/llyt_ref_by_suzanfrogg_dda00sj-pre.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9MTIwMCIsInBhdGgiOiJcL2ZcLzJhZDNhMTdkLTNhYTUtNGQ1Zi04ODdiLTcwY2FjNTY2M2NkOVwvZGRhMDBzai04NjMyYjlmOS02YTFjLTQwNmUtOTJhMS0zMDhjOTdjYTlkZmQucG5nIiwid2lkdGgiOiI8PTEwODYifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6aW1hZ2Uub3BlcmF0aW9ucyJdfQ.02mmgI30xdgtQK207xVBPcEqlA9JEjU7UFvH_h00ZBk"),
			"https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/2ad3a17d-3aa5-4d5f-887b-70cac5663cd9/dda00t8-02b9ff07-11fa-4529-be04-20b8a4b50730.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzJhZDNhMTdkLTNhYTUtNGQ1Zi04ODdiLTcwY2FjNTY2M2NkOVwvZGRhMDB0OC0wMmI5ZmYwNy0xMWZhLTQ1MjktYmUwNC0yMGI4YTRiNTA3MzAucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.ERjc25atCxC8Sbv7T0L8AGJaIQttwtHh6-hXfEIzYOU"
		);

		$lyci = new Character(
			"Ewana_Lyci",
			"Ewana",
			"Lyci",
			36,
			163,
			"Female",
			"18/04",
			"None",
			"To sew, do charity work, god, her husband Domma and her daughter Tori.",
			"Queers peoples and none catolic peoples. Her daughter Tomoyo.",
			array("Ewana_Tomoyo" => "Daughter", "Ewana_Tori" => "Daughter", "Ewana_Domma" => "Husband"),
			"",
			"She's catolic and a submissise wife.",
			array("https://cloud.refsheet.net/images/images/000/147/892/large/Lyci_ref_-g.png?1536776583"),
			"https://cloud.refsheet.net/images/images/000/147/891/medium/Lyci_pic.PNG?1536776578"
		);

		$lysthill = new Character(
			"Hona_Lysthill",
			"Hona",
			"Lysthill",
			4,
			79,
			"Female",
			"02/09",
			"Bird",
			"Play with her old brother, fly, eat.",
			"Beans, school.",
			array("Hona_Aynth" => "Mother", "Hona_Ama" => "Stepmother", "Hona_Yth" => "Stepbrother"),
			"",
			"She sweet and naive. She can't always control her wings.",
			array("https://cloud.refsheet.net/images/images/000/160/244/large/Lysthill_ref_-g.png?1538932909"),
			"https://cloud.refsheet.net/images/images/000/160/243/medium/Lysthill_pic.PNG?1538932898"
		);

		$mary = new Character(
			"Lewis_Mary",
			"Lewis",
			"Mary",
			21,
			163,
			"Female",
			"22/03",
			"None",
			"The \"haute couture\", spaghetti.",
			"Commoners.",
			array("Lewis_Ruby" => "Sister"),
			"",
			"She is a bourge and she's narcissitic, supercillious, contemtuous...
				She is pastafaric.",
			array("https://cloud.refsheet.net/images/images/000/119/987/large/mary_ref_-g.png?1531840853"),
			"https://cloud.refsheet.net/images/images/000/119/988/medium/mary_pic.PNG?1531840873"
		);

		$miranda = new Character(
			"Merry_Miranda",
			"Merry",
			"Miranda",
			23,
			163,
			"Female",
			"09/02",
			"Spider",
			"The night, read , draw and animals.",
			"To sew and cartoons.",
			array("Merry_Heiby" => "Adoptive Sibling", "Merry_Smo" => "Adoptive Brother", "Dass_Tsyna" => "Girlfriend"),
			"",
			"She is Smart and sweet, insomniac and an Art's teacher.",
			array("https://cloud.refsheet.net/images/images/000/164/307/large/Miranda_Ref_-g.png?1539454831"),
			"https://cloud.refsheet.net/images/images/000/164/305/medium/Miranda_pic.PNG?1539454807"
		);

		$naly = new Character(
			"_Naly",
			"",
			"Naly",
			19,
			167,
			"Female",
			"02/02",
			"None",
			" Ash , dance, sing , mediation and gold.",
			"Noise , children.",
			array("_Ash" => "Girlfriend"),
			"",
			"She is a good singer and dancer and she can do magic with her songs.
				She is unsure of herself.
				She's Lesbian.
				<br/> Member of the <a href=\"../ninasquad.php\">Nina's Squad</a>",
			array("https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/2ad3a17d-3aa5-4d5f-887b-70cac5663cd9/demtrba-dadd86dc-3dd3-454f-afbd-fc7687870c68.png/v1/fill/w_1028,h_777,q_70,strp/nally_ref_new_by_suzanfrogg_demtrba-pre.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9OTY4IiwicGF0aCI6IlwvZlwvMmFkM2ExN2QtM2FhNS00ZDVmLTg4N2ItNzBjYWM1NjYzY2Q5XC9kZW10cmJhLWRhZGQ4NmRjLTNkZDMtNDU0Zi1hZmJkLWZjNzY4Nzg3MGM2OC5wbmciLCJ3aWR0aCI6Ijw9MTI4MCJ9XV0sImF1ZCI6WyJ1cm46c2VydmljZTppbWFnZS5vcGVyYXRpb25zIl19.VNrqQ2Bh2LgzLQYWa9ntN-hdeMxWLQbhOIX-074qtDs"),
			"https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/2ad3a17d-3aa5-4d5f-887b-70cac5663cd9/demtrbm-00f677f5-f475-479d-93b8-95969d3dba39.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzJhZDNhMTdkLTNhYTUtNGQ1Zi04ODdiLTcwY2FjNTY2M2NkOVwvZGVtdHJibS0wMGY2NzdmNS1mNDc1LTQ3OWQtOTNiOC05NTk2OWQzZGJhMzkucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.Rq6v73R-_sIUqBh_WniIsTzDkwTvZyvdfV9OmxnmYUs"
		);

		$nyaomie = new Character(
			"Dass_Nyaomie",
			"Dass",
			"Nyaomie",
			17,
			161,
			"Female",
			"23/02",
			"Cat",
			"Tomoyo, listen to the rain falling, see the snow falling, fishs.",
			"When peoples bothers her girlfriend, dogs.",
			array("Dass_Tsyna" => "Sister", "Ewana_Tomoyo" => "Girlfriend"),
			"",
			"She's naive but also protectress with peoples she loves.",
			array("https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/2ad3a17d-3aa5-4d5f-887b-70cac5663cd9/de6w1h2-b436ef29-c41e-403f-b786-f93c6c92dc07.png/v1/fill/w_755,h_1058,q_70,strp/nyaomie_ref_new_by_suzanfrogg_de6w1h2-pre.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOiIsImlzcyI6InVybjphcHA6Iiwib2JqIjpbW3siaGVpZ2h0IjoiPD0xNDAwIiwicGF0aCI6IlwvZlwvMmFkM2ExN2QtM2FhNS00ZDVmLTg4N2ItNzBjYWM1NjYzY2Q5XC9kZTZ3MWgyLWI0MzZlZjI5LWM0MWUtNDAzZi1iNzg2LWY5M2M2YzkyZGMwNy5wbmciLCJ3aWR0aCI6Ijw9MTAwMCJ9XV0sImF1ZCI6WyJ1cm46c2VydmljZTppbWFnZS5vcGVyYXRpb25zIl19.tIrRdyixbCPdUp6N9tTiUJaIyGF-kiDv2leOu4GD4rc"),
			"https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/2ad3a17d-3aa5-4d5f-887b-70cac5663cd9/de6w1h7-ea6ab966-926e-464e-8df1-4d675931d39e.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOiIsImlzcyI6InVybjphcHA6Iiwib2JqIjpbW3sicGF0aCI6IlwvZlwvMmFkM2ExN2QtM2FhNS00ZDVmLTg4N2ItNzBjYWM1NjYzY2Q5XC9kZTZ3MWg3LWVhNmFiOTY2LTkyNmUtNDY0ZS04ZGYxLTRkNjc1OTMxZDM5ZS5wbmcifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6ZmlsZS5kb3dubG9hZCJdfQ.HC6Bhx2OSsLmzJ8BtMlMetp6xUUeQTP0bnGatZhDqw8"
		);

		$oseli = new Character(
			"Spine_Oseli",
			"Spine",
			"Oseli",
			132,
			174,
			"Female",
			"09/08",
			"Goddess",
			"Crystals, peace, colors.",
			"Noise, use her power",
			array("Spine_Aly" => "Litlte brother"),
			"",
			"Despite her apparence she is a hope Goddess, she is strong and can be realy nice and shy.
				She used too much her power and now she's (temporary or not she still don't know) blind.",
			array("https://cloud.refsheet.net/images/images/000/314/037/large/Oseli_ref_.png?1555607310"),
			"https://cloud.refsheet.net/images/images/000/314/036/medium/Oseli_pic.png?1555607302"
		);

		$phia = new Character(
			"Shido_Phia",
			"Shido",
			"Phia",
			28,
			167,
			"Female",
			"09/03",
			"None",
			"Her children , read and being out of her house.",
			"Her husband, her life and doing houswork.",
			array("Shido_Akio" => "Son", "Shido_Sera" => "Daughter", "Shido_Rocre" => "Hudsband"),
			"",
			"ACTUALLY DEAD <br/>
				She was killed by her husband at 28y'o, she was an abused wife, she was catolic. Phia was a sweet woman but she was easily scared and anorexic 'cause of her husband. She wanted to protect her children but was too weak physicly and mentaly",
			array("https://cloud.refsheet.net/images/images/000/231/103/large/Phia_Ref.png?1548263989"),
			"https://cloud.refsheet.net/images/images/000/231/102/large/Phia_pic.png?1548263984"
		);

		$rinji = new Character(
			"_Rinji",
			"",
			"Rinji",
			17,
			174,
			"Male",
			"20/08",
			"Earth nymph",
			"ead, Stay in the forest for hours.",
			"Eat meat, hurt animals, when it's too hot.",
			array("_Lèlytè" => "Friend"),
			"",
			"He's calm, he always help his friend but he is a little too narcisic about his physic. He's vegetarian",
			array("https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/2ad3a17d-3aa5-4d5f-887b-70cac5663cd9/de6w23x-0ef35081-e922-4940-a747-7559a9bc43ac.png/v1/fill/w_824,h_970,q_70,strp/rinji_ref_by_suzanfrogg_de6w23x-pre.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOiIsImlzcyI6InVybjphcHA6Iiwib2JqIjpbW3siaGVpZ2h0IjoiPD0xMTAwIiwicGF0aCI6IlwvZlwvMmFkM2ExN2QtM2FhNS00ZDVmLTg4N2ItNzBjYWM1NjYzY2Q5XC9kZTZ3MjN4LTBlZjM1MDgxLWU5MjItNDk0MC1hNzQ3LTc1NTlhOWJjNDNhYy5wbmciLCJ3aWR0aCI6Ijw9OTM1In1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmltYWdlLm9wZXJhdGlvbnMiXX0.67_Ec1APXmB4TLHDcUn8PiEFGzNF1gzli2VgV9hZ-LE"),
			"https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/2ad3a17d-3aa5-4d5f-887b-70cac5663cd9/de6w245-539a6ee7-28d3-4c4b-b9db-89423eea4415.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOiIsImlzcyI6InVybjphcHA6Iiwib2JqIjpbW3sicGF0aCI6IlwvZlwvMmFkM2ExN2QtM2FhNS00ZDVmLTg4N2ItNzBjYWM1NjYzY2Q5XC9kZTZ3MjQ1LTUzOWE2ZWU3LTI4ZDMtNGM0Yi1iOWRiLTg5NDIzZWVhNDQxNS5wbmcifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6ZmlsZS5kb3dubG9hZCJdfQ.yJ5oUemRJw_zozP6cG168SMUXr9hD9R9mZfuljnwMCk"
		);

		$rira = new Character(
			"Nina_Rira",
			"Nina",
			"Rira",
			22,
			176,
			"Female",
			"12/11",
			"Half Cyborg",
			"o fight, the technology, the drugs.",
			"Children, to respect the law.",
			array("Nina_Saki" => "Sister"),
			"",
			"She is determinded and selfassured.
				<br/>Leader of the <a href=\"../ninasquad.php\">Nina's Squad</a>",
			array("https://cloud.refsheet.net/images/images/000/164/343/large/Rira_Ref_-g.png?1539458173"),
			"https://cloud.refsheet.net/images/images/000/164/342/medium/Rira_pic.PNG?1539458167"
		);

		$rocre = new Character(
			"Shido_Rocre",
			"Shido",
			"Rocre",
			41,
			179,
			"Male",
			"10/10",
			"None",
			"Drink and have sex.",
			"When he can't control things, being interupt when he go something.",
			array("Shido_Phia" => "Wife", "Shido_Akio" => "Son", "Shido_Sera" => "Daughter"),
			"",
			"He is a violent man, he gets angry easily and drink a lot.
				He abused his child and his wife, he killed her wife.",
			array("https://cloud.refsheet.net/images/images/000/231/136/large/Rocre_ref.png?1548267722"),
			"https://cloud.refsheet.net/images/images/000/231/135/large/Rocre_pic.png?1548267715"
		);

		$ruby = new Character(
			"Lewis_Ruby",
			"Lewis",
			"Ruby",
			16,
			171,
			"Female",
			"28/12",
			"None",
			"Be the center of the attention, make fun of people, makeup and jewel.",
			"People who don't admirate her, the rain ('cause of the makeup).",
			array("Lewis_Mary" => "Sister"),
			"",
			"She is a mythic bicth! She is supercilous, superficial and rude. She is lesbian.",
			array("https://cloud.refsheet.net/images/images/000/148/351/large/Ruby_ref_-g.png?1536864104"),
			"https://cloud.refsheet.net/images/images/000/148/350/medium/Ruby_pic.PNG?1536864102"
		);

		$ruth = new Character(
			"_Ruth",
			"",
			"Ruth",
			22,
			171,
			"Female",
			"15/01",
			"None",
			"Time travelling, the XX century, read.",
			"Staying at the same epoq (exepct XX century), new technologies",
			array(),
			"",
			"She can travel in time and control time with her tatoo, she's very smart and greysexual.",
			array("https://i.imgur.com/jhCC2YI.png"),
			"https://i.imgur.com/Mwvi222.png"
		);

		$saki = new Character(
			"Nina_Saki",
			"Nina",
			"Saki",
			19,
			170,
			"Female",
			"29/03",
			"Dragon",
			"Her moto, her guns, to fight.",
			"Love stories, Mary and scornful peoples.",
			array("_Jun" => "Bestfriend", "Nina_Rira" => "Sister"),
			"",
			"She is a little crazy and have psycopathic tendencies.
				She kinda crush on Jun too, but she find him too violent when he drinks.
				<br/> Second leader of the <a herf=\"../ninasquad.php\">Nina's Squad</a>",
			array("https://cloud.refsheet.net/images/images/000/119/994/large/Saki_ref_-g.png?1531842567"),
			"https://cloud.refsheet.net/images/images/000/119/995/medium/saki_pic.PNG?1531842587"
		);

		$sally = new Character(
			"_Sally",
			"",
			"Sally",
			18,
			162,
			"Female",
			"14/03",
			"None",
			"Yaoi, mangas, cats, eat, fun t-shirt.",
			"Crustacean, lettuce, racists.",
			array("_Jack" => "Friend and propably crush (she's confused)"),
			"",
			"She's a fujoshi and an otaku. She is protestant.",
			array("https://cloud.refsheet.net/images/images/000/120/211/large/Sally_ref_-g.png?1531854932"),
			"https://cloud.refsheet.net/images/images/000/120/213/medium/sally_pic.PNG?1531854958"
		);

		$satoru = new Character(
			"Hona_Satoru",
			"Hona",
			"Satoru",
			22,
			178,
			"Male",
			"02/05",
			"Snake",
			"Crawl, meat.",
			"Flowers and birds.",
			array("Hona_Dahi" => "Cousin", "Hona_Yth" => "Nephew", "Hona_Ama" => "Sister", "Merry_Heiby" => "Crush"),
			"",
			"He's emo, his scales', hairs' and eyes' color changes with his mood.",
			array("https://cloud.refsheet.net/images/images/000/120/132/large/Satoru_ref_-g.png?1531851069"),
			"https://cloud.refsheet.net/images/images/000/120/138/large/satoru_pic.PNG?1531851108"
		);

		$sha = new Character(
			"_Sha",
			"",
			"Sha",
			16,
			165,
			"Female",
			"20/10",
			"None",
			"Sleep, be barefoot, talk with peoples.",
			"Highschool, chocolate.",
			array("Ewana_Tomoyo" => "Middle School Friend"),
			"",
			"Kind, catolic and narcoleptic girl.",
			array("https://cloud.refsheet.net/images/images/000/147/910/large/Sha_ref_-g.png?1536779568"),
			"https://cloud.refsheet.net/images/images/000/147/911/medium/sha_pic.PNG?1536779590"
		);

		$shao = new Character(
			"_Shao",
			"",
			"Shao",
			1225,
			352,
			"Female",
			"30/10",
			"Goddess",
			"Play, children, her sis",
			"Rain, thinking to hard.",
			array("_Asoh" => "Siamese sister"),
			"",
			"Moonstuck and naive.",
			array("https://cloud.refsheet.net/images/images/000/131/110/large/Shao_et_Asoh_Ref_-g.png?1533837433"),
			"https://cloud.refsheet.net/images/images/000/131/109/medium/Shao_et_Asoh_pic.PNG?1533837426"
		);

		$asoh = new Character(
			"_Asoh",
			"",
			"Asoh",
			1225,
			353,
			"Female",
			"30/10",
			"Goddess",
			"Think, watchs humans, her sister.",
			"Disrespectful persons, eat.",
			array("_Shao" => "Siamese sister"),
			"",
			"Very smart",
			array("https://cloud.refsheet.net/images/images/000/131/110/large/Shao_et_Asoh_Ref_-g.png?1533837433"),
			"https://cloud.refsheet.net/images/images/000/131/109/medium/Shao_et_Asoh_pic.PNG?1533837426"
		);

		$smo = new Character(
			"Merry_Smo",
			"Merry",
			"Smo",
			19,
			171,
			"Male",
			"01/09",
			"Mermaid",
			"Shells and Sleeping.",
			"Sharks and Seafood.",
			array("Merry_Heiby" => "Adoptive sibling", "Merry_Miranda" => "Adoptive sister"),
			"",
			"He is shy and messy.",
			array("https://cloud.refsheet.net/images/images/000/164/285/large/Smo_Ref_-g.png?1539452228"),
			"https://cloud.refsheet.net/images/images/000/164/284/medium/Smo_pic.PNG?1539452218"
		);

		$tomoyo = new Character(
			"Ewana_Tomoyo",
			"Ewana",
			"Tomoyo",
			16,
			159,
			"Female",
			"13/07",
			"None",
			"To balance, her girlfriend Nyaomie.",
			"The noize, the crowd and the light.",
			array("Ewana_Tori" => "Twin Sister", "Ewana_Domma" => "Father", "Ewana_Lyci" => "Mother", "Dass_Nyaomie" => "Girlfriend"),
			"",
			"She's depressive and become nostalgic easily. She's catolic.
				Her sexual orientation is bisexuality.",
			array("https://cloud.refsheet.net/images/images/000/119/984/large/tomoyo_ref_-g.png?1531839601"),
			"https://cloud.refsheet.net/images/images/000/119/985/medium/tomoyo_pic.PNG?1531839676"
		);

		$tori = new Character(
			"Ewana_Tori",
			"Ewana",
			"Tori",
			16,
			159,
			"Female",
			"13/07",
			"none",
			"Her family even if she's not really close of them, read, see her friend, god.",
			"Not being able to walk, children.",
			array("Ewana_Tomoyo" => "Twin Sister", "Ewana_Domma" => "Father", "Ewana_Lyci" => "Mother"),
			"",
			"She is disabled. She's Uptight but kind and catolic.",
			array("https://cloud.refsheet.net/images/images/000/147/137/large/Tori_Ref_-g.png?1536690945"),
			"https://cloud.refsheet.net/images/images/000/147/138/medium/Tori_pic.PNG?1536690958"
		);

		$tsyna = new Character(
			"Dass_Tsyna",
			"Dass",
			"Tsyna",
			22,
			163,
			"Female",
			"25/06",
			"Rabbit",
			"Vegetables, run, help her friend and smokes even if she know it's a bad habit.",
			"Horror moovies, her fear of abandonment .",
			array("Dass_Nyaomie" => "Sister", "Hona_Dahi" => "Bestfriend", "Merry_Miranda" => "Girlfriend"),
			"",
			"She work at a brothel. She is Omni sexual and is a dynamic person. She love her work but she's always scare of being left always by her loved ones because of it, especially her girlfriend.",
			array("https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/2ad3a17d-3aa5-4d5f-887b-70cac5663cd9/de6w1gv-f3b7e511-0fdf-45bd-99bb-8223531733fa.png/v1/fill/w_764,h_1046,q_70,strp/tsyna_ref_new_by_suzanfrogg_de6w1gv-pre.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOiIsImlzcyI6InVybjphcHA6Iiwib2JqIjpbW3siaGVpZ2h0IjoiPD0xMzcwIiwicGF0aCI6IlwvZlwvMmFkM2ExN2QtM2FhNS00ZDVmLTg4N2ItNzBjYWM1NjYzY2Q5XC9kZTZ3MWd2LWYzYjdlNTExLTBmZGYtNDViZC05OWJiLTgyMjM1MzE3MzNmYS5wbmciLCJ3aWR0aCI6Ijw9MTAwMCJ9XV0sImF1ZCI6WyJ1cm46c2VydmljZTppbWFnZS5vcGVyYXRpb25zIl19.QTZVC22UEoGN6waNIw3EwzqvDYWf6p6QtFxkw1fPuVI"),
			"https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/2ad3a17d-3aa5-4d5f-887b-70cac5663cd9/de6w1h0-cb2fdd17-0464-41c9-9ff3-36607a814d8b.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOiIsImlzcyI6InVybjphcHA6Iiwib2JqIjpbW3sicGF0aCI6IlwvZlwvMmFkM2ExN2QtM2FhNS00ZDVmLTg4N2ItNzBjYWM1NjYzY2Q5XC9kZTZ3MWgwLWNiMmZkZDE3LTA0NjQtNDFjOS05ZmYzLTM2NjA3YTgxNGQ4Yi5wbmcifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6ZmlsZS5kb3dubG9hZCJdfQ.ahkHXBPZ8jm8BsvDgyICQeFBlvw_kCa-4WISy5AXxUk"
		);

		$yth = new Character(
			"Hona_Yth",
			"Hona",
			"Yth",
			5,
			85,
			"Male",
			"30/06",
			"Deer",
			"Play fight video games, listen music and spend time with his uncle.",
			"Not being able to takl, the fact no one believe him when he says he remember his old life.",
			array("Hona_Dahi" => "Grand cousin", "Hona_Ama" => "Mother", "Hona_Aynth" => "Stepmother", "Hona_Lysthill" => "Stepsister", "Hona_Satoru" => "Uncle"),
			"",
			"He is mute. He's the reincarnation of a 25yo man who died in a car accident and still remember his old life, but nobody believe him.",
			array("https://cloud.refsheet.net/images/images/000/131/077/large/Ama_et_Yth_ref_-g.png?1533827524"),
			"https://cloud.refsheet.net/images/images/000/131/078/large/Yth_pic.PNG?1533828006"
		);

		array_push($this->arrayCharacters, $akio);
		array_push($this->arrayCharacters, $sera);
		array_push($this->arrayCharacters, $aly);
		array_push($this->arrayCharacters, $ama);
		array_push($this->arrayCharacters, $laly);
		array_push($this->arrayCharacters, $jack);
		array_push($this->arrayCharacters, $yth);
		array_push($this->arrayCharacters, $miranda);
		array_push($this->arrayCharacters, $rinji);
		array_push($this->arrayCharacters, $mary);
		array_push($this->arrayCharacters, $tsyna);
		array_push($this->arrayCharacters, $nyaomie);
		array_push($this->arrayCharacters, $rocre);
		array_push($this->arrayCharacters, $smo);
		array_push($this->arrayCharacters, $saki);
		array_push($this->arrayCharacters, $sally);
		array_push($this->arrayCharacters, $ruth);
		array_push($this->arrayCharacters, $oseli);
		array_push($this->arrayCharacters, $tori);
		array_push($this->arrayCharacters, $sha);
		array_push($this->arrayCharacters, $shao);
		array_push($this->arrayCharacters, $asoh);
		array_push($this->arrayCharacters, $aynth);
		array_push($this->arrayCharacters, $ruby);
		array_push($this->arrayCharacters, $phia);
		array_push($this->arrayCharacters, $satoru);
		array_push($this->arrayCharacters, $amset);
		array_push($this->arrayCharacters, $tomoyo);
		array_push($this->arrayCharacters, $heiby);
		array_push($this->arrayCharacters, $lelyte);
		array_push($this->arrayCharacters, $naly);
		array_push($this->arrayCharacters, $lysthill);
		array_push($this->arrayCharacters, $rira);
		array_push($this->arrayCharacters, $koos);
		array_push($this->arrayCharacters, $jun);
		array_push($this->arrayCharacters, $ash);
		array_push($this->arrayCharacters, $lyci);
		array_push($this->arrayCharacters, $dahi);
		array_push($this->arrayCharacters, $domma);
		array_push($this->arrayCharacters, $kaele);


		//AUTRE MONDE
		$alice = new CharacterAM(
			"_Alice",
			"",
			"Alice",
			17,
			0,
			"Female",
			"15/06",
			"Otaku",
			"Defined by player",
			"Defined by player",
			array("_Yume" => "Potential girlfriend"),
			"She is an highschool girl who spend most of her time reading books and comics. She was teleported at Kerga while at the library.",
			"Player's character. She's lebian",
			array("https://cloud.refsheet.net/images/images/000/121/621/large/Alice_ref_-g.png?1532115662", "https://cloud.refsheet.net/images/images/000/121/625/large/alice.png?1532115730", "https://cloud.refsheet.net/images/images/000/121/626/large/alice_%282%29.png?1532115731"),
			"https://cloud.refsheet.net/images/images/000/121/627/medium/alice_pic.PNG?1532115776",
			"Righthanded",
			"Defined by player",
			"Replique",
			"None",
			"None",
			"None",
			"None",
			true
		);


		$izumo = new CharacterAM(
			"_Izumo",
			"",
			"Izumo",
			10,
			0,
			"Female",
			"18/01",
			"Android",
			"Her stuffed animals, lying.",
			"The heat",
			array("_Vea" => "Adoptive Sister"),
			"She's an android, no one knows why she was created and who built her.",
			"",
			array("https://cloud.refsheet.net/images/images/000/121/789/large/Izumo_ref_-g.png?1532184799", "https://cloud.refsheet.net/images/images/000/121/790/large/Izumo.png?1532184828", "https://cloud.refsheet.net/images/images/000/121/791/large/Izumo_a.png?1532184829"),
			"https://cloud.refsheet.net/images/images/000/121/792/medium/izumo_pic.PNG?1532184847",
			"Righthanded",
			"",
			"Guns",
			"Mithril's Tange",
			"Leather bandana",
			"Leather clothings",
			"None",
			true
		);

		$nwet = new CharacterAM(
			"_Nwet",
			"",
			"Nwet",
			21,
			0,
			"Male",
			"25/08",
			"Deamon",
			"Fox, travelling",
			"Hypocrisy",
			array(),
			"He came from Aros, he lived in a poor family and fighted a lot, his two scars, one in the face, one on the right arm, came from there.",
			"He is bisexual.",
			array("https://cloud.refsheet.net/images/images/000/121/735/large/Newt_ref_-g.png?1532169528", "https://cloud.refsheet.net/images/images/000/121/736/large/newt.png?1532169550", "https://cloud.refsheet.net/images/images/000/121/737/large/Newt_%282%29.png?1532169550"),
			"https://cloud.refsheet.net/images/images/000/121/738/medium/nwet_pic.PNG?1532169571",
			"Lefthanded",
			"Self Assured and dynamic",
			"Runic Sword",
			"Shield of the dragon",
			"Helm of the dragon",
			"Elementary cap",
			"Warior amulet",
			true
		);

		$shu = new CharacterAM(
			"_Shu",
			"",
			"Shu",
			25,
			0,
			"Male",
			"12/07",
			"Unknow",
			"His family, suits, help people.",
			"\"HE\" , have to bother people.",
			array(),
			"",
			"He is an ally of the games's heroes.
					He was transformed into a Teddy Bear. He is smart.",
			array("https://cloud.refsheet.net/images/images/000/121/823/large/Shu_ref_-_g.png?1532191069", "https://cloud.refsheet.net/images/images/000/121/826/large/ours_humain.png?1532191091", "https://orig00.deviantart.net/e99b/f/2018/277/5/e/shu_human_face_by_suzanfrogg-dcok0ad.png"),
			"https://cloud.refsheet.net/images/images/000/121/827/medium/shu_pic.PNG?1532191100",
			"Unknow",
			"Unknow",
			"Unknow",
			"Unknow",
			"Unknow",
			"Unknow",
			"Unknow",
			false
		);

		$tulki = new CharacterAM(
			"_Tülki",
			"",
			"Tülki",
			19,
			0,
			"Male",
			"29/04",
			"Fox",
			"Tulips, ice cream.",
			"Snakes.",
			array(),
			"He come from the world Furid, he's a fox, one of the highest class, he never really understood how he was arrived at Kerga .",
			"He is pansexual.",
			array("https://cloud.refsheet.net/images/images/000/121/740/large/Tulki_ref_-g.png?1532171816", "https://cloud.refsheet.net/images/images/000/121/741/large/T%C3%BClki.png?1532171823", "https://cloud.refsheet.net/images/images/000/121/742/large/T%C3%BClki_%282%29.png?1532171825"),
			"https://cloud.refsheet.net/images/images/000/121/743/medium/tulki_pic.PNG?1532171846",
			"Righthanded",
			"Happy and absentminded",
			"Fox Claws",
			"Dragon's shield",
			"Silver pin",
			"Skill cape",
			"None",
			true
		);

		$vea = new CharacterAM(
			"_Vea",
			"",
			"Vea",
			223,
			0,
			"Female",
			"24/10",
			"Elf",
			"Her master, fire, use magic.",
			"Lose and all the game's hereos.",
			array("_Izumo" => "Adoptive Sister"),
			"",
			"She's an antagonist, she can use magic and is a witch.",
			array("https://cloud.refsheet.net/images/images/000/121/811/large/Vea_Ref_-g.png?1532187892", "https://cloud.refsheet.net/images/images/000/121/814/large/sorci%C3%A8re_2.png?1532187917", "https://orig00.deviantart.net/fb86/f/2018/277/6/e/vea_face_by_suzanfrogg-dcok0at.png"),
			"https://cloud.refsheet.net/images/images/000/121/816/medium/vea_pic.PNG?1532187983",
			"Unknow",
			"Unknow",
			"Unknow",
			"Unknow",
			"Unknow",
			"Unknow",
			"Unknow",
			false
		);

		$yume = new CharacterAM(
			"_Yume",
			"",
			"Yume",
			19,
			0,
			"Female",
			"29/02",
			"Cat",
			"Fish, sun, to sew.",
			"Insects.",
			array("_Alice" => "Possible girlfriend"),
			"Came from Furid world, she lived in the Mao Region and liked to sew.
				One day she buy an old Teddy Bear in a flea market and she was teleport to Kerga.",
			"She is omnisexual.",
			array("https://cloud.refsheet.net/images/images/000/121/632/large/Yume_ref_-g.png?1532118125", "https://cloud.refsheet.net/images/images/000/121/634/large/yume.png?1532118143", "https://cloud.refsheet.net/images/images/000/121/633/large/yume_%282%29.png?1532118142"),
			"https://cloud.refsheet.net/images/images/000/121/635/medium/yume_pic.PNG?1532118166",
			"Ambidextrous",
			"Sweet and gentle",
			"Cat claws",
			"None",
			"None",
			"Coton dress",
			"None",
			true
		);


		array_push($this->arrayCharacters, $alice);
		array_push($this->arrayCharacters, $izumo);
		array_push($this->arrayCharacters, $nwet);
		array_push($this->arrayCharacters, $shu);
		array_push($this->arrayCharacters, $tulki);
		array_push($this->arrayCharacters, $vea);
		array_push($this->arrayCharacters, $yume);


		//Undertale
		$leak = new CharacterUndertale(
			"_Leak",
			"",
			"Leak",
			0,
			0,
			"Female",
			"17/09",
			"Octopus",
			"Science and noodles.",
			"Carrots and be bored.",
			array(
				"Undyne" => "Friend", "Alphys" => "Friend and colleague",
				"Onionsan" => "Half Brother"
			),
			"",
			"",
			array("https://cloud.refsheet.net/images/images/000/188/883/large/Leak_Ref.png?1543074566"),
			"https://cloud.refsheet.net/images/images/000/188/882/medium/Leak_pic.png?1543074561",
			"Scientist",
			50,
			20,
			10
		);

		array_push($this->arrayCharacters, $leak);

		//Houseki No Kuni
		$citrine = new CharacterHNK(
			"_Citrine",
			"",
			"Citrine",
			0,
			172,
			"Male",
			"31/07",
			"",
			"Love and and helping peoples to find love.",
			"Rain and snakes.",
			array(),
			"",
			"He does the weedings. He's sensitive and have a cute personlity.",
			array("https://cloud.refsheet.net/images/images/000/188/966/large/Citrine_Ref.png?1543083347"),
			"https://cloud.refsheet.net/images/images/000/188/965/medium/Citrine_pic.png?1543083338",
			7
		);

		$lemonchrysoprase = new CharacterHNK(
			"Chrysoprase_Lemon",
			"Chrysoprase",
			"Lemon",
			0,
			169,
			"Male",
			"25/09",
			"",
			"Meditation and Loves' stories.",
			"Negatives feelings and assholes.",
			array(),
			"",
			"He helps to cure breaks gems, he's calm and smart. He also is an artist.",
			array("https://cloud.refsheet.net/images/images/000/188/942/large/Lemon_Chrysoprase_Ref.png?1543080348"),
			"https://cloud.refsheet.net/images/images/000/188/941/medium/Lemon_Chrysoprase_Pic.png?1543080342",
			7
		);

		array_push($this->arrayCharacters, $citrine);
		array_push($this->arrayCharacters, $lemonchrysoprase);


		//Trier 
		$arrLastName = array();
		foreach ($this->arrayCharacters as $chara) {
			array_push($arrLastName, $chara->getID());
		}
		sort($arrLastName);
		$newarray = array();
		foreach ($arrLastName as $chara) {
			array_push($newarray, $this->getCharacter($chara));
		}
		$this->arrayCharacters = $newarray;
	}




	public function getList()
	{
		return $this->arrayCharacters;
	}

	/***
Donne un oc d'après son id
	 **/
	public function getCharacter($id)
	{
		$oc = null;
		$OCs = $this->getList();
		foreach ($OCs as $o) {
			if ($o->getID() == $id) {
				$oc = $o;
			}
		}

		return $oc;
	}
}
