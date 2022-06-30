<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class ManagerRepos
{
    public static function getallclass(){
        $sql = 'select * ';
        $sql .= 'from class ';
        $sql .= 'order by name';

        return DB::select($sql);
    }
   public  static function getclassbyid($id){
        $sql = 'select * ';
        $sql .= 'from class ';
        $sql .= 'where id = ? ';

        return DB::select($sql,[$id]);
   }

   public  static function insertclass($class){
        $sql = 'insert into class ';
        $sql .= '(name, startdate, size) ';
        $sql .= 'values(?, ? ,?) ';
        $result = DB::insert($sql, [$class->name,$class->startdate,$class->size]);

        if($result){
            return DB::getPdo()->lastInsertID();
        }else{
            return -1;
        }
    }
    public  static function updateclass($class){
        $sql = 'update class ';
        $sql .= 'set name = ?, startdate = ?, size = ? ';
        $sql .= 'where id = ?';

        DB::update($sql,[$class->name,$class->startdate,$class->size,$class->id]);
    }

    public  static  function  deleteclass($id){
        $sql = 'delete from class ';
        $sql .= 'where id = ? ';

        DB::delete($sql,[$id]);
    }





    public static function getallteacher(){
        $sql = 'select * ';
        $sql .= 'from teacher ';
        $sql .= 'order by name';

        return DB::select($sql);
    }
    public  static function getteacherbyid($id){
        $sql = 'select * ';
        $sql .= 'from teacher ';
        $sql .= 'where id = ? ';

        return DB::select($sql,[$id]);
    }

    public  static function insertteacher($teacher){
        $sql = 'insert into teacher ';
        $sql .= '(name, dob, ssid) ';
        $sql .= 'values(?, ? ,?) ';
        $result = DB::insert($sql, [$teacher->name,$teacher->dob,$teacher->ssid]);

        if($result){
            return DB::getPdo()->lastInsertID();
        }else{
            return -1;
        }
    }

    public static function insertclassteacher($newid, $selectedC){
        foreach ($selectedC as $cid){
            $sql = 'insert into class_teacher ';
            $sql .= '(classid, teacherid) ';
            $sql .= 'values(?, ?) ';
            DB::insert($sql,[$cid,$newid]);
        }
    }

    public static function insertclassteacherT($newid, $selectedT){
        foreach ($selectedT as $tid){
            $sql = 'insert into class_teacher ';
            $sql .= '(classid, teacherid) ';
            $sql .= 'values(?, ?) ';
            DB::insert($sql,[$newid,$tid]);
        }
    }

    public  static function updateteacher($teacher){
        $sql = 'update teacher ';
        $sql .= 'set name = ?, dob = ?, ssid = ? ';
        $sql .= 'where id = ?';

        DB::update($sql,[$teacher->name,$teacher->dob,$teacher->ssid,$teacher->id]);
    }

    public  static function getclassbyteacherid($id){
        $sql = 'select cf.classid, c.name ';
        $sql .='from class as c ';
        $sql .='join class_teacher as cf on c.id = cf.classid ';
        $sql .= 'where cf.teacherid = ? ';
        return DB::select($sql,[$id]);
    }

    public  static function getteacherbyclassid($id){
        $sql = 'select cf.teacherid, t.name ';
        $sql .='from teacher as t ';
        $sql .='join class_teacher as cf on t.id = cf.teacherid ';
        $sql .= 'where cf.classid = ? ';
        return DB::select($sql,[$id]);
    }

    public static function deleteClassTeacherRelationship($id){
        $sql = 'delete from class_teacher ';
        $sql .='where teacherid = ? ';
        DB::delete($sql,[$id]);
    }
    public static function deleteClassTeacherRelationshipC($id){
        $sql = 'delete from class_teacher ';
        $sql .='where classid = ? ';
        DB::delete($sql,[$id]);
    }
    public  static  function  deleteteacher($id){
        $sql = 'delete from teacher ';
        $sql .= 'where id = ? ';

        DB::delete($sql,[$id]);
    }





    public static function getallstudent(){
        $sql = 'select * ';
        $sql .= 'from student ';
        $sql .= 'order by name';

        return DB::select($sql);
    }
    public  static function getstudentbyid($id){
        $sql = 'select * ';
        $sql .= 'from student ';
        $sql .= 'where id = ? ';

        return DB::select($sql,[$id]);
    }

    public  static function insertstudent($student){
        $sql = 'insert into student ';
        $sql .= '(name, email, contact,classid) ';
        $sql .= 'values(?, ? ,?,?) ';
        $result = DB::insert($sql, [$student->name,$student->email,$student->contact, $student->classid]);

        if($result){
            return DB::getPdo()->lastInsertID();
        }else{
            return -1;
        }
    }
    public  static function updatestudent($student){
        $sql = 'update student ';
        $sql .= 'set name = ?, email = ?, contact = ?, classid = ? ';
        $sql .= 'where id = ?';

        DB::update($sql,[$student->name,$student->email,$student->contact,$student->classid,$student->id]);
    }

    public  static  function  deletestudent($id){
        $sql = 'delete from student ';
        $sql .= 'where id = ? ';

        DB::delete($sql,[$id]);
    }
    public  static  function getclassbystudentid($id){
        $sql = 'select c.name as classname ';
        $sql .= 'from class as c ';
        $sql .= 'join student as s on c.id = s.classid ';
        $sql .= 'where s.id = ? ';

        return DB::select($sql,[$id]);
    }

    public static function getallstudentwithclass(){
        $sql = 'select s.*, c.name as classname ';
        $sql .='from student as s ';
        $sql .= 'join class as c on s.classid = c.id ';
        $sql .= 'order by s.name ';
        return DB::select($sql);
    }
}
