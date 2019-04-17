<?php
    class session {
        public $attribute = [];

        public function __construct()
        {
        }
        // Ici on peux appeller $key -> $Attribut et $value -> $valeureCorrespondante
        public function __set($key, $value)
        {
            $this->attribute[$key]=$value;
        }

        public function __get($key)
        {
            return $this->attribute[$key];
        }

        public function addSession($key, $value)
        {
            $this->attribute[$key] = $value;
        }

        public function updateSession($key, $value)
        {
             $this->attribute[$key] = $value;
        }

        public function getAttribute()
        {
            return $this->attribute;
        }



    }
?>