<?php
    require_once("block.php");
    require_once("chain.php");

    try {
        $ch = new BChain();
        $ch->addBlock(new Block(1,"Lmao"));
        $ch->addBlock(new Block(2,"Lol"));
        var_dump($ch);
        var_dump($ch->isValid());
    } catch (\Throwable $th) {
        throw $th;
    }
