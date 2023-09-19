<?php
date_default_timezone_set('Asia/Shanghai');
$name = $_REQUEST['game'];
if (empty($name)) return '';

$timeData = time()*1000;
$matchTime  = date('Y-m-d',strtotime('1 day'));

switch ($name)
{
    case 'BF':
        $getWay = 'https://live.nowscore.com/data/bf.js?'.$timeData;
        break;
    case 'FT':
        $getWay = 'https://live.nowscore.com/data/ft1.js?'.$timeData;
        break;
    case 'GMC':
        $getWay     = 'https://live.nowscore.com/data/change.xml?'.$timeData;
        break;
    case 'GMC2':
        $getWay     = 'https://live.nowscore.com/data/ch_goalbf3.xml?'.$timeData;
        break;
    case 'ODDS':
        $getWay     = 'https://live.nowscore.com/data/sbOddsData.js?matchdate='.$matchTime;
        break;
    case 'GTO':
        $getWay     = 'https://live.nowscore.com/1x2/TomorrowOdds.htm?matchdate='.$matchTime;
        break;
    case 'GTO2':
        $matchId    = $_REQUEST['matchId'];
        $getWay     = 'https://live.nowscore.com/odds/3in1Odds.aspx?companyid=3&id='.$matchId.'&t=1';
        break;
    case 'MSC':
        $getWay     = 'https://live.nowscore.com/data/sc1.js?'.$timeData;
        break;
    case 'MSC2':
        $getWay     = 'http://score.nowscore.com/data/sc2.js?'.$timeData;
        break;
    case 'TSC':
        $getWay     = 'http://score.nowscore.com/data/sc3.js?'.$timeData;
        break;
    case 'TSC2':
        $getWay     = 'http://score.nowscore.com/data/sc4.js?'.$timeData;
        break;
    default:
        $getWay = '';
        break;

}
// var_dump($getWay);die;
$response = file_get_contents($getWay);
echo $response;

