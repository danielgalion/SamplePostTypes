<?php
namespace controllers;

class SendController {
    private $types;

    public function __construct($types)
    {
        $this->types = $types;
    }

    public function typeOnSizes($x, $y, $z) {
        $maxSize = max($x, $y, $z);
        $properType = null;

        foreach ($this->types as $type) {

            if ($type->getMaxCm() >= $maxSize) {
                $properType = $type;

                break;
            }
        }   
        
        return $properType;
    }
}