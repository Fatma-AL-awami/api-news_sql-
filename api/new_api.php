<?php

include('../models/news.php');
$news_model=new news();

echo json_encode($news_model->getRows());

/*if(isset($_POST &&! empty($_POST))){
    //echo $_POST['title'];
    //echo $_POST['details'];
    $news_model->title=$_POST['title'];
    $news_model->detailst=$_POST['details'];

    $news_model->title=strip_tags($news_model->title);
    $news_model->details=strip_tags($news_model->details);


   if( $news_model->addRow()){
       $feedback['code']=2090;
       $feedback['message']="successfull";
   }else{
    $feedback['code']=2000;
    $feedback['message']="failed";
   }

   echo json_encode($feedback);
}
else if(isset($_GET['id'])){
    echo jason_encode($news_model->getSingleRows($_GET['id']));
}
else{
    echo jason_encode($news_model->getRows());
}*/


?>