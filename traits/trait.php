<?php
trait Log{
    protected function msg($smg){
        echo "{$smg}\n";
    }
}

class Table{
    use Log;

    public function save(){
        $this->msg('start save');
    }
}
class Person{
    use Log;

    public function name($name){
        $this->msg($name);
    }
}

(new Table())->save();
(new Person())->name('Kyaw Zin');