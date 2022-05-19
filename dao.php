<?php 
include "constants.php";

/*==============================================================*/
/*======================TOTAL NUMBER OF ROWS====================*/
/*==============================================================*/
function get_total_user(){  //FOR ADMIN
    $con=$GLOBALS['con']; 
    $sql="select * from table_user";
    $result=$con->query($sql);
    $r=$result->num_rows;
    return $r;
}
function get_total_category(){ //FOR CATEGORY
    $con=$GLOBALS['con']; 
    $sql="select * from table_category";
    $result=$con->query($sql);
    $r=$result->num_rows;
    return $r;
}
function get_total_food(){ //FOR FOOD
    $con=$GLOBALS['con']; 
    $sql="select* from table_food";
    $result=$con->query($sql);
    $r=$result->num_rows;
    return $r;
}
function get_total_order(){ //FOR ORDER
    $con=$GLOBALS['con']; 
    $sql="select* from table_order";
    $result=$con->query($sql);
    $r=$result->num_rows;
    return $r;
}

/*==============================================================*/
/*============================DATA FETCH========================*/
/*==============================================================*/
function get_user(){  //FOR ADMIN
    $con=$GLOBALS['con']; 
    $sql="select * from table_user";
    $result=$con->query($sql);
    $getData=array();
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            $getData[]=$row;
        }  
    }
    return $getData;
}
function get_category(){ //FOR CATEGORY
    $con=$GLOBALS['con']; 
    $sql="select * from table_category";
    $result=$con->query($sql);
    $getData=array();
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            $getData[]=$row;
        }  
    }
    return $getData;
}
function get_food(){ //FOR FOOD
    $con=$GLOBALS['con']; 
    $sql="select* from table_food";
    $result=$con->query($sql);
    $getData=array();
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            $getData[]=$row;
        }  
    }
    return $getData;
}
function get_order(){ //FOR ORDER
    $con=$GLOBALS['con']; 
    $sql="select* from table_order";
    $result=$con->query($sql);
    $getData=array();
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            $getData[]=$row;
        }  
    }
    return $getData;
}

/*==============================================================*/
/*============================FOR ADD========================*/
/*==============================================================*/
function add_user($user){ //FOR USER
    $n=$user['n'];
    $e=$user['e'];
    $c=$user['c'];
    $a=$user['a'];
    $con=$GLOBALS['con'];
    $sql="insert into table_user values(null,?,?,?,?)";
    $st=$con->prepare($sql);
    $st->bind_param("ssss",$n,$e,$c,$a);
    if($st->execute())
    {
        return 1;
    }
    else{
        return 0;
    }
}
function add_category($n){ //FOR CATEGORY
    $con=$GLOBALS['con'];
    $sql="insert into table_category values(null,?)";
    $st=$con->prepare($sql);
    $st->bind_param("s",$n);
    if($st->execute())
    {
        return 1;
    }
    else{
        return 0;
    }
}
function add_food($food){ //FOR ADMIN
    $n=$food['n'];
    $q=$food['q'];
    $p=$food['p'];
    $con=$GLOBALS['con'];
    $sql="insert into table_food values(null,?,?,?)";
    $st=$con->prepare($sql);
    $st->bind_param("ssi",$n,$q,$p);
    if($st->execute())
    {
        return 1;
    }
    else{
        return 0;
    }
}
/*==============================================================*/
/*============================FOR DELETE========================*/
/*==============================================================*/
function delete_user($id){ //FOR ADMIN
    $con=$GLOBALS['con'];
    $sql="delete from table_user where id=?";
    $st=$con->prepare($sql);
    $st->bind_param("i",$id);
    if($st->execute())
    {
        return 1;
    }
    else{
        return 0;
    }
}
function delete_category($id) //FOR CATEGORY
{
    $con=$GLOBALS['con'];
    $sql="delete from table_category where id=?";
    $st=$con->prepare($sql);
    $st->bind_param("i",$id);
    if($st->execute())
    {
        return 1;
    }
    else{
        return 0;
    }
}
function delete_food($id) // FOR FOOD
{
    $con=$GLOBALS['con'];
    $sql="delete from table_food where id=?";
    $st=$con->prepare($sql);
    $st->bind_param("i",$id);
    if($st->execute())
    {
        return 1;
    }
    else{
        return 0;
    }
}
/*==============================================================*/
/*============================FOR GETING ROW========================*/
/*==============================================================*/
function get_row_cat($id){ //FOR CATEGORY
    $con=$GLOBALS['con']; 
    $sql="select * from table_category where id=$id";
    $result=$con->query($sql);
    if($result->num_rows>0){
        $row=$result->fetch_assoc();
    } 
    return $row;
}
function get_row_food($id){ //FOR FOOD
    $con=$GLOBALS['con']; 
    $sql="select * from table_food where id=$id";
    $result=$con->query($sql);
    if($result->num_rows>0){
        $row=$result->fetch_assoc();
    } 
    return $row;
}
/*==============================================================*/
/*============================FOR UPDATE========================*/
/*==============================================================*/
function update_cat($m){ //FOR CATEGORY
    $n=$m['n'];
    $id=$m['id'];
    $con=$GLOBALS['con']; 
    $sql="update table_category set name=? where id=?";
    $st=$con->prepare($sql);
    $st->bind_param("si",$n,$id);
    if($st->execute())
    {
        return 1;
    }
    else{
        return 0;
    }
}
function update_food($m){ //FOR CATEGORY
    $n=$m['n'];
    $id=$m['id'];
    $q=$m['q'];
    $p=$m['p'];
    $con=$GLOBALS['con']; 
    $sql="update table_food set name=?,quantity=?,price=? where id=?";
    $st=$con->prepare($sql);
    $st->bind_param("sssi",$n,$q,$p,$id);
    if($st->execute())
    {
        return 1;
    }
    else{
        return 0;
    }
}
?>