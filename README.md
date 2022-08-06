# GameNickChecker
Check Nickname Game By ID from API MauPedia.com

Usage
---------
```php
require('src/class.php');

$GameCheck = new NicknameChecker('your_maupedia_apiid', 'your_maupedia_apikey', 'your_maupedia_secretkey');

//Example
//echo $GameCheck->MobileLegends('<userID>', '<zoneID>');
//echo $GameCheck->FreeFire('<gameID>');
//echo $GameCheck->CallOfDuty('<openID>');
//echo $GameCheck->LifeAfter('<gameID>', '<ServerName>');

echo json_encode($GameCheck->MobileLegends('161307989', '2244'));
echo json_encode($GameCheck->FreeFire('1250078552'));
echo json_encode($GameCheck->CallOfDuty('243402956362890880'));
echo json_encode($GameCheck->LifeAfter('23235326', 'Obelisk'));
```
