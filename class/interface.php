<?php
interface Runnable{
    public function run();
}

class Rabbit implements Runnable{
    public function run()
    {
        echo "I am run";
    }
}