<?php


class DrawingManager
{
	private $_arrayDrawing;

	public function __construct()
	{
		$this->_arrayDrawing = array();

		/*
		$drawing = new Drawing(number, array(chara), artist, artistlink, event,fanart, fanartlink, year, month, link);
		array_push($this->_arrayDrawing, $drawing);

		$drawing = new Drawing(number, array(chara), "", "", "","", "", year, month, link);
		array_push($this->_arrayDrawing, $drawing);
		*/

		//Sans Dates
		$drawing = new Drawing(2, array("_Laly"), "PonetteDeFeu", "https://twitter.com/PonetteDeFeu", "", "", "", null, "", "https://orig00.deviantart.net/a429/f/2018/279/7/3/dh2b_zdwaaarxer_by_suzanfrogg-dcoq1r9.jpg");
		array_push($this->_arrayDrawing, $drawing);

		$drawing = new Drawing(3, array("_Jun", "Hona_Satory"), "laulo821", "https://www.deviantart.com/laulo821", "", "", "", null, "", "https://img00.deviantart.net/0570/i/2018/279/3/1/jun__satoru_by_suzanfrogg-dcoq1pg.jpg");
		array_push($this->_arrayDrawing, $drawing);

		$drawing = new Drawing(4, array("_Jun"), "laulo821", "https://www.deviantart.com/laulo821", "", "", "", null, "", "https://pre00.deviantart.net/a959/th/pre/i/2018/279/1/b/jun_sakura_by_suzanfrogg-dcoq1p9.jpg");
		array_push($this->_arrayDrawing, $drawing);

		$drawing = new Drawing(5, array("_Jun"), "laulo821", "https://www.deviantart.com/laulo821", "", "", "", null, "", "https://orig00.deviantart.net/aeb8/f/2018/279/2/2/jun_by_laulo821_dchew09_by_suzanfrogg-dcoq1oo.png");
		array_push($this->_arrayDrawing, $drawing);

		$drawing = new Drawing(6, array("_Sally"), "NewkrisVertino", "https://twitter.com/NewkrisVertino", "", "", "", null, "", "https://pbs.twimg.com/media/Dh6RgZSV4AAqgf3.jpg");
		array_push($this->_arrayDrawing, $drawing);

		$drawing = new Drawing(7, array("Letha_Kaële"), "PonetteDeFeu", "https://twitter.com/PonetteDeFeu", "", "", "", null, "", "https://pre00.deviantart.net/8d20/th/pre/i/2018/279/3/0/1534880586984_by_suzanfrogg-dcoq89o.jpg");
		array_push($this->_arrayDrawing, $drawing);

		$drawing = new Drawing(8, array("_Amset", "_Jun"),  "laulo821", "https://www.deviantart.com/laulo821", "", "", "", null, "", "https://orig00.deviantart.net/1000/f/2018/287/e/a/junset_r18_by_suzanfrogg-dcpevc6.jpg", true);
		array_push($this->_arrayDrawing, $drawing);

		$drawing = new Drawing(9, array("_Amset", "_Jun"),  "laulo821", "https://www.deviantart.com/laulo821", "", "", "", null, "", "https://orig00.deviantart.net/682d/f/2018/294/7/f/junset_dodo_by_suzanfrogg-dcpz305.jpg");
		array_push($this->_arrayDrawing, $drawing);

		$drawing = new Drawing(10, array("_Amset", "_Jun"),  "laulo821", "https://www.deviantart.com/laulo821", "", "", "", null, "", "https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/intermediary/f/2ad3a17d-3aa5-4d5f-887b-70cac5663cd9/dcsuka7-9a13070e-0728-4716-bb1f-281d606dfa35.jpg/v1/fill/w_665,h_1202,q_70,strp/junset_is_pregnant_by_suzanfrogg_dcsuka7-pre.jpg");
		array_push($this->_arrayDrawing, $drawing);

		$drawing = new Drawing(11, array("_Amset", "_Jun"),  "laulo821", "https://www.deviantart.com/laulo821", "", "", "", null, "", "https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/intermediary/f/2ad3a17d-3aa5-4d5f-887b-70cac5663cd9/dcts4tr-41e5573b-2270-43db-afb0-3e43d2caacdd.jpg/v1/fill/w_882,h_906,q_70,strp/junsetfleur_by_suzanfrogg_dcts4tr-pre.jpg");
		array_push($this->_arrayDrawing, $drawing);

		$drawing = new Drawing(12, array("_Jun"),  "laulo821", "https://www.deviantart.com/laulo821", "", "", "", null, "", "https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/intermediary/f/2ad3a17d-3aa5-4d5f-887b-70cac5663cd9/dcts4v5-467c256b-c5da-4453-84e8-fd1401b9a75a.jpg/v1/fill/w_792,h_1009,q_70,strp/jun_fleurs_by_suzanfrogg_dcts4v5-pre.jpg");
		array_push($this->_arrayDrawing, $drawing);

		//Dates

		$drawing = new Drawing(1, array("_Sally"), "", "", "", "", "", 2018, "", "https://pre00.deviantart.net/87ab/th/pre/f/2018/205/e/9/sally_qui_les_des_yaoi_by_suzanfrogg-dci4qxq.jpg");
		array_push($this->_arrayDrawing, $drawing);

		$drawing = new Drawing(1, array("Dass_Nyaomie", "Ewana_Tomoyo"), "", "", "", "", "", 2018, "Junary", "https://pre00.deviantart.net/b910/th/pre/i/2018/011/b/c/tomoyo_x_nyaomie_by_suzanfrogg-dbzo1ne.png");
		array_push($this->_arrayDrawing, $drawing);

		$drawing = new Drawing(1, array("_Laly"), "", "", "", "", "", 2018, "February", "https://img00.deviantart.net/f420/i/2018/047/3/6/laly_by_suzanfrogg-dc3c02l.png");
		array_push($this->_arrayDrawing, $drawing);

		$drawing = new Drawing(2, array("Lewis_Mary"), "", "", "", "", "", 2018, "February", "https://pre00.deviantart.net/19d6/th/pre/i/2018/052/2/b/mary_by_suzanfrogg-dc3v8gc.png");
		array_push($this->_arrayDrawing, $drawing);

		$drawing = new Drawing(1, array("_Izumo", "_Alice", "_Yume", "_Nwet", "_Tülki"), "", "", "", "", "", 2018, "March", "https://orig00.deviantart.net/b020/f/2018/069/1/8/allchara_by_suzanfrogg-dc5gxuv.png");
		array_push($this->_arrayDrawing, $drawing);

		$drawing = new Drawing(1, array("_Laly"), "", "", "", "", "", 2018, "April", "https://pre00.deviantart.net/cc29/th/pre/i/2018/101/4/6/laly_by_suzanfrogg-dc8ip55.png");
		array_push($this->_arrayDrawing, $drawing);

		$drawing = new Drawing(1, array("Nina_Saki"), "", "", "", "", "", 2018, "June", "https://pre00.deviantart.net/3612/th/pre/i/2018/164/f/3/__video_saki_by_suzanfrogg-dcead68.png");
		array_push($this->_arrayDrawing, $drawing);

		$drawing = new Drawing(1, array("Shido_Sera", "Shido_Akio", "_Sally", "_Laly", "_Jack", "Hona_Satoru", "Merry_Heiby", "_Jun", "Nina_Saki", "Dass_Nyaomie", "Ewana_Tomoyo", "Lewis_Mary"), "", "", "", "", "", 2018, "July", "https://img00.deviantart.net/5700/i/2018/191/d/c/mes_oc__3_by_suzanfrogg-dcgss77.png");
		array_push($this->_arrayDrawing, $drawing);

		$drawing = new Drawing(2, array("Ewana_Tomoyo"), "", "", "", "", "", 2018, "July", "https://pre00.deviantart.net/8109/th/pre/i/2018/192/9/c/tomoyo_by_suzanfrogg-dcgx24i.png");
		array_push($this->_arrayDrawing, $drawing);

		$drawing = new Drawing(3, array("Merry_Heiby"), "", "", "", "", "", 2018, "July", "https://pre00.deviantart.net/21a6/th/pre/i/2018/204/c/9/heiby_by_suzanfrogg-dchr73g.jpg");
		array_push($this->_arrayDrawing, $drawing);

		$drawing = new Drawing(4, array("Ewana_Tomoyo", "Dass_Nyaomie"), "", "", "", "", "", 2018, "July", "https://orig00.deviantart.net/06bc/f/2018/278/e/a/screenshot_20180721_004746_1_by_suzanfrogg-dcon4lc.jpg");
		array_push($this->_arrayDrawing, $drawing);

		$drawing = new Drawing(5, array("_Laly", "_Amset"), "", "", "", "", "", 2018, "July", "https://orig00.deviantart.net/06bc/f/2018/278/e/a/screenshot_20180721_004746_1_by_suzanfrogg-dcon4lc.jpg");
		array_push($this->_arrayDrawing, $drawing);

		$drawing = new Drawing(6, array("_Amset", "_Jun"), "", "", "", "", "", 2018, "July", "https://pre00.deviantart.net/b41e/th/pre/i/2018/205/f/2/amset_et_jun_en_depression_by_suzanfrogg-dci4q01.png");
		array_push($this->_arrayDrawing, $drawing);

		$drawing = new Drawing(7, array("_Naly"), "", "", "", "", "", 2018, "July", "https://pre00.deviantart.net/d609/th/pre/i/2018/208/f/7/dancing_naly_by_suzanfrogg-dciexmc.png");
		array_push($this->_arrayDrawing, $drawing);

		$drawing = new Drawing(8, array("_Ash"), "", "", "", "", "", 2018, "July", "https://pre00.deviantart.net/de07/th/pre/i/2018/209/3/7/bobybuilding_ash_by_suzanfrogg-dcii4ip.png");
		array_push($this->_arrayDrawing, $drawing);

		$drawing = new Drawing(9, array("_Amset"), "", "", "", "", "", 2018, "July", "https://img00.deviantart.net/5e6e/i/2018/210/0/9/gardening_amet__by_suzanfrogg-dcilkaa.png");
		array_push($this->_arrayDrawing, $drawing);

		$drawing = new Drawing(10, array("Hona_Satoru"), "", "", "", "", "", 2018, "July", "https://pbs.twimg.com/media/DjNE_61XgAAi1-2.jpg:large");
		array_push($this->_arrayDrawing, $drawing);

		$drawing = new Drawing(1, array("_Amset"), "", "", "", "", "", 2018, "August", "https://pre00.deviantart.net/ec8f/th/pre/f/2018/210/0/d/pp_page_fb_juillet_2018__g_by_suzanfrogg-dcim787.png");
		array_push($this->_arrayDrawing, $drawing);

		$drawing = new Drawing(2, array("_Amset", "_Laly"), "", "", "", "", "", 2018, "August", "https://pre00.deviantart.net/7793/th/pre/f/2018/218/0/a/garndeing_amset_and_laly__g_by_suzanfrogg-dcjdjry.png");
		array_push($this->_arrayDrawing, $drawing);

		$drawing = new Drawing(3, array("Letha_Kaële"), "", "", "", "", "", 2018, "August", "https://orig00.deviantart.net/f1b3/f/2018/233/5/9/banire_twitter_et_fb_perso_aout_2018__g_by_suzanfrogg-dckrzz4.png");
		array_push($this->_arrayDrawing, $drawing);

		$drawing = new Drawing(4, array("Dass_Tsyna"), "", "", "", "", "", 2018, "August", "https://img00.deviantart.net/a258/i/2018/233/a/2/tsyna_by_suzanfrogg-dcks048.png");
		array_push($this->_arrayDrawing, $drawing);

		$drawing = new Drawing(1, array("Ewana_Tomoyo", "Dass_Nyaomie", "_Naly", "_Amset", "_Jun", "_Laly", "Nina_Saki", "_Ash"), "", "", "", "", "", 2018, "September", "https://img00.deviantart.net/d9c2/i/2018/245/6/b/beach_time_by_suzanfrogg-dclt8ot.png");
		array_push($this->_arrayDrawing, $drawing);

		$drawing = new Drawing(2, array("Ewana_Tomoyo"), "", "", "", "", "", 2018, "September", "https://pre00.deviantart.net/8981/th/pre/i/2018/278/b/2/why_try___tomoyo__g_by_suzanfrogg-dcon4mk.png");
		array_push($this->_arrayDrawing, $drawing);

		$drawing = new Drawing(3, array("Ewana_Tomoyo", "Ewana_Tori", "Ewana_Domma", "Ewana_Lyci"), "", "", "", "", "", 2018, "September", "https://pre00.deviantart.net/d2de/th/pre/f/2018/266/a/4/portrais_de_famille_ewana__g_by_suzanfrogg-dcnkgfo.png");
		array_push($this->_arrayDrawing, $drawing);

		$drawing = new Drawing(4, array("Ewana_Tori"), "", "", "", "", "", 2018, "September", "https://pbs.twimg.com/media/DpaneL7XoAIesjj.jpg");
		array_push($this->_arrayDrawing, $drawing);

		$drawing = new Drawing(5, array("Nina_Saki"), "", "", "", "", "", 2018, "September", "https://pbs.twimg.com/media/DpanY6rXcAEqx0U.jpg");
		array_push($this->_arrayDrawing, $drawing);

		$drawing = new Drawing(6, array("Lewis_Ruby", "Lewis_Mary"), "", "", "", "", "", 2018, "September", "https://pbs.twimg.com/media/DpanbfRXcAA9gbL.jpg");
		array_push($this->_arrayDrawing, $drawing);

		$drawing = new Drawing(1, array("_Naly"), "", "", "Inktober", "Hatsune Miku", "https://vocaloid.fandom.com/wiki/Hatsune_Miku", 2018, "October", "https://pre00.deviantart.net/f892/th/pre/i/2018/287/4/a/p_20181014_001336_1_by_suzanfrogg-dcpegih.jpg");
		array_push($this->_arrayDrawing, $drawing);

		$drawing = new Drawing(2, array("_Sha"), "", "", "", "", "", 2018, "October", "https://pre00.deviantart.net/69ab/th/pre/f/2018/279/6/c/let_s_start_by_suzanfrogg-dcoqg6m.png");
		array_push($this->_arrayDrawing, $drawing);

		$drawing = new Drawing(3, array("_Amset"), "", "", "", "", "", 2018, "October", "https://pbs.twimg.com/media/DpAfr38XUAAKeTY.jpg:large");
		array_push($this->_arrayDrawing, $drawing);

		$drawing = new Drawing(4, array("Letha_Kaële"), "", "", "", "", "", 2018, "October", "https://pre00.deviantart.net/a743/th/pre/f/2018/284/d/5/genderbend_kale__g_by_suzanfrogg-dcp6br1.png");
		array_push($this->_arrayDrawing, $drawing);

		$drawing = new Drawing(5, array("Hona_Dahi"), "", "", "", "", "", 2018, "October", "https://pbs.twimg.com/media/Dpe67gDXcAAw6zA.jpg:large");
		array_push($this->_arrayDrawing, $drawing);

		$drawing = new Drawing(6, array("Lewis_Ruby"), "", "", "", "", "", 2018, "October", "https://66.media.tumblr.com/d374fa78f138534d2fda40970cc43199/tumblr_pguv23JLQn1xqee2jo1_1280.png");
		array_push($this->_arrayDrawing, $drawing);

		$drawing = new Drawing(7, array("_Ash"), "", "", "Inktober", "Mikasa Arckerman", "https://attaque-des-titans.fandom.com/fr/wiki/Mikasa_Ackerman", 2018, "October", "https://pre00.deviantart.net/4cae/th/pre/i/2018/287/a/0/p_20181014_003300_by_suzanfrogg-dcpeghi.jpg");
		array_push($this->_arrayDrawing, $drawing);

		$drawing = new Drawing(8, array("Nina_Saki"), "", "", "Inktober", "Undertaker", "https://kuroshitsuji.fandom.com/fr/wiki/Undertaker", 2018, "October", "https://pre00.deviantart.net/47c1/th/pre/i/2018/287/8/8/p_20181014_011145_1_by_suzanfrogg-dcpeggw.jpg");
		array_push($this->_arrayDrawing, $drawing);

		$drawing = new Drawing(9, array("Hona_Satoru"), "", "", "Inktober", "Victor", "https://yuri-on-ice.fandom.com/fr/wiki/Victor_Nikiforov", 2018, "October", "https://pre00.deviantart.net/55a9/th/pre/i/2018/287/6/4/p_20181014_014447_1_by_suzanfrogg-dcpegga.jpg");
		array_push($this->_arrayDrawing, $drawing);

		$drawing = new Drawing(10, array("_Sha"), "", "", "Inktober", "Echo", "https://mochijun.fandom.com/wiki/Echo", 2018, "October", "https://pre00.deviantart.net/7f16/th/pre/i/2018/287/4/0/p_20181014_023143_1_by_suzanfrogg-dcpegfu.jpg");
		array_push($this->_arrayDrawing, $drawing);

		$drawing = new Drawing(11, array("Sera_Akio"), "", "", "Inktober", "Uta", "https://tokyoghoul.fandom.com/fr/wiki/Uta", 2018, "October", "https://pre00.deviantart.net/711c/th/pre/i/2018/287/b/a/p_20181014_024618_by_suzanfrogg-dcpeges.jpg");
		array_push($this->_arrayDrawing, $drawing);

		$drawing = new Drawing(12, array("Merry_Miranda"), "", "", "Inktober", "Nausicaä", "https://nausicaa.fandom.com/wiki/Nausicaä", 2018, "October", "https://pre00.deviantart.net/f55c/th/pre/i/2018/287/3/0/p_20181014_113305_1_by_suzanfrogg-dcpege4.jpg");
		array_push($this->_arrayDrawing, $drawing);

		$drawing = new Drawing(13, array("_Jack"), "", "", "Inktober", "Aoba", "https://dmmd.fandom.com/wiki/Aoba_Seragaki", 2018, "October", "https://pre00.deviantart.net/eb4a/th/pre/i/2018/287/8/a/p_20181014_123901_1_by_suzanfrogg-dcpegdr.jpg");
		array_push($this->_arrayDrawing, $drawing);

		$drawing = new Drawing(14, array("_Laly"), "", "", "Inktober", "Tsuyu", "https://myheroacademia.fandom.com/wiki/Tsuyu_Asui", 2018, "October", "https://pre00.deviantart.net/4315/th/pre/i/2018/287/f/7/p_20181014_125555_1_by_suzanfrogg-dcpegd7.jpg");
		array_push($this->_arrayDrawing, $drawing);

		$drawing = new Drawing(15, array("Nina_Rira"), "", "", "Inktober", "Edward Elric", "https://fullmetalalchemist.fandom.com/fr/wiki/Edward_Elric#Manga_", 2018, "October", "https://pbs.twimg.com/media/DqBucceX4AAzj6W.jpg:large");
		array_push($this->_arrayDrawing, $drawing);

		$drawing = new Drawing(16, array("Dass_Tsyna"), "", "", "Inktober", "Ram", "https://rezero.fandom.com/wiki/Ram", 2018, "October", "https://pbs.twimg.com/media/Dqym_3_WsAUWQpc.jpg");
		array_push($this->_arrayDrawing, $drawing);

		$drawing = new Drawing(1, array("_Ash", "_Naly", "_Amset", "Nina_Saki", "Nina_Rira", "Shido_Akio", "Shido_Sera"), "", "", "", "", "", 2018, "November", "https://img00.deviantart.net/6a4b/i/2018/319/5/7/nina_s_squad_by_suzanfrogg-dcs2n6y.png");
		array_push($this->_arrayDrawing, $drawing);

		$drawing = new Drawing(2, array("_Jun"), "", "", "", "", "", 2018, "November", "https://pbs.twimg.com/media/Dr1deCbW4AEEUkm.jpg:large");
		array_push($this->_arrayDrawing, $drawing);

		$drawing = new Drawing(1, array("_Sally"), "", "", "", "", "", 2018, "December", "https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/intermediary/f/2ad3a17d-3aa5-4d5f-887b-70cac5663cd9/dcubyj8-03d89001-e8bc-41d8-8051-7235e2b723b9.png/v1/fill/w_743,h_1075,q_70,strp/sally_csp_by_suzanfrogg_dcubyj8-pre.jpg");
		array_push($this->_arrayDrawing, $drawing);

		$drawing = new Drawing(2, array("Hona_Ama", "Hona_Aynth", "Hona_Lysthill", "Hona_Yth"), "", "", "", "", "", 2018, "December", "https://pbs.twimg.com/media/DvW0SVrX0AITTO3.jpg:large");
		array_push($this->_arrayDrawing, $drawing);

		$drawing = new Drawing(3, array("_Sha"), "", "", "", "", "", 2018, "December", "https://pbs.twimg.com/media/Dv1SP14X4AET1Ta.jpg");
		array_push($this->_arrayDrawing, $drawing);

		$drawing = new Drawing(4, array("_Amset"), "", "", "", "", "", 2018, "December", "https://pbs.twimg.com/media/DvLj1jJXcAAOv6y.jpg");
		array_push($this->_arrayDrawing, $drawing);

		$drawing = new Drawing(1, array("Dass_Nyaomie"), "", "", "", "", "", 2019, "Junary", "https://pbs.twimg.com/media/DwPB31jX0AAD6pO.jpg");
		array_push($this->_arrayDrawing, $drawing);

		$drawing = new Drawing(2, array("Merry_Smo"), "", "", "", "", "", 2019, "Junary", "https://pbs.twimg.com/media/DwPB6q9WsAEbjsb.jpg");
		array_push($this->_arrayDrawing, $drawing);

		$drawing = new Drawing(1, array("Merry_Heiby"), "", "", "", "", "", 2019, "February", "https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/intermediary/f/2ad3a17d-3aa5-4d5f-887b-70cac5663cd9/dd0or1c-6c4f492a-5a24-4365-9e12-8ef26f59ce32.png");
		array_push($this->_arrayDrawing, $drawing);

		$drawing = new Drawing(1, array("_Amset"), "", "", "", "", "", 2019, "March", "https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/2ad3a17d-3aa5-4d5f-887b-70cac5663cd9/dd1rcjn-df4f793d-ccf4-4d91-8423-84cba9b41102.png/v1/fill/w_1192,h_670,strp/new_banire__mars_2019_bone_dimensions_by_suzanfrogg_dd1rcjn-pre.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9NzIwIiwicGF0aCI6IlwvZlwvMmFkM2ExN2QtM2FhNS00ZDVmLTg4N2ItNzBjYWM1NjYzY2Q5XC9kZDFyY2puLWRmNGY3OTNkLWNjZjQtNGQ5MS04NDIzLTg0Y2JhOWI0MTEwMi5wbmciLCJ3aWR0aCI6Ijw9MTI4MCJ9XV0sImF1ZCI6WyJ1cm46c2VydmljZTppbWFnZS5vcGVyYXRpb25zIl19.LnoN2HXQqx7RD73mCtQi42CzTVGBAlujVbgpQb_ygas");
		array_push($this->_arrayDrawing, $drawing);


		$drawing = new Drawing(1, array("_Naly"), "", "", "", "", "", 2019, "April", "https://pbs.twimg.com/media/D5PxUh3W0AEdsjN.jpg");
		array_push($this->_arrayDrawing, $drawing);

		$drawing = new Drawing(2, array("Ewana_Tomoyo", "Dass_Nyaomie"), "", "", "event", "", "", 2019, "April", "https://pbs.twimg.com/media/D5BDa40WkAAPEz_.jpg");
		array_push($this->_arrayDrawing, $drawing);

		$drawing = new Drawing(3, array("_Ash"), "", "", "", "", "", 2019, "April", "https://pbs.twimg.com/media/D5ABVO_XsAEpVzD.jpg");
		array_push($this->_arrayDrawing, $drawing);

		$drawing = new Drawing(4, array("_Naly"), "", "", "", "", "", 2019, "April", "https://pbs.twimg.com/media/D3O80UKXsAAR2Zh.jpg:large");
		array_push($this->_arrayDrawing, $drawing);



		//Trier 
		$arrID = array();
		foreach ($this->_arrayDrawing as $chara) {
			array_push($arrID, $chara->getID());
		}
		rsort($arrID);
		$newarray = array();
		foreach ($arrID as $chara) {
			array_push($newarray, $this->getDrawing($chara));
		}
		$this->_arrayDrawing = $newarray;
	}

	/***
	Récupère la liste des dessins
	 */
	public function getList()
	{
		return $this->_arrayDrawing;
	}

	/***
	Donne un dessin d'après son id
	 **/
	public function getDrawing($id)
	{
		$drawing = null;
		$lst_drawing = $this->getList();
		foreach ($lst_drawing as $dra) {
			if ($dra->getID() == $id) {
				$drawing = $dra;
			}
		}

		return $drawing;
	}
}
