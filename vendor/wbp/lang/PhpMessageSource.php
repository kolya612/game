<?php


namespace wbp\lang;

use yii\i18n\MissingTranslationEvent;

class PhpMessageSource extends \yii\i18n\PhpMessageSource
{
    private $_messages = [];
    public $develop=true;


    protected function translateMessage($category, $message, $language)
    {
        $key = $language . '/' . $category;
        if (!isset($this->_messages[$key])) {
            $this->_messages[$key] = $this->loadMessages($category, $language);
        }
        if (isset($this->_messages[$key][$message]) && $this->_messages[$key][$message] !== '') {
            return $this->_messages[$key][$message];
        } elseif ($this->hasEventHandlers(self::EVENT_MISSING_TRANSLATION)) {
            $event = new MissingTranslationEvent([
                'category' => $category,
                'message' => $message,
                'language' => $language,
            ]);
            $this->trigger(self::EVENT_MISSING_TRANSLATION, $event);
            if ($event->translatedMessage !== null) {
                return $this->_messages[$key][$message] = $event->translatedMessage;
            }
        }
        
        $this->_messages[$key][$message] = false;
            
        if($this->develop && YII_DEBUG){
            $this->saveMessages($category, $language, $this->_messages[$key]);
        }

        return $this->_messages[$key][$message];
    }

    protected function saveMessages($category, $language, $messages)
    {
//        $messageFile = $this->getMessageFilePath($category, $language);
//
//        $file="<?php return [\n";
//
//        foreach ($messages as $key=>$value){
//            $file.="\t'".str_replace("'","\'", $key)."'=>'".str_replace("'","\'", $value)."',\n";
//        }
//
//        $file.="];";
//
//        return file_put_contents($messageFile, $file);
    }

}