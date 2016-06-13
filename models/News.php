<?php
class News{
    public static function getNewsItemById($id){
        $id =intval($id);

        if($id){
            $db=DB::getConnection();
            $result=$db->query('select * from news WHERE id='.$id);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $newItem=$result->fetch();
            return $newItem;
        }
    }

    public static function getNewsList(){
        $db=DB::getConnection();
        $newsList=array();
        $result=$db->query('select id, title,date,short_content from news ORDER by DATE DESC limit 10');
        $i=0;
        while($row=$result->fetch()){
            $newsList[$i]['id']=$row['id'];
            $newsList[$i]['title']=$row['title'];
            $newsList[$i]['date']=$row['date'];
            $newsList[$i]['short_content']=$row['short_content'];
            $i++;
        }
        return $newsList;
    }
}