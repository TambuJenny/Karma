<?php

class ConnectionBd
{

    function DbConnection()
    {
        $con = new mysqli('localhost', 'root', '', 'karma');

        return  $con;
    }

    function DbQuerySimples($con, $table, $filter, $value)
    {

        if($filter == "" && $value == "" )
            $query = "SELECT * FROM `$table`" ;
        else 
            $query = "SELECT * FROM `$table` WHERE `$filter` = '$value' ";  

        $executeQuery = mysqli_query($con, $query);

        return $executeQuery;
    }
}
