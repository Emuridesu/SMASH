<?php

class CharaDAO
{
    public function __construct($pdo){
        $this->pdo = $pdo;
    }

    public function charaId()
    {
        $sql = "select id,name from chara";
        $stmt = $this->pdo->query($sql);
        $stmt->execute();
        $charaId = $stmt->fetchAll();
        return $charaId;

    }
    public function selectById($course_id)
    {
        $sql = "select co.id,co.title course_title,ca.title category_title
        from courses co left join categories ca 
        on co.category_id = ca.id
        where co.id=:id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":id",$course_id,PDO::PARAM_INT);
        $stmt->execute();
        
        $course = $stmt->fetch();
        return $course;
    }
}
?>