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
class NicknameChecker
{
    private $id;
    private $key;
    private $secret;

    public function __construct($id, $key, $secret)
    {
        $this->id = $id;
        $this->key = $key;
        $this->secret = $secret;
    }

    public function MobileLegends($id, $zone)
    {
        return $this->connectPost(['game' => 'MobileLegends', 'id' => $id, 'zone' => $zone]);
    }

    public function FreeFire($id)
    {
        return $this->connectPost(['game' => 'FreeFire', 'id' => $id]);
    }

    public function CallOfDuty($id)
    {
        return $this->connectPost(['game' => 'CODMobile', 'id' => $id]);
    }

    public function LifeAfter($id, $zone)
    {
        return $this->connectPost(['game' => 'LifeAfter', 'id' => $id, 'zone' => $zone]);
    }

    public function ArenaOfValor($id)
    {
        return $this->connectPost(['game' => 'AOV', 'id' => $id]);
    }

    public function HiggsDomino($id)
    {
        return $this->connectPost(['game' => 'HiggsDomino', 'id' => $id]);
    }

    public function SpeedDrifters($id)
    {
        return $this->connectPost(['game' => 'SpeedDrifters', 'id' => $id]);
    }

    public function MarvelSuperWar($id)
    {
        return $this->connectPost(['game' => 'MarvelSuperWar', 'id' => $id]);
    }

    public function ShellFire($id, $zone)
    {
        return $this->connectPost(['game' => 'ShellFire', 'id' => $id, 'zone' => $zone]);
    }

    public function Lokapala($id)
    {
        return $this->connectPost(['game' => 'Lokapala', 'id' => $id]);
    }

    public function Memories($id)
    {
        return $this->connectPost(['game' => 'Memories', 'id' => $id]);
    }

    public function PointBlank($id)
    {
        return $this->connectPost(['game' => 'PointBlank', 'id' => $id]);
    }

    public function CodeAtma($id)
    {
        return $this->connectPost(['game' => 'CodeAtma', 'id' => $id]);
    }

    public function AtlanticaOnline($id)
    {
        return $this->connectPost(['game' => 'AtlanticaOnline', 'id' => $id]);
    }

    public function LostSagaOrigin($id, $zone)
    {
        return $this->connectPost(['game' => 'LostSagaOrigin', 'id' => $id, 'zone' => $zone]);
    }

    public function PerfectWorld($id, $zone)
    {
        return $this->connectPost(['game' => 'PerfectWorld', 'id' => $id, 'zone' => $zone]);
    }

    public function RagnarokForeverLove($id, $zone)
    {
        return $this->connectPost(['game' => 'RagnarokForeverLove', 'id' => $id, 'zone' => $zone]);
    }

    public function RFClassic($id, $zone)
    {
        return $this->connectPost(['game' => 'RFClassic', 'id' => $id, 'zone' => $zone]);
    }

    public function RFRemastered($id, $zone)
    {
        return $this->connectPost(['game' => 'RFRemastered', 'id' => $id, 'zone' => $zone]);
    }

    public function RagnarokXNextGeneration($id)
    {
        return $this->connectPost(['game' => 'RagnarokXNextGeneration', 'id' => $id]);
    }

    public function RagnarokRetro($id)
    {
        return $this->connectPost(['game' => 'RagnarokRetro', 'id' => $id]);
    }

    public function AngelSquad($id)
    {
        return $this->connectPost(['game' => 'AngelSquad', 'id' => $id]);
    }

    //Update more soon

    public function connectPost($postdata, $reqout = 'decode')
    {
        $end_point = 'https://api.maupedia.com/v1/game-validation';
        $postdata['key'] = $this->key;
        $postdata['sign'] = sha1($this->id . $this->key);
        $postdata['secret'] = $this->secret;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $end_point);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $chresult = curl_exec($ch);
        curl_close($ch);
        return ($reqout == 'decode') ? json_decode($chresult, true) : $chresult;
    }
}
