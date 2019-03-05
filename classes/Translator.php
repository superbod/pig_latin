<?php
/**
 * Created by PhpStorm.
 * User: Пользователь
 * Date: 3/5/2019
 * Time: 3:11 AM
 */

class Translator
{
    /**
     * @var string
     */
    private $rule2;

    /**
     * @var string
     */
    private $rule3;

    /**
     * Translator constructor.
     * @param string $rule2
     * @param string $rule3
     */
    public function __construct($rule2, $rule3)
    {
        $this->rule2 = $rule2;
        $this->rule3 = $rule3;
    }

    /**
     * @param $sentence
     * @return string
     */
    public function translateSentence($sentence){
        $arSentence = preg_split("/[\s]+/", $sentence);
        $pigText = array();

        foreach ($arSentence as $word) {
            $pigText[] = $this->translateWord($word);
        }

        return implode(" ", $pigText);
    }

    /**
     * @param $word
     * @return string
     */
    public function translateWord($word){

        $delimiter = $this->removeDelimiters($word);

        $upperCase = ctype_upper(substr($word, 0, 1));
        $word = strtolower($word);

        if($this->rule3 === "without-e") {
            $lastСhar = substr($word, -1);
            if($lastСhar === 'e') {
                $word = substr($word, 0, -1);
            }
        }


        preg_match('/^(?i:[bcdfghjklmnpqrstvwxyz]*)/',$word,$matches);
        if(!empty($matches[0])){
            $tail = str_replace("$matches[0]", "", $word);
            $res = "{$tail}{$matches[0]}ay";
        } else {
            $res = "{$word}{$this->rule2}";
        }

        return ($upperCase ? ucfirst($res) : $res).$delimiter ;
    }

    private function removeDelimiters(&$word) {
        $delimiter = substr($word, -1);
        if($delimiter == "." || $delimiter == ",") {
            $word = substr($word, 0, -1);
        } else {
            $delimiter = '';
        }

        return $delimiter;
    }
}