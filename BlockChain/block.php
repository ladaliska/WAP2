<?php
class Block
{
    public $nonce;
    private int $id;
    private $timestamp;
    private string $value;
    public string $hash;

    public function __construct($id, $value, $previousHash = null)
    {
        $this->id = $id;
        $this->timestamp = time();
        $this->value = $value;
        $this->previousHash = $previousHash;
        $this->hash = $this->calculateHash();
        $this->nonce = 0;
    }

    public function calculateHash()
    {
        return hash("sha256", $this->id.$this->previousHash.$this->timestamp.((string)$this->value).$this->nonce);
    }
}