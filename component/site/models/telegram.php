<?php
defined('_JEXEC') or die;

class Railway2ModelTelegram extends JModelLegacy
{
    public $config;
    private $params, $token, $content;

    const BASE_API_URL = 'https://api.telegram.org/bot' ;

    public function __construct(array $config = array())
    {
        $this->params = JComponentHelper::getParams('com_railway2');
        $this->token = $this->params->get('API-key');
        $update = file_get_contents("php://input");
        $this->content = json_decode($update, TRUE);
        parent::__construct($config);
    }

    public function callback() {
        $rasp = JModelLegacy::getInstance('Rasp', 'Railway2Model');
        $cb = $this->content["callback_query"];
        $data = $cb['data'];
        $query = explode(' ', $data, 2);
        $chat_id = $cb['message']['chat']['id'];
        $this->setLog('in', $chat_id, $data);
        switch($query[0]) {
            case '/vizil': {
                $text = "Визиль готов. <b>И порвался</b>";
                $replyMarkup = '';
                break;
            }
            case '/cashdesc': {
                $text = $rasp->getCashDesc($query[1]);
                $replyMarkup = '';
                break;
            }
            case '/cashless': {
                $keyboard = $this->menu('cashless');
                $replyMarkup = array('reply_markup' => json_encode($keyboard));
            }
        }
        $this->sendMessage($chat_id, $text, $replyMarkup);
    }

    public function parse() {
        $rasp = JModelLegacy::getInstance('Rasp', 'Railway2Model');
        $chatId = $this->content["message"]["chat"]["id"];
        if (!empty($this->content["callback_query"])) {
            $this->callback();
        } else {
            $this->setLog('in', $chatId, $this->content["message"]["text"]);
            if ($this->content["message"]["text"] == "/start") {
                $keyboard = $this->menu();
                $replyMarkup = array('reply_markup' => json_encode($keyboard));
                $text = "Шалом";
            }
            if ($this->content["message"]["text"] == "/vizil") {
                $text = "Визиль готов. <b>И порвался</b>";
            }
            if (stripos($this->content["message"]["text"], '/station') !== false) {
                $station = explode(' ', $this->content["message"]["text"], 2);
                if (!empty($station[1])) {
                    $result = $rasp->getStation($station[1]);
                    if (empty($result)) {
                        $text = JText::_('COM_RAILWAY2_ERROR_STATION_NOT_FOUND');
                    } else {
                        $desc = $rasp->getDesc($result['id']);
                        $name = (!empty($result['popularName'])) ? $result['popularName'] : $result['name'];
                        $text = JText::_('COM_RAILWAY2_STATION')." <b>{$name}</b>, ";
                        $text .= "<b>".JText::_('COM_RAILWAY2_STATION_CODE_EXPRESS').": </b>". $result['express'].", ";
                        $text .= "<b>".JText::_('COM_RAILWAY2_STATION_CODE_ESR').": </b>". $result['esr'].", ";
                        $text .= "<b>".JText::_('COM_RAILWAY2_DIRECTION').": </b>". $result['direction'].". ";
                        if ($desc) {
                            if (count($desc) == 1 && $desc[0]['time_1'] === null && $desc[0]['time_2'] === null) {
                                $text .= JText::_('COM_RAILWAY2_STATION_DESC_NO');
                            } elseif (count($desc) >= 1 && $desc[0]['time_1'] !== null) {
                                $text .= JText::_('COM_RAILWAY2_STATION_DESC_TIME') . ': ';
                                $kassy = array();
                                foreach ($desc as $i) {
                                    $t1 = explode(':', $i['time_1']);
                                    $t2 = explode(':', $i['time_2']);
                                    $kassy[] = $t1[0] . '.' . $t1[1] . ' - ' . $t2[0] . '.' . $t2[1];
                                }
                                $text .= implode(', ', $kassy);
                                $replyMarkup = '';
                            }
                        }
                    }
                }
                else {
                    $text = JText::_('COM_RAILWAY2_STATION_HINT');
                }
            }
            if (stripos($this->content["message"]["text"], '/cashless') !== false) {
                $dir = explode(' ', $this->content["message"]["text"], 2);
                if ($dir[1] != '') {
                    $direction = $rasp->getDirectionByName($dir[1]);
                    if (!empty($direction)) {
                        $descs = $rasp->getCashless($direction);
                        $text = "<b>{$dir[1]}</b> " . JText::_('COM_RAILWAY2_DIRECTION') . '. ' . JText::_('COM_RAILWAY2_STATIONS_DESC_NO') . ': ';
                        $i = array();
                        foreach ($descs as $desc) {
                            $name = (!empty($desc['popularName'])) ? $desc['popularName'] : $desc['name'];
                            $i[] = $name;
                        }
                        $text .= implode(', ', $i);
                    } else {
                        $text = JText::_('COM_RAILWAY2_DIRECTION_NOT_FOUND');
                    }
                } else {
                    $text = JText::_('COM_RAILWAY2_DIRECTION_HINT');
                }
                $replyMarkup = '';
            }
            $this->sendMessage($chatId, $text, $replyMarkup);
        }
    }

