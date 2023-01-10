<?php

class Guvenlik {
    
    private $value;
    private $type;
    private $result;

    public function __construct($value, $type) {
        $this->value = $value;
        $this->type = $type;
    }

    public function sanitize() {
        switch ($this->type) {
            case 'string':
                $result = filter_var($this->value, FILTER_SANITIZE_STRING);
            break;
            case 'float':
                $result = filter_var($this->value, FILTER_SANITIZE_NUMBER_FLOAT);
            break;
            case 'integer':
                $result = filter_var($this->value, FILTER_SANITIZE_NUMBER_INT);
            break;
            case 'url':
                $result = filter_var($this->value, FILTER_SANITIZE_URL);
            break;
            case 'email':
                $result = filter_var($this->value, FILTER_SANITIZE_EMAIL);
            break;
        }
        $this->result = $result;
        return $this;
    }

    public function validate() {
        if (empty($this->result)) {
            $value = $this->value;
        } else {
            $value = $this->result;
        }
        switch ($this->type) {
            case 'boolean':
                $this->result = filter_var($value, FILTER_VALIDATE_BOOLEAN) == true ? true : false;
            break;
            case 'float':
                $this->result = filter_var($value, FILTER_VALIDATE_FLOAT) == true ? true : false;
            break;
            case 'integer':
                $this->result = filter_var($value, FILTER_VALIDATE_INT) == true ? true : false;
            break;
            case 'ip':
                $this->result = filter_var($value, FILTER_VALIDATE_IP) == true ? true : false;
            break;
            case 'url':
                $this->result = filter_var($value, FILTER_VALIDATE_URL) == true ? true : false;
            break;
            case 'email':
                $this->result = filter_var($value, FILTER_VALIDATE_EMAIL) == true ? true : false;
            break;
        }
        return $this;
    }

    public function result() {
        return $this->result;
    }

}

?>