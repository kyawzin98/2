<?php
interface TableInterface{
    public function save(array $data);
}interface LogInterface{
    public function log($message);
}
class Table implements TableInterface,LogInterface {
    public function save(array $data)
    {
        // TODO: Implement save() method.
        return 'foo';
    }
    public function log($message)
    {
        // TODO: Implement log() method.
        return $message . "\n";
    }
}

echo (new Table())->save([]);
echo (new Table())->log(' interfaces are awesome');