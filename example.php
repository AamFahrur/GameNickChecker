<?php
/*
Game Nickname Checker
Full API Documentation
https://maupedia.com
https://member.maupedia.com/page/api/game-validation
Lets Disqus:
https://forum.maupedia.com
Will Update More Soon
*/
header('Content-Type: application/json');
require('src/class.php');

$GameCheck = new NicknameChecker('your_maupedia_apiid', 'your_maupedia_apikey', 'your_maupedia_secretkey');

//Example
echo $GameCheck->MobileLegends('<userID>', '<zoneID>');
echo $GameCheck->FreeFire('<gameID>');
echo $GameCheck->CallOfDuty('<openID>');
echo $GameCheck->LifeAfter('<gameID>', '<ServerName>');
echo $GameCheck->ArenaOfValor('<gameID>');
echo $GameCheck->HiggsDomino('<gameID>');
echo $GameCheck->SpeedDrifters('<gameID>');
echo $GameCheck->MarvelSuperWar('<gameID>');
echo $GameCheck->ShellFire('<gameID>', '<ServerName>');
echo $GameCheck->Lokapala('<gameID>');
echo $GameCheck->Memories('<gameID>');
echo $GameCheck->PointBlank('<gameID>');
echo $GameCheck->CodeAtma('<gameID>');
echo $GameCheck->AtlanticaOnline('<gameID>');
echo $GameCheck->LostSagaOrigin('<gameID>', '<ServerName>');
echo $GameCheck->PerfectWorld('<gameID>', '<ServerName>');
echo $GameCheck->RagnarokForeverLove('<gameID>', '<ServerName>');
echo $GameCheck->RFClassic('<gameID>', '<ServerName>');
echo $GameCheck->RFRemastered('<gameID>', '<ServerName>');
echo $GameCheck->RagnarokXNextGeneration('<gameID>');
echo $GameCheck->RagnarokRetro('<gameID>');
echo $GameCheck->AngelSquad('<gameID>');

//Example With json_encode
echo json_encode($GameCheck->MobileLegends('161307989', '2244'));
echo json_encode($GameCheck->FreeFire('1250078552'));
echo json_encode($GameCheck->CallOfDuty('243402956362890880'));
echo json_encode($GameCheck->LifeAfter('23235326', 'Obelisk'));
echo json_encode($GameCheck->ArenaOfValor('1784903180879005'));