<?php
include_once ROOT.'/models/News.php';

class NewsController
{
    public function actionIndex()
    {
        $newList=array();
        $newList=News::getNewsList();
        require_once (ROOT.'/views/news/index.php');
        return true;

    }
    public function actionView($id)
    {
        $newItem=News::getNewsItemById($id);
        print_r($newItem);

        return true;


    }
}
