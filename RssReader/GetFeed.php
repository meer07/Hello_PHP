<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class GetFeed
{
    public function getFeed()
    {
        $url = "http://feed.rssad.jp/rss/gigazine/rss_2.0";
        $xml = simplexml_load_file($url);
        $parsed_feed = $this->parseFeed($xml);
        $json = $this->makeJson($parsed_feed);
        var_dump($json);
    }
    
    private function parseFeed($xml)
    {
        $feed = [];
        try {
            foreach ($xml->channel->item as $item)
            {
                array_push($feed, [$item->title, $item->description]);
            }
            var_dump($feed);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        
        return $feed;
    }
    
    private function makeJson($feed_array)
    {
        return json_encode($feed_array);
    }
}
