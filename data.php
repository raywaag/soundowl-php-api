<?php

function get_artists($name)
{
	$genre = [
        "country"=>
            "Carrie Underwood <br />
            Brad Paisley <br />
            Luke Combs <br />
            Chris Stapleton <br />
            Florida Georgia Line <br />",
        "hiphop"=>
            "J.Cole <br />
            Drake <br />
            Migos <br />
            The Weekend <br />
            Post Malone <br />",
        "classicrock"=>
            "Elton John <br />
            Billy Joel <br />
            Queen <br />
            Aerosmith <br />
            The Beatles <br />",
        "easylistening"=>
            "Bing Crosby <br />
            Frank Sinatra <br />
            The Carpenters <br />
            Dean Martin <br />
            Neil Diamond <br />",
        "alternative"=>
            "Twenty One Pilots <br />
            Mumford & Sons <br />
            Cage The Elephant <br />
            Young The Giant <br />
            Imagine Dragons <br />"
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