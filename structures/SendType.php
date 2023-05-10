<?php
namespace structures;

class SendType {
    private string $type;
    private int $maxCm;
    
    public function __construct($type, $maxCm)
    {
        $this->type = $type;
        if ($maxCm > 0) {
            $this->maxCm = $maxCm;
        }        
    }

    public function getType() {
        return $this->type;
    }

    public function getMaxCm() {
        return $this->maxCm;
    }
}