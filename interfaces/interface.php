<?php
interface TableInterface{
    public function save(array $data);
}
interface LogInterface{
    public function log($message);
}
class Table implements TableInterface,LogInterface,Countable {
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
    public function count()
    {
        // TODO: Implement count() method.
        return 12;
    }
}

echo (new Table())->save([]);
echo (new Table())->log(' interfaces are awesome');
echo (new Table())->count();