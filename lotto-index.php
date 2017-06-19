<?php
 $i = 0;
 $url = "https://www.lottery.co.th/lotto/feed";
 $rss = simplexml_load_file($url); // XML parser
 print '<h2><img style="vertical-align: middle;" src="'.$rss->channel->image->url.'" /> '.$rss->channel->title.'</h2>';
 foreach($rss->channel->item as $item) {
 if ($i < 10) { // parse only 10 items
 print '<h3><a href="'.$item->link.'" title="'.$item->title.'">'.$item->title.'</a></h3><br />'.$item->description.'';
 }
 $i++;
 }
 ?>
