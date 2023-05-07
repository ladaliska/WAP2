
<?php
    class BChain
    {
        private array $chain;
        private int $difficulty;
        public function __construct()
        {
            $this->chain = [$this->initBlock()];
            $this->difficulty = 4;
        }
        private function initBlock()
    {
        return new Block(0, "Initial Block");
    }
        public function getLastBlock()
        {
            return $this->chain[count($this->chain)-1];
        }
        public function addBlock($block)
        {
            $block->previousHash = $this->getLastBlock()->hash;
            $this->mine($block);
            array_push($this->chain, $block);
            
        }
        public function mine($block)
        {
            while (substr($block->hash, 0, $this->difficulty) !== str_repeat("0", $this->difficulty)) {
                $block->nonce++;
                $block->hash = $block->calculateHash();
            }
        }
        public function isValid()
        {
            for ($i = 1; $i < count($this->chain); $i++) {
                $currentBlock = $this->chain[$i];
                $previousBlock = $this->chain[$i-1];
    
                if ($currentBlock->hash != $currentBlock->calculateHash()) {
                    return false;
                }
    
                if ($currentBlock->previousHash != $previousBlock->hash) {
                    return false;
                }
            }
    
            return true;
        }
    }