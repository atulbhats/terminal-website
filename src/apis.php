<?php

	$op=isset($_REQUEST['op'])?$_REQUEST['op']:null;

	if($op!=null){

		switch($op){
			case 'weather': getweather()
						break;
			case 'news': getnews()
						break;
			case 'dic': getmeaning()
						break;
		}

		function getnews(){
			$topic=isset($_REQUEST['topic'])?$_REQUEST['topic']:null;

			if($topic==null){
				echo 'Topic Error';
			}
			else{
				/*
				Add API here and return the Weather
				*/
				echo 'API Not Setup.';
			}
		}

		function getmeaning(){
			$wrd=isset($_REQUEST['wrd'])?$_REQUEST['wrd']:null;

			if($wrd==null){
				echo 'word Error';
			}
			else{
				/*
				Add API here and return the Weather
				*/
				echo 'API Not Setup.';
			}
		}

		function getweather(){
			$loc=isset($_REQUEST['loc'])?$_REQUEST['loc']:null;

			if($loc==null){
				echo 'Location Error';
			}
			else{
				/*
				Add API here and return the Weather
				*/
				echo 'API Not Setup.';
			}
		}

	}

?>