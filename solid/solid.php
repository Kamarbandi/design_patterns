<?php

class Order
{
    public function calculateTotalSum(){/*...*/}
    public function getItems(){/*...*/}
    public function getItemCount(){/*...*/}
    public function addItem($item){/*...*/}
    public function deleteItem($item){/*...*/}
}

class OrderViewer
{
    public function printOrder($order){/*...*/}
    public function showOrder($order){/*...*/}
}

class OrderRepository
{
    private $source;

    public function setSource(IOrderSource $source)
    {
        $this->source = $source;
    }

    public function load($orderID)
    {
        return $this->source->load($orderID);
    }
    public function save($order){/*...*/}
    public function update($order){/*...*/}
}

interface IOrderSource
{
    public function load($orderID);
    public function save($order);
    public function update($order);
    public function delete($order);
}

class MySQLOrderSource implements IOrderSource
{
    public function load($orderID){
        return 'Data from Mysql'.$orderID;
    }
    public function save($order){/*...*/}
    public function update($order){/*...*/}
    public function delete($order){/*...*/}
}

class ApiOrderSource implements IOrderSource
{
    public function load($orderID){
        return 'Data from API  '.$orderID;

    }
    public function save($order){/*...*/}
    public function update($order){/*...*/}
    public function delete($order){/*...*/}
}

$a = new OrderRepository();
$b = new MySQLOrderSource();
$a->setSource($b);
var_dump($a->load(1));