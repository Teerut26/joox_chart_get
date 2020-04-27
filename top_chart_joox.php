<?php
//นำไฟล์ simple_html_dom.php มาทำงาน
include('simple_html_dom.php');

//กำหนด url ของ chart
$url2 = $_GET['url'];
 

$html = file_get_html($url2);
$title = file_get_html($url2);

//echo $title->find('title', 0)->plaintext;

//เลือกตำแหน่งแสดงชื่อ chart และวันที่ update

$date = $html->find('h1[class="jsx-2798837085 title"]',0);
$update = $html->find('p[class="jsx-2798837085 subTitle"]',0);

//เลือกตำแหน่งชื่อเพลงใน Chart

$list = $html->find('div[class="jsx-3617357167 body"]',0);
$list_array = $list->find('b[class="jsx-2493651356 SongName"]');

//เลือกตำแหน่งชื่อเพลงแบบเต็มใน Chart

$artist = $html->find('div[class="jsx-647827193 PageWrap"]',0);
$artist_array = $artist->find('div[class="jsx-2342508451 jsx-1241753679 SongListItem noselect"]');

//แสดงชื่อ chart และวันที่ update
echo $date;
echo $update;

echo "<h2>ชื่อเพลง</h2>";
//แสดงชื่อเพลงใน Chart
for ($i=0; $i < sizeof($list_array); $i++ ) { 
    echo $list_array[$i]->plaintext;
    echo "<br>";
}

echo "<br>";
echo "<h2>ชื่อเพลงแบบเต็ม</h2>";
//แสดงชื่อเพลงแบบเต็มใน Chart
for ($i=0; $i < sizeof($artist_array); $i++ ) { 
    echo $artist_array[$i]->plaintext;
    echo "<br>";
}
?>