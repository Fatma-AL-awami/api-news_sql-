<?php

include ('../db_config.php');

class news{

    public $id;
    public $title;
    public $image;
    public $details;
    public $id_category;
    public $pdo_news;
    public $query;



    function __construct()
{
  
    $this->pdo_news=new DB_config();
   
}

function getRows()
{

$pdo=$this->pdo_news->connect();
$stat= $pdo->prepare("SELECT * FROM news_details ");
$stat->execute();
return $stat->fetchAll(PDO::FETCH_OBJ);
}
function get_one_Rows($id)
{

$pdo=$this->pdo_news->connect();
//$stat= $pdo->prepare("select from news_details where id =?");
//$stat->execute();
//return $stat->fetchAll(PDO::FETCH_OBJ);


}

function addRow($data){

}

function updateRow($id)
    {

    }

    function deleteRow($id)
    {

    }


}
?>