<?php

require_once 'youtube_key.php';


$videos = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId='.$video_id.'&maxResults=50&key='.$api_key.''));


foreach($videos->items as $item){ 
   
    if(ISSET($item->id->videoId)){
?>
		<div style="float:left; width:250px; margin:20px;">
			<center><h5><?php echo $item->snippet->title ?></h5></center>
			<br />
			<center><iframe width="230" height="180" src="https://www.youtube.com/embed/<?php echo $item->id->videoId ?>" frameborder="0" allowfullscreen></iframe></center>
		</div>
<?php	
       
    }
}

?>