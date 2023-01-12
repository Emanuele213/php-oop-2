<?php
    trait Position {
        protected $address;

        public function getAddress($address) 
        {

            $this->address = $address;

            return $this->address;    
        }
    }