    public function setWebHook($hookUrl)
    {
        return $this->sendPost('setWebHook', ['url' => $hookUrl]) ;
    }

    public function getUpdates()
    {
        $data = file_get_contents($this->buildUrl('getUpdates')) ;
        return json_decode($data, true) ;
    }

    public function sendMessage($chatId, $message, $params = [])
    {
        if(!is_array($params)) {
            $params = array() ;
        }

        $params['chat_id'] = $chatId ;
        $params['text'] = $message; // Telegram не понимает html-тегов
        $params['parse_mode'] = 'html';

        $url = $this->buildUrl('sendMessage').'?'.http_build_query($params) ;

        $data = file_get_contents($url) ;
        $this->setLog('out', $params['chat_id'], $params['text']);
        return json_decode($data, true) ;
    }

    /* Меню */
    private function menu($type = 'start') {
        switch($type) {
            case 'start': {
                //$inline_button1 = array("text"=>"Google url","url"=>"http://google.com");
                //$inline_button2 = array("text"=>"Порвать визиля","callback_data"=>'/vizil');
                $inline_button1 = array("text" => JText::_('COM_RAILWAY2_STATION_DESC_TIME'), "callback_data" =>'/cashless');
                $inline_button2 = array("text"=>"Порвать визиля","callback_data"=>'/vizil');
                $inline_keyboard = [[$inline_button1,$inline_button2]];
                //$inline_keyboard = array_merge($inline_button1,$inline_button2);
                $keyboard=array("inline_keyboard"=>$inline_keyboard);
                break;
            }
            case 'cashless': {
                $model = JModelLegacy::getInstance('Directions', 'Railway2Model');
                $directions = $model->getDirections();
                $il = array(array());
                foreach ($directions as $direction) {
                    $il[][] = array("text" => $direction['title'], "callback_data" => '/cashdesc '.$direction['id']);
                }

                $keyboard = array('inline_keyboard' => $il);
                break;
            }
        }
        return $keyboard;
    }

    private function sendPost($methodName, $data = [])
    {
        $result = null;

        if(is_array($data))
        {
            $ch = curl_init();
            curl_setopt($ch,CURLOPT_URL, $this->buildUrl($methodName));
            curl_setopt($ch,CURLOPT_POST, count($data));
            curl_setopt($ch,CURLOPT_POSTFIELDS, http_build_query($data));
            $result = curl_exec($ch);
            curl_close($ch);
        }

        return $result;

    }

    private function buildUrl($methodName)
    {
        return self::BASE_API_URL.$this->token.'/'.$methodName ;
    }

    public static function getInstance($type, $prefix = '', $config = array())
    {
        return parent::getInstance($type, $prefix, $config); // TODO: Change the autogenerated stub
    }
    private function setLog($type, $chat_id, $message_text) {
        $db = JFactory::getDbo();
        $query = "INSERT INTO `#__rw2_telegram` (type, chat_id, message_text) VALUES ('{$type}', '{$chat_id}', '{$message_text}')";
        $db->setQuery($query);
        $db->query();
    }
}