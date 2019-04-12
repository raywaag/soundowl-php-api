<?php

function get_artists($name)
{
	$genre = [
        "country"=>
            "
            <img style='width:200px;height:auto;' src='https://www.usmagazine.com/wp-content/uploads/2018/04/carrie-underwood.jpg'  /> <br />
            <h3>Carrie Underwood</h3> <br /><br />

            <img style='width:200px;height:auto;' src='https://dynamicmedia.livenationinternational.com/Media/b/l/g/7354c1b7-1e3b-4742-be68-d8f1e2b12c19.jpg'  /> <br />
            <h3>Brad Paisley</h3> <br /><br />

            <img style='width:200px;height:auto;' src='https://image-ticketfly.imgix.net/00/03/09/71/32-og.jpg?w=960&h=600'  /> <br />
            <h3>Luke Combs</h3> <br /><br />

            <img style='width:200px;height:auto;' src='https://pixel.nymag.com/imgs/daily/vulture/2017/12/06/06-chris-stapleton-3.w700.h700.jpg'  /> <br />
            <h3>Chris Stapleton</h3> <br /><br />

            <img style='width:200px;height:auto;' src='https://www.rollingstone.com/wp-content/uploads/2019/02/florida-georgia-line-review.jpg?crop=900:600&width=440'  /> <br />
            <h3>Florida Georgia Line</h3> <br />
            ",

        "hiphop"=>
            "
            <img style='width:200px;height:auto;' src='https://media.gq.com/photos/5c8ef5e207a98f3722295cb8/16:9/w_1280,c_limit/j-cole-cover-gq-april-2019_social.jpg'  /> <br />
            <h3>J.Cole</h3> <br /><br />

            <img style='width:200px;height:auto;' src='https://www.gannett-cdn.com/-mm-/17f0bbc301aca5b63933268b47c3d2e371a6ed7c/c=0-36-1847-1080/local/-/media/2018/02/16/USATODAY/USATODAY/636543864788750130-AP-MUSIC-DRAKE-94859299.JPG?width=3200&height=1680&fit=crop'  /> <br />
            <h3>Drake</h3> <br /><br />

            <img style='width:200px;height:auto;' src='https://iscale.iheart.com/catalog/artist/966977'  /> <br />
            <h3>Migos</h3> <br /><br />

            <img style='width:200px;height:auto;' src='https://media.gq.com/photos/55d25378606992214f1ecc7d/16:9/w_1280,c_limit/The-Weekend-GQ-2015-01.jpg'  /> <br />
            <h3>The Weekend</h3> <br /><br />

            <img style='width:200px;height:auto;' src='https://image.advance.net/home/adv-media/width600/img/newyorkupstatecom_national_desk_blog/photo/2018/08/21/post-malone-d085d177aceffa43.jpg'  /> <br />
            <h3>Post Malone</h3> <br />",

        "classicrock"=>
            "
            <img style='width:200px;height:auto;' src='https://ewedit.files.wordpress.com/2018/01/gettyimages-693868044.jpg'  /> <br />
            Elton John <br /><br />

            <img style='width:200px;height:auto;' src='https://media.brstatic.com/2017/04/07162629/billy-joel-net-worth-mst.jpg'  /> <br />
            <h3>Billy Joel</h3> <br /><br />

            <img style='width:200px;height:auto;' src='https://www.rollingstone.com/wp-content/uploads/2018/06/queen-news-of-the-world-opener-c5bda6ed-0bdf-42c0-8d93-7b29ec5c4259.jpg?crop=900:600&width=440'  /> <br />
            <h3>Queen</h3> <br /><br />

            <img style='width:200px;height:auto;' src='http://www.alternativenation.net/wp-content/uploads/2019/03/aerosmith2019.png'  /> <br />
            <h3>Aerosmith</h3> <br /><br />

            <img style='width:200px;height:auto;' src='https://www.rollingstone.com/wp-content/uploads/2018/06/rs-218776-rexfeatures_11258b.jpg?crop=900:600&width=440'  /> <br />
            <h3>The Beatles</h3> <br />",
            
        "easylistening"=>
            "
            <img style='width:200px;height:auto;' src='https://brewminate.com/wp-content/uploads/2017/02/BingCrosby01.jpg'  /> <br />
            <h3>Bing Crosby</h3> <br /><br />

            <img style='width:200px;height:auto;' src='https://i.scdn.co/image/fc4e0f474fb4c4cb83617aa884dc9fd9822d4411'  /> <br />
            <h3>Frank Sinatra</h3> <br /><br />

            <img style='width:200px;height:auto;' src='https://iconicimages.net/app/uploads/2017/01/EC_TC001.jpg'  /> <br />
            <h3>The Carpenters</h3> <br /><br />

            <img style='width:200px;height:auto;' src='http://www.oldiesmusicblog.com/wp-content/uploads/2018/07/dean-martin.jpg'  /> <br />
            <h3>Dean Martin</h3> <br /><br />

            <img style='width:200px;height:auto;' src='https://www.billboard.com/files/styles/article_main_image/public/media/neil-diamond-nov-2016-billboard-1548.jpg'  /> <br />
            <h3>Neil Diamond</h3> <br />",

        "alternative"=>
            "
            <img style='width:200px;height:auto;' src='https://www.kerrang.com/assets/images/51463/TWENTY-ONE-PILOTS-2018_b4b62e6b8feb204f329c1700ab8c6c4a.jpg'  /> <br />
            <h3>Twenty One Pilots</h3> <br /><br />

            <img style='width:200px;height:auto;' src='https://www.rollingstone.com/wp-content/uploads/2018/11/mumford_and_sons2.jpg?crop=900:600&width=440'  /> <br />
            <h3>Mumford & Sons</h3> <br /><br />

            <img style='width:200px;height:auto;' src='https://www.grammy.com/sites/com/files/styles/image_landscape_hero/public/cage_the_elephant_hero_634966024.jpg?itok=zD1h-MsF'  /> <br />
            <h3>Cage The Elephant</h3> <br /><br />

            <img style='width:200px;height:auto;' src='https://studybreaks.com/wp-content/uploads/2018/10/young-the-giant-001.jpg'  /> <br />
            <h3>Young The Giant</h3> <br /><br />

            <img style='width:200px;height:auto;' src='https://cdn.viagogo.net/img/cat/27457/1/37.jpg'  /> <br />
            <h3>Imagine Dragons</h3> <br />"
	];
	
	foreach($genre as $genre=>$artists)
	{
		if($genre==$name)
		{
			return $artists;
			break;
		}
	}
}