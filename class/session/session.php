<?php
    class Session {
        private $attributs = [];

        // Ici on peux appeller $key -> $Attribut et $value -> $valeureCorrespondante
        public function add($key, $valeur){
        }

        public function update($key, $valeur){
        }

        public function exist($key){
        }

        public function remove($key){
        }

        public function __set($name, $value)
        {
            $this->attributs[$name] = $value;
        }

        public function __get($name)
        {
            return $this->attributs[$name];
        }

        public function __isset($name)
        {
            return isset($this->attributs[$name]);
        }

        public function __unset($name)
        {
            unset($this->attributs[$name]);
        }
    }
?